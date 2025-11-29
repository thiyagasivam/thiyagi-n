<?php include 'header.php';?>

<?php
// Function to generate .htaccess redirect rules
function generateHtaccessRedirect($oldUrl, $newUrl, $redirectType) {
    $oldUrl = trim($oldUrl, '/');
    $newUrl = trim($newUrl, '/');

    // Ensure the redirect type is valid
    if (!in_array($redirectType, [301, 302])) {
        $redirectType = 301;
    }

    return "Redirect $redirectType /$oldUrl /$newUrl";
}

// Handle form submission
$htaccessRule = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oldUrl = $_POST['old_url'];
    $newUrl = $_POST['new_url'];
    $redirectType = $_POST['redirect_type'];

    $htaccessRule = generateHtaccessRedirect($oldUrl, $newUrl, $redirectType);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free .htaccess Redirect Generator 2025 - Create 301/302 Rules in Seconds</title>
<meta name="description" content="Generate error-free Apache redirect code for 301 (permanent), 302 (temporary), and HTTPS forced rules (2025). No server skills required - copy-paste ready!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center mb-6">.htaccess Redirect Generator</h1>
        <form method="POST" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="old_url" class="block text-gray-700 font-bold mb-2">Old URL:</label>
                <input type="text" name="old_url" id="old_url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., old-page" required>
            </div>
            <div class="mb-4">
                <label for="new_url" class="block text-gray-700 font-bold mb-2">New URL:</label>
                <input type="text" name="new_url" id="new_url" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="e.g., new-page" required>
            </div>
            <div class="mb-4">
                <label for="redirect_type" class="block text-gray-700 font-bold mb-2">Redirect Type:</label>
                <select name="redirect_type" id="redirect_type" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="301">301 (Permanent Redirect)</option>
                    <option value="302">302 (Temporary Redirect)</option>
                </select>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">Generate .htaccess Rule</button>
        </form>
        <?php if (!empty($htaccessRule)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800">Generated .htaccess Rule:</h2>
                <pre class="bg-gray-100 p-4 rounded-lg mt-2 text-gray-700"><code><?php echo htmlspecialchars($htaccessRule); ?></code></pre>
            </div>
        <?php endif; ?>
    </div>
</body>

<?php include 'footer.php';?>

</html>
