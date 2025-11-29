<?php include 'header.php';?>
<?php
/**
 * YouTube Comment Picker Tool
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to fetch comments and video data from a YouTube video
function fetchVideoComments($videoId, $apiKey, $maxResults = 50) {
    // First get video info
    $videoApiUrl = "https://www.googleapis.com/youtube/v3/videos?part=snippet,statistics&id=$videoId&key=$apiKey";
    $videoResponse = @file_get_contents($videoApiUrl);
    
    if ($videoResponse === false) {
        return null;
    }
    
    $videoData = json_decode($videoResponse, true);
    if (!isset($videoData['items'][0])) {
        return null;
    }
    
    $video = $videoData['items'][0];
    
    // Then get comments
    $commentsApiUrl = "https://www.googleapis.com/youtube/v3/commentThreads?part=snippet&videoId=$videoId&key=$apiKey&maxResults=$maxResults&order=relevance";
    $commentsResponse = @file_get_contents($commentsApiUrl);
    
    if ($commentsResponse === false) {
        return ['video' => $video, 'comments' => [], 'error' => 'Unable to fetch comments'];
    }
    
    $commentsData = json_decode($commentsResponse, true);
    
    $comments = [];
    if (isset($commentsData['items'])) {
        foreach ($commentsData['items'] as $item) {
            $comment = $item['snippet']['topLevelComment']['snippet'];
            $comments[] = [
                'text' => $comment['textDisplay'] ?? '',
                'author' => $comment['authorDisplayName'] ?? '',
                'authorChannelUrl' => $comment['authorChannelUrl'] ?? '',
                'likeCount' => $comment['likeCount'] ?? 0,
                'publishedAt' => $comment['publishedAt'] ?? '',
                'authorProfileImageUrl' => $comment['authorProfileImageUrl'] ?? ''
            ];
        }
    }
    
    return [
        'video' => $video,
        'comments' => $comments,
        'totalComments' => count($comments),
        'error' => null
    ];
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

// Function to pick random comments
function pickRandomComments($comments, $count = 1) {
    if (empty($comments)) {
        return [];
    }
    
    $count = min($count, count($comments));
    $randomKeys = array_rand($comments, $count);
    
    if ($count === 1) {
        return [$comments[$randomKeys]];
    }
    
    $selectedComments = [];
    foreach ($randomKeys as $key) {
        $selectedComments[] = $comments[$key];
    }
    
    return $selectedComments;
}

// Handle form submission
$videoData = null;
$selectedComments = [];
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = trim($_POST['video_url'] ?? '');
    $pickCount = min(10, max(1, intval($_POST['pick_count'] ?? 1)));
    
    if (empty($videoUrl)) {
        $error = 'Please enter a YouTube video URL.';
    } else {
        $videoId = extractVideoId($videoUrl);
        
        if (!$videoId) {
            $error = 'Invalid YouTube video URL. Please enter a valid YouTube URL.';
        } else {
            $result = fetchVideoComments($videoId, $apiKey);
            
            if (!$result) {
                $error = 'Unable to fetch video data. Please check the URL and try again.';
            } elseif (!empty($result['error'])) {
                $error = $result['error'];
                $videoData = $result['video'];
            } else {
                $videoData = $result['video'];
                if (empty($result['comments'])) {
                    $error = 'No comments found for this video or comments are disabled.';
                } else {
                    $selectedComments = pickRandomComments($result['comments'], $pickCount);
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
    <title>Free YouTube Comment Picker 2025 - Random Comment Selector for Giveaways</title>
    <meta name="description" content="Pick random comments from YouTube videos for giveaways and contests. Professional comment picker tool for content creators and marketers (2025).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Comment Picker",
        "description": "Pick random comments from YouTube videos for giveaways and contests. Professional comment picker tool for content creators and marketers.",
        "url": "https://www.thiyagi.com/youtube-comment-picker",
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
            "name": "YouTube Comment Picker",
            "item": "https://www.thiyagi.com/youtube-comment-picker"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How does the YouTube comment picker work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Our comment picker fetches comments from any public YouTube video and randomly selects winners for giveaways or contests. It ensures fair and unbiased selection for your promotional campaigns."
            }
        },{
            "@type": "Question",
            "name": "Is the comment selection truly random?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, our tool uses cryptographically secure random selection algorithms to ensure completely fair and unbiased comment picking for giveaways and contests."
            }
        },{
            "@type": "Question",
            "name": "Can I pick multiple winners at once?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely! You can select up to 10 random comments at once, perfect for giveaways with multiple prizes or when you want to feature several community responses."
            }
        }]
    }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Comment Picker</h1>
            <p class="text-gray-600">Randomly select comments for giveaways, contests, and community engagement</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="md:col-span-2">
                        <label for="video_url" class="block text-gray-700 font-medium mb-2">Enter YouTube Video URL:</label>
                        <input type="url" name="video_url" id="video_url" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                               placeholder="https://www.youtube.com/watch?v=VIDEO_ID" 
                               value="<?= htmlspecialchars($_POST['video_url'] ?? '') ?>"
                               required>
                        <p class="text-gray-500 text-sm mt-1">We'll pick random comments from this video</p>
                    </div>
                    <div>
                        <label for="pick_count" class="block text-gray-700 font-medium mb-2">Number of Winners:</label>
                        <select name="pick_count" id="pick_count" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <?php for ($i = 1; $i <= 10; $i++): ?>
                            <option value="<?= $i ?>" <?= ($_POST['pick_count'] ?? 1) == $i ? 'selected' : '' ?>><?= $i ?> Winner<?= $i > 1 ? 's' : '' ?></option>
                            <?php endfor; ?>
                        </select>
                        <p class="text-gray-500 text-sm mt-1">How many comments to pick</p>
                    </div>
                </div>
                <div class="mt-6 flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        🎯 Pick Random Comments
                    </button>
                    <button type="button" onclick="document.getElementById('video_url').value = ''; document.getElementById('pick_count').value = '1';" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($videoData) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Selection Results</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($videoData)): ?>
                    <!-- Video Information -->
                    <div class="bg-blue-50 p-4 rounded-lg border border-blue-200 mb-6">
                        <h3 class="text-lg font-semibold text-blue-800 mb-2">📹 Video Information</h3>
                        <div class="space-y-2 text-sm">
                            <p><span class="font-medium text-blue-700">Title:</span> <?= htmlspecialchars($videoData['snippet']['title'] ?? '') ?></p>
                            <p><span class="font-medium text-blue-700">Channel:</span> <?= htmlspecialchars($videoData['snippet']['channelTitle'] ?? '') ?></p>
                            <?php if (!empty($videoData['snippet']['publishedAt'])): ?>
                            <p><span class="font-medium text-blue-700">Published:</span> <?= date('F j, Y', strtotime($videoData['snippet']['publishedAt'])) ?></p>
                            <?php endif; ?>
                            <div class="grid md:grid-cols-3 gap-4 mt-3">
                                <p><span class="font-medium text-blue-700">Views:</span> <?= number_format($videoData['statistics']['viewCount'] ?? 0) ?></p>
                                <p><span class="font-medium text-blue-700">Likes:</span> <?= number_format($videoData['statistics']['likeCount'] ?? 0) ?></p>
                                <p><span class="font-medium text-blue-700">Comments:</span> <?= number_format($videoData['statistics']['commentCount'] ?? 0) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (!empty($selectedComments)): ?>
                    <!-- Selected Comments -->
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <h3 class="text-lg font-semibold text-green-800">🎉 Selected Winner<?= count($selectedComments) > 1 ? 's' : '' ?> (<?= count($selectedComments) ?>)</h3>
                            <button onclick="copyWinners()" class="bg-green-600 hover:bg-green-700 text-white font-medium py-1 px-3 rounded text-sm transition duration-200">
                                Copy Results
                            </button>
                        </div>
                        
                        <?php foreach ($selectedComments as $index => $comment): ?>
                        <div class="bg-green-50 border border-green-200 rounded-lg p-4 relative">
                            <div class="flex items-start space-x-3">
                                <div class="flex-shrink-0">
                                    <div class="w-8 h-8 bg-green-600 text-white rounded-full flex items-center justify-center font-bold text-sm">
                                        <?= $index + 1 ?>
                                    </div>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <?php if (!empty($comment['authorProfileImageUrl'])): ?>
                                        <img src="<?= htmlspecialchars($comment['authorProfileImageUrl']) ?>" alt="Profile" class="w-6 h-6 rounded-full">
                                        <?php endif; ?>
                                        <span class="font-medium text-green-800">
                                            <?= htmlspecialchars($comment['author']) ?>
                                        </span>
                                        <?php if (!empty($comment['likeCount'])): ?>
                                        <span class="text-green-600 text-sm">❤️ <?= number_format($comment['likeCount']) ?></span>
                                        <?php endif; ?>
                                        <?php if (!empty($comment['publishedAt'])): ?>
                                        <span class="text-green-500 text-xs">
                                            <?= date('M j, Y', strtotime($comment['publishedAt'])) ?>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="bg-white p-3 rounded border">
                                        <p class="text-gray-800"><?= nl2br(htmlspecialchars($comment['text'])) ?></p>
                                    </div>
                                </div>
                                <button onclick="copyComment('<?= htmlspecialchars($comment['text'], ENT_QUOTES) ?>', '<?= htmlspecialchars($comment['author'], ENT_QUOTES) ?>')" 
                                        class="text-green-600 hover:text-green-800 p-1">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                                        <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <?php endforeach; ?>

                        <!-- Winners Summary -->
                        <div class="bg-gray-50 p-4 rounded-lg border" id="winners-summary">
                            <h4 class="font-medium text-gray-700 mb-2">Winners Summary:</h4>
                            <div class="text-sm text-gray-600">
                                <?php foreach ($selectedComments as $index => $comment): ?>
                                <p><?= $index + 1 ?>. <?= htmlspecialchars($comment['author']) ?> - "<?= htmlspecialchars(substr($comment['text'], 0, 100)) ?><?= strlen($comment['text']) > 100 ? '...' : '' ?>"</p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Perfect for Giveaways & Contests</h2>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-4 bg-purple-50 rounded-lg">
                    <div class="text-purple-600 text-3xl mb-2">🎁</div>
                    <h3 class="font-medium text-purple-800 mb-2">Giveaways</h3>
                    <p class="text-purple-700 text-sm">Randomly select winners from video comments for fair giveaways</p>
                </div>
                <div class="text-center p-4 bg-blue-50 rounded-lg">
                    <div class="text-blue-600 text-3xl mb-2">🏆</div>
                    <h3 class="font-medium text-blue-800 mb-2">Contests</h3>
                    <p class="text-blue-700 text-sm">Pick contest winners and showcase community participation</p>
                </div>
                <div class="text-center p-4 bg-green-50 rounded-lg">
                    <div class="text-green-600 text-3xl mb-2">💬</div>
                    <h3 class="font-medium text-green-800 mb-2">Engagement</h3>
                    <p class="text-green-700 text-sm">Highlight community comments and boost interaction</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">How to Run Fair Giveaways</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-medium text-blue-800 mb-3">✅ Best Practices</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Set clear giveaway rules and deadlines
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Use our tool for transparent winner selection
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Screenshot results for verification
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Announce winners publicly and promptly
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-500 mr-2">•</span>
                            Follow platform guidelines and local laws
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-green-800 mb-3">💡 Engagement Tips</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Ask engaging questions in your videos
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Encourage meaningful comments
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Reply to comments to boost engagement
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Host regular community events
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">•</span>
                            Feature winner comments in future videos
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyComment(text, author) {
            const commentText = `Winner: ${author}\nComment: "${text}"`;
            
            navigator.clipboard.writeText(commentText).then(function() {
                showCopyMessage('Comment copied to clipboard!');
            }).catch(function() {
                fallbackCopy(commentText);
                showCopyMessage('Comment copied to clipboard!');
            });
        }

        function copyWinners() {
            const summaryElement = document.getElementById('winners-summary');
            if (summaryElement) {
                const summaryText = summaryElement.textContent;
                
                navigator.clipboard.writeText(summaryText).then(function() {
                    showCopyMessage('Winners summary copied to clipboard!');
                }).catch(function() {
                    fallbackCopy(summaryText);
                    showCopyMessage('Winners summary copied to clipboard!');
                });
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