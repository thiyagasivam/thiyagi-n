<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Towing Estimate Calculator 2026 - Calculate Towing Service Costs | Thiyagi.com</title>
    <meta name="description" content="Towing estimate calculator 2026 - calculate towing service costs based on distance, vehicle type, time of service, and additional factors for accurate pricing.">
    <meta name="keywords" content="towing calculator 2026, towing cost estimator, tow truck price calculator, auto towing estimate, roadside assistance calculator">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Towing Estimate Calculator 2026 - Calculate Towing Service Costs">
    <meta property="og:description" content="Calculate accurate towing service costs based on distance, vehicle type, and service requirements.">
    <meta property="og:url" content="https://www.thiyagi.com/towing-estimate-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Towing Estimate Calculator 2026 - Calculate Towing Service Costs">
    <meta name="twitter:description" content="Calculate towing service costs accurately with our comprehensive calculator.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/towing-estimate-calculator">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
    }
    .towing-card {
        transition: all 0.3s ease;
        border-left: 4px solid #f59e0b;
    }
    .towing-card:hover {
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
    .truck-pulse {
        animation: truckPulse 2s ease-in-out infinite;
    }
    @keyframes truckPulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .service-option {
        background: linear-gradient(45deg, #fff7ed, #fed7aa);
        border: 1px solid #fdba74;
    }
    .service-option:hover {
        background: linear-gradient(45deg, #fed7aa, #fdba74);
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Towing Estimate Calculator 2026",
  "description": "Calculate towing service costs based on distance, vehicle type, time of service, and additional factors for accurate pricing.",
  "url": "https://www.thiyagi.com/towing-estimate-calculator",
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
    <header class="gradient-bg shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-3 rounded-full shadow-lg">
                        <i class="fas fa-truck text-2xl text-amber-600 truck-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Towing Estimate Calculator</h1>
                        <p class="text-amber-100">Calculate accurate towing service costs</p>
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
                <li class="text-gray-900 font-medium">Towing Estimate Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Calculator Section -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Form -->
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mb-8">
            <div class="gradient-bg p-6">
                <h2 class="text-2xl font-bold text-white mb-2">Towing Cost Calculator</h2>
                <p class="text-amber-100">Get an accurate estimate for your towing service</p>
            </div>
            
            <div class="p-6">
                <form id="towingForm" class="space-y-6">
                    <!-- Basic Information -->
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="distance" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-road text-amber-500 mr-2"></i>
                                    Towing Distance (miles)
                                </label>
                                <input type="number" id="distance" min="1" max="500" step="0.1" value="10" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                            </div>

                            <div class="form-group">
                                <label for="vehicleType" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-car text-amber-500 mr-2"></i>
                                    Vehicle Type
                                </label>
                                <select id="vehicleType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                                    <option value="sedan">Sedan/Compact Car</option>
                                    <option value="suv">SUV/Crossover</option>
                                    <option value="truck">Pickup Truck</option>
                                    <option value="van">Van/Minivan</option>
                                    <option value="luxury">Luxury Car</option>
                                    <option value="motorcycle">Motorcycle</option>
                                    <option value="heavy">Heavy Vehicle/RV</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="towType" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-tools text-amber-500 mr-2"></i>
                                    Tow Type
                                </label>
                                <select id="towType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                                    <option value="flatbed">Flatbed Tow (Safest)</option>
                                    <option value="wheel-lift">Wheel Lift Tow</option>
                                    <option value="hook-chain">Hook & Chain (Basic)</option>
                                    <option value="dolly">Dolly Tow</option>
                                </select>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="form-group">
                                <label for="timeOfService" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-clock text-amber-500 mr-2"></i>
                                    Time of Service
                                </label>
                                <select id="timeOfService" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                                    <option value="business">Business Hours (8 AM - 6 PM)</option>
                                    <option value="evening">Evening (6 PM - 10 PM)</option>
                                    <option value="night">Night/Late Night (10 PM - 6 AM)</option>
                                    <option value="weekend">Weekend</option>
                                    <option value="holiday">Holiday</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="location" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-map-marker-alt text-amber-500 mr-2"></i>
                                    Location Type
                                </label>
                                <select id="location" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                                    <option value="roadside">Roadside/Highway</option>
                                    <option value="parking">Parking Lot</option>
                                    <option value="driveway">Driveway/Residential</option>
                                    <option value="garage">Garage/Enclosed</option>
                                    <option value="difficult">Difficult Access</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="urgency" class="block text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-exclamation-triangle text-amber-500 mr-2"></i>
                                    Service Urgency
                                </label>
                                <select id="urgency" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent">
                                    <option value="standard">Standard (2-4 hours)</option>
                                    <option value="priority">Priority (1-2 hours)</option>
                                    <option value="emergency">Emergency (30-60 mins)</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Services -->
                    <div class="form-group">
                        <label class="block text-sm font-semibold text-gray-700 mb-3">
                            <i class="fas fa-plus text-amber-500 mr-2"></i>
                            Additional Services
                        </label>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="service-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="winch" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Winch Service (+$50)</span>
                                </label>
                            </div>
                            <div class="service-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="jumpStart" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Jump Start (+$25)</span>
                                </label>
                            </div>
                            <div class="service-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="fuelDelivery" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Fuel Delivery (+$40)</span>
                                </label>
                            </div>
                            <div class="service-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="lockout" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Lockout Service (+$60)</span>
                                </label>
                            </div>
                            <div class="service-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="tireChange" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Tire Change (+$35)</span>
                                </label>
                            </div>
                            <div class="service-option p-3 rounded-lg">
                                <label class="flex items-center cursor-pointer">
                                    <input type="checkbox" id="storage" class="h-4 w-4 text-amber-600 focus:ring-amber-500 border-gray-300 rounded">
                                    <span class="ml-2 text-sm text-gray-700">Storage Fee (+$30/day)</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="button" onclick="calculateTowingCost()" 
                                class="w-full bg-gradient-to-r from-amber-500 to-amber-600 text-white font-bold py-4 px-6 rounded-lg hover:from-amber-600 hover:to-amber-700 focus:ring-4 focus:ring-amber-300 transition-all duration-300">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate Towing Cost
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="hidden space-y-6">
            <!-- Cost Breakdown -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-receipt text-amber-500 mr-3"></i>
                    Cost Breakdown
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="towing-card bg-blue-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-blue-800 mb-4">Base Costs</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Hook-up Fee:</span>
                                <span id="hookupFee" class="font-medium text-blue-800">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Distance Fee:</span>
                                <span id="distanceFee" class="font-medium text-blue-800">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-blue-600">Vehicle Surcharge:</span>
                                <span id="vehicleFee" class="font-medium text-blue-800">$0</span>
                            </div>
                        </div>
                    </div>
                    <div class="towing-card bg-green-50 p-6 rounded-lg">
                        <h4 class="text-lg font-semibold text-green-800 mb-4">Additional Fees</h4>
                        <div class="space-y-2">
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Time Surcharge:</span>
                                <span id="timeFee" class="font-medium text-green-800">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Location Fee:</span>
                                <span id="locationFee" class="font-medium text-green-800">$0</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm text-green-600">Additional Services:</span>
                                <span id="additionalFee" class="font-medium text-green-800">$0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Cost -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-dollar-sign text-amber-500 mr-3"></i>
                    Total Estimate
                </h3>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="towing-card bg-amber-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-amber-800 mb-2">Estimated Cost</h4>
                        <p id="totalCost" class="text-4xl font-bold text-amber-900">$0</p>
                        <p class="text-sm text-amber-600 mt-2">Base estimate</p>
                    </div>
                    <div class="towing-card bg-orange-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-orange-800 mb-2">Price Range</h4>
                        <p id="priceRange" class="text-2xl font-bold text-orange-900">$0 - $0</p>
                        <p class="text-sm text-orange-600 mt-2">Typical range</p>
                    </div>
                    <div class="towing-card bg-red-50 p-6 rounded-lg text-center">
                        <h4 class="text-lg font-semibold text-red-800 mb-2">Cost per Mile</h4>
                        <p id="costPerMile" class="text-2xl font-bold text-red-900">$0</p>
                        <p class="text-sm text-red-600 mt-2">Per mile rate</p>
                    </div>
                </div>
            </div>

            <!-- Service Details -->
            <div class="bg-white rounded-2xl shadow-xl p-6 fade-in">
                <h3 class="text-xl font-bold text-gray-800 mb-4 flex items-center">
                    <i class="fas fa-info-circle text-amber-500 mr-3"></i>
                    Service Details
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div id="serviceDetails" class="space-y-3">
                        <!-- Populated by JavaScript -->
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Get Multiple Quotes</h4>
                                <p class="text-gray-600 text-sm">Contact several towing companies to compare prices and availability.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Check Insurance Coverage</h4>
                                <p class="text-gray-600 text-sm">Your auto insurance may cover towing costs up to a certain amount.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-check-circle text-green-500 mt-1"></i>
                            <div>
                                <h4 class="font-semibold text-gray-800">Verify Credentials</h4>
                                <p class="text-gray-600 text-sm">Ensure the towing company is licensed, insured, and reputable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Share Results -->
        <div id="shareSection" class="hidden mt-8">
            <div class="bg-white rounded-2xl shadow-xl p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Share Your Estimate</h3>
                <div class="flex justify-center space-x-4">
                    <button onclick="shareOnFacebook()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fab fa-facebook-f mr-2"></i>Share on Facebook
                    </button>
                    <button onclick="shareOnTwitter()" class="bg-blue-400 text-white px-6 py-3 rounded-lg hover:bg-blue-500 transition-colors">
                        <i class="fab fa-twitter mr-2"></i>Share on Twitter
                    </button>
                    <button onclick="copyEstimate()" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700 transition-colors">
                        <i class="fas fa-copy mr-2"></i>Copy Estimate
                    </button>
                </div>
            </div>
        </div>
    </main>

    <script>
        class TowingCalculator {
            constructor() {
                this.results = null;
                this.basePrices = {
                    hookup: {
                        sedan: 75,
                        suv: 85,
                        truck: 90,
                        van: 85,
                        luxury: 100,
                        motorcycle: 50,
                        heavy: 150
                    },
                    perMile: {
                        sedan: 3.5,
                        suv: 4.0,
                        truck: 4.5,
                        van: 4.0,
                        luxury: 5.0,
                        motorcycle: 2.5,
                        heavy: 6.0
                    },
                    towType: {
                        flatbed: 1.2,
                        'wheel-lift': 1.0,
                        'hook-chain': 0.8,
                        dolly: 1.1
                    },
                    timeMultiplier: {
                        business: 1.0,
                        evening: 1.15,
                        night: 1.5,
                        weekend: 1.25,
                        holiday: 1.6
                    },
                    locationFee: {
                        roadside: 0,
                        parking: 10,
                        driveway: 15,
                        garage: 25,
                        difficult: 50
                    },
                    urgency: {
                        standard: 1.0,
                        priority: 1.3,
                        emergency: 1.8
                    },
                    additionalServices: {
                        winch: 50,
                        jumpStart: 25,
                        fuelDelivery: 40,
                        lockout: 60,
                        tireChange: 35,
                        storage: 30
                    }
                };
            }

            calculate() {
                const distance = parseFloat(document.getElementById('distance').value);
                const vehicleType = document.getElementById('vehicleType').value;
                const towType = document.getElementById('towType').value;
                const timeOfService = document.getElementById('timeOfService').value;
                const location = document.getElementById('location').value;
                const urgency = document.getElementById('urgency').value;

                if (!distance || distance <= 0) {
                    alert('Please enter a valid distance!');
                    return;
                }

                // Base costs
                const hookupFee = this.basePrices.hookup[vehicleType];
                const distanceFee = distance * this.basePrices.perMile[vehicleType];
                const vehicleFee = hookupFee * (this.basePrices.towType[towType] - 1);

                // Time and location surcharges
                const timeMultiplier = this.basePrices.timeMultiplier[timeOfService];
                const locationFee = this.basePrices.locationFee[location];
                const urgencyMultiplier = this.basePrices.urgency[urgency];

                // Additional services
                let additionalFee = 0;
                const services = ['winch', 'jumpStart', 'fuelDelivery', 'lockout', 'tireChange', 'storage'];
                const selectedServices = [];
                
                services.forEach(service => {
                    if (document.getElementById(service).checked) {
                        additionalFee += this.basePrices.additionalServices[service];
                        selectedServices.push(service);
                    }
                });

                // Calculate totals
                const baseCost = hookupFee + distanceFee + vehicleFee;
                const timeSurcharge = baseCost * (timeMultiplier - 1);
                const finalCost = (baseCost + timeSurcharge + locationFee + additionalFee) * urgencyMultiplier;

                this.results = {
                    distance,
                    vehicleType,
                    towType,
                    timeOfService,
                    location,
                    urgency,
                    hookupFee: Math.round(hookupFee),
                    distanceFee: Math.round(distanceFee),
                    vehicleFee: Math.round(vehicleFee),
                    timeFee: Math.round(timeSurcharge),
                    locationFee: Math.round(locationFee),
                    additionalFee: Math.round(additionalFee),
                    totalCost: Math.round(finalCost),
                    costPerMile: Math.round(finalCost / distance * 10) / 10,
                    priceRange: {
                        low: Math.round(finalCost * 0.85),
                        high: Math.round(finalCost * 1.15)
                    },
                    selectedServices
                };

                this.displayResults();
            }

            displayResults() {
                // Cost breakdown
                document.getElementById('hookupFee').textContent = `$${this.results.hookupFee}`;
                document.getElementById('distanceFee').textContent = `$${this.results.distanceFee}`;
                document.getElementById('vehicleFee').textContent = `$${this.results.vehicleFee}`;
                document.getElementById('timeFee').textContent = `$${this.results.timeFee}`;
                document.getElementById('locationFee').textContent = `$${this.results.locationFee}`;
                document.getElementById('additionalFee').textContent = `$${this.results.additionalFee}`;

                // Total cost
                document.getElementById('totalCost').textContent = `$${this.results.totalCost}`;
                document.getElementById('priceRange').textContent = `$${this.results.priceRange.low} - $${this.results.priceRange.high}`;
                document.getElementById('costPerMile').textContent = `$${this.results.costPerMile}`;

                // Service details
                const serviceDetails = document.getElementById('serviceDetails');
                serviceDetails.innerHTML = `
                    <div class="space-y-2">
                        <p><span class="font-semibold">Distance:</span> ${this.results.distance} miles</p>
                        <p><span class="font-semibold">Vehicle:</span> ${this.formatVehicleType(this.results.vehicleType)}</p>
                        <p><span class="font-semibold">Tow Method:</span> ${this.formatTowType(this.results.towType)}</p>
                        <p><span class="font-semibold">Service Time:</span> ${this.formatTimeOfService(this.results.timeOfService)}</p>
                        <p><span class="font-semibold">Location:</span> ${this.formatLocation(this.results.location)}</p>
                        <p><span class="font-semibold">Urgency:</span> ${this.formatUrgency(this.results.urgency)}</p>
                        ${this.results.selectedServices.length > 0 ? 
                            `<p><span class="font-semibold">Additional Services:</span> ${this.results.selectedServices.map(s => this.formatService(s)).join(', ')}</p>` 
                            : ''}
                    </div>
                `;

                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('shareSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            formatVehicleType(type) {
                const types = {
                    sedan: 'Sedan/Compact Car',
                    suv: 'SUV/Crossover',
                    truck: 'Pickup Truck',
                    van: 'Van/Minivan',
                    luxury: 'Luxury Car',
                    motorcycle: 'Motorcycle',
                    heavy: 'Heavy Vehicle/RV'
                };
                return types[type] || type;
            }

            formatTowType(type) {
                const types = {
                    flatbed: 'Flatbed Tow',
                    'wheel-lift': 'Wheel Lift Tow',
                    'hook-chain': 'Hook & Chain',
                    dolly: 'Dolly Tow'
                };
                return types[type] || type;
            }

            formatTimeOfService(time) {
                const times = {
                    business: 'Business Hours',
                    evening: 'Evening Hours',
                    night: 'Night/Late Night',
                    weekend: 'Weekend',
                    holiday: 'Holiday'
                };
                return times[time] || time;
            }

            formatLocation(location) {
                const locations = {
                    roadside: 'Roadside/Highway',
                    parking: 'Parking Lot',
                    driveway: 'Driveway/Residential',
                    garage: 'Garage/Enclosed',
                    difficult: 'Difficult Access'
                };
                return locations[location] || location;
            }

            formatUrgency(urgency) {
                const urgencies = {
                    standard: 'Standard Service',
                    priority: 'Priority Service',
                    emergency: 'Emergency Service'
                };
                return urgencies[urgency] || urgency;
            }

            formatService(service) {
                const services = {
                    winch: 'Winch Service',
                    jumpStart: 'Jump Start',
                    fuelDelivery: 'Fuel Delivery',
                    lockout: 'Lockout Service',
                    tireChange: 'Tire Change',
                    storage: 'Storage'
                };
                return services[service] || service;
            }

            getEstimateText() {
                return `Towing Estimate: $${this.results.totalCost} for ${this.results.distance} miles (${this.formatVehicleType(this.results.vehicleType)})`;
            }
        }

        const towingCalc = new TowingCalculator();

        function calculateTowingCost() {
            towingCalc.calculate();
        }

        function shareOnFacebook() {
            if (!towingCalc.results) return;
            
            const text = `${towingCalc.getEstimateText()}. Get your towing estimate at`;
            const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(window.location.href)}&quote=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function shareOnTwitter() {
            if (!towingCalc.results) return;
            
            const text = `${towingCalc.getEstimateText()} 🚛 Get yours at ${window.location.href}`;
            const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}`;
            window.open(url, '_blank', 'width=600,height=400');
        }

        function copyEstimate() {
            if (!towingCalc.results) return;
            
            const text = `Towing Cost Estimate:
${towingCalc.getEstimateText()}
Price Range: $${towingCalc.results.priceRange.low} - $${towingCalc.results.priceRange.high}
Cost per Mile: $${towingCalc.results.costPerMile}

Calculate at: ${window.location.href}`;
            
            navigator.clipboard.writeText(text).then(() => {
                alert('Estimate copied to clipboard!');
            });
        }
    </script>

<?php include 'footer.php'; ?>
</body>
</html>