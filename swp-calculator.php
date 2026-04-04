<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWP Calculator – Calculate Systematic Withdrawal Plan Returns</title>
    <meta name="description" content="Free SWP calculator to calculate monthly withdrawals, remaining balance, and returns from your mutual fund investments.">
    <meta name="keywords" content="SWP calculator, systematic withdrawal plan, mutual fund calculator, investment calculator">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.js"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-shadow {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .slider-thumb {
            appearance: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #667eea;
            cursor: pointer;
            border: 3px solid white;
        }
        input[type="range"]::-webkit-slider-thumb {
            appearance: none;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #667eea;
            cursor: pointer;
            border: 3px solid white;
            box-shadow: 0 2px 8px rgba(102, 126, 234, 0.4);
        }
        input[type="range"]::-moz-range-thumb {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #667eea;
            cursor: pointer;
            border: 3px solid white;
            box-shadow: 0 2px 8px rgba(102, 126, 234, 0.4);
        }
        .table-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: sticky;
            top: 0;
        }
        .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }
        .depletion-warning {
            background-color: #fef3c7;
            border-left: 4px solid #f59e0b;
        }
        .success-highlight {
            background-color: #ecfdf5;
            border-left: 4px solid #10b981;
        }
        .data-table {
            max-height: 600px;
            overflow-y: auto;
        }
        .rupee-input {
            font-variant-numeric: tabular-nums;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation Header -->
    <nav class="gradient-bg text-white sticky top-0 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">💰 SWP Calculator</h1>
            <p class="text-sm opacity-90">Systematic Withdrawal Plan Simulator</p>
        </div>
    </nav>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Chart and Overview Section -->
            <div class="lg:col-span-3">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                    <div class="stat-card bg-white p-6 rounded-lg card-shadow">
                        <p class="text-gray-500 text-sm font-semibold uppercase tracking-wide">Initial Investment</p>
                        <p id="displayInitialInvestment" class="text-3xl font-bold text-gray-900 mt-2">₹10,00,000</p>
                    </div>
                    <div class="stat-card bg-white p-6 rounded-lg card-shadow">
                        <p class="text-gray-500 text-sm font-semibold uppercase tracking-wide">Total Withdrawn</p>
                        <p id="displayTotalWithdrawn" class="text-3xl font-bold text-orange-600 mt-2">₹12,00,000</p>
                    </div>
                    <div class="stat-card bg-white p-6 rounded-lg card-shadow">
                        <p class="text-gray-500 text-sm font-semibold uppercase tracking-wide">Interest Earned</p>
                        <p id="displayTotalInterest" class="text-3xl font-bold text-green-600 mt-2">₹4,50,000</p>
                    </div>
                    <div class="stat-card bg-white p-6 rounded-lg card-shadow">
                        <p class="text-gray-500 text-sm font-semibold uppercase tracking-wide">Final Balance</p>
                        <p id="displayFinalBalance" class="text-3xl font-bold text-blue-600 mt-2">₹2,50,000</p>
                    </div>
                </div>
            </div>

            <!-- Input Controls Panel -->
            <div class="lg:col-span-1 order-2 lg:order-1">
                <div class="bg-white rounded-lg card-shadow p-6 sticky top-24">
                    <h2 class="text-xl font-bold text-gray-900 mb-6">Investment Parameters</h2>

                    <!-- Initial Investment -->
                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Initial Investment Amount
                        </label>
                        <div class="flex items-center gap-3">
                            <span class="text-gray-600 font-semibold">₹</span>
                            <input 
                                type="number" 
                                id="initialInvestment" 
                                value="1000000"
                                min="10000"
                                max="50000000"
                                step="10000"
                                class="rupee-input flex-1 px-4 py-2 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:outline-none"
                            >
                        </div>
                        <input 
                            type="range" 
                            id="initialInvestmentSlider" 
                            value="1000000"
                            min="10000"
                            max="50000000"
                            step="10000"
                            class="w-full mt-3"
                        >
                        <p class="text-xs text-gray-500 mt-1">₹10,000 – ₹5,00,00,000</p>
                    </div>

                    <!-- Monthly Withdrawal -->
                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Monthly Withdrawal Amount
                        </label>
                        <div class="flex items-center gap-3">
                            <span class="text-gray-600 font-semibold">₹</span>
                            <input 
                                type="number" 
                                id="monthlyWithdrawal" 
                                value="10000"
                                min="1000"
                                max="500000"
                                step="1000"
                                class="rupee-input flex-1 px-4 py-2 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:outline-none"
                            >
                        </div>
                        <input 
                            type="range" 
                            id="monthlyWithdrawalSlider" 
                            value="10000"
                            min="1000"
                            max="500000"
                            step="1000"
                            class="w-full mt-3"
                        >
                        <p class="text-xs text-gray-500 mt-1">₹1,000 – ₹5,00,000</p>
                    </div>

                    <!-- Expected Annual Return -->
                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Expected Annual Return
                        </label>
                        <div class="flex items-center gap-3">
                            <input 
                                type="number" 
                                id="annualReturn" 
                                value="8"
                                min="1"
                                max="15"
                                step="0.25"
                                class="w-20 px-3 py-2 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:outline-none"
                            >
                            <span class="text-gray-600 font-semibold">%</span>
                        </div>
                        <input 
                            type="range" 
                            id="annualReturnSlider" 
                            value="8"
                            min="1"
                            max="15"
                            step="0.25"
                            class="w-full mt-3"
                        >
                        <p class="text-xs text-gray-500 mt-1">1% – 15% per annum</p>
                    </div>

                    <!-- Investment Duration -->
                    <div class="mb-8">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Investment Duration
                        </label>
                        <div class="flex items-center gap-3">
                            <input 
                                type="number" 
                                id="duration" 
                                value="10"
                                min="1"
                                max="40"
                                step="1"
                                class="w-20 px-3 py-2 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:outline-none"
                            >
                            <span class="text-gray-600 font-semibold">years</span>
                        </div>
                        <input 
                            type="range" 
                            id="durationSlider" 
                            value="10"
                            min="1"
                            max="40"
                            step="1"
                            class="w-full mt-3"
                        >
                        <p class="text-xs text-gray-500 mt-1">1 – 40 years</p>
                    </div>

                    <!-- Advanced Options -->
                    <div class="border-t pt-6">
                        <h3 class="font-semibold text-gray-900 mb-4">Advanced Options</h3>
                        
                        <!-- Inflation Adjustment -->
                        <label class="flex items-center gap-3 cursor-pointer mb-4">
                            <input 
                                type="checkbox" 
                                id="inflationAdjustment" 
                                class="w-5 h-5 rounded border-2 border-purple-300 text-purple-600 focus:ring-2 focus:ring-purple-500"
                            >
                            <span class="text-sm font-medium text-gray-700">Adjust withdrawals for inflation</span>
                        </label>

                        <div id="inflationContainer" class="hidden mb-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Inflation Rate
                            </label>
                            <div class="flex items-center gap-3">
                                <input 
                                    type="number" 
                                    id="inflationRate" 
                                    value="5"
                                    min="1"
                                    max="10"
                                    step="0.5"
                                    class="w-20 px-3 py-2 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:outline-none"
                                >
                                <span class="text-gray-600 font-semibold">%</span>
                            </div>
                        </div>

                        <!-- FD Comparison -->
                        <label class="flex items-center gap-3 cursor-pointer">
                            <input 
                                type="checkbox" 
                                id="fdComparison" 
                                class="w-5 h-5 rounded border-2 border-purple-300 text-purple-600 focus:ring-2 focus:ring-purple-500"
                            >
                            <span class="text-sm font-medium text-gray-700">Compare with Fixed Deposit</span>
                        </label>
                    </div>

                    <!-- Calculate Button -->
                    <button 
                        id="calculateBtn" 
                        class="w-full mt-8 bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white font-bold py-3 rounded-lg transition transform hover:scale-105 shadow-lg"
                    >
                        Calculate SWP
                    </button>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="lg:col-span-2 order-1 lg:order-2">
                <!-- Depletion Warning -->
                <div id="depletionWarning" class="hidden depletion-warning p-4 rounded-lg mb-6">
                    <p class="font-semibold text-amber-800" id="depletionMessage"></p>
                </div>

                <!-- Charts Container -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-lg card-shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Balance Over Time</h3>
                        <canvas id="balanceChart" height="300"></canvas>
                    </div>
                    <div class="bg-white rounded-lg card-shadow p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4">Growth vs Withdrawals</h3>
                        <canvas id="withdrawalChart" height="300"></canvas>
                    </div>
                </div>

                <!-- FD Comparison Chart -->
                <div id="fdComparisonContainer" class="hidden bg-white rounded-lg card-shadow p-6 mb-8">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">SWP vs Fixed Deposit Comparison</h3>
                    <canvas id="comparisonChart" height="250"></canvas>
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <p class="text-sm font-semibold text-gray-700">SWP Final Balance</p>
                            <p id="swpFinalBalance" class="text-2xl font-bold text-blue-600 mt-1">₹0</p>
                        </div>
                        <div class="bg-green-50 p-4 rounded-lg">
                            <p class="text-sm font-semibold text-gray-700">FD Final Balance</p>
                            <p id="fdFinalBalance" class="text-2xl font-bold text-green-600 mt-1">₹0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="mt-12 bg-white rounded-lg card-shadow overflow-hidden">
            <div class="p-6 border-b border-gray-200">
                <div class="flex justify-between items-center">
                    <h3 class="text-lg font-bold text-gray-900">Detailed Breakdown</h3>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input 
                                type="radio" 
                                name="viewType" 
                                value="monthly" 
                                checked
                                class="w-4 h-4 text-purple-600"
                            >
                            <span class="text-sm font-medium text-gray-700">Monthly</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input 
                                type="radio" 
                                name="viewType" 
                                value="yearly"
                                class="w-4 h-4 text-purple-600"
                            >
                            <span class="text-sm font-medium text-gray-700">Yearly</span>
                        </label>
                        <button 
                            id="downloadBtn" 
                            class="ml-4 px-4 py-2 bg-purple-600 hover:bg-purple-700 text-white rounded-lg font-medium transition"
                        >
                            Download
                        </button>
                    </div>
                </div>
            </div>
            <div class="data-table">
                <table class="w-full text-sm">
                    <thead class="table-header text-white sticky top-0">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold">Month/Year</th>
                            <th class="px-6 py-3 text-right font-semibold">Opening Balance</th>
                            <th class="px-6 py-3 text-right font-semibold">Interest Earned</th>
                            <th class="px-6 py-3 text-right font-semibold">Withdrawal</th>
                            <th class="px-6 py-3 text-right font-semibold">Closing Balance</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <tr class="border-b border-gray-200">
                            <td colspan="5" class="px-6 py-8 text-center text-gray-500">
                                Click "Calculate SWP" to generate results
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Goal-Based Calculator Section -->
        <div class="mt-12 bg-white rounded-lg card-shadow p-8">
            <h3 class="text-lg font-bold text-gray-900 mb-6">Goal-Based Withdrawal Calculator</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Required Monthly Income
                    </label>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-600 font-semibold">₹</span>
                        <input 
                            type="number" 
                            id="requiredIncome" 
                            value="50000"
                            min="1000"
                            step="1000"
                            class="rupee-input flex-1 px-4 py-2 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:outline-none"
                        >
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        For (Years)
                    </label>
                    <input 
                        type="number" 
                        id="requiredYears" 
                        value="20"
                        min="1"
                        max="40"
                        class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:outline-none"
                    >
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Expected Return (%)
                    </label>
                    <input 
                        type="number" 
                        id="requiredReturn" 
                        value="8"
                        min="1"
                        max="15"
                        step="0.25"
                        class="w-full px-4 py-2 border-2 border-gray-300 rounded-lg focus:border-purple-500 focus:outline-none"
                    >
                </div>
            </div>
            <button 
                id="calculateGoalBtn" 
                class="mt-6 px-8 py-3 bg-gradient-to-r from-purple-600 to-purple-700 hover:from-purple-700 hover:to-purple-800 text-white font-bold rounded-lg transition transform hover:scale-105"
            >
                Calculate Required Corpus
            </button>
            <div id="goalResult" class="hidden mt-6 success-highlight p-6 rounded-lg">
                <p class="text-gray-700 mb-2">To withdraw <span id="goalResultIncome" class="font-bold text-green-600">₹50,000</span> per month for <span id="goalResultYears" class="font-bold text-green-600">20 years</span>, you need:</p>
                <p class="text-3xl font-bold text-green-600 mt-4">₹<span id="requiredCorpus">0</span></p>
                <p class="text-sm text-gray-600 mt-2">*Assuming expected return rate</p>
            </div>
        </div>

        <!-- Information Section -->
        <div class="mt-12 mb-12 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-blue-50 p-8 rounded-lg border-l-4 border-blue-500">
                <h4 class="font-bold text-blue-900 mb-3">📊 About SWP</h4>
                <p class="text-sm text-blue-800">Systematic Withdrawal Plan (SWP) allows you to withdraw a fixed amount regularly from your mutual fund investment. This calculator simulates the withdrawal process and shows how long your investment will last.</p>
            </div>
            <div class="bg-green-50 p-8 rounded-lg border-l-4 border-green-500">
                <h4 class="font-bold text-green-900 mb-3">✅ How It Works</h4>
                <p class="text-sm text-green-800">Each month, your investment earns returns based on the expected annual rate. Then, the withdrawal amount is deducted. This process repeats for the specified period or until your balance runs out.</p>
            </div>
        </div>
    </div>

    <!-- JavaScript Calculation Engine -->
    <script>
        // Global variables
        let calculationData = null;
        let balanceChart = null;
        let withdrawalChart = null;
        let comparisonChart = null;

        // Synchronize input fields and sliders
        function syncInputs() {
            const inputs = {
                initialInvestment: 'initialInvestmentSlider',
                initialInvestmentSlider: 'initialInvestment',
                monthlyWithdrawal: 'monthlyWithdrawalSlider',
                monthlyWithdrawalSlider: 'monthlyWithdrawal',
                annualReturn: 'annualReturnSlider',
                annualReturnSlider: 'annualReturn',
                duration: 'durationSlider',
                durationSlider: 'duration'
            };

            for (const [input, target] of Object.entries(inputs)) {
                document.getElementById(input)?.addEventListener('input', (e) => {
                    document.getElementById(target).value = e.target.value;
                    updateDisplayValues();
                });
            }
        }

        // Update display values in real-time
        function updateDisplayValues() {
            const initial = parseFloat(document.getElementById('initialInvestment').value) || 0;
            const withdrawal = parseFloat(document.getElementById('monthlyWithdrawal').value) || 0;
            
            document.getElementById('displayInitialInvestment').textContent = formatCurrency(initial);
            document.getElementById('displayTotalWithdrawn').textContent = formatCurrency(0);
            document.getElementById('displayTotalInterest').textContent = formatCurrency(0);
            document.getElementById('displayFinalBalance').textContent = formatCurrency(0);
        }

        // Format currency to Indian Rupees
        function formatCurrency(amount) {
            return '₹' + new Intl.NumberFormat('en-IN', {
                maximumFractionDigits: 0
            }).format(amount);
        }

        // Main SWP Calculation
        function calculateSWP() {
            const initial = parseFloat(document.getElementById('initialInvestment').value);
            const monthlyWithdrawal = parseFloat(document.getElementById('monthlyWithdrawal').value);
            const annualReturn = parseFloat(document.getElementById('annualReturn').value);
            const duration = parseFloat(document.getElementById('duration').value);
            const inflationAdjustment = document.getElementById('inflationAdjustment').checked;
            const inflationRate = inflationAdjustment ? parseFloat(document.getElementById('inflationRate').value) : 0;

            const monthlyRate = (annualReturn / 12) / 100;
            const monthlyInflationRate = inflationAdjustment ? (inflationRate / 12) / 100 : 0;
            const totalMonths = Math.round(duration * 12);

            const monthlyData = [];
            let balance = initial;
            let totalWithdrawn = 0;
            let currentWithdrawal = monthlyWithdrawal;
            let depletedMonth = null;

            for (let month = 1; month <= totalMonths; month++) {
                const openingBalance = balance;
                
                // Apply monthly interest
                const interest = balance * monthlyRate;
                balance += interest;

                // Apply inflation adjustment to withdrawal
                if (inflationAdjustment && month > 1) {
                    currentWithdrawal = currentWithdrawal * (1 + monthlyInflationRate);
                }

                // Apply withdrawal
                balance -= currentWithdrawal;
                totalWithdrawn += currentWithdrawal;

                // Check if balance is depleted
                if (balance < 0 && depletedMonth === null) {
                    depletedMonth = month;
                    balance = 0;
                }

                monthlyData.push({
                    month: month,
                    year: Math.ceil(month / 12),
                    openingBalance: openingBalance,
                    interest: interest,
                    withdrawal: currentWithdrawal,
                    closingBalance: Math.max(balance, 0)
                });

                // Stop if balance is zero
                if (balance === 0 && month > 1) {
                    break;
                }
            }

            const finalBalance = Math.max(balance, 0);
            const totalInterest = totalWithdrawn + finalBalance - initial;

            calculationData = {
                initial,
                monthlyWithdrawal,
                annualReturn,
                duration,
                monthlyData,
                totalWithdrawn,
                totalInterest,
                finalBalance,
                depletedMonth,
                inflationAdjustment,
                inflationRate: inflationRate || 0
            };

            return calculationData;
        }

        // Display calculated results
        function displayResults() {
            if (!calculationData) return;

            // Update summary cards
            document.getElementById('displayInitialInvestment').textContent = formatCurrency(calculationData.initial);
            document.getElementById('displayTotalWithdrawn').textContent = formatCurrency(calculationData.totalWithdrawn);
            document.getElementById('displayTotalInterest').textContent = formatCurrency(calculationData.totalInterest);
            document.getElementById('displayFinalBalance').textContent = formatCurrency(calculationData.finalBalance);

            // Display depletion warning if applicable
            const warningDiv = document.getElementById('depletionWarning');
            if (calculationData.depletedMonth) {
                const years = Math.floor((calculationData.depletedMonth - 1) / 12);
                const months = (calculationData.depletedMonth - 1) % 12;
                const yearText = years > 0 ? `${years} year${years > 1 ? 's' : ''}` : '';
                const monthText = months > 0 ? `${months} month${months > 1 ? 's' : ''}` : '';
                const durationText = [yearText, monthText].filter(t => t).join(' and ');
                
                document.getElementById('depletionMessage').textContent = `⚠️ Your investment will be depleted in ${durationText}. Please review your withdrawal amount.`;
                warningDiv.classList.remove('hidden');
            } else {
                warningDiv.classList.add('hidden');
            }

            // Generate table
            updateTable();

            // Generate charts
            generateCharts();

            // Generate FD comparison if enabled
            if (document.getElementById('fdComparison').checked) {
                generateFDComparison();
                document.getElementById('fdComparisonContainer').classList.remove('hidden');
            } else {
                document.getElementById('fdComparisonContainer').classList.add('hidden');
            }
        }

        // Update data table
        function updateTable() {
            const viewType = document.querySelector('input[name="viewType"]:checked').value;
            const tbody = document.getElementById('tableBody');
            tbody.innerHTML = '';

            let displayData = calculationData.monthlyData;

            if (viewType === 'yearly') {
                displayData = aggregateByYear(calculationData.monthlyData);
            }

            displayData.forEach((row, index) => {
                const tr = document.createElement('tr');
                const isDepletedMonth = calculationData.depletedMonth && row.month === calculationData.depletedMonth;
                
                tr.className = `border-b border-gray-200 ${isDepletedMonth ? 'bg-red-50' : index % 2 === 0 ? 'bg-gray-50' : ''}`;
                tr.innerHTML = `
                    <td class="px-6 py-3 font-medium text-gray-900">${viewType === 'yearly' ? `Year ${row.year}` : `${row.month}`}</td>
                    <td class="px-6 py-3 text-right text-gray-700">${formatCurrency(row.openingBalance)}</td>
                    <td class="px-6 py-3 text-right text-green-600 font-semibold">${formatCurrency(row.interest)}</td>
                    <td class="px-6 py-3 text-right text-orange-600 font-semibold">${formatCurrency(row.withdrawal)}</td>
                    <td class="px-6 py-3 text-right font-semibold ${row.closingBalance > 0 ? 'text-blue-600' : 'text-red-600'}">${formatCurrency(row.closingBalance)}</td>
                `;
                tbody.appendChild(tr);
            });
        }

        // Aggregate monthly data to yearly
        function aggregateByYear(monthlyData) {
            const yearlyData = {};

            monthlyData.forEach(row => {
                const year = row.year;
                if (!yearlyData[year]) {
                    yearlyData[year] = {
                        year: year,
                        openingBalance: row.openingBalance,
                        interest: 0,
                        withdrawal: 0,
                        closingBalance: row.closingBalance,
                        month: year * 12
                    };
                }
                yearlyData[year].interest += row.interest;
                yearlyData[year].withdrawal += row.withdrawal;
            });

            return Object.values(yearlyData);
        }

        // Generate charts
        function generateCharts() {
            const monthlyData = calculationData.monthlyData;
            const months = monthlyData.map((d, i) => `M${d.month}`);
            const balances = monthlyData.map(d => d.closingBalance);
            const withdrawals = monthlyData.map(d => d.withdrawal);
            const interests = monthlyData.map(d => d.interest);

            // Balance Chart
            const balanceCtx = document.getElementById('balanceChart').getContext('2d');
            if (balanceChart) balanceChart.destroy();
            balanceChart = new Chart(balanceCtx, {
                type: 'line',
                data: {
                    labels: months,
                    datasets: [{
                        label: 'Remaining Balance',
                        data: balances,
                        borderColor: '#667eea',
                        backgroundColor: 'rgba(102, 126, 234, 0.1)',
                        fill: true,
                        tension: 0.4,
                        pointRadius: 0,
                        borderWidth: 3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: {
                            display: true,
                            labels: { usePointStyle: true }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return '₹' + (value / 100000).toFixed(0) + 'L';
                                }
                            }
                        }
                    }
                }
            });

            // Withdrawal vs Growth Chart (Stacked Area)
            const withdrawalCtx = document.getElementById('withdrawalChart').getContext('2d');
            if (withdrawalChart) withdrawalChart.destroy();
            withdrawalChart = new Chart(withdrawalCtx, {
                type: 'bar',
                data: {
                    labels: months,
                    datasets: [
                        {
                            label: 'Interest Earned',
                            data: interests,
                            backgroundColor: '#10b981',
                            borderColor: '#059669',
                            borderRadius: 4
                        },
                        {
                            label: 'Withdrawal',
                            data: withdrawals,
                            backgroundColor: '#f97316',
                            borderColor: '#ea580c',
                            borderRadius: 4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    indexAxis: 'x',
                    plugins: {
                        legend: {
                            display: true,
                            labels: { usePointStyle: true }
                        }
                    },
                    scales: {
                        y: {
                            stacked: false,
                            ticks: {
                                callback: function(value) {
                                    return '₹' + (value / 1000).toFixed(0) + 'K';
                                }
                            }
                        }
                    }
                }
            });
        }

        // Generate FD Comparison
        function generateFDComparison() {
            const principal = calculationData.initial;
            const months = Math.round(calculationData.duration * 12);
            const monthlyRate = (calculationData.annualReturn / 12) / 100;

            // SWP calculation
            let swpBalance = principal;
            for (let i = 0; i < calculationData.monthlyData.length; i++) {
                swpBalance = calculationData.monthlyData[i].closingBalance;
            }

            // FD calculation (no withdrawals)
            let fdBalance = principal;
            for (let i = 0; i < months; i++) {
                fdBalance = fdBalance * (1 + monthlyRate);
            }

            // FD with monthly withdrawals at same rate
            let fdWithdrawal = principal;
            for (let i = 0; i < months && fdWithdrawal > 0; i++) {
                fdWithdrawal = fdWithdrawal * (1 + monthlyRate) - calculationData.monthlyWithdrawal;
                fdWithdrawal = Math.max(fdWithdrawal, 0);
            }

            // Update comparison cards
            document.getElementById('swpFinalBalance').textContent = formatCurrency(swpBalance);
            document.getElementById('fdFinalBalance').textContent = formatCurrency(fdWithdrawal);

            // Comparison chart
            const comparisonCtx = document.getElementById('comparisonChart').getContext('2d');
            if (comparisonChart) comparisonChart.destroy();
            comparisonChart = new Chart(comparisonCtx, {
                type: 'bar',
                data: {
                    labels: ['SWP (Mutual Fund)', 'Fixed Deposit\n(with withdrawals)'],
                    datasets: [{
                        label: 'Final Balance',
                        data: [swpBalance, fdWithdrawal],
                        backgroundColor: ['#667eea', '#10b981'],
                        borderRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    indexAxis: 'x',
                    plugins: {
                        legend: { display: false }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return '₹' + (value / 100000).toFixed(0) + 'L';
                                }
                            }
                        }
                    }
                }
            });
        }

        // Calculate required corpus for goal-based calculation
        function calculateRequiredCorpus() {
            const requiredIncome = parseFloat(document.getElementById('requiredIncome').value);
            const requiredYears = parseFloat(document.getElementById('requiredYears').value);
            const requiredReturn = parseFloat(document.getElementById('requiredReturn').value);

            const monthlyRate = (requiredReturn / 12) / 100;
            const months = requiredYears * 12;

            // PV of annuity formula: PV = PMT * [1 - (1 + r)^-n] / r
            const corpus = requiredIncome * ((1 - Math.pow(1 + monthlyRate, -months)) / monthlyRate);

            document.getElementById('goalResultIncome').textContent = formatCurrency(requiredIncome);
            document.getElementById('goalResultYears').textContent = requiredYears;
            document.getElementById('requiredCorpus').textContent = new Intl.NumberFormat('en-IN', {
                maximumFractionDigits: 0
            }).format(corpus);

            document.getElementById('goalResult').classList.remove('hidden');
        }

        // Download results as CSV
        function downloadResults() {
            if (!calculationData) return;

            const viewType = document.querySelector('input[name="viewType"]:checked').value;
            let csv = 'SWP Calculator Results\n\n';
            csv += `Initial Investment,${calculationData.initial}\n`;
            csv += `Monthly Withdrawal,${calculationData.monthlyWithdrawal}\n`;
            csv += `Annual Return,${calculationData.annualReturn}%\n`;
            csv += `Duration,${calculationData.duration} years\n\n`;

            csv += `Total Withdrawn,${calculationData.totalWithdrawn}\n`;
            csv += `Total Interest,${calculationData.totalInterest}\n`;
            csv += `Final Balance,${calculationData.finalBalance}\n\n`;

            csv += 'Month,Opening Balance,Interest,Withdrawal,Closing Balance\n';
            
            let dataToDownload = calculationData.monthlyData;
            if (viewType === 'yearly') {
                dataToDownload = aggregateByYear(calculationData.monthlyData);
            }

            dataToDownload.forEach(row => {
                csv += `${viewType === 'yearly' ? 'Year ' + row.year : 'Month ' + row.month},${row.openingBalance},${row.interest},${row.withdrawal},${row.closingBalance}\n`;
            });

            const blob = new Blob([csv], { type: 'text/csv' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'swp_calculation.csv';
            a.click();
        }

        // Event Listeners
        document.getElementById('calculateBtn').addEventListener('click', () => {
            calculateSWP();
            displayResults();
        });

        document.getElementById('calculateGoalBtn').addEventListener('click', calculateRequiredCorpus);
        document.getElementById('downloadBtn').addEventListener('click', downloadResults);

        document.getElementById('inflationAdjustment').addEventListener('change', (e) => {
            document.getElementById('inflationContainer').classList.toggle('hidden', !e.target.checked);
        });

        document.querySelectorAll('input[name="viewType"]').forEach(radio => {
            radio.addEventListener('change', updateTable);
        });

        // Auto-calculate on load
        window.addEventListener('load', () => {
            syncInputs();
            updateDisplayValues();
            calculateSWP();
            displayResults();
        });
    </script>
</body>
</html>
