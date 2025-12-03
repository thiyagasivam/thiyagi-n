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
        $outputValue = $inputValue * 7; // 1 week = 7 days
        $isDynamicPage = true;
    }
}

// Generate dynamic content
$pageTitle = $isDynamicPage ? 
    "Convert {$inputValue} Weeks to Days 2025 | {$inputValue} weeks = " . number_format($outputValue, 0) . " days | Time Calculator" : 
    "Best Weeks to Days Converter 2025 | Time Conversion Tool | Free Calculator";

$pageDescription = $isDynamicPage ? 
    "Convert {$inputValue} weeks to days in 2025. {$inputValue} weeks equals " . number_format($outputValue, 0) . " days. Free, instant, accurate time conversion for planning & scheduling." :
    "Convert weeks to days instantly with our best 2025 accurate converter. Perfect for time calculations, project planning, scheduling & date conversions.";

$canonicalUrl = $isDynamicPage ? 
    "https://www.thiyagi.com/weeks-to-days/{$originalValue}" : 
    "https://www.thiyagi.com/weeks-to-days";
?>
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta name="keywords" content="weeks to days, weeks converter, time conversion, days calculator, project planning, scheduling tool 2025">
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
  "name": "Weeks to Days Converter 2025",
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
    "Instant weeks to days conversion",
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
      "name": "How many days is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks equals exactly <?php echo number_format($outputValue, 0); ?> days. This conversion uses the standard factor: 1 week = 7 days."
      }
    },
    {
      "@type": "Question",
      "name": "How do I convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks to days?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "To convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks to days, multiply by 7. The calculation is: <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> × 7 = <?php echo number_format($outputValue, 0); ?> days."
      }
    }
  ]
}
</script>
<?php endif; ?>

<style>
:root {
    --primary-emerald: #10b981;
    --primary-emerald-dark: #059669;
    --primary-emerald-light: #6ee7b7;
}
.bg-emerald-600 { background-color: var(--primary-emerald); }
.hover\:bg-emerald-700:hover { background-color: var(--primary-emerald-dark); }
.text-emerald-600 { color: var(--primary-emerald); }
.border-emerald-500 { border-color: var(--primary-emerald-light); }
.focus\:ring-emerald-500:focus { --tw-ring-color: var(--primary-emerald); }
</style>

<main class="min-h-screen bg-gradient-to-br from-emerald-50 to-teal-50">
  <!-- Breadcrumb Navigation -->
  <nav class="pt-16 pb-4" aria-label="Breadcrumb">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <ol class="flex items-center space-x-2 text-sm text-gray-600" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/" class="hover:text-emerald-600 transition-colors" itemprop="item">
            <span itemprop="name">Home</span>
          </a>
          <meta itemprop="position" content="1">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/time-converter.php" class="hover:text-emerald-600 transition-colors" itemprop="item">
            <span itemprop="name">Time Converter</span>
          </a>
          <meta itemprop="position" content="2">
        </li>
        <li><span class="mx-2">/</span></li>
        <?php if ($isDynamicPage): ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="/weeks-to-days.php" class="hover:text-emerald-600 transition-colors" itemprop="item">
            <span itemprop="name">Weeks to Days</span>
          </a>
          <meta itemprop="position" content="3">
        </li>
        <li><span class="mx-2">/</span></li>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-emerald-600 font-medium" itemprop="name"><?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> Weeks</span>
          <meta itemprop="position" content="4">
        </li>
        <?php else: ?>
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <span class="text-emerald-600 font-medium" itemprop="name">Weeks to Days</span>
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
          Convert <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> Weeks to Days
          <?php else: ?>
          Weeks to Days Converter 2025
          <?php endif; ?>
        </h1>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8 max-w-2xl mx-auto border-2 border-emerald-200">
          <div class="text-center">
            <p class="text-gray-600 text-lg mb-4">Conversion Result:</p>
            <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-xl p-6">
              <p class="text-3xl md:text-4xl font-bold text-emerald-600 mb-2">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks = 
                <?php echo number_format($outputValue, 0); ?> days
              </p>
              <p class="text-sm text-gray-500">
                <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks equals 
                <?php echo number_format($outputValue, 0); ?> days
              </p>
            </div>
          </div>
        </div>
        <?php else: ?>
        <p class="text-xl text-gray-600 mb-8">
          Free, instant, and accurate weeks to days conversion for planning, scheduling, and time calculations in 2025
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
          <i class="fas fa-calendar-alt text-emerald-600" aria-hidden="true"></i>
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
              value="<?php echo $isDynamicPage ? $inputValue : '1'; ?>"
              step="0.1"
              min="0"
              class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors text-lg"
              placeholder="Enter weeks..."
            >
          </div>
          
          <div>
            <label for="daysResult" class="block text-sm font-medium text-gray-700 mb-2">
              Result in Days
            </label>
            <input 
              type="text" 
              id="daysResult" 
              readonly 
              value="<?php echo $isDynamicPage ? number_format($outputValue, 0) : '7'; ?>"
              class="w-full px-4 py-3 bg-gradient-to-r from-emerald-50 to-teal-50 border-2 border-emerald-200 rounded-lg text-lg font-semibold text-emerald-600"
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
              class="flex-1 px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-colors duration-200 font-medium"
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
        <i class="fas fa-calculator text-emerald-600" aria-hidden="true"></i>
        Conversion Formula
      </h2>
      <div class="bg-gradient-to-r from-emerald-50 to-teal-50 rounded-lg p-6 border-l-4 border-emerald-500">
        <p class="text-lg mb-4"><strong>Formula:</strong> Days = Weeks × 7</p>
        <p class="text-gray-600 mb-4">
          <strong>Conversion Factor:</strong> 1 week = 7 days
        </p>
        <?php if ($isDynamicPage): ?>
        <div class="bg-white rounded-lg p-4 mt-4">
          <p class="font-semibold text-emerald-600 mb-2">Example Calculation:</p>
          <p class="text-gray-700">
            <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks × 7 = 
            <?php echo number_format($outputValue, 0); ?> days
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
        <i class="fas fa-table text-emerald-600" aria-hidden="true"></i>
        Quick Conversion Table
      </h2>
      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-emerald-600 to-teal-600 text-white">
              <th class="px-4 py-3 text-left">Weeks</th>
              <th class="px-4 py-3 text-left">Days</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $commonValues = [1, 2, 3, 4, 5, 6, 8, 10, 12, 16, 20, 24, 26, 30, 40, 50, 52];
            foreach ($commonValues as $val) {
                $result = $val * 7;
                $isHighlighted = $isDynamicPage && abs($val - $inputValue) < 0.1;
                $rowClass = $isHighlighted ? 'bg-emerald-100 font-semibold' : 'hover:bg-gray-50';
                echo "<tr class='border-b {$rowClass}'>";
                echo "<td class='px-4 py-3'>" . $val . " week" . ($val > 1 ? 's' : '') . "</td>";
                echo "<td class='px-4 py-3'>" . $result . " days</td>";
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
        <i class="fas fa-link text-emerald-600" aria-hidden="true"></i>
        Related Time Conversions
      </h2>
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
        <a href="/days-to-weeks.php" class="p-4 bg-gradient-to-br from-emerald-50 to-teal-50 rounded-lg hover:shadow-md transition-shadow border border-emerald-200">
          <i class="fas fa-exchange-alt text-emerald-600 mb-2"></i>
          <p class="font-medium text-gray-800">Days to Weeks</p>
        </a>
        <a href="/weeks-to-months.php" class="p-4 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-lg hover:shadow-md transition-shadow border border-blue-200">
          <i class="fas fa-calendar text-blue-600 mb-2"></i>
          <p class="font-medium text-gray-800">Weeks to Months</p>
        </a>
        <a href="/days-to-hours.php" class="p-4 bg-gradient-to-br from-purple-50 to-pink-50 rounded-lg hover:shadow-md transition-shadow border border-purple-200">
          <i class="fas fa-clock text-purple-600 mb-2"></i>
          <p class="font-medium text-gray-800">Days to Hours</p>
        </a>
        <a href="/hours-to-days.php" class="p-4 bg-gradient-to-br from-yellow-50 to-orange-50 rounded-lg hover:shadow-md transition-shadow border border-yellow-200">
          <i class="fas fa-hourglass-half text-yellow-600 mb-2"></i>
          <p class="font-medium text-gray-800">Hours to Days</p>
        </a>
        <a href="/months-to-weeks.php" class="p-4 bg-gradient-to-br from-green-50 to-lime-50 rounded-lg hover:shadow-md transition-shadow border border-green-200">
          <i class="fas fa-calendar-week text-green-600 mb-2"></i>
          <p class="font-medium text-gray-800">Months to Weeks</p>
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
        <i class="fas fa-question-circle text-emerald-600" aria-hidden="true"></i>
        Frequently Asked Questions
        <?php if ($isDynamicPage): ?>
        - <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks
        <?php endif; ?>
      </h2>
      
      <div class="space-y-6">
        <?php if ($isDynamicPage): ?>
        <div class="border-l-4 border-emerald-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">
            How many days is <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks?
          </h3>
          <div>
            <p class="text-gray-600">
              <?php echo number_format($inputValue, ($inputValue == intval($inputValue)) ? 0 : 1); ?> weeks equals exactly 
              <?php echo number_format($outputValue, 0); ?> days. 
              This conversion uses the standard factor: 1 week = 7 days.
              <?php 
              if ($inputValue == 1) {
                  echo ' This is a standard week duration.';
              } elseif ($inputValue == 2) {
                  echo ' This is a common billing cycle or vacation period.';
              } elseif ($inputValue == 4) {
                  echo ' This is approximately one month.';
              } elseif ($inputValue >= 52 && $inputValue <= 53) {
                  echo ' This is approximately one year (52-53 weeks).';
              } elseif ($inputValue > 0 && $inputValue < 1) {
                  echo ' This is less than a full week.';
              }
              ?>
            </p>
          </div>
        </div>
        <?php endif; ?>
        
        <div class="border-l-4 border-blue-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How do I convert weeks to days?</h3>
          <div>
            <p class="text-gray-600">To convert weeks to days, multiply the number of weeks by 7. For example, <a href="/weeks-to-days/4" class="text-emerald-600 hover:text-emerald-800 underline">4 weeks = 28 days</a>. This is the standard time conversion used worldwide.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-green-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">Why is 1 week equal to 7 days?</h3>
          <div>
            <p class="text-gray-600">The 7-day week has ancient origins and is universally recognized across all calendars and cultures. It's based on historical, religious, and astronomical traditions. This standard has been used for thousands of years.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-purple-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">When do I need to convert weeks to days?</h3>
          <div>
            <p class="text-gray-600">Weeks to days conversion is essential for project planning, pregnancy tracking, fitness programs, vacation planning, billing cycles, contract durations, and scheduling. Common uses include <a href="/days-to-weeks" class="text-emerald-600 hover:text-emerald-800 underline">reverse conversions</a> and <a href="/weeks-to-months" class="text-emerald-600 hover:text-emerald-800 underline">longer period calculations</a>.</p>
          </div>
        </div>
        
        <div class="border-l-4 border-orange-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">How many weeks are in a year?</h3>
          <div>
            <p class="text-gray-600">A standard year has <a href="/weeks-to-days/52" class="text-emerald-600 hover:text-emerald-800 underline">52 weeks</a> (364 days), though technically it's 52.14 weeks since a year has 365 days (366 in leap years). Most calendars use 52 weeks for simplicity.</p>
          </div>
        </div>

        <div class="border-l-4 border-red-500 pl-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">What are common week periods?</h3>
          <div>
            <p class="text-gray-600">Common periods include: <a href="/weeks-to-days/2" class="text-emerald-600 hover:text-emerald-800 underline">2 weeks (14 days)</a> for billing cycles, <a href="/weeks-to-days/4" class="text-emerald-600 hover:text-emerald-800 underline">4 weeks (28 days)</a> for monthly periods, <a href="/weeks-to-days/12" class="text-emerald-600 hover:text-emerald-800 underline">12 weeks (84 days)</a> for quarters, and <a href="/weeks-to-days/40" class="text-emerald-600 hover:text-emerald-800 underline">40 weeks (280 days)</a> for pregnancy.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script>
function updateConversion() {
  const weeksValue = parseFloat(document.getElementById('weeksValue').value);
  const daysResult = document.getElementById('daysResult');
  
  if (isNaN(weeksValue) || weeksValue < 0) {
    daysResult.value = '';
    return;
  }
  
  const result = weeksValue * 7;
  daysResult.value = Math.round(result);
}

function resetForm() {
  document.getElementById('weeksValue').value = '1';
  updateConversion();
  document.getElementById('copySuccess').classList.add('hidden');
}

function copyResult() {
  const result = document.getElementById('daysResult').value;
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
