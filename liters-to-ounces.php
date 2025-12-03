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
        $outputValue = $inputValue * 33.814; // Convert liters to fluid ounces (US)
        $isDynamicPage = true;
    }
}

// Generate dynamic content
$pageTitle = $isDynamicPage ? 
    "Convert {$inputValue} Liters to Ounces 2025 | {$inputValue} L = " . number_format($outputValue, 4) . " fl oz | Free Volume Calculator" : 
    "Best Liters to Ounces Converter 2025 | L to fl oz | Free Volume Conversion Tool";

$pageDescription = $isDynamicPage ? 
    "Convert {$inputValue} liters to fluid ounces in 2025. {$inputValue} L equals " . number_format($outputValue, 4) . " fl oz. Free, instant, accurate volume conversion for cooking, beverages & measurements." :
    "Convert liters to fluid ounces instantly with our best 2025 accurate converter. Perfect L to fl oz conversion for cooking, beverages, recipes & volume measurements.";

$canonicalUrl = $isDynamicPage ? 
    "https://www.thiyagi.com/liters-to-ounces/{$originalValue}" : 
    "https://www.thiyagi.com/liters-to-ounces";
?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="liters to ounces, L to fl oz, liter converter, volume conversion, cooking measurements, beverage conversion, fluid ounces calculator 2025">
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
  "name": "Liters to Ounces Converter 2025",
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
    "Instant liters to fluid ounces conversion",
    "Accurate volume calculations for 2025",
    "Perfect for cooking and beverages",
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
      "name": "How much is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> liters in fluid ounces?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> liters equals exactly <?php echo number_format($outputValue, 4); ?> fluid ounces (US). This conversion uses the standard factor: 1 liter = 33.814 fl oz."
      }
    },
    {
      "@type": "Question",
      "name": "How do I convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> L to fl oz?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> liters to fluid ounces, multiply by 33.814. The result is <?php echo number_format($outputValue, 4); ?> fl oz. This is the standard US fluid ounce conversion."
      }
    }
  ]
}
</script>
<?php endif; ?>

<style>
:root {
    --primary-teal: #14b8a6;
    --primary-teal-dark: #0d9488;
    --primary-teal-light: #5eead4;
}
.bg-teal-600 { background-color: var(--primary-teal); }
.hover\:bg-teal-700:hover { background-color: var(--primary-teal-dark); }
.text-teal-600 { color: var(--primary-teal); }
.border-teal-500 { border-color: var(--primary-teal-light); }
.focus\:ring-teal-500:focus { --tw-ring-color: var(--primary-teal); }
</style>

<main class="min-h-screen bg-gradient-to-br from-teal-50 to-cyan-50">
  <!-- Breadcrumb Navigation -->
  <nav class="pt-16 pb-4" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <ol class="flex items-center space-x-2 text-sm text-gray-600" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" class="hover:text-teal-600 transition-colors" itemprop="item">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/volume-converter.php" class="hover:text-teal-600 transition-colors" itemprop="item">
            <span itemprop="name">Volume Converter</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
        <li><span class="mx-2">/</span></li>
        <?php if ($isDynamicPage): ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/liters-to-ounces.php" class="hover:text-teal-600 transition-colors" itemprop="item">
            <span itemprop="name">Liters to Ounces</span>
          </a>
          <meta itemprop="position" content="3">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-teal-600 font-medium" itemprop="name"><?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> Liters</span>
          <meta itemprop="position" content="4">
        </li>
        <?php else: ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-teal-600 font-medium" itemprop="name">Liters to Ounces</span>
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
          Convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> Liters to Fluid Ounces
          <?php else: ?>
          Liters to Fluid Ounces Converter 2025
          <?php endif; ?>
        </h1>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 max-w-2xl mx-auto border-2 border-teal-200">
          <div class="text-center">
            <p class="text-gray-600 text-lg mb-4">Conversion Result:</p>
            <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-xl p-6">
              <p class="text-3xl md:text-4xl font-bold text-teal-600 mb-2">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> L = 
                <?php echo number_format($outputValue, 4); ?> fl oz
              </p>
              <p class="text-sm text-gray-500">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> liters equals 
                <?php echo number_format($outputValue, 4); ?> fluid ounces (US)
              </p>
            </div>
          </div>
        </div>
        <?php else: ?>
        <p class="text-xl text-gray-600 mb-8">
          Free, instant, and accurate liters to fluid ounces conversion for cooking, beverages, and volume measurements in 2025
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
          <i class="fas fa-flask text-teal-600" aria-hidden="true"></i>
          Volume Converter
        </h2>
        
        <form id="converterForm" class="space-y-6">
          <div>
            <label for="litersValue" class="block text-sm font-medium text-gray-700 mb-2">
              Enter Liters (L)
            </label>
            <input 
              type="number" 
              id="litersValue" 
              value="<?php echo $isDynamicPage ? $inputValue : '1'; ?>"
              step="0.01"
              min="0"
              class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition-colors text-lg"
              placeholder="Enter liters..."
            >
          </div>
          
          <div>
            <label for="ouncesResult" class="block text-sm font-medium text-gray-700 mb-2">
              Result in Fluid Ounces (fl oz)
            </label>
            <input 
              type="text" 
              id="ouncesResult" 
              readonly 
              value="<?php echo $isDynamicPage ? number_format($outputValue, 4) : '33.8140'; ?>"
              class="w-full px-4 py-3 bg-gradient-to-r from-teal-50 to-cyan-50 border-2 border-teal-200 rounded-lg text-lg font-semibold text-teal-600"
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
              class="flex-1 px-6 py-3 bg-teal-600 text-white rounded-lg hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition-colors duration-200 font-medium"
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
        <i class="fas fa-calculator text-teal-600" aria-hidden="true"></i>
        Conversion Formula
      </h2>
      <div class="bg-gradient-to-r from-teal-50 to-cyan-50 rounded-lg p-6 border-l-4 border-teal-500">
        <p class="text-lg mb-4"><strong>Formula:</strong> Fluid Ounces (fl oz) = Liters (L) × 33.814</p>
        <p class="text-gray-600 mb-4">
          <strong>Conversion Factor:</strong> 1 liter = 33.814 fluid ounces (US)
        </p>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-lg p-4 mt-4">
          <p class="font-semibold text-teal-600 mb-2">Example Calculation:</p>
          <p class="text-gray-700">
            <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> L × 33.814 = 
            <?php echo number_format($outputValue, 4); ?> fl oz
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
        <i class="fas fa-table text-teal-600" aria-hidden="true"></i>
        Quick Conversion Table
      </h2>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-teal-600 to-cyan-600 text-white">
              <th class="px-4 py-3 text-left">Liters (L)</th>
              <th class="px-4 py-3 text-left">Fluid Ounces (fl oz)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $commonValues = [0.5, 1, 2, 3, 5, 10, 15, 20, 25, 50];
            foreach ($commonValues as $val) {
                $result = $val * 33.814;
                $isHighlighted = $isDynamicPage && abs($val - $inputValue) < 0.01;
                $rowClass = $isHighlighted ? 'bg-teal-100 font-semibold' : 'hover:bg-gray-50';
                echo "<tr class='border-b {$rowClass}'>";
                echo "<td class='px-4 py-3'>" . number_format($val, 1) . " L</td>";
                echo "<td class='px-4 py-3'>" . number_format($result, 2) . " fl oz</td>";
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
        <i class="fas fa-link text-teal-600" aria-hidden="true"></i>
        Related Volume Conversions
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <a href="/ounces-to-liter.php" class="p-4 bg-gradient-to-br from-teal-50 to-cyan-50 rounded-lg hover:shadow-md transition-shadow border border-teal-200">
          <i class="fas fa-exchange-alt text-teal-600 mb-2"></i>
          <p class="font-medium text-gray-800">Ounces to Liters</p>
        </a>
        <a href="/liters-to-gallons.php" class="p-4 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-lg hover:shadow-md transition-shadow border border-blue-200">
          <i class="fas fa-tint text-blue-600 mb-2"></i>
          <p class="font-medium text-gray-800">Liters to Gallons</p>
        </a>
        <a href="/ml-to-ounce.php" class="p-4 bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg hover:shadow-md transition-shadow border border-purple-200">
          <i class="fas fa-flask text-purple-600 mb-2"></i>
          <p class="font-medium text-gray-800">ML to Ounces</p>
        </a>
        <a href="/gallons-to-ounces.php" class="p-4 bg-gradient-to-br from-green-50 to-emerald-50 rounded-lg hover:shadow-md transition-shadow border border-green-200">
          <i class="fas fa-fill-drip text-green-600 mb-2"></i>
          <p class="font-medium text-gray-800">Gallons to Ounces</p>
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
        <i class="fas fa-question-circle text-teal-600" aria-hidden="true"></i>
        Frequently Asked Questions
        <?php if ($isDynamicPage): ?>
        - <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> L to fl oz
        <?php endif; ?>
      </h2>
      
      <div class="space-y-6">
        <?php if ($isDynamicPage): ?>
        <div class="border-l-4 border-teal-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            How much is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> liters in fluid ounces?
          </h3>
          <div>
            <p class="text-gray-600">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> liters equals exactly <?php echo number_format($outputValue, 4); ?> fluid ounces (US). 
              This conversion uses the standard factor: 1 L = 33.814 fl oz.
              <?php 
              if ($inputValue <= 1) {
                  echo ' This is a typical serving size for beverages.';
              } elseif ($inputValue <= 5) {
                  echo ' This volume is common for cooking and recipes.';
              } elseif ($inputValue <= 20) {
                  echo ' This is a standard size for large beverage containers.';
              } else {
                  echo ' This represents bulk or commercial quantities.';
              }
              ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="border-l-4 border-blue-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How do I convert liters to fluid ounces?</h3>
          <div>
            <p class="text-gray-600">To convert liters to fluid ounces, multiply the liter value by 33.814. For example, <a href="/liters-to-ounces/2" class="text-teal-600 hover:text-teal-800 underline">2 liters = 67.628 fl oz</a>. This is the standard US fluid ounce conversion used in cooking and beverages.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-green-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What is the exact conversion factor from liters to ounces?</h3>
          <div>
            <p class="text-gray-600">1 liter equals exactly 33.814 fluid ounces (US). This precise conversion is used in all cooking, beverage measurements, and recipe calculations in 2025.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-purple-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">When do I need to convert liters to fluid ounces?</h3>
          <div>
            <p class="text-gray-600">Liter to fluid ounce conversion is essential for international recipes, beverage serving sizes, cooking measurements, nutrition labels, and when using metric and imperial measurement systems together. Common uses include <a href="/ml-to-ounce" class="text-teal-600 hover:text-teal-800 underline">smaller volume conversions</a> and <a href="/gallons-to-liters" class="text-teal-600 hover:text-teal-800 underline">larger container measurements</a>.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-orange-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Is this converter accurate for cooking and recipes?</h3>
          <div>
            <p class="text-gray-600">Yes, our 2025 converter uses the exact conversion factor (33.814) used in professional cooking, recipe development, and food service. It's perfect for accurate measurements in both home and commercial kitchens.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
function updateConversion() {
  const litersValue = parseFloat(document.getElementById('litersValue').value);
  const ouncesResult = document.getElementById('ouncesResult');
  
  if (isNaN(litersValue) || litersValue < 0) {
    ouncesResult.value = '';
    return;
  }
  
  const result = litersValue * 33.814;
  ouncesResult.value = result.toFixed(4);
}

function resetForm() {
  document.getElementById('litersValue').value = '1';
  updateConversion();
  document.getElementById('copySuccess').classList.add('hidden');
}

function copyResult() {
  const result = document.getElementById('ouncesResult').value;
  navigator.clipboard.writeText(result).then(() => {
    const successMsg = document.getElementById('copySuccess');
    successMsg.classList.remove('hidden');
    setTimeout(() => {
      successMsg.classList.add('hidden');
    }, 3000);
  });
}

// Event listeners
document.getElementById('litersValue').addEventListener('input', updateConversion);
document.getElementById('copyBtn').addEventListener('click', copyResult);

// Initialize
updateConversion();
</script>

<?php include 'footer.php'; ?>
