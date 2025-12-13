<?php include 'header.php';?>
<?php
/**
 * HTML Beautifier Tool
 */
function beautifyHTML($html) {
    if (empty(trim($html))) {
        return '';
    }

    // Initialize DOMDocument
    $dom = new DOMDocument();
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    
    // Load HTML (suppress warnings for malformed HTML)
    @$dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    
    // Save beautified HTML
    $beautified = $dom->saveHTML();
    
    // Clean up extra doctype/html/body tags that DOMDocument adds
    $beautified = preg_replace('/^<!DOCTYPE.+?>/', '', $beautified);
    $beautified = str_replace(array('<html>', '</html>', '<body>', '</body>'), '', $beautified);
    
    return trim($beautified);
}

// Handle form submission
$inputHTML = '';
$outputHTML = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputHTML = $_POST['html_code'] ?? '';
    
    try {
        $outputHTML = beautifyHTML($inputHTML);
        if (empty($outputHTML)) {
            $error = 'No valid HTML code found to beautify.';
        }
    } catch (Exception $e) {
        $error = 'Error processing HTML: ' . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free HTML Beautifier 2026 - Format & Clean Ugly Code Instantly</title>
<meta name="description" content="Fix messy HTML with proper indentation, line breaks and syntax highlighting (2026). Works with PHP/JS mixed code - No registration required!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .code-container {
            position: relative;
        }
        .copy-btn {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            z-index: 10;
        }
        textarea {
            min-height: 300px;
            font-family: Consolas, Monaco, 'Andale Mono', monospace;
            tab-size: 2;
        }
        pre {
            min-height: 300px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            padding: 1rem;
            overflow-x: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">HTML Beautifier</h1>
            <p class="text-gray-600">Format and beautify your HTML code for better readability</p>
        </header>

        <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="mb-6">
                    <label for="html_code" class="block text-gray-700 font-medium mb-2">Enter your HTML code:</label>
                    <div class="code-container">
                        <textarea name="html_code" id="html_code" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Paste your messy HTML code here..." required><?= htmlspecialchars($inputHTML) ?></textarea>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-lg transition duration-200">
                        Beautify HTML
                    </button>
                    <button type="button" onclick="document.getElementById('html_code').value = ''" class="text-gray-600 hover:text-gray-800 font-medium py-2 px-4 rounded-lg transition duration-200">
                        Clear
                    </button>
                </div>
            </div>
        </form>

        <?php if (!empty($outputHTML) || !empty($error)): ?>
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Beautified HTML</h2>
                    <?php if (!empty($outputHTML)): ?>
                    <button onclick="copyToClipboard('output_html')" class="copy-btn bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-1 px-3 rounded text-sm transition duration-200">
                        Copy
                    </button>
                    <?php endif; ?>
                </div>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($outputHTML)): ?>
                    <div class="code-container">
                        <pre id="output_html"><?= htmlspecialchars($outputHTML) ?></pre>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About HTML Beautifier</h2>
            <div class="prose max-w-none text-gray-700">
                <p>This tool helps you format and beautify your HTML code to make it more readable and maintainable. It properly indents nested elements and organizes your code structure.</p>
                <h3 class="text-lg font-medium mt-4">How to use:</h3>
                <ol class="list-decimal pl-5 space-y-2">
                    <li>Paste your HTML code in the input box above</li>
                    <li>Click the "Beautify HTML" button</li>
                    <li>Copy the formatted output</li>
                </ol>
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
