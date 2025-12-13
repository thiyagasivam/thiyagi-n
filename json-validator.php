<?php include 'header.php';?>

<?php
// JSON Validator Tool
$jsonInput = '';
$validationResult = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jsonInput = $_POST['json_input'] ?? '';
    
    if (!empty($jsonInput)) {
        // Remove UTF-8 BOM if present
        $bom = pack('H*','EFBBBF');
        $jsonInput = preg_replace("/^$bom/", '', $jsonInput);
        
        // Attempt to decode JSON
        $decoded = json_decode($jsonInput);
        
        if (json_last_error() === JSON_ERROR_NONE) {
            $validationResult = '✅ Valid JSON';
            $formattedJson = json_encode($decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } else {
            $error = '❌ Invalid JSON: ' . json_last_error_msg();
        }
    } else {
        $error = 'Please enter JSON to validate';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Validator Tool 2026 - Free Online Syntax Checker & Formatter</title>
<meta name="description" content="Free online JSON validator for 2026. Validate, format, and fix JSON syntax errors instantly. Beautify and lint JSON data with our real-time checking tool.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .json-input {
            min-height: 200px;
            font-family: 'Courier New', monospace;
            white-space: pre;
        }
        .json-output {
            min-height: 200px;
            font-family: 'Courier New', monospace;
            white-space: pre-wrap;
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
            padding: 1rem;
        }
        .tab-button {
            transition: all 0.2s ease;
        }
        .tab-button.active {
            background-color: #3b82f6;
            color: white;
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">JSON Validator Tool</h1>
            <p class="text-gray-600">Validate and format your JSON data</p>
        </header>

        <main class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="mb-6">
                    <label for="json_input" class="block text-gray-700 font-medium mb-2">JSON Input</label>
                    <textarea name="json_input" id="json_input" class="json-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder='{"example": "Enter your JSON here..."}'><?= htmlspecialchars($jsonInput) ?></textarea>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                        Validate JSON
                    </button>
                </div>
            </form>

            <?php if (!empty($validationResult) || !empty($error)): ?>
            <div class="border-t border-gray-200 p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Validation Result</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="p-4 bg-red-50 border-l-4 border-red-500 text-red-700">
                        <p><?= htmlspecialchars($error) ?></p>
                    </div>
                <?php else: ?>
                    <div class="space-y-6">
                        <div class="p-4 bg-green-50 border-l-4 border-green-500 text-green-700">
                            <p><?= $validationResult ?></p>
                        </div>

                        <div>
                            <div class="flex border-b border-gray-200 mb-4">
                                <button class="tab-button active px-4 py-2 font-medium">Formatted JSON</button>
                            </div>
                            <div class="json-output"><?= htmlspecialchars($formattedJson ?? '') ?></div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </main>

        
    </div>

    <script>
        // Simple tab functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab-button');
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });
    </script>
</body>

<?php include 'footer.php';?>


</html>
