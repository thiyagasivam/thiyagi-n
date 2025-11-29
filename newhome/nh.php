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
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
</head>
<body>

<nav class="bg-white shadow-sm px-3 py-2">
<!--<nav class="bg-gray-800 text-white shadow-sm px-3 py-2">-->

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
        <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="menu-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="close-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden md:flex md:items-center md:space-x-1">
        <!-- [Your existing desktop menu items] -->
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
      <!-- Financial Tools -->
      <div class="relative">
        <button class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium w-full text-left flex justify-between items-center" id="financial-tools-toggle">
          Financial Tools
          <svg class="h-4 w-4 transform transition-transform" id="financial-tools-arrow" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div class="hidden pl-4" id="financial-tools-menu">
          <a href="https://www.thiyagi.com/emi-calculator" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100">EMI Calculator</a>
          <a href="https://www.thiyagi.com/loan-calculator" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100">Loan Calculator</a>
          <!-- Add other financial tools links -->
        </div>
      </div>

      <!-- Developer Tools -->
      <div class="relative">
        <button class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium w-full text-left flex justify-between items-center" id="developer-tools-toggle">
          Developer Tools
          <svg class="h-4 w-4 transform transition-transform" id="developer-tools-arrow" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
          </svg>
        </button>
        <div class="hidden pl-4" id="developer-tools-menu">
          <a href="https://www.thiyagi.com/json-viewer" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Viewer</a>
          <a href="https://www.thiyagi.com/json-validator" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100">JSON Validator</a>
          <!-- Add other developer tools links -->
        </div>
      </div>

      <!-- Add other mobile menu categories similarly -->

      <!-- Contact -->
      <a href="https://www.thiyagi.com/contact" class="block px-3 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-100 rounded-md">
        Contact Us
      </a>

      <!-- Sign In -->
      <a href="#" class="block px-3 py-2 text-sm font-medium text-yellow-500 hover:bg-yellow-50 rounded-md border border-yellow-500">
        <i class="bi bi-person mr-1"></i> Sign in
      </a>
    </div>
  </div>
</nav>

<!-- JavaScript for mobile menu toggle -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    
    // Toggle mobile menu
    mobileMenuButton.addEventListener('click', function() {
      const expanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !expanded);
      mobileMenu.classList.toggle('hidden');
      menuIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
    
    // Toggle submenus
    const toggleSubmenu = (toggleId, menuId, arrowId) => {
      const toggle = document.getElementById(toggleId);
      const menu = document.getElementById(menuId);
      const arrow = document.getElementById(arrowId);
      
      if (toggle && menu && arrow) {
        toggle.addEventListener('click', () => {
          menu.classList.toggle('hidden');
          arrow.classList.toggle('rotate-180');
        });
      }
    };
    
    // Initialize all submenu toggles
    toggleSubmenu('financial-tools-toggle', 'financial-tools-menu', 'financial-tools-arrow');
    toggleSubmenu('developer-tools-toggle', 'developer-tools-menu', 'developer-tools-arrow');
    // Add more submenu toggles as needed
  });
</script>

</body>
</html>