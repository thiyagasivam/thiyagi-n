<?php include 'header.php'; ?>
<?php
// Enhanced Railway bike parcel charges calculation function
function calculateParcelCharges($distance, $bikeWeight, $packingCharges = 0, $insurance = 0, $bikeType = 'standard', $serviceType = 'regular') {
    // Updated 2025 rates based on bike type and service
    $baseRates = [
        'standard' => 120,
        'heavy' => 150,
        'electric' => 140,
        'premium' => 160
    ];
    
    $perKmRates = [
        'regular' => 5.5,
        'express' => 8.0,
        'superfast' => 12.0
    ];
    
    $perKgRates = [
        'standard' => 3.2,
        'heavy' => 4.0,
        'electric' => 3.5,
        'premium' => 4.5
    ];
    
    // Get rates based on bike type and service
    $baseRate = $baseRates[$bikeType] ?? $baseRates['standard'];
    $perKmRate = $perKmRates[$serviceType] ?? $perKmRates['regular'];
    $perKgRate = $perKgRates[$bikeType] ?? $perKgRates['standard'];
    
    // Calculate charges
    $distanceCharge = $distance * $perKmRate;
    $weightCharge = $bikeWeight * $perKgRate;
    
    // Additional charges based on distance
    $handlingCharge = ($distance > 500) ? 100 : (($distance > 200) ? 50 : 25);
    $fuelSurcharge = $distance * 0.5; // Fuel surcharge
    
    // Service tax and other government charges
    $serviceTax = ($baseRate + $distanceCharge + $weightCharge) * 0.18; // 18% GST
    
    $subTotal = $baseRate + $distanceCharge + $weightCharge + $handlingCharge + $fuelSurcharge;
    $totalBeforeTax = $subTotal + $packingCharges + $insurance;
    $totalCharge = $totalBeforeTax + $serviceTax;
    
    // Calculate estimated delivery time
    $deliveryDays = calculateDeliveryTime($distance, $serviceType);
    
    return [
        'base_rate' => $baseRate,
        'distance_charge' => $distanceCharge,
        'weight_charge' => $weightCharge,
        'handling_charge' => $handlingCharge,
        'fuel_surcharge' => $fuelSurcharge,
        'packing_charges' => $packingCharges,
        'insurance' => $insurance,
        'service_tax' => $serviceTax,
        'sub_total' => $subTotal,
        'total_before_tax' => $totalBeforeTax,
        'total_charge' => $totalCharge,
        'delivery_days' => $deliveryDays,
        'per_km_rate' => $perKmRate,
        'per_kg_rate' => $perKgRate
    ];
}

function calculateDeliveryTime($distance, $serviceType) {
    $baseDays = [
        'regular' => ['min' => 3, 'max' => 7],
        'express' => ['min' => 2, 'max' => 4],
        'superfast' => ['min' => 1, 'max' => 2]
    ];
    
    $service = $baseDays[$serviceType] ?? $baseDays['regular'];
    
    // Adjust based on distance
    if ($distance > 1000) {
        $service['min'] += 2;
        $service['max'] += 3;
    } elseif ($distance > 500) {
        $service['min'] += 1;
        $service['max'] += 2;
    }
    
    return $service;
}

function getBikeTypeDetails($bikeType) {
    $details = [
        'standard' => ['name' => 'Standard Bike', 'desc' => 'Regular motorcycles (100-200cc)', 'icon' => '🏍️'],
        'heavy' => ['name' => 'Heavy Bike', 'desc' => 'Heavy motorcycles (>300cc)', 'icon' => '🏍️'],
        'electric' => ['name' => 'Electric Bike', 'desc' => 'Electric motorcycles & scooters', 'icon' => '⚡'],
        'premium' => ['name' => 'Premium Bike', 'desc' => 'Luxury & imported bikes', 'icon' => '🏆']
    ];
    return $details[$bikeType] ?? $details['standard'];
}

// Handle form submission
$result = null;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $distance = floatval($_POST['distance'] ?? 0);
    $bikeWeight = floatval($_POST['weight'] ?? 0);
    $packingCharges = floatval($_POST['packing_charges'] ?? 0);
    $insurance = floatval($_POST['insurance'] ?? 0);
    $bikeType = $_POST['bike_type'] ?? 'standard';
    $serviceType = $_POST['service_type'] ?? 'regular';
    
    // Validation
    if ($distance <= 0) {
        $error = 'Please enter a valid distance greater than 0 km.';
    } elseif ($bikeWeight <= 0) {
        $error = 'Please enter a valid bike weight greater than 0 kg.';
    } elseif ($distance > 5000) {
        $error = 'Distance cannot exceed 5000 km for railway parcel service.';
    } elseif ($bikeWeight > 500) {
        $error = 'Bike weight cannot exceed 500 kg for railway parcel service.';
    } else {
        $result = calculateParcelCharges($distance, $bikeWeight, $packingCharges, $insurance, $bikeType, $serviceType);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Bike Parcel Charges Calculator 2025 - Indian Railways Two-Wheeler Transport Cost</title>
    <meta name="description" content="Calculate Indian Railways bike parcel charges instantly. Check 2025 freight rates for two-wheelers (bikes, scooters) between stations with delivery time estimates and booking tips.">
    <meta name="keywords" content="railway bike parcel charges, indian railways freight calculator, two wheeler transport cost, bike shipping charges, railway parcel booking, motorcycle transport rates">
    <link rel="canonical" href="https://www.thiyagi.com/railway-bike-parcel-charges-calculator">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/railway-bike-parcel-charges-calculator">
    <meta property="og:title" content="Railway Bike Parcel Charges Calculator 2025 - Indian Railways">
    <meta property="og:description" content="Calculate Indian Railways bike parcel charges instantly. Check 2025 freight rates for two-wheelers between stations with delivery estimates.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/railway-bike-parcel-charges-calculator">
    <meta property="twitter:title" content="Railway Bike Parcel Charges Calculator 2025 - Indian Railways">
    <meta property="twitter:description" content="Calculate Indian Railways bike parcel charges instantly. Check 2025 freight rates for two-wheelers between stations.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Railway Bike Parcel Charges Calculator",
        "description": "Calculate Indian Railways bike parcel charges instantly. Check freight rates for two-wheelers between stations with delivery time estimates.",
        "url": "https://www.thiyagi.com/railway-bike-parcel-charges-calculator",
        "applicationCategory": "FinanceApplication",
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
            "Railway parcel charge calculation",
            "Distance-based pricing",
            "Weight-based pricing",
            "Insurance calculation",
            "Packing charges estimation"
        ]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://www.thiyagi.com"
        },{
            "@type": "ListItem",
            "position": 2,
            "name": "Calculators",
            "item": "https://www.thiyagi.com/calculators"
        },{
            "@type": "ListItem",
            "position": 3,
            "name": "Railway Bike Parcel Calculator",
            "item": "https://www.thiyagi.com/railway-bike-parcel-charges-calculator"
        }]
    }
    </script>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [{
            "@type": "Question",
            "name": "How to calculate railway bike parcel charges?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Railway bike parcel charges are calculated based on distance (per km rate), bike weight (per kg rate), plus base charges, packing charges, and optional insurance. Our calculator provides instant estimates using current Indian Railways rates."
            }
        },{
            "@type": "Question",
            "name": "What documents are required for bike parcel booking?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "For bike parcel booking in Indian Railways, you need: Original RC (Registration Certificate), Insurance papers, ID proof, Address proof, and PUC certificate. Ensure all documents are valid and match the bike details."
            }
        },{
            "@type": "Question",
            "name": "How long does railway bike parcel delivery take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Railway bike parcel delivery typically takes 2-7 days depending on distance and route connectivity. Express trains may deliver faster, while goods trains take longer. Check with your local railway station for specific route timings."
            }
        },{
            "@type": "Question",
            "name": "Is insurance mandatory for bike parcel in railways?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Insurance is not mandatory but highly recommended for bike parcel. It protects against damage, theft, or loss during transit. Insurance cost is typically 0.1-0.2% of declared bike value with minimum charges applicable."
            }
        }]
    }
    </script>
    <style>
        .calculator-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .result-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        .result-item:hover {
            background-color: #f8fafc;
            padding-left: 8px;
        }
        .subtotal-item {
            border-top: 2px solid #e2e8f0;
            margin-top: 12px;
            padding-top: 12px;
            background-color: #f1f5f9;
            border-radius: 6px;
            padding: 12px;
        }
        .total-result {
            font-weight: bold;
            color: #1e40af;
            border-top: 3px solid #1e40af;
            margin-top: 16px;
            padding-top: 16px;
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            border-radius: 8px;
            padding: 16px;
            font-size: 1.1em;
        }
        .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        .form-input {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
        }
        .form-input:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            transform: translateY(-1px);
        }
        .form-label {
            transition: all 0.3s ease;
            font-weight: 500;
        }
        .calculator-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 12px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .input-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            pointer-events: none;
        }
        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
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
        .progress-bar {
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #1d4ed8);
            border-radius: 2px;
            transition: width 0.5s ease;
        }
        .tooltip {
            position: relative;
        }
        .tooltip:hover::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            background: #1f2937;
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            font-size: 12px;
            white-space: nowrap;
            z-index: 1000;
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8">
        <!-- Breadcrumb Navigation -->
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
                        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Railway Bike Parcel Calculator</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="calculator-container">
            <div class="calculator-card glass-effect">
                <div class="text-center px-8 py-6">
                    <h1 class="text-3xl font-bold mb-2 text-black">🚂 Railway Bike Parcel Calculator</h1>
                    <p class="text-black text-lg">Calculate accurate charges for bike transportation via Indian Railways</p>
                </div>
            </div>
            
            <div class="bg-white rounded-xl shadow-2xl overflow-hidden mt-6">
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
                    <form method="POST" class="space-y-6" id="calculatorForm">
                        <!-- Route Information -->
                        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 rounded-lg border border-blue-200">
                            <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                                <span class="mr-2">🗺️</span> Route Information
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label for="distance" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Distance (km) <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="distance" id="distance" step="0.01" min="1" max="5000"
                                               class="form-input w-full px-4 py-3 pr-12 rounded-lg shadow-sm focus:outline-none" 
                                               placeholder="Enter distance in kilometers" 
                                               value="<?= htmlspecialchars($_POST['distance'] ?? '') ?>" required>
                                        <span class="input-icon">📏</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Distance between source and destination stations</p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="service_type" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Service Type <span class="text-red-500">*</span>
                                    </label>
                                    <select name="service_type" id="service_type" 
                                            class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none">
                                        <option value="regular" <?= ($_POST['service_type'] ?? '') === 'regular' ? 'selected' : '' ?>>
                                            🚂 Regular Service (₹5.5/km)
                                        </option>
                                        <option value="express" <?= ($_POST['service_type'] ?? '') === 'express' ? 'selected' : '' ?>>
                                            🚄 Express Service (₹8.0/km)
                                        </option>
                                        <option value="superfast" <?= ($_POST['service_type'] ?? '') === 'superfast' ? 'selected' : '' ?>>
                                            ⚡ Superfast Service (₹12.0/km)
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Bike Information -->
                        <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <h3 class="text-lg font-semibold text-green-800 mb-4 flex items-center">
                                <span class="mr-2">🏍️</span> Bike Information
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label for="weight" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Bike Weight (kg) <span class="text-red-500">*</span>
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="weight" id="weight" step="0.1" min="1" max="500"
                                               class="form-input w-full px-4 py-3 pr-12 rounded-lg shadow-sm focus:outline-none" 
                                               placeholder="Enter bike weight in kilograms" 
                                               value="<?= htmlspecialchars($_POST['weight'] ?? '') ?>" required>
                                        <span class="input-icon">⚖️</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Include fuel and accessories weight</p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="bike_type" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Bike Category <span class="text-red-500">*</span>
                                    </label>
                                    <select name="bike_type" id="bike_type" 
                                            class="form-input w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none">
                                        <option value="standard" <?= ($_POST['bike_type'] ?? '') === 'standard' ? 'selected' : '' ?>>
                                            🏍️ Standard (100-200cc) - ₹120 base
                                        </option>
                                        <option value="heavy" <?= ($_POST['bike_type'] ?? '') === 'heavy' ? 'selected' : '' ?>>
                                            🏍️ Heavy Bike (>300cc) - ₹150 base
                                        </option>
                                        <option value="electric" <?= ($_POST['bike_type'] ?? '') === 'electric' ? 'selected' : '' ?>>
                                            ⚡ Electric Vehicle - ₹140 base
                                        </option>
                                        <option value="premium" <?= ($_POST['bike_type'] ?? '') === 'premium' ? 'selected' : '' ?>>
                                            🏆 Premium/Imported - ₹160 base
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Charges -->
                        <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-lg border border-purple-200">
                            <h3 class="text-lg font-semibold text-purple-800 mb-4 flex items-center">
                                <span class="mr-2">💰</span> Additional Charges (Optional)
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label for="packing_charges" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Packing Charges (₹)
                                        <span class="tooltip" data-tooltip="Professional packing service charges">ℹ️</span>
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="packing_charges" id="packing_charges" step="1" min="0" 
                                               class="form-input w-full px-4 py-3 pr-12 rounded-lg shadow-sm focus:outline-none" 
                                               placeholder="Enter packing charges" 
                                               value="<?= htmlspecialchars($_POST['packing_charges'] ?? '0') ?>">
                                        <span class="input-icon">📦</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Typical range: ₹200-500</p>
                                </div>
                                
                                <div class="form-group">
                                    <label for="insurance" class="form-label block text-sm font-semibold text-gray-700 mb-2">
                                        Insurance Value (₹)
                                        <span class="tooltip" data-tooltip="Declared value for insurance coverage">ℹ️</span>
                                    </label>
                                    <div class="relative">
                                        <input type="number" name="insurance" id="insurance" step="1" min="0" 
                                               class="form-input w-full px-4 py-3 pr-12 rounded-lg shadow-sm focus:outline-none" 
                                               placeholder="Enter insurance amount" 
                                               value="<?= htmlspecialchars($_POST['insurance'] ?? '0') ?>">
                                        <span class="input-icon">🛡️</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">Insurance premium: 0.1-0.2% of declared value</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="pt-4">
                            <button type="submit" 
                                    class="w-full flex justify-center items-center py-4 px-6 border border-transparent rounded-xl shadow-lg text-lg font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform transition-all duration-200 hover:scale-[1.02] active:scale-[0.98]">
                                <span class="mr-3">🧮</span> Calculate Parcel Charges
                            </button>
                        </div>
                    </form>
                
                <?php if ($result): ?>
                <div class="mt-8">
                    <!-- Results Header -->
                    <div class="result-card p-6 mb-6">
                        <div class="text-center mb-6">
                            <h2 class="text-2xl font-bold text-blue-800 mb-2">📊 Calculation Results</h2>
                            <p class="text-blue-600">Detailed breakdown of your railway bike parcel charges</p>
                        </div>
                        
                        <!-- Quick Summary Cards -->
                        <div class="grid md:grid-cols-3 gap-4 mb-6">
                            <div class="bg-gradient-to-br from-green-100 to-green-200 p-4 rounded-lg text-center border border-green-300">
                                <div class="text-2xl mb-2">💰</div>
                                <div class="text-2xl font-bold text-green-800">₹<?= number_format($result['total_charge'], 0) ?></div>
                                <div class="text-sm text-green-700">Total Amount</div>
                            </div>
                            <div class="bg-gradient-to-br from-blue-100 to-blue-200 p-4 rounded-lg text-center border border-blue-300">
                                <div class="text-2xl mb-2">📦</div>
                                <div class="text-2xl font-bold text-blue-800"><?= $result['delivery_days']['min'] ?>-<?= $result['delivery_days']['max'] ?></div>
                                <div class="text-sm text-blue-700">Delivery Days</div>
                            </div>
                            <div class="bg-gradient-to-br from-purple-100 to-purple-200 p-4 rounded-lg text-center border border-purple-300">
                                <div class="text-2xl mb-2">🏍️</div>
                                <div class="text-xl font-bold text-purple-800"><?= htmlspecialchars($_POST['weight']) ?> kg</div>
                                <div class="text-sm text-purple-700">Bike Weight</div>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Breakdown -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200">
                        <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-6 py-4 border-b">
                            <h3 class="text-lg font-semibold text-gray-800">💳 Detailed Charge Breakdown</h3>
                        </div>
                        
                        <div class="p-6 space-y-3">
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">🏷️</span>
                                    <span class="font-medium">Base Rate (<?= getBikeTypeDetails($_POST['bike_type'] ?? 'standard')['name'] ?>):</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['base_rate'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">📏</span>
                                    <span class="font-medium">Distance Charge (<?= htmlspecialchars($_POST['distance']) ?> km × ₹<?= $result['per_km_rate'] ?>/km):</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['distance_charge'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">⚖️</span>
                                    <span class="font-medium">Weight Charge (<?= htmlspecialchars($_POST['weight']) ?> kg × ₹<?= $result['per_kg_rate'] ?>/kg):</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['weight_charge'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">🚛</span>
                                    <span class="font-medium">Handling Charge:</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['handling_charge'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">⛽</span>
                                    <span class="font-medium">Fuel Surcharge:</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['fuel_surcharge'], 2) ?></span>
                            </div>
                            
                            <?php if ($result['packing_charges'] > 0): ?>
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">📦</span>
                                    <span class="font-medium">Packing Charges:</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['packing_charges'], 2) ?></span>
                            </div>
                            <?php endif; ?>
                            
                            <?php if ($result['insurance'] > 0): ?>
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">🛡️</span>
                                    <span class="font-medium">Insurance:</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['insurance'], 2) ?></span>
                            </div>
                            <?php endif; ?>
                            
                            <div class="result-item subtotal-item">
                                <div class="flex items-center">
                                    <span class="mr-2">📋</span>
                                    <span class="font-semibold">Subtotal (Before Tax):</span>
                                </div>
                                <span class="font-bold text-blue-600">₹<?= number_format($result['total_before_tax'], 2) ?></span>
                            </div>
                            
                            <div class="result-item">
                                <div class="flex items-center">
                                    <span class="mr-2">🧾</span>
                                    <span class="font-medium">GST (18%):</span>
                                </div>
                                <span class="font-bold text-gray-800">₹<?= number_format($result['service_tax'], 2) ?></span>
                            </div>
                            
                            <div class="result-item total-result">
                                <div class="flex items-center">
                                    <span class="mr-2">💰</span>
                                    <span class="font-bold text-lg">Total Estimated Charges:</span>
                                </div>
                                <span class="font-bold text-xl text-blue-800">₹<?= number_format($result['total_charge'], 2) ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Information -->
                    <div class="mt-6 grid md:grid-cols-2 gap-6">
                        <!-- Delivery Information -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-6 rounded-lg border border-green-200">
                            <h4 class="font-semibold text-green-800 mb-3 flex items-center">
                                <span class="mr-2">🚚</span> Delivery Information
                            </h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span>Service Type:</span>
                                    <span class="font-medium capitalize"><?= htmlspecialchars($_POST['service_type'] ?? 'regular') ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Estimated Delivery:</span>
                                    <span class="font-medium"><?= $result['delivery_days']['min'] ?>-<?= $result['delivery_days']['max'] ?> days</span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Distance:</span>
                                    <span class="font-medium"><?= htmlspecialchars($_POST['distance']) ?> km</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Cost per KM/KG -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-lg border border-blue-200">
                            <h4 class="font-semibold text-blue-800 mb-3 flex items-center">
                                <span class="mr-2">📊</span> Rate Analysis
                            </h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span>Cost per KM:</span>
                                    <span class="font-medium">₹<?= number_format($result['per_km_rate'], 2) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Cost per KG:</span>
                                    <span class="font-medium">₹<?= number_format($result['per_kg_rate'], 2) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span>Total per KM:</span>
                                    <span class="font-medium">₹<?= number_format($result['total_charge'] / floatval($_POST['distance']), 2) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="mt-6 flex flex-wrap gap-3">
                        <button onclick="printResults()" class="flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
                            <span class="mr-2">🖨️</span> Print Results
                        </button>
                        <button onclick="shareResults()" class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            <span class="mr-2">📱</span> Share Results
                        </button>
                        <button onclick="calculateAgain()" class="flex items-center px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors">
                            <span class="mr-2">🔄</span> Calculate Again
                        </button>
                    </div>
                    
                    <div class="mt-6 bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-r-lg">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <span class="text-yellow-400 text-xl">⚠️</span>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-yellow-700">
                                    <strong>Important:</strong> These are estimated charges based on 2025 Indian Railways rates. 
                                    Actual charges may vary based on specific railway policies, route, and additional services. 
                                    Please confirm with your local railway parcel office before booking.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- Educational Content Section -->
        <div class="mt-8 space-y-8">
            <!-- How It Works -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-green-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">🚂 How Railway Bike Parcel Works</h2>
                </div>
                <div class="p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">📋 Booking Process</h3>
                            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                                <li>Visit the originating railway station's parcel office</li>
                                <li>Submit required documents and fill parcel booking form</li>
                                <li>Pay calculated charges (use our calculator for estimates)</li>
                                <li>Get parcel receipt with tracking number</li>
                                <li>Bike will be loaded in goods compartment</li>
                                <li>Collect bike from destination station parcel office</li>
                            </ol>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">📄 Required Documents</h3>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>Original RC (Registration Certificate)</strong></li>
                                <li><strong>Valid Insurance Papers</strong></li>
                                <li><strong>PUC (Pollution Under Control) Certificate</strong></li>
                                <li><strong>ID Proof</strong> (Aadhaar, PAN, Driving License)</li>
                                <li><strong>Address Proof</strong></li>
                                <li><strong>Passport Size Photos</strong> (2 copies)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pricing Information -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-blue-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">💰 Pricing Structure 2025</h2>
                </div>
                <div class="p-6">
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center p-4 bg-blue-50 rounded-lg">
                            <div class="text-blue-600 text-2xl mb-2">🏷️</div>
                            <h3 class="font-semibold text-blue-800 mb-2">Base Charges</h3>
                            <p class="text-blue-700 text-sm">Fixed booking fee regardless of distance or weight</p>
                            <p class="text-lg font-bold text-blue-600">₹100</p>
                        </div>
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <div class="text-green-600 text-2xl mb-2">📏</div>
                            <h3 class="font-semibold text-green-800 mb-2">Distance Rate</h3>
                            <p class="text-green-700 text-sm">Per kilometer transportation charge</p>
                            <p class="text-lg font-bold text-green-600">₹5/km</p>
                        </div>
                        <div class="text-center p-4 bg-purple-50 rounded-lg">
                            <div class="text-purple-600 text-2xl mb-2">⚖️</div>
                            <h3 class="font-semibold text-purple-800 mb-2">Weight Rate</h3>
                            <p class="text-purple-700 text-sm">Per kilogram weight charge</p>
                            <p class="text-lg font-bold text-purple-600">₹3/kg</p>
                        </div>
                    </div>
                    
                    <div class="mt-6 bg-yellow-50 p-4 rounded-lg border border-yellow-200">
                        <h4 class="font-semibold text-yellow-800 mb-2">💡 Additional Charges</h4>
                        <ul class="text-yellow-700 text-sm space-y-1">
                            <li><strong>Packing Charges:</strong> ₹200-500 (depends on station and bike size)</li>
                            <li><strong>Insurance:</strong> 0.1-0.2% of declared bike value (minimum ₹50)</li>
                            <li><strong>Loading/Unloading:</strong> ₹50-100 per bike</li>
                            <li><strong>Demurrage:</strong> ₹10/day after free period (usually 7 days)</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Tips and Guidelines -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-purple-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">💡 Tips & Guidelines</h2>
                </div>
                <div class="p-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">✅ Best Practices</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Book during off-peak seasons for better service</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Clean the bike and remove personal items</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Take photos of bike condition before dispatch</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Keep fuel tank nearly empty (safety requirement)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2 mt-0.5">✓</span>
                                    <span>Verify all documents are original and valid</span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 mb-3">⚠️ Important Notes</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Delivery time varies: 2-7 days depending on route</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Insurance is recommended for expensive bikes</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Check destination station parcel office timings</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Carry original receipt for bike collection</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-red-500 mr-2 mt-0.5">!</span>
                                    <span>Rates may vary slightly between different stations</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-indigo-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">❓ Frequently Asked Questions</h2>
                </div>
                <div class="p-6">
                    <div class="space-y-4">
                        <div class="border-l-4 border-indigo-500 pl-4">
                            <h4 class="font-semibold text-gray-800">Q: Can I send a bike without registration papers?</h4>
                            <p class="text-gray-700 text-sm mt-1">A: No, original RC (Registration Certificate) is mandatory for bike parcel booking. Without RC, railways will not accept the bike for transportation.</p>
                        </div>
                        <div class="border-l-4 border-indigo-500 pl-4">
                            <h4 class="font-semibold text-gray-800">Q: What is the maximum weight limit for bike parcel?</h4>
                            <p class="text-gray-700 text-sm mt-1">A: Most stations accept bikes up to 300-400 kg. However, check with your local station as limits may vary based on infrastructure and crane capacity.</p>
                        </div>
                        <div class="border-l-4 border-indigo-500 pl-4">
                            <h4 class="font-semibold text-gray-800">Q: How to track my bike parcel?</h4>
                            <p class="text-gray-700 text-sm mt-1">A: Use the parcel receipt number to track your bike on Indian Railways website or visit the destination station's parcel office for status updates.</p>
                        </div>
                        <div class="border-l-4 border-indigo-500 pl-4">
                            <h4 class="font-semibold text-gray-800">Q: What if my bike gets damaged during transit?</h4>
                            <p class="text-gray-700 text-sm mt-1">A: If insured, file a claim with supporting photos and documents. Without insurance, railways have limited liability. Always opt for insurance for valuable bikes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Tools -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-gray-600 px-6 py-4">
                    <h2 class="text-xl font-bold text-white">🔗 Related Calculators</h2>
                </div>
                <div class="p-6">
                    <div class="grid md:grid-cols-3 gap-4">
                        <a href="/emi-calculator" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition duration-200">
                            <h4 class="font-semibold text-blue-800">EMI Calculator</h4>
                            <p class="text-blue-700 text-sm">Calculate loan EMI for bike purchase</p>
                        </a>
                        <a href="/distance-calculator" class="block p-4 bg-green-50 rounded-lg hover:bg-green-100 transition duration-200">
                            <h4 class="font-semibold text-green-800">Distance Calculator</h4>
                            <p class="text-green-700 text-sm">Find distance between cities</p>
                        </a>
                        <a href="/fuel-cost-calculator" class="block p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition duration-200">
                            <h4 class="font-semibant text-purple-800">Fuel Cost Calculator</h4>
                            <p class="text-purple-700 text-sm">Calculate travel fuel expenses</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    // Auto-format numbers as user types
    const numberInputs = document.querySelectorAll('input[type="number"]');
    numberInputs.forEach(input => {
        input.addEventListener('input', function(e) {
            let value = e.target.value;
            if (value && !isNaN(value)) {
                e.target.style.color = '#065f46'; // green-800
            } else {
                e.target.style.color = '#dc2626'; // red-600
            }
        });
    });

    // Real-time calculation preview
    function updatePreview() {
        const distance = document.getElementById('distance').value;
        const weight = document.getElementById('weight').value;
        
        if (distance && weight && distance > 0 && weight > 0) {
            const estimatedCost = (parseFloat(distance) * 5) + (parseFloat(weight) * 3) + 200;
            const previewElement = document.getElementById('preview-cost');
            if (previewElement) {
                previewElement.textContent = `Estimated: ₹${estimatedCost.toFixed(0)}`;
                previewElement.style.display = 'block';
            }
        }
    }

    // Add event listeners for real-time preview
    document.getElementById('distance').addEventListener('input', updatePreview);
    document.getElementById('weight').addEventListener('input', updatePreview);

    // Form validation enhancement
    document.querySelector('form').addEventListener('submit', function(e) {
        const requiredFields = this.querySelectorAll('[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.value) {
                isValid = false;
                field.classList.add('border-red-500');
            } else {
                field.classList.remove('border-red-500');
            }
        });
        
        if (!isValid) {
            e.preventDefault();
            alert('Please fill in all required fields');
        }
    });

    // Action button functions
    function printResults() {
        // Create a print-friendly version
        const printContent = document.querySelector('.mt-8').cloneNode(true);
        const buttons = printContent.querySelectorAll('button');
        buttons.forEach(btn => btn.style.display = 'none');
        
        const printWindow = window.open('', '_blank');
        printWindow.document.write(`
            <html>
                <head>
                    <title>Railway Bike Parcel Charges - Calculation Results</title>
                    <style>
                        body { font-family: Arial, sans-serif; margin: 20px; }
                        .result-card { border: 2px solid #3B82F6; border-radius: 8px; padding: 20px; margin: 10px 0; }
                        .result-item { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #E5E7EB; }
                        .total-result { font-weight: bold; font-size: 1.2em; border-top: 2px solid #3B82F6; }
                        .grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; }
                        @media print { button { display: none !important; } }
                    </style>
                </head>
                <body>
                    <h1>Railway Bike Parcel Charges Calculator</h1>
                    <p>Generated on: ${new Date().toLocaleDateString()}</p>
                    ${printContent.innerHTML}
                </body>
            </html>
        `);
        printWindow.document.close();
        printWindow.print();
    }

    function shareResults() {
        if (navigator.share) {
            const totalCharge = '<?= $result ? "₹" . number_format($result['total_charge'], 2) : "N/A" ?>';
            navigator.share({
                title: 'Railway Bike Parcel Charges',
                text: `My bike parcel charges calculation: ${totalCharge} for <?= $_POST['distance'] ?? 'N/A' ?>km distance.`,
                url: window.location.href
            });
        } else {
            // Fallback for browsers that don't support Web Share API
            const shareData = {
                title: 'Railway Bike Parcel Charges Calculator',
                text: `Check out my bike parcel charges calculation: <?= $result ? "₹" . number_format($result['total_charge'], 2) : "N/A" ?> for <?= $_POST['distance'] ?? 'N/A' ?>km`,
                url: window.location.href
            };
            
            if (navigator.clipboard) {
                navigator.clipboard.writeText(`${shareData.text} - ${shareData.url}`);
                alert('Results copied to clipboard! You can now paste and share.');
            } else {
                prompt('Copy this link to share:', `${shareData.text} - ${shareData.url}`);
            }
        }
    }

    function calculateAgain() {
        // Smooth scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
        
        // Reset form
        document.querySelector('form').reset();
        
        // Clear any validation styles
        const inputs = document.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.classList.remove('border-red-500', 'border-green-500');
        });
        
        // Focus on first input
        setTimeout(() => {
            document.getElementById('from_station').focus();
        }, 500);
    }

    // Add smooth scroll for better UX
    document.addEventListener('DOMContentLoaded', function() {
        <?php if ($result): ?>
        // Auto-scroll to results after calculation
        setTimeout(() => {
            const resultsSection = document.querySelector('.mt-8');
            if (resultsSection) {
                resultsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }, 300);
        <?php endif; ?>
    });

    // Enhanced form interactivity
    document.querySelectorAll('select, input').forEach(element => {
        element.addEventListener('change', function() {
            this.classList.add('border-green-500');
            setTimeout(() => this.classList.remove('border-green-500'), 2000);
        });
    });
    </script>
</body>
<?php include 'footer.php';?>
</html>
