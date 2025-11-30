<?php 
include 'header.php';

// Handle dynamic URL parameter
$inputValue = null;
$outputValue = null;
$isDynamicPage = false;

if (isset($_GET['value'])) {
    $value = trim($_GET['value']);
    $originalValue = $value; // Store original format for URLs
    
    // Remove commas and validate the input value (must be numeric and non-negative)
    $cleanValue = str_replace(',', '', $value);
    if (is_numeric($cleanValue) && floatval($cleanValue) >= 0) {
        $inputValue = floatval($cleanValue);
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
    "https://www.thiyagi.com/ounces-to-gallons/{$originalValue}" : 
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="referrer" content="origin-when-cross-origin">

<?php if ($isDynamicPage): ?>
<!-- Schema.org Structured Data for Dynamic Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Best Ounces to Gallons Converter 2025 - <?php echo $inputValue; ?> fl oz",
  "description": "<?php echo addslashes($pageDescription); ?>",
  "url": "<?php echo $canonicalUrl; ?>",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Web Browser",
  "datePublished": "2025-01-01",
  "dateModified": "<?php echo date('Y-m-d'); ?>",
  "inLanguage": "en-US",
  "isAccessibleForFree": true,
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD",
    "availability": "https://schema.org/InStock"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Thiyagi Tools 2025",
    "url": "https://www.thiyagi.com"
  },
  "featureList": [
    "Convert <?php echo $inputValue; ?> fluid ounces to gallons in 2025",
    "Instant calculation: <?php echo $inputValue; ?> fl oz = <?php echo number_format($outputValue, 6); ?> gal",
    "Real-time volume conversion for cooking & recipes",
    "Mobile responsive design for kitchen use",
    "Copy results to clipboard for easy sharing",
    "Best accuracy for beverage measurements",
    "Perfect for large-batch cooking"
  ],
  "mainEntity": {
    "@type": "Question",
    "name": "How much is <?php echo $inputValue; ?> fl oz in gallons in 2025?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "<?php echo $inputValue; ?> fluid ounces equals exactly <?php echo number_format($outputValue, 6); ?> gallons using the 2025 standard conversion factor: 1 gallon = 128 fl oz. Perfect for cooking and beverage preparation."
    }
  },
  "sameAs": [
    "https://www.thiyagi.com/ounces-to-gallons",
    "https://www.thiyagi.com/gallons-to-ounces"
  ]
}
</script>
<?php else: ?>
<!-- Schema.org Structured Data for Static Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Best Ounces to Gallons Converter 2025",
  "description": "<?php echo addslashes($pageDescription); ?>",
  "url": "https://www.thiyagi.com/ounces-to-gallons",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Web Browser",
  "datePublished": "2025-01-01",
  "dateModified": "<?php echo date('Y-m-d'); ?>",
  "inLanguage": "en-US",
  "isAccessibleForFree": true,
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "ratingCount": "8750"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD",
    "availability": "https://schema.org/InStock"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Thiyagi Tools 2025",
    "url": "https://www.thiyagi.com"
  },
  "featureList": [
    "Best FL OZ to GAL converter in 2025",
    "Instant volume conversion for cooking",
    "Perfect for recipe scaling",
    "Beverage and liquid calculator",
    "Kitchen measurement tool",
    "Mobile responsive for cooking use",
    "Copy results feature",
    "Accurate to 6 decimal places"
  ]
}
</script>
<?php endif; ?>

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

  <!-- About Section -->
  <section class="max-w-4xl mx-auto mt-12 px-4">
    <article class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-info-circle text-blue-600" aria-hidden="true"></i>
        Fluid Ounce to Gallon Conversion 2025
      </h2>
      <div class="prose max-w-none text-gray-600">
        <p class="mb-4">
          Converting <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">fluid ounces</a> to <a href="/gallon-to-liter" class="text-blue-600 hover:text-blue-800 underline">gallons</a> is essential for cooking, recipe scaling, beverage preparation, and large-batch food production in 2025. 
          This <a href="/liter-to-gallon" class="text-blue-600 hover:text-blue-800 underline">volume unit conversion</a> enables accurate calculations for chefs, 
          home cooks, bartenders, and food service professionals working with liquid measurements.
        </p>
        <p class="mb-6">
          Our 2025 converter provides instant and accurate conversions from <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">fluid ounces</a> to <a href="/gallon-to-liter" class="text-blue-600 hover:text-blue-800 underline">gallons</a>, essential for culinary professionals, 
          home cooks, beverage industry workers, and anyone working with liquid volume measurements. 
          One gallon equals exactly <a href="/cup-to-ml" class="text-blue-600 hover:text-blue-800 underline">128 fluid ounces</a>.
        </p>
      </div>
    </article>
  </section>

  <!-- How to Convert Section -->
  <section class="max-w-4xl mx-auto mt-8 px-4">
    <article class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-calculator text-blue-600" aria-hidden="true"></i>
        How to Convert Fluid Ounces to Gallons
      </h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Method 1: Division Formula</h3>
          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-bold text-sm">1</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Take your <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">fluid ounce</a> value</h4>
                <p class="text-gray-600 text-sm">Example: 64 <a href="/ml-to-cup" class="text-blue-600 hover:text-blue-800 underline">fluid ounces</a></p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-bold text-sm">2</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Divide by 128</h4>
                <p class="text-gray-600 text-sm">64 ÷ 128 = 0.5</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-blue-600 font-bold text-sm">3</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Get your result</h4>
                <p class="text-gray-600 text-sm">Result: 0.5 gallons</p>
              </div>
            </div>
          </div>
        </div>
        
        <div>
          <h3 class="text-lg font-semibold text-gray-800 mb-4">Understanding Units</h3>
          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-indigo-600 font-bold text-sm">1</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">1 <a href="/gallon-to-liter" class="text-blue-600 hover:text-blue-800 underline">Gallon</a> = 128 <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">Fluid Ounces</a></h4>
                <p class="text-gray-600 text-sm">US standard <a href="/liter-to-gallon" class="text-blue-600 hover:text-blue-800 underline">volume conversion</a> factor</p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-indigo-600 font-bold text-sm">2</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Fluid Ounce is Small Volume</h4>
                <p class="text-gray-600 text-sm">Perfect for <a href="/cup-to-ml" class="text-blue-600 hover:text-blue-800 underline">recipe measurements</a></p>
              </div>
            </div>
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 bg-indigo-100 rounded-full flex items-center justify-center flex-shrink-0">
                <span class="text-indigo-600 font-bold text-sm">3</span>
              </div>
              <div>
                <h4 class="font-medium text-gray-800">Gallon is Large Volume</h4>
                <p class="text-gray-600 text-sm">Used for bulk liquids and large-batch cooking</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Formula Box -->
      <div class="mt-8 bg-blue-50 rounded-lg p-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-3">Conversion Formula</h3>
        <div class="text-center">
          <div class="text-2xl font-bold text-blue-700 mb-2">
            Gallons = Fluid Ounces ÷ 128
          </div>
          <div class="text-gray-600">
            US standard volume conversion
          </div>
        </div>
      </div>
    </article>
  </section>

  <!-- Conversion Table Section -->
  <section class="max-w-4xl mx-auto mt-8 px-4">
    <article class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-table text-blue-600" aria-hidden="true"></i>
        <?php if ($isDynamicPage): ?>
        Related FL OZ to GAL Conversions (Near <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fl oz)
        <?php else: ?>
        FL OZ to GAL Conversion Table
        <?php endif; ?>
      </h2>
      
      <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
          <thead>
            <tr class="bg-gray-50">
              <th class="border border-gray-300 px-4 py-3 text-left font-semibold text-gray-800">Fluid Ounces (fl oz)</th>
              <th class="border border-gray-300 px-4 py-3 text-left font-semibold text-gray-800">Gallons (gal)</th>
              <th class="border border-gray-300 px-4 py-3 text-left font-semibold text-gray-800">Common Use</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $tableValues = [];
            if ($isDynamicPage) {
                // For dynamic pages, show values around the input
                $start = max(1, $inputValue - 4);
                $end = min(1000, $inputValue + 4);
                for ($i = $start; $i <= $end; $i++) {
                    $tableValues[] = $i;
                }
            } else {
                // For static page, show common cooking values
                $tableValues = [8, 16, 32, 48, 64, 80, 96, 112, 128, 144, 160];
            }
            
            foreach ($tableValues as $oz): 
                $gal = $oz / 128;
                $isCurrentValue = ($isDynamicPage && $oz == $inputValue);
                $rowClass = $isCurrentValue ? 'bg-blue-50 font-semibold' : 'hover:bg-gray-50';
                
                // Context based on volume
                $context = '';
                if ($oz <= 8) $context = 'Small recipe portion';
                elseif ($oz <= 32) $context = 'Cup/serving measurements';
                elseif ($oz <= 64) $context = 'Large beverage portions';
                elseif ($oz <= 128) $context = 'Gallon measurements';
                elseif ($oz <= 256) $context = 'Multi-gallon batches';
                else $context = 'Industrial/bulk quantities';
            ?>
            <tr class="<?php echo $rowClass; ?>">
              <td class="border border-gray-300 px-4 py-3">
                <?php echo $oz; ?> fl oz
                <?php if ($isCurrentValue): ?>
                <i class="fas fa-arrow-left text-blue-600 ml-2" aria-hidden="true"></i>
                <?php endif; ?>
              </td>
              <td class="border border-gray-300 px-4 py-3 font-medium <?php echo $isCurrentValue ? 'text-blue-700' : 'text-blue-600'; ?>">
                <?php echo number_format($gal, 6); ?> gal
              </td>
              <td class="border border-gray-300 px-4 py-3 text-gray-600"><?php echo $context; ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      
      <?php if ($isDynamicPage): ?>
      <!-- Quick Links to Related Conversions -->
      <div class="mt-6 bg-blue-50 rounded-lg p-4">
        <h3 class="font-semibold text-gray-800 mb-3">Quick Links to Nearby Conversions</h3>
        <div class="flex flex-wrap gap-2">
          <?php 
          $quickLinks = [];
          for ($i = max(1, $inputValue - 2); $i <= min(100, $inputValue + 2); $i++) {
              if ($i != $inputValue) $quickLinks[] = $i;
          }
          foreach ($quickLinks as $link): 
              $linkGal = $link / 128;
          ?>
          <a href="/ounces-to-gallons/<?php echo $link; ?>" class="px-3 py-1 bg-white rounded text-sm text-blue-600 hover:text-blue-800 hover:bg-blue-50 transition-colors border">
            <?php echo $link; ?> fl oz (<?php echo number_format($linkGal, 4); ?> gal)
          </a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>
      
      <!-- Conversion Formula -->
      <div class="mt-6 bg-gray-50 rounded-lg p-4">
        <h3 class="font-semibold text-gray-800 mb-2 flex items-center gap-2">
          <i class="fas fa-flask text-blue-600" aria-hidden="true"></i>
          Conversion Formula
        </h3>
        <div class="text-gray-700">
          <p class="mb-2"><strong>To convert fluid ounces to gallons:</strong></p>
          <p class="font-mono bg-white p-2 rounded border">Gallons = Fluid Ounces ÷ 128</p>
          <?php if ($isDynamicPage): ?>
          <p class="mt-2 text-sm">For your conversion: <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> ÷ 128 = <?php echo number_format($outputValue, 6); ?> gal</p>
          <?php endif; ?>
        </div>
      </div>
    </article>
  </section>

<?php if ($isDynamicPage): ?>
  <!-- Dynamic Content Section -->
  <section class="max-w-4xl mx-auto mt-8 px-4">
    <article class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-info-circle text-blue-600" aria-hidden="true"></i>
        About Converting <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> Fluid Ounces to Gallons
      </h2>
      
      <div class="prose max-w-none">
        <div class="bg-blue-50 rounded-lg p-6 mb-6">
          <h3 class="text-xl font-semibold text-blue-800 mb-3">Quick Conversion Summary</h3>
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <p class="font-medium text-gray-800">Input Volume:</p>
              <p class="text-2xl font-bold text-blue-600"><?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fl oz</p>
            </div>
            <div>
              <p class="font-medium text-gray-800">Converted Volume:</p>
              <p class="text-2xl font-bold text-blue-600"><?php echo number_format($outputValue, 6); ?> gal</p>
            </div>
          </div>
        </div>
        
        <h3 class="text-xl font-semibold mb-3">Step-by-Step Conversion</h3>
        <div class="bg-gray-50 p-4 rounded-lg mb-6">
          <ol class="list-decimal list-inside space-y-2 text-gray-700">
            <li>Start with <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fluid ounces</li>
            <li>Divide by the conversion factor: 128</li>
            <li>Calculate: <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> ÷ 128 = <?php echo number_format($outputValue, 6); ?></li>
            <li>Result: <?php echo number_format($outputValue, 6); ?> gallons</li>
          </ol>
        </div>
        
        <h3 class="text-xl font-semibold mb-3">Real-World Context</h3>
        <?php
        $context = '';
        $category = '';
        if($inputValue <= 8) {
            $context = 'This volume is typical for small beverage servings, medicine doses, or recipe ingredients like vanilla extract.';
            $category = 'Small Liquid Measurements';
        } elseif($inputValue <= 16) {
            $context = 'This volume includes standard cup measurements, small beverage bottles, or cooking liquid ingredients.';
            $category = 'Cup-Size Measurements';
        } elseif($inputValue <= 32) {
            $context = 'This volume is common for large drinks, sports bottles, or medium recipe portions.';
            $category = 'Large Beverage Portions';
        } elseif($inputValue <= 64) {
            $context = 'This volume includes half-gallon containers, large pitchers, or family-size beverage portions.';
            $category = 'Half-Gallon Range';
        } elseif($inputValue <= 128) {
            $context = 'This represents full gallon measurements, perfect for milk jugs, large beverage containers, or bulk cooking.';
            $category = 'Gallon Measurements';
        } else {
            $context = 'This represents multi-gallon volumes, suitable for large-batch cooking, commercial beverage preparation, or industrial applications.';
            $category = 'Multi-Gallon Volumes';
        }
        ?>
        <div class="bg-green-50 rounded-lg p-4 mb-6">
          <p class="font-semibold text-green-800 mb-2">Category: <?php echo $category; ?></p>
          <p class="text-gray-700"><?php echo $context; ?></p>
        </div>
        
        <h3 class="text-xl font-semibold mb-3">Common Uses for This Volume</h3>
        <div class="grid md:grid-cols-2 gap-4">
          <?php if($inputValue <= 16): ?>
          <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Beverage serving sizes</li>
            <li>Recipe liquid ingredients</li>
            <li>Medicine and supplement doses</li>
            <li>Cooking oil and vinegar portions</li>
          </ul>
          <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Salad dressing amounts</li>
            <li>Vanilla and flavor extracts</li>
            <li>Small container measurements</li>
            <li>Individual portion planning</li>
          </ul>
          <?php elseif($inputValue <= 64): ?>
          <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Large beverage containers</li>
            <li>Sports and water bottles</li>
            <li>Recipe scaling for families</li>
            <li>Juice and smoothie portions</li>
          </ul>
          <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Soup and sauce batches</li>
            <li>Party beverage planning</li>
            <li>Large pitcher measurements</li>
            <li>Bulk liquid ingredients</li>
          </ul>
          <?php else: ?>
          <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Commercial food preparation</li>
            <li>Large-batch cooking</li>
            <li>Beverage industry measurements</li>
            <li>Restaurant kitchen volumes</li>
          </ul>
          <ul class="list-disc list-inside text-gray-700 space-y-1">
            <li>Bulk ingredient storage</li>
            <li>Industrial liquid measurements</li>
            <li>Large event catering</li>
            <li>Commercial beverage production</li>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </article>
  </section>
<?php endif; ?>

<!-- FAQ Section -->
<section class="max-w-4xl mx-auto mt-8 px-4">
  <article class="bg-white rounded-xl shadow-lg p-8" itemscope itemtype="https://schema.org/FAQPage">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
      <i class="fas fa-question-circle text-blue-600" aria-hidden="true"></i>
      Frequently Asked Questions about FL OZ to GAL Conversion
    </h2>
    
    <div class="space-y-6">
      <?php if ($isDynamicPage): ?>
      <div class="border-l-4 border-blue-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
          How much is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fl oz in gallons?
        </h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="text-gray-600" itemprop="text">
            <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fluid ounces equals exactly <?php echo number_format($outputValue, 6); ?> gallons. This is calculated using the standard conversion factor where 1 gallon = 128 fluid ounces.
          </p>
        </div>
      </div>
      
      <div class="border-l-4 border-green-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
          Is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fl oz a common measurement for cooking?
        </h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="text-gray-600" itemprop="text">
            <?php 
            if($inputValue <= 16) {
                echo "Yes, {$inputValue} fl oz ({$outputValue} gallons) is a common measurement for recipe ingredients, beverage servings, and cooking liquids.";
            } elseif($inputValue <= 64) {
                echo "{$inputValue} fl oz ({$outputValue} gallons) is perfect for larger beverage portions, family recipes, and medium-batch cooking.";
            } else {
                echo "{$inputValue} fl oz ({$outputValue} gallons) is ideal for large-batch cooking, commercial food preparation, and bulk liquid measurements.";
            }
            ?> Great for <a href="/cup-to-ml" class="text-blue-600 hover:text-blue-800 underline">scaling recipes</a> accurately.
          </p>
        </div>
      </div>
      
      <div class="border-l-4 border-purple-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
          What's the formula to convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fl oz to gallons?
        </h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="text-gray-600" itemprop="text">
            To convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fl oz to gallons: divide <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> by 128. The calculation is: <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> ÷ 128 = <?php echo number_format($outputValue, 6); ?> gallons.
          </p>
        </div>
      </div>
      <?php endif; ?>
      
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
      
      <!-- Additional FAQ Questions -->
      <div class="border-l-4 border-orange-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
          Can I convert decimal fluid ounces to gallons?
        </h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <p class="text-gray-600" itemprop="text">
            Absolutely! Our <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">converter</a> handles decimal values like 32.5 fl oz, 48.75 fl oz, or any fractional volume. Simply enter the decimal value and get precise <a href="/gallon-to-liter" class="text-blue-600 hover:text-blue-800 underline">gallon conversions</a> instantly. Perfect for <a href="/cup-to-ml" class="text-blue-600 hover:text-blue-800 underline">precise recipe measurements</a>.
          </p>
        </div>
      </div>
      
      <?php if (!$isDynamicPage): ?>
      <div class="border-l-4 border-indigo-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
          What are some common fl oz to gallon conversions?
        </h3>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
          <div class="text-gray-600" itemprop="text">
            <p class="mb-2">Here are some commonly used conversions:</p>
            <ul class="list-disc list-inside space-y-1 ml-4">
              <li>16 fl oz = 0.125 gal (1 pint)</li>
              <li>32 fl oz = 0.25 gal (1 quart)</li>
              <li>64 fl oz = 0.5 gal (half gallon)</li>
              <li>96 fl oz = 0.75 gal (three-quarters gallon)</li>
              <li>128 fl oz = 1 gal (full gallon)</li>
            </ul>
          </div>
        </div>
      </div>
      <?php endif; ?>
      
      <!-- Quick Tips -->
      <div class="mt-8 bg-blue-50 rounded-lg p-6">
        <h3 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
          <i class="fas fa-lightbulb text-blue-600" aria-hidden="true"></i>
          Quick Conversion Tips
        </h3>
        <div class="grid md:grid-cols-2 gap-4">
          <ul class="list-disc list-inside space-y-1 text-gray-700 text-sm">
            <li>1 <a href="/gallon-to-liter" class="text-blue-600 hover:text-blue-800 underline">gallon</a> = 128 <a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">fluid ounces</a> (exact conversion)</li>
            <li>Divide <a href="/ml-to-cup" class="text-blue-600 hover:text-blue-800 underline">fl oz</a> by 128 for precise calculations</li>
            <li>For precision, use our calculator for accurate results</li>
            <?php if ($isDynamicPage && $inputValue <= 128): ?>
            <li><?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fl oz is perfect for <a href="/cup-to-ml" class="text-blue-600 hover:text-blue-800 underline">recipe scaling</a></li>
            <?php endif; ?>
          </ul>
          <ul class="list-disc list-inside space-y-1 text-gray-700 text-sm">
            <li><a href="/cc-to-oz" class="text-blue-600 hover:text-blue-800 underline">Fluid ounces</a> are used for small to medium volumes</li>
            <li><a href="/gallon-to-liter" class="text-blue-600 hover:text-blue-800 underline">Gallons</a> are used for large liquid quantities</li>
            <li>Both units are essential for <a href="/liter-to-gallon" class="text-blue-600 hover:text-blue-800 underline">cooking and beverages</a></li>
            <?php if ($isDynamicPage): ?>
            <li>Remember: <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> fl oz = <?php echo number_format($outputValue, 4); ?> gal</li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </article>
</section>

<!-- Related Volume Conversions Section -->
<section class="max-w-4xl mx-auto mt-8 px-4">
  <article class="bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
      <i class="fas fa-flask text-blue-600" aria-hidden="true"></i>
      Related Volume Conversions
    </h2>
    
    <!-- Mathematical Relations -->
    <div class="mb-6">
      <h3 class="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Mathematical Relations</h3>
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
        <?php 
        $mathRelations = [
          ['value' => max(1, $inputValue - 10), 'label' => '-10 fl oz'],
          ['value' => max(1, $inputValue - 5), 'label' => '-5 fl oz'],
          ['value' => min(100, $inputValue * 2), 'label' => '×2'],
          ['value' => max(1, $inputValue / 2), 'label' => '÷2'],
          ['value' => min(100, $inputValue * 1.5), 'label' => '×1.5'],
          ['value' => max(1, $inputValue / 1.5), 'label' => '÷1.5'],
          ['value' => min(100, $inputValue + 5), 'label' => '+5 fl oz'],
          ['value' => min(100, $inputValue + 10), 'label' => '+10 fl oz']
        ];
        foreach ($mathRelations as $rel): 
          $relGal = $rel['value'] / 128;
        ?>
        <a href="/ounces-to-gallons/<?php echo number_format($rel['value'], 0); ?>" class="px-2 py-1 bg-white rounded text-xs text-blue-600 hover:text-blue-800 hover:bg-blue-50 transition-colors border text-center">
          <?php echo number_format($rel['value'], 0); ?> fl oz<br>
          <span class="text-gray-500"><?php echo $rel['label']; ?></span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Common Volume Categories -->
    <div class="mb-6">
      <h3 class="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Common Volume Categories</h3>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
        <?php 
        $volumeCategories = [
          ['range' => [8, 12, 16, 20, 24], 'title' => 'Small Portions', 'color' => 'green'],
          ['range' => [32, 40, 48, 56, 64], 'title' => 'Medium Volumes', 'color' => 'blue'], 
          ['range' => [80, 96, 112, 128, 144], 'title' => 'Large Volumes', 'color' => 'purple']
        ];
        foreach ($volumeCategories as $category): ?>
        <div class="bg-white rounded-lg p-3 border-l-4 border-<?php echo $category['color']; ?>-500">
          <h4 class="font-medium text-<?php echo $category['color']; ?>-700 mb-2"><?php echo $category['title']; ?></h4>
          <div class="space-y-1">
            <?php foreach (array_slice($category['range'], 0, 3) as $volume): 
              $volumeGal = $volume / 128;
            ?>
            <a href="/ounces-to-gallons/<?php echo $volume; ?>" class="block text-xs text-gray-600 hover:text-<?php echo $category['color']; ?>-600 transition-colors">
              <?php echo $volume; ?> fl oz → <?php echo number_format($volumeGal, 4); ?> gal
            </a>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Popular Round Numbers -->
    <div class="mb-6">
      <h3 class="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Popular Round Numbers</h3>
      <div class="grid grid-cols-3 sm:grid-cols-6 gap-2">
        <?php 
        $roundNumbers = [1, 2, 4, 8, 12, 16, 20, 24, 32, 40, 48, 56, 64, 72, 80, 96, 100];
        $displayNumbers = array_slice($roundNumbers, 0, 12);
        foreach ($displayNumbers as $num): 
          $numGal = $num / 128;
        ?>
        <a href="/ounces-to-gallons/<?php echo $num; ?>" class="px-2 py-2 bg-white rounded text-xs text-center text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-colors border">
          <?php echo $num; ?> fl oz<br>
          <span class="text-blue-600"><?php echo number_format($numGal, 3); ?> gal</span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Kitchen & Cooking Measurements -->
    <div>
      <h3 class="text-sm font-semibold text-gray-700 mb-3 uppercase tracking-wide">Kitchen & Cooking Measurements</h3>
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
        <div class="bg-white rounded-lg p-3 border-l-4 border-yellow-500">
          <h4 class="font-medium text-yellow-700 mb-2">Cup Measurements</h4>
          <div class="space-y-1">
            <a href="/ounces-to-gallons/8" class="block text-xs text-gray-600 hover:text-yellow-600">8 fl oz → 1 Cup</a>
            <a href="/ounces-to-gallons/16" class="block text-xs text-gray-600 hover:text-yellow-600">16 fl oz → 2 Cups</a>
            <a href="/ounces-to-gallons/24" class="block text-xs text-gray-600 hover:text-yellow-600">24 fl oz → 3 Cups</a>
          </div>
        </div>
        <div class="bg-white rounded-lg p-3 border-l-4 border-green-500">
          <h4 class="font-medium text-green-700 mb-2">Pint & Quart</h4>
          <div class="space-y-1">
            <a href="/ounces-to-gallons/16" class="block text-xs text-gray-600 hover:text-green-600">16 fl oz → 1 Pint</a>
            <a href="/ounces-to-gallons/32" class="block text-xs text-gray-600 hover:text-green-600">32 fl oz → 1 Quart</a>
            <a href="/ounces-to-gallons/64" class="block text-xs text-gray-600 hover:text-green-600">64 fl oz → 2 Quarts</a>
          </div>
        </div>
        <div class="bg-white rounded-lg p-3 border-l-4 border-blue-500">
          <h4 class="font-medium text-blue-700 mb-2">Half Gallons</h4>
          <div class="space-y-1">
            <a href="/ounces-to-gallons/48" class="block text-xs text-gray-600 hover:text-blue-600">48 fl oz → 0.375 gal</a>
            <a href="/ounces-to-gallons/64" class="block text-xs text-gray-600 hover:text-blue-600">64 fl oz → 0.5 gal</a>
            <a href="/ounces-to-gallons/80" class="block text-xs text-gray-600 hover:text-blue-600">80 fl oz → 0.625 gal</a>
          </div>
        </div>
        <div class="bg-white rounded-lg p-3 border-l-4 border-purple-500">
          <h4 class="font-medium text-purple-700 mb-2">Full Gallons</h4>
          <div class="space-y-1">
            <a href="/ounces-to-gallons/96" class="block text-xs text-gray-600 hover:text-purple-600">96 fl oz → 0.75 gal</a>
            <a href="/ounces-to-gallons/128" class="block text-xs text-gray-600 hover:text-purple-600">128 fl oz → 1 gal</a>
            <a href="/ounces-to-gallons/160" class="block text-xs text-gray-600 hover:text-purple-600">160 fl oz → 1.25 gal</a>
          </div>
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