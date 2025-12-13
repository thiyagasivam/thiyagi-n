<?php include '../header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "All Banks Two Wheeler Loan EMI Calculator 2026 - Compare Interest Rates | Thiyagi.com"; ?></title>
  <meta name="description" content="<?php echo "Compare two-wheeler loan EMI calculators from all major banks, NBFCs, and fintech companies. Get current 2026 interest rates, eligibility criteria, and calculate EMI for bikes and scooters from 50+ lenders."; ?>">
  <meta name="keywords" content="<?php echo "two wheeler loan calculator all banks, bike loan comparison, scooter loan interest rates 2026, EMI calculator banks, NBFC vehicle loan, fintech two wheeler loans"; ?>">
  <link rel="canonical" href="<?php echo "https://www.thiyagi.com/calculators/all-banks-two-wheeler-loan-calculators"; ?>">
  <link href="https://www.thiyagi.com/nt.png" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1381776395680802" crossorigin="anonymous"></script>
  <meta name="google-adsense-account" content="ca-pub-1381776395680802">
  
  <!-- Clarity tracking code for https://www.thiyagi.com/ -->
  <script>
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "su9bgvyyjw");
  </script>
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-5PGTVJ1CV1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-5PGTVJ1CV1');
  </script>
</head>
<body>



<?php
// All available lenders categorized for two-wheeler loans
$lenders = [
    'Private Banks' => [
        'hdfc-bank' => ['name' => 'HDFC Bank', 'rate' => '9.50% - 20.00%'],
        'icici-bank' => ['name' => 'ICICI Bank', 'rate' => '9.75% - 18.00%'],
        'axis-bank' => ['name' => 'Axis Bank', 'rate' => '10.00% - 19.00%'],
        'kotak-mahindra-bank' => ['name' => 'Kotak Mahindra Bank', 'rate' => '9.99% - 17.00%'],
        'yes-bank' => ['name' => 'YES Bank', 'rate' => '10.50% - 16.00%'],
        'bandhan-bank' => ['name' => 'Bandhan Bank', 'rate' => '11.00% - 20.00%'],
        'csb-bank' => ['name' => 'CSB Bank', 'rate' => '10.75% - 19.00%'],
        'city-union-bank' => ['name' => 'City Union Bank', 'rate' => '11.50% - 20.00%'],
        'dcb-bank' => ['name' => 'DCB Bank', 'rate' => '12.00% - 22.00%'],
        'dhanlaxmi-bank' => ['name' => 'Dhanlaxmi Bank', 'rate' => '11.75% - 21.50%'],
        'federal-bank' => ['name' => 'Federal Bank', 'rate' => '10.25% - 18.00%'],
        'indusind-bank' => ['name' => 'IndusInd Bank', 'rate' => '10.00% - 19.00%'],
        'idfc-first-bank' => ['name' => 'IDFC FIRST Bank', 'rate' => '9.50% - 17.50%'],
        'karnataka-bank' => ['name' => 'Karnataka Bank', 'rate' => '11.00% - 19.50%'],
        'karur-vysya-bank' => ['name' => 'Karur Vysya Bank', 'rate' => '11.25% - 20.50%'],
        'nainital-bank' => ['name' => 'Nainital Bank', 'rate' => '12.00% - 22.00%'],
        'rbl-bank' => ['name' => 'RBL Bank', 'rate' => '11.50% - 21.00%'],
        'south-indian-bank' => ['name' => 'South Indian Bank', 'rate' => '11.75% - 21.00%'],
        'tamilnad-mercantile-bank' => ['name' => 'Tamilnad Mercantile Bank', 'rate' => '12.50% - 22.50%'],
        'idbi-bank' => ['name' => 'IDBI Bank', 'rate' => '10.50% - 18.50%'],
        'jammu-kashmir-bank' => ['name' => 'Jammu & Kashmir Bank', 'rate' => '10.75% - 18.50%'],
        'catholic-syrian-bank' => ['name' => 'Catholic Syrian Bank', 'rate' => '11.25% - 19.00%']
    ],
    'Local Area Banks' => [
        'coastal-lab' => ['name' => 'Coastal Local Area Bank', 'rate' => '11.50% - 18.00%'],
        'krishna-bhima-lab' => ['name' => 'Krishna Bhima Samruddhi LAB', 'rate' => '12.00% - 19.00%']
    ],
    'Public Sector Banks' => [
        'state-bank-of-india' => ['name' => 'State Bank of India (SBI)', 'rate' => '10.00% - 16.00%'],
        'punjab-national-bank' => ['name' => 'Punjab National Bank', 'rate' => '10.50% - 17.00%'],
        'bank-of-baroda' => ['name' => 'Bank of Baroda', 'rate' => '10.25% - 16.50%'],
        'bank-of-india' => ['name' => 'Bank of India', 'rate' => '11.00% - 17.50%'],
        'bank-of-maharashtra' => ['name' => 'Bank of Maharashtra', 'rate' => '11.50% - 18.00%'],
        'canara-bank' => ['name' => 'Canara Bank', 'rate' => '10.75% - 17.25%'],
        'central-bank-of-india' => ['name' => 'Central Bank of India', 'rate' => '11.25% - 18.25%'],
        'indian-bank' => ['name' => 'Indian Bank', 'rate' => '10.50% - 16.75%'],
        'indian-overseas-bank' => ['name' => 'Indian Overseas Bank', 'rate' => '11.00% - 18.00%'],
        'punjab-sind-bank' => ['name' => 'Punjab & Sind Bank', 'rate' => '11.75% - 19.00%'],
        'uco-bank' => ['name' => 'UCO Bank', 'rate' => '11.50% - 18.50%'],
        'union-bank-of-india' => ['name' => 'Union Bank of India', 'rate' => '10.80% - 17.50%']
    ],
    'Small Finance Banks' => [
        'au-small-finance-bank' => ['name' => 'AU Small Finance Bank', 'rate' => '11.00% - 22.00%'],
        'equitas-small-finance-bank' => ['name' => 'Equitas Small Finance Bank', 'rate' => '10.99% - 21.00%'],
        'ujjivan-small-finance-bank' => ['name' => 'Ujjivan Small Finance Bank', 'rate' => '12.00% - 20.00%'],
        'capital-small-finance-bank' => ['name' => 'Capital Small Finance Bank', 'rate' => '12.50% - 23.00%'],
        'esaf-small-finance-bank' => ['name' => 'ESAF Small Finance Bank', 'rate' => '13.00% - 22.00%'],
        'suryoday-small-finance-bank' => ['name' => 'Suryoday Small Finance Bank', 'rate' => '12.25% - 21.00%'],
        'utkarsh-small-finance-bank' => ['name' => 'Utkarsh Small Finance Bank', 'rate' => '13.50% - 24.00%'],
        'jana-small-finance-bank' => ['name' => 'Jana Small Finance Bank', 'rate' => '12.75% - 22.50%'],
        'slice-small-finance-bank' => ['name' => 'slice Small Finance Bank', 'rate' => '12.50% - 21.00%'],
        'shivalik-small-finance-bank' => ['name' => 'Shivalik Small Finance Bank', 'rate' => '13.25% - 23.50%'],
        'unity-small-finance-bank' => ['name' => 'Unity Small Finance Bank', 'rate' => '12.90% - 22.50%'],
        'north-east-small-finance-bank' => ['name' => 'North East Small Finance Bank', 'rate' => '12.75% - 21.00%'],
        'fincare-small-finance-bank' => ['name' => 'Fincare Small Finance Bank', 'rate' => '13.00% - 23.00%'],
        'poorvanchal-bank' => ['name' => 'Poorvanchal Bank', 'rate' => '12.50% - 21.50%']
    ],
    'NBFCs' => [
        'bajaj-finserv' => ['name' => 'Bajaj Finserv', 'rate' => '11.00% - 25.00%'],
        'tata-capital' => ['name' => 'Tata Capital', 'rate' => '10.50% - 18.00%'],
        'mahindra-finance' => ['name' => 'Mahindra Finance', 'rate' => '12.00% - 20.00%'],
        'l-t-finance' => ['name' => 'L&T Finance', 'rate' => '11.50% - 19.00%'],
        'shriram-finance' => ['name' => 'Shriram Finance', 'rate' => '13.00% - 22.00%'],
        'muthoot-finance' => ['name' => 'Muthoot Finance', 'rate' => '14.00% - 24.00%'],
        'indiabulls-housing-finance' => ['name' => 'Indiabulls Housing Finance', 'rate' => '12.50% - 20.00%'],
        'pnb-housing-finance' => ['name' => 'PNB Housing Finance', 'rate' => '11.75% - 19.50%'],
        'hdfc-ltd' => ['name' => 'HDFC Ltd', 'rate' => '10.25% - 17.50%'],
        'lic-housing-finance' => ['name' => 'LIC Housing Finance', 'rate' => '11.00% - 18.75%'],
        'aditya-birla-finance' => ['name' => 'Aditya Birla Finance Limited', 'rate' => '11.50% - 23.00%'],
        'bajaj-finance-ltd' => ['name' => 'Bajaj Finance Ltd.', 'rate' => '10.99% - 25.00%'],
        'cholamandalam-investment' => ['name' => 'Cholamandalam Investment and Finance Company Limited', 'rate' => '11.75% - 23.50%'],
        'hdb-financial-services' => ['name' => 'HDB Financial Services Limited', 'rate' => '12.00% - 24.00%'],
        'lt-finance-limited' => ['name' => 'L&T Finance Limited', 'rate' => '11.25% - 22.00%'],
        'mahindra-mahindra-financial' => ['name' => 'Mahindra & Mahindra Financial Services Ltd', 'rate' => '11.50% - 23.00%'],
        'muthoot-finance-limited' => ['name' => 'Muthoot Finance Limited', 'rate' => '12.50% - 25.00%'],
        'sammaan-capital-limited' => ['name' => 'Sammaan Capital Limited (Formerly Indiabulls Housing Finance Limited)', 'rate' => '11.00% - 21.00%'],
        'shriram-finance-limited' => ['name' => 'Shriram Finance Limited', 'rate' => '12.00% - 24.00%'],
        'tata-capital-limited' => ['name' => 'Tata Capital Limited', 'rate' => '11.00% - 22.00%'],
        'tata-sons-private' => ['name' => 'Tata Sons Private Limited', 'rate' => '10.50% - 20.00%'],
        '360-one-prime' => ['name' => '360 ONE Prime Limited', 'rate' => '10.75% - 19.00%'],
        'power-finance-corporation' => ['name' => 'Power Finance Corporation (PFC)', 'rate' => '9.50% - 15.00%'],
        'rec-limited' => ['name' => 'REC Limited', 'rate' => '9.75% - 15.50%'],
        'indian-railway-finance-corp' => ['name' => 'Indian Railway Finance Corporation (IRFC)', 'rate' => '9.00% - 14.00%'],
        'hudco' => ['name' => 'Housing and Urban Development Corporation (HUDCO)', 'rate' => '8.50% - 13.00%'],
        'canfin-homes' => ['name' => 'Canfin Homes', 'rate' => '10.00% - 16.50%'],
        'dewan-housing-finance' => ['name' => 'Dewan Housing Finance', 'rate' => '11.50% - 18.00%'],
        'indiabulls-commercial-credit' => ['name' => 'Indiabulls Commercial Credit', 'rate' => '12.50% - 20.00%'],
        'reliance-home-finance' => ['name' => 'Reliance Home Finance', 'rate' => '11.00% - 17.50%']
    ],
    'Fintech Companies' => [
        'zestmoney' => ['name' => 'ZestMoney', 'rate' => '12.00% - 36.00%'],
        'kissht' => ['name' => 'Kissht', 'rate' => '14.00% - 36.00%'],
        'creditbee' => ['name' => 'CreditBee', 'rate' => '15.00% - 36.00%'],
        'moneyview' => ['name' => 'MoneyView', 'rate' => '13.00% - 36.00%'],
        'lendingkart' => ['name' => 'LendingKart', 'rate' => '14.00% - 30.00%'],
        'nira' => ['name' => 'Nira', 'rate' => '12.00% - 42.00%'],
        'flexsalary' => ['name' => 'FlexSalary', 'rate' => '16.00% - 36.00%'],
        'smartcoin' => ['name' => 'SmartCoin', 'rate' => '11.99% - 47.88%'],
        'cashbean' => ['name' => 'CashBean', 'rate' => '12.00% - 36.00%'],
        'incred' => ['name' => 'InCred', 'rate' => '11.49% - 24.00%'],
        'moneytap' => ['name' => 'MoneyTap', 'rate' => '13.00% - 36.00%'],
        'prefr' => ['name' => 'Prefr', 'rate' => '12.00% - 30.00%'],
        'fairmoney' => ['name' => 'FairMoney', 'rate' => '14.00% - 36.00%'],
        'earlysalary' => ['name' => 'EarlySalary', 'rate' => '24.00% - 36.00%'],
        'payme' => ['name' => 'PayMe', 'rate' => '18.00% - 36.00%'],
        'upwards' => ['name' => 'Upwards', 'rate' => '14.00% - 36.00%'],
        'oxyzo' => ['name' => 'Oxyzo', 'rate' => '12.00% - 30.00%'],
        'credflow' => ['name' => 'CredFlow', 'rate' => '11.00% - 24.00%'],
        'rupifi' => ['name' => 'Rupifi', 'rate' => '12.00% - 36.00%'],
        'capfloat' => ['name' => 'CapFloat', 'rate' => '12.00% - 36.00%'],
        'finzy' => ['name' => 'Finzy', 'rate' => '15.00% - 36.00%'],
        'kreditbee' => ['name' => 'KreditBee', 'rate' => '14.00% - 29.95%'],
        'money-club' => ['name' => 'Money Club', 'rate' => '0.00% - 24.00%'],
        'ring' => ['name' => 'Ring', 'rate' => '18.00% - 36.00%'],
        'lazypay' => ['name' => 'LazyPay', 'rate' => '20.00% - 36.00%']
    ]
];
?>

<!-- Header Section -->
<div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-12">
  <div class="container mx-auto px-4">
    <div class="text-center">
      <div class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-full mb-4">
        <i class="fas fa-motorcycle text-2xl"></i>
      </div>
      <h1 class="text-4xl md:text-5xl font-bold mb-4">All Banks Two Wheeler Loan EMI Calculator 2026</h1>
      <p class="text-xl opacity-90 max-w-3xl mx-auto">Compare two-wheeler loan EMI calculators from 189+ banks, NBFCs, and fintech companies. Find the best bike & scooter loan rates for 2026</p>
    </div>
  </div>
</div>

<div class="container mx-auto px-4 py-8">
  <!-- Quick Stats -->
  <div class="grid md:grid-cols-4 gap-6 mb-12">
    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
      <div class="text-3xl font-bold text-blue-600 mb-2">189+</div>
      <div class="text-gray-600">Total Lenders</div>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
      <div class="text-3xl font-bold text-green-600 mb-2">8.50%</div>
      <div class="text-gray-600">Lowest Rate*</div>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
      <div class="text-3xl font-bold text-purple-600 mb-2">7 Years</div>
      <div class="text-gray-600">Max Tenure</div>
    </div>
    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
      <div class="text-3xl font-bold text-orange-600 mb-2">₹5L</div>
      <div class="text-gray-600">Max Amount*</div>
    </div>
  </div>

  <!-- General Calculator Link -->
  <div class="mb-8">
    <div class="bg-gradient-to-r from-green-500 to-teal-600 rounded-2xl p-6 text-white text-center">
      <h2 class="text-2xl font-bold mb-3">
        <i class="fas fa-calculator mr-3"></i>
        General Two Wheeler Loan EMI Calculator
      </h2>
      <p class="mb-4 opacity-90">Calculate EMI without selecting a specific bank or lender</p>
      <a href="/calculators/two-wheeler-loan-emi-calculator" 
         class="inline-block bg-white text-green-600 font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors duration-300">
        Calculate EMI Now
      </a>
    </div>
  </div>

  <!-- Search and Filter Section -->
  <div class="mb-8">
    <div class="bg-white rounded-xl shadow-lg p-6">
      <div class="flex flex-col md:flex-row gap-4 items-center">
        <div class="flex-1">
          <input type="text" id="searchInput" placeholder="Search banks, NBFCs, or fintech companies..." 
                 class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>
        <div class="flex gap-2">
          <select id="typeFilter" class="px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
            <option value="">All Types</option>
            <option value="Private Banks">Private Banks</option>
            <option value="Public Sector Banks">Public Sector Banks</option>
            <option value="Small Finance Banks">Small Finance Banks</option>
            <option value="NBFCs">NBFCs</option>
            <option value="Fintech Companies">Fintech Companies</option>
            <option value="Local Area Banks">Local Area Banks</option>
          </select>
          <button onclick="clearFilters()" class="px-6 py-3 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
            Clear
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Lenders Grid -->
  <?php foreach ($lenders as $category => $categoryLenders): ?>
  <div class="lender-category mb-12" data-category="<?php echo $category; ?>">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
      <i class="fas fa-<?php 
        echo $category === 'Private Banks' ? 'university' : 
             ($category === 'Public Sector Banks' ? 'landmark' : 
             ($category === 'Small Finance Banks' ? 'building' : 
             ($category === 'NBFCs' ? 'briefcase' : 
             ($category === 'Fintech Companies' ? 'laptop' : 'bank'))));
      ?> text-blue-600 mr-3"></i>
      <?php echo $category; ?> (<?php echo count($categoryLenders); ?>)
    </h2>
    
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($categoryLenders as $slug => $lender): ?>
      <div class="lender-card bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-6" 
           data-name="<?php echo strtolower($lender['name']); ?>" 
           data-type="<?php echo $category; ?>">
        <div class="flex justify-between items-start mb-4">
          <h3 class="font-bold text-lg text-gray-800"><?php echo $lender['name']; ?></h3>
          <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">
            <?php echo $category === 'Private Banks' ? 'Private' : 
                     ($category === 'Public Sector Banks' ? 'PSU' : 
                     ($category === 'Small Finance Banks' ? 'SFB' : 
                     ($category === 'NBFCs' ? 'NBFC' : 
                     ($category === 'Fintech Companies' ? 'Fintech' : 'LAB')))); ?>
          </span>
        </div>
        
        <div class="mb-4">
          <div class="flex items-center text-sm text-gray-600 mb-2">
            <i class="fas fa-percentage text-green-500 mr-2"></i>
            <span class="font-medium">Interest Rate:</span>
          </div>
          <div class="text-xl font-bold text-green-600"><?php echo $lender['rate']; ?></div>
        </div>
        
        <div class="flex gap-3">
          <a href="/calculators/<?php echo $slug; ?>-two-wheeler-loan-emi-calculator" 
             class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 text-white text-center py-3 px-4 rounded-lg hover:from-blue-700 hover:to-blue-800 transition-all duration-300 text-sm font-semibold shadow-lg hover:shadow-xl transform hover:scale-105">
            <i class="fas fa-motorcycle mr-2"></i>Get Bike Loan EMI
          </a>
          <button onclick="toggleDetails('<?php echo $slug; ?>')" 
                  class="px-4 py-3 border-2 border-blue-600 text-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300 font-semibold">
            <i class="fas fa-info-circle"></i>
          </button>
        </div>
        
        <!-- Hidden details section -->
        <div id="details-<?php echo $slug; ?>" class="hidden mt-4 pt-4 border-t border-gray-200">
          <div class="text-sm text-gray-600 space-y-2">
            <div><strong>Type:</strong> <?php echo $category; ?></div>
            <div><strong>Features:</strong> Quick processing, competitive rates</div>
            <div><strong>Tenure:</strong> Up to 7 years</div>
            <?php if ($category === 'Fintech Companies'): ?>
            <div class="text-orange-600"><strong>Note:</strong> Digital-first approach, may have higher rates</div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
  <?php endforeach; ?>

  <!-- No Results Message -->
  <div id="noResults" class="hidden text-center py-12">
    <div class="text-gray-500 text-xl mb-4">No lenders found matching your criteria</div>
    <button onclick="clearFilters()" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
      Clear Filters
    </button>
  </div>

  <!-- SEO Content Section -->
  <div class="mt-16 bg-white rounded-2xl shadow-xl p-8">
    <div class="prose max-w-none">
      <h2 class="text-3xl font-bold text-gray-800 mb-6">Two Wheeler Loan Comparison Guide 2026</h2>
      
      <div class="grid md:grid-cols-3 gap-8 mb-8">
        <div class="text-center p-6 bg-gradient-to-b from-blue-50 to-blue-100 rounded-xl">
          <i class="fas fa-search text-blue-600 text-3xl mb-4"></i>
          <h3 class="font-semibold text-gray-800 mb-2">Compare Rates</h3>
          <p class="text-gray-600 text-sm">Compare interest rates from 189+ lenders to find the best deal for your bike or scooter loan.</p>
        </div>
        <div class="text-center p-6 bg-gradient-to-b from-green-50 to-green-100 rounded-xl">
          <i class="fas fa-calculator text-green-600 text-3xl mb-4"></i>
          <h3 class="font-semibold text-gray-800 mb-2">Calculate EMI</h3>
          <p class="text-gray-600 text-sm">Get instant EMI calculations with detailed amortization schedules and payment breakdowns.</p>
        </div>
        <div class="text-center p-6 bg-gradient-to-b from-purple-50 to-purple-100 rounded-xl">
          <i class="fas fa-check-circle text-purple-600 text-3xl mb-4"></i>
          <h3 class="font-semibold text-gray-800 mb-2">Apply Online</h3>
          <p class="text-gray-600 text-sm">Direct links to apply for two-wheeler loans with minimal documentation and quick approval.</p>
        </div>
      </div>

      <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-xl p-6 mb-8">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Key Features to Compare</h3>
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <h4 class="font-medium text-gray-800 mb-2">Interest Rates & Charges</h4>
            <ul class="space-y-1 text-sm text-gray-600">
              <li>• Annual interest rate (8.50% to 47.88%)</li>
              <li>• Processing fees and documentation charges</li>
              <li>• Prepayment penalties and charges</li>
              <li>• Late payment fees and bounce charges</li>
            </ul>
          </div>
          <div>
            <h4 class="font-medium text-gray-800 mb-2">Loan Terms & Eligibility</h4>
            <ul class="space-y-1 text-sm text-gray-600">
              <li>• Maximum loan amount (up to ₹5 lakhs)</li>
              <li>• Repayment tenure (6 to 84 months)</li>
              <li>• Age criteria and income requirements</li>
              <li>• Credit score requirements</li>
            </ul>
          </div>
        </div>
      </div>

      <h3 class="text-2xl font-semibold text-gray-800 mb-4">Types of Lenders</h3>
      <div class="grid md:grid-cols-2 gap-8 mb-8">
        <div>
          <h4 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
            <i class="fas fa-university text-blue-600 mr-2"></i>
            Banks (Public & Private)
          </h4>
          <p class="text-gray-600 mb-3">
            Traditional banks offer reliable two-wheeler loans with competitive rates ranging from 8.50% to 22%. 
            They provide structured repayment options and established customer service networks.
          </p>
          <div class="text-sm text-gray-500">
            <strong>Best for:</strong> Borrowers seeking traditional banking relationships and competitive rates.
          </div>
        </div>
        
        <div>
          <h4 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
            <i class="fas fa-briefcase text-green-600 mr-2"></i>
            NBFCs (Non-Banking Financial Companies)
          </h4>
          <p class="text-gray-600 mb-3">
            NBFCs specialize in vehicle financing with flexible eligibility criteria and quick processing. 
            Interest rates typically range from 9.00% to 25%, with faster approval processes.
          </p>
          <div class="text-sm text-gray-500">
            <strong>Best for:</strong> Quick approvals and flexible documentation requirements.
          </div>
        </div>
        
        <div>
          <h4 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
            <i class="fas fa-laptop text-purple-600 mr-2"></i>
            Fintech Companies
          </h4>
          <p class="text-gray-600 mb-3">
            Digital-first fintech lenders offer instant approvals and minimal documentation. 
            Rates vary widely from 11% to 47.88%, with technology-driven underwriting processes.
          </p>
          <div class="text-sm text-gray-500">
            <strong>Best for:</strong> Tech-savvy borrowers seeking instant digital approvals.
          </div>
        </div>
        
        <div>
          <h4 class="text-lg font-semibold text-gray-800 mb-3 flex items-center">
            <i class="fas fa-building text-orange-600 mr-2"></i>
            Small Finance Banks
          </h4>
          <p class="text-gray-600 mb-3">
            Small finance banks focus on inclusive lending with competitive rates from 10.99% to 24%. 
            They often serve underbanked segments with flexible policies.
          </p>
          <div class="text-sm text-gray-500">
            <strong>Best for:</strong> Borrowers seeking inclusive lending policies and personalized service.
          </div>
        </div>
      </div>

      <h3 class="text-2xl font-semibold text-gray-800 mb-4">Frequently Asked Questions</h3>
      <div class="space-y-6">
        <div class="border-l-4 border-blue-400 pl-6">
          <h4 class="font-semibold text-gray-800 mb-2">What is the best interest rate for two-wheeler loans in 2026?</h4>
          <p class="text-gray-600">The best rates start from 8.50% for government NBFCs like HUDCO, while private banks typically offer rates between 9.50% to 20%. Your credit score and income significantly impact the rate offered.</p>
        </div>
        
        <div class="border-l-4 border-green-400 pl-6">
          <h4 class="font-semibold text-gray-800 mb-2">How do I choose the best lender for my two-wheeler loan?</h4>
          <p class="text-gray-600">Consider interest rates, processing fees, prepayment charges, loan tenure, and customer service. Use our comparison tool to evaluate multiple lenders and choose based on your specific requirements.</p>
        </div>
        
        <div class="border-l-4 border-purple-400 pl-6">
          <h4 class="font-semibold text-gray-800 mb-2">What documents are typically required for two-wheeler loans?</h4>
          <p class="text-gray-600">Common documents include identity proof, address proof, income proof (salary slips/ITR), bank statements, and vehicle quotation. Fintech companies may require fewer documents for digital processing.</p>
        </div>
        
        <div class="border-l-4 border-orange-400 pl-6">
          <h4 class="font-semibold text-gray-800 mb-2">Can I get a two-wheeler loan with a low credit score?</h4>
          <p class="text-gray-600">Yes, some NBFCs and small finance banks offer two-wheeler loans with relaxed credit score requirements. However, expect higher interest rates and may need to provide additional documentation or guarantors.</p>
        </div>
        
        <div class="border-l-4 border-red-400 pl-6">
          <h4 class="font-semibold text-gray-800 mb-2">Is it better to choose a bank or fintech company for two-wheeler loans?</h4>
          <p class="text-gray-600">Banks typically offer lower interest rates and established customer service, while fintech companies provide faster approvals and digital convenience. Choose based on your priority - lower cost or faster processing.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
// Search and filter functionality
function setupSearchAndFilter() {
  const searchInput = document.getElementById('searchInput');
  const typeFilter = document.getElementById('typeFilter');
  
  function filterLenders() {
    const searchTerm = searchInput.value.toLowerCase();
    const selectedType = typeFilter.value;
    const lenderCards = document.querySelectorAll('.lender-card');
    const categories = document.querySelectorAll('.lender-category');
    let visibleCount = 0;
    
    categories.forEach(category => {
      const categoryType = category.dataset.category;
      let categoryVisible = false;
      
      if (!selectedType || selectedType === categoryType) {
        const cards = category.querySelectorAll('.lender-card');
        
        cards.forEach(card => {
          const name = card.dataset.name;
          const matchesSearch = !searchTerm || name.includes(searchTerm);
          
          if (matchesSearch) {
            card.style.display = 'block';
            categoryVisible = true;
            visibleCount++;
          } else {
            card.style.display = 'none';
          }
        });
      }
      
      category.style.display = categoryVisible ? 'block' : 'none';
    });
    
    // Show/hide no results message
    document.getElementById('noResults').style.display = visibleCount === 0 ? 'block' : 'none';
  }
  
  searchInput.addEventListener('input', filterLenders);
  typeFilter.addEventListener('change', filterLenders);
}

function clearFilters() {
  document.getElementById('searchInput').value = '';
  document.getElementById('typeFilter').value = '';
  
  // Show all cards and categories
  document.querySelectorAll('.lender-card').forEach(card => {
    card.style.display = 'block';
  });
  
  document.querySelectorAll('.lender-category').forEach(category => {
    category.style.display = 'block';
  });
  
  document.getElementById('noResults').style.display = 'none';
}

function toggleDetails(slug) {
  const details = document.getElementById('details-' + slug);
  const isHidden = details.classList.contains('hidden');
  
  // Hide all other details first
  document.querySelectorAll('[id^="details-"]').forEach(detail => {
    detail.classList.add('hidden');
  });
  
  // Toggle current details
  if (isHidden) {
    details.classList.remove('hidden');
  }
}

// Initialize when page loads
document.addEventListener('DOMContentLoaded', function() {
  setupSearchAndFilter();
});
</script>

<?php include '../footer.php';?>

</body>
</html>