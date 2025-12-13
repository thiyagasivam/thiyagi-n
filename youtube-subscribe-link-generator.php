<?php include 'header.php';?>
<?php
/**
 * YouTube Subscribe Link Generator Tool
 */

// Function to extract channel info from various YouTube URL formats
function extractChannelInfo($input) {
    $input = trim($input);
    
    // Handle different URL formats
    $patterns = [
        // Channel ID (UC...)
        '/^UC[a-zA-Z0-9_-]{22}$/' => ['type' => 'id', 'value' => $input],
        // Full channel URL with ID
        '/youtube\.com\/channel\/(UC[a-zA-Z0-9_-]{22})/' => ['type' => 'id'],
        // Custom channel URL
        '/youtube\.com\/c\/([a-zA-Z0-9_-]+)/' => ['type' => 'custom'],
        '/youtube\.com\/@([a-zA-Z0-9_.-]+)/' => ['type' => 'handle'],
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
    
    // If no pattern matches, assume it's a username/handle
    if (preg_match('/^[a-zA-Z0-9_.-]+$/', $input)) {
        return ['type' => 'handle', 'value' => $input];
    }
    
    return null;
}

// Function to generate subscribe links
function generateSubscribeLinks($channelInfo) {
    $links = [];
    
    switch ($channelInfo['type']) {
        case 'id':
            $channelId = $channelInfo['value'];
            $links['channel'] = "https://www.youtube.com/channel/{$channelId}?sub_confirmation=1";
            break;
            
        case 'custom':
            $customName = $channelInfo['value'];
            $links['custom'] = "https://www.youtube.com/c/{$customName}?sub_confirmation=1";
            break;
            
        case 'handle':
            $handle = $channelInfo['value'];
            $links['handle'] = "https://www.youtube.com/@{$handle}?sub_confirmation=1";
            break;
            
        case 'user':
            $username = $channelInfo['value'];
            $links['user'] = "https://www.youtube.com/user/{$username}?sub_confirmation=1";
            break;
    }
    
    return $links;
}

// Handle form submission
$subscribeLinks = [];
$error = '';
$channelInput = '';
$qrCodeUrl = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $channelInput = trim($_POST['channel_input'] ?? '');
    
    if (empty($channelInput)) {
        $error = 'Please enter a YouTube channel URL, handle, or ID.';
    } else {
        $channelInfo = extractChannelInfo($channelInput);
        
        if (!$channelInfo) {
            $error = 'Invalid YouTube channel format. Please check your input.';
        } else {
            $subscribeLinks = generateSubscribeLinks($channelInfo);
            
            if (!empty($subscribeLinks)) {
                // Generate QR code URL for the first link
                $firstLink = array_values($subscribeLinks)[0];
                $qrCodeUrl = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" . urlencode($firstLink);
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
    <title>Free YouTube Subscribe Link Generator 2026 - Grow Your Channel</title>
    <meta name="description" content="Generate YouTube channel subscription links for easy subscriber growth. Professional subscription link creator for content creators and marketers (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Subscribe Link Generator",
        "description": "Generate YouTube channel subscription links for easy subscriber growth. Professional subscription link creator for content creators and marketers.",
        "url": "https://www.thiyagi.com/youtube-subscribe-link-generator",
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
            "name": "YouTube Subscribe Link Generator",
            "item": "https://www.thiyagi.com/youtube-subscribe-link-generator"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How does a YouTube subscribe link work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A YouTube subscribe link automatically redirects viewers to your channel's subscribe page with a confirmation dialog. Adding ?sub_confirmation=1 to any channel URL creates this direct subscription prompt."
            }
        },{
            "@type": "Question",
            "name": "Where should I use YouTube subscribe links?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Use subscribe links in video descriptions, social media posts, email signatures, websites, QR codes, and anywhere you want to make subscribing easier for potential viewers."
            }
        },{
            "@type": "Question",
            "name": "Do YouTube subscribe links help grow my channel?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, subscribe links remove friction from the subscription process by directly prompting viewers to subscribe, potentially increasing your subscription conversion rate compared to regular channel links."
            }
        }]
    }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Subscribe Link Generator</h1>
            <p class="text-gray-600">Create direct subscription links to grow your YouTube channel faster</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="channel_input" class="block text-gray-700 font-medium mb-2">Enter YouTube Channel Information:</label>
                    <input type="text" name="channel_input" id="channel_input" 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                           placeholder="Channel URL, @handle, or Channel ID"
                           value="<?= htmlspecialchars($channelInput) ?>"
                           required>
                    <div class="mt-2 text-sm text-gray-600">
                        <p class="font-medium mb-1">Supported formats:</p>
                        <ul class="space-y-1 text-xs">
                            <li>• Channel URL: https://www.youtube.com/channel/UC...</li>
                            <li>• Custom URL: https://www.youtube.com/c/channelname</li>
                            <li>• Handle: @channelhandle or https://www.youtube.com/@channelhandle</li>
                            <li>• Channel ID: UC1234567890ABCDEF</li>
                        </ul>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Generate Subscribe Link
                    </button>
                    <button type="button" onclick="document.getElementById('channel_input').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($subscribeLinks) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Generated Subscribe Links</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($subscribeLinks)): ?>
                    <div class="space-y-6">
                        <!-- Primary Subscribe Link -->
                        <?php $primaryLink = array_values($subscribeLinks)[0]; ?>
                        <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                            <h3 class="text-lg font-semibold text-green-800 mb-2">✅ Your Subscribe Link</h3>
                            <div class="space-y-3">
                                <div class="flex items-center justify-between bg-white p-3 rounded border">
                                    <code class="text-sm text-gray-800 break-all flex-1 mr-4"><?= htmlspecialchars($primaryLink) ?></code>
                                    <button onclick="copyLink('<?= htmlspecialchars($primaryLink, ENT_QUOTES) ?>')" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm transition duration-200">
                                        Copy
                                    </button>
                                </div>
                                <div class="flex space-x-2">
                                    <a href="<?= htmlspecialchars($primaryLink) ?>" target="_blank" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded text-sm transition duration-200">
                                        Test Link
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- QR Code -->
                        <?php if (!empty($qrCodeUrl)): ?>
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-semibold text-blue-800 mb-2">📱 QR Code</h3>
                            <div class="flex items-center space-x-4">
                                <img src="<?= htmlspecialchars($qrCodeUrl) ?>" alt="Subscribe QR Code" class="w-32 h-32 border rounded">
                                <div>
                                    <p class="text-blue-700 text-sm mb-2">Scan to subscribe directly to your channel</p>
                                    <button onclick="downloadQR()" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm transition duration-200">
                                        Download QR
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                        <!-- Usage Examples -->
                        <div class="bg-purple-50 p-4 rounded-lg border border-purple-200">
                            <h3 class="text-lg font-semibold text-purple-800 mb-3">💡 Usage Examples</h3>
                            <div class="space-y-4">
                                <div>
                                    <h4 class="font-medium text-purple-700 mb-1">HTML (for websites):</h4>
                                    <div class="bg-white p-2 rounded border text-sm font-mono">
                                        <code>&lt;a href="<?= htmlspecialchars($primaryLink) ?>" target="_blank"&gt;Subscribe to My Channel&lt;/a&gt;</code>
                                        <button onclick="copyCode(this.previousElementSibling.textContent)" class="ml-2 text-purple-600 hover:text-purple-800">📋</button>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-medium text-purple-700 mb-1">Markdown (for GitHub, Reddit, etc.):</h4>
                                    <div class="bg-white p-2 rounded border text-sm font-mono">
                                        <code>[Subscribe to My Channel](<?= htmlspecialchars($primaryLink) ?>)</code>
                                        <button onclick="copyCode(this.previousElementSibling.textContent)" class="ml-2 text-purple-600 hover:text-purple-800">📋</button>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="font-medium text-purple-700 mb-1">Social Media Caption:</h4>
                                    <div class="bg-white p-2 rounded border text-sm">
                                        <code>🔔 Don't forget to subscribe for more content! <?= htmlspecialchars($primaryLink) ?></code>
                                        <button onclick="copyCode(this.previousElementSibling.textContent)" class="ml-2 text-purple-600 hover:text-purple-800">📋</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">How to Use Subscribe Links Effectively</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-medium text-green-800 mb-3">✅ Best Practices</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Add links to video descriptions
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Include in social media bios
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Use QR codes in offline marketing
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Add to email signatures
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Share in community posts
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-blue-800 mb-3">💡 Pro Tips</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Use call-to-action text with links
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Track click-through rates
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Test different link placements
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Use shortened URLs for social media
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Include subscribe reminders in videos
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Channel Growth Statistics</h2>
            <div class="grid md:grid-cols-3 gap-6 text-center">
                <div class="p-4 bg-red-50 rounded-lg">
                    <div class="text-red-600 text-3xl mb-2">⬆️</div>
                    <h3 class="font-medium text-gray-800 mb-2">Direct Subscribe Links</h3>
                    <p class="text-red-600 text-sm">Can increase subscription rates by up to 30%</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <div class="text-green-600 text-3xl mb-2">🎯</div>
                    <h3 class="font-medium text-gray-800 mb-2">Call-to-Action</h3>
                    <p class="text-green-600 text-sm">Clear CTAs improve conversion by 25%</p>
                </div>
                <div class="p-4 bg-blue-50 rounded-lg">
                    <div class="text-blue-600 text-3xl mb-2">📱</div>
                    <h3 class="font-medium text-gray-800 mb-2">Mobile Friendly</h3>
                    <p class="text-blue-600 text-sm">70% of YouTube traffic is mobile</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyLink(link) {
            navigator.clipboard.writeText(link).then(function() {
                showCopyMessage('Subscribe link copied to clipboard!');
            }).catch(function() {
                fallbackCopy(link);
                showCopyMessage('Subscribe link copied to clipboard!');
            });
        }

        function copyCode(code) {
            navigator.clipboard.writeText(code).then(function() {
                showCopyMessage('Code copied to clipboard!');
            }).catch(function() {
                fallbackCopy(code);
                showCopyMessage('Code copied to clipboard!');
            });
        }

        function fallbackCopy(text) {
            const textArea = document.createElement('textarea');
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
        }

        function downloadQR() {
            const qrImg = document.querySelector('img[alt="Subscribe QR Code"]');
            const link = document.createElement('a');
            link.href = qrImg.src;
            link.download = 'youtube-subscribe-qr.png';
            link.click();
        }

        function showCopyMessage(message) {
            const notification = document.createElement('div');
            notification.textContent = message;
            notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 transform transition-transform duration-300';
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.transform = 'translateX(100%)';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 2000);
        }
    </script>
</body>
<?php include 'footer.php';?>
</html>
