<?php include 'header.php';?>

<?php
// Free API Key (Replace with your own API key from a free domain age service)
$apiKey = 'YOUR_FREE_API_KEY';

// Function to get domain age using a free API
function getDomainAge($domain, $apiKey) {
    $domain = strtolower(trim($domain));
    $domain = preg_replace('/^https?:\/\//', '', $domain); // Remove http:// or https://
    $domain = preg_replace('/^www\./', '', $domain); // Remove www.

    // Use a free API to get domain age
    $apiUrl = "https://api.whoisxmlapi.com/whoisserver/WhoisService?apiKey=$apiKey&domainName=$domain&outputFormat=JSON";
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);

    if (isset($data['WhoisRecord']['createdDate'])) {
        $creationDate = strtotime($data['WhoisRecord']['createdDate']);
        $currentDate = time();
        $ageInSeconds = $currentDate - $creationDate;
        $ageInYears = floor($ageInSeconds / (365 * 24 * 60 * 60));
        return $ageInYears;
    } else {
        return false;
    }
}

// Handle form submission
$domainAge = null;
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $domain = $_POST['domain'];
    if (!empty($domain)) {
        $domainAge = getDomainAge($domain, $apiKey);
        if ($domainAge === false) {
            $error = 'Unable to fetch domain age. Please check the domain name.';
        }
    } else {
        $error = 'Please enter a valid domain name.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Domain Age Checker 2026 - Find Out How Old Any Website Is"</title>
    <meta name="description" content="Instantly check the age and registration details of any domain with our free 2026 tool. Perfect for SEO analysis, competitor research, and domain investments!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">Domain Age Checker</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="domain" class="block text-gray-700 font-bold mb-2">Enter Domain:</label>
                <input type="text" name="domain" id="domain" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., example.com" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Check Domain Age</button>
        </form>
        <?php if ($domainAge !== null): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Domain Age:</h2>
                <p class="text-gray-700 text-xl mt-2"><?php echo htmlspecialchars($domainAge); ?> years</p>
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
