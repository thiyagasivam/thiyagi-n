<?php include 'header.php';?>

<?php
// Function to check Google cache of a URL using cURL
function checkGoogleCache($url) {
    $cacheUrl = "https://webcache.googleusercontent.com/search?q=cache:" . urlencode($url);

    // Initialize cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $cacheUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_NOBODY, true); // Only fetch headers

    // Execute cURL request
    curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        return false;
    }

    // Get HTTP status code
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Return cache URL if status code is 200
    return ($httpCode === 200) ? $cacheUrl : false;
}

// Handle form submission
$cacheUrl = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputUrl = $_POST['url'];
    if (!empty($inputUrl)) {
        // Validate URL format
        if (filter_var($inputUrl, FILTER_VALIDATE_URL)) {
            $cacheUrl = checkGoogleCache($inputUrl);
            if (!$cacheUrl) {
                $error = 'No cached version found for this URL.';
            }
        } else {
            $error = 'Invalid URL format. Please enter a valid URL.';
        }
    } else {
        $error = 'Please enter a URL to check.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Google Cache Checker 2026 - View Cached Pages & Last Crawl Date</title>
<meta name="description" content="Check if your webpage is cached by Google in 2026. Instantly view cached versions, last crawl date, and troubleshoot indexing issues - No login required!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Google Cache Checker</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="url" class="block text-gray-700 font-bold mb-2">Enter URL:</label>
                <input type="url" name="url" id="url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., https://example.com" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Check Cache</button>
        </form>
        <?php if (!empty($cacheUrl)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Cached URL:</h2>
                <p class="text-gray-700 text-xl mt-2">
                    <a href="<?php echo htmlspecialchars($cacheUrl); ?>" target="_blank" class="text-blue-500 hover:underline"><?php echo htmlspecialchars($cacheUrl); ?></a>
                </p>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-6 bg-red-100 p-6 rounded-lg shadow-md">
                <p class="text-red-700 text-xl"><?php echo htmlspecialchars($error); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

<?php include 'footer.php';?>

</html>
