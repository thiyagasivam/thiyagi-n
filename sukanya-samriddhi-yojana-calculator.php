<?php include 'header.php';?>

<?php
// Function to calculate SSY returns
function calculateSSY($principal, $years, $currentRate = 8.2) {
    $results = [];
    $balance = 0;
    
    for ($year = 1; $year <= $years; $year++) {
        // Add annual contribution at the beginning of each year
        $balance += $principal;
        
        // Calculate interest for the year
        $interest = $balance * ($currentRate / 100);
        $balance += $interest;
        
        // Store yearly results
        $results[] = [
            'year' => $year,
            'principal' => $principal * $year,
            'interest' => $interest,
            'balance' => $balance
        ];
    }
    
    return $results;
}

// Handle form submission
$results = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $principal = filter_input(INPUT_POST, 'principal', FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT, [
        'options' => ['min_range' => 1, 'max_range' => 21]
    ]);
    
    if ($principal && $principal >= 250 && $principal <= 150000 && $years) {
        $results = calculateSSY($principal, $years);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukanya Samriddhi Yojana Calculator - Calculate SSY Returns Online</title>
    <meta name="description" content="Free online Sukanya Samriddhi Yojana calculator to estimate returns on your SSY investments. Calculate maturity amount, interest earned and yearly growth.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .result-table {
            width: 100%;
            border-collapse: collapse;
        }
        .result-table th, .result-table td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        .result-table th {
            background-color: #f7fafc;
            font-weight: 600;
        }
        .highlight-box {
            background-color: #f0f9ff;
            border-left: 4px solid #3b82f6;
        }
        @media (max-width: 640px) {
            .result-table th, .result-table td {
                padding: 0.5rem;
                font-size: 0.875rem;
            }
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Header Section -->
            <div class="bg-blue-600 px-6 py-4">
                <h1 class="text-2xl md:text-3xl font-bold text-white">Sukanya Samriddhi Yojana Calculator</h1>
                <p class="text-blue-100 mt-1">Calculate returns on your SSY investment</p>
            </div>
            
            <!-- Calculator Form -->
            <div class="p-6">
                <form method="POST" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="principal" class="block text-sm font-medium text-gray-700 mb-1">
                                Yearly Investment (₹)
                            </label>
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">₹</span>
                                </div>
                                <input type="number" id="principal" name="principal" min="250" max="150000" step="100"
                                    class="block w-full pl-8 pr-12 py-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500"
                                    placeholder="e.g. 10000" required>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500">/year</span>
                                </div>
                            </div>
                            <p class="mt-1 text-xs text-gray-500">Min ₹250 - Max ₹1.5 lakh</p>
                        </div>
                        
                        <div>
                            <label for="years" class="block text-sm font-medium text-gray-700 mb-1">
                                Investment Period (Years)
                            </label>
                            <select id="years" name="years" 
                                class="block w-full py-3 px-4 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                                <option value="">Select years</option>
                                <?php for ($i = 1; $i <= 21; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?> year<?php echo $i > 1 ? 's' : ''; ?></option>
                                <?php endfor; ?>
                            </select>
                            <p class="mt-1 text-xs text-gray-500">Max 21 years (until girl child turns 21)</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
                        <div class="bg-gray-50 p-4 rounded-md">
                            <div class="font-medium text-gray-700">Current Interest Rate</div>
                            <div class="text-2xl font-bold text-blue-600">8.2%</div>
                            <div class="text-xs text-gray-500">FY 2023-24</div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-md">
                            <div class="font-medium text-gray-700">Min. Investment</div>
                            <div class="text-2xl font-bold text-blue-600">₹250</div>
                            <div class="text-xs text-gray-500">Per year</div>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-md">
                            <div class="font-medium text-gray-700">Max. Investment</div>
                            <div class="text-2xl font-bold text-blue-600">₹1.5 Lakh</div>
                            <div class="text-xs text-gray-500">Per year</div>
                        </div>
                    </div>
                    
                    <div class="pt-2">
                        <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-md transition duration-300">
                            Calculate Returns
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Results Section -->
            <?php if (!empty($results)): ?>
                <div class="border-t border-gray-200 px-6 py-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Projected Returns</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="highlight-box p-4 rounded-md">
                            <div class="text-sm text-gray-600">Total Invested</div>
                            <div class="text-2xl font-bold text-gray-800">
                                ₹<?php echo number_format($principal * $years); ?>
                            </div>
                        </div>
                        <div class="highlight-box p-4 rounded-md">
                            <div class="text-sm text-gray-600">Estimated Maturity Value</div>
                            <div class="text-2xl font-bold text-gray-800">
                                ₹<?php echo number_format(end($results)['balance']); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="result-table">
                            <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Invested</th>
                                    <th>Interest</th>
                                    <th>Balance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($results as $result): ?>
                                    <tr>
                                        <td><?php echo $result['year']; ?></td>
                                        <td>₹<?php echo number_format($result['principal']); ?></td>
                                        <td>₹<?php echo number_format($result['interest']); ?></td>
                                        <td>₹<?php echo number_format($result['balance']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Information Section -->
            <div class="border-t border-gray-200 px-6 py-4 bg-gray-50">
                <h2 class="text-xl font-bold text-gray-800 mb-3">About Sukanya Samriddhi Yojana</h2>
                <div class="prose prose-sm text-gray-700">
                    <p>Sukanya Samriddhi Yojana (SSY) is a government-backed savings scheme for girl children in India. Key features:</p>
                    <ul class="list-disc pl-5 space-y-1">
                        <li>Available for girl children below 10 years of age</li>
                        <li>Account matures when the girl turns 21</li>
                        <li>Current interest rate: 8.2% (compounded annually)</li>
                        <li>Tax benefits under Section 80C of Income Tax Act</li>
                        <li>Minimum deposit: ₹250 per year</li>
                        <li>Maximum deposit: ₹1.5 lakh per year</li>
                    </ul>
                    <p class="mt-3">The interest rate is reviewed by the government every quarter.</p>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include 'footer.php';?>


</html>
