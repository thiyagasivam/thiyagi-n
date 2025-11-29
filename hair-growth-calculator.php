<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hair Growth Calculator 2025 - Estimate Hair Length & Growth Timeline | Thiyagi.com</title>
    <meta name="description" content="Hair growth calculator 2025 - estimate how long it takes to grow hair to desired length. Calculate hair growth timeline with personalized factors and styling tips.">
    <meta name="keywords" content="hair growth calculator 2025, hair length calculator, how fast does hair grow, hair growth timeline, hair length estimator">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Hair Growth Calculator 2025 - Estimate Hair Length & Growth Timeline">
    <meta property="og:description" content="Calculate how long it takes to grow hair to your desired length with personalized growth factors and timeline.">
    <meta property="og:url" content="https://www.thiyagi.com/hair-growth-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hair Growth Calculator 2025 - Estimate Hair Length & Growth Timeline">
    <meta name="twitter:description" content="Calculate your hair growth timeline and estimate length progression.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/hair-growth-calculator">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #ec4899 0%, #be185d 100%);
    }
    .hair-card {
        transition: all 0.3s ease;
        border-left: 4px solid #ec4899;
    }
    .hair-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #be185d;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .hair-wave {
        animation: hairWave 3s ease-in-out infinite;
    }
    @keyframes hairWave {
        0%, 100% { transform: scaleY(1); }
        50% { transform: scaleY(1.1); }
    }
    .length-short { border-left-color: #10b981; background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%); }
    .length-medium { border-left-color: #3b82f6; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); }
    .length-long { border-left-color: #8b5cf6; background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%); }
    .length-verylong { border-left-color: #f59e0b; background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%); }
    .growth-phase {
        position: relative;
        overflow: hidden;
    }
    .growth-phase::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        animation: shimmer 2s infinite;
    }
    @keyframes shimmer {
        0% { left: -100%; }
        100% { left: 100%; }
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Hair Growth Calculator 2025",
  "description": "Calculate hair growth timeline and estimate how long it takes to grow hair to desired length based on personal factors, hair type, and growth rate.",
  "url": "https://www.thiyagi.com/hair-growth-calculator",
  "applicationCategory": "HealthApplication",
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
                        <i class="fas fa-cut text-2xl text-pink-600 hair-wave" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Hair Growth Calculator</h1>
                        <p class="text-pink-100">Estimate your hair growth timeline and length goals</p>
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
                <li class="text-gray-900 font-medium">Hair Growth Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-pink-100 rounded-full mb-4">
                    <i class="fas fa-ruler text-2xl text-pink-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Hair Growth Calculator</h2>
                <p class="text-gray-600">Calculate how long it takes to grow your hair to the desired length</p>
            </div>

            <!-- Input Form -->
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Current Status -->
                <div class="bg-pink-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-pink-800 mb-4 flex items-center">
                        <i class="fas fa-user mr-2" aria-hidden="true"></i>
                        Current Hair Status
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="currentLength" class="block text-sm font-medium text-gray-700 mb-2">Current Hair Length</label>
                            <select id="currentLength" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                                <option value="">Select current length...</option>
                                <option value="0.5">Buzzed/Very Short (0.5 inches)</option>
                                <option value="1">Short (1 inch)</option>
                                <option value="2">Pixie Cut (2 inches)</option>
                                <option value="4">Bob/Short Bob (4 inches)</option>
                                <option value="6">Chin Length (6 inches)</option>
                                <option value="8">Shoulder Length (8 inches)</option>
                                <option value="12">Mid-Back (12 inches)</option>
                                <option value="16">Waist Length (16 inches)</option>
                                <option value="20">Hip Length (20 inches)</option>
                                <option value="custom">Custom Length</option>
                            </select>
                        </div>

                        <div id="customLengthDiv" class="hidden">
                            <label for="customCurrentLength" class="block text-sm font-medium text-gray-700 mb-2">Custom Current Length (inches)</label>
                            <input type="number" id="customCurrentLength" min="0" max="36" step="0.5" placeholder="8.5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="goalLength" class="block text-sm font-medium text-gray-700 mb-2">Goal Hair Length</label>
                            <select id="goalLength" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                                <option value="">Select goal length...</option>
                                <option value="2">Pixie Cut (2 inches)</option>
                                <option value="4">Bob/Short Bob (4 inches)</option>
                                <option value="6">Chin Length (6 inches)</option>
                                <option value="8">Shoulder Length (8 inches)</option>
                                <option value="12">Mid-Back (12 inches)</option>
                                <option value="16">Waist Length (16 inches)</option>
                                <option value="20">Hip Length (20 inches)</option>
                                <option value="24">Tailbone Length (24 inches)</option>
                                <option value="30">Floor Length (30 inches)</option>
                                <option value="custom-goal">Custom Length</option>
                            </select>
                        </div>

                        <div id="customGoalDiv" class="hidden">
                            <label for="customGoalLength" class="block text-sm font-medium text-gray-700 mb-2">Custom Goal Length (inches)</label>
                            <input type="number" id="customGoalLength" min="0" max="48" step="0.5" placeholder="14" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                        </div>
                    </div>
                </div>

                <!-- Personal Factors -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="age" class="block text-sm font-medium text-gray-700 mb-2">Age Range</label>
                        <select id="age" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                            <option value="">Select age range...</option>
                            <option value="teen">Teen (13-19)</option>
                            <option value="young">Young Adult (20-29)</option>
                            <option value="adult">Adult (30-39)</option>
                            <option value="middle">Middle Age (40-49)</option>
                            <option value="mature">Mature (50+)</option>
                        </select>
                    </div>

                    <div>
                        <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                        <select id="gender" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                            <option value="">Select gender...</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other/Prefer not to say</option>
                        </select>
                    </div>
                </div>

                <!-- Hair Characteristics -->
                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                        <i class="fas fa-dna mr-2" aria-hidden="true"></i>
                        Hair Characteristics
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="hairType" class="block text-sm font-medium text-gray-700 mb-2">Hair Type</label>
                            <select id="hairType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select hair type...</option>
                                <option value="straight">Straight (Type 1)</option>
                                <option value="wavy">Wavy (Type 2)</option>
                                <option value="curly">Curly (Type 3)</option>
                                <option value="coily">Coily/Kinky (Type 4)</option>
                            </select>
                        </div>

                        <div>
                            <label for="hairThickness" class="block text-sm font-medium text-gray-700 mb-2">Hair Thickness</label>
                            <select id="hairThickness" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Select thickness...</option>
                                <option value="fine">Fine/Thin</option>
                                <option value="medium">Medium</option>
                                <option value="thick">Thick/Coarse</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Health & Lifestyle -->
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="healthStatus" class="block text-sm font-medium text-gray-700 mb-2">Overall Health</label>
                        <select id="healthStatus" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                            <option value="">Select health status...</option>
                            <option value="excellent">Excellent</option>
                            <option value="good">Good</option>
                            <option value="fair">Fair</option>
                            <option value="poor">Poor</option>
                        </select>
                    </div>

                    <div>
                        <label for="stressLevel" class="block text-sm font-medium text-gray-700 mb-2">Stress Level</label>
                        <select id="stressLevel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                            <option value="">Select stress level...</option>
                            <option value="low">Low</option>
                            <option value="moderate">Moderate</option>
                            <option value="high">High</option>
                            <option value="severe">Severe</option>
                        </select>
                    </div>
                </div>

                <!-- Hair Care Routine -->
                <div class="bg-green-50 p-6 rounded-lg">
                    <h4 class="font-medium text-green-800 mb-3 flex items-center">
                        <i class="fas fa-spa mr-2" aria-hidden="true"></i>
                        Hair Care & Lifestyle Factors
                    </h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                        <label class="flex items-center">
                            <input type="checkbox" id="goodNutrition" class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">Good Nutrition</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="takesSupplements" class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">Hair Vitamins</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="regularTrims" class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">Regular Trims</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="heatStyling" class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">Frequent Heat</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="chemicalTreatments" class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">Chemical Treatments</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="protectiveStyles" class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">Protective Styling</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="scalpMassage" class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">Scalp Massage</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" id="smoking" class="mr-2 text-green-600 focus:ring-green-500">
                            <span class="text-sm">Smoking</span>
                        </label>
                    </div>
                </div>

                <!-- Calculate Button -->
                <div class="text-center">
                    <button id="calculateBtn" class="bg-pink-600 hover:bg-pink-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>
                        Calculate Hair Growth Timeline
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-pink-50 to-purple-50 border-2 border-pink-200 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-chart-line mr-2 text-pink-600" aria-hidden="true"></i>
                        Your Hair Growth Timeline
                    </h3>
                    
                    <!-- Main Results -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div class="hair-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-pink-600 mb-2" id="timeToGoal">12 months</div>
                            <div class="text-sm text-gray-600">Time to Goal</div>
                        </div>
                        <div class="hair-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-2" id="growthNeeded">6 inches</div>
                            <div class="text-sm text-gray-600">Growth Needed</div>
                        </div>
                        <div class="hair-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-green-600 mb-2" id="growthRate">0.5 in/mo</div>
                            <div class="text-sm text-gray-600">Your Growth Rate</div>
                        </div>
                        <div class="hair-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-purple-600 mb-2" id="healthScore">85%</div>
                            <div class="text-sm text-gray-600">Hair Health Score</div>
                        </div>
                    </div>

                    <!-- Growth Phases Timeline -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-calendar-alt mr-2 text-indigo-500" aria-hidden="true"></i>
                            Growth Milestones
                        </h4>
                        <div id="growthTimeline" class="space-y-3">
                            <!-- Timeline will be populated by JS -->
                        </div>
                    </div>

                    <!-- Recommendations -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-lightbulb mr-2 text-yellow-500" aria-hidden="true"></i>
                                Growth Boosting Tips
                            </h4>
                            <div id="growthTips" class="space-y-3">
                                <!-- Tips will be populated by JS -->
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-exclamation-triangle mr-2 text-red-500" aria-hidden="true"></i>
                                Things to Avoid
                            </h4>
                            <div id="avoidTips" class="space-y-3">
                                <!-- Avoid tips will be populated by JS -->
                            </div>
                        </div>
                    </div>

                    <!-- Monthly Progress Chart -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-bar mr-2 text-green-500" aria-hidden="true"></i>
                            Expected Monthly Progress
                        </h4>
                        <div id="monthlyChart" class="space-y-2">
                            <!-- Chart will be populated by JS -->
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center">
                        <button id="shareBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share Timeline
                        </button>
                        <button id="saveBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-bookmark mr-2" aria-hidden="true"></i>
                            Save Plan
                        </button>
                        <button id="resetBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-refresh mr-2" aria-hidden="true"></i>
                            New Calculation
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Information Sections -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Hair Growth Science -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-microscope mr-3 text-blue-500" aria-hidden="true"></i>
                    Hair Growth Science
                </h2>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-blue-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Average Growth Rate</h3>
                        <p class="text-gray-600">Hair grows approximately 0.5 inches (1.27 cm) per month or 6 inches per year on average.</p>
                    </div>
                    
                    <div class="border-l-4 border-green-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Growth Phases</h3>
                        <p class="text-gray-600">Hair goes through anagen (growth), catagen (transition), and telogen (resting) phases.</p>
                    </div>
                    
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Individual Variation</h3>
                        <p class="text-gray-600">Growth rate varies based on genetics, age, health, and lifestyle factors.</p>
                    </div>
                </div>
            </section>

            <!-- Factors Affecting Growth -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-leaf mr-3 text-green-500" aria-hidden="true"></i>
                    Growth Factors
                </h2>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-dna text-blue-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Genetics</h3>
                            <p class="text-gray-600 text-sm">Your genetic makeup determines maximum growth potential and hair characteristics.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-apple-alt text-green-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Nutrition</h3>
                            <p class="text-gray-600 text-sm">Proper nutrition with proteins, vitamins, and minerals supports healthy growth.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-birthday-cake text-orange-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Age</h3>
                            <p class="text-gray-600 text-sm">Hair growth slows with age due to hormonal changes and decreased circulation.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-heartbeat text-red-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Health</h3>
                            <p class="text-gray-600 text-sm">Overall health, stress levels, and medical conditions affect growth rate.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-spa text-purple-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Hair Care</h3>
                            <p class="text-gray-600 text-sm">Proper care, minimal damage, and scalp health promote optimal growth.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Hair Length Guide -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-ruler-vertical mr-3 text-pink-600" aria-hidden="true"></i>
                Hair Length Reference Guide
            </h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="hair-card length-short p-4 rounded-lg">
                    <h3 class="font-semibold text-green-800 mb-2">Short Lengths</h3>
                    <ul class="text-sm text-green-700 space-y-1">
                        <li>Pixie: 2 inches</li>
                        <li>Bob: 4 inches</li>
                        <li>Chin: 6 inches</li>
                    </ul>
                </div>

                <div class="hair-card length-medium p-4 rounded-lg">
                    <h3 class="font-semibold text-blue-800 mb-2">Medium Lengths</h3>
                    <ul class="text-sm text-blue-700 space-y-1">
                        <li>Shoulder: 8 inches</li>
                        <li>Armpit: 10 inches</li>
                        <li>Mid-back: 12 inches</li>
                    </ul>
                </div>

                <div class="hair-card length-long p-4 rounded-lg">
                    <h3 class="font-semibold text-purple-800 mb-2">Long Lengths</h3>
                    <ul class="text-sm text-purple-700 space-y-1">
                        <li>Waist: 16 inches</li>
                        <li>Hip: 20 inches</li>
                        <li>Tailbone: 24 inches</li>
                    </ul>
                </div>

                <div class="hair-card length-verylong p-4 rounded-lg">
                    <h3 class="font-semibold text-amber-800 mb-2">Very Long</h3>
                    <ul class="text-sm text-amber-700 space-y-1">
                        <li>Thigh: 28 inches</li>
                        <li>Knee: 32 inches</li>
                        <li>Floor: 36+ inches</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class HairGrowthCalculator {
            constructor() {
                this.baseGrowthRate = 0.5; // inches per month
                this.results = {};
                this.init();
            }

            init() {
                this.bindEvents();
            }

            bindEvents() {
                document.getElementById('currentLength').addEventListener('change', () => this.toggleCustomLength());
                document.getElementById('goalLength').addEventListener('change', () => this.toggleCustomGoal());
                document.getElementById('calculateBtn').addEventListener('click', () => this.calculateGrowth());
                document.getElementById('shareBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('saveBtn')?.addEventListener('click', () => this.savePlan());
                document.getElementById('resetBtn')?.addEventListener('click', () => this.resetCalculator());
            }

            toggleCustomLength() {
                const select = document.getElementById('currentLength');
                const customDiv = document.getElementById('customLengthDiv');
                
                if (select.value === 'custom') {
                    customDiv.classList.remove('hidden');
                } else {
                    customDiv.classList.add('hidden');
                }
            }

            toggleCustomGoal() {
                const select = document.getElementById('goalLength');
                const customDiv = document.getElementById('customGoalDiv');
                
                if (select.value === 'custom-goal') {
                    customDiv.classList.remove('hidden');
                } else {
                    customDiv.classList.add('hidden');
                }
            }

            calculateGrowth() {
                if (!this.validateInputs()) {
                    return;
                }

                const profileData = this.collectProfileData();
                const adjustedGrowthRate = this.calculateAdjustedGrowthRate(profileData);
                
                this.results = this.generateResults(profileData, adjustedGrowthRate);
                this.displayResults();
            }

            validateInputs() {
                const requiredFields = [
                    'currentLength', 'goalLength', 'age', 'gender', 
                    'hairType', 'hairThickness', 'healthStatus', 'stressLevel'
                ];

                for (const field of requiredFields) {
                    const value = document.getElementById(field).value;
                    if (!value || value === '') {
                        alert('Please fill in all required fields to calculate your hair growth timeline.');
                        return false;
                    }
                }

                const currentLength = this.getCurrentLength();
                const goalLength = this.getGoalLength();

                if (goalLength <= currentLength) {
                    alert('Your goal length must be longer than your current length.');
                    return false;
                }

                return true;
            }

            getCurrentLength() {
                const select = document.getElementById('currentLength');
                if (select.value === 'custom') {
                    return parseFloat(document.getElementById('customCurrentLength').value) || 0;
                }
                return parseFloat(select.value) || 0;
            }

            getGoalLength() {
                const select = document.getElementById('goalLength');
                if (select.value === 'custom-goal') {
                    return parseFloat(document.getElementById('customGoalLength').value) || 0;
                }
                return parseFloat(select.value) || 0;
            }

            collectProfileData() {
                return {
                    currentLength: this.getCurrentLength(),
                    goalLength: this.getGoalLength(),
                    age: document.getElementById('age').value,
                    gender: document.getElementById('gender').value,
                    hairType: document.getElementById('hairType').value,
                    hairThickness: document.getElementById('hairThickness').value,
                    healthStatus: document.getElementById('healthStatus').value,
                    stressLevel: document.getElementById('stressLevel').value,
                    goodNutrition: document.getElementById('goodNutrition').checked,
                    takesSupplements: document.getElementById('takesSupplements').checked,
                    regularTrims: document.getElementById('regularTrims').checked,
                    heatStyling: document.getElementById('heatStyling').checked,
                    chemicalTreatments: document.getElementById('chemicalTreatments').checked,
                    protectiveStyles: document.getElementById('protectiveStyles').checked,
                    scalpMassage: document.getElementById('scalpMassage').checked,
                    smoking: document.getElementById('smoking').checked
                };
            }

            calculateAdjustedGrowthRate(profile) {
                let rate = this.baseGrowthRate;

                // Age adjustments
                const ageFactors = {
                    teen: 1.1, young: 1.0, adult: 0.95, middle: 0.9, mature: 0.8
                };
                rate *= ageFactors[profile.age] || 1.0;

                // Gender adjustments (slight differences)
                if (profile.gender === 'male') rate *= 1.05;

                // Hair type adjustments
                const hairTypeFactors = {
                    straight: 1.0, wavy: 0.95, curly: 0.9, coily: 0.85
                };
                rate *= hairTypeFactors[profile.hairType] || 1.0;

                // Health adjustments
                const healthFactors = {
                    excellent: 1.1, good: 1.0, fair: 0.9, poor: 0.8
                };
                rate *= healthFactors[profile.healthStatus] || 1.0;

                // Stress adjustments
                const stressFactors = {
                    low: 1.05, moderate: 1.0, high: 0.9, severe: 0.8
                };
                rate *= stressFactors[profile.stressLevel] || 1.0;

                // Lifestyle adjustments
                if (profile.goodNutrition) rate *= 1.1;
                if (profile.takesSupplements) rate *= 1.05;
                if (profile.scalpMassage) rate *= 1.03;
                if (profile.protectiveStyles) rate *= 1.02;
                if (profile.heatStyling) rate *= 0.95;
                if (profile.chemicalTreatments) rate *= 0.9;
                if (profile.smoking) rate *= 0.85;
                if (profile.regularTrims) rate *= 0.98; // Slight reduction due to trimming

                return Math.max(0.2, Math.min(0.8, rate)); // Reasonable bounds
            }

            generateResults(profile, growthRate) {
                const growthNeeded = profile.goalLength - profile.currentLength;
                const timeToGoal = Math.ceil(growthNeeded / growthRate);
                const healthScore = this.calculateHealthScore(profile);
                
                return {
                    profile,
                    growthRate,
                    growthNeeded,
                    timeToGoal,
                    healthScore,
                    milestones: this.generateMilestones(profile, growthRate),
                    tips: this.generateTips(profile),
                    avoidTips: this.generateAvoidTips(profile),
                    monthlyProgress: this.generateMonthlyProgress(profile, growthRate)
                };
            }

            calculateHealthScore(profile) {
                let score = 70; // Base score

                // Health factors
                const healthScores = {
                    excellent: 20, good: 10, fair: 0, poor: -20
                };
                score += healthScores[profile.healthStatus] || 0;

                // Stress impact
                const stressScores = {
                    low: 10, moderate: 0, high: -10, severe: -20
                };
                score += stressScores[profile.stressLevel] || 0;

                // Positive factors
                if (profile.goodNutrition) score += 10;
                if (profile.takesSupplements) score += 5;
                if (profile.scalpMassage) score += 5;
                if (profile.protectiveStyles) score += 5;

                // Negative factors
                if (profile.heatStyling) score -= 10;
                if (profile.chemicalTreatments) score -= 15;
                if (profile.smoking) score -= 15;

                return Math.max(0, Math.min(100, score));
            }

            generateMilestones(profile, growthRate) {
                const milestones = [];
                const totalMonths = Math.ceil((profile.goalLength - profile.currentLength) / growthRate);
                const currentLength = profile.currentLength;

                for (let month = 3; month <= totalMonths; month += 3) {
                    const expectedLength = currentLength + (growthRate * month);
                    const lengthDescription = this.getLengthDescription(expectedLength);
                    
                    milestones.push({
                        month,
                        length: expectedLength.toFixed(1),
                        description: lengthDescription,
                        isGoal: month >= totalMonths
                    });
                }

                return milestones;
            }

            getLengthDescription(inches) {
                if (inches <= 2) return 'Pixie length';
                if (inches <= 4) return 'Bob length';
                if (inches <= 6) return 'Chin length';
                if (inches <= 8) return 'Shoulder length';
                if (inches <= 12) return 'Mid-back length';
                if (inches <= 16) return 'Waist length';
                if (inches <= 20) return 'Hip length';
                if (inches <= 24) return 'Tailbone length';
                return 'Very long hair';
            }

            generateTips(profile) {
                const tips = [];

                if (profile.healthScore < 60) {
                    tips.push({
                        icon: 'fas fa-heartbeat',
                        text: 'Focus on improving overall health through better nutrition and stress management.'
                    });
                }

                if (!profile.goodNutrition) {
                    tips.push({
                        icon: 'fas fa-apple-alt',
                        text: 'Eat a balanced diet rich in proteins, biotin, iron, and vitamins A, C, and E.'
                    });
                }

                if (!profile.scalpMassage) {
                    tips.push({
                        icon: 'fas fa-hand-sparkles',
                        text: 'Regular scalp massage can improve circulation and stimulate hair growth.'
                    });
                }

                if (profile.stressLevel === 'high' || profile.stressLevel === 'severe') {
                    tips.push({
                        icon: 'fas fa-meditation',
                        text: 'Practice stress-reduction techniques like meditation or yoga.'
                    });
                }

                if (!profile.takesSupplements) {
                    tips.push({
                        icon: 'fas fa-pills',
                        text: 'Consider hair-specific vitamins containing biotin, keratin, and collagen.'
                    });
                }

                tips.push({
                    icon: 'fas fa-bed',
                    text: 'Get 7-9 hours of quality sleep to support healthy hair growth.'
                });

                return tips;
            }

            generateAvoidTips(profile) {
                const avoidTips = [];

                if (profile.heatStyling) {
                    avoidTips.push({
                        icon: 'fas fa-fire',
                        text: 'Limit heat styling and always use heat protectant products.'
                    });
                }

                if (profile.chemicalTreatments) {
                    avoidTips.push({
                        icon: 'fas fa-flask',
                        text: 'Space out chemical treatments and use deep conditioning regularly.'
                    });
                }

                avoidTips.push({
                    icon: 'fas fa-cut',
                    text: 'Avoid tight hairstyles that cause tension and breakage.'
                });

                avoidTips.push({
                    icon: 'fas fa-shower',
                    text: 'Don\'t wash hair daily - 2-3 times per week is usually sufficient.'
                });

                if (profile.smoking) {
                    avoidTips.push({
                        icon: 'fas fa-smoking-ban',
                        text: 'Smoking reduces circulation to hair follicles and slows growth.'
                    });
                }

                return avoidTips;
            }

            generateMonthlyProgress(profile, growthRate) {
                const progress = [];
                const months = Math.min(12, this.results.timeToGoal);

                for (let month = 1; month <= months; month++) {
                    const expectedLength = profile.currentLength + (growthRate * month);
                    const progressPercentage = ((expectedLength - profile.currentLength) / 
                        (profile.goalLength - profile.currentLength)) * 100;

                    progress.push({
                        month,
                        length: expectedLength.toFixed(1),
                        percentage: Math.min(100, progressPercentage.toFixed(1))
                    });
                }

                return progress;
            }

            displayResults() {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update main stats
                document.getElementById('timeToGoal').textContent = this.results.timeToGoal + ' months';
                document.getElementById('growthNeeded').textContent = this.results.growthNeeded.toFixed(1) + ' inches';
                document.getElementById('growthRate').textContent = this.results.growthRate.toFixed(2) + ' in/mo';
                document.getElementById('healthScore').textContent = this.results.healthScore + '%';

                // Update sections
                this.updateGrowthTimeline();
                this.updateGrowthTips();
                this.updateAvoidTips();
                this.updateMonthlyChart();

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            updateGrowthTimeline() {
                const timelineHtml = this.results.milestones.map(milestone => {
                    const badgeColor = milestone.isGoal ? 'bg-pink-600 text-white' : 'bg-blue-100 text-blue-800';
                    const iconClass = milestone.isGoal ? 'fas fa-flag-checkered' : 'fas fa-calendar-check';
                    
                    return `
                        <div class="flex items-center space-x-4 p-3 bg-gray-50 rounded-lg growth-phase">
                            <div class="flex-shrink-0">
                                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full ${badgeColor}">
                                    <i class="${iconClass} text-sm" aria-hidden="true"></i>
                                </span>
                            </div>
                            <div class="flex-grow">
                                <p class="text-sm font-medium text-gray-900">Month ${milestone.month}</p>
                                <p class="text-sm text-gray-500">${milestone.length}" - ${milestone.description}</p>
                            </div>
                            ${milestone.isGoal ? '<div class="text-pink-600 font-bold text-sm">GOAL!</div>' : ''}
                        </div>
                    `;
                }).join('');

                document.getElementById('growthTimeline').innerHTML = timelineHtml;
            }

            updateGrowthTips() {
                const tipsHtml = this.results.tips.map(tip => `
                    <div class="flex items-start space-x-3">
                        <i class="${tip.icon} text-green-600 mt-1" aria-hidden="true"></i>
                        <p class="text-sm text-gray-700">${tip.text}</p>
                    </div>
                `).join('');

                document.getElementById('growthTips').innerHTML = tipsHtml;
            }

            updateAvoidTips() {
                const avoidHtml = this.results.avoidTips.map(tip => `
                    <div class="flex items-start space-x-3">
                        <i class="${tip.icon} text-red-600 mt-1" aria-hidden="true"></i>
                        <p class="text-sm text-gray-700">${tip.text}</p>
                    </div>
                `).join('');

                document.getElementById('avoidTips').innerHTML = avoidHtml;
            }

            updateMonthlyChart() {
                const chartHtml = this.results.monthlyProgress.map(month => `
                    <div class="flex items-center justify-between p-2 bg-gray-50 rounded">
                        <span class="text-sm font-medium">Month ${month.month}</span>
                        <span class="text-sm text-gray-600">${month.length}"</span>
                        <div class="flex-grow mx-4 bg-gray-200 rounded-full h-2">
                            <div class="bg-gradient-to-r from-pink-500 to-purple-600 h-2 rounded-full" style="width: ${month.percentage}%"></div>
                        </div>
                        <span class="text-sm font-bold text-pink-600">${month.percentage}%</span>
                    </div>
                `).join('');

                document.getElementById('monthlyChart').innerHTML = chartHtml;
            }

            shareResults() {
                const timeToGoal = this.results.timeToGoal;
                const growthNeeded = this.results.growthNeeded.toFixed(1);
                const healthScore = this.results.healthScore;

                const shareText = `My hair growth plan: ${timeToGoal} months to grow ${growthNeeded} inches! Hair health score: ${healthScore}%. Calculate yours: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'My Hair Growth Timeline',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Hair growth timeline copied to clipboard!');
                    });
                }
            }

            savePlan() {
                const planData = {
                    profile: this.results.profile,
                    timeline: this.results,
                    generatedDate: new Date().toISOString()
                };
                
                const blob = new Blob([JSON.stringify(planData, null, 2)], { type: 'application/json' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'hair_growth_plan.json';
                a.click();
                URL.revokeObjectURL(url);
            }

            resetCalculator() {
                // Reset all form inputs
                const inputs = document.querySelectorAll('input, select');
                inputs.forEach(input => {
                    if (input.type === 'checkbox') {
                        input.checked = false;
                    } else {
                        input.value = '';
                    }
                });

                // Hide custom divs
                document.getElementById('customLengthDiv').classList.add('hidden');
                document.getElementById('customGoalDiv').classList.add('hidden');
                
                // Hide results
                document.getElementById('resultsSection').classList.add('hidden');
                
                // Clear results
                this.results = {};
            }
        }

        // Initialize calculator when page loads
        document.addEventListener('DOMContentLoaded', () => {
            new HairGrowthCalculator();
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