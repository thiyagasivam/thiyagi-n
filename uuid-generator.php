<?php include 'header.php';?>
<?php
/**
 * Advanced UUID Generator Tool 2025
 */

// Enhanced UUID generation functions
function generateUUIDv1() {
    // Simplified v1 UUID (time-based)
    $time = explode(' ', microtime());
    $time = ($time[1] + $time[0]) * 10000000 + 0x01B21DD213814000;
    
    return sprintf('%08x-%04x-%04x-%04x-%012x',
        $time & 0xffffffff,
        ($time >> 32) & 0xffff,
        (($time >> 48) & 0x0fff) | 0x1000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffffffffffff)
    );
}

function generateUUIDv3($namespace, $name) {
    // UUID v3 (MD5 hash)
    $hash = md5(hex2bin($namespace) . $name);
    return sprintf('%08s-%04s-%04s-%04s-%012s',
        substr($hash, 0, 8),
        substr($hash, 8, 4),
        '3' . substr($hash, 13, 3),
        dechex((hexdec(substr($hash, 16, 2)) & 0x3f) | 0x80) . substr($hash, 18, 2),
        substr($hash, 20, 12)
    );
}

function generateUUIDv4() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}

function generateUUIDv5($namespace, $name) {
    // UUID v5 (SHA-1 hash)
    $hash = sha1(hex2bin($namespace) . $name);
    return sprintf('%08s-%04s-%04s-%04s-%012s',
        substr($hash, 0, 8),
        substr($hash, 8, 4),
        '5' . substr($hash, 13, 3),
        dechex((hexdec(substr($hash, 16, 2)) & 0x3f) | 0x80) . substr($hash, 18, 2),
        substr($hash, 20, 12)
    );
}

function validateUUID($uuid) {
    $pattern = '/^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$/i';
    return preg_match($pattern, $uuid);
}

function getUUIDInfo($uuid) {
    if (!validateUUID($uuid)) {
        return ['valid' => false, 'error' => 'Invalid UUID format'];
    }
    
    $version = substr($uuid, 14, 1);
    $variant = hexdec(substr($uuid, 19, 1));
    
    $info = [
        'valid' => true,
        'version' => (int)$version,
        'variant' => $variant >= 8 && $variant <= 11 ? 'RFC 4122' : 'Other',
        'format' => 'Standard UUID',
        'length' => strlen(str_replace('-', '', $uuid))
    ];
    
    switch ($info['version']) {
        case 1:
            $info['type'] = 'Time-based';
            $info['description'] = 'Generated using timestamp and MAC address';
            break;
        case 3:
            $info['type'] = 'Name-based (MD5)';
            $info['description'] = 'Generated using MD5 hash of namespace and name';
            break;
        case 4:
            $info['type'] = 'Random';
            $info['description'] = 'Generated using random or pseudo-random numbers';
            break;
        case 5:
            $info['type'] = 'Name-based (SHA-1)';
            $info['description'] = 'Generated using SHA-1 hash of namespace and name';
            break;
        default:
            $info['type'] = 'Unknown';
            $info['description'] = 'Unknown or non-standard UUID version';
    }
    
    return $info;
}

// Handle form submission
$result = null;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? 'generate';
    
    if ($action === 'generate') {
        $version = $_POST['version'] ?? '4';
        $count = min(max((int)($_POST['count'] ?? 1), 1), 1000);
        $format = $_POST['format'] ?? 'standard';
        
        $uuids = [];
        
        for ($i = 0; $i < $count; $i++) {
            switch ($version) {
                case '1':
                    $uuid = generateUUIDv1();
                    break;
                case '3':
                    $namespace = $_POST['namespace'] ?? '6ba7b810-9dad-11d1-80b4-00c04fd430c8';
                    $name = $_POST['name'] ?? 'example';
                    $uuid = generateUUIDv3($namespace, $name . $i);
                    break;
                case '4':
                default:
                    $uuid = generateUUIDv4();
                    break;
                case '5':
                    $namespace = $_POST['namespace'] ?? '6ba7b810-9dad-11d1-80b4-00c04fd430c8';
                    $name = $_POST['name'] ?? 'example';
                    $uuid = generateUUIDv5($namespace, $name . $i);
                    break;
            }
            
            // Apply formatting
            switch ($format) {
                case 'uppercase':
                    $uuid = strtoupper($uuid);
                    break;
                case 'no-hyphens':
                    $uuid = str_replace('-', '', $uuid);
                    break;
                case 'braces':
                    $uuid = '{' . $uuid . '}';
                    break;
            }
            
            $uuids[] = $uuid;
        }
        
        $result = [
            'action' => 'generate',
            'uuids' => $uuids,
            'count' => $count,
            'version' => $version,
            'format' => $format
        ];
        
    } elseif ($action === 'validate') {
        $uuid = trim($_POST['uuid'] ?? '');
        if (empty($uuid)) {
            $error = 'Please enter a UUID to validate.';
        } else {
            $info = getUUIDInfo($uuid);
            $result = [
                'action' => 'validate',
                'uuid' => $uuid,
                'info' => $info
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UUID Generator 2025 - Generate & Validate Unique Identifiers</title>
    <meta name="description" content="Advanced UUID generator tool supporting v1, v3, v4, v5 versions with bulk generation, validation, and multiple formats. Professional development tool for creating unique identifiers in 2025.">
    <meta name="keywords" content="UUID generator, unique identifier generator, GUID generator, UUID v4, unique ID tool 2025, UUID validator, bulk UUID generation">
    <link rel="canonical" href="https://www.thiyagi.com/uuid-generator">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.thiyagi.com/uuid-generator">
    <meta property="og:title" content="UUID Generator 2025 - Generate & Validate Unique Identifiers">
    <meta property="og:description" content="Advanced UUID generator supporting multiple versions with bulk generation and validation. Professional development tool for creating unique identifiers.">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.thiyagi.com/uuid-generator">
    <meta property="twitter:title" content="UUID Generator 2025 - Generate & Validate Unique Identifiers">
    <meta property="twitter:description" content="Advanced UUID generator with bulk generation and validation features. Professional development tool.">
    <meta property="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "UUID Generator 2025",
        "description": "Advanced UUID generator and validator tool for developers supporting multiple UUID versions with bulk generation capabilities",
        "url": "https://www.thiyagi.com/uuid-generator",
        "applicationCategory": "DeveloperApplication",
        "operatingSystem": "Web Browser",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Organization",
            "name": "Thiyagi.com",
            "url": "https://www.thiyagi.com"
        }
    }
    </script>
    
    <style>
        .uuid-item {
            font-family: 'Courier New', monospace;
            transition: all 0.3s ease;
        }
        .uuid-item:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .tab-button.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .version-badge {
            display: inline-block;
            transition: all 0.2s ease;
        }
        .version-badge:hover {
            transform: scale(1.05);
        }
        .generate-animation {
            animation: generatePulse 0.6s ease-in-out;
        }
        @keyframes generatePulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Breadcrumb Navigation -->
    <nav class="bg-white border-b border-gray-200 px-4 py-3">
        <div class="max-w-6xl mx-auto">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="/" class="hover:text-blue-600 transition-colors">Home</a></li>
                <li><span class="mx-2">/</span></li>
                <li><a href="#" class="hover:text-blue-600 transition-colors">Developer Tools</a></li>
                <li><span class="mx-2">/</span></li>
                <li class="text-gray-900 font-medium">UUID Generator</li>
            </ol>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">🆔 UUID Generator 2025</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Advanced UUID generator supporting multiple versions (v1, v3, v4, v5) with bulk generation, validation, and custom formatting options for developers and system architects.</p>
        </header>

        <!-- Tab Navigation -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="border-b border-gray-200">
                <nav class="flex">
                    <button class="tab-button active px-8 py-4 text-sm font-medium border-b-2 border-transparent hover:text-blue-600 hover:border-blue-300 transition-colors" 
                            onclick="switchTab('generate')">
                        🔧 Generate UUIDs
                    </button>
                    <button class="tab-button px-8 py-4 text-sm font-medium border-b-2 border-transparent hover:text-blue-600 hover:border-blue-300 transition-colors" 
                            onclick="switchTab('validate')">
                        ✅ Validate UUID
                    </button>
                </nav>
            </div>

            <!-- Generate Tab -->
            <div id="generateTab" class="p-8">
                <form method="POST" id="generateForm">
                    <input type="hidden" name="action" value="generate">
                    
                    <div class="grid md:grid-cols-2 gap-8 mb-8">
                        <!-- UUID Version Selection -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-4 text-lg">🎯 UUID Version:</label>
                            <div class="space-y-3">
                                <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                    <input type="radio" name="version" value="4" checked class="mr-3">
                                    <div>
                                        <span class="font-medium">Version 4 (Random)</span>
                                        <p class="text-sm text-gray-600">Most common, uses random numbers</p>
                                    </div>
                                </label>
                                <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                    <input type="radio" name="version" value="1" class="mr-3">
                                    <div>
                                        <span class="font-medium">Version 1 (Time-based)</span>
                                        <p class="text-sm text-gray-600">Uses timestamp and MAC address</p>
                                    </div>
                                </label>
                                <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                    <input type="radio" name="version" value="3" class="mr-3">
                                    <div>
                                        <span class="font-medium">Version 3 (MD5 Hash)</span>
                                        <p class="text-sm text-gray-600">Based on namespace and name</p>
                                    </div>
                                </label>
                                <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer">
                                    <input type="radio" name="version" value="5" class="mr-3">
                                    <div>
                                        <span class="font-medium">Version 5 (SHA-1 Hash)</span>
                                        <p class="text-sm text-gray-600">Enhanced namespace-based</p>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Generation Options -->
                        <div>
                            <label class="block text-gray-700 font-semibold mb-4 text-lg">⚙️ Generation Options:</label>
                            <div class="space-y-4">
                                <div>
                                    <label for="count" class="block text-gray-700 font-medium mb-2">Number of UUIDs (1-1000):</label>
                                    <input type="number" name="count" id="count" min="1" max="1000" value="<?= $result && $result['action'] === 'generate' ? $result['count'] : 1 ?>" 
                                           class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                </div>
                                
                                <div>
                                    <label for="format" class="block text-gray-700 font-medium mb-2">Output Format:</label>
                                    <select name="format" id="format" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                        <option value="standard">Standard (lowercase with hyphens)</option>
                                        <option value="uppercase">Uppercase with hyphens</option>
                                        <option value="no-hyphens">No hyphens (32 characters)</option>
                                        <option value="braces">With braces {uuid}</option>
                                    </select>
                                </div>

                                <!-- Namespace options for v3 and v5 -->
                                <div id="namespaceOptions" style="display: none;">
                                    <div class="mb-4">
                                        <label for="namespace" class="block text-gray-700 font-medium mb-2">Namespace UUID:</label>
                                        <input type="text" name="namespace" id="namespace" 
                                               value="6ba7b810-9dad-11d1-80b4-00c04fd430c8"
                                               placeholder="6ba7b810-9dad-11d1-80b4-00c04fd430c8"
                                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                        <p class="text-sm text-gray-600 mt-1">Standard DNS namespace UUID</p>
                                    </div>
                                    <div>
                                        <label for="name" class="block text-gray-700 font-medium mb-2">Name/Value:</label>
                                        <input type="text" name="name" id="name" 
                                               value="example"
                                               placeholder="Enter name or value"
                                               class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg">
                            🎲 Generate UUIDs
                        </button>
                    </div>
                </form>
            </div>

            <!-- Validate Tab -->
            <div id="validateTab" class="p-8" style="display: none;">
                <form method="POST">
                    <input type="hidden" name="action" value="validate">
                    
                    <div class="mb-6">
                        <label for="uuid" class="block text-gray-700 font-semibold mb-3 text-lg">🔍 Enter UUID to Validate:</label>
                        <input type="text" name="uuid" id="uuid" 
                               placeholder="e.g., 550e8400-e29b-41d4-a716-446655440000"
                               value="<?= $result && $result['action'] === 'validate' ? htmlspecialchars($result['uuid']) : '' ?>"
                               class="w-full px-4 py-4 text-lg border-2 border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors font-mono">
                        <p class="text-sm text-gray-600 mt-2">💡 Paste any UUID to check its validity and get detailed information</p>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="bg-gradient-to-r from-green-600 to-blue-600 hover:from-green-700 hover:to-blue-700 text-white font-semibold py-4 px-8 rounded-lg transition-all duration-200 transform hover:scale-105 shadow-lg">
                            ✅ Validate UUID
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php if (!empty($error)): ?>
        <div class="bg-red-50 border-l-4 border-red-500 p-6 rounded-lg mb-8">
            <div class="flex items-center">
                <span class="text-red-500 text-2xl mr-3">❌</span>
                <div>
                    <h3 class="text-red-800 font-semibold">Validation Error</h3>
                    <p class="text-red-700 mt-1"><?= htmlspecialchars($error) ?></p>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if ($result): ?>
            <?php if ($result['action'] === 'generate'): ?>
            <!-- Generated UUIDs Results -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
                <div class="bg-gradient-to-r from-green-500 to-blue-500 px-8 py-6">
                    <h2 class="text-2xl font-bold text-white flex items-center">
                        <span class="mr-3">🎯</span> Generated UUIDs (<?= $result['count'] ?> total)
                    </h2>
                    <div class="mt-2 flex flex-wrap gap-2">
                        <span class="version-badge bg-white bg-opacity-20 text-white px-3 py-1 rounded-full text-sm">
                            Version <?= $result['version'] ?>
                        </span>
                        <span class="version-badge bg-white bg-opacity-20 text-white px-3 py-1 rounded-full text-sm">
                            <?= ucfirst(str_replace('-', ' ', $result['format'])) ?> Format
                        </span>
                    </div>
                </div>
                
                <div class="p-8">
                    <div class="flex flex-wrap justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold text-gray-800">UUID List</h3>
                        <div class="flex gap-2">
                            <button onclick="copyAllUUIDs()" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                                📋 Copy All
                            </button>
                            <button onclick="downloadUUIDs()" class="bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                                💾 Download
                            </button>
                        </div>
                    </div>
                    
                    <div class="grid gap-2 max-h-96 overflow-y-auto" id="uuidList">
                        <?php foreach ($result['uuids'] as $index => $uuid): ?>
                        <div class="uuid-item flex items-center justify-between bg-gray-50 p-4 rounded-lg border border-gray-200">
                            <div class="flex items-center flex-1">
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2 py-1 rounded mr-3">
                                    #<?= $index + 1 ?>
                                </span>
                                <code class="font-mono text-sm text-gray-800 flex-1"><?= htmlspecialchars($uuid) ?></code>
                            </div>
                            <button onclick="copySingleUUID('<?= htmlspecialchars($uuid) ?>', this)" 
                                    class="ml-4 bg-blue-100 hover:bg-blue-200 text-blue-800 text-xs font-medium py-1 px-3 rounded transition-colors">
                                Copy
                            </button>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <?php elseif ($result['action'] === 'validate'): ?>
            <!-- Validation Results -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
                <div class="bg-gradient-to-r <?= $result['info']['valid'] ? 'from-green-500 to-emerald-500' : 'from-red-500 to-pink-500' ?> px-8 py-6">
                    <h2 class="text-2xl font-bold text-white flex items-center">
                        <span class="mr-3"><?= $result['info']['valid'] ? '✅' : '❌' ?></span> 
                        UUID Validation Results
                    </h2>
                </div>
                
                <div class="p-8">
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-3">Analyzed UUID:</h3>
                        <div class="bg-gray-50 p-4 rounded-lg border">
                            <code class="font-mono text-lg text-gray-800"><?= htmlspecialchars($result['uuid']) ?></code>
                        </div>
                    </div>

                    <?php if ($result['info']['valid']): ?>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-green-50 p-6 rounded-lg border border-green-200">
                            <h4 class="font-semibold text-green-800 mb-3 flex items-center">
                                <span class="mr-2">ℹ️</span> UUID Information
                            </h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Version:</span>
                                    <span class="font-medium text-green-800"><?= $result['info']['version'] ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Type:</span>
                                    <span class="font-medium text-green-800"><?= htmlspecialchars($result['info']['type']) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Variant:</span>
                                    <span class="font-medium text-green-800"><?= htmlspecialchars($result['info']['variant']) ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Format:</span>
                                    <span class="font-medium text-green-800"><?= htmlspecialchars($result['info']['format']) ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="bg-blue-50 p-6 rounded-lg border border-blue-200">
                            <h4 class="font-semibold text-blue-800 mb-3 flex items-center">
                                <span class="mr-2">📝</span> Description
                            </h4>
                            <p class="text-blue-700 text-sm"><?= htmlspecialchars($result['info']['description']) ?></p>
                            <div class="mt-4">
                                <button onclick="copySingleUUID('<?= htmlspecialchars($result['uuid']) ?>', this)" 
                                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors text-sm">
                                    📋 Copy UUID
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="bg-red-50 p-6 rounded-lg border border-red-200">
                        <h4 class="font-semibold text-red-800 mb-2">Invalid UUID Format</h4>
                        <p class="text-red-700 text-sm"><?= htmlspecialchars($result['info']['error']) ?></p>
                        <p class="text-red-700 text-sm mt-2">Please check the format and try again. Valid UUIDs should follow the pattern: xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx</p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Features Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-gray-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">🚀 Advanced UUID Generator Features</h2>
            </div>
            <div class="p-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="text-center">
                        <div class="text-4xl mb-4">🎲</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Multiple Versions</h3>
                        <p class="text-gray-600 text-sm">Support for UUID v1, v3, v4, and v5 generation</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">📦</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Bulk Generation</h3>
                        <p class="text-gray-600 text-sm">Generate up to 1,000 UUIDs at once</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">✅</div>
                        <h3 class="font-semibold text-gray-800 mb-2">UUID Validation</h3>
                        <p class="text-gray-600 text-sm">Validate and analyze existing UUIDs</p>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl mb-4">🎨</div>
                        <h3 class="font-semibold text-gray-800 mb-2">Custom Formats</h3>
                        <p class="text-gray-600 text-sm">Multiple output formats and styles</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- UUID Versions Comparison -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8">
            <div class="bg-indigo-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">📚 UUID Versions Comparison</h2>
            </div>
            <div class="p-8">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Version</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Method</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Use Case</th>
                                <th class="text-left py-3 px-4 font-semibold text-gray-800">Uniqueness</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-medium">UUID v1</td>
                                <td class="py-3 px-4">Timestamp + MAC</td>
                                <td class="py-3 px-4">Sequential ordering required</td>
                                <td class="py-3 px-4">High (with time ordering)</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-medium">UUID v3</td>
                                <td class="py-3 px-4">MD5 Hash</td>
                                <td class="py-3 px-4">Deterministic generation</td>
                                <td class="py-3 px-4">High (same input = same UUID)</td>
                            </tr>
                            <tr class="border-b border-gray-100">
                                <td class="py-3 px-4 font-medium">UUID v4</td>
                                <td class="py-3 px-4">Random Numbers</td>
                                <td class="py-3 px-4">General purpose (most common)</td>
                                <td class="py-3 px-4">Very High (statistical)</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 font-medium">UUID v5</td>
                                <td class="py-3 px-4">SHA-1 Hash</td>
                                <td class="py-3 px-4">Improved deterministic generation</td>
                                <td class="py-3 px-4">High (same input = same UUID)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="bg-purple-600 px-8 py-6">
                <h2 class="text-2xl font-bold text-white">❓ Frequently Asked Questions</h2>
            </div>
            <div class="p-8">
                <div class="space-y-6">
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: What is a UUID and why use it?</h4>
                        <p class="text-gray-700 text-sm">A: A UUID is a 128-bit unique identifier that can be generated without a central authority. It's perfect for distributed systems, database keys, and ensuring uniqueness across different platforms.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Which UUID version should I use?</h4>
                        <p class="text-gray-700 text-sm">A: For most applications, use UUID v4 (random). Use v1 if you need time-based ordering, or v3/v5 if you need deterministic generation from namespace and name.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Are UUIDs truly unique?</h4>
                        <p class="text-gray-700 text-sm">A: While theoretically possible, UUID collisions are so rare that they're considered practically impossible. The probability is approximately 1 in 5.3 billion billion billion.</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h4 class="font-semibold text-gray-800 mb-2">Q: Can I use UUIDs as primary keys in databases?</h4>
                        <p class="text-gray-700 text-sm">A: Yes, UUIDs are excellent for primary keys, especially in distributed systems. They eliminate the need for centralized ID generation and allow for easy data merging.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Tab switching functionality
        function switchTab(tab) {
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            document.getElementById('generateTab').style.display = tab === 'generate' ? 'block' : 'none';
            document.getElementById('validateTab').style.display = tab === 'validate' ? 'block' : 'none';
            event.target.classList.add('active');
        }

        // Show/hide namespace options based on UUID version
        document.querySelectorAll('input[name="version"]').forEach(radio => {
            radio.addEventListener('change', function() {
                const namespaceOptions = document.getElementById('namespaceOptions');
                if (this.value === '3' || this.value === '5') {
                    namespaceOptions.style.display = 'block';
                } else {
                    namespaceOptions.style.display = 'none';
                }
            });
        });

        // Copy single UUID
        function copySingleUUID(uuid, button) {
            navigator.clipboard.writeText(uuid).then(() => {
                const originalText = button.textContent;
                button.textContent = '✓ Copied!';
                button.classList.add('generate-animation');
                setTimeout(() => {
                    button.textContent = originalText;
                    button.classList.remove('generate-animation');
                }, 2000);
            });
        }

        // Copy all UUIDs
        function copyAllUUIDs() {
            const uuids = Array.from(document.querySelectorAll('#uuidList code'))
                .map(code => code.textContent)
                .join('\n');
            
            navigator.clipboard.writeText(uuids).then(() => {
                alert(`Copied ${uuids.split('\n').length} UUIDs to clipboard!`);
            });
        }

        // Download UUIDs as file
        function downloadUUIDs() {
            const uuids = Array.from(document.querySelectorAll('#uuidList code'))
                .map(code => code.textContent)
                .join('\n');
            
            const blob = new Blob([uuids], { type: 'text/plain' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = `uuids-${new Date().toISOString().slice(0,10)}.txt`;
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            window.URL.revokeObjectURL(url);
        }

        // Form animation on submit
        document.getElementById('generateForm')?.addEventListener('submit', function() {
            const button = this.querySelector('button[type="submit"]');
            button.classList.add('generate-animation');
        });

        // Auto-scroll to results after generation
        <?php if ($result): ?>
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(() => {
                const resultsSection = document.querySelector('.bg-gradient-to-r');
                if (resultsSection && resultsSection.parentElement.classList.contains('bg-white')) {
                    resultsSection.parentElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            }, 300);
        });
        <?php endif; ?>
    </script>
</body>
<?php include 'footer.php';?>
</html>
