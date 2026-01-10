<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<link rel="canonical" href="https://www.thiyagi.com/C:/xampp/htdocs/live/thiyagi-n/centimeter-to-micrometer">
<title>Centimeter to Micrometer Converter 2026 - cm to μm Calculator | Thiyagi</title>
<meta name="description" content="Free online Centimeter to Micrometer converter 2026. Convert cm to μm and μm to cm instantly with accurate length conversion for scientific measurements.">
<meta name="keywords" content="centimeter to micrometer converter 2026, cm to μm, length converter, scientific measurements, metric conversion, micron conversion">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Centimeter to Micrometer Converter 2026 - cm to μm Calculator">
<meta property="og:description" content="Free online Centimeter to Micrometer converter 2026. Convert cm to μm and μm to cm instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/centimeter-to-micrometer.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Centimeter to Micrometer Converter 2026 - cm to μm Calculator">
<meta name="twitter:description" content="Free online Centimeter to Micrometer converter 2026. Convert cm to μm and μm to cm instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-teal-50 via-green-50 to-emerald-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-ruler text-teal-600 mr-3"></i>
                Centimeter to Micrometer Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between centimeters and micrometers for scientific measurements, engineering, and precision applications
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Centimeter Input -->
                <div class="space-y-4">
                    <label for="centimeterInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-arrows-alt-h text-teal-600 mr-2"></i>Centimeter (cm)
                    </label>
                    <input
                        type="number"
                        id="centimeterInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter centimeters"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 cm = 10,000 μm
                    </div>
                </div>

                <!-- Micrometer Input -->
                <div class="space-y-4">
                    <label for="micrometerInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-search-plus text-green-600 mr-2"></i>Micrometer (μm)
                    </label>
                    <input
                        type="number"
                        id="micrometerInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-transparent text-xl"
                        placeholder="Enter micrometers"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 μm = 0.0001 cm
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-teal-50 to-green-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Length Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-teal-600 mr-3"></i>Length Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Centimeter</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Micrometer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">0.0001 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1 μm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.001 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10 μm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.01 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100 μm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">0.1 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1,000 μm</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10,000 μm</td>
                            </tr>
                            <tr>
                                <td class="py-2">10 cm</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">100,000 μm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Scale Comparison Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-magnifying-glass text-teal-600 mr-3"></i>Scale Comparison Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-teal-50 p-3 rounded">
                        <strong>Everyday Objects:</strong><br>
                        • Paper thickness: 0.01 cm (100 μm)<br>
                        • Human hair: 0.005-0.018 cm (50-180 μm)<br>
                        • Dust particle: 0.001-0.01 cm (10-100 μm)<br>
                        • Fingernail: 0.05-0.1 cm (500-1,000 μm)
                    </div>
                    <div class="bg-green-50 p-3 rounded">
                        <strong>Biological Structures:</strong><br>
                        • Red blood cell: 0.0008 cm (8 μm)<br>
                        • Bacteria: 0.0001-0.0005 cm (1-5 μm)<br>
                        • Cell wall: 0.00001-0.0001 cm (0.1-1 μm)<br>
                        • Virus: 0.000002-0.00004 cm (0.02-0.4 μm)
                    </div>
                    <div class="bg-emerald-50 p-3 rounded">
                        <strong>Manufacturing & Technology:</strong><br>
                        • Semiconductor features: 0.0000005-0.0001 cm (0.005-1 μm)<br>
                        • Surface roughness: 0.000001-0.001 cm (0.01-10 μm)<br>
                        • Precision machining: 0.000001 cm (0.01 μm) tolerance<br>
                        • Optical coatings: 0.000005-0.0001 cm (0.05-1 μm)
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-teal-600 mr-2"></i>Length Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Centimeter:</strong> 10⁻² meter</li>
                    <li><strong>Micrometer:</strong> 10⁻⁶ meter (micron)</li>
                    <li><strong>Conversion:</strong> 1 cm = 10,000 μm</li>
                    <li><strong>Ratio:</strong> 10⁴ difference in scale</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-teal-600 mr-2"></i>Measurement Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Use micrometers for precision</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Consider instrument limitations</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Account for measurement uncertainty</li>
                    <li><i class="fas fa-check text-teal-600 mr-2"></i>Use appropriate magnification</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-teal-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Microscopy:</strong> Feature sizing</li>
                    <li><strong>Manufacturing:</strong> Precision tolerances</li>
                    <li><strong>Materials:</strong> Coating thickness</li>
                    <li><strong>Biology:</strong> Cell measurements</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertCmToMicrometer(centimeters) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(centimeters) && centimeters !== '') {
        const micrometers = centimeters * 10000;
        document.getElementById('micrometerInput').value = micrometers.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${centimeters} cm = ${micrometers.toLocaleString(undefined, {maximumFractionDigits: 6})} μm</strong>
        `;
    } else {
        document.getElementById('micrometerInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMicrometerToCm(micrometers) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micrometers) && micrometers !== '') {
        const centimeters = micrometers / 10000;
        document.getElementById('centimeterInput').value = centimeters.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-teal-600 mr-2"></i>
            <strong>${micrometers.toLocaleString()} μm = ${centimeters.toFixed(8)} cm</strong>
        `;
    } else {
        document.getElementById('centimeterInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('centimeterInput').value = '';
    document.getElementById('micrometerInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const cmValue = document.getElementById('centimeterInput').value;
    const micrometerValue = document.getElementById('micrometerInput').value;
    
    document.getElementById('centimeterInput').value = micrometerValue;
    document.getElementById('micrometerInput').value = cmValue;
    
    if (micrometerValue) {
        convertCmToMicrometer(parseFloat(micrometerValue));
    } else if (cmValue) {
        convertMicrometerToCm(parseFloat(cmValue));
    }
}

// Add event listeners
document.getElementById('centimeterInput').addEventListener('input', function() {
    convertCmToMicrometer(parseFloat(this.value));
});

document.getElementById('micrometerInput').addEventListener('input', function() {
    convertMicrometerToCm(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
