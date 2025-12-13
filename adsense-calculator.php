<?php include 'header.php';?>

<?php
// Function to calculate AdSense earnings
function calculateAdSenseEarnings($pageViews, $rpm, $days) {
    $dailyEarnings = ($pageViews * ($rpm / 1000)) / 30;
    return [
        'daily' => $dailyEarnings,
        'monthly' => $dailyEarnings * 30,
        'yearly' => $dailyEarnings * 365,
        'custom' => $dailyEarnings * $days
    ];
}

// Handle form submission
$results = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pageViews = (int)$_POST['page_views'];
    $rpm = (float)$_POST['rpm'];
    $days = (int)$_POST['days'];
    
    if ($pageViews > 0 && $rpm > 0 && $days > 0) {
        $results = calculateAdSenseEarnings($pageViews, $rpm, $days);
    }
}
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free AdSense Revenue Calculator 2026 - Estimate Earnings Easily | Thiyagai.com</title>
    <meta name="description" content="Calculate your Google AdSense earnings for 2026 with our free tool! Adjust traffic, CTR & RPM to maximize revenue. Try Thiyagai.com’s AdSense Revenue Calculator now!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom enhancements */
        .calculator-box {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .calculator-box:hover {
            box-shadow: 0 20px 50px -10px rgba(0, 0, 0, 0.15);
        }
        .result-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .result-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

</head>
<body>
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="text-center mb-10">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">AdSense Revenue Calculator</h1>
            <p class="text-lg text-gray-600">Estimate your potential earnings from Google AdSense</p>
        </header>

        <div class="calculator-box bg-white rounded-xl p-6 md:p-8 mb-10">
            <form method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="page_views" class="block text-sm font-medium text-gray-700 mb-1">Monthly Page Views</label>
                        <div class="relative">
                            <input type="number" name="page_views" id="page_views" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                   placeholder="e.g., 10000" min="1" required>
                        </div>
                    </div>
                    
                    <div>
                        <label for="rpm" class="block text-sm font-medium text-gray-700 mb-1">Estimated RPM ($)</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500">$</span>
                            </div>
                            <input type="number" name="rpm" id="rpm" step="0.01"
                                   class="w-full pl-8 px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                                   placeholder="e.g., 5.00" min="0.01" required>
                        </div>
                    </div>
                    
                    <div>
                        <label for="days" class="block text-sm font-medium text-gray-700 mb-1">Custom Period (Days)</label>
                        <input type="number" name="days" id="days" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" 
                               placeholder="e.g., 90" min="1" value="30" required>
                    </div>
                </div>
                
                <div class="pt-2">
                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                        Calculate Earnings
                    </button>
                </div>
            </form>
        </div>

        <?php if (!empty($results)): ?>
        <div class="results-section space-y-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Your Estimated Earnings</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="result-item bg-white p-6 rounded-xl border border-gray-100">
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Daily</h3>
                    <p class="text-3xl font-bold text-blue-600">$<?= number_format($results['daily'], 2) ?></p>
                </div>
                
                <div class="result-item bg-white p-6 rounded-xl border border-gray-100">
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Monthly (30 days)</h3>
                    <p class="text-3xl font-bold text-blue-600">$<?= number_format($results['monthly'], 2) ?></p>
                </div>
                
                <div class="result-item bg-white p-6 rounded-xl border border-gray-100">
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Yearly (365 days)</h3>
                    <p class="text-3xl font-bold text-blue-600">$<?= number_format($results['yearly'], 2) ?></p>
                </div>
                
                <div class="result-item bg-white p-6 rounded-xl border border-gray-100">
                    <h3 class="text-lg font-medium text-gray-700 mb-2">Custom (<?= $days ?> days)</h3>
                    <p class="text-3xl font-bold text-blue-600">$<?= number_format($results['custom'], 2) ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="mt-16 bg-gray-50 p-6 rounded-xl">
            <h2 class="text-xl font-bold text-gray-800 mb-4">How to Use This Calculator</h2>
            <div class="prose max-w-none text-gray-600">
                <ol class="list-decimal pl-5 space-y-2">
                    <li>Enter your estimated monthly page views</li>
                    <li>Input your expected RPM (Revenue Per Mille - earnings per 1000 impressions)</li>
                    <li>Set a custom period in days (default is 30 days)</li>
                    <li>Click "Calculate Earnings" to see your potential AdSense revenue</li>
                </ol>
                <p class="mt-4"><strong>Note:</strong> This is an estimation tool only. Actual earnings may vary based on many factors including content type, audience location, ad placement, and seasonality.</p>
            </div>
        </div>
    </div>


</body>


<?php include 'footer.php';?>
