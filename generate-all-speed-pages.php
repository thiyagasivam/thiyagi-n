<?php
/**
 * DEPRECATED: Unit Converter Pages Generator
 * 
 * ⚠️ WARNING: This master script is DEPRECATED and should NOT be used.
 * All static page generation has been replaced with dynamic PHP implementations.
 * 
 * Use these dynamic PHP files instead:
 * - kph-to-mph.php for /kph-to-mph/* URLs
 * - mph-to-kph.php for /mph-to-kph/* URLs  
 * - kg-to-lbs.php for /kg-to-lbs/* URLs
 * - lbs-to-kg.php for /lbs-to-kg/* URLs
 */

die('DEPRECATED: This master script should not be run. All converters now use dynamic PHP implementations.');

/**
 * Master script to generate all dynamic converter pages (Speed & Weight)
 * 
 * This script generates 4000 static HTML pages:
 * - 1000 KPH to MPH conversion pages (/kph-to-mph/1 to /kph-to-mph/1000)
 * - 1000 MPH to KPH conversion pages (/mph-to-kph/1 to /mph-to-kph/1000)
 * - 1000 KG to LBS conversion pages (/kg-to-lbs/1 to /kg-to-lbs/1000)
 * - 1000 LBS to KG conversion pages (/lbs-to-kg/1 to /lbs-to-kg/1000)
 * 
 * Usage:
 * 1. Run from command line: php generate-all-speed-pages.php
 * 2. Run from web browser: http://yourdomain.com/generate-all-speed-pages.php
 * 
 * Benefits:
 * - Better SEO with static pages
 * - Faster loading times
 * - Pre-generated content for search engines
 * - Automatic sitemap integration
 */

// Set execution limits
set_time_limit(0);
ini_set('memory_limit', '512M');

// Configuration
$baseDir = __DIR__;
$logFile = $baseDir . '/generation-log.txt';

// Logging function
function logMessage($message) {
    global $logFile;
    $timestamp = date('Y-m-d H:i:s');
    $logEntry = "[{$timestamp}] {$message}\n";
    file_put_contents($logFile, $logEntry, FILE_APPEND);
    echo $logEntry;
}

// HTML output for web browser
$isWebRequest = isset($_SERVER['HTTP_HOST']);
if ($isWebRequest) {
    echo "<!DOCTYPE html>
<html>
<head>
    <title>Unit Converter Pages Generator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f5f5f5; }
        .container { max-width: 800px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        .progress { background: #e0e0e0; border-radius: 10px; padding: 3px; margin: 10px 0; }
        .progress-bar { background: #4CAF50; height: 20px; border-radius: 8px; width: 0%; transition: width 0.3s; }
        .status { margin: 10px 0; padding: 10px; border-radius: 4px; }
        .success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
        .info { background: #d1ecf1; color: #0c5460; border: 1px solid #bee5eb; }
        .log { background: #f8f9fa; border: 1px solid #e9ecef; padding: 15px; border-radius: 4px; font-family: monospace; font-size: 12px; max-height: 300px; overflow-y: auto; }
    </style>
</head>
<body>
<div class='container'>
    <h1>🚀 Unit Converter Pages Generator</h1>
    <p>Generating 4000 static HTML pages for better SEO performance...</p>
    <div class='log' id='log'>";
    
    // Flush output buffer to show progress
    ob_flush();
    flush();
}

logMessage("=== Unit Converter Pages Generation Started ===");
logMessage("Memory limit: " . ini_get('memory_limit'));
logMessage("Execution time limit: " . (ini_get('max_execution_time') ?: 'unlimited'));

$totalStartTime = microtime(true);
$totalGenerated = 0;
$errors = [];

try {
    // Create base directories
    $kphMphDir = $baseDir . '/generated-pages/kph-to-mph/';
    $mphKphDir = $baseDir . '/generated-pages/mph-to-kph/';
    $kgLbsDir = $baseDir . '/generated-pages/kg-to-lbs/';
    $lbsKgDir = $baseDir . '/generated-pages/lbs-to-kg/';
    
    if (!is_dir($kphMphDir)) {
        mkdir($kphMphDir, 0755, true);
        logMessage("Created directory: {$kphMphDir}");
    }
    
    if (!is_dir($mphKphDir)) {
        mkdir($mphKphDir, 0755, true);
        logMessage("Created directory: {$mphKphDir}");
    }
    
    if (!is_dir($kgLbsDir)) {
        mkdir($kgLbsDir, 0755, true);
        logMessage("Created directory: {$kgLbsDir}");
    }
    
    if (!is_dir($lbsKgDir)) {
        mkdir($lbsKgDir, 0755, true);
        logMessage("Created directory: {$lbsKgDir}");
    }

    // Generate KPH to MPH pages
    logMessage("Starting KPH to MPH page generation...");
    
    if ($isWebRequest) {
        echo "<div class='status info'>Generating KPH to MPH pages (1-1000)...</div>";
        ob_flush();
        flush();
    }
    
    include_once 'generate-kph-mph-pages.php';
    $totalGenerated += 1000;
    
    logMessage("Completed KPH to MPH page generation");

    // Generate MPH to KPH pages
    logMessage("Starting MPH to KPH page generation...");
    
    if ($isWebRequest) {
        echo "<div class='status info'>Generating MPH to KPH pages (1-1000)...</div>";
        ob_flush();
        flush();
    }
    
    include_once 'generate-mph-kph-pages.php';
    $totalGenerated += 1000;
    
    logMessage("Completed MPH to KPH page generation");

    // Generate KG to LBS pages
    logMessage("Starting KG to LBS page generation...");
    
    if ($isWebRequest) {
        echo "<div class='status info'>Generating KG to LBS pages (1-1000)...</div>";
        ob_flush();
        flush();
    }
    
    include_once 'generate-kg-lbs-pages.php';
    $totalGenerated += 1000;
    
    logMessage("Completed KG to LBS page generation");

    // Generate LBS to KG pages
    logMessage("Starting LBS to KG page generation...");
    
    if ($isWebRequest) {
        echo "<div class='status info'>Generating LBS to KG pages (1-1000)...</div>";
        ob_flush();
        flush();
    }
    
    include_once 'generate-lbs-kg-pages.php';
    $totalGenerated += 1000;
    
    logMessage("Completed LBS to KG page generation");

} catch (Exception $e) {
    $error = "Error during generation: " . $e->getMessage();
    $errors[] = $error;
    logMessage($error);
}

$totalEndTime = microtime(true);
$totalDuration = round($totalEndTime - $totalStartTime, 2);

// Final statistics
$stats = [
    'Total pages generated' => number_format($totalGenerated),
    'Total time' => $totalDuration . ' seconds',
    'Average time per page' => round($totalDuration / $totalGenerated * 1000, 2) . ' ms',
    'Memory usage' => round(memory_get_peak_usage(true) / 1024 / 1024, 2) . ' MB',
    'Errors' => count($errors)
];

logMessage("=== Generation Complete ===");
foreach ($stats as $key => $value) {
    logMessage("{$key}: {$value}");
}

if ($isWebRequest) {
    echo "<div class='status success'>";
    echo "<h3>✅ Generation Complete!</h3>";
    echo "<ul>";
    foreach ($stats as $key => $value) {
        echo "<li><strong>{$key}:</strong> {$value}</li>";
    }
    echo "</ul>";
    echo "</div>";
    
    if (!empty($errors)) {
        echo "<div class='status error'>";
        echo "<h3>❌ Errors Encountered:</h3>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>{$error}</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    
    echo "<div class='status info'>";
    echo "<h3>📊 Generated Pages:</h3>";
    echo "<ul>";
    echo "<li><strong>KPH to MPH:</strong> 1000 pages (1-1000 kph)</li>";
    echo "<li><strong>MPH to KPH:</strong> 1000 pages (1-1000 mph)</li>";
    echo "<li><strong>KG to LBS:</strong> 1000 pages (1-1000 kg)</li>";
    echo "<li><strong>LBS to KG:</strong> 1000 pages (1-1000 lbs)</li>";
    echo "<li><strong>Total:</strong> 4000 static HTML pages</li>";
    echo "</ul>";
    echo "</div>";
    
    echo "<div class='status info'>";
    echo "<h3>🔗 URL Examples:</h3>";
    echo "<ul>";
    echo "<li><a href='/kph-to-mph/100' target='_blank'>/kph-to-mph/100</a> - Convert 100 KPH to MPH</li>";
    echo "<li><a href='/mph-to-kph/60' target='_blank'>/mph-to-kph/60</a> - Convert 60 MPH to KPH</li>";
    echo "<li><a href='/kg-to-lbs/70' target='_blank'>/kg-to-lbs/70</a> - Convert 70 KG to LBS</li>";
    echo "<li><a href='/lbs-to-kg/150' target='_blank'>/lbs-to-kg/150</a> - Convert 150 LBS to KG</li>";
    echo "</ul>";
    echo "</div>";
    
    echo "</div></div></body></html>";
} else {
    // Command line output
    if (!empty($errors)) {
        echo "\nErrors encountered:\n";
        foreach ($errors as $error) {
            echo "- {$error}\n";
        }
    }
    
    echo "\n🎉 All done! Generated {$totalGenerated} pages in {$totalDuration} seconds.\n";
    echo "\n📁 Pages saved to:\n";
    echo "- KPH to MPH: {$kphMphDir}\n";
    echo "- MPH to KPH: {$mphKphDir}\n";
    echo "\n🔗 Test URLs:\n";
    echo "- /kph-to-mph/100 (100 KPH to MPH)\n";
    echo "- /mph-to-kph/60 (60 MPH to KPH)\n";
    echo "- /kg-to-lbs/70 (70 KG to LBS)\n";
    echo "- /lbs-to-kg/150 (150 LBS to KG)\n";
}

// Generate a summary report
$reportContent = "# Speed Converter Pages Generation Report\n\n";
$reportContent .= "Generated on: " . date('Y-m-d H:i:s') . "\n\n";
$reportContent .= "## Statistics\n\n";
foreach ($stats as $key => $value) {
    $reportContent .= "- **{$key}:** {$value}\n";
}
$reportContent .= "\n## Generated URLs\n\n";
$reportContent .= "### KPH to MPH Conversions\n";
$reportContent .= "- Format: `/kph-to-mph/{number}`\n";
$reportContent .= "- Range: 1 to 1000\n";
$reportContent .= "- Examples: `/kph-to-mph/100`, `/kph-to-mph/320`\n\n";
$reportContent .= "### MPH to KPH Conversions\n";
$reportContent .= "- Format: `/mph-to-kph/{number}`\n";
$reportContent .= "- Range: 1 to 1000\n";
$reportContent .= "- Examples: `/mph-to-kph/60`, `/mph-to-kph/75`\n\n";
$reportContent .= "## SEO Benefits\n\n";
$reportContent .= "- 2000 unique, optimized pages added to sitemap\n";
$reportContent .= "- Each page has unique title, description, and meta tags\n";
$reportContent .= "- Structured data (Schema.org) for better search visibility\n";
$reportContent .= "- Open Graph and Twitter Card meta tags\n";
$reportContent .= "- Fast loading static HTML pages\n";

file_put_contents($baseDir . '/generation-report.md', $reportContent);
logMessage("Generated report: generation-report.md");
?>