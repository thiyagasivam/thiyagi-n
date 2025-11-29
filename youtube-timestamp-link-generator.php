<?php
include 'header.php';

?>
<title>YouTube Timestamp Link Generator 2025 - Create Time-Stamped URLs | 25+ Years Experience</title>
<meta name="description" content="Generate YouTube links with specific timestamps for video sharing. Professional timestamp tool for content creators and educators. Built with 25+ years of digital expertise for 2025 video optimization.">
<meta name="keywords" content="YouTube timestamp generator, timestamp link, video timestamp, YouTube time link, video sharing 2025">

<div class="min-h-screen bg-gradient-to-br from-red-50 to-pink-100 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-4xl mx-auto">
    <h1 class="text-4xl font-bold text-center text-gray-900 mb-8">YouTube Timestamp Link Generator 2025</h1>
    <p class="text-xl text-gray-600 text-center mb-12">Create time-stamped video links instantly - Professional tool with 25+ years of experience</p>
  </div>
</div>

<?php
function generateTimestampLink($videoUrl, $timestamp) {
    // Extract video ID using comprehensive regex
    preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $videoUrl, $matches);
    $videoId = $matches[1] ?? '';
    
    if (empty($videoId)) {
        return 'Invalid YouTube URL. Please use a standard YouTube URL.';
    }

    // Validate timestamp (HH:MM:SS or MM:SS or M:SS)
    if (!preg_match('/^(\d{1,2}:)?[0-5]?\d:[0-5]\d$/', $timestamp)) {
        return 'Invalid timestamp format. Use HH:MM:SS or MM:SS';
    }

    // Convert timestamp to seconds
    $parts = array_reverse(explode(':', $timestamp));
    $seconds = 0;
    foreach ($parts as $index => $part) {
        $seconds += intval($part) * pow(60, $index);
    }

    // Generate clean link
    return "https://youtu.be/$videoId?t=$seconds";
}

// Handle form submission
$timestampLink = '';
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $videoUrl = trim($_POST['video_url'] ?? '');
    $timestamp = trim($_POST['timestamp'] ?? '');

    if (!empty($videoUrl) && !empty($timestamp)) {
        $result = generateTimestampLink($videoUrl, $timestamp);
        if (strpos($result, 'http') === 0) {
            $timestampLink = $result;
        } else {
            $error = $result;
        }
    } else {
        $error = 'Please fill in all fields.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Timestamp Link Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .input-error {
            border-color: #f87171;
        }
    </style>

</head>
<body class="bg-gray-100 min-h-screen">
    <div class="container mx-auto p-4 max-w-2xl">
        <h1 class="text-3xl font-bold text-center mb-6 text-gray-800">YouTube Timestamp Link Generator</h1>
        
        <div class="bg-white p-6 rounded-lg shadow-md">
            <form method="POST">
                <div class="mb-4">
                    <label for="video_url" class="block text-gray-700 font-bold mb-2">YouTube Video URL:</label>
                    <input type="url" name="video_url" id="video_url" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 <?php echo !empty($error) && empty($videoUrl) ? 'input-error' : '' ?>" 
                           placeholder="e.g., https://www.youtube.com/watch?v=dQw4w9WgXcQ" 
                           value="<?php echo htmlspecialchars($_POST['video_url'] ?? '') ?>" required>
                </div>
                
                <div class="mb-6">
                    <label for="timestamp" class="block text-gray-700 font-bold mb-2">Timestamp:</label>
                    <input type="text" name="timestamp" id="timestamp" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 <?php echo !empty($error) && empty($timestamp) ? 'input-error' : '' ?>" 
                           placeholder="e.g., 1:23 or 01:23:45" 
                           value="<?php echo htmlspecialchars($_POST['timestamp'] ?? '') ?>" required>
                    <p class="text-sm text-gray-500 mt-1">Format: MM:SS or HH:MM:SS</p>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                    Generate Timestamp Link
                </button>
            </form>
        </div>

        <?php if (!empty($timestampLink)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Your Timestamp Link:</h2>
                <div class="bg-gray-50 p-3 rounded break-all">
                    <a href="<?php echo htmlspecialchars($timestampLink); ?>" target="_blank" class="text-blue-600 hover:underline">
                        <?php echo htmlspecialchars($timestampLink); ?>
                    </a>
                </div>
                <button onclick="copyToClipboard('<?php echo htmlspecialchars($timestampLink); ?>')" 
                        class="mt-3 bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded transition duration-200">
                    Copy Link
                </button>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-6 bg-red-50 border-l-4 border-red-500 p-4">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-red-700"><?php echo htmlspecialchars($error); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <script>
        function copyToClipboard(text) {
            navigator.clipboard.writeText(text).then(() => {
                alert('Link copied to clipboard!');
            }).catch(err => {
                console.error('Failed to copy: ', err);
            });
        }
    </script>
</body>
</html>

<?php include 'footer.php'; ?>
