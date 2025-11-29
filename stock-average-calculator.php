<?php include 'header.php';?>
<?php
// Stock Average Calculator Logic
function calculateAverage($transactions) {
    $totalShares = 0;
    $totalCost = 0;

    foreach ($transactions as $transaction) {
        $totalShares += $transaction['shares'];
        $totalCost += $transaction['shares'] * $transaction['price'];
    }

    if ($totalShares > 0) {
        $averagePrice = $totalCost / $totalShares;
        return [
            'average_price' => round($averagePrice, 2),
            'total_shares' => $totalShares,
            'total_investment' => round($totalCost, 2)
        ];
    }

    return null;
}

// Initialize variables
$results = null;
$transactions = [];

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process each transaction
    for ($i = 1; $i <= 5; $i++) {
        if (!empty($_POST["shares_$i"]) && !empty($_POST["price_$i"])) {
            $transactions[] = [
                'shares' => (float)$_POST["shares_$i"],
                'price' => (float)$_POST["price_$i"]
            ];
        }
    }

    if (!empty($transactions)) {
        $results = calculateAverage($transactions);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Average Calculator</title>
    <meta name="description" content="Calculate your average stock purchase price with our free stock average calculator.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #00d09c;
            --secondary-color: #f5f7fa;
        }
        .calculator-container {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        .calculator-header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem;
            border-radius: 10px 10px 0 0;
        }
        .transaction-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
            align-items: center;
        }
        .result-card {
            background-color: var(--secondary-color);
            border-radius: 8px;
            padding: 1.5rem;
            margin-top: 1.5rem;
        }
        .result-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }
        @media (max-width: 768px) {
            .transaction-row {
                flex-direction: column;
                gap: 8px;
            }
            .transaction-row input {
                width: 100%;
            }
        }
        .add-btn {
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
        .remove-btn {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }
    </style>

</head>
<body class="bg-gray-100">
    <div class="calculator-container">
        <div class="calculator-header">
            <h1 class="text-2xl font-bold mb-1">Stock Average Calculator</h1>
            <p class="text-sm">Calculate your average purchase price for stocks</p>
        </div>

        <div class="p-6">
            <form method="POST" id="calculator-form">
                <h2 class="text-lg font-medium mb-4">Enter Your Transactions</h2>
                
                <div id="transactions-container">
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="transaction-row" id="transaction-<?= $i ?>">
                        <div class="flex-grow">
                            <label for="shares_<?= $i ?>" class="block mb-2 text-sm font-medium">Quantity (Shares)</label>
                            <input type="number" step="0.01" min="0" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="shares_<?= $i ?>" name="shares_<?= $i ?>" placeholder="100" value="<?= isset($_POST["shares_$i"]) ? htmlspecialchars($_POST["shares_$i"]) : '' ?>">
                        </div>
                        <div class="flex-grow">
                            <label for="price_<?= $i ?>" class="block mb-2 text-sm font-medium">Purchase Price (₹)</label>
                            <input type="number" step="0.01" min="0" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="price_<?= $i ?>" name="price_<?= $i ?>" placeholder="150.50" value="<?= isset($_POST["price_$i"]) ? htmlspecialchars($_POST["price_$i"]) : '' ?>">
                        </div>
                        <?php if ($i > 1): ?>
                        <button type="button" class="remove-btn" onclick="removeTransaction(<?= $i ?>)">Remove</button>
                        <?php endif; ?>
                    </div>
                    <?php endfor; ?>
                </div>

                <div class="flex justify-between mt-4">
                    <button type="button" id="add-transaction" class="add-btn">+ Add Transaction</button>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-300">
                        Calculate Average Price
                    </button>
                </div>
            </form>

            <?php if ($results): ?>
            <div class="result-card">
                <h3 class="text-lg font-medium mb-4">Your Average Stock Price</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="text-center mb-4 md:mb-0">
                        <p class="mb-1 text-sm text-gray-600">Average Price</p>
                        <p class="result-value">₹<?= number_format($results['average_price'], 2) ?></p>
                    </div>
                    <div class="text-center mb-4 md:mb-0">
                        <p class="mb-1 text-sm text-gray-600">Total Shares</p>
                        <p class="result-value"><?= number_format($results['total_shares']) ?></p>
                    </div>
                    <div class="text-center mb-4 md:mb-0">
                        <p class="mb-1 text-sm text-gray-600">Total Investment</p>
                        <p class="result-value">₹<?= number_format($results['total_investment'], 2) ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <div class="mt-8 pt-6 border-t border-gray-200">
                <h3 class="text-lg font-medium mb-3">How to Use This Calculator</h3>
                <ol class="list-decimal pl-5 space-y-2 text-sm text-gray-700">
                    <li>Enter each stock purchase with quantity and price</li>
                    <li>Click "Calculate Average Price"</li>
                    <li>View your average purchase price and total investment</li>
                </ol>
                
                <h3 class="text-lg font-medium mt-6 mb-3">About Stock Average Calculator</h3>
                <p class="text-sm text-gray-700 mb-2">
                    The stock average calculator helps you determine the average price you've paid for a stock across multiple purchases. 
                    This is useful when you've bought shares of a company at different prices and want to know your overall cost basis.
                </p>
                <p class="text-sm text-gray-700">
                    The formula used is: <strong>Average Price = Total Investment Amount / Total Quantity</strong>
                </p>
            </div>
        </div>
    </div>

    <script>
        let transactionCount = 5;
        
        document.getElementById('add-transaction').addEventListener('click', function() {
            transactionCount++;
            const container = document.getElementById('transactions-container');
            
            const newTransaction = document.createElement('div');
            newTransaction.className = 'transaction-row';
            newTransaction.id = `transaction-${transactionCount}`;
            
            newTransaction.innerHTML = `
                <div class="flex-grow">
                    <label for="shares_${transactionCount}" class="block mb-2 text-sm font-medium">Quantity (Shares)</label>
                    <input type="number" step="0.01" min="0" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="shares_${transactionCount}" name="shares_${transactionCount}" placeholder="100">
                </div>
                <div class="flex-grow">
                    <label for="price_${transactionCount}" class="block mb-2 text-sm font-medium">Purchase Price (₹)</label>
                    <input type="number" step="0.01" min="0" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="price_${transactionCount}" name="price_${transactionCount}" placeholder="150.50">
                </div>
                <button type="button" class="remove-btn" onclick="removeTransaction(${transactionCount})">Remove</button>
            `;
            
            container.appendChild(newTransaction);
        });
        
        function removeTransaction(id) {
            const element = document.getElementById(`transaction-${id}`);
            if (element) {
                element.remove();
            }
        }
    </script>
    <?php include 'footer.php';?>
</body>
</html>
