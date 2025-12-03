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
        $outputValue = $inputValue / 4.345; // 1 month ≈ 4.345 weeks (average)
        $isDynamicPage = true;
    }
}

// Generate dynamic content
$pageTitle = $isDynamicPage ? 
    "Convert {$inputValue} Weeks to Months 2025 | {$inputValue} weeks = " . number_format($outputValue, 2) . " months | Time Calculator" : 
    "Best Weeks to Months Converter 2025 | Time Conversion Tool | Free Calculator";

$pageDescription = $isDynamicPage ? 
    "Convert {$inputValue} weeks to months in 2025. {$inputValue} weeks equals " . number_format($outputValue, 2) . " months. Free, instant, accurate time conversion for planning & scheduling." :
    "Convert weeks to months instantly with our best 2025 accurate converter. Perfect for time calculations, pregnancy tracking, project planning & scheduling.";

$canonicalUrl = $isDynamicPage ? 
    "https://www.thiyagi.com/weeks-to-months/{$originalValue}" : 
    "https://www.thiyagi.com/weeks-to-months";
?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="weeks to months, weeks converter, time conversion, months calculator, pregnancy weeks, project planning 2025">
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
  "name": "Weeks to Months Converter 2025",
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
    "Instant weeks to months conversion",
    "Accurate time calculations for 2025",
    "Perfect for pregnancy tracking",
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
      "name": "How many months is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks equals approximately <?php echo number_format($outputValue, 2); ?> months. This conversion uses the average factor: 1 month ≈ 4.345 weeks (based on 30.44 days per month)."
      }
    },
    {
      "@type": "Question",
      "name": "How do I convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks to months?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks to months, divide by 4.345. The calculation is: <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> ÷ 4.345 ≈ <?php echo number_format($outputValue, 2); ?> months."
      }
    }
  ]
}
</script>
<?php endif; ?>

<style>
:root {
    --primary-sky: #0ea5e9;
    --primary-sky-dark: #0284c7;
    --primary-sky-light: #7dd3fc;
}
.bg-sky-600 { background-color: var(--primary-sky); }
.hover\:bg-sky-700:hover { background-color: var(--primary-sky-dark); }
.text-sky-600 { color: var(--primary-sky); }
.border-sky-500 { border-color: var(--primary-sky-light); }
.focus\:ring-sky-500:focus { --tw-ring-color: var(--primary-sky); }
</style>

<main class="min-h-screen bg-gradient-to-br from-sky-50 to-blue-50">
  <!-- Breadcrumb Navigation -->
  <nav class="pt-16 pb-4" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <ol class="flex items-center space-x-2 text-sm text-gray-600" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" class="hover:text-sky-600 transition-colors" itemprop="item">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/time-converter.php" class="hover:text-sky-600 transition-colors" itemprop="item">
            <span itemprop="name">Time Converter</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
        <li><span class="mx-2">/</span></li>
        <?php if ($isDynamicPage): ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/weeks-to-months.php" class="hover:text-sky-600 transition-colors" itemprop="item">
            <span itemprop="name">Weeks to Months</span>
          </a>
          <meta itemprop="position" content="3">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-sky-600 font-medium" itemprop="name"><?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> Weeks</span>
          <meta itemprop="position" content="4">
        </li>
        <?php else: ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-sky-600 font-medium" itemprop="name">Weeks to Months</span>
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
          Convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> Weeks to Months
          <?php else: ?>
          Weeks to Months Converter 2025
          <?php endif; ?>
        </h1>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 max-w-2xl mx-auto border-2 border-sky-200">
          <div class="text-center">
            <p class="text-gray-600 text-lg mb-4">Conversion Result:</p>
            <div class="bg-gradient-to-r from-sky-50 to-blue-50 rounded-xl p-6">
              <p class="text-3xl md:text-4xl font-bold text-sky-600 mb-2">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks ≈ 
                <?php echo number_format($outputValue, 2); ?> months
              </p>
              <p class="text-sm text-gray-500">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks equals approximately 
                <?php echo number_format($outputValue, 2); ?> months
              </p>
            </div>
          </div>
        </div>
        <?php else: ?>
        <p class="text-xl text-gray-600 mb-8">
          Free, instant, and accurate weeks to months conversion for pregnancy tracking, planning, and scheduling in 2025
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
          <i class="fas fa-calendar-check text-sky-600" aria-hidden="true"></i>
          Time Converter
        </h2>
        
        <form id="converterForm" class="space-y-6">
          <div>
            <label for="weeksValue" class="block text-sm font-medium text-gray-700 mb-2">
              Enter Weeks
            </label>
            <input 
              type="number" 
              id="weeksValue" 
              value="<?php echo $isDynamicPage ? $inputValue : '4'; ?>"
              step="0.1"
              min="0"
              class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500 transition-colors text-lg"
              placeholder="Enter weeks..."
            >
          </div>
          
          <div>
            <label for="monthsResult" class="block text-sm font-medium text-gray-700 mb-2">
              Result in Months (approximate)
            </label>
            <input 
              type="text" 
              id="monthsResult" 
              readonly 
              value="<?php echo $isDynamicPage ? number_format($outputValue, 2) : '0.92'; ?>"
              class="w-full px-4 py-3 bg-gradient-to-r from-sky-50 to-blue-50 border-2 border-sky-200 rounded-lg text-lg font-semibold text-sky-600"
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
              class="flex-1 px-6 py-3 bg-sky-600 text-white rounded-lg hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 transition-colors duration-200 font-medium"
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
        <i class="fas fa-calculator text-sky-600" aria-hidden="true"></i>
        Conversion Formula
      </h2>
      <div class="bg-gradient-to-r from-sky-50 to-blue-50 rounded-lg p-6 border-l-4 border-sky-500">
        <p class="text-lg mb-4"><strong>Formula:</strong> Months ≈ Weeks ÷ 4.345</p>
        <p class="text-gray-600 mb-4">
          <strong>Conversion Factor:</strong> 1 month ≈ 4.345 weeks (based on average month of 30.44 days)
        </p>
        <p class="text-sm text-gray-500 mb-4">
          <strong>Note:</strong> This is an approximation since months vary in length (28-31 days). The conversion uses the average Gregorian calendar month.
        </p>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-lg p-4 mt-4">
          <p class="font-semibold text-sky-600 mb-2">Example Calculation:</p>
          <p class="text-gray-700">
            <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks ÷ 4.345 ≈ 
            <?php echo number_format($outputValue, 2); ?> months
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
        <i class="fas fa-table text-sky-600" aria-hidden="true"></i>
        Quick Conversion Table
      </h2>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-sky-600 to-blue-600 text-white">
              <th class="px-4 py-3 text-left">Weeks</th>
              <th class="px-4 py-3 text-left">Months (approx)</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $commonValues = [4, 8, 12, 13, 16, 20, 24, 26, 28, 32, 36, 40, 52];
            foreach ($commonValues as $val) {
                $result = $val / 4.345;
                $isHighlighted = $isDynamicPage && abs($val - $inputValue) < 0.1;
                $rowClass = $isHighlighted ? 'bg-sky-100 font-semibold' : 'hover:bg-gray-50';
                echo "<tr class='border-b {$rowClass}'>";
                echo "<td class='px-4 py-3'>" . $val . " weeks</td>";
                echo "<td class='px-4 py-3'>" . number_format($result, 2) . " months</td>";
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
        <i class="fas fa-link text-sky-600" aria-hidden="true"></i>
        Related Time Conversions
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <a href="/months-to-weeks.php" class="p-4 bg-gradient-to-br from-sky-50 to-blue-50 rounded-lg hover:shadow-md transition-shadow border border-sky-200">
          <i class="fas fa-exchange-alt text-sky-600 mb-2"></i>
          <p class="font-medium text-gray-800">Months to Weeks</p>
        </a>
        <a href="/weeks-to-days.php" class="p-4 bg-gradient-to-br from-emerald-50 to-teal-50 rounded-lg hover:shadow-md transition-shadow border border-emerald-200">
          <i class="fas fa-calendar text-emerald-600 mb-2"></i>
          <p class="font-medium text-gray-800">Weeks to Days</p>
        </a>
        <a href="/days-to-weeks.php" class="p-4 bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg hover:shadow-md transition-shadow border border-purple-200">
          <i class="fas fa-calendar-day text-purple-600 mb-2"></i>
          <p class="font-medium text-gray-800">Days to Weeks</p>
        </a>
        <a href="/months-to-days.php" class="p-4 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-lg hover:shadow-md transition-shadow border border-yellow-200">
          <i class="fas fa-calendar-alt text-yellow-600 mb-2"></i>
          <p class="font-medium text-gray-800">Months to Days</p>
        </a>
        <a href="/days-to-months.php" class="p-4 bg-gradient-to-br from-green-50 to-lime-50 rounded-lg hover:shadow-md transition-shadow border border-green-200">
          <i class="fas fa-calendar-week text-green-600 mb-2"></i>
          <p class="font-medium text-gray-800">Days to Months</p>
        </a>
        <a href="/time-converter.php" class="p-4 bg-gradient-to-br from-gray-50 to-slate-50 rounded-lg hover:shadow-md transition-shadow border border-gray-200">
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
        <i class="fas fa-question-circle text-sky-600" aria-hidden="true"></i>
        Frequently Asked Questions
        <?php if ($isDynamicPage): ?>
        - <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks
        <?php endif; ?>
      </h2>
      
      <div class="space-y-6">
        <?php if ($isDynamicPage): ?>
        <div class="border-l-4 border-sky-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            How many months is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks?
          </h3>
          <div>
            <p class="text-gray-600">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks equals approximately 
              <?php echo number_format($outputValue, 2); ?> months. 
              This conversion uses the average factor: 1 month ≈ 4.345 weeks.
              <?php 
              if ($inputValue >= 40 && $inputValue <= 42) {
                  echo ' This is the typical duration of pregnancy (9-10 months).';
              } elseif ($inputValue >= 12 && $inputValue <= 14) {
                  echo ' This is approximately 3 months or one quarter.';
              } elseif ($inputValue >= 26) {
                  echo ' This is approximately 6 months or half a year.';
              }
              ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="border-l-4 border-blue-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How do I convert weeks to months?</h3>
          <div>
            <p class="text-gray-600">To convert weeks to months, divide the number of weeks by 4.345 (the average number of weeks in a month). For example, <a href="/weeks-to-months/12" class="text-sky-600 hover:text-sky-800 underline">12 weeks ≈ 2.76 months</a>. This is commonly used in pregnancy tracking and project planning.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-green-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Why is 1 month approximately 4.345 weeks?</h3>
          <div>
            <p class="text-gray-600">A Gregorian calendar month averages 30.44 days (365 days ÷ 12 months). Since 1 week = 7 days, an average month = 30.44 ÷ 7 ≈ 4.345 weeks. Individual months vary (28-31 days), so this is an approximation.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-purple-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">When do I need to convert weeks to months?</h3>
          <div>
            <p class="text-gray-600">Weeks to months conversion is essential for pregnancy tracking (e.g., <a href="/weeks-to-months/40" class="text-sky-600 hover:text-sky-800 underline">40 weeks of pregnancy</a>), project planning, contract durations, subscription periods, and age calculations. It's also used in <a href="/months-to-weeks" class="text-sky-600 hover:text-sky-800 underline">reverse conversions</a>.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-orange-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How many weeks are in different months?</h3>
          <div>
            <p class="text-gray-600">February has 4 weeks (28 days, or 4.14 in leap years). Months with 30 days have approximately 4.29 weeks. Months with 31 days have approximately 4.43 weeks. The average is 4.345 weeks per month.</p>
          </div>
        </div>

        <div class="border-l-4 border-red-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Common pregnancy week to month conversions?</h3>
          <div>
            <p class="text-gray-600">Pregnancy milestones: <a href="/weeks-to-months/12" class="text-sky-600 hover:text-sky-800 underline">12 weeks (3 months)</a> - first trimester, <a href="/weeks-to-months/27" class="text-sky-600 hover:text-sky-800 underline">27 weeks (6 months)</a> - second trimester, <a href="/weeks-to-months/40" class="text-sky-600 hover:text-sky-800 underline">40 weeks (9 months)</a> - full term.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
function updateConversion() {
  const weeksValue = parseFloat(document.getElementById('weeksValue').value);
  const monthsResult = document.getElementById('monthsResult');
  
  if (isNaN(weeksValue) || weeksValue < 0) {
    monthsResult.value = '';
    return;
  }
  
  const result = weeksValue / 4.345;
  monthsResult.value = result.toFixed(2);
}

function resetForm() {
  document.getElementById('weeksValue').value = '4';
  updateConversion();
  document.getElementById('copySuccess').classList.add('hidden');
}

function copyResult() {
  const result = document.getElementById('monthsResult').value;
  navigator.clipboard.writeText(result).then(() => {
    const successMsg = document.getElementById('copySuccess');
    successMsg.classList.remove('hidden');
    setTimeout(() => {
      successMsg.classList.add('hidden');
    }, 3000);
  });
}

// Event listeners
document.getElementById('weeksValue').addEventListener('input', updateConversion);
document.getElementById('copyBtn').addEventListener('click', copyResult);

// Initialize
updateConversion();
</script>

<?php include 'footer.php'; ?>
