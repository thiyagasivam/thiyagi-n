<?php include 'header.php';?>
<?php
/**
 * YouTube Hashtag Generator Tool
 */

// Function to generate hashtags based on keywords
function generateHashtags($keywords, $category = 'general') {
    $hashtags = [];
    
    // Clean and prepare keywords
    $keywordList = array_filter(array_map('trim', explode(',', $keywords)));
    
    // Predefined trending hashtags by category
    $trendingTags = [
        'general' => ['viral', 'trending', 'fyp', 'foryou', 'subscribe', 'like', 'share', 'comment'],
        'gaming' => ['gaming', 'gamer', 'gameplay', 'esports', 'livestream', 'twitch', 'xbox', 'playstation', 'nintendo', 'pc'],
        'music' => ['music', 'song', 'artist', 'musician', 'cover', 'remix', 'beats', 'producer', 'studio', 'concert'],
        'tech' => ['technology', 'tech', 'gadgets', 'review', 'unboxing', 'smartphone', 'laptop', 'ai', 'software', 'coding'],
        'lifestyle' => ['lifestyle', 'vlog', 'daily', 'morning', 'routine', 'travel', 'food', 'fashion', 'fitness', 'wellness'],
        'education' => ['education', 'learning', 'tutorial', 'howto', 'tips', 'guide', 'school', 'study', 'knowledge', 'facts'],
        'entertainment' => ['entertainment', 'funny', 'comedy', 'prank', 'challenge', 'reaction', 'movie', 'tv', 'celebrity', 'news'],
        'beauty' => ['beauty', 'makeup', 'skincare', 'tutorial', 'cosmetics', 'hairstyle', 'fashion', 'style', 'diy', 'transformation'],
        'sports' => ['sports', 'fitness', 'workout', 'training', 'athlete', 'football', 'basketball', 'soccer', 'gym', 'motivation'],
        'business' => ['business', 'entrepreneur', 'marketing', 'success', 'money', 'investment', 'startup', 'finance', 'growth', 'tips']
    ];
    
    // Add direct keyword hashtags
    foreach ($keywordList as $keyword) {
        if (!empty($keyword)) {
            // Clean keyword for hashtag format
            $cleanKeyword = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($keyword));
            if (strlen($cleanKeyword) >= 3) {
                $hashtags[] = '#' . $cleanKeyword;
                
                // Add variations
                if (strlen($cleanKeyword) > 5) {
                    $hashtags[] = '#' . $cleanKeyword . 'life';
                    $hashtags[] = '#' . $cleanKeyword . 'tips';
                }
            }
        }
    }
    
    // Add category-specific trending tags
    if (isset($trendingTags[$category])) {
        foreach ($trendingTags[$category] as $tag) {
            $hashtags[] = '#' . $tag;
        }
    }
    
    // Add general trending tags
    foreach ($trendingTags['general'] as $tag) {
        $hashtags[] = '#' . $tag;
    }
    
    // Add combination hashtags
    if (count($keywordList) >= 2) {
        for ($i = 0; $i < min(3, count($keywordList) - 1); $i++) {
            $combo = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($keywordList[$i] . $keywordList[$i + 1]));
            if (strlen($combo) <= 20 && strlen($combo) >= 6) {
                $hashtags[] = '#' . $combo;
            }
        }
    }
    
    // Add seasonal/time-based hashtags
    $month = date('n');
    $seasonalTags = [
        1 => ['newyear', 'january', 'winter', 'resolution'],
        2 => ['february', 'valentine', 'love', 'winter'],
        3 => ['march', 'spring', 'fresh'],
        4 => ['april', 'spring', 'easter'],
        5 => ['may', 'spring', 'bloom'],
        6 => ['june', 'summer', 'vacation'],
        7 => ['july', 'summer', 'vacation'],
        8 => ['august', 'summer', 'vacation'],
        9 => ['september', 'fall', 'autumn', 'backtoschool'],
        10 => ['october', 'halloween', 'autumn'],
        11 => ['november', 'thanksgiving', 'autumn'],
        12 => ['december', 'christmas', 'holidays', 'winter']
    ];
    
    if (isset($seasonalTags[$month])) {
        foreach (array_slice($seasonalTags[$month], 0, 2) as $seasonalTag) {
            $hashtags[] = '#' . $seasonalTag;
        }
    }
    
    // Remove duplicates and limit
    $hashtags = array_unique($hashtags);
    return array_slice($hashtags, 0, 30);
}

// Handle form submission
$generatedHashtags = [];
$characterCount = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $keywords = trim($_POST['keywords'] ?? '');
    $category = $_POST['category'] ?? 'general';
    
    if (!empty($keywords)) {
        $generatedHashtags = generateHashtags($keywords, $category);
        $characterCount = strlen(implode(' ', $generatedHashtags));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free YouTube Hashtag Generator 2026 - Trending Tags for Better Reach</title>
    <meta name="description" content="Generate trending YouTube hashtags for better video reach and SEO. Professional hashtag generator with category-specific tags and viral combinations (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Hashtag Generator",
        "description": "Generate trending YouTube hashtags for better video reach and SEO. Professional hashtag generator with category-specific tags and viral combinations.",
        "url": "https://www.thiyagi.com/youtube-hashtag-generator",
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
            "name": "YouTube Hashtag Generator",
            "item": "https://www.thiyagi.com/youtube-hashtag-generator"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How many hashtags should I use on YouTube?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "YouTube recommends using 3-5 relevant hashtags per video. You can use up to 15 hashtags, but focus on quality over quantity. The first 3 hashtags appear above your video title."
            }
        },{
            "@type": "Question",
            "name": "Do hashtags help YouTube SEO?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, hashtags can improve YouTube SEO by helping your video appear in hashtag search results and related videos. Use relevant, specific hashtags that match your content and target audience."
            }
        },{
            "@type": "Question",
            "name": "What makes a good YouTube hashtag?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Good YouTube hashtags are relevant to your content, specific to your niche, moderately popular (not oversaturated), and help viewers discover your videos. Mix broad and niche-specific hashtags."
            }
        }]
    }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Hashtag Generator</h1>
            <p class="text-gray-600">Generate trending hashtags to boost your video reach and engagement</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="keywords" class="block text-gray-700 font-medium mb-2">Keywords (comma-separated):</label>
                        <textarea name="keywords" id="keywords" rows="4"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                  placeholder="gaming, tutorial, tips, funny, review"
                                  required><?= htmlspecialchars($_POST['keywords'] ?? '') ?></textarea>
                        <p class="text-gray-500 text-sm mt-1">Enter keywords related to your video content</p>
                    </div>
                    <div>
                        <label for="category" class="block text-gray-700 font-medium mb-2">Video Category:</label>
                        <select name="category" id="category" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="general" <?= ($_POST['category'] ?? '') === 'general' ? 'selected' : '' ?>>General</option>
                            <option value="gaming" <?= ($_POST['category'] ?? '') === 'gaming' ? 'selected' : '' ?>>Gaming</option>
                            <option value="music" <?= ($_POST['category'] ?? '') === 'music' ? 'selected' : '' ?>>Music</option>
                            <option value="tech" <?= ($_POST['category'] ?? '') === 'tech' ? 'selected' : '' ?>>Technology</option>
                            <option value="lifestyle" <?= ($_POST['category'] ?? '') === 'lifestyle' ? 'selected' : '' ?>>Lifestyle</option>
                            <option value="education" <?= ($_POST['category'] ?? '') === 'education' ? 'selected' : '' ?>>Education</option>
                            <option value="entertainment" <?= ($_POST['category'] ?? '') === 'entertainment' ? 'selected' : '' ?>>Entertainment</option>
                            <option value="beauty" <?= ($_POST['category'] ?? '') === 'beauty' ? 'selected' : '' ?>>Beauty & Fashion</option>
                            <option value="sports" <?= ($_POST['category'] ?? '') === 'sports' ? 'selected' : '' ?>>Sports & Fitness</option>
                            <option value="business" <?= ($_POST['category'] ?? '') === 'business' ? 'selected' : '' ?>>Business</option>
                        </select>
                        <p class="text-gray-500 text-sm mt-1">Select your video's main category</p>
                    </div>
                </div>
                <div class="mt-6 flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Generate Hashtags
                    </button>
                    <button type="button" onclick="document.getElementById('keywords').value = ''; document.getElementById('category').value = 'general';" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($generatedHashtags)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Generated Hashtags</h2>
                    <div class="text-sm text-gray-600">
                        <span class="<?= $characterCount > 500 ? 'text-red-600 font-medium' : '' ?>">
                            <?= $characterCount ?> characters
                        </span>
                        <?php if ($characterCount > 500): ?>
                        <span class="text-red-500 text-xs block">⚠️ Consider using fewer hashtags</span>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="mb-6">
                    <div class="flex flex-wrap gap-2 mb-4" id="hashtag-container">
                        <?php foreach ($generatedHashtags as $index => $hashtag): ?>
                        <span class="inline-flex items-center bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded-full hover:bg-blue-200 transition-colors cursor-pointer hashtag-tag" 
                              onclick="copyHashtag('<?= htmlspecialchars($hashtag) ?>')">
                            <?= htmlspecialchars($hashtag) ?>
                            <button type="button" class="ml-2 text-blue-600 hover:text-blue-800">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"></path>
                                    <path d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z"></path>
                                </svg>
                            </button>
                        </span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="border-t pt-4">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <button onclick="copyAllHashtags()" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg text-sm transition duration-200">
                            Copy All Hashtags
                        </button>
                        <button onclick="copyTop10Hashtags()" class="bg-yellow-600 hover:bg-yellow-700 text-white font-medium py-2 px-4 rounded-lg text-sm transition duration-200">
                            Copy Top 10
                        </button>
                        <button onclick="copyTop5Hashtags()" class="bg-purple-600 hover:bg-purple-700 text-white font-medium py-2 px-4 rounded-lg text-sm transition duration-200">
                            Copy Top 5 (Recommended)
                        </button>
                    </div>
                    <textarea id="hashtag-output" class="w-full px-4 py-3 border border-gray-300 rounded-lg text-sm h-24 bg-gray-50" readonly><?= htmlspecialchars(implode(' ', $generatedHashtags)) ?></textarea>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">YouTube Hashtag Best Practices</h2>
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-lg font-medium text-blue-800 mb-3">💡 Effective Hashtag Strategies</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            Use 3-5 relevant hashtags per video
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            Mix broad and niche-specific tags
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            Place hashtags in description or title
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            Research competitor hashtags
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            Use trending seasonal hashtags
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-medium text-red-800 mb-3">⚠️ Common Hashtag Mistakes</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            Using too many hashtags (over 15)
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            Irrelevant or misleading hashtags
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            Only using overly broad hashtags
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            Repeating the same hashtags always
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            Using banned or inappropriate tags
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Hashtag Categories Explained</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-medium text-blue-800 mb-2">🎮 Gaming</h4>
                    <p class="text-blue-700 text-sm">Perfect for gameplay videos, reviews, and gaming tutorials</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg">
                    <h4 class="font-medium text-green-800 mb-2">🎵 Music</h4>
                    <p class="text-green-700 text-sm">Ideal for songs, covers, music tutorials, and artist content</p>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg">
                    <h4 class="font-medium text-purple-800 mb-2">💻 Technology</h4>
                    <p class="text-purple-700 text-sm">Great for tech reviews, tutorials, and gadget unboxings</p>
                </div>
                <div class="p-4 bg-pink-50 rounded-lg">
                    <h4 class="font-medium text-pink-800 mb-2">🎭 Entertainment</h4>
                    <p class="text-pink-700 text-sm">Perfect for comedy, challenges, pranks, and reaction videos</p>
                </div>
                <div class="p-4 bg-yellow-50 rounded-lg">
                    <h4 class="font-medium text-yellow-800 mb-2">📚 Education</h4>
                    <p class="text-yellow-700 text-sm">Excellent for tutorials, how-to guides, and learning content</p>
                </div>
                <div class="p-4 bg-red-50 rounded-lg">
                    <h4 class="font-medium text-red-800 mb-2">💼 Business</h4>
                    <p class="text-red-700 text-sm">Suitable for entrepreneurship, marketing, and business tips</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyHashtag(hashtag) {
            navigator.clipboard.writeText(hashtag).then(function() {
                showCopyMessage('Hashtag copied!');
            }).catch(function() {
                // Fallback for older browsers
                const textArea = document.createElement('textarea');
                textArea.value = hashtag;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand('copy');
                document.body.removeChild(textArea);
                showCopyMessage('Hashtag copied!');
            });
        }

        function copyAllHashtags() {
            const output = document.getElementById('hashtag-output');
            output.select();
            document.execCommand('copy');
            showCopyMessage('All hashtags copied to clipboard!');
        }

        function copyTop10Hashtags() {
            const hashtags = document.getElementById('hashtag-output').value.split(' ').slice(0, 10).join(' ');
            navigator.clipboard.writeText(hashtags).then(function() {
                showCopyMessage('Top 10 hashtags copied!');
            });
        }

        function copyTop5Hashtags() {
            const hashtags = document.getElementById('hashtag-output').value.split(' ').slice(0, 5).join(' ');
            navigator.clipboard.writeText(hashtags).then(function() {
                showCopyMessage('Top 5 hashtags copied!');
            });
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