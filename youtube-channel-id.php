<?php include 'header.php';?>
<?php
/**
 * YouTube Channel ID Finder Tool - Enhanced Version
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to extract channel info from various URL formats
function extractChannelInfo($input) {
    $input = trim($input);
    
    // Handle different URL formats
    $patterns = [
        // Channel ID (UC...)
        '/^UC[a-zA-Z0-9_-]{22}$/' => ['type' => 'channel_id', 'value' => $input, 'description' => 'Direct Channel ID'],
        // Full channel URL with ID
        '/youtube\.com\/channel\/(UC[a-zA-Z0-9_-]{22})/' => ['type' => 'channel_id', 'description' => 'Channel URL with ID'],
        // Custom channel URL with @handle
        '/youtube\.com\/@([a-zA-Z0-9_.-]+)/' => ['type' => 'handle', 'description' => 'Channel Handle (@username)'],
        // Custom channel URL with /c/
        '/youtube\.com\/c\/([a-zA-Z0-9_-]+)/' => ['type' => 'custom_url', 'description' => 'Custom Channel URL'],
        // User URL (legacy)
        '/youtube\.com\/user\/([a-zA-Z0-9_-]+)/' => ['type' => 'legacy_username', 'description' => 'Legacy Username URL'],
    ];
    
    foreach ($patterns as $pattern => $info) {
        if (preg_match($pattern, $input, $matches)) {
            if (isset($matches[1])) {
                $info['value'] = $matches[1];
            }
            return $info;
        }
    }
    
    // If no pattern matches, assume it's a handle without @
    if (preg_match('/^[a-zA-Z0-9_.-]+$/', $input)) {
        return ['type' => 'handle', 'value' => $input, 'description' => 'Channel Handle (without @)'];
    }
    
    return null;
}

// Function to get channel ID and comprehensive info from handle or username
function getChannelInfoFromIdentifier($identifier, $apiKey) {
    // If already a channel ID, get channel info
    if ($identifier['type'] === 'channel_id') {
        return getChannelDetails($identifier['value'], $apiKey);
    }
    
    // For other types, search for the channel
    $searchQuery = $identifier['value'];
    if ($identifier['type'] === 'handle') {
        // Try both with and without @ symbol
        $searchUrl1 = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" . urlencode('@' . $searchQuery) . "&type=channel&key=$apiKey&maxResults=5";
        $searchUrl2 = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" . urlencode($searchQuery) . "&type=channel&key=$apiKey&maxResults=5";
    } else {
        $searchUrl1 = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" . urlencode($searchQuery) . "&type=channel&key=$apiKey&maxResults=5";
        $searchUrl2 = null;
    }
    
    // Try first search
    $response = @file_get_contents($searchUrl1);
    $channelId = null;
    
    if ($response !== false) {
        $data = json_decode($response, true);
        if (isset($data['items'][0]['id']['channelId'])) {
            $channelId = $data['items'][0]['id']['channelId'];
        }
    }
    
    // Try second search if first failed and we have a second URL
    if (!$channelId && $searchUrl2) {
        $response = @file_get_contents($searchUrl2);
        if ($response !== false) {
            $data = json_decode($response, true);
            if (isset($data['items'][0]['id']['channelId'])) {
                $channelId = $data['items'][0]['id']['channelId'];
            }
        }
    }
    
    if ($channelId) {
        return getChannelDetails($channelId, $apiKey);
    }
    
    return null;
}

// Function to get detailed channel information
function getChannelDetails($channelId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics,brandingSettings&id=$channelId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);
    
    if (isset($data['items'][0])) {
        $channel = $data['items'][0];
        $snippet = $channel['snippet'];
        $stats = $channel['statistics'] ?? [];
        $branding = $channel['brandingSettings'] ?? [];
        
        return [
            'channelId' => $channel['id'],
            'title' => $snippet['title'],
            'description' => $snippet['description'] ?? '',
            'customUrl' => $snippet['customUrl'] ?? '',
            'publishedAt' => $snippet['publishedAt'],
            'country' => $snippet['country'] ?? 'Not specified',
            'defaultLanguage' => $snippet['defaultLanguage'] ?? 'Not specified',
            'thumbnails' => $snippet['thumbnails'] ?? [],
            'subscriberCount' => $stats['subscriberCount'] ?? 0,
            'viewCount' => $stats['viewCount'] ?? 0,
            'videoCount' => $stats['videoCount'] ?? 0,
            'hiddenSubscriberCount' => $stats['hiddenSubscriberCount'] ?? false,
            'channelKeywords' => $branding['channel']['keywords'] ?? '',
            'bannerUrl' => $branding['image']['bannerExternalUrl'] ?? null
        ];
    }
    
    return null;
}

// Handle form submission
$inputInfo = null;
$channelData = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $channelInput = trim($_POST['channel_input'] ?? '');
    
    if (empty($channelInput)) {
        $error = 'Please enter a YouTube channel URL, handle, or ID.';
    } else {
        $inputInfo = extractChannelInfo($channelInput);
        
        if (!$inputInfo) {
            $error = 'Invalid YouTube channel format. Please check your input.';
        } else {
            $channelData = getChannelInfoFromIdentifier($inputInfo, $apiKey);
            
            if (!$channelData) {
                $error = 'Channel not found. Please check the URL or handle.';
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
    <title>Free YouTube Channel ID Finder 2026 - Extract Channel IDs & Info</title>
    <meta name="description" content="Find YouTube channel IDs from URLs, handles, or usernames. Get comprehensive channel information including statistics and details (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Channel ID Finder",
        "description": "Find YouTube channel IDs from URLs, handles, or usernames. Get comprehensive channel information including statistics and details.",
        "url": "https://www.thiyagi.com/youtube-channel-id",
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
            "name": "YouTube Channel ID Finder",
            "item": "https://www.thiyagi.com/youtube-channel-id"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What is a YouTube Channel ID?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A YouTube Channel ID is a unique 24-character identifier that starts with 'UC' followed by 22 characters. It's used by YouTube's API and various tools to identify channels uniquely, regardless of custom URLs or handles."
            }
        },{
            "@type": "Question",
            "name": "How do I find a YouTube Channel ID from a handle?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Enter the channel handle (like @channelname) or the full channel URL into our tool. We'll automatically detect the format and find the corresponding Channel ID using YouTube's Data API."
            }
        },{
            "@type": "Question",
            "name": "Can I get channel statistics along with the ID?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, our tool provides comprehensive channel information including subscriber count, total views, video count, channel creation date, and other relevant statistics along with the Channel ID."
            }
        }]
    }
    </script>

    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                showNotification('Copied to clipboard!', 'success');
            }, function(err) {
                showNotification('Failed to copy', 'error');
            });
        }

        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg ${
                type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
            }`;
            notification.textContent = message;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 3000);
        }

        function generateApiCall(channelId) {
            const apiCall = `https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=${channelId}&key=YOUR_API_KEY`;
            copyToClipboard(apiCall);
        }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Channel ID Finder</h1>
            <p class="text-gray-600">Extract Channel IDs and comprehensive channel information from URLs or handles</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="channel_input" class="block text-gray-700 font-medium mb-2">Enter YouTube Channel Information:</label>
                    <input type="text" name="channel_input" id="channel_input" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="Channel URL, @handle, or Channel ID"
                           value="<?= htmlspecialchars($_POST['channel_input'] ?? '') ?>"
                           required>
                    <div class="mt-2 text-sm text-gray-600">
                        <p class="font-medium mb-1">Supported formats:</p>
                        <ul class="space-y-1 text-xs">
                            <li>• Channel URL: https://www.youtube.com/channel/UC...</li>
                            <li>• Handle: @channelhandle or https://www.youtube.com/@channelhandle</li>
                            <li>• Custom URL: https://www.youtube.com/c/channelname</li>
                            <li>• Channel ID: UC1234567890ABCDEF</li>
                        </ul>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        🔍 Find Channel ID
                    </button>
                    <button type="button" onclick="document.getElementById('channel_input').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($channelData) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Channel ID Results</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($channelData) && !empty($inputInfo)): ?>
                    <!-- Input Analysis -->
                    <div class="bg-blue-50 p-4 rounded-lg border border-blue-200 mb-6">
                        <h4 class="text-lg font-semibold text-blue-800 mb-2">📝 Input Analysis</h4>
                        <div class="grid md:grid-cols-2 gap-4 text-sm">
                            <div>
                                <span class="font-medium text-blue-700">Input Type:</span>
                                <span class="text-blue-600"><?= htmlspecialchars($inputInfo['description']) ?></span>
                            </div>
                            <div>
                                <span class="font-medium text-blue-700">Detected Value:</span>
                                <span class="text-blue-600 font-mono"><?= htmlspecialchars($inputInfo['value']) ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Channel Header -->
                    <div class="bg-gradient-to-r from-green-50 to-blue-50 p-6 rounded-lg border border-green-200 mb-6">
                        <div class="flex items-start space-x-4">
                            <?php if (!empty($channelData['thumbnails']['medium']['url'])): ?>
                            <img src="<?= htmlspecialchars($channelData['thumbnails']['medium']['url']) ?>" 
                                 alt="Channel Thumbnail" 
                                 class="w-20 h-20 rounded-full border-4 border-white shadow-lg">
                            <?php endif; ?>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold text-gray-800 mb-2"><?= htmlspecialchars($channelData['title']) ?></h3>
                                <?php if (!empty($channelData['customUrl'])): ?>
                                <p class="text-green-600 font-medium mb-1">@<?= htmlspecialchars($channelData['customUrl']) ?></p>
                                <?php endif; ?>
                                <div class="flex items-center space-x-4 text-sm text-gray-600">
                                    <span>📅 Created: <?= date('F j, Y', strtotime($channelData['publishedAt'])) ?></span>
                                    <span>🌍 Country: <?= htmlspecialchars($channelData['country']) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Channel ID Section -->
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200 mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">🆔 Channel ID Information</h4>
                        <div class="space-y-4">
                            <div class="bg-white p-4 rounded border">
                                <div class="flex items-center justify-between mb-2">
                                    <label class="font-medium text-gray-700">Channel ID:</label>
                                    <button onclick="copyToClipboard('<?= htmlspecialchars($channelData['channelId']) ?>')" 
                                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        📋 Copy
                                    </button>
                                </div>
                                <div class="bg-gray-100 p-3 rounded font-mono text-sm break-all">
                                    <?= htmlspecialchars($channelData['channelId']) ?>
                                </div>
                            </div>
                            
                            <div class="bg-white p-4 rounded border">
                                <div class="flex items-center justify-between mb-2">
                                    <label class="font-medium text-gray-700">Channel URL:</label>
                                    <button onclick="copyToClipboard('https://www.youtube.com/channel/<?= htmlspecialchars($channelData['channelId']) ?>')" 
                                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        📋 Copy
                                    </button>
                                </div>
                                <div class="bg-gray-100 p-3 rounded text-sm break-all">
                                    <a href="https://www.youtube.com/channel/<?= htmlspecialchars($channelData['channelId']) ?>" 
                                       target="_blank" 
                                       class="text-blue-600 hover:text-blue-800">
                                        https://www.youtube.com/channel/<?= htmlspecialchars($channelData['channelId']) ?>
                                    </a>
                                </div>
                            </div>

                            <?php if (!empty($channelData['customUrl'])): ?>
                            <div class="bg-white p-4 rounded border">
                                <div class="flex items-center justify-between mb-2">
                                    <label class="font-medium text-gray-700">Custom Handle:</label>
                                    <button onclick="copyToClipboard('@<?= htmlspecialchars($channelData['customUrl']) ?>')" 
                                            class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                        📋 Copy
                                    </button>
                                </div>
                                <div class="bg-gray-100 p-3 rounded text-sm">
                                    <a href="https://www.youtube.com/@<?= htmlspecialchars($channelData['customUrl']) ?>" 
                                       target="_blank" 
                                       class="text-blue-600 hover:text-blue-800">
                                        @<?= htmlspecialchars($channelData['customUrl']) ?>
                                    </a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Channel Statistics -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                        <div class="bg-blue-50 p-6 rounded-lg border border-blue-200 text-center">
                            <div class="text-blue-600 text-3xl mb-2">👥</div>
                            <div class="text-2xl font-bold text-blue-800"><?= number_format($channelData['subscriberCount']) ?></div>
                            <div class="text-blue-600 text-sm">Subscribers</div>
                            <?php if ($channelData['hiddenSubscriberCount']): ?>
                            <div class="text-xs text-blue-500 mt-1">Count Hidden by Channel</div>
                            <?php endif; ?>
                        </div>
                        <div class="bg-green-50 p-6 rounded-lg border border-green-200 text-center">
                            <div class="text-green-600 text-3xl mb-2">👁️</div>
                            <div class="text-2xl font-bold text-green-800"><?= number_format($channelData['viewCount']) ?></div>
                            <div class="text-green-600 text-sm">Total Views</div>
                        </div>
                        <div class="bg-purple-50 p-6 rounded-lg border border-purple-200 text-center">
                            <div class="text-purple-600 text-3xl mb-2">🎬</div>
                            <div class="text-2xl font-bold text-purple-800"><?= number_format($channelData['videoCount']) ?></div>
                            <div class="text-purple-600 text-sm">Videos</div>
                        </div>
                    </div>

                    <!-- API Integration -->
                    <div class="bg-indigo-50 p-6 rounded-lg border border-indigo-200 mb-6">
                        <h4 class="text-lg font-semibold text-indigo-800 mb-4">🔧 API Integration</h4>
                        <div class="space-y-4">
                            <div>
                                <label class="font-medium text-indigo-700 mb-2 block">YouTube Data API Call:</label>
                                <div class="bg-white p-3 rounded border text-sm font-mono break-all">
                                    https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=<?= htmlspecialchars($channelData['channelId']) ?>&key=YOUR_API_KEY
                                </div>
                                <button onclick="generateApiCall('<?= htmlspecialchars($channelData['channelId']) ?>')" 
                                        class="mt-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium py-1 px-3 rounded">
                                    📋 Copy API Call
                                </button>
                            </div>
                            
                            <div class="grid md:grid-cols-2 gap-4 text-sm">
                                <div>
                                    <h5 class="font-medium text-indigo-700 mb-2">RSS Feed URL:</h5>
                                    <div class="bg-white p-2 rounded border text-xs break-all">
                                        https://www.youtube.com/feeds/videos.xml?channel_id=<?= htmlspecialchars($channelData['channelId']) ?>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="font-medium text-indigo-700 mb-2">Embed URL Format:</h5>
                                    <div class="bg-white p-2 rounded border text-xs break-all">
                                        https://www.youtube.com/embed/live_stream?channel=<?= htmlspecialchars($channelData['channelId']) ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Details -->
                    <?php if (!empty($channelData['description']) || !empty($channelData['channelKeywords'])): ?>
                    <div class="bg-yellow-50 p-6 rounded-lg border border-yellow-200">
                        <h4 class="text-lg font-semibold text-yellow-800 mb-4">📋 Additional Details</h4>
                        <?php if (!empty($channelData['description'])): ?>
                        <div class="mb-4">
                            <h5 class="font-medium text-yellow-700 mb-2">Channel Description:</h5>
                            <p class="text-yellow-600 text-sm bg-white p-3 rounded border">
                                <?= nl2br(htmlspecialchars(substr($channelData['description'], 0, 300))) ?>
                                <?= strlen($channelData['description']) > 300 ? '...' : '' ?>
                            </p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if (!empty($channelData['channelKeywords'])): ?>
                        <div>
                            <h5 class="font-medium text-yellow-700 mb-2">Channel Keywords:</h5>
                            <p class="text-yellow-600 text-sm bg-white p-3 rounded border">
                                <?= htmlspecialchars($channelData['channelKeywords']) ?>
                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Educational Content -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Understanding YouTube Channel IDs</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="text-blue-600 text-3xl mb-2">🎯</div>
                    <h3 class="font-medium text-blue-800 mb-2">API Development</h3>
                    <p class="text-blue-700 text-sm">Use Channel IDs for consistent API calls and data tracking</p>
                </div>
                <div class="text-center p-4 bg-green-50 rounded-lg">
                    <div class="text-green-600 text-3xl mb-2">📊</div>
                    <h3 class="font-medium text-green-800 mb-2">Analytics Tracking</h3>
                    <p class="text-green-700 text-sm">Monitor channel performance and growth over time</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Channel ID Use Cases</h2>
            <div class="grid md:grid-cols-2 gap-6 text-sm">
                <div>
                    <h3 class="font-medium text-gray-700 mb-2">Development Applications:</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><strong>YouTube Data API:</strong> Required for API requests</li>
                        <li><strong>RSS Feeds:</strong> Subscribe to channel video feeds</li>
                        <li><strong>Embed Integration:</strong> Embed channel content</li>
                        <li><strong>Analytics Tools:</strong> Track channel metrics</li>
                        <li><strong>Bot Development:</strong> Automate channel interactions</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium text-gray-700 mb-2">Business Applications:</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><strong>Competitor Analysis:</strong> Monitor competitor channels</li>
                        <li><strong>Influencer Outreach:</strong> Identify and contact creators</li>
                        <li><strong>Content Curation:</strong> Aggregate content from channels</li>
                        <li><strong>Partnership Management:</strong> Track partner channels</li>
                        <li><strong>Brand Monitoring:</strong> Watch brand mentions and collaborations</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php';?>
</html>