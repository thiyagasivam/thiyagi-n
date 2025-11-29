<?php include 'header.php'; ?>

<?php
// List of all 50 US states with abbreviations
$us_states = [
    'Alabama' => 'AL',
    'Alaska' => 'AK',
    'Arizona' => 'AZ',
    'Arkansas' => 'AR',
    'California' => 'CA',
    'Colorado' => 'CO',
    'Connecticut' => 'CT',
    'Delaware' => 'DE',
    'Florida' => 'FL',
    'Georgia' => 'GA',
    'Hawaii' => 'HI',
    'Idaho' => 'ID',
    'Illinois' => 'IL',
    'Indiana' => 'IN',
    'Iowa' => 'IA',
    'Kansas' => 'KS',
    'Kentucky' => 'KY',
    'Louisiana' => 'LA',
    'Maine' => 'ME',
    'Maryland' => 'MD',
    'Massachusetts' => 'MA',
    'Michigan' => 'MI',
    'Minnesota' => 'MN',
    'Mississippi' => 'MS',
    'Missouri' => 'MO',
    'Montana' => 'MT',
    'Nebraska' => 'NE',
    'Nevada' => 'NV',
    'New Hampshire' => 'NH',
    'New Jersey' => 'NJ',
    'New Mexico' => 'NM',
    'New York' => 'NY',
    'North Carolina' => 'NC',
    'North Dakota' => 'ND',
    'Ohio' => 'OH',
    'Oklahoma' => 'OK',
    'Oregon' => 'OR',
    'Pennsylvania' => 'PA',
    'Rhode Island' => 'RI',
    'South Carolina' => 'SC',
    'South Dakota' => 'SD',
    'Tennessee' => 'TN',
    'Texas' => 'TX',
    'Utah' => 'UT',
    'Vermont' => 'VT',
    'Virginia' => 'VA',
    'Washington' => 'WA',
    'West Virginia' => 'WV',
    'Wisconsin' => 'WI',
    'Wyoming' => 'WY'
];

// Sort states alphabetically
ksort($us_states);

// Handle form submission for filtering
$filtered_states = $us_states;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $search_term = strtolower(trim($_POST['search'] ?? ''));
    if (!empty($search_term)) {
        $filtered_states = array_filter($us_states, function($state) use ($search_term) {
            return strpos(strtolower($state), $search_term) !== false;
        });
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>50 US States in Alphabetical Order - Complete List</title>
    <meta name="description" content="Complete list of all 50 US states in alphabetical order with state abbreviations. Perfect for reference and educational purposes.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles */
        .state-card {
            transition: all 0.2s ease;
        }
        .state-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        .state-flag {
            height: 24px;
            width: auto;
            margin-right: 8px;
            border: 1px solid #e2e8f0;
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">50 US States in Alphabetical Order</h1>
            <p class="text-lg text-gray-600">Complete list with state abbreviations and flags</p>
        </header>

        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <form method="POST" class="flex flex-col md:flex-row gap-4">
                <input type="text" name="search" placeholder="Search states..." 
                       class="flex-grow px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                       value="<?= htmlspecialchars($_POST['search'] ?? '') ?>">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg transition duration-200">
                    Search
                </button>
                <a href="?" class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2 rounded-lg transition duration-200 text-center">
                    Reset
                </a>
            </form>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <?php foreach ($filtered_states as $state => $abbr): ?>
                <div class="state-card bg-white rounded-lg shadow p-4 flex items-center">
                    <img src="https://flagcdn.com/24x18/us-<?= strtolower($abbr) ?>.png" 
                         alt="<?= $state ?> flag" 
                         class="state-flag" 
                         loading="lazy">
                    <div>
                        <h3 class="font-semibold text-gray-800"><?= $state ?></h3>
                        <p class="text-sm text-gray-500"><?= $abbr ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <?php if (empty($filtered_states)): ?>
            <div class="bg-white rounded-lg shadow p-8 text-center">
                <p class="text-gray-600">No states found matching your search.</p>
            </div>
        <?php endif; ?>

        <div class="mt-12 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">About the US States</h2>
            <p class="text-gray-700 mb-4">
                The United States of America is a federal republic consisting of 50 states, a federal district (Washington, D.C.), 
                five major territories, and various minor islands. Each state has its own constitution, government, and laws.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">Key Facts:</h3>
                    <ul class="list-disc pl-5 text-gray-700">
                        <li>Oldest state: Delaware (ratified Constitution December 7, 1787)</li>
                        <li>Newest states: Alaska and Hawaii (both admitted in 1959)</li>
                        <li>Largest state by area: Alaska</li>
                        <li>Smallest state by area: Rhode Island</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">State Abbreviations:</h3>
                    <p class="text-gray-700">
                        The two-letter state abbreviations were standardized by the US Postal Service in 1963. 
                        They're widely used in addresses, data processing, and other official contexts.
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>
   <?php include 'footer.php'; ?>

</html>
