<?php include 'header.php';?>
<?php
/**
 * YouTube Channel Banner Downloader Tool - Enhanced Version
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to extract channel info from various URL formats
function extractChannelInfo($input) {
    $input = trim($input);
    
    // Handle different URL formats
    $patterns = [
        // Channel ID (UC...)
        '/^UC[a-zA-Z0-9_-]{22}$/' => ['type' => 'id', 'value' => $input],
        // Full channel URL with ID
        '/youtube\.com\/channel\/(UC[a-zA-Z0-9_-]{22})/' => ['type' => 'id'],
        // Custom channel URL with @handle
        '/youtube\.com\/@([a-zA-Z0-9_.-]+)/' => ['type' => 'handle'],
        // Custom channel URL with /c/
        '/youtube\.com\/c\/([a-zA-Z0-9_-]+)/' => ['type' => 'custom'],
        // User URL (legacy)
        '/youtube\.com\/user\/([a-zA-Z0-9_-]+)/' => ['type' => 'user'],
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
        return ['type' => 'handle', 'value' => $input];
    }
    
    return null;
}

// Function to get channel ID from handle or username
function getChannelIdFromHandle($handle, $apiKey) {
    // Try searching for the channel
    $searchUrl = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" . urlencode($handle) . "&type=channel&key=$apiKey&maxResults=1";
    $response = @file_get_contents($searchUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);
    
    if (isset($data['items'][0]['id']['channelId'])) {
        return $data['items'][0]['id']['channelId'];
    }
    
    return null;
}

// Function to fetch comprehensive channel banner information
function fetchChannelBannerInfo($channelId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/channels?part=brandingSettings,snippet&id=$channelId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);
    
    if (isset($data['items'][0])) {
        $channel = $data['items'][0];
        $snippet = $channel['snippet'];
        $branding = $channel['brandingSettings'] ?? [];
        
        $result = [
            'channelId' => $channel['id'],
            'title' => $snippet['title'],
            'description' => $snippet['description'] ?? '',
            'customUrl' => $snippet['customUrl'] ?? '',
            'thumbnails' => $snippet['thumbnails'] ?? [],
            'bannerUrl' => null,
            'bannerInfo' => [],
            'channelKeywords' => $branding['channel']['keywords'] ?? ''
        ];
        
        // Get banner URL and generate different sizes
        if (isset($branding['image']['bannerExternalUrl'])) {
            $baseUrl = $branding['image']['bannerExternalUrl'];
            $result['bannerUrl'] = $baseUrl;
            
            // Generate different banner sizes
            $result['bannerInfo'] = [
                'TV Banner' => $baseUrl . '=w2560-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj',
                'Desktop Banner' => $baseUrl . '=w1546-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj',
                'Tablet Banner' => $baseUrl . '=w1140-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj',
                'Mobile Banner' => $baseUrl . '=w640-fcrop64=1,00005a57ffffa5a8-k-c0xffffffff-no-nd-rj',
                'Original Size' => $baseUrl
            ];
        }
        
        return $result;
    }
    
    return null;
}

// Handle form submission
$channelData = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $channelInput = trim($_POST['channel_input'] ?? '');
    
    if (empty($channelInput)) {
        $error = 'Please enter a YouTube channel URL, handle, or ID.';
    } else {
        $channelInfo = extractChannelInfo($channelInput);
        
        if (!$channelInfo) {
            $error = 'Invalid YouTube channel format. Please check your input.';
        } else {
            $channelId = null;
            
            if ($channelInfo['type'] === 'id') {
                $channelId = $channelInfo['value'];
            } else {
                $channelId = getChannelIdFromHandle($channelInfo['value'], $apiKey);
            }
            
            if (!$channelId) {
                $error = 'Channel not found. Please check the URL or handle.';
            } else {
                $channelData = fetchChannelBannerInfo($channelId, $apiKey);
                if (!$channelData) {
                    $error = 'Unable to fetch channel data. Please try again.';
                } elseif (empty($channelData['bannerUrl'])) {
                    $error = 'This channel does not have a banner image set.';
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
    <title>Free YouTube Channel Banner Downloader 2025 - HD Quality Downloads</title>
    <meta name="description" content="Download YouTube channel banners in HD quality for free. Get banners in multiple sizes for TV, desktop, tablet, and mobile views (2025).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Channel Banner Downloader",
        "description": "Download YouTube channel banners in HD quality for free. Get banners in multiple sizes for TV, desktop, tablet, and mobile views.",
        "url": "https://www.thiyagi.com/youtube-channel-banner-downloader",
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
            "name": "YouTube Banner Downloader",
            "item": "https://www.thiyagi.com/youtube-channel-banner-downloader"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What banner sizes can I download?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can download YouTube channel banners in multiple sizes: TV Banner (2560px), Desktop Banner (1546px), Tablet Banner (1140px), Mobile Banner (640px), and Original Size for different viewing platforms."
            }
        },{
            "@type": "Question",
            "name": "Can I download any YouTube channel banner?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can download banners from any public YouTube channel that has a banner image set. Private or terminated channels, or channels without banners cannot be processed."
            }
        },{
            "@type": "Question",
            "name": "Is it legal to download YouTube channel banners?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Channel banners are publicly visible content. However, they are copyrighted material owned by the channel owner. Use downloaded banners only for fair use purposes like research, education, or personal reference."
            }
        }]
    }
    </script>

    <script>
        function downloadImage(url, filename) {
            const link = document.createElement('a');
            link.href = url;
            link.download = filename;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            
            // Show notification
            showNotification('Banner download started!', 'success');
        }

        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                showNotification('URL copied to clipboard!', 'success');
            }, function(err) {
                showNotification('Failed to copy URL', 'error');
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

        function previewImage(url) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modal.style.display = 'flex';
            modalImg.src = url;
        }

        function closeModal() {
            document.getElementById('imageModal').style.display = 'none';
        }
    </script>
</head>
<body class="bg-gray-50">
    <!-- Image Preview Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50" style="display: none;" onclick="closeModal()">
        <div class="max-w-4xl max-h-full p-4">
            <img id="modalImage" class="max-w-full max-h-full rounded-lg shadow-2xl" alt="Banner Preview">
            <button onclick="closeModal()" class="absolute top-4 right-4 text-white text-2xl font-bold bg-black bg-opacity-50 rounded-full w-10 h-10 flex items-center justify-center">×</button>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Channel Banner Downloader</h1>
            <p class="text-gray-600">Download high-quality YouTube channel banners in multiple sizes</p>
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
                        🖼️ Get Banner
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
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Banner Download Results</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($channelData) && !empty($channelData['bannerUrl'])): ?>
                    <!-- Channel Info -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg border border-blue-200 mb-6">
                        <div class="flex items-start space-x-4">
                            <?php if (!empty($channelData['thumbnails']['medium']['url'])): ?>
                            <img src="<?= htmlspecialchars($channelData['thumbnails']['medium']['url']) ?>" 
                                 alt="Channel Thumbnail" 
                                 class="w-16 h-16 rounded-full border-4 border-white shadow-lg">
                            <?php endif; ?>
                            <div class="flex-1">
                                <h3 class="text-xl font-bold text-gray-800 mb-1"><?= htmlspecialchars($channelData['title']) ?></h3>
                                <?php if (!empty($channelData['customUrl'])): ?>
                                <p class="text-blue-600 font-medium mb-2">@<?= htmlspecialchars($channelData['customUrl']) ?></p>
                                <?php endif; ?>
                                <p class="text-sm text-gray-600">Channel ID: <?= htmlspecialchars($channelData['channelId']) ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Banner Preview -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">🖼️ Banner Preview</h4>
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <img src="<?= htmlspecialchars($channelData['bannerUrl']) ?>" 
                                 alt="Channel Banner" 
                                 class="w-full rounded-lg shadow-lg cursor-pointer hover:opacity-90 transition duration-200"
                                 onclick="previewImage('<?= htmlspecialchars($channelData['bannerUrl']) ?>')">
                            <p class="text-center text-sm text-gray-600 mt-2">Click to view full size</p>
                        </div>
                    </div>

                    <!-- Download Options -->
                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">📥 Download Options</h4>
                        <div class="grid md:grid-cols-2 gap-4">
                            <?php foreach ($channelData['bannerInfo'] as $size => $url): ?>
                            <div class="bg-gray-50 p-4 rounded-lg border">
                                <div class="flex items-center justify-between mb-2">
                                    <h5 class="font-medium text-gray-800"><?= htmlspecialchars($size) ?></h5>
                                    <div class="flex space-x-2">
                                        <button onclick="previewImage('<?= htmlspecialchars($url) ?>')" 
                                                class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                                            👁️ Preview
                                        </button>
                                        <button onclick="copyToClipboard('<?= htmlspecialchars($url) ?>')" 
                                                class="text-green-600 hover:text-green-800 text-sm font-medium">
                                            📋 Copy URL
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <?php
                                    $dimensions = [
                                        'TV Banner' => '2560 x 1440px (Recommended for TV)',
                                        'Desktop Banner' => '1546 x 423px (Desktop View)',
                                        'Tablet Banner' => '1140 x 312px (Tablet View)', 
                                        'Mobile Banner' => '640 x 175px (Mobile View)',
                                        'Original Size' => 'Full Resolution'
                                    ];
                                    ?>
                                    <p class="text-sm text-gray-600"><?= $dimensions[$size] ?? 'Custom Size' ?></p>
                                </div>
                                <button onclick="downloadImage('<?= htmlspecialchars($url) ?>', 'youtube_banner_<?= strtolower(str_replace(' ', '_', $size)) ?>.jpg')" 
                                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded transition duration-200">
                                    ⬇️ Download <?= htmlspecialchars($size) ?>
                                </button>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Banner Usage Guidelines -->
                    <div class="bg-yellow-50 p-6 rounded-lg border border-yellow-200">
                        <h4 class="text-lg font-semibold text-yellow-800 mb-4">⚠️ Usage Guidelines</h4>
                        <div class="grid md:grid-cols-2 gap-6 text-sm">
                            <div>
                                <h5 class="font-medium text-yellow-700 mb-2">Allowed Uses:</h5>
                                <ul class="space-y-1 text-yellow-600">
                                    <li>• Educational research and analysis</li>
                                    <li>• Personal reference and study</li>
                                    <li>• Fair use commentary and criticism</li>
                                    <li>• Design inspiration (create your own)</li>
                                </ul>
                            </div>
                            <div>
                                <h5 class="font-medium text-yellow-700 mb-2">Not Allowed:</h5>
                                <ul class="space-y-1 text-yellow-600">
                                    <li>• Using as your own channel banner</li>
                                    <li>• Commercial use without permission</li>
                                    <li>• Redistribution or resale</li>
                                    <li>• Claiming ownership of the design</li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-yellow-700 text-sm mt-4"><strong>Note:</strong> Channel banners are copyrighted material owned by their respective channel owners. Respect intellectual property rights.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Why Use Our Banner Downloader?</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-4 bg-green-50 rounded-lg">
                    <div class="text-green-600 text-3xl mb-2">📱</div>
                    <h3 class="font-medium text-green-800 mb-2">Multiple Sizes</h3>
                    <p class="text-green-700 text-sm">Download banners optimized for TV, desktop, tablet, and mobile viewing</p>
                </div>
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="text-blue-600 text-3xl mb-2">⚡</div>
                    <h3 class="font-medium text-blue-800 mb-2">High Quality</h3>
                    <p class="text-blue-700 text-sm">Get original resolution banners directly from YouTube's servers</p>
                </div>
                <div class="text-center p-4 bg-purple-50 rounded-lg">
                    <div class="text-purple-600 text-3xl mb-2">🎨</div>
                    <h3 class="font-medium text-purple-800 mb-2">Design Inspiration</h3>
                    <p class="text-purple-700 text-sm">Study successful channel designs for your own banner creation</p>
                </div>
            </div>
        </div>

        <!-- Educational Content -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">YouTube Channel Banner Best Practices</h2>
            <div class="grid md:grid-cols-2 gap-6 text-sm">
                <div>
                    <h3 class="font-medium text-gray-700 mb-2">Banner Dimensions:</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><strong>Recommended:</strong> 2560 x 1440 pixels</li>
                        <li><strong>Minimum:</strong> 2048 x 1152 pixels</li>
                        <li><strong>Safe Area:</strong> 1546 x 423 pixels (center)</li>
                        <li><strong>File Size:</strong> Maximum 6MB</li>
                        <li><strong>Format:</strong> JPG, PNG, BMP, or GIF</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-medium text-gray-700 mb-2">Design Tips:</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li><strong>Keep text central:</strong> Avoid edges for mobile compatibility</li>
                        <li><strong>Brand consistency:</strong> Match your channel's visual identity</li>
                        <li><strong>High contrast:</strong> Ensure text is readable on all devices</li>
                        <li><strong>Simple design:</strong> Avoid clutter for better recognition</li>
                        <li><strong>Update regularly:</strong> Keep banners fresh and relevant</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php';?>
</html>