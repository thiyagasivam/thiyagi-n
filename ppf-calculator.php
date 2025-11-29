<?php include 'header.php';?>

<?php
/*
 * PPF Calculator
 * SEO-friendly URL: /ppf-calculator
 */

// Calculate PPF maturity amount
function calculatePPF($principal, $years, $interest_rate) {
    $total_amount = 0;
    $results = [];
    $current_amount = $principal;
    
    for ($year = 1; $year <= $years; $year++) {
        $interest = ($current_amount + $principal) * ($interest_rate / 100);
        $current_amount += $principal + $interest;
        $results[] = [
            'year' => $year,
            'principal' => $principal * $year,
            'interest' => $interest,
            'total' => $current_amount
        ];
    }
    
    return $results;
}

// Handle form submission
$results = [];
$principal = isset($_POST['principal']) ? (float)$_POST['principal'] : 5000;
$years = isset($_POST['years']) ? (int)$_POST['years'] : 15;
$interest_rate = isset($_POST['interest_rate']) ? (float)$_POST['interest_rate'] : 7.1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($principal >= 500 && $principal <= 150000 && $years >= 1 && $years <= 50) {
        $results = calculatePPF($principal, $years, $interest_rate);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPF Calculator 2025 - Public Provident Fund Interest & Maturity Calculator</title>
<meta name="description" content="Free online PPF calculator for 2025. Calculate maturity value, interest earnings & tax-free returns for your Public Provident Fund investments with government-approved formulas.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .form-input {
            transition: all 0.3s ease;
        }
        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
        .result-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .result-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            border-radius: 4px;
            background: #e2e8f0;
            outline: none;
        }
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #3b82f6;
            cursor: pointer;
        }
        .slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #3b82f6;
            cursor: pointer;
        }
        @media (max-width: 640px) {
            .calculator-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Header -->
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">PPF Calculator</h1>
            <p class="text-lg text-gray-600">Calculate your Public Provident Fund (PPF) maturity amount and returns</p>
        </header>

        <div class="grid calculator-grid gap-8">
            <!-- Calculator Form -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Investment Details</h2>
                <form method="POST" class="space-y-5">
                    <!-- Yearly Investment -->
                    <div>
                        <label for="principal" class="block text-sm font-medium text-gray-700 mb-1">
                            Yearly Investment (₹)
                            <span class="text-blue-600 font-semibold">₹<?= number_format($principal) ?></span>
                        </label>
                        <input type="range" id="principal" name="principal" min="500" max="150000" step="500" 
                               value="<?= $principal ?>" class="slider mb-2">
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>₹500</span>
                            <span>₹1.5 Lakh</span>
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Minimum ₹500 - Maximum ₹1.5 Lakh per year</p>
                    </div>

                    <!-- Investment Period -->
                    <div>
                        <label for="years" class="block text-sm font-medium text-gray-700 mb-1">
                            Investment Period (Years)
                            <span class="text-blue-600 font-semibold"><?= $years ?> years</span>
                        </label>
                        <input type="range" id="years" name="years" min="1" max="50" step="1" 
                               value="<?= $years ?>" class="slider mb-2">
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>1 year</span>
                            <span>50 years</span>
                        </div>
                    </div>

                    <!-- Interest Rate -->
                    <div>
                        <label for="interest_rate" class="block text-sm font-medium text-gray-700 mb-1">
                            Interest Rate (% p.a.)
                            <span class="text-blue-600 font-semibold"><?= $interest_rate ?>%</span>
                        </label>
                        <input type="range" id="interest_rate" name="interest_rate" min="5" max="15" step="0.1" 
                               value="<?= $interest_rate ?>" class="slider mb-2">
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>5%</span>
                            <span>15%</span>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200">
                        Calculate PPF Returns
                    </button>
                </form>
            </div>

            <!-- Results Section -->
            <div class="space-y-6">
                <?php if (!empty($results)): ?>
                    <!-- Summary Card -->
                    <div class="bg-white rounded-xl shadow-md p-6 result-card">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">PPF Maturity Summary</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-600">Total Investment</p>
                                <p class="text-2xl font-bold text-blue-600">₹<?= number_format($principal * $years) ?></p>
                            </div>
                            <div class="bg-green-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-600">Interest Earned</p>
                                <p class="text-2xl font-bold text-green-600">₹<?= number_format(end($results)['total'] - ($principal * $years)) ?></p>
                            </div>
                            <div class="bg-purple-50 p-4 rounded-lg col-span-2">
                                <p class="text-sm text-gray-600">Maturity Amount</p>
                                <p class="text-3xl font-bold text-purple-600">₹<?= number_format(end($results)['total']) ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Yearly Breakdown -->
                    <div class="bg-white rounded-xl shadow-md p-6 result-card">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">Yearly Breakdown</h2>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Year</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Principal</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Interest</th>
                                        <th class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase">Total</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($results as $result): ?>
                                    <tr>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900"><?= $result['year'] ?></td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">₹<?= number_format($result['principal']) ?></td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500">₹<?= number_format($result['interest']) ?></td>
                                        <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">₹<?= number_format($result['total']) ?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Default Info Card -->
                    <div class="bg-white rounded-xl shadow-md p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-4">About PPF Calculator</h2>
                        <div class="prose prose-sm text-gray-600">
                            <p>The Public Provident Fund (PPF) is a popular long-term savings scheme backed by the Indian government with attractive interest rates and tax benefits.</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1">
                                <li>Minimum investment: ₹500 per year</li>
                                <li>Maximum investment: ₹1.5 lakh per year</li>
                                <li>Lock-in period: 15 years (extendable in blocks of 5 years)</li>
                                <li>Current interest rate: 7.1% (compounded annually)</li>
                                <li>Tax benefits under Section 80C</li>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-12 bg-white rounded-xl shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">PPF Calculator - FAQs</h2>
            <div class="space-y-4">
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="text-lg font-medium text-gray-900">How is PPF interest calculated?</h3>
                    <p class="mt-1 text-gray-600">PPF interest is calculated monthly but credited annually at the end of the financial year. The interest is compounded annually, meaning you earn interest on both your principal and accumulated interest.</p>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="text-lg font-medium text-gray-900">What is the current PPF interest rate?</h3>
                    <p class="mt-1 text-gray-600">The current PPF interest rate is 7.1% per annum (as of 2023). The government reviews and revises the interest rate every quarter.</p>
                </div>
                <div class="border-b border-gray-200 pb-4">
                    <h3 class="text-lg font-medium text-gray-900">Can I extend my PPF account beyond 15 years?</h3>
                    <p class="mt-1 text-gray-600">Yes, you can extend your PPF account in blocks of 5 years after the initial 15-year maturity period. You can make unlimited withdrawals during the extension period.</p>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include 'footer.php';?>

</html>
