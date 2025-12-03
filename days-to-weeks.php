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
        $outputValue = $inputValue / 7; // 1 week = 7 days
        $isDynamicPage = true;
    }
}

// Generate dynamic content
$pageTitle = $isDynamicPage ? 
    "Convert {$inputValue} Days to Weeks 2025 | {$inputValue} days = " . number_format($outputValue, 2) . " weeks | Time Calculator" : 
    "Best Days to Weeks Converter 2025 | Time Conversion Tool | Free Calculator";

$pageDescription = $isDynamicPage ? 
    "Convert {$inputValue} days to weeks in 2025. {$inputValue} days equals " . number_format($outputValue, 2) . " weeks. Free, instant, accurate time conversion for planning & scheduling." :
    "Convert days to weeks instantly with our best 2025 accurate converter. Perfect for time calculations, project planning, scheduling & date conversions.";

$canonicalUrl = $isDynamicPage ? 
    "https://www.thiyagi.com/days-to-weeks/{$originalValue}" : 
    "https://www.thiyagi.com/days-to-weeks";
?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="days to weeks, days converter, time conversion, weeks calculator, project planning, scheduling tool 2025">
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
  "name": "Days to Weeks Converter 2025",
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
    "Instant days to weeks conversion",
    "Accurate time calculations for 2025",
    "Perfect for project planning",
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
      "name": "How many weeks is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 0); ?> days?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 0); ?> days equals exactly <?php echo number_format($outputValue, 2); ?> weeks. This conversion uses the standard factor: 7 days = 1 week."
      }
    },
    {
      "@type": "Question",
      "name": "How do I convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 0); ?> days to weeks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 0); ?> days to weeks, divide by 7. The calculation is: <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 0); ?> ÷ 7 = <?php echo number_format($outputValue, 2); ?> weeks."
      }
    }
  ]
}
</script>
<?php endif; ?>

<style>
:root {
    --primary-rose: #f43f5e;
    --primary-rose-dark: #e11d48;
    --primary-rose-light: #fda4af;
}
.bg-rose-600 { background-color: var(--primary-rose); }
.hover\:bg-rose-700:hover { background-color: var(--primary-rose-dark); }
.text-rose-600 { color: var(--primary-rose); }
.border-rose-500 { border-color: var(--primary-rose-light); }
.focus\:ring-rose-500:focus { --tw-ring-color: var(--primary-rose); }
</style>

<main class="min-h-screen bg-gradient-to-br from-rose-50 to-pink-50">
  <!-- Breadcrumb Navigation -->
  <nav class="pt-16 pb-4" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <ol class="flex items-center space-x-2 text-sm text-gray-600" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" class="hover:text-rose-600 transition-colors" itemprop="item">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/time-converter.php" class="hover:text-rose-600 transition-colors" itemprop="item">
            <span itemprop="name">Time Converter</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
        <li><span class="mx-2">/</span></li>
        <?php if ($isDynamicPage): ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/days-to-weeks.php" class="hover:text-rose-600 transition-colors" itemprop="item">
            <span itemprop="name">Days to Weeks</span>
          </a>
          <meta itemprop="position" content="3">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-rose-600 font-medium" itemprop="name"><?php echo number_format($inputValue, 0); ?> Days</span>
          <meta itemprop="position" content="4">
        </li>
        <?php else: ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-rose-600 font-medium" itemprop="name">Days to Weeks</span>
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
          Convert <?php echo number_format($inputValue, 0); ?> Days to Weeks
          <?php else: ?>
          Days to Weeks Converter 2025
          <?php endif; ?>
        </h1>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 max-w-2xl mx-auto border-2 border-rose-200">
          <div class="text-center">
            <p class="text-gray-600 text-lg mb-4">Conversion Result:</p>
            <div class="bg-gradient-to-r from-rose-50 to-pink-50 rounded-xl p-6">
              <p class="text-3xl md:text-4xl font-bold text-rose-600 mb-2">
                <?php echo number_format($inputValue, 0); ?> days = 
                <?php echo number_format($outputValue, 2); ?> weeks
              </p>
              <p class="text-sm text-gray-500">
                <?php echo number_format($inputValue, 0); ?> days equals 
                <?php echo number_format($outputValue, 2); ?> weeks
              </p>
            </div>
          </div>
        </div>
        <?php else: ?>
        <p class="text-xl text-gray-600 mb-8">
          Free, instant, and accurate days to weeks conversion for planning, scheduling, and time calculations in 2025
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
          <i class="fas fa-calendar-day text-rose-600" aria-hidden="true"></i>
          Time Converter
        </h2>
        
        <form id="converterForm" class="space-y-6">
          <div>
            <label for="daysValue" class="block text-sm font-medium text-gray-700 mb-2">
              Enter Days
            </label>
            <input 
              type="number" 
              id="daysValue" 
              value="<?php echo $isDynamicPage ? $inputValue : '7'; ?>"
              step="1"
              min="0"
              class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-rose-500 transition-colors text-lg"
              placeholder="Enter days..."
            >
          </div>
          
          <div>
            <label for="weeksResult" class="block text-sm font-medium text-gray-700 mb-2">
              Result in Weeks
            </label>
            <input 
              type="text" 
              id="weeksResult" 
              readonly 
              value="<?php echo $isDynamicPage ? number_format($outputValue, 2) : '1.00'; ?>"
              class="w-full px-4 py-3 bg-gradient-to-r from-rose-50 to-pink-50 border-2 border-rose-200 rounded-lg text-lg font-semibold text-rose-600"
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
              class="flex-1 px-6 py-3 bg-rose-600 text-white rounded-lg hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 transition-colors duration-200 font-medium"
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
        <i class="fas fa-calculator text-rose-600" aria-hidden="true"></i>
        Conversion Formula
      </h2>
      <div class="bg-gradient-to-r from-rose-50 to-pink-50 rounded-lg p-6 border-l-4 border-rose-500">
        <p class="text-lg mb-4"><strong>Formula:</strong> Weeks = Days ÷ 7</p>
        <p class="text-gray-600 mb-4">
          <strong>Conversion Factor:</strong> 7 days = 1 week
        </p>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-lg p-4 mt-4">
          <p class="font-semibold text-rose-600 mb-2">Example Calculation:</p>
          <p class="text-gray-700">
            <?php echo number_format($inputValue, 0); ?> days ÷ 7 = 
            <?php echo number_format($outputValue, 2); ?> weeks
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
        <i class="fas fa-table text-rose-600" aria-hidden="true"></i>
        Quick Conversion Table
      </h2>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-rose-600 to-pink-600 text-white">
              <th class="px-4 py-3 text-left">Days</th>
              <th class="px-4 py-3 text-left">Weeks</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $commonValues = [7, 14, 21, 28, 30, 60, 90, 100, 180, 200, 365];
            foreach ($commonValues as $val) {
                $result = $val / 7;
                $isHighlighted = $isDynamicPage && abs($val - $inputValue) < 0.5;
                $rowClass = $isHighlighted ? 'bg-rose-100 font-semibold' : 'hover:bg-gray-50';
                echo "<tr class='border-b {$rowClass}'>";
                echo "<td class='px-4 py-3'>" . $val . " days</td>";
                echo "<td class='px-4 py-3'>" . number_format($result, 2) . " weeks</td>";
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
        <i class="fas fa-link text-rose-600" aria-hidden="true"></i>
        Related Time Conversions
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <a href="/weeks-to-days.php" class="p-4 bg-gradient-to-br from-rose-50 to-pink-50 rounded-lg hover:shadow-md transition-shadow border border-rose-200">
          <i class="fas fa-exchange-alt text-rose-600 mb-2"></i>
          <p class="font-medium text-gray-800">Weeks to Days</p>
        </a>
        <a href="/days-to-hours.php" class="p-4 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-lg hover:shadow-md transition-shadow border border-blue-200">
          <i class="fas fa-clock text-blue-600 mb-2"></i>
          <p class="font-medium text-gray-800">Days to Hours</p>
        </a>
        <a href="/hours-to-days.php" class="p-4 bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg hover:shadow-md transition-shadow border border-purple-200">
          <i class="fas fa-hourglass-half text-purple-600 mb-2"></i>
          <p class="font-medium text-gray-800">Hours to Days</p>
        </a>
        <a href="/weeks-to-months.php" class="p-4 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-lg hover:shadow-md transition-shadow border border-yellow-200">
          <i class="fas fa-calendar text-yellow-600 mb-2"></i>
          <p class="font-medium text-gray-800">Weeks to Months</p>
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
        <i class="fas fa-question-circle text-rose-600" aria-hidden="true"></i>
        Frequently Asked Questions
        <?php if ($isDynamicPage): ?>
        - <?php echo number_format($inputValue, 0); ?> days
        <?php endif; ?>
      </h2>
      
      <div class="space-y-6">
        <?php if ($isDynamicPage): ?>
        <div class="border-l-4 border-rose-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            How many weeks is <?php echo number_format($inputValue, 0); ?> days?
          </h3>
          <div>
            <p class="text-gray-600">
              <?php echo number_format($inputValue, 0); ?> days equals exactly 
              <?php echo number_format($outputValue, 2); ?> weeks. 
              This conversion uses the standard factor: 7 days = 1 week.
              <?php 
              if ($inputValue == 7) {
                  echo ' This is exactly one week.';
              } elseif ($inputValue == 14) {
                  echo ' This is exactly two weeks (a fortnight).';
              } elseif ($inputValue == 30) {
                  echo ' This is approximately one month.';
              } elseif ($inputValue == 365) {
                  echo ' This is one year (52.14 weeks).';
              } elseif ($inputValue < 7) {
                  echo ' This is less than one full week.';
              }
              ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="border-l-4 border-blue-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How do I convert days to weeks?</h3>
          <div>
            <p class="text-gray-600">To convert days to weeks, divide the number of days by 7. For example, <a href="/days-to-weeks/14" class="text-rose-600 hover:text-rose-800 underline">14 days = 2 weeks</a>. This is the standard time conversion used worldwide.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-green-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What is a fortnight?</h3>
          <div>
            <p class="text-gray-600">A fortnight is <a href="/days-to-weeks/14" class="text-rose-600 hover:text-rose-800 underline">14 days or 2 weeks</a>. The term comes from "fourteen nights" and is commonly used in British English and some other English-speaking countries.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-purple-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">When do I need to convert days to weeks?</h3>
          <div>
            <p class="text-gray-600">Days to weeks conversion is essential for project timelines, vacation planning, rental periods, fitness programs, medical prescriptions, and scheduling. Common uses include <a href="/weeks-to-days" class="text-rose-600 hover:text-rose-800 underline">reverse conversions</a> and <a href="/days-to-months" class="text-rose-600 hover:text-rose-800 underline">longer period calculations</a>.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-orange-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How many days are in a year in weeks?</h3>
          <div>
            <p class="text-gray-600"><a href="/days-to-weeks/365" class="text-rose-600 hover:text-rose-800 underline">365 days</a> equals 52.14 weeks. A leap year with <a href="/days-to-weeks/366" class="text-rose-600 hover:text-rose-800 underline">366 days</a> equals 52.29 weeks. Most calendars use 52 weeks for simplicity.</p>
          </div>
        </div>

        <div class="border-l-4 border-red-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What are common day periods in weeks?</h3>
          <div>
            <p class="text-gray-600">Common periods: <a href="/days-to-weeks/30" class="text-rose-600 hover:text-rose-800 underline">30 days (4.29 weeks)</a> - monthly, <a href="/days-to-weeks/90" class="text-rose-600 hover:text-rose-800 underline">90 days (12.86 weeks)</a> - quarterly, <a href="/days-to-weeks/180" class="text-rose-600 hover:text-rose-800 underline">180 days (25.71 weeks)</a> - half year.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
function updateConversion() {
  const daysValue = parseFloat(document.getElementById('daysValue').value);
  const weeksResult = document.getElementById('weeksResult');
  
  if (isNaN(daysValue) || daysValue < 0) {
    weeksResult.value = '';
    return;
  }
  
  const result = daysValue / 7;
  weeksResult.value = result.toFixed(2);
}

function resetForm() {
  document.getElementById('daysValue').value = '7';
  updateConversion();
  document.getElementById('copySuccess').classList.add('hidden');
}

function copyResult() {
  const result = document.getElementById('weeksResult').value;
  navigator.clipboard.writeText(result).then(() => {
    const successMsg = document.getElementById('copySuccess');
    successMsg.classList.remove('hidden');
    setTimeout(() => {
      successMsg.classList.add('hidden');
    }, 3000);
  });
}

// Event listeners
document.getElementById('daysValue').addEventListener('input', updateConversion);
document.getElementById('copyBtn').addEventListener('click', copyResult);

// Initialize
updateConversion();
</script>

<?php include 'footer.php'; ?>
