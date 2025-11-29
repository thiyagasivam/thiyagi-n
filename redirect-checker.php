<?php include 'header.php';?>

<?php
/**
 * Advanced Redirect Checker
 * Professional redirect analysis tool with performance metrics and comprehensive reporting
 */

class AdvancedRedirectChecker {
    private $maxRedirects = 10;
    private $timeout = 30;
    private $userAgent = 'AdvancedRedirectChecker/1.0 (SEO Analysis Tool)';
    
    public function checkRedirect($url, $options = []) {
        $startTime = microtime(true);
        $redirectChain = [];
        $currentUrl = $url;
        $redirectCount = 0;
        $totalTime = 0;
        $errors = [];
        $sslInfo = [];
        
        while ($redirectCount < $this->maxRedirects) {
            $stepStartTime = microtime(true);
            $redirectInfo = $this->analyzeUrl($currentUrl);
            $stepTime = microtime(true) - $stepStartTime;
            
            if (isset($redirectInfo['error'])) {
                $errors[] = $redirectInfo['error'];
                break;
            }
            
            $redirectChain[] = array_merge($redirectInfo, [
                'step' => $redirectCount + 1,
                'response_time' => round($stepTime * 1000, 2) // Convert to milliseconds
            ]);
            
            if ($redirectInfo['ssl_info']) {
                $sslInfo = $redirectInfo['ssl_info'];
            }
            
            // If not a redirect, break the chain
            if ($redirectInfo['status_code'] < 300 || $redirectInfo['status_code'] >= 400) {
                break;
            }
            
            // If no location header, break the chain  
            if (empty($redirectInfo['location'])) {
                break;
            }
            
            $currentUrl = $redirectInfo['location'];
            $redirectCount++;
            
            // Prevent infinite loops
            $urls = array_column($redirectChain, 'url');
            if (in_array($currentUrl, $urls)) {
                $errors[] = 'Infinite redirect loop detected';
                break;
            }
        }
        
        $totalTime = microtime(true) - $startTime;
        
        return [
            'original_url' => $url,
            'final_url' => $currentUrl,
            'redirect_chain' => $redirectChain,
            'redirect_count' => count($redirectChain) - 1,
            'total_time' => round($totalTime * 1000, 2),
            'errors' => $errors,
            'ssl_info' => $sslInfo,
            'analysis' => $this->analyzeChain($redirectChain)
        ];
    }
    
    private function analyzeUrl($url) {
        $ch = curl_init();
        
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_HEADER => true,
            CURLOPT_NOBODY => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_MAXREDIRS => 0,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_USERAGENT => $this->userAgent,
            CURLOPT_CERTINFO => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_2_0
        ]);
        
        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            $error = 'CURL Error: ' . curl_error($ch);
            curl_close($ch);
            return ['error' => $error];
        }
        
        $info = curl_getinfo($ch);
        $headers = $this->parseHeaders($response);
        
        curl_close($ch);
        
        return [
            'url' => $url,
            'status_code' => $info['http_code'],
            'status_text' => $this->getStatusText($info['http_code']),
            'location' => $headers['location'] ?? '',
            'content_type' => $info['content_type'] ?? '',
            'response_time' => round($info['total_time'] * 1000, 2),
            'size' => $info['download_content_length'] ?? 0,
            'headers' => $headers,
            'ssl_info' => $this->extractSslInfo($info),
            'server_info' => [
                'server' => $headers['server'] ?? 'Unknown',
                'powered_by' => $headers['x-powered-by'] ?? '',
                'cache_control' => $headers['cache-control'] ?? '',
                'expires' => $headers['expires'] ?? ''
            ]
        ];
    }
    
    private function parseHeaders($response) {
        $headers = [];
        $headerLines = explode("\r\n", substr($response, 0, strpos($response, "\r\n\r\n")));
        
        foreach ($headerLines as $line) {
            if (strpos($line, ':') !== false) {
                list($key, $value) = explode(':', $line, 2);
                $headers[strtolower(trim($key))] = trim($value);
            }
        }
        
        return $headers;
    }
    
    private function extractSslInfo($info) {
        if (empty($info['certinfo'])) {
            return null;
        }
        
        $cert = $info['certinfo'][0] ?? [];
        return [
            'subject' => $cert['Subject'] ?? '',
            'issuer' => $cert['Issuer'] ?? '',
            'valid_from' => $cert['Start date'] ?? '',
            'valid_to' => $cert['Expire date'] ?? '',
            'signature_algorithm' => $cert['Signature Algorithm'] ?? ''
        ];
    }
    
    private function getStatusText($code) {
        $statusTexts = [
            200 => 'OK',
            201 => 'Created', 
            202 => 'Accepted',
            204 => 'No Content',
            301 => 'Moved Permanently',
            302 => 'Found',
            303 => 'See Other',
            304 => 'Not Modified',
            307 => 'Temporary Redirect',
            308 => 'Permanent Redirect',
            400 => 'Bad Request',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not Found',
            405 => 'Method Not Allowed',
            410 => 'Gone',
            418 => "I'm a teapot",
            429 => 'Too Many Requests',
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout'
        ];
        
        return $statusTexts[$code] ?? 'Unknown Status';
    }
    
    private function analyzeChain($chain) {
        if (empty($chain)) {
            return [];
        }
        
        $analysis = [
            'seo_impact' => 'good',
            'performance_impact' => 'good',
            'issues' => [],
            'recommendations' => []
        ];
        
        $redirectCount = count($chain) - 1;
        
        // SEO Analysis
        if ($redirectCount > 3) {
            $analysis['seo_impact'] = 'bad';
            $analysis['issues'][] = 'Too many redirects in chain (>3)';
            $analysis['recommendations'][] = 'Reduce redirect chain length for better SEO';
        } elseif ($redirectCount > 1) {
            $analysis['seo_impact'] = 'warning';
            $analysis['issues'][] = 'Multiple redirects detected';
            $analysis['recommendations'][] = 'Consider direct redirects when possible';
        }
        
        // Performance Analysis
        $totalTime = array_sum(array_column($chain, 'response_time'));
        if ($totalTime > 3000) {
            $analysis['performance_impact'] = 'bad';
            $analysis['issues'][] = 'High response time (>3s)';
            $analysis['recommendations'][] = 'Optimize server response times';
        } elseif ($totalTime > 1500) {
            $analysis['performance_impact'] = 'warning';
            $analysis['issues'][] = 'Moderate response time (>1.5s)';
        }
        
        // Check for mixed redirects
        $redirectCodes = array_column($chain, 'status_code');
        $redirectCodes = array_filter($redirectCodes, function($code) {
            return $code >= 300 && $code < 400;
        });
        
        if (count(array_unique($redirectCodes)) > 1) {
            $analysis['issues'][] = 'Mixed redirect types detected';
            $analysis['recommendations'][] = 'Use consistent redirect types (301 or 302)';
        }
        
        // Check for HTTPS upgrade
        $urls = array_column($chain, 'url');
        $hasHttps = false;
        $hasHttp = false;
        
        foreach ($urls as $url) {
            if (strpos($url, 'https://') === 0) {
                $hasHttps = true;
            } elseif (strpos($url, 'http://') === 0) {
                $hasHttp = true;
            }
        }
        
        if ($hasHttp && $hasHttps) {
            $analysis['recommendations'][] = 'Good: HTTP to HTTPS redirect detected';
        } elseif ($hasHttp && !$hasHttps) {
            $analysis['issues'][] = 'No HTTPS redirect detected';
            $analysis['recommendations'][] = 'Consider implementing HTTPS redirects for security';
        }
        
        return $analysis;
    }
    
    public function checkBulkUrls($urls) {
        $results = [];
        foreach ($urls as $url) {
            $url = trim($url);
            if (!empty($url) && filter_var($url, FILTER_VALIDATE_URL)) {
                $results[] = $this->checkRedirect($url);
            }
        }
        return $results;
    }
}

// Initialize checker
$checker = new AdvancedRedirectChecker();

// Handle form submission
$result = null;
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['bulk_check'])) {
        // Bulk URL checking
        $urls = array_filter(array_map('trim', explode("\n", $_POST['bulk_urls'] ?? '')));
        if (!empty($urls)) {
            $result = ['bulk_results' => $checker->checkBulkUrls($urls)];
            $success = "Analyzed " . count($urls) . " URLs successfully!";
        } else {
            $error = "Please enter at least one URL for bulk checking.";
        }
    } else {
        // Single URL checking
        $url = trim($_POST['url'] ?? '');
        if (!empty($url)) {
            if (filter_var($url, FILTER_VALIDATE_URL)) {
                $result = $checker->checkRedirect($url);
                $success = "Redirect analysis completed successfully!";
            } else {
                $error = "Please enter a valid URL (e.g., https://example.com).";
            }
        } else {
            $error = "Please enter a URL to check.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect Checker Tool (2025) - Free URL Redirection Tester</title>
<meta name="description" content="Check HTTP redirects, status codes, and URL chains in real-time. Free online tool to analyze 301, 302 redirects with full path visualization - no installation needed.">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .status-301 { color: #3b82f6; }
        .status-302 { color: #10b981; }
        .status-307 { color: #f59e0b; }
        .status-308 { color: #8b5cf6; }
        .status-other { color: #ef4444; }
        .redirect-chain {
            counter-reset: step;
        }
        .redirect-step::before {
            counter-increment: step;
            content: counter(step);
            display: inline-block;
            width: 24px;
            height: 24px;
            background: #3b82f6;
            color: white;
            text-align: center;
            border-radius: 50%;
            margin-right: 10px;
            line-height: 24px;
        }
    </style>

</head>
<body class="min-h-screen bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </div>
                <h1 class="text-4xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
                    Advanced Redirect Checker
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Professional redirect analysis tool with performance metrics, SEO insights, and comprehensive chain analysis
                </p>
            </div>

            <!-- Input Forms Section -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
                <!-- Single URL Checker -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/50 p-6 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Single URL Analysis</h3>
                    </div>
                    
                    <form method="POST" class="space-y-4">
                        <div>
                            <label for="url" class="block text-sm font-medium text-gray-700 mb-2">Enter URL to Analyze</label>
                            <input type="url" 
                                   id="url" 
                                   name="url" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors" 
                                   placeholder="https://example.com"
                                   value="<?php echo htmlspecialchars($_POST['url'] ?? ''); ?>">
                        </div>
                        
                        <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                Analyze Redirects
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Bulk URL Checker -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/50 p-6 hover:shadow-2xl transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800">Bulk URL Analysis</h3>
                    </div>
                    
                    <form method="POST" class="space-y-4">
                        <div>
                            <label for="bulk_urls" class="block text-sm font-medium text-gray-700 mb-2">Enter URLs (one per line)</label>
                            <textarea name="bulk_urls" 
                                      id="bulk_urls"
                                      rows="5" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-colors" 
                                      placeholder="https://example1.com&#10;https://example2.com&#10;https://example3.com"><?php echo htmlspecialchars($_POST['bulk_urls'] ?? ''); ?></textarea>
                        </div>
                        
                        <button type="submit" 
                                name="bulk_check"
                                value="1"
                                class="w-full bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                            <span class="flex items-center justify-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                </svg>
                                Analyze Multiple URLs
                            </span>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Status Messages -->
            <?php if (!empty($error)): ?>
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 rounded-lg p-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                        <p class="text-red-700 font-medium"><?php echo htmlspecialchars($error); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($success)): ?>
                <div class="mb-6 bg-green-50 border-l-4 border-green-500 rounded-lg p-4">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-green-700 font-medium"><?php echo htmlspecialchars($success); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Results Section -->
            <?php if ($result): ?>
                <?php if (isset($result['bulk_results'])): ?>
                    <!-- Bulk Results -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/50 p-6 mb-8">
                        <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                            <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                            Bulk Analysis Results
                        </h2>
                        
                        <div class="space-y-6">
                            <?php foreach ($result['bulk_results'] as $index => $bulkResult): ?>
                                <div class="border border-gray-200 rounded-xl p-4">
                                    <h3 class="font-semibold text-lg mb-3">URL #<?php echo $index + 1; ?>: <?php echo htmlspecialchars($bulkResult['original_url']); ?></h3>
                                    
                                    <?php if (!empty($bulkResult['errors'])): ?>
                                        <div class="bg-red-50 border border-red-200 rounded-lg p-3 mb-3">
                                            <p class="text-red-700 font-medium">Errors:</p>
                                            <ul class="text-red-600 text-sm mt-1">
                                                <?php foreach ($bulkResult['errors'] as $error): ?>
                                                    <li>• <?php echo htmlspecialchars($error); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php else: ?>
                                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-3">
                                            <div class="bg-blue-50 rounded-lg p-3 text-center">
                                                <div class="text-2xl font-bold text-blue-600"><?php echo $bulkResult['redirect_count']; ?></div>
                                                <div class="text-sm text-blue-700">Redirects</div>
                                            </div>
                                            <div class="bg-green-50 rounded-lg p-3 text-center">
                                                <div class="text-2xl font-bold text-green-600"><?php echo $bulkResult['total_time']; ?>ms</div>
                                                <div class="text-sm text-green-700">Total Time</div>
                                            </div>
                                            <div class="bg-purple-50 rounded-lg p-3 text-center">
                                                <div class="text-2xl font-bold text-purple-600"><?php echo end($bulkResult['redirect_chain'])['status_code']; ?></div>
                                                <div class="text-sm text-purple-700">Final Status</div>
                                            </div>
                                            <div class="bg-orange-50 rounded-lg p-3 text-center">
                                                <div class="text-2xl font-bold text-orange-600 capitalize"><?php echo $bulkResult['analysis']['seo_impact'] ?? 'N/A'; ?></div>
                                                <div class="text-sm text-orange-700">SEO Impact</div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Single Result Display -->
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl border border-white/50 overflow-hidden mb-8">
                        <!-- Result Header -->
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 px-6 py-4">
                            <h2 class="text-2xl font-bold text-white flex items-center">
                                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                                Redirect Analysis Results
                            </h2>
                        </div>

                        <?php if (!empty($result['errors'])): ?>
                            <!-- Error Display -->
                            <div class="p-6">
                                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                                    <div class="flex items-center mb-2">
                                        <svg class="w-5 h-5 text-red-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                        </svg>
                                        <h3 class="text-lg font-semibold text-red-700">Analysis Errors</h3>
                                    </div>
                                    <ul class="text-red-600">
                                        <?php foreach ($result['errors'] as $error): ?>
                                            <li>• <?php echo htmlspecialchars($error); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        <?php else: ?>
                            <!-- Tab Navigation -->
                            <div class="border-b border-gray-200">
                                <nav class="flex space-x-8 px-6">
                                    <button class="tab-btn py-3 px-1 border-b-2 font-medium text-sm text-blue-600 border-blue-500" data-tab="overview">
                                        Overview
                                    </button>
                                    <button class="tab-btn py-3 px-1 border-b-2 font-medium text-sm text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300" data-tab="chain">
                                        Redirect Chain
                                    </button>
                                    <button class="tab-btn py-3 px-1 border-b-2 font-medium text-sm text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300" data-tab="performance">
                                        Performance
                                    </button>
                                    <button class="tab-btn py-3 px-1 border-b-2 font-medium text-sm text-gray-500 border-transparent hover:text-gray-700 hover:border-gray-300" data-tab="seo">
                                        SEO Analysis
                                    </button>
                                </nav>
                            </div>

                            <!-- Tab Content -->
                            <div class="p-6">
                                <!-- Overview Tab -->
                                <div class="tab-content" id="overview">
                                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-6">
                                        <div class="bg-blue-50 rounded-xl p-4 text-center">
                                            <div class="text-3xl font-bold text-blue-600"><?php echo $result['redirect_count']; ?></div>
                                            <div class="text-sm text-blue-700 mt-1">Redirects</div>
                                        </div>
                                        <div class="bg-green-50 rounded-xl p-4 text-center">
                                            <div class="text-3xl font-bold text-green-600"><?php echo $result['total_time']; ?>ms</div>
                                            <div class="text-sm text-green-700 mt-1">Total Time</div>
                                        </div>
                                        <div class="bg-purple-50 rounded-xl p-4 text-center">
                                            <div class="text-3xl font-bold text-purple-600"><?php echo end($result['redirect_chain'])['status_code']; ?></div>
                                            <div class="text-sm text-purple-700 mt-1">Final Status</div>
                                        </div>
                                        <div class="bg-orange-50 rounded-xl p-4 text-center">
                                            <div class="text-2xl font-bold text-orange-600 capitalize"><?php echo $result['analysis']['seo_impact']; ?></div>
                                            <div class="text-sm text-orange-700 mt-1">SEO Impact</div>
                                        </div>
                                    </div>
                                    
                                    <div class="bg-gray-50 rounded-xl p-4">
                                        <h4 class="font-semibold text-gray-800 mb-2">URL Journey</h4>
                                        <div class="text-sm">
                                            <p class="mb-1"><span class="font-medium">Original:</span> <?php echo htmlspecialchars($result['original_url']); ?></p>
                                            <p><span class="font-medium">Final:</span> <?php echo htmlspecialchars($result['final_url']); ?></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Redirect Chain Tab -->
                                <div class="tab-content hidden" id="chain">
                                    <div class="space-y-4">
                                        <?php foreach ($result['redirect_chain'] as $index => $step): ?>
                                            <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-xl p-4 border-l-4 <?php echo ($step['status_code'] >= 300 && $step['status_code'] < 400) ? 'border-orange-500' : 'border-green-500'; ?>">
                                                <div class="flex items-center justify-between mb-3">
                                                    <div class="flex items-center">
                                                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-full mr-3">
                                                            Step <?php echo $step['step']; ?>
                                                        </span>
                                                        <span class="text-lg font-semibold"><?php echo $step['status_code']; ?> <?php echo htmlspecialchars($step['status_text']); ?></span>
                                                    </div>
                                                    <span class="text-sm text-gray-500"><?php echo $step['response_time']; ?>ms</span>
                                                </div>
                                                
                                                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 text-sm">
                                                    <div>
                                                        <span class="font-medium text-gray-700">URL:</span>
                                                        <p class="text-blue-600 break-all mt-1"><?php echo htmlspecialchars($step['url']); ?></p>
                                                    </div>
                                                    <?php if (!empty($step['location'])): ?>
                                                    <div>
                                                        <span class="font-medium text-gray-700">Redirects to:</span>
                                                        <p class="text-green-600 break-all mt-1"><?php echo htmlspecialchars($step['location']); ?></p>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                
                                                <?php if (!empty($step['server_info']['server'])): ?>
                                                <div class="mt-3 pt-3 border-t border-gray-200 text-xs text-gray-600">
                                                    <span class="font-medium">Server:</span> <?php echo htmlspecialchars($step['server_info']['server']); ?>
                                                    <?php if (!empty($step['content_type'])): ?>
                                                        | <span class="font-medium">Content-Type:</span> <?php echo htmlspecialchars($step['content_type']); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <!-- Performance Tab -->
                                <div class="tab-content hidden" id="performance">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6">
                                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                </svg>
                                                Response Times
                                            </h4>
                                            <div class="space-y-3">
                                                <?php foreach ($result['redirect_chain'] as $step): ?>
                                                    <div class="flex justify-between items-center">
                                                        <span class="text-sm text-gray-600">Step <?php echo $step['step']; ?></span>
                                                        <span class="font-semibold text-blue-700"><?php echo $step['response_time']; ?>ms</span>
                                                    </div>
                                                <?php endforeach; ?>
                                                <div class="border-t pt-2 flex justify-between items-center font-semibold">
                                                    <span>Total Time</span>
                                                    <span class="text-blue-800"><?php echo $result['total_time']; ?>ms</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6">
                                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                                </svg>
                                                Performance Analysis
                                            </h4>
                                            <div class="space-y-3">
                                                <div class="flex justify-between items-center">
                                                    <span class="text-sm text-gray-600">Performance Impact</span>
                                                    <span class="px-2 py-1 text-xs font-semibold rounded-full 
                                                        <?php 
                                                        $impact = $result['analysis']['performance_impact'];
                                                        echo $impact === 'good' ? 'bg-green-100 text-green-700' : 
                                                             ($impact === 'warning' ? 'bg-yellow-100 text-yellow-700' : 'bg-red-100 text-red-700');
                                                        ?>">
                                                        <?php echo ucfirst($result['analysis']['performance_impact']); ?>
                                                    </span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-sm text-gray-600">Redirect Count</span>
                                                    <span class="font-semibold"><?php echo $result['redirect_count']; ?></span>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <span class="text-sm text-gray-600">Avg. Response Time</span>
                                                    <span class="font-semibold"><?php echo round($result['total_time'] / count($result['redirect_chain']), 2); ?>ms</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- SEO Analysis Tab -->
                                <div class="tab-content hidden" id="seo">
                                    <div class="space-y-6">
                                        <!-- SEO Impact Summary -->
                                        <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-xl p-6">
                                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                                SEO Impact Assessment
                                            </h4>
                                            <div class="flex items-center space-x-4">
                                                <div class="text-center">
                                                    <div class="text-2xl font-bold 
                                                        <?php 
                                                        $seoImpact = $result['analysis']['seo_impact'];
                                                        echo $seoImpact === 'good' ? 'text-green-600' : 
                                                             ($seoImpact === 'warning' ? 'text-yellow-600' : 'text-red-600');
                                                        ?>">
                                                        <?php echo ucfirst($result['analysis']['seo_impact']); ?>
                                                    </div>
                                                    <div class="text-sm text-gray-600">Overall Rating</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Issues and Recommendations -->
                                        <?php if (!empty($result['analysis']['issues']) || !empty($result['analysis']['recommendations'])): ?>
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                            <?php if (!empty($result['analysis']['issues'])): ?>
                                            <div class="bg-red-50 border border-red-200 rounded-xl p-4">
                                                <h5 class="font-semibold text-red-800 mb-3 flex items-center">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                                    </svg>
                                                    Issues Found
                                                </h5>
                                                <ul class="space-y-1 text-sm text-red-700">
                                                    <?php foreach ($result['analysis']['issues'] as $issue): ?>
                                                        <li>• <?php echo htmlspecialchars($issue); ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <?php endif; ?>

                                            <?php if (!empty($result['analysis']['recommendations'])): ?>
                                            <div class="bg-blue-50 border border-blue-200 rounded-xl p-4">
                                                <h5 class="font-semibold text-blue-800 mb-3 flex items-center">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                                                    </svg>
                                                    Recommendations
                                                </h5>
                                                <ul class="space-y-1 text-sm text-blue-700">
                                                    <?php foreach ($result['analysis']['recommendations'] as $recommendation): ?>
                                                        <li>• <?php echo htmlspecialchars($recommendation); ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-6 text-center border border-white/50">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Performance Analysis</h3>
                    <p class="text-gray-600 text-sm">Detailed response time metrics and performance impact assessment for each redirect step.</p>
                </div>
                
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-6 text-center border border-white/50">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">SEO Insights</h3>
                    <p class="text-gray-600 text-sm">Comprehensive SEO impact analysis with recommendations for optimal search engine visibility.</p>
                </div>
                
                <div class="bg-white/60 backdrop-blur-sm rounded-xl p-6 text-center border border-white/50">
                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Chain Analysis</h3>
                    <p class="text-gray-600 text-sm">Complete redirect chain visualization with SSL information and server response details.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Tab Functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab functionality
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    const targetTab = btn.getAttribute('data-tab');
                    
                    // Remove active class from all buttons and contents
                    tabBtns.forEach(b => {
                        b.classList.remove('text-blue-600', 'border-blue-500');
                        b.classList.add('text-gray-500', 'border-transparent');
                    });
                    
                    tabContents.forEach(content => {
                        content.classList.add('hidden');
                    });
                    
                    // Add active class to clicked button
                    btn.classList.remove('text-gray-500', 'border-transparent');
                    btn.classList.add('text-blue-600', 'border-blue-500');
                    
                    // Show target content
                    const targetContent = document.getElementById(targetTab);
                    if (targetContent) {
                        targetContent.classList.remove('hidden');
                    }
                });
            });
        });
    </script>
</body>

<?php include 'footer.php';?>


</html>
