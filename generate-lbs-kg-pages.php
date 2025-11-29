<?php
/**
 * LBS to KG Dynamic Page Generator
 * This script generates static HTML files for LBS to KG conversions (1-1000)
 * for better SEO performance and faster loading times.
 */

// Set execution time limit for large batch processing
set_time_limit(0);

// Base URL configuration
$baseUrl = 'https://www.thiyagi.com';
$outputDir = __DIR__ . '/generated-pages/lbs-to-kg/';

// Create output directory if it doesn't exist
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

// Function to generate HTML content for a specific LBS value
function generateLbsToKgPage($lbsValue) {
    global $baseUrl;
    
    // Calculate KG value
    $kgValue = $lbsValue * 0.453592;
    
    // Format numbers appropriately
    $lbsFormatted = number_format($lbsValue, ($lbsValue == intval($lbsValue)) ? 0 : 2);
    $kgFormatted = number_format($kgValue, 4);
    
    // Generate dynamic content
    $pageTitle = "Convert {$lbsFormatted} LBS to KG | {$lbsFormatted} lbs = {$kgFormatted} kg";
    $pageDescription = "Convert {$lbsFormatted} pounds to kilograms. {$lbsFormatted} lbs equals {$kgFormatted} kg. Instant, accurate conversion with our weight calculator.";
    $canonicalUrl = "{$baseUrl}/lbs-to-kg/{$lbsValue}";
    
    // Start output buffering
    ob_start();
    
    // Include the header
    include 'header.php';
    
    // Generate the HTML content
    ?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="<?php echo $lbsFormatted; ?> lbs to kg, <?php echo $lbsFormatted; ?> pounds to kilograms, weight converter, fitness calculator, body weight conversion">
<link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $baseUrl; ?>/nt.png">
<meta property="og:site_name" content="Thiyagi Tools">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="twitter:image" content="<?php echo $baseUrl; ?>/nt.png">

<!-- Schema.org Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "LBS to KG Converter",
  "description": "<?php echo addslashes($pageDescription); ?>",
  "url": "<?php echo $canonicalUrl; ?>",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Web Browser",
  "featureList": [
    "Convert <?php echo $lbsFormatted; ?> pounds to kilograms",
    "Real-time calculation",
    "Mobile responsive design",
    "Copy results to clipboard"
  ]
}
</script>

<style>
  .input-focus:focus {
    box-shadow: 0 0 0 3px rgba(124, 58, 237, 0.1);
    border-color: #7c3aed;
  }
  .weight-icon {
    background: linear-gradient(45deg, #7c3aed, #3b82f6);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>

<main class="min-h-screen bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-50">
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
          <span class="text-blue-600" itemprop="name">Weight Converters</span>
          <meta itemprop="position" content="2">
        </li>
        <li class="text-gray-400">
          <i class="fas fa-chevron-right text-xs" aria-hidden="true"></i>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/lbs-to-kg" class="text-blue-600 hover:text-blue-800 transition-colors" itemprop="item">
            <span itemprop="name">LBS to KG Converter</span>
            <meta itemprop="position" content="3">
          </a>
        </li>
        <li class="text-gray-400">
          <i class="fas fa-chevron-right text-xs" aria-hidden="true"></i>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-gray-700 font-medium" itemprop="name"><?php echo $lbsFormatted; ?> LBS to KG</span>
          <meta itemprop="position" content="4">
        </li>
      </ol>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="pt-8 pb-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
          <i class="fas fa-weight weight-icon mr-3" aria-hidden="true"></i>
          Convert <?php echo $lbsFormatted; ?> LBS to KG
        </h1>
        
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 max-w-2xl mx-auto">
          <div class="text-center">
            <div class="text-3xl font-bold text-purple-600 mb-2">
              <?php echo $lbsFormatted; ?> lbs = <?php echo $kgFormatted; ?> kg
            </div>
            <p class="text-gray-600">
              <?php echo $lbsFormatted; ?> pounds equals <?php echo $kgFormatted; ?> kilograms
            </p>
          </div>
        </div>
        
        <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
          Convert pounds to kilograms instantly with our accurate 2025 calculator. 
          Perfect for fitness tracking, weight management, and international weight conversions.
        </p>
      </div>
    </div>
  </section>

  <!-- Quick Navigation -->
  <section class="bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-50 py-8">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Related LBS to KG Conversions</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
        <?php 
        $relatedValues = [];
        // Add nearby values
        for($i = max(1, $lbsValue - 2); $i <= min(1000, $lbsValue + 2); $i++) {
            if($i != $lbsValue) $relatedValues[] = $i;
        }
        // Add common weight values in pounds
        $commonValues = [100, 120, 140, 150, 160, 180, 200, 220];
        foreach($commonValues as $val) {
            if($val != $lbsValue && !in_array($val, $relatedValues)) {
                $relatedValues[] = $val;
            }
        }
        // Limit to 8 related values
        $relatedValues = array_slice(array_unique($relatedValues), 0, 8);
        
        foreach($relatedValues as $val): 
            $relatedKg = number_format($val * 0.453592, 2);
        ?>
        <a href="/lbs-to-kg/<?php echo $val; ?>" class="px-3 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700">
          <?php echo $val; ?> lbs → <?php echo $relatedKg; ?> kg
        </a>
        <?php endforeach; ?>
      </div>
      
      <div class="mt-6">
        <a href="/lbs-to-kg" class="inline-block px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors">
          <i class="fas fa-calculator mr-2"></i>
          Use Interactive Calculator
        </a>
      </div>
    </div>
  </section>

  <!-- Detailed Information -->
  <section class="max-w-4xl mx-auto mt-8 px-4">
    <article class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">
        How to Convert <?php echo $lbsFormatted; ?> LBS to KG
      </h2>
      
      <div class="prose max-w-none">
        <p class="text-gray-600 mb-4">
          To convert <?php echo $lbsFormatted; ?> pounds to kilograms, we use the standard conversion factor:
        </p>
        
        <div class="bg-gray-50 p-4 rounded-lg mb-6">
          <div class="text-lg font-mono">
            <?php echo $lbsFormatted; ?> lbs × 0.453592 = <?php echo $kgFormatted; ?> kg
          </div>
        </div>
        
        <h3 class="text-xl font-semibold mb-3">Conversion Formula Explanation</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-600">
          <li>1 pound = 0.453592 kilograms</li>
          <li>The conversion factor is based on the exact definition</li>
          <li>Multiply any LBS value by 0.453592 to get KG</li>
        </ul>
        
        <h3 class="text-xl font-semibold mb-3 mt-6">Real-World Context for <?php echo $lbsFormatted; ?> LBS</h3>
        <?php
        $context = '';
        if($lbsValue <= 10) {
            $context = 'This weight is typical for small objects, infants, or small pets.';
        } elseif($lbsValue <= 50) {
            $context = 'This weight range is common for children, small luggage, or medium-sized pets.';
        } elseif($lbsValue <= 100) {
            $context = 'This weight is typical for pre-teens or lightweight adults.';
        } elseif($lbsValue <= 200) {
            $context = 'This is a typical adult weight range in the United States.';
        } elseif($lbsValue <= 300) {
            $context = 'This represents a heavier adult weight or athletic individuals.';
        } else {
            $context = 'This represents very heavy weights, possibly for industrial or specialized applications.';
        }
        ?>
        <p class="text-gray-600"><?php echo $context; ?></p>
        
        <h3 class="text-xl font-semibold mb-3 mt-6">US Fitness and Health Context</h3>
        <p class="text-gray-600">
          Converting pounds to kilograms is essential for:
        </p>
        <ul class="list-disc list-inside space-y-1 text-gray-600 mt-2">
          <li>International fitness and health tracking</li>
          <li>Medical consultations in metric system countries</li>
          <li>Sports and athletic performance monitoring</li>
          <li>Scientific and academic applications</li>
          <li>International travel and luggage restrictions</li>
        </ul>
      </div>
    </article>
  </section>
</main>

<script>
// Add some interactivity for better user experience
document.addEventListener('DOMContentLoaded', function() {
    // Highlight the main conversion result
    const resultElement = document.querySelector('.text-3xl.font-bold.text-purple-600');
    if (resultElement) {
        resultElement.addEventListener('click', function() {
            // Copy to clipboard
            const text = this.textContent;
            navigator.clipboard.writeText(text).then(() => {
                const originalText = this.textContent;
                this.textContent = 'Copied!';
                setTimeout(() => {
                    this.textContent = originalText;
                }, 1500);
            });
        });
    }
});
</script>

<?php
    include 'footer.php';
    
    // Get the generated HTML
    $html = ob_get_contents();
    ob_end_clean();
    
    return $html;
}

// Generate pages for values 1-1000
echo "Starting generation of LBS to KG static pages...\n";
$startTime = microtime(true);
$generated = 0;

for ($i = 1; $i <= 1000; $i++) {
    $html = generateLbsToKgPage($i);
    $filename = $outputDir . $i . '.html';
    
    if (file_put_contents($filename, $html)) {
        $generated++;
        if ($generated % 100 == 0) {
            echo "Generated {$generated} pages...\n";
        }
    } else {
        echo "Error generating page for {$i} LBS\n";
    }
}

$endTime = microtime(true);
$duration = round($endTime - $startTime, 2);

echo "\nGeneration complete!\n";
echo "Generated {$generated} static HTML pages in {$duration} seconds\n";
echo "Pages saved to: {$outputDir}\n";
echo "Average time per page: " . round($duration / $generated * 1000, 2) . " ms\n";

// Generate index file for the generated pages
$indexContent = '<?php
// Auto-generated index of LBS to KG static pages
$generatedPages = [];
for($i = 1; $i <= 1000; $i++) {
    $generatedPages[$i] = [
        "lbs" => $i,
        "kg" => number_format($i * 0.453592, 4),
        "file" => "' . $outputDir . '" . $i . ".html"
    ];
}
return $generatedPages;
?>';

file_put_contents($outputDir . 'index.php', $indexContent);
echo "Generated index file: {$outputDir}index.php\n";
?>