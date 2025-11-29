<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seconds to Minutes Converter 2025 - Free Online Calculator</title>
    <meta name="description" content="Convert seconds to minutes with our free 2025 online calculator. Instant conversion between seconds and minutes with accurate results.">
    <meta name="keywords" content="seconds to minutes converter 2025, time converter, seconds conversion, minutes calculator 2025">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seconds to Minutes Converter - Time Conversion Calculator</title>
    <meta name="description" content="Convert seconds to minutes with our free online calculator. Accurate time conversion between seconds and minutes.">
    <meta name="keywords" content="seconds to minutes, time converter, seconds conversion, minutes calculator">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="min-h-screen bg-gradient-to-br from-yellow-50 to-orange-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Seconds to Minutes Converter</h1>
            <p class="text-lg text-gray-600">Convert seconds to minutes quickly and accurately</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Seconds Input -->
                <div class="space-y-2">
                    <label for="seconds" class="block text-sm font-medium text-gray-700">
                        Seconds (s)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="seconds"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-500 focus:border-transparent"
                            placeholder="Enter seconds"
                            step="any"
                            oninput="convertToMinutes()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">sec</span>
                    </div>
                </div>

                <!-- Minutes Output -->
                <div class="space-y-2">
                    <label for="minutes" class="block text-sm font-medium text-gray-700">
                        Minutes (min)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="minutes"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent"
                            placeholder="Minutes result"
                            step="any"
                            oninput="convertToSeconds()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">min</span>
                    </div>
                </div>
            </div>

            <!-- Time Display -->
            <div class="mt-6 text-center">
                <div id="timeDisplay" class="text-lg font-medium text-gray-700 bg-gray-50 p-4 rounded-lg">
                    Enter a value to see the time breakdown
                </div>
            </div>

            <!-- Clear Button -->
            <div class="text-center mt-6">
                <button
                    onclick="clearInputs()"
                    class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-6 rounded-lg transition duration-300"
                >
                    Clear
                </button>
            </div>
        </div>

        <!-- Quick Convert Buttons -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-gray-800 mb-4">Quick Convert</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <button onclick="setAndConvert(60)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    60 sec (1 min)
                </button>
                <button onclick="setAndConvert(120)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    120 sec (2 min)
                </button>
                <button onclick="setAndConvert(300)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    300 sec (5 min)
                </button>
                <button onclick="setAndConvert(600)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    600 sec (10 min)
                </button>
                <button onclick="setAndConvert(900)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    900 sec (15 min)
                </button>
                <button onclick="setAndConvert(1800)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    1800 sec (30 min)
                </button>
                <button onclick="setAndConvert(3600)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    3600 sec (1 hr)
                </button>
                <button onclick="setAndConvert(7200)" class="bg-yellow-100 hover:bg-yellow-200 p-3 rounded-lg transition duration-300">
                    7200 sec (2 hr)
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Seconds to Minutes Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    Converting seconds to minutes is essential for time calculations in various fields including 
                    sports timing, cooking, scientific experiments, and everyday time management.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 minute = 60 seconds</strong><br>
                    Minutes = Seconds ÷ 60
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Conversions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>60 seconds = 1 minute</li>
                    <li>120 seconds = 2 minutes</li>
                    <li>300 seconds = 5 minutes</li>
                    <li>600 seconds = 10 minutes</li>
                    <li>900 seconds = 15 minutes</li>
                    <li>1800 seconds = 30 minutes</li>
                    <li>3600 seconds = 60 minutes (1 hour)</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Time Relationships</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1 hour = 60 minutes = 3,600 seconds</li>
                    <li>1 day = 24 hours = 1,440 minutes = 86,400 seconds</li>
                    <li>1 week = 7 days = 10,080 minutes = 604,800 seconds</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Sports timing and athletics</li>
                    <li>Cooking and baking timers</li>
                    <li>Scientific experiment duration</li>
                    <li>Exercise and workout timing</li>
                    <li>Audio and video duration</li>
                    <li>Process timing in manufacturing</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Practical Examples</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Marathon: ~10,800 seconds (3 hours)</li>
                    <li>Movie length: ~7,200 seconds (2 hours)</li>
                    <li>Microwave heating: 90 seconds (1.5 minutes)</li>
                    <li>Traffic light cycle: 180 seconds (3 minutes)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMinutes() {
    const seconds = parseFloat(document.getElementById('seconds').value);
    if (!isNaN(seconds)) {
        const minutes = seconds / 60;
        document.getElementById('minutes').value = minutes.toFixed(8);
        updateTimeDisplay(seconds);
    } else {
        document.getElementById('minutes').value = '';
        document.getElementById('timeDisplay').textContent = 'Enter a value to see the time breakdown';
    }
}

function convertToSeconds() {
    const minutes = parseFloat(document.getElementById('minutes').value);
    if (!isNaN(minutes)) {
        const seconds = minutes * 60;
        document.getElementById('seconds').value = seconds.toFixed(8);
        updateTimeDisplay(seconds);
    } else {
        document.getElementById('seconds').value = '';
        document.getElementById('timeDisplay').textContent = 'Enter a value to see the time breakdown';
    }
}

function updateTimeDisplay(totalSeconds) {
    if (totalSeconds < 0) {
        document.getElementById('timeDisplay').textContent = 'Invalid time value';
        return;
    }

    const hours = Math.floor(totalSeconds / 3600);
    const minutes = Math.floor((totalSeconds % 3600) / 60);
    const seconds = Math.floor(totalSeconds % 60);
    const milliseconds = Math.round((totalSeconds % 1) * 1000);

    let display = '';
    
    if (hours > 0) {
        display += `${hours} hour${hours !== 1 ? 's' : ''} `;
    }
    if (minutes > 0) {
        display += `${minutes} minute${minutes !== 1 ? 's' : ''} `;
    }
    if (seconds > 0 || totalSeconds < 60) {
        display += `${seconds} second${seconds !== 1 ? 's' : ''}`;
    }
    if (milliseconds > 0 && totalSeconds < 60) {
        display += ` ${milliseconds} ms`;
    }

    document.getElementById('timeDisplay').textContent = display.trim() || '0 seconds';
}

function setAndConvert(value) {
    document.getElementById('seconds').value = value;
    convertToMinutes();
}

function clearInputs() {
    document.getElementById('seconds').value = '';
    document.getElementById('minutes').value = '';
    document.getElementById('timeDisplay').textContent = 'Enter a value to see the time breakdown';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
