<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Singapore Address Generator 2025 - Fake Singapore Addresses | Thiyagi.com</title>
    <meta name="description" content="Random Singapore address generator 2025 - generate realistic fake Singapore addresses with postal codes, districts, HDB blocks, and condominiums for testing purposes.">
    <meta name="keywords" content="random singapore address generator 2025, fake singapore address, singapore postal code generator, singapore address for testing">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Random Singapore Address Generator 2025 - Fake Singapore Addresses">
    <meta property="og:description" content="Generate realistic fake Singapore addresses with postal codes and districts for testing and development purposes.">
    <meta property="og:url" content="https://www.thiyagi.com/random-address-singapore">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Random Singapore Address Generator 2025 - Fake Singapore Addresses">
    <meta name="twitter:description" content="Generate realistic fake Singapore addresses for testing and development.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/random-address-singapore">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
    }
    .address-card {
        transition: all 0.3s ease;
        border-left: 4px solid #dc2626;
    }
    .address-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #b91c1c;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .singapore-flag {
        animation: wave 3s ease-in-out infinite;
    }
    @keyframes wave {
        0%, 100% { transform: rotate(-5deg); }
        50% { transform: rotate(5deg); }
    }
    .copy-feedback {
        animation: copySuccess 2s ease-in-out;
    }
    @keyframes copySuccess {
        0% { opacity: 0; transform: scale(0.8); }
        50% { opacity: 1; transform: scale(1.1); }
        100% { opacity: 0; transform: scale(1); }
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Random Singapore Address Generator 2025",
  "description": "Generate realistic fake Singapore addresses with postal codes, districts, HDB blocks, and condominiums for testing and development purposes.",
  "url": "https://www.thiyagi.com/random-address-singapore",
  "applicationCategory": "UtilityApplication",
  "operatingSystem": "Any",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD"
  },
  "creator": {
    "@type": "Organization",
    "name": "Thiyagi.com"
  }
}
</script>

</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="gradient-bg shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-6">
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-4">
                    <div class="bg-white p-3 rounded-full shadow-lg">
                        <i class="fas fa-map-marker-alt text-2xl text-red-600 singapore-flag" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Singapore Address Generator</h1>
                        <p class="text-red-100">Generate realistic Singapore addresses for testing</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <nav class="bg-white border-b" aria-label="Breadcrumb">
        <div class="max-w-6xl mx-auto px-4 py-3">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="/" class="text-gray-500 hover:text-gray-700">Home</a></li>
                <li><i class="fas fa-chevron-right text-gray-400" aria-hidden="true"></i></li>
                <li class="text-gray-900 font-medium">Singapore Address Generator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Generator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-red-100 rounded-full mb-4">
                    <i class="fas fa-building text-2xl text-red-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Singapore Address Generator</h2>
                <p class="text-gray-600">Generate realistic Singapore addresses for testing and development purposes</p>
            </div>

            <!-- Controls -->
            <div class="max-w-4xl mx-auto space-y-6">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div>
                        <label for="addressCount" class="block text-sm font-medium text-gray-700 mb-2">Number of Addresses</label>
                        <select id="addressCount" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            <option value="1">1 Address</option>
                            <option value="5" selected>5 Addresses</option>
                            <option value="10">10 Addresses</option>
                            <option value="25">25 Addresses</option>
                            <option value="50">50 Addresses</option>
                        </select>
                    </div>

                    <div>
                        <label for="addressType" class="block text-sm font-medium text-gray-700 mb-2">Address Type</label>
                        <select id="addressType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            <option value="mixed" selected>Mixed (HDB + Private)</option>
                            <option value="hdb">HDB Flats Only</option>
                            <option value="condo">Condominiums Only</option>
                            <option value="landed">Landed Properties</option>
                        </select>
                    </div>

                    <div>
                        <label for="district" class="block text-sm font-medium text-gray-700 mb-2">District</label>
                        <select id="district" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            <option value="all" selected>All Districts</option>
                            <option value="01">District 01 (Boat Quay/Raffles Place)</option>
                            <option value="02">District 02 (Chinatown/CBD)</option>
                            <option value="03">District 03 (Alexandra/Commonwealth)</option>
                            <option value="04">District 04 (Harbourfront/Telok Blangah)</option>
                            <option value="05">District 05 (Buona Vista/Pasir Panjang)</option>
                            <option value="09">District 09 (Orchard/River Valley)</option>
                            <option value="10">District 10 (Bukit Timah/Tanglin)</option>
                            <option value="11">District 11 (Newton/Novena)</option>
                            <option value="15">District 15 (Tanjong Pagar/Tiong Bahru)</option>
                            <option value="19">District 19 (Serangoon)</option>
                            <option value="23">District 23 (Bukit Batok)</option>
                        </select>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="outputFormat" class="block text-sm font-medium text-gray-700 mb-2">Output Format</label>
                        <select id="outputFormat" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            <option value="full" selected>Full Address</option>
                            <option value="compact">Compact Format</option>
                            <option value="postal">Postal Code Only</option>
                            <option value="structured">Structured (JSON)</option>
                        </select>
                    </div>

                    <div class="bg-red-50 p-4 rounded-lg">
                        <h4 class="font-medium text-red-800 mb-2 flex items-center">
                            <i class="fas fa-shield-alt mr-2" aria-hidden="true"></i>
                            Privacy Notice
                        </h4>
                        <p class="text-red-700 text-sm">These addresses are computer-generated and fictional. They should only be used for testing, development, and educational purposes.</p>
                    </div>
                </div>

                <!-- Generate Button -->
                <div class="text-center">
                    <button id="generateBtn" class="bg-red-600 hover:bg-red-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-magic mr-2" aria-hidden="true"></i>
                        Generate Singapore Addresses
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-red-50 to-pink-50 border-2 border-red-200 rounded-xl p-6">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-xl font-bold text-gray-800">
                            <i class="fas fa-list mr-2 text-red-600" aria-hidden="true"></i>
                            Generated Addresses
                        </h3>
                        <div class="flex space-x-3">
                            <button id="copyAllBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                                <i class="fas fa-copy mr-2" aria-hidden="true"></i>Copy All
                            </button>
                            <button id="exportBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                                <i class="fas fa-download mr-2" aria-hidden="true"></i>Export
                            </button>
                        </div>
                    </div>
                    
                    <div id="addressesList" class="space-y-4">
                        <!-- Addresses will be populated here -->
                    </div>

                    <!-- Statistics -->
                    <div id="statsSection" class="mt-6 p-4 bg-white rounded-lg shadow">
                        <h4 class="font-semibold text-gray-800 mb-3">Generation Statistics</h4>
                        <div class="grid md:grid-cols-4 gap-4 text-center">
                            <div>
                                <div class="text-2xl font-bold text-red-600" id="totalGenerated">0</div>
                                <div class="text-sm text-gray-600">Addresses</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-blue-600" id="uniquePostal">0</div>
                                <div class="text-sm text-gray-600">Postal Codes</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-green-600" id="uniqueDistricts">0</div>
                                <div class="text-sm text-gray-600">Districts</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold text-purple-600" id="addressTypes">0</div>
                                <div class="text-sm text-gray-600">Types</div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="flex flex-wrap gap-3 justify-center mt-6">
                        <button id="generateMoreBtn" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-plus mr-2" aria-hidden="true"></i>Generate More
                        </button>
                        <button id="clearBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-trash mr-2" aria-hidden="true"></i>Clear All
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Information Sections -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Singapore Postal System -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-info-circle mr-3 text-blue-500" aria-hidden="true"></i>
                    Singapore Postal System
                </h2>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-red-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">6-Digit Postal Codes</h3>
                        <p class="text-gray-600">Singapore uses a systematic 6-digit postal code system where the first 2 digits indicate the district or sector.</p>
                    </div>
                    
                    <div class="border-l-4 border-blue-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">District System</h3>
                        <p class="text-gray-600">There are 28 postal districts in Singapore, each with specific postal code ranges and geographical boundaries.</p>
                    </div>
                    
                    <div class="border-l-4 border-green-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Address Format</h3>
                        <p class="text-gray-600">Standard format includes building name/number, street name, unit number (if applicable), and postal code.</p>
                    </div>
                </div>
            </section>

            <!-- Usage Guidelines -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-gavel mr-3 text-orange-500" aria-hidden="true"></i>
                    Usage Guidelines
                </h2>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-check-circle text-green-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Legitimate Uses</h3>
                            <p class="text-gray-600 text-sm">Software testing, form validation, database seeding, application development, educational purposes.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-times-circle text-red-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Prohibited Uses</h3>
                            <p class="text-gray-600 text-sm">Fraud, identity theft, misleading businesses, creating fake accounts, illegal activities.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-exclamation-triangle text-yellow-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Important Notice</h3>
                            <p class="text-gray-600 text-sm">These addresses are fictional and should never be used for actual deliveries or official purposes.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Address Types Guide -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-building mr-3 text-purple-600" aria-hidden="true"></i>
                Singapore Housing Types
            </h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                    <h3 class="text-lg font-semibold text-blue-800 mb-3">
                        <i class="fas fa-home mr-2" aria-hidden="true"></i>HDB Flats
                    </h3>
                    <ul class="space-y-2 text-blue-700 text-sm">
                        <li>• Public housing blocks</li>
                        <li>• Block and unit numbers</li>
                        <li>• Most common housing type</li>
                        <li>• Subsidized by government</li>
                    </ul>
                </div>

                <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                    <h3 class="text-lg font-semibold text-green-800 mb-3">
                        <i class="fas fa-building mr-2" aria-hidden="true"></i>Condominiums
                    </h3>
                    <ul class="space-y-2 text-green-700 text-sm">
                        <li>• Private apartments</li>
                        <li>• Usually have amenities</li>
                        <li>• Premium locations</li>
                        <li>• Higher property values</li>
                    </ul>
                </div>

                <div class="bg-purple-50 p-6 rounded-lg border border-purple-200">
                    <h3 class="text-lg font-semibold text-purple-800 mb-3">
                        <i class="fas fa-warehouse mr-2" aria-hidden="true"></i>Landed Properties
                    </h3>
                    <ul class="space-y-2 text-purple-700 text-sm">
                        <li>• Terraced houses</li>
                        <li>• Semi-detached houses</li>
                        <li>• Detached houses (bungalows)</li>
                        <li>• Most exclusive housing</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class SingaporeAddressGenerator {
            constructor() {
                this.generatedAddresses = [];
                this.singaporeData = this.initializeSingaporeData();
                this.init();
            }

            initializeSingaporeData() {
                return {
                    districts: {
                        '01': { name: 'Boat Quay/Raffles Place', postalRange: [18, 19] },
                        '02': { name: 'Chinatown/CBD', postalRange: [6, 7] },
                        '03': { name: 'Alexandra/Commonwealth', postalRange: [14, 16] },
                        '04': { name: 'Harbourfront/Telok Blangah', postalRange: [9, 10] },
                        '05': { name: 'Buona Vista/Pasir Panjang', postalRange: [11, 13] },
                        '09': { name: 'Orchard/River Valley', postalRange: [23, 24] },
                        '10': { name: 'Bukit Timah/Tanglin', postalRange: [25, 27] },
                        '11': { name: 'Newton/Novena', postalRange: [30, 31] },
                        '15': { name: 'Tanjong Pagar/Tiong Bahru', postalRange: [8, 8] },
                        '19': { name: 'Serangoon', postalRange: [55, 56] },
                        '23': { name: 'Bukit Batok', postalRange: [65, 66] }
                    },
                    hdbBlocks: [
                        'Blk 101', 'Blk 102', 'Blk 103', 'Blk 201', 'Blk 202', 'Blk 301',
                        'Blk 401', 'Blk 501', 'Blk 601', 'Blk 701', 'Blk 801', 'Blk 901'
                    ],
                    streets: [
                        'Orchard Road', 'Marina Bay Sands Avenue', 'Raffles Place', 'Sentosa Gateway',
                        'Ang Mo Kio Avenue', 'Jurong East Street', 'Woodlands Drive', 'Tampines Street',
                        'Bedok Reservoir Road', 'Punggol Way', 'Sengkang East Way', 'Hougang Avenue',
                        'Bukit Timah Road', 'East Coast Road', 'West Coast Highway', 'Clementi Road',
                        'Toa Payoh Lorong', 'Bishan Street', 'Serangoon Road', 'Thomson Road',
                        'Balestier Road', 'Jalan Besar', 'Beach Road', 'North Bridge Road',
                        'South Bridge Road', 'Robinson Road', 'Cecil Street', 'Shenton Way'
                    ],
                    condoNames: [
                        'Marina Bay Residences', 'Orchard Parkview', 'Sentosa Cove Villas',
                        'Riverside Piazza', 'The Pinnacle@Duxton', 'Sky Habitat', 'Reflections at Keppel Bay',
                        'The Interlace', 'Leedon Residence', 'Ardmore Park', 'Nassim Park Residences',
                        'One Shenton', 'Wallich Residence', 'Boulevard Vue', 'The Sail @ Marina Bay',
                        'Altez', 'V on Shenton', 'OUE Twin Peaks', 'DUO Residences', 'South Beach Residences'
                    ],
                    landedStreets: [
                        'Cluny Road', 'Nassim Road', 'Dalvey Road', 'Tanglin Road', 'Ridley Park',
                        'Monk\'s Hill Road', 'Holland Road', 'Sixth Avenue', 'Bukit Timah Road',
                        'Stevens Road', 'Scotts Road', 'Anderson Road', 'Chancery Lane'
                    ],
                    unitTypes: ['#01-01', '#02-15', '#03-08', '#04-12', '#05-20', '#06-05', '#07-18', '#08-03', '#09-11', '#10-07']
                };
            }

            init() {
                this.bindEvents();
            }

            bindEvents() {
                document.getElementById('generateBtn').addEventListener('click', () => this.generateAddresses());
                document.getElementById('generateMoreBtn')?.addEventListener('click', () => this.generateAddresses(true));
                document.getElementById('copyAllBtn')?.addEventListener('click', () => this.copyAllAddresses());
                document.getElementById('exportBtn')?.addEventListener('click', () => this.exportAddresses());
                document.getElementById('clearBtn')?.addEventListener('click', () => this.clearAddresses());
            }

            generateAddresses(append = false) {
                const count = parseInt(document.getElementById('addressCount').value);
                const type = document.getElementById('addressType').value;
                const district = document.getElementById('district').value;
                const format = document.getElementById('outputFormat').value;

                if (!append) {
                    this.generatedAddresses = [];
                }

                for (let i = 0; i < count; i++) {
                    const address = this.createRandomAddress(type, district);
                    this.generatedAddresses.push(address);
                }

                this.displayAddresses(format);
                this.updateStatistics();
                
                document.getElementById('resultsSection').classList.remove('hidden');
                document.getElementById('resultsSection').scrollIntoView({ behavior: 'smooth' });
            }

            createRandomAddress(type, districtFilter) {
                const addressType = this.selectAddressType(type);
                const district = this.selectDistrict(districtFilter);
                const postalCode = this.generatePostalCode(district);

                let address = {};

                switch (addressType) {
                    case 'hdb':
                        address = this.createHDBAddress(district, postalCode);
                        break;
                    case 'condo':
                        address = this.createCondoAddress(district, postalCode);
                        break;
                    case 'landed':
                        address = this.createLandedAddress(district, postalCode);
                        break;
                }

                return {
                    ...address,
                    type: addressType,
                    district: district,
                    postalCode: postalCode
                };
            }

            selectAddressType(typeFilter) {
                if (typeFilter !== 'mixed') return typeFilter;
                
                const types = ['hdb', 'condo', 'landed'];
                const weights = [0.7, 0.25, 0.05]; // HDB most common, then condo, then landed
                
                const random = Math.random();
                let cumulative = 0;
                
                for (let i = 0; i < types.length; i++) {
                    cumulative += weights[i];
                    if (random <= cumulative) return types[i];
                }
                
                return 'hdb';
            }

            selectDistrict(districtFilter) {
                if (districtFilter !== 'all') return districtFilter;
                
                const districts = Object.keys(this.singaporeData.districts);
                return districts[Math.floor(Math.random() * districts.length)];
            }

            generatePostalCode(district) {
                const range = this.singaporeData.districts[district].postalRange;
                const firstTwo = this.randomBetween(range[0], range[1]);
                const lastFour = this.randomBetween(1000, 9999);
                return firstTwo.toString().padStart(2, '0') + lastFour.toString();
            }

            createHDBAddress(district, postalCode) {
                const block = this.randomChoice(this.singaporeData.hdbBlocks);
                const street = this.randomChoice(this.singaporeData.streets);
                const unit = this.randomChoice(this.singaporeData.unitTypes);

                return {
                    line1: `${block} ${street}`,
                    line2: unit,
                    fullAddress: `${block} ${street}, ${unit}, Singapore ${postalCode}`
                };
            }

            createCondoAddress(district, postalCode) {
                const condoName = this.randomChoice(this.singaporeData.condoNames);
                const street = this.randomChoice(this.singaporeData.streets);
                const unit = this.randomChoice(this.singaporeData.unitTypes);

                return {
                    line1: condoName,
                    line2: `${this.randomBetween(1, 999)} ${street}`,
                    line3: unit,
                    fullAddress: `${condoName}, ${this.randomBetween(1, 999)} ${street}, ${unit}, Singapore ${postalCode}`
                };
            }

            createLandedAddress(district, postalCode) {
                const street = this.randomChoice(this.singaporeData.landedStreets);
                const houseNumber = this.randomBetween(1, 299);

                return {
                    line1: `${houseNumber} ${street}`,
                    fullAddress: `${houseNumber} ${street}, Singapore ${postalCode}`
                };
            }

            displayAddresses(format) {
                const container = document.getElementById('addressesList');
                
                const addressesHtml = this.generatedAddresses.map((address, index) => {
                    const formattedAddress = this.formatAddress(address, format);
                    const typeIcon = this.getTypeIcon(address.type);
                    const typeColor = this.getTypeColor(address.type);

                    return `
                        <div class="address-card bg-white p-4 rounded-lg shadow">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center mb-2">
                                        <i class="${typeIcon} ${typeColor} mr-2" aria-hidden="true"></i>
                                        <span class="text-sm font-medium text-gray-600">
                                            ${address.type.toUpperCase()} - District ${address.district}
                                        </span>
                                    </div>
                                    <div class="text-gray-800">
                                        ${format === 'structured' ? 
                                            `<pre class="text-sm bg-gray-50 p-2 rounded overflow-x-auto">${formattedAddress}</pre>` :
                                            `<div class="whitespace-pre-line">${formattedAddress}</div>`
                                        }
                                    </div>
                                </div>
                                <button onclick="addressGen.copyAddress(${index})" class="ml-4 p-2 text-gray-500 hover:text-blue-600 transition-colors">
                                    <i class="fas fa-copy" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    `;
                }).join('');

                container.innerHTML = addressesHtml;
            }

            formatAddress(address, format) {
                switch (format) {
                    case 'compact':
                        return address.fullAddress.replace(/,\s*/g, ' | ');
                    case 'postal':
                        return `Singapore ${address.postalCode}`;
                    case 'structured':
                        return JSON.stringify({
                            type: address.type,
                            district: address.district,
                            address_line_1: address.line1,
                            address_line_2: address.line2 || null,
                            address_line_3: address.line3 || null,
                            postal_code: address.postalCode,
                            country: 'Singapore'
                        }, null, 2);
                    default:
                        return address.fullAddress;
                }
            }

            getTypeIcon(type) {
                switch (type) {
                    case 'hdb': return 'fas fa-home';
                    case 'condo': return 'fas fa-building';
                    case 'landed': return 'fas fa-warehouse';
                    default: return 'fas fa-map-marker-alt';
                }
            }

            getTypeColor(type) {
                switch (type) {
                    case 'hdb': return 'text-blue-600';
                    case 'condo': return 'text-green-600';
                    case 'landed': return 'text-purple-600';
                    default: return 'text-gray-600';
                }
            }

            updateStatistics() {
                const totalGenerated = this.generatedAddresses.length;
                const uniquePostal = new Set(this.generatedAddresses.map(a => a.postalCode)).size;
                const uniqueDistricts = new Set(this.generatedAddresses.map(a => a.district)).size;
                const addressTypes = new Set(this.generatedAddresses.map(a => a.type)).size;

                document.getElementById('totalGenerated').textContent = totalGenerated;
                document.getElementById('uniquePostal').textContent = uniquePostal;
                document.getElementById('uniqueDistricts').textContent = uniqueDistricts;
                document.getElementById('addressTypes').textContent = addressTypes;
            }

            copyAddress(index) {
                const address = this.generatedAddresses[index];
                const format = document.getElementById('outputFormat').value;
                const formattedAddress = this.formatAddress(address, format);

                navigator.clipboard.writeText(formattedAddress).then(() => {
                    this.showCopyFeedback();
                });
            }

            copyAllAddresses() {
                const format = document.getElementById('outputFormat').value;
                const allAddresses = this.generatedAddresses
                    .map(address => this.formatAddress(address, format))
                    .join('\n\n');

                navigator.clipboard.writeText(allAddresses).then(() => {
                    this.showCopyFeedback('All addresses copied!');
                });
            }

            exportAddresses() {
                const format = document.getElementById('outputFormat').value;
                let exportData, fileName, mimeType;

                if (format === 'structured') {
                    exportData = JSON.stringify(this.generatedAddresses, null, 2);
                    fileName = 'singapore_addresses.json';
                    mimeType = 'application/json';
                } else {
                    exportData = this.generatedAddresses
                        .map(address => this.formatAddress(address, format))
                        .join('\n');
                    fileName = 'singapore_addresses.txt';
                    mimeType = 'text/plain';
                }

                const blob = new Blob([exportData], { type: mimeType });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = fileName;
                a.click();
                URL.revokeObjectURL(url);
            }

            clearAddresses() {
                this.generatedAddresses = [];
                document.getElementById('addressesList').innerHTML = '';
                document.getElementById('resultsSection').classList.add('hidden');
            }

            showCopyFeedback(message = 'Address copied!') {
                // Create and show temporary feedback
                const feedback = document.createElement('div');
                feedback.textContent = message;
                feedback.className = 'fixed top-4 right-4 bg-green-600 text-white px-4 py-2 rounded-lg shadow-lg copy-feedback z-50';
                document.body.appendChild(feedback);

                setTimeout(() => {
                    feedback.remove();
                }, 2000);
            }

            randomChoice(array) {
                return array[Math.floor(Math.random() * array.length)];
            }

            randomBetween(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
        }

        // Initialize generator when page loads
        let addressGen;
        document.addEventListener('DOMContentLoaded', () => {
            addressGen = new SingaporeAddressGenerator();
        });

        // Add scroll animations
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('fade-in');
                    }
                });
            });

            document.querySelectorAll('section').forEach(el => {
                observer.observe(el);
            });
        });
    </script>
</body>
</html>