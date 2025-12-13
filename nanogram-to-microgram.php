<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Nanogram to Microgram Converter 2026 - ng to µg Calculator | Thiyagi</title>
<meta name="description" content="Free online Nanogram to Microgram converter 2026. Convert ng to µg and µg to ng instantly with accurate micro-weight conversion for scientific use.">
<meta name="keywords" content="nanogram to microgram converter 2026, ng to µg, micro weight converter, scientific weighing, laboratory measurements">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Nanogram to Microgram Converter 2026 - ng to µg Calculator">
<meta property="og:description" content="Free online Nanogram to Microgram converter 2026. Convert ng to µg and µg to ng instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/nanogram-to-microgram.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Nanogram to Microgram Converter 2026 - ng to µg Calculator">
<meta name="twitter:description" content="Free online Nanogram to Microgram converter 2026. Convert ng to µg and µg to ng instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-rose-50 via-pink-50 to-red-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-atom text-rose-600 mr-3"></i>
                Nanogram to Microgram Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between nanograms and micrograms for ultra-precise scientific and laboratory measurements
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Nanogram Input -->
                <div class="space-y-4">
                    <label for="nanogramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-microscope text-rose-600 mr-2"></i>Nanogram (ng)
                    </label>
                    <input
                        type="number"
                        id="nanogramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent text-xl"
                        placeholder="Enter nanograms"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 ng = 0.001 µg
                    </div>
                </div>

                <!-- Microgram Input -->
                <div class="space-y-4">
                    <label for="microgramInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-weight text-pink-600 mr-2"></i>Microgram (µg)
                    </label>
                    <input
                        type="number"
                        id="microgramInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent text-xl"
                        placeholder="Enter micrograms"
                        step="any"
                    >
                    <div class="text-sm text-gray-500">
                        1 µg = 1,000 ng
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-rose-50 to-pink-50 rounded-lg">
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
                    class="flex-1 min-w-[140px] bg-rose-500 hover:bg-rose-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Scientific Scale Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-rose-600 mr-3"></i>Scientific Scale Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Nanograms</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Micrograms</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">1 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.001 µg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">10 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.01 µg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">100 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.1 µg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">500 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.5 µg</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">1,000 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.0 µg</td>
                            </tr>
                            <tr>
                                <td class="py-2">10,000 ng</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">10.0 µg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Laboratory Applications -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-flask text-rose-600 mr-3"></i>Laboratory Applications
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-rose-50 p-3 rounded">
                        <strong>Biochemistry & Molecular Biology:</strong><br>
                        • DNA samples: 1-1000 ng<br>
                        • Protein concentrations: 0.1-100 µg<br>
                        • RNA quantification: 10-10000 ng<br>
                        • Enzyme amounts: 0.01-10 µg
                    </div>
                    <div class="bg-pink-50 p-3 rounded">
                        <strong>Pharmaceutical Research:</strong><br>
                        • Drug dosages: 1-1000 µg<br>
                        • Active compounds: 10-10000 ng<br>
                        • Metabolite analysis: 0.1-100 µg<br>
                        • Biomarker detection: 1-1000 ng
                    </div>
                    <div class="bg-red-50 p-3 rounded">
                        <strong>Environmental Analysis:</strong><br>
                        • Pollutant detection: 1-1000 ng/L<br>
                        • Pesticide residues: 0.1-100 µg/kg<br>
                        • Heavy metals: 10-10000 ng/g<br>
                        • Trace contaminants: 0.01-10 µg/L
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-rose-600 mr-2"></i>Metric Mass Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Nanogram:</strong> 10⁻⁹ grams</li>
                    <li><strong>Microgram:</strong> 10⁻⁶ grams</li>
                    <li><strong>Conversion:</strong> 1 µg = 1,000 ng</li>
                    <li><strong>Symbols:</strong> ng, µg (or mcg)</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-rose-600 mr-2"></i>Precision Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Use analytical balances</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Control environmental conditions</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Minimize static electricity</li>
                    <li><i class="fas fa-check text-rose-600 mr-2"></i>Regular calibration required</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-rose-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Research:</strong> Molecular studies</li>
                    <li><strong>Medical:</strong> Drug development</li>
                    <li><strong>Environmental:</strong> Trace analysis</li>
                    <li><strong>Quality Control:</strong> Contamination testing</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertNanogramToMicrogram(nanograms) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(nanograms) && nanograms !== '') {
        const micrograms = nanograms / 1000;
        document.getElementById('microgramInput').value = micrograms.toFixed(8);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-rose-600 mr-2"></i>
            <strong>${nanograms} ng = ${micrograms.toFixed(8)} µg</strong>
        `;
    } else {
        document.getElementById('microgramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMicrogramToNanogram(micrograms) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(micrograms) && micrograms !== '') {
        const nanograms = micrograms * 1000;
        document.getElementById('nanogramInput').value = nanograms.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-rose-600 mr-2"></i>
            <strong>${micrograms} µg = ${nanograms.toFixed(6)} ng</strong>
        `;
    } else {
        document.getElementById('nanogramInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('nanogramInput').value = '';
    document.getElementById('microgramInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const nanogramValue = document.getElementById('nanogramInput').value;
    const microgramValue = document.getElementById('microgramInput').value;
    
    document.getElementById('nanogramInput').value = microgramValue;
    document.getElementById('microgramInput').value = nanogramValue;
    
    if (microgramValue) {
        convertNanogramToMicrogram(parseFloat(microgramValue));
    } else if (nanogramValue) {
        convertMicrogramToNanogram(parseFloat(nanogramValue));
    }
}

// Add event listeners
document.getElementById('nanogramInput').addEventListener('input', function() {
    convertNanogramToMicrogram(parseFloat(this.value));
});

document.getElementById('microgramInput').addEventListener('input', function() {
    convertMicrogramToNanogram(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
