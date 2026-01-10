<?php include 'header.php';?>
<link rel="canonical" href="https://www.thiyagi.com/json-viewer">


<?php
// JSON Viewer Tool
$jsonInput = '';
$formattedJson = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jsonInput = $_POST['json'] ?? '';

    if (!empty($jsonInput)) {
        try {
            $decoded = json_decode($jsonInput);
            if ($decoded === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new Exception('Invalid JSON: ' . json_last_error_msg());
            }
            $formattedJson = json_encode($decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    } else {
        $error = 'Please enter JSON data';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON Viewer Tool 2026 - Free Online Visualizer & Formatter</title>
<meta name="description" content="Free online JSON viewer for 2026. Visualize, format, and explore JSON data with our interactive tree viewer. Beautify and analyze complex JSON structures instantly.">
    <!-- Add Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* .json-container { position: relative; } - Handled by relative on parent */
        .copy-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            z-index: 10;
        }
        #jsonOutput {
            min-height: 300px;
            /* background-color: #f8f9fa; - bg-gray-100 */
            font-family: monospace; /* font-mono */
            white-space: pre; /* whitespace pre */
            overflow-x: auto; /* overflow-x-auto */
            margin: 0; /* mb-0 */
            padding: 0.75rem; /* p-3 */
        }
        /* Syntax Highlighting - Kept as is, applied via JS */
        .keyword { color: #d63384; }
        .string { color: #20c997; }
        .number { color: #fd7e14; }
        .boolean { color: #6610f2; }
        .null { color: #6c757d; }
    </style>

</head>
<body class="bg-gray-100">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8"> <!-- container py-5 -> max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 -->
        <div class="flex justify-center"> <!-- row justify-content-center -> flex justify-center -->
            <div class="w-full max-w-6xl"> <!-- col-lg-10 -> w-full max-w-6xl -->
                <div class="bg-white rounded-lg shadow-md mb-6"> <!-- card shadow-sm mb-4 -> bg-white rounded-lg shadow-md mb-6 -->
                    <div class="bg-blue-600 text-white px-6 py-4 rounded-t-lg"> <!-- card-header bg-primary text-white -> bg-blue-600 text-white px-6 py-4 rounded-t-lg -->
                        <h1 class="text-lg font-semibold mb-0">JSON Viewer Tool</h1> <!-- h1 class="h4 mb-0" -> text-lg font-semibold mb-0 -->
                    </div>
                    <div class="p-6"> <!-- card-body -> p-6 -->
                        <form method="post">
                            <div class="mb-4"> <!-- mb-3 -> mb-4 -->
                                <label for="jsonInput" class="block mb-2 font-medium">Enter JSON Data:</label> <!-- form-label -> block mb-2 font-medium -->
                                <textarea class="w-full h-60 px-4 py-2 font-mono border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="jsonInput" name="json" rows="10" placeholder='{"example": "JSON data", "numbers": [1, 2, 3]}'><?= htmlspecialchars($jsonInput) ?></textarea> <!-- form-control font-monospace -> w-full h-60 px-4 py-2 font-mono border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500 -->
                            </div>
                            <div class="flex flex-col sm:flex-row sm:justify-end gap-2"> <!-- d-grid gap-2 d-md-flex justify-content-md-end -> flex flex-col sm:flex-row sm:justify-end gap-2 -->
                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-medium rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">Format JSON</button> <!-- btn btn-primary me-md-2 -> px-4 py-2 bg-blue-600 text-white font-medium rounded hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 -->
                                <button type="reset" class="px-4 py-2 border border-gray-300 text-gray-700 font-medium rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-300">Clear</button> <!-- btn btn-outline-secondary -> px-4 py-2 border border-gray-300 text-gray-700 font-medium rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 -->
                            </div>
                        </form>
                    </div>
                </div>

                <?php if (!empty($formattedJson) || !empty($error)): ?>
                <div class="bg-white rounded-lg shadow-md"> <!-- card shadow-sm -> bg-white rounded-lg shadow-md -->
                    <div class="bg-white px-6 py-3 border-b border-gray-200 rounded-t-lg"> <!-- card-header bg-white -> bg-white px-6 py-3 border-b border-gray-200 rounded-t-lg -->
                        <h2 class="text-base font-semibold mb-0">Formatted JSON Output</h2> <!-- h2 class="h5 mb-0" -> text-base font-semibold mb-0 -->
                    </div>
                    <div class="relative p-0"> <!-- card-body position-relative p-0 -> relative p-0 -->
                        <?php if (!empty($error)): ?>
                            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded m-3"><?= htmlspecialchars($error) ?></div> <!-- alert alert-danger m-3 -> bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded m-3 -->
                        <?php else: ?>
                            <button id="copyBtn" class="copy-btn px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500" title="Copy to clipboard"> <!-- btn btn-sm btn-outline-primary copy-btn -> px-3 py-1 text-sm border border-gray-300 rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 -->
                                📋 Copy <!-- Replaced <i class="bi bi-clipboard"></i> Copy -->
                            </button>
                            <pre id="jsonOutput" class="bg-gray-100 p-3 mb-0"><?= htmlspecialchars($formattedJson) ?></pre> <!-- Removed font-mono, added bg-gray-100 -->
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mt-6"> <!-- row mt-4 -> mt-6 -->
            <div class="w-full"> <!-- col-12 -> w-full -->
                <div class="bg-white rounded-lg shadow-md"> <!-- card shadow-sm -> bg-white rounded-lg shadow-md -->
                    <div class="p-6"> <!-- card-body -> p-6 -->
                        <h2 class="text-base font-semibold mb-2">About JSON Viewer Tool</h2> <!-- h2 class="h5" -> text-base font-semibold mb-2 -->
                        <p class="mb-3">This free online JSON viewer helps you format, validate, and analyze JSON data. It provides syntax highlighting and proper indentation to make your JSON structures more readable.</p> <!-- mb-3 -->
                        <h3 class="text-sm font-semibold mb-2">Features:</h3> <!-- h3 class="h6" -> text-sm font-semibold mb-2 -->
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Formats messy JSON into human-readable structure</li>
                            <li>Validates JSON syntax and highlights errors</li>
                            <li>Syntax highlighting for different JSON elements</li>
                            <li>Copy to clipboard functionality</li>
                            <li>Works with complex nested JSON structures</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts (Bootstrap JS removed) -->
    <script>
        // Syntax highlighting
        function highlightJson() {
            const output = document.getElementById('jsonOutput');
            if (!output) return;

            let text = output.innerHTML;
            // Highlight keywords (object keys)
            text = text.replace(/"([^"]+)":/g, '"<span class="string">$1</span>":');
            // Highlight string values
            text = text.replace(/: ("[^"]*")/g, ': <span class="string">$1</span>');
            // Highlight booleans
            text = text.replace(/: (true|false)/g, ': <span class="boolean">$1</span>');
            // Highlight null
            text = text.replace(/: (null)/g, ': <span class="null">$1</span>');
            // Highlight numbers (must be after booleans/null to avoid conflict)
            text = text.replace(/: (-?\d+(?:\.\d+)?(?:[eE][+-]?\d+)?)/g, ': <span class="number">$1</span>');
            // Highlight standalone strings (e.g., array items) - less precise but covers common cases
            // This regex avoids matching keys and values already processed
            // A more robust solution would require a proper parser
            // text = text.replace(/(?<!:) "([^"]*)"(?!:)/g, '<span class="string">"$1"</span>');
            output.innerHTML = text;
        }

        // Copy to clipboard
        document.getElementById('copyBtn')?.addEventListener('click', function() {
            const output = document.getElementById('jsonOutput');
            navigator.clipboard.writeText(output.innerText).then(() => {
                const originalText = this.innerHTML;
                this.innerHTML = '✓ Copied!'; // Replaced <i class="bi bi-check"></i> Copied!
                setTimeout(() => {
                    this.innerHTML = originalText; // Replaced <i class="bi bi-clipboard"></i> Copy
                }, 2000);
            });
        });

        // Highlight on page load
        document.addEventListener('DOMContentLoaded', highlightJson);
    </script>
</body>
<?php include 'footer.php';?>


</html>
