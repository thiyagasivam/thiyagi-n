<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Micro to Milli Converter 2026 - Unit Prefix Calculator | Thiyagi</title>
<meta name="description" content="Free online micro to milli converter 2026. Convert µ to m instantly with accurate prefix conversion for scientific measurements.">
<meta name="keywords" content="micro to milli converter 2026, µ to m, unit prefix converter, scientific calculator, measurement converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Micro to Milli Converter 2026 - Unit Prefix Calculator">
<meta property="og:description" content="Free online micro to milli converter 2026. Convert µ to m instantly with accurate prefix conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/micro-to-milli.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Micro to Milli Converter 2026 - Unit Prefix Calculator">
<meta name="twitter:description" content="Free online micro to milli converter 2026. Convert µ to m instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-blue-50 to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-indigo-600 mr-3"></i>
                Micro to Milli Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert micro units to milli units instantly for scientific measurements and engineering calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Micro Input -->
                <div class="space-y-2">
                    <label for="microInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-atom text-indigo-600 mr-2"></i>Micro Units (µ) × 10⁻⁶
                    </label>
                    <input
                        type="number"
                        id="microInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Enter micro units"
                        step="any"
                    >
                </div>

                <!-- Milli Output -->
                <div class="space-y-2">
                    <label for="milliOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-flask text-indigo-600 mr-2"></i>Milli Units (m) × 10⁻³
                    </label>
                    <input
                        type="number"
                        id="milliOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Milli units result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap
                </button>
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
            </div>
        </div>

        <!-- Quick Conversion Reference -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                <i class="fas fa-table text-indigo-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">1000 µ</div>
                    <div class="text-sm text-gray-600">= 1 m</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">5000 µ</div>
                    <div class="text-sm text-gray-600">= 5 m</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">10000 µ</div>
                    <div class="text-sm text-gray-600">= 10 m</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">1000000 µ</div>
                    <div class="text-sm text-gray-600">= 1000 m</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-indigo-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between micro (µ) and milli (m) units. 1000 micro units equal 1 milli unit.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Milli = Micro ÷ 1000<br>
                    Micro = Milli × 1000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Scientific measurements</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Electronics engineering</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Laboratory analysis</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Medical dosing</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Precision manufacturing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertMicroToMilli() {
    const micro = parseFloat(document.getElementById('microInput').value);
    if (!isNaN(micro)) {
        const milli = micro / 1000; // 1000 µ = 1 m
        document.getElementById('milliOutput').value = milli.toFixed(6);
    } else {
        document.getElementById('milliOutput').value = '';
    }
}

function convertMilliToMicro() {
    const milli = parseFloat(document.getElementById('milliOutput').value);
    if (!isNaN(milli)) {
        const micro = milli * 1000; // 1 m = 1000 µ
        document.getElementById('microInput').value = micro.toFixed(3);
    } else {
        document.getElementById('microInput').value = '';
    }
}

function swapValues() {
    const microValue = document.getElementById('microInput').value;
    const milliValue = document.getElementById('milliOutput').value;
    
    document.getElementById('microInput').value = milliValue;
    document.getElementById('milliOutput').value = microValue;
}

function clearValues() {
    document.getElementById('microInput').value = '';
    document.getElementById('milliOutput').value = '';
}

// Add event listeners
document.getElementById('microInput').addEventListener('input', convertMicroToMilli);
document.getElementById('milliOutput').addEventListener('input', convertMilliToMicro);
</script>

<?php include 'footer.php'; ?>
