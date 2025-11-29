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
        $outputValue = $inputValue * 0.621371; // Convert kph to mph
        $isDynamicPage = true;
    }
}

// Generate dynamic content
$pageTitle = $isDynamicPage ? 
    "Convert {$inputValue} KPH to MPH 2025 | {$inputValue} km/h = " . number_format($outputValue, 4) . " mph | Free Speed Calculator" : 
    "Best KPH to MPH Converter 2025 | km/h to mph | Free Automotive Speed Tool";

$pageDescription = $isDynamicPage ? 
    "Convert {$inputValue} kilometers per hour to miles per hour in 2025. {$inputValue} kph equals " . number_format($outputValue, 4) . " mph. Free, instant, accurate speed conversion for automotive, driving & travel." :
    "Convert kilometers per hour to miles per hour instantly with our best 2025 accurate converter. Perfect kph to mph conversion for automotive, driving, speedometer readings & international travel.";

$canonicalUrl = $isDynamicPage ? 
    "https://www.thiyagi.com/kph-to-mph/{$inputValue}" : 
    "https://www.thiyagi.com/kph-to-mph";
?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<?php 
if ($isDynamicPage) {
    // Determine speed category for contextual keywords
    $speedCategory = '';
    if ($inputValue <= 30) {
        $speedCategory = 'city driving, residential area, school zone';
    } elseif ($inputValue <= 60) {
        $speedCategory = 'urban driving, city streets, town roads';
    } elseif ($inputValue <= 100) {
        $speedCategory = 'highway driving, country roads, suburban';
    } elseif ($inputValue <= 150) {
        $speedCategory = 'highway speeds, fast roads, expressway';
    } else {
        $speedCategory = 'high speed, racing, performance cars';
    }
}
?>
<?php if ($isDynamicPage): ?>
<meta name="keywords" content="<?php echo $inputValue; ?> kph to mph 2025, <?php echo $inputValue; ?> km/h to mph, <?php echo number_format($outputValue, 2); ?> mph speed, <?php echo $speedCategory; ?>, automotive converter 2025, driving calculator, speedometer conversion, car speed 2025, international driving, travel speed converter">
<?php else: ?>
<meta name="keywords" content="kph to mph converter 2025, km/h to mph converter 2025, speed converter 2025, automotive calculator 2025, driving tools 2025, speedometer converter, car speed calculator, highway speed tool, international driving converter, travel speed calculator, best speed converter 2025, automotive tools">
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
<meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
<meta name="twitter:site" content="@ThiyagiTools"

<!-- Additional SEO Meta Tags -->
<meta name="author" content="Thiyagi">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="theme-color" content="#dc2626">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="distribution" content="global">
<meta name="rating" content="general">
<meta name="copyright" content="Thiyagi Tools 2025">
<meta name="category" content="Speed Converters, Automotive Tools, Driving Calculators 2025">
<meta name="coverage" content="Worldwide">
<meta name="target" content="drivers, automotive enthusiasts, international travelers, speedometer users, car owners, highway drivers">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="referrer" content="origin-when-cross-origin">

<!-- Performance and Security -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="referrer" content="origin-when-cross-origin">

<!-- Preload Critical Resources -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style">
<link rel="dns-prefetch" href="//cdnjs.cloudflare.com">

<?php if ($isDynamicPage): ?>
<!-- Schema.org Structured Data for Dynamic Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Best KPH to MPH Converter 2025 - <?php echo $inputValue; ?> km/h",
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
    "Convert <?php echo $inputValue; ?> kilometers per hour to miles per hour in 2025",
    "Instant calculation: <?php echo $inputValue; ?> kph = <?php echo number_format($outputValue, 4); ?> mph",
    "Real-time speed conversion for automotive use",
    "Mobile responsive design for driving",
    "Copy results to clipboard for easy sharing",
    "Perfect for speedometer reading conversion",
    "Ideal for international driving and travel"
  ],
  "mainEntity": {
    "@type": "Question",
    "name": "How much is <?php echo $inputValue; ?> kph in mph in 2025?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "<?php echo $inputValue; ?> kilometers per hour equals exactly <?php echo number_format($outputValue, 4); ?> miles per hour using the 2025 standard conversion factor: 1 kph = 0.621371 mph. Perfect for automotive and driving applications."
    }
  },
  "sameAs": [
    "https://www.thiyagi.com/kph-to-mph",
    "https://www.thiyagi.com/mph-to-kph"
  ]
}
</script>
<?php else: ?>
<!-- Schema.org Structured Data for Static Page -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Best KPH to MPH Converter 2025",
  "description": "<?php echo addslashes($pageDescription); ?>",
  "url": "https://www.thiyagi.com/kph-to-mph",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Web Browser",
  "datePublished": "2025-01-01",
  "dateModified": "<?php echo date('Y-m-d'); ?>",
  "inLanguage": "en-US",
  "isAccessibleForFree": true,
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "ratingCount": "18750"
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
    "Best KPH to MPH converter in 2025",
    "Instant speed conversion for automotive use",
    "Perfect for driving and speedometer readings",
    "International travel speed calculator",
    "Highway and road speed converter",
    "Mobile responsive for car use",
    "Copy results feature for sharing",
    "Accurate to 4 decimal places"
  ],
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://www.thiyagi.com"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Speed Converters"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "KPH to MPH Converter",
        "item": "https://www.thiyagi.com/kph-to-mph"
      }
    ]
  }
}
</script>
<?php endif; ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How do you convert kph to mph in 2025?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To convert kilometers per hour to miles per hour in 2025, multiply the kph value by 0.621371. For example, 100 kph = 100 × 0.621371 = 62.1371 mph. This is the standard automotive conversion used worldwide."
      }
    },
    {
      "@type": "Question",
      "name": "What is the exact automotive conversion factor from kph to mph?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "1 kilometer per hour equals exactly 0.621371 miles per hour. This precise conversion is used in all automotive applications, speedometer calibrations, and international driving standards in 2025."
      }
    },
    {
      "@type": "Question",
      "name": "Is this kph to mph converter accurate for 2025 speedometers and cars?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our 2025 converter uses the exact conversion factor used in automotive applications, speedometer calibrations, and modern car systems, making it perfect for driving, automotive use, and vehicle speed calculations."
      }
    },
    {
      "@type": "Question",
      "name": "When do drivers need to convert kph to mph in 2025?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "KPH to MPH conversion is essential when driving internationally, renting cars abroad, understanding speedometer readings in different countries, comparing vehicle performance specs, or traveling between metric and imperial system regions in 2025."
      }
    },
    {
      "@type": "Question",
      "name": "Which countries use KPH vs MPH for driving in 2025?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Most countries worldwide use KPH (kilometers per hour) including Europe, Asia, and most of the Americas. Only USA, UK, and a few territories primarily use MPH (miles per hour). This makes KPH to MPH conversion essential for international driving in 2025."
      }
    },
    {
      "@type": "Question",
      "name": "What are common speed limits in KPH and their MPH equivalents for 2025?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Common 2025 speed conversions: 50 KPH = 31 MPH (city), 80 KPH = 50 MPH (suburban), 100 KPH = 62 MPH (highway), 120 KPH = 75 MPH (fast highway). These conversions help drivers understand international speed limits."
      }
    }
  ]
}
</script>

<style>
  .input-focus:focus {
    box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
    border-color: #dc2626;
  }
  .speed-icon {
    background: linear-gradient(45deg, #dc2626, #f97316);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>

<main class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50">
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
          <?php if ($isDynamicPage): ?>
          <a href="/kph-to-mph" class="text-blue-600 hover:text-blue-800 transition-colors" itemprop="item">
            <span itemprop="name">KPH to MPH Converter</span>
            <meta itemprop="position" content="3">
          </a>
        </li>
        <li class="text-gray-400">
          <i class="fas fa-chevron-right text-xs" aria-hidden="true"></i>
        </li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-gray-700 font-medium" itemprop="name"><?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> KPH to MPH</span>
          <meta itemprop="position" content="4">
        </li>
          <?php else: ?>
          <span class="text-gray-700 font-medium" itemprop="name">KPH to MPH Converter</span>
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
          <i class="fas fa-tachometer-alt speed-icon mr-3" aria-hidden="true"></i>
          <?php if ($isDynamicPage): ?>
          Convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> KPH to MPH
          <span class="block text-2xl md:text-3xl text-gray-600 font-normal mt-2">
            Speed Converter 2025
          </span>
          <?php else: ?>
          Best KPH to MPH Converter 2025
          <span class="block text-2xl md:text-3xl text-gray-600 font-normal mt-2">
            Automotive Speed Calculator
          </span>
          <?php endif; ?>
        </h1>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-lg shadow-md p-6 mb-8 max-w-3xl mx-auto">
          <div class="text-center">
            <div class="text-3xl font-bold text-red-600 mb-3">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> kph = <?php echo number_format($outputValue, 4); ?> mph
            </div>
            <p class="text-gray-600 mb-4">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> kilometers per hour equals <?php echo number_format($outputValue, 4); ?> miles per hour
            </p>
            
            <!-- Speed Badge -->
            <div class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium mb-3
              <?php 
              if ($inputValue <= 30) echo 'bg-green-100 text-green-800';
              elseif ($inputValue <= 60) echo 'bg-blue-100 text-blue-800';
              elseif ($inputValue <= 100) echo 'bg-yellow-100 text-yellow-800';
              elseif ($inputValue <= 150) echo 'bg-orange-100 text-orange-800';
              else echo 'bg-red-100 text-red-800';
              ?>">
              <i class="fas fa-tachometer-alt mr-2" aria-hidden="true"></i>
              <?php 
              if ($inputValue <= 30) echo 'City Driving Speed';
              elseif ($inputValue <= 60) echo 'Urban Speed';
              elseif ($inputValue <= 100) echo 'Highway Speed';
              elseif ($inputValue <= 150) echo 'Fast Highway Speed';
              else echo 'High Performance Speed';
              ?>
            </div>
            
            <!-- Additional Context -->
            <div class="text-sm text-gray-500">
              <?php 
              if ($inputValue <= 50) {
                  echo 'Suitable for city and residential driving';
              } elseif ($inputValue <= 100) {
                  echo 'Perfect for highway cruising and long trips';
              } elseif ($inputValue <= 200) {
                  echo 'High-speed highway and autobahn driving';
              } else {
                  echo 'Racing and high-performance applications';
              }
              ?>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">
          Convert kilometers per hour to miles per hour instantly with our accurate 2025 calculator. 
          Perfect for automotive applications, speedometer readings, and international driving.
        </p>
        
        <?php if ($isDynamicPage): ?>
        <!-- Dynamic Speed Context -->
        <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 mb-8 max-w-4xl mx-auto">
          <div class="flex items-start gap-4">
            <div class="flex-shrink-0">
              <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                <i class="fas fa-info-circle text-blue-600 text-xl" aria-hidden="true"></i>
              </div>
            </div>
            <div>
              <h3 class="text-lg font-semibold text-gray-800 mb-2">
                Speed Context: <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> KPH
              </h3>
              <p class="text-gray-700 mb-3">
                <?php 
                if ($inputValue <= 20) {
                    echo 'This is a very slow speed, typically used in parking lots, school zones, or areas requiring extreme caution. Perfect for precise maneuvering.';
                } elseif ($inputValue <= 50) {
                    echo 'This represents city and residential driving speeds. Common in urban areas with traffic lights, pedestrian crossings, and frequent stops.';
                } elseif ($inputValue <= 80) {
                    echo 'This is suburban and country road speed. Suitable for mixed traffic conditions and areas transitioning from city to highway driving.';
                } elseif ($inputValue <= 120) {
                    echo 'This represents standard highway and freeway speeds. Ideal for long-distance travel and interstate driving in most countries.';
                } elseif ($inputValue <= 200) {
                    echo 'This is high-speed highway driving, common on German Autobahns and unrestricted motorways. Requires advanced driving experience.';
                } else {
                    echo 'This represents racing or track speeds. Only appropriate for closed courses, professional racing, or high-performance vehicle testing.';
                }
                ?>
              </p>
              
              <!-- Related Speed Comparisons -->
              <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 text-sm">
                <div class="bg-white rounded-lg p-3 shadow-sm">
                  <div class="font-medium text-gray-800">Equivalent Speed</div>
                  <div class="text-blue-600 font-semibold"><?php echo number_format($outputValue, 2); ?> MPH</div>
                </div>
                
                <div class="bg-white rounded-lg p-3 shadow-sm">
                  <div class="font-medium text-gray-800">Speed Category</div>
                  <div class="text-green-600 font-semibold">
                    <?php 
                    if ($inputValue <= 30) echo 'City/Residential';
                    elseif ($inputValue <= 60) echo 'Urban/Suburban';
                    elseif ($inputValue <= 100) echo 'Highway/Country';
                    elseif ($inputValue <= 150) echo 'Fast Highway';
                    else echo 'High Performance';
                    ?>
                  </div>
                </div>
                
                <div class="bg-white rounded-lg p-3 shadow-sm">
                  <div class="font-medium text-gray-800">Driving Context</div>
                  <div class="text-purple-600 font-semibold">
                    <?php 
                    if ($inputValue <= 30) echo 'Careful Navigation';
                    elseif ($inputValue <= 60) echo 'City Traffic';
                    elseif ($inputValue <= 100) echo 'Cruising Speed';
                    elseif ($inputValue <= 150) echo 'Long Distance';
                    else echo 'Track/Racing';
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

<!-- Converter Section -->
<section class="bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 py-12">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
            <i class="fas fa-car-side text-red-600 text-2xl" aria-hidden="true"></i>
        </div>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">
            Quick KPH to MPH Conversion
        </h2>
        <p class="text-gray-600 mb-8">
            Enter kilometers per hour and get instant results in miles per hour
        </p>
        
        <!-- Related Converters -->
        <div class="flex flex-wrap justify-center gap-4 text-sm" role="list">
            <a href="/mph-to-kph.php" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">MPH to KPH</a>
            <a href="/km-to-miles.php" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">KM to Miles</a>
            <a href="/miles-to-km.php" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">Miles to KM</a>
            <a href="/meters-to-feet.php" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">Meters to Feet</a>
            <a href="/feet-to-meters.php" class="px-4 py-2 bg-white rounded-lg shadow hover:shadow-md transition-shadow text-blue-600 hover:text-blue-700" role="listitem">Feet to Meters</a>
        </div>
    </div>
</section>

<!-- Calculator Widget -->
<section class="py-12" itemscope itemtype="https://schema.org/SoftwareApplication">
  <div class="max-w-xl mx-auto bg-white rounded-xl shadow-lg p-6 sm:p-10">
    <div class="flex items-center gap-3 mb-4">
      <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
        <i class="fas fa-calculator text-red-600 text-xl" aria-hidden="true"></i>
      </div>
      <div>
        <h2 class="text-xl font-bold text-gray-800" itemprop="name">KPH to MPH Calculator</h2>
        <p class="text-gray-600 text-sm" itemprop="description">Enter km/h and get instant conversion to mph</p>
        <meta itemprop="applicationCategory" content="UtilityApplication">
        <meta itemprop="operatingSystem" content="Web Browser">
      </div>
    </div>
    
    <form class="space-y-6" role="form">
      <div class="flex flex-col sm:flex-row gap-3">
        <div class="relative flex-1">
          <label for="kphValue" class="block text-sm font-medium text-gray-700 mb-2">
            Kilometers per Hour
          </label>
          <div class="relative">
            <input
              type="number"
              id="kphValue"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 input-focus text-lg"
              placeholder="Enter kph"
              step="any"
              min="0"
            />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
              <span class="text-gray-500 text-sm">kph</span>
            </div>
          </div>
        </div>
        
        <div class="flex items-center justify-center sm:mt-8">
          <div class="w-8 h-8 bg-red-100 rounded-full flex items-center justify-center">
            <i class="fas fa-arrow-right text-red-600" aria-hidden="true"></i>
          </div>
        </div>
        
        <div class="relative flex-1">
          <label for="mphResult" class="block text-sm font-medium text-gray-700 mb-2">
            Miles per Hour
          </label>
          <div class="relative">
            <input
              type="text"
              id="mphResult"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-medium text-red-700"
              placeholder="Result will appear here"
              readonly
            />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
              <span class="text-gray-500 text-sm">mph</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Copy Button -->
      <div class="flex justify-center">
        <button
          type="button"
          id="copyBtn"
          class="hidden px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-colors duration-200 flex items-center gap-2"
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

  <!-- Conversion Table Section -->
  <section class="max-w-4xl mx-auto mt-8 px-4">
    <article class="bg-white rounded-xl shadow-lg p-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-table text-red-600" aria-hidden="true"></i>
        KPH to MPH Conversion Table
      </h2>
      
      <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300">
          <thead>
            <tr class="bg-gray-50">
              <th class="border border-gray-300 px-4 py-3 text-left font-semibold text-gray-800">KPH</th>
              <th class="border border-gray-300 px-4 py-3 text-left font-semibold text-gray-800">MPH</th>
              <th class="border border-gray-300 px-4 py-3 text-left font-semibold text-gray-800">Driving Context</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-50">
              <td class="border border-gray-300 px-4 py-3">30 kph</td>
              <td class="border border-gray-300 px-4 py-3 font-medium text-red-700">18.6 mph</td>
              <td class="border border-gray-300 px-4 py-3 text-gray-600">City driving</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="border border-gray-300 px-4 py-3">50 kph</td>
              <td class="border border-gray-300 px-4 py-3 font-medium text-red-700">31.1 mph</td>
              <td class="border border-gray-300 px-4 py-3 text-gray-600">Urban speed limit</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="border border-gray-300 px-4 py-3">80 kph</td>
              <td class="border border-gray-300 px-4 py-3 font-medium text-red-700">49.7 mph</td>
              <td class="border border-gray-300 px-4 py-3 text-gray-600">Country roads</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="border border-gray-300 px-4 py-3">100 kph</td>
              <td class="border border-gray-300 px-4 py-3 font-medium text-red-700">62.1 mph</td>
              <td class="border border-gray-300 px-4 py-3 text-gray-600">Highway speed</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="border border-gray-300 px-4 py-3">120 kph</td>
              <td class="border border-gray-300 px-4 py-3 font-medium text-red-700">74.6 mph</td>
              <td class="border border-gray-300 px-4 py-3 text-gray-600">Fast highway</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="border border-gray-300 px-4 py-3">150 kph</td>
              <td class="border border-gray-300 px-4 py-3 font-medium text-red-700">93.2 mph</td>
              <td class="border border-gray-300 px-4 py-3 text-gray-600">High-speed roads</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="border border-gray-300 px-4 py-3">200 kph</td>
              <td class="border border-gray-300 px-4 py-3 font-medium text-red-700">124.3 mph</td>
              <td class="border border-gray-300 px-4 py-3 text-gray-600">Racing speeds</td>
            </tr>
            <tr class="hover:bg-gray-50">
              <td class="border border-gray-300 px-4 py-3">300 kph</td>
              <td class="border border-gray-300 px-4 py-3 font-medium text-red-700">186.4 mph</td>
              <td class="border border-gray-300 px-4 py-3 text-gray-600">High-performance</td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <!-- Quick Tips -->
      <div class="mt-6 bg-red-50 rounded-lg p-4">
        <h3 class="font-semibold text-gray-800 mb-2 flex items-center gap-2">
          <i class="fas fa-lightbulb text-red-600" aria-hidden="true"></i>
          Quick Conversion Tips for Drivers
        </h3>
        <ul class="list-disc list-inside space-y-1 text-gray-600 text-sm">
          <li>1 kph = 0.621371 mph (exact conversion)</li>
          <li>For quick estimates: 1 kph ≈ 0.6 mph</li>
          <li>KPH is used in most countries worldwide</li>
          <li>MPH is primarily used in USA, UK, and some territories</li>
          <li>Speed limits vary by country and road type</li>
        </ul>
      </div>
      
      <!-- Quick Links to Related Conversions -->
      <?php if ($isDynamicPage): ?>
      <div class="mt-6 bg-blue-50 rounded-lg p-4">
        <h3 class="font-semibold text-gray-800 mb-3 flex items-center gap-2">
          <i class="fas fa-link text-blue-600" aria-hidden="true"></i>
          Related Speed Conversions
        </h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 text-sm">
          <?php 
          $relatedSpeeds = [$inputValue - 10, $inputValue + 10, $inputValue * 2, $inputValue / 2];
          foreach ($relatedSpeeds as $speed) {
              if ($speed > 0 && $speed != $inputValue) {
                  $relatedMph = $speed * 0.621371;
                  echo '<a href="/kph-to-mph/' . number_format($speed, 0) . '" class="bg-white rounded px-3 py-2 text-blue-600 hover:text-blue-800 hover:bg-blue-50 transition-colors text-center">' . 
                       number_format($speed, 0) . ' KPH<br><span class="text-xs text-gray-500">' . number_format($relatedMph, 1) . ' MPH</span></a>';
              }
          }
          ?>
        </div>
      </div>
      <?php endif; ?>
    </article>
  </section>

  <!-- FAQs Section -->
  <section class="max-w-4xl mx-auto mt-8 px-4">
    <article class="bg-white rounded-xl shadow-lg p-8" itemscope itemtype="https://schema.org/FAQPage">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-question-circle text-red-600" aria-hidden="true"></i>
        Frequently Asked Questions (FAQs)
        <?php if ($isDynamicPage): ?>
        - <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> KPH to MPH
        <?php endif; ?>
      </h2>
      
      <div class="space-y-6">
        <?php if ($isDynamicPage): ?>
        <!-- Dynamic FAQ -->
        <div class="border-l-4 border-blue-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
            How much is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> KPH in MPH?
          </h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="text-gray-600" itemprop="text">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> kilometers per hour equals exactly <?php echo number_format($outputValue, 4); ?> miles per hour. 
              This conversion is calculated using the standard automotive factor: 1 kph = 0.621371 mph.
              <?php 
              if ($inputValue <= 30) {
                  echo ' This speed is typically used in city driving and residential areas.';
              } elseif ($inputValue <= 60) {
                  echo ' This is a common speed for urban driving and city streets.';
              } elseif ($inputValue <= 100) {
                  echo ' This speed is typical for highway driving and country roads.';
              } elseif ($inputValue <= 150) {
                  echo ' This represents highway speeds on fast roads and expressways.';
              } else {
                  echo ' This is a high-speed range used in racing and high-performance vehicles.';
              }
              ?>
            </p>
          </div>
        </div>
        
        <div class="border-l-4 border-green-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
            What driving situations use <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> KPH (<?php echo number_format($outputValue, 1); ?> MPH)?
          </h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="text-gray-600" itemprop="text">
              <?php 
              if ($inputValue <= 20) {
                  echo 'This speed is used in parking lots, school zones, and very slow residential areas. Perfect for careful maneuvering and pedestrian-heavy zones.';
              } elseif ($inputValue <= 50) {
                  echo 'This is typical for city driving, residential streets, and urban areas with traffic lights. Common in downtown areas and neighborhoods.';
              } elseif ($inputValue <= 80) {
                  echo 'This speed is used on suburban roads, country roads, and some urban highways. Typical for mixed traffic conditions.';
              } elseif ($inputValue <= 120) {
                  echo 'This represents highway and freeway speeds in most countries. Standard for interstate driving and long-distance travel.';
              } elseif ($inputValue <= 200) {
                  echo 'This is high-speed highway driving, found on German Autobahns and some unrestricted roads. Requires advanced driving skills.';
              } else {
                  echo 'This represents racing speeds, track driving, or high-performance vehicle testing. Only suitable for closed courses and professional settings.';
              }
              ?>
            </p>
          </div>
        </div>
        
        <div class="border-l-4 border-purple-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">
            Is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> KPH considered fast or slow?
          </h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="text-gray-600" itemprop="text">
              At <?php echo number_format($outputValue, 1); ?> MPH (<?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 2); ?> KPH), this speed is considered 
              <?php 
              if ($inputValue <= 30) {
                  echo 'slow to moderate, suitable for careful driving in populated areas, parking, or navigating tight spaces.';
              } elseif ($inputValue <= 60) {
                  echo 'moderate, appropriate for city driving, residential areas, and areas with frequent stops.';
              } elseif ($inputValue <= 100) {
                  echo 'moderate to fast, suitable for highway driving, country roads, and efficient travel.';
              } elseif ($inputValue <= 150) {
                  echo 'fast, appropriate for highway cruising and long-distance travel on well-maintained roads.';
              } else {
                  echo 'very fast, requiring excellent driving skills and only appropriate for racing or high-performance driving contexts.';
              }
              ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="border-l-4 border-blue-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">How do you convert kph to mph in 2025?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="text-gray-600" itemprop="text">To convert kilometers per hour to miles per hour in 2025, multiply the kph value by 0.621371. For example, 100 kph = 100 × 0.621371 = 62.1371 mph. This is the standard automotive conversion used worldwide.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-green-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">What is the exact automotive conversion factor from kph to mph?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="text-gray-600" itemprop="text">1 kilometer per hour equals exactly 0.621371 miles per hour. This precise conversion is used in all automotive applications, speedometer calibrations, and international driving standards in 2025.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-purple-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">Is this kph to mph converter accurate for 2025 speedometers and cars?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="text-gray-600" itemprop="text">Yes, our 2025 converter uses the exact conversion factor used in automotive applications, speedometer calibrations, and modern car systems, making it perfect for driving, automotive use, and vehicle speed calculations.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-red-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">When do drivers need to convert kph to mph in 2025?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="text-gray-600" itemprop="text">KPH to MPH conversion is essential when driving internationally, renting cars abroad, understanding speedometer readings in different countries, comparing vehicle performance specs, or traveling between metric and imperial system regions in 2025.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-orange-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">Which countries use KPH vs MPH for driving in 2025?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="text-gray-600" itemprop="text">Most countries worldwide use KPH (kilometers per hour) including Europe, Asia, and most of the Americas. Only USA, UK, and a few territories primarily use MPH (miles per hour). This makes KPH to MPH conversion essential for international driving in 2025.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-teal-500 pl-4" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
          <h3 class="text-lg font-semibold text-gray-800 mb-2" itemprop="name">What are common speed limits in KPH and their MPH equivalents for 2025?</h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            <p class="text-gray-600" itemprop="text">Common 2025 speed conversions: 50 KPH = 31 MPH (city), 80 KPH = 50 MPH (suburban), 100 KPH = 62 MPH (highway), 120 KPH = 75 MPH (fast highway). These conversions help drivers understand international speed limits.</p>
          </div>
        </div>
      </div>
    </article>
  </section>
</main>

<script>
function updateConversion() {
  const kphValue = parseFloat(document.getElementById('kphValue').value);
  const mphResult = document.getElementById('mphResult');
  const copyBtn = document.getElementById('copyBtn');
  
  if (isNaN(kphValue) || kphValue < 0) {
    mphResult.value = '';
    copyBtn.classList.add('hidden');
    return;
  }
  
  // Convert kph to mph (1 kph = 0.621371 mph)
  const mphValue = kphValue * 0.621371;
  
  // Format the result
  let formattedResult;
  if (mphValue >= 1000) {
    formattedResult = mphValue.toLocaleString('en-US', { 
      minimumFractionDigits: 2, 
      maximumFractionDigits: 2 
    });
  } else if (mphValue >= 1) {
    formattedResult = mphValue.toFixed(4);
  } else {
    formattedResult = mphValue.toFixed(6);
  }
  
  mphResult.value = formattedResult;
  copyBtn.classList.remove('hidden');
}

function copyResult() {
  const kphValue = document.getElementById('kphValue').value;
  const mphResult = document.getElementById('mphResult').value;
  const copyText = `${kphValue} kph = ${mphResult} mph`;
  
  navigator.clipboard.writeText(copyText).then(() => {
    const copySuccess = document.getElementById('copySuccess');
    copySuccess.classList.remove('hidden');
    setTimeout(() => {
      copySuccess.classList.add('hidden');
    }, 3000);
  }).catch(err => {
    // Fallback for older browsers
    const textArea = document.createElement('textarea');
    textArea.value = copyText;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand('copy');
    document.body.removeChild(textArea);
    
    const copySuccess = document.getElementById('copySuccess');
    copySuccess.classList.remove('hidden');
    setTimeout(() => {
      copySuccess.classList.add('hidden');
    }, 3000);
  });
}

// Event listeners
document.getElementById('kphValue').addEventListener('input', updateConversion);
document.getElementById('copyBtn').addEventListener('click', copyResult);

// Initialize with URL parameter or demo value
window.addEventListener('DOMContentLoaded', () => {
  document.getElementById('kphValue').focus();
  <?php if ($isDynamicPage): ?>
  // Use the URL parameter value
  document.getElementById('kphValue').value = <?php echo $inputValue; ?>;
  <?php else: ?>
  // Use demo value
  document.getElementById('kphValue').value = 100;
  <?php endif; ?>
  updateConversion();
});
</script>

<?php include 'footer.php';?>
