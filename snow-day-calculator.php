<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snow Day Calculator 2026 - Predict Snow Day Likelihood | Thiyagi.com</title>
    <meta name="description" content="Snow day calculator 2026 - predict snow day likelihood based on weather conditions, temperature, wind speed, and location factors for accurate school closure predictions.">
    <meta name="keywords" content="snow day calculator 2026, snow day predictor, school closure calculator, snow storm calculator, weather prediction">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Snow Day Calculator 2026 - Predict Snow Day Likelihood">
    <meta property="og:description" content="Predict snow day likelihood based on weather conditions and location factors.">
    <meta property="og:url" content="https://www.thiyagi.com/snow-day-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Snow Day Calculator 2026 - Predict Snow Day Likelihood">
    <meta name="twitter:description" content="Calculate snow day probability with our advanced weather prediction calculator.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/snow-day-calculator">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    }
    .snow-card {
        transition: all 0.3s ease;
        border-left: 4px solid #3b82f6;
    }
    .snow-card:hover {
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
    .snowflake-pulse {
        animation: snowflakePulse 3s ease-in-out infinite;
    }
    @keyframes snowflakePulse {
        0%, 100% { transform: scale(1) rotate(0deg); }
        50% { transform: scale(1.1) rotate(180deg); }
    }
    .weather-option {
        background: linear-gradient(45deg, #eff6ff, #dbeafe);
        border: 1px solid #93c5fd;
    }
    .weather-option:hover {
        background: linear-gradient(45deg, #dbeafe, #bfdbfe);
    }
    .likelihood-bar {
        transition: width 1s ease-in-out;
    }
    .snow-animation {
        position: relative;
        overflow: hidden;
    }
    .snowfall::before {
        content: '❄ ❄ ❄ ❄ ❄';
        position: absolute;
        top: -20px;
        left: 0;
        width: 100%;
        animation: snowfall 8s linear infinite;
        color: rgba(255,255,255,0.7);
        font-size: 20px;
        letter-spacing: 100px;
    }
    @keyframes snowfall {
        0% { transform: translateY(-100px); }
        100% { transform: translateY(400px); }
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Snow Day Calculator 2026",
  "description": "Predict snow day likelihood based on weather conditions, temperature, wind speed, and location factors for accurate school closure predictions.",
  "url": "https://www.thiyagi.com/snow-day-calculator",
  "applicationCategory": "UtilityApplication",
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
    <header class="gradient-bg shadow-lg snow-animation">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-3 rounded-full shadow-lg">
                        <i class="fas fa-snowflake text-2xl text-blue-600 snowflake-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Snow Day Calculator</h1>
                        <p class="text-blue-100">Predict snow day likelihood with weather data</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="snowfall"></div>
    </header>

    <!-- Breadcrumb -->
    <nav class="bg-white border-b" aria-label="Breadcrumb">
        <div class="max-w-6xl mx-auto px-4 py-3">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="/" class="text-gray-500 hover:text-gray-700">Home</a></li>
                <li><i class="fas fa-chevron-right text-gray-400" aria-hidden="true"></i></li>
                <li class="text-gray-900 font-medium">Snow Day Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Snow Day Predictor</h2>
                <p class="text-blue-100">Enter weather conditions to predict snow day likelihood</p>
            </div>
            
            <div class="p-6">
                <form id="snowForm" class="space-y-6">
                    <!-- Weather Conditions -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="temperature" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-thermometer-half text-blue-500 mr-2"></i>
                                    Temperature (°F)
                                </label>
                                <input type="number" id="temperature" min="-40" max="50" value="25" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="windSpeed" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-wind text-blue-500 mr-2"></i>
                                    Wind Speed (mph)
                                </label>
                                <input type="number" id="windSpeed" min="0" max="100" value="15" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="snowDepth" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-ruler-vertical text-blue-500 mr-2"></i>
                                    Expected Snow Depth (inches)
                                </label>
                                <input type="number" id="snowDepth" min="0" max="48" step="0.5" value="4" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="snowRate" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-tachometer-alt text-blue-500 mr-2"></i>
                                    Snow Rate (inches/hour)
                                </label>
                                <input type="number" id="snowRate" min="0" max="6" step="0.1" value="1" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="region" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-map-marker-alt text-blue-500 mr-2"></i>
                                    Region/Climate Zone
                                </label>
                                <select id="region" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="northern">Northern States (Cold Climate)</option>
                                    <option value="midwest">Midwest (Variable Climate)</option>
                                    <option value="northeast">Northeast (Snow Experienced)</option>
                                    <option value="southern">Southern States (Rare Snow)</option>
                                    <option value="mountain">Mountain/High Altitude</option>
                                    <option value="coastal">Coastal Areas</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="timeOfDay" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-clock text-blue-500 mr-2"></i>
                                    Snow Event Timing
                                </label>
                                <select id="timeOfDay" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="overnight">Overnight (Most Impact)</option>
                                    <option value="early-morning">Early Morning (High Impact)</option>
                                    <option value="morning">Morning Rush Hour</option>
                                    <option value="afternoon">Afternoon</option>
                                    <option value="evening">Evening</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="roadConditions" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-road text-blue-500 mr-2"></i>
                                    Road Treatment History
                                </label>
                                <select id="roadConditions" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="excellent">Excellent (Well-maintained)</option>
                                    <option value="good">Good (Regular Treatment)</option>
                                    <option value="average">Average (Some Treatment)</option>
                                    <option value="poor">Poor (Limited Resources)</option>
                                    <option value="rural">Rural (Minimal Treatment)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="duration" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-hourglass-half text-blue-500 mr-2"></i>
                                    Storm Duration (hours)
                                </label>
                                <input type="number" id="duration" min="1" max="72" value="8" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>
                        </div>
                    </div>

                    <!-- Weather Factors -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-cloud text-blue-500 mr-2"></i>
                            Additional Weather Factors
                        </label>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="weather-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="icyConditions" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Icy Conditions</span>
                                </label>
                            </div>
                            <div class="weather-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="blizzardWarning" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Blizzard Warning</span>
                                </label>
                            </div>
                            <div class="weather-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="powerOutages" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Power Outages Expected</span>
                                </label>
                            </div>
                            <div class="weather-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="previousSnow" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Snow Already on Ground</span>
                                </label>
                            </div>
                            <div class="weather-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="extremeCold" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Extreme Cold Warning</span>
                                </label>
                            </div>
                            <div class="weather-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="schoolHistory" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">School Has History of Closures</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" onclick="calculateSnowDay()" 
                                class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white font-bold py-4 px-6 rounded-lg hover:from-blue-600 hover:to-blue-700 focus:ring-4 focus:ring-blue-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate Snow Day Likelihood
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Likelihood Display -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-percent text-blue-500 mr-3"></i>
                    Snow Day Likelihood
                </h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="snow-card bg-blue-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-blue-800 mb-2">Overall Probability</h4>
                        <p id="overallLikelihood" class="text-5xl font-bold text-blue-900">0%</p>
                        <div class="mt-4 bg-gray-200 rounded-full h-4">
                            <div id="likelihoodBar" class="likelihood-bar bg-blue-600 h-4 rounded-full" style="width: 0%"></div>
                        </div>
                    </div>
                    <div class="snow-card bg-indigo-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-indigo-800 mb-2">Confidence Level</h4>
                        <p id="confidenceLevel" class="text-3xl font-bold text-indigo-900">Medium</p>
                        <p class="text-sm text-indigo-600 mt-2">Based on data quality</p>
                    </div>
                    <div class="snow-card bg-purple-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-purple-800 mb-2">Risk Level</h4>
                        <p id="riskLevel" class="text-3xl font-bold text-purple-900">Moderate</p>
                        <p class="text-sm text-purple-600 mt-2">Safety assessment</p>
                    </div>
                </div>
            </div>

            <!-- Weather Analysis -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-cloud-snow text-blue-500 mr-3"></i>
                    Weather Analysis
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Temperature Impact:</span>
                            <span id="tempImpact" class="text-sm font-bold">High</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Wind Impact:</span>
                            <span id="windImpact" class="text-sm font-bold">Medium</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Snow Depth Impact:</span>
                            <span id="depthImpact" class="text-sm font-bold">High</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Snow Rate Impact:</span>
                            <span id="rateImpact" class="text-sm font-bold">Medium</span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Regional Factor:</span>
                            <span id="regionalFactor" class="text-sm font-bold">Moderate</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Timing Factor:</span>
                            <span id="timingFactor" class="text-sm font-bold">High</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Road Conditions:</span>
                            <span id="roadFactor" class="text-sm font-bold">Good</span>
                        </div>
                        <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                            <span class="text-sm font-medium text-gray-700">Duration Impact:</span>
                            <span id="durationImpact" class="text-sm font-bold">High</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recommendations -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-lightbulb text-blue-500 mr-3"></i>
                    Recommendations
                </h3>
                <div id="recommendations" class="space-y-4">
                    <!-- Populated by JavaScript -->
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Snow Day Prediction</h3>
                <div class="flex justify-center space-x-4">
                    <button onclick="shareOnFacebook()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i>Share on Facebook
                    </button>
                    <button onclick="shareOnTwitter()" class="bg-blue-400 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter mr-2"></i>Share on Twitter
                    </button>
                    <button onclick="copyPrediction()" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                        <i class="fas fa-copy mr-2"></i>Copy Prediction
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        class SnowDayCalculator {
            constructor() {
                this.results = null;
            }

            calculate() {
                const temperature = parseFloat(document.getElementById('temperature').value);
                const windSpeed = parseFloat(document.getElementById('windSpeed').value);
                const snowDepth = parseFloat(document.getElementById('snowDepth').value);
                const snowRate = parseFloat(document.getElementById('snowRate').value);
                const region = document.getElementById('region').value;
                const timeOfDay = document.getElementById('timeOfDay').value;
                const roadConditions = document.getElementById('roadConditions').value;
                const duration = parseFloat(document.getElementById('duration').value);

                // Weather factors checkboxes
                const icyConditions = document.getElementById('icyConditions').checked;
                const blizzardWarning = document.getElementById('blizzardWarning').checked;
                const powerOutages = document.getElementById('powerOutages').checked;
                const previousSnow = document.getElementById('previousSnow').checked;
                const extremeCold = document.getElementById('extremeCold').checked;
                const schoolHistory = document.getElementById('schoolHistory').checked;

                // Calculate individual impact scores
                const tempScore = this.calculateTemperatureImpact(temperature);
                const windScore = this.calculateWindImpact(windSpeed, temperature);
                const depthScore = this.calculateDepthImpact(snowDepth);
                const rateScore = this.calculateRateImpact(snowRate);
                const regionalScore = this.calculateRegionalFactor(region);
                const timingScore = this.calculateTimingFactor(timeOfDay);
                const roadScore = this.calculateRoadFactor(roadConditions);
                const durationScore = this.calculateDurationImpact(duration);

                // Additional factors
                let additionalScore = 0;
                if (icyConditions) additionalScore += 15;
                if (blizzardWarning) additionalScore += 25;
                if (powerOutages) additionalScore += 20;
                if (previousSnow) additionalScore += 10;
                if (extremeCold) additionalScore += 15;
                if (schoolHistory) additionalScore += 10;

                // Calculate overall likelihood
                const baseScore = (tempScore + windScore + depthScore + rateScore + 
                                 regionalScore + timingScore + roadScore + durationScore) / 8;
                const finalScore = Math.min(100, Math.max(0, baseScore + additionalScore));

                // Determine confidence and risk levels
                const confidenceLevel = this.calculateConfidence(finalScore, temperature, snowDepth);
                const riskLevel = this.calculateRisk(finalScore, windScore, icyConditions);

                this.results = {
                    temperature,
                    windSpeed,
                    snowDepth,
                    snowRate,
                    region,
                    timeOfDay,
                    roadConditions,
                    duration,
                    overallLikelihood: Math.round(finalScore),
                    confidenceLevel,
                    riskLevel,
                    factors: {
                        tempImpact: this.getImpactLevel(tempScore),
                        windImpact: this.getImpactLevel(windScore),
                        depthImpact: this.getImpactLevel(depthScore),
                        rateImpact: this.getImpactLevel(rateScore),
                        regionalFactor: this.getRegionalDescription(regionalScore),
                        timingFactor: this.getTimingDescription(timingScore),
                        roadFactor: this.getRoadDescription(roadScore),
                        durationImpact: this.getImpactLevel(durationScore)
                    },
                    additionalFactors: {
                        icyConditions,
                        blizzardWarning,
                        powerOutages,
                        previousSnow,
                        extremeCold,
                        schoolHistory
                    }
                };

                this.displayResults();
            }

            calculateTemperatureImpact(temp) {
                if (temp <= 10) return 90;
                if (temp <= 20) return 80;
                if (temp <= 25) return 70;
                if (temp <= 32) return 60;
                if (temp <= 35) return 40;
                return 20;
            }

            calculateWindImpact(wind, temp) {
                const windChill = temp - (wind * 0.7);
                if (wind >= 35 || windChill <= 0) return 85;
                if (wind >= 25 || windChill <= 10) return 70;
                if (wind >= 15) return 50;
                return 30;
            }

            calculateDepthImpact(depth) {
                if (depth >= 12) return 95;
                if (depth >= 8) return 85;
                if (depth >= 6) return 75;
                if (depth >= 4) return 65;
                if (depth >= 2) return 45;
                if (depth >= 1) return 25;
                return 10;
            }

            calculateRateImpact(rate) {
                if (rate >= 3) return 90;
                if (rate >= 2) return 75;
                if (rate >= 1.5) return 60;
                if (rate >= 1) return 45;
                if (rate >= 0.5) return 25;
                return 10;
            }

            calculateRegionalFactor(region) {
                const factors = {
                    northern: 90,
                    northeast: 85,
                    midwest: 80,
                    mountain: 85,
                    coastal: 60,
                    southern: 30
                };
                return factors[region] || 50;
            }

            calculateTimingFactor(timing) {
                const factors = {
                    overnight: 90,
                    'early-morning': 85,
                    morning: 75,
                    afternoon: 60,
                    evening: 65
                };
                return factors[timing] || 50;
            }

            calculateRoadFactor(road) {
                const factors = {
                    excellent: 30,
                    good: 50,
                    average: 70,
                    poor: 85,
                    rural: 90
                };
                return factors[road] || 50;
            }

            calculateDurationImpact(duration) {
                if (duration >= 24) return 95;
                if (duration >= 12) return 85;
                if (duration >= 8) return 70;
                if (duration >= 6) return 60;
                if (duration >= 4) return 45;
                return 30;
            }

            calculateConfidence(likelihood, temp, depth) {
                if ((temp <= 25 && depth >= 4) || likelihood >= 80) return 'High';
                if ((temp <= 32 && depth >= 2) || likelihood >= 50) return 'Medium';
                return 'Low';
            }

            calculateRisk(likelihood, windScore, icy) {
                if (likelihood >= 80 || windScore >= 80 || icy) return 'High';
                if (likelihood >= 50 || windScore >= 50) return 'Moderate';
                return 'Low';
            }

            getImpactLevel(score) {
                if (score >= 80) return 'Very High';
                if (score >= 60) return 'High';
                if (score >= 40) return 'Medium';
                if (score >= 20) return 'Low';
                return 'Very Low';
            }

            getRegionalDescription(score) {
                if (score >= 80) return 'High Snow Tolerance';
                if (score >= 60) return 'Moderate Tolerance';
                return 'Low Snow Tolerance';
            }

            getTimingDescription(score) {
                if (score >= 80) return 'Peak Impact Time';
                if (score >= 60) return 'High Impact Time';
                return 'Moderate Impact Time';
            }

            getRoadDescription(score) {
                if (score >= 80) return 'Poor Maintenance';
                if (score >= 60) return 'Average Maintenance';
                return 'Good Maintenance';
            }

            displayResults() {
                // Main likelihood display
                document.getElementById('overallLikelihood').textContent = `${this.results.overallLikelihood}%`;
                document.getElementById('likelihoodBar').style.width = `${this.results.overallLikelihood}%`;
                document.getElementById('confidenceLevel').textContent = this.results.confidenceLevel;
                document.getElementById('riskLevel').textContent = this.results.riskLevel;

                // Weather analysis
                document.getElementById('tempImpact').textContent = this.results.factors.tempImpact;
                document.getElementById('windImpact').textContent = this.results.factors.windImpact;
                document.getElementById('depthImpact').textContent = this.results.factors.depthImpact;
                document.getElementById('rateImpact').textContent = this.results.factors.rateImpact;
                document.getElementById('regionalFactor').textContent = this.results.factors.regionalFactor;
                document.getElementById('timingFactor').textContent = this.results.factors.timingFactor;
                document.getElementById('roadFactor').textContent = this.results.factors.roadFactor;
                document.getElementById('durationImpact').textContent = this.results.factors.durationImpact;

                // Recommendations
                const recommendations = this.generateRecommendations();
                const recDiv = document.getElementById('recommendations');
                recDiv.innerHTML = recommendations.map(rec => `
                    <div class="flex items-start space-x-3 p-4 bg-blue-50 rounded-lg">
                        <i class="fas ${rec.icon} text-blue-500 mt-1"></i>
                        <div>
                            <h4 class="font-semibold text-gray-800">${rec.title}</h4>
                            <p class="text-gray-600 text-sm">${rec.description}</p>
                        </div>
                    </div>
                `).join('');

                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            generateRecommendations() {
                const recommendations = [];
                const likelihood = this.results.overallLikelihood;

                if (likelihood >= 80) {
                    recommendations.push({
                        icon: 'fa-exclamation-triangle',
                        title: 'High Probability Snow Day',
                        description: 'Schools are very likely to close. Prepare for transportation disruptions.'
                    });
                } else if (likelihood >= 50) {
                    recommendations.push({
                        icon: 'fa-clock',
                        title: 'Moderate Probability',
                        description: 'Monitor weather updates closely. School closures are possible.'
                    });
                } else {
                    recommendations.push({
                        icon: 'fa-check-circle',
                        title: 'Low Probability',
                        description: 'Schools likely to remain open, but monitor conditions.'
                    });
                }

                if (this.results.riskLevel === 'High') {
                    recommendations.push({
                        icon: 'fa-shield-alt',
                        title: 'Safety Precautions',
                        description: 'Avoid unnecessary travel. Stock emergency supplies.'
                    });
                }

                recommendations.push({
                    icon: 'fa-mobile-alt',
                    title: 'Stay Informed',
                    description: 'Check local school district announcements and weather updates regularly.'
                });

                return recommendations;
            }

            getPredictionText() {
                return `Snow Day Prediction: ${this.results.overallLikelihood}% likelihood (${this.results.confidenceLevel} confidence)`;
            }
        }

        const snowCalc = new SnowDayCalculator();

        function calculateSnowDay() {
            snowCalc.calculate();
        }

        function shareOnFacebook() {
            if (!snowCalc.results) return;
            
            const text = `${snowCalc.getPredictionText()}. Check your snow day odds at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!snowCalc.results) return;
            
            const text = `${snowCalc.getPredictionText()} ❄️ Check yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyPrediction() {
            if (!snowCalc.results) return;
            
            const text = `Snow Day Prediction Results:
${snowCalc.getPredictionText()}
Risk Level: ${snowCalc.results.riskLevel}
Temperature: ${snowCalc.results.temperature}°F
Expected Snow: ${snowCalc.results.snowDepth} inches

Calculate at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Prediction copied to clipboard!');
            });
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>