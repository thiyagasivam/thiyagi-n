<?php include 'header.php'; ?>

<?php
// Function to generate tiny text variants
function generateTinyText($text) {
    $tinyText = [
        'small' => [
            'a' => 'ᵃ', 'b' => 'ᵇ', 'c' => 'ᶜ', 'd' => 'ᵈ', 'e' => 'ᵉ',
            'f' => 'ᶠ', 'g' => 'ᵍ', 'h' => 'ʰ', 'i' => 'ⁱ', 'j' => 'ʲ',
            'k' => 'ᵏ', 'l' => 'ˡ', 'm' => 'ᵐ', 'n' => 'ⁿ', 'o' => 'ᵒ',
            'p' => 'ᵖ', 'q' => 'ᑫ', 'r' => 'ʳ', 's' => 'ˢ', 't' => 'ᵗ',
            'u' => 'ᵘ', 'v' => 'ᵛ', 'w' => 'ʷ', 'x' => 'ˣ', 'y' => 'ʸ',
            'z' => 'ᶻ'
        ],
        'superscript' => [
            'a' => 'ᵃ', 'b' => 'ᵇ', 'c' => 'ᶜ', 'd' => 'ᵈ', 'e' => 'ᵉ',
            'f' => 'ᶠ', 'g' => 'ᵍ', 'h' => 'ʰ', 'i' => 'ⁱ', 'j' => 'ʲ',
            'k' => 'ᵏ', 'l' => 'ˡ', 'm' => 'ᵐ', 'n' => 'ⁿ', 'o' => 'ᵒ',
            'p' => 'ᵖ', 'r' => 'ʳ', 's' => 'ˢ', 't' => 'ᵗ', 'u' => 'ᵘ',
            'v' => 'ᵛ', 'w' => 'ʷ', 'x' => 'ˣ', 'y' => 'ʸ', 'z' => 'ᶻ',
            '0' => '⁰', '1' => '¹', '2' => '²', '3' => '³', '4' => '⁴',
            '5' => '⁵', '6' => '⁶', '7' => '⁷', '8' => '⁸', '9' => '⁹'
        ],
        'subscript' => [
            'a' => 'ₐ', 'b' => 'ᵦ', 'c' => '꜀', 'd' => 'ᑯ', 'e' => 'ₑ',
            'f' => 'բ', 'g' => 'ᵧ', 'h' => 'ₕ', 'i' => 'ᵢ', 'j' => 'ⱼ',
            'k' => 'ₖ', 'l' => 'ₗ', 'm' => 'ₘ', 'n' => 'ₙ', 'o' => 'ₒ',
            'p' => 'ₚ', 'r' => 'ᵣ', 's' => 'ₛ', 't' => 'ₜ', 'u' => 'ᵤ',
            'v' => 'ᵥ', 'x' => 'ₓ', '0' => '₀', '1' => '₁', '2' => '₂',
            '3' => '₃', '4' => '₄', '5' => '₅', '6' => '₆', '7' => '₇',
            '8' => '₈', '9' => '₉'
        ],
        'bubble' => [
            'a' => 'ⓐ', 'b' => 'ⓑ', 'c' => 'ⓒ', 'd' => 'ⓓ', 'e' => 'ⓔ',
            'f' => 'ⓕ', 'g' => 'ⓖ', 'h' => 'ⓗ', 'i' => 'ⓘ', 'j' => 'ⓙ',
            'k' => 'ⓚ', 'l' => 'ⓛ', 'm' => 'ⓜ', 'n' => 'ⓝ', 'o' => 'ⓞ',
            'p' => 'ⓟ', 'q' => 'ⓠ', 'r' => 'ⓡ', 's' => 'ⓢ', 't' => 'ⓣ',
            'u' => 'ⓤ', 'v' => 'ⓥ', 'w' => 'ⓦ', 'x' => 'ⓧ', 'y' => 'ⓨ',
            'z' => 'ⓩ', '0' => '⓪', '1' => '①', '2' => '②', '3' => '③',
            '4' => '④', '5' => '⑤', '6' => '⑥', '7' => '⑦', '8' => '⑧',
            '9' => '⑨'
        ]
    ];

    $results = [];
    foreach ($tinyText as $type => $chars) {
        $converted = '';
        $input = strtolower($text);
        for ($i = 0; $i < strlen($input); $i++) {
            $char = $input[$i];
            $converted .= $chars[$char] ?? $char;
        }
        $results[$type] = $converted;
    }

    return $results;
}

// Handle form submission
$originalText = '';
$tinyTextResults = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $originalText = $_POST['text'] ?? '';
    if (!empty($originalText)) {
        $tinyTextResults = generateTinyText($originalText);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiny Text Generator | Convert Text to Small Font</title>
    <meta name="description" content="Generate tiny text (small caps, superscript, subscript) for social media, websites, and more. Convert normal text to small font instantly.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .copy-btn {
            transition: all 0.2s ease;
        }
        .copy-btn:hover {
            transform: translateY(-2px);
        }
        .copy-btn:active {
            transform: translateY(0);
        }
        .result-box {
            min-height: 80px;
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Tiny Text Generator</h1>
            <p class="text-gray-600">Convert normal text to small font for social media, websites, and more</p>
        </header>

        <main class="bg-white rounded-lg shadow-md p-6 mb-8">
            <form method="POST" class="mb-6">
                <div class="mb-4">
                    <label for="text" class="block text-gray-700 font-medium mb-2">Enter Your Text:</label>
                    <textarea id="text" name="text" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Type or paste your text here..." required><?= htmlspecialchars($originalText) ?></textarea>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition duration-200">
                    Generate Tiny Text
                </button>
            </form>

            <?php if (!empty($tinyTextResults)): ?>
                <div class="results">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Your Tiny Text Results:</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php foreach ($tinyTextResults as $type => $result): ?>
                            <div class="result-box bg-gray-50 p-4 rounded-lg border border-gray-200">
                                <div class="flex justify-between items-center mb-2">
                                    <h3 class="font-medium text-gray-700 capitalize">
                                        <?= $type ?> Text
                                    </h3>
                                    <button onclick="copyToClipboard('<?= $type ?>')" class="copy-btn bg-blue-100 text-blue-600 px-3 py-1 rounded text-sm font-medium">
                                        Copy
                                    </button>
                                </div>
                                <div id="<?= $type ?>" class="text-2xl break-all p-2 bg-white rounded border border-gray-300">
                                    <?= htmlspecialchars($result) ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </main>

        <section class="prose max-w-none bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Tiny Text Generator</h2>
            <p class="text-gray-700 mb-4">
                Our Tiny Text Generator transforms your normal text into small caps, superscript, subscript, and bubble text. 
                These tiny fonts are perfect for social media bios, posts, comments, and anywhere you want to stand out.
            </p>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">How to Use:</h3>
            <ol class="list-decimal pl-5 text-gray-700 mb-4">
                <li class="mb-2">Enter your text in the input box above</li>
                <li class="mb-2">Click "Generate Tiny Text"</li>
                <li class="mb-2">Copy your preferred tiny text style</li>
                <li>Paste it wherever you want to use it</li>
            </ol>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Where to Use Tiny Text:</h3>
            <ul class="list-disc pl-5 text-gray-700">
                <li class="mb-2">Instagram, Facebook, Twitter bios and posts</li>
                <li class="mb-2">YouTube comments and descriptions</li>
                <li class="mb-2">TikTok captions</li>
                <li>Discord and other chat platforms</li>
            </ul>
        </section>
    </div>

    <script>
        function copyToClipboard(id) {
            const text = document.getElementById(id).innerText;
            navigator.clipboard.writeText(text).then(() => {
                // Show copied feedback
                const btn = event.target;
                btn.innerText = 'Copied!';
                btn.classList.remove('bg-blue-100', 'text-blue-600');
                btn.classList.add('bg-green-100', 'text-green-600');
                setTimeout(() => {
                    btn.innerText = 'Copy';
                    btn.classList.remove('bg-green-100', 'text-green-600');
                    btn.classList.add('bg-blue-100', 'text-blue-600');
                }, 2000);
            });
        }
    </script>
</body>
   <?php include 'footer.php'; ?>


</html>
