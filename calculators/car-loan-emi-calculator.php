<?php
// Default values
$defaultPrincipal = 800000; // 8 lakhs for car loan
$defaultRate = 9.50; // Typical car loan rate
$defaultTenure = 60; // 5 years in months

// General car loan calculator - no bank-specific routing needed

// Car loan bank data
$carLoanBanks = [
    'hdfc-bank' => [
        'name' => 'HDFC Bank',
        'type' => 'Private Bank',
        'minRate' => 8.50,
        'maxRate' => 13.50,
        'defaultRate' => 10.00,
        'features' => [
            'Up to ₹1 crore loan amount',
            'Tenure up to 7 years',
            'Part prepayment allowed',
            'Insurance included in EMI'
        ],
        'eligibility' => [
            'Age: 21-65 years',
            'Income: ₹25,000+ per month',
            'CIBIL Score: 750+',
            'Car as collateral required'
        ]
    ],
    'icici-bank' => [
        'name' => 'ICICI Bank',
        'type' => 'Private Bank',
        'minRate' => 8.75,
        'maxRate' => 13.25,
        'defaultRate' => 10.25,
        'features' => [
            'Loan up to ₹1 crore',
            'Flexible repayment options',
            'Online application process',
            'Zero processing fees offer'
        ],
        'eligibility' => [
            'Age: 23-62 years',
            'Income: ₹30,000+ per month',
            'CIBIL Score: 700+',
            'Vehicle registration required'
        ]
    ],
    'sbi' => [
        'name' => 'State Bank of India',
        'type' => 'Public Bank',
        'minRate' => 7.25,
        'maxRate' => 12.50,
        'defaultRate' => 8.85,
        'features' => [
            'Loan up to ₹1 crore',
            'Tenure up to 7 years',
            'Government employee benefits',
            'Lower processing fees'
        ],
        'eligibility' => [
            'Age: 18-70 years',
            'Income: ₹15,000+ per month',
            'CIBIL Score: 650+',
            'Car insurance mandatory'
        ]
    ],
    'axis-bank' => [
        'name' => 'Axis Bank',
        'type' => 'Private Bank',
        'minRate' => 8.75,
        'maxRate' => 13.75,
        'defaultRate' => 10.50,
        'features' => [
            'Smart EMI facility',
            'Step-up/Step-down EMI',
            'Top-up loan facility',
            'Used car financing available'
        ],
        'eligibility' => [
            'Age: 21-60 years',
            'Income: ₹30,000+ per month',
            'CIBIL Score: 720+',
            'Car age: Up to 5 years'
        ]
    ]
];

// General car loan rate ranges for reference
$generalRateInfo = [
    'minRate' => 7.25,
    'maxRate' => 14.00,
    'defaultRate' => 9.50
];

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
?>
<?php include '../header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Loan EMI Calculator 2026 - Calculate Monthly Car Loan Payments | Thiyagi.com</title>
    <meta name="description" content="Calculate your car loan EMI for 2026 with our advanced calculator. Compare interest rates from all major banks, get instant EMI calculations, and plan your car purchase with current rates.">
    <meta name="keywords" content="car loan EMI calculator 2026, car loan calculator, vehicle loan calculator India, auto loan EMI, car finance calculator, bank car loan rates 2026">
    <link rel="canonical" href="https://www.thiyagi.com/calculators/car-loan-emi-calculator">
    <link href="https://www.thiyagi.com/nt.png" rel="icon">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <style>
        .slider::-webkit-slider-thumb {
            appearance: none;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #3B82F6;
            cursor: pointer;
            border: 2px solid white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        .slider::-moz-range-thumb {
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #3B82F6;
            cursor: pointer;
            border: 2px solid white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        /* Mobile Chart Responsiveness */
        @media (max-width: 768px) {
            .chart-container {
                height: 250px !important;
            }
            
            #emiAmount, #totalInterest, #totalAmount, #loanDuration {
                font-size: 1.75rem !important;
            }
            
            .grid-cols-1 > div {
                margin-bottom: 1rem;
            }
        }
        
        /* Ensure charts are properly sized */
        .chart-container canvas {
            max-height: 300px;
        }
    </style>
</head>
<body class="bg-gray-50">

<!-- Navigation -->
<nav class="bg-white shadow-sm px-3 py-2 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between">
        <a class="flex items-center" href="https://www.thiyagi.com/">
            <img src="https://www.thiyagi.com/nt.png" alt="Thiyagi Logo" class="h-10 w-10 mr-2">
        </a>
        <div class="hidden md:flex space-x-4">
            <a href="https://www.thiyagi.com/" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">Home</a>
            <a href="https://www.thiyagi.com/calculators/" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">Calculators</a>
            <a href="https://www.thiyagi.com/contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="gradient-bg text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-4">
                <i class="fas fa-car text-2xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Car Loan EMI Calculator 2026</h1>
            <p class="text-xl opacity-90 max-w-2xl mx-auto">Calculate your monthly car loan EMI with current 2026 interest rates from all major banks. Plan your dream car purchase with accurate EMI calculations.</p>
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
                    Car Loan Details
                </h2>
                

                
                <form id="emiForm" class="space-y-6">
                    <!-- Loan Amount -->
                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-semibold text-gray-700">
                            <i class="fas fa-rupee-sign text-blue-600 mr-2"></i>
                            Car Loan Amount
                        </label>
                        <div class="relative">
                            <input type="range" id="principalRange" min="100000" max="10000000" step="50000" value="<?php echo $defaultPrincipal; ?>"
                                class="w-full h-2 bg-gradient-to-r from-blue-200 to-blue-400 rounded-lg appearance-none cursor-pointer slider">
                            <input type="text" id="principalInput" value="<?php echo number_format($defaultPrincipal); ?>"
                                class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                placeholder="Enter loan amount">
                        </div>
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>₹1,00,000</span>
                            <span>₹1,00,00,000</span>
                        </div>
                    </div>

                    <!-- Interest Rate -->
                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-semibold text-gray-700">
                            <i class="fas fa-percentage text-green-600 mr-2"></i>
                            Annual Interest Rate
                        </label>
                        <div class="relative">
                            <input type="range" id="rateRange" min="<?php echo $generalRateInfo['minRate']; ?>" max="<?php echo $generalRateInfo['maxRate']; ?>" step="0.1" value="<?php echo $defaultRate; ?>"
                                class="w-full h-2 bg-gradient-to-r from-green-200 to-green-400 rounded-lg appearance-none cursor-pointer slider">
                            <input type="text" id="rateInput" value="<?php echo $defaultRate; ?>"
                                class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                placeholder="Enter interest rate">
                        </div>
                        <div class="flex justify-between text-xs text-gray-500">
                            <span><?php echo $generalRateInfo['minRate']; ?>%</span>
                            <span><?php echo $generalRateInfo['maxRate']; ?>%</span>
                        </div>
                    </div>

                    <!-- Loan Tenure -->
                    <div class="space-y-3">
                        <label class="flex items-center text-sm font-semibold text-gray-700">
                            <i class="fas fa-calendar-alt text-orange-600 mr-2"></i>
                            Loan Tenure (Years)
                        </label>
                        <div class="relative">
                            <input type="range" id="tenureRange" min="12" max="84" step="12" value="<?php echo $defaultTenure; ?>"
                                class="w-full h-2 bg-gradient-to-r from-orange-200 to-orange-400 rounded-lg appearance-none cursor-pointer slider">
                            <input type="text" id="tenureInput" value="<?php echo $defaultTenure / 12; ?>"
                                class="mt-2 w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300 text-lg font-semibold text-gray-800"
                                placeholder="Enter tenure in years">
                        </div>
                        <div class="flex justify-between text-xs text-gray-500">
                            <span>1 Year</span>
                            <span>7 Years</span>
                        </div>
                    </div>
                </form>

                <!-- Rate Info -->
                <div id="rateInfo" class="mt-6 p-4 bg-gradient-to-r from-purple-50 to-blue-50 rounded-xl border border-purple-200">
                    <h3 class="font-semibold text-gray-800 mb-2 flex items-center">
                        <i class="fas fa-info-circle text-purple-600 mr-2"></i>
                        Car Loan Rates in India
                    </h3>
                    <div class="space-y-2 text-sm text-gray-600">
                        <div><strong>Current Rate Range:</strong> <?php echo $generalRateInfo['minRate']; ?>% - <?php echo $generalRateInfo['maxRate']; ?>%</div>
                        <div><strong>Type:</strong> Fixed Rate (Secured Loan)</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Results Section -->
        <div class="lg:col-span-2 space-y-8">
            <!-- EMI Results Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-calculator text-blue-600 mr-3"></i>
                        Monthly EMI
                    </h3>
                    <div id="emiAmount" class="text-3xl font-bold text-blue-600 mb-2">₹<?php echo number_format(calculateEMI($defaultPrincipal, $defaultRate, $defaultTenure)); ?></div>
                    <p class="text-gray-600 text-sm">Your monthly payment</p>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-money-bill-wave text-green-600 mr-3"></i>
                        Total Interest
                    </h3>
                    <div id="totalInterest" class="text-3xl font-bold text-green-600 mb-2">
                        ₹<?php 
                        $emi = calculateEMI($defaultPrincipal, $defaultRate, $defaultTenure);
                        echo number_format(($emi * $defaultTenure) - $defaultPrincipal); 
                        ?>
                    </div>
                    <p class="text-gray-600 text-sm">Total interest payable</p>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-chart-line text-purple-600 mr-3"></i>
                        Total Payment
                    </h3>
                    <div id="totalAmount" class="text-3xl font-bold text-purple-600 mb-2">
                        ₹<?php 
                        $emi = calculateEMI($defaultPrincipal, $defaultRate, $defaultTenure);
                        echo number_format($emi * $defaultTenure); 
                        ?>
                    </div>
                    <p class="text-gray-600 text-sm">Principal + Interest</p>
                </div>

                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-calendar text-orange-600 mr-3"></i>
                        Loan Duration
                    </h3>
                    <div id="loanDuration" class="text-3xl font-bold text-orange-600 mb-2"><?php echo $defaultTenure / 12; ?> Years</div>
                    <p class="text-gray-600 text-sm"><?php echo $defaultTenure; ?> months</p>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6">
                <!-- Pie Chart -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-chart-pie text-indigo-600 mr-3"></i>
                        Payment Breakdown
                    </h3>
                    <div class="relative h-64 w-full chart-container">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>

                <!-- Bar Chart -->
                <div class="bg-white rounded-2xl shadow-xl p-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <i class="fas fa-chart-bar text-teal-600 mr-3"></i>
                        Principal vs Interest
                    </h3>
                    <div class="relative h-64 w-full chart-container">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Car Loan Information -->
            <div class="bg-white rounded-2xl shadow-xl p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-car text-blue-500 mr-3"></i>
                    Car Loan Information
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-2">General Features</h4>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                Loan amounts up to ₹1 crore
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                Tenure options up to 7 years
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                Lower rates (secured loan)
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mr-2 mt-1 text-xs"></i>
                                Used car financing available
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-700 mb-2">Typical Eligibility</h4>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-user-check text-blue-500 mr-2 mt-1 text-xs"></i>
                                Age: 21-65 years
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-user-check text-blue-500 mr-2 mt-1 text-xs"></i>
                                Minimum income ₹25,000+ monthly
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-user-check text-blue-500 mr-2 mt-1 text-xs"></i>
                                Good credit score (700+)
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-user-check text-blue-500 mr-2 mt-1 text-xs"></i>
                                Car insurance mandatory
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Bank data for JavaScript

let pieChart, barChart;

// DOM elements
const principalRange = document.getElementById('principalRange');
const principalInput = document.getElementById('principalInput');
const rateRange = document.getElementById('rateRange');
const rateInput = document.getElementById('rateInput');
const tenureRange = document.getElementById('tenureRange');
const tenureInput = document.getElementById('tenureInput');


// Sync range and input fields
function syncInputs(range, input, formatter = null) {
    range.addEventListener('input', () => {
        let value = range.value;
        if (formatter) value = formatter(value);
        input.value = value;
        calculateAndUpdate();
    });
    
    input.addEventListener('input', () => {
        let value = input.value.replace(/[^0-9.]/g, '');
        range.value = value;
        calculateAndUpdate();
    });
}

// Initialize input synchronization
syncInputs(principalRange, principalInput, (val) => parseInt(val).toLocaleString('en-IN'));
syncInputs(rateRange, rateInput);
syncInputs(tenureRange, tenureInput, (val) => val / 12);



// Calculate EMI
function calculateEMI(principal, rate, tenure) {
    const monthlyRate = (rate / 12) / 100;
    const months = tenure;
    
    if (monthlyRate === 0) {
        return principal / months;
    }
    
    const emi = (principal * monthlyRate * Math.pow(1 + monthlyRate, months)) / 
                (Math.pow(1 + monthlyRate, months) - 1);
    
    return Math.round(emi);
}

// Update all calculations and charts
function calculateAndUpdate() {
    const principal = parseInt(principalRange.value);
    const rate = parseFloat(rateRange.value);
    const tenureYears = parseInt(tenureRange.value) / 12;
    const tenureMonths = parseInt(tenureRange.value);
    
    // Calculate values
    const emi = calculateEMI(principal, rate, tenureMonths);
    const totalAmount = emi * tenureMonths;
    const totalInterest = totalAmount - principal;
    
    // Update display values
    document.getElementById('emiAmount').textContent = `₹${emi.toLocaleString('en-IN')}`;
    document.getElementById('totalInterest').textContent = `₹${totalInterest.toLocaleString('en-IN')}`;
    document.getElementById('totalAmount').textContent = `₹${totalAmount.toLocaleString('en-IN')}`;
    document.getElementById('loanDuration').textContent = `${tenureYears} Years`;
    
    // Update charts
    updateCharts(principal, totalInterest);
}

// Initialize charts
function initializeCharts() {
    const principal = parseInt(principalRange.value);
    const rate = parseFloat(rateRange.value);
    const tenureMonths = parseInt(tenureRange.value);
    const emi = calculateEMI(principal, rate, tenureMonths);
    const totalAmount = emi * tenureMonths;
    const totalInterest = totalAmount - principal;
    
    // Pie Chart
    const pieCtx = document.getElementById('pieChart').getContext('2d');
    pieChart = new Chart(pieCtx, {
        type: 'doughnut',
        data: {
            labels: ['Principal Amount', 'Total Interest'],
            datasets: [{
                data: [principal, totalInterest],
                backgroundColor: ['#3B82F6', '#10B981'],
                borderWidth: 2,
                borderColor: '#ffffff'
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
                        padding: 15,
                        font: {
                            size: 12
                        }
                    }
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.label || '';
                            const value = context.parsed;
                            const total = context.dataset.data.reduce((a, b) => a + b, 0);
                            const percentage = ((value / total) * 100).toFixed(1);
                            return `${label}: ₹${(value / 100000).toFixed(1)}L (${percentage}%)`;
                        }
                    }
                }
            }
        }
    });
    
    // Bar Chart
    const barCtx = document.getElementById('barChart').getContext('2d');
    barChart = new Chart(barCtx, {
        type: 'bar',
        data: {
            labels: ['Principal', 'Interest'],
            datasets: [{
                label: 'Amount (₹)',
                data: [principal, totalInterest],
                backgroundColor: ['#6366F1', '#F59E0B'],
                borderRadius: 8,
                borderSkipped: false,
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const value = context.parsed.y;
                            return `${context.label}: ₹${(value / 100000).toFixed(1)} Lakhs`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return '₹' + (value / 100000).toFixed(1) + 'L';
                        }
                    }
                }
            }
        }
    });
}

// Update charts
function updateCharts(principal, totalInterest) {
    // Update pie chart
    pieChart.data.datasets[0].data = [principal, totalInterest];
    pieChart.update();
    
    // Update bar chart
    barChart.data.datasets[0].data = [principal, totalInterest];
    barChart.update();
}

// Initialize everything when page loads
document.addEventListener('DOMContentLoaded', function() {
    try {
        initializeCharts();
        calculateAndUpdate();
    } catch (error) {
        console.error('Chart initialization error:', error);
        // Fallback: show message if charts fail to load
        document.getElementById('pieChart').style.display = 'none';
        document.getElementById('barChart').style.display = 'none';
    }
});
</script>

<?php include '../footer.php';?>
</body>
</html>