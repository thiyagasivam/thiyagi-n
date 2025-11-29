<?php include 'header.php';?>

<?php
// Function to convert text to strikethrough
function generateStrikethrough($text) {
    $strikethrough = '';
    $chars = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);
    
    foreach ($chars as $char) {
        $strikethrough .= $char . '̶';
    }
    
    return $strikethrough;
}

// Handle form submission
$result = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['text'] ?? '';
    
    if (!empty($inputText)) {
        $result = generateStrikethrough($inputText);
    } else {
        $error = 'Please enter some text to convert';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strikethrough Text Generator - Create Crossed Out Text Online</title>
    <meta name="description" content="Free online strikethrough text generator. Create crossed out text for social media, blogs, and documents with our easy-to-use tool.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .text-preview {
            min-height: 100px;
            border: 1px solid #e2e8f0;
            padding: 1rem;
            border-radius: 0.375rem;
            background-color: #f8fafc;
            margin-top: 1rem;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .copy-btn {
            transition: all 0.2s ease;
        }
        .copy-btn:hover {
            transform: translateY(-2px);
        }
        .tooltip {
            position: relative;
            display: inline-block;
        }
        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }
        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Strikethrough Text Generator</h1>
            <p class="text-gray-600">Create crossed out text for social media, blogs, and documents</p>
        </header>

        <main class="bg-white rounded-lg shadow-md p-6">
            <form method="POST" class="mb-6">
                <div class="mb-4">
                    <label for="text" class="block text-gray-700 font-medium mb-2">Enter your text:</label>
                    <textarea 
                        id="text" 
                        name="text" 
                        rows="5" 
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        placeholder="Type or paste your text here..."
                        required><?= htmlspecialchars($_POST['text'] ?? '') ?></textarea>
                </div>
                <button 
                    type="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition duration-200">
                    Generate Strikethrough Text
                </button>
            </form>

            <?php if (!empty($error)): ?>
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                    <p><?= htmlspecialchars($error) ?></p>
                </div>
            <?php endif; ?>

            <?php if (!empty($result)): ?>
                <div class="mb-4">
                    <div class="flex justify-between items-center mb-2">
                        <h2 class="text-xl font-semibold text-gray-800">Your Strikethrough Text:</h2>
                        <button 
                            onclick="copyToClipboard('result-text')" 
                            class="copy-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-md text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                            </svg>
                            Copy
                        </button>
                    </div>
                    <div id="result-text" class="text-preview">
                        <?= htmlspecialchars($result) ?>
                    </div>
                </div>

                <div class="bg-blue-50 border-l-4 border-blue-500 text-blue-700 p-4">
                    <p class="font-medium">How to use your strikethrough text:</p>
                    <ul class="list-disc pl-5 mt-2 space-y-1">
                        <li>Copy and paste into Facebook, Twitter, Instagram, or other social media</li>
                        <li>Use in emails or documents to show deleted or changed text</li>
                        <li>Works in most apps that support Unicode characters</li>
                    </ul>
                </div>
            <?php endif; ?>
        </main>

        <section class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About Strikethrough Text</h2>
            <div class="prose max-w-none text-gray-700">
                <p>Strikethrough text (also called crossed out text) is created using Unicode combining characters that add a horizontal line through the middle of each character.</p>
                <p class="mt-2">Our generator creates text like this: <span class="line-through">s̶t̶r̶i̶k̶e̶t̶h̶r̶o̶u̶g̶h̶</span>. This works on most modern platforms including:</p>
                <ul class="list-disc pl-5 mt-2 space-y-1">
                    <li>Facebook, Twitter, Instagram, TikTok</li>
                    <li>WhatsApp, Telegram, Discord</li>
                    <li>Microsoft Word, Google Docs</li>
                    <li>Most websites and apps that support Unicode</li>
                </ul>
            </div>
        </section>
    </div>

    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.innerText;
            
            navigator.clipboard.writeText(text).then(() => {
                // Show tooltip or alert
                alert('Copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
    </script>
</body>

<?php include 'footer.php';?>


</html>
