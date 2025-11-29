<?php include 'header.php'; ?>

<?php
// YouTube Data API Key (Replace with your own API key)
$apiKey = 'AIzaSyBHLsQwaN3hOuuP8YQluOFNi4iu5K_XqEo';

// Helper: safe JSON fetch with timeout
function getJson(string $url): ?array {
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => 8,
            'header'  => "Accept: application/json\r\n",
        ]
    ]);
    $resp = @file_get_contents($url, false, $context);
    if ($resp === false) return null;
    $data = json_decode($resp, true);
    return is_array($data) ? $data : null;
}

// Resolve input to a channel ID (supports /channel/, /user/, /c/, and @handle or raw UC id)
function resolveChannelId(string $input, string $apiKey): ?string {
    $trim = trim($input);
    if ($trim === '') return null;

    // Raw Channel ID
    if (preg_match('/^UC[0-9A-Za-z_-]{20,}$/', $trim)) {
        return $trim;
    }

    // Extract path from URL if present
    $path = $trim;
    if (preg_match('~^https?://[^/]+(/.*)$~i', $trim, $m)) {
        $path = $m[1];
    }

    // /channel/UC...
    if (preg_match('~/(channel)/([0-9A-Za-z_-]+)~i', $path, $m)) {
        return $m[2];
    }

    // /user/USERNAME
    if (preg_match('~/(user)/([0-9A-Za-z]+)~i', $path, $m)) {
        $username = $m[2];
        $url = 'https://www.googleapis.com/youtube/v3/channels?part=id&forUsername=' . urlencode($username) . '&key=' . urlencode($apiKey);
        $data = getJson($url);
        if ($data && !empty($data['items'][0]['id'])) return $data['items'][0]['id'];
    }

    // /@handle
    if (preg_match('~/@([A-Za-z0-9._-]+)~', $path, $m)) {
        $handle = '@' . $m[1];
        $url = 'https://www.googleapis.com/youtube/v3/search?part=id&type=channel&maxResults=1&q=' . urlencode($handle) . '&key=' . urlencode($apiKey);
        $data = getJson($url);
        if ($data && !empty($data['items'][0]['id']['channelId'])) return $data['items'][0]['id']['channelId'];
    }

    // /c/customName or fallback search
    if (preg_match('~/(c|@)?/??([A-Za-z0-9._-]+)~', $path, $m)) {
        $query = $m[2];
        $url = 'https://www.googleapis.com/youtube/v3/search?part=id&type=channel&maxResults=1&q=' . urlencode($query) . '&key=' . urlencode($apiKey);
        $data = getJson($url);
        if ($data && !empty($data['items'][0]['id']['channelId'])) return $data['items'][0]['id']['channelId'];
    }

    return null;
}

// Fetch channel snippet (publishedAt and title)
function fetchChannelSnippet(string $channelId, string $apiKey): ?array {
    $apiUrl = 'https://www.googleapis.com/youtube/v3/channels?part=snippet&id=' . urlencode($channelId) . '&key=' . urlencode($apiKey);
    $data = getJson($apiUrl);
    if (!$data || !empty($data['error']['message'])) return null;
    if (empty($data['items'][0]['snippet'])) return null;
    return $data['items'][0]['snippet'];
}

// Compute human-readable age from ISO date string
function computeAge(string $isoDate): array {
    try {
        $created = new DateTime($isoDate);
        $now = new DateTime('now');
        $diff = $created->diff($now);
        $ageStr = sprintf('%d years, %d months, %d days', $diff->y, $diff->m, $diff->d);
        return [
            'created_fmt' => $created->format('F j, Y'),
            'age' => $ageStr
        ];
    } catch (Exception $e) {
        return [ 'created_fmt' => '', 'age' => '' ];
    }
}

// Handle form submission
$result = null; // ['title'=>..., 'created'=>..., 'age'=>...]
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $channelUrl = trim($_POST['channel_url'] ?? '');
    if ($channelUrl === '') {
        $error = 'Please enter a YouTube channel URL, @handle, or Channel ID.';
    } else {
        $channelId = resolveChannelId($channelUrl, $apiKey);
        if ($channelId) {
            $snippet = fetchChannelSnippet($channelId, $apiKey);
            if ($snippet && !empty($snippet['publishedAt'])) {
                $age = computeAge($snippet['publishedAt']);
                $result = [
                    'title' => $snippet['title'] ?? 'Channel',
                    'created' => $age['created_fmt'],
                    'age' => $age['age']
                ];
            } else {
                $error = 'Unable to fetch channel details. The channel may be unavailable or API quota is exceeded.';
            }
        } else {
            $error = 'Could not resolve the channel. Provide a valid channel URL (/channel/UC...), @handle, legacy /user/, custom /c/ URL, or raw Channel ID.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube Channel Age Checker 2025 - Find Channel Creation Date</title>
    <meta name="description" content="Check when a YouTube channel was created. Enter a channel URL, @handle, or ID to get the creation date and exact age.">
    <meta name="keywords" content="YouTube channel age checker, channel creation date, YouTube handle, channel ID, YouTube channel age">
    <link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?'); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="YouTube Channel Age Checker - Find Channel Creation Date">
    <meta property="og:description" content="Enter a YouTube channel URL, @handle, or ID to see the channel's creation date and age.">
    <meta property="og:url" content="https://www.thiyagi.com/youtube-channel-age-checker">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="YouTube Channel Age Checker - Find Channel Creation Date">
    <meta name="twitter:description" content="Enter a YouTube channel URL, @handle, or ID to see the channel's creation date and age.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">

    <!-- JSON-LD -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebApplication",
      "name": "YouTube Channel Age Checker",
      "url": "https://www.thiyagi.com/youtube-channel-age-checker",
      "applicationCategory": "Utility",
      "description": "Find the creation date and age of any YouTube channel by entering a URL, handle, or ID.",
      "operatingSystem": "Web Browser",
      "offers": {"@type": "Offer", "price": "0", "priceCurrency": "USD"}
    }
    </script>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="bg-gray-50">
    <!-- Breadcrumb -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center space-x-2 py-3 text-sm">
                <a href="./" class="text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-home mr-1"></i>
                    Home
                </a>
                <i class="fas fa-chevron-right text-gray-400 text-xs"></i>
                <span class="text-gray-600">YouTube Channel Age Checker</span>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="bg-gradient-to-br from-red-600 to-red-800 text-white py-14">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full mb-4">
                <i class="fab fa-youtube text-3xl"></i>
            </div>
            <h1 class="text-4xl font-bold mb-3">YouTube Channel Age Checker</h1>
            <p class="text-red-100">Find when a channel was created and how old it is. Works with channel URLs, @handles, and IDs.</p>
            <div class="mt-4 flex flex-wrap justify-center gap-2 text-sm">
                <span class="bg-white/20 px-3 py-1 rounded-full">🧭 Easy</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">🧩 Flexible input</span>
                <span class="bg-white/20 px-3 py-1 rounded-full">📱 Mobile-ready</span>
            </div>
        </div>
    </div>

    <div class="max-w-4xl mx-auto p-6 -mt-10">
        <form method="POST" class="bg-white p-6 md:p-8 rounded-lg shadow-xl" novalidate>
            <div class="mb-4">
                <label for="channel_url" class="block text-gray-700 font-semibold mb-2">Enter YouTube Channel URL, @handle, or Channel ID</label>
                <input type="text" name="channel_url" id="channel_url" value="<?php echo htmlspecialchars($_POST['channel_url'] ?? ''); ?>" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-red-500 transition duration-300" placeholder="e.g., https://www.youtube.com/channel/UC..., https://www.youtube.com/@handle, UC..., or /user/username" required>
                <p class="text-sm text-gray-500 mt-2">Supported: /channel/UC..., @handle, legacy /user/username, custom /c/name, or raw Channel ID.</p>
            </div>
            <button type="submit" class="w-full bg-gradient-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300 shadow-lg">Check Channel Age</button>
        </form>
        <?php if (!empty($result)): ?>
            <div class="mt-8 bg-white p-6 md:p-8 rounded-lg shadow-xl">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-gray-800 flex items-center">
                        <i class="fas fa-calendar-alt text-green-600 mr-2"></i>
                        Channel Creation Date
                    </h2>
                    <button id="copyBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition duration-300">
                        <i class="fas fa-copy mr-1"></i> Copy
                    </button>
                </div>
                <div class="mt-4 text-gray-700">
                    <p class="text-lg"><span class="font-semibold">Channel:</span> <?php echo htmlspecialchars($result['title']); ?></p>
                    <p class="text-lg mt-1"><span class="font-semibold">Created on:</span> <span id="createdDate"><?php echo htmlspecialchars($result['created']); ?></span></p>
                    <p class="text-lg mt-1"><span class="font-semibold">Age:</span> <span id="ageText"><?php echo htmlspecialchars($result['age']); ?></span></p>
                </div>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="mt-6 bg-red-100 p-6 rounded-lg shadow-md">
                <p class="text-red-700 text-xl"><?php echo htmlspecialchars($error); ?></p>
            </div>
        <?php endif; ?>
    </div>

    <!-- FAQ -->
    <div class="bg-white rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-5xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-question-circle text-blue-600 mr-3"></i>
                Frequently Asked Questions
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Which inputs are supported?</h3>
                    <p class="text-gray-600">Paste a channel URL like <code class="bg-gray-100 px-1 rounded">/channel/UC...</code>, a <code>@handle</code>, legacy <code>/user/username</code>, custom <code>/c/name</code>, or the raw Channel ID.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Why can’t it find some channels?</h3>
                    <p class="text-gray-600">Some channels are private or the API quota may be exceeded. Try again later or verify the input.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">What’s included in the age?</h3>
                    <p class="text-gray-600">We show the exact creation date and a detailed age breakdown in years, months, and days.</p>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-2 text-gray-800">Is the date 100% accurate?</h3>
                    <p class="text-gray-600">We use YouTube’s <code>publishedAt</code> from the channel snippet, which is the channel’s creation timestamp.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Tools -->
    <div class="bg-gray-50 rounded-lg shadow-lg mx-4 mb-8">
        <div class="p-8 max-w-6xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-8 text-gray-800">
                <i class="fas fa-tools text-red-600 mr-3"></i>
                Related YouTube Tools
            </h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <a href="youtube-channel-logo-downloader" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-red-500 text-2xl mb-2">🖼️</div>
                    <h3 class="font-bold text-gray-700 text-sm">Channel Logo Downloader</h3>
                    <p class="text-gray-600 text-xs">Download channel icons</p>
                </a>
                <a href="youtube-thumbnail-downloader" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-pink-500 text-2xl mb-2">🖼️</div>
                    <h3 class="font-bold text-gray-700 text-sm">Thumbnail Downloader</h3>
                    <p class="text-gray-600 text-xs">Grab video thumbnails</p>
                </a>
                <a href="youtube-video-statistics" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-purple-500 text-2xl mb-2">📊</div>
                    <h3 class="font-bold text-gray-700 text-sm">Video Statistics</h3>
                    <p class="text-gray-600 text-xs">Get detailed video stats</p>
                </a>
                <a href="youtube-embed-code-generator" class="p-4 border border-gray-200 rounded-lg hover:shadow-md transition duration-300 bg-white">
                    <div class="text-green-500 text-2xl mb-2">🧩</div>
                    <h3 class="font-bold text-gray-700 text-sm">Embed Code Generator</h3>
                    <p class="text-gray-600 text-xs">Generate privacy-friendly iframes</p>
                </a>
            </div>
        </div>
    </div>
    <script>
    document.getElementById('copyBtn')?.addEventListener('click', function(){
        const created = document.getElementById('createdDate')?.innerText || '';
        const age = document.getElementById('ageText')?.innerText || '';
        const text = `Created on: ${created} (Age: ${age})`;
        navigator.clipboard.writeText(text).then(() => {
            const self = this;
            const old = self.textContent;
            self.textContent = 'Copied!';
            setTimeout(() => self.textContent = old, 1500);
        });
    });
    </script>

</body>
<?php include 'footer.php'; ?>

</html>
