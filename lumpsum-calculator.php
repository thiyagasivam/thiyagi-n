<?php include 'header.php';?>

<?php
// Function to calculate lumpsum investment returns
function calculateLumpsum($investment, $returnRate, $timePeriod) {
    $rate = $returnRate / 100;
    $futureValue = $investment * pow((1 + $rate), $timePeriod);
    $interestEarned = $futureValue - $investment;
    
    return [
        'investedAmount' => $investment,
        'estimatedReturns' => $interestEarned,
        'totalValue' => $futureValue,
        'annualizedReturn' => (pow(($futureValue / $investment), (1 / $timePeriod)) - 1) * 100
    ];
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
    $returnRate = filter_input(INPUT_POST, 'return_rate', FILTER_VALIDATE_FLOAT);
    $timePeriod = filter_input(INPUT_POST, 'time_period', FILTER_VALIDATE_INT);
    
    if ($investment && $returnRate && $timePeriod) {
        $result = calculateLumpsum($investment, $returnRate, $timePeriod);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumpsum Calculator 2025 - Free Mutual Fund & SIP Returns Calculator</title>
<meta name="description" content="Free online lumpsum investment calculator for 2025. Estimate returns on mutual funds, stocks, or fixed deposits. Compare one-time vs. SIP investments with detailed growth projections.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .slider-thumb::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #3b82f6;
            cursor: pointer;
            border-radius: 50%;
        }
        .slider-thumb::-moz-range-thumb {
            width: 20px;
            height: 20px;
            background: #3b82f6;
            cursor: pointer;
            border-radius: 50%;
        }
        .result-card {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }
        .input-highlight {
            border-bottom: 2px solid #3b82f6;
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 text-center">Lumpsum Investment Calculator</h1>
            <p class="text-gray-600 text-center mt-2">Estimate the future value of your one-time mutual fund investment</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Calculator Form -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <form method="POST" id="calculator-form">
                    <div class="mb-6">
                        <label for="investment" class="block text-gray-700 font-medium mb-2">Investment Amount (₹)</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">₹</span>
                            <input type="number" id="investment" name="investment" 
                                   class="w-full pl-8 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 input-highlight"
                                   min="1000" step="500" value="<?= isset($_POST['investment']) ? htmlspecialchars($_POST['investment']) : '100000' ?>" required>
                        </div>
                        <div class="mt-2">
                            <input type="range" min="1000" max="10000000" step="500" value="<?= isset($_POST['investment']) ? htmlspecialchars($_POST['investment']) : '100000' ?>" 
                                   class="w-full slider-thumb" id="investment-range">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="return_rate" class="block text-gray-700 font-medium mb-2">Expected Return Rate (p.a.)</label>
                        <div class="relative">
                            <input type="number" id="return_rate" name="return_rate" 
                                   class="w-full pl-8 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 input-highlight"
                                   min="1" max="30" step="0.1" value="<?= isset($_POST['return_rate']) ? htmlspecialchars($_POST['return_rate']) : '12' ?>" required>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">%</span>
                        </div>
                        <div class="mt-2">
                            <input type="range" min="1" max="30" step="0.1" value="<?= isset($_POST['return_rate']) ? htmlspecialchars($_POST['return_rate']) : '12' ?>" 
                                   class="w-full slider-thumb" id="return-rate-range">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="time_period" class="block text-gray-700 font-medium mb-2">Time Period (years)</label>
                        <div class="relative">
                            <input type="number" id="time_period" name="time_period" 
                                   class="w-full pl-8 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 input-highlight"
                                   min="1" max="40" step="1" value="<?= isset($_POST['time_period']) ? htmlspecialchars($_POST['time_period']) : '10' ?>" required>
                            <span class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500">years</span>
                        </div>
                        <div class="mt-2">
                            <input type="range" min="1" max="40" step="1" value="<?= isset($_POST['time_period']) ? htmlspecialchars($_POST['time_period']) : '10' ?>" 
                                   class="w-full slider-thumb" id="time-period-range">
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
                        Calculate Returns
                    </button>
                </form>
            </div>

            <!-- Results Section -->
            <div class="flex flex-col">
                <?php if ($result): ?>
                    <div class="result-card text-white p-6 rounded-lg shadow-md mb-6">
                        <h2 class="text-xl font-bold mb-4">Investment Summary</h2>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center border-b border-blue-300 pb-2">
                                <span>Invested Amount</span>
                                <span class="font-bold">₹<?= number_format($result['investedAmount']) ?></span>
                            </div>
                            <div class="flex justify-between items-center border-b border-blue-300 pb-2">
                                <span>Estimated Returns</span>
                                <span class="font-bold">₹<?= number_format($result['estimatedReturns']) ?></span>
                            </div>
                            <div class="flex justify-between items-center border-b border-blue-300 pb-2">
                                <span>Total Value</span>
                                <span class="font-bold text-xl">₹<?= number_format($result['totalValue']) ?></span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Annualized Return</span>
                                <span class="font-bold"><?= number_format($result['annualizedReturn'], 2) ?>%</span>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="bg-white p-6 rounded-lg shadow-md flex-1">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">How Lumpsum Calculator Works</h2>
                    <p class="text-gray-600 mb-4">The lumpsum calculator uses the compound interest formula to estimate the future value of your investment:</p>
                    <div class="bg-gray-100 p-4 rounded-lg mb-4">
                        <p class="font-mono text-sm">Future Value = P × (1 + r)^n</p>
                    </div>
                    <ul class="list-disc pl-5 text-gray-600 space-y-2">
                        <li><strong>P</strong> = Principal investment amount</li>
                        <li><strong>r</strong> = Expected rate of return (in decimal)</li>
                        <li><strong>n</strong> = Time period (in years)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sync range sliders with number inputs
        document.getElementById('investment-range').addEventListener('input', function() {
            document.getElementById('investment').value = this.value;
        });
        document.getElementById('investment').addEventListener('input', function() {
            document.getElementById('investment-range').value = this.value;
        });

        document.getElementById('return-rate-range').addEventListener('input', function() {
            document.getElementById('return_rate').value = this.value;
        });
        document.getElementById('return_rate').addEventListener('input', function() {
            document.getElementById('return-rate-range').value = this.value;
        });

        document.getElementById('time-period-range').addEventListener('input', function() {
            document.getElementById('time_period').value = this.value;
        });
        document.getElementById('time_period').addEventListener('input', function() {
            document.getElementById('time-period-range').value = this.value;
        });

        // Auto-calculate on slider change
        document.querySelectorAll('.slider-thumb').forEach(slider => {
            slider.addEventListener('input', function() {
                document.getElementById('calculator-form').dispatchEvent(new Event('submit', {bubbles: true, cancelable: true}));
            });
        });
    </script>
</body>

<?php include 'footer.php';?>

</html>
