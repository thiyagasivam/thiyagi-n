<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Milli to Micro Converter 2026 - m to μ Calculator | Thiyagi</title>
<meta name="description" content="Free online Milli to Micro converter 2026. Convert m to μ and μ to m instantly with accurate metric prefix conversion for scientific measurements.">
<meta name="keywords" content="milli to micro converter 2026, m to μ, metric prefix converter, scientific notation, SI units, metric system">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Milli to Micro Converter 2026 - m to μ Calculator">
<meta property="og:description" content="Free online Milli to Micro converter 2026. Convert m to μ and μ to m instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/milli-to-micro.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Milli to Micro Converter 2026 - m to μ Calculator">
<meta name="twitter:description" content="Free online Milli to Micro converter 2026. Convert m to μ and μ to m instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-cyan-50 via-blue-50 to-teal-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-microscope text-cyan-600 mr-3"></i>
                Milli to Micro Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between milli (m) and micro (μ) metric prefixes for scientific measurements, laboratory work, and precision calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Milli Input -->
                <div class="space-y-4">
                    <label for="milliInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-ruler-horizontal text-cyan-600 mr-2"></i>Milli (m) - 10⁻³
                    </label>
                    <input
                        type="number"
                        id="milliInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter milli units"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 m = 1,000 μ
                    </div>
                </div>

                <!-- Micro Input -->
                <div class="space-y-4">
                    <label for="microInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-atom text-blue-600 mr-2"></i>Micro (μ) - 10⁻⁶
                    </label>
                    <input
                        type="number"
                        id="microInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-cyan-500 focus:border-transparent text-xl"
                        placeholder="Enter micro units"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 μ = 0.001 m
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-cyan-50 to-blue-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-cyan-500 hover:bg-cyan-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Metric Prefix Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-cyan-600 mr-3"></i>Metric Prefix Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Milli (m)</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Micro (μ)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.1 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 μ</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.5 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">500 μ</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 μ</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">5 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5,000 μ</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 μ</td>
                            </tr>
                            <tr>
                                <td class="py-2">100 m</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 μ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Scientific Measurement Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-flask text-cyan-600 mr-3"></i>Scientific Measurement Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-cyan-50 p-3 rounded">
                        <strong>Length Measurements:</strong><br>
                        • Millimeter (mm): 1 mm = 1,000 μm<br>
                        • Hair thickness: 50-100 μm<br>
                        • Cell diameter: 10-30 μm<br>
                        • Bacteria size: 1-5 μm
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Volume Measurements:</strong><br>
                        • Milliliter (mL): 1 mL = 1,000 μL<br>
                        • Pipette volume: 1-10 μL<br>
                        • Blood sample: 50-100 μL<br>
                        • Eye drop: ~50 μL
                    </div>
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Electronic Measurements:</strong><br>
                        • Milliamp (mA): 1 mA = 1,000 μA<br>
                        • LED current: 20-50 mA<br>
                        • Sensor current: 10-100 μA<br>
                        • Standby current: 1-10 μA
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-cyan-600 mr-2"></i>Metric Prefixes
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Milli (m):</strong> 10⁻³ or 0.001</li>
                    <li><strong>Micro (μ):</strong> 10⁻⁶ or 0.000001</li>
                    <li><strong>Ratio:</strong> 1 milli = 1,000 micro</li>
                    <li><strong>Symbol:</strong> μ (Greek letter mu)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-cyan-600 mr-2"></i>Usage Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Common in scientific notation</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Used across all SI units</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Essential for precision work</li>
                    <li><i class="fas fa-check text-cyan-600 mr-2"></i>Standard in laboratory settings</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-cyan-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Medicine:</strong> Drug dosages</li>
                    <li><strong>Electronics:</strong> Component values</li>
                    <li><strong>Biology:</strong> Cell measurements</li>
                    <li><strong>Chemistry:</strong> Solution concentrations</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertMilliToMicro(milli) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(milli) && milli !== '') {
        const micro = milli * 1000;
        document.getElementById('microInput').value = micro.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${milli} m = ${micro.toFixed(3)} μ</strong>
        `;
    } else {
        document.getElementById('microInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMicroToMilli(micro) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micro) && micro !== '') {
        const milli = micro / 1000;
        document.getElementById('milliInput').value = milli.toFixed(10);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-cyan-600 mr-2"></i>
            <strong>${micro} μ = ${milli.toFixed(6)} m</strong>
        `;
    } else {
        document.getElementById('milliInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('milliInput').value = '';
    document.getElementById('microInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const milliValue = document.getElementById('milliInput').value;
    const microValue = document.getElementById('microInput').value;
    
    document.getElementById('milliInput').value = microValue;
    document.getElementById('microInput').value = milliValue;
    
    if (microValue) {
        convertMilliToMicro(parseFloat(microValue));
    } else if (milliValue) {
        convertMicroToMilli(parseFloat(milliValue));
    }
}

// Add event listeners
document.getElementById('milliInput').addEventListener('input', function() {
    convertMilliToMicro(parseFloat(this.value));
});

document.getElementById('microInput').addEventListener('input', function() {
    convertMicroToMilli(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
