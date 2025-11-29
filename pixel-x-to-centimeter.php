<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Pixel to Centimeter Converter 2025 - DPI Calculator | Thiyagi</title>
<meta name="description" content="Free online pixel to centimeter converter 2025. Convert pixels to cm with DPI settings instantly. Perfect for graphic design and printing calculations.">
<meta name="keywords" content="pixel to centimeter converter 2025, px to cm, DPI converter, graphic design calculator, printing converter">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Pixel to Centimeter Converter 2025 - DPI Calculator">
<meta property="og:description" content="Free online pixel to centimeter converter 2025. Convert pixels to cm with DPI settings instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/pixel-x-to-centimeter.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Pixel to Centimeter Converter 2025 - DPI Calculator">
<meta name="twitter:description" content="Free online pixel to centimeter converter 2025. Convert pixels to cm with DPI settings instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-violet-50 py-12">hp include 'header.php'; ?>

<div class="min-h-screen bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-desktop text-indigo-600 mr-3"></i>
                Pixel X to Centimeter Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert pixels to centimeters based on screen resolution (DPI/PPI)
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Pixels Input -->
                <div class="space-y-2">
                    <label for="pixelInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-desktop text-indigo-600 mr-2"></i>Pixels (px)
                    </label>
                    <input
                        type="number"
                        id="pixelInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Enter pixels"
                        step="any"
                    >
                </div>

                <!-- DPI Input -->
                <div class="space-y-2">
                    <label for="dpiInput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-cog text-indigo-600 mr-2"></i>DPI (Dots per Inch)
                    </label>
                    <input
                        type="number"
                        id="dpiInput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Enter DPI"
                        value="96"
                        step="any"
                    >
                </div>

                <!-- Centimeters Output -->
                <div class="space-y-2">
                    <label for="cmOutput" class="block text-sm font-medium text-gray-700">
                        <i class="fas fa-ruler text-indigo-600 mr-2"></i>Centimeters (cm)
                    </label>
                    <input
                        type="number"
                        id="cmOutput"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-lg"
                        placeholder="Centimeters result"
                        readonly
                    >
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex flex-wrap gap-4 mt-6">
                <button
                    onclick="clearValues()"
                    class="flex-1 min-w-[140px] bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-trash mr-2"></i>Clear
                </button>
            </div>
        </div>

        <!-- DPI Presets -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                <i class="fas fa-th text-indigo-600 mr-3"></i>Common DPI Values
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <button onclick="setDPI(72)" class="bg-indigo-50 p-4 rounded-lg text-center hover:bg-indigo-100 transition">
                    <div class="font-bold text-indigo-800">72 DPI</div>
                    <div class="text-sm text-gray-600">Mac Standard</div>
                </button>
                <button onclick="setDPI(96)" class="bg-indigo-50 p-4 rounded-lg text-center hover:bg-indigo-100 transition">
                    <div class="font-bold text-indigo-800">96 DPI</div>
                    <div class="text-sm text-gray-600">Windows Standard</div>
                </button>
                <button onclick="setDPI(150)" class="bg-indigo-50 p-4 rounded-lg text-center hover:bg-indigo-100 transition">
                    <div class="font-bold text-indigo-800">150 DPI</div>
                    <div class="text-sm text-gray-600">High DPI</div>
                </button>
                <button onclick="setDPI(300)" class="bg-indigo-50 p-4 rounded-lg text-center hover:bg-indigo-100 transition">
                    <div class="font-bold text-indigo-800">300 DPI</div>
                    <div class="text-sm text-gray-600">Print Quality</div>
                </button>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-info-circle text-indigo-600 mr-2"></i>About This Converter
                </h3>
                <p class="text-gray-700 mb-4">
                    This converter helps you convert pixels to centimeters based on the display's DPI (dots per inch). The conversion depends on the screen resolution.
                </p>
                <p class="text-gray-700">
                    <strong>Conversion Formula:</strong><br>
                    cm = (pixels / DPI) × 2.54
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-indigo-600 mr-2"></i>Common Applications
                </h3>
                <ul class="space-y-2 text-gray-700">
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Web design and development</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Print layout calculations</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Digital artwork sizing</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>Screen measurement planning</li>
                    <li><i class="fas fa-check text-indigo-600 mr-2"></i>User interface design</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertPixelToCm() {
    const pixels = parseFloat(document.getElementById('pixelInput').value);
    const dpi = parseFloat(document.getElementById('dpiInput').value);
    
    if (!isNaN(pixels) && !isNaN(dpi) && dpi > 0) {
        const cm = (pixels / dpi) * 2.54;
        document.getElementById('cmOutput').value = cm.toFixed(8);
    } else {
        document.getElementById('cmOutput').value = '';
    }
}

function setDPI(dpiValue) {
    document.getElementById('dpiInput').value = dpiValue;
    convertPixelToCm();
}

function clearValues() {
    document.getElementById('pixelInput').value = '';
    document.getElementById('dpiInput').value = '96';
    document.getElementById('cmOutput').value = '';
}

// Add event listeners
document.getElementById('pixelInput').addEventListener('input', convertPixelToCm);
document.getElementById('dpiInput').addEventListener('input', convertPixelToCm);
</script>

<?php include 'footer.php'; ?>
