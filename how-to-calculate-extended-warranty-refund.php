<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extended Warranty Refund Calculator 2026 - Calculate Prorated Refund Amount | Thiyagi.com</title>
    <meta name="description" content="Calculate your extended warranty refund amount for 2026. Get prorated refund estimates for unused warranty periods with detailed breakdown and cancellation guide.">
    <meta name="keywords" content="extended warranty refund calculator 2026, warranty cancellation refund, prorated warranty refund, warranty refund amount calculator">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Extended Warranty Refund Calculator 2026 - Calculate Prorated Refund Amount">
    <meta property="og:description" content="Calculate your extended warranty refund amount with detailed breakdown and cancellation guidance.">
    <meta property="og:url" content="https://www.thiyagi.com/how-to-calculate-extended-warranty-refund">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Extended Warranty Refund Calculator 2026 - Calculate Prorated Refund Amount">
    <meta name="twitter:description" content="Calculate your extended warranty refund with detailed breakdown.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/how-to-calculate-extended-warranty-refund">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    }
    .warranty-card {
        transition: all 0.3s ease;
        border-left: 4px solid #2563eb;
    }
    .warranty-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #1d4ed8;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .refund-pulse {
        animation: refundPulse 2s ease-in-out infinite;
    }
    @keyframes refundPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .money-green { color: #10b981; }
    .warning-amber { color: #f59e0b; }
    .danger-red { color: #ef4444; }
    .info-blue { color: #3b82f6; }
    .progress-bar {
        background: linear-gradient(90deg, #ef4444 0%, #f59e0b 50%, #10b981 100%);
        height: 8px;
        border-radius: 4px;
    }
    .calculation-step {
        position: relative;
        padding-left: 2rem;
    }
    .calculation-step::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0.5rem;
        width: 1.5rem;
        height: 2px;
        background: linear-gradient(90deg, #2563eb, #1d4ed8);
    }
    .refund-eligible { background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%); }
    .refund-partial { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); }
    .refund-none { background: linear-gradient(135deg, #fecaca 0%, #fca5a5 100%); }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Extended Warranty Refund Calculator 2026",
  "description": "Calculate prorated extended warranty refund amounts based on unused warranty periods, cancellation fees, and terms.",
  "url": "https://www.thiyagi.com/how-to-calculate-extended-warranty-refund",
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
                        <i class="fas fa-shield-alt text-2xl text-blue-600 refund-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Extended Warranty Refund Calculator</h1>
                        <p class="text-blue-100">Calculate your prorated warranty refund amount</p>
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
                <li class="text-gray-900 font-medium">Extended Warranty Refund Calculator</li>
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
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Warranty Refund Calculator</h2>
                <p class="text-gray-600">Calculate your prorated extended warranty refund amount</p>
            </div>

            <!-- Input Form -->
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Warranty Details -->
                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                        <i class="fas fa-file-contract mr-2" aria-hidden="true"></i>
                        Warranty Contract Details
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="warrantyType" class="block text-sm font-medium text-gray-700 mb-2">Warranty Type</label>
                            <select id="warrantyType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select warranty type...</option>
                                <option value="auto">Auto/Vehicle Extended Warranty</option>
                                <option value="home">Home Warranty</option>
                                <option value="appliance">Appliance Warranty</option>
                                <option value="electronics">Electronics Warranty</option>
                                <option value="furniture">Furniture Protection Plan</option>
                                <option value="mobile">Mobile Device Protection</option>
                                <option value="other">Other Extended Warranty</option>
                            </select>
                        </div>

                        <div>
                            <label for="originalCost" class="block text-sm font-medium text-gray-700 mb-2">Original Warranty Cost ($)</label>
                            <input type="number" id="originalCost" min="0" max="10000" step="0.01" placeholder="1,200.00" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="warrantyPeriod" class="block text-sm font-medium text-gray-700 mb-2">Total Warranty Period</label>
                            <select id="warrantyPeriod" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select warranty period...</option>
                                <option value="12">12 months</option>
                                <option value="24">24 months (2 years)</option>
                                <option value="36">36 months (3 years)</option>
                                <option value="48">48 months (4 years)</option>
                                <option value="60">60 months (5 years)</option>
                                <option value="72">72 months (6 years)</option>
                                <option value="84">84 months (7 years)</option>
                                <option value="96">96 months (8 years)</option>
                                <option value="custom">Custom Period</option>
                            </select>
                        </div>

                        <div id="customPeriodDiv" class="hidden">
                            <label for="customPeriod" class="block text-sm font-medium text-gray-700 mb-2">Custom Period (months)</label>
                            <input type="number" id="customPeriod" min="1" max="120" placeholder="30" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Time Details -->
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-clock mr-2" aria-hidden="true"></i>
                        Usage & Cancellation Timing
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="purchaseDate" class="block text-sm font-medium text-gray-700 mb-2">Warranty Purchase Date</label>
                            <input type="date" id="purchaseDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="cancellationDate" class="block text-sm font-medium text-gray-700 mb-2">Requested Cancellation Date</label>
                            <input type="date" id="cancellationDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="monthsUsed" class="block text-sm font-medium text-gray-700 mb-2">OR Months Already Used</label>
                            <input type="number" id="monthsUsed" min="0" max="120" step="0.1" placeholder="18.5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <p class="text-xs text-gray-500 mt-1">Leave blank to auto-calculate from dates</p>
                        </div>

                        <div>
                            <label for="claimsMade" class="block text-sm font-medium text-gray-700 mb-2">Number of Claims Made</label>
                            <input type="number" id="claimsMade" min="0" max="20" placeholder="0" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Terms & Conditions -->
                <div class="bg-yellow-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-yellow-800 mb-4 flex items-center">
                        <i class="fas fa-exclamation-triangle mr-2" aria-hidden="true"></i>
                        Contract Terms & Fees
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="cancellationFeeType" class="block text-sm font-medium text-gray-700 mb-2">Cancellation Fee Structure</label>
                            <select id="cancellationFeeType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                                <option value="">Select fee structure...</option>
                                <option value="fixed">Fixed Fee Amount</option>
                                <option value="percentage">Percentage of Original Cost</option>
                                <option value="declining">Declining Scale Fee</option>
                                <option value="none">No Cancellation Fee</option>
                            </select>
                        </div>

                        <div id="cancellationFeeAmount" class="hidden">
                            <label for="feeAmount" class="block text-sm font-medium text-gray-700 mb-2">Fee Amount ($) or Percentage (%)</label>
                            <input type="number" id="feeAmount" min="0" max="1000" step="0.01" placeholder="50.00" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="adminFee" class="block text-sm font-medium text-gray-700 mb-2">Administrative Processing Fee ($)</label>
                            <input type="number" id="adminFee" min="0" max="200" step="0.01" placeholder="25.00" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="gracePeriod" class="block text-sm font-medium text-gray-700 mb-2">Grace Period (days)</label>
                            <input type="number" id="gracePeriod" min="0" max="90" placeholder="30" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent">
                            <p class="text-xs text-gray-500 mt-1">Full refund period after purchase</p>
                        </div>
                    </div>
                </div>

                <!-- Additional Factors -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="hasUsedService" class="mr-3 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm font-medium text-gray-700">Have used warranty services/repairs</span>
                        </label>
                    </div>
                    
                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="isPastGrace" class="mr-3 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm font-medium text-gray-700">Past grace/cooling-off period</span>
                        </label>
                    </div>

                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="hasActiveClaim" class="mr-3 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm font-medium text-gray-700">Currently have active claim</span>
                        </label>
                    </div>

                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="isFinanced" class="mr-3 text-blue-600 focus:ring-blue-500">
                            <span class="text-sm font-medium text-gray-700">Warranty was financed/monthly payments</span>
                        </label>
                    </div>
                </div>

                <!-- Calculate Button -->
                <div class="text-center">
                    <button id="calculateBtn" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>
                        Calculate Warranty Refund
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-blue-50 to-green-50 border-2 border-blue-200 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-receipt mr-2 text-blue-600" aria-hidden="true"></i>
                        Your Warranty Refund Calculation
                    </h3>
                    
                    <!-- Status Badge -->
                    <div class="text-center mb-6">
                        <div id="refundStatus" class="inline-flex items-center px-6 py-3 rounded-full text-lg font-bold">
                            <i class="fas fa-check-circle mr-2" aria-hidden="true"></i>
                            <span id="statusText">Refund Eligible</span>
                        </div>
                    </div>

                    <!-- Main Results -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div class="warranty-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2" id="refundAmount">$850.00</div>
                            <div class="text-sm text-gray-600">Estimated Refund</div>
                        </div>
                        <div class="warranty-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-2" id="usedAmount">$350.00</div>
                            <div class="text-sm text-gray-600">Amount Used</div>
                        </div>
                        <div class="warranty-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-red-600 mb-2" id="totalFees">$75.00</div>
                            <div class="text-sm text-gray-600">Total Fees</div>
                        </div>
                        <div class="warranty-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-purple-600 mb-2" id="refundPercentage">71%</div>
                            <div class="text-sm text-gray-600">Refund Rate</div>
                        </div>
                    </div>

                    <!-- Calculation Breakdown -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-list-ol mr-2 text-indigo-500" aria-hidden="true"></i>
                            Calculation Breakdown
                        </h4>
                        <div id="calculationSteps" class="space-y-3">
                            <!-- Steps will be populated by JS -->
                        </div>
                    </div>

                    <!-- Timeline Visualization -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-line mr-2 text-green-500" aria-hidden="true"></i>
                            Warranty Usage Timeline
                        </h4>
                        <div class="mb-4">
                            <div class="flex justify-between text-sm text-gray-600 mb-2">
                                <span>Start Date</span>
                                <span id="timelineUsed">Time Used</span>
                                <span>Cancellation</span>
                                <span>End Date</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-4 relative">
                                <div id="progressBar" class="progress-bar rounded-full h-4" style="width: 65%"></div>
                                <div id="cancellationMarker" class="absolute top-0 w-1 h-4 bg-red-500" style="left: 65%"></div>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="text-sm text-gray-600">
                                <span class="font-medium" id="monthsUsedDisplay">18.5 months</span> used out of 
                                <span class="font-medium" id="totalPeriodDisplay">36 months</span>
                            </p>
                        </div>
                    </div>

                    <!-- Important Notes -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-info-circle mr-2 text-blue-500" aria-hidden="true"></i>
                                Important Notes
                            </h4>
                            <div id="importantNotes" class="space-y-3">
                                <!-- Notes will be populated by JS -->
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-clipboard-list mr-2 text-yellow-500" aria-hidden="true"></i>
                                Next Steps
                            </h4>
                            <div id="nextSteps" class="space-y-3">
                                <!-- Steps will be populated by JS -->
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center">
                        <button id="printBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-print mr-2" aria-hidden="true"></i>
                            Print Calculation
                        </button>
                        <button id="shareBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share Results
                        </button>
                        <button id="resetBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-refresh mr-2" aria-hidden="true"></i>
                            New Calculation
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Information Sections -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- How Warranty Refunds Work -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-question-circle mr-3 text-blue-500" aria-hidden="true"></i>
                    How Warranty Refunds Work
                </h2>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-blue-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Prorated Refunds</h3>
                        <p class="text-gray-600">Most extended warranties offer prorated refunds based on unused time remaining on your contract.</p>
                    </div>
                    
                    <div class="border-l-4 border-green-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Calculation Method</h3>
                        <p class="text-gray-600">Refund = (Unused months ÷ Total months) × Original cost - Fees</p>
                    </div>
                    
                    <div class="border-l-4 border-yellow-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Common Fees</h3>
                        <p class="text-gray-600">Cancellation fees, administrative costs, and processing charges may apply.</p>
                    </div>

                    <div class="border-l-4 border-red-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Usage Impact</h3>
                        <p class="text-gray-600">Claims made or services used may affect your refund eligibility and amount.</p>
                    </div>
                </div>
            </section>

            <!-- Refund Tips -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-lightbulb mr-3 text-yellow-500" aria-hidden="true"></i>
                    Refund Tips & Strategy
                </h2>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-file-alt text-blue-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Review Your Contract</h3>
                            <p class="text-gray-600 text-sm">Carefully read cancellation terms and refund policies in your warranty agreement.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-clock text-green-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Act Within Grace Period</h3>
                            <p class="text-gray-600 text-sm">Cancel within the cooling-off period for a full refund without penalties.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-phone text-purple-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Contact Provider</h3>
                            <p class="text-gray-600 text-sm">Call your warranty provider to understand specific terms and request cancellation.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-envelope text-red-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Written Request</h3>
                            <p class="text-gray-600 text-sm">Submit cancellation requests in writing and keep records of all communications.</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-3">
                        <i class="fas fa-balance-scale text-indigo-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Know Your Rights</h3>
                            <p class="text-gray-600 text-sm">Understand consumer protection laws in your state regarding warranty cancellations.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Warranty Types Guide -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-shield-alt mr-3 text-blue-600" aria-hidden="true"></i>
                Common Warranty Types & Refund Policies
            </h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-car text-2xl text-blue-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Auto Warranties</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Usually prorated refunds</li>
                        <li>• 30-60 day grace period</li>
                        <li>• $50-100 cancellation fee</li>
                        <li>• Claims may reduce refund</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-home text-2xl text-green-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Home Warranties</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Monthly/annual terms</li>
                        <li>• 30 day cancellation</li>
                        <li>• Admin fees apply</li>
                        <li>• Service calls deducted</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-mobile-alt text-2xl text-purple-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Electronics</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Full refund if unused</li>
                        <li>• 14-30 day returns</li>
                        <li>• Restocking fees</li>
                        <li>• Pro-rated after usage</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-couch text-2xl text-orange-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Furniture Plans</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• 30-90 day full refund</li>
                        <li>• Prorated thereafter</li>
                        <li>• Coverage usage matters</li>
                        <li>• Minimal fees typical</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-tools text-2xl text-red-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Appliances</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Manufacturer dependent</li>
                        <li>• 15-60 day grace period</li>
                        <li>• Service history reviewed</li>
                        <li>• Prorated calculations</li>
                    </ul>
                </div>

                <div class="warranty-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-credit-card text-2xl text-indigo-600 mr-3" aria-hidden="true"></i>
                        <h3 class="font-bold text-gray-800">Credit Card Plans</h3>
                    </div>
                    <ul class="text-sm text-gray-600 space-y-2">
                        <li>• Bank specific terms</li>
                        <li>• Monthly billing cycles</li>
                        <li>• Easy cancellation</li>
                        <li>• Pro-rated refunds</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class WarrantyRefundCalculator {
            constructor() {
                this.results = {};
                this.init();
            }

            init() {
                this.bindEvents();
                this.setDefaultDates();
            }

            bindEvents() {
                document.getElementById('warrantyPeriod').addEventListener('change', () => this.toggleCustomPeriod());
                document.getElementById('cancellationFeeType').addEventListener('change', () => this.toggleFeeAmount());
                document.getElementById('calculateBtn').addEventListener('click', () => this.calculateRefund());
                document.getElementById('printBtn')?.addEventListener('click', () => this.printResults());
                document.getElementById('shareBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('resetBtn')?.addEventListener('click', () => this.resetCalculator());
            }

            setDefaultDates() {
                const today = new Date();
                const sixMonthsAgo = new Date();
                sixMonthsAgo.setMonth(today.getMonth() - 6);
                
                document.getElementById('purchaseDate').value = sixMonthsAgo.toISOString().split('T')[0];
                document.getElementById('cancellationDate').value = today.toISOString().split('T')[0];
            }

            toggleCustomPeriod() {
                const select = document.getElementById('warrantyPeriod');
                const customDiv = document.getElementById('customPeriodDiv');
                
                if (select.value === 'custom') {
                    customDiv.classList.remove('hidden');
                } else {
                    customDiv.classList.add('hidden');
                }
            }

            toggleFeeAmount() {
                const select = document.getElementById('cancellationFeeType');
                const feeDiv = document.getElementById('cancellationFeeAmount');
                
                if (select.value === 'fixed' || select.value === 'percentage' || select.value === 'declining') {
                    feeDiv.classList.remove('hidden');
                } else {
                    feeDiv.classList.add('hidden');
                }
            }

            calculateRefund() {
                if (!this.validateInputs()) {
                    return;
                }

                const warrantyData = this.collectWarrantyData();
                this.results = this.generateRefundCalculation(warrantyData);
                this.displayResults();
            }

            validateInputs() {
                const requiredFields = [
                    'warrantyType', 'originalCost', 'warrantyPeriod', 
                    'purchaseDate', 'cancellationDate', 'cancellationFeeType'
                ];

                for (const field of requiredFields) {
                    const value = document.getElementById(field).value;
                    if (!value || value === '') {
                        alert('Please fill in all required fields to calculate your warranty refund.');
                        return false;
                    }
                }

                const originalCost = parseFloat(document.getElementById('originalCost').value) || 0;
                if (originalCost <= 0) {
                    alert('Please enter a valid original warranty cost.');
                    return false;
                }

                const purchaseDate = new Date(document.getElementById('purchaseDate').value);
                const cancellationDate = new Date(document.getElementById('cancellationDate').value);
                
                if (cancellationDate <= purchaseDate) {
                    alert('Cancellation date must be after purchase date.');
                    return false;
                }

                return true;
            }

            collectWarrantyData() {
                const purchaseDate = new Date(document.getElementById('purchaseDate').value);
                const cancellationDate = new Date(document.getElementById('cancellationDate').value);
                
                // Calculate months used
                const monthsDiff = (cancellationDate.getFullYear() - purchaseDate.getFullYear()) * 12 + 
                                   (cancellationDate.getMonth() - purchaseDate.getMonth()) + 
                                   (cancellationDate.getDate() - purchaseDate.getDate()) / 30;

                const manualMonths = parseFloat(document.getElementById('monthsUsed').value) || null;
                
                return {
                    warrantyType: document.getElementById('warrantyType').value,
                    originalCost: parseFloat(document.getElementById('originalCost').value) || 0,
                    warrantyPeriod: this.getWarrantyPeriod(),
                    purchaseDate: purchaseDate,
                    cancellationDate: cancellationDate,
                    monthsUsed: manualMonths || monthsDiff,
                    claimsMade: parseInt(document.getElementById('claimsMade').value) || 0,
                    cancellationFeeType: document.getElementById('cancellationFeeType').value,
                    feeAmount: parseFloat(document.getElementById('feeAmount').value) || 0,
                    adminFee: parseFloat(document.getElementById('adminFee').value) || 0,
                    gracePeriod: parseInt(document.getElementById('gracePeriod').value) || 0,
                    hasUsedService: document.getElementById('hasUsedService').checked,
                    isPastGrace: document.getElementById('isPastGrace').checked,
                    hasActiveClaim: document.getElementById('hasActiveClaim').checked,
                    isFinanced: document.getElementById('isFinanced').checked
                };
            }

            getWarrantyPeriod() {
                const select = document.getElementById('warrantyPeriod');
                if (select.value === 'custom') {
                    return parseInt(document.getElementById('customPeriod').value) || 0;
                }
                return parseInt(select.value) || 0;
            }

            generateRefundCalculation(data) {
                const results = {
                    data: data,
                    isEligible: true,
                    refundAmount: 0,
                    usedAmount: 0,
                    unusedAmount: 0,
                    cancellationFee: 0,
                    adminFee: data.adminFee,
                    totalFees: 0,
                    refundPercentage: 0,
                    steps: [],
                    notes: [],
                    nextSteps: []
                };

                // Check grace period
                const daysUsed = Math.ceil((data.cancellationDate - data.purchaseDate) / (1000 * 60 * 60 * 24));
                const isWithinGrace = daysUsed <= data.gracePeriod;

                if (isWithinGrace) {
                    results.refundAmount = data.originalCost - data.adminFee;
                    results.refundPercentage = ((results.refundAmount / data.originalCost) * 100);
                    results.totalFees = data.adminFee;
                    
                    results.steps.push({
                        step: 1,
                        description: `Within ${data.gracePeriod}-day grace period`,
                        calculation: `$${data.originalCost.toFixed(2)} - $${data.adminFee.toFixed(2)} admin fee`,
                        result: `$${results.refundAmount.toFixed(2)}`
                    });

                    results.notes.push('You are within the grace period - eligible for full refund minus admin fees.');
                } else {
                    // Calculate prorated refund
                    const monthsRemaining = Math.max(0, data.warrantyPeriod - data.monthsUsed);
                    results.usedAmount = (data.monthsUsed / data.warrantyPeriod) * data.originalCost;
                    results.unusedAmount = (monthsRemaining / data.warrantyPeriod) * data.originalCost;

                    // Calculate cancellation fee
                    results.cancellationFee = this.calculateCancellationFee(data);
                    results.totalFees = results.cancellationFee + results.adminFee;

                    // Check eligibility based on usage and claims
                    if (data.hasActiveClaim) {
                        results.isEligible = false;
                        results.notes.push('Refund not available while active claim is pending.');
                    } else if (monthsRemaining <= 0) {
                        results.isEligible = false;
                        results.notes.push('Warranty period has expired - no refund available.');
                    } else {
                        results.refundAmount = Math.max(0, results.unusedAmount - results.totalFees);
                        results.refundPercentage = (results.refundAmount / data.originalCost) * 100;
                    }

                    // Add calculation steps
                    results.steps.push({
                        step: 1,
                        description: 'Calculate unused portion',
                        calculation: `${monthsRemaining.toFixed(1)} months remaining ÷ ${data.warrantyPeriod} total months × $${data.originalCost.toFixed(2)}`,
                        result: `$${results.unusedAmount.toFixed(2)}`
                    });

                    results.steps.push({
                        step: 2,
                        description: 'Apply cancellation fee',
                        calculation: `${this.getFeeDescription(data)}`,
                        result: `-$${results.cancellationFee.toFixed(2)}`
                    });

                    results.steps.push({
                        step: 3,
                        description: 'Apply administrative fee',
                        calculation: `Processing and handling charges`,
                        result: `-$${results.adminFee.toFixed(2)}`
                    });

                    results.steps.push({
                        step: 4,
                        description: 'Final refund amount',
                        calculation: `$${results.unusedAmount.toFixed(2)} - $${results.totalFees.toFixed(2)} total fees`,
                        result: `$${results.refundAmount.toFixed(2)}`
                    });
                }

                // Add additional notes and steps
                this.addNotesAndSteps(results, data);
                
                return results;
            }

            calculateCancellationFee(data) {
                switch (data.cancellationFeeType) {
                    case 'fixed':
                        return data.feeAmount;
                    case 'percentage':
                        return (data.feeAmount / 100) * data.originalCost;
                    case 'declining':
                        // Simplified declining scale - higher fee early, lower fee later
                        const usagePercentage = data.monthsUsed / data.warrantyPeriod;
                        const baseFee = data.feeAmount;
                        return baseFee * (1 - usagePercentage * 0.5); // Fee decreases by 50% over time
                    case 'none':
                        return 0;
                    default:
                        return 0;
                }
            }

            getFeeDescription(data) {
                switch (data.cancellationFeeType) {
                    case 'fixed':
                        return `Fixed cancellation fee: $${data.feeAmount.toFixed(2)}`;
                    case 'percentage':
                        return `${data.feeAmount}% of original cost: $${data.originalCost.toFixed(2)}`;
                    case 'declining':
                        return `Declining scale fee based on usage`;
                    case 'none':
                        return 'No cancellation fee';
                    default:
                        return 'Fee calculation';
                }
            }

            addNotesAndSteps(results, data) {
                // Add usage-based notes
                if (data.hasUsedService) {
                    results.notes.push('Service usage may affect final refund amount - check with provider.');
                }

                if (data.claimsMade > 0) {
                    results.notes.push(`${data.claimsMade} claims made - may reduce eligible refund amount.`);
                }

                if (data.isFinanced) {
                    results.notes.push('Financed warranty - refund may be applied to outstanding balance.');
                }

                // Add next steps
                results.nextSteps = [
                    { icon: 'fas fa-phone', text: 'Contact your warranty provider to initiate cancellation' },
                    { icon: 'fas fa-file-alt', text: 'Submit written cancellation request with policy details' },
                    { icon: 'fas fa-calendar', text: 'Note any required notice periods or processing timeframes' },
                    { icon: 'fas fa-receipt', text: 'Keep records of all communications and documentation' }
                ];

                if (results.isEligible) {
                    results.nextSteps.push({ 
                        icon: 'fas fa-money-check', 
                        text: 'Expect refund processing within 30-45 business days' 
                    });
                }
            }

            displayResults() {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update status badge
                this.updateStatusBadge();

                // Update main stats
                document.getElementById('refundAmount').textContent = `$${this.results.refundAmount.toFixed(2)}`;
                document.getElementById('usedAmount').textContent = `$${this.results.usedAmount.toFixed(2)}`;
                document.getElementById('totalFees').textContent = `$${this.results.totalFees.toFixed(2)}`;
                document.getElementById('refundPercentage').textContent = `${this.results.refundPercentage.toFixed(0)}%`;

                // Update sections
                this.updateCalculationSteps();
                this.updateTimeline();
                this.updateImportantNotes();
                this.updateNextSteps();

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            updateStatusBadge() {
                const statusBadge = document.getElementById('refundStatus');
                const statusText = document.getElementById('statusText');

                if (!this.results.isEligible) {
                    statusBadge.className = 'inline-flex items-center px-6 py-3 rounded-full text-lg font-bold refund-none text-red-800';
                    statusText.innerHTML = '<i class="fas fa-times-circle mr-2"></i>Not Eligible';
                } else if (this.results.refundAmount < this.results.data.originalCost * 0.5) {
                    statusBadge.className = 'inline-flex items-center px-6 py-3 rounded-full text-lg font-bold refund-partial text-yellow-800';
                    statusText.innerHTML = '<i class="fas fa-exclamation-triangle mr-2"></i>Partial Refund';
                } else {
                    statusBadge.className = 'inline-flex items-center px-6 py-3 rounded-full text-lg font-bold refund-eligible text-green-800';
                    statusText.innerHTML = '<i class="fas fa-check-circle mr-2"></i>Refund Eligible';
                }
            }

            updateCalculationSteps() {
                const stepsHtml = this.results.steps.map(step => `
                    <div class="calculation-step">
                        <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg">
                            <div>
                                <span class="font-medium text-blue-600">Step ${step.step}:</span>
                                <span class="text-gray-800 ml-2">${step.description}</span>
                                <p class="text-sm text-gray-600 mt-1">${step.calculation}</p>
                            </div>
                            <div class="font-bold text-lg ${step.result.includes('-') ? 'text-red-600' : 'text-green-600'}">
                                ${step.result}
                            </div>
                        </div>
                    </div>
                `).join('');

                document.getElementById('calculationSteps').innerHTML = stepsHtml;
            }

            updateTimeline() {
                const data = this.results.data;
                const usagePercentage = (data.monthsUsed / data.warrantyPeriod) * 100;
                
                document.getElementById('progressBar').style.width = `${Math.min(100, usagePercentage)}%`;
                document.getElementById('cancellationMarker').style.left = `${Math.min(100, usagePercentage)}%`;
                document.getElementById('timelineUsed').textContent = `${usagePercentage.toFixed(0)}% Used`;
                document.getElementById('monthsUsedDisplay').textContent = `${data.monthsUsed.toFixed(1)} months`;
                document.getElementById('totalPeriodDisplay').textContent = `${data.warrantyPeriod} months`;
            }

            updateImportantNotes() {
                const notesHtml = this.results.notes.map(note => `
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-info-circle text-blue-500 mt-1 flex-shrink-0" aria-hidden="true"></i>
                        <p class="text-sm text-gray-700">${note}</p>
                    </div>
                `).join('');

                document.getElementById('importantNotes').innerHTML = notesHtml || 
                    '<p class="text-sm text-gray-600">Review your warranty contract for specific terms and conditions.</p>';
            }

            updateNextSteps() {
                const stepsHtml = this.results.nextSteps.map(step => `
                    <div class="flex items-start space-x-3">
                        <i class="${step.icon} text-yellow-600 mt-1 flex-shrink-0" aria-hidden="true"></i>
                        <p class="text-sm text-gray-700">${step.text}</p>
                    </div>
                `).join('');

                document.getElementById('nextSteps').innerHTML = stepsHtml;
            }

            printResults() {
                const printWindow = window.open('', '_blank');
                const printContent = `
                    <html>
                    <head>
                        <title>Warranty Refund Calculation</title>
                        <style>
                            body { font-family: Arial, sans-serif; margin: 20px; }
                            .header { text-align: center; margin-bottom: 30px; }
                            .section { margin-bottom: 20px; }
                            .highlight { background: #f3f4f6; padding: 10px; border-radius: 5px; }
                        </style>
                    </head>
                    <body>
                        <div class="header">
                            <h1>Extended Warranty Refund Calculation</h1>
                            <p>Generated on ${new Date().toLocaleDateString()}</p>
                        </div>
                        <div class="highlight">
                            <h2>Refund Summary</h2>
                            <p>Estimated Refund: $${this.results.refundAmount.toFixed(2)}</p>
                            <p>Original Cost: $${this.results.data.originalCost.toFixed(2)}</p>
                            <p>Total Fees: $${this.results.totalFees.toFixed(2)}</p>
                            <p>Refund Percentage: ${this.results.refundPercentage.toFixed(0)}%</p>
                        </div>
                        <div class="section">
                            <h3>Important Notes</h3>
                            <ul>${this.results.notes.map(note => `<li>${note}</li>`).join('')}</ul>
                        </div>
                    </body>
                    </html>
                `;
                
                printWindow.document.write(printContent);
                printWindow.document.close();
                printWindow.print();
            }

            shareResults() {
                const shareText = `My warranty refund calculation: $${this.results.refundAmount.toFixed(2)} estimated refund (${this.results.refundPercentage.toFixed(0)}%). Calculate yours: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'Warranty Refund Calculation',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Refund calculation copied to clipboard!');
                    });
                }
            }

            resetCalculator() {
                // Reset all form inputs
                const inputs = document.querySelectorAll('input, select');
                inputs.forEach(input => {
                    if (input.type === 'checkbox') {
                        input.checked = false;
                    } else if (input.type === 'date') {
                        // Keep default dates
                    } else {
                        input.value = '';
                    }
                });

                // Hide custom divs
                document.getElementById('customPeriodDiv').classList.add('hidden');
                document.getElementById('cancellationFeeAmount').classList.add('hidden');
                
                // Hide results
                document.getElementById('resultsSection').classList.add('hidden');
                
                // Clear results
                this.results = {};
                
                // Reset default dates
                this.setDefaultDates();
            }
        }

        // Initialize calculator when page loads
        document.addEventListener('DOMContentLoaded', () => {
            new WarrantyRefundCalculator();
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