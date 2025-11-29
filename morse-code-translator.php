<?php include 'header.php';?>

<?php
// Morse code dictionary
$morseCode = [
    'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.', 
    'F' => '..-.', 'G' => '--.', 'H' => '....', 'I' => '..', 'J' => '.---',
    'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---',
    'P' => '.--.', 'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-',
    'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-', 'Y' => '-.--',
    'Z' => '--..', '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--',
    '4' => '....-', '5' => '.....', '6' => '-....', '7' => '--...', '8' => '---..',
    '9' => '----.', '.' => '.-.-.-', ',' => '--..--', '?' => '..--..', "'" => '.----.',
    '!' => '-.-.--', '/' => '-..-.', '(' => '-.--.', ')' => '-.--.-', '&' => '.-...',
    ':' => '---...', ';' => '-.-.-.', '=' => '-...-', '+' => '.-.-.', '-' => '-....-',
    '_' => '..--.-', '"' => '.-..-.', '$' => '...-..-', '@' => '.--.-.', ' ' => '/'
];

// Function to translate text to Morse code
function textToMorse($text, $morseCode) {
    $text = strtoupper($text);
    $result = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if (isset($morseCode[$char])) {
            $result .= $morseCode[$char] . ' ';
        }
    }
    return trim($result);
}

// Function to translate Morse code to text
function morseToText($morse, $morseCode) {
    $morseArray = explode(' ', $morse);
    $result = '';
    $reverseMorse = array_flip($morseCode);
    
    foreach ($morseArray as $code) {
        if ($code === '/') {
            $result .= ' ';
        } elseif (isset($reverseMorse[$code])) {
            $result .= $reverseMorse[$code];
        }
    }
    return $result;
}

// Handle form submission
$output = '';
$input = '';
$direction = 'text_to_morse';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = $_POST['input'] ?? '';
    $direction = $_POST['direction'] ?? 'text_to_morse';
    
    if (!empty($input)) {
        try {
            if ($direction === 'text_to_morse') {
                $output = textToMorse($input, $morseCode);
            } else {
                $output = morseToText($input, $morseCode);
            }
        } catch (Exception $e) {
            $error = "Error in translation: " . $e->getMessage();
        }
    } else {
        $error = "Please enter some text or Morse code to translate";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morse Code Translator 2025 - Free Online Decoder & Encoder</title>
<meta name="description" content="Free online Morse code translator for 2025. Instantly convert text to Morse code and vice versa. Learn Morse alphabet with audio playback and flashing light simulation.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .active-tab {
            background-color: #3b82f6;
            color: white;
        }
        .tab:hover:not(.active-tab) {
            background-color: #e5e7eb;
        }
        textarea {
            min-height: 150px;
        }
        .copy-btn {
            transition: all 0.2s;
        }
        .copy-btn:hover {
            background-color: #2563eb;
        }
        .copy-btn:active {
            transform: scale(0.95);
        }
    </style>

</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <header class="mb-8 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-2">Morse Code Translator</h1>
            <p class="text-gray-600">Convert between text and Morse code instantly</p>
        </header>

        <main class="bg-white rounded-lg shadow-md overflow-hidden">
            <form method="POST" class="p-6">
                <div class="flex border-b mb-6">
                    <button type="button" id="textToMorseTab" class="tab px-4 py-2 font-medium rounded-t-lg <?= $direction === 'text_to_morse' ? 'active-tab' : 'text-gray-600' ?>">
                        Text to Morse Code
                    </button>
                    <button type="button" id="morseToTextTab" class="tab px-4 py-2 font-medium rounded-t-lg <?= $direction === 'morse_to_text' ? 'active-tab' : 'text-gray-600' ?>">
                        Morse Code to Text
                    </button>
                    <input type="hidden" name="direction" id="direction" value="<?= htmlspecialchars($direction) ?>">
                </div>

                <div class="mb-4">
                    <label for="input" class="block text-gray-700 font-medium mb-2">
                        <?= $direction === 'text_to_morse' ? 'Enter Text:' : 'Enter Morse Code:' ?>
                    </label>
                    <textarea name="input" id="input" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required><?= htmlspecialchars($input) ?></textarea>
                </div>

                <div class="flex justify-center mb-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-lg transition duration-200">
                        Translate
                    </button>
                </div>

                <?php if (!empty($error)): ?>
                    <div class="mb-4 p-3 bg-red-100 text-red-700 rounded-lg">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($output)): ?>
                    <div class="mb-4">
                        <label for="output" class="block text-gray-700 font-medium mb-2">
                            <?= $direction === 'text_to_morse' ? 'Morse Code:' : 'Text:' ?>
                        </label>
                        <div class="relative">
                            <textarea id="output" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-50" readonly><?= htmlspecialchars($output) ?></textarea>
                            <button type="button" onclick="copyToClipboard()" class="copy-btn absolute top-2 right-2 bg-blue-500 text-white p-2 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                <?php endif; ?>
            </form>
        </main>

        <section class="mt-8 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-bold text-gray-800 mb-4">About Morse Code</h2>
            <p class="text-gray-600 mb-4">
                Morse code is a method used in telecommunication to encode text characters as standardized sequences of two different signal durations, called dots and dashes or dits and dahs.
            </p>
            <h3 class="font-bold text-gray-700 mb-2">How to Use This Translator</h3>
            <ul class="list-disc pl-5 text-gray-600 space-y-1">
                <li>For text to Morse code: Type your text in the input box and click "Translate"</li>
                <li>For Morse code to text: Enter Morse code using dots (.) and dashes (-), separating letters with spaces and words with "/"</li>
                <li>Click the copy button to copy your translation to clipboard</li>
            </ul>
        </section>
    </div>

    <script>
        // Tab switching functionality
        const textToMorseTab = document.getElementById('textToMorseTab');
        const morseToTextTab = document.getElementById('morseToTextTab');
        const directionInput = document.getElementById('direction');

        textToMorseTab.addEventListener('click', () => {
            directionInput.value = 'text_to_morse';
            textToMorseTab.classList.add('active-tab');
            textToMorseTab.classList.remove('text-gray-600');
            morseToTextTab.classList.remove('active-tab');
            morseToTextTab.classList.add('text-gray-600');
            document.querySelector('label[for="input"]').textContent = 'Enter Text:';
        });

        morseToTextTab.addEventListener('click', () => {
            directionInput.value = 'morse_to_text';
            morseToTextTab.classList.add('active-tab');
            morseToTextTab.classList.remove('text-gray-600');
            textToMorseTab.classList.remove('active-tab');
            textToMorseTab.classList.add('text-gray-600');
            document.querySelector('label[for="input"]').textContent = 'Enter Morse Code:';
        });

        // Copy to clipboard function
        function copyToClipboard() {
            const output = document.getElementById('output');
            output.select();
            document.execCommand('copy');
            
            // Show feedback
            const copyBtn = document.querySelector('.copy-btn');
            copyBtn.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            `;
            copyBtn.classList.remove('bg-blue-500');
            copyBtn.classList.add('bg-green-500');
            
            setTimeout(() => {
                copyBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                    </svg>
                `;
                copyBtn.classList.add('bg-blue-500');
                copyBtn.classList.remove('bg-green-500');
            }, 2000);
        }
    </script>
</body>

<?php include 'footer.php';?>

</html>
