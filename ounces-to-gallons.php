<?php 
include 'header.php';

// Handle dynamic URL parameter
$inputValue = null;
$outputValue = null;
$isDynamicPage = false;

if (isset($_GET['value'])) {
    $value = trim($_GET['value']);
    
    // Validate the input value (must be numeric and non-negative)
    if (is_numeric($value) && floatval($value) >= 0) {
        $inputValue = floatval($value);
        $outputValue = $inputValue / 128; // Convert fluid ounces to gallons (1 gallon = 128 fl oz)
        $isDynamicPage = true;
    }
}

// Generate dynamic content
$pageTitle = $isDynamicPage ? 
    "Convert {$inputValue} Ounces to Gallons 2025 | {$inputValue} fl oz = " . number_format($outputValue, 6) . " gal | Free Calculator" : 
    "Ounces to Gallons Converter 2025 | FL OZ to GAL | Best Free Volume Tool";

$pageDescription = $isDynamicPage ? 
    "Convert {$inputValue} fluid ounces to gallons in 2025. {$inputValue} fl oz equals " . number_format($outputValue, 6) . " gallons. Free, instant, accurate volume conversion for cooking, recipes & liquid measurements." :
    "Convert fluid ounces to gallons instantly with our best 2025 accurate converter. Perfect fl oz to gal conversion for cooking, recipes, beverages & liquid volume measurements.";

$canonicalUrl = $isDynamicPage ? 
    "https://www.thiyagi.com/ounces-to-gallons/{$inputValue}" : 
    "https://www.thiyagi.com/ounces-to-gallons";
?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<?php if ($isDynamicPage): ?>
<meta name="keywords" content="<?php echo $inputValue; ?> ounces to gallons 2025, <?php echo $inputValue; ?> fl oz to gal, <?php echo number_format($outputValue, 4); ?> gallons volume, cooking measurements 2025, recipe converter, liquid volume calculator, beverage measurements, kitchen conversion tool">
<?php else: ?>
<meta name="keywords" content="ounces to gallons converter 2025, fl oz gal converter 2025, volume conversion 2025, cooking measurements 2025, recipe calculator, liquid volume tool, kitchen converter, beverage measurements, fluid ounce gallon conversion 2025">
<?php endif; ?>
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.thiyagi.com/nt.png">
<meta property="og:site_name" content="Thiyagi Tools 2025">
<meta property="og:locale" content="en_US">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="twitter:site" content="@ThiyagiTools">
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

<!-- Additional SEO Meta Tags -->
<meta name="author" content="Thiyagi">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="theme-color" content="#3b82f6">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="distribution" content="global">
<meta name="rating" content="general">
<meta name="copyright" content="Thiyagi Tools 2025">
<meta name="category" content="Volume Converters, Cooking Tools, Kitchen Calculators 2025">
<meta name="coverage" content="Worldwide">
<meta name="target" content="cooks, chefs, bartenders, home cooks, recipe developers">

<style>
  .input-focus:focus {
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    border-color: #3b82f6;
  }
</style>

<main class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50">
  <!-- Breadcrumb Navigation -->
  <nav class="pt-16 pb-4" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <ol class="flex items-center space-x-2 text-sm" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" class="text-blue-600 hover:text-blue-800 transition-colors" itemprop="item">
            <span itemprop="name">Home</span>
            <meta itemprop="position" content="1">
          </a>
        </li>
        <li class="text-gray-400">
          <i class="fas fa-chevron-right text-xs" aria-hidden="true"></i>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-blue-600" itemprop="name">Volume Converters</span>
          <meta itemprop="position" content="2">
        </li>
        <li class="text-gray-400">
          <i class="fas fa-chevron-right text-xs" aria-hidden="true"></i>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <?php if ($isDynamicPage): ?>
          <a href="/ounces-to-gallons" class="text-blue-600 hover:text-blue-800 transition-colors" itemprop="item">
            <span itemprop="name">Ounces to Gallons</span>
            <meta itemprop="position" content="3">
          </a>
        </li>
        <li class="text-gray-400">
          <i class="fas fa-chevron-right text-xs" aria-hidden="true"></i>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-gray-700 font-medium" itemprop="name"><?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> FL OZ to GAL</span>
          <meta itemprop="position" content="4">
        </li>
          <?php else: ?>
          <span class="text-gray-700 font-medium" itemprop="name">Ounces to Gallons</span>
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
          Convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> Ounces to Gallons
          <?php else: ?>
          Ounces to Gallons Converter
          <?php endif; ?>
        </h1>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 max-w-2xl mx-auto">
          <div class="text-center">
            <div class="text-3xl font-bold text-blue-600 mb-2">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fl oz = <?php echo number_format($outputValue, 6); ?> gal
            </div>
            <p class="text-gray-600">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fluid ounces equals <?php echo number_format($outputValue, 6); ?> gallons
            </p>
          </div>
        </div>
        <?php endif; ?>
        <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
          Convert <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">fluid ounces</a> to <a href="/gallon-to-liter" class="text-blue-600 hover:text-blue-800 underline">gallons</a> instantly with our accurate 2025 calculator. 
          Perfect for <a href="/cup-to-ml" class="text-blue-600 hover:text-blue-800 underline">cooking</a>, recipes, beverages, and liquid volume measurements.
        </p>
      </div>
    </div>
  </section>

<!-- Converter Section -->
<section class="bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 py-12">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
            <i class="fas fa-tint text-blue-600 text-2xl" aria-hidden="true"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">
            Quick Fluid Ounce to Gallon Conversion
        </h2>
        <p class="text-gray-600 mb-8">
            Enter fluid ounces and get instant results in gallons
        </p>
        
        <!-- Related Converters -->
        <div class="flex flex-wrap justify-center gap-4 text-sm" role="list">
            <a href="/gallons-to-ounces" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">Gallons to Ounces</a>
            <a href="/cc-to-oz" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">CC to Ounces</a>
            <a href="/liter-to-gallon" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">Liter to Gallon</a>
            <a href="/cup-to-ml" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">Cup to ML</a>
            <a href="/ml-to-cup" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">ML to Cup</a>
        </div>
    </div>
</section>

<!-- Calculator Widget -->
<section class="py-12">
  <div class="max-w-xl mx-auto bg-white rounded-xl shadow-lg p-6 sm:p-10">
    <div class="flex items-center gap-3 mb-4">
      <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
        <i class="fas fa-flask text-blue-600 text-xl" aria-hidden="true"></i>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-800">Ounces to Gallons Calculator</h2>
        <p class="text-gray-600 text-sm">Enter value and get instant conversion</p>
      </div>
    </div>
    
    <form class="space-y-6" role="form">
      <div class="flex flex-col sm:flex-row gap-3">
        <div class="relative flex-1">
          <label for="ozValue" class="block text-sm font-medium text-gray-700 mb-2">
            Fluid Ounces (fl oz)
          </label>
          <div class="relative">
            <input
              type="number"
              id="ozValue"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 input-focus text-lg"
              placeholder="Enter fluid ounces"
              step="any"
              min="0"
            />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
              <span class="text-gray-500 text-sm">fl oz</span>
            </div>
          </div>
        </div>
        
        <div class="flex items-center justify-center sm:mt-8">
          <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
            <i class="fas fa-arrow-right text-blue-600" aria-hidden="true"></i>
          </div>
        </div>
        
        <div class="relative flex-1">
          <label for="galResult" class="block text-sm font-medium text-gray-700 mb-2">
            Gallons (gal)
          </label>
          <div class="relative">
            <input
              type="text"
              id="galResult"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-medium text-blue-700"
              placeholder="Result will appear here"
              readonly
            />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
              <span class="text-gray-500 text-sm">gal</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Copy Button -->
      <div class="flex justify-center">
        <button
          type="button"
          id="copyBtn"
          class="hidden px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors duration-200 flex items-center gap-2"
        >
          <i class="fas fa-copy" aria-hidden="true"></i>
          Copy Result
        </button>
      </div>
      
      <!-- Copy Success Message -->
      <div id="copySuccess" class="hidden text-center">
        <div class="inline-flex items-center px-4 py-2 bg-green-100 text-green-800 rounded-lg">
          <i class="fas fa-check-circle mr-2" aria-hidden="true"></i>
          <span>Copied to clipboard!</span>
        </div>
      </div>
    </form>
  </div>
</section>

<!-- FAQ Section -->
<section class="max-w-4xl mx-auto mt-8 px-4">
  <article class="bg-white rounded-xl shadow-lg p-8" itemscope itemtype="https://schema.org/FAQPage">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
      <i class="fas fa-question-circle text-blue-600" aria-hidden="true"></i>
      Frequently Asked Questions about FL OZ to GAL Conversion
    </h2>
    
    <div class="space-y-6">
      <div class="border-l-4 border-blue-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
          How many fluid ounces are in a gallon?
        </h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="text-gray-600" itemprop="text">
            There are 128 <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">fluid ounces</a> in 1 <a href="/gallon-to-liter" class="text-blue-600 hover:text-blue-800 underline">gallon</a> (US measurement). This is the standard conversion factor used in cooking, recipes, and liquid measurements.
          </p>
        </div>
      </div>
      
      <div class="border-l-4 border-green-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
          What's the formula to convert ounces to gallons?
        </h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="text-gray-600" itemprop="text">
            To convert <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">fluid ounces to gallons</a>: divide the number of fluid ounces by 128. Formula: Gallons = Fluid Ounces ÷ 128. Perfect for <a href="/cup-to-ml" class="text-blue-600 hover:text-blue-800 underline">cooking conversions</a>.
          </p>
        </div>
      </div>
      
      <div class="border-l-4 border-purple-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
          Why convert fluid ounces to gallons?
        </h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="text-gray-600" itemprop="text">
            Converting <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">fluid ounces to gallons</a> is essential for large-batch cooking, beverage preparation, industrial applications, and understanding product quantities. Gallons are used for larger volumes while <a href="/ml-to-cup" class="text-blue-600 hover:text-blue-800 underline">fluid ounces</a> are for smaller measurements.
          </p>
        </div>
      </div>
      
      <div class="border-l-4 border-yellow-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
          Is this converter accurate for cooking and recipes?
        </h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="text-gray-600" itemprop="text">
            Yes, our converter uses the exact US conversion factor (128 fl oz = 1 gal) with precision to 6 decimal places, making it perfect for <a href="/cup-to-ml" class="text-blue-600 hover:text-blue-800 underline">cooking</a>, baking, beverage preparation, and professional kitchen use.
          </p>
        </div>
      </div>
    </div>
  </article>
</section>

</main>

<script>
function updateConversion() {
  const ozValue = parseFloat(document.getElementById('ozValue').value);
  const galResult = document.getElementById('galResult');
  const copyBtn = document.getElementById('copyBtn');
  
  if (isNaN(ozValue) || ozValue < 0) {
    galResult.value = '';
    copyBtn.classList.add('hidden');
    return;
  }
  
  // Convert fluid ounces to gallons (1 gallon = 128 fl oz)
  const galValue = ozValue / 128;
  
  // Format the result
  let formattedResult;
  if (galValue >= 10) {
    formattedResult = galValue.toFixed(2);
  } else if (galValue >= 1) {
    formattedResult = galValue.toFixed(4);
  } else {
    formattedResult = galValue.toFixed(6);
  }
  
  galResult.value = formattedResult;
  copyBtn.classList.remove('hidden');
}

function copyResult() {
  const ozValue = document.getElementById('ozValue').value;
  const galResult = document.getElementById('galResult').value;
  const copyText = `${ozValue} fluid ounces = ${galResult} gallons`;
  
  navigator.clipboard.writeText(copyText).then(() => {
    const copySuccess = document.getElementById('copySuccess');
    copySuccess.classList.remove('hidden');
    setTimeout(() => {
      copySuccess.classList.add('hidden');
    }, 3000);
  });
}

document.getElementById('ozValue').addEventListener('input', updateConversion);
document.getElementById('copyBtn').addEventListener('click', copyResult);

// Initialize with demo value
window.addEventListener('DOMContentLoaded', () => {
  document.getElementById('ozValue').focus();
  <?php if ($isDynamicPage): ?>
  document.getElementById('ozValue').value = <?php echo $inputValue; ?>;
  <?php else: ?>
  document.getElementById('ozValue').value = 64;
  <?php endif; ?>
  updateConversion();
});
</script>

<?php include 'footer.php';?>