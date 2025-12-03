<?php 
include 'header.php';

// Handle dynamic URL parameter
$inputValue = null;
$outputValue = null;
$isDynamicPage = false;
$originalValue = null;
$displayFeet = 0;
$displayInches = 0;

if (isset($_GET['value'])) {
    $value = trim($_GET['value']);
    $originalValue = $value; // Store original format for URLs
    
    // Remove commas and validate the input value (must be numeric and non-negative)
    $cleanValue = str_replace(',', '', $value);
    if (is_numeric($cleanValue) && floatval($cleanValue) >= 0) {
        $inputValue = floatval($cleanValue);
        // Treat the input as total inches and convert to cm
        $outputValue = $inputValue * 2.54; // 1 inch = 2.54 cm
        // Calculate feet and inches for display
        $displayFeet = floor($inputValue / 12);
        $displayInches = $inputValue - ($displayFeet * 12);
        $isDynamicPage = true;
    }
}

// Generate dynamic content
$pageTitle = $isDynamicPage ? 
    "Convert {$displayFeet}'{$displayInches}\" to CM 2025 | {$displayFeet} ft {$displayInches} in = " . number_format($outputValue, 2) . " cm | Height Converter" : 
    "Best Feet and Inches to CM Converter 2025 | Height Calculator | Free Length Conversion";

$pageDescription = $isDynamicPage ? 
    "Convert {$displayFeet} feet {$displayInches} inches to centimeters in 2025. {$displayFeet}'{$displayInches}\" equals " . number_format($outputValue, 2) . " cm. Free, instant, accurate height conversion." :
    "Convert feet and inches to centimeters instantly with our best 2025 accurate converter. Perfect for height measurements, body measurements & length conversions.";

$canonicalUrl = $isDynamicPage ? 
    "https://www.thiyagi.com/feet-inches-to-cm/{$originalValue}" : 
    "https://www.thiyagi.com/feet-inches-to-cm";
?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="feet inches to cm, ft in to centimeters, height converter, feet to cm, inches to cm, height calculator 2025">
<meta name="author" content="Thiyagi Tools 2025">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi Tools">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<!-- Schema.org JSON-LD -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Feet and Inches to CM Converter 2025",
  "description": "<?php echo htmlspecialchars($pageDescription); ?>",
  "url": "<?php echo $canonicalUrl; ?>",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Web Browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant feet and inches to cm conversion",
    "Accurate height calculations for 2025",
    "Perfect for body measurements",
    "Mobile-friendly design",
    "Copy results feature"
  ]
}
</script>

<?php if ($isDynamicPage): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How many centimeters is <?php echo $displayFeet; ?>' <?php echo number_format($displayInches, 1); ?>\"?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo $displayFeet; ?> feet <?php echo number_format($displayInches, 1); ?> inches equals exactly <?php echo number_format($outputValue, 2); ?> centimeters. This conversion uses the standard factor: 1 inch = 2.54 cm."
      }
    },
    {
      "@type": "Question",
      "name": "How do I convert <?php echo $displayFeet; ?>' <?php echo number_format($displayInches, 1); ?>\" to cm?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To convert <?php echo $displayFeet; ?>' <?php echo number_format($displayInches, 1); ?>\" to centimeters: (1) Convert feet to inches: <?php echo $displayFeet; ?> × 12 = <?php echo $displayFeet * 12; ?> inches, (2) Add remaining inches: <?php echo $displayFeet * 12; ?> + <?php echo number_format($displayInches, 1); ?> = <?php echo number_format($inputValue, 1); ?> total inches, (3) Multiply by 2.54: <?php echo number_format($inputValue, 1); ?> × 2.54 = <?php echo number_format($outputValue, 2); ?> cm."
      }
    }
  ]
}
</script>
<?php endif; ?>

<style>
:root {
    --primary-violet: #8b5cf6;
    --primary-violet-dark: #7c3aed;
    --primary-violet-light: #c4b5fd;
}
.bg-violet-600 { background-color: var(--primary-violet); }
.hover\:bg-violet-700:hover { background-color: var(--primary-violet-dark); }
.text-violet-600 { color: var(--primary-violet); }
.border-violet-500 { border-color: var(--primary-violet-light); }
.focus\:ring-violet-500:focus { --tw-ring-color: var(--primary-violet); }
</style>

<main class="min-h-screen bg-gradient-to-br from-violet-50 to-purple-50">
  <!-- Breadcrumb Navigation -->
  <nav class="pt-16 pb-4" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <ol class="flex items-center space-x-2 text-sm text-gray-600" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" class="hover:text-violet-600 transition-colors" itemprop="item">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/length-converter.php" class="hover:text-violet-600 transition-colors" itemprop="item">
            <span itemprop="name">Length Converter</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
        <li><span class="mx-2">/</span></li>
        <?php if ($isDynamicPage): ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/feet-inches-to-cm.php" class="hover:text-violet-600 transition-colors" itemprop="item">
            <span itemprop="name">Feet and Inches to CM</span>
          </a>
          <meta itemprop="position" content="3">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-violet-600 font-medium" itemprop="name"><?php echo $displayFeet; ?>' <?php echo number_format($displayInches, 1); ?>"</span>
          <meta itemprop="position" content="4">
        </li>
        <?php else: ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-violet-600 font-medium" itemprop="name">Feet and Inches to CM</span>
          <meta itemprop="position" content="3">
        </li>
        <?php endif; ?>
      </ol>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="pt-8 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
          <?php if ($isDynamicPage): ?>
          Convert <?php echo $displayFeet; ?>' <?php echo number_format($displayInches, 1); ?>" to Centimeters
          <?php else: ?>
          Feet and Inches to CM Converter 2025
          <?php endif; ?>
        </h1>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 max-w-2xl mx-auto border-2 border-violet-200">
          <div class="text-center">
            <p class="text-gray-600 text-lg mb-4">Conversion Result:</p>
            <div class="bg-gradient-to-r from-violet-50 to-purple-50 rounded-xl p-6">
              <p class="text-3xl md:text-4xl font-bold text-violet-600 mb-2">
                <?php echo $displayFeet; ?>' <?php echo number_format($displayInches, 2); ?>" = 
                <?php echo number_format($outputValue, 2); ?> cm
              </p>
              <p class="text-sm text-gray-500">
                <?php echo $displayFeet; ?> feet <?php echo number_format($displayInches, 2); ?> inches equals 
                <?php echo number_format($outputValue, 2); ?> centimeters
              </p>
              <p class="text-xs text-gray-400 mt-2">
                (Total: <?php echo number_format($inputValue, 2); ?> inches)
              </p>
            </div>
          </div>
        </div>
        <?php else: ?>
        <p class="text-xl text-gray-600 mb-8">
          Free, instant, and accurate feet and inches to centimeters conversion for height measurements in 2025
        </p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- Converter Tool -->
  <section class="pb-12">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="bg-white rounded-2xl shadow-xl p-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center flex items-center justify-center gap-3">
          <i class="fas fa-ruler-vertical text-violet-600" aria-hidden="true"></i>
          Height Converter
        </h2>
        
        <form id="converterForm" class="space-y-6">
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label for="feetValue" class="block text-sm font-medium text-gray-700 mb-2">
                Feet
              </label>
              <input 
                type="number" 
                id="feetValue" 
                value="<?php echo $isDynamicPage ? $displayFeet : '5'; ?>"
                step="1"
                min="0"
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 transition-colors text-lg"
                placeholder="Feet..."
              >
            </div>
            <div>
              <label for="inchesValue" class="block text-sm font-medium text-gray-700 mb-2">
                Inches
              </label>
              <input 
                type="number" 
                id="inchesValue" 
                value="<?php echo $isDynamicPage ? number_format($displayInches, 1) : '7'; ?>"
                step="0.1"
                min="0"
                max="11.9"
                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 transition-colors text-lg"
                placeholder="Inches..."
              >
            </div>
          </div>
          
          <div>
            <label for="cmResult" class="block text-sm font-medium text-gray-700 mb-2">
              Result in Centimeters (cm)
            </label>
            <input 
              type="text" 
              id="cmResult" 
              readonly 
              value="<?php echo $isDynamicPage ? number_format($outputValue, 2) : '170.18'; ?>"
              class="w-full px-4 py-3 bg-gradient-to-r from-violet-50 to-purple-50 border-2 border-violet-200 rounded-lg text-lg font-semibold text-violet-600"
            >
          </div>

          <div>
            <label for="totalInches" class="block text-sm font-medium text-gray-700 mb-2">
              Total Inches
            </label>
            <input 
              type="text" 
              id="totalInches" 
              readonly 
              value="<?php echo $isDynamicPage ? number_format($inputValue, 2) : '67.00'; ?>"
              class="w-full px-4 py-3 bg-gray-50 border-2 border-gray-200 rounded-lg text-lg font-medium text-gray-600"
            >
          </div>

          <div class="flex gap-3">
            <button
              type="button"
              onclick="resetForm()"
              class="flex-1 px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors duration-200 font-medium"
            >
              <i class="fas fa-redo mr-2" aria-hidden="true"></i>
              Reset
            </button>
            <button
              type="button"
              id="copyBtn"
              class="flex-1 px-6 py-3 bg-violet-600 text-white rounded-lg hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2 transition-colors duration-200 font-medium"
            >
              <i class="fas fa-copy mr-2" aria-hidden="true"></i>
              Copy Result
            </button>
          </div>
        </form>

        <div id="copySuccess" class="hidden mt-4 text-center">
          <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-lg">
            <i class="fas fa-check-circle mr-2" aria-hidden="true"></i>
            <span>Copied to clipboard!</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Conversion Formula -->
  <section class="max-w-4xl mx-auto px-4 pb-12">
    <div class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-calculator text-violet-600" aria-hidden="true"></i>
        Conversion Formula
      </h2>
      <div class="bg-gradient-to-r from-violet-50 to-purple-50 rounded-lg p-6 border-l-4 border-violet-500">
        <p class="text-lg mb-4"><strong>Step 1:</strong> Convert feet to inches: Feet × 12</p>
        <p class="text-lg mb-4"><strong>Step 2:</strong> Add remaining inches: Total Inches = (Feet × 12) + Inches</p>
        <p class="text-lg mb-4"><strong>Step 3:</strong> Convert to cm: Centimeters = Total Inches × 2.54</p>
        <p class="text-gray-600 mb-4">
          <strong>Conversion Factor:</strong> 1 inch = 2.54 centimeters
        </p>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-lg p-4 mt-4">
          <p class="font-semibold text-violet-600 mb-2">Example Calculation:</p>
          <p class="text-gray-700">
            Step 1: <?php echo $displayFeet; ?> feet × 12 = <?php echo $displayFeet * 12; ?> inches
          </p>
          <p class="text-gray-700">
            Step 2: <?php echo $displayFeet * 12; ?> + <?php echo number_format($displayInches, 2); ?> = 
            <?php echo number_format($inputValue, 2); ?> total inches
          </p>
          <p class="text-gray-700">
            Step 3: <?php echo number_format($inputValue, 2); ?> inches × 2.54 = 
            <?php echo number_format($outputValue, 2); ?> cm
          </p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- Quick Conversion Table -->
  <section class="max-w-4xl mx-auto px-4 pb-12">
    <div class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-table text-violet-600" aria-hidden="true"></i>
        Quick Height Conversion Table
      </h2>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-violet-600 to-purple-600 text-white">
              <th class="px-4 py-3 text-left">Feet and Inches</th>
              <th class="px-4 py-3 text-left">Total Inches</th>
              <th class="px-4 py-3 text-left">Centimeters</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $commonHeights = [
              ['feet' => 4, 'inches' => 10],
              ['feet' => 5, 'inches' => 0],
              ['feet' => 5, 'inches' => 3],
              ['feet' => 5, 'inches' => 5],
              ['feet' => 5, 'inches' => 7],
              ['feet' => 5, 'inches' => 9],
              ['feet' => 5, 'inches' => 11],
              ['feet' => 6, 'inches' => 0],
              ['feet' => 6, 'inches' => 2],
              ['feet' => 6, 'inches' => 4]
            ];
            foreach ($commonHeights as $height) {
                $totalInches = ($height['feet'] * 12) + $height['inches'];
                $cm = $totalInches * 2.54;
                $isHighlighted = $isDynamicPage && abs($totalInches - $inputValue) < 0.5;
                $rowClass = $isHighlighted ? 'bg-violet-100 font-semibold' : 'hover:bg-gray-50';
                echo "<tr class='border-b {$rowClass}'>";
                echo "<td class='px-4 py-3'>" . $height['feet'] . "' " . $height['inches'] . "\"</td>";
                echo "<td class='px-4 py-3'>" . $totalInches . "\"</td>";
                echo "<td class='px-4 py-3'>" . number_format($cm, 2) . " cm</td>";
                echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Related Conversions -->
  <section class="max-w-4xl mx-auto px-4 pb-12">
    <div class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-link text-violet-600" aria-hidden="true"></i>
        Related Length Conversions
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <a href="/cm-to-feet-inches.php" class="p-4 bg-gradient-to-br from-violet-50 to-purple-50 rounded-lg hover:shadow-md transition-shadow border border-violet-200">
          <i class="fas fa-exchange-alt text-violet-600 mb-2"></i>
          <p class="font-medium text-gray-800">CM to Feet and Inches</p>
        </a>
        <a href="/feet-to-cm.php" class="p-4 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-lg hover:shadow-md transition-shadow border border-blue-200">
          <i class="fas fa-ruler text-blue-600 mb-2"></i>
          <p class="font-medium text-gray-800">Feet to CM</p>
        </a>
        <a href="/inches-to-cm.php" class="p-4 bg-gradient-to-br from-green-50 to-emerald-50 rounded-lg hover:shadow-md transition-shadow border border-green-200">
          <i class="fas fa-ruler-horizontal text-green-600 mb-2"></i>
          <p class="font-medium text-gray-800">Inches to CM</p>
        </a>
        <a href="/cm-to-inches.php" class="p-4 bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg hover:shadow-md transition-shadow border border-purple-200">
          <i class="fas fa-arrows-alt-h text-purple-600 mb-2"></i>
          <p class="font-medium text-gray-800">CM to Inches</p>
        </a>
        <a href="/meters-to-feet.php" class="p-4 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-lg hover:shadow-md transition-shadow border border-yellow-200">
          <i class="fas fa-ruler-combined text-yellow-600 mb-2"></i>
          <p class="font-medium text-gray-800">Meters to Feet</p>
        </a>
        <a href="/length-converter.php" class="p-4 bg-gradient-to-br from-gray-50 to-slate-50 rounded-lg hover:shadow-md transition-shadow border border-gray-200">
          <i class="fas fa-calculator text-gray-600 mb-2"></i>
          <p class="font-medium text-gray-800">All Converters</p>
        </a>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="max-w-4xl mx-auto px-4 pb-12">
    <div class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-question-circle text-violet-600" aria-hidden="true"></i>
        Frequently Asked Questions
        <?php if ($isDynamicPage): ?>
        - <?php echo $displayFeet; ?>' <?php echo number_format($displayInches, 1); ?>"
        <?php endif; ?>
      </h2>
      
      <div class="space-y-6">
        <?php if ($isDynamicPage): ?>
        <div class="border-l-4 border-violet-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            How many centimeters is <?php echo $displayFeet; ?>' <?php echo number_format($displayInches, 1); ?>"?
          </h3>
          <div>
            <p class="text-gray-600">
              <?php echo $displayFeet; ?> feet <?php echo number_format($displayInches, 1); ?> inches equals exactly 
              <?php echo number_format($outputValue, 2); ?> centimeters. 
              This conversion uses the standard factor: 1 inch = 2.54 cm.
              <?php 
              if ($outputValue >= 140 && $outputValue <= 160) {
                  echo ' This is a typical height for children and shorter adults.';
              } elseif ($outputValue >= 160 && $outputValue <= 180) {
                  echo ' This is an average adult height range.';
              } elseif ($outputValue >= 180 && $outputValue <= 200) {
                  echo ' This is considered tall for most populations.';
              } elseif ($outputValue > 200) {
                  echo ' This is very tall, well above average height.';
              }
              ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="border-l-4 border-blue-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How do I convert feet and inches to centimeters?</h3>
          <div>
            <p class="text-gray-600">To convert feet and inches to cm: (1) Multiply feet by 12 to get inches, (2) Add remaining inches for total, (3) Multiply total inches by 2.54 to get cm. For example, <a href="/feet-inches-to-cm/67" class="text-violet-600 hover:text-violet-800 underline">5'7" = 170.18 cm</a>.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-green-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What is the conversion factor from feet and inches to cm?</h3>
          <div>
            <p class="text-gray-600">1 foot = 12 inches, and 1 inch = 2.54 centimeters. To convert: (feet × 12 + inches) × 2.54 = centimeters. This precise conversion is used in all height measurements in 2025.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-purple-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">When do I need to convert feet and inches to cm?</h3>
          <div>
            <p class="text-gray-600">Feet and inches to cm conversion is essential for international travel documents, medical records outside the US, sports statistics for international competitions, and when using metric measurement systems. Common uses include <a href="/cm-to-feet-inches" class="text-violet-600 hover:text-violet-800 underline">reverse conversions</a> and <a href="/inches-to-cm" class="text-violet-600 hover:text-violet-800 underline">simple inch conversions</a>.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-orange-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Is this converter accurate for official documents?</h3>
          <div>
            <p class="text-gray-600">Yes, our 2025 converter uses the exact conversion factor (2.54 cm per inch) used by international standards organizations, government agencies, and medical institutions worldwide. It's perfect for accurate height measurements on passports, visas, and medical forms.</p>
          </div>
        </div>

        <div class="border-l-4 border-red-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What are common heights in feet/inches and cm?</h3>
          <div>
            <p class="text-gray-600">Average male height is approximately <a href="/feet-inches-to-cm/69" class="text-violet-600 hover:text-violet-800 underline">5'9" (175 cm)</a>, while average female height is approximately <a href="/feet-inches-to-cm/64" class="text-violet-600 hover:text-violet-800 underline">5'4" (162 cm)</a>. Heights vary by country and population demographics.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
function updateConversion() {
  const feet = parseFloat(document.getElementById('feetValue').value) || 0;
  const inches = parseFloat(document.getElementById('inchesValue').value) || 0;
  const cmResult = document.getElementById('cmResult');
  const totalInches = document.getElementById('totalInches');
  
  if (feet < 0 || inches < 0) {
    cmResult.value = '';
    totalInches.value = '';
    return;
  }
  
  // Calculate total inches
  const totalInchesValue = (feet * 12) + inches;
  
  // Convert to cm
  const cm = totalInchesValue * 2.54;
  
  cmResult.value = cm.toFixed(2);
  totalInches.value = totalInchesValue.toFixed(2);
}

function resetForm() {
  document.getElementById('feetValue').value = '5';
  document.getElementById('inchesValue').value = '7';
  updateConversion();
  document.getElementById('copySuccess').classList.add('hidden');
}

function copyResult() {
  const result = document.getElementById('cmResult').value;
  navigator.clipboard.writeText(result).then(() => {
    const successMsg = document.getElementById('copySuccess');
    successMsg.classList.remove('hidden');
    setTimeout(() => {
      successMsg.classList.add('hidden');
    }, 3000);
  });
}

// Event listeners
document.getElementById('feetValue').addEventListener('input', updateConversion);
document.getElementById('inchesValue').addEventListener('input', updateConversion);
document.getElementById('copyBtn').addEventListener('click', copyResult);

// Initialize
updateConversion();
</script>

<?php include 'footer.php'; ?>
