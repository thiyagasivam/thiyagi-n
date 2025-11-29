<?php include '../header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Personal Loan EMI Calculator 2025 - Calculate Monthly Payments | Thiyagi.com"; ?></title>
    <meta name="description" content="<?php echo "Calculate your personal loan EMI for 2025 with our advanced calculator. Get instant results for monthly payments, total interest, and payment schedule. Compare different loan scenarios with interactive charts and current interest rates."; ?>">
    <meta name="keywords" content="<?php echo "personal loan EMI calculator 2025, loan EMI calculator, monthly payment calculator, personal loan interest calculator, EMI calculation, loan repayment calculator 2025"; ?>">
    <link rel="canonical" href="<?php echo "https://www.thiyagi.com/calculators/personal-loan-emi-calculator"; ?>">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<?php
// Calculate EMI function
function calculateEMI($principal, $rate, $tenure) {
    $monthlyRate = ($rate / 12) / 100;
    $months = $tenure;
    
    if ($monthlyRate == 0) {
        return $principal / $months;
    }
    
    $emi = ($principal * $monthlyRate * pow(1 + $monthlyRate, $months)) / 
           (pow(1 + $monthlyRate, $months) - 1);
    
    return round($emi, 2);
}

// Generate amortization schedule
function generateAmortizationSchedule($principal, $rate, $tenure) {
    $monthlyRate = ($rate / 12) / 100;
    $emi = calculateEMI($principal, $rate, $tenure);
    $schedule = [];
    $balance = $principal;
    
    for ($month = 1; $month <= min($tenure, 12); $month++) {
        $interestPayment = $balance * $monthlyRate;
        $principalPayment = $emi - $interestPayment;
        $balance -= $principalPayment;
        
        $schedule[] = [
            'month' => $month,
            'emi' => $emi,
            'principal' => max(0, $principalPayment),
            'interest' => max(0, $interestPayment),
            'balance' => max(0, $balance)
        ];
        
        if ($balance <= 0) break;
    }
    
    return $schedule;
}

// Default values
$defaultPrincipal = 500000;
$defaultRate = 12;
$defaultTenure = 60;

// Handle AJAX requests
if (isset($_GET['ajax']) && $_GET['ajax'] === '1') {
    header('Content-Type: application/json');
    
    $principal = filter_input(INPUT_GET, 'principal', FILTER_VALIDATE_FLOAT) ?: $defaultPrincipal;
    $rate = filter_input(INPUT_GET, 'rate', FILTER_VALIDATE_FLOAT) ?: $defaultRate;
    $tenure = filter_input(INPUT_GET, 'tenure', FILTER_VALIDATE_INT) ?: $defaultTenure;
    
    $emi = calculateEMI($principal, $rate, $tenure);
    $totalPayment = $emi * $tenure;
    $totalInterest = $totalPayment - $principal;
    $schedule = generateAmortizationSchedule($principal, $rate, $tenure);
    
    echo json_encode([
        'emi' => $emi,
        'totalPayment' => $totalPayment,
        'totalInterest' => $totalInterest,
        'principal' => $principal,
        'schedule' => $schedule,
        'formatted' => [
            'emi' => '₹' . number_format($emi, 0),
            'totalPayment' => '₹' . number_format($totalPayment, 0),
            'totalInterest' => '₹' . number_format($totalInterest, 0),
            'principal' => '₹' . number_format($principal, 0)
        ]
    ]);
    exit;
}
?>

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-4">
                    <i class="fas fa-calculator text-2xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Personal Loan EMI Calculator 2025</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">Calculate your monthly EMI with current 2025 interest rates, total interest, and plan your personal loan repayment with our advanced calculator</p>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Calculator Input Section -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl shadow-xl p-6 sticky top-4">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-sliders-h text-blue-600 mr-3"></i>
                        Loan Details
                    </h2>
                    
                    <form id="emiForm" class="space-y-6">
                        <!-- Loan Amount -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-rupee-sign text-blue-600 mr-2"></i>
                                Loan Amount
                            </label>
                            <div class="relative">
                                <input type="range" id="principalRange" min="50000" max="5000000" step="10000" value="<?php echo $defaultPrincipal; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-blue-200 to-blue-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="principalInput" value="<?php echo number_format($defaultPrincipal); ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter loan amount">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>₹50,000</span>
                                <span>₹50,00,000</span>
                            </div>
                        </div>

                        <!-- Interest Rate -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-percentage text-green-600 mr-2"></i>
                                Annual Interest Rate
                            </label>
                            <div class="relative">
                                <input type="range" id="rateRange" min="6" max="36" step="0.1" value="<?php echo $defaultRate; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-green-200 to-green-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="rateInput" value="<?php echo $defaultRate; ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter interest rate">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>6%</span>
                                <span>36%</span>
                            </div>
                        </div>

                        <!-- Loan Tenure -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-calendar-alt text-purple-600 mr-2"></i>
                                Loan Tenure (Months)
                            </label>
                            <div class="relative">
                                <input type="range" id="tenureRange" min="6" max="240" step="6" value="<?php echo $defaultTenure; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-purple-200 to-purple-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="tenureInput" value="<?php echo $defaultTenure; ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter tenure in months">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>6 months</span>
                                <span>240 months (20 years)</span>
                            </div>
                            <div class="text-center">
                                <span id="tenureYears" class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">
                                    5 years
                                </span>
                            </div>
                        </div>

                        <!-- Quick Amount Buttons -->
                        <div class="space-y-3">
                            <label class="text-sm font-semibold text-gray-700">Quick Amount Selection</label>
                            <div class="grid grid-cols-2 gap-2">
                                <button type="button" onclick="setAmount(100000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹1 Lakh</button>
                                <button type="button" onclick="setAmount(300000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹3 Lakh</button>
                                <button type="button" onclick="setAmount(500000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹5 Lakh</button>
                                <button type="button" onclick="setAmount(1000000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹10 Lakh</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Results Section -->
            <div class="lg:col-span-2 space-y-6">
                <!-- EMI Results Cards -->
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Monthly EMI -->
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white rounded-2xl p-6 transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-calendar-check text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-xs uppercase tracking-wide opacity-80">Monthly EMI</div>
                                <div id="emiAmount" class="text-2xl font-bold">₹8,560</div>
                            </div>
                        </div>
                        <div class="text-xs opacity-80">Amount you pay every month</div>
                    </div>

                    <!-- Total Interest -->
                    <div class="bg-gradient-to-br from-orange-500 to-red-500 text-white rounded-2xl p-6 transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-chart-line text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-xs uppercase tracking-wide opacity-80">Total Interest</div>
                                <div id="interestAmount" class="text-2xl font-bold">₹1,13,600</div>
                            </div>
                        </div>
                        <div class="text-xs opacity-80">Total interest over loan period</div>
                    </div>

                    <!-- Total Payment -->
                    <div class="bg-gradient-to-br from-green-500 to-emerald-600 text-white rounded-2xl p-6 transform hover:scale-105 transition-all duration-300 shadow-xl">
                        <div class="flex items-center justify-between mb-4">
                            <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-receipt text-xl"></i>
                            </div>
                            <div class="text-right">
                                <div class="text-xs uppercase tracking-wide opacity-80">Total Payment</div>
                                <div id="totalAmount" class="text-2xl font-bold">₹6,13,600</div>
                            </div>
                        </div>
                        <div class="text-xs opacity-80">Total amount you'll pay</div>
                    </div>
                </div>

                <!-- Loan Breakdown Chart -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-chart-pie text-blue-600 mr-3"></i>
                        Loan Breakdown
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Pie Chart -->
                        <div class="relative">
                            <canvas id="loanChart" width="300" height="300"></canvas>
                        </div>
                        <!-- Breakdown Details -->
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-4 bg-blue-50 rounded-xl">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-blue-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700">Principal Amount</span>
                                </div>
                                <span id="principalBreakdown" class="font-bold text-blue-600">₹5,00,000</span>
                            </div>
                            <div class="flex items-center justify-between p-4 bg-orange-50 rounded-xl">
                                <div class="flex items-center">
                                    <div class="w-4 h-4 bg-orange-500 rounded-full mr-3"></div>
                                    <span class="font-medium text-gray-700">Total Interest</span>
                                </div>
                                <span id="interestBreakdown" class="font-bold text-orange-600">₹1,13,600</span>
                            </div>
                            <div class="mt-4 p-4 bg-gray-50 rounded-xl">
                                <div class="text-sm text-gray-600 mb-2">Interest Rate Distribution</div>
                                <div class="flex justify-between text-sm">
                                    <span>Principal: <span id="principalPercentage">81.5%</span></span>
                                    <span>Interest: <span id="interestPercentage">18.5%</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Amortization Schedule -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-table text-green-600 mr-3"></i>
                        Payment Schedule (First 12 Months)
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-gray-50">
                                    <th class="px-4 py-3 text-left font-semibold text-gray-700">Month</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">EMI</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">Principal</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">Interest</th>
                                    <th class="px-4 py-3 text-right font-semibold text-gray-700">Balance</th>
                                </tr>
                            </thead>
                            <tbody id="amortizationTable">
                                <!-- Populated by JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Comparison Tool -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-balance-scale text-purple-600 mr-3"></i>
                        Loan Comparison Tool
                    </h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="text-center p-4 border-2 border-dashed border-gray-200 rounded-xl hover:border-blue-400 transition-colors duration-200">
                            <button onclick="compareScenario(0.5)" class="w-full">
                                <div class="text-lg font-bold text-blue-600">Shorter Tenure</div>
                                <div class="text-sm text-gray-600 mt-1">-50% tenure</div>
                                <div id="shorterTenure" class="text-sm font-medium text-gray-800 mt-2"></div>
                            </button>
                        </div>
                        <div class="text-center p-4 border-2 border-dashed border-gray-200 rounded-xl hover:border-green-400 transition-colors duration-200">
                            <button onclick="compareScenario(1.5)" class="w-full">
                                <div class="text-lg font-bold text-green-600">Longer Tenure</div>
                                <div class="text-sm text-gray-600 mt-1">+50% tenure</div>
                                <div id="longerTenure" class="text-sm font-medium text-gray-800 mt-2"></div>
                            </button>
                        </div>
                        <div class="text-center p-4 border-2 border-dashed border-gray-200 rounded-xl hover:border-orange-400 transition-colors duration-200">
                            <button onclick="compareInterest(-2)" class="w-full">
                                <div class="text-lg font-bold text-orange-600">Lower Rate</div>
                                <div class="text-sm text-gray-600 mt-1">-2% interest</div>
                                <div id="lowerRate" class="text-sm font-medium text-gray-800 mt-2"></div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Content Section -->
        <div class="mt-12 bg-white rounded-2xl shadow-xl p-8">
            <div class="prose max-w-none">
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Personal Loan EMI Calculator 2025 - Complete Guide</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                            What is Personal Loan EMI?
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            EMI (Equated Monthly Installment) is the fixed amount you pay every month to repay your personal loan. 
                            It includes both principal and interest components, calculated using the reducing balance method.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-calculator text-blue-500 mr-2"></i>
                            EMI Calculation Formula
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            EMI = [P × R × (1+R)^N] / [(1+R)^N-1]<br>
                            Where P = Principal, R = Monthly Interest Rate, N = Number of months
                        </p>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Key Features of Our Calculator</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <div>
                                <strong>Real-time Calculations:</strong> Instant results as you adjust loan parameters
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <div>
                                <strong>Interactive Sliders:</strong> Easy-to-use controls for loan amount, rate, and tenure
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <div>
                                <strong>Visual Charts:</strong> Pie chart showing principal vs interest breakdown
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-3 mt-1"></i>
                            <div>
                                <strong>Amortization Schedule:</strong> Detailed month-wise payment breakdown
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Factors Affecting Personal Loan EMI</h3>
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="text-center p-4 border rounded-xl">
                        <i class="fas fa-rupee-sign text-3xl text-blue-600 mb-3"></i>
                        <h4 class="font-semibold text-gray-800 mb-2">Loan Amount</h4>
                        <p class="text-sm text-gray-600">Higher loan amount increases EMI proportionally</p>
                    </div>
                    <div class="text-center p-4 border rounded-xl">
                        <i class="fas fa-percentage text-3xl text-green-600 mb-3"></i>
                        <h4 class="font-semibold text-gray-800 mb-2">Interest Rate</h4>
                        <p class="text-sm text-gray-600">Lower rates reduce your monthly EMI burden</p>
                    </div>
                    <div class="text-center p-4 border rounded-xl">
                        <i class="fas fa-calendar text-3xl text-purple-600 mb-3"></i>
                        <h4 class="font-semibold text-gray-800 mb-2">Loan Tenure</h4>
                        <p class="text-sm text-gray-600">Longer tenure reduces EMI but increases total interest</p>
                    </div>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tips to Reduce Personal Loan EMI</h3>
                <div class="space-y-4 mb-8">
                    <div class="flex items-start">
                        <i class="fas fa-arrow-right text-blue-500 mr-3 mt-1"></i>
                        <div>
                            <strong>Compare Interest Rates:</strong> Shop around different banks and NBFCs for the best rates
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-arrow-right text-blue-500 mr-3 mt-1"></i>
                        <div>
                            <strong>Improve Credit Score:</strong> A higher CIBIL score can help you negotiate better rates
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-arrow-right text-blue-500 mr-3 mt-1"></i>
                        <div>
                            <strong>Choose Optimal Tenure:</strong> Balance between EMI amount and total interest cost
                        </div>
                    </div>
                    <div class="flex items-start">
                        <i class="fas fa-arrow-right text-blue-500 mr-3 mt-1"></i>
                        <div>
                            <strong>Make Prepayments:</strong> Reduce principal outstanding to lower future EMIs
                        </div>
                    </div>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Personal Loan Market Trends 2025</h3>
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 mb-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-chart-line text-blue-600 mr-2"></i>
                                Current Interest Rate Trends
                            </h4>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-blue-500 mr-2 mt-1 text-xs"></i>
                                    <span>Interest rates ranging from 10.99% to 24% per annum</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-blue-500 mr-2 mt-1 text-xs"></i>
                                    <span>Digital lenders offering competitive rates for good credit scores</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-blue-500 mr-2 mt-1 text-xs"></i>
                                    <span>Pre-approved loans with instant disbursals becoming popular</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800 mb-3 flex items-center">
                                <i class="fas fa-mobile-alt text-green-600 mr-2"></i>
                                Digital Innovation in 2025
                            </h4>
                            <ul class="space-y-2 text-gray-600">
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                    <span>AI-powered credit assessment for faster approvals</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                    <span>Paperless loan processing with digital documentation</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-dot-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                    <span>Flexible repayment options and EMI moratorium facilities</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 rounded-r-xl">
                    <h4 class="font-semibold text-gray-800 mb-2 flex items-center">
                        <i class="fas fa-exclamation-triangle text-yellow-500 mr-2"></i>
                        Important Note
                    </h4>
                    <p class="text-gray-700">
                        This calculator provides estimates based on the inputs provided. Actual EMI may vary based on 
                        bank-specific policies, processing fees, and other charges. Always verify with your lender before finalizing.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js for the pie chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Global variables
let loanChart;
let currentPrincipal = <?php echo $defaultPrincipal; ?>;
let currentRate = <?php echo $defaultRate; ?>;
let currentTenure = <?php echo $defaultTenure; ?>;

// Initialize the calculator
document.addEventListener('DOMContentLoaded', function() {
    setupEventListeners();
    updateCalculations();
    initializeChart();
});

function setupEventListeners() {
    // Principal amount
    const principalRange = document.getElementById('principalRange');
    const principalInput = document.getElementById('principalInput');
    
    principalRange.addEventListener('input', function() {
        currentPrincipal = parseInt(this.value);
        principalInput.value = formatNumber(currentPrincipal);
        updateCalculations();
    });
    
    principalInput.addEventListener('input', function() {
        const value = parseFloat(this.value.replace(/,/g, ''));
        if (!isNaN(value) && value >= 50000 && value <= 5000000) {
            currentPrincipal = value;
            principalRange.value = value;
            updateCalculations();
        }
    });
    
    // Interest rate
    const rateRange = document.getElementById('rateRange');
    const rateInput = document.getElementById('rateInput');
    
    rateRange.addEventListener('input', function() {
        currentRate = parseFloat(this.value);
        rateInput.value = currentRate;
        updateCalculations();
    });
    
    rateInput.addEventListener('input', function() {
        const value = parseFloat(this.value);
        if (!isNaN(value) && value >= 6 && value <= 36) {
            currentRate = value;
            rateRange.value = value;
            updateCalculations();
        }
    });
    
    // Tenure
    const tenureRange = document.getElementById('tenureRange');
    const tenureInput = document.getElementById('tenureInput');
    
    tenureRange.addEventListener('input', function() {
        currentTenure = parseInt(this.value);
        tenureInput.value = currentTenure;
        updateTenureDisplay();
        updateCalculations();
    });
    
    tenureInput.addEventListener('input', function() {
        const value = parseInt(this.value);
        if (!isNaN(value) && value >= 6 && value <= 240) {
            currentTenure = value;
            tenureRange.value = value;
            updateTenureDisplay();
            updateCalculations();
        }
    });
    
    updateTenureDisplay();
}

function updateTenureDisplay() {
    const years = Math.floor(currentTenure / 12);
    const months = currentTenure % 12;
    let displayText = '';
    
    if (years > 0) {
        displayText += years + ' year' + (years > 1 ? 's' : '');
    }
    if (months > 0) {
        if (displayText) displayText += ' ';
        displayText += months + ' month' + (months > 1 ? 's' : '');
    }
    
    document.getElementById('tenureYears').textContent = displayText;
}

function updateCalculations() {
    fetch(`?ajax=1&principal=${currentPrincipal}&rate=${currentRate}&tenure=${currentTenure}`)
        .then(response => response.json())
        .then(data => {
            // Update result cards
            document.getElementById('emiAmount').textContent = data.formatted.emi;
            document.getElementById('interestAmount').textContent = data.formatted.totalInterest;
            document.getElementById('totalAmount').textContent = data.formatted.totalPayment;
            
            // Update breakdown
            document.getElementById('principalBreakdown').textContent = data.formatted.principal;
            document.getElementById('interestBreakdown').textContent = data.formatted.totalInterest;
            
            // Update percentages
            const principalPerc = ((data.principal / data.totalPayment) * 100).toFixed(1);
            const interestPerc = ((data.totalInterest / data.totalPayment) * 100).toFixed(1);
            document.getElementById('principalPercentage').textContent = principalPerc + '%';
            document.getElementById('interestPercentage').textContent = interestPerc + '%';
            
            // Update chart
            updateChart(data.principal, data.totalInterest);
            
            // Update amortization table
            updateAmortizationTable(data.schedule);
            
            // Update comparison scenarios
            updateComparisonScenarios(data);
        })
        .catch(error => console.error('Error:', error));
}

function initializeChart() {
    const ctx = document.getElementById('loanChart').getContext('2d');
    loanChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Principal Amount', 'Total Interest'],
            datasets: [{
                data: [currentPrincipal, 0],
                backgroundColor: ['#3B82F6', '#F97316'],
                borderWidth: 2,
                borderColor: '#fff'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'bottom',
                    labels: {
                        usePointStyle: true,
                        padding: 20
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const value = formatCurrency(context.raw);
                            const percentage = ((context.raw / (context.dataset.data[0] + context.dataset.data[1])) * 100).toFixed(1);
                            return context.label + ': ' + value + ' (' + percentage + '%)';
                        }
                    }
                }
            }
        }
    });
}

function updateChart(principal, interest) {
    if (loanChart) {
        loanChart.data.datasets[0].data = [principal, interest];
        loanChart.update();
    }
}

function updateAmortizationTable(schedule) {
    const tbody = document.getElementById('amortizationTable');
    tbody.innerHTML = '';
    
    schedule.forEach(payment => {
        const row = document.createElement('tr');
        row.className = 'border-b hover:bg-gray-50';
        row.innerHTML = `
            <td class="px-4 py-3 font-medium">${payment.month}</td>
            <td class="px-4 py-3 text-right">₹${formatNumber(payment.emi)}</td>
            <td class="px-4 py-3 text-right text-blue-600">₹${formatNumber(payment.principal)}</td>
            <td class="px-4 py-3 text-right text-orange-600">₹${formatNumber(payment.interest)}</td>
            <td class="px-4 py-3 text-right font-medium">₹${formatNumber(payment.balance)}</td>
        `;
        tbody.appendChild(row);
    });
}

function updateComparisonScenarios(currentData) {
    // Shorter tenure scenario
    const shorterTenure = Math.max(6, Math.floor(currentTenure * 0.5));
    const shorterEMI = calculateEMI(currentPrincipal, currentRate, shorterTenure);
    document.getElementById('shorterTenure').innerHTML = `
        <div>EMI: ₹${formatNumber(shorterEMI)}</div>
        <div class="text-xs text-gray-500">${shorterTenure} months</div>
    `;
    
    // Longer tenure scenario
    const longerTenure = Math.min(240, Math.floor(currentTenure * 1.5));
    const longerEMI = calculateEMI(currentPrincipal, currentRate, longerTenure);
    document.getElementById('longerTenure').innerHTML = `
        <div>EMI: ₹${formatNumber(longerEMI)}</div>
        <div class="text-xs text-gray-500">${longerTenure} months</div>
    `;
    
    // Lower rate scenario
    const lowerRate = Math.max(6, currentRate - 2);
    const lowerRateEMI = calculateEMI(currentPrincipal, lowerRate, currentTenure);
    document.getElementById('lowerRate').innerHTML = `
        <div>EMI: ₹${formatNumber(lowerRateEMI)}</div>
        <div class="text-xs text-gray-500">${lowerRate}% rate</div>
    `;
}

function calculateEMI(principal, rate, tenure) {
    const monthlyRate = (rate / 12) / 100;
    if (monthlyRate === 0) return principal / tenure;
    
    const emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, tenure)) / 
                (Math.pow(1 + monthlyRate, tenure) - 1);
    return Math.round(emi);
}

function setAmount(amount) {
    currentPrincipal = amount;
    document.getElementById('principalRange').value = amount;
    document.getElementById('principalInput').value = formatNumber(amount);
    updateCalculations();
}

function compareScenario(multiplier) {
    const newTenure = Math.max(6, Math.min(240, Math.floor(currentTenure * multiplier)));
    document.getElementById('tenureRange').value = newTenure;
    document.getElementById('tenureInput').value = newTenure;
    currentTenure = newTenure;
    updateTenureDisplay();
    updateCalculations();
}

function compareInterest(change) {
    const newRate = Math.max(6, Math.min(36, currentRate + change));
    document.getElementById('rateRange').value = newRate;
    document.getElementById('rateInput').value = newRate;
    currentRate = newRate;
    updateCalculations();
}

function formatNumber(num) {
    return new Intl.NumberFormat('en-IN').format(Math.round(num));
}

function formatCurrency(num) {
    return '₹' + formatNumber(num);
}

// Add custom styles for sliders
const style = document.createElement('style');
style.textContent = `
    .slider::-webkit-slider-thumb {
        appearance: none;
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #3B82F6;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .slider::-moz-range-thumb {
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid #3B82F6;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    
    .slider:focus {
        outline: none;
    }
    
    .slider:focus::-webkit-slider-thumb {
        box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.2);
    }
`;
document.head.appendChild(style);
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Personal Loan EMI Calculator 2025",
  "description": "Calculate your personal loan EMI for 2025 with our advanced calculator. Get instant results for monthly payments, total interest, and payment schedule with current market rates.",
  "url": "https://www.thiyagi.com/calculators/personal-loan-emi-calculator",
  "applicationCategory": "FinanceApplication",
  "operatingSystem": "Any",
  "browserRequirements": "HTML5, JavaScript",
  "creator": {
    "@type": "Organization",
    "name": "Thiyagi.com",
    "url": "https://www.thiyagi.com"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Real-time EMI calculation",
    "Interactive loan parameter adjustment",
    "Visual loan breakdown charts",
    "Detailed amortization schedule",
    "Loan scenario comparison tool"
  ]
}
</script>

</body>
<?php include '../footer.php';?>
</html>