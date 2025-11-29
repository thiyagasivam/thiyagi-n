<?php include 'header.php';?>

<?php
/**
 * Advanced Robots.txt Generator
 * Professional robots.txt file creator with templates, validation, and SEO optimization
 */

class AdvancedRobotsGenerator {
    private $templates = [
        'default' => [
            'name' => 'Default (Allow All)',
            'description' => 'Basic robots.txt that allows all crawlers',
            'content' => "User-agent: *\nDisallow:\n\n# Sitemap\nSitemap: {sitemap_url}"
        ],
        'restrictive' => [
            'name' => 'Restrictive',
            'description' => 'Block common sensitive areas',
            'content' => "User-agent: *\nDisallow: /admin/\nDisallow: /private/\nDisallow: /tmp/\nDisallow: /cgi-bin/\nDisallow: /*.pdf$\n\n# Allow specific crawlers to access certain areas\nUser-agent: Googlebot\nAllow: /public/\n\n# Crawl-delay for all bots\nCrawl-delay: 10\n\n# Sitemap\nSitemap: {sitemap_url}"
        ],
        'ecommerce' => [
            'name' => 'E-commerce',
            'description' => 'Optimized for online stores',
            'content' => "User-agent: *\nDisallow: /cart/\nDisallow: /checkout/\nDisallow: /account/\nDisallow: /search?\nDisallow: /*?sort=\nDisallow: /*&sort=\nAllow: /\n\n# Allow important crawlers\nUser-agent: Googlebot\nUser-agent: Bingbot\nAllow: /products/\nAllow: /categories/\n\n# Block price comparison bots\nUser-agent: *bot*\nUser-agent: *crawler*\nUser-agent: *scraper*\nDisallow: /\n\nCrawl-delay: 5\n\n# Sitemap\nSitemap: {sitemap_url}\nSitemap: {sitemap_url}/products.xml"
        ],
        'blog' => [
            'name' => 'Blog/News',
            'description' => 'Optimized for content websites',
            'content' => "User-agent: *\nDisallow: /wp-admin/\nDisallow: /wp-includes/\nDisallow: /wp-content/plugins/\nDisallow: /wp-content/cache/\nDisallow: /trackback/\nDisallow: /feed/\nDisallow: /comments/\nDisallow: /category/*/*\nDisallow: */trackback/\nDisallow: */feed/\nDisallow: */comments/\nAllow: /wp-content/uploads/\n\n# Allow social media crawlers\nUser-agent: facebookexternalhit\nUser-agent: Twitterbot\nAllow: /\n\nCrawl-delay: 2\n\n# Sitemap\nSitemap: {sitemap_url}\nSitemap: {sitemap_url}/posts.xml"
        ],
        'block_all' => [
            'name' => 'Block All',
            'description' => 'Block all crawlers (maintenance mode)',
            'content' => "User-agent: *\nDisallow: /\n\n# Sitemap (for when site is back online)\n# Sitemap: {sitemap_url}"
        ]
    ];
    
    private $commonBots = [
        '*' => 'All crawlers',
        'Googlebot' => 'Google Search',
        'Bingbot' => 'Bing Search', 
        'Slurp' => 'Yahoo Search',
        'DuckDuckBot' => 'DuckDuckGo',
        'Baiduspider' => 'Baidu Search',
        'YandexBot' => 'Yandex Search',
        'facebookexternalhit' => 'Facebook Crawler',
        'Twitterbot' => 'Twitter Crawler',
        'LinkedInBot' => 'LinkedIn Crawler',
        'WhatsApp' => 'WhatsApp Preview',
        'Applebot' => 'Apple Search',
        'AhrefsBot' => 'Ahrefs SEO Bot',
        'SemrushBot' => 'Semrush SEO Bot',
        'MJ12bot' => 'Majestic SEO Bot'
    ];
    
    public function getTemplates() {
        return $this->templates;
    }
    
    public function getCommonBots() {
        return $this->commonBots;
    }
    
    public function generateRobotsTxt($data) {
        $robotsTxt = "";
        
        // Template-based generation
        if (!empty($data['template']) && isset($this->templates[$data['template']])) {
            $template = $this->templates[$data['template']]['content'];
            $robotsTxt = str_replace('{sitemap_url}', $data['sitemap_url'] ?? 'https://example.com/sitemap.xml', $template);
        } else {
            // Custom generation
            $userAgents = !empty($data['user_agents']) ? explode("\n", trim($data['user_agents'])) : ['*'];
            
            foreach ($userAgents as $userAgent) {
                $userAgent = trim($userAgent);
                if (empty($userAgent)) continue;
                
                $robotsTxt .= "User-agent: $userAgent\n";
                
                // Disallow paths
                if (!empty($data['disallow_paths'])) {
                    $disallowPaths = explode("\n", $data['disallow_paths']);
                    foreach ($disallowPaths as $path) {
                        $path = trim($path);
                        if (!empty($path)) {
                            $robotsTxt .= "Disallow: $path\n";
                        }
                    }
                } else {
                    $robotsTxt .= "Disallow:\n";
                }
                
                // Allow paths
                if (!empty($data['allow_paths'])) {
                    $allowPaths = explode("\n", $data['allow_paths']);
                    foreach ($allowPaths as $path) {
                        $path = trim($path);
                        if (!empty($path)) {
                            $robotsTxt .= "Allow: $path\n";
                        }
                    }
                }
                
                // Crawl delay
                if (!empty($data['crawl_delay'])) {
                    $robotsTxt .= "Crawl-delay: " . intval($data['crawl_delay']) . "\n";
                }
                
                $robotsTxt .= "\n";
            }
            
            // Host directive  
            if (!empty($data['host'])) {
                $robotsTxt .= "Host: " . $data['host'] . "\n\n";
            }
            
            // Sitemap URLs
            if (!empty($data['sitemap_urls'])) {
                $sitemapUrls = explode("\n", $data['sitemap_urls']);
                foreach ($sitemapUrls as $sitemapUrl) {
                    $sitemapUrl = trim($sitemapUrl);
                    if (!empty($sitemapUrl)) {
                        $robotsTxt .= "Sitemap: $sitemapUrl\n";
                    }
                }
            }
        }
        
        return trim($robotsTxt);
    }
    
    public function validateRobotsTxt($content) {
        $errors = [];
        $warnings = [];
        $lines = explode("\n", $content);
        
        $hasUserAgent = false;
        $hasSitemap = false;
        
        foreach ($lines as $lineNum => $line) {
            $line = trim($line);
            $lineNumber = $lineNum + 1;
            
            // Skip empty lines and comments
            if (empty($line) || strpos($line, '#') === 0) {
                continue;
            }
            
            // Check for valid directives
            if (preg_match('/^(User-agent|Disallow|Allow|Crawl-delay|Host|Sitemap):\s*(.*)$/i', $line, $matches)) {
                $directive = strtolower($matches[1]);
                $value = trim($matches[2]);
                
                if ($directive === 'user-agent') {
                    $hasUserAgent = true;
                    if (empty($value)) {
                        $errors[] = "Line $lineNumber: User-agent cannot be empty";
                    }
                } elseif ($directive === 'sitemap') {
                    $hasSitemap = true;
                    if (!filter_var($value, FILTER_VALIDATE_URL)) {
                        $errors[] = "Line $lineNumber: Invalid sitemap URL";
                    }
                } elseif ($directive === 'crawl-delay') {
                    if (!is_numeric($value) || $value < 0) {
                        $errors[] = "Line $lineNumber: Crawl-delay must be a positive number";
                    } elseif ($value > 86400) {
                        $warnings[] = "Line $lineNumber: Crawl-delay is very high (>24 hours)";
                    }
                }
            } else {
                $errors[] = "Line $lineNumber: Invalid robots.txt directive";
            }
        }
        
        if (!$hasUserAgent) {
            $errors[] = "Missing User-agent directive";
        }
        
        if (!$hasSitemap) {
            $warnings[] = "No sitemap specified";
        }
        
        return [
            'valid' => empty($errors),
            'errors' => $errors,
            'warnings' => $warnings
        ];
    }
    
    public function analyzeRobotsTxt($content, $websiteUrl = '') {
        $analysis = [
            'total_lines' => 0,
            'user_agents' => [],
            'disallowed_paths' => [],
            'allowed_paths' => [],
            'sitemaps' => [],
            'crawl_delays' => [],
            'coverage' => 'unknown'
        ];
        
        $lines = explode("\n", $content);
        $analysis['total_lines'] = count($lines);
        
        $currentUserAgent = '';
        
        foreach ($lines as $line) {
            $line = trim($line);
            
            if (empty($line) || strpos($line, '#') === 0) {
                continue;
            }
            
            if (preg_match('/^User-agent:\s*(.+)$/i', $line, $matches)) {
                $currentUserAgent = trim($matches[1]);
                if (!in_array($currentUserAgent, $analysis['user_agents'])) {
                    $analysis['user_agents'][] = $currentUserAgent;
                }
            } elseif (preg_match('/^Disallow:\s*(.*)$/i', $line, $matches)) {
                $path = trim($matches[1]);
                if ($path === '') {
                    $analysis['coverage'] = 'open';
                } else {
                    $analysis['disallowed_paths'][] = $path;
                }
            } elseif (preg_match('/^Allow:\s*(.+)$/i', $line, $matches)) {
                $analysis['allowed_paths'][] = trim($matches[1]);
            } elseif (preg_match('/^Sitemap:\s*(.+)$/i', $line, $matches)) {
                $analysis['sitemaps'][] = trim($matches[1]);
            } elseif (preg_match('/^Crawl-delay:\s*(\d+)$/i', $line, $matches)) {
                $analysis['crawl_delays'][$currentUserAgent] = intval($matches[1]);
            }
        }
        
        if (empty($analysis['disallowed_paths']) && $analysis['coverage'] !== 'open') {
            $analysis['coverage'] = 'restrictive';
        }
        
        return $analysis;
    }
}

// Initialize generator
$generator = new AdvancedRobotsGenerator();
$templates = $generator->getTemplates();
$commonBots = $generator->getCommonBots();

// Handle form submission
$robotsTxtContent = '';
$error = '';
$success = '';
$validationResult = null;
$analysisResult = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $robotsTxtContent = $generator->generateRobotsTxt($_POST);
        $validationResult = $generator->validateRobotsTxt($robotsTxtContent);
        $analysisResult = $generator->analyzeRobotsTxt($robotsTxtContent, $_POST['website_url'] ?? '');
        
        if ($validationResult['valid']) {
            $success = "Robots.txt generated successfully! Ready for deployment.";
        } else {
            $error = "Generated robots.txt has validation issues. Please review and fix.";
        }
    } catch (Exception $e) {
        $error = "Error generating robots.txt: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Robots.txt Generator - Professional SEO Tool | Thiyagi</title>
    <meta name="description" content="Professional robots.txt generator with templates, validation, and advanced crawler control. Create SEO-optimized robots.txt files with crawl-delay settings and comprehensive analysis.">
    <meta name="keywords" content="robots.txt generator, robots txt creator, SEO robots file, crawler control, search engine optimization, crawl delay, sitemap robots">
    <meta name="author" content="Thiyagi">
    <link rel="canonical" href="https://livedu.in/robots-txt-generator.php">
    
    <!-- Open Graph tags -->
    <meta property="og:title" content="Advanced Robots.txt Generator - Professional SEO Tool">
    <meta property="og:description" content="Create professional robots.txt files with templates, validation, and advanced crawler control features for better SEO.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://livedu.in/robots-txt-generator.php">
    <meta property="og:site_name" content="Thiyagi">
    <meta property="og:image" content="https://livedu.in/images/robots-generator-og.jpg">
    
    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Advanced Robots.txt Generator">
    <meta name="twitter:description" content="Professional robots.txt generator with templates and validation">
    <meta name="twitter:image" content="https://livedu.in/images/robots-generator-twitter.jpg">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Advanced Robots.txt Generator",
        "description": "Professional robots.txt generator with templates, validation, and advanced crawler control",
        "url": "https://livedu.in/robots-txt-generator.php",
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
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .tab-content { display: none; }
        .tab-content.active { display: block; }
        .template-card.selected {
            border-color: #3b82f6;
            background-color: #eff6ff;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen">
    <!-- Header Section -->
    <div class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Advanced Robots.txt Generator</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Professional robots.txt creator with templates, validation, and advanced crawler control for better SEO performance</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Features Section -->
        <div class="grid md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Ready Templates</h3>
                <p class="text-sm text-gray-600">Pre-built templates for common use cases</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Validation & Analysis</h3>
                <p class="text-sm text-gray-600">Real-time validation and error checking</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Crawl Delay Control</h3>
                <p class="text-sm text-gray-600">Advanced crawler rate limiting</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Multi-Bot Support</h3>
                <p class="text-sm text-gray-600">Control multiple search engine bots</p>
            </div>
        </div>

        <!-- Template Selection -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Choose Template or Create Custom</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <?php foreach ($templates as $key => $template): ?>
                <div class="template-card border-2 border-gray-200 rounded-lg p-4 cursor-pointer hover:border-blue-300 transition duration-200" onclick="selectTemplate('<?php echo $key; ?>')">
                    <h3 class="font-semibold text-gray-800 mb-2"><?php echo htmlspecialchars($template['name']); ?></h3>
                    <p class="text-sm text-gray-600"><?php echo htmlspecialchars($template['description']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Generation Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <form method="POST" class="space-y-6">
                <input type="hidden" name="template" id="selected_template" value="">
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="website_url" class="block text-sm font-semibold text-gray-700 mb-2">Website URL</label>
                        <input type="url" name="website_url" id="website_url" 
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                               placeholder="https://example.com"
                               value="<?php echo htmlspecialchars($_POST['website_url'] ?? ''); ?>">
                    </div>
                    
                    <div>
                        <label for="crawl_delay" class="block text-sm font-semibold text-gray-700 mb-2">Crawl Delay (seconds)</label>
                        <select name="crawl_delay" id="crawl_delay" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">No delay</option>
                            <option value="1" <?php echo ($_POST['crawl_delay'] ?? '') == '1' ? 'selected' : ''; ?>>1 second</option>
                            <option value="5" <?php echo ($_POST['crawl_delay'] ?? '') == '5' ? 'selected' : ''; ?>>5 seconds</option>
                            <option value="10" <?php echo ($_POST['crawl_delay'] ?? '') == '10' ? 'selected' : ''; ?>>10 seconds</option>
                            <option value="30" <?php echo ($_POST['crawl_delay'] ?? '') == '30' ? 'selected' : ''; ?>>30 seconds</option>
                            <option value="60" <?php echo ($_POST['crawl_delay'] ?? '') == '60' ? 'selected' : ''; ?>>1 minute</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="user_agents" class="block text-sm font-semibold text-gray-700 mb-2">User Agents (one per line)</label>
                        <textarea name="user_agents" id="user_agents" rows="4" 
                                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                                  placeholder="*
Googlebot
Bingbot"><?php echo htmlspecialchars($_POST['user_agents'] ?? '*'); ?></textarea>
                        <div class="mt-2 flex flex-wrap gap-2">
                            <?php foreach (array_slice($commonBots, 0, 6) as $bot => $name): ?>
                            <button type="button" onclick="addBot('<?php echo $bot; ?>')" class="text-xs bg-gray-100 hover:bg-gray-200 px-2 py-1 rounded">
                                + <?php echo $name; ?>
                            </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <div>
                        <label for="host" class="block text-sm font-semibold text-gray-700 mb-2">Preferred Host (optional)</label>
                        <input type="url" name="host" id="host" 
                               class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                               placeholder="https://www.example.com"
                               value="<?php echo htmlspecialchars($_POST['host'] ?? ''); ?>">
                        <p class="text-xs text-gray-500 mt-1">Specify preferred domain for search engines</p>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="disallow_paths" class="block text-sm font-semibold text-gray-700 mb-2">Disallow Paths (one per line)</label>
                        <textarea name="disallow_paths" id="disallow_paths" rows="4" 
                                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                                  placeholder="/admin/
/private/
/tmp/
/*.pdf$"><?php echo htmlspecialchars($_POST['disallow_paths'] ?? ''); ?></textarea>
                    </div>
                    
                    <div>
                        <label for="allow_paths" class="block text-sm font-semibold text-gray-700 mb-2">Allow Paths (one per line)</label>
                        <textarea name="allow_paths" id="allow_paths" rows="4" 
                                  class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                                  placeholder="/public/
/api/
/css/
/js/"><?php echo htmlspecialchars($_POST['allow_paths'] ?? ''); ?></textarea>
                    </div>
                </div>
                
                <div>
                    <label for="sitemap_urls" class="block text-sm font-semibold text-gray-700 mb-2">Sitemap URLs (one per line)</label>
                    <textarea name="sitemap_urls" id="sitemap_urls" rows="3" 
                              class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                              placeholder="https://example.com/sitemap.xml
https://example.com/sitemap-images.xml"><?php echo htmlspecialchars($_POST['sitemap_urls'] ?? ''); ?></textarea>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-lg transform transition duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Generate Robots.txt File
                </button>
            </form>
        </div>

        <!-- Error/Success Messages -->
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

        <!-- Generated Robots.txt -->
        <?php if (!empty($robotsTxtContent)): ?>
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800">Generated Robots.txt</h3>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">
                        Ready for deployment
                    </span>
                </div>
                
                <!-- Tabs -->
                <div class="border-b border-gray-200 mb-6">
                    <nav class="flex space-x-8">
                        <button class="tab-btn border-b-2 border-blue-500 text-blue-600 py-2 px-1 text-sm font-medium active" onclick="showTab('robots-content')">
                            Robots.txt
                        </button>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-2 px-1 text-sm font-medium" onclick="showTab('validation')">
                            Validation
                        </button>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-2 px-1 text-sm font-medium" onclick="showTab('analysis')">
                            Analysis
                        </button>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-2 px-1 text-sm font-medium" onclick="showTab('deployment')">
                            Deployment
                        </button>
                    </nav>
                </div>
                
                <!-- Robots.txt Content Tab -->
                <div id="robots-content" class="tab-content active">
                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-200 mb-6">
                        <pre class="text-gray-800 text-sm" id="robots-text"><?php echo htmlspecialchars($robotsTxtContent); ?></pre>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-4">
                        <button onclick="copyToClipboard('robots-text')" 
                                class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            Copy Content
                        </button>
                        <a href="data:text/plain;charset=utf-8,<?php echo urlencode($robotsTxtContent); ?>" download="robots.txt" 
                           class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-3 px-6 rounded-lg text-center transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download File
                        </a>
                        <button onclick="testRobots()" 
                                class="bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Test Online
                        </button>
                    </div>
                </div>
                
                <!-- Validation Tab -->
                <div id="validation" class="tab-content">
                    <?php if ($validationResult): ?>
                        <div class="space-y-4">
                            <div class="<?php echo $validationResult['valid'] ? 'bg-green-50 border-green-200' : 'bg-red-50 border-red-200'; ?> border p-4 rounded-lg">
                                <h4 class="font-semibold <?php echo $validationResult['valid'] ? 'text-green-800' : 'text-red-800'; ?> mb-2">
                                    <?php echo $validationResult['valid'] ? '✓ Robots.txt is Valid' : '✗ Validation Errors Found'; ?>
                                </h4>
                                
                                <?php if (!empty($validationResult['errors'])): ?>
                                    <div class="mb-4">
                                        <h5 class="font-medium text-red-800 mb-2">Errors:</h5>
                                        <ul class="list-disc list-inside text-red-700 space-y-1">
                                            <?php foreach ($validationResult['errors'] as $error): ?>
                                                <li><?php echo htmlspecialchars($error); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if (!empty($validationResult['warnings'])): ?>
                                    <div>
                                        <h5 class="font-medium text-yellow-800 mb-2">Warnings:</h5>
                                        <ul class="list-disc list-inside text-yellow-700 space-y-1">
                                            <?php foreach ($validationResult['warnings'] as $warning): ?>
                                                <li><?php echo htmlspecialchars($warning); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ($validationResult['valid'] && empty($validationResult['warnings'])): ?>
                                    <p class="text-green-700">Your robots.txt file follows best practices and is ready for deployment!</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Analysis Tab -->
                <div id="analysis" class="tab-content">
                    <?php if ($analysisResult): ?>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">File Statistics</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <li>Total Lines: <?php echo $analysisResult['total_lines']; ?></li>
                                        <li>User Agents: <?php echo count($analysisResult['user_agents']); ?></li>
                                        <li>Disallowed Paths: <?php echo count($analysisResult['disallowed_paths']); ?></li>
                                        <li>Allowed Paths: <?php echo count($analysisResult['allowed_paths']); ?></li>
                                        <li>Sitemaps: <?php echo count($analysisResult['sitemaps']); ?></li>
                                    </ul>
                                </div>
                                
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-blue-800 mb-2">Coverage Assessment</h4>
                                    <p class="text-blue-700 capitalize"><?php echo $analysisResult['coverage']; ?> access policy</p>
                                </div>
                            </div>
                            
                            <div class="space-y-4">
                                <?php if (!empty($analysisResult['user_agents'])): ?>
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-gray-800 mb-2">Targeted Crawlers</h4>
                                    <ul class="space-y-1 text-sm text-gray-600">
                                        <?php foreach (array_slice($analysisResult['user_agents'], 0, 5) as $agent): ?>
                                            <li>• <?php echo htmlspecialchars($agent); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (!empty($analysisResult['crawl_delays'])): ?>
                                <div class="bg-yellow-50 p-4 rounded-lg">
                                    <h4 class="font-semibold text-yellow-800 mb-2">Crawl Delays</h4>
                                    <ul class="space-y-1 text-sm text-yellow-700">
                                        <?php foreach ($analysisResult['crawl_delays'] as $agent => $delay): ?>
                                            <li><?php echo htmlspecialchars($agent); ?>: <?php echo $delay; ?>s</li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Deployment Tab -->
                <div id="deployment" class="tab-content">
                    <div class="space-y-6">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h4 class="font-semibold text-blue-800 mb-4">📋 Deployment Instructions</h4>
                            <ol class="list-decimal list-inside space-y-2 text-blue-700">
                                <li>Download or copy the robots.txt content above</li>
                                <li>Upload the file to your website's root directory (example.com/robots.txt)</li>
                                <li>Ensure the file is accessible via HTTP/HTTPS</li>
                                <li>Test the file using Google's robots.txt Tester</li>
                                <li>Monitor crawl behavior in Google Search Console</li>
                            </ol>
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-gray-800 mb-2">✅ Best Practices</h4>
                                <ul class="text-sm text-gray-600 space-y-1">
                                    <li>• Keep robots.txt simple and readable</li>
                                    <li>• Test before deploying to production</li>
                                    <li>• Include sitemap URL when available</li>
                                    <li>• Use crawl-delay sparingly</li>
                                    <li>• Monitor for crawl errors</li>
                                </ul>
                            </div>
                            
                            <div class="bg-red-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-red-800 mb-2">⚠️ Common Mistakes</h4>
                                <ul class="text-sm text-red-700 space-y-1">
                                    <li>• Blocking important pages accidentally</li>
                                    <li>• Using robots.txt for security (it's public!)</li>
                                    <li>• Setting extremely high crawl delays</li>
                                    <li>• Forgetting to update after site changes</li>
                                    <li>• Not including sitemap references</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-800 mb-2">🔗 Testing Tools</h4>
                            <div class="space-y-2 text-sm">
                                <a href="https://www.google.com/webmasters/tools/robots-testing-tool" target="_blank" class="block text-green-700 hover:text-green-900 underline">Google Robots.txt Tester</a>
                                <a href="https://www.bing.com/webmaster/help/how-to-verify-bingbot-2195837f" target="_blank" class="block text-green-700 hover:text-green-900 underline">Bing Robots.txt Verification</a>
                                <a href="https://technicalseo.com/tools/robots-txt/" target="_blank" class="block text-green-700 hover:text-green-900 underline">Technical SEO Robots.txt Tester</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Info Section -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Robots.txt Guide</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600">1</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Create & Validate</h3>
                    <p class="text-gray-600">Generate your robots.txt file using templates or custom rules with built-in validation</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-green-600">2</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Deploy & Monitor</h3>
                    <p class="text-gray-600">Upload to your website root and monitor crawler behavior in search console</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-purple-600">3</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Optimize & Update</h3>
                    <p class="text-gray-600">Regularly review and update your robots.txt as your website evolves</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-lg font-semibold mb-2">Advanced Robots.txt Generator</h3>
            <p class="text-gray-300">Professional crawler control tool by Thiyagi - Free forever</p>
            <p class="text-gray-400 text-sm mt-2">Control search engine crawlers and optimize your website's SEO</p>
        </div>
    </footer>

    <script>
        // Template selection
        let selectedTemplate = '';
        
        function selectTemplate(template) {
            selectedTemplate = template;
            document.getElementById('selected_template').value = template;
            
            // Update visual selection
            document.querySelectorAll('.template-card').forEach(card => {
                card.classList.remove('selected');
            });
            
            event.target.classList.add('selected');
            
            // Optionally load template preview
            if (template && template !== 'custom') {
                showNotification('Template selected: ' + template, 'success');
            }
        }
        
        // Add bot to user agents
        function addBot(bot) {
            const textarea = document.getElementById('user_agents');
            const current = textarea.value.trim();
            const bots = current.split('\n').map(b => b.trim()).filter(b => b);
            
            if (!bots.includes(bot)) {
                bots.push(bot);
                textarea.value = bots.join('\n');
                showNotification('Added ' + bot + ' to user agents', 'success');
            } else {
                showNotification(bot + ' already in list', 'warning');
            }
        }
        
        // Tab functionality
        function showTab(tabName) {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.remove('active');
                content.style.display = 'none';
            });
            
            // Remove active class from all tab buttons
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active', 'border-blue-500', 'text-blue-600');
                btn.classList.add('border-transparent', 'text-gray-500');
            });
            
            // Show selected tab content
            const selectedTab = document.getElementById(tabName);
            selectedTab.classList.add('active');
            selectedTab.style.display = 'block';
            
            // Add active class to clicked tab button
            event.target.classList.remove('border-transparent', 'text-gray-500');
            event.target.classList.add('active', 'border-blue-500', 'text-blue-600');
        }
        
        // Copy to clipboard
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.textContent;
            
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text).then(() => {
                    showNotification('Robots.txt content copied to clipboard!', 'success');
                });
            }
        }
        
        // Test robots.txt online
        function testRobots() {
            const websiteUrl = document.getElementById('website_url').value;
            if (websiteUrl) {
                window.open('https://www.google.com/webmasters/tools/robots-testing-tool?url=' + encodeURIComponent(websiteUrl), '_blank');
            } else {
                showNotification('Please enter website URL to test', 'warning');
            }
        }
        
        // Show notification
        function showNotification(message, type) {
            const notification = document.createElement('div');
            const bgColor = type === 'success' ? 'bg-green-500' : type === 'warning' ? 'bg-yellow-500' : 'bg-red-500';
            notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${bgColor} text-white`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');
            const submitButton = form.querySelector('button[type="submit"]');
            
            form.addEventListener('submit', function() {
                submitButton.innerHTML = `
                    <svg class="w-5 h-5 animate-spin inline-block mr-2" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Generating Robots.txt...
                `;
                submitButton.disabled = true;
            });
        });
    </script>
</body>
<?php include 'footer.php';?>
</html>
