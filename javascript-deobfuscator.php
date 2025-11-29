<?php include 'header.php';?>

<?php
// Function to clean and format JavaScript code
function deobfuscateJavaScript($code) {
    // Basic formatting (this is a simplified version - consider using a proper JS parser for full deobfuscation)
    $formatted = $code;
    
    // Add spaces around operators
    $formatted = preg_replace('/([=+\-*\/%&|^<>!]+)/', ' $1 ', $formatted);
    
    // Add newlines after semicolons
    $formatted = preg_replace('/;/', ";\n", $formatted);
    
    // Add newlines after curly braces
    $formatted = preg_replace('/([{}])/', "$1\n", $formatted);
    
    // Indent code (simplified version)
    $lines = explode("\n", $formatted);
    $indent = 0;
    $formatted = '';
    
    foreach ($lines as $line) {
        $trimmed = trim($line);
        if (empty($trimmed)) continue;
        
        // Decrease indent after closing braces
        if (strpos($trimmed, '}') !== false) {
            $indent = max(0, $indent - 1);
        }
        
        $formatted .= str_repeat('    ', $indent) . $trimmed . "\n";
        
        // Increase indent after opening braces
        if (strpos($trimmed, '{') !== false) {
            $indent++;
        }
    }
    
    return htmlspecialchars($formatted);
}

// Handle form submission
$result = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputCode = $_POST['js_code'] ?? '';
    
    if (!empty($inputCode)) {
        try {
            $result = deobfuscateJavaScript($inputCode);
        } catch (Exception $e) {
            $error = 'Error processing JavaScript code: ' . $e->getMessage();
        }
    } else {
        $error = 'Please enter JavaScript code to deobfuscate';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Deobfuscator 2025 - Free Online Code Unpacker & Decoder Tool</title>
<meta name="description" content="Free online JavaScript deobfuscator tool for 2025. Decode and unpack obfuscated JS code instantly. Clean and analyze minified JavaScript with our web-based deobfuscator.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .code-container {
            font-family: 'Courier New', Courier, monospace;
            font-size: 14px;
            line-height: 1.5;
        }
        textarea.code-input {
            tab-size: 4;
            -moz-tab-size: 4;
            -o-tab-size: 4;
        }
        pre.code-output {
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>

</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">JavaScript Deobfuscator</h1>
            <p class="text-gray-600">Paste your obfuscated JavaScript code below to make it readable</p>
        </header>

        <!-- Main Form -->
        <div class="max-w-4xl mx-auto">
            <form method="POST" class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="p-6">
                    <div class="mb-4">
                        <label for="js_code" class="block text-gray-700 font-bold mb-2">JavaScript Code:</label>
                        <textarea name="js_code" id="js_code" rows="12" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 code-input" placeholder="Paste your obfuscated JavaScript code here..." required><?php echo isset($_POST['js_code']) ? htmlspecialchars($_POST['js_code']) : ''; ?></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                        Deobfuscate JavaScript
                    </button>
                </div>
            </form>

            <!-- Results Section -->
            <?php if (!empty($result) || !empty($error)): ?>
                <div class="mt-8 bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">Deobfuscated Result:</h2>
                        
                        <?php if (!empty($error)): ?>
                            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                                <p><?php echo htmlspecialchars($error); ?></p>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (!empty($result)): ?>
                            <div class="code-container bg-gray-50 p-4 rounded-lg border border-gray-200 overflow-x-auto">
                                <pre class="code-output"><?php echo $result; ?></pre>
                            </div>
                            <div class="mt-4 flex justify-end">
                                <button onclick="copyToClipboard()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center transition duration-200">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                                    </svg>
                                    Copy to Clipboard
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Info Section -->
        <div class="mt-12 max-w-4xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">About JavaScript Deobfuscation</h2>
                <div class="prose max-w-none">
                    <p>This tool helps you deobfuscate JavaScript code by:</p>
                    <ul class="list-disc pl-5">
                        <li>Adding proper spacing around operators</li>
                        <li>Formatting with proper indentation</li>
                        <li>Adding newlines for better readability</li>
                        <li>Preserving the original functionality while making it human-readable</li>
                    </ul>
                    <p class="mt-4"><strong>Note:</strong> This is a basic deobfuscator. For heavily obfuscated code, you might need more advanced tools.</p>
                </div>
            </div>
        </div>
    </div>

   

    <script>
        function copyToClipboard() {
            const resultText = document.querySelector('.code-output').textContent;
            navigator.clipboard.writeText(resultText).then(() => {
                alert('Deobfuscated code copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
