<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Gigapascal to Pascal Converter 2025 - Pressure Calculator | Thiyagi</title>
<meta name="description" content="Free online gigapascal to pascal converter 2025. Convert GPa to Pa instantly with accurate pressure conversion for engineering and materials science.">
<meta name="keywords" content="gigapascal to pascal converter 2025, GPa to Pa, pressure converter, engineering calculator, materials science">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Gigapascal to Pascal Converter 2025 - Pressure Calculator">
<meta property="og:description" content="Free online gigapascal to pascal converter 2025. Convert GPa to Pa instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/gigapascal-to-pascal.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Gigapascal to Pascal Converter 2025 - Pressure Calculator">
<meta name="twitter:description" content="Free online gigapascal to pascal converter 2025. Convert GPa to Pa instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-red-50 via-pink-50 to-rose-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-weight-hanging text-red-600 mr-3"></i>
                Gigapascal to Pascal Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert gigapascals to pascals instantly for engineering, materials science, and pressure calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Gigapascal Input -->
                <div class="space-y-2">
                    <label for="gigapascalInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-compress-arrows-alt text-red-600 mr-2"></i>Gigapascals (GPa)
                    </label>
                    <input
                        type="number"
                        id="gigapascalInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Enter gigapascals"
                        step="any"
                    >
                </div>

                <!-- Pascal Output -->
                <div class="space-y-2">
                    <label for="pascalOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-tachometer-alt text-red-600 mr-2"></i>Pascals (Pa)
                    </label>
                    <input
                        type="number"
                        id="pascalOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent text-lg"
                        placeholder="Pascals result"
                        step="any"
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="swapValues()"
                    class="flex-1 min-w-[140px] bg-red-600 hover:bg-red-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
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
                <i class="fas fa-table text-red-600 mr-3"></i>Quick Reference
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">1 GPa</div>
                    <div class="text-sm text-gray-600">= 1×10⁹ Pa</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">0.1 GPa</div>
                    <div class="text-sm text-gray-600">= 1×10⁸ Pa</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">10 GPa</div>
                    <div class="text-sm text-gray-600">= 1×10¹⁰ Pa</div>
                </div>
                <div class="bg-red-50 p-4 rounded-lg text-center">
                    <div class="font-bold text-red-800">100 GPa</div>
                    <div class="text-sm text-gray-600">= 1×10¹¹ Pa</div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-red-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert between gigapascals and pascals. One gigapascal equals 1,000,000,000 pascals.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    Pascals = Gigapascals × 1,000,000,000<br>
                    Gigapascals = Pascals ÷ 1,000,000,000
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-red-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Materials testing</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Structural engineering</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Geophysics research</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>High-pressure studies</li>
                    <li><i class="fas fa-check text-red-600 mr-2"></i>Mechanical engineering</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertGigapascalToPascal() {
    const gigapascal = parseFloat(document.getElementById('gigapascalInput').value);
    if (!isNaN(gigapascal)) {
        const pascal = gigapascal * 1000000000; // 1 GPa = 1×10⁹ Pa
        document.getElementById('pascalOutput').value = pascal.toExponential(2);
    } else {
        document.getElementById('pascalOutput').value = '';
    }
}

function convertPascalToGigapascal() {
    const pascal = parseFloat(document.getElementById('pascalOutput').value);
    if (!isNaN(pascal)) {
        const gigapascal = pascal / 1000000000; // 1 GPa = 1×10⁹ Pa
        document.getElementById('gigapascalInput').value = gigapascal.toFixed(9);
    } else {
        document.getElementById('gigapascalInput').value = '';
    }
}

function swapValues() {
    const gigapascalValue = document.getElementById('gigapascalInput').value;
    const pascalValue = document.getElementById('pascalOutput').value;
    
    document.getElementById('gigapascalInput').value = pascalValue;
    document.getElementById('pascalOutput').value = gigapascalValue;
}

function clearValues() {
    document.getElementById('gigapascalInput').value = '';
    document.getElementById('pascalOutput').value = '';
}

// Add event listeners
document.getElementById('gigapascalInput').addEventListener('input', convertGigapascalToPascal);
document.getElementById('pascalOutput').addEventListener('input', convertPascalToGigapascal);
</script>

<?php include 'footer.php'; ?>
