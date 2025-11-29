<?php include 'header.php';?>
<?php
/**
 * YouTube Video Title Capitalizer Tool
 */
function capitalizeTitle($title) {
    // Words that should remain lowercase (articles, prepositions, conjunctions)
    $lowercase_words = array(
        'a', 'an', 'and', 'as', 'at', 'but', 'by', 'for', 'if', 'in', 'is', 'it', 
        'of', 'on', 'or', 'the', 'to', 'up', 'via', 'with', 'from', 'into', 'onto', 
        'upon', 'than', 'over', 'like', 'down', 'near', 'off', 'out', 'per', 'till', 
        'upon', 'vs', 'are', 'was', 'were', 'been', 'have', 'has', 'had', 'do', 'does', 
        'did', 'will', 'would', 'could', 'should', 'may', 'might', 'must', 'can', 'am'
    );
    
    // Clean and split the title
    $title = trim($title);
    $words = explode(' ', $title);
    $result = array();
    
    foreach ($words as $i => $word) {
        $word = trim($word);
        if (empty($word)) continue;
        
        // Extract punctuation
        $punctuation = '';
        $clean_word = $word;
        
        // Handle punctuation at the end
        if (preg_match('/([^\w]+)$/', $word, $matches)) {
            $punctuation = $matches[1];
            $clean_word = preg_replace('/([^\w]+)$/', '', $word);
        }
        
        $lower_word = strtolower($clean_word);
        
        // Always capitalize first and last word, and words after punctuation
        if ($i === 0 || $i === count($words) - 1 || 
            !in_array($lower_word, $lowercase_words) ||
            (isset($words[$i-1]) && preg_match('/[:\-\?!]$/', trim($words[$i-1])))) {
            $result[] = ucfirst($lower_word) . $punctuation;
        } else {
            $result[] = $lower_word . $punctuation;
        }
    }
    
    return implode(' ', $result);
}

// Handle form submission
$input_title = '';
$capitalized_title = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input_title = $_POST['title'] ?? '';
    
    if (empty(trim($input_title))) {
        $error = 'Please enter a title to capitalize.';
    } else {
        $capitalized_title = capitalizeTitle($input_title);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free YouTube Video Title Capitalizer 2025 - Format Titles Properly</title>
    <meta name="description" content="Automatically capitalize YouTube video titles following proper title case rules. Format your video titles professionally for better engagement and SEO (2025).">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .copy-btn {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            z-index: 10;
        }
        .result-container {
            position: relative;
        }
        textarea {
            min-height: 120px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
    </style>

    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "YouTube Video Title Capitalizer",
        "description": "Free online tool to capitalize and format YouTube video titles with proper title case rules for better engagement and professionalism.",
        "url": "https://www.thiyagi.com/youtube-video-title-capitalizer",
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
            "name": "YouTube Video Title Capitalizer",
            "item": "https://www.thiyagi.com/youtube-video-title-capitalizer"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "What is a YouTube title capitalizer?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "A YouTube title capitalizer is a tool that automatically formats video titles using proper title case rules, capitalizing major words while keeping articles, prepositions, and conjunctions lowercase for professional appearance."
            }
        },{
            "@type": "Question",
            "name": "Why should I capitalize my YouTube video titles?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Properly capitalized titles look more professional, improve readability, and can enhance viewer engagement. They also follow standard title case conventions used in professional publishing."
            }
        },{
            "@type": "Question",
            "name": "What words should stay lowercase in titles?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Articles (a, an, the), short prepositions (in, on, of, to, for, with), and conjunctions (and, or, but) should stay lowercase unless they're the first or last word in the title."
            }
        }]
    }
    </script>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">YouTube Video Title Capitalizer</h1>
            <p class="text-gray-600">Format your YouTube video titles with proper capitalization for better engagement</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Enter your YouTube video title:</label>
                    <textarea name="title" id="title" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Example: how to make money online from home in 2024" required><?= htmlspecialchars($input_title) ?></textarea>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Capitalize Title
                    </button>
                    <button type="button" onclick="document.getElementById('title').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($capitalized_title) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Capitalized Title</h2>
                    <?php if (!empty($capitalized_title)): ?>
                    <button onclick="copyToClipboard('output_title')" class="copy-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-1 px-3 rounded text-sm transition duration-200">
                        Copy
                    </button>
                    <?php endif; ?>
                </div>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($capitalized_title)): ?>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-gray-700 font-medium mb-2">Original:</label>
                            <div class="bg-gray-50 p-3 rounded-md border">
                                <p class="text-gray-800"><?= htmlspecialchars($input_title) ?></p>
                            </div>
                        </div>
                        
                        <div class="result-container">
                            <label class="block text-gray-700 font-medium mb-2">Capitalized:</label>
                            <div class="bg-green-50 p-3 rounded-md border border-green-200">
                                <p class="text-gray-800" id="output_title"><?= htmlspecialchars($capitalized_title) ?></p>
                            </div>
                        </div>
                        
                        <div class="bg-blue-50 p-4 rounded-md border border-blue-200">
                            <h3 class="text-sm font-medium text-blue-800 mb-2">Statistics:</h3>
                            <p class="text-sm text-blue-700">
                                Characters: <?= strlen($capitalized_title) ?> | 
                                Words: <?= str_word_count($capitalized_title) ?>
                                <?php if (strlen($capitalized_title) > 60): ?>
                                <span class="text-orange-600 font-medium"> (Title may be truncated in search results)</span>
                                <?php endif; ?>
                            </p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Title Capitalization Rules</h2>
            <div class="prose max-w-none text-gray-700">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-medium text-green-800 mb-2">✅ Always Capitalize:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>First and last words</li>
                            <li>Nouns, verbs, adjectives, adverbs</li>
                            <li>Words after colons or hyphens</li>
                            <li>Proper nouns and brand names</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium text-blue-800 mb-2">⬇️ Keep Lowercase:</h3>
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Articles: a, an, the</li>
                            <li>Short prepositions: in, on, of, to, for</li>
                            <li>Conjunctions: and, or, but</li>
                            <li>Unless they're first/last words</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Examples</h2>
            <div class="space-y-4">
                <div class="border-l-4 border-blue-500 pl-4">
                    <p class="text-sm text-gray-600">Original:</p>
                    <p class="text-gray-800">how to make money online from home in 2024</p>
                    <p class="text-sm text-gray-600 mt-1">Capitalized:</p>
                    <p class="text-green-600 font-medium">How to Make Money Online From Home in 2024</p>
                </div>
                
                <div class="border-l-4 border-blue-500 pl-4">
                    <p class="text-sm text-gray-600">Original:</p>
                    <p class="text-gray-800">the ultimate guide to SEO: tips and tricks</p>
                    <p class="text-sm text-gray-600 mt-1">Capitalized:</p>
                    <p class="text-green-600 font-medium">The Ultimate Guide to SEO: Tips and Tricks</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const range = document.createRange();
            range.selectNode(element);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            
            // Show feedback
            const btn = event.target;
            btn.textContent = 'Copied!';
            setTimeout(() => {
                btn.textContent = 'Copy';
            }, 2000);
        }
    </script>
</body>
<?php include 'footer.php';?>
</html>