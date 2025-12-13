
<?php include '../header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "All Banks Car Loan EMI Calculator 2026 - Compare Interest Rates | Thiyagi.com"; ?></title>
  <meta name="description" content="<?php echo "Compare car loan EMI calculators from all major banks, NBFCs, and auto finance companies. Get current 2026 car loan interest rates, eligibility criteria, and calculate EMI for 50+ lenders."; ?>">
  <meta name="keywords" content="<?php echo "car loan calculator all banks, bank comparison, car loan interest rates 2026, EMI calculator banks, auto finance companies, vehicle loan rates"; ?>">
  <link rel="canonical" href="<?php echo "https://www.thiyagi.com/calculators/all-banks-car-loan-calculators"; ?>">
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

<nav class="bg-white shadow-sm px-3 py-2 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <!-- Logo -->
    <a class="flex items-center" href="https://www.thiyagi.com/">
      <img src="https://www.thiyagi.com/nt.png" alt="Thiyagi Logo" class="h-10 w-10 mr-2">
    </a>
    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button"
            class="md:hidden p-2 rounded text-gray-700 hover:bg-gray-100 focus:outline-none"
            aria-expanded="false" aria-controls="mobile-menu-expanded">
      <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <!-- Navigation Menu -->
    <div class="hidden md:flex space-x-4">
      <a href="https://www.thiyagi.com/" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">Home</a>
      <a href="https://www.thiyagi.com/calculators/" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">Calculators</a>
      <a href="https://www.thiyagi.com/contact" class="text-gray-700 hover:text-blue-600 px-3 py-2 rounded-md">Contact</a>
    </div>
  </div>
</nav>

<?php
// All available lenders categorized
$lenders = [
    'Private Banks' => [
        'hdfc-bank' => ['name' => 'HDFC Bank', 'rate' => '8.50% - 13.50%'],
        'icici-bank' => ['name' => 'ICICI Bank', 'rate' => '8.75% - 13.25%'],
        'axis-bank' => ['name' => 'Axis Bank', 'rate' => '8.75% - 13.75%'],
        'kotak-mahindra-bank' => ['name' => 'Kotak Mahindra Bank', 'rate' => '8.65% - 12.99%'],
        'yes-bank' => ['name' => 'YES Bank', 'rate' => '8.80% - 13.00%'],
        'bandhan-bank' => ['name' => 'Bandhan Bank', 'rate' => '9.00% - 13.50%'],
        'csb-bank' => ['name' => 'CSB Bank', 'rate' => '9.25% - 13.25%'],
        'city-union-bank' => ['name' => 'City Union Bank', 'rate' => '9.50% - 13.75%'],
        'dcb-bank' => ['name' => 'DCB Bank', 'rate' => '9.75% - 14.00%'],
        'dhanlaxmi-bank' => ['name' => 'Dhanlaxmi Bank', 'rate' => '9.50% - 13.75%'],
        'federal-bank' => ['name' => 'Federal Bank', 'rate' => '8.95% - 13.25%'],
        'indusind-bank' => ['name' => 'IndusInd Bank', 'rate' => '8.85% - 13.50%'],
        'idfc-first-bank' => ['name' => 'IDFC FIRST Bank', 'rate' => '8.75% - 13.00%'],
        'karnataka-bank' => ['name' => 'Karnataka Bank', 'rate' => '9.00% - 13.50%'],
        'karur-vysya-bank' => ['name' => 'Karur Vysya Bank', 'rate' => '9.25% - 13.50%'],
        'nainital-bank' => ['name' => 'Nainital Bank', 'rate' => '10.00% - 14.00%'],
        'rbl-bank' => ['name' => 'RBL Bank', 'rate' => '9.50% - 14.00%'],
        'south-indian-bank' => ['name' => 'South Indian Bank', 'rate' => '9.75% - 13.00%'],
        'tamilnad-mercantile-bank' => ['name' => 'Tamilnad Mercantile Bank', 'rate' => '10.50% - 14.00%'],
        'idbi-bank' => ['name' => 'IDBI Bank', 'rate' => '8.50% - 12.50%'],
        'jammu-kashmir-bank' => ['name' => 'Jammu & Kashmir Bank', 'rate' => '8.75% - 12.50%'],
        'catholic-syrian-bank' => ['name' => 'Catholic Syrian Bank', 'rate' => '9.25% - 13.00%']
    ],
    'Local Area Banks' => [
        'coastal-lab' => ['name' => 'Coastal Local Area Bank', 'rate' => '9.50% - 14.00%'],
        'krishna-bhima-lab' => ['name' => 'Krishna Bhima Samruddhi LAB', 'rate' => '10.00% - 14.00%']
    ],
    'Public Sector Banks' => [
        'state-bank-of-india' => ['name' => 'State Bank of India (SBI)', 'rate' => '7.25% - 12.50%'],
        'punjab-national-bank' => ['name' => 'Punjab National Bank', 'rate' => '7.60% - 12.75%'],
        'bank-of-baroda' => ['name' => 'Bank of Baroda', 'rate' => '7.70% - 12.90%'],
        'bank-of-india' => ['name' => 'Bank of India', 'rate' => '7.75% - 13.00%'],
        'bank-of-maharashtra' => ['name' => 'Bank of Maharashtra', 'rate' => '7.80% - 13.25%'],
        'canara-bank' => ['name' => 'Canara Bank', 'rate' => '7.65% - 12.75%'],
        'central-bank-of-india' => ['name' => 'Central Bank of India', 'rate' => '7.85% - 13.00%'],
        'indian-bank' => ['name' => 'Indian Bank', 'rate' => '8.70% - 10.85%'],
        'indian-overseas-bank' => ['name' => 'Indian Overseas Bank', 'rate' => '8.75% - 11.00%'],
        'punjab-sind-bank' => ['name' => 'Punjab & Sind Bank', 'rate' => '8.90% - 11.25%'],
        'uco-bank' => ['name' => 'UCO Bank', 'rate' => '8.80% - 11.00%'],
        'union-bank-of-india' => ['name' => 'Union Bank of India', 'rate' => '11.80% - 18.50%']
    ],
    'Small Finance Banks' => [
        'au-small-finance-bank' => ['name' => 'AU Small Finance Bank', 'rate' => '12.00% - 29.00%'],
        'equitas-small-finance-bank' => ['name' => 'Equitas Small Finance Bank', 'rate' => '11.99% - 30.00%'],
        'ujjivan-small-finance-bank' => ['name' => 'Ujjivan Small Finance Bank', 'rate' => '12.75% - 25.00%'],
        'capital-small-finance-bank' => ['name' => 'Capital Small Finance Bank', 'rate' => '13.50% - 28.00%'],
        'esaf-small-finance-bank' => ['name' => 'ESAF Small Finance Bank', 'rate' => '14.00% - 26.00%'],
        'suryoday-small-finance-bank' => ['name' => 'Suryoday Small Finance Bank', 'rate' => '13.25% - 27.00%'],
        'utkarsh-small-finance-bank' => ['name' => 'Utkarsh Small Finance Bank', 'rate' => '14.50% - 29.00%'],
        'jana-small-finance-bank' => ['name' => 'Jana Small Finance Bank', 'rate' => '13.75% - 28.50%'],
        'slice-small-finance-bank' => ['name' => 'slice Small Finance Bank', 'rate' => '13.50% - 27.00%'],
        'shivalik-small-finance-bank' => ['name' => 'Shivalik Small Finance Bank', 'rate' => '14.25% - 27.50%'],
        'unity-small-finance-bank' => ['name' => 'Unity Small Finance Bank', 'rate' => '13.90% - 26.50%'],
        'north-east-small-finance-bank' => ['name' => 'North East Small Finance Bank', 'rate' => '13.75% - 27.00%'],
        'fincare-small-finance-bank' => ['name' => 'Fincare Small Finance Bank', 'rate' => '14.00% - 28.00%'],
        'poorvanchal-bank' => ['name' => 'Poorvanchal Bank', 'rate' => '13.50% - 26.50%']
    ],
    'NBFCs' => [
        'bajaj-finserv' => ['name' => 'Bajaj Finserv', 'rate' => '13.00% - 30.00%'],
        'tata-capital' => ['name' => 'Tata Capital', 'rate' => '12.50% - 21.00%'],
        'mahindra-finance' => ['name' => 'Mahindra Finance', 'rate' => '14.00% - 26.00%'],
        'l-t-finance' => ['name' => 'L&T Finance', 'rate' => '13.50% - 24.00%'],
        'shriram-finance' => ['name' => 'Shriram Finance', 'rate' => '15.00% - 28.00%'],
        'muthoot-finance' => ['name' => 'Muthoot Finance', 'rate' => '16.00% - 29.00%'],
        'indiabulls-housing-finance' => ['name' => 'Indiabulls Housing Finance', 'rate' => '14.50% - 25.00%'],
        'pnb-housing-finance' => ['name' => 'PNB Housing Finance', 'rate' => '13.75% - 22.50%'],
        'hdfc-ltd' => ['name' => 'HDFC Ltd', 'rate' => '12.25% - 20.50%'],
        'lic-housing-finance' => ['name' => 'LIC Housing Finance', 'rate' => '13.00% - 21.75%'],
        'aditya-birla-finance' => ['name' => 'Aditya Birla Finance Limited', 'rate' => '13.50% - 28.00%'],
        'bajaj-finance-ltd' => ['name' => 'Bajaj Finance Ltd.', 'rate' => '12.99% - 30.00%'],
        'cholamandalam-investment' => ['name' => 'Cholamandalam Investment and Finance Company Limited', 'rate' => '13.75% - 28.50%'],
        'hdb-financial-services' => ['name' => 'HDB Financial Services Limited', 'rate' => '14.00% - 29.00%'],
        'lt-finance-limited' => ['name' => 'L&T Finance Limited', 'rate' => '13.25% - 27.00%'],
        'mahindra-mahindra-financial' => ['name' => 'Mahindra & Mahindra Financial Services Ltd', 'rate' => '13.50% - 28.00%'],
        'muthoot-finance-limited' => ['name' => 'Muthoot Finance Limited', 'rate' => '14.50% - 30.00%'],
        'sammaan-capital-limited' => ['name' => 'Sammaan Capital Limited (Formerly Indiabulls Housing Finance Limited)', 'rate' => '13.00% - 26.00%'],
        'shriram-finance-limited' => ['name' => 'Shriram Finance Limited', 'rate' => '14.00% - 29.00%'],
        'tata-capital-limited' => ['name' => 'Tata Capital Limited', 'rate' => '13.00% - 27.00%'],
        'tata-sons-private' => ['name' => 'Tata Sons Private Limited', 'rate' => '12.50% - 25.00%'],
        '360-one-prime' => ['name' => '360 ONE Prime Limited', 'rate' => '12.75% - 24.00%'],
        'power-finance-corporation' => ['name' => 'Power Finance Corporation (PFC)', 'rate' => '10.50% - 18.00%'],
        'rec-limited' => ['name' => 'REC Limited', 'rate' => '10.75% - 18.50%'],
        'indian-railway-finance-corp' => ['name' => 'Indian Railway Finance Corporation (IRFC)', 'rate' => '10.00% - 16.00%'],
        'hudco' => ['name' => 'Housing and Urban Development Corporation (HUDCO)', 'rate' => '9.50% - 15.00%'],
        'canfin-homes' => ['name' => 'Canfin Homes', 'rate' => '11.00% - 17.50%'],
        'dewan-housing-finance' => ['name' => 'Dewan Housing Finance', 'rate' => '12.50% - 20.00%'],
        'indiabulls-commercial-credit' => ['name' => 'Indiabulls Commercial Credit', 'rate' => '13.50% - 22.00%'],
        'reliance-home-finance' => ['name' => 'Reliance Home Finance', 'rate' => '12.00% - 19.50%']
    ],
    'Fintech Companies' => [
        'payme-india' => ['name' => 'PayMe India', 'rate' => '14.00% - 35.00%'],
        'kreditbee' => ['name' => 'KreditBee', 'rate' => '15.00% - 32.00%'],
        'moneytap' => ['name' => 'MoneyTap', 'rate' => '13.00% - 36.00%'],
        'cashe' => ['name' => 'CASHe', 'rate' => '18.00% - 35.00%'],
        'earlysalary' => ['name' => 'EarlySalary', 'rate' => '20.00% - 36.00%'],
        'flexsalary' => ['name' => 'FlexSalary', 'rate' => '19.00% - 35.00%'],
        'kissht' => ['name' => 'Kissht', 'rate' => '16.00% - 30.00%'],
        'lendingkart' => ['name' => 'LendingKart', 'rate' => '18.00% - 32.00%'],
        'capital-float' => ['name' => 'Capital Float', 'rate' => '17.00% - 28.00%'],
        'navi-loans' => ['name' => 'Navi', 'rate' => '10.99% - 25.00%'],
        'cred-loans' => ['name' => 'CRED', 'rate' => '11.50% - 24.00%'],
        'dhani-loans' => ['name' => 'Dhani', 'rate' => '12.00% - 30.00%'],
        'lazypay-loans' => ['name' => 'LazyPay', 'rate' => '18.00% - 36.00%'],
        'slice-fintech' => ['name' => 'Slice', 'rate' => '15.00% - 30.00%'],
        'rupeek-loans' => ['name' => 'Rupeek', 'rate' => '14.00% - 24.00%'],
        'faircent-loans' => ['name' => 'FairCent', 'rate' => '16.00% - 28.00%'],
        'upwards-fintech' => ['name' => 'Upwards', 'rate' => '19.00% - 35.00%'],
        'zest-money' => ['name' => 'ZestMoney', 'rate' => '15.00% - 30.00%'],
        'true-balance' => ['name' => 'True Balance', 'rate' => '16.00% - 32.00%'],
        'branch-fintech' => ['name' => 'Branch', 'rate' => '18.00% - 36.00%'],
        'loantap' => ['name' => 'LoanTap', 'rate' => '13.00% - 30.00%'],
        'incred' => ['name' => 'InCred', 'rate' => '12.00% - 28.00%'],
        'money-view' => ['name' => 'Money View', 'rate' => '14.00% - 32.00%'],
        'paysense' => ['name' => 'PaySense', 'rate' => '15.00% - 35.00%'],
        'mobikwik-lending' => ['name' => 'Mobikwik Lending', 'rate' => '16.00% - 30.00%'],
        'ziploan' => ['name' => 'ZipLoan', 'rate' => '17.00% - 32.00%'],
        'flexiloans' => ['name' => 'FlexiLoans', 'rate' => '15.00% - 28.00%'],
        'neogrowth' => ['name' => 'NeoGrowth', 'rate' => '18.00% - 33.00%'],
        'ugro-capital' => ['name' => 'U GRO Capital', 'rate' => '16.00% - 29.00%'],
        'tala-india' => ['name' => 'Tala', 'rate' => '20.00% - 36.00%'],
        'lenddo-efl' => ['name' => 'Lenddo/EFL', 'rate' => '18.00% - 35.00%'],
        'fibe-money' => ['name' => 'Fibe', 'rate' => '18.00% - 36.00%'],
        'jupiter-money' => ['name' => 'Jupiter', 'rate' => '15.00% - 30.00%'],
        'fi-money' => ['name' => 'Fi Money', 'rate' => '16.00% - 32.00%'],
        'uni-fintech' => ['name' => 'Uni', 'rate' => '17.00% - 33.00%'],
        'simpl-fintech' => ['name' => 'Simpl', 'rate' => '19.00% - 36.00%'],
        'okcredit' => ['name' => 'OkCredit', 'rate' => '18.00% - 30.00%'],
        'groww-credit' => ['name' => 'Groww Credit', 'rate' => '14.00% - 28.00%'],
        'zomato-pay-later' => ['name' => 'Zomato Pay Later', 'rate' => '20.00% - 36.00%'],
        'amazon-pay-later' => ['name' => 'Amazon Pay Later', 'rate' => '18.00% - 30.00%'],
        'flipkart-pay-later' => ['name' => 'Flipkart Pay Later', 'rate' => '19.00% - 32.00%'],
        'payu-credit' => ['name' => 'PayU Credit', 'rate' => '16.00% - 29.00%'],
        'razorpay-capital' => ['name' => 'Razorpay Capital', 'rate' => '15.00% - 25.00%']
    ],
    'Payment Banks' => [
        'airtel-payments-bank' => ['name' => 'Airtel Payments Bank Ltd', 'rate' => '18.00% - 36.00%'],
        'india-post-payments-bank' => ['name' => 'India Post Payments Bank Ltd', 'rate' => '16.00% - 30.00%'],
        'fino-payments-bank' => ['name' => 'FINO Payments Bank Ltd', 'rate' => '17.00% - 32.00%'],
        'paytm-payments-bank' => ['name' => 'Paytm Payments Bank Ltd', 'rate' => '15.00% - 28.00%'],
        'jio-payments-bank' => ['name' => 'Jio Payments Bank Ltd', 'rate' => '19.00% - 35.00%'],
        'nsdl-payments-bank' => ['name' => 'NSDL Payments Bank Limited', 'rate' => '16.50% - 29.00%']
    ],
    'Development Financial Institutions' => [
        'nabard' => ['name' => 'National Bank for Agriculture and Rural Development', 'rate' => '10.00% - 18.00%'],
        'exim-bank' => ['name' => 'Export-Import Bank of India', 'rate' => '8.50% - 15.00%'],
        'nhb' => ['name' => 'National Housing Bank', 'rate' => '9.00% - 16.00%'],
        'sidbi' => ['name' => 'Small Industries Development Bank of India', 'rate' => '9.50% - 17.00%']
    ],
    'Regional Rural Banks' => [
        'assam-gramin-vikash-bank' => ['name' => 'Assam Gramin Vikash Bank', 'rate' => '12.00% - 18.00%'],
        'andhra-pradesh-grameena-vikas-bank' => ['name' => 'Andhra Pradesh Grameena Vikas Bank', 'rate' => '11.50% - 17.50%'],
        'baroda-gujarat-gramin-bank' => ['name' => 'Baroda Gujarat Gramin Bank', 'rate' => '11.75% - 17.75%'],
        'aryavart-bank' => ['name' => 'Aryavart Bank', 'rate' => '12.25% - 18.25%'],
        'punjab-gramin-bank' => ['name' => 'Punjab Gramin Bank', 'rate' => '11.50% - 17.00%'],
        'karnataka-vikas-gramin-bank' => ['name' => 'Karnataka Vikas Gramin Bank', 'rate' => '12.00% - 18.00%'],
        'tamil-nadu-grama-bank' => ['name' => 'Tamil Nadu Grama Bank', 'rate' => '11.75% - 17.50%'],
        'kerala-gramin-bank' => ['name' => 'Kerala Gramin Bank', 'rate' => '12.50% - 18.50%'],
        'maharashtra-gramin-bank' => ['name' => 'Maharashtra Gramin Bank', 'rate' => '12.00% - 18.00%'],
        'odisha-gramya-bank' => ['name' => 'Odisha Gramya Bank', 'rate' => '12.25% - 18.25%']
    ],
    'Cooperative Banks' => [
        'saraswat-cooperative-bank' => ['name' => 'Saraswat Cooperative Bank', 'rate' => '12.25% - 22.00%'],
        'nkgsb-cooperative-bank' => ['name' => 'NKGSB Cooperative Bank', 'rate' => '12.50% - 21.00%'],
        'cosmos-cooperative-bank' => ['name' => 'Cosmos Cooperative Bank', 'rate' => '12.75% - 22.50%'],
        'abhyudaya-cooperative-bank' => ['name' => 'Abhyudaya Cooperative Bank', 'rate' => '13.00% - 23.00%']
    ],
    'Foreign Banks' => [
        'standard-chartered-bank-foreign' => ['name' => 'Standard Chartered Bank', 'rate' => '11.00% - 19.99%'],
        'citibank-foreign' => ['name' => 'Citibank N.A.', 'rate' => '10.75% - 18.00%'],
        'hsbc-bank-foreign' => ['name' => 'Hong Kong and Shanghai Banking Corporation Limited', 'rate' => '11.25% - 20.00%'],
        'dbs-bank-foreign' => ['name' => 'DBS Bank India Limited', 'rate' => '11.50% - 20.50%'],
        'deutsche-bank' => ['name' => 'Deutsche Bank A.G.', 'rate' => '12.00% - 21.00%'],
        'bnp-paribas' => ['name' => 'BNP Paribas', 'rate' => '11.75% - 20.50%'],
        'bank-of-america' => ['name' => 'Bank of America', 'rate' => '12.50% - 22.00%'],
        'jp-morgan-chase' => ['name' => 'J.P. Morgan Chase Bank N.A.', 'rate' => '12.00% - 21.50%'],
        'anz-bank' => ['name' => 'Australia and New Zealand Banking Group Ltd.', 'rate' => '11.50% - 19.50%'],
        'barclays-bank' => ['name' => 'Barclays Bank Plc.', 'rate' => '12.25% - 21.25%'],
        'ab-bank-limited' => ['name' => 'AB Bank Limited', 'rate' => '11.50% - 19.50%'],
        'american-express-banking' => ['name' => 'American Express Banking Corporation', 'rate' => '12.50% - 20.50%'],
        'bank-of-bahrain-kuwait' => ['name' => 'Bank of Bahrain and Kuwait B.S.C.', 'rate' => '11.75% - 19.75%'],
        'bank-of-ceylon' => ['name' => 'Bank of Ceylon', 'rate' => '11.25% - 18.75%'],
        'bank-of-china-limited' => ['name' => 'Bank of China Limited', 'rate' => '11.50% - 19.00%'],
        'bank-of-nova-scotia' => ['name' => 'Bank of Nova Scotia', 'rate' => '12.00% - 19.50%'],
        'bank-of-tokyo-mitsubishi' => ['name' => 'Bank of Tokyo-Mitsubishi UFJ Ltd.', 'rate' => '11.75% - 19.25%'],
        'bny-mellon' => ['name' => 'BNY Mellon', 'rate' => '12.50% - 20.50%'],
        'commonwealth-bank-australia' => ['name' => 'Commonwealth Bank of Australia', 'rate' => '11.75% - 19.25%'],
        'credit-agricole' => ['name' => 'Credit Agricole Corporate and Investment Bank', 'rate' => '12.25% - 20.25%'],
        'credit-suisse' => ['name' => 'Credit Suisse AG', 'rate' => '12.75% - 21.00%'],
        'ctbc-bank' => ['name' => 'CTBC Bank Co. Ltd.', 'rate' => '11.50% - 19.00%'],
        'erste-bank' => ['name' => 'Erste Bank', 'rate' => '12.00% - 19.50%'],
        'industrial-commercial-bank-china' => ['name' => 'Industrial and Commercial Bank of China Limited', 'rate' => '11.25% - 18.75%'],
        'industrial-bank-korea' => ['name' => 'Industrial Bank of Korea', 'rate' => '11.50% - 19.00%'],
        'ing-vysya-bank' => ['name' => 'ING Vysya Bank Ltd.', 'rate' => '11.75% - 19.25%'],
        'jpmorgan-chase-bank' => ['name' => 'JPMorgan Chase Bank N.A.', 'rate' => '12.50% - 20.50%'],
        'keb-hana-bank' => ['name' => 'KEB Hana Bank', 'rate' => '11.50% - 19.00%'],
        'krung-thai-bank' => ['name' => 'Krung Thai Bank Public Company Limited', 'rate' => '11.25% - 18.75%'],
        'mashreq-bank' => ['name' => 'Mashreq Bank PSC', 'rate' => '12.00% - 19.50%'],
        'mizuho-bank' => ['name' => 'Mizuho Bank Ltd.', 'rate' => '11.75% - 19.25%'],
        'ncc-bank-limited' => ['name' => 'NCC Bank Limited', 'rate' => '11.25% - 18.50%'],
        'oman-international-bank' => ['name' => 'Oman International Bank S.A.O.G', 'rate' => '11.75% - 19.00%'],
        'pt-bank-maybank' => ['name' => 'PT Bank Maybank Indonesia Tbk', 'rate' => '11.50% - 18.75%'],
        'rabobank-international' => ['name' => 'Rabobank International', 'rate' => '12.00% - 19.50%'],
        'royal-bank-scotland' => ['name' => 'Royal Bank of Scotland N.V.', 'rate' => '12.25% - 20.00%'],
        'sber-bank' => ['name' => 'Sber Bank', 'rate' => '11.50% - 19.00%'],
        'shinhan-bank' => ['name' => 'Shinhan Bank', 'rate' => '11.50% - 19.00%'],
        'societe-generale' => ['name' => 'Societe Generale', 'rate' => '12.25% - 20.25%'],
        'sonali-bank-limited' => ['name' => 'Sonali Bank Limited', 'rate' => '11.00% - 18.00%'],
        'sumitomo-mitsui-banking' => ['name' => 'Sumitomo Mitsui Banking Corporation', 'rate' => '11.75% - 19.25%'],
        'ubs-ag' => ['name' => 'UBS AG', 'rate' => '12.75% - 21.00%'],
        'united-overseas-bank' => ['name' => 'United Overseas Bank Limited', 'rate' => '11.50% - 19.00%'],
        'westpac-banking' => ['name' => 'Westpac Banking Corporation', 'rate' => '11.75% - 19.25%']
    ]
];

// Color schemes for different categories
$categoryColors = [
    'Private Banks' => 'blue',
    'Local Area Banks' => 'teal',
    'Public Sector Banks' => 'green',
    'Small Finance Banks' => 'purple',
    'NBFCs' => 'orange',
    'Fintech Companies' => 'pink',
    'Payment Banks' => 'red',
    'Development Financial Institutions' => 'indigo',
    'Regional Rural Banks' => 'yellow',
    'Cooperative Banks' => 'cyan',
    'Foreign Banks' => 'gray'
];
?>

<div class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-indigo-50">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-16">
        <div class="container mx-auto px-4">
            <div class="text-center">
                <div class="inline-flex items-center justify-center w-20 h-20 bg-white/20 rounded-full mb-6">
                    <i class="fas fa-car text-3xl"></i>
                </div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6">All Banks Car Loan Calculators</h1>
                <p class="text-xl text-white/90 max-w-4xl mx-auto leading-relaxed">
                    Compare car loan EMI calculators from 201+ major banks, NBFCs, auto finance companies, development financial institutions, regional rural banks, cooperative banks, and foreign banks.
                    Get current 2026 interest rates and calculate your loan EMI instantly.
                </p>
                
                <!-- Quick Stats -->
                <div class="grid grid-cols-2 md:grid-cols-5 lg:grid-cols-10 gap-2 mt-8 max-w-8xl mx-auto">
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">20+</div>
                        <div class="text-xs opacity-80">Private</div>
                    </div>
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">12</div>
                        <div class="text-xs opacity-80">Public</div>
                    </div>
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">11</div>
                        <div class="text-xs opacity-80">Small Finance</div>
                    </div>
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">30+</div>
                        <div class="text-xs opacity-80">NBFCs</div>
                    </div>
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">18</div>
                        <div class="text-xs opacity-80">Fintech</div>
                    </div>
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">6</div>
                        <div class="text-xs opacity-80">Payment</div>
                    </div>
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">4</div>
                        <div class="text-xs opacity-80">DFIs</div>
                    </div>
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">10</div>
                        <div class="text-xs opacity-80">RRBs</div>
                    </div>
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">10</div>
                        <div class="text-xs opacity-80">Foreign</div>
                    </div>
                    <div class="bg-white/20 rounded-xl p-2">
                        <div class="text-sm font-bold">2</div>
                        <div class="text-xs opacity-80">Local Area</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <!-- Search and Filter Section -->
        <div class="mb-12">
            <div class="bg-white rounded-2xl shadow-xl p-6">
                <div class="text-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Find Your Perfect Loan</h2>
                    <p class="text-gray-600">Search by bank name or filter by category</p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Search Box -->
                    <div class="relative">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" id="searchInput" placeholder="Search banks, NBFCs, or fintech companies..."
                            class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300">
                    </div>
                    
                    <!-- Category Filter -->
                    <div class="relative">
                        <i class="fas fa-filter absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <select id="categoryFilter" 
                            class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all duration-300 appearance-none">
                            <option value="">All Categories</option>
                            <option value="Private Banks">Private Banks</option>
                            <option value="Local Area Banks">Local Area Banks</option>
                            <option value="Public Sector Banks">Public Sector Banks</option>
                            <option value="Small Finance Banks">Small Finance Banks</option>
                            <option value="NBFCs">NBFCs</option>
                            <option value="Fintech Companies">Fintech Companies</option>
                        </select>
                        <i class="fas fa-chevron-down absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 pointer-events-none"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lenders by Category -->
        <?php foreach ($lenders as $category => $banks): ?>
        <div class="mb-12 category-section" data-category="<?php echo $category; ?>">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-4 flex items-center justify-center">
                    <i class="fas fa-<?php echo $category === 'Private Banks' ? 'building' : ($category === 'Local Area Banks' ? 'map-marker-alt' : ($category === 'Public Sector Banks' ? 'landmark' : ($category === 'Small Finance Banks' ? 'coins' : ($category === 'NBFCs' ? 'chart-line' : ($category === 'Fintech Companies' ? 'mobile-alt' : ($category === 'Payment Banks' ? 'credit-card' : ($category === 'Development Financial Institutions' ? 'university' : ($category === 'Regional Rural Banks' ? 'tractor' : 'globe')))))))); ?> text-<?php echo $categoryColors[$category]; ?>-600 mr-3"></i>
                    <?php echo $category; ?>
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    <?php 
                    $descriptions = [
                        'Private Banks' => 'Leading private sector banks offering competitive car loan rates and advanced digital services.',
                        'Local Area Banks' => 'Region-specific banks providing personalized car loan services with local market expertise.',
                        'Public Sector Banks' => 'Government-owned banks providing reliable car loan products with attractive interest rates.',
                        'Small Finance Banks' => 'Specialized banks focusing on underserved segments with flexible car loan offerings.',
                        'NBFCs' => 'Non-Banking Financial Companies offering quick car loan approval and diverse auto finance products.',
                        'Fintech Companies' => 'Technology-driven lenders providing instant car loans with innovative digital features.',
                        'Payment Banks' => 'Digital-first banks offering payment services and vehicle finance solutions with mobile-centric approach.',
                        'Development Financial Institutions' => 'Government-backed specialized institutions financing agriculture, exports, auto sector, and MSME sectors.',
                        'Regional Rural Banks' => 'Government-sponsored rural banks serving farmers and rural communities with priority sector vehicle finance.',
                        'Cooperative Banks' => 'Member-owned financial institutions providing personalized car loan services with community focus and competitive rates.',
                        'Foreign Banks' => 'International banks with Indian operations offering premium car loan services and global financial solutions.'
                    ];
                    echo $descriptions[$category];
                    ?>
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php foreach ($banks as $slug => $bank): ?>
                <div class="bank-card bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 p-6">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-<?php echo $categoryColors[$category]; ?>-500 to-<?php echo $categoryColors[$category]; ?>-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-university text-2xl text-white"></i>
                        </div>
                        
                        <h3 class="text-lg font-bold text-gray-800 mb-2" data-bank-name="<?php echo strtolower($bank['name']); ?>">
                            <?php echo $bank['name']; ?>
                        </h3>
                        
                        <div class="mb-4">
                            <div class="text-sm text-gray-600 mb-1">Interest Rate</div>
                            <div class="text-lg font-semibold text-<?php echo $categoryColors[$category]; ?>-600">
                                <?php echo $bank['rate']; ?>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <span class="inline-block bg-<?php echo $categoryColors[$category]; ?>-100 text-<?php echo $categoryColors[$category]; ?>-700 px-3 py-1 rounded-full text-xs font-medium">
                                <?php echo $category; ?>
                            </span>
                        </div>
                        
                        <a href="/calculators/<?php echo $slug; ?>-car-loan-emi-calculator" 
                           class="block w-full bg-gradient-to-r from-<?php echo $categoryColors[$category]; ?>-500 to-<?php echo $categoryColors[$category]; ?>-600 text-white py-3 px-4 rounded-xl font-semibold hover:from-<?php echo $categoryColors[$category]; ?>-600 hover:to-<?php echo $categoryColors[$category]; ?>-700 transition-all duration-300 transform hover:scale-105">
                            <i class="fas fa-calculator mr-2"></i>
                            Calculate EMI
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- Comparison Section -->
        <div class="mt-16 bg-white rounded-2xl shadow-xl p-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Interest Rate Comparison 2026</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Quick comparison of interest rate ranges across different lender categories</p>
            </div>
            
            <div class="grid md:grid-cols-5 gap-6">
                <div class="text-center p-6 bg-blue-50 rounded-xl">
                    <h3 class="font-semibold text-gray-800 mb-2">Private Banks</h3>
                    <div class="text-2xl font-bold text-blue-600">8.50%</div>
                    <div class="text-sm text-gray-600">Starting Rate</div>
                </div>
                <div class="text-center p-6 bg-green-50 rounded-xl">
                    <h3 class="font-semibold text-gray-800 mb-2">Public Banks</h3>
                    <div class="text-2xl font-bold text-green-600">7.25%</div>
                    <div class="text-sm text-gray-600">Starting Rate</div>
                </div>
                <div class="text-center p-6 bg-purple-50 rounded-xl">
                    <h3 class="font-semibold text-gray-800 mb-2">Small Finance</h3>
                    <div class="text-2xl font-bold text-purple-600">12.00%</div>
                    <div class="text-sm text-gray-600">Starting Rate</div>
                </div>
                <div class="text-center p-6 bg-orange-50 rounded-xl">
                    <h3 class="font-semibold text-gray-800 mb-2">NBFCs</h3>
                    <div class="text-2xl font-bold text-orange-600">12.25%</div>
                    <div class="text-sm text-gray-600">Starting Rate</div>
                </div>
                <div class="text-center p-6 bg-pink-50 rounded-xl">
                    <h3 class="font-semibold text-gray-800 mb-2">Fintech</h3>
                    <div class="text-2xl font-bold text-pink-600">10.99%</div>
                    <div class="text-sm text-gray-600">Starting Rate</div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-16 bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Frequently Asked Questions</h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Which bank offers the lowest car loan interest rate?</h3>
                    <p class="text-gray-600 mb-6">SBI currently offers one of the lowest car loan starting rates at 7.25% per annum. However, actual rates depend on your credit profile, income, vehicle value, and loan amount. HDFC Bank and PNB also offer competitive rates for car loans.</p>
                    
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">What is the difference between banks and NBFCs?</h3>
                    <p class="text-gray-600 mb-6">Banks are regulated by RBI and offer comprehensive banking services including car loans with competitive rates. NBFCs and auto finance companies focus on specialized lending and may have more flexible criteria for car loans but typically charge slightly higher interest rates.</p>
                </div>
                
                <div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">What factors affect car loan interest rates?</h3>
                    <p class="text-gray-600 mb-6">Car loan rates are influenced by your credit score, income stability, loan-to-value ratio, vehicle age and model, loan amount, and tenure. Higher credit scores and lower LTV ratios typically result in better rates.</p>
                    
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">How accurate are these car loan EMI calculators?</h3>
                    <p class="text-gray-600 mb-6">Our car loan EMI calculators provide accurate estimates based on standard EMI formulas. Actual rates, processing fees, and other charges may vary based on individual profiles, vehicle valuation, and current market conditions.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Search and filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const categoryFilter = document.getElementById('categoryFilter');
    const bankCards = document.querySelectorAll('.bank-card');
    const categorySections = document.querySelectorAll('.category-section');

    function filterCards() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value;

        categorySections.forEach(section => {
            const category = section.dataset.category;
            let hasVisibleCards = false;

            // Show/hide section based on category filter
            if (selectedCategory && selectedCategory !== category) {
                section.style.display = 'none';
                return;
            } else {
                section.style.display = 'block';
            }

            // Filter cards within the section
            const cards = section.querySelectorAll('.bank-card');
            cards.forEach(card => {
                const bankName = card.querySelector('[data-bank-name]').dataset.bankName;
                const matchesSearch = bankName.includes(searchTerm);

                if (matchesSearch) {
                    card.style.display = 'block';
                    hasVisibleCards = true;
                } else {
                    card.style.display = 'none';
                }
            });

            // Hide section if no visible cards
            if (!hasVisibleCards && searchTerm) {
                section.style.display = 'none';
            }
        });
    }

    searchInput.addEventListener('input', filterCards);
    categoryFilter.addEventListener('change', filterCards);
});
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "All Banks Car Loan EMI Calculator 2026",
  "description": "Compare car loan EMI calculators from all major banks, NBFCs, and auto finance companies in India. Current 2026 car loan interest rates and instant EMI calculation.",
  "url": "https://www.thiyagi.com/calculators/all-banks-car-loan-calculators",
  "applicationCategory": "FinanceApplication",
  "operatingSystem": "Any",
  "browserRequirements": "HTML5, JavaScript",
  "creator": {
    "@type": "Organization",
    "name": "Thiyagi.com",
    "url": "https://www.thiyagi.com"
  },
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "featureList": [
    "50+ bank and NBFC calculators",
    "Real-time interest rate comparison",
    "Category-wise lender filtering",
    "Search functionality",
    "Current 2026 market rates",
    "Instant EMI calculations"
  ]
}
</script>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid md:grid-cols-4 gap-8">
      <div>
        <div class="flex items-center mb-4">
          <img src="https://www.thiyagi.com/nt.png" alt="Thiyagi Logo" class="h-8 w-8 mr-2">
          <span class="text-xl font-bold">Thiyagi.com</span>
        </div>
        <p class="text-gray-400 text-sm">Your trusted source for free online calculators and tools.</p>
      </div>
      
      <div>
        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="https://www.thiyagi.com/" class="text-gray-400 hover:text-white transition-colors">Home</a></li>
          <li><a href="https://www.thiyagi.com/calculators/" class="text-gray-400 hover:text-white transition-colors">All Calculators</a></li>
          <li><a href="https://www.thiyagi.com/about" class="text-gray-400 hover:text-white transition-colors">About Us</a></li>
          <li><a href="https://www.thiyagi.com/contact" class="text-gray-400 hover:text-white transition-colors">Contact</a></li>
        </ul>
      </div>
      
      <div>
        <h3 class="text-lg font-semibold mb-4">Popular Tools</h3>
        <ul class="space-y-2 text-sm">
          <li><a href="https://www.thiyagi.com/emi-calculator" class="text-gray-400 hover:text-white transition-colors">EMI Calculator</a></li>
          <li><a href="https://www.thiyagi.com/loan-calculator" class="text-gray-400 hover:text-white transition-colors">Loan Calculator</a></li>
          <li><a href="https://www.thiyagi.com/sip-calculator" class="text-gray-400 hover:text-white transition-colors">SIP Calculator</a></li>
          <li><a href="https://www.thiyagi.com/bmi-calculator" class="text-gray-400 hover:text-white transition-colors">BMI Calculator</a></li>
        </ul>
      </div>
      
      <div>
        <h3 class="text-lg font-semibold mb-4">Connect</h3>
        <div class="flex space-x-4">
          <a href="#" class="text-gray-400 hover:text-white transition-colors">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-white transition-colors">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="text-gray-400 hover:text-white transition-colors">
            <i class="fab fa-linkedin-in"></i>
          </a>
        </div>
      </div>
    </div>
    
    <div class="border-t border-gray-800 mt-8 pt-8 text-center">
      <p class="text-gray-400 text-sm">&copy; 2026 Thiyagi.com. All rights reserved.</p>
    </div>
  </div>
</footer>

<?php include '../footer.php';?>

</body>
</html>