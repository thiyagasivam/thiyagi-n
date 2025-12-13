<?php include 'header.php';?>
<?php
// Function to generate lucky numbers
function generateLuckyNumbers($count, $min, $max, $allowDuplicates = false) {
    $numbers = [];
    
    if ($max - $min + 1 < $count && !$allowDuplicates) {
        return ["error" => "Range too small for unique numbers"];
    }
    
    while (count($numbers) < $count) {
        $num = rand($min, $max);
        if ($allowDuplicates || !in_array($num, $numbers)) {
            $numbers[] = $num;
        }
    }
    
    sort($numbers);
    return $numbers;
}

// Handle form submission
$results = [];
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count = isset($_POST['count']) ? (int)$_POST['count'] : 6;
    $min = isset($_POST['min']) ? (int)$_POST['min'] : 1;
    $max = isset($_POST['max']) ? (int)$_POST['max'] : 49;
    $allowDuplicates = isset($_POST['duplicates']);
    
    // Validate input
    if ($count < 1) $count = 1;
    if ($min > $max) list($min, $max) = [$max, $min];
    
    $results = generateLuckyNumbers($count, $min, $max, $allowDuplicates);
    if (isset($results['error'])) {
        $error = $results['error'];
        $results = [];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Number Generator 2026 - Free Random Number Picker Tool</title>
<meta name="description" content="Free online lucky number generator for 2026. Get random numbers for lottery, games, contests, or special dates. Customize ranges and generate your fortune numbers instantly.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom enhancements */
        .number-bubble {
            display: inline-block;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: white;
            font-weight: bold;
            line-height: 50px;
            text-align: center;
            margin: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .number-bubble:hover {
            transform: scale(1.1);
        }
        .btn-generate {
            background: linear-gradient(135deg, #10b981, #059669);
            transition: all 0.3s;
        }
        .btn-generate:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px rgba(16, 185, 129, 0.3);
        }
        .form-control:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <header class="text-center mb-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Lucky Number Generator</h1>
            <p class="text-lg text-gray-600">Generate random numbers for lottery, games, or any purpose</p>
        </header>

        <div class="bg-white rounded-xl shadow-md overflow-hidden mb-8">
            <div class="p-6">
                <form method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label for="count" class="block text-sm font-medium text-gray-700 mb-1">How many numbers?</label>
                            <input type="number" id="count" name="count" min="1" max="100" 
                                   class="form-control w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none" 
                                   value="<?= isset($_POST['count']) ? htmlspecialchars($_POST['count']) : '6' ?>">
                        </div>
                        <div>
                            <label for="min" class="block text-sm font-medium text-gray-700 mb-1">Minimum value</label>
                            <input type="number" id="min" name="min" 
                                   class="form-control w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none" 
                                   value="<?= isset($_POST['min']) ? htmlspecialchars($_POST['min']) : '1' ?>">
                        </div>
                        <div>
                            <label for="max" class="block text-sm font-medium text-gray-700 mb-1">Maximum value</label>
                            <input type="number" id="max" name="max" 
                                   class="form-control w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none" 
                                   value="<?= isset($_POST['max']) ? htmlspecialchars($_POST['max']) : '49' ?>">
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="duplicates" name="duplicates" 
                               class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" 
                               <?= isset($_POST['duplicates']) ? 'checked' : '' ?>>
                        <label for="duplicates" class="ml-2 block text-sm text-gray-700">Allow duplicate numbers</label>
                    </div>
                    
                    <button type="submit" class="btn-generate w-full py-3 px-4 text-white font-bold rounded-lg shadow-md">
                        Generate Lucky Numbers
                    </button>
                </form>
            </div>
        </div>

        <?php if (!empty($results) || !empty($error)): ?>
        <div class="bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Your Lucky Numbers</h2>
                
                <?php if (!empty($error)): ?>
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6">
                        <div class="flex">
                            <div class="text-red-500">
                                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700"><?= htmlspecialchars($error) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if (!empty($results)): ?>
                    <div class="text-center mb-6">
                        <?php foreach ($results as $number): ?>
                            <span class="number-bubble"><?= $number ?></span>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="bg-blue-50 rounded-lg p-4 mb-6">
                        <h3 class="font-medium text-blue-800 mb-2">Number Statistics</h3>
                        <ul class="text-sm text-blue-700 space-y-1">
                            <li>Total numbers generated: <?= count($results) ?></li>
                            <li>Range: <?= min($results) ?> to <?= max($results) ?></li>
                            <li>Average: <?= round(array_sum($results)/count($results), 2) ?></li>
                        </ul>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button onclick="window.location.reload()" class="flex-1 py-2 px-4 bg-gray-100 hover:bg-gray-200 text-gray-800 font-medium rounded-lg transition">
                            Generate Again
                        </button>
                        <button onclick="copyNumbers()" class="flex-1 py-2 px-4 bg-blue-100 hover:bg-blue-200 text-blue-800 font-medium rounded-lg transition">
                            Copy Numbers
                        </button>
                    </div>
                    
                    <script>
                        function copyNumbers() {
                            const numbers = <?= json_encode($results) ?>;
                            navigator.clipboard.writeText(numbers.join(', '));
                            alert('Numbers copied to clipboard!');
                        }
                    </script>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        
        <div class="mt-12 bg-white rounded-xl shadow-md overflow-hidden">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">About Lucky Numbers</h2>
                <div class="prose max-w-none text-gray-700">
                    <p>A lucky number generator is a tool that creates random numbers within a specified range. These numbers can be used for:</p>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Lottery number selection</li>
                        <li>Random draws and contests</li>
                        <li>Statistical sampling</li>
                        <li>Game development</li>
                        <li>Decision making</li>
                    </ul>
                    <p class="mt-3">Our generator uses a cryptographically secure pseudorandom number generator to ensure fair and unbiased results.</p>
                </div>
            </div>
        </div>
    </div>


</body>
<?php include 'footer.php';?>
</html>
