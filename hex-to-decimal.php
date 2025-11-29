<?php include 'header.php';?>

<?php
// Function to convert hex to decimal
function hexToDecimal($hex) {
    // Remove any '#' or '0x' prefix
    $hex = str_replace(['#', '0x'], '', $hex);
    
    // Check if input is valid hexadecimal
    if (!ctype_xdigit($hex)) {
        return ['error' => 'Invalid hexadecimal input'];
    }
    
    // Convert to decimal
    $decimal = hexdec($hex);
    
    return [
        'hex' => $hex,
        'decimal' => $decimal,
        'error' => null
    ];
}

// Handle form submission
$result = ['hex' => '', 'decimal' => '', 'error' => null];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hexInput = trim($_POST['hex'] ?? '');
    $result = hexToDecimal($hexInput);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Hex to Decimal Converter 2025 - Hexadecimal Calculator Online</title>
<meta name="description" content="Instantly convert hexadecimal numbers to decimal values (2025). Perfect for programmers, students, and engineers - Fast, accurate, and no installation required!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
        .tool-card {
            transition: all 0.3s ease;
        }
        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .copy-btn {
            transition: all 0.2s ease;
        }
        .copy-btn:hover {
            background-color: #3182ce;
        }
        .copy-btn:active {
            transform: scale(0.95);
        }
    </style>

</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Hex to Decimal Converter</h1>
            <p class="text-gray-600 max-w-2xl mx-auto">Convert hexadecimal numbers to decimal format instantly. Perfect for programmers, developers, and computer science students.</p>
        </header>

        <!-- Main Tool Card -->
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md overflow-hidden tool-card">
            <div class="p-6">
                <form method="POST" class="space-y-4">
                    <div>
                        <label for="hex" class="block text-sm font-medium text-gray-700 mb-1">Hexadecimal Input</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">0x</span>
                            </div>
                            <input type="text" name="hex" id="hex" value="<?= htmlspecialchars($result['hex']) ?>" class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-12 py-3 sm:text-sm border-gray-300 rounded-md" placeholder="e.g. 1A3 or #FF5733">
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                            Convert to Decimal
                        </button>
                    </div>
                </form>

                <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Conversion Result</h3>
                        
                        <?php if ($result['error']): ?>
                            <div class="bg-red-50 border-l-4 border-red-400 p-4">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm text-red-700"><?= htmlspecialchars($result['error']) ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="bg-gray-50 rounded-md p-4">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-500">Hexadecimal</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <input type="text" id="hex-result" class="block w-full pr-10 sm:text-sm border-gray-300 rounded-md bg-gray-100" value="<?= htmlspecialchars('0x'.$result['hex']) ?>" readonly>
                                            <div class="absolute inset-y-0 right-0 flex items-center">
                                                <button onclick="copyToClipboard('hex-result')" class="copy-btn px-3 h-full rounded-r-md bg-gray-200 hover:bg-gray-300 focus:outline-none">
                                                    <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-500">Decimal</label>
                                        <div class="mt-1 relative rounded-md shadow-sm">
                                            <input type="text" id="decimal-result" class="block w-full pr-10 sm:text-sm border-gray-300 rounded-md bg-gray-100" value="<?= htmlspecialchars($result['decimal']) ?>" readonly>
                                            <div class="absolute inset-y-0 right-0 flex items-center">
                                                <button onclick="copyToClipboard('decimal-result')" class="copy-btn px-3 h-full rounded-r-md bg-gray-200 hover:bg-gray-300 focus:outline-none">
                                                    <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- How to Use Section -->
        <div class="max-w-2xl mx-auto mt-8 bg-white rounded-xl shadow-md overflow-hidden tool-card">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">How to Use Hex to Decimal Converter</h2>
                <ol class="list-decimal list-inside space-y-2 text-gray-700">
                    <li>Enter your hexadecimal number in the input field (with or without '0x' prefix)</li>
                    <li>Click the "Convert to Decimal" button</li>
                    <li>View the decimal equivalent of your hex number</li>
                    <li>Copy the result using the copy button</li>
                </ol>
            </div>
        </div>
    </div>

    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            element.select();
            document.execCommand('copy');
            
            // Show tooltip or notification
            const originalText = element.value;
            element.value = 'Copied!';
            setTimeout(() => {
                element.value = originalText;
            }, 1000);
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
