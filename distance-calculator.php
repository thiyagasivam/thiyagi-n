
<?php include 'header.php'; ?>
<?php
$result = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $start = isset($_POST['start']) ? trim($_POST['start']) : '';
    $end = isset($_POST['end']) ? trim($_POST['end']) : '';
    $distance = isset($_POST['distance']) ? floatval($_POST['distance']) : 0;
    if ($start === '' || $end === '') {
        $error = 'Please enter both start and end locations.';
    } elseif ($distance <= 0) {
        $error = 'Please enter a valid distance greater than 0.';
    } else {
        $result = "The distance from <strong>" . htmlspecialchars($start) . "</strong> to <strong>" . htmlspecialchars($end) . "</strong> is <span class='text-blue-700 font-bold'>" . number_format($distance, 2) . " km</span>.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distance Calculator 2026 - Find Distance Between Two Locations</title>
    <meta name="description" content="2026 Distance Calculator: Instantly find the distance between two locations, cities, or towns. Modern, SEO-friendly, mobile-ready tool for India and worldwide.">
    <meta name="keywords" content="distance calculator 2026, city distance, km calculator, road distance, map distance, travel distance, india, online tool">
    <link rel="canonical" href="https://www.thiyagi.com/distance-calculator">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/distance-calculator">
    <meta property="og:title" content="Distance Calculator 2026 - Find Distance Between Two Locations">
    <meta property="og:description" content="2026 Distance Calculator: Instantly find the distance between two locations, cities, or towns. Modern, SEO-friendly, mobile-ready tool.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/distance-calculator">
    <meta property="twitter:title" content="Distance Calculator 2026 - Find Distance Between Two Locations">
    <meta property="twitter:description" content="2026 Distance Calculator: Instantly find the distance between two locations, cities, or towns. Modern, SEO-friendly, mobile-ready tool.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Distance Calculator 2026",
        "description": "2026 Distance Calculator: Instantly find the distance between two locations, cities, or towns. Modern, SEO-friendly, mobile-ready tool.",
        "url": "https://www.thiyagi.com/distance-calculator",
        "applicationCategory": "TravelApplication",
        "operatingSystem": "Any",
        "permissions": "browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "provider": {
            "@type": "Organization",
            "name": "Thiyagi",
            "url": "https://www.thiyagi.com"
        },
        "featureList": [
            "Distance calculation",
            "City-to-city distance",
            "Travel planning",
            "SEO optimized",
            "2026 updated"
        ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How do I calculate the distance between two cities in 2026?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Enter your start and end locations, then input the known distance or use a map tool. Our 2026 calculator gives instant results."
            }
        },{
            "@type": "Question",
            "name": "Is this distance calculator updated for 2026?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, this tool is updated for 2026 and works for all cities, towns, and custom points."
            }
        },{
            "@type": "Question",
            "name": "Can I use this for travel planning?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Absolutely! Use the result to plan trips, estimate fuel costs, or link to our fuel cost calculator."
            }
        }]
    }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .calculator-card {
            background: linear-gradient(135deg, #38bdf8 0%, #6366f1 100%);
            border-radius: 12px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .result-card {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 50%, #f0f9ff 100%);
            border: 1px solid #0ea5e9;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <nav class="flex mb-6" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <svg class="w-3 h-3 mr-2.5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <a href="/calculators" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2">Calculators</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Distance Calculator</span>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="calculator-container max-w-xl mx-auto">
                    <div class="mt-8 max-w-xl mx-auto">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="bg-blue-600 px-6 py-4">
                                <h2 class="text-xl font-bold text-white">🔗 Related Calculators</h2>
                            </div>
                            <div class="p-6">
                                <div class="grid md:grid-cols-2 gap-4">
                                    <a href="/fuel-cost-calculator" class="block p-4 bg-yellow-50 rounded-lg hover:bg-yellow-100 transition duration-200">
                                        <h4 class="font-semibold text-yellow-800">Fuel Cost Calculator 2026</h4>
                                        <p class="text-yellow-700 text-sm">Estimate your travel fuel expenses</p>
                                    </a>
                                    <a href="/railway-bike-parcel-charges-calculator" class="block p-4 bg-green-50 rounded-lg hover:bg-green-100 transition duration-200">
                                        <h4 class="font-semibold text-green-800">Railway Bike Parcel Charges 2026</h4>
                                        <p class="text-green-700 text-sm">Calculate Indian Railways bike parcel cost</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="calculator-card glass-effect mb-8">
                <div class="text-center px-8 py-6">
                    <h1 class="text-3xl font-bold mb-2 text-black">🗺️ Distance Calculator</h1>
                    <p class="text-black text-lg">Find the distance between two locations easily</p>
                </div>
            </div>
            <h2 class="text-xl font-semibold text-blue-800 mb-4 text-center">Distance Calculator Form 2026</h2>
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
                <?php if ($error): ?>
                <div class="bg-red-50 border-l-4 border-red-500 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-red-800"><?= htmlspecialchars($error) ?></p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="p-8">
                    <form method="POST" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="start" class="block text-sm font-semibold text-gray-700 mb-2">Start Location <span class="text-red-500">*</span></label>
                                <input type="text" name="start" id="start" class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none border-2 border-gray-200 focus:border-blue-500" placeholder="Enter start location" value="<?= htmlspecialchars($_POST['start'] ?? '') ?>" required>
                            </div>
                            <div>
                                <label for="end" class="block text-sm font-semibold text-gray-700 mb-2">End Location <span class="text-red-500">*</span></label>
                                <input type="text" name="end" id="end" class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none border-2 border-gray-200 focus:border-blue-500" placeholder="Enter end location" value="<?= htmlspecialchars($_POST['end'] ?? '') ?>" required>
                            </div>
                        </div>
                        <div>
                            <label for="distance" class="block text-sm font-semibold text-gray-700 mb-2">Distance (km) <span class="text-red-500">*</span></label>
                            <input type="number" name="distance" id="distance" step="0.01" min="0.01" class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none border-2 border-gray-200 focus:border-blue-500" placeholder="Enter distance in kilometers" value="<?= htmlspecialchars($_POST['distance'] ?? '') ?>" required>
                        </div>
                        <div class="pt-4">
                            <button type="submit" class="w-full flex justify-center items-center py-4 px-6 border border-transparent rounded-xl shadow-lg text-lg font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]">
                                <span class="mr-3">🧮</span> Calculate Distance
                            </button>
                        </div>
                    </form>
                    <?php if ($result): ?>
                    <div class="mt-8 result-card p-6 text-center">
                        <h2 class="text-2xl font-bold text-blue-800 mb-2">📏 Result</h2>
                        <div class="text-lg text-gray-800 mb-2"><?= $result ?></div>
                        <button onclick="window.print()" class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">🖨️ Print</button>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="mt-8 max-w-xl mx-auto">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-blue-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">ℹ️ How to Use</h2>
                </div>
                <div class="p-6">
                    <ul class="list-disc list-inside space-y-2 text-gray-700">
                        <li>Enter the start and end locations (city, town, or custom point).</li>
                        <li>Input the known distance in kilometers (use Google Maps or official sources).</li>
                        <li>Click <strong>Calculate Distance</strong> to see the result instantly.</li>
                        <li>Use the print button to save or share your result.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
</body>
</html>
