<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GM Income Calculator 2025 - General Motors Employee Salary Calculator | Thiyagi.com</title>
    <meta name="description" content="Calculate GM employee income, salary, benefits, and compensation packages 2025. General Motors hourly wages, overtime, bonuses, and total compensation calculator.">
    <meta name="keywords" content="gm income calculator 2025, general motors salary calculator, gm employee wages, gm hourly pay calculator, automotive salary calculator, gm benefits calculator">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="GM Income Calculator 2025 - General Motors Employee Salary Calculator">
    <meta property="og:description" content="Calculate GM employee income, salary, benefits, and compensation packages. General Motors hourly wages, overtime, and bonuses calculator.">
    <meta property="og:url" content="https://www.thiyagi.com/gm-income-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GM Income Calculator 2025 - General Motors Employee Salary Calculator">
    <meta name="twitter:description" content="Calculate GM employee income, salary, benefits, and compensation packages. General Motors hourly wages and overtime calculator.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/gm-income-calculator">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
    }
    .result-card {
        transition: all 0.3s ease;
    }
    .result-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .salary-tier {
        border-left: 4px solid;
        transition: all 0.2s ease;
    }
    .salary-tier:hover {
        background-color: #f8fafc;
    }
    .tier-entry { border-color: #10b981; }
    .tier-skilled { border-color: #3b82f6; }
    .tier-senior { border-color: #8b5cf6; }
    .tier-supervisor { border-color: #f59e0b; }
    .tier-management { border-color: #ef4444; }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "GM Income Calculator 2025",
  "description": "Calculate General Motors employee income, salary, benefits, and total compensation packages including hourly wages, overtime pay, bonuses, and benefits.",
  "url": "https://www.thiyagi.com/gm-income-calculator",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Any",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "creator": {
    "@type": "Organization",
    "name": "Thiyagi.com"
  }
}
</script>

</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="gradient-bg shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-3 rounded-full shadow-lg">
                        <i class="fas fa-car text-2xl text-blue-600" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">GM Income Calculator</h1>
                        <p class="text-blue-100">Calculate General Motors employee compensation</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <nav class="bg-white border-b" aria-label="Breadcrumb">
        <div class="max-w-6xl mx-auto px-4 py-3">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="/" class="text-gray-500 hover:text-gray-700">Home</a></li>
                <li><i class="fas fa-chevron-right text-gray-400" aria-hidden="true"></i></li>
                <li class="text-gray-900 font-medium">GM Income Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                    <i class="fas fa-calculator text-2xl text-blue-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">GM Employee Income Calculator</h2>
                <p class="text-gray-600">Calculate your total General Motors compensation including base pay, overtime, bonuses, and benefits</p>
            </div>

            <!-- Input Form -->
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Employment Type -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="employmentType" class="block text-sm font-medium text-gray-700 mb-2">Employment Type</label>
                        <select id="employmentType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="hourly">Hourly Employee</option>
                            <option value="salary">Salaried Employee</option>
                            <option value="contract">Contract Worker</option>
                        </select>
                    </div>

                    <div>
                        <label for="jobLevel" class="block text-sm font-medium text-gray-700 mb-2">Job Level/Classification</label>
                        <select id="jobLevel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="entry">Entry Level (GS 1-3)</option>
                            <option value="skilled">Skilled Worker (GS 4-6)</option>
                            <option value="senior">Senior/Lead (GS 7-9)</option>
                            <option value="supervisor">Supervisor (GS 10-12)</option>
                            <option value="management">Management (GS 13+)</option>
                        </select>
                    </div>
                </div>

                <!-- Pay Information -->
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label for="baseRate" class="block text-sm font-medium text-gray-700 mb-2">Base Rate</label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-gray-500">$</span>
                            <input type="number" id="baseRate" step="0.01" placeholder="25.00" class="w-full pl-8 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div class="text-xs text-gray-500 mt-1">Per hour or annual salary</div>
                    </div>

                    <div>
                        <label for="hoursPerWeek" class="block text-sm font-medium text-gray-700 mb-2">Hours per Week</label>
                        <input type="number" id="hoursPerWeek" min="1" max="80" step="0.5" placeholder="40" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Regular working hours</div>
                    </div>

                    <div>
                        <label for="overtimeHours" class="block text-sm font-medium text-gray-700 mb-2">Overtime Hours/Week</label>
                        <input type="number" id="overtimeHours" min="0" max="40" step="0.5" placeholder="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Weekly overtime hours</div>
                    </div>
                </div>

                <!-- Benefits and Bonuses -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="annualBonus" class="block text-sm font-medium text-gray-700 mb-2">Annual Bonus ($)</label>
                        <input type="number" id="annualBonus" min="0" step="100" placeholder="5000" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Performance bonuses, profit sharing</div>
                    </div>

                    <div>
                        <label for="benefitsValue" class="block text-sm font-medium text-gray-700 mb-2">Benefits Value/Month ($)</label>
                        <input type="number" id="benefitsValue" min="0" step="50" placeholder="800" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Health insurance, 401k match, etc.</div>
                    </div>
                </div>

                <!-- Location and Shift -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700 mb-2">GM Location</label>
                        <select id="location" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="detroit">Detroit, MI (Base)</option>
                            <option value="flint">Flint, MI (+2%)</option>
                            <option value="lansing">Lansing, MI (+1%)</option>
                            <option value="toledo">Toledo, OH (+3%)</option>
                            <option value="kansas">Kansas City, KS (+5%)</option>
                            <option value="texas">Arlington, TX (+8%)</option>
                            <option value="other">Other Location</option>
                        </select>
                    </div>

                    <div>
                        <label for="shiftDifferential" class="block text-sm font-medium text-gray-700 mb-2">Shift Differential</label>
                        <select id="shiftDifferential" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="0">Day Shift (No differential)</option>
                            <option value="0.50">Evening Shift (+$0.50/hr)</option>
                            <option value="1.00">Night Shift (+$1.00/hr)</option>
                            <option value="1.50">Weekend Shift (+$1.50/hr)</option>
                        </select>
                    </div>
                </div>

                <!-- Calculate Button -->
                <div class="text-center">
                    <button id="calculateBtn" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>
                        Calculate GM Income
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-chart-line mr-2 text-blue-600" aria-hidden="true"></i>
                        Your GM Income Breakdown
                    </h3>
                    
                    <!-- Income Summary -->
                    <div class="grid md:grid-cols-4 gap-4 mb-6">
                        <div class="result-card bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-sm text-gray-600 mb-1">Weekly Income</div>
                            <div id="weeklyIncome" class="text-2xl font-bold text-green-600">$0</div>
                        </div>
                        <div class="result-card bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-sm text-gray-600 mb-1">Monthly Income</div>
                            <div id="monthlyIncome" class="text-2xl font-bold text-blue-600">$0</div>
                        </div>
                        <div class="result-card bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-sm text-gray-600 mb-1">Annual Income</div>
                            <div id="annualIncome" class="text-2xl font-bold text-purple-600">$0</div>
                        </div>
                        <div class="result-card bg-white p-4 rounded-lg shadow text-center">
                            <div class="text-sm text-gray-600 mb-1">Total Compensation</div>
                            <div id="totalCompensation" class="text-2xl font-bold text-indigo-600">$0</div>
                        </div>
                    </div>

                    <!-- Detailed Breakdown -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-money-bill-wave mr-2 text-green-500" aria-hidden="true"></i>
                                Income Components
                            </h4>
                            <div id="incomeBreakdown" class="space-y-3">
                                <!-- Breakdown will be populated by JS -->
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-chart-pie mr-2 text-blue-500" aria-hidden="true"></i>
                                Tax Estimates
                            </h4>
                            <div id="taxBreakdown" class="space-y-3">
                                <!-- Tax info will be populated by JS -->
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center mt-6">
                        <button id="shareBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share Results
                        </button>
                        <button id="printBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-print mr-2" aria-hidden="true"></i>
                            Print Report
                        </button>
                        <button id="resetBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-refresh mr-2" aria-hidden="true"></i>
                            Reset
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- GM Salary Ranges Reference -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-chart-bar mr-3 text-blue-500" aria-hidden="true"></i>
                GM Salary Ranges 2025
            </h2>
            
            <div class="space-y-4">
                <div class="salary-tier tier-entry p-4 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="font-semibold text-gray-800">Entry Level (GS 1-3)</h3>
                            <p class="text-sm text-gray-600">New hires, assembly line workers</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-green-600">$18 - $25/hr</div>
                            <div class="text-sm text-gray-500">$37K - $52K/year</div>
                        </div>
                    </div>
                </div>

                <div class="salary-tier tier-skilled p-4 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="font-semibold text-gray-800">Skilled Worker (GS 4-6)</h3>
                            <p class="text-sm text-gray-600">Experienced workers, machine operators</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-blue-600">$25 - $35/hr</div>
                            <div class="text-sm text-gray-500">$52K - $73K/year</div>
                        </div>
                    </div>
                </div>

                <div class="salary-tier tier-senior p-4 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="font-semibold text-gray-800">Senior/Lead (GS 7-9)</h3>
                            <p class="text-sm text-gray-600">Team leads, quality inspectors</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-purple-600">$35 - $45/hr</div>
                            <div class="text-sm text-gray-500">$73K - $94K/year</div>
                        </div>
                    </div>
                </div>

                <div class="salary-tier tier-supervisor p-4 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="font-semibold text-gray-800">Supervisor (GS 10-12)</h3>
                            <p class="text-sm text-gray-600">Supervisors, specialists</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-yellow-600">$45 - $65/hr</div>
                            <div class="text-sm text-gray-500">$94K - $135K/year</div>
                        </div>
                    </div>
                </div>

                <div class="salary-tier tier-management p-4 rounded-lg">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="font-semibold text-gray-800">Management (GS 13+)</h3>
                            <p class="text-sm text-gray-600">Managers, engineers, professionals</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-bold text-red-600">$65K - $150K+</div>
                            <div class="text-sm text-gray-500">Salaried positions</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Information -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-gift mr-3 text-green-500" aria-hidden="true"></i>
                GM Employee Benefits
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Health & Wellness</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Comprehensive health insurance</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Dental and vision coverage</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Employee assistance programs</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Wellness programs and gym memberships</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Financial Benefits</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>401(k) with company match</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Profit sharing programs</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Employee stock purchase plan</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check-circle text-green-500 mr-2 mt-1" aria-hidden="true"></i>
                            <span>Tuition assistance and training</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- FAQs Section -->
        <section class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-question-circle mr-3 text-purple-600" aria-hidden="true"></i>
                Frequently Asked Questions
            </h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-blue-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How accurate are these salary calculations?</h3>
                    <p class="text-gray-600">This calculator provides estimates based on publicly available GM salary data and industry standards. Actual compensation may vary based on location, experience, performance, and current GM policies.</p>
                </div>
                
                <div class="border-l-4 border-green-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What's included in the overtime calculation?</h3>
                    <p class="text-gray-600">Overtime is calculated at time-and-a-half (1.5x) the regular hourly rate for hours worked over 40 per week, following standard GM UAW contract terms for hourly employees.</p>
                </div>
                
                <div class="border-l-4 border-orange-500 pl-6">
                    <h3 class="text-lg font-semibent text-gray-800 mb-2">Are bonuses guaranteed?</h3>
                    <p class="text-gray-600">Bonuses are typically performance-based and depend on company profitability, individual performance, and specific GM programs. Historical averages are used for estimation purposes.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How do location differentials work?</h3>
                    <p class="text-gray-600">GM adjusts compensation based on local cost of living and market conditions. Higher cost areas typically receive adjustment premiums to maintain competitive compensation levels.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class GMIncomeCalculator {
            constructor() {
                this.locationAdjustments = {
                    'detroit': 1.0,
                    'flint': 1.02,
                    'lansing': 1.01,
                    'toledo': 1.03,
                    'kansas': 1.05,
                    'texas': 1.08,
                    'other': 1.0
                };
                this.init();
            }

            init() {
                this.bindEvents();
            }

            bindEvents() {
                document.getElementById('calculateBtn').addEventListener('click', () => this.calculateIncome());
                document.getElementById('shareBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('printBtn')?.addEventListener('click', () => this.printResults());
                document.getElementById('resetBtn')?.addEventListener('click', () => this.resetCalculator());
                
                // Update labels based on employment type
                document.getElementById('employmentType').addEventListener('change', () => this.updateLabels());
            }

            updateLabels() {
                const employmentType = document.getElementById('employmentType').value;
                const baseRateLabel = document.querySelector('label[for="baseRate"]');
                
                if (employmentType === 'salary') {
                    baseRateLabel.textContent = 'Annual Salary';
                } else {
                    baseRateLabel.textContent = 'Hourly Rate';
                }
            }

            calculateIncome() {
                const data = this.collectInputData();
                
                if (!this.validateInputs(data)) {
                    return;
                }

                const results = this.performCalculations(data);
                this.displayResults(results);
            }

            collectInputData() {
                return {
                    employmentType: document.getElementById('employmentType').value,
                    jobLevel: document.getElementById('jobLevel').value,
                    baseRate: parseFloat(document.getElementById('baseRate').value) || 0,
                    hoursPerWeek: parseFloat(document.getElementById('hoursPerWeek').value) || 40,
                    overtimeHours: parseFloat(document.getElementById('overtimeHours').value) || 0,
                    annualBonus: parseFloat(document.getElementById('annualBonus').value) || 0,
                    benefitsValue: parseFloat(document.getElementById('benefitsValue').value) || 0,
                    location: document.getElementById('location').value,
                    shiftDifferential: parseFloat(document.getElementById('shiftDifferential').value) || 0
                };
            }

            validateInputs(data) {
                if (data.baseRate <= 0) {
                    alert('Please enter a valid base rate');
                    return false;
                }
                
                if (data.hoursPerWeek <= 0 || data.hoursPerWeek > 80) {
                    alert('Please enter valid hours per week (1-80)');
                    return false;
                }
                
                return true;
            }

            performCalculations(data) {
                const locationMultiplier = this.locationAdjustments[data.location] || 1.0;
                let hourlyRate, weeklyBase, weeklyOvertime, weeklyTotal;

                if (data.employmentType === 'salary') {
                    hourlyRate = (data.baseRate * locationMultiplier) / (data.hoursPerWeek * 52);
                    weeklyBase = data.baseRate * locationMultiplier / 52;
                } else {
                    hourlyRate = data.baseRate * locationMultiplier;
                    weeklyBase = hourlyRate * data.hoursPerWeek;
                }

                // Add shift differential
                const adjustedHourlyRate = hourlyRate + data.shiftDifferential;
                if (data.employmentType !== 'salary') {
                    weeklyBase = adjustedHourlyRate * data.hoursPerWeek;
                }

                // Calculate overtime (time and a half)
                weeklyOvertime = data.overtimeHours * adjustedHourlyRate * 1.5;
                
                // Total weekly income
                weeklyTotal = weeklyBase + weeklyOvertime;
                
                // Monthly and annual calculations
                const monthlyIncome = weeklyTotal * 52 / 12;
                const annualIncome = weeklyTotal * 52;
                const annualBenefits = data.benefitsValue * 12;
                const totalCompensation = annualIncome + data.annualBonus + annualBenefits;

                // Tax estimates (rough approximations)
                const federalTax = annualIncome * 0.22; // Approximate federal tax
                const stateTax = annualIncome * 0.04;   // Approximate state tax
                const socialSecurity = Math.min(annualIncome * 0.062, 9932.40); // 2025 SS limit
                const medicare = annualIncome * 0.0145;
                const totalTaxes = federalTax + stateTax + socialSecurity + medicare;
                const netIncome = annualIncome - totalTaxes;

                return {
                    data,
                    hourlyRate: adjustedHourlyRate,
                    weeklyIncome: weeklyTotal,
                    monthlyIncome,
                    annualIncome,
                    totalCompensation,
                    breakdown: {
                        weeklyBase,
                        weeklyOvertime,
                        annualBonus: data.annualBonus,
                        annualBenefits,
                        locationAdjustment: (locationMultiplier - 1) * 100,
                        shiftDifferential: data.shiftDifferential * data.hoursPerWeek * 52
                    },
                    taxes: {
                        federal: federalTax,
                        state: stateTax,
                        socialSecurity,
                        medicare,
                        total: totalTaxes,
                        net: netIncome
                    }
                };
            }

            displayResults(results) {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update main figures
                document.getElementById('weeklyIncome').textContent = `$${results.weeklyIncome.toLocaleString('en-US', {maximumFractionDigits: 0})}`;
                document.getElementById('monthlyIncome').textContent = `$${results.monthlyIncome.toLocaleString('en-US', {maximumFractionDigits: 0})}`;
                document.getElementById('annualIncome').textContent = `$${results.annualIncome.toLocaleString('en-US', {maximumFractionDigits: 0})}`;
                document.getElementById('totalCompensation').textContent = `$${results.totalCompensation.toLocaleString('en-US', {maximumFractionDigits: 0})}`;

                // Update income breakdown
                this.updateIncomeBreakdown(results);
                this.updateTaxBreakdown(results);

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            updateIncomeBreakdown(results) {
                const breakdown = results.breakdown;
                const breakdownHtml = `
                    <div class="flex justify-between py-2 border-b">
                        <span>Base Pay (Weekly):</span>
                        <span class="font-medium">$${breakdown.weeklyBase.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Overtime (Weekly):</span>
                        <span class="font-medium">$${breakdown.weeklyOvertime.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Annual Bonus:</span>
                        <span class="font-medium">$${breakdown.annualBonus.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Benefits Value:</span>
                        <span class="font-medium">$${breakdown.annualBenefits.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                    ${breakdown.locationAdjustment > 0 ? `
                    <div class="flex justify-between py-2 border-b">
                        <span>Location Adjustment:</span>
                        <span class="font-medium text-green-600">+${breakdown.locationAdjustment.toFixed(1)}%</span>
                    </div>
                    ` : ''}
                    ${breakdown.shiftDifferential > 0 ? `
                    <div class="flex justify-between py-2 border-b">
                        <span>Shift Differential:</span>
                        <span class="font-medium">$${breakdown.shiftDifferential.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                    ` : ''}
                `;

                document.getElementById('incomeBreakdown').innerHTML = breakdownHtml;
            }

            updateTaxBreakdown(results) {
                const taxes = results.taxes;
                const taxHtml = `
                    <div class="flex justify-between py-2 border-b">
                        <span>Federal Tax (est.):</span>
                        <span class="font-medium text-red-600">-$${taxes.federal.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>State Tax (est.):</span>
                        <span class="font-medium text-red-600">-$${taxes.state.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Social Security:</span>
                        <span class="font-medium text-red-600">-$${taxes.socialSecurity.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Medicare:</span>
                        <span class="font-medium text-red-600">-$${taxes.medicare.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                    <div class="flex justify-between py-2 border-t-2 border-gray-300 font-semibold">
                        <span>Net Income:</span>
                        <span class="text-green-600">$${taxes.net.toLocaleString('en-US', {maximumFractionDigits: 0})}</span>
                    </div>
                `;

                document.getElementById('taxBreakdown').innerHTML = taxHtml;
            }

            shareResults() {
                const annualIncome = document.getElementById('annualIncome').textContent;
                const shareText = `My estimated GM annual income is ${annualIncome}! Calculate yours at: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'My GM Income Calculator Results',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Results copied to clipboard!');
                    });
                }
            }

            printResults() {
                window.print();
            }

            resetCalculator() {
                document.getElementById('employmentType').value = 'hourly';
                document.getElementById('jobLevel').value = 'entry';
                document.getElementById('baseRate').value = '';
                document.getElementById('hoursPerWeek').value = '';
                document.getElementById('overtimeHours').value = '';
                document.getElementById('annualBonus').value = '';
                document.getElementById('benefitsValue').value = '';
                document.getElementById('location').value = 'detroit';
                document.getElementById('shiftDifferential').value = '0';
                document.getElementById('resultsSection').classList.add('hidden');
            }
        }

        // Initialize calculator when page loads
        document.addEventListener('DOMContentLoaded', () => {
            new GMIncomeCalculator();
        });

        // Add scroll animations
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            });

            document.querySelectorAll('section').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>