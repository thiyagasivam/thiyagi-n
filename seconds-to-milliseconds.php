<?php
ob_start();
include 'header.php';
$header_content = ob_get_clean();

// Insert title and meta tags into the head section
$title = 'Seconds to Milliseconds Converter 2025 | Time Conversion Tool | Free Calculator';
$description = 'Convert seconds to milliseconds instantly with our 2025 accurate time converter. Perfect for programming, timing, and precision calculations.';
$keywords = 'seconds to milliseconds converter 2025, time conversion calculator, seconds ms converter, programming timer, precision timing';
$canonical = 'https://www.thiyagi.com/seconds-to-milliseconds';

$meta_tags = '<title>' . htmlspecialchars($title) . '</title>' . "\n";
$meta_tags .= '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
$meta_tags .= '<meta name="keywords" content="' . htmlspecialchars($keywords) . '">' . "\n";
$meta_tags .= '<link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . "\n";

// Replace the canonical URL and add our meta tags
$header_content = str_replace(
    '<link rel="canonical" href="' . htmlspecialchars($_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?')) . '" />',
    $meta_tags,
    $header_content
);

echo $header_content;
?>

<div class="min-h-screen bg-gradient-to-br from-emerald-50 to-teal-100 py-8">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="/" class="text-emerald-600 hover:text-emerald-800">Home</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="flex items-center">
                    <a href="/milliseconds-to-seconds.php" class="text-emerald-600 hover:text-emerald-800">Time Converters</a>
                    <i class="fas fa-chevron-right mx-2 text-gray-400"></i>
                </li>
                <li class="text-gray-500" aria-current="page">Seconds to Milliseconds Converter</li>
            </ol>
        </nav>

        <!-- Main Content -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">
                    <i class="fas fa-hourglass-half text-emerald-600 mr-3"></i>
                    Seconds to Milliseconds Converter
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Convert Seconds (s) to Milliseconds (ms) instantly with our professional time converter. 
                    Perfect for programming, animation timing, performance optimization, and precise measurements.
                </p>
            </div>

            <!-- Converter Interface -->
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- Input Section -->
                <div class="space-y-6">
                    <div>
                        <label for="secondsInput" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-clock mr-2 text-emerald-600"></i>Seconds (s)
                        </label>
                        <input
                            type="number"
                            id="secondsInput"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 text-lg"
                            placeholder="Enter seconds"
                            step="any"
                        />
                    </div>
                    
                    <div class="bg-emerald-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-emerald-800 mb-2">Common Times:</h3>
                        <div class="grid grid-cols-2 gap-2 text-sm">
                            <button onclick="setSeconds(1)" class="text-emerald-600 hover:text-emerald-800 text-left">1 s</button>
                            <button onclick="setSeconds(0.5)" class="text-emerald-600 hover:text-emerald-800 text-left">0.5 s</button>
                            <button onclick="setSeconds(2)" class="text-emerald-600 hover:text-emerald-800 text-left">2 s</button>
                            <button onclick="setSeconds(5)" class="text-emerald-600 hover:text-emerald-800 text-left">5 s</button>
                        </div>
                    </div>
                </div>

                <!-- Output Section -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-stopwatch mr-2 text-blue-600"></i>Milliseconds (ms)
                        </label>
                        <div class="relative">
                            <input
                                type="text"
                                id="millisecondsOutput"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-50 text-lg font-mono"
                                readonly
                                placeholder="Result will appear here"
                            />
                            <button
                                onclick="copyResult()"
                                class="absolute right-3 top-3 text-gray-500 hover:text-emerald-600"
                                title="Copy result"
                            >
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                    </div>

                    <div class="bg-blue-50 p-4 rounded-lg">
                        <h3 class="font-semibold text-blue-800 mb-2">Conversion Formula:</h3>
                        <p class="text-sm text-blue-700">Milliseconds = Seconds × 1000</p>
                        <p class="text-xs text-blue-600 mt-1">1 Second = 1000 Milliseconds</p>
                    </div>
                </div>
            </div>

            <!-- Additional Tools -->
            <div class="mt-8 grid md:grid-cols-3 gap-4">
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-code text-emerald-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Programming</h4>
                    <p class="text-sm text-gray-600">Timeout and delay functions</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-play text-purple-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Animation</h4>
                    <p class="text-sm text-gray-600">Timing and transitions</p>
                </div>
                <div class="bg-gray-50 p-4 rounded-lg text-center">
                    <i class="fas fa-tachometer-alt text-orange-600 text-2xl mb-2"></i>
                    <h4 class="font-semibold mb-1">Performance</h4>
                    <p class="text-sm text-gray-600">Optimization metrics</p>
                </div>
            </div>
        </div>

        <!-- Conversion Table -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-table mr-2 text-emerald-600"></i>
                Seconds to Milliseconds Conversion Table
            </h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-emerald-50">
                            <th class="border border-gray-300 px-4 py-2 text-left">Seconds (s)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Milliseconds (ms)</th>
                            <th class="border border-gray-300 px-4 py-2 text-left">Common Application</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td class="border border-gray-300 px-4 py-2">0.001 s</td><td class="border border-gray-300 px-4 py-2">1 ms</td><td class="border border-gray-300 px-4 py-2">System response</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">0.017 s</td><td class="border border-gray-300 px-4 py-2">16.7 ms</td><td class="border border-gray-300 px-4 py-2">60 FPS frame time</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">0.1 s</td><td class="border border-gray-300 px-4 py-2">100 ms</td><td class="border border-gray-300 px-4 py-2">Button click delay</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">0.5 s</td><td class="border border-gray-300 px-4 py-2">500 ms</td><td class="border border-gray-300 px-4 py-2">Animation duration</td></tr>
                        <tr><td class="border border-gray-300 px-4 py-2">1.0 s</td><td class="border border-gray-300 px-4 py-2">1000 ms</td><td class="border border-gray-300 px-4 py-2">Standard second</td></tr>
                        <tr class="bg-gray-50"><td class="border border-gray-300 px-4 py-2">5.0 s</td><td class="border border-gray-300 px-4 py-2">5000 ms</td><td class="border border-gray-300 px-4 py-2">Timeout interval</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-question-circle mr-2 text-emerald-600"></i>
                Frequently Asked Questions
            </h2>
            <div class="space-y-6">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How many milliseconds are in a second?</h3>
                    <p class="text-gray-600">There are exactly 1,000 milliseconds in one second. To convert, multiply seconds by 1000.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Why use milliseconds in programming?</h3>
                    <p class="text-gray-600">Milliseconds provide precision for animations, timeouts, performance measurements, and real-time applications where fractional seconds need precise timing.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What is the significance of 16.7 milliseconds?</h3>
                    <p class="text-gray-600">16.7 ms is the time for one frame at 60 FPS (frames per second), a common standard for smooth video and animation playback.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">When do I need millisecond precision?</h3>
                    <p class="text-gray-600">Millisecond precision is crucial for user interface responsiveness, game development, audio/video synchronization, and performance optimization.</p>
                </div>
            </div>
        </div>

        <!-- Related Converters -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">
                <i class="fas fa-exchange-alt mr-2 text-emerald-600"></i>
                Related Time Converters
            </h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/milliseconds-to-seconds.php" class="block p-4 bg-emerald-50 rounded-lg hover:bg-emerald-100 transition-colors">
                    <i class="fas fa-hourglass-half text-emerald-600 mb-2"></i>
                    <h3 class="font-semibold text-emerald-800">Milliseconds to Seconds</h3>
                    <p class="text-sm text-emerald-600">Reverse conversion</p>
                </a>
                <a href="/hours-calculator.php" class="block p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors">
                    <i class="fas fa-clock text-blue-600 mb-2"></i>
                    <h3 class="font-semibold text-blue-800">Hours Calculator</h3>
                    <p class="text-sm text-blue-600">Calculate hours</p>
                </a>
                <a href="/celsius-to-fahrenheit.php" class="block p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors">
                    <i class="fas fa-thermometer-half text-purple-600 mb-2"></i>
                    <h3 class="font-semibold text-purple-800">Temperature Converter</h3>
                    <p class="text-sm text-purple-600">Convert temperatures</p>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
function convertSecondsToMilliseconds() {
    const secondsInput = document.getElementById('secondsInput').value;
    const millisecondsOutput = document.getElementById('millisecondsOutput');
    
    if (secondsInput === '' || isNaN(secondsInput)) {
        millisecondsOutput.value = '';
        return;
    }
    
    const seconds = parseFloat(secondsInput);
    const milliseconds = seconds * 1000;
    
    // Format the result with appropriate decimal places
    if (milliseconds >= 1000) {
        millisecondsOutput.value = milliseconds.toFixed(0);
    } else if (milliseconds >= 100) {
        millisecondsOutput.value = milliseconds.toFixed(1);
    } else {
        millisecondsOutput.value = milliseconds.toFixed(2);
    }
}

function setSeconds(value) {
    document.getElementById('secondsInput').value = value;
    convertSecondsToMilliseconds();
}

function copyResult() {
    const millisecondsOutput = document.getElementById('millisecondsOutput');
    millisecondsOutput.select();
    document.execCommand('copy');
    
    // Show feedback
    const originalTitle = event.target.title;
    event.target.title = 'Copied!';
    setTimeout(() => {
        event.target.title = originalTitle;
    }, 1000);
}

// Real-time conversion
document.getElementById('secondsInput').addEventListener('input', convertSecondsToMilliseconds);

// Handle Enter key
document.getElementById('secondsInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        convertSecondsToMilliseconds();
    }
});
</script>

<!-- Schema.org structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Seconds to Milliseconds Converter",
  "description": "Convert Seconds (s) to Milliseconds (ms) instantly with our professional time converter.",
  "url": "https://www.thiyagi.com/seconds-to-milliseconds.php",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "All",
  "permissions": "browser",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "Instant seconds to milliseconds conversion",
    "Programming and animation timing",
    "Performance optimization",
    "Mobile-friendly interface",
    "Copy results to clipboard"
  ]
}
</script>

<?php include 'footer.php'; ?>
