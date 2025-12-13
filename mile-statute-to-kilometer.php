<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Mile Statute to Kilometer Converter 2026 - mi to km Calculator | Thiyagi</title>
<meta name="description" content="Free online Mile Statute to Kilometer converter 2026. Convert statute miles to km and km to mi instantly with accurate distance conversion.">
<meta name="keywords" content="mile statute to kilometer converter 2026, mi to km, statute mile converter, distance conversion, imperial to metric">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Mile Statute to Kilometer Converter 2026 - mi to km Calculator">
<meta property="og:description" content="Free online Mile Statute to Kilometer converter 2026. Convert statute miles to km and km to mi instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/mile-statute-to-kilometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Mile Statute to Kilometer Converter 2026 - mi to km Calculator">
<meta property="twitter:description" content="Free online Mile Statute to Kilometer converter 2026. Convert statute miles to km and km to mi instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-amber-50 via-orange-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-road text-amber-600 mr-3"></i>
                Mile Statute to Kilometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between statute miles (mi) and kilometers (km) for travel distances, mapping, and navigation calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Mile Input -->
                <div class="space-y-4">
                    <label for="mileInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-flag-usa text-amber-600 mr-2"></i>Statute Miles (mi)
                    </label>
                    <input
                        type="number"
                        id="mileInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter statute miles"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 mi = 1.609344 km
                    </div>
                </div>

                <!-- Kilometer Input -->
                <div class="space-y-4">
                    <label for="kilometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-globe text-orange-600 mr-2"></i>Kilometers (km)
                    </label>
                    <input
                        type="number"
                        id="kilometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent text-xl"
                        placeholder="Enter kilometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 km = 0.621371 mi
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-amber-50 to-orange-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear All
                </button>
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-amber-500 hover:bg-amber-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Distance Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-amber-600 mr-3"></i>Distance Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Statute Miles</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Kilometers</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.61 km</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">8.05 km</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">16.09 km</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">25 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">40.23 km</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">50 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">80.47 km</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 mi</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">160.93 km</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Travel Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-map-marked-alt text-amber-600 mr-3"></i>Travel Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-amber-50 p-3 rounded">
                        <strong>Common Distances:</strong><br>
                        • 5K run: 3.1 mi (5 km)<br>
                        • 10K run: 6.2 mi (10 km)<br>
                        • Half marathon: 13.1 mi (21.1 km)<br>
                        • Marathon: 26.2 mi (42.2 km)
                    </div>
                    <div class="bg-orange-50 p-3 rounded">
                        <strong>City Distances (US):</strong><br>
                        • NYC to Boston: 215 mi (346 km)<br>
                        • LA to San Francisco: 383 mi (616 km)<br>
                        • Chicago to Detroit: 282 mi (454 km)<br>
                        • Miami to Orlando: 235 mi (378 km)
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Speed Conversions:</strong><br>
                        • 60 mph = 96.6 km/h<br>
                        • 70 mph = 112.7 km/h<br>
                        • 80 mph = 128.7 km/h<br>
                        • 100 km/h = 62.1 mph
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-amber-600 mr-2"></i>Distance Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Statute Mile:</strong> 5,280 feet</li>
                    <li><strong>Kilometer:</strong> 1,000 meters</li>
                    <li><strong>Conversion:</strong> 1 mi = 1.609344 km</li>
                    <li><strong>Precision:</strong> Exact conversion factor</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-amber-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Miles in US/UK</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Kilometers worldwide</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>GPS navigation</li>
                    <li><i class="fas fa-check text-amber-600 mr-2"></i>Speed limit signs</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-amber-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Navigation:</strong> Route planning</li>
                    <li><strong>Travel:</strong> Distance calculation</li>
                    <li><strong>Fitness:</strong> Running/cycling</li>
                    <li><strong>Aviation:</strong> Flight distances</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMileToKilometer(mile) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(mile) && mile !== '') {
        // 1 statute mile = 1.609344 kilometers (exact)
        const kilometer = mile * 1.609344;
        document.getElementById('kilometerInput').value = kilometer.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${mile} mi = ${kilometer.toFixed(2)} km</strong>
        `;
    } else {
        document.getElementById('kilometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertKilometerToMile(kilometer) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(kilometer) && kilometer !== '') {
        // 1 kilometer = 1/1.609344 statute miles
        const mile = kilometer / 1.609344;
        document.getElementById('mileInput').value = mile.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-amber-600 mr-2"></i>
            <strong>${kilometer} km = ${mile.toFixed(2)} mi</strong>
        `;
    } else {
        document.getElementById('mileInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('mileInput').value = '';
    document.getElementById('kilometerInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const mileValue = document.getElementById('mileInput').value;
    const kilometerValue = document.getElementById('kilometerInput').value;
    
    document.getElementById('mileInput').value = kilometerValue;
    document.getElementById('kilometerInput').value = mileValue;
    
    if (kilometerValue) {
        convertMileToKilometer(parseFloat(kilometerValue));
    } else if (mileValue) {
        convertKilometerToMile(parseFloat(mileValue));
    }
}

// Add event listeners
document.getElementById('mileInput').addEventListener('input', function() {
    convertMileToKilometer(parseFloat(this.value));
});

document.getElementById('kilometerInput').addEventListener('input', function() {
    convertKilometerToMile(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
