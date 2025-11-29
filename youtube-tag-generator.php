<?php include 'header.php';?>
<?php
/**
 * YouTube Tag Generator Tool
 */

// Function to generate comprehensive YouTube tags based on input keywords
function generateTags($keywords) {
    if (empty(trim($keywords))) {
        return [];
    }

    // Clean and process keywords
    $keywords = trim($keywords);
    $words = preg_split('/[,\s]+/', $keywords, -1, PREG_SPLIT_NO_EMPTY);
    
    // Remove duplicates and common stop words
    $words = array_unique($words);
    $stopWords = ['the', 'and', 'or', 'a', 'an', 'in', 'on', 'at', 'for', 'to', 'of', 'with', 'by', 'is', 'are', 'was', 'were'];
    $filteredWords = array_diff(array_map('strtolower', $words), $stopWords);
    
    if (empty($filteredWords)) {
        return [];
    }

    $mainKeyword = implode(' ', array_slice($filteredWords, 0, 2));
    $tags = [];
    
    // Generate basic tags
    foreach ($filteredWords as $word) {
        if (strlen($word) > 2) {
            $tags[] = $word;
        }
    }
    
    // Generate combination tags
    $wordArray = array_values($filteredWords);
    for ($i = 0; $i < count($wordArray) - 1; $i++) {
        if ($i < 5) { // Limit combinations
            $tags[] = $wordArray[$i] . ' ' . $wordArray[$i + 1];
        }
    }
    
    // Add popular YouTube tag formats
    $popularFormats = [
        $mainKeyword . ' tutorial',
        $mainKeyword . ' guide',
        $mainKeyword . ' tips',
        'how to ' . $mainKeyword,
        $mainKeyword . ' 2025',
        $mainKeyword . ' for beginners',
        'best ' . $mainKeyword,
        $mainKeyword . ' explained',
        $mainKeyword . ' review',
        $mainKeyword . ' vs',
    ];
    
    $tags = array_merge($tags, $popularFormats);
    
    // Remove duplicates and limit to reasonable number
    $tags = array_unique($tags);
    return array_slice($tags, 0, 20);
}

// Handle form submission
$tags = [];
$error = '';
$inputKeywords = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputKeywords = trim($_POST['keywords'] ?? '');
    
    if (empty($inputKeywords)) {
        $error = 'Please enter keywords to generate tags.';
    } else {
        $tags = generateTags($inputKeywords);
        if (empty($tags)) {
            $error = 'Unable to generate tags. Please try different keywords.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free YouTube Tag Generator 2025 - Generate SEO Tags for Videos</title>
    <meta name="description" content="Generate optimized YouTube tags for better video SEO and discoverability. Professional tag generator tool for content creators and marketers (2025).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .tag-item {
            transition: all 0.2s ease;
        }
        .tag-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .copy-all-btn {
            position: sticky;
            top: 1rem;
            z-index: 10;
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Tag Generator",
        "description": "Generate optimized YouTube tags for better video SEO and discoverability. Professional tag generator tool for content creators and marketers.",
        "url": "https://www.thiyagi.com/youtube-tag-generator",
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
            "name": "YouTube Tag Generator",
            "item": "https://www.thiyagi.com/youtube-tag-generator"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How do YouTube tags help with SEO?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "YouTube tags help the algorithm understand your video content, improve discoverability in search results, and suggest your video to relevant audiences. Good tags increase your video's visibility."
            }
        },{
            "@type": "Question",
            "name": "How many tags should I use for my YouTube video?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "YouTube allows up to 500 characters for tags. Use 10-15 relevant tags that accurately describe your content, including broad and specific keywords for optimal reach."
            }
        },{
            "@type": "Question",
            "name": "What makes effective YouTube tags?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Effective YouTube tags are relevant to your content, include target keywords, mix broad and specific terms, and reflect what viewers might search for when looking for your type of content."
            }
        }]
    }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Tag Generator</h1>
            <p class="text-gray-600">Generate optimized YouTube tags for better video SEO and discoverability</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="keywords" class="block text-gray-700 font-medium mb-2">Enter Keywords or Video Topic:</label>
                    <textarea name="keywords" id="keywords" rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                              placeholder="Example: digital marketing, SEO tips, social media strategy"
                              required><?= htmlspecialchars($inputKeywords) ?></textarea>
                    <p class="text-gray-500 text-sm mt-1">Enter keywords related to your video content</p>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Generate Tags
                    </button>
                    <button type="button" onclick="document.getElementById('keywords').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($tags) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Generated Tags</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($tags)): ?>
                    <div class="space-y-4">
                        <!-- Copy All Button -->
                        <div class="copy-all-btn flex justify-between items-center">
                            <div class="text-sm text-gray-600">
                                <?= count($tags) ?> tags generated • Total characters: <?= strlen(implode(', ', $tags)) ?>
                            </div>
                            <button onclick="copyAllTags()" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg text-sm transition duration-200">
                                Copy All Tags
                            </button>
                        </div>

                        <!-- Tags Grid -->
                        <div class="grid gap-3">
                            <?php foreach ($tags as $index => $tag): ?>
                            <div class="tag-item bg-blue-50 border border-blue-200 rounded-lg p-3 flex justify-between items-center cursor-pointer hover:bg-blue-100"
                                 onclick="copyTag('<?= htmlspecialchars($tag, ENT_QUOTES) ?>', this)">
                                <div class="flex items-center space-x-3">
                                    <span class="bg-blue-600 text-white text-xs font-medium px-2 py-1 rounded"><?= $index + 1 ?></span>
                                    <span class="text-gray-800 font-medium"><?= htmlspecialchars($tag) ?></span>
                                    <span class="text-xs text-gray-500">(<?= strlen($tag) ?> chars)</span>
                                </div>
                                <button class="text-blue-600 hover:text-blue-800 text-sm font-medium transition duration-200">
                                    Copy
                                </button>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Tag String for Easy Copy -->
                        <div class="bg-gray-50 p-4 rounded-lg border">
                            <h3 class="text-sm font-medium text-gray-700 mb-2">All Tags (Comma Separated):</h3>
                            <div class="relative">
                                <textarea id="all-tags-text" class="w-full p-3 border rounded text-sm h-20 resize-none" readonly><?= implode(', ', $tags) ?></textarea>
                                <button onclick="copyFromTextarea()" class="absolute top-2 right-2 bg-gray-600 hover:bg-gray-700 text-white px-2 py-1 rounded text-xs">
                                    Copy
                                </button>
                            </div>
                        </div>

                        <!-- Character Warning -->
                        <?php if (strlen(implode(', ', $tags)) > 500): ?>
                        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="text-yellow-800">
                                    <p class="font-medium">⚠️ Character Limit Warning</p>
                                    <p class="text-sm">Your tags exceed YouTube's 500 character limit. Consider removing some tags or use shorter variations.</p>
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
            <h2 class="text-xl font-semibold text-gray-800 mb-4">YouTube Tag Best Practices</h2>
            <div class="prose max-w-none text-gray-700">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-green-800 mb-2">✅ Best Practices:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Use relevant, descriptive keywords</li>
                            <li>Include both broad and specific tags</li>
                            <li>Add your main keyword first</li>
                            <li>Use 10-15 tags per video</li>
                            <li>Include trending keywords when relevant</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-red-800 mb-2">❌ Avoid These:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Irrelevant or misleading tags</li>
                            <li>Excessive tag stuffing</li>
                            <li>Using trademarked terms improperly</li>
                            <li>Copying competitor tags blindly</li>
                            <li>Exceeding 500 character limit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Tag Categories</h2>
            <div class="grid md:grid-cols-3 gap-4">
                <div class="p-4 bg-blue-50 rounded-lg border border-blue-200">
                    <h3 class="font-semibold text-blue-800 mb-2">🎯 Specific Tags</h3>
                    <p class="text-blue-700 text-sm">Exact topic, detailed keywords</p>
                </div>
                <div class="p-4 bg-green-50 rounded-lg border border-green-200">
                    <h3 class="font-semibold text-green-800 mb-2">🌐 Broad Tags</h3>
                    <p class="text-green-700 text-sm">General category, wider reach</p>
                </div>
                <div class="p-4 bg-purple-50 rounded-lg border border-purple-200">
                    <h3 class="font-semibold text-purple-800 mb-2">📈 Trending</h3>
                    <p class="text-purple-700 text-sm">Popular, current topics</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyTag(tag, element) {
            navigator.clipboard.writeText(tag).then(function() {
                const button = element.querySelector('button');
                const originalText = button.textContent;
                button.textContent = 'Copied!';
                button.classList.add('text-green-600');
                
                setTimeout(function() {
                    button.textContent = originalText;
                    button.classList.remove('text-green-600');
                }, 2000);
            }).catch(function(err) {
                console.error('Failed to copy: ', err);
            });
        }

        function copyAllTags() {
            const tags = <?= json_encode($tags ?? []) ?>;
            const tagsString = tags.join(', ');
            
            navigator.clipboard.writeText(tagsString).then(function() {
                const button = event.target;
                const originalText = button.textContent;
                button.textContent = 'All Tags Copied!';
                button.classList.add('bg-green-800');
                
                setTimeout(function() {
                    button.textContent = originalText;
                    button.classList.remove('bg-green-800');
                }, 2000);
            });
        }

        function copyFromTextarea() {
            const textarea = document.getElementById('all-tags-text');
            textarea.select();
            document.execCommand('copy');
            
            const button = event.target;
            const originalText = button.textContent;
            button.textContent = 'Copied!';
            
            setTimeout(function() {
                button.textContent = originalText;
            }, 2000);
        }
    </script>
</body>
<?php include 'footer.php';?>
</html>
