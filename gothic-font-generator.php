<?php include 'header.php';?>

<?php
// Gothic font mappings
$gothicFonts = [
    'Blackletter' => [
        'A' => '𝔄', 'B' => '𝔅', 'C' => 'ℭ', 'D' => '𝔇', 'E' => '𝔈',
        'F' => '𝔉', 'G' => '𝔊', 'H' => 'ℌ', 'I' => 'ℑ', 'J' => '𝔍',
        'K' => '𝔎', 'L' => '𝔏', 'M' => '𝔐', 'N' => '𝔑', 'O' => '𝔒',
        'P' => '𝔓', 'Q' => '𝔔', 'R' => 'ℜ', 'S' => '𝔖', 'T' => '𝔗',
        'U' => '𝔘', 'V' => '𝔙', 'W' => '𝔚', 'X' => '𝔛', 'Y' => '𝔜',
        'Z' => 'ℨ', 'a' => '𝔞', 'b' => '𝔟', 'c' => '𝔠', 'd' => '𝔡',
        'e' => '𝔢', 'f' => '𝔣', 'g' => '𝔤', 'h' => '𝔥', 'i' => '𝔦',
        'j' => '𝔧', 'k' => '𝔨', 'l' => '𝔩', 'm' => '𝔪', 'n' => '𝔫',
        'o' => '𝔬', 'p' => '𝔭', 'q' => '𝔮', 'r' => '𝔯', 's' => '𝔰',
        't' => '𝔱', 'u' => '𝔲', 'v' => '𝔳', 'w' => '𝔴', 'x' => '𝔵',
        'y' => '𝔶', 'z' => '𝔷'
    ],
    'Fraktur' => [
        'A' => '𝕬', 'B' => '𝕭', 'C' => '𝕮', 'D' => '𝕯', 'E' => '𝕰',
        'F' => '𝕱', 'G' => '𝕲', 'H' => '𝕳', 'I' => '𝕴', 'J' => '𝕵',
        'K' => '𝕶', 'L' => '𝕷', 'M' => '𝕸', 'N' => '𝕹', 'O' => '𝕺',
        'P' => '𝕻', 'Q' => '𝕼', 'R' => '𝕽', 'S' => '𝕾', 'T' => '𝕿',
        'U' => '𝖀', 'V' => '𝖁', 'W' => '𝖂', 'X' => '𝖃', 'Y' => '𝖄',
        'Z' => '𝖅', 'a' => '𝖆', 'b' => '𝖇', 'c' => '𝖈', 'd' => '𝖉',
        'e' => '𝖊', 'f' => '𝖋', 'g' => '𝖌', 'h' => '𝖍', 'i' => '𝖎',
        'j' => '𝖏', 'k' => '𝖐', 'l' => '𝖑', 'm' => '𝖒', 'n' => '𝖓',
        'o' => '𝖔', 'p' => '𝖕', 'q' => '𝖖', 'r' => '𝖗', 's' => '𝖘',
        't' => '𝖙', 'u' => '𝖚', 'v' => '𝖛', 'w' => '𝖜', 'x' => '𝖝',
        'y' => '𝖞', 'z' => '𝖟'
    ],
    'Old English' => [
        'A' => '𝕬', 'B' => '𝕭', 'C' => '𝕮', 'D' => '𝕯', 'E' => '𝕰',
        'F' => '𝕱', 'G' => '𝕲', 'H' => '𝕳', 'I' => '𝕴', 'J' => '𝕵',
        'K' => '𝕶', 'L' => '𝕷', 'M' => '𝕸', 'N' => '𝕹', 'O' => '𝕺',
        'P' => '𝕻', 'Q' => '𝕼', 'R' => '𝕽', 'S' => '𝕾', 'T' => '𝕿',
        'U' => '𝖀', 'V' => '𝖁', 'W' => '𝖂', 'X' => '𝖃', 'Y' => '𝖄',
        'Z' => '𝖅', 'a' => '𝖆', 'b' => '𝖇', 'c' => '𝖈', 'd' => '𝖉',
        'e' => '𝖊', 'f' => '𝖋', 'g' => '𝖌', 'h' => '𝖍', 'i' => '𝖎',
        'j' => '𝖏', 'k' => '𝖐', 'l' => '𝖑', 'm' => '𝖒', 'n' => '𝖓',
        'o' => '𝖔', 'p' => '𝖕', 'q' => '𝖖', 'r' => '𝖗', 's' => '𝖘',
        't' => '𝖙', 'u' => '𝖚', 'v' => '𝖛', 'w' => '𝖜', 'x' => '𝖝',
        'y' => '𝖞', 'z' => '𝖟'
    ]
];

// Initialize variables
$inputText = '';
$selectedFont = 'Blackletter';
$outputText = '';
$copied = false;

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputText = $_POST['input_text'] ?? '';
    $selectedFont = $_POST['font_style'] ?? 'Blackletter';
    
    if (!empty($inputText)) {
        $outputText = convertToGothic($inputText, $selectedFont, $gothicFonts);
    }
    
    if (isset($_POST['copy'])) {
        $copied = true;
    }
}

// Function to convert text to Gothic font
function convertToGothic($text, $fontStyle, $fontMap) {
    $convertedText = '';
    $fontChars = $fontMap[$fontStyle] ?? $fontMap['Blackletter'];
    
    for ($i = 0; $i < mb_strlen($text); $i++) {
        $char = mb_substr($text, $i, 1);
        $convertedText .= $fontChars[$char] ?? $char;
    }
    
    return $convertedText;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Gothic Font Generator 2026 - 𝕮𝖗𝖊𝖆𝖙𝖊 𝕸𝖊𝖉𝖎𝖊𝖛𝖆𝖑 𝕿𝖊𝖝𝖙 𝕾𝖙𝖞𝖑𝖊𝖘</title>
<meta name="description" content="Generate 100+ free gothic/medieval text fonts for social media bios, logos, and designs (2026). Copy-paste 𝖋𝖆𝖓𝖈𝖞 𝖌𝖔𝖙𝖍𝖎𝖈 letters instantly - No download!">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .font-sample {
            font-size: 1.5rem;
            line-height: 2rem;
            margin-bottom: 1rem;
        }
        .font-option:hover {
            background-color: #f3f4f6;
        }
        .copy-btn {
            transition: all 0.2s;
        }
        .copy-btn:hover {
            background-color: #2563eb;
        }
        .copy-btn.copied {
            background-color: #10b981;
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Gothic Font Generator</h1>
            <p class="text-lg text-gray-600">Convert normal text to stylish Gothic, Blackletter, and Old English fonts</p>
        </header>

        <main class="bg-white rounded-lg shadow-md p-6">
            <form method="post" class="mb-6">
                <div class="mb-4">
                    <label for="input_text" class="block text-gray-700 font-medium mb-2">Enter Your Text:</label>
                    <textarea id="input_text" name="input_text" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Type or paste your text here"><?= htmlspecialchars($inputText) ?></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Select Font Style:</label>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                        <?php foreach ($gothicFonts as $fontName => $chars): ?>
                            <label class="font-option border rounded-md p-3 cursor-pointer <?= $selectedFont === $fontName ? 'border-blue-500 bg-blue-50' : 'border-gray-300' ?>">
                                <input type="radio" name="font_style" value="<?= $fontName ?>" class="hidden" <?= $selectedFont === $fontName ? 'checked' : '' ?>>
                                <div class="font-bold mb-1"><?= $fontName ?></div>
                                <div class="font-sample" style="font-family: 'Times New Roman', serif">
                                    <?= convertToGothic('Sample', $fontName, $gothicFonts) ?>
                                </div>
                            </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-3">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-md transition duration-200">Convert Text</button>
                    <?php if (!empty($outputText)): ?>
                        <button type="submit" name="copy" class="copy-btn bg-blue-500 text-white font-bold py-2 px-6 rounded-md <?= $copied ? 'copied' : '' ?>">
                            <?= $copied ? 'Copied!' : 'Copy to Clipboard' ?>
                        </button>
                    <?php endif; ?>
                </div>
            </form>

            <?php if (!empty($outputText)): ?>
                <div class="mt-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">Converted Text:</h2>
                    <div class="bg-gray-100 p-4 rounded-md mb-4">
                        <div id="output-text" class="text-2xl break-all" style="font-family: 'Times New Roman', serif">
                            <?= $outputText ?>
                        </div>
                    </div>
                    <p class="text-sm text-gray-600">Tip: Select and copy the text above to use it in social media bios, posts, or messages.</p>
                </div>
            <?php endif; ?>
        </main>

        <section class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">About Gothic Font Generator</h2>
            <div class="prose max-w-none">
                <p>Our Gothic Font Generator allows you to convert normal text into stylish Gothic, Blackletter, and Old English fonts. These fonts are perfect for:</p>
                <ul class="list-disc pl-5">
                    <li>Social media bios and posts (Instagram, Facebook, Twitter)</li>
                    <li>Tattoo designs and body art</li>
                    <li>Branding and logo designs</li>
                    <li>Academic papers and medieval-themed projects</li>
                    <li>Adding a unique touch to your digital content</li>
                </ul>
                <p class="mt-4">Simply type your text, select your preferred Gothic font style, and copy the converted text to use anywhere you like!</p>
            </div>
        </section>
    </div>



    <script>
        // Copy to clipboard functionality
        document.addEventListener('DOMContentLoaded', function() {
            const copyBtn = document.querySelector('.copy-btn');
            if (copyBtn) {
                copyBtn.addEventListener('click', function(e) {
                    if (!this.classList.contains('copied')) {
                        e.preventDefault();
                        const outputText = document.getElementById('output-text').textContent;
                        navigator.clipboard.writeText(outputText).then(() => {
                            this.classList.add('copied');
                            this.textContent = 'Copied!';
                            setTimeout(() => {
                                this.classList.remove('copied');
                                this.textContent = 'Copy to Clipboard';
                            }, 2000);
                        });
                    }
                });
            }
        });
    </script>
</body>

<?php include 'footer.php';?>

</html>
