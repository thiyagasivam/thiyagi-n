<?php include 'header.php';?>


<?php
// Binary translation functions
function textToBinary($text) {
    $binary = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $binary .= str_pad(decbin(ord($text[$i])), 8, '0', STR_PAD_LEFT) . ' ';
    }
    return trim($binary);
}

function binaryToText($binary) {
    $text = '';
    $binary = str_replace(' ', '', $binary);
    $binary = preg_replace('/[^01]/', '', $binary);
    
    for ($i = 0; $i < strlen($binary); $i += 8) {
        $byte = substr($binary, $i, 8);
        if (strlen($byte) == 8) {
            $text .= chr(bindec($byte));
        }
    }
    return $text;
}

// Handle form submission
$input = '';
$output = '';
$conversionType = 'textToBinary';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['input'] ?? '';
    $conversionType = $_POST['conversion_type'] ?? 'textToBinary';
    
    if ($conversionType === 'textToBinary') {
        $output = textToBinary($input);
    } else {
        $output = binaryToText($input);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Binary Translator 2025 - Convert Text/Binary Instantly</title>
    <meta name="description" content="Instantly translate binary code to text (and vice versa) in 2025! 100% free online tool with real-time conversion. Perfect for programmers, students & hobbyists!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .textarea-bg {
            background-color: #f8f9fa;
        }
        .switch-btn {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }
        .switch-btn input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: #3b82f6;
        }
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        .slider-text {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 10px;
            font-weight: bold;
            color: white;
        }
        .text-to-binary {
            left: 8px;
        }
        .binary-to-text {
            right: 8px;
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Binary Translator</h1>
            <p class="text-gray-600">Convert text to binary code or binary code to text instantly</p>
        </header>

        <main class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="flex items-center justify-center mb-6">
                    <span class="mr-3 font-medium text-gray-700">Text to Binary</span>
                    <label class="switch-btn mx-2">
                        <input type="checkbox" name="conversion_type" value="binaryToText" <?php echo $conversionType === 'binaryToText' ? 'checked' : ''; ?>>
                        <span class="slider">
                            <span class="slider-text text-to-binary">Text</span>
                            <span class="slider-text binary-to-text">Binary</span>
                        </span>
                    </label>
                    <span class="ml-3 font-medium text-gray-700">Binary to Text</span>
                </div>

                <div class="mb-4">
                    <label for="input" class="block text-gray-700 font-medium mb-2">
                        <?php echo $conversionType === 'textToBinary' ? 'Enter Text:' : 'Enter Binary Code:'; ?>
                    </label>
                    <textarea id="input" name="input" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg textarea-bg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="<?php echo $conversionType === 'textToBinary' ? 'Type or paste your text here...' : 'Enter binary code (e.g., 01001000 01100101 01101100 01101100 01101111)...'; ?>" required><?php echo htmlspecialchars($input); ?></textarea>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                        <?php echo $conversionType === 'textToBinary' ? 'Convert to Binary' : 'Convert to Text'; ?>
                    </button>
                </div>
            </form>

            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <div class="border-t border-gray-200 p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Conversion Result</h2>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <pre class="whitespace-pre-wrap font-mono text-gray-800"><?php echo htmlspecialchars($output); ?></pre>
                </div>
                <div class="mt-4 flex justify-end">
                    <button onclick="copyToClipboard()" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors">
                        Copy to Clipboard
                    </button>
                </div>
            </div>
            <?php endif; ?>
        </main>

        <section class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About Binary Translator</h2>
            <div class="prose text-gray-700">
                <p>This Binary Translator tool allows you to convert between text and binary code instantly. It supports:</p>
                <ul class="list-disc pl-5">
                    <li>Text to binary conversion (ASCII/Unicode)</li>
                    <li>Binary to text conversion</li>
                    <li>8-bit binary code formatting</li>
                    <li>Large text inputs</li>
                </ul>
                <p class="mt-4">Binary code is the fundamental language of computers, representing information using only two symbols: 0 and 1. Each character in text is represented by a unique 8-digit binary sequence.</p>
            </div>
        </section>
    </div>

    <script>
        function copyToClipboard() {
            const outputText = document.querySelector('pre').textContent;
            navigator.clipboard.writeText(outputText).then(() => {
                alert('Copied to clipboard!');
            });
        }
        
        // Toggle conversion type label when switch is clicked
        const toggleSwitch = document.querySelector('input[type="checkbox"]');
        toggleSwitch.addEventListener('change', function() {
            const textarea = document.getElementById('input');
            const button = document.querySelector('button[type="submit"]');
            
            if (this.checked) {
                textarea.placeholder = 'Enter binary code (e.g., 01001000 01100101 01101100 01101100 01101111)...';
                button.textContent = 'Convert to Text';
            } else {
                textarea.placeholder = 'Type or paste your text here...';
                button.textContent = 'Convert to Binary';
            }
        });
    </script>
</body>

<?php include 'footer.php';?>

</html>
