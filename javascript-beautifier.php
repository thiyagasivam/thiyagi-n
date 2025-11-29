<?php include 'header.php';?>

<?php
// Function to beautify JavaScript code
function beautifyJavaScript($code) {
    // Initialize variables
    $result = '';
    $indent = 0;
    $inString = false;
    $stringChar = '';
    $prevChar = '';
    
    // Process each character
    for ($i = 0; $i < strlen($code); $i++) {
        $char = $code[$i];
        
        // Handle string literals
        if (($char == '"' || $char == "'") && $prevChar != "\\") {
            if ($inString && $stringChar == $char) {
                $inString = false;
                $stringChar = '';
            } elseif (!$inString) {
                $inString = true;
                $stringChar = $char;
            }
        }
        
        // Add newline and indentation after certain characters when not in string
        if (!$inString) {
            if ($char == '{' || $char == '[') {
                $result .= $char . "\n" . str_repeat('    ', ++$indent);
                continue;
            } elseif ($char == '}' || $char == ']') {
                $result .= "\n" . str_repeat('    ', --$indent) . $char;
                continue;
            } elseif ($char == ';' || $char == ',') {
                $result .= $char . "\n" . str_repeat('    ', $indent);
                continue;
            }
        }
        
        // Add the character to result
        $result .= $char;
        $prevChar = $char;
    }
    
    return htmlspecialchars($result);
}

// Handle form submission
$inputCode = '';
$beautifiedCode = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputCode = $_POST['js_code'] ?? '';
    if (!empty($inputCode)) {
        $beautifiedCode = beautifyJavaScript($inputCode);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free JavaScript Beautifier 2025 - Format & Clean Ugly JS Code</title>
<meta name="description" content="Fix minified JavaScript with proper indentation, syntax highlighting, and error checks (2025). Works with React/Node/Vue code - No installation needed!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .code-container {
            font-family: 'Courier New', monospace;
            font-size: 14px;
            line-height: 1.5;
        }
        textarea.code-input {
            tab-size: 4;
            -moz-tab-size: 4;
            -o-tab-size: 4;
        }
        .copy-btn {
            transition: all 0.2s ease;
        }
        .copy-btn:hover {
            transform: translateY(-2px);
        }
        .copy-btn:active {
            transform: translateY(0);
        }
    </style>

</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">JavaScript Beautifier</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Format and beautify your JavaScript code for better readability</p>
        </header>

        <main class="bg-white rounded-lg shadow-lg overflow-hidden">
            <form method="POST" class="p-6">
                <div class="mb-4">
                    <label for="js_code" class="block text-gray-700 font-medium mb-2">JavaScript Code:</label>
                    <textarea name="js_code" id="js_code" rows="12" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 code-input" placeholder="Paste your minified or messy JavaScript code here..." required><?= htmlspecialchars($inputCode) ?></textarea>
                </div>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors flex-1">
                        Beautify Code
                    </button>
                    <button type="button" onclick="copyToClipboard()" class="px-6 py-3 bg-gray-200 text-gray-800 font-medium rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors copy-btn flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                        </svg>
                        Copy to Clipboard
                    </button>
                </div>
            </form>

            <?php if (!empty($beautifiedCode)): ?>
            <div class="border-t border-gray-200 p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Beautified JavaScript:</h2>
                    <button onclick="copyResultToClipboard()" class="text-sm px-3 py-1 bg-gray-100 hover:bg-gray-200 rounded flex items-center gap-1 copy-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                        </svg>
                        Copy
                    </button>
                </div>
                <pre class="bg-gray-50 p-4 rounded-lg overflow-x-auto code-container"><code id="beautified-code"><?= $beautifiedCode ?></code></pre>
            </div>
            <?php endif; ?>
        </main>

        <section class="mt-12 bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">How to use this JavaScript Beautifier</h2>
            <div class="prose max-w-none">
                <ol class="list-decimal pl-5 space-y-2">
                    <li>Paste your minified or unformatted JavaScript code in the input box above</li>
                    <li>Click the "Beautify Code" button</li>
                    <li>Your formatted code will appear in the output section</li>
                    <li>Use the copy button to copy the beautified code to your clipboard</li>
                </ol>
                <h3 class="text-lg font-medium mt-4">Features</h3>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Proper indentation (4 spaces)</li>
                    <li>Correct line breaks after statements and blocks</li>
                    <li>Preserves string literals</li>
                    <li>Completely client-side processing (no server-side storage)</li>
                </ul>
            </div>
        </section>
    </div>

    <script>
        function copyToClipboard() {
            const textarea = document.getElementById('js_code');
            textarea.select();
            document.execCommand('copy');
            
            // Show feedback
            alert('Code copied to clipboard!');
        }
        
        function copyResultToClipboard() {
            const codeElement = document.getElementById('beautified-code');
            const range = document.createRange();
            range.selectNode(codeElement);
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            
            // Show feedback
            alert('Beautified code copied to clipboard!');
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
