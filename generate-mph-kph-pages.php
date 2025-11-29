<?php
/**
 * MPH to KPH Dynamic Page Generator
 * This script generates static HTML files for MPH to KPH conversions (1-1000)
 * for better SEO performance and faster loading times.
 */

// Set execution time limit for large batch processing
set_time_limit(0);

// Base URL configuration
$baseUrl = 'https://www.thiyagi.com';
$outputDir = __DIR__ . '/generated-pages/mph-to-kph/';

// Create output directory if it doesn't exist
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0755, true);
}

// Function to generate HTML content for a specific MPH value
function generateMphToKphPage($mphValue) {
    global $baseUrl;
    
    // Calculate KPH value
    $kphValue = $mphValue * 1.609344;
    
    // Format numbers appropriately
    $mphFormatted = number_format($mphValue, ($mphValue == intval($mphValue)) ? 0 : 2);
    $kphFormatted = number_format($kphValue, 4);
    
    // Generate dynamic content
    $pageTitle = "Convert {$mphFormatted} MPH to KPH | {$mphFormatted} mph = {$kphFormatted} km/h";
    $pageDescription = "Convert {$mphFormatted} miles per hour to kilometers per hour. {$mphFormatted} mph equals {$kphFormatted} kph. Instant, accurate conversion with our speed calculator.";
    $canonicalUrl = "{$baseUrl}/mph-to-kph/{$mphValue}";
    
    // Start output buffering
    ob_start();
    
    // Include the header
    include 'header.php';
    
    // Generate the HTML content
    ?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="<?php echo $mphFormatted; ?> mph to kph, <?php echo $mphFormatted; ?> mph to km/h, <?php echo $mphFormatted; ?> miles per hour to kilometers per hour, speed converter, automotive calculator">
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
  "name": "MPH to KPH Converter",
  "description": "<?php echo addslashes($pageDescription); ?>",
  "url": "<?php echo $canonicalUrl; ?>",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Web Browser",
  "featureList": [
    "Convert <?php echo $mphFormatted; ?> miles per hour to kilometers per hour",
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
  .speed-icon {
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
          <span class="text-blue-600" itemprop="name">Speed Converters</span>
          <meta itemprop="position" content="2">
        </li>
        <li class="text-gray-400">
          <i class="fas fa-chevron-right text-xs" aria-hidden="true"></i>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/mph-to-kph" class="text-blue-600 hover:text-blue-800 transition-colors" itemprop="item">
            <span itemprop="name">MPH to KPH Converter</span>
            <meta itemprop="position" content="3">
          </a>
        </li>
        <li class="text-gray-400">
          <i class="fas fa-chevron-right text-xs" aria-hidden="true"></i>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-gray-700 font-medium" itemprop="name"><?php echo $mphFormatted; ?> MPH to KPH</span>
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
          <i class="fas fa-tachometer-alt speed-icon mr-3" aria-hidden="true"></i>
          Convert <?php echo $mphFormatted; ?> MPH to KPH
        </h1>
        
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 max-w-2xl mx-auto">
          <div class="text-center">
            <div class="text-3xl font-bold text-purple-600 mb-2">
              <?php echo $mphFormatted; ?> mph = <?php echo $kphFormatted; ?> kph
            </div>
            <p class="text-gray-600">
              <?php echo $mphFormatted; ?> miles per hour equals <?php echo $kphFormatted; ?> kilometers per hour
            </p>
          </div>
        </div>
        
        <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
          Convert miles per hour to kilometers per hour instantly with our accurate 2025 calculator. 
          Perfect for automotive applications, speedometer readings, and international driving.
        </p>
      </div>
    </div>
  </section>

  <!-- Quick Navigation -->
  <section class="bg-gradient-to-br from-purple-50 via-blue-50 to-indigo-50 py-8">
    <div class="max-w-4xl mx-auto px-4 text-center">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Related MPH to KPH Conversions</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
        <?php 
        $relatedValues = [];
        // Add nearby values
        for($i = max(1, $mphValue - 2); $i <= min(1000, $mphValue + 2); $i++) {
            if($i != $mphValue) $relatedValues[] = $i;
        }
        // Add common round numbers
        $commonValues = [10, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80];
        foreach($commonValues as $val) {
            if($val != $mphValue && !in_array($val, $relatedValues)) {
                $relatedValues[] = $val;
            }
        }
        // Limit to 8 related values
        $relatedValues = array_slice(array_unique($relatedValues), 0, 8);
        
        foreach($relatedValues as $val): 
            $relatedKph = number_format($val * 1.609344, 2);
        ?>
        <a href="/mph-to-kph/<?php echo $val; ?>" class="px-3 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700">
          <?php echo $val; ?> mph → <?php echo $relatedKph; ?> kph
        </a>
        <?php endforeach; ?>
      </div>
      
      <div class="mt-6">
        <a href="/mph-to-kph" class="inline-block px-6 py-3 bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition-colors">
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
        How to Convert <?php echo $mphFormatted; ?> MPH to KPH
      </h2>
      
      <div class="prose max-w-none">
        <p class="text-gray-600 mb-4">
          To convert <?php echo $mphFormatted; ?> miles per hour to kilometers per hour, we use the standard conversion factor:
        </p>
        
        <div class="bg-gray-50 p-4 rounded-lg mb-6">
          <div class="text-lg font-mono">
            <?php echo $mphFormatted; ?> mph × 1.609344 = <?php echo $kphFormatted; ?> kph
          </div>
        </div>
        
        <h3 class="text-xl font-semibold mb-3">Conversion Formula Explanation</h3>
        <ul class="list-disc list-inside space-y-2 text-gray-600">
          <li>1 mile = 1.609344 kilometers</li>
          <li>Therefore, 1 mph = 1.609344 kph</li>
          <li>Multiply any MPH value by 1.609344 to get KPH</li>
        </ul>
        
        <h3 class="text-xl font-semibold mb-3 mt-6">Real-World Context for <?php echo $mphFormatted; ?> MPH</h3>
        <?php
        $context = '';
        if($mphValue <= 25) {
            $context = 'This is typical residential area speed, suitable for neighborhoods and school zones in the US.';
        } elseif($mphValue <= 35) {
            $context = 'This speed is common for city streets and urban areas in the United States.';
        } elseif($mphValue <= 55) {
            $context = 'This is typical highway speed limit in many US states for suburban and rural highways.';
        } elseif($mphValue <= 80) {
            $context = 'This represents interstate highway speeds common in many US states.';
        } else {
            $context = 'This represents very high-speed driving, typically found in racing or high-performance scenarios.';
        }
        ?>
        <p class="text-gray-600"><?php echo $context; ?></p>
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
echo "Starting generation of MPH to KPH static pages...\n";
$startTime = microtime(true);
$generated = 0;

for ($i = 1; $i <= 1000; $i++) {
    $html = generateMphToKphPage($i);
    $filename = $outputDir . $i . '.html';
    
    if (file_put_contents($filename, $html)) {
        $generated++;
        if ($generated % 100 == 0) {
            echo "Generated {$generated} pages...\n";
        }
    } else {
        echo "Error generating page for {$i} MPH\n";
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
// Auto-generated index of MPH to KPH static pages
$generatedPages = [];
for($i = 1; $i <= 1000; $i++) {
    $generatedPages[$i] = [
        "mph" => $i,
        "kph" => number_format($i * 1.609344, 4),
        "file" => "' . $outputDir . '" . $i . ".html"
    ];
}
return $generatedPages;
?>';

file_put_contents($outputDir . 'index.php', $indexContent);
echo "Generated index file: {$outputDir}index.php\n";
?>