<?php include 'header.php';?>

<?php
// Function to extract YouTube thumbnail URLs
function getYouTubeThumbnails($videoId) {
    $thumbnails = [
        'default' => [
            'url' => "https://img.youtube.com/vi/$videoId/default.jpg",
            'resolution' => '120x90',
            'description' => 'Default thumbnail (small)'
        ],
        'medium' => [
            'url' => "https://img.youtube.com/vi/$videoId/mqdefault.jpg",
            'resolution' => '320x180',
            'description' => 'Medium quality thumbnail'
        ],
        'high' => [
            'url' => "https://img.youtube.com/vi/$videoId/hqdefault.jpg",
            'resolution' => '480x360',
            'description' => 'High quality thumbnail'
        ],
        'standard' => [
            'url' => "https://img.youtube.com/vi/$videoId/sddefault.jpg",
            'resolution' => '640x480',
            'description' => 'Standard definition thumbnail'
        ],
        'maxres' => [
            'url' => "https://img.youtube.com/vi/$videoId/maxresdefault.jpg",
            'resolution' => '1280x720',
            'description' => 'Maximum resolution thumbnail (HD)'
        ],
    ];
    return $thumbnails;
}

// Function to extract video ID from various YouTube URL formats
function extractYouTubeVideoId($url) {
    $pattern = '/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/';
    preg_match($pattern, $url, $matches);
    return isset($matches[1]) ? $matches[1] : null;
}

// Handle form submission
$thumbnails = [];
$error = '';
$videoId = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = trim($_POST['video_url']);
    
    if (empty($videoUrl)) {
        $error = 'Please enter a YouTube video URL.';
    } else {
        $videoId = extractYouTubeVideoId($videoUrl);
        
        if ($videoId) {
            $thumbnails = getYouTubeThumbnails($videoId);
        } else {
            $error = 'Invalid YouTube video URL. Please enter a valid YouTube link.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title>YouTube Thumbnail Downloader 2025 - Download High Quality YouTube Thumbnails</title>
    <meta name="title" content="YouTube Thumbnail Downloader 2025 - Download High Quality YouTube Thumbnails">
    <meta name="description" content="Free YouTube thumbnail downloader tool 2025. Download YouTube video thumbnails in all available resolutions including HD, 4K, and maximum resolution. No registration required.">
    <meta name="keywords" content="youtube thumbnail downloader 2025, download youtube thumbnail, youtube thumbnail extractor, video thumbnail download, youtube image download, free thumbnail downloader 2025">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/youtube-thumbnail-downloader">
    <meta property="og:title" content="YouTube Thumbnail Downloader 2025 - Download High Quality YouTube Thumbnails">
    <meta property="og:description" content="Free YouTube thumbnail downloader tool 2025. Download YouTube video thumbnails in all available resolutions including HD, 4K, and maximum resolution. No registration required.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    <meta property="og:site_name" content="Thiyagi.com">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/youtube-thumbnail-downloader">
    <meta property="twitter:title" content="YouTube Thumbnail Downloader 2025 - Download High Quality YouTube Thumbnails">
    <meta property="twitter:description" content="Free YouTube thumbnail downloader tool 2025. Download YouTube video thumbnails in all available resolutions including HD, 4K, and maximum resolution. No registration required.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    <meta property="twitter:creator" content="@thiyagi">
    
    <!-- Additional Meta Tags -->
    <meta name="theme-color" content="#3B82F6">
    <meta name="msapplication-TileColor" content="#3B82F6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="YouTube Thumbnail Downloader">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/youtube-thumbnail-downloader">
    
    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://img.youtube.com">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Thumbnail Downloader 2025",
        "description": "Free YouTube thumbnail downloader tool 2025. Download YouTube video thumbnails in all available resolutions including HD, 4K, and maximum resolution. No registration required.",
        "url": "https://www.thiyagi.com/youtube-thumbnail-downloader",
        "applicationCategory": "Multimedia",
        "operatingSystem": "Any",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "author": {
            "@type": "Person",
            "name": "Thiyagi"
        },
        "provider": {
            "@type": "Organization",
            "name": "Thiyagi.com",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>

</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">YouTube Thumbnail Downloader 2025</h1>
        
        <!-- Description Section -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Download YouTube Thumbnails Instantly</h2>
            <p class="text-gray-600 mb-4">
                Our free YouTube thumbnail downloader allows you to extract and download thumbnails from any YouTube video in multiple resolutions. 
                Simply paste the YouTube video URL and get access to all available thumbnail sizes instantly.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h3 class="font-bold text-gray-700 mb-2">✓ Available Resolutions:</h3>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• Default (120x90px)</li>
                        <li>• Medium Quality (320x180px)</li>
                        <li>• High Quality (480x360px)</li>
                        <li>• Standard Definition (640x480px)</li>
                        <li>• Maximum Resolution HD (1280x720px)</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700 mb-2">✓ Supported URL Formats:</h3>
                    <ul class="text-gray-600 text-sm space-y-1">
                        <li>• youtube.com/watch?v=VIDEO_ID</li>
                        <li>• youtu.be/VIDEO_ID</li>
                        <li>• m.youtube.com/watch?v=VIDEO_ID</li>
                        <li>• youtube.com/embed/VIDEO_ID</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="video_url" class="block text-gray-700 font-bold mb-2">Enter YouTube Video URL:</label>
                <input type="url" name="video_url" id="video_url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., https://www.youtube.com/watch?v=VIDEO_ID" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Get Thumbnails</button>
        </form>
        <?php if (!empty($thumbnails)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Available Thumbnails:</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">
                    <?php foreach ($thumbnails as $type => $data): ?>
                        <div class="border rounded-lg overflow-hidden shadow-sm">
                            <img src="<?php echo htmlspecialchars($data['url']); ?>" alt="<?php echo htmlspecialchars($type); ?> thumbnail" class="w-full h-auto" loading="lazy">
                            <div class="p-4">
                                <p class="text-gray-700 font-bold"><?php echo ucfirst($type); ?></p>
                                <p class="text-gray-500 text-sm"><?php echo htmlspecialchars($data['resolution']); ?></p>
                                <p class="text-gray-600 text-xs mb-2"><?php echo htmlspecialchars($data['description']); ?></p>
                                <div class="flex gap-2">
                                    <a href="<?php echo htmlspecialchars($data['url']); ?>" download="<?php echo $videoId . '_' . $type; ?>.jpg" class="flex-1 bg-blue-500 text-white font-bold py-2 px-3 rounded-lg hover:bg-blue-700 transition duration-300 text-center text-sm">Download</a>
                                    <button onclick="copyToClipboard('<?php echo htmlspecialchars($data['url']); ?>')" class="bg-gray-500 text-white font-bold py-2 px-3 rounded-lg hover:bg-gray-700 transition duration-300 text-sm">Copy URL</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-6 bg-red-100 p-6 rounded-lg shadow-md">
                <p class="text-red-700 text-xl"><?php echo htmlspecialchars($error); ?></p>
                <div class="mt-4 text-sm text-red-600">
                    <p><strong>Common issues:</strong></p>
                    <ul class="list-disc list-inside mt-2">
                        <li>Make sure the URL is from YouTube</li>
                        <li>Check that the video is public and not private</li>
                        <li>Ensure the URL contains a valid video ID</li>
                    </ul>
                </div>
            </div>
        <?php endif; ?>
        
        <!-- FAQ Section -->
        <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
            <div class="space-y-4">
                <div>
                    <h3 class="font-bold text-gray-700">How do I use this YouTube thumbnail downloader?</h3>
                    <p class="text-gray-600 text-sm mt-1">Simply paste any YouTube video URL into the input field above and click "Get Thumbnails". You'll instantly see all available thumbnail resolutions that you can download.</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">What thumbnail resolutions are available?</h3>
                    <p class="text-gray-600 text-sm mt-1">We provide all YouTube thumbnail resolutions: Default (120x90), Medium (320x180), High Quality (480x360), Standard Definition (640x480), and Maximum Resolution HD (1280x720).</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">Is this tool completely free?</h3>
                    <p class="text-gray-600 text-sm mt-1">Yes! Our YouTube thumbnail downloader is 100% free to use. No registration, no payments, no limits. Download as many thumbnails as you need.</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">Can I download thumbnails from private videos?</h3>
                    <p class="text-gray-600 text-sm mt-1">No, you can only download thumbnails from public YouTube videos. Private or unlisted videos won't work with this tool.</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">What formats are the thumbnails in?</h3>
                    <p class="text-gray-600 text-sm mt-1">All YouTube thumbnails are downloaded in JPG format, which is the standard format used by YouTube for video thumbnails.</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">Can I process multiple videos at once?</h3>
                    <p class="text-gray-600 text-sm mt-1">Currently, you can process one video at a time. Simply paste each URL individually to download thumbnails from multiple videos.</p>
                </div>
                <div>
                    <h3 class="font-bold text-gray-700">How do I copy thumbnail URLs?</h3>
                    <p class="text-gray-600 text-sm mt-1">Each thumbnail has a "Copy URL" button that copies the direct image link to your clipboard for easy sharing or embedding.</p>
                </div>
            </div>
        </div>
        
        <!-- Features Section -->
        <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Why Choose Our YouTube Thumbnail Downloader?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-blue-500 text-3xl mb-2">🚀</div>
                    <h3 class="font-bold text-gray-700">Fast & Instant</h3>
                    <p class="text-gray-600 text-sm">Get thumbnails immediately without any waiting time</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-green-500 text-3xl mb-2">🆓</div>
                    <h3 class="font-bold text-gray-700">Completely Free</h3>
                    <p class="text-gray-600 text-sm">No registration, no payments, unlimited downloads</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-purple-500 text-3xl mb-2">📱</div>
                    <h3 class="font-bold text-gray-700">Mobile Friendly</h3>
                    <p class="text-gray-600 text-sm">Works perfectly on all devices and screen sizes</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-red-500 text-3xl mb-2">🎯</div>
                    <h3 class="font-bold text-gray-700">All Resolutions</h3>
                    <p class="text-gray-600 text-sm">Download thumbnails in all available sizes</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-yellow-500 text-3xl mb-2">🔒</div>
                    <h3 class="font-bold text-gray-700">Safe & Secure</h3>
                    <p class="text-gray-600 text-sm">No data stored, completely private and secure</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-indigo-500 text-3xl mb-2">⚡</div>
                    <h3 class="font-bold text-gray-700">No Software</h3>
                    <p class="text-gray-600 text-sm">Works in your browser, no downloads required</p>
                </div>
            </div>
        <!-- Related Tools Section -->
        <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Related YouTube Tools</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <a href="https://www.thiyagi.com/youtube-video-statistics" class="p-4 border rounded-lg hover:shadow-md transition duration-300">
                    <div class="text-red-500 text-2xl mb-2">📊</div>
                    <h3 class="font-bold text-gray-700 text-sm">Video Statistics</h3>
                    <p class="text-gray-600 text-xs">Get detailed video stats</p>
                </a>
                <a href="https://www.thiyagi.com/youtube-channel-logo-downloader" class="p-4 border rounded-lg hover:shadow-md transition duration-300">
                    <div class="text-red-500 text-2xl mb-2">🖼️</div>
                    <h3 class="font-bold text-gray-700 text-sm">Channel Logo Download</h3>
                    <p class="text-gray-600 text-xs">Download channel logos</p>
                </a>
                <a href="https://www.thiyagi.com/youtube-title-extractor" class="p-4 border rounded-lg hover:shadow-md transition duration-300">
                    <div class="text-red-500 text-2xl mb-2">📝</div>
                    <h3 class="font-bold text-gray-700 text-sm">Title Extractor</h3>
                    <p class="text-gray-600 text-xs">Extract video titles</p>
                </a>
                <a href="https://www.thiyagi.com/youtube-tag-extractor" class="p-4 border rounded-lg hover:shadow-md transition duration-300">
                    <div class="text-red-500 text-2xl mb-2">🏷️</div>
                    <h3 class="font-bold text-gray-700 text-sm">Tag Extractor</h3>
                    <p class="text-gray-600 text-xs">Extract video tags</p>
                </a>
            </div>
        </div>
    </div>
    
    <!-- JavaScript for copy functionality -->
    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(function() {
                // Create a temporary notification
                const notification = document.createElement('div');
                notification.textContent = 'URL copied to clipboard!';
                notification.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50';
                document.body.appendChild(notification);
                
                // Remove notification after 2 seconds
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 2000);
            }).catch(function(err) {
                console.error('Could not copy text: ', err);
                alert('Failed to copy URL to clipboard');
            });
        }

        // URL validation feedback
        document.getElementById('video_url').addEventListener('input', function() {
            const url = this.value;
            const isValid = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/.test(url);
            
            if (url && !isValid) {
                this.style.borderColor = '#EF4444';
                if (!document.getElementById('url-feedback')) {
                    const feedback = document.createElement('p');
                    feedback.id = 'url-feedback';
                    feedback.className = 'text-red-500 text-sm mt-1';
                    feedback.textContent = 'Please enter a valid YouTube URL';
                    this.parentNode.appendChild(feedback);
                }
            } else {
                this.style.borderColor = '';
                const feedback = document.getElementById('url-feedback');
                if (feedback) {
                    feedback.remove();
                }
            }
        });
    </script>
</body>
<?php include 'footer.php';?>

</html>
