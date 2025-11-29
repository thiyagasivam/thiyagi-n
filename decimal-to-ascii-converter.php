<?php include 'header.php';?>

<?php
// Function to convert decimal to ASCII
function decimalToAscii($input) {
    $output = '';
    $decimals = preg_split('/[\s,]+/', trim($input));

    foreach ($decimals as $decimal) {
        if (is_numeric($decimal)) {
            $asciiChar = chr((int)$decimal);
            // Replace non-printable characters with a placeholder
            $output .= ctype_print($asciiChar) ? $asciiChar : '';
        }
    }

    return $output;
}

// Handle form submission
$result = '';
$input = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['decimal_input'] ?? '';
    $result = decimalToAscii($input);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Decimal to ASCII Converter 2025 – Instant Code & Text Decoding</title>
    <meta name="description" content="Convert decimal numbers to ASCII characters in seconds with our free 2025 online tool. Perfect for developers, debugging, and encoding tasks—no installation required!">
    <!-- Add Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            /* background-color: #f8f9fa; - handled by bg-gray-100 */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .tool-container {
            max-width: 800px;
            margin: 30px auto;
            background: white; /* bg-white */
            border-radius: 10px; /* rounded-lg */
            box-shadow: 0 0 20px rgba(0,0,0,0.1); /* shadow-xl */
            padding: 30px; /* p-8 */
        }
        .tool-header {
            text-align: center; /* text-center */
            margin-bottom: 30px; /* mb-8 */
        }
        .tool-header h1 {
            color: #2c3e50; /* text-gray-800 */
            font-weight: 700; /* font-bold */
        }
        .tool-header p {
            color: #7f8c8d; /* text-gray-500 */
        }
        .input-area {
            margin-bottom: 20px; /* mb-5 */
        }
        .result-area {
            margin-top: 30px; /* mt-8 */
        }
        /* Gradient Button - Tailwind doesn't easily do arbitrary solid colors */
        .btn-convert {
            background-color: #3498db; /* bg-blue-500 */
            border: none; /* Tailwind default */
            padding: 10px 20px; /* py-2.5 px-5 */
            font-weight: 600; /* font-semibold */
            color: white; /* text-white */
            border-radius: 0.375rem; /* rounded */
        }
        .btn-convert:hover {
            background-color: #2980b9; /* hover:bg-blue-600 */
        }
        /* .form-control { min-height: 150px; } - Handled by rows attribute and h-40 */
        .result-box {
            background-color: #f1f8fe; /* bg-blue-50 */
            border: 1px solid #d6e9ff; /* border border-blue-200 */
            border-radius: 5px; /* rounded */
            padding: 15px; /* p-4 */
            min-height: 100px; /* min-h-24 */
        }
        .copy-btn {
            background-color: #2ecc71; /* bg-green-500 */
            border: none; /* Tailwind default */
            margin-top: 10px; /* mt-2.5 */
            padding: 0.5rem 1rem; /* py-2 px-4 */
            font-weight: 500; /* font-medium */
            color: white; /* text-white */
            border-radius: 0.375rem; /* rounded */
        }
        .copy-btn:hover {
            background-color: #27ae60; /* hover:bg-green-600 */
        }
        .feature-list {
            margin-top: 40px; /* mt-10 */
        }
        .feature-card {
            padding: 20px; /* p-5 */
            border-radius: 8px; /* rounded-lg */
            background: white; /* bg-white */
            box-shadow: 0 0 10px rgba(0,0,0,0.05); /* shadow-md */
            margin-bottom: 20px; /* mb-5 */
        }
        .feature-card h3 {
            color: #3498db; /* text-blue-500 */
            font-size: 1.2rem; /* text-lg */
        }
        @media (max-width: 768px) {
            .tool-container {
                margin: 15px auto;
                padding: 20px; /* p-5 */
            }
            .tool-header h1 {
                font-size: 1.8rem; /* text-2xl */
            }
        }
    </style>

</head>
<body class="bg-gray-100">
    <div class="tool-container">
        <div class="tool-header">
            <h1 class="text-3xl font-bold text-gray-800">Decimal to ASCII Converter</h1>
            <p class="text-gray-500">Convert decimal numbers to ASCII characters instantly</p>
        </div>

        <form method="POST">
            <div class="input-area">
                <label for="decimal_input" class="block mb-2 font-medium">Enter Decimal Numbers:</label>
                <textarea class="w-full h-40 px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" id="decimal_input" name="decimal_input" rows="5" placeholder="Enter decimal numbers separated by spaces or commas (e.g., 72 101 108 108 111)"><?= htmlspecialchars($input) ?></textarea>
            </div>
            <button type="submit" class="btn-convert">Convert to ASCII</button>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="result-area">
            <h3 class="text-xl font-semibold mb-2">Result:</h3>
            <div class="result-box bg-blue-50 border border-blue-200 rounded p-4 min-h-24">
                <?= htmlspecialchars($result) ?>
            </div>
            <button class="copy-btn" onclick="copyToClipboard()">Copy Result</button>
        </div>
        <?php endif; ?>

        <div class="feature-list mt-10">
            <h2 class="text-center text-2xl font-bold mb-6">About This Tool</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6"> <!-- row -> grid grid-cols-1 md:grid-cols-2 gap-6 -->
                <div>
                    <div class="feature-card bg-white rounded-lg shadow-md p-5 mb-5">
                        <h3 class="text-lg font-semibold text-blue-500 mb-2">What is Decimal to ASCII?</h3>
                        <p>Decimal to ASCII conversion translates numeric decimal values to their corresponding ASCII characters. Each ASCII character is represented by a unique decimal number between 0 and 127.</p>
                    </div>
                </div>
                <div>
                    <div class="feature-card bg-white rounded-lg shadow-md p-5 mb-5">
                        <h3 class="text-lg font-semibold text-blue-500 mb-2">How to Use</h3>
                        <p>Enter decimal numbers separated by spaces or commas. Our tool will convert each number to its ASCII character equivalent and display the complete string.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts (Bootstrap JS removed) -->
    <script>
        function copyToClipboard() {
            const resultText = document.querySelector('.result-box').innerText;
            navigator.clipboard.writeText(resultText).then(() => {
                alert('Copied to clipboard!');
            });
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
