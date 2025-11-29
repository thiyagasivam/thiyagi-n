<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kilobits per Second to Megabits per Second Converter 2025 - Data Transfer Rate Calculator</title>
    <meta name="description" content="Convert kbps to Mbps with our free 2025 online calculator. Accurate data transfer rate conversion for internet speed calculations.">
    <meta name="keywords" content="kbps to mbps converter 2025, kilobits to megabits, internet speed converter, data rate calculator 2025">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100 py-8">
    <div class="max-w-4xl mx-auto px-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Kbps to Mbps Converter</h1>
            <p class="text-lg text-gray-600">Convert kilobits per second to megabits per second for internet speed</p>
        </div>

        <!-- Converter Card -->
        <div class="bg-white rounded-xl shadow-xl p-8 mb-8">
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Kbps Input -->
                <div class="space-y-2">
                    <label for="kbps" class="block text-sm font-medium text-gray-700">
                        Kilobits per Second (kbps)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="kbps"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Enter kbps"
                            step="any"
                            oninput="convertToMbps()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">kbps</span>
                    </div>
                </div>

                <!-- Mbps Output -->
                <div class="space-y-2">
                    <label for="mbps" class="block text-sm font-medium text-gray-700">
                        Megabits per Second (Mbps)
                    </label>
                    <div class="relative">
                        <input
                            type="number"
                            id="mbps"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                            placeholder="Mbps result"
                            step="any"
                            oninput="convertToKbps()"
                        >
                        <span class="absolute right-3 top-3 text-gray-500">Mbps</span>
                    </div>
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
            <h3 class="text-xl font-bold text-gray-800 mb-4">Quick Convert (Common Speeds)</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
                <button onclick="setAndConvert(1000)" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-lg transition duration-300">
                    1000 kbps (1 Mbps)
                </button>
                <button onclick="setAndConvert(5000)" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-lg transition duration-300">
                    5000 kbps (5 Mbps)
                </button>
                <button onclick="setAndConvert(25000)" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-lg transition duration-300">
                    25000 kbps (25 Mbps)
                </button>
                <button onclick="setAndConvert(100000)" class="bg-blue-100 hover:bg-blue-200 p-3 rounded-lg transition duration-300">
                    100000 kbps (100 Mbps)
                </button>
            </div>
        </div>

        <!-- Information -->
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Kbps to Mbps Conversion</h2>
            <div class="prose max-w-none text-gray-600">
                <p class="mb-4">
                    Converting kilobits per second (kbps) to megabits per second (Mbps) is essential for understanding 
                    internet speed specifications, comparing data plans, and measuring network performance.
                </p>
                
                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Conversion Formula</h3>
                <p class="mb-4">
                    <strong>1 Mbps = 1,000 kbps</strong><br>
                    Mbps = kbps ÷ 1,000
                </p>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Common Internet Speeds</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>1,000 kbps = 1 Mbps (Basic broadband)</li>
                    <li>5,000 kbps = 5 Mbps (Standard broadband)</li>
                    <li>25,000 kbps = 25 Mbps (High-speed broadband)</li>
                    <li>100,000 kbps = 100 Mbps (Very high-speed)</li>
                    <li>1,000,000 kbps = 1,000 Mbps (1 Gbps)</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Data Rate Hierarchy</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li><strong>bps:</strong> bits per second (base unit)</li>
                    <li><strong>kbps:</strong> 1,000 bps</li>
                    <li><strong>Mbps:</strong> 1,000 kbps = 1,000,000 bps</li>
                    <li><strong>Gbps:</strong> 1,000 Mbps = 1,000,000 kbps</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Internet Speed Requirements</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li><strong>Email/Web browsing:</strong> 1-5 Mbps</li>
                    <li><strong>SD video streaming:</strong> 3-5 Mbps</li>
                    <li><strong>HD video streaming:</strong> 5-25 Mbps</li>
                    <li><strong>4K video streaming:</strong> 25+ Mbps</li>
                    <li><strong>Online gaming:</strong> 3-6 Mbps</li>
                    <li><strong>Video conferencing:</strong> 1-4 Mbps</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Important Distinctions</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li><strong>Bits vs Bytes:</strong> 8 bits = 1 byte</li>
                    <li><strong>Mbps vs MBps:</strong> Megabits vs Megabytes per second</li>
                    <li><strong>Download vs Upload:</strong> Usually different speeds</li>
                    <li><strong>Theoretical vs Actual:</strong> Real speeds are often lower</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Applications</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li>Internet speed testing and comparison</li>
                    <li>Network performance monitoring</li>
                    <li>Data plan selection</li>
                    <li>Bandwidth calculations</li>
                    <li>Streaming service requirements</li>
                    <li>File transfer time estimation</li>
                </ul>

                <h3 class="text-lg font-semibold text-gray-800 mt-6 mb-3">Network Types</h3>
                <ul class="list-disc pl-6 space-y-1">
                    <li><strong>Dial-up:</strong> ~56 kbps</li>
                    <li><strong>DSL:</strong> 1-100 Mbps</li>
                    <li><strong>Cable:</strong> 10-1000 Mbps</li>
                    <li><strong>Fiber:</strong> 100-10,000 Mbps</li>
                    <li><strong>5G:</strong> 100-10,000 Mbps</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
function convertToMbps() {
    const kbps = parseFloat(document.getElementById('kbps').value);
    if (!isNaN(kbps)) {
        const mbps = kbps / 1000;
        document.getElementById('mbps').value = mbps.toFixed(8);
    } else {
        document.getElementById('mbps').value = '';
    }
}

function convertToKbps() {
    const mbps = parseFloat(document.getElementById('mbps').value);
    if (!isNaN(mbps)) {
        const kbps = mbps * 1000;
        document.getElementById('kbps').value = kbps.toFixed(6);
    } else {
        document.getElementById('kbps').value = '';
    }
}

function setAndConvert(value) {
    document.getElementById('kbps').value = value;
    convertToMbps();
}

function clearInputs() {
    document.getElementById('kbps').value = '';
    document.getElementById('mbps').value = '';
}
</script>

<?php include 'footer.php';?>

</body>
</html>
