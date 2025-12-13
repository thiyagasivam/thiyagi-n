<?php include 'header.php';?>
<?php
/**
 * YouTube Video Statistics Analyzer Tool
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to fetch YouTube video statistics
function fetchVideoStatistics($videoId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/videos?part=statistics,snippet&id=$videoId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);

    if (isset($data['items'][0])) {
        $stats = $data['items'][0]['statistics'];
        return [
            'title' => $data['items'][0]['snippet']['title'],
            'channelTitle' => $data['items'][0]['snippet']['channelTitle'],
            'publishedAt' => $data['items'][0]['snippet']['publishedAt'],
            'views' => $stats['viewCount'] ?? 0,
            'likes' => $stats['likeCount'] ?? 0,
            'comments' => $stats['commentCount'] ?? 0,
        ];
    }
    return null;
}

// Function to extract video ID from YouTube URL
function extractVideoId($url) {
    $patterns = [
        '/youtube\.com\/watch\?v=([a-zA-Z0-9_-]+)/',
        '/youtu\.be\/([a-zA-Z0-9_-]+)/',
        '/youtube\.com\/embed\/([a-zA-Z0-9_-]+)/',
    ];
    
    foreach ($patterns as $pattern) {
        if (preg_match($pattern, $url, $matches)) {
            return $matches[1];
        }
    }
    return false;
}

// Handle form submission
$videoStats = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = trim($_POST['video_url'] ?? '');
    
    if (empty($videoUrl)) {
        $error = 'Please enter a YouTube video URL.';
    } else {
        $videoId = extractVideoId($videoUrl);
        
        if (!$videoId) {
            $error = 'Invalid YouTube video URL. Please enter a valid YouTube URL.';
        } else {
            $videoStats = fetchVideoStatistics($videoId, $apiKey);
            if (!$videoStats) {
                $error = 'Unable to fetch video statistics. Please check the URL and try again.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free YouTube Video Statistics Analyzer 2026 - Complete Analytics</title>
    <meta name="description" content="Get detailed YouTube video statistics including views, likes, comments, and engagement metrics. Professional video analytics tool for content creators (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .stat-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Video Statistics Analyzer",
        "description": "Get detailed YouTube video statistics including views, likes, comments, and engagement metrics for content creators and marketers.",
        "url": "https://www.thiyagi.com/youtube-video-statistics",
        "applicationCategory": "WebApplication",
        "operatingSystem": "Any",
        "permissions": "browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "provider": {
            "@type": "Organization",
            "name": "Thiyagi",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.thiyagi.com"
        },{
            "@type": "ListItem",
            "position": 2,
            "name": "YouTube Video Statistics",
            "item": "https://www.thiyagi.com/youtube-video-statistics"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How do I check YouTube video statistics?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Simply paste the YouTube video URL into our analyzer tool. We'll extract comprehensive statistics including view count, likes, comments, and engagement metrics instantly."
            }
        },{
            "@type": "Question",
            "name": "What YouTube statistics can I see?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can view video views, likes, comments, publication date, channel information, and calculate engagement rates for any public YouTube video."
            }
        },{
            "@type": "Question",
            "name": "Is the YouTube statistics analyzer free?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, our YouTube video statistics analyzer is completely free to use with no registration required. Get instant access to video analytics data."
            }
        }]
    }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Video Statistics Analyzer</h1>
            <p class="text-gray-600">Get comprehensive video analytics and performance metrics instantly</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="video_url" class="block text-gray-700 font-medium mb-2">Enter YouTube Video URL:</label>
                    <input type="url" name="video_url" id="video_url" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="https://www.youtube.com/watch?v=VIDEO_ID" 
                           value="<?= htmlspecialchars($_POST['video_url'] ?? '') ?>"
                           required>
                    <p class="text-gray-500 text-sm mt-1">Supports youtube.com and youtu.be URLs</p>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Analyze Video
                    </button>
                    <button type="button" onclick="document.getElementById('video_url').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($videoStats) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Analysis Results</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($videoStats)): ?>
                    <div class="space-y-6">
                        <!-- Video Information -->
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-semibold text-blue-800 mb-2">Video Information</h3>
                            <div class="space-y-2">
                                <p><span class="font-medium text-blue-700">Title:</span> <?= htmlspecialchars($videoStats['title']) ?></p>
                                <p><span class="font-medium text-blue-700">Channel:</span> <?= htmlspecialchars($videoStats['channelTitle']) ?></p>
                                <p><span class="font-medium text-blue-700">Published:</span> <?= date('F j, Y', strtotime($videoStats['publishedAt'])) ?></p>
                            </div>
                        </div>

                        <!-- Statistics Grid -->
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="stat-card bg-green-50 p-6 rounded-lg border border-green-200 text-center">
                                <div class="text-3xl font-bold text-green-600"><?= number_format($videoStats['views']) ?></div>
                                <div class="text-green-800 font-medium">Views</div>
                            </div>
                            <div class="stat-card bg-red-50 p-6 rounded-lg border border-red-200 text-center">
                                <div class="text-3xl font-bold text-red-600"><?= number_format($videoStats['likes']) ?></div>
                                <div class="text-red-800 font-medium">Likes</div>
                            </div>
                            <div class="stat-card bg-purple-50 p-6 rounded-lg border border-purple-200 text-center">
                                <div class="text-3xl font-bold text-purple-600"><?= number_format($videoStats['comments']) ?></div>
                                <div class="text-purple-800 font-medium">Comments</div>
                            </div>
                        </div>

                        <!-- Engagement Analysis -->
                        <?php if ($videoStats['views'] > 0): ?>
                        <div class="bg-gray-50 p-4 rounded-lg border">
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Engagement Metrics</h3>
                            <div class="grid md:grid-cols-2 gap-4 text-sm">
                                <?php 
                                $likeRate = ($videoStats['likes'] / $videoStats['views']) * 100;
                                $commentRate = ($videoStats['comments'] / $videoStats['views']) * 100;
                                ?>
                                <div>
                                    <span class="font-medium text-gray-700">Like Rate:</span>
                                    <span class="text-gray-900"><?= number_format($likeRate, 2) ?>%</span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">Comment Rate:</span>
                                    <span class="text-gray-900"><?= number_format($commentRate, 3) ?>%</span>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About YouTube Video Statistics</h2>
            <div class="prose max-w-none text-gray-700">
                <p class="mb-4">Our YouTube Video Statistics Analyzer provides comprehensive analytics for any public YouTube video. Track performance metrics including views, likes, comments, and engagement rates.</p>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-800 mb-2">✅ What You Get:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Real-time view counts</li>
                            <li>Like and comment statistics</li>
                            <li>Video publication information</li>
                            <li>Engagement rate calculations</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-800 mb-2">📊 Use Cases:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Content performance analysis</li>
                            <li>Competitor research</li>
                            <li>Trend analysis</li>
                            <li>Marketing campaign tracking</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">How to Use</h2>
            <div class="space-y-3">
                <div class="flex items-start space-x-3">
                    <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-medium">1</span>
                    <p class="text-gray-700">Copy the YouTube video URL from your browser</p>
                </div>
                <div class="flex items-start space-x-3">
                    <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-medium">2</span>
                    <p class="text-gray-700">Paste the URL in the input field above</p>
                </div>
                <div class="flex items-start space-x-3">
                    <span class="flex-shrink-0 w-6 h-6 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-medium">3</span>
                    <p class="text-gray-700">Click "Analyze Video" to get comprehensive statistics</p>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php';?>
</html>