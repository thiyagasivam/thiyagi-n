<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Seconds to Days Converter 2025 - Time Calculator | Thiyagi</title>
<meta name="description" content="Free online seconds to days converter 2025. Convert seconds to days instantly with accurate time conversion. Perfect for scientific and computing calculations.">
<meta name="keywords" content="seconds to days converter 2025, time converter, scientific calculator, computing converter, time measurement">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Seconds to Days Converter 2025 - Time Calculator">
<meta property="og:description" content="Free online seconds to days converter 2025. Convert seconds to days instantly with accurate time conversion.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/seconds-to-days.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Seconds to Days Converter 2025 - Time Calculator">
<meta name="twitter:description" content="Free online seconds to days converter 2025. Convert seconds to days instantly with accurate time conversion.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-sky-50 via-blue-50 to-indigo-50 py-12">hp include 'header.php'; ?>

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-blue-50 to-cyan-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-calendar-day text-indigo-600 mr-3"></i>
                Seconds to Days Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert seconds to days instantly with our precise time converter
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Seconds Input -->
                <div class="space-y-2">
                    <label for="secondInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-stopwatch text-indigo-600 mr-2"></i>Seconds (s)
                    </label>
                    <input
                        type="number"
                        id="secondInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Enter seconds"
                        step="any"
                    >
                </div>

                <!-- Days Output -->
                <div class="space-y-2">
                    <label for="dayOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-calendar-day text-indigo-600 mr-2"></i>Days (d)
                    </label>
                    <input
                        type="number"
                        id="dayOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Days result"
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
                    <div class="font-bold text-indigo-800">3600 s</div>
                    <div class="text-sm text-gray-600">= 1 hour</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">86400 s</div>
                    <div class="text-sm text-gray-600">= 1 day</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">604800 s</div>
                    <div class="text-sm text-gray-600">= 1 week</div>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-indigo-800">2592000 s</div>
                    <div class="text-sm text-gray-600">≈ 1 month</div>
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
                    This converter helps you convert between seconds and days. One day equals exactly 86,400 seconds (24 hours × 60 minutes × 60 seconds).
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Days = Seconds ÷ 86,400
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>System uptime calculations</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Project duration planning</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Data retention policies</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Performance monitoring</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Event scheduling calculations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertSecondToDay() {
    const second = parseFloat(document.getElementById('secondInput').value);
    if (!isNaN(second)) {
        const day = second / 86400;
        document.getElementById('dayOutput').value = day.toFixed(8);
    } else {
        document.getElementById('dayOutput').value = '';
    }
}

function convertDayToSecond() {
    const day = parseFloat(document.getElementById('dayOutput').value);
    if (!isNaN(day)) {
        const second = day * 86400;
        document.getElementById('secondInput').value = second.toFixed(8);
    } else {
        document.getElementById('secondInput').value = '';
    }
}

function swapValues() {
    const secondValue = document.getElementById('secondInput').value;
    const dayValue = document.getElementById('dayOutput').value;
    
    document.getElementById('secondInput').value = dayValue;
    document.getElementById('dayOutput').value = secondValue;
}

function clearValues() {
    document.getElementById('secondInput').value = '';
    document.getElementById('dayOutput').value = '';
}

// Add event listeners
document.getElementById('secondInput').addEventListener('input', convertSecondToDay);
document.getElementById('dayOutput').addEventListener('input', convertDayToSecond);
</script>

<?php include 'footer.php'; ?>
