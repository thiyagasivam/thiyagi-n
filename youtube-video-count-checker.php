<?php include 'header.php';?>
<?php
/**
 * YouTube Video Count Checker Tool
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to fetch channel ID from a custom handle
function getChannelIdFromHandle($handle, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=$handle&type=channel&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return false;
    }
    
    $data = json_decode($response, true);

    if (isset($data['items'][0]['id']['channelId'])) {
        return $data['items'][0]['id']['channelId'];
    }
    return false;
}

// Function to fetch video count from a YouTube channel
function getYouTubeVideoCount($channelId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/channels?part=statistics,snippet&id=$channelId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return false;
    }
    
    $data = json_decode($response, true);

    if (isset($data['items'][0])) {
        $stats = $data['items'][0]['statistics'];
        $snippet = $data['items'][0]['snippet'];
        return [
            'videoCount' => $stats['videoCount'] ?? 0,
            'subscriberCount' => $stats['subscriberCount'] ?? 0,
            'viewCount' => $stats['viewCount'] ?? 0,
            'channelTitle' => $snippet['title'] ?? 'Unknown',
            'description' => $snippet['description'] ?? '',
            'publishedAt' => $snippet['publishedAt'] ?? '',
        ];
    }
    return false;
}

// Function to extract channel ID from URL
function extractChannelInfo($url) {
    // Handle @username format
    if (preg_match('/\/@([a-zA-Z0-9_.-]+)/', $url, $matches)) {
        return ['type' => 'handle', 'value' => $matches[1]];
    }
    // Handle /channel/CHANNEL_ID format
    if (preg_match('/\/channel\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
        return ['type' => 'channel_id', 'value' => $matches[1]];
    }
    // Handle /c/CUSTOM_NAME format
    if (preg_match('/\/c\/([a-zA-Z0-9_-]+)/', $url, $matches)) {
        return ['type' => 'handle', 'value' => $matches[1]];
    }
    return false;
}

// Handle form submission
$channelStats = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $channelUrl = trim($_POST['channel_url'] ?? '');
    
    if (empty($channelUrl)) {
        $error = 'Please enter a YouTube channel URL.';
    } else {
        $channelInfo = extractChannelInfo($channelUrl);
        $channelId = '';

        if (!$channelInfo) {
            $error = 'Invalid YouTube channel URL format.';
        } else {
            if ($channelInfo['type'] === 'handle') {
                $channelId = getChannelIdFromHandle($channelInfo['value'], $apiKey);
                if (!$channelId) {
                    $error = 'Unable to find channel. Please check the URL.';
                }
            } else {
                $channelId = $channelInfo['value'];
            }

            if ($channelId) {
                $channelStats = getYouTubeVideoCount($channelId, $apiKey);
                if (!$channelStats) {
                    $error = 'Unable to fetch channel statistics. Please check the URL.';
                }
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
    <title>Free YouTube Video Count Checker 2025 - Channel Analytics</title>
    <meta name="description" content="Check total video count for any YouTube channel instantly. Professional channel analytics tool for content creators and researchers (2025).">
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
        "name": "YouTube Video Count Checker",
        "description": "Check total video count for any YouTube channel instantly. Professional channel analytics tool for content creators and researchers.",
        "url": "https://www.thiyagi.com/youtube-video-count-checker",
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
            "name": "YouTube Video Count Checker",
            "item": "https://www.thiyagi.com/youtube-video-count-checker"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How do I check how many videos a YouTube channel has?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Simply paste the YouTube channel URL into our checker tool. We'll instantly display the total number of videos, along with subscriber count and other channel statistics."
            }
        },{
            "@type": "Question",
            "name": "What YouTube channel URL formats are supported?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We support all YouTube channel URL formats including @username handles, /channel/ID, and /c/customname formats."
            }
        },{
            "@type": "Question",
            "name": "Is the video count checker accurate?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, our tool uses the official YouTube Data API to provide real-time, accurate video counts and channel statistics."
            }
        }]
    }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Video Count Checker</h1>
            <p class="text-gray-600">Check total video count and channel statistics instantly</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="channel_url" class="block text-gray-700 font-medium mb-2">Enter YouTube Channel URL:</label>
                    <input type="url" name="channel_url" id="channel_url" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="https://www.youtube.com/@channelname or https://www.youtube.com/channel/CHANNEL_ID" 
                           value="<?= htmlspecialchars($_POST['channel_url'] ?? '') ?>"
                           required>
                    <p class="text-gray-500 text-sm mt-1">Supports @username, /channel/ID, and /c/customname formats</p>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Check Video Count
                    </button>
                    <button type="button" onclick="document.getElementById('channel_url').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($channelStats) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Channel Statistics</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($channelStats)): ?>
                    <div class="space-y-6">
                        <!-- Channel Information -->
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-semibold text-blue-800 mb-2">Channel Information</h3>
                            <div class="space-y-2">
                                <p><span class="font-medium text-blue-700">Channel Name:</span> <?= htmlspecialchars($channelStats['channelTitle']) ?></p>
                                <?php if (!empty($channelStats['publishedAt'])): ?>
                                <p><span class="font-medium text-blue-700">Created:</span> <?= date('F j, Y', strtotime($channelStats['publishedAt'])) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- Statistics Grid -->
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="stat-card bg-green-50 p-6 rounded-lg border border-green-200 text-center">
                                <div class="text-3xl font-bold text-green-600"><?= number_format($channelStats['videoCount']) ?></div>
                                <div class="text-green-800 font-medium">Total Videos</div>
                            </div>
                            <div class="stat-card bg-red-50 p-6 rounded-lg border border-red-200 text-center">
                                <div class="text-3xl font-bold text-red-600"><?= number_format($channelStats['subscriberCount']) ?></div>
                                <div class="text-red-800 font-medium">Subscribers</div>
                            </div>
                            <div class="stat-card bg-purple-50 p-6 rounded-lg border border-purple-200 text-center">
                                <div class="text-3xl font-bold text-purple-600"><?= number_format($channelStats['viewCount']) ?></div>
                                <div class="text-purple-800 font-medium">Total Views</div>
                            </div>
                        </div>

                        <!-- Additional Metrics -->
                        <?php if ($channelStats['videoCount'] > 0 && $channelStats['viewCount'] > 0): ?>
                        <div class="bg-gray-50 p-4 rounded-lg border">
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">Channel Metrics</h3>
                            <div class="grid md:grid-cols-2 gap-4 text-sm">
                                <?php 
                                $avgViewsPerVideo = $channelStats['viewCount'] / $channelStats['videoCount'];
                                $subsPerVideo = $channelStats['subscriberCount'] / $channelStats['videoCount'];
                                ?>
                                <div>
                                    <span class="font-medium text-gray-700">Avg Views per Video:</span>
                                    <span class="text-gray-900"><?= number_format($avgViewsPerVideo) ?></span>
                                </div>
                                <div>
                                    <span class="font-medium text-gray-700">Subscribers per Video:</span>
                                    <span class="text-gray-900"><?= number_format($subsPerVideo, 1) ?></span>
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
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About YouTube Video Count Checker</h2>
            <div class="prose max-w-none text-gray-700">
                <p class="mb-4">Our YouTube Video Count Checker provides instant access to channel statistics including total video count, subscriber count, and total views for any public YouTube channel.</p>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-gray-800 mb-2">✅ What You Get:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Total video count</li>
                            <li>Subscriber statistics</li>
                            <li>Total channel views</li>
                            <li>Average metrics calculation</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-gray-800 mb-2">📊 Use Cases:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Channel growth tracking</li>
                            <li>Competitor analysis</li>
                            <li>Content strategy planning</li>
                            <li>Market research</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Supported URL Formats</h2>
            <div class="space-y-3">
                <div class="bg-gray-50 p-3 rounded border">
                    <code class="text-blue-600">https://www.youtube.com/@channelname</code>
                    <span class="text-gray-600 ml-2">(New handle format)</span>
                </div>
                <div class="bg-gray-50 p-3 rounded border">
                    <code class="text-blue-600">https://www.youtube.com/channel/CHANNEL_ID</code>
                    <span class="text-gray-600 ml-2">(Channel ID format)</span>
                </div>
                <div class="bg-gray-50 p-3 rounded border">
                    <code class="text-blue-600">https://www.youtube.com/c/customname</code>
                    <span class="text-gray-600 ml-2">(Custom URL format)</span>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php';?>
</html>