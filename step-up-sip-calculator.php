<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Step-up SIP Calculator 2026 - Calculate SIP Returns with Annual Increment | Thiyagi.com</title>
    <meta name="description" content="Step-up SIP calculator 2026 - calculate systematic investment plan returns with annual increments. Plan your mutual fund investments with step-up strategy.">
    <meta name="keywords" content="step up sip calculator 2026, systematic investment plan calculator, sip return calculator, mutual fund calculator, sip with increment calculator">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Step-up SIP Calculator 2026 - Calculate SIP Returns with Annual Increment">
    <meta property="og:description" content="Calculate step-up SIP returns with annual increments and plan your systematic investment strategy.">
    <meta property="og:url" content="https://www.thiyagi.com/step-up-sip-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Step-up SIP Calculator 2026 - Calculate SIP Returns with Annual Increment">
    <meta name="twitter:description" content="Calculate your step-up SIP investment returns with annual increments.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/step-up-sip-calculator">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }
    .sip-card {
        transition: all 0.3s ease;
        border-left: 4px solid #f59e0b;
    }
    .sip-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #d97706;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .money-pulse {
        animation: moneyPulse 2s ease-in-out infinite;
    }
    @keyframes moneyPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Step-up SIP Calculator 2026",
  "description": "Calculate step-up SIP returns with annual increments for systematic investment planning in mutual funds.",
  "url": "https://www.thiyagi.com/step-up-sip-calculator",
  "applicationCategory": "FinanceApplication",
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
                        <i class="fas fa-chart-line text-2xl text-orange-600 money-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Step-up SIP Calculator</h1>
                        <p class="text-orange-100">Calculate SIP returns with annual increment strategy</p>
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
                <li class="text-gray-900 font-medium">Step-up SIP Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Step-up SIP Calculator</h2>
                <p class="text-orange-100">Calculate your systematic investment returns with annual increments</p>
            </div>
            
            <div class="p-6">
                <form id="stepUpSipForm" class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-6">
                        <div class="form-group">
                            <label for="initialInvestment" class="block text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-rupee-sign text-orange-500 mr-2"></i>
                                Monthly SIP Amount (₹)
                            </label>
                            <input type="number" id="initialInvestment" min="1000" step="100" value="10000" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>

                        <div class="form-group">
                            <label for="stepUpPercentage" class="block text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-chart-line text-orange-500 mr-2"></i>
                                Annual Step-up (%)
                            </label>
                            <input type="number" id="stepUpPercentage" min="1" max="50" step="1" value="10" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>
                    </div>

                    <div class="space-y-6">
                        <div class="form-group">
                            <label for="investmentPeriod" class="block text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-calendar-alt text-orange-500 mr-2"></i>
                                Investment Period (Years)
                            </label>
                            <input type="number" id="investmentPeriod" min="1" max="50" step="1" value="10" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>

                        <div class="form-group">
                            <label for="expectedReturn" class="block text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-percentage text-orange-500 mr-2"></i>
                                Expected Annual Return (%)
                            </label>
                            <input type="number" id="expectedReturn" min="1" max="30" step="0.5" value="12" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <button type="button" onclick="calculateStepUpSIP()" 
                                class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold py-4 px-6 rounded-lg hover:from-orange-600 hover:to-orange-700 focus:ring-4 focus:ring-orange-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate Step-up SIP Returns
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Investment Summary -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-chart-pie text-orange-500 mr-3"></i>
                    Investment Summary
                </h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="sip-card bg-blue-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-blue-600 font-medium">Total Investment</p>
                                <p id="totalInvestment" class="text-2xl font-bold text-blue-800">₹0</p>
                            </div>
                            <i class="fas fa-coins text-3xl text-blue-500"></i>
                        </div>
                    </div>
                    <div class="sip-card bg-green-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-green-600 font-medium">Total Returns</p>
                                <p id="totalReturns" class="text-2xl font-bold text-green-800">₹0</p>
                            </div>
                            <i class="fas fa-chart-line text-3xl text-green-500"></i>
                        </div>
                    </div>
                    <div class="sip-card bg-orange-50 p-4 rounded-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm text-orange-600 font-medium">Final Value</p>
                                <p id="finalValue" class="text-2xl font-bold text-orange-800">₹0</p>
                            </div>
                            <i class="fas fa-trophy text-3xl text-orange-500"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Yearly Breakdown -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-table text-orange-500 mr-3"></i>
                    Year-wise Investment Breakdown
                </h3>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-orange-50 border-b-2 border-orange-200">
                                <th class="text-left p-3 font-semibold text-gray-700">Year</th>
                                <th class="text-right p-3 font-semibold text-gray-700">Monthly SIP</th>
                                <th class="text-right p-3 font-semibold text-gray-700">Annual Investment</th>
                                <th class="text-right p-3 font-semibold text-gray-700">Corpus Value</th>
                            </tr>
                        </thead>
                        <tbody id="yearlyBreakdown">
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Investment Tips -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-lightbulb text-orange-500 mr-3"></i>
                    Step-up SIP Investment Tips
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Start Early</h4>
                                <p class="text-gray-600 text-sm">The power of compounding works best with time. Start your step-up SIP as early as possible.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Regular Increment</h4>
                                <p class="text-gray-600 text-sm">Increase your SIP amount annually to keep pace with income growth and inflation.</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Stay Disciplined</h4>
                                <p class="text-gray-600 text-sm">Don't stop SIPs during market volatility. Stay invested for long-term wealth creation.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Diversify Funds</h4>
                                <p class="text-gray-600 text-sm">Invest across different fund categories to reduce risk and optimize returns.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Your Results</h3>
                <div class="flex justify-center space-x-4">
                    <button onclick="shareOnFacebook()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i>Share on Facebook
                    </button>
                    <button onclick="shareOnTwitter()" class="bg-blue-400 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter mr-2"></i>Share on Twitter
                    </button>
                    <button onclick="copyResults()" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                        <i class="fas fa-copy mr-2"></i>Copy Results
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        class StepUpSIPCalculator {
            constructor() {
                this.results = null;
            }

            calculate(initialInvestment, stepUpPercentage, years, expectedReturn) {
                const monthlyReturn = Math.pow(1 + (expectedReturn / 100), 1/12) - 1;
                let currentMonthlyInvestment = initialInvestment;
                let totalInvestment = 0;
                let futureValue = 0;
                const yearlyBreakdown = [];

                for (let year = 1; year <= years; year++) {
                    let yearlyInvestment = 0;
                    let yearStartValue = futureValue;

                    for (let month = 1; month <= 12; month++) {
                        futureValue = (futureValue + currentMonthlyInvestment) * (1 + monthlyReturn);
                        totalInvestment += currentMonthlyInvestment;
                        yearlyInvestment += currentMonthlyInvestment;
                    }

                    yearlyBreakdown.push({
                        year: year,
                        monthlyInvestment: currentMonthlyInvestment,
                        yearlyInvestment: yearlyInvestment,
                        corpusValue: futureValue
                    });

                    // Apply step-up for next year
                    if (year < years) {
                        currentMonthlyInvestment = currentMonthlyInvestment * (1 + (stepUpPercentage / 100));
                    }
                }

                return {
                    totalInvestment: totalInvestment,
                    totalReturns: futureValue - totalInvestment,
                    finalValue: futureValue,
                    yearlyBreakdown: yearlyBreakdown
                };
            }

            formatCurrency(amount) {
                return new Intl.NumberFormat('en-IN', {
                    style: 'currency',
                    currency: 'INR',
                    maximumFractionDigits: 0
                }).format(amount);
            }

            displayResults(results) {
                document.getElementById('totalInvestment').textContent = this.formatCurrency(results.totalInvestment);
                document.getElementById('totalReturns').textContent = this.formatCurrency(results.totalReturns);
                document.getElementById('finalValue').textContent = this.formatCurrency(results.finalValue);

                const tbody = document.getElementById('yearlyBreakdown');
                tbody.innerHTML = '';
                
                results.yearlyBreakdown.forEach(year => {
                    const row = document.createElement('tr');
                    row.className = 'border-b border-gray-200 hover:bg-orange-50';
                    row.innerHTML = `
                        <td class="p-3 font-medium text-gray-800">Year ${year.year}</td>
                        <td class="p-3 text-right text-gray-600">${this.formatCurrency(year.monthlyInvestment)}</td>
                        <td class="p-3 text-right text-gray-600">${this.formatCurrency(year.yearlyInvestment)}</td>
                        <td class="p-3 text-right font-semibold text-green-600">${this.formatCurrency(year.corpusValue)}</td>
                    `;
                    tbody.appendChild(row);
                });

                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }
        }

        const calculator = new StepUpSIPCalculator();

        function calculateStepUpSIP() {
            const initialInvestment = parseFloat(document.getElementById('initialInvestment').value);
            const stepUpPercentage = parseFloat(document.getElementById('stepUpPercentage').value);
            const investmentPeriod = parseInt(document.getElementById('investmentPeriod').value);
            const expectedReturn = parseFloat(document.getElementById('expectedReturn').value);

            if (initialInvestment < 1000) {
                alert('Minimum SIP amount should be ₹1,000');
                return;
            }

            if (stepUpPercentage < 1 || stepUpPercentage > 50) {
                alert('Step-up percentage should be between 1% and 50%');
                return;
            }

            if (investmentPeriod < 1 || investmentPeriod > 50) {
                alert('Investment period should be between 1 and 50 years');
                return;
            }

            if (expectedReturn < 1 || expectedReturn > 30) {
                alert('Expected return should be between 1% and 30%');
                return;
            }

            const results = calculator.calculate(initialInvestment, stepUpPercentage, investmentPeriod, expectedReturn);
            calculator.results = results;
            calculator.displayResults(results);
        }

        function shareOnFacebook() {
            if (!calculator.results) return;
            
            const text = `I calculated my Step-up SIP returns: Total Investment: ${calculator.formatCurrency(calculator.results.totalInvestment)}, Final Value: ${calculator.formatCurrency(calculator.results.finalValue)}. Calculate yours at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!calculator.results) return;
            
            const text = `Step-up SIP Calculator Results: Investment: ${calculator.formatCurrency(calculator.results.totalInvestment)}, Returns: ${calculator.formatCurrency(calculator.results.finalValue)} 📊 Calculate yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyResults() {
            if (!calculator.results) return;
            
            const text = `Step-up SIP Calculator Results:
Total Investment: ${calculator.formatCurrency(calculator.results.totalInvestment)}
Total Returns: ${calculator.formatCurrency(calculator.results.totalReturns)}
Final Value: ${calculator.formatCurrency(calculator.results.finalValue)}

Calculate at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Results copied to clipboard!');
            });
        }

        // Auto-calculate on input change
        document.addEventListener('DOMContentLoaded', function() {
            const inputs = document.querySelectorAll('#stepUpSipForm input');
            inputs.forEach(input => {
                input.addEventListener('input', function() {
                    if (calculator.results) {
                        calculateStepUpSIP();
                    }
                });
            });
        });
    </script>

<?php include 'footer.php'; ?>
</body>
</html>
