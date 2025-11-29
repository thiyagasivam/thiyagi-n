<?php
// sitemap.php
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
$baseUrl = 'https://www.thiyagi.com';

// Pages to MANUALLY include (with custom settings)
$pages = [
    '/' => [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'daily',
        'priority' => '1.0'
    ],
    '/about' => [  // Removed .php
        'lastmod' => date('Y-m-d', strtotime('-1 week')),
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ],
    '/contact' => [  // Removed .php
        'lastmod' => date('Y-m-d', strtotime('-1 month')),
        'changefreq' => 'monthly',
        'priority' => '0.8'
    ]
];

// Add all bank calculator pages dynamically
$bankCalculatorPages = [
    // Private Banks
    'hdfc-bank', 'icici-bank', 'axis-bank', 'kotak-mahindra-bank', 'yes-bank', 'bandhan-bank', 'csb-bank', 
    'city-union-bank', 'dcb-bank', 'dhanlaxmi-bank', 'federal-bank', 'indusind-bank', 'idfc-first-bank', 
    'karnataka-bank', 'karur-vysya-bank', 'nainital-bank', 'rbl-bank', 'south-indian-bank', 
    'tamilnad-mercantile-bank', 'idbi-bank', 'jammu-kashmir-bank', 'catholic-syrian-bank',
    
    // Local Area Banks
    'coastal-lab', 'krishna-bhima-lab',
    
    // Public Sector Banks
    'state-bank-of-india', 'punjab-national-bank', 'bank-of-baroda', 'bank-of-india', 'bank-of-maharashtra', 
    'canara-bank', 'central-bank-of-india', 'indian-bank', 'indian-overseas-bank', 'punjab-sind-bank', 
    'uco-bank', 'union-bank-of-india',
    
    // Small Finance Banks
    'au-small-finance-bank', 'equitas-small-finance-bank', 'ujjivan-small-finance-bank', 
    'capital-small-finance-bank', 'esaf-small-finance-bank', 'suryoday-small-finance-bank', 
    'utkarsh-small-finance-bank', 'jana-small-finance-bank', 'slice-small-finance-bank', 
    'shivalik-small-finance-bank', 'unity-small-finance-bank', 'north-east-small-finance-bank', 
    'fincare-small-finance-bank', 'poorvanchal-bank',
    
    // NBFCs
    'bajaj-finserv', 'tata-capital', 'mahindra-finance', 'l-t-finance', 'shriram-finance', 'muthoot-finance', 
    'indiabulls-housing-finance', 'pnb-housing-finance', 'hdfc-ltd', 'lic-housing-finance', 
    'aditya-birla-finance', 'bajaj-finance-ltd', 'cholamandalam-investment', 'hdb-financial-services', 
    'lt-finance-limited', 'mahindra-mahindra-financial', 'muthoot-finance-limited', 'sammaan-capital-limited', 
    'shriram-finance-limited', 'tata-capital-limited', 'tata-sons-private', '360-one-prime', 
    'power-finance-corporation', 'rec-limited', 'indian-railway-finance-corp', 'hudco', 'canfin-homes', 
    'dewan-housing-finance', 'indiabulls-commercial-credit', 'reliance-home-finance',
    
    // Fintech Companies
    'payme-india', 'kreditbee', 'moneytap', 'cashe', 'earlysalary', 'flexsalary', 'kissht', 'lendingkart', 
    'capital-float', 'navi-loans', 'cred-loans', 'dhani-loans', 'lazypay-loans', 'slice-fintech', 
    'rupeek-loans', 'faircent-loans', 'upwards-fintech', 'zest-money', 'true-balance', 'branch-fintech', 
    'loantap', 'incred', 'money-view', 'moneyview', 'paysense', 'mobikwik-lending', 'ziploan', 'flexiloans', 
    'neogrowth', 'ugro-capital', 'tala-india', 'lenddo-efl', 'fibe-money', 'jupiter-money', 'fi-money', 
    'uni-fintech', 'simpl-fintech', 'okcredit', 'groww-credit', 'zomato-pay-later', 'amazon-pay-later', 
    'flipkart-pay-later', 'payu-credit', 'razorpay-capital', 'smartcoin', 'creditbee', 'nira', 'cashbean', 
    'prefr', 'fairmoney', 'payme', 'upwards', 'oxyzo', 'credflow', 'rupifi', 'capfloat', 'finzy', 
    'money-club', 'ring', 'lazypay',
    
    // Payment Banks
    'airtel-payments-bank', 'india-post-payments-bank', 'fino-payments-bank', 'paytm-payments-bank', 
    'jio-payments-bank', 'nsdl-payments-bank',
    
    // Development Financial Institutions
    'nabard', 'exim-bank', 'nhb', 'sidbi',
    
    // Regional Rural Banks
    'assam-gramin-vikash-bank', 'andhra-pradesh-grameena-vikas-bank', 'baroda-gujarat-gramin-bank', 
    'aryavart-bank', 'punjab-gramin-bank', 'karnataka-vikas-gramin-bank', 'tamil-nadu-grama-bank', 
    'kerala-gramin-bank', 'maharashtra-gramin-bank', 'odisha-gramya-bank',
    
    // Cooperative Banks
    'saraswat-cooperative-bank', 'nkgsb-cooperative-bank', 'cosmos-cooperative-bank', 'abhyudaya-cooperative-bank',
    
    // Foreign Banks
    'standard-chartered-bank-foreign', 'citibank-foreign', 'hsbc-bank-foreign', 'dbs-bank-foreign', 
    'deutsche-bank', 'bnp-paribas', 'bank-of-america', 'jp-morgan-chase', 'anz-bank', 'barclays-bank', 
    'ab-bank-limited', 'american-express-banking', 'bank-of-bahrain-kuwait', 'bank-of-ceylon', 
    'bank-of-china-limited', 'bank-of-nova-scotia', 'bank-of-tokyo-mitsubishi', 'bny-mellon', 
    'commonwealth-bank-australia', 'credit-agricole', 'credit-suisse', 'ctbc-bank', 'erste-bank', 
    'industrial-commercial-bank-china', 'industrial-bank-korea', 'ing-vysya-bank', 'jpmorgan-chase-bank', 
    'keb-hana-bank', 'krung-thai-bank', 'mashreq-bank', 'mizuho-bank', 'ncc-bank-limited', 
    'oman-international-bank', 'pt-bank-maybank', 'rabobank-international', 'royal-bank-scotland', 
    'sber-bank', 'shinhan-bank', 'societe-generale', 'sonali-bank-limited', 'sumitomo-mitsui-banking', 
    'ubs-ag', 'united-overseas-bank', 'westpac-banking'
];

// Add personal loan, home loan, and two-wheeler loan calculator pages for each bank
foreach ($bankCalculatorPages as $bank) {
    // Personal Loan EMI Calculator
    $pages["/calculators/{$bank}-personal-loan-emi-calculator"] = [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'daily',
        'priority' => '1.0'
    ];
    
    // Home Loan EMI Calculator
    $pages["/calculators/{$bank}-home-loan-emi-calculator"] = [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'daily',
        'priority' => '1.0'
    ];
    
    // Two Wheeler Loan EMI Calculator
    $pages["/calculators/{$bank}-two-wheeler-loan-emi-calculator"] = [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'daily',
        'priority' => '1.0'
    ];
}

// Add main calculator listing pages
$pages['/calculators/all-banks-personal-loan-calculators'] = [
    'lastmod' => date('Y-m-d'),
    'changefreq' => 'daily',
    'priority' => '1.0'
];

$pages['/calculators/all-banks-home-loan-calculators'] = [
    'lastmod' => date('Y-m-d'),
    'changefreq' => 'daily',
    'priority' => '1.0'
];

$pages['/calculators/all-banks-two-wheeler-loan-calculators'] = [
    'lastmod' => date('Y-m-d'),
    'changefreq' => 'daily',
    'priority' => '1.0'
];

// Add general EMI calculators
$pages['/calculators/personal-loan-emi-calculator'] = [
    'lastmod' => date('Y-m-d'),
    'changefreq' => 'daily',
    'priority' => '1.0'
];

$pages['/calculators/home-loan-emi-calculator'] = [
    'lastmod' => date('Y-m-d'),
    'changefreq' => 'daily',
    'priority' => '1.0'
];

$pages['/calculators/two-wheeler-loan-emi-calculator'] = [
    'lastmod' => date('Y-m-d'),
    'changefreq' => 'daily',
    'priority' => '1.0'
];

// Add KPH to MPH converter dynamic pages (1-1000)
for ($i = 1; $i <= 1000; $i++) {
    $pages["/kph-to-mph/{$i}"] = [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'monthly',
        'priority' => '0.7'
    ];
}

// Add MPH to KPH converter dynamic pages (1-1000) 
for ($i = 1; $i <= 1000; $i++) {
    $pages["/mph-to-kph/{$i}"] = [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'monthly', 
        'priority' => '0.7'
    ];
}

// Add KG to LBS converter dynamic pages (1-1000)
for ($i = 1; $i <= 1000; $i++) {
    $pages["/kg-to-lbs/{$i}"] = [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'monthly',
        'priority' => '0.7'
    ];
}

// Add LBS to KG converter dynamic pages (1-1000) 
for ($i = 1; $i <= 1000; $i++) {
    $pages["/lbs-to-kg/{$i}"] = [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'monthly', 
        'priority' => '0.7'
    ];
}

// Add OUNCES to GALLONS converter dynamic pages (1-100)
for ($i = 1; $i <= 100; $i++) {
    $pages["/ounces-to-gallons/{$i}"] = [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'monthly',
        'priority' => '0.7'
    ];
}

// Add GALLONS to OUNCES converter dynamic pages (1-100) 
for ($i = 1; $i <= 100; $i++) {
    $pages["/gallons-to-ounces/{$i}"] = [
        'lastmod' => date('Y-m-d'),
        'changefreq' => 'monthly', 
        'priority' => '0.7'
    ];
}

// Pages to EXCLUDE (will not appear in sitemap)
$excludedPages = [
    '/404.php',
    '/header.php',
    '/footer.php',
    '/admin.php',
    '/config.php',
    '/sitemaptest.php',
    '/sitemap.php',
    '/fix-missing-holiday-content',
'/final-link-cleanup',
'/generate-repair-report',
'/page_sharing',
'/generate-uk-holidays',
'/fix-remaining-white-text',
'/fix-broken-links',
'/service-center/asus/index',
'/service-center/asus/service-center',
'/service-center/xiaomi/index',
'/service-center/xiaomi/service-center',
'/service-center/canon/index',
'/service-center/canon/service-center',
'/service-center/motorola/index',
'/service-center/motorola/service-center',
'/service-center/poco/index',
'/service-center/poco/index.php',
'/service-center/poco/service-center',
'/service-center/tata-motors/index',
'/service-center/tata-motors/service-center',
'/service-center/daikin/index',
'/service-center/daikin/service-center',
'/service-center/boat/index',
'/service-center/boat/service-center',
'/service-center/crompton/index',
'/service-center/crompton/service-center',
'/service-center/hero/index',
'/service-center/hero/service-center',
'/service-center/godrej/index',
'/service-center/godrej/service-center',
'/service-center/alcatel/index',
'/service-center/alcatel/service-center',
'/service-center/benq/index',
'/service-center/benq/service-center',
'/service-center/tvs/index',
'/service-center/tvs/service-center',
'/service-center/dell/index',
'/service-center/dell/service-center',
'/service-center/casio/index',
'/service-center/casio/service-center',
'/service-center/apple/index',
'/service-center/apple/info',
'/service-center/apple/service-center',
'/service-center/honor/index',
'/service-center/honor/service-center',
'/service-center/infinix/index',
'/service-center/infinix/service-center',
'/llms-generator',
'/generate-england-cities',
'/fix-white-text-colors',
'/verify-links',
'/check-missing-content',
'/fix-city-titles',
'/fix-flag-images',
'/add-state-flags',
'/complete-link-fix',
'/holiday/usa-holiday/generate-states',
'/electricity-board/breadcrumb-schema',
'/holiday/usa-holiday/fix-state-pages',
'/holiday/usa-holiday/generate-comprehensive-states',
'/fix-broken-images',
'/googleb62a814b9aa3f5fa.html'
];

// Folders to EXCLUDE (will not scan these folders)
$excludedFolders = [
    '/admin',
    '/includes',
    '/assets',
    '/css',
    '/js',
    '/images',
    '/blog'
];

// Function to remove .php extension
function removePhpExtension($path) {
    return preg_replace('/\.php$/', '', $path);
}

// Function to scan directories recursively
function scanDirectory($dir, $baseDir, &$foundPages, $excludedPages, $excludedFolders) {
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::SELF_FIRST
    );
    
    foreach ($iterator as $file) {
        $pathname = $file->getPathname();
        $relativePath = str_replace($baseDir, '', $pathname);
        $relativePath = str_replace('\\', '/', $relativePath); // Windows compatibility
        
        // Skip excluded folders
        $isExcludedFolder = false;
        foreach ($excludedFolders as $folder) {
            if (strpos($relativePath, $folder) === 0) {
                $isExcludedFolder = true;
                break;
            }
        }
        if ($isExcludedFolder) continue;
        
        if ($file->isFile() && in_array(strtolower($file->getExtension()), ['php', 'html'])) {
            $cleanPath = removePhpExtension($relativePath);
            
            // Skip if excluded or already manually defined
            if (!in_array($relativePath, $excludedPages) && 
                !in_array($cleanPath, $excludedPages) && 
                !isset($foundPages[$cleanPath])) {
                $foundPages[$cleanPath] = [
                    'lastmod' => date('Y-m-d', $file->getMTime()),
                    'changefreq' => 'daily',
                    'priority' => '1.0'
                ];
            }
        }
    }
}

// Scan the document root and all subdirectories
scanDirectory($_SERVER['DOCUMENT_ROOT'], $_SERVER['DOCUMENT_ROOT'], $pages, $excludedPages, $excludedFolders);

// Generate the sitemap
foreach ($pages as $path => $data) {
    echo '<url>';
    echo '<loc>' . htmlspecialchars($baseUrl . $path) . '</loc>';
    echo '<lastmod>' . $data['lastmod'] . '</lastmod>';
    echo '<changefreq>' . $data['changefreq'] . '</changefreq>';
    echo '<priority>' . $data['priority'] . '</priority>';
    echo '</url>';
}
?>
</urlset>
