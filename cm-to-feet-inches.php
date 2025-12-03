<?php 
include 'header.php';

// Handle dynamic URL parameter
$inputValue = null;
$outputFeet = null;
$outputInches = null;
$outputTotalInches = null;
$isDynamicPage = false;
$originalValue = null;

if (isset($_GET['value'])) {
    $value = trim($_GET['value']);
    $originalValue = $value; // Store original format for URLs
    
    // Remove commas and validate the input value (must be numeric and non-negative)
    $cleanValue = str_replace(',', '', $value);
    if (is_numeric($cleanValue) && floatval($cleanValue) >= 0) {
        $inputValue = floatval($cleanValue);
        // Convert cm to inches first (1 cm = 0.393701 inches)
        $outputTotalInches = $inputValue * 0.393701;
        // Get feet and remaining inches
        $outputFeet = floor($outputTotalInches / 12);
        $outputInches = $outputTotalInches - ($outputFeet * 12);
        $isDynamicPage = true;
    }
}

// Generate dynamic content
$pageTitle = $isDynamicPage ? 
    "Convert {$inputValue} CM to Feet and Inches 2025 | {$inputValue} cm = {$outputFeet}'{$outputInches}\" | Height Converter" : 
    "Best CM to Feet and Inches Converter 2025 | Height Calculator | Free Length Conversion";

$pageDescription = $isDynamicPage ? 
    "Convert {$inputValue} centimeters to feet and inches in 2025. {$inputValue} cm equals {$outputFeet} feet {$outputInches} inches ({$outputFeet}'{$outputInches}\"). Free, instant, accurate height conversion." :
    "Convert centimeters to feet and inches instantly with our best 2025 accurate converter. Perfect for height measurements, body measurements & length conversions.";

$canonicalUrl = $isDynamicPage ? 
    "https://www.thiyagi.com/cm-to-feet-inches/{$originalValue}" : 
    "https://www.thiyagi.com/cm-to-feet-inches";
?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="cm to feet inches, centimeters to feet, height converter, cm to ft in, body measurements, height calculator 2025">
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
  "name": "CM to Feet and Inches Converter 2025",
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
    "Instant cm to feet and inches conversion",
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
      "name": "How many feet and inches is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> cm?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> centimeters equals <?php echo $outputFeet; ?> feet and <?php echo number_format($outputInches, 2); ?> inches (<?php echo $outputFeet; ?>'<?php echo number_format($outputInches, 2); ?>\"). This conversion uses the standard factor: 1 cm = 0.393701 inches."
      }
    },
    {
      "@type": "Question",
      "name": "How do I convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> cm to feet and inches?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> cm to feet and inches: multiply by 0.393701 to get inches (<?php echo number_format($outputTotalInches, 2); ?>\"), then divide by 12 to get feet (<?php echo $outputFeet; ?> feet) with the remainder as inches (<?php echo number_format($outputInches, 2); ?>\")."
      }
    }
  ]
}
</script>
<?php endif; ?>

<style>
:root {
    --primary-indigo: #6366f1;
    --primary-indigo-dark: #4f46e5;
    --primary-indigo-light: #a5b4fc;
}
.bg-indigo-600 { background-color: var(--primary-indigo); }
.hover\:bg-indigo-700:hover { background-color: var(--primary-indigo-dark); }
.text-indigo-600 { color: var(--primary-indigo); }
.border-indigo-500 { border-color: var(--primary-indigo-light); }
.focus\:ring-indigo-500:focus { --tw-ring-color: var(--primary-indigo); }
</style>

<main class="min-h-screen bg-gradient-to-br from-indigo-50 to-purple-50">
  <!-- Breadcrumb Navigation -->
  <nav class="pt-16 pb-4" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <ol class="flex items-center space-x-2 text-sm text-gray-600" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" class="hover:text-indigo-600 transition-colors" itemprop="item">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/length-converter.php" class="hover:text-indigo-600 transition-colors" itemprop="item">
            <span itemprop="name">Length Converter</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
        <li><span class="mx-2">/</span></li>
        <?php if ($isDynamicPage): ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/cm-to-feet-inches.php" class="hover:text-indigo-600 transition-colors" itemprop="item">
            <span itemprop="name">CM to Feet and Inches</span>
          </a>
          <meta itemprop="position" content="3">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-indigo-600 font-medium" itemprop="name"><?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> CM</span>
          <meta itemprop="position" content="4">
        </li>
        <?php else: ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-indigo-600 font-medium" itemprop="name">CM to Feet and Inches</span>
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
          Convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> CM to Feet and Inches
          <?php else: ?>
          CM to Feet and Inches Converter 2025
          <?php endif; ?>
        </h1>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 max-w-2xl mx-auto border-2 border-indigo-200">
          <div class="text-center">
            <p class="text-gray-600 text-lg mb-4">Conversion Result:</p>
            <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-xl p-6">
              <p class="text-3xl md:text-4xl font-bold text-indigo-600 mb-2">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> cm = 
                <?php echo $outputFeet; ?>' <?php echo number_format($outputInches, 2); ?>"
              </p>
              <p class="text-sm text-gray-500">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> centimeters equals 
                <?php echo $outputFeet; ?> feet and <?php echo number_format($outputInches, 2); ?> inches
              </p>
              <p class="text-xs text-gray-400 mt-2">
                (Total: <?php echo number_format($outputTotalInches, 2); ?> inches)
              </p>
            </div>
          </div>
        </div>
        <?php else: ?>
        <p class="text-xl text-gray-600 mb-8">
          Free, instant, and accurate centimeters to feet and inches conversion for height measurements in 2025
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
          <i class="fas fa-ruler-vertical text-indigo-600" aria-hidden="true"></i>
          Height Converter
        </h2>
        
        <form id="converterForm" class="space-y-6">
          <div>
            <label for="cmValue" class="block text-sm font-medium text-gray-700 mb-2">
              Enter Centimeters (cm)
            </label>
            <input 
              type="number" 
              id="cmValue" 
              value="<?php echo $isDynamicPage ? $inputValue : '170'; ?>"
              step="0.1"
              min="0"
              class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-colors text-lg"
              placeholder="Enter centimeters..."
            >
          </div>
          
          <div>
            <label for="feetInchesResult" class="block text-sm font-medium text-gray-700 mb-2">
              Result in Feet and Inches
            </label>
            <input 
              type="text" 
              id="feetInchesResult" 
              readonly 
              value="<?php echo $isDynamicPage ? $outputFeet . "' " . number_format($outputInches, 2) . '"' : '5\' 6.93"'; ?>"
              class="w-full px-4 py-3 bg-gradient-to-r from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-lg text-lg font-semibold text-indigo-600"
            >
          </div>

          <div>
            <label for="totalInchesResult" class="block text-sm font-medium text-gray-700 mb-2">
              Total Inches
            </label>
            <input 
              type="text" 
              id="totalInchesResult" 
              readonly 
              value="<?php echo $isDynamicPage ? number_format($outputTotalInches, 2) . '"' : '66.93"'; ?>"
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
              class="flex-1 px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition-colors duration-200 font-medium"
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
        <i class="fas fa-calculator text-indigo-600" aria-hidden="true"></i>
        Conversion Formula
      </h2>
      <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-lg p-6 border-l-4 border-indigo-500">
        <p class="text-lg mb-4"><strong>Step 1:</strong> Convert cm to inches: Inches = CM × 0.393701</p>
        <p class="text-lg mb-4"><strong>Step 2:</strong> Convert inches to feet: Feet = Floor(Inches ÷ 12)</p>
        <p class="text-lg mb-4"><strong>Step 3:</strong> Remaining inches = Inches - (Feet × 12)</p>
        <p class="text-gray-600 mb-4">
          <strong>Conversion Factor:</strong> 1 centimeter = 0.393701 inches
        </p>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-lg p-4 mt-4">
          <p class="font-semibold text-indigo-600 mb-2">Example Calculation:</p>
          <p class="text-gray-700">
            <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> cm × 0.393701 = 
            <?php echo number_format($outputTotalInches, 2); ?> inches
          </p>
          <p class="text-gray-700">
            <?php echo number_format($outputTotalInches, 2); ?> inches ÷ 12 = 
            <?php echo $outputFeet; ?> feet with <?php echo number_format($outputInches, 2); ?> inches remaining
          </p>
          <p class="text-gray-700 font-semibold mt-2">
            Result: <?php echo $outputFeet; ?>' <?php echo number_format($outputInches, 2); ?>"
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
        <i class="fas fa-table text-indigo-600" aria-hidden="true"></i>
        Quick Height Conversion Table
      </h2>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
              <th class="px-4 py-3 text-left">Centimeters</th>
              <th class="px-4 py-3 text-left">Feet and Inches</th>
              <th class="px-4 py-3 text-left">Total Inches</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $commonHeights = [150, 160, 165, 170, 175, 180, 185, 190, 195, 200];
            foreach ($commonHeights as $cm) {
                $totalInches = $cm * 0.393701;
                $feet = floor($totalInches / 12);
                $inches = $totalInches - ($feet * 12);
                $isHighlighted = $isDynamicPage && abs($cm - $inputValue) < 0.5;
                $rowClass = $isHighlighted ? 'bg-indigo-100 font-semibold' : 'hover:bg-gray-50';
                echo "<tr class='border-b {$rowClass}'>";
                echo "<td class='px-4 py-3'>" . $cm . " cm</td>";
                echo "<td class='px-4 py-3'>" . $feet . "' " . number_format($inches, 2) . "\"</td>";
                echo "<td class='px-4 py-3'>" . number_format($totalInches, 2) . "\"</td>";
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
        <i class="fas fa-link text-indigo-600" aria-hidden="true"></i>
        Related Length Conversions
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <a href="/feet-inches-to-cm.php" class="p-4 bg-gradient-to-br from-indigo-50 to-purple-50 rounded-lg hover:shadow-md transition-shadow border border-indigo-200">
          <i class="fas fa-exchange-alt text-indigo-600 mb-2"></i>
          <p class="font-medium text-gray-800">Feet and Inches to CM</p>
        </a>
        <a href="/cm-to-feet.php" class="p-4 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-lg hover:shadow-md transition-shadow border border-blue-200">
          <i class="fas fa-ruler text-blue-600 mb-2"></i>
          <p class="font-medium text-gray-800">CM to Feet</p>
        </a>
        <a href="/cm-to-inches.php" class="p-4 bg-gradient-to-br from-green-50 to-emerald-50 rounded-lg hover:shadow-md transition-shadow border border-green-200">
          <i class="fas fa-ruler-horizontal text-green-600 mb-2"></i>
          <p class="font-medium text-gray-800">CM to Inches</p>
        </a>
        <a href="/inches-to-cm.php" class="p-4 bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg hover:shadow-md transition-shadow border border-purple-200">
          <i class="fas fa-arrows-alt-h text-purple-600 mb-2"></i>
          <p class="font-medium text-gray-800">Inches to CM</p>
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
        <i class="fas fa-question-circle text-indigo-600" aria-hidden="true"></i>
        Frequently Asked Questions
        <?php if ($isDynamicPage): ?>
        - <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> cm
        <?php endif; ?>
      </h2>
      
      <div class="space-y-6">
        <?php if ($isDynamicPage): ?>
        <div class="border-l-4 border-indigo-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            How many feet and inches is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> cm?
          </h3>
          <div>
            <p class="text-gray-600">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> centimeters equals 
              <?php echo $outputFeet; ?> feet and <?php echo number_format($outputInches, 2); ?> inches 
              (<?php echo $outputFeet; ?>'<?php echo number_format($outputInches, 2); ?>"). 
              This conversion uses the standard factor: 1 cm = 0.393701 inches.
              <?php 
              if ($inputValue >= 140 && $inputValue <= 160) {
                  echo ' This is a typical height for children and shorter adults.';
              } elseif ($inputValue >= 160 && $inputValue <= 180) {
                  echo ' This is an average adult height range.';
              } elseif ($inputValue >= 180 && $inputValue <= 200) {
                  echo ' This is considered tall for most populations.';
              } elseif ($inputValue > 200) {
                  echo ' This is very tall, well above average height.';
              }
              ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="border-l-4 border-blue-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How do I convert cm to feet and inches?</h3>
          <div>
            <p class="text-gray-600">To convert cm to feet and inches: (1) Multiply cm by 0.393701 to get total inches, (2) Divide inches by 12 to get feet, (3) The remainder is the inches. For example, <a href="/cm-to-feet-inches/170" class="text-indigo-600 hover:text-indigo-800 underline">170 cm = 5' 6.93"</a>.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-green-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What is the conversion factor from cm to feet and inches?</h3>
          <div>
            <p class="text-gray-600">1 centimeter = 0.393701 inches. To convert to feet and inches format, first convert to total inches, then divide by 12 for feet with the remainder as inches. This precise conversion is used in all height measurements in 2025.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-purple-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">When do I need to convert cm to feet and inches?</h3>
          <div>
            <p class="text-gray-600">CM to feet and inches conversion is essential for height measurements, medical records in the US, sports statistics, driver's licenses, passport applications, and when using metric and imperial measurement systems. Common uses include <a href="/feet-inches-to-cm" class="text-indigo-600 hover:text-indigo-800 underline">reverse conversions</a> and <a href="/cm-to-inches" class="text-indigo-600 hover:text-indigo-800 underline">simple inch conversions</a>.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-orange-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Is this converter accurate for official documents?</h3>
          <div>
            <p class="text-gray-600">Yes, our 2025 converter uses the exact conversion factor (0.393701) used by government agencies, medical institutions, and international standards. It's perfect for accurate height measurements on official forms and documents.</p>
          </div>
        </div>

        <div class="border-l-4 border-red-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What's the average height in cm and feet/inches?</h3>
          <div>
            <p class="text-gray-600">Average adult male height is approximately <a href="/cm-to-feet-inches/175" class="text-indigo-600 hover:text-indigo-800 underline">175 cm (5'9")</a>, while average adult female height is approximately <a href="/cm-to-feet-inches/162" class="text-indigo-600 hover:text-indigo-800 underline">162 cm (5'4")</a>. These vary by country and population.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
function updateConversion() {
  const cmValue = parseFloat(document.getElementById('cmValue').value);
  const feetInchesResult = document.getElementById('feetInchesResult');
  const totalInchesResult = document.getElementById('totalInchesResult');
  
  if (isNaN(cmValue) || cmValue < 0) {
    feetInchesResult.value = '';
    totalInchesResult.value = '';
    return;
  }
  
  // Convert to total inches
  const totalInches = cmValue * 0.393701;
  
  // Get feet and remaining inches
  const feet = Math.floor(totalInches / 12);
  const inches = totalInches - (feet * 12);
  
  feetInchesResult.value = feet + "' " + inches.toFixed(2) + '"';
  totalInchesResult.value = totalInches.toFixed(2) + '"';
}

function resetForm() {
  document.getElementById('cmValue').value = '170';
  updateConversion();
  document.getElementById('copySuccess').classList.add('hidden');
}

function copyResult() {
  const result = document.getElementById('feetInchesResult').value;
  navigator.clipboard.writeText(result).then(() => {
    const successMsg = document.getElementById('copySuccess');
    successMsg.classList.remove('hidden');
    setTimeout(() => {
      successMsg.classList.add('hidden');
    }, 3000);
  });
}

// Event listeners
document.getElementById('cmValue').addEventListener('input', updateConversion);
document.getElementById('copyBtn').addEventListener('click', copyResult);

// Initialize
updateConversion();
</script>

<?php include 'footer.php'; ?>
