<?php include 'header.php';?>

<?php
/*
 * EMI Calculator
 * SEO-friendly URL: /emi-calculator
 */

// Calculate EMI function
function calculateEMI($principal, $rate, $tenure, $tenureType) {
    // Convert annual rate to monthly and percentage to decimal
    $monthlyRate = ($rate / 12) / 100;
    
    // Convert tenure to months if in years
    $months = ($tenureType === 'years') ? $tenure * 12 : $tenure;
    
    // EMI formula: [P x R x (1+R)^N]/[(1+R)^N-1]
    $emi = ($principal * $monthlyRate * pow(1 + $monthlyRate, $months)) / 
           (pow(1 + $monthlyRate, $months) - 1);
    
    return round($emi, 2);
}

// Calculate total payment and interest
function calculateTotalPayment($emi, $tenure, $tenureType) {
    $months = ($tenureType === 'years') ? $tenure * 12 : $tenure;
    $totalPayment = $emi * $months;
    return round($totalPayment, 2);
}

// Handle form submission
$results = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = filter_input(INPUT_POST, 'principal', FILTER_VALIDATE_FLOAT);
    $rate = filter_input(INPUT_POST, 'rate', FILTER_VALIDATE_FLOAT);
    $tenure = filter_input(INPUT_POST, 'tenure', FILTER_VALIDATE_FLOAT);
    $tenureType = $_POST['tenure_type'] ?? 'years';
    
    if ($principal && $rate && $tenure) {
        $emi = calculateEMI($principal, $rate, $tenure, $tenureType);
        $totalPayment = calculateTotalPayment($emi, $tenure, $tenureType);
        $totalInterest = $totalPayment - $principal;
        
        $results = [
            'emi' => number_format($emi, 2),
            'total_payment' => number_format($totalPayment, 2),
            'total_interest' => number_format($totalInterest, 2),
            'principal' => number_format($principal, 2),
            'months' => ($tenureType === 'years') ? $tenure * 12 : $tenure
        ];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free EMI Calculator 2025 - Loan & Finance Monthly Installment Calculator</title>
<meta name="description" content="Calculate EMIs for home, car, personal & education loans (2025). Get instant monthly payment estimates with interest breakdown - No registration required!">
<link rel="canonical" href="https://www.thiyagi.com/emi-calculator" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .slider-thumb::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 24px;
            height: 24px;
            background: #4f46e5;
            cursor: pointer;
            border-radius: 50%;
            border: none;
        }
        .slider-thumb::-moz-range-thumb {
            width: 24px;
            height: 24px;
            background: #4f46e5;
            cursor: pointer;
            border-radius: 50%;
            border: none;
        }
        .chart-container {
            height: 200px;
        }
        @media (min-width: 768px) {
            .chart-container {
                height: 250px;
            }
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">EMI Calculator</h1>
            <p class="text-gray-600">Calculate your Equated Monthly Installment (EMI) for home loans, car loans, personal loans</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Calculator Form -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <form method="POST" id="emi-form">
                    <div class="mb-6">
                        <label for="principal" class="block text-sm font-medium text-gray-700 mb-1">Loan Amount (₹)</label>
                        <div class="relative">
                            <input type="range" id="principal" name="principal" min="10000" max="50000000" step="10000" 
                                   value="<?= isset($_POST['principal']) ? $_POST['principal'] : 1000000 ?>" 
                                   class="w-full slider-thumb h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>₹10K</span>
                                <span>₹5Cr</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="number" id="principal-input" 
                                   value="<?= isset($_POST['principal']) ? $_POST['principal'] : 1000000 ?>" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="rate" class="block text-sm font-medium text-gray-700 mb-1">Interest Rate (% p.a.)</label>
                        <div class="relative">
                            <input type="range" id="rate" name="rate" min="1" max="30" step="0.1" 
                                   value="<?= isset($_POST['rate']) ? $_POST['rate'] : 8.5 ?>" 
                                   class="w-full slider-thumb h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>1%</span>
                                <span>30%</span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="number" id="rate-input" step="0.1" 
                                   value="<?= isset($_POST['rate']) ? $_POST['rate'] : 8.5 ?>" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <label for="tenure" class="block text-sm font-medium text-gray-700 mb-1">Loan Tenure</label>
                        <div class="relative">
                            <input type="range" id="tenure" name="tenure" min="1" max="30" step="1" 
                                   value="<?= isset($_POST['tenure']) ? $_POST['tenure'] : 20 ?>" 
                                   class="w-full slider-thumb h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>1</span>
                                <span>30</span>
                            </div>
                        </div>
                        <div class="mt-2 flex items-center">
                            <input type="number" id="tenure-input" 
                                   value="<?= isset($_POST['tenure']) ? $_POST['tenure'] : 20 ?>" 
                                   class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            <select name="tenure_type" id="tenure_type" class="ml-2 px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                                <option value="years" <?= (!isset($_POST['tenure_type']) || $_POST['tenure_type'] === 'years') ? 'selected' : '' ?>>Years</option>
                                <option value="months" <?= (isset($_POST['tenure_type']) && $_POST['tenure_type'] === 'months') ? 'selected' : '' ?>>Months</option>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="w-full bg-indigo-600 text-white py-3 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 font-medium">
                        Calculate EMI
                    </button>
                </form>
            </div>
            
            <!-- Results Section -->
            <div class="bg-white p-6 rounded-xl shadow-md">
                <?php if (!empty($results)): ?>
                    <div class="text-center mb-6">
                        <h2 class="text-xl font-semibold text-gray-800">Your EMI Details</h2>
                        <p class="text-gray-600 text-sm">Based on your inputs</p>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="bg-indigo-50 p-4 rounded-lg">
                            <p class="text-sm text-indigo-600">Monthly EMI</p>
                            <p class="text-2xl font-bold text-gray-800">₹<?= $results['emi'] ?></p>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-600">Total Interest</p>
                                <p class="text-lg font-semibold text-gray-800">₹<?= $results['total_interest'] ?></p>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-sm text-gray-600">Total Payment</p>
                                <p class="text-lg font-semibold text-gray-800">₹<?= $results['total_payment'] ?></p>
                            </div>
                        </div>
                        
                        <div class="chart-container">
                            <canvas id="emiChart"></canvas>
                        </div>
                        
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <p class="text-sm text-gray-600">Principal Amount</p>
                            <p class="text-lg font-semibold text-gray-800">₹<?= $results['principal'] ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="text-center py-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        <h3 class="mt-2 text-lg font-medium text-gray-900">No calculation yet</h3>
                        <p class="mt-1 text-sm text-gray-500">Enter your loan details and click "Calculate EMI" to see results.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
        <!-- EMI Information Section -->
        <div class="mt-8 bg-white p-6 rounded-xl shadow-md">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">About EMI Calculator</h2>
            <div class="prose prose-indigo max-w-none text-gray-600">
                <p>An <strong>Equated Monthly Installment (EMI)</strong> is a fixed payment amount made by a borrower to a lender at a specified date each calendar month. EMIs are used to pay off both interest and principal each month, so that over a specified number of years, the loan is paid off in full.</p>
                <p class="mt-2">Our EMI calculator helps you:</p>
                <ul class="list-disc pl-5 space-y-1">
                    <li>Plan your loan repayment effectively</li>
                    <li>Understand the total interest payable</li>
                    <li>Compare different loan options</li>
                    <li>Make informed financial decisions</li>
                </ul>
                <p class="mt-2">This calculator works for all types of loans including home loans, car loans, personal loans, and education loans.</p>
            </div>
        </div>
    </div>

    <!-- Chart.js for pie chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Sync range sliders with number inputs
        document.getElementById('principal').addEventListener('input', function() {
            document.getElementById('principal-input').value = this.value;
        });
        document.getElementById('principal-input').addEventListener('input', function() {
            document.getElementById('principal').value = this.value;
        });
        
        document.getElementById('rate').addEventListener('input', function() {
            document.getElementById('rate-input').value = this.value;
        });
        document.getElementById('rate-input').addEventListener('input', function() {
            document.getElementById('rate').value = this.value;
        });
        
        document.getElementById('tenure').addEventListener('input', function() {
            document.getElementById('tenure-input').value = this.value;
        });
        document.getElementById('tenure-input').addEventListener('input', function() {
            document.getElementById('tenure').value = this.value;
        });
        
        // Draw pie chart if results exist
        <?php if (!empty($results)): ?>
            const ctx = document.getElementById('emiChart').getContext('2d');
            const emiChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Principal', 'Interest'],
                    datasets: [{
                        data: [<?= $results['principal'] ?>, <?= $results['total_interest'] ?>],
                        backgroundColor: [
                            '#4f46e5',
                            '#a5b4fc'
                        ],
                        borderWidth: 0
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.label + ': ₹' + context.raw.toLocaleString('en-IN');
                                }
                            }
                        }
                    },
                    cutout: '65%'
                }
            });
        <?php endif; ?>
    </script>
</body>

<?php include 'footer.php';?>

</html>
