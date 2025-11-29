<?php include 'header.php';?>

<?php
// Function to calculate estimated earnings
function calculateEarnings($views, $cpm, $rpm) {
    $earnings = ($views / 1000) * (($cpm + $rpm) / 2);
    return number_format($earnings, 2);
}

// Handle form submission
$earnings = 0;
$error = '';
// Preserve submitted values for sticky form
$views = isset($_POST['views']) ? (int)$_POST['views'] : '';
$cpm = isset($_POST['cpm']) ? (float)($_POST['cpm']) : '';
$rpm = isset($_POST['rpm']) ? (float)($_POST['rpm']) : '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $views = isset($_POST['views']) ? (int)$_POST['views'] : 0;
    $cpm = isset($_POST['cpm']) ? (float)$_POST['cpm'] : 0.0;
    $rpm = isset($_POST['rpm']) ? (float)$_POST['rpm'] : 0.0;

    if ($views > 0 && $cpm > 0 && $rpm > 0) {
        $earnings = calculateEarnings($views, $cpm, $rpm);
    } else {
        $error = 'Please enter valid values for views, CPM, and RPM.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Money Calculator 2025 - Estimate Earnings by Views, CPM & RPM</title>
    <meta name="description" content="Free YouTube Money Calculator to estimate your video earnings using Views, CPM, and RPM. Quick, accurate, and mobile-friendly.">
    <meta name="keywords" content="YouTube Money Calculator, YouTube earnings, CPM, RPM, YouTube revenue estimator, YouTube income calculator">
    <link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="YouTube Money Calculator - Estimate Earnings by Views, CPM & RPM">
    <meta property="og:description" content="Estimate YouTube earnings using Views, CPM, and RPM. Simple and fast.">
    <meta property="og:url" content="https://www.thiyagi.com/youtube-money-calculator">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="YouTube Money Calculator - Estimate Earnings by Views, CPM & RPM">
    <meta name="twitter:description" content="Estimate YouTube earnings using Views, CPM, and RPM. Simple and fast.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

    <!-- JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "YouTube Money Calculator",
      "url": "https://www.thiyagi.com/youtube-money-calculator",
      "applicationCategory": "FinanceApplication",
      "description": "Estimate YouTube video earnings by entering Views, CPM, and RPM.",
      "operatingSystem": "Web Browser",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "USD"}
    }
    </script>

</head>
<body class="bg-gray-50">
    <!-- Breadcrumb -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 py-3 text-sm">
                <a href="./" class="text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-home mr-1"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                <span class="text-gray-600">YouTube Money Calculator</span>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="bg-gradient-to-br from-red-600 to-red-800 text-white py-14">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full mb-4">
                <i class="fab fa-youtube text-3xl"></i>
            </div>
            <h1 class="text-4xl font-bold mb-3">YouTube Money Calculator</h1>
            <p class="text-red-100">Estimate your YouTube earnings by entering Views, CPM and RPM. Useful for creators and marketers.</p>
            <div class="mt-4 flex flex-wrap justify-center gap-2 text-sm">
                <span class="bg-white/20 px-3 py-1 rounded-full">⚡ Instant</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">📈 Accurate</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">📱 Mobile-friendly</span>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto p-6 -mt-10">
        <form method="POST" class="bg-white p-6 md:p-8 rounded-lg shadow-xl" novalidate>
            <div class="mb-4">
                <label for="views" class="block text-gray-700 font-semibold mb-2">Number of Views</label>
                <input type="number" min="1" name="views" id="views" value="<?php echo htmlspecialchars($views); ?>" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-red-500 transition duration-300" placeholder="e.g., 100000" required>
            </div>
            <div class="mb-4">
                <label for="cpm" class="block text-gray-700 font-semibold mb-2">CPM (Cost Per Mille)</label>
                <input type="number" step="0.01" min="0.01" name="cpm" id="cpm" value="<?php echo htmlspecialchars($cpm); ?>" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-red-500 transition duration-300" placeholder="e.g., 5.00" required>
                <p class="text-sm text-gray-500 mt-1">Advertiser spend per 1000 ad impressions.</p>
            </div>
            <div class="mb-4">
                <label for="rpm" class="block text-gray-700 font-semibold mb-2">RPM (Revenue Per Mille)</label>
                <input type="number" step="0.01" min="0.01" name="rpm" id="rpm" value="<?php echo htmlspecialchars($rpm); ?>" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-red-500 transition duration-300" placeholder="e.g., 4.50" required>
                <p class="text-sm text-gray-500 mt-1">Actual revenue per 1000 views after YouTube’s share.</p>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300 shadow-lg">Calculate Earnings</button>
        </form>
        <?php if ($earnings > 0): ?>
            <div class="mt-8 bg-white p-6 md:p-8 rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                        <i class="fas fa-sack-dollar text-green-600 mr-2"></i>
                        Estimated Earnings
                    </h2>
                    <button id="copyBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition duration-300">
                        <i class="fas fa-copy mr-1"></i> Copy
                    </button>
                </div>
                <div class="relative mt-4 p-4 bg-gray-100 rounded-lg border border-gray-200">
                    <pre id="earningsOutput" class="text-gray-700 text-lg">$<?php echo htmlspecialchars($earnings); ?></pre>
                </div>
                <p class="text-sm text-gray-500 mt-3">Note: This is an estimate. Actual earnings vary by audience, niche, geography, and ad engagement.</p>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-6 bg-red-100 p-6 rounded-lg shadow-md">
                <p class="text-red-700 text-xl"><?php echo htmlspecialchars($error); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Features -->
    <div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-star text-yellow-500 mr-3"></i>
                Why use this calculator?
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="text-center p-6 border border-gray-200 rounded-lg bg-white">
                    <div class="text-red-500 text-4xl mb-4">⚡</div>
                    <h3 class="font-bold text-gray-700 text-lg mb-2">Fast estimates</h3>
                    <p class="text-gray-600 text-sm">Enter views, CPM & RPM and get instant results.</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg bg-white">
                    <div class="text-green-500 text-4xl mb-4">📈</div>
                    <h3 class="font-bold text-gray-700 text-lg mb-2">Creator-friendly</h3>
                    <p class="text-gray-600 text-sm">Useful to plan revenue goals and sponsorship rates.</p>
                </div>
                <div class="text-center p-6 border border-gray-200 rounded-lg bg-white">
                    <div class="text-blue-500 text-4xl mb-4">📱</div>
                    <h3 class="font-bold text-gray-700 text-lg mb-2">Mobile-ready</h3>
                    <p class="text-gray-600 text-sm">Works great on phones, tablets, and desktops.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ -->
    <div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                Frequently Asked Questions
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What’s the difference between CPM and RPM?</h3>
                    <p class="text-gray-600">CPM is advertiser cost per 1000 ad impressions. RPM is your revenue per 1000 views after platform share and other factors.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Is this accurate?</h3>
                    <p class="text-gray-600">It’s an estimate. Real earnings vary by niche, country, ad formats, seasonality, and viewer behavior.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What CPM/RPM should I use?</h3>
                    <p class="text-gray-600">Use your channel analytics ranges. Tech/finance niches often have higher CPM than general entertainment.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Do Shorts earn the same as long videos?</h3>
                    <p class="text-gray-600">No. Shorts monetization differs and often has lower RPM than long-form videos.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Tools -->
    <div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-tools text-red-600 mr-3"></i>
                Related YouTube Tools
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="youtube-thumbnail-downloader" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-red-500 text-2xl mb-2">🖼️</div>
                    <h3 class="font-bold text-gray-700 text-sm">Thumbnail Downloader</h3>
                    <p class="text-gray-600 text-xs">Download YouTube thumbnails</p>
                </a>
                <a href="youtube-tag-extractor" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-pink-500 text-2xl mb-2">🏷️</div>
                    <h3 class="font-bold text-gray-700 text-sm">Tag Extractor</h3>
                    <p class="text-gray-600 text-xs">Extract video tags</p>
                </a>
                <a href="youtube-embed-code-generator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-green-500 text-2xl mb-2">🧩</div>
                    <h3 class="font-bold text-gray-700 text-sm">Embed Code Generator</h3>
                    <p class="text-gray-600 text-xs">Generate privacy-friendly iframes</p>
                </a>
                <a href="youtube-video-statistics" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-purple-500 text-2xl mb-2">📊</div>
                    <h3 class="font-bold text-gray-700 text-sm">Video Statistics</h3>
                    <p class="text-gray-600 text-xs">Get detailed video stats</p>
                </a>
            </div>
        </div>
    </div>

    <script>
    document.getElementById('copyBtn')?.addEventListener('click', function(){
        const pre = document.getElementById('earningsOutput');
        if (!pre) return;
        const text = pre.innerText.trim();
        navigator.clipboard.writeText(text).then(() => {
            const self = this;
            const old = self.textContent;
            self.textContent = 'Copied!';
            setTimeout(() => self.textContent = old, 1500);
        });
    });
    </script>
</body>
<?php include 'footer.php';?>

</html>
