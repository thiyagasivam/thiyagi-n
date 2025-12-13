<?php include 'header.php';?>
<?php
/**
 * YouTube Title Checker Tool
 */

// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Function to fetch and analyze YouTube video title
function analyzeYouTubeTitle($videoId, $apiKey) {
    $apiUrl = "https://www.googleapis.com/youtube/v3/videos?part=snippet,statistics&id=$videoId&key=$apiKey";
    $response = @file_get_contents($apiUrl);
    
    if ($response === false) {
        return null;
    }
    
    $data = json_decode($response, true);

    if (isset($data['items'][0])) {
        $snippet = $data['items'][0]['snippet'];
        $stats = $data['items'][0]['statistics'] ?? [];
        
        $title = $snippet['title'] ?? '';
        
        return [
            'title' => $title,
            'channelTitle' => $snippet['channelTitle'] ?? '',
            'publishedAt' => $snippet['publishedAt'] ?? '',
            'viewCount' => $stats['viewCount'] ?? 0,
            'likeCount' => $stats['likeCount'] ?? 0,
            'commentCount' => $stats['commentCount'] ?? 0,
            'analysis' => analyzeTitleQuality($title),
        ];
    }
    return null;
}

// Function to analyze title quality
function analyzeTitleQuality($title) {
    $analysis = [
        'length' => strlen($title),
        'wordCount' => str_word_count($title),
        'issues' => [],
        'suggestions' => [],
        'score' => 0
    ];
    
    // Length analysis
    if ($analysis['length'] > 60) {
        $analysis['issues'][] = 'Title is longer than 60 characters and may be truncated in search results';
        $analysis['suggestions'][] = 'Consider shortening the title to under 60 characters';
    } elseif ($analysis['length'] < 30) {
        $analysis['issues'][] = 'Title might be too short for optimal SEO';
        $analysis['suggestions'][] = 'Consider adding more descriptive keywords';
    } else {
        $analysis['score'] += 25;
    }
    
    // Word count analysis
    if ($analysis['wordCount'] < 4) {
        $analysis['issues'][] = 'Very short title with few words';
        $analysis['suggestions'][] = 'Add more descriptive words for better engagement';
    } elseif ($analysis['wordCount'] > 12) {
        $analysis['issues'][] = 'Title has many words and might appear cluttered';
        $analysis['suggestions'][] = 'Consider using fewer, more impactful words';
    } else {
        $analysis['score'] += 25;
    }
    
    // Capitalization check
    if ($title === strtoupper($title)) {
        $analysis['issues'][] = 'Title is in ALL CAPS which can appear unprofessional';
        $analysis['suggestions'][] = 'Use proper title case capitalization';
    } elseif ($title === strtolower($title)) {
        $analysis['issues'][] = 'Title is in all lowercase which may affect readability';
        $analysis['suggestions'][] = 'Use proper title case capitalization';
    } else {
        $analysis['score'] += 20;
    }
    
    // Numbers check (often perform well)
    if (preg_match('/\d+/', $title)) {
        $analysis['score'] += 15;
        $analysis['suggestions'][] = 'Great! Numbers in titles often increase click-through rates';
    } else {
        $analysis['suggestions'][] = 'Consider adding numbers (e.g., "5 Tips", "Top 10") for better engagement';
    }
    
    // Power words check
    $powerWords = ['ultimate', 'best', 'top', 'amazing', 'incredible', 'secret', 'proven', 'complete', 'guide', 'how to', 'why', 'what', 'when', 'where'];
    $hasPowerWords = false;
    foreach ($powerWords as $word) {
        if (stripos($title, $word) !== false) {
            $hasPowerWords = true;
            break;
        }
    }
    
    if ($hasPowerWords) {
        $analysis['score'] += 15;
        $analysis['suggestions'][] = 'Good use of engaging power words!';
    } else {
        $analysis['suggestions'][] = 'Consider adding power words like "Ultimate", "Best", "Complete" for more engagement';
    }
    
    // Final score calculation and grade
    $analysis['grade'] = 'F';
    if ($analysis['score'] >= 90) $analysis['grade'] = 'A+';
    elseif ($analysis['score'] >= 80) $analysis['grade'] = 'A';
    elseif ($analysis['score'] >= 70) $analysis['grade'] = 'B';
    elseif ($analysis['score'] >= 60) $analysis['grade'] = 'C';
    elseif ($analysis['score'] >= 50) $analysis['grade'] = 'D';
    
    return $analysis;
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
$titleData = null;
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
            $titleData = analyzeYouTubeTitle($videoId, $apiKey);
            if (!$titleData || empty($titleData['title'])) {
                $error = 'Unable to fetch and analyze the title. Please check the URL and try again.';
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
    <title>Free YouTube Title Checker 2026 - Analyze Video Title Performance</title>
    <meta name="description" content="Analyze and check YouTube video titles for SEO optimization and performance. Professional title analysis tool for content creators (2026).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .score-circle {
            background: conic-gradient(from 0deg, #10b981 0%, #10b981 var(--score, 0%), #e5e7eb var(--score, 0%), #e5e7eb 100%);
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Title Checker",
        "description": "Analyze and check YouTube video titles for SEO optimization and performance. Professional title analysis tool for content creators.",
        "url": "https://www.thiyagi.com/youtube-title-checker",
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
            "name": "YouTube Title Checker",
            "item": "https://www.thiyagi.com/youtube-title-checker"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How do I check if my YouTube title is good?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Use our YouTube Title Checker to analyze your video title. We check length, readability, SEO factors, and provide a score with specific suggestions for improvement."
            }
        },{
            "@type": "Question",
            "name": "What makes a YouTube title effective?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Effective YouTube titles are 30-60 characters long, include relevant keywords, use power words, contain numbers when possible, and create curiosity while accurately describing the content."
            }
        },{
            "@type": "Question",
            "name": "Can I check titles of any YouTube video?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, you can analyze the title of any public YouTube video by pasting its URL. Our tool provides comprehensive analysis and improvement suggestions."
            }
        }]
    }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Title Checker</h1>
            <p class="text-gray-600">Analyze video titles for optimal performance and SEO</p>
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
                    <p class="text-gray-500 text-sm mt-1">We'll analyze the title and provide optimization suggestions</p>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Analyze Title
                    </button>
                    <button type="button" onclick="document.getElementById('video_url').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($titleData) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Title Analysis Results</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($titleData)): ?>
                    <div class="space-y-6">
                        <!-- Video Title Display -->
                        <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-semibold text-blue-800 mb-2">Video Title</h3>
                            <p class="text-gray-800 text-lg font-medium"><?= htmlspecialchars($titleData['title']) ?></p>
                            <div class="mt-2 text-sm text-blue-700">
                                <span class="font-medium">Channel:</span> <?= htmlspecialchars($titleData['channelTitle']) ?>
                            </div>
                        </div>

                        <!-- Score and Grade -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="relative w-32 h-32 mx-auto mb-4">
                                    <div class="w-full h-full rounded-full score-circle flex items-center justify-center" 
                                         style="--score: <?= $titleData['analysis']['score'] ?>%">
                                        <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center">
                                            <div class="text-center">
                                                <div class="text-2xl font-bold text-gray-800"><?= $titleData['analysis']['score'] ?></div>
                                                <div class="text-sm text-gray-600">Score</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-bold 
                                    <?php 
                                    echo $titleData['analysis']['grade'] === 'A+' || $titleData['analysis']['grade'] === 'A' ? 'text-green-600' : 
                                         ($titleData['analysis']['grade'] === 'B' ? 'text-yellow-600' : 'text-red-600'); 
                                    ?>">
                                    Grade: <?= $titleData['analysis']['grade'] ?>
                                </div>
                            </div>

                            <!-- Title Statistics -->
                            <div class="space-y-4">
                                <div class="bg-gray-50 p-4 rounded-lg">
                                    <div class="grid grid-cols-2 gap-4 text-sm">
                                        <div>
                                            <span class="font-medium text-gray-700">Length:</span>
                                            <span class="text-gray-900"><?= $titleData['analysis']['length'] ?> characters</span>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-700">Words:</span>
                                            <span class="text-gray-900"><?= $titleData['analysis']['wordCount'] ?> words</span>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-700">Views:</span>
                                            <span class="text-gray-900"><?= number_format($titleData['viewCount']) ?></span>
                                        </div>
                                        <div>
                                            <span class="font-medium text-gray-700">Likes:</span>
                                            <span class="text-gray-900"><?= number_format($titleData['likeCount']) ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Issues -->
                        <?php if (!empty($titleData['analysis']['issues'])): ?>
                        <div class="bg-red-50 p-4 rounded-lg border border-red-200">
                            <h3 class="text-lg font-semibold text-red-800 mb-3">⚠️ Issues Found</h3>
                            <ul class="list-disc pl-5 space-y-2">
                                <?php foreach ($titleData['analysis']['issues'] as $issue): ?>
                                <li class="text-red-700"><?= htmlspecialchars($issue) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <!-- Suggestions -->
                        <?php if (!empty($titleData['analysis']['suggestions'])): ?>
                        <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                            <h3 class="text-lg font-semibold text-green-800 mb-3">💡 Optimization Suggestions</h3>
                            <ul class="list-disc pl-5 space-y-2">
                                <?php foreach ($titleData['analysis']['suggestions'] as $suggestion): ?>
                                <li class="text-green-700"><?= htmlspecialchars($suggestion) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Title Optimization Guidelines</h2>
            <div class="prose max-w-none text-gray-700">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-green-800 mb-2">✅ Best Practices:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Keep titles 30-60 characters long</li>
                            <li>Include main keyword near the beginning</li>
                            <li>Use numbers and power words</li>
                            <li>Create curiosity without misleading</li>
                            <li>Make it emotionally compelling</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-red-800 mb-2">❌ Avoid These:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Clickbait that doesn't deliver</li>
                            <li>ALL CAPS or no capitalization</li>
                            <li>Excessive special characters</li>
                            <li>Keyword stuffing</li>
                            <li>Vague or generic titles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Scoring System</h2>
            <div class="grid md:grid-cols-4 gap-4">
                <div class="text-center p-4 bg-green-50 rounded-lg border border-green-200">
                    <div class="text-2xl font-bold text-green-600">90-100</div>
                    <div class="text-green-800 font-medium">A+ Excellent</div>
                </div>
                <div class="text-center p-4 bg-blue-50 rounded-lg border border-blue-200">
                    <div class="text-2xl font-bold text-blue-600">70-89</div>
                    <div class="text-blue-800 font-medium">B Good</div>
                </div>
                <div class="text-center p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                    <div class="text-2xl font-bold text-yellow-600">50-69</div>
                    <div class="text-yellow-800 font-medium">C Average</div>
                </div>
                <div class="text-center p-4 bg-red-50 rounded-lg border border-red-200">
                    <div class="text-2xl font-bold text-red-600">0-49</div>
                    <div class="text-red-800 font-medium">D-F Poor</div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php';?>
</html>