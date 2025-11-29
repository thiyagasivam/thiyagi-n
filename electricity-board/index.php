<?php include '../header.php';?>
<?php include 'breadcrumb-schema.php';?>
<?php
$items = [
    [
        'title' => 'Andaman Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/andaman-electricity-bill-calculator',
        'description' => 'Andaman & Nicobar power calculator',
        'icon' => '🏝️'
    ],
    [
        'title' => 'Andhra Pradesh APSPDCL',
        'url' => 'https://www.thiyagi.com/electricity-board/apspdcl-electricity-bill-calculator',
        'description' => 'AP Southern Discom calculator',
        'icon' => '🏛️'
    ],
    [
        'title' => 'Assam APDCL',
        'url' => 'https://www.thiyagi.com/electricity-board/apdcl-electricity-bill-calculator',
        'description' => 'Assam power bill calculator',
        'icon' => '🌿'
    ],
    [
        'title' => 'Bihar Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/bihar-electricity-bill-calculator',
        'description' => 'Bihar state electricity calculator',
        'icon' => '⚡'
    ],
    [
        'title' => 'Chhattisgarh CSPDCL',
        'url' => 'https://www.thiyagi.com/electricity-board/cspdcl-electricity-bill-calculator',
        'description' => 'CG power consumption calculator',
        'icon' => '🌳'
    ],
    [
        'title' => 'Delhi Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/delhi-electricity-bill-calculator',
        'description' => 'Calculate Delhi electricity charges',
        'icon' => '🏙️'
    ],
    [
        'title' => 'Goa Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/goa-electricity-bill-calculator',
        'description' => 'Goa power consumption calculator',
        'icon' => '🏖️'
    ],
    [
        'title' => 'Gujarat Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/gujarat-electricity-bill-calculator',
        'description' => 'Gujarat electricity calculator',
        'icon' => '🛕'
    ],
    [
        'title' => 'Haryana Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/haryana-electricity-bill-calculator',
        'description' => 'HR electricity charges',
        'icon' => '🌾'
    ],
    [
        'title' => 'Himachal HPSEBL',
        'url' => 'https://www.thiyagi.com/electricity-board/hpsebl-electricity-bill-calculator',
        'description' => 'HP electricity bill estimator',
        'icon' => '⛰️'
    ],
    [
        'title' => 'Jammu & Kashmir JPDCL',
        'url' => 'https://www.thiyagi.com/electricity-board/jpdcl-electricity-bill-calculator-kashmir',
        'description' => 'JK power bill calculator',
        'icon' => '🏔️'
    ],
    [
        'title' => 'Jharkhand JBVNL',
        'url' => 'https://www.thiyagi.com/electricity-board/jbvnl-electricity-bill-calculator',
        'description' => 'JH electricity calculator',
        'icon' => '⛏️'
    ],
    [
        'title' => 'Karnataka Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/karnataka-electricity-bill-calculator',
        'description' => 'KA power bill calculator',
        'icon' => '🕌'
    ],
    [
        'title' => 'Kerala KSEB',
        'url' => 'https://www.thiyagi.com/electricity-board/kerala-kseb-calculator',
        'description' => 'KL electricity bill calculator',
        'icon' => '🌴'
    ],
    [
        'title' => 'Ladakh Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/ladakh-electricity-bill-calculator',
        'description' => 'Ladakh power calculator',
        'icon' => '🏔️'
    ],
    [
        'title' => 'Madhya Pradesh',
        'url' => 'https://www.thiyagi.com/electricity-board/mp-electricity-bill-calculator',
        'description' => 'MP electricity charges',
        'icon' => '🕌'
    ],
    [
        'title' => 'Maharashtra MSEDCL',
        'url' => 'https://www.thiyagi.com/electricity-board/maharashtra-msedcl-calculator',
        'description' => 'MH power consumption calculator',
        'icon' => '🌉'
    ],
    [
        'title' => 'Manipur Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/manipur-electricity-bill-calculator',
        'description' => 'MN power bill calculator',
        'icon' => '🌸'
    ],
    [
        'title' => 'Meghalaya Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/meghalaya-electricity-bill-calculator',
        'description' => 'ML electricity calculator',
        'icon' => '☁️'
    ],
    [
        'title' => 'Mizoram Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/mizoram-electricity-bill-calculator',
        'description' => 'MZ power calculator',
        'icon' => '⛰️'
    ],
    [
        'title' => 'Nagaland Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/nagaland-electricity-bill-calculator',
        'description' => 'NL electricity charges',
        'icon' => '🌄'
    ],
    [
        'title' => 'Odisha Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/odisha-electricity-bill-calculator',
        'description' => 'OD power bill calculator',
        'icon' => '🏛️'
    ],
    [
        'title' => 'Punjab PSPCL',
        'url' => 'https://www.thiyagi.com/electricity-board/pspcl-bill-calculator',
        'description' => 'PB electricity bill estimator',
        'icon' => '🌾'
    ],
    [
        'title' => 'Rajasthan Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/rajasthan-electricity-bill-calculator',
        'description' => 'RJ power calculator',
        'icon' => '🏜️'
    ],
    [
        'title' => 'Sikkim Electricity',
        'url' => 'https://www.thiyagi.com/electricity-board/sikkim-electricity-bill-calculator',
        'description' => 'SK electricity charges',
        'icon' => '⛰️'
    ],
    [
        'title' => 'Tamil Nadu TNEB',
        'url' => 'https://www.thiyagi.com/electricity-board/tneb-electricity-bill-calculator',
        'description' => 'TN electricity estimator',
        'icon' => '🏛️'
    ],
    [
        'title' => 'Telangana TSSPDCL',
        'url' => 'https://www.thiyagi.com/electricity-board/tsspdcl-electricity-bill-calculator',
        'description' => 'TS power bill calculator',
        'icon' => '🕌'
    ],
    [
        'title' => 'Tripura TSECL',
        'url' => 'https://www.thiyagi.com/electricity-board/tsecl-electricity-bill-calculator',
        'description' => 'TR electricity calculator',
        'icon' => '🌿'
    ],
    [
        'title' => 'Uttar Pradesh UPPCL',
        'url' => 'https://www.thiyagi.com/electricity-board/uppcl-bill-calculator',
        'description' => 'UP power bill calculator',
        'icon' => '🕌'
    ],
    [
        'title' => 'Uttarakhand UPCL',
        'url' => 'https://www.thiyagi.com/electricity-board/upcl-electricity-bill-calculator-uttarakhand',
        'description' => 'UK electricity charges',
        'icon' => '⛰️'
    ],
    [
        'title' => 'West Bengal WBSEDCL',
        'url' => 'https://www.thiyagi.com/electricity-board/wbsedcl-bill-calculator',
        'description' => 'WB power calculator',
        'icon' => '🎭'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All India Electricity Bill Calculators | State-wise</title>
    <meta name="description" content="Calculate electricity bills for all Indian states and UTs - accurate, fast and easy to use">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .btn-hover:hover {
            background-color: #2563eb;
            transform: translateY(-1px);
        }
    </style>

</head>
<body class="bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="mb-10 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3">
                <i class="fas fa-bolt text-blue-500 mr-2"></i> All India Electricity Calculators
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Select your state/UT to calculate monthly electricity charges
            </p>

            <div class="mt-6 relative max-w-md mx-auto">
                <input type="text" placeholder="Search your state..." 
                       class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                       id="searchInput">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>
        </header>

        <main>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="stateGrid">
                <?php foreach ($items as $item): ?>
                    <div class="bg-white rounded-xl overflow-hidden border border-gray-200 transition-all duration-300 card-hover state-card">
                        <div class="p-6 flex flex-col h-full">
                            <div class="flex items-center mb-4">
                                <span class="text-3xl mr-3"><?php echo $item['icon']; ?></span>
                                <h2 class="text-xl font-semibold text-gray-800"><?php echo htmlspecialchars($item['title']); ?></h2>
                            </div>
                            <p class="text-gray-600 mb-5 flex-grow"><?php echo htmlspecialchars($item['description']); ?></p>
                            <a href="<?php echo htmlspecialchars($item['url']); ?>" 
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-blue-500 text-white font-medium rounded-lg transition-all duration-200 btn-hover">
                                Calculate Now
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </main>

        <footer class="mt-16 text-center">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h3 class="text-lg font-medium text-gray-800 mb-3">Need Help?</h3>
                <p class="text-gray-600 mb-4 max-w-2xl mx-auto">
                    These calculators estimate bills based on your state's tariff rates. For exact amounts, check your electricity provider.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="https://www.thiyagi.com/contact" class="inline-flex items-center px-5 py-2 border border-blue-500 text-blue-500 rounded-lg hover:bg-blue-50 transition-colors">
                        <i class="fas fa-envelope mr-2"></i> Contact
                    </a>
                    <a href="#" class="inline-flex items-center px-5 py-2 border border-green-500 text-green-500 rounded-lg hover:bg-green-50 transition-colors">
                        <i class="fas fa-file-invoice-dollar mr-2"></i> Rate Charts
                    </a>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Simple search functionality
        document.getElementById('searchInput').addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const cards = document.querySelectorAll('.state-card');
            
            cards.forEach(card => {
                const title = card.querySelector('h2').textContent.toLowerCase();
                const description = card.querySelector('p').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</body>
<?php include '../footer.php';?>
</html>