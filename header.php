<?php
// Generate canonical URL
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http";
$host = $_SERVER['HTTP_HOST'];
$uri = strtok($_SERVER['REQUEST_URI'], '?');
$canonicalUrl = $protocol . "://" . $host . $uri;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://www.thiyagi.com/nt.png" rel="icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>" />
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1381776395680802"
     crossorigin="anonymous"></script>
     <meta name="google-adsense-account" content="ca-pub-1381776395680802">
     <!-- Clarity tracking code for https://www.thiyagi.com/ -->
<script>
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i+"?ref=bwt";
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "su9bgvyyjw");
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5PGTVJ1CV1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5PGTVJ1CV1');
</script>
</head>
<body>
<nav class="bg-white shadow-sm px-3 py-2 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <!-- Logo -->
    <a class="flex items-center" href="https://www.thiyagi.com/">
      <img src="https://www.thiyagi.com/nt.png" alt="Thiyagi Logo" class="h-10 w-10 mr-2">
    </a>
    <!-- Mobile Menu Button -->
    <button id="mobile-menu-button"
            class="md:hidden p-2 rounded text-gray-700 hover:bg-gray-100 focus:outline-none"
            aria-expanded="false" aria-controls="mobile-menu-expanded">
      <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <!-- Main Navigation (desktop) -->
    <div class="hidden md:flex md:items-center w-auto" id="desktop-menu">
      <ul class="flex space-x-2 lg:space-x-4 items-center">
        <!-- Financial Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Financial Tools <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
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
        </li>
        <!-- Developer Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Developer Tools <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
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
        </li>
        <!-- YouTube Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            YouTube Tools <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
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
        </li>
        <!-- Converter Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Converters <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
            <div class="py-1">
              <a href="https://www.thiyagi.com/hex-to-decimal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hex to Decimal</a>
              <a href="https://www.thiyagi.com/binary-translator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Binary Translator</a>
              <a href="https://www.thiyagi.com/decimal-to-ascii-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Decimal to ASCII</a>
              <a href="https://www.thiyagi.com/currency-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Currency Converter</a>
            </div>
          </div>
        </li>
        <!-- Text Tools Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Text Tools <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
            <div class="py-1">
              <a href="https://www.thiyagi.com/bold-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bold Text Generator</a>
              <a href="https://www.thiyagi.com/italic-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Italic Text Generator</a>
              <a href="https://www.thiyagi.com/cursive-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cursive Text Generator</a>
              <a href="https://www.thiyagi.com/gothic-font-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gothic Font Generator</a>
              <a href="https://www.thiyagi.com/tiny-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tiny Text Generator</a>
            </div>
          </div>
        </li>

             <!-- Resources Dropdown -->
        <li class="relative group">
          <button class="nav-dropdown px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md focus:outline-none flex items-center">
            Resources <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
          </button>
          <div class="dropdown absolute left-0 mt-0 w-56 rounded bg-white shadow-lg ring-1 ring-black ring-opacity-5 hidden group-hover:block z-50">
            <div class="py-1">
              <a href="https://www.thiyagi.com/holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">All Holidays</a>
              <a href="https://www.thiyagi.com/holiday/uk-holiday/england-cities/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">England Cities</a>
              <a href="https://www.thiyagi.com/holiday/uk-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">UK Holidays</a>
              <a href="https://www.thiyagi.com/holiday/usa-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">USA Holidays</a>
              <a href="https://www.thiyagi.com/holiday/indian-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">India Holidays</a>
              <a href="https://www.thiyagi.com/holiday/canada-holidays/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">Canada Holidays</a>
              <a href="https://www.thiyagi.com/holiday/australia-holidays/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">Australia Holidays</a>
              <a href="https://www.thiyagi.com/electricity-board/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Electricity Board</a>
              <a href="https://www.thiyagi.com/rto-details" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">RTO Details</a>
              <a href="https://www.thiyagi.com/service-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Service Center</a>
              <a href="https://www.thiyagi.com/contact" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contact Us</a>
             
            </div>
          </div>
        </li>

        <!-- Blog Link -->
        <li>
          <a href="https://blog.thiyagi.com/" class="px-3 py-2 text-gray-700 hover:text-yellow-600 rounded-md flex items-center" target="_blank">
            <i class="fas fa-blog mr-2"></i>Blog
          </a>
        </li>

        <!-- Contact Us (on same navbar line) -->
      
      </ul>
      <div class="ml-4 flex items-center space-x-2" id="auth-section">
        <!-- Google Sign-In Button -->
        <div id="g_id_onload"
             data-client_id="1025927176024-4922rfvk660tf32lmof21a5ubb34bjok.apps.googleusercontent.com"
             data-context="signin"
             data-ux_mode="popup"
             data-callback="handleCredentialResponse"
             data-auto_prompt="false"
             data-itp_support="true"
             data-use_fedcm_for_prompt="true">
        </div>
        <div class="g_id_signin"
             data-type="standard"
             data-shape="pill"
             data-theme="outline"
             data-text="signin_with"
             data-size="large"
             data-logo_alignment="left">
        </div>
        <!-- Fallback Sign-In Button -->
        <button id="fallback-signin" class="hidden inline-flex items-center px-4 py-2 border border-blue-400 text-sm rounded-md text-blue-700 bg-white hover:bg-blue-50">
          <i class="fas fa-user mr-2"></i>Sign in
        </button>
        <!-- User Info (shown after login) -->
        <div id="user-info" class="hidden items-center space-x-2">
          <img id="user-pic" src="" alt="Profile" class="h-8 w-8 rounded-full border">
          <span id="user-name" class="font-semibold text-gray-700"></span>
          <button id="signout-btn" class="px-3 py-1 border border-red-400 text-xs rounded text-red-700 bg-white hover:bg-red-50">Sign out</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu -->
  <div class="md:hidden hidden" id="mobile-menu-expanded">
    <ul class="space-y-1 py-4 px-1 bg-white shadow">
      <!-- Financial Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">Financial Tools 
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
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
      </li>
      <!-- Developer Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">Developer Tools
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/json-viewer" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Viewer</a>
          <a href="https://www.thiyagi.com/json-validator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Validator</a>
          <a href="https://www.thiyagi.com/html-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">HTML Beautifier</a>
          <a href="https://www.thiyagi.com/html-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">HTML Minifier</a>
          <a href="https://www.thiyagi.com/css-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">CSS Beautifier</a>
          <a href="https://www.thiyagi.com/css-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">CSS Minifier</a>
          <a href="https://www.thiyagi.com/javascript-minifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JavaScript Minifier</a>
          <a href="https://www.thiyagi.com/javascript-beautifier" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">JS Beautifier</a>
        </div>
      </li>
      <!-- YouTube Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">YouTube Tools
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/youtube-channel-search" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Channel Search</a>
          <a href="https://www.thiyagi.com/youtube-video-statistics" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Video Stats</a>
          <a href="https://www.thiyagi.com/youtube-hashtag-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hashtag Generator</a>
          <a href="https://www.thiyagi.com/youtube-title-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Title Generator</a>
          <a href="https://www.thiyagi.com/youtube-subscribe-link-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Subscribe Link Generator</a>
          <a href="https://www.thiyagi.com/youtube-thumbnail-downloader" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Thumbnail Downloader</a>
          <a href="https://www.thiyagi.com/youtube-money-calculator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Money Calculator</a>
        </div>
      </li>
      <!-- Converter Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">Converters
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/hex-to-decimal" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hex to Decimal</a>
          <a href="https://www.thiyagi.com/binary-translator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Binary Translator</a>
          <a href="https://www.thiyagi.com/decimal-to-ascii-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Decimal to ASCII</a>
          <a href="https://www.thiyagi.com/currency-converter" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Currency Converter</a>
        </div>
      </li>
      <!-- Text Tools (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">Text Tools
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/bold-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Bold Text Generator</a>
          <a href="https://www.thiyagi.com/italic-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Italic Text Generator</a>
          <a href="https://www.thiyagi.com/cursive-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cursive Text Generator</a>
          <a href="https://www.thiyagi.com/gothic-font-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Gothic Font Generator</a>
          <a href="https://www.thiyagi.com/tiny-text-generator" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tiny Text Generator</a>
        </div>
      </li>

      <!-- Resources (Mobile Dropdown) -->
      <li>
        <button class="w-full flex justify-between items-center px-4 py-2 text-gray-700 focus:outline-none nav-mobile-dropdown">  Resources
          <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown hidden pl-4">
          <a href="https://www.thiyagi.com/holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">All Holidays</a>
          <a href="https://www.thiyagi.com/holiday/uk-holiday/england-cities/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">England Cities</a>
          <a href="https://www.thiyagi.com/holiday/uk-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">UK Holidays</a>
          <a href="https://www.thiyagi.com/holiday/usa-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">USA Holidays</a>
          <a href="https://www.thiyagi.com/holiday/indian-holiday/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">India Holidays</a>
          <a href="https://www.thiyagi.com/holiday/canada-holidays/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">Canada Holidays</a>
          <a href="https://www.thiyagi.com/holiday/australia-holidays/" class="block px-4 py-1 text-sm text-gray-700 hover:bg-gray-100">Australia Holidays</a>
          <a href="https://www.thiyagi.com/electricity-board/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Electricity Board</a>
          <a href="https://www.thiyagi.com/rto-details" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">RTO Details</a>
          <a href="https://www.thiyagi.com/service-center" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Service Center</a>
           <a href="https://www.thiyagi.com/contact" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Contact Us</a>
        </div>
      </li>

      <!-- Blog Link (Mobile) -->
      <li>
        <a href="https://blog.thiyagi.com/" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100" target="_blank">
          <i class="fas fa-blog mr-3"></i>Blog
        </a>
      </li>

      <!-- Mobile Auth Section -->
      <li class="mt-4 px-4">
        <div id="mobile-g_id_signin" class="g_id_signin"
             data-type="standard"
             data-shape="pill"
             data-theme="outline"
             data-text="sign_in_with"
             data-size="medium">
        </div>
        <!-- Mobile User Info (shown after login) -->
        <div id="mobile-user-info" class="hidden flex items-center mt-2 p-2 bg-gray-50 rounded">
          <img id="mobile-user-pic" src="" alt="Profile" class="h-6 w-6 rounded-full mr-2">
          <span id="mobile-user-name" class="text-sm font-medium flex-1"></span>
          <button id="mobile-signout-btn" class="text-xs text-red-600 hover:text-red-800">Sign out</button>
        </div>
      </li>
    </ul>
  </div>
</nav>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Toggle mobile menu
  const mobileBtn = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu-expanded');
  mobileBtn.onclick = function(e) {
    e.stopPropagation();
    const expanded = mobileMenu.classList.toggle('hidden');
    mobileBtn.setAttribute('aria-expanded', expanded ? "false" : "true");
  };

  // Desktop dropdowns: Show on hover and close others
  document.querySelectorAll('#desktop-menu .group').forEach(group => {
    const btn = group.querySelector('.nav-dropdown');
    const dropdown = group.querySelector('.dropdown');
    btn && btn.addEventListener('mouseenter', () => {
      document.querySelectorAll('#desktop-menu .dropdown').forEach(d => d.classList.add('hidden'));
      dropdown.classList.remove('hidden');
    });
    group.addEventListener('mouseleave', () => {
      dropdown.classList.add('hidden');
    });
    // Support click to open (optional)
    btn && btn.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelectorAll('#desktop-menu .dropdown').forEach(d => d !== dropdown && d.classList.add('hidden'));
      dropdown.classList.toggle('hidden');
    });
  });

  // Mobile dropdowns: Accordion style
  document.querySelectorAll('#mobile-menu-expanded .nav-mobile-dropdown').forEach((btn, idx, arr) => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      arr.forEach((otherBtn, j) => {
        if (j !== idx) otherBtn.nextElementSibling.classList.add('hidden');
      });
      const drop = btn.nextElementSibling;
      drop && drop.classList.toggle('hidden');
    });
  });

  // Click outside to close
  document.addEventListener('click', function(e){
    if (!e.target.closest('nav')) {
      mobileMenu.classList.add('hidden');
      mobileBtn.setAttribute('aria-expanded', 'false');
      document.querySelectorAll('#desktop-menu .dropdown').forEach(d => d.classList.add('hidden'));
      document.querySelectorAll('#mobile-menu-expanded .dropdown').forEach(d => d.classList.add('hidden'));
    }
  });

  // Google Sign-In logic with error handling
  window.handleCredentialResponse = function(response) {
    try {
      if (!response || !response.credential) {
        console.error('Invalid Google Sign-In response');
        showFallbackSignIn();
        return;
      }
      
      // Decode JWT to get user info
      const userInfo = parseJwt(response.credential);
      if (userInfo && userInfo.name && userInfo.picture) {
        // Desktop user info
        document.getElementById('user-pic').src = userInfo.picture;
        document.getElementById('user-name').textContent = userInfo.name;
        document.getElementById('user-info').classList.remove('hidden');
        document.getElementById('user-info').classList.add('flex');
        document.querySelector('.g_id_signin').classList.add('hidden');
        document.getElementById('g_id_onload').classList.add('hidden');
        document.getElementById('fallback-signin').classList.add('hidden');
        
        // Mobile user info
        const mobileUserPic = document.getElementById('mobile-user-pic');
        const mobileUserName = document.getElementById('mobile-user-name');
        const mobileUserInfo = document.getElementById('mobile-user-info');
        const mobileSignIn = document.getElementById('mobile-g_id_signin');
        
        if (mobileUserPic && mobileUserName && mobileUserInfo && mobileSignIn) {
          mobileUserPic.src = userInfo.picture;
          mobileUserName.textContent = userInfo.name;
          mobileUserInfo.classList.remove('hidden');
          mobileUserInfo.classList.add('flex');
          mobileSignIn.classList.add('hidden');
        }
      } else {
        console.error('Invalid user info from Google');
        showFallbackSignIn();
      }
    } catch (error) {
      console.error('Google Sign-In error:', error);
      showFallbackSignIn();
    }
  };
  
  // Show fallback sign-in if Google Sign-In fails
  function showFallbackSignIn() {
    document.querySelector('.g_id_signin').classList.add('hidden');
    document.getElementById('fallback-signin').classList.remove('hidden');
  }
  
  // Desktop signout
  const signoutBtn = document.getElementById('signout-btn');
  if (signoutBtn) {
    signoutBtn.onclick = function() {
      signOut();
    };
  }
  
  // Mobile signout
  const mobileSignoutBtn = document.getElementById('mobile-signout-btn');
  if (mobileSignoutBtn) {
    mobileSignoutBtn.onclick = function() {
      signOut();
    };
  }
  
  // Fallback signin button
  const fallbackBtn = document.getElementById('fallback-signin');
  if (fallbackBtn) {
    fallbackBtn.onclick = function() {
      alert('Please sign in using your email or social media account.');
    };
  }
  
  // Common signout function
  function signOut() {
    // Desktop
    document.getElementById('user-info').classList.add('hidden');
    document.getElementById('user-info').classList.remove('flex');
    document.querySelector('.g_id_signin').classList.remove('hidden');
    document.getElementById('g_id_onload').classList.remove('hidden');
    document.getElementById('fallback-signin').classList.add('hidden');
    
    // Mobile
    const mobileUserInfo = document.getElementById('mobile-user-info');
    const mobileSignIn = document.getElementById('mobile-g_id_signin');
    
    if (mobileUserInfo && mobileSignIn) {
      mobileUserInfo.classList.add('hidden');
      mobileUserInfo.classList.remove('flex');
      mobileSignIn.classList.remove('hidden');
    }
  }
  
  // Enhanced JWT parser with error handling
  function parseJwt(token) {
    try {
      if (!token) return null;
      
      const parts = token.split('.');
      if (parts.length !== 3) return null;
      
      const base64Url = parts[1];
      const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
      const jsonPayload = decodeURIComponent(atob(base64).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
      }).join(''));
      
      return JSON.parse(jsonPayload);
    } catch (error) {
      console.error('JWT parsing error:', error);
      return null;
    }
  }
  
  // Check for Google Sign-In API errors
  window.addEventListener('load', function() {
    setTimeout(function() {
      if (!window.google || !window.google.accounts) {
        console.warn('Google Sign-In API failed to load, showing fallback');
        showFallbackSignIn();
      }
    }, 3000);
  });
});
</script>

<!-- Google Sign-In JS -->
<script src="https://accounts.google.com/gsi/client" async defer></script>
</body>
</html>
