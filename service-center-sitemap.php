<?php
// service-center-sitemap.php - Dynamic sitemap for service center pages
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php
$baseUrl = 'https://www.thiyagi.com';
$today = date('Y-m-d'); // Current date - updates daily

// Read the static XML file to extract URLs
$xmlFile = __DIR__ . '/service-center-sitemap.xml';
if (file_exists($xmlFile)) {
    $xml = simplexml_load_file($xmlFile);
    
    foreach ($xml->url as $url) {
        $loc = (string)$url->loc;
        $changefreq = (string)$url->changefreq;
        $priority = (string)$url->priority;
        
        // Output with today's date instead of static date
        echo '<url>';
        echo '<loc>' . htmlspecialchars($loc) . '</loc>';
        echo '<lastmod>' . $today . '</lastmod>';
        echo '<changefreq>' . $changefreq . '</changefreq>';
        echo '<priority>' . $priority . '</priority>';
        echo '</url>' . "\n";
    }
} else {
    // Fallback if XML file doesn't exist
    echo '<!-- Service center sitemap XML file not found -->';
}
?>
</urlset>
