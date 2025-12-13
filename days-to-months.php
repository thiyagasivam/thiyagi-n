<?php include 'header.php'; ?>

<!-- SEO Meta Tags -->
<title>Days to Months Converter 2026 - d to mo Calculator | Thiyagi</title>
<meta name="description" content="Free online Days to Months converter 2026. Convert days to months and months to days instantly with accurate time conversion for planning and scheduling.">
<meta name="keywords" content="days to months converter 2026, days to months, time converter, calendar conversion, date planning, project timeline">
<meta name="author" content="Thiyagi">
<meta property="og:title" content="Days to Months Converter 2026 - d to mo Calculator">
<meta property="og:description" content="Free online Days to Months converter 2026. Convert days to months and months to days instantly.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/days-to-months.php">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Days to Months Converter 2026 - d to mo Calculator">
<meta name="twitter:description" content="Free online Days to Months converter 2026. Convert days to months and months to days instantly.">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<div class="min-h-screen bg-gradient-to-br from-purple-50 via-indigo-50 to-blue-50 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                <i class="fas fa-calendar-alt text-purple-600 mr-3"></i>
                Days to Months Converter
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Convert between days and months for project planning, scheduling, and time management calculations
            </p>
        </div>

        <!-- Converter Tool -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Days Input -->
                <div class="space-y-4">
                    <label for="daysInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-sun text-purple-600 mr-2"></i>Days (d)
                    </label>
                    <input
                        type="number"
                        id="daysInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter days"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 month ≈ 30.44 days (average)
                    </div>
                </div>

                <!-- Months Input -->
                <div class="space-y-4">
                    <label for="monthsInput" class="block text-lg font-medium text-gray-700">
                        <i class="fas fa-calendar text-indigo-600 mr-2"></i>Months (mo)
                    </label>
                    <input
                        type="number"
                        id="monthsInput"
                        class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent text-xl"
                        placeholder="Enter months"
                        step="any"
                        min="0"
                    >
                    <div class="text-sm text-gray-500">
                        1 day ≈ 0.03285 months (average)
                    </div>
                </div>
            </div>

            <!-- Result Display -->
            <div class="mt-8 p-6 bg-gradient-to-r from-purple-50 to-indigo-50 rounded-lg">
                <div id="result" class="text-lg text-gray-700 text-center">
                    Enter a value to see the conversion result
                </div>
            </div>

            <!-- Note -->
            <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                <p class="text-sm text-yellow-800">
                    <i class="fas fa-info-circle mr-2"></i>
                    <strong>Note:</strong> This converter uses the average month length of 30.44 days (365.25 ÷ 12). 
                    For precise calculations, consider specific month lengths and leap years.
                </p>
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
                    class="flex-1 min-w-[140px] bg-purple-500 hover:bg-purple-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200"
                >
                    <i class="fas fa-exchange-alt mr-2"></i>Swap Values
                </button>
            </div>
        </div>

        <!-- Quick Reference Tables -->
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- Time Conversion Reference -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-table text-purple-600 mr-3"></i>Time Conversion Reference
                </h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-2">Days</th>
                                <th class="text-center py-2">⇔</th>
                                <th class="text-right py-2">Months</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-2">7 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.23 months</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">30 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">0.99 months</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">60 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">1.97 months</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">90 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">2.96 months</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-2">180 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">5.91 months</td>
                            </tr>
                            <tr>
                                <td class="py-2">365 days</td>
                                <td class="text-center">⇔</td>
                                <td class="text-right">12 months</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Practical Time Examples -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">
                    <i class="fas fa-clock text-purple-600 mr-3"></i>Practical Time Examples
                </h2>
                <div class="space-y-3 text-sm">
                    <div class="bg-purple-50 p-3 rounded">
                        <strong>Project Durations:</strong><br>
                        • Sprint: 14 days (0.46 months)<br>
                        • Quarter: 90 days (2.96 months)<br>
                        • Semester: 120 days (3.94 months)<br>
                        • Fiscal year: 365 days (12 months)
                    </div>
                    <div class="bg-indigo-50 p-3 rounded">
                        <strong>Life Events:</strong><br>
                        • Pregnancy: 280 days (9.2 months)<br>
                        • Lease term: 365 days (12 months)<br>
                        • Warranty: 1095 days (36 months)<br>
                        • Contract: 730 days (24 months)
                    </div>
                    <div class="bg-blue-50 p-3 rounded">
                        <strong>Planning Periods:</strong><br>
                        • Short-term: 30-90 days (1-3 months)<br>
                        • Medium-term: 90-365 days (3-12 months)<br>
                        • Long-term: 365+ days (12+ months)<br>
                        • Strategic: 1095+ days (36+ months)
                    </div>
                </div>
            </div>
        </div>

        <!-- Month Length Variations -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">
                <i class="fas fa-calendar-check text-purple-600 mr-3"></i>Month Length Variations
            </h2>
            <div class="grid md:grid-cols-3 gap-6 text-sm">
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h3 class="font-semibold mb-2">31-Day Months</h3>
                    <ul class="space-y-1">
                        <li>• January: 31 days</li>
                        <li>• March: 31 days</li>
                        <li>• May: 31 days</li>
                        <li>• July: 31 days</li>
                        <li>• August: 31 days</li>
                        <li>• October: 31 days</li>
                        <li>• December: 31 days</li>
                    </ul>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg">
                    <h3 class="font-semibold mb-2">30-Day Months</h3>
                    <ul class="space-y-1">
                        <li>• April: 30 days</li>
                        <li>• June: 30 days</li>
                        <li>• September: 30 days</li>
                        <li>• November: 30 days</li>
                    </ul>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h3 class="font-semibold mb-2">February</h3>
                    <ul class="space-y-1">
                        <li>• Regular year: 28 days</li>
                        <li>• Leap year: 29 days</li>
                        <li>• Occurs every 4 years</li>
                        <li>• (except century years not divisible by 400)</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Information Section -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-ruler text-purple-600 mr-2"></i>Time Units
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Day:</strong> 24-hour period</li>
                    <li><strong>Month:</strong> Calendar month unit</li>
                    <li><strong>Average:</strong> 30.44 days per month</li>
                    <li><strong>Year:</strong> 365.25 days average</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-lightbulb text-purple-600 mr-2"></i>Planning Tips
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Consider specific month lengths</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Account for weekends/holidays</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Plan for leap years</li>
                    <li><i class="fas fa-check text-purple-600 mr-2"></i>Use buffer time for projects</li>
                </ul>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h3 class="text-xl font-bold text-gray-900 mb-4">
                    <i class="fas fa-globe text-purple-600 mr-2"></i>Applications
                </h3>
                <ul class="space-y-2 text-gray-700 text-sm">
                    <li><strong>Business:</strong> Project timelines</li>
                    <li><strong>Finance:</strong> Payment schedules</li>
                    <li><strong>Education:</strong> Academic planning</li>
                    <li><strong>Personal:</strong> Goal setting</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
let isUpdating = false;

function convertDaysToMonths(days) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(days) && days !== '') {
        const months = days / 30.44;
        document.getElementById('monthsInput').value = months.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${days} days = ${months.toFixed(6)} months</strong>
        `;
    } else {
        document.getElementById('monthsInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function convertMonthsToDays(months) {
    if (isUpdating) return;
    isUpdating = true;
    
    if (!isNaN(months) && months !== '') {
        const days = months * 30.44;
        document.getElementById('daysInput').value = days.toFixed(6);
        
        document.getElementById('result').innerHTML = `
            <i class="fas fa-equals text-purple-600 mr-2"></i>
            <strong>${months} months = ${days.toFixed(6)} days</strong>
        `;
    } else {
        document.getElementById('daysInput').value = '';
        document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
    }
    
    isUpdating = false;
}

function clearValues() {
    document.getElementById('daysInput').value = '';
    document.getElementById('monthsInput').value = '';
    document.getElementById('result').innerHTML = 'Enter a value to see the conversion result';
}

function swapValues() {
    const daysValue = document.getElementById('daysInput').value;
    const monthsValue = document.getElementById('monthsInput').value;
    
    document.getElementById('daysInput').value = monthsValue;
    document.getElementById('monthsInput').value = daysValue;
    
    if (monthsValue) {
        convertDaysToMonths(parseFloat(monthsValue));
    } else if (daysValue) {
        convertMonthsToDays(parseFloat(daysValue));
    }
}

// Add event listeners
document.getElementById('daysInput').addEventListener('input', function() {
    convertDaysToMonths(parseFloat(this.value));
});

document.getElementById('monthsInput').addEventListener('input', function() {
    convertMonthsToDays(parseFloat(this.value));
});
</script>

<?php include 'footer.php'; ?>
