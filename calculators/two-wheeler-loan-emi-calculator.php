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
$defaultPrincipal = 150000;
$defaultRate = 11;
$defaultTenure = 36;

// Handle AJAX requests FIRST - before any output
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
    exit; // Important: exit here to prevent HTML output
}

// Include header only for non-AJAX requests
include '../header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Two Wheeler Loan EMI Calculator 2026 - Bike & Scooter Loan Calculator | Thiyagi.com"; ?></title>
    <meta name="description" content="<?php echo "Calculate your two-wheeler loan EMI for bikes and scooters in 2026. Get instant results for monthly payments, total interest, and payment schedule with current interest rates. Compare different loan scenarios."; ?>">
    <meta name="keywords" content="<?php echo "two wheeler loan EMI calculator 2026, bike loan calculator, scooter loan EMI, vehicle loan calculator, motorcycle loan EMI calculator, two wheeler finance calculator 2026"; ?>">
    <link rel="canonical" href="<?php echo "https://www.thiyagi.com/calculators/two-wheeler-loan-emi-calculator"; ?>">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-4">
                    <i class="fas fa-motorcycle text-2xl"></i>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Two Wheeler Loan EMI Calculator 2026</h1>
                <p class="text-xl opacity-90 max-w-2xl mx-auto">Calculate your bike & scooter loan EMI with current 2026 interest rates, total interest, and plan your two-wheeler loan repayment with our advanced calculator</p>
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
                        Two Wheeler Loan Details
                    </h2>
                    
                    <form id="emiForm" class="space-y-6">
                        <!-- Loan Amount -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-rupee-sign text-blue-600 mr-2"></i>
                                Vehicle Price / Loan Amount
                            </label>
                            <div class="relative">
                                <input type="range" id="principalRange" min="30000" max="500000" step="5000" value="<?php echo $defaultPrincipal; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-blue-200 to-blue-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="principalInput" value="<?php echo number_format($defaultPrincipal); ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter vehicle price">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>₹30,000</span>
                                <span>₹5,00,000</span>
                            </div>
                        </div>

                        <!-- Interest Rate -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-percentage text-green-600 mr-2"></i>
                                Annual Interest Rate
                            </label>
                            <div class="relative">
                                <input type="range" id="rateRange" min="8" max="20" step="0.1" value="<?php echo $defaultRate; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-green-200 to-green-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="rateInput" value="<?php echo $defaultRate; ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter interest rate">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>8%</span>
                                <span>20%</span>
                            </div>
                        </div>

                        <!-- Loan Tenure -->
                        <div class="space-y-3">
                            <label class="flex items-center text-sm font-semibold text-gray-700">
                                <i class="fas fa-calendar-alt text-purple-600 mr-2"></i>
                                Loan Tenure (Months)
                            </label>
                            <div class="relative">
                                <input type="range" id="tenureRange" min="6" max="84" step="6" value="<?php echo $defaultTenure; ?>"
                                    class="w-full h-2 bg-gradient-to-r from-purple-200 to-purple-400 rounded-lg appearance-none cursor-pointer slider">
                                <input type="text" id="tenureInput" value="<?php echo $defaultTenure; ?>"
                                    class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-purple-500 focus:ring-2 focus:ring-purple-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                    placeholder="Enter tenure in months">
                            </div>
                            <div class="flex justify-between text-xs text-gray-500">
                                <span>6 months</span>
                                <span>84 months (7 years)</span>
                            </div>
                            <div class="text-center">
                                <span id="tenureYears" class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">
                                    3 years
                                </span>
                            </div>
                        </div>

                        <!-- Quick Amount Buttons -->
                        <div class="space-y-3">
                            <label class="text-sm font-semibold text-gray-700">Quick Vehicle Price Selection</label>
                            <div class="grid grid-cols-2 gap-2">
                                <button type="button" onclick="setAmount(50000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹50K</button>
                                <button type="button" onclick="setAmount(100000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹1 Lakh</button>
                                <button type="button" onclick="setAmount(150000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹1.5 Lakh</button>
                                <button type="button" onclick="setAmount(250000)" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition-colors duration-200 font-medium">₹2.5 Lakh</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Results Section -->
            <div class="lg:col-span-2 space-y-6">
                <!-- EMI Results Cards -->
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-transform duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <i class="fas fa-calendar-check text-2xl opacity-80"></i>
                            <span class="text-sm opacity-80">Monthly EMI</span>
                        </div>
                        <div id="emiAmount" class="text-3xl font-bold mb-2">₹4,950</div>
                        <div class="text-sm opacity-90">Equated Monthly Installment</div>
                    </div>

                    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-transform duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <i class="fas fa-chart-line text-2xl opacity-80"></i>
                            <span class="text-sm opacity-80">Total Interest</span>
                        </div>
                        <div id="totalInterest" class="text-3xl font-bold mb-2">₹28,200</div>
                        <div class="text-sm opacity-90">Interest over loan tenure</div>
                    </div>

                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-transform duration-300">
                        <div class="flex items-center justify-between mb-4">
                            <i class="fas fa-coins text-2xl opacity-80"></i>
                            <span class="text-sm opacity-80">Total Amount</span>
                        </div>
                        <div id="totalAmount" class="text-3xl font-bold mb-2">₹1,78,200</div>
                        <div class="text-sm opacity-90">Principal + Interest</div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-pie text-indigo-600 mr-3"></i>
                            Loan Breakdown
                        </h3>
                        <div class="w-full h-64 sm:h-80 flex items-center justify-center">
                            <canvas id="pieChart" class="max-w-full max-h-full"></canvas>
                        </div>
                    </div>

                    <div class="bg-white rounded-2xl shadow-xl p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-bar text-green-600 mr-3"></i>
                            Payment Schedule
                        </h3>
                        <div class="w-full h-64 sm:h-80 flex items-center justify-center">
                            <canvas id="barChart" class="max-w-full max-h-full"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Amortization Schedule -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                        <i class="fas fa-table text-orange-600 mr-3"></i>
                        Amortization Schedule (First 12 Months)
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead>
                                <tr class="bg-gray-100 text-gray-700">
                                    <th class="px-4 py-3 text-left font-semibold">Month</th>
                                    <th class="px-4 py-3 text-right font-semibold">EMI</th>
                                    <th class="px-4 py-3 text-right font-semibold">Principal</th>
                                    <th class="px-4 py-3 text-right font-semibold">Interest</th>
                                    <th class="px-4 py-3 text-right font-semibold">Balance</th>
                                </tr>
                            </thead>
                            <tbody id="scheduleTable" class="divide-y divide-gray-200">
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
                            <button onclick="compareInterest(-1)" class="w-full">
                                <div class="text-lg font-bold text-orange-600">Lower Rate</div>
                                <div class="text-sm text-gray-600 mt-1">-1% interest</div>
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
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Two Wheeler Loan EMI Calculator 2026 - Complete Guide</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                            What is Two Wheeler Loan EMI?
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Two Wheeler Loan EMI (Equated Monthly Installment) is the fixed amount you pay every month to repay your bike or scooter loan. 
                            It includes both principal and interest components, making it easier to budget for your vehicle purchase.
                        </p>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-calculator text-blue-500 mr-2"></i>
                            EMI Calculation Formula
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            EMI = [P × R × (1+R)^N] / [(1+R)^N-1]<br>
                            Where P = Principal Amount, R = Monthly Interest Rate, N = Number of months
                        </p>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 mb-8">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Key Features of Our Two Wheeler Loan Calculator</h3>
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
                                <strong>Interactive Sliders:</strong> Easy-to-use controls for vehicle price, rate, and tenure
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

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Factors Affecting Two Wheeler Loan EMI</h3>
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="text-center p-4 border rounded-xl">
                        <i class="fas fa-rupee-sign text-blue-600 text-2xl mb-3"></i>
                        <h4 class="font-semibold text-gray-800">Vehicle Price</h4>
                        <p class="text-sm text-gray-600 mt-2">Higher vehicle price increases EMI amount</p>
                    </div>
                    <div class="text-center p-4 border rounded-xl">
                        <i class="fas fa-percentage text-green-600 text-2xl mb-3"></i>
                        <h4 class="font-semibold text-gray-800">Interest Rate</h4>
                        <p class="text-sm text-gray-600 mt-2">Lower rates result in lower EMIs</p>
                    </div>
                    <div class="text-center p-4 border rounded-xl">
                        <i class="fas fa-calendar-alt text-purple-600 text-2xl mb-3"></i>
                        <h4 class="font-semibold text-gray-800">Loan Tenure</h4>
                        <p class="text-sm text-gray-600 mt-2">Longer tenure reduces monthly EMI but increases total interest</p>
                    </div>
                </div>

                <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-8">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-yellow-400"></i>
                        </div>
                        <div class="ml-3">
                            <h4 class="text-lg font-semibold text-yellow-800">Down Payment Impact</h4>
                            <p class="text-yellow-700">A higher down payment reduces the loan amount and subsequently your EMI. Most lenders require 10-20% down payment for two-wheeler loans.</p>
                        </div>
                    </div>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Benefits of Two Wheeler Loans</h3>
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <strong>Easy Approval:</strong> Quick processing with minimal documentation
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <strong>Lower Interest Rates:</strong> Competitive rates compared to personal loans
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <strong>Flexible Tenure:</strong> Repayment options from 6 months to 7 years
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <strong>No Collateral:</strong> Vehicle acts as security for the loan
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <strong>Tax Benefits:</strong> Possible tax deductions for business use
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-star text-yellow-500 mr-3 mt-1"></i>
                            <div>
                                <strong>Prepayment Options:</strong> Most lenders allow prepayment without penalties
                            </div>
                        </div>
                    </div>
                </div>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Frequently Asked Questions</h3>
                <div class="space-y-6">
                    <div class="border-l-4 border-blue-400 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">What is the typical interest rate for two-wheeler loans in 2026?</h4>
                        <p class="text-gray-600">Interest rates for two-wheeler loans typically range from 8% to 20% per annum, depending on factors like your credit score, income, and the lender.</p>
                    </div>
                    
                    <div class="border-l-4 border-green-400 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">What is the maximum loan tenure for two-wheeler loans?</h4>
                        <p class="text-gray-600">Most lenders offer two-wheeler loans with tenure ranging from 6 months to 7 years (84 months), depending on the vehicle price and your repayment capacity.</p>
                    </div>
                    
                    <div class="border-l-4 border-purple-400 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Can I prepay my two-wheeler loan?</h4>
                        <p class="text-gray-600">Yes, most lenders allow prepayment of two-wheeler loans. Some may charge a prepayment penalty, typically 1-3% of the outstanding amount, while others offer penalty-free prepayment.</p>
                    </div>
                    
                    <div class="border-l-4 border-orange-400 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">What documents are required for a two-wheeler loan?</h4>
                        <p class="text-gray-600">Typically required documents include identity proof, address proof, income proof (salary slips, ITR), bank statements, and vehicle quotation or pro forma invoice.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
let pieChart, barChart;

// Initialize charts
function initCharts() {
    try {
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        const barCtx = document.getElementById('barChart').getContext('2d');
        
        pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Principal Amount', 'Total Interest'],
                datasets: [{
                    data: [<?php echo $defaultPrincipal; ?>, 0],
                    backgroundColor: [
                        'rgba(59, 130, 246, 0.8)',
                        'rgba(16, 185, 129, 0.8)'
                    ],
                    borderColor: [
                        'rgba(59, 130, 246, 1)',
                        'rgba(16, 185, 129, 1)'
                    ],
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom'
                    }
                }
            }
        });
        
        barChart = new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: [],
                datasets: [{
                    label: 'Principal',
                    data: [],
                    backgroundColor: 'rgba(59, 130, 246, 0.8)'
                }, {
                    label: 'Interest',
                    data: [],
                    backgroundColor: 'rgba(16, 185, 129, 0.8)'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true
                    }
                }
            }
        });
    } catch (error) {
        console.error('Error initializing charts:', error);
    }
}

// Update calculations
function updateCalculations() {
    try {
        const principalInput = document.getElementById('principalInput');
        const rateInput = document.getElementById('rateInput');
        const tenureInput = document.getElementById('tenureInput');
        
        if (!principalInput || !rateInput || !tenureInput) {
            console.error('Required input elements not found');
            return;
        }
        
        const principal = parseFloat(principalInput.value.replace(/,/g, '')) || <?php echo $defaultPrincipal; ?>;
        const rate = parseFloat(rateInput.value) || <?php echo $defaultRate; ?>;
        const tenure = parseInt(tenureInput.value) || <?php echo $defaultTenure; ?>;
        
        // Validate inputs
        if (principal <= 0 || rate <= 0 || tenure <= 0) {
            console.error('Invalid input values');
            return;
        }
        
        const url = `?ajax=1&principal=${principal}&rate=${rate}&tenure=${tenure}`;
        console.log('Making AJAX request:', url);
        
        fetch(url)
            .then(response => {
                console.log('Response status:', response.status);
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.text(); // Get as text first to check content
            })
            .then(text => {
                console.log('Raw response:', text);
                try {
                    const data = JSON.parse(text);
                    console.log('Parsed data:', data);
                    return data;
                } catch (e) {
                    console.error('JSON parse error:', e);
                    console.error('Response text:', text);
                    throw new Error('Invalid JSON response');
                }
            })
            .then(data => {
                if (!data || !data.formatted) {
                    throw new Error('Invalid response data');
                }
                
                // Update result cards
                const emiAmount = document.getElementById('emiAmount');
                const totalInterest = document.getElementById('totalInterest');
                const totalAmount = document.getElementById('totalAmount');
                
                if (emiAmount) emiAmount.textContent = data.formatted.emi;
                if (totalInterest) totalInterest.textContent = data.formatted.totalInterest;
                if (totalAmount) totalAmount.textContent = data.formatted.totalPayment;
                
                // Update charts if they exist
                if (pieChart && data.principal !== undefined && data.totalInterest !== undefined) {
                    pieChart.data.datasets[0].data = [data.principal, data.totalInterest];
                    pieChart.update();
                }
                
                if (barChart && data.schedule && Array.isArray(data.schedule)) {
                    barChart.data.labels = data.schedule.map(item => `Month ${item.month}`);
                    barChart.data.datasets[0].data = data.schedule.map(item => item.principal);
                    barChart.data.datasets[1].data = data.schedule.map(item => item.interest);
                    barChart.update();
                }
                
                // Update amortization table
                if (data.schedule) {
                    updateAmortizationTable(data.schedule);
                }
                
                // Update comparison scenarios
                updateComparisons(principal, rate, tenure);
            })
            .catch(error => {
                console.error('Error updating calculations:', error);
                // Show user-friendly error message
                const emiAmount = document.getElementById('emiAmount');
                if (emiAmount) {
                    emiAmount.textContent = 'Error';
                    emiAmount.style.color = '#ef4444';
                }
            });
    } catch (error) {
        console.error('Error in updateCalculations:', error);
    }
}

// Update amortization table
function updateAmortizationTable(schedule) {
    const tbody = document.getElementById('scheduleTable');
    tbody.innerHTML = '';
    
    schedule.forEach(row => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td class="px-4 py-3 font-medium">${row.month}</td>
            <td class="px-4 py-3 text-right">₹${Math.round(row.emi).toLocaleString()}</td>
            <td class="px-4 py-3 text-right">₹${Math.round(row.principal).toLocaleString()}</td>
            <td class="px-4 py-3 text-right">₹${Math.round(row.interest).toLocaleString()}</td>
            <td class="px-4 py-3 text-right font-medium">₹${Math.round(row.balance).toLocaleString()}</td>
        `;
        tbody.appendChild(tr);
    });
}

// Sync sliders and inputs
function setupInputSyncronization() {
    const principalRange = document.getElementById('principalRange');
    const principalInput = document.getElementById('principalInput');
    const rateRange = document.getElementById('rateRange');
    const rateInput = document.getElementById('rateInput');
    const tenureRange = document.getElementById('tenureRange');
    const tenureInput = document.getElementById('tenureInput');
    const tenureYears = document.getElementById('tenureYears');

    if (!principalRange || !principalInput || !rateRange || !rateInput || !tenureRange || !tenureInput || !tenureYears) {
        console.error('Input elements not found');
        return;
    }

    // Principal sync
    principalRange.addEventListener('input', function() {
        const value = parseInt(this.value);
        principalInput.value = value.toLocaleString();
        updateCalculations();
    });

    principalInput.addEventListener('input', function() {
        const value = this.value.replace(/[^0-9]/g, '');
        if (value !== '' && !isNaN(value)) {
            const numValue = parseInt(value);
            if (numValue >= 30000 && numValue <= 500000) {
                principalRange.value = numValue;
                this.value = numValue.toLocaleString();
            }
        }
        updateCalculations();
    });

    principalInput.addEventListener('blur', function() {
        const value = this.value.replace(/[^0-9]/g, '');
        if (value === '' || isNaN(value)) {
            this.value = '150,000';
            principalRange.value = 150000;
        } else {
            let numValue = parseInt(value);
            if (numValue < 30000) numValue = 30000;
            if (numValue > 500000) numValue = 500000;
            this.value = numValue.toLocaleString();
            principalRange.value = numValue;
        }
        updateCalculations();
    });

    // Rate sync
    rateRange.addEventListener('input', function() {
        rateInput.value = parseFloat(this.value).toFixed(1);
        updateCalculations();
    });

    rateInput.addEventListener('input', function() {
        const value = parseFloat(this.value);
        if (!isNaN(value) && value >= 8 && value <= 20) {
            rateRange.value = value;
        }
        updateCalculations();
    });

    rateInput.addEventListener('blur', function() {
        let value = parseFloat(this.value);
        if (isNaN(value) || value < 8) value = 8;
        if (value > 20) value = 20;
        this.value = value.toFixed(1);
        rateRange.value = value;
        updateCalculations();
    });

    // Tenure sync
    tenureRange.addEventListener('input', function() {
        const months = parseInt(this.value);
        tenureInput.value = months;
        const years = Math.round(months / 12 * 10) / 10;
        tenureYears.textContent = `${years} year${years !== 1 ? 's' : ''}`;
        updateCalculations();
    });

    tenureInput.addEventListener('input', function() {
        const months = parseInt(this.value);
        if (!isNaN(months) && months >= 6 && months <= 84) {
            tenureRange.value = months;
            const years = Math.round(months / 12 * 10) / 10;
            tenureYears.textContent = `${years} year${years !== 1 ? 's' : ''}`;
        }
        updateCalculations();
    });

    tenureInput.addEventListener('blur', function() {
        let months = parseInt(this.value);
        if (isNaN(months) || months < 6) months = 6;
        if (months > 84) months = 84;
        this.value = months;
        tenureRange.value = months;
        const years = Math.round(months / 12 * 10) / 10;
        tenureYears.textContent = `${years} year${years !== 1 ? 's' : ''}`;
        updateCalculations();
    });
}

// Set quick amount
function setAmount(amount) {
    try {
        const principalInput = document.getElementById('principalInput');
        const principalRange = document.getElementById('principalRange');
        
        if (principalInput && principalRange) {
            principalInput.value = amount.toLocaleString();
            principalRange.value = amount;
            updateCalculations();
        } else {
            console.error('Principal input elements not found');
        }
    } catch (error) {
        console.error('Error setting amount:', error);
    }
}

// Compare scenarios
function compareScenario(multiplier) {
    const currentTenure = parseInt(document.getElementById('tenureInput').value);
    const newTenure = Math.round(currentTenure * multiplier);
    const principal = parseFloat(document.getElementById('principalInput').value.replace(/,/g, ''));
    const rate = parseFloat(document.getElementById('rateInput').value);
    
    fetch(`?ajax=1&principal=${principal}&rate=${rate}&tenure=${newTenure}`)
        .then(response => response.json())
        .then(data => {
            const elementId = multiplier < 1 ? 'shorterTenure' : 'longerTenure';
            document.getElementById(elementId).innerHTML = 
                `EMI: ${data.formatted.emi}<br>Total: ${data.formatted.totalPayment}`;
        });
}

// Compare interest rates
function compareInterest(rateDiff) {
    const principal = parseFloat(document.getElementById('principalInput').value.replace(/,/g, ''));
    const currentRate = parseFloat(document.getElementById('rateInput').value);
    const newRate = currentRate + rateDiff;
    const tenure = parseInt(document.getElementById('tenureInput').value);
    
    if (newRate > 0) {
        fetch(`?ajax=1&principal=${principal}&rate=${newRate}&tenure=${tenure}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('lowerRate').innerHTML = 
                    `EMI: ${data.formatted.emi}<br>Total: ${data.formatted.totalPayment}`;
            });
    }
}

function updateComparisons(principal, rate, tenure) {
    try {
        // Shorter tenure comparison
        const shorterTenure = Math.max(6, Math.round(tenure * 0.5));
        fetch(`?ajax=1&principal=${principal}&rate=${rate}&tenure=${shorterTenure}`)
            .then(response => response.json())
            .then(data => {
                const element = document.getElementById('shorterTenure');
                if (element && data.formatted) {
                    element.innerHTML = `EMI: ${data.formatted.emi}<br>Total: ${data.formatted.totalPayment}`;
                }
            })
            .catch(error => console.error('Error updating shorter tenure:', error));
        
        // Longer tenure comparison
        const longerTenure = Math.min(84, Math.round(tenure * 1.5));
        fetch(`?ajax=1&principal=${principal}&rate=${rate}&tenure=${longerTenure}`)
            .then(response => response.json())
            .then(data => {
                const element = document.getElementById('longerTenure');
                if (element && data.formatted) {
                    element.innerHTML = `EMI: ${data.formatted.emi}<br>Total: ${data.formatted.totalPayment}`;
                }
            })
            .catch(error => console.error('Error updating longer tenure:', error));
        
        // Lower rate comparison
        const lowerRate = Math.max(8, rate - 1);
        if (lowerRate > 0) {
            fetch(`?ajax=1&principal=${principal}&rate=${lowerRate}&tenure=${tenure}`)
                .then(response => response.json())
                .then(data => {
                    const element = document.getElementById('lowerRate');
                    if (element && data.formatted) {
                        element.innerHTML = `EMI: ${data.formatted.emi}<br>Total: ${data.formatted.totalPayment}`;
                    }
                })
                .catch(error => console.error('Error updating lower rate:', error));
        }
    } catch (error) {
        console.error('Error in updateComparisons:', error);
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded - Initializing calculator...');
    
    // Set initial values properly
    const principalInput = document.getElementById('principalInput');
    const rateInput = document.getElementById('rateInput');
    const tenureInput = document.getElementById('tenureInput');
    const tenureYears = document.getElementById('tenureYears');
    
    if (principalInput) principalInput.value = '<?php echo number_format($defaultPrincipal); ?>';
    if (rateInput) rateInput.value = '<?php echo $defaultRate; ?>';
    if (tenureInput) tenureInput.value = '<?php echo $defaultTenure; ?>';
    if (tenureYears) {
        const years = Math.round(<?php echo $defaultTenure; ?> / 12 * 10) / 10;
        tenureYears.textContent = `${years} year${years !== 1 ? 's' : ''}`;
    }
    
    // Wait a bit for all resources to load
    setTimeout(function() {
        try {
            // Check if Chart.js is available
            if (typeof Chart === 'undefined') {
                console.error('Chart.js is not loaded');
                return;
            }
            
            initCharts();
            setupInputSyncronization();
            
            // Initial calculation with default values
            updateCalculations();
            
            console.log('Calculator initialized successfully');
        } catch (error) {
            console.error('Error initializing calculator:', error);
        }
    }, 100);
});
</script>

<?php include '../footer.php'; ?>
</body>
</html>