<?php include 'header.php';?>

<?php
// Advanced Sitemap Generator Class
class AdvancedSitemapGenerator {
    
    private $maxUrls = 50000; // Maximum URLs to process
    private $maxDepth = 5; // Maximum crawl depth
    private $timeout = 30; // Timeout for HTTP requests
    private $userAgent = 'Mozilla/5.0 (compatible; Advanced Sitemap Generator 2026)';
    private $excludePatterns = [];
    private $includePatterns = [];
    
    public function __construct($config = []) {
        $this->maxUrls = $config['max_urls'] ?? 50000;
        $this->maxDepth = $config['max_depth'] ?? 5;
        $this->timeout = $config['timeout'] ?? 30;
        $this->excludePatterns = $config['exclude_patterns'] ?? [];
        $this->includePatterns = $config['include_patterns'] ?? [];
    }
    
    public function crawlWebsite($startUrl, $options = []) {
        $urls = [];
        $visited = [];
        $queue = [['url' => $startUrl, 'depth' => 0]];
        
        while (!empty($queue) && count($urls) < $this->maxUrls) {
            $current = array_shift($queue);
            $url = $current['url'];
            $depth = $current['depth'];
            
            if ($depth > $this->maxDepth || in_array($url, $visited)) {
                continue;
            }
            
            $visited[] = $url;
            $pageInfo = $this->analyzePage($url);
            
            if ($pageInfo && !$this->isExcluded($url)) {
                $urls[] = $pageInfo;
                
                // Add found links to queue
                foreach ($pageInfo['links'] as $link) {
                    if (!in_array($link, $visited) && $this->isSameDomain($link, $startUrl)) {
                        $queue[] = ['url' => $link, 'depth' => $depth + 1];
                    }
                }
            }
        }
        
        return $urls;
    }
    
    public function analyzePage($url) {
        $html = $this->fetchPage($url);
        if (!$html) return null;
        
        $dom = new DOMDocument();
        @$dom->loadHTML($html);
        
        $info = [
            'url' => $url,
            'title' => $this->getPageTitle($dom),
            'description' => $this->getMetaDescription($dom),
            'keywords' => $this->getMetaKeywords($dom),
            'canonical' => $this->getCanonicalUrl($dom),
            'robots' => $this->getRobotsDirective($dom),
            'lastmod' => date('c'),
            'changefreq' => $this->guessChangeFreq($url),
            'priority' => $this->calculatePriority($url),
            'images' => $this->extractImages($dom, $url),
            'links' => $this->extractLinks($dom, $url),
            'hreflang' => $this->getHreflangLinks($dom),
            'status_code' => 200, // Assuming success if we got HTML
            'content_type' => 'text/html',
            'size' => strlen($html)
        ];
        
        return $info;
    }
    
    private function fetchPage($url) {
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => [
                    "User-Agent: {$this->userAgent}",
                    "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
                    "Accept-Language: en-US,en;q=0.5",
                    "Accept-Encoding: gzip, deflate",
                    "Connection: keep-alive"
                ],
                'timeout' => $this->timeout,
                'ignore_errors' => true
            ]
        ];
        
        $context = stream_context_create($options);
        return @file_get_contents($url, false, $context);
    }
    
    private function getPageTitle($dom) {
        $titles = $dom->getElementsByTagName('title');
        return $titles->length > 0 ? trim($titles->item(0)->textContent) : '';
    }
    
    private function getMetaDescription($dom) {
        $metas = $dom->getElementsByTagName('meta');
        foreach ($metas as $meta) {
            if (strtolower($meta->getAttribute('name')) === 'description') {
                return $meta->getAttribute('content');
            }
        }
        return '';
    }
    
    private function getMetaKeywords($dom) {
        $metas = $dom->getElementsByTagName('meta');
        foreach ($metas as $meta) {
            if (strtolower($meta->getAttribute('name')) === 'keywords') {
                return $meta->getAttribute('content');
            }
        }
        return '';
    }
    
    private function getCanonicalUrl($dom) {
        $links = $dom->getElementsByTagName('link');
        foreach ($links as $link) {
            if (strtolower($link->getAttribute('rel')) === 'canonical') {
                return $link->getAttribute('href');
            }
        }
        return '';
    }
    
    private function getRobotsDirective($dom) {
        $metas = $dom->getElementsByTagName('meta');
        foreach ($metas as $meta) {
            if (strtolower($meta->getAttribute('name')) === 'robots') {
                return $meta->getAttribute('content');
            }
        }
        return '';
    }
    
    private function extractImages($dom, $baseUrl) {
        $images = [];
        $imgs = $dom->getElementsByTagName('img');
        
        foreach ($imgs as $img) {
            $src = $img->getAttribute('src');
            if ($src) {
                $absoluteUrl = $this->makeAbsolute($src, $baseUrl);
                $images[] = [
                    'src' => $absoluteUrl,
                    'alt' => $img->getAttribute('alt'),
                    'title' => $img->getAttribute('title')
                ];
            }
        }
        
        return array_slice($images, 0, 10); // Limit to 10 images
    }
    
    private function extractLinks($dom, $baseUrl) {
        $links = [];
        $anchors = $dom->getElementsByTagName('a');
        
        foreach ($anchors as $anchor) {
            $href = $anchor->getAttribute('href');
            if ($href && !$this->isAnchorLink($href) && !$this->isJavaScriptLink($href)) {
                $absoluteUrl = $this->makeAbsolute($href, $baseUrl);
                if ($this->isSameDomain($absoluteUrl, $baseUrl)) {
                    $links[] = $absoluteUrl;
                }
            }
        }
        
        return array_unique($links);
    }
    
    private function getHreflangLinks($dom) {
        $hreflang = [];
        $links = $dom->getElementsByTagName('link');
        
        foreach ($links as $link) {
            if ($link->getAttribute('rel') === 'alternate' && $link->getAttribute('hreflang')) {
                $hreflang[] = [
                    'hreflang' => $link->getAttribute('hreflang'),
                    'href' => $link->getAttribute('href')
                ];
            }
        }
        
        return $hreflang;
    }
    
    private function guessChangeFreq($url) {
        $path = parse_url($url, PHP_URL_PATH);
        
        if (strpos($path, '/blog/') !== false || strpos($path, '/news/') !== false) {
            return 'daily';
        }
        if (strpos($path, '/products/') !== false || strpos($path, '/services/') !== false) {
            return 'weekly';
        }
        if (strpos($path, '/about') !== false || strpos($path, '/contact') !== false) {
            return 'monthly';
        }
        
        return 'weekly';
    }
    
    private function calculatePriority($url) {
        $path = parse_url($url, PHP_URL_PATH);
        
        if ($path === '/' || $path === '') return '1.0';
        if (substr_count($path, '/') === 1) return '0.8';
        if (substr_count($path, '/') === 2) return '0.6';
        
        return '0.4';
    }
    
    private function makeAbsolute($url, $base) {
        if (parse_url($url, PHP_URL_SCHEME) !== null) return $url;
        
        $baseParts = parse_url($base);
        $scheme = $baseParts['scheme'];
        $host = $baseParts['host'];
        $port = isset($baseParts['port']) ? ':' . $baseParts['port'] : '';
        
        if (strpos($url, '//') === 0) {
            return $scheme . ':' . $url;
        }
        
        if (strpos($url, '/') === 0) {
            return $scheme . '://' . $host . $port . $url;
        }
        
        $path = isset($baseParts['path']) ? rtrim(dirname($baseParts['path']), '/') : '';
        return $scheme . '://' . $host . $port . $path . '/' . $url;
    }
    
    private function isSameDomain($url1, $url2) {
        return parse_url($url1, PHP_URL_HOST) === parse_url($url2, PHP_URL_HOST);
    }
    
    private function isAnchorLink($url) {
        return strpos($url, '#') === 0;
    }
    
    private function isJavaScriptLink($url) {
        return strpos($url, 'javascript:') === 0;
    }
    
    private function isExcluded($url) {
        foreach ($this->excludePatterns as $pattern) {
            if (strpos($url, $pattern) !== false) {
                return true;
            }
        }
        return false;
    }
    
    public function generateXMLSitemap($pages, $options = []) {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
        $xml .= '        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"' . "\n";
        $xml .= '        xmlns:xhtml="http://www.w3.org/1999/xhtml">' . "\n";
        
        foreach ($pages as $page) {
            $xml .= "\t<url>\n";
            $xml .= "\t\t<loc>" . htmlspecialchars($page['url']) . "</loc>\n";
            $xml .= "\t\t<lastmod>" . $page['lastmod'] . "</lastmod>\n";
            $xml .= "\t\t<changefreq>" . $page['changefreq'] . "</changefreq>\n";
            $xml .= "\t\t<priority>" . $page['priority'] . "</priority>\n";
            
            // Add images if any
            foreach ($page['images'] as $image) {
                if (!empty($image['src'])) {
                    $xml .= "\t\t<image:image>\n";
                    $xml .= "\t\t\t<image:loc>" . htmlspecialchars($image['src']) . "</image:loc>\n";
                    if (!empty($image['title'])) {
                        $xml .= "\t\t\t<image:title>" . htmlspecialchars($image['title']) . "</image:title>\n";
                    }
                    if (!empty($image['alt'])) {
                        $xml .= "\t\t\t<image:caption>" . htmlspecialchars($image['alt']) . "</image:caption>\n";
                    }
                    $xml .= "\t\t</image:image>\n";
                }
            }
            
            // Add hreflang if any
            foreach ($page['hreflang'] as $hreflang) {
                $xml .= "\t\t<xhtml:link rel=\"alternate\" hreflang=\"" . htmlspecialchars($hreflang['hreflang']) . "\" href=\"" . htmlspecialchars($hreflang['href']) . "\"/>\n";
            }
            
            $xml .= "\t</url>\n";
        }
        
        $xml .= "</urlset>";
        return $xml;
    }
}

// Function to get all links from a URL (legacy support)
function crawl_page($url, $depth, $maxDepth, $maxUrls, &$urls = []) {
    if ($depth > $maxDepth || count($urls) >= $maxUrls) {
        return $urls;
    }

    $options = [
        'http' => [
            'method' => "GET",
            'header' => "User-Agent: Mozilla/5.0 (compatible; XML Sitemap Generator)\r\n"
        ]
    ];
    $context = stream_context_create($options);
    
    $html = @file_get_contents($url, false, $context);
    if ($html === false) {
        return $urls;
    }

    $dom = new DOMDocument();
    @$dom->loadHTML($html);
    $links = $dom->getElementsByTagName('a');

    $currentHost = parse_url($url, PHP_URL_HOST);
    
    foreach ($links as $link) {
        $href = $link->getAttribute('href');
        
        // Skip if empty, anchor, or javascript
        // if (empty($href) continue;
        // if (strpos($href, '#') === 0) continue;
        // if (strpos($href, 'javascript:') === 0) continue;
        
        // Convert relative URLs to absolute
        $href = rel2abs($href, $url);
        
        // Skip if not same domain
        $hrefHost = parse_url($href, PHP_URL_HOST);
        if ($hrefHost !== $currentHost) continue;
        
        // Skip if already processed
        if (in_array($href, $urls)) continue;
        
        // Add to URLs array
        $urls[] = $href;
        
        // Recursive crawl
        crawl_page($href, $depth + 1, $maxDepth, $maxUrls, $urls);
    }
    
    return $urls;
}

// Function to convert relative URL to absolute
function rel2abs($rel, $base) {
    if (parse_url($rel, PHP_URL_SCHEME) != '') return $rel;
    if ($rel[0] == '#' || $rel[0] == '?') return $base.$rel;
    
    $baseParts = parse_url($base);
    $path = isset($baseParts['path']) ? preg_replace('#/[^/]*$#', '', $baseParts['path']) : '';
    
    if ($rel[0] == '/') $path = '';
    
    $abs = $baseParts['scheme'].'://'.$baseParts['host'].$path.'/'.$rel;
    
    return preg_replace('#(?<!:)/+#', '/', $abs);
}

// Enhanced form handling
$sitemap = '';
$sitemapIndex = '';
$robotsTxt = '';
$error = '';
$success = '';
$pageAnalysis = [];
$urlCount = 0;
$processingTime = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $startTime = microtime(true);
    
    $websiteUrl = rtrim($_POST['website_url'], '/');
    $maxUrls = intval($_POST['max_urls'] ?? 50000);
    $maxDepth = intval($_POST['max_depth'] ?? 5);
    $excludePatterns = array_filter(explode("\n", $_POST['exclude_patterns'] ?? ''));
    $includeImages = isset($_POST['include_images']);
    $includeHreflang = isset($_POST['include_hreflang']);
    $generateRobotsTxt = isset($_POST['generate_robots_txt']);
    $outputFormat = $_POST['output_format'] ?? 'xml';
    
    if (!filter_var($websiteUrl, FILTER_VALIDATE_URL)) {
        $error = 'Please enter a valid URL (e.g., https://example.com)';
    } elseif ($maxUrls < 1 || $maxUrls > 50000) {
        $error = 'Maximum URLs must be between 1 and 50,000';
    } elseif ($maxDepth < 1 || $maxDepth > 10) {
        $error = 'Maximum depth must be between 1 and 10';
    } else {
        try {
            // Initialize advanced sitemap generator
            $generator = new AdvancedSitemapGenerator([
                'max_urls' => $maxUrls,
                'max_depth' => $maxDepth,
                'exclude_patterns' => $excludePatterns
            ]);
            
            // Crawl website
            $pageAnalysis = $generator->crawlWebsite($websiteUrl);
            $urlCount = count($pageAnalysis);
            
            if ($urlCount === 0) {
                $error = 'No pages found or website is not accessible. Please check the URL and try again.';
            } else {
                // Generate XML sitemap
                $sitemap = $generator->generateXMLSitemap($pageAnalysis, [
                    'include_images' => $includeImages,
                    'include_hreflang' => $includeHreflang
                ]);
                
                // Generate sitemap index if many URLs
                if ($urlCount > 1000) {
                    $sitemapIndex = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
                    $sitemapIndex .= '<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
                    
                    $chunks = array_chunk($pageAnalysis, 1000);
                    foreach ($chunks as $i => $chunk) {
                        $sitemapIndex .= "\t<sitemap>\n";
                        $sitemapIndex .= "\t\t<loc>" . $websiteUrl . "/sitemap" . ($i + 1) . ".xml</loc>\n";
                        $sitemapIndex .= "\t\t<lastmod>" . date('c') . "</lastmod>\n";
                        $sitemapIndex .= "\t</sitemap>\n";
                    }
                    
                    $sitemapIndex .= '</sitemapindex>';
                }
                
                // Generate robots.txt
                if ($generateRobotsTxt) {
                    $robotsTxt = "User-agent: *\n";
                    $robotsTxt .= "Allow: /\n\n";
                    $robotsTxt .= "# Sitemap\n";
                    $robotsTxt .= "Sitemap: " . $websiteUrl . "/sitemap.xml\n";
                    
                    if (!empty($sitemapIndex)) {
                        $robotsTxt .= "Sitemap: " . $websiteUrl . "/sitemap-index.xml\n";
                    }
                }
                
                $processingTime = round(microtime(true) - $startTime, 2);
                $success = "Successfully generated sitemap with {$urlCount} URLs in {$processingTime} seconds!";
            }
        } catch (Exception $e) {
            $error = 'Error generating sitemap: ' . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced XML Sitemap Generator - Professional SEO Tool | Thiyagi</title>
    <meta name="description" content="Advanced XML sitemap generator with image support, hreflang detection, SEO analysis, and comprehensive website crawling. Professional SEO tool for webmasters.">
    <meta name="keywords" content="XML sitemap generator, SEO sitemap, website crawler, sitemap.xml creator, hreflang sitemap, image sitemap, SEO analysis">
    <meta name="author" content="Thiyagi">
    <link rel="canonical" href="https://livedu.in/sitemap-generator.php">
    
    <!-- Open Graph tags -->
    <meta property="og:title" content="Advanced XML Sitemap Generator - Professional SEO Tool">
    <meta property="og:description" content="Generate comprehensive XML sitemaps with image support, hreflang detection, and SEO analysis for better search engine indexing.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://livedu.in/sitemap-generator.php">
    <meta property="og:site_name" content="Thiyagi">
    <meta property="og:image" content="https://livedu.in/images/sitemap-generator-og.jpg">
    
    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Advanced XML Sitemap Generator">
    <meta name="twitter:description" content="Professional sitemap generator with advanced SEO features">
    <meta name="twitter:image" content="https://livedu.in/images/sitemap-generator-twitter.jpg">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Advanced XML Sitemap Generator",
        "description": "Professional XML sitemap generator with image support, hreflang detection, and SEO analysis",
        "url": "https://livedu.in/sitemap-generator.php",
        "applicationCategory": "SEO Tool",
        "operatingSystem": "Any",
        "permissions": "Free to use",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Organization",
            "name": "Thiyagi"
        }
    }
    </script>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1e40af',
                        accent: '#f59e0b'
                    }
                }
            }
        }
    </script>
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn { animation: fadeIn 0.6s ease-out; }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .result-box {
            max-height: 500px;
            overflow-y: auto;
        }
        pre {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen">
    <!-- Header Section -->
    <div class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Advanced XML Sitemap Generator</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Professional SEO tool with advanced crawling, image support, hreflang detection, and comprehensive website analysis</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Features Section -->
        <div class="grid md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Advanced Crawling</h3>
                <p class="text-sm text-gray-600">Deep website analysis up to 50,000 URLs</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Image Sitemaps</h3>
                <p class="text-sm text-gray-600">Automatic image detection and sitemap generation</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Hreflang Support</h3>
                <p class="text-sm text-gray-600">Multilingual website detection and optimization</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 00-2-2m0 0h2m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">SEO Analysis</h3>
                <p class="text-sm text-gray-600">Comprehensive page analysis and optimization tips</p>
            </div>
        </div>

        <!-- Main Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Generate Your Sitemap</h2>
            <form method="POST" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="website_url" class="block text-sm font-semibold text-gray-700 mb-2">Website URL *</label>
                        <input type="url" name="website_url" id="website_url" 
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200" 
                               placeholder="https://example.com" 
                               value="<?php echo htmlspecialchars($_POST['website_url'] ?? ''); ?>" required>
                    </div>
                    
                    <div>
                        <label for="max_urls" class="block text-sm font-semibold text-gray-700 mb-2">Maximum URLs</label>
                        <select name="max_urls" id="max_urls" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="100" <?php echo ($_POST['max_urls'] ?? '100') == '100' ? 'selected' : ''; ?>>100 URLs</option>
                            <option value="500" <?php echo ($_POST['max_urls'] ?? '') == '500' ? 'selected' : ''; ?>>500 URLs</option>
                            <option value="1000" <?php echo ($_POST['max_urls'] ?? '') == '1000' ? 'selected' : ''; ?>>1,000 URLs</option>
                            <option value="5000" <?php echo ($_POST['max_urls'] ?? '') == '5000' ? 'selected' : ''; ?>>5,000 URLs</option>
                            <option value="10000" <?php echo ($_POST['max_urls'] ?? '') == '10000' ? 'selected' : ''; ?>>10,000 URLs</option>
                            <option value="50000" <?php echo ($_POST['max_urls'] ?? '') == '50000' ? 'selected' : ''; ?>>50,000 URLs</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="max_depth" class="block text-sm font-semibold text-gray-700 mb-2">Crawl Depth</label>
                        <select name="max_depth" id="max_depth" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="1" <?php echo ($_POST['max_depth'] ?? '5') == '1' ? 'selected' : ''; ?>>1 Level</option>
                            <option value="2" <?php echo ($_POST['max_depth'] ?? '5') == '2' ? 'selected' : ''; ?>>2 Levels</option>
                            <option value="3" <?php echo ($_POST['max_depth'] ?? '5') == '3' ? 'selected' : ''; ?>>3 Levels</option>
                            <option value="5" <?php echo ($_POST['max_depth'] ?? '5') == '5' ? 'selected' : ''; ?>>5 Levels (Recommended)</option>
                            <option value="7" <?php echo ($_POST['max_depth'] ?? '5') == '7' ? 'selected' : ''; ?>>7 Levels</option>
                            <option value="10" <?php echo ($_POST['max_depth'] ?? '5') == '10' ? 'selected' : ''; ?>>10 Levels (Deep)</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="output_format" class="block text-sm font-semibold text-gray-700 mb-2">Output Format</label>
                        <select name="output_format" id="output_format" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="xml" <?php echo ($_POST['output_format'] ?? 'xml') == 'xml' ? 'selected' : ''; ?>>XML Sitemap</option>
                            <option value="txt" <?php echo ($_POST['output_format'] ?? '') == 'txt' ? 'selected' : ''; ?>>Text List</option>
                            <option value="csv" <?php echo ($_POST['output_format'] ?? '') == 'csv' ? 'selected' : ''; ?>>CSV Export</option>
                        </select>
                    </div>
                </div>
                
                <div>
                    <label for="exclude_patterns" class="block text-sm font-semibold text-gray-700 mb-2">Exclude Patterns (one per line)</label>
                    <textarea name="exclude_patterns" id="exclude_patterns" rows="3" 
                              class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                              placeholder="/wp-admin/
/private/
.pdf"><?php echo htmlspecialchars($_POST['exclude_patterns'] ?? ''); ?></textarea>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" name="include_images" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500" <?php echo isset($_POST['include_images']) ? 'checked' : ''; ?>>
                        <span class="text-sm font-medium text-gray-700">Include Image Sitemap</span>
                    </label>
                    
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" name="include_hreflang" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500" <?php echo isset($_POST['include_hreflang']) ? 'checked' : ''; ?>>
                        <span class="text-sm font-medium text-gray-700">Include Hreflang</span>
                    </label>
                    
                    <label class="flex items-center space-x-3 cursor-pointer">
                        <input type="checkbox" name="generate_robots_txt" class="w-5 h-5 text-blue-600 rounded focus:ring-blue-500" <?php echo isset($_POST['generate_robots_txt']) ? 'checked' : ''; ?>>
                        <span class="text-sm font-medium text-gray-700">Generate robots.txt</span>
                    </label>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-lg transform transition duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Generate Advanced Sitemap
                </button>
            </form>
        </div>
        
        <!-- Error Message -->
        <?php if (!empty($error)): ?>
            <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-6 mb-8 animate-fadeIn">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-lg font-semibold text-red-800">Error</h3>
                        <p class="text-red-700"><?php echo htmlspecialchars($error); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- Success Message -->
        <?php if (!empty($success)): ?>
            <div class="bg-green-50 border-l-4 border-green-500 rounded-lg p-6 mb-8 animate-fadeIn">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-lg font-semibold text-green-800">Success!</h3>
                        <p class="text-green-700"><?php echo htmlspecialchars($success); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($sitemap)): ?>
            <!-- Statistics -->
            <div class="grid md:grid-cols-4 gap-6 mb-8">
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="text-3xl font-bold text-blue-600"><?php echo number_format($urlCount); ?></div>
                    <div class="text-sm text-gray-600 mt-1">URLs Discovered</div>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="text-3xl font-bold text-green-600"><?php echo $processingTime; ?>s</div>
                    <div class="text-sm text-gray-600 mt-1">Processing Time</div>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="text-3xl font-bold text-purple-600">
                        <?php 
                        $imageCount = 0;
                        foreach ($pageAnalysis as $page) {
                            $imageCount += count($page['images']);
                        }
                        echo number_format($imageCount);
                        ?>
                    </div>
                    <div class="text-sm text-gray-600 mt-1">Images Found</div>
                </div>
                <div class="bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="text-3xl font-bold text-orange-600">
                        <?php 
                        $hreflangCount = 0;
                        foreach ($pageAnalysis as $page) {
                            $hreflangCount += count($page['hreflang']);
                        }
                        echo number_format($hreflangCount);
                        ?>
                    </div>
                    <div class="text-sm text-gray-600 mt-1">Hreflang Links</div>
                </div>
            </div>
            
            <!-- Tabs -->
            <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                <div class="border-b border-gray-200">
                    <nav class="flex space-x-8 px-6">
                        <button class="tab-btn border-b-2 border-blue-500 text-blue-600 py-4 px-1 text-sm font-medium active" onclick="showTab('sitemap')">
                            XML Sitemap
                        </button>
                        <?php if (!empty($sitemapIndex)): ?>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-4 px-1 text-sm font-medium" onclick="showTab('sitemap-index')">
                            Sitemap Index
                        </button>
                        <?php endif; ?>
                        <?php if (!empty($robotsTxt)): ?>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-4 px-1 text-sm font-medium" onclick="showTab('robots')">
                            Robots.txt
                        </button>
                        <?php endif; ?>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-4 px-1 text-sm font-medium" onclick="showTab('analysis')">
                            SEO Analysis
                        </button>
                    </nav>
                </div>
                
                <!-- XML Sitemap Tab -->
                <div id="sitemap" class="tab-content active p-6">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-xl font-bold text-gray-800">Generated XML Sitemap</h3>
                        <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">
                            <?php echo number_format($urlCount); ?> URLs
                        </span>
                    </div>
                    
                    <div class="result-box bg-gray-50 p-4 rounded-lg border border-gray-200 mb-6">
                        <pre class="text-gray-800 text-sm" id="sitemap-content"><?php echo htmlspecialchars($sitemap); ?></pre>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-4">
                        <a href="data:application/xml;charset=utf-8,<?php echo urlencode($sitemap); ?>" download="sitemap.xml" 
                           class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-3 px-6 rounded-lg text-center transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download XML
                        </a>
                        <button onclick="copyToClipboard('sitemap-content')" 
                                class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            Copy XML
                        </button>
                        <button onclick="validateSitemap()" 
                                class="bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Validate
                        </button>
                    </div>
                </div>
                
                <?php if (!empty($sitemapIndex)): ?>
                <!-- Sitemap Index Tab -->
                <div id="sitemap-index" class="tab-content p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Sitemap Index File</h3>
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                        <p class="text-yellow-800">Your site has many URLs (<?php echo number_format($urlCount); ?>). Consider using multiple sitemap files.</p>
                    </div>
                    
                    <div class="result-box bg-gray-50 p-4 rounded-lg border border-gray-200 mb-6">
                        <pre class="text-gray-800 text-sm" id="sitemap-index-content"><?php echo htmlspecialchars($sitemapIndex); ?></pre>
                    </div>
                    
                    <a href="data:application/xml;charset=utf-8,<?php echo urlencode($sitemapIndex); ?>" download="sitemap-index.xml" 
                       class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200">
                        Download Sitemap Index
                    </a>
                </div>
                <?php endif; ?>
                
                <?php if (!empty($robotsTxt)): ?>
                <!-- Robots.txt Tab -->
                <div id="robots" class="tab-content p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">Generated Robots.txt</h3>
                    
                    <div class="result-box bg-gray-50 p-4 rounded-lg border border-gray-200 mb-6">
                        <pre class="text-gray-800 text-sm" id="robots-content"><?php echo htmlspecialchars($robotsTxt); ?></pre>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <a href="data:text/plain;charset=utf-8,<?php echo urlencode($robotsTxt); ?>" download="robots.txt" 
                           class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-6 rounded-lg text-center transition duration-200">
                            Download robots.txt
                        </a>
                        <button onclick="copyToClipboard('robots-content')" 
                                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200">
                            Copy Content
                        </button>
                    </div>
                </div>
                <?php endif; ?>
                
                <!-- SEO Analysis Tab -->
                <div id="analysis" class="tab-content p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6">SEO Analysis Report</h3>
                    
                    <div class="space-y-6">
                        <!-- Page Analysis -->
                        <div class="border border-gray-200 rounded-lg overflow-hidden">
                            <div class="bg-gray-50 px-4 py-3 border-b">
                                <h4 class="font-semibold text-gray-800">Page Analysis (Top 10)</h4>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">URL</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Images</th>
                                            <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php 
                                        $topPages = array_slice($pageAnalysis, 0, 10);
                                        foreach ($topPages as $page): 
                                        ?>
                                        <tr>
                                            <td class="px-4 py-4 text-sm text-gray-900">
                                                <div class="max-w-xs truncate">
                                                    <a href="<?php echo htmlspecialchars($page['url']); ?>" target="_blank" class="text-blue-600 hover:text-blue-800">
                                                        <?php echo htmlspecialchars($page['url']); ?>
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-900">
                                                <div class="max-w-xs truncate"><?php echo htmlspecialchars($page['title'] ?: 'No title'); ?></div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-900"><?php echo count($page['images']); ?></td>
                                            <td class="px-4 py-4 text-sm text-gray-900"><?php echo $page['priority']; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <!-- SEO Recommendations -->
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
                            <h4 class="font-semibold text-blue-800 mb-4">💡 SEO Recommendations</h4>
                            <ul class="space-y-2 text-blue-700">
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Upload your sitemap.xml to your website's root directory
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Submit your sitemap to Google Search Console and Bing Webmaster Tools
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Update your sitemap regularly, especially for dynamic content
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Monitor your sitemap's indexing status in search console
                                </li>
                                <?php if ($imageCount > 0): ?>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">•</span>
                                    Consider creating a separate image sitemap for better image SEO
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Info Section -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">How to Use Your Sitemap</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Upload Sitemap</h3>
                    <p class="text-gray-600">Upload sitemap.xml to your website's root directory (example.com/sitemap.xml)</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-green-600">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Submit to Search Engines</h3>
                    <p class="text-gray-600">Add your sitemap URL to Google Search Console and Bing Webmaster Tools</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Monitor & Update</h3>
                    <p class="text-gray-600">Regularly check indexing status and update your sitemap as content changes</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-lg font-semibold mb-2">Advanced XML Sitemap Generator</h3>
            <p class="text-gray-300">Professional SEO tool by Thiyagi - Free forever</p>
            <p class="text-gray-400 text-sm mt-2">Help search engines understand your website structure better</p>
        </div>
    </footer>

    <script>
        // Tab functionality
        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // Remove active class from all tab buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active', 'border-blue-500', 'text-blue-600');
                btn.classList.add('border-transparent', 'text-gray-500');
            });
            
            // Show selected tab content
            document.getElementById(tabName).classList.add('active');
            
            // Add active class to clicked tab button
            event.target.classList.remove('border-transparent', 'text-gray-500');
            event.target.classList.add('active', 'border-blue-500', 'text-blue-600');
        }
        
        // Copy to clipboard functionality
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.textContent;
            
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text).then(() => {
                    showNotification('Content copied to clipboard!', 'success');
                }).catch(err => {
                    console.error('Failed to copy: ', err);
                    fallbackCopyToClipboard(text);
                });
            } else {
                fallbackCopyToClipboard(text);
            }
        }
        
        // Fallback copy method for older browsers
        function fallbackCopyToClipboard(text) {
            const textArea = document.createElement('textarea');
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.focus();
            textArea.select();
            
            try {
                document.execCommand('copy');
                showNotification('Content copied to clipboard!', 'success');
            } catch (err) {
                showNotification('Failed to copy content', 'error');
            }
            
            document.body.removeChild(textArea);
        }
        
        // Validate sitemap
        function validateSitemap() {
            const sitemapContent = document.getElementById('sitemap-content').textContent;
            
            // Basic XML validation
            try {
                const parser = new DOMParser();
                const xmlDoc = parser.parseFromString(sitemapContent, 'text/xml');
                const parseError = xmlDoc.getElementsByTagName('parsererror');
                
                if (parseError.length > 0) {
                    showNotification('XML validation failed: Invalid XML format', 'error');
                } else {
                    const urls = xmlDoc.getElementsByTagName('url');
                    showNotification(`✓ Sitemap is valid! Found ${urls.length} URL entries`, 'success');
                }
            } catch (error) {
                showNotification('Validation error: ' + error.message, 'error');
            }
        }
        
        // Show notification
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
                type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
            }`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.style.transform = 'translateX(0)';
                notification.style.opacity = '1';
            }, 10);
            
            // Remove after 3 seconds
            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }
        
        // Form enhancements
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            form.addEventListener('submit', function() {
                submitButton.innerHTML = `
                    <svg class="w-5 h-5 animate-spin inline-block mr-2" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Processing... Please wait
                `;
                submitButton.disabled = true;
            });
            
            // Add keyboard shortcuts
            document.addEventListener('keydown', function(e) {
                // Ctrl+Enter to submit form
                if ((e.ctrlKey || e.metaKey) && e.key === 'Enter') {
                    e.preventDefault();
                    form.submit();
                }
                
                // Ctrl+C to copy sitemap when visible
                if ((e.ctrlKey || e.metaKey) && e.key === 'c' && document.getElementById('sitemap-content')) {
                    if (document.getElementById('sitemap').classList.contains('active')) {
                        e.preventDefault();
                        copyToClipboard('sitemap-content');
                    }
                }
            });
        });
    </script>
</body>

<?php include 'footer.php';?>


</html>
