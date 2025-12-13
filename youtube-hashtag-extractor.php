<?php include 'header.php';?>
<?php
/**
 * YouTube Hashtag Extractor Tool
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to extract hashtags from YouTube video
function extractHashtags($videoId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/videos?part=snippet,statistics&id=$videoId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);

    if (isset($data['items'][0])) {
        $snippet = $data['items'][0]['snippet'];
        $stats = $data['items'][0]['statistics'];
        
        // Extract hashtags from title and description
        $title = $snippet['title'] ?? '';
        $description = $snippet['description'] ?? '';
        $fullText = $title . ' ' . $description;
        
        // Find hashtags using regex
        preg_match_all('/#[\w\p{L}]+/u', $fullText, $matches);
        $hashtags = array_unique($matches[0]);
        
        // Also check for hashtags in tags (if available)
        $tags = $snippet['tags'] ?? [];
        
        return [
            'title' => $title,
            'description' => $description,
            'channelTitle' => $snippet['channelTitle'] ?? '',
            'publishedAt' => $snippet['publishedAt'] ?? '',
            'viewCount' => $stats['viewCount'] ?? 0,
            'likeCount' => $stats['likeCount'] ?? 0,
            'commentCount' => $stats['commentCount'] ?? 0,
            'hashtags' => array_values($hashtags),
            'tags' => $tags,
            'hashtagCount' => count($hashtags)
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

// Function to analyze hashtag effectiveness
function analyzeHashtagEffectiveness($hashtags, $viewCount, $likeCount) {
    $analysis = [];
    $engagementRate = $viewCount > 0 ? (($likeCount / $viewCount) * 100) : 0;
    
    foreach ($hashtags as $hashtag) {
        $length = strlen($hashtag);
        $type = 'general';
        
        // Categorize hashtag types
        if (strpos(strtolower($hashtag), 'viral') !== false || 
            strpos(strtolower($hashtag), 'trending') !== false || 
            strpos(strtolower($hashtag), 'fyp') !== false) {
            $type = 'viral';
        } elseif (preg_match('/\d/', $hashtag)) {
            $type = 'branded';
        } elseif ($length > 15) {
            $type = 'long-tail';
        } elseif ($length < 8) {
            $type = 'short';
        }
        
        $analysis[] = [
            'hashtag' => $hashtag,
            'length' => $length,
            'type' => $type,
            'effectiveness' => min(100, ($length < 20 && $length > 5) ? 85 : 60)
        ];
    }
    
    return $analysis;
}

// Handle form submission
$videoData = null;
$error = '';
$hashtagAnalysis = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = trim($_POST['video_url'] ?? '');
    
    if (empty($videoUrl)) {
        $error = 'Please enter a YouTube video URL.';
    } else {
        $videoId = extractVideoId($videoUrl);
        
        if (!$videoId) {
            $error = 'Invalid YouTube video URL. Please enter a valid YouTube URL.';
        } else {
            $videoData = extractHashtags($videoId, $apiKey);
            if (!$videoData) {
                $error = 'Unable to fetch video data. Please check the URL and try again.';
            } else {
                $hashtagAnalysis = analyzeHashtagEffectiveness(
                    $videoData['hashtags'], 
                    $videoData['viewCount'], 
                    $videoData['likeCount']
                );
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
    <title>Free YouTube Hashtag Extractor 2026 - Extract Tags from Any Video</title>
    <meta name="description" content="Extract hashtags and tags from any YouTube video. Analyze hashtag effectiveness and discover successful tagging strategies (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Hashtag Extractor",
        "description": "Extract hashtags and tags from any YouTube video. Analyze hashtag effectiveness and discover successful tagging strategies.",
        "url": "https://www.thiyagi.com/youtube-hashtag-extractor",
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
            "name": "YouTube Hashtag Extractor",
            "item": "https://www.thiyagi.com/youtube-hashtag-extractor"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "Can I see hashtags used by other YouTube videos?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can extract hashtags from any public YouTube video by entering the video URL in our hashtag extractor tool. This helps you analyze successful tagging strategies."
            }
        },{
            "@type": "Question",
            "name": "What's the difference between hashtags and tags on YouTube?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Hashtags (with #) appear publicly in titles and descriptions, while tags are hidden metadata used by YouTube's algorithm for categorization and search ranking."
            }
        },{
            "@type": "Question",
            "name": "How can I analyze competitor hashtags?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Use our hashtag extractor to analyze successful videos in your niche. Study which hashtags perform well and adapt similar strategies for your own content."
            }
        }]
    }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Hashtag Extractor</h1>
            <p class="text-gray-600">Extract hashtags and tags from any YouTube video to analyze tagging strategies</p>
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
                    <p class="text-gray-500 text-sm mt-1">We'll extract all hashtags and tags from this video</p>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Extract Hashtags
                    </button>
                    <button type="button" onclick="document.getElementById('video_url').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($videoData) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Extraction Results</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($videoData)): ?>
                    <!-- Video Information -->
                    <div class="bg-blue-50 p-4 rounded-lg border border-blue-200 mb-6">
                        <h3 class="text-lg font-semibold text-blue-800 mb-2">Video Information</h3>
                        <div class="space-y-2 text-sm">
                            <p><span class="font-medium text-blue-700">Title:</span> <?= htmlspecialchars($videoData['title']) ?></p>
                            <p><span class="font-medium text-blue-700">Channel:</span> <?= htmlspecialchars($videoData['channelTitle']) ?></p>
                            <?php if (!empty($videoData['publishedAt'])): ?>
                            <p><span class="font-medium text-blue-700">Published:</span> <?= date('F j, Y', strtotime($videoData['publishedAt'])) ?></p>
                            <?php endif; ?>
                            <div class="grid md:grid-cols-3 gap-4 mt-3">
                                <p><span class="font-medium text-blue-700">Views:</span> <?= number_format($videoData['viewCount']) ?></p>
                                <p><span class="font-medium text-blue-700">Likes:</span> <?= number_format($videoData['likeCount']) ?></p>
                                <p><span class="font-medium text-blue-700">Comments:</span> <?= number_format($videoData['commentCount']) ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Hashtags Section -->
                    <?php if (!empty($videoData['hashtags'])): ?>
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-green-800">📌 Extracted Hashtags (<?= $videoData['hashtagCount'] ?>)</h3>
                            <button onclick="copyHashtags()" class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-sm transition duration-200">
                                Copy All
                            </button>
                        </div>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($videoData['hashtags'] as $hashtag): ?>
                            <span class="inline-flex items-center bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded-full cursor-pointer hover:bg-green-200 transition-colors" 
                                  onclick="copyHashtag('<?= htmlspecialchars($hashtag) ?>')">
                                <?= htmlspecialchars($hashtag) ?>
                                <button type="button" class="ml-2 text-green-600 hover:text-green-800">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                                        <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                                    </svg>
                                </button>
                            </span>
                            <?php endforeach; ?>
                        </div>
                        
                        <textarea id="hashtags-output" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm h-20 bg-gray-50" readonly><?= htmlspecialchars(implode(' ', $videoData['hashtags'])) ?></textarea>
                    </div>

                    <!-- Hashtag Analysis -->
                    <?php if (!empty($hashtagAnalysis)): ?>
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-purple-800 mb-4">📊 Hashtag Analysis</h3>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm">
                                <thead class="bg-purple-50">
                                    <tr>
                                        <th class="px-4 py-2 text-left text-purple-800">Hashtag</th>
                                        <th class="px-4 py-2 text-center text-purple-800">Length</th>
                                        <th class="px-4 py-2 text-center text-purple-800">Type</th>
                                        <th class="px-4 py-2 text-center text-purple-800">Effectiveness</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <?php foreach ($hashtagAnalysis as $analysis): ?>
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 py-2 font-medium text-purple-700"><?= htmlspecialchars($analysis['hashtag']) ?></td>
                                        <td class="px-4 py-2 text-center"><?= $analysis['length'] ?></td>
                                        <td class="px-4 py-2 text-center">
                                            <span class="px-2 py-1 text-xs rounded-full 
                                                <?php 
                                                switch($analysis['type']) {
                                                    case 'viral': echo 'bg-red-100 text-red-800'; break;
                                                    case 'branded': echo 'bg-blue-100 text-blue-800'; break;
                                                    case 'long-tail': echo 'bg-yellow-100 text-yellow-800'; break;
                                                    case 'short': echo 'bg-green-100 text-green-800'; break;
                                                    default: echo 'bg-gray-100 text-gray-800';
                                                }
                                                ?>">
                                                <?= ucfirst(str_replace('-', ' ', $analysis['type'])) ?>
                                            </span>
                                        </td>
                                        <td class="px-4 py-2 text-center">
                                            <div class="flex items-center justify-center">
                                                <div class="w-16 bg-gray-200 rounded-full h-2 mr-2">
                                                    <div class="bg-purple-600 h-2 rounded-full" style="width: <?= $analysis['effectiveness'] ?>%"></div>
                                                </div>
                                                <span class="text-xs"><?= $analysis['effectiveness'] ?>%</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php else: ?>
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 text-yellow-700 p-4">
                        <p>No hashtags found in this video's title or description.</p>
                    </div>
                    <?php endif; ?>

                    <!-- Video Tags -->
                    <?php if (!empty($videoData['tags'])): ?>
                    <div class="mb-6">
                        <div class="flex justify-between items-center mb-4">
                            <h3 class="text-lg font-semibold text-blue-800">🏷️ Video Tags (<?= count($videoData['tags']) ?>)</h3>
                            <button onclick="copyTags()" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-1 px-3 rounded text-sm transition duration-200">
                                Copy All
                            </button>
                        </div>
                        
                        <div class="flex flex-wrap gap-2 mb-4">
                            <?php foreach ($videoData['tags'] as $tag): ?>
                            <span class="inline-flex items-center bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full cursor-pointer hover:bg-blue-200 transition-colors" 
                                  onclick="copyTag('<?= htmlspecialchars($tag) ?>')">
                                <?= htmlspecialchars($tag) ?>
                                <button type="button" class="ml-2 text-blue-600 hover:text-blue-800">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                                        <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                                    </svg>
                                </button>
                            </span>
                            <?php endforeach; ?>
                        </div>
                        
                        <textarea id="tags-output" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm h-20 bg-gray-50" readonly><?= htmlspecialchars(implode(', ', $videoData['tags'])) ?></textarea>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">How to Use Extracted Hashtags</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-medium text-green-800 mb-3">✅ Best Practices</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Analyze successful videos in your niche
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Adapt hashtags to your content theme
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Mix popular and niche-specific tags
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Test different hashtag combinations
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Monitor hashtag performance over time
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-blue-800 mb-3">📊 Hashtag Types Explained</h3>
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center p-2 bg-red-50 rounded">
                            <span class="w-3 h-3 bg-red-500 rounded-full mr-2"></span>
                            <span><strong>Viral:</strong> Trending, popular hashtags</span>
                        </div>
                        <div class="flex items-center p-2 bg-blue-50 rounded">
                            <span class="w-3 h-3 bg-blue-500 rounded-full mr-2"></span>
                            <span><strong>Branded:</strong> Channel or brand specific</span>
                        </div>
                        <div class="flex items-center p-2 bg-yellow-50 rounded">
                            <span class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></span>
                            <span><strong>Long-tail:</strong> Specific, detailed hashtags</span>
                        </div>
                        <div class="flex items-center p-2 bg-green-50 rounded">
                            <span class="w-3 h-3 bg-green-500 rounded-full mr-2"></span>
                            <span><strong>Short:</strong> Broad, general hashtags</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Competitive Analysis Tips</h2>
            <div class="prose max-w-none text-gray-700">
                <p class="mb-4">Use our hashtag extractor to analyze your competitors and discover successful tagging strategies:</p>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="p-4 bg-purple-50 rounded-lg text-center">
                        <div class="text-purple-600 text-2xl mb-2">🔍</div>
                        <h4 class="font-medium text-purple-800 mb-2">Research</h4>
                        <p class="text-purple-700 text-sm">Find top-performing videos in your niche</p>
                    </div>
                    <div class="p-4 bg-blue-50 rounded-lg text-center">
                        <div class="text-blue-600 text-2xl mb-2">📊</div>
                        <h4 class="font-medium text-blue-800 mb-2">Analyze</h4>
                        <p class="text-blue-700 text-sm">Extract and study their hashtag strategies</p>
                    </div>
                    <div class="p-4 bg-green-50 rounded-lg text-center">
                        <div class="text-green-600 text-2xl mb-2">🚀</div>
                        <h4 class="font-medium text-green-800 mb-2">Implement</h4>
                        <p class="text-green-700 text-sm">Adapt successful hashtags to your content</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyHashtag(hashtag) {
            navigator.clipboard.writeText(hashtag).then(function() {
                showCopyMessage('Hashtag copied!');
            }).catch(function() {
                fallbackCopy(hashtag);
                showCopyMessage('Hashtag copied!');
            });
        }

        function copyTag(tag) {
            navigator.clipboard.writeText(tag).then(function() {
                showCopyMessage('Tag copied!');
            }).catch(function() {
                fallbackCopy(tag);
                showCopyMessage('Tag copied!');
            });
        }

        function copyHashtags() {
            const output = document.getElementById('hashtags-output');
            if (output) {
                output.select();
                document.execCommand('copy');
                showCopyMessage('All hashtags copied to clipboard!');
            }
        }

        function copyTags() {
            const output = document.getElementById('tags-output');
            if (output) {
                output.select();
                document.execCommand('copy');
                showCopyMessage('All tags copied to clipboard!');
            }
        }

        function fallbackCopy(text) {
            const textArea = document.createElement('textarea');
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
        }

        function showCopyMessage(message) {
            // Create temporary notification
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