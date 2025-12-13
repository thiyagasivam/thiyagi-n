<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
$wbsedcl_slabs = [
    ['min' => 0, 'max' => 100, 'rate' => 5.50],
    ['min' => 101, 'max' => 300, 'rate' => 6.50],
    ['min' => 301, 'max' => 500, 'rate' => 7.50],
    ['min' => 501, 'max' => 800, 'rate' => 8.00],
    ['min' => 801, 'max' => 1000, 'rate' => 9.00],
    ['min' => 1001, 'max' => PHP_INT_MAX, 'rate' => 10.00]
];
$cesc_slabs = [
    ['min' => 0, 'max' => 100, 'rate' => 5.75],
    ['min' => 101, 'max' => 300, 'rate' => 6.75],
    ['min' => 301, 'max' => 500, 'rate' => 7.75],
    ['min' => 501, 'max' => 800, 'rate' => 8.25],
    ['min' => 801, 'max' => 1000, 'rate' => 9.25],
    ['min' => 1001, 'max' => PHP_INT_MAX, 'rate' => 10.25]
];
$units = isset($_POST['units']) ? (int)$_POST['units'] : 0;
$provider = isset($_POST['provider']) ? $_POST['provider'] : 'wbsedcl';
$slabs = ($provider === 'cesc') ? $cesc_slabs : $wbsedcl_slabs;
$breakdown = [];
$total = 0;
if ($units > 0) {
    $remaining = $units;
    foreach ($slabs as $slab) {
        if ($remaining <= 0) break;
        $slab_min = $slab['min'];
        $slab_max = $slab['max'];
        $slab_rate = $slab['rate'];
        // Correctly calculate units in this slab
        $slab_units = min($remaining, $slab_max - $slab_min + 1);
        if ($slab_min > 0) { // Adjust for non-zero starting slabs
             $slab_units = min($remaining, $slab_max - $slab_min + 1);
        } else {
             $slab_units = min($remaining, $slab_max);
        }
        // More robust calculation
        $slab_consumed = 0;
        if ($remaining > 0) {
            $start_unit = $slab_min;
            $end_unit = $slab_max == PHP_INT_MAX ? $slab_min + $remaining - 1 : min($slab_max, $slab_min + $remaining - 1);
            if ($end_unit >= $start_unit) {
                $slab_consumed = $end_unit - $start_unit + 1;
                $slab_cost = $slab_consumed * $slab_rate;
                $total += $slab_cost;
                $breakdown[] = [
                    'range' => ($start_unit == 0 ? '0' : $start_unit) . ' - ' . ($slab_max == PHP_INT_MAX ? 'Above' : $slab_max),
                    'units' => $slab_consumed,
                    'rate' => $slab_rate,
                    'cost' => $slab_cost
                ];
                 $remaining -= $slab_consumed;
            }
        }


    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WBSEDCL / CESC Bill Calculator - 2026</title>
    <meta name="description" content="Calculate your WBSEDCL and CESC electricity bill in West Bengal.">
    <link rel="canonical" href="https://www.thiyagi.com/electricity-board/wbsedcl-bill-calculator">

    <script src="https://cdn.tailwindcss.com"></script>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>
</head>
<body class="bg-gray-100">
<div class="container mx-auto py-10 px-4 max-w-4xl">
    <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">West Bengal Electricity Bill Calculator 2026</h1>
    <form method="post" class="mb-10 bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <label for="provider" class="block text-gray-700 text-sm font-bold mb-2">Electricity Provider</label>
            <select id="provider" name="provider" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="wbsedcl" <?= $provider === 'wbsedcl' ? 'selected' : '' ?>>WBSEDCL</option>
                <option value="cesc" <?= $provider === 'cesc' ? 'selected' : '' ?>>CESC Ltd</option>
            </select>
        </div>
        <div class="mb-4">
            <label for="units" class="block text-gray-700 text-sm font-bold mb-2">Units Consumed (kWh)</label>
            <input type="number" id="units" name="units" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" min="0" value="<?= htmlspecialchars($units) ?>" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Calculate Bill</button>
    </form>
    <?php if ($units > 0): ?>
    <div class="bg-white shadow-md rounded-lg mb-6 overflow-hidden">
        <div class="px-6 py-4">
            <h5 class="text-xl font-semibold mb-4 text-gray-800">Bill Summary</h5>
            <p class="text-gray-700"><strong>Provider:</strong> <?= strtoupper(htmlspecialchars($provider)) ?></p>
            <p class="text-gray-700"><strong>Total Units Consumed:</strong> <?= $units ?> kWh</p>
            <p class="text-blue-600 font-bold text-lg"><strong>Total Estimated Bill:</strong> ₹<?= number_format($total, 2) ?></p>
        </div>
    </div>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Slab Range</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Units</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rate (₹/kWh)</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cost (₹)</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <?php foreach ($breakdown as $item): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= htmlspecialchars($item['range']) ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item['units'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item['rate'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= number_format($item['cost'], 2) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <p class="text-gray-500 mt-4 text-sm">* This is an estimated bill based on 2026 rates. Actual bill may include additional charges.</p>
    <?php endif; ?>
</div>

<!-- State Electricity Bill Calculators Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Indian State Electricity Bill Calculators</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <?php
        $calculators = [
            ["Bihar", "https://www.thiyagi.com/electricity-board/bihar-electricity-bill-calculator"],
            ["Goa", "https://www.thiyagi.com/electricity-board/goa-electricity-bill-calculator"],
            ["Delhi", "https://www.thiyagi.com/electricity-board/delhi-electricity-bill-calculator"],
            ["Himachal Pradesh", "https://www.thiyagi.com/electricity-board/hpsebl-electricity-bill-calculator"],
            ["Kerala", "https://www.thiyagi.com/electricity-board/kseb-bill-calculator"],
            ["Uttar Pradesh", "https://www.thiyagi.com/electricity-board/uppcl-bill-calculator"],
            ["Karnataka", "https://www.thiyagi.com/electricity-board/karnataka-electricity-bill-calculator"],
            ["Haryana", "https://www.thiyagi.com/electricity-board/haryana-electricity-bill-calculator"],
            ["Nagaland", "https://www.thiyagi.com/electricity-board/nagaland-electricity-bill-calculator"],
            ["Jharkhand", "https://www.thiyagi.com/electricity-board/jbvnl-electricity-bill-calculator"],
            ["Uttarakhand", "https://www.thiyagi.com/electricity-board/upcl-electricity-bill-calculator-uttarakhand"],
            ["Assam", "https://www.thiyagi.com/electricity-board/apdcl-electricity-bill-calculator"],
            ["Andaman", "https://www.thiyagi.com/electricity-board/andaman-electricity-bill-calculator"],
            ["Ladakh", "https://www.thiyagi.com/electricity-board/ladakh-electricity-bill-calculator"],
            ["West Bengal", "https://www.thiyagi.com/electricity-board/wbsedcl-bill-calculator"],
            ["Tripura", "https://www.thiyagi.com/electricity-board/tsecl-electricity-bill-calculator"],
            ["Telangana", "https://www.thiyagi.com/electricity-board/tsspdcl-electricity-bill-calculator"],
            ["Tamil Nadu", "https://www.thiyagi.com/electricity-board/tneb-electricity-bill-calculator"],
            ["Manipur", "https://www.thiyagi.com/electricity-board/manipur-electricity-bill-calculator"],
            ["Chhattisgarh", "https://www.thiyagi.com/electricity-board/cspdcl-electricity-bill-calculator"],
            ["Madhya Pradesh", "https://www.thiyagi.com/electricity-board/mp-electricity-bill-calculator"],
            ["Punjab", "https://www.thiyagi.com/electricity-board/pspcl-bill-calculator"],
            ["Sikkim", "https://www.thiyagi.com/electricity-board/sikkim-electricity-bill-calculator"],
            ["Odisha", "https://www.thiyagi.com/electricity-board/odisha-electricity-bill-calculator"],
            ["Rajasthan", "https://www.thiyagi.com/electricity-board/rajasthan-electricity-bill-calculator"],
            ["Gujarat", "https://www.thiyagi.com/electricity-board/gujarat-electricity-bill-calculator"],
            ["Meghalaya", "https://www.thiyagi.com/electricity-board/meghalaya-electricity-bill-calculator"],
            ["Andhra Pradesh", "https://www.thiyagi.com/electricity-board/apspdcl-electricity-bill-calculator"],
            ["Jammu & Kashmir", "https://www.thiyagi.com/electricity-board/jpdcl-electricity-bill-calculator-kashmir"],
            ["Mizoram", "https://www.thiyagi.com/electricity-board/mizoram-electricity-bill-calculator"]
        ];

        foreach ($calculators as $calc) {
            echo '<div class="bg-white overflow-hidden shadow rounded-lg hover:shadow-lg transition-shadow duration-300 ease-in-out">';
            echo '<div class="px-4 py-5 sm:p-6">';
            echo '<h3 class="text-lg leading-6 font-medium text-gray-900 mb-2">' . htmlspecialchars($calc[0]) . '</h3>';
            echo '<a href="' . htmlspecialchars($calc[1]) . '" target="_blank" class="inline-block bg-blue-500 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded transition duration-150 ease-in-out">Calculate Bill</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</div>

</body>
<?php include '../footer.php';?>
</html>