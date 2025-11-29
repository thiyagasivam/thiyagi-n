<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Losertown Weight Loss Calculator 2025 - Metabolic Adaptation Predictor | Thiyagi.com</title>
    <meta name="description" content="Losertown weight loss calculator 2025 - predict weight loss timeline with metabolic adaptation, plateau effects, and realistic projections based on scientific research.">
    <meta name="keywords" content="losertown calculator 2025, weight loss prediction, metabolic adaptation, weight loss timeline, plateau calculator, diet prediction">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Losertown Weight Loss Calculator 2025 - Metabolic Adaptation Predictor">
    <meta property="og:description" content="Predict realistic weight loss timeline with metabolic adaptation and plateau effects.">
    <meta property="og:url" content="https://www.thiyagi.com/losertown-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Losertown Weight Loss Calculator 2025 - Metabolic Adaptation Predictor">
    <meta name="twitter:description" content="Get realistic weight loss predictions with metabolic adaptation.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/losertown-calculator">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
    }
    .weight-card {
        transition: all 0.3s ease;
        border-left: 4px solid #f97316;
    }
    .weight-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #ea580c;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .scale-pulse {
        animation: scalePulse 2s ease-in-out infinite;
    }
    @keyframes scalePulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .progress-ring {
        transform: rotate(-90deg);
        transform-origin: 50% 50%;
    }
    .progress-ring__circle {
        transition: stroke-dashoffset 0.35s;
        transform: rotate(-90deg);
        transform-origin: 50% 50%;
    }
    .plateau-warning {
        background: linear-gradient(45deg, #fef3c7, #fde68a);
        border: 1px solid #f59e0b;
        border-radius: 10px;
    }
    .adaptive-metabolism {
        background: linear-gradient(45deg, #ddd6fe, #c4b5fd);
        border: 1px solid #8b5cf6;
        border-radius: 10px;
    }
    .timeline-marker {
        width: 12px;
        height: 12px;
        border: 3px solid #f97316;
        background: white;
        border-radius: 50%;
        position: relative;
        z-index: 10;
    }
    .timeline-line {
        height: 2px;
        background: linear-gradient(90deg, #f97316, #fbbf24);
        flex-grow: 1;
    }
    .chart-container {
        position: relative;
        height: 400px;
        width: 100%;
    }
    .milestone-badge {
        background: linear-gradient(45deg, #34d399, #10b981);
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 9999px;
        font-size: 0.75rem;
        font-weight: 600;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Losertown Weight Loss Calculator 2025",
  "description": "Weight loss prediction calculator with metabolic adaptation and timeline projections.",
  "url": "https://www.thiyagi.com/losertown-calculator",
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
                        <i class="fas fa-weight text-2xl text-orange-600 scale-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Losertown Weight Loss Calculator</h1>
                        <p class="text-orange-100">Realistic predictions with metabolic adaptation</p>
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
                <li class="text-gray-900 font-medium">Losertown Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Weight Loss Prediction Calculator</h2>
                <p class="text-orange-100">Advanced modeling with metabolic adaptation and plateau effects</p>
            </div>
            
            <div class="p-6">
                <form id="weightLossForm" class="space-y-6">
                    <!-- Personal Information -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div class="form-group">
                                <label for="gender" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-venus-mars text-orange-500 mr-2"></i>
                                    Gender
                                </label>
                                <select id="gender" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                    <option value="male">Male</option>
                                    <option value="female" selected>Female</option>
                                    <option value="other">Non-binary/Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="age" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-calendar-alt text-orange-500 mr-2"></i>
                                    Age (years)
                                </label>
                                <input type="number" id="age" min="16" max="100" placeholder="30" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="height" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-ruler-vertical text-orange-500 mr-2"></i>
                                    Height (cm)
                                </label>
                                <input type="number" id="height" min="100" max="250" placeholder="170" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                <p class="text-xs text-gray-500 mt-1">Enter height in centimeters</p>
                            </div>

                            <div class="form-group">
                                <label for="currentWeight" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-weight text-orange-500 mr-2"></i>
                                    Current Weight (kg)
                                </label>
                                <input type="number" id="currentWeight" min="30" max="300" step="0.1" placeholder="80.0" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div class="form-group">
                                <label for="goalWeight" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-bullseye text-orange-500 mr-2"></i>
                                    Goal Weight (kg)
                                </label>
                                <input type="number" id="goalWeight" min="30" max="300" step="0.1" placeholder="65.0" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="activityLevel" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-running text-orange-500 mr-2"></i>
                                    Activity Level
                                </label>
                                <select id="activityLevel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                    <option value="1.2">Sedentary (desk job, no exercise)</option>
                                    <option value="1.375" selected>Lightly Active (light exercise 1-3 days/week)</option>
                                    <option value="1.55">Moderately Active (moderate exercise 3-5 days/week)</option>
                                    <option value="1.725">Very Active (hard exercise 6-7 days/week)</option>
                                    <option value="1.9">Extremely Active (very hard exercise, physical job)</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="bodyFat" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-percentage text-orange-500 mr-2"></i>
                                    Body Fat Percentage (optional)
                                </label>
                                <input type="number" id="bodyFat" min="5" max="50" step="0.1" placeholder="25"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                <p class="text-xs text-gray-500 mt-1">Leave blank if unknown (estimated from BMI)</p>
                            </div>

                            <div class="form-group">
                                <label for="dailyCalories" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-utensils text-orange-500 mr-2"></i>
                                    Target Daily Calories
                                </label>
                                <input type="number" id="dailyCalories" min="800" max="4000" placeholder="1500" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                <p class="text-xs text-gray-500 mt-1">Your planned daily calorie intake</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" onclick="calculateWeightLoss()" 
                                class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-bold py-4 px-6 rounded-lg hover:from-orange-600 hover:to-orange-700 focus:ring-4 focus:ring-orange-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate Weight Loss Timeline
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Overview Cards -->
            <div class="grid md:grid-cols-4 gap-6">
                <div class="weight-card bg-blue-50 p-6 rounded-lg text-center fade-in">
                    <h4 class="text-lg font-semibold text-blue-800 mb-2">Weight to Lose</h4>
                    <p id="totalWeightLoss" class="text-4xl font-bold text-blue-900">0 kg</p>
                    <p class="text-sm text-blue-600 mt-1">total reduction</p>
                </div>
                <div class="weight-card bg-green-50 p-6 rounded-lg text-center fade-in">
                    <h4 class="text-lg font-semibold text-green-800 mb-2">Timeline</h4>
                    <p id="timelineEstimate" class="text-4xl font-bold text-green-900">0</p>
                    <p class="text-sm text-green-600 mt-1">months to goal</p>
                </div>
                <div class="weight-card bg-orange-50 p-6 rounded-lg text-center fade-in">
                    <h4 class="text-lg font-semibold text-orange-800 mb-2">Avg Rate</h4>
                    <p id="avgWeeklyLoss" class="text-4xl font-bold text-orange-900">0</p>
                    <p class="text-sm text-orange-600 mt-1">kg per week</p>
                </div>
                <div class="weight-card bg-purple-50 p-6 rounded-lg text-center fade-in">
                    <h4 class="text-lg font-semibold text-purple-800 mb-2">Deficit</h4>
                    <p id="dailyDeficit" class="text-4xl font-bold text-purple-900">0</p>
                    <p class="text-sm text-purple-600 mt-1">calories/day</p>
                </div>
            </div>

            <!-- Progress Visualization -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-chart-line text-orange-500 mr-3"></i>
                    Weight Loss Timeline Projection
                </h3>
                
                <div class="chart-container mb-6">
                    <canvas id="weightChart"></canvas>
                </div>
            </div>

            <!-- Metabolic Adaptation Analysis -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-brain text-orange-500 mr-3"></i>
                    Metabolic Adaptation Analysis
                </h3>
                
                <div class="adaptive-metabolism p-6">
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Starting BMR:</span>
                            <span id="startingBMR" class="font-medium">0 cal/day</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-sm text-gray-600">Projected BMR at Goal:</span>
                            <span id="goalBMR" class="font-medium">0 cal/day</span>
                        </div>
                        <div class="flex justify-between border-t pt-2">
                            <span class="text-sm font-semibold text-gray-700">Net Metabolic Change:</span>
                            <span id="netMetabolicChange" class="font-bold text-purple-800">0%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        class LosertownCalculator {
            constructor() {
                this.results = null;
                this.chart = null;
            }

            calculate() {
                try {
                    // Get form values
                    const gender = document.getElementById('gender').value;
                    const age = parseInt(document.getElementById('age').value);
                    const height = parseFloat(document.getElementById('height').value);
                    const currentWeight = parseFloat(document.getElementById('currentWeight').value);
                    const goalWeight = parseFloat(document.getElementById('goalWeight').value);
                    const activityLevel = parseFloat(document.getElementById('activityLevel').value);
                    const bodyFat = parseFloat(document.getElementById('bodyFat').value) || this.estimateBodyFat(currentWeight, height, gender, age);
                    const dailyCalories = parseInt(document.getElementById('dailyCalories').value);

                    if (!currentWeight || !goalWeight || !height || !age || !dailyCalories) {
                        alert('Please fill in all required fields.');
                        return;
                    }

                    if (goalWeight >= currentWeight) {
                        alert('Goal weight must be less than current weight for weight loss.');
                        return;
                    }

                // Calculate BMR using Mifflin-St Jeor equation
                const bmr = this.calculateBMR(currentWeight, height, age, gender);
                const tdee = bmr * activityLevel;

                // Create timeline
                const timeline = this.createWeightLossTimeline(currentWeight, goalWeight, bmr, tdee, dailyCalories);

                this.results = {
                    gender, age, height, currentWeight, goalWeight, activityLevel,
                    bodyFat, dailyCalories, bmr, tdee, timeline
                };

                this.displayResults();
                } catch (error) {
                    console.error('Error in calculation:', error);
                    alert('An error occurred while calculating. Please check your inputs and try again.');
                }
            }

            calculateBMR(weight, height, age, gender) {
                let bmr = (10 * weight) + (6.25 * height) - (5 * age);
                
                if (gender === 'male') {
                    bmr += 5;
                } else if (gender === 'female') {
                    bmr -= 161;
                } else {
                    bmr -= 78;
                }
                
                return Math.round(bmr);
            }

            estimateBodyFat(weight, height, gender, age) {
                const bmi = weight / Math.pow(height / 100, 2);
                let bodyFat;
                
                if (gender === 'male') {
                    bodyFat = (1.20 * bmi) + (0.23 * age) - 16.2;
                } else {
                    bodyFat = (1.20 * bmi) + (0.23 * age) - 5.4;
                }
                
                return Math.max(5, Math.min(50, bodyFat));
            }

            createWeightLossTimeline(currentWeight, goalWeight, bmr, tdee, dailyCalories) {
                const timeline = [];
                let currentWeightSim = currentWeight;
                let currentBMR = bmr;
                let currentTDEE = tdee;
                let week = 0;
                const maxWeeks = 104;
                
                while (currentWeightSim > goalWeight && week < maxWeeks) {
                    week++;
                    
                    let weeklyDeficit = (currentTDEE - dailyCalories) * 7;
                    let weeklyWeightLoss = weeklyDeficit / 7700; // 7700 cal ≈ 1 kg
                    
                    // Metabolic adaptation (15% over time)
                    if (week > 2) {
                        const adaptationRate = 0.15 * Math.log(week / 2);
                        currentBMR *= (1 - adaptationRate);
                        currentTDEE = currentBMR * (tdee / bmr);
                    }
                    
                    currentWeightSim = Math.max(goalWeight, currentWeightSim - weeklyWeightLoss);
                    
                    timeline.push({
                        week,
                        weight: parseFloat(currentWeightSim.toFixed(1)),
                        bmr: Math.round(currentBMR),
                        tdee: Math.round(currentTDEE),
                        deficit: Math.round(weeklyDeficit / 7)
                    });
                    
                    if (currentWeightSim <= goalWeight) break;
                }
                
                return timeline;
            }

            displayResults() {
                const r = this.results;
                const finalWeek = r.timeline[r.timeline.length - 1];
                
                // Overview cards
                const weightToLose = r.currentWeight - r.goalWeight;
                document.getElementById('totalWeightLoss').textContent = weightToLose.toFixed(1) + ' kg';
                document.getElementById('timelineEstimate').textContent = Math.ceil(finalWeek.week / 4.33);
                document.getElementById('avgWeeklyLoss').textContent = (weightToLose / finalWeek.week).toFixed(2);
                document.getElementById('dailyDeficit').textContent = Math.round((r.tdee - r.dailyCalories));

                // Metabolic analysis
                document.getElementById('startingBMR').textContent = r.bmr + ' cal/day';
                document.getElementById('goalBMR').textContent = finalWeek.bmr + ' cal/day';
                
                const metabolicChange = ((finalWeek.bmr - r.bmr) / r.bmr) * 100;
                document.getElementById('netMetabolicChange').textContent = metabolicChange.toFixed(1) + '%';

                // Create chart (with fallback)
                setTimeout(() => {
                    this.createWeightChart();
                }, 100);

                // Show results
                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            createWeightChart() {
                try {
                    // Check if Chart.js is loaded
                    if (typeof Chart === 'undefined') {
                        console.error('Chart.js is not loaded');
                        return;
                    }

                    const canvas = document.getElementById('weightChart');
                    if (!canvas) {
                        console.error('Canvas element not found');
                        return;
                    }
                    
                    const ctx = canvas.getContext('2d');
                    
                    if (this.chart) {
                        this.chart.destroy();
                    }

                    const labels = this.results.timeline.map(t => `Week ${t.week}`);
                    const weights = this.results.timeline.map(t => t.weight);

                this.chart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Projected Weight',
                            data: weights,
                            borderColor: '#f97316',
                            backgroundColor: 'rgba(249, 115, 22, 0.1)',
                            borderWidth: 3,
                            fill: true,
                            tension: 0.4
                        }, {
                            label: 'Goal Weight',
                            data: Array(weights.length).fill(this.results.goalWeight),
                            borderColor: '#10b981',
                            borderWidth: 2,
                            borderDash: [10, 5],
                            fill: false,
                            pointRadius: 0
                        }]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: false,
                                title: {
                                    display: true,
                                    text: 'Weight (kg)'
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Timeline'
                                }
                            }
                        }
                    }
                });
                } catch (error) {
                    console.error('Error creating chart:', error);
                }
            }

            getResultsText() {
                const r = this.results;
                const finalWeek = r.timeline[r.timeline.length - 1];
                return `Weight loss plan: ${(r.currentWeight - r.goalWeight).toFixed(1)} kg in ${Math.ceil(finalWeek.week / 4.33)} months. From ${r.currentWeight} kg to ${r.goalWeight} kg.`;
            }
        }

        const losertownCalc = new LosertownCalculator();

        function calculateWeightLoss() {
            losertownCalc.calculate();
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>