<?php include 'header.php';?>

<?php
// Function to calculate SWP
function calculateSWP($principal, $rate, $frequency, $duration) {
    $rate = $rate / 100;
    $periods = 0;
    
    switch($frequency) {
        case 'monthly':
            $periods = $duration * 12;
            $rate = $rate / 12;
            break;
        case 'quarterly':
            $periods = $duration * 4;
            $rate = $rate / 4;
            break;
        case 'yearly':
            $periods = $duration;
            break;
    }
    
    // Fixed the missing parenthesis here
    $withdrawalAmount = ($principal * $rate * pow(1 + $rate, $periods)) / (pow(1 + $rate, $periods) - 1);
    $totalWithdrawn = $withdrawalAmount * $periods;
    $interestEarned = $totalWithdrawn - $principal;
    
    return [
        'withdrawalAmount' => $withdrawalAmount,
        'totalWithdrawn' => $totalWithdrawn,
        'interestEarned' => $interestEarned,
        'periods' => $periods
    ];
}

// Handle form submission
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = (float)$_POST['principal'];
    $rate = (float)$_POST['rate'];
    $frequency = $_POST['frequency'];
    $duration = (int)$_POST['duration'];
    
    if ($principal > 0 && $rate > 0 && $duration > 0) {
        $result = calculateSWP($principal, $rate, $frequency, $duration);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWP Calculator | Systematic Withdrawal Plan Calculator</title>
    <meta name="description" content="Calculate your Systematic Withdrawal Plan (SWP) returns. Know how much you can withdraw periodically from your investment.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .tab-active {
            border-bottom: 3px solid #3b82f6;
            color: #3b82f6;
            font-weight: 600;
        }
        .form-input {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        .result-card {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 text-center">SWP Calculator</h1>
            <p class="text-gray-600 text-center mt-2">Calculate your Systematic Withdrawal Plan returns</p>
        </header>

        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                <form method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="principal" class="block text-sm font-medium text-gray-700 mb-1">Investment Amount (₹)</label>
                            <input type="number" id="principal" name="principal" value="<?= isset($_POST['principal']) ? htmlspecialchars($_POST['principal']) : '100000' ?>" 
                                   class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        
                        <div>
                            <label for="rate" class="block text-sm font-medium text-gray-700 mb-1">Expected Return Rate (% p.a.)</label>
                            <input type="number" step="0.01" id="rate" name="rate" value="<?= isset($_POST['rate']) ? htmlspecialchars($_POST['rate']) : '7' ?>" 
                                   class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        
                        <div>
                            <label for="duration" class="block text-sm font-medium text-gray-700 mb-1">Withdrawal Duration (Years)</label>
                            <input type="number" id="duration" name="duration" value="<?= isset($_POST['duration']) ? htmlspecialchars($_POST['duration']) : '10' ?>" 
                                   class="form-input w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Withdrawal Frequency</label>
                            <div class="grid grid-cols-3 gap-2">
                                <button type="button" onclick="setFrequency('monthly')" id="monthly-btn" class="frequency-btn py-2 px-4 border rounded-md text-center <?= (!isset($_POST['frequency']) || ($_POST['frequency']) && $_POST['frequency'] == 'monthly') ? 'bg-blue-100 border-blue-500 text-blue-700' : 'bg-gray-100 border-gray-300 text-gray-700' ?>">Monthly</button>
                                <button type="button" onclick="setFrequency('quarterly')" id="quarterly-btn" class="frequency-btn py-2 px-4 border rounded-md text-center <?= isset($_POST['frequency']) && $_POST['frequency'] == 'quarterly' ? 'bg-blue-100 border-blue-500 text-blue-700' : 'bg-gray-100 border-gray-300 text-gray-700' ?>">Quarterly</button>
                                <button type="button" onclick="setFrequency('yearly')" id="yearly-btn" class="frequency-btn py-2 px-4 border rounded-md text-center <?= isset($_POST['frequency']) && $_POST['frequency'] == 'yearly' ? 'bg-blue-100 border-blue-500 text-blue-700' : 'bg-gray-100 border-gray-300 text-gray-700' ?>">Yearly</button>
                            </div>
                            <input type="hidden" id="frequency" name="frequency" value="<?= isset($_POST['frequency']) ? htmlspecialchars($_POST['frequency']) : 'monthly' ?>">
                        </div>
                    </div>
                    
                    <div class="flex justify-center">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-md transition duration-300">Calculate</button>
                    </div>
                </form>
            </div>
            
            <?php if ($result): ?>
            <div class="border-t border-gray-200">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">SWP Calculation Results</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="result-card bg-white p-4 rounded-lg border border-gray-200">
                            <div class="text-gray-500 text-sm">Periodic Withdrawal</div>
                            <div class="text-2xl font-bold text-blue-600">₹<?= number_format($result['withdrawalAmount'], 2) ?></div>
                            <div class="text-gray-500 text-xs mt-1">per <?= htmlspecialchars($_POST['frequency']) ?></div>
                        </div>
                        
                        <div class="result-card bg-white p-4 rounded-lg border border-gray-200">
                            <div class="text-gray-500 text-sm">Total Withdrawn</div>
                            <div class="text-2xl font-bold text-green-600">₹<?= number_format($result['totalWithdrawn'], 2) ?></div>
                            <div class="text-gray-500 text-xs mt-1">in <?= $result['periods'] ?> withdrawals</div>
                        </div>
                        
                        <div class="result-card bg-white p-4 rounded-lg border border-gray-200">
                            <div class="text-gray-500 text-sm">Interest Earned</div>
                            <div class="text-2xl font-bold text-purple-600">₹<?= number_format($result['interestEarned'], 2) ?></div>
                            <div class="text-gray-500 text-xs mt-1">on ₹<?= number_format($_POST['principal'], 2) ?> investment</div>
                        </div>
                    </div>
                    
                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-medium text-blue-800 mb-2">How does SWP work?</h3>
                        <p class="text-sm text-blue-700">
                            A Systematic Withdrawal Plan (SWP) allows you to withdraw a fixed amount at regular intervals from your investment. 
                            The remaining amount continues to earn returns. This calculator helps you estimate your periodic withdrawals, 
                            total amount withdrawn, and interest earned over the investment period.
                        </p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="mt-8 bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">About SWP Calculator</h2>
                <div class="prose max-w-none text-gray-600">
                    <p>The Systematic Withdrawal Plan (SWP) Calculator helps you determine how much money you can periodically withdraw from your investment while keeping the principal invested.</p>
                    
                    <h3 class="text-lg font-medium text-gray-800 mt-4">Key Benefits of SWP:</h3>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Regular income from your investments</li>
                        <li>Potential to earn returns on remaining investment</li>
                        <li>Flexibility to choose withdrawal frequency</li>
                        <li>Helps in financial planning for retirement or other goals</li>
                    </ul>
                    
                    <h3 class="text-lg font-medium text-gray-800 mt-4">How to use this calculator:</h3>
                    <ol class="list-decimal pl-5 space-y-1">
                        <li>Enter your total investment amount</li>
                        <li>Input expected annual return rate</li>
                        <li>Select withdrawal duration in years</li>
                        <li>Choose withdrawal frequency (monthly, quarterly, yearly)</li>
                        <li>Click 'Calculate' to see results</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <script>
        function setFrequency(frequency) {
            document.getElementById('frequency').value = frequency;
            
            // Update button styles
            document.querySelectorAll('.frequency-btn').forEach(btn => {
                btn.classList.remove('bg-blue-100', 'border-blue-500', 'text-blue-700');
                btn.classList.add('bg-gray-100', 'border-gray-300', 'text-gray-700');
            });
            
            document.getElementById(frequency + '-btn').classList.add('bg-blue-100', 'border-blue-500', 'text-blue-700');
            document.getElementById(frequency + '-btn').classList.remove('bg-gray-100', 'border-gray-300', 'text-gray-700');
        }
    </script>
</body>

<?php include 'footer.php';?>


</html>
