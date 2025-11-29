<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thiyagi Tools</title>
  
  <!-- Favicon -->
  <link href="nt.png" rel="icon">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Bootstrap Icons (since you're using bi icons) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
</head>
<body>

<nav class="bg-white shadow-sm px-3 py-2">
  <div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center">
      <!-- Logo -->
      <div class="flex items-center">
        <a href="https://www.thiyagi.com/" class="flex items-center">
          <img src="nt.png" alt="Thiyagi Logo" class="h-9 mr-2">
        </a>
      </div>

      <!-- Mobile menu button -->
      <div class="md:hidden flex items-center">
        <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex md:items-center md:space-x-1">
        <!-- Financial Tools -->
        <div class="relative group">
          <button class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
            Financial Tools
            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="absolute z-10 left-0 mt-2 w-56 origin-top-left rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <div class="py-1">
              <a href="https://www.thiyagi.com/emi-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">EMI Calculator</a>
              <a href="https://www.thiyagi.com/loan-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Loan Calculator</a>
              <a href="https://www.thiyagi.com/rd-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">RD Calculator</a>
              <a href="https://www.thiyagi.com/fd-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">FD Calculator</a>
              <a href="https://www.thiyagi.com/ppf-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">PPF Calculator</a>
              <a href="https://www.thiyagi.com/sip-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SIP Calculator</a>
              <a href="https://www.thiyagi.com/step-up-sip-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Step Up SIP</a>
              <a href="https://www.thiyagi.com/lumpsum-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Lumpsum Calculator</a>
              <a href="https://www.thiyagi.com/swp-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">SWP Calculator</a>
              <a href="https://www.thiyagi.com/sukanya-samriddhi-yojana-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sukanya Samriddhi Yojana</a>
            </div>
          </div>
        </div>

        <!-- Developer Tools -->
        <div class="relative group">
          <button class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
            Developer Tools
            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="absolute z-10 left-0 mt-2 w-56 origin-top-left rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <div class="py-1">
              <a href="https://www.thiyagi.com/json-viewer" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Viewer</a>
              <a href="https://www.thiyagi.com/json-validator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Validator</a>
              <a href="https://www.thiyagi.com/html-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">HTML Beautifier</a>
              <a href="https://www.thiyagi.com/html-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">HTML Minifier</a>
              <a href="https://www.thiyagi.com/css-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">CSS Beautifier</a>
              <a href="https://www.thiyagi.com/css-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">CSS Minifier</a>
              <a href="https://www.thiyagi.com/javascript-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JavaScript Minifier</a>
              <a href="https://www.thiyagi.com/javascript-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JS Beautifier</a>
            </div>
          </div>
        </div>

        <!-- YouTube Tools -->
        <div class="relative group">
          <button class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
            YouTube Tools
            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="absolute z-10 left-0 mt-2 w-56 origin-top-left rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <div class="py-1">
              <a href="https://www.thiyagi.com/youtube-channel-search" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Channel Search</a>
              <a href="https://www.thiyagi.com/youtube-video-statistics" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Video Stats</a>
              <a href="https://www.thiyagi.com/youtube-hashtag-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hashtag Generator</a>
              <a href="https://www.thiyagi.com/youtube-title-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Title Generator</a>
              <a href="https://www.thiyagi.com/youtube-subscribe-link-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Subscribe Link Generator</a>
              <a href="https://www.thiyagi.com/youtube-thumbnail-downloader" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Thumbnail Downloader</a>
              <a href="https://www.thiyagi.com/youtube-money-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Money Calculator</a>
            </div>
          </div>
        </div>

        <!-- Converter Tools -->
        <div class="relative group">
          <button class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
            Converters
            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="absolute z-10 left-0 mt-2 w-56 origin-top-left rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <div class="py-1">
              <a href="https://www.thiyagi.com/hex-to-decimal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hex to Decimal</a>
              <a href="https://www.thiyagi.com/binary-translator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Binary Translator</a>
              <a href="https://www.thiyagi.com/decimal-to-ascii-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Decimal to ASCII</a>
              <a href="https://www.thiyagi.com/currency-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Currency Converter</a>
            </div>
          </div>
        </div>

        <!-- Image Tools -->
        <div class="relative group">
          <button class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
            Image Tools
            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="absolute z-10 left-0 mt-2 w-56 origin-top-left rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <div class="py-1">
              <a href="https://www.thiyagi.com/rotate-image" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Rotate Image</a>
              <a href="https://www.thiyagi.com/flip-image" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Flip Image</a>
              <a href="https://www.thiyagi.com/image-resizer" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Resize Image</a>
              <a href="https://www.thiyagi.com/image-cropper" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Crop Image</a>
              <a href="https://www.thiyagi.com/image-compressor" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Compress Image</a>
            </div>
          </div>
        </div>

        <!-- Text Tools -->
        <div class="relative group">
          <button class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium flex items-center">
            Text Tools
            <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div class="absolute z-10 left-0 mt-2 w-56 origin-top-left rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
            <div class="py-1">
              <a href="https://www.thiyagi.com/bold-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bold Text Generator</a>
              <a href="https://www.thiyagi.com/italic-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Italic Text Generator</a>
              <a href="https://www.thiyagi.com/cursive-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cursive Text Generator</a>
              <a href="https://www.thiyagi.com/gothic-font-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gothic Font Generator</a>
              <a href="https://www.thiyagi.com/tiny-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tiny Text Generator</a>
            </div>
          </div>
        </div>

        <!-- Contact -->
        <a href="https://www.thiyagi.com/contact" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">
          Contact Us
        </a>
      </div>

      <!-- Sign In Button -->
      <div class="hidden md:flex items-center">
        <a href="#" class="ml-4 border border-yellow-500 text-yellow-500 hover:bg-yellow-50 px-4 py-1 rounded-md text-sm font-medium flex items-center">
          <i class="bi bi-person mr-1"></i> Sign in
        </a>
      </div>
    </div>
  </div>

  <!-- Mobile menu -->
  <div class="md:hidden hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <!-- Mobile menu items would go here -->
      <!-- You would need to implement the mobile dropdown functionality with JavaScript -->
    </div>
  </div>
</nav>

<!-- JavaScript for mobile menu toggle -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('[aria-controls="mobile-menu"]');
    const mobileMenu = document.getElementById('mobile-menu');
    
    mobileMenuButton.addEventListener('click', function() {
      const expanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !expanded);
      mobileMenu.classList.toggle('hidden');
    });
  });
</script>

</body>
</html>