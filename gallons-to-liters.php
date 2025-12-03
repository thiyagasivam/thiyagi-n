<?php 
include 'header.php';

// Handle dynamic URL parameter
$inputValue = null;
$outputValue = null;
$isDynamicPage = false;
$originalValue = null;

if (isset($_GET['value'])) {
    $value = trim($_GET['value']);
    $originalValue = $value; // Store original format for URLs
    
    // Remove commas and validate the input value (must be numeric and non-negative)
    $cleanValue = str_replace(',', '', $value);
    if (is_numeric($cleanValue) && floatval($cleanValue) >= 0) {
        $inputValue = floatval($cleanValue);
        $outputValue = $inputValue * 3.78541; // Convert gallons (US) to liters
        $isDynamicPage = true;
    }
}

// Generate dynamic content
$pageTitle = $isDynamicPage ? 
    "Convert {$inputValue} Gallons to Liters 2025 | {$inputValue} gal = " . number_format($outputValue, 4) . " L | Free Volume Calculator" : 
    "Best Gallons to Liters Converter 2025 | gal to L | Free Volume Conversion Tool";

$pageDescription = $isDynamicPage ? 
    "Convert {$inputValue} gallons to liters in 2025. {$inputValue} gal equals " . number_format($outputValue, 4) . " L. Free, instant, accurate volume conversion for fuel, beverages & measurements." :
    "Convert gallons to liters instantly with our best 2025 accurate converter. Perfect gal to L conversion for fuel, beverages, recipes & volume measurements.";

$canonicalUrl = $isDynamicPage ? 
    "https://www.thiyagi.com/gallons-to-liters/{$originalValue}" : 
    "https://www.thiyagi.com/gallons-to-liters";
?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="gallons to liters, gal to L, gallon converter, volume conversion, fuel conversion, gas mileage, liquid measurements, liter calculator 2025">
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
  "name": "Gallons to Liters Converter 2025",
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
    "Instant gallons to liters conversion",
    "Accurate volume calculations for 2025",
    "Perfect for fuel and beverages",
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
      "name": "How many liters is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gallons?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gallons equals exactly <?php echo number_format($outputValue, 4); ?> liters. This conversion uses the standard US gallon factor: 1 gallon = 3.78541 liters."
      }
    },
    {
      "@type": "Question",
      "name": "How do I convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gal to L?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gallons to liters, multiply by 3.78541. The result is <?php echo number_format($outputValue, 4); ?> L. This is the standard US gallon conversion used worldwide."
      }
    }
  ]
}
</script>
<?php endif; ?>

<style>
:root {
    --primary-blue: #2563eb;
    --primary-blue-dark: #1d4ed8;
    --primary-blue-light: #60a5fa;
}
.bg-blue-600 { background-color: var(--primary-blue); }
.hover\:bg-blue-700:hover { background-color: var(--primary-blue-dark); }
.text-blue-600 { color: var(--primary-blue); }
.border-blue-500 { border-color: var(--primary-blue-light); }
.focus\:ring-blue-500:focus { --tw-ring-color: var(--primary-blue); }
</style>

<main class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-50">
  <!-- Breadcrumb Navigation -->
  <nav class="pt-16 pb-4" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <ol class="flex items-center space-x-2 text-sm text-gray-600" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" class="hover:text-blue-600 transition-colors" itemprop="item">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/volume-converter.php" class="hover:text-blue-600 transition-colors" itemprop="item">
            <span itemprop="name">Volume Converter</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
        <li><span class="mx-2">/</span></li>
        <?php if ($isDynamicPage): ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/gallons-to-liters.php" class="hover:text-blue-600 transition-colors" itemprop="item">
            <span itemprop="name">Gallons to Liters</span>
          </a>
          <meta itemprop="position" content="3">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-blue-600 font-medium" itemprop="name"><?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> Gallons</span>
          <meta itemprop="position" content="4">
        </li>
        <?php else: ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-blue-600 font-medium" itemprop="name">Gallons to Liters</span>
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
          Convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> Gallons to Liters
          <?php else: ?>
          Gallons to Liters Converter 2025
          <?php endif; ?>
        </h1>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 max-w-2xl mx-auto border-2 border-blue-200">
          <div class="text-center">
            <p class="text-gray-600 text-lg mb-4">Conversion Result:</p>
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6">
              <p class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gal = 
                <?php echo number_format($outputValue, 4); ?> L
              </p>
              <p class="text-sm text-gray-500">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gallons (US) equals 
                <?php echo number_format($outputValue, 4); ?> liters
              </p>
            </div>
          </div>
        </div>
        <?php else: ?>
        <p class="text-xl text-gray-600 mb-8">
          Free, instant, and accurate gallons to liters conversion for fuel, beverages, and volume measurements in 2025
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
          <i class="fas fa-gas-pump text-blue-600" aria-hidden="true"></i>
          Volume Converter
        </h2>
        
        <form id="converterForm" class="space-y-6">
          <div>
            <label for="gallonsValue" class="block text-sm font-medium text-gray-700 mb-2">
              Enter Gallons (gal)
            </label>
            <input 
              type="number" 
              id="gallonsValue" 
              value="<?php echo $isDynamicPage ? $inputValue : '1'; ?>"
              step="0.01"
              min="0"
              class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors text-lg"
              placeholder="Enter gallons..."
            >
          </div>
          
          <div>
            <label for="litersResult" class="block text-sm font-medium text-gray-700 mb-2">
              Result in Liters (L)
            </label>
            <input 
              type="text" 
              id="litersResult" 
              readonly 
              value="<?php echo $isDynamicPage ? number_format($outputValue, 4) : '3.7854'; ?>"
              class="w-full px-4 py-3 bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-lg text-lg font-semibold text-blue-600"
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
              class="flex-1 px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200 font-medium"
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
        <i class="fas fa-calculator text-blue-600" aria-hidden="true"></i>
        Conversion Formula
      </h2>
      <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-lg p-6 border-l-4 border-blue-500">
        <p class="text-lg mb-4"><strong>Formula:</strong> Liters (L) = Gallons (gal) × 3.78541</p>
        <p class="text-gray-600 mb-4">
          <strong>Conversion Factor:</strong> 1 US gallon = 3.78541 liters
        </p>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-lg p-4 mt-4">
          <p class="font-semibold text-blue-600 mb-2">Example Calculation:</p>
          <p class="text-gray-700">
            <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gal × 3.78541 = 
            <?php echo number_format($outputValue, 4); ?> L
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
        <i class="fas fa-table text-blue-600" aria-hidden="true"></i>
        Quick Conversion Table
      </h2>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
              <th class="px-4 py-3 text-left">Gallons (gal)</th>
              <th class="px-4 py-3 text-left">Liters (L)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $commonValues = [1, 5, 10, 15, 20, 25, 50, 75, 100, 250, 500, 1000];
            foreach ($commonValues as $val) {
                $result = $val * 3.78541;
                $isHighlighted = $isDynamicPage && abs($val - $inputValue) < 0.01;
                $rowClass = $isHighlighted ? 'bg-blue-100 font-semibold' : 'hover:bg-gray-50';
                echo "<tr class='border-b {$rowClass}'>";
                echo "<td class='px-4 py-3'>" . number_format($val, 0) . " gal</td>";
                echo "<td class='px-4 py-3'>" . number_format($result, 2) . " L</td>";
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
        <i class="fas fa-link text-blue-600" aria-hidden="true"></i>
        Related Volume Conversions
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <a href="/liters-to-gallons.php" class="p-4 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-lg hover:shadow-md transition-shadow border border-blue-200">
          <i class="fas fa-exchange-alt text-blue-600 mb-2"></i>
          <p class="font-medium text-gray-800">Liters to Gallons</p>
        </a>
        <a href="/gallons-to-ounces.php" class="p-4 bg-gradient-to-br from-teal-50 to-cyan-50 rounded-lg hover:shadow-md transition-shadow border border-teal-200">
          <i class="fas fa-tint text-teal-600 mb-2"></i>
          <p class="font-medium text-gray-800">Gallons to Ounces</p>
        </a>
        <a href="/liters-to-ounces.php" class="p-4 bg-gradient-to-br from-green-50 to-emerald-50 rounded-lg hover:shadow-md transition-shadow border border-green-200">
          <i class="fas fa-flask text-green-600 mb-2"></i>
          <p class="font-medium text-gray-800">Liters to Ounces</p>
        </a>
        <a href="/ml-to-ounce.php" class="p-4 bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg hover:shadow-md transition-shadow border border-purple-200">
          <i class="fas fa-flask text-purple-600 mb-2"></i>
          <p class="font-medium text-gray-800">ML to Ounces</p>
        </a>
        <a href="/cups-to-liters.php" class="p-4 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-lg hover:shadow-md transition-shadow border border-yellow-200">
          <i class="fas fa-mug-hot text-yellow-600 mb-2"></i>
          <p class="font-medium text-gray-800">Cups to Liters</p>
        </a>
        <a href="/volume-converter.php" class="p-4 bg-gradient-to-br from-gray-50 to-slate-50 rounded-lg hover:shadow-md transition-shadow border border-gray-200">
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
        <i class="fas fa-question-circle text-blue-600" aria-hidden="true"></i>
        Frequently Asked Questions
        <?php if ($isDynamicPage): ?>
        - <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gal to L
        <?php endif; ?>
      </h2>
      
      <div class="space-y-6">
        <?php if ($isDynamicPage): ?>
        <div class="border-l-4 border-blue-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            How many liters is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gallons?
          </h3>
          <div>
            <p class="text-gray-600">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> gallons equals exactly <?php echo number_format($outputValue, 4); ?> liters. 
              This conversion uses the standard US gallon factor: 1 gal = 3.78541 L.
              <?php 
              if ($inputValue <= 5) {
                  echo ' This is typical for small containers and beverages.';
              } elseif ($inputValue <= 20) {
                  echo ' This is a common fuel tank size for motorcycles and small vehicles.';
              } elseif ($inputValue <= 50) {
                  echo ' This represents a standard car fuel tank capacity.';
              } else {
                  echo ' This is typical for large vehicles or bulk liquid storage.';
              }
              ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="border-l-4 border-teal-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How do I convert gallons to liters?</h3>
          <div>
            <p class="text-gray-600">To convert gallons to liters, multiply the gallon value by 3.78541. For example, <a href="/gallons-to-liters/10" class="text-blue-600 hover:text-blue-800 underline">10 gallons = 37.8541 liters</a>. This is the standard US gallon conversion used for fuel, beverages, and liquid measurements.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-green-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What is the exact conversion factor from gallons to liters?</h3>
          <div>
            <p class="text-gray-600">1 US gallon equals exactly 3.78541 liters. This precise conversion is used in all fuel economy calculations, beverage measurements, and international liquid volume conversions in 2025.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-purple-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">When do I need to convert gallons to liters?</h3>
          <div>
            <p class="text-gray-600">Gallon to liter conversion is essential for fuel economy calculations, international travel, automotive specifications, beverage containers, and when using US and metric measurement systems. Common uses include <a href="/liters-to-gallons" class="text-blue-600 hover:text-blue-800 underline">reverse conversions</a> and <a href="/gallons-to-ounces" class="text-blue-600 hover:text-blue-800 underline">smaller unit conversions</a>.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-orange-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Is this converter accurate for fuel calculations?</h3>
          <div>
            <p class="text-gray-600">Yes, our 2025 converter uses the exact conversion factor (3.78541) used in automotive industry, fuel economy ratings, and official government standards. It's perfect for accurate MPG to L/100km conversions and fuel tank capacity calculations.</p>
          </div>
        </div>

        <div class="border-l-4 border-red-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What's the difference between US gallons and UK gallons?</h3>
          <div>
            <p class="text-gray-600">This converter uses US gallons (3.78541 L). UK/Imperial gallons are larger at 4.54609 L. Always verify which gallon system is being used, especially for international fuel economy comparisons.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
function updateConversion() {
  const gallonsValue = parseFloat(document.getElementById('gallonsValue').value);
  const litersResult = document.getElementById('litersResult');
  
  if (isNaN(gallonsValue) || gallonsValue < 0) {
    litersResult.value = '';
    return;
  }
  
  const result = gallonsValue * 3.78541;
  litersResult.value = result.toFixed(4);
}

function resetForm() {
  document.getElementById('gallonsValue').value = '1';
  updateConversion();
  document.getElementById('copySuccess').classList.add('hidden');
}

function copyResult() {
  const result = document.getElementById('litersResult').value;
  navigator.clipboard.writeText(result).then(() => {
    const successMsg = document.getElementById('copySuccess');
    successMsg.classList.remove('hidden');
    setTimeout(() => {
      successMsg.classList.add('hidden');
    }, 3000);
  });
}

// Event listeners
document.getElementById('gallonsValue').addEventListener('input', updateConversion);
document.getElementById('copyBtn').addEventListener('click', copyResult);

// Initialize
updateConversion();
</script>

<?php include 'footer.php'; ?>
