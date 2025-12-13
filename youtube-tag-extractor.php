<?php 
// YouTube Tag Extractor - Page specific head content
$page_title = "YouTube Tag Extractor | Extract Video Tags | Free SEO Tool | YouTube Analytics";
$page_description = "Extract tags from any YouTube video instantly. Analyze competitor content, improve SEO strategy, and discover trending keywords. Free YouTube tag extraction tool.";
$page_keywords = "YouTube tag extractor, video tags, YouTube SEO, content analysis, keyword research, YouTube analytics, video optimization, social media tools";
$canonical_url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

include 'header.php';
?>

<!-- Enhanced Meta Tags for YouTube Tag Extractor -->
<title>YouTube Tag Extractor | Extract Video Tags | Free SEO Tool | YouTube Analytics</title>
<meta name="description" content="Extract tags from any YouTube video instantly. Analyze competitor content, improve SEO strategy, and discover trending keywords. Free YouTube tag extraction tool.">
<meta name="keywords" content="YouTube tag extractor, video tags, YouTube SEO, content analysis, keyword research, YouTube analytics, video optimization, social media tools">
<meta name="author" content="Thiyagi">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/youtube-tag-extractor">
<meta property="og:title" content="YouTube Tag Extractor | Extract Video Tags | Free SEO Tool">
<meta property="og:description" content="Extract tags from any YouTube video instantly. Analyze competitor content, improve SEO strategy, and discover trending keywords. Free YouTube tag extraction tool.">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi.com">
<meta property="og:locale" content="en_US">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.thiyagi.com/youtube-tag-extractor">
<meta property="twitter:title" content="YouTube Tag Extractor | Extract Video Tags | Free SEO Tool">
<meta property="twitter:description" content="Extract tags from any YouTube video instantly. Analyze competitor content, improve SEO strategy, and discover trending keywords. Free YouTube tag extraction tool.">
<meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
<meta property="twitter:creator" content="@thiyagi">

<!-- Additional Meta Tags -->
<meta name="theme-color" content="#FF0000">
<meta name="msapplication-TileColor" content="#FF0000">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="YouTube Tag Extractor">

<!-- Canonical URL -->
<link rel="canonical" href="https://www.thiyagi.com/youtube-tag-extractor">

<!-- JSON-LD Schema -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebApplication",
    "name": "YouTube Tag Extractor",
    "description": "Extract tags from any YouTube video instantly. Analyze competitor content, improve SEO strategy, and discover trending keywords.",
    "url": "https://www.thiyagi.com/youtube-tag-extractor",
    "applicationCategory": "SEO Tool",
    "operatingSystem": "Web Browser",
    "permissions": "Free to use",
    "author": {
        "@type": "Person",
        "name": "Thiyagi"
    },
    "provider": {
        "@type": "Organization",
        "name": "Thiyagi.com",
        "url": "https://www.thiyagi.com"
    },
    "dateModified": "2026-08-22",
    "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "USD"
    }
}
</script>

<style>
:root {
    --youtube-primary: #FF0000;
    --youtube-secondary: #CC0000;
}
.bg-youtube-primary { background-color: var(--youtube-primary); }
.text-youtube-primary { color: var(--youtube-primary); }
.border-youtube-primary { border-color: var(--youtube-primary); }
.bg-youtube-secondary { background-color: var(--youtube-secondary); }
.hover\:bg-youtube-secondary:hover { background-color: var(--youtube-secondary); }
</style>

<!-- Breadcrumb -->
<nav class="bg-white shadow-sm border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center space-x-2 py-3 text-sm">
            <a href="./" class="text-blue-600 hover:text-blue-800 flex items-center">
                <i class="fas fa-home mr-1"></i>
                Home
            </a>
            <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
            <span class="text-gray-600">YouTube Tag Extractor</span>
        </div>
    </div>
</nav>

<?php
// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to extract tags from a YouTube video
function extractYouTubeTags($videoId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/videos?part=snippet&id=$videoId&key=$apiKey";
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    if (isset($data['items'][0]['snippet']['tags'])) {
        return $data['items'][0]['snippet']['tags'];
    } else {
        return [];
    }
}

// Handle form submission
$tags = [];
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = $_POST['video_url'];
    // Extract video ID from URL
    parse_str(parse_url($videoUrl, PHP_URL_QUERY), $params);
    $videoId = $params['v'] ?? '';

    if (!empty($videoId)) {
        $tags = extractYouTubeTags($videoId, $apiKey);
        if (empty($tags)) {
            $error = 'No tags found for this video.';
        }
    } else {
        $error = 'Invalid YouTube video URL.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">

<!-- Hero Section -->
<div class="bg-gradient-to-br from-red-600 to-red-800 text-white py-16">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-full mb-6">
            <i class="fab fa-youtube text-4xl"></i>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold mb-4">YouTube Tag Extractor</h1>
        <p class="text-xl text-red-100 mb-8">Extract tags from any YouTube video instantly. Analyze competitor content and discover trending keywords for better SEO.</p>
        <div class="flex flex-wrap justify-center gap-4 text-sm">
            <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full">✨ Free Tool</span>
            <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full">🚀 Instant Results</span>
            <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full">📊 SEO Analysis</span>
            <span class="bg-white bg-opacity-20 px-4 py-2 rounded-full">🎯 Keyword Research</span>
        </div>
    </div>
</div>

<!-- Main Tool Section -->
<div class="max-w-4xl mx-auto p-6 -mt-8">
    <div class="bg-white rounded-lg shadow-xl p-8">
        <form method="POST" class="space-y-6" id="tagExtractorForm">
            <div>
                <label for="video_url" class="block text-gray-700 font-semibold mb-3 text-lg">
                    <i class="fab fa-youtube text-red-600 mr-2"></i>
                    Enter YouTube Video URL
                </label>
                <div class="relative">
                    <input type="url" 
                           name="video_url" 
                           id="video_url" 
                           class="w-full px-4 py-4 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-red-500 transition duration-300 text-lg" 
                           placeholder="https://www.youtube.com/watch?v=VIDEO_ID" 
                           required>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                        <i class="fas fa-link text-gray-400"></i>
                    </div>
                </div>
            </div>
            <button type="submit" 
                    class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-4 px-6 rounded-lg transition duration-300 text-lg shadow-lg transform hover:scale-105">
                <i class="fas fa-tags mr-2"></i>
                Extract Video Tags
            </button>
        </form>

        <?php if (!empty($tags)): ?>
            <div class="mt-8 p-6 bg-green-50 border border-green-200 rounded-lg">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                        <i class="fas fa-tags text-green-600 mr-2"></i>
                        Extracted Tags (<?php echo count($tags); ?> found)
                    </h2>
                    <button onclick="copyTags()" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition duration-300">
                        <i class="fas fa-copy mr-1"></i>
                        Copy All
                    </button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mb-4">
                    <?php foreach ($tags as $tag): ?>
                        <div class="bg-white border border-gray-200 rounded-lg p-3 flex items-center justify-between hover:shadow-md transition duration-300">
                            <span class="text-gray-700 font-medium"><?php echo htmlspecialchars($tag); ?></span>
                            <button onclick="copyTag('<?php echo htmlspecialchars($tag); ?>')" 
                                    class="text-gray-400 hover:text-green-600 transition duration-300" 
                                    title="Copy tag">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-sm text-gray-600 bg-blue-50 p-4 rounded-lg">
                    <i class="fas fa-lightbulb text-blue-500 mr-2"></i>
                    <strong>Pro Tip:</strong> Use these tags to optimize your own videos or analyze competitor strategies. Look for trending keywords and popular combinations.
                </div>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-8 p-6 bg-red-50 border border-red-200 rounded-lg">
                <div class="flex items-center">
                    <i class="fas fa-exclamation-triangle text-red-500 mr-3 text-xl"></i>
                    <div>
                        <h3 class="text-red-800 font-semibold">Error</h3>
                        <p class="text-red-700"><?php echo htmlspecialchars($error); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
function copyTags() {
    const tags = <?php echo json_encode($tags); ?>;
    const tagString = tags.join(', ');
    navigator.clipboard.writeText(tagString).then(() => {
        showNotification('All tags copied to clipboard!', 'success');
    });
}

function copyTag(tag) {
    navigator.clipboard.writeText(tag).then(() => {
        showNotification(`"${tag}" copied!`, 'success');
    });
}

function showNotification(message, type) {
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 ${
        type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
    }`;
    notification.innerHTML = `<i class="fas fa-check mr-2"></i>${message}`;
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.opacity = '0';
        setTimeout(() => notification.remove(), 300);
    }, 2000);
}
</script>

<!-- About YouTube Tag Extractor Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-info-circle text-blue-600 mr-3"></i>
            About YouTube Tag Extractor
        </h2>
        <div class="prose max-w-none text-gray-700">
            <p class="text-lg mb-6">
                Our YouTube Tag Extractor is a powerful SEO tool that helps content creators, marketers, and researchers 
                analyze video tags from any YouTube video. Extract valuable keyword insights to improve your content strategy 
                and boost your video's discoverability.
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                        <i class="fas fa-search mr-2 text-blue-500"></i>
                        How It Works
                    </h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Paste any YouTube video URL</li>
                        <li>• Instantly extract all video tags</li>
                        <li>• Copy individual tags or all at once</li>
                        <li>• Analyze competitor content strategies</li>
                        <li>• Discover trending keywords</li>
                        <li>• Improve your video SEO</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                        <i class="fas fa-target mr-2 text-green-500"></i>
                        Use Cases
                    </h3>
                    <ul class="space-y-2 text-gray-600">
                        <li>• Content creation and optimization</li>
                        <li>• Competitor analysis and research</li>
                        <li>• Keyword research for YouTube SEO</li>
                        <li>• Social media marketing strategies</li>
                        <li>• Trend analysis and discovery</li>
                        <li>• Educational content research</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-star text-yellow-500 mr-3"></i>
            Why Choose Our YouTube Tag Extractor?
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-red-500 text-4xl mb-4">🚀</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">Instant Extraction</h3>
                <p class="text-gray-600 text-sm">Get video tags instantly without any waiting time or complex setup</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-green-500 text-4xl mb-4">📊</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">Detailed Analysis</h3>
                <p class="text-gray-600 text-sm">Extract all tags with count and easy copy functionality</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-blue-500 text-4xl mb-4">🔄</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">Easy Copy</h3>
                <p class="text-gray-600 text-sm">Copy individual tags or all tags at once with one click</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-purple-500 text-4xl mb-4">💰</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">100% Free</h3>
                <p class="text-gray-600 text-sm">No registration, no limits, completely free to use forever</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-yellow-500 text-4xl mb-4">📱</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">Mobile Friendly</h3>
                <p class="text-gray-600 text-sm">Works perfectly on desktop, tablet, and mobile devices</p>
            </div>
            <div class="text-center p-6 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-indigo-500 text-4xl mb-4">🔒</div>
                <h3 class="font-bold text-gray-700 text-lg mb-2">Secure & Private</h3>
                <p class="text-gray-600 text-sm">No data stored, your privacy is completely protected</p>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-question-circle text-blue-600 mr-3"></i>
            YouTube Tag Extractor FAQs
        </h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="space-y-4">
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What are YouTube video tags?</h3>
                    <p class="text-gray-600">YouTube tags are keywords that help describe your video content and make it discoverable. They help YouTube's algorithm understand your video's topic and show it to relevant audiences.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">How do I use extracted tags for my videos?</h3>
                    <p class="text-gray-600">Use extracted tags as inspiration for your own content. Analyze successful videos in your niche, identify trending keywords, and incorporate relevant tags into your video metadata.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Can I extract tags from any YouTube video?</h3>
                    <p class="text-gray-600">Yes, you can extract tags from any public YouTube video. However, some creators may not use tags, in which case the tool will show "No tags found."</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Is the YouTube Tag Extractor free to use?</h3>
                    <p class="text-gray-600">Yes, our YouTube Tag Extractor is completely free to use with no registration required. You can extract tags from unlimited videos without any restrictions.</p>
                </div>
            </div>
            <div class="space-y-4">
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Why can't I see tags for some videos?</h3>
                    <p class="text-gray-600">Some video creators choose not to add tags to their videos, or the tags might be hidden. Additionally, very old videos might not have tags as this feature was added later to YouTube.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">How accurate is the tag extraction?</h3>
                    <p class="text-gray-600">Our tool uses YouTube's official API to extract tags, ensuring 100% accuracy. You get the exact tags that the video creator added to their video.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Can I use this for competitor analysis?</h3>
                    <p class="text-gray-600">Absolutely! This tool is perfect for analyzing competitor content strategies, discovering trending keywords in your niche, and finding inspiration for your own video tags.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Do you store the extracted data?</h3>
                    <p class="text-gray-600">No, we don't store any data. The tag extraction happens in real-time, and no information is saved on our servers, ensuring your privacy and security.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Related YouTube Tools -->
<div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
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
            <a href="youtube-title-extractor" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-blue-500 text-2xl mb-2">📝</div>
                <h3 class="font-bold text-gray-700 text-sm">Title Extractor</h3>
                <p class="text-gray-600 text-xs">Extract video titles</p>
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
            <a href="youtube-channel-statistics" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-yellow-500 text-2xl mb-2">📈</div>
                <h3 class="font-bold text-gray-700 text-sm">Channel Statistics</h3>
                <p class="text-gray-600 text-xs">Analyze channel metrics</p>
            </a>
            <a href="youtube-hashtag-extractor" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-indigo-500 text-2xl mb-2">#️⃣</div>
                <h3 class="font-bold text-gray-700 text-sm">Hashtag Extractor</h3>
                <p class="text-gray-600 text-xs">Extract video hashtags</p>
            </a>
            <a href="youtube-tag-generator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-pink-500 text-2xl mb-2">🏷️</div>
                <h3 class="font-bold text-gray-700 text-sm">Tag Generator</h3>
                <p class="text-gray-600 text-xs">Generate optimized tags</p>
            </a>
            <a href="youtube-title-generator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                <div class="text-teal-500 text-2xl mb-2">✨</div>
                <h3 class="font-bold text-gray-700 text-sm">Title Generator</h3>
                <p class="text-gray-600 text-xs">Create engaging titles</p>
            </a>
        </div>
    </div>
</div>

<!-- SEO Tips Section -->
<div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
    <div class="p-8">
        <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
            <i class="fas fa-lightbulb text-yellow-500 mr-3"></i>
            YouTube SEO Tips & Best Practices
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-rocket mr-2 text-blue-500"></i>
                    Tag Optimization Tips
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check-circle mt-1 mr-3 text-green-500"></i>
                        <span>Use a mix of broad and specific tags</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle mt-1 mr-3 text-green-500"></i>
                        <span>Include your main keyword as the first tag</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle mt-1 mr-3 text-green-500"></i>
                        <span>Research competitor tags for inspiration</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check-circle mt-1 mr-3 text-green-500"></i>
                        <span>Use 10-15 relevant tags per video</span>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                    <i class="fas fa-chart-line mr-2 text-green-500"></i>
                    Content Strategy
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-star mt-1 mr-3 text-yellow-500"></i>
                        <span>Analyze trending videos in your niche</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-star mt-1 mr-3 text-yellow-500"></i>
                        <span>Create content around popular tags</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-star mt-1 mr-3 text-yellow-500"></i>
                        <span>Monitor competitor tag strategies</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-star mt-1 mr-3 text-yellow-500"></i>
                        <span>Update tags based on performance</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>

<?php include 'footer.php'; ?>
