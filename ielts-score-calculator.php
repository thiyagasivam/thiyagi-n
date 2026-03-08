<?php include 'header.php';?>
<link rel="canonical" href="https://www.thiyagi.com/ielts-score-calculator">
<?php
// ============================================================
// IELTS Score Conversion Tables
// ============================================================

$listeningTable = [
    [39, 40, 9], [37, 38, 8.5], [35, 36, 8], [32, 34, 7.5],
    [30, 31, 7], [26, 29, 6.5], [23, 25, 6], [18, 22, 5.5],
    [16, 17, 5], [13, 15, 4.5], [11, 12, 4], [9, 10, 3.5],
    [6, 8, 3], [4, 5, 2.5], [3, 3, 2], [2, 2, 1.5], [1, 1, 1]
];

$academicReadingTable = [
    [39, 40, 9], [37, 38, 8.5], [35, 36, 8], [33, 34, 7.5],
    [30, 32, 7], [27, 29, 6.5], [23, 26, 6], [19, 22, 5.5],
    [15, 18, 5], [13, 14, 4.5], [10, 12, 4], [8, 9, 3.5],
    [6, 7, 3], [4, 5, 2.5], [3, 3, 2], [2, 2, 1.5], [1, 1, 1]
];

$generalReadingTable = [
    [40, 40, 9], [39, 39, 8.5], [37, 38, 8], [36, 36, 7.5],
    [34, 35, 7], [32, 33, 6.5], [30, 31, 6], [27, 29, 5.5],
    [23, 26, 5], [19, 22, 4.5], [15, 18, 4], [12, 14, 3.5],
    [9, 11, 3], [6, 8, 2.5], [4, 5, 2], [3, 3, 1.5], [1, 2, 1]
];

$bandDescriptions = [
    9   => 'Expert User',
    8.5 => 'Very Good User',
    8   => 'Very Good User',
    7.5 => 'Good User',
    7   => 'Good User',
    6.5 => 'Competent User',
    6   => 'Competent User',
    5.5 => 'Modest User',
    5   => 'Modest User',
    4.5 => 'Limited User',
    4   => 'Limited User',
    3.5 => 'Extremely Limited User',
    3   => 'Extremely Limited User',
    2.5 => 'Intermittent User',
    2   => 'Intermittent User',
    1.5 => 'Non User',
    1   => 'Non User',
    0   => 'Did Not Attempt'
];

function convertScore($correct, $table) {
    foreach ($table as $row) {
        if ($correct >= $row[0] && $correct <= $row[1]) {
            return $row[2];
        }
    }
    return 0;
}

function ieltsRound($avg) {
    $decimal = $avg - floor($avg);
    if ($decimal < 0.25) return floor($avg);
    if ($decimal >= 0.25 && $decimal < 0.75) return floor($avg) + 0.5;
    return ceil($avg);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IELTS Score Calculator – Calculate Your IELTS Band Score Instantly</title>
<meta name="description" content="Free IELTS score calculator to estimate your overall band score for Listening, Reading, Writing and Speaking. Includes official IELTS rounding rules.">
<meta name="keywords" content="IELTS score calculator, IELTS band score, IELTS overall score, IELTS listening score, IELTS reading score, IELTS calculator 2026">
<meta property="og:title" content="IELTS Score Calculator – Calculate Your IELTS Band Score Instantly">
<meta property="og:description" content="Free IELTS score calculator to estimate your overall band score for Listening, Reading, Writing and Speaking.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.thiyagi.com/ielts-score-calculator">
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<style>
    .band-circle{width:140px;height:140px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:2.8rem;font-weight:800;margin:0 auto;box-shadow:0 4px 24px rgba(37,99,235,.18)}
    .module-card{transition:transform .18s,box-shadow .18s}.module-card:hover{transform:translateY(-2px);box-shadow:0 8px 24px rgba(0,0,0,.08)}
    .score-bar{height:10px;border-radius:999px;transition:width .5s ease}
    .toggle-btn{transition:all .2s}.toggle-btn.active{background:#2563eb;color:#fff;box-shadow:0 2px 8px rgba(37,99,235,.25)}
    .fade-in{animation:fadeIn .4s ease}@keyframes fadeIn{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:translateY(0)}}
    .input-range::-webkit-slider-thumb{-webkit-appearance:none;height:22px;width:22px;border-radius:50%;background:#2563eb;cursor:pointer;box-shadow:0 2px 6px rgba(37,99,235,.3)}
    .input-range::-webkit-slider-runnable-track{height:6px;border-radius:999px;background:#e2e8f0}
    .input-range{-webkit-appearance:none;appearance:none;width:100%;cursor:pointer}
    @media print{.no-print{display:none!important}.print-only{display:block!important}}
    .print-only{display:none}
    .share-toast{position:fixed;bottom:24px;left:50%;transform:translateX(-50%) translateY(80px);background:#1e293b;color:#fff;padding:12px 28px;border-radius:12px;font-size:.95rem;opacity:0;transition:all .4s ease;z-index:9999;pointer-events:none}
    .share-toast.show{opacity:1;transform:translateX(-50%) translateY(0)}
</style>
</head>
<body class="bg-gray-50 min-h-screen">

<!-- Toast Notification -->
<div id="shareToast" class="share-toast"><i class="fas fa-check-circle mr-2"></i>Copied to clipboard!</div>

<!-- Hero -->
<section class="bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800 text-white py-12 no-print">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h1 class="text-3xl md:text-4xl font-extrabold mb-3">IELTS Score Calculator</h1>
        <p class="text-blue-100 text-lg max-w-2xl mx-auto">Calculate your IELTS overall band score instantly using official rounding rules. Enter your scores below.</p>
    </div>
</section>

<!-- Main Calculator -->
<section class="max-w-5xl mx-auto px-4 -mt-6 relative z-10 mb-12">
    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10">

        <!-- Reading Mode Toggle -->
        <div class="flex items-center justify-center gap-2 mb-8 no-print">
            <span class="text-sm font-medium text-gray-500">Reading Type:</span>
            <button type="button" id="btnAcademic" onclick="setReadingMode('academic')" class="toggle-btn active px-4 py-2 rounded-lg text-sm font-semibold border border-blue-200">Academic</button>
            <button type="button" id="btnGeneral" onclick="setReadingMode('general')" class="toggle-btn px-4 py-2 rounded-lg text-sm font-semibold border border-gray-200 bg-white text-gray-600">General Training</button>
        </div>

        <!-- Input Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8" id="inputSection">

            <!-- Listening -->
            <div class="module-card bg-gradient-to-br from-blue-50 to-white border border-blue-100 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-blue-100 flex items-center justify-center"><i class="fas fa-headphones text-blue-600"></i></div>
                    <div>
                        <h3 class="font-bold text-gray-800">Listening</h3>
                        <p class="text-xs text-gray-400">Correct answers out of 40</p>
                    </div>
                    <span id="listeningBadge" class="ml-auto text-lg font-extrabold text-blue-700">—</span>
                </div>
                <input type="range" id="listeningInput" min="0" max="40" value="0" class="input-range w-full" oninput="onScoreChange()">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>0</span><span id="listeningVal" class="font-semibold text-gray-600">0</span><span>40</span></div>
            </div>

            <!-- Reading -->
            <div class="module-card bg-gradient-to-br from-green-50 to-white border border-green-100 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-green-100 flex items-center justify-center"><i class="fas fa-book-open text-green-600"></i></div>
                    <div>
                        <h3 class="font-bold text-gray-800">Reading</h3>
                        <p class="text-xs text-gray-400">Correct answers out of 40</p>
                    </div>
                    <span id="readingBadge" class="ml-auto text-lg font-extrabold text-green-700">—</span>
                </div>
                <input type="range" id="readingInput" min="0" max="40" value="0" class="input-range w-full" oninput="onScoreChange()">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>0</span><span id="readingVal" class="font-semibold text-gray-600">0</span><span>40</span></div>
            </div>

            <!-- Writing -->
            <div class="module-card bg-gradient-to-br from-purple-50 to-white border border-purple-100 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-purple-100 flex items-center justify-center"><i class="fas fa-pen-fancy text-purple-600"></i></div>
                    <div>
                        <h3 class="font-bold text-gray-800">Writing</h3>
                        <p class="text-xs text-gray-400">Band score (0 – 9, in 0.5 steps)</p>
                    </div>
                    <span id="writingBadge" class="ml-auto text-lg font-extrabold text-purple-700">—</span>
                </div>
                <input type="range" id="writingInput" min="0" max="18" value="0" step="1" class="input-range w-full" oninput="onScoreChange()">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>0</span><span id="writingVal" class="font-semibold text-gray-600">0</span><span>9</span></div>
            </div>

            <!-- Speaking -->
            <div class="module-card bg-gradient-to-br from-orange-50 to-white border border-orange-100 rounded-xl p-5">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-orange-100 flex items-center justify-center"><i class="fas fa-microphone text-orange-600"></i></div>
                    <div>
                        <h3 class="font-bold text-gray-800">Speaking</h3>
                        <p class="text-xs text-gray-400">Band score (0 – 9, in 0.5 steps)</p>
                    </div>
                    <span id="speakingBadge" class="ml-auto text-lg font-extrabold text-orange-700">—</span>
                </div>
                <input type="range" id="speakingInput" min="0" max="18" value="0" step="1" class="input-range w-full" oninput="onScoreChange()">
                <div class="flex justify-between text-xs text-gray-400 mt-1"><span>0</span><span id="speakingVal" class="font-semibold text-gray-600">0</span><span>9</span></div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex flex-wrap gap-3 justify-center mb-8 no-print">
            <button onclick="resetAll()" class="px-5 py-2.5 rounded-lg bg-gray-100 hover:bg-gray-200 text-gray-600 font-semibold text-sm transition"><i class="fas fa-redo mr-1"></i> Reset</button>
            <button onclick="shareResults()" class="px-5 py-2.5 rounded-lg bg-blue-50 hover:bg-blue-100 text-blue-700 font-semibold text-sm transition"><i class="fas fa-share-alt mr-1"></i> Share</button>
            <button onclick="window.print()" class="px-5 py-2.5 rounded-lg bg-green-50 hover:bg-green-100 text-green-700 font-semibold text-sm transition"><i class="fas fa-print mr-1"></i> Print</button>
        </div>

        <!-- Results Section -->
        <div id="resultsSection" class="fade-in" style="display:none">
            <hr class="mb-8">

            <!-- Overall Band -->
            <div class="text-center mb-8">
                <p class="text-sm font-semibold text-gray-400 uppercase tracking-wider mb-3">Overall Band Score</p>
                <div id="overallCircle" class="band-circle bg-gradient-to-br from-blue-500 to-indigo-600 text-white">—</div>
                <p id="overallDesc" class="mt-3 text-lg font-semibold text-gray-600"></p>
                <p id="overallAvg" class="text-sm text-gray-400 mt-1"></p>
            </div>

            <!-- Module Breakdown -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                <div class="text-center p-4 rounded-xl bg-blue-50">
                    <p class="text-xs font-semibold text-blue-500 uppercase mb-1">Listening</p>
                    <p id="resListening" class="text-2xl font-extrabold text-blue-700">—</p>
                    <div class="w-full bg-blue-100 rounded-full mt-2"><div id="barListening" class="score-bar bg-blue-500" style="width:0%"></div></div>
                </div>
                <div class="text-center p-4 rounded-xl bg-green-50">
                    <p class="text-xs font-semibold text-green-500 uppercase mb-1">Reading</p>
                    <p id="resReading" class="text-2xl font-extrabold text-green-700">—</p>
                    <div class="w-full bg-green-100 rounded-full mt-2"><div id="barReading" class="score-bar bg-green-500" style="width:0%"></div></div>
                </div>
                <div class="text-center p-4 rounded-xl bg-purple-50">
                    <p class="text-xs font-semibold text-purple-500 uppercase mb-1">Writing</p>
                    <p id="resWriting" class="text-2xl font-extrabold text-purple-700">—</p>
                    <div class="w-full bg-purple-100 rounded-full mt-2"><div id="barWriting" class="score-bar bg-purple-500" style="width:0%"></div></div>
                </div>
                <div class="text-center p-4 rounded-xl bg-orange-50">
                    <p class="text-xs font-semibold text-orange-500 uppercase mb-1">Speaking</p>
                    <p id="resSpeaking" class="text-2xl font-extrabold text-orange-700">—</p>
                    <div class="w-full bg-orange-100 rounded-full mt-2"><div id="barSpeaking" class="score-bar bg-orange-500" style="width:0%"></div></div>
                </div>
            </div>

            <!-- Chart -->
            <div class="max-w-lg mx-auto mb-8">
                <canvas id="scoreChart" height="220"></canvas>
            </div>

            <!-- Score Explanation -->
            <div id="explanationCard" class="bg-gray-50 border border-gray-100 rounded-xl p-6 mb-8">
                <h3 class="font-bold text-gray-800 mb-3"><i class="fas fa-info-circle text-blue-500 mr-2"></i>Score Explanation</h3>
                <p id="explanationText" class="text-gray-600 text-sm leading-relaxed"></p>
            </div>
        </div>

        <!-- Target Band Calculator -->
        <div class="no-print">
            <hr class="mb-8">
            <div class="bg-gradient-to-br from-indigo-50 to-white border border-indigo-100 rounded-xl p-6">
                <h3 class="font-bold text-gray-800 mb-1"><i class="fas fa-bullseye text-indigo-500 mr-2"></i>Target Band Calculator</h3>
                <p class="text-sm text-gray-400 mb-4">Find out what scores you need in each module to achieve your target overall band.</p>
                <div class="flex flex-wrap items-end gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-gray-500 mb-1">Target Band</label>
                        <select id="targetBand" class="border border-gray-200 rounded-lg px-4 py-2.5 text-sm font-semibold focus:ring-2 focus:ring-indigo-300 focus:outline-none" onchange="calcTarget()">
                            <option value="">Select</option>
                            <option value="9">9.0</option><option value="8.5">8.5</option><option value="8">8.0</option>
                            <option value="7.5">7.5</option><option value="7" selected>7.0</option><option value="6.5">6.5</option>
                            <option value="6">6.0</option><option value="5.5">5.5</option><option value="5">5.0</option>
                            <option value="4.5">4.5</option><option value="4">4.0</option>
                        </select>
                    </div>
                    <div class="flex-1">
                        <div id="targetResult" class="text-sm text-gray-600"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Print-only Results -->
<div class="print-only max-w-2xl mx-auto px-8 py-6">
    <h2 class="text-2xl font-bold mb-6 text-center">IELTS Score Report</h2>
    <div id="printContent"></div>
    <p class="text-xs text-gray-400 mt-8 text-center">Generated by thiyagi.com/ielts-score-calculator</p>
</div>

<!-- Info Sections -->
<section class="max-w-5xl mx-auto px-4 mb-12 no-print">
    <!-- How It Works -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">How the IELTS Score Calculator Works</h2>
        <div class="grid md:grid-cols-2 gap-6 text-sm text-gray-600 leading-relaxed">
            <div>
                <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-calculator text-blue-500 mr-2"></i>Score Conversion</h3>
                <p>The Listening and Reading sections are scored based on the number of correct answers out of 40. Each raw score maps to a band score using the official IELTS conversion tables. Academic and General Training Reading have separate conversion tables.</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-balance-scale text-green-500 mr-2"></i>Official Rounding</h3>
                <p>IELTS uses a specific rounding system for the overall band. The average of all four modules is calculated, and then: if the decimal is .25 it rounds up to .5, if .75 it rounds up to the next whole number. Scores ending in .0 or .5 remain unchanged.</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-pen text-purple-500 mr-2"></i>Writing &amp; Speaking</h3>
                <p>Writing and Speaking are examiner-assessed and scored in 0.5 increments from 0 to 9. Enter your estimated or actual band score for these modules directly.</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-800 mb-2"><i class="fas fa-bullseye text-orange-500 mr-2"></i>Target Planning</h3>
                <p>Use the Target Band Calculator to reverse-engineer what scores you need. It considers your current input and tells you the minimum required in each remaining module.</p>
            </div>
        </div>
    </div>

    <!-- Conversion Tables -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">IELTS Score Conversion Tables</h2>

        <div class="grid md:grid-cols-3 gap-6">
            <!-- Listening Table -->
            <div>
                <h3 class="font-semibold text-gray-800 mb-3 text-center">Listening</h3>
                <table class="w-full text-sm">
                    <thead><tr class="bg-blue-50"><th class="px-3 py-2 text-left rounded-tl-lg">Correct</th><th class="px-3 py-2 text-right rounded-tr-lg">Band</th></tr></thead>
                    <tbody>
                    <?php foreach($listeningTable as $r): ?>
                        <tr class="border-b border-gray-50">
                            <td class="px-3 py-1.5 text-gray-600"><?php echo $r[0] === $r[1] ? $r[0] : $r[0].'–'.$r[1]; ?></td>
                            <td class="px-3 py-1.5 text-right font-semibold text-gray-800"><?php echo number_format($r[2], 1); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- Academic Reading Table -->
            <div>
                <h3 class="font-semibold text-gray-800 mb-3 text-center">Academic Reading</h3>
                <table class="w-full text-sm">
                    <thead><tr class="bg-green-50"><th class="px-3 py-2 text-left rounded-tl-lg">Correct</th><th class="px-3 py-2 text-right rounded-tr-lg">Band</th></tr></thead>
                    <tbody>
                    <?php foreach($academicReadingTable as $r): ?>
                        <tr class="border-b border-gray-50">
                            <td class="px-3 py-1.5 text-gray-600"><?php echo $r[0] === $r[1] ? $r[0] : $r[0].'–'.$r[1]; ?></td>
                            <td class="px-3 py-1.5 text-right font-semibold text-gray-800"><?php echo number_format($r[2], 1); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <!-- General Training Reading Table -->
            <div>
                <h3 class="font-semibold text-gray-800 mb-3 text-center">General Training Reading</h3>
                <table class="w-full text-sm">
                    <thead><tr class="bg-emerald-50"><th class="px-3 py-2 text-left rounded-tl-lg">Correct</th><th class="px-3 py-2 text-right rounded-tr-lg">Band</th></tr></thead>
                    <tbody>
                    <?php foreach($generalReadingTable as $r): ?>
                        <tr class="border-b border-gray-50">
                            <td class="px-3 py-1.5 text-gray-600"><?php echo $r[0] === $r[1] ? $r[0] : $r[0].'–'.$r[1]; ?></td>
                            <td class="px-3 py-1.5 text-right font-semibold text-gray-800"><?php echo number_format($r[2], 1); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Band Descriptions -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10 mb-8">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">IELTS Band Score Descriptions</h2>
        <div class="grid md:grid-cols-2 gap-3">
            <?php
            $descDetails = [
                9 => 'Complete command of the language. Fully operational with appropriate, accurate and fluent use.',
                8 => 'Fully operational command with only occasional unsystematic inaccuracies. Misunderstandings may occur in unfamiliar situations.',
                7 => 'Operational command with occasional inaccuracies and misunderstandings in some situations. Generally handles complex language well.',
                6 => 'Generally effective command despite some inaccuracies and misunderstandings. Can use and understand fairly complex language.',
                5 => 'Partial command of the language. Copes with overall meaning in most situations though likely to make many mistakes.',
                4 => 'Basic competence limited to familiar situations. Frequent problems in understanding and expression.',
                3 => 'Conveys and understands only general meaning in very familiar situations. Frequent breakdowns in communication.',
                2 => 'No real communication possible except for basic information using isolated words or short formulae.',
                1 => 'Essentially has no ability to use the language beyond possibly a few isolated words.',
            ];
            foreach($descDetails as $band => $detail): ?>
            <div class="flex gap-3 items-start p-3 rounded-lg hover:bg-gray-50 transition">
                <span class="flex-shrink-0 w-12 h-12 rounded-lg bg-blue-50 flex items-center justify-center font-extrabold text-blue-700"><?php echo $band; ?></span>
                <div>
                    <p class="font-semibold text-gray-800 text-sm"><?php echo $bandDescriptions[$band]; ?></p>
                    <p class="text-xs text-gray-400 mt-0.5"><?php echo $detail; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- FAQ -->
    <div class="bg-white rounded-2xl shadow-sm p-6 md:p-10">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Frequently Asked Questions</h2>
        <div class="space-y-4 text-sm">
            <details class="group border border-gray-100 rounded-xl">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl">
                    How is the overall IELTS band score calculated?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600">The overall band score is the average of your four module scores (Listening, Reading, Writing, Speaking). IELTS uses specific rounding: averages ending in .25 round up to .5, and averages ending in .75 round up to the next whole number.</div>
            </details>
            <details class="group border border-gray-100 rounded-xl">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl">
                    What is the difference between Academic and General Training Reading?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600">Academic Reading requires a higher number of correct answers to achieve the same band score as General Training. Academic is designed for university admissions, while General Training is for immigration and workplace purposes.</div>
            </details>
            <details class="group border border-gray-100 rounded-xl">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl">
                    Can I get a 0.5 band score for Writing and Speaking?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600">Yes, Writing and Speaking are scored by examiners in whole and half-band increments (e.g., 5.0, 5.5, 6.0, 6.5). This calculator allows you to enter scores in 0.5 steps for these modules.</div>
            </details>
            <details class="group border border-gray-100 rounded-xl">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl">
                    Is this calculator accurate?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600">This calculator uses the official IELTS conversion tables and rounding rules. However, actual test score conversions may vary slightly between test sessions. Use this as a reliable estimation tool.</div>
            </details>
            <details class="group border border-gray-100 rounded-xl">
                <summary class="flex items-center justify-between cursor-pointer p-4 font-semibold text-gray-800 hover:bg-gray-50 rounded-xl">
                    What IELTS score do I need for immigration or university?
                    <i class="fas fa-chevron-down text-gray-400 group-open:rotate-180 transition-transform"></i>
                </summary>
                <div class="px-4 pb-4 text-gray-600">Requirements vary by institution and country. Most universities require 6.0 – 7.0 overall. Immigration programs like Canada Express Entry typically require CLB 7 (IELTS 6.0 in each module). Always check the specific requirements of your target institution or program.</div>
            </details>
        </div>
    </div>
</section>

<script>
// ============================================================
// Score Conversion Tables (mirrored from PHP)
// ============================================================
const listeningTable = <?php echo json_encode($listeningTable); ?>;
const academicReadingTable = <?php echo json_encode($academicReadingTable); ?>;
const generalReadingTable = <?php echo json_encode($generalReadingTable); ?>;

const bandDescriptions = {
    9:'Expert User',8.5:'Very Good User',8:'Very Good User',7.5:'Good User',
    7:'Good User',6.5:'Competent User',6:'Competent User',5.5:'Modest User',
    5:'Modest User',4.5:'Limited User',4:'Limited User',3.5:'Extremely Limited User',
    3:'Extremely Limited User',2.5:'Intermittent User',2:'Intermittent User',
    1.5:'Non User',1:'Non User',0:'Did Not Attempt'
};

let readingMode = 'academic';
let scoreChart = null;

// ============================================================
// Reading Mode Toggle
// ============================================================
function setReadingMode(mode) {
    readingMode = mode;
    document.getElementById('btnAcademic').classList.toggle('active', mode === 'academic');
    document.getElementById('btnGeneral').classList.toggle('active', mode === 'general');
    if (mode === 'academic') {
        document.getElementById('btnAcademic').className = 'toggle-btn active px-4 py-2 rounded-lg text-sm font-semibold border border-blue-200';
        document.getElementById('btnGeneral').className = 'toggle-btn px-4 py-2 rounded-lg text-sm font-semibold border border-gray-200 bg-white text-gray-600';
    } else {
        document.getElementById('btnGeneral').className = 'toggle-btn active px-4 py-2 rounded-lg text-sm font-semibold border border-blue-200';
        document.getElementById('btnAcademic').className = 'toggle-btn px-4 py-2 rounded-lg text-sm font-semibold border border-gray-200 bg-white text-gray-600';
    }
    onScoreChange();
}

// ============================================================
// Conversion Functions
// ============================================================
function convertRaw(correct, table) {
    for (const row of table) {
        if (correct >= row[0] && correct <= row[1]) return row[2];
    }
    return 0;
}

function ieltsRound(avg) {
    const decimal = avg - Math.floor(avg);
    if (decimal < 0.25) return Math.floor(avg);
    if (decimal >= 0.25 && decimal < 0.75) return Math.floor(avg) + 0.5;
    return Math.ceil(avg);
}

function sliderToBand(val) {
    return parseFloat(val) / 2;
}

// ============================================================
// Main Calculation
// ============================================================
function onScoreChange() {
    const lRaw = parseInt(document.getElementById('listeningInput').value);
    const rRaw = parseInt(document.getElementById('readingInput').value);
    const wSlider = parseInt(document.getElementById('writingInput').value);
    const sSlider = parseInt(document.getElementById('speakingInput').value);

    // Convert
    const lBand = convertRaw(lRaw, listeningTable);
    const rTable = readingMode === 'academic' ? academicReadingTable : generalReadingTable;
    const rBand = convertRaw(rRaw, rTable);
    const wBand = sliderToBand(wSlider);
    const sBand = sliderToBand(sSlider);

    // Update value displays
    document.getElementById('listeningVal').textContent = lRaw;
    document.getElementById('readingVal').textContent = rRaw;
    document.getElementById('writingVal').textContent = wBand.toFixed(1);
    document.getElementById('speakingVal').textContent = sBand.toFixed(1);

    // Update badges
    document.getElementById('listeningBadge').textContent = lBand.toFixed(1);
    document.getElementById('readingBadge').textContent = rBand.toFixed(1);
    document.getElementById('writingBadge').textContent = wBand.toFixed(1);
    document.getElementById('speakingBadge').textContent = sBand.toFixed(1);

    // Check if any score entered
    const anyInput = lRaw > 0 || rRaw > 0 || wSlider > 0 || sSlider > 0;
    document.getElementById('resultsSection').style.display = anyInput ? 'block' : 'none';

    if (!anyInput) return;

    // Overall
    const rawAvg = (lBand + rBand + wBand + sBand) / 4;
    const overall = ieltsRound(rawAvg);

    // Update results
    document.getElementById('overallCircle').textContent = overall.toFixed(1);
    document.getElementById('overallDesc').textContent = bandDescriptions[overall] || '';
    document.getElementById('overallAvg').textContent = 'Raw average: ' + rawAvg.toFixed(2) + ' → Rounded: ' + overall.toFixed(1);

    document.getElementById('resListening').textContent = lBand.toFixed(1);
    document.getElementById('resReading').textContent = rBand.toFixed(1);
    document.getElementById('resWriting').textContent = wBand.toFixed(1);
    document.getElementById('resSpeaking').textContent = sBand.toFixed(1);

    // Progress bars
    document.getElementById('barListening').style.width = (lBand / 9 * 100) + '%';
    document.getElementById('barReading').style.width = (rBand / 9 * 100) + '%';
    document.getElementById('barWriting').style.width = (wBand / 9 * 100) + '%';
    document.getElementById('barSpeaking').style.width = (sBand / 9 * 100) + '%';

    // Explanation
    const strongest = Math.max(lBand, rBand, wBand, sBand);
    const weakest = Math.min(lBand, rBand, wBand, sBand);
    const modules = {Listening: lBand, Reading: rBand, Writing: wBand, Speaking: sBand};
    const strongName = Object.keys(modules).find(k => modules[k] === strongest);
    const weakName = Object.keys(modules).find(k => modules[k] === weakest);

    let explanation = `Your overall IELTS band score is <strong>${overall.toFixed(1)}</strong> (${bandDescriptions[overall] || 'N/A'}). `;
    explanation += `The raw average of your four modules is ${rawAvg.toFixed(2)}, which rounds to ${overall.toFixed(1)} under official IELTS rules. `;
    if (strongest !== weakest) {
        explanation += `Your strongest module is <strong>${strongName}</strong> at ${strongest.toFixed(1)}, `;
        explanation += `while <strong>${weakName}</strong> at ${weakest.toFixed(1)} has the most room for improvement.`;
    } else {
        explanation += `All your module scores are balanced at ${strongest.toFixed(1)}.`;
    }
    document.getElementById('explanationText').innerHTML = explanation;

    // Chart
    updateChart(lBand, rBand, wBand, sBand);

    // Print content
    document.getElementById('printContent').innerHTML = `
        <div style="text-align:center;margin-bottom:24px">
            <div style="font-size:3rem;font-weight:800;color:#2563eb">${overall.toFixed(1)}</div>
            <div style="color:#666">${bandDescriptions[overall] || ''}</div>
        </div>
        <table style="width:100%;border-collapse:collapse;margin-top:16px">
            <tr style="border-bottom:1px solid #e5e7eb"><td style="padding:8px;font-weight:600">Listening</td><td style="padding:8px;text-align:right">${lBand.toFixed(1)}</td></tr>
            <tr style="border-bottom:1px solid #e5e7eb"><td style="padding:8px;font-weight:600">Reading (${readingMode})</td><td style="padding:8px;text-align:right">${rBand.toFixed(1)}</td></tr>
            <tr style="border-bottom:1px solid #e5e7eb"><td style="padding:8px;font-weight:600">Writing</td><td style="padding:8px;text-align:right">${wBand.toFixed(1)}</td></tr>
            <tr style="border-bottom:1px solid #e5e7eb"><td style="padding:8px;font-weight:600">Speaking</td><td style="padding:8px;text-align:right">${sBand.toFixed(1)}</td></tr>
            <tr><td style="padding:8px;font-weight:800">Overall</td><td style="padding:8px;text-align:right;font-weight:800">${overall.toFixed(1)}</td></tr>
        </table>`;

    // Target calc
    calcTarget();
}

// ============================================================
// Chart
// ============================================================
function updateChart(l, r, w, s) {
    const ctx = document.getElementById('scoreChart').getContext('2d');
    const data = {
        labels: ['Listening', 'Reading', 'Writing', 'Speaking'],
        datasets: [{
            label: 'Band Score',
            data: [l, r, w, s],
            backgroundColor: ['rgba(59,130,246,.15)', 'rgba(34,197,94,.15)', 'rgba(168,85,247,.15)', 'rgba(249,115,22,.15)'],
            borderColor: ['#3b82f6', '#22c55e', '#a855f7', '#f97316'],
            borderWidth: 2,
            borderRadius: 8,
            barPercentage: 0.6
        }]
    };
    if (scoreChart) {
        scoreChart.data = data;
        scoreChart.update();
    } else {
        scoreChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: {
                    y: { min: 0, max: 9, ticks: { stepSize: 1 }, grid: { color: '#f1f5f9' } },
                    x: { grid: { display: false } }
                }
            }
        });
    }
}

// ============================================================
// Reset
// ============================================================
function resetAll() {
    document.getElementById('listeningInput').value = 0;
    document.getElementById('readingInput').value = 0;
    document.getElementById('writingInput').value = 0;
    document.getElementById('speakingInput').value = 0;
    document.getElementById('resultsSection').style.display = 'none';
    ['listeningVal','readingVal'].forEach(id => document.getElementById(id).textContent = '0');
    ['writingVal','speakingVal'].forEach(id => document.getElementById(id).textContent = '0');
    ['listeningBadge','readingBadge','writingBadge','speakingBadge'].forEach(id => document.getElementById(id).textContent = '—');
    document.getElementById('targetResult').innerHTML = '';
    if (scoreChart) { scoreChart.destroy(); scoreChart = null; }
}

// ============================================================
// Share
// ============================================================
function shareResults() {
    const l = document.getElementById('resListening').textContent;
    const r = document.getElementById('resReading').textContent;
    const w = document.getElementById('resWriting').textContent;
    const s = document.getElementById('resSpeaking').textContent;
    const o = document.getElementById('overallCircle').textContent;

    if (o === '—') return;

    const text = `My IELTS Score\n` +
        `Listening: ${l}\n` +
        `Reading: ${r}\n` +
        `Writing: ${w}\n` +
        `Speaking: ${s}\n` +
        `Overall Band: ${o}\n` +
        `\nCalculated at thiyagi.com/ielts-score-calculator`;

    if (navigator.share) {
        navigator.share({ title: 'My IELTS Score', text: text }).catch(() => {});
    } else if (navigator.clipboard) {
        navigator.clipboard.writeText(text).then(() => {
            showToast('Copied to clipboard!');
        });
    }
}

function showToast(msg) {
    const t = document.getElementById('shareToast');
    t.innerHTML = '<i class="fas fa-check-circle mr-2"></i>' + msg;
    t.classList.add('show');
    setTimeout(() => t.classList.remove('show'), 2500);
}

// ============================================================
// Target Band Calculator
// ============================================================
function calcTarget() {
    const targetEl = document.getElementById('targetBand');
    const target = parseFloat(targetEl.value);
    const container = document.getElementById('targetResult');

    if (!target) { container.innerHTML = ''; return; }

    const lRaw = parseInt(document.getElementById('listeningInput').value);
    const rRaw = parseInt(document.getElementById('readingInput').value);
    const wSlider = parseInt(document.getElementById('writingInput').value);
    const sSlider = parseInt(document.getElementById('speakingInput').value);

    const lBand = convertRaw(lRaw, listeningTable);
    const rTable = readingMode === 'academic' ? academicReadingTable : generalReadingTable;
    const rBand = convertRaw(rRaw, rTable);
    const wBand = sliderToBand(wSlider);
    const sBand = sliderToBand(sSlider);

    const currentSum = lBand + rBand + wBand + sBand;
    const currentOverall = ieltsRound(currentSum / 4);

    if (currentOverall >= target) {
        container.innerHTML = '<p class="text-green-600 font-semibold mt-2"><i class="fas fa-check-circle mr-1"></i> You already meet or exceed your target band of ' + target.toFixed(1) + '!</p>';
        return;
    }

    // Calculate minimum total needed to achieve target
    // Target X.0 needs sum >= X*4 - 0.99 (after rounding)
    // We find the minimum sum where ieltsRound(sum/4) >= target
    let minSum = target * 4;
    // Adjust: find actual minimum
    for (let s = target * 4 - 2; s <= target * 4 + 2; s += 0.5) {
        if (ieltsRound(s / 4) >= target) { minSum = s; break; }
    }

    const deficit = minSum - currentSum;

    if (deficit <= 0) {
        container.innerHTML = '<p class="text-green-600 font-semibold mt-2"><i class="fas fa-check-circle mr-1"></i> You already meet your target!</p>';
        return;
    }

    // Suggest improvements
    const modules = [
        { name: 'Listening', band: lBand, max: 9 },
        { name: 'Reading', band: rBand, max: 9 },
        { name: 'Writing', band: wBand, max: 9 },
        { name: 'Speaking', band: sBand, max: 9 }
    ];

    // Sort by lowest score first (most room for improvement)
    modules.sort((a, b) => a.band - b.band);

    let remaining = deficit;
    const suggestions = [];
    for (const m of modules) {
        if (remaining <= 0) break;
        const room = m.max - m.band;
        const increase = Math.min(room, remaining);
        if (increase > 0) {
            suggestions.push(`<strong>${m.name}</strong>: ${m.band.toFixed(1)} → ${(m.band + increase).toFixed(1)} (+${increase.toFixed(1)})`);
            remaining -= increase;
        }
    }

    let html = `<div class="mt-3 p-3 bg-indigo-50 rounded-lg">`;
    html += `<p class="font-semibold text-indigo-800 mb-2">To reach band ${target.toFixed(1)}, you need +${deficit.toFixed(1)} total points. Suggested improvements:</p>`;
    html += `<ul class="space-y-1 text-indigo-700">`;
    for (const s of suggestions) html += `<li><i class="fas fa-arrow-up text-xs mr-1"></i>${s}</li>`;
    html += `</ul></div>`;

    container.innerHTML = html;
}
</script>

<?php include 'footer.php';?>
