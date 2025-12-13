<?php include 'header.php';?>
<?php
// Robust YouTube URL parser supporting watch, youtu.be, shorts, and embed URLs
function extractYouTubeVideoId(string $url): string {
    $parts = @parse_url(trim($url));
    if (!$parts || empty($parts['host'])) return '';

    $host = strtolower($parts['host']);
    $path = $parts['path'] ?? '';
    $query = [];
    if (!empty($parts['query'])) parse_str($parts['query'], $query);

    // youtu.be/<id>
    if (strpos($host, 'youtu.be') !== false) {
        $segments = array_values(array_filter(explode('/', $path)));
        return $segments[0] ?? '';
    }

    // youtube.com or m.youtube.com or youtube-nocookie.com
    if (strpos($host, 'youtube.com') !== false || strpos($host, 'youtube-nocookie.com') !== false) {
        // /watch?v=<id>
        if (isset($query['v'])) return (string)$query['v'];

        // /embed/<id>
        if (preg_match('#^/embed/([^/?]+)#', $path, $m)) return $m[1];

        // /shorts/<id>
        if (preg_match('#^/shorts/([^/?]+)#', $path, $m)) return $m[1];
    }

    // Last resort: look for v= in full string
    if (preg_match('/[?&]v=([\w-]{6,})/i', $url, $m)) return $m[1];
    return '';
}

// Parse a start time from t= or start= query (supports 1h2m3s or seconds)
function extractStartSeconds(string $url): int {
    $parts = @parse_url(trim($url));
    $query = [];
    if (!empty($parts['query'])) parse_str($parts['query'], $query);

    $raw = '';
    if (isset($query['start'])) $raw = (string)$query['start'];
    if (isset($query['t'])) $raw = (string)$query['t'];
    if ($raw === '') return 0;

    // If numeric seconds
    if (ctype_digit($raw)) return (int)$raw;

    // Matches like 1h2m3s, 2m10s, 45s, 1h
    if (preg_match('/(?:(\d+)h)?(?:(\d+)m)?(?:(\d+)s)?/i', $raw, $m)) {
        $h = isset($m[1]) && $m[1] !== '' ? (int)$m[1] : 0;
        $mn = isset($m[2]) && $m[2] !== '' ? (int)$m[2] : 0;
        $s = isset($m[3]) && $m[3] !== '' ? (int)$m[3] : 0;
        return max(0, $h * 3600 + $mn * 60 + $s);
    }
    return 0;
}

// Function to generate YouTube embed code with optional start time
function generateEmbedCode(string $videoUrl): string {
    $videoId = extractYouTubeVideoId($videoUrl);
    if ($videoId === '') return '';

    $start = extractStartSeconds($videoUrl);
    $params = [];
    if ($start > 0) $params['start'] = $start;
    // Show related videos from same channel when possible
    $params['rel'] = 0;
    $query = $params ? ('?' . http_build_query($params)) : '';

    $src = 'https://www.youtube-nocookie.com/embed/' . rawurlencode($videoId) . $query;
    $iframe = '<iframe width="560" height="315" src="' . htmlspecialchars($src, ENT_QUOTES) . '" '
            . 'title="YouTube video player" frameborder="0" '
            . 'allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" '
            . 'referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
    return $iframe;
}

// Handle form submission
$embedCode = '';
$error = '';
$videoUrl = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = trim($_POST['video_url'] ?? '');
    if ($videoUrl !== '') {
        $embedCode = generateEmbedCode($videoUrl);
        if ($embedCode === '') {
            $error = 'Invalid YouTube video URL. Please check and try again.';
        }
    } else {
        $error = 'Please enter a YouTube video URL.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Embed Code Generator 2026 - Free Online Embed Builder</title>
    <meta name="description" content="Create YouTube embed codes instantly. Supports watch, shorts, and youtu.be links with optional start time. Copy the iframe code and preview it right away.">
    <meta name="keywords" content="YouTube embed code, iframe generator, embed YouTube, YouTube shorts embed, YouTube start time, nocookie embed, video iframe">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Thiyagi">
    <link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="YouTube Embed Code Generator - Free Online Builder">
    <meta property="og:description" content="Generate YouTube iframe embed codes instantly with optional start time and privacy-friendly nocookie embeds.">
    <meta property="og:url" content="https://www.thiyagi.com/youtube-embed-code-generator">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="YouTube Embed Code Generator - Free Online Builder">
    <meta name="twitter:description" content="Generate YouTube iframe embed codes instantly with optional start time and privacy-friendly nocookie embeds.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

    <!-- JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "YouTube Embed Code Generator",
      "url": "https://www.thiyagi.com/youtube-embed-code-generator",
      "applicationCategory": "Utility",
      "description": "Generate YouTube iframe embed codes for watch, shorts, and youtu.be URLs with optional start time.",
      "operatingSystem": "Web Browser",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "USD"}
    }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-50">
    <!-- Breadcrumb -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 py-3 text-sm">
                <a href="./" class="text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-home mr-1"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                <span class="text-gray-600">YouTube Embed Code Generator</span>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="bg-gradient-to-br from-red-600 to-red-800 text-white py-14">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full mb-4">
                <i class="fab fa-youtube text-3xl"></i>
            </div>
            <h1 class="text-4xl font-bold mb-3">YouTube Embed Code Generator</h1>
            <p class="text-red-100">Paste any YouTube link to get a clean, privacy-friendly iframe embed. Supports watch, shorts, and youtu.be links with optional start time.</p>
            <div class="mt-4 flex flex-wrap justify-center gap-2 text-sm">
                <span class="bg-white/20 px-3 py-1 rounded-full">🚀 Instant</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">🔒 Nocookie</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">⏱️ Start time</span>
            </div>
        </div>
    </div>
    <div class="max-w-4xl mx-auto p-6 -mt-10">
        <form method="POST" class="bg-white p-6 md:p-8 rounded-lg shadow-xl" novalidate>
            <div class="mb-6">
                <label for="video_url" class="block text-gray-700 font-semibold mb-2 text-lg">
                    <i class="fab fa-youtube text-red-600 mr-2"></i>
                    YouTube Video URL
                </label>
                <div class="relative">
                    <input type="url" name="video_url" id="video_url" value="<?php echo htmlspecialchars($videoUrl); ?>" class="w-full px-4 py-4 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-red-500 transition duration-300 text-lg" placeholder="https://www.youtube.com/watch?v=VIDEO_ID or https://youtu.be/VIDEO_ID" required>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                        <i class="fas fa-link text-gray-400"></i>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mt-2">Tip: Add <code class="bg-gray-100 px-1 rounded">&t=1m30s</code> to start at a specific time.</p>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-4 px-6 rounded-lg transition duration-300 text-lg shadow-lg">Generate Embed Code</button>
        </form>
        <?php if (!empty($embedCode)): ?>
            <div class="mt-8 bg-white p-6 md:p-8 rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                        <i class="fas fa-code text-green-600 mr-2"></i>
                        Generated Embed Code
                    </h2>
                    <button id="copyBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition duration-300">
                        <i class="fas fa-copy mr-1"></i> Copy
                    </button>
                </div>
                <div class="relative mt-4 p-4 bg-gray-100 rounded-lg border border-gray-200">
                    <pre id="embedOutput" class="text-gray-700 text-sm overflow-x-auto"><?php echo htmlspecialchars($embedCode); ?></pre>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mt-6">Preview</h3>
                <div class="mt-4">
                    <?php echo $embedCode; ?>
                </div>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-6 bg-red-100 p-6 rounded-lg shadow-md">
                <p class="text-red-700 text-xl"><?php echo htmlspecialchars($error); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <!-- About Tool -->
    <div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-info-circle text-blue-600 mr-3"></i>
                About YouTube Embed Code Generator
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-gray-700">
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900 flex items-center"><i class="fas fa-shield-halved text-green-600 mr-2"></i>Privacy-friendly</h3>
                    <p>We generate embeds using the youtube-nocookie.com domain to improve privacy and reduce tracking where possible.</p>
                    <ul class="mt-3 space-y-2 text-gray-600">
                        <li>• Supports watch, shorts, youtu.be, and embed URLs</li>
                        <li>• Optional start time using t= or start=</li>
                        <li>• Clean, responsive-ready iframe markup</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900 flex items-center"><i class="fas fa-sliders text-purple-600 mr-2"></i>Embed Options</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Start time: e.g., <code class="bg-gray-100 px-1 rounded">&t=1m30s</code> or <code class="bg-gray-100 px-1 rounded">&start=90</code></li>
                        <li>• Related videos limited with <code class="bg-gray-100 px-1 rounded">rel=0</code></li>
                        <li>• Safe attributes: allow, referrerpolicy, allowfullscreen</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-star text-yellow-500 mr-3"></i>
                Why use this generator?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="text-center p-6 border border-gray-200 rounded-lg bg-white">
                    <div class="text-red-500 text-4xl mb-4">⚡</div>
                    <h3 class="font-bold text-gray-700 text-lg mb-2">Instant results</h3>
                    <p class="text-gray-600 text-sm">Paste a URL, get an embed — no extra steps.</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg bg-white">
                    <div class="text-green-500 text-4xl mb-4">🔒</div>
                    <h3 class="font-bold text-gray-700 text-lg mb-2">Privacy first</h3>
                    <p class="text-gray-600 text-sm">Uses youtube-nocookie.com for improved privacy.</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg bg-white">
                    <div class="text-blue-500 text-4xl mb-4">📱</div>
                    <h3 class="font-bold text-gray-700 text-lg mb-2">Responsive-ready</h3>
                    <p class="text-gray-600 text-sm">Works with responsive wrappers and tailwind utilities.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                Frequently Asked Questions
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">How do I start a video at a specific time?</h3>
                    <p class="text-gray-600">Add <code class="bg-gray-100 px-1 rounded">&t=1m30s</code> or <code class="bg-gray-100 px-1 rounded">&start=90</code> to your URL. The embed will include the correct start parameter automatically.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Does this work with YouTube Shorts?</h3>
                    <p class="text-gray-600">Yes. Paste a shorts URL like <code class="bg-gray-100 px-1 rounded">https://youtube.com/shorts/ID</code> — the tool extracts the video ID correctly.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What about related videos?</h3>
                    <p class="text-gray-600">We set <code class="bg-gray-100 px-1 rounded">rel=0</code> to limit unrelated suggestions. YouTube may still show related content from the same channel.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Is the embed privacy-safe?</h3>
                    <p class="text-gray-600">We use youtube-nocookie.com to reduce tracking, along with a strict referrer policy in the iframe for additional privacy.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Tools -->
    <div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-tools text-red-600 mr-3"></i>
                Related YouTube Tools
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="youtube-thumbnail-downloader" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-red-500 text-2xl mb-2">🖼️</div>
                    <h3 class="font-bold text-gray-700 text-sm">Thumbnail Downloader</h3>
                    <p class="text-gray-600 text-xs">Download YouTube thumbnails</p>
                </a>
                <a href="youtube-tag-extractor" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-pink-500 text-2xl mb-2">🏷️</div>
                    <h3 class="font-bold text-gray-700 text-sm">Tag Extractor</h3>
                    <p class="text-gray-600 text-xs">Extract video tags</p>
                </a>
                <a href="youtube-description-extractor" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-green-500 text-2xl mb-2">📄</div>
                    <h3 class="font-bold text-gray-700 text-sm">Description Extractor</h3>
                    <p class="text-gray-600 text-xs">Extract video descriptions</p>
                </a>
                <a href="youtube-video-statistics" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-purple-500 text-2xl mb-2">📊</div>
                    <h3 class="font-bold text-gray-700 text-sm">Video Statistics</h3>
                    <p class="text-gray-600 text-xs">Get detailed video stats</p>
                </a>
            </div>
        </div>
    </div>

    <!-- SEO Tips -->
    <div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-lightbulb text-yellow-500 mr-3"></i>
                Embed Tips & Best Practices
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-gray-700">
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Responsive Embeds</h3>
                    <p>Wrap your iframe in a responsive container to maintain aspect ratio on mobile:</p>
<pre class="bg-gray-100 p-3 rounded mt-2 text-sm overflow-x-auto">&lt;div class="relative pt-[56.25%]"&gt;
  &lt;iframe class="absolute top-0 left-0 w-full h-full" ...&gt;&lt;/iframe&gt;
&lt;/div&gt;</pre>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-gray-900">Accessibility</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Provide a descriptive title for the iframe</li>
                        <li>• Ensure surrounding content describes the video context</li>
                        <li>• Consider captions and transcripts for accessibility</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('copyBtn')?.addEventListener('click', function(){
        const pre = document.getElementById('embedOutput');
        if (!pre) return;
        const text = pre.innerText;
        navigator.clipboard.writeText(text).then(() => {
            const self = this;
            const old = self.textContent;
            self.textContent = 'Copied!';
            setTimeout(() => self.textContent = old, 1500);
        });
    });
    </script>
</body>
<?php include 'footer.php';?>

</html>
