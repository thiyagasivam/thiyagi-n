<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT Token Calculator 2025 - Estimate API Usage & Costs | Thiyagi.com</title>
    <meta name="description" content="ChatGPT token calculator 2025 - estimate API usage costs, token counts for GPT-4, GPT-3.5, and other OpenAI models. Plan your AI project budget effectively.">
    <meta name="keywords" content="chatgpt token calculator 2025, openai api cost calculator, gpt token counter, ai usage cost estimator, openai pricing calculator">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="ChatGPT Token Calculator 2025 - Estimate API Usage & Costs">
    <meta property="og:description" content="Calculate ChatGPT API costs and token usage for GPT models. Plan your AI project budget with accurate cost estimates.">
    <meta property="og:url" content="https://www.thiyagi.com/chatgpt-token-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ChatGPT Token Calculator 2025 - Estimate API Usage & Costs">
    <meta name="twitter:description" content="Calculate ChatGPT API costs and token usage for your AI projects.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/chatgpt-token-calculator">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    }
    .token-card {
        transition: all 0.3s ease;
        border-left: 4px solid #10b981;
    }
    .token-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #059669;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .ai-pulse {
        animation: aiPulse 2s ease-in-out infinite;
    }
    @keyframes aiPulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; transform: scale(1.05); }
    }
    .token-counter {
        font-family: 'Courier New', monospace;
        background: linear-gradient(45deg, #1f2937, #374151);
        color: #10b981;
        border: 1px solid #059669;
    }
    .cost-highlight {
        background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%);
        border: 2px solid #f59e0b;
    }
    .model-gpt4 { border-left-color: #8b5cf6; background: linear-gradient(135deg, #f3e8ff 0%, #e9d5ff 100%); }
    .model-gpt35 { border-left-color: #3b82f6; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); }
    .model-ada { border-left-color: #10b981; background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%); }
    .model-babbage { border-left-color: #f59e0b; background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%); }
    .token-visualization {
        position: relative;
        overflow: hidden;
    }
    .token-flow {
        animation: tokenFlow 3s ease-in-out infinite;
    }
    @keyframes tokenFlow {
        0% { transform: translateX(-100%); }
        100% { transform: translateX(100%); }
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "ChatGPT Token Calculator 2025",
  "description": "Calculate ChatGPT API usage costs and token counts for GPT-4, GPT-3.5, and other OpenAI models with accurate pricing estimates.",
  "url": "https://www.thiyagi.com/chatgpt-token-calculator",
  "applicationCategory": "ProductivityApplication",
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
                        <i class="fas fa-robot text-2xl text-green-600 ai-pulse" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">ChatGPT Token Calculator</h1>
                        <p class="text-green-100">Estimate API usage costs and token consumption</p>
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
                <li class="text-gray-900 font-medium">ChatGPT Token Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-green-100 rounded-full mb-4">
                    <i class="fas fa-calculator text-2xl text-green-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Token Usage Calculator</h2>
                <p class="text-gray-600">Calculate ChatGPT API costs and estimate token consumption</p>
            </div>

            <!-- Input Form -->
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Text Input -->
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-green-800 mb-4 flex items-center">
                        <i class="fas fa-edit mr-2" aria-hidden="true"></i>
                        Text Input & Analysis
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label for="inputText" class="block text-sm font-medium text-gray-700 mb-2">Input Text (Prompt + Context)</label>
                            <textarea id="inputText" rows="6" placeholder="Enter your prompt and context text here..." class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent resize-none"></textarea>
                            <div class="flex justify-between items-center mt-2 text-sm text-gray-600">
                                <span>Characters: <span id="charCount">0</span></span>
                                <span>Words: <span id="wordCount">0</span></span>
                                <span>Estimated Tokens: <span id="tokenEstimate" class="font-bold text-green-600">0</span></span>
                            </div>
                        </div>

                        <div>
                            <label for="outputLength" class="block text-sm font-medium text-gray-700 mb-2">Expected Output Length (tokens)</label>
                            <input type="number" id="outputLength" min="1" max="4000" step="1" value="150" placeholder="150" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent">
                            <p class="text-xs text-gray-500 mt-1">Average response length: Short (50-150), Medium (150-500), Long (500-2000)</p>
                        </div>
                    </div>
                </div>

                <!-- Model Selection -->
                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4 flex items-center">
                        <i class="fas fa-brain mr-2" aria-hidden="true"></i>
                        AI Model Selection
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="aiModel" class="block text-sm font-medium text-gray-700 mb-2">OpenAI Model</label>
                            <select id="aiModel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="gpt-4">GPT-4 (Most Capable)</option>
                                <option value="gpt-4-turbo">GPT-4 Turbo (Latest)</option>
                                <option value="gpt-3.5-turbo" selected>GPT-3.5 Turbo (Fast & Cost-Effective)</option>
                                <option value="gpt-3.5-turbo-16k">GPT-3.5 Turbo 16K (Extended Context)</option>
                                <option value="text-davinci-003">Text Davinci 003 (Legacy)</option>
                                <option value="text-ada-001">Ada (Cheapest)</option>
                                <option value="text-babbage-001">Babbage (Basic)</option>
                                <option value="text-curie-001">Curie (Balanced)</option>
                            </select>
                        </div>

                        <div class="token-counter p-4 rounded-lg">
                            <div class="text-sm font-bold mb-2">Model Pricing (per 1K tokens)</div>
                            <div class="flex justify-between">
                                <span>Input:</span>
                                <span id="inputPrice">$0.0015</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Output:</span>
                                <span id="outputPrice">$0.002</span>
                            </div>
                            <hr class="my-2 border-green-600">
                            <div class="flex justify-between font-bold">
                                <span>Context Limit:</span>
                                <span id="contextLimit">4,096</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Usage Scenarios -->
                <div class="bg-purple-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-purple-800 mb-4 flex items-center">
                        <i class="fas fa-chart-bar mr-2" aria-hidden="true"></i>
                        Usage Scenarios
                    </h3>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="usageFrequency" class="block text-sm font-medium text-gray-700 mb-2">Usage Frequency</label>
                            <select id="usageFrequency" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="hourly">Hourly (24 calls/day)</option>
                                <option value="daily">Daily (1 call/day)</option>
                                <option value="weekly" selected>Weekly (7 calls/week)</option>
                                <option value="monthly">Monthly (30 calls/month)</option>
                                <option value="custom">Custom Frequency</option>
                            </select>
                        </div>

                        <div id="customFrequencyDiv" class="hidden">
                            <label for="customCalls" class="block text-sm font-medium text-gray-700 mb-2">Calls per Month</label>
                            <input type="number" id="customCalls" min="1" max="10000" placeholder="100" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                        </div>

                        <div>
                            <label for="projectType" class="block text-sm font-medium text-gray-700 mb-2">Project Type</label>
                            <select id="projectType" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="chatbot">Chatbot/Assistant</option>
                                <option value="content">Content Generation</option>
                                <option value="analysis">Text Analysis</option>
                                <option value="coding">Code Generation</option>
                                <option value="translation">Translation</option>
                                <option value="summarization">Summarization</option>
                                <option value="qa">Q&A System</option>
                                <option value="other">Other/General</option>
                            </select>
                        </div>

                        <div>
                            <label for="responseComplexity" class="block text-sm font-medium text-gray-700 mb-2">Response Complexity</label>
                            <select id="responseComplexity" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <option value="simple">Simple (50-150 tokens)</option>
                                <option value="medium" selected>Medium (150-500 tokens)</option>
                                <option value="complex">Complex (500-1000 tokens)</option>
                                <option value="detailed">Very Detailed (1000+ tokens)</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Advanced Options -->
                <div class="bg-yellow-50 p-6 rounded-lg">
                    <h4 class="font-semibold text-yellow-800 mb-3 flex items-center">
                        <i class="fas fa-cog mr-2" aria-hidden="true"></i>
                        Advanced Configuration
                    </h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <div>
                            <label for="temperature" class="block text-sm font-medium text-gray-700 mb-1">Temperature</label>
                            <input type="number" id="temperature" min="0" max="2" step="0.1" value="0.7" class="w-full px-3 py-2 text-sm border border-gray-300 rounded focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <div>
                            <label for="maxTokens" class="block text-sm font-medium text-gray-700 mb-1">Max Tokens</label>
                            <input type="number" id="maxTokens" min="1" max="4000" value="500" class="w-full px-3 py-2 text-sm border border-gray-300 rounded focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <div>
                            <label for="topP" class="block text-sm font-medium text-gray-700 mb-1">Top P</label>
                            <input type="number" id="topP" min="0" max="1" step="0.1" value="1.0" class="w-full px-3 py-2 text-sm border border-gray-300 rounded focus:ring-2 focus:ring-yellow-500">
                        </div>
                        <div>
                            <label for="presencePenalty" class="block text-sm font-medium text-gray-700 mb-1">Presence Penalty</label>
                            <input type="number" id="presencePenalty" min="0" max="2" step="0.1" value="0" class="w-full px-3 py-2 text-sm border border-gray-300 rounded focus:ring-2 focus:ring-yellow-500">
                        </div>
                    </div>
                </div>

                <!-- Calculate Button -->
                <div class="text-center">
                    <button id="calculateBtn" class="bg-green-600 hover:bg-green-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>
                        Calculate Token Usage & Costs
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-green-50 to-blue-50 border-2 border-green-200 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-chart-line mr-2 text-green-600" aria-hidden="true"></i>
                        Token Usage & Cost Analysis
                    </h3>
                    
                    <!-- Main Results -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div class="token-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-green-600 mb-2" id="totalTokens">850</div>
                            <div class="text-sm text-gray-600">Total Tokens/Call</div>
                        </div>
                        <div class="token-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-blue-600 mb-2" id="costPerCall">$0.0025</div>
                            <div class="text-sm text-gray-600">Cost per Call</div>
                        </div>
                        <div class="token-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-purple-600 mb-2" id="monthlyCalls">210</div>
                            <div class="text-sm text-gray-600">Calls/Month</div>
                        </div>
                        <div class="token-card cost-highlight p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-orange-800 mb-2" id="monthlyCost">$15.75</div>
                            <div class="text-sm text-gray-700">Monthly Cost</div>
                        </div>
                    </div>

                    <!-- Token Breakdown -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-list-alt mr-2 text-indigo-500" aria-hidden="true"></i>
                            Token Breakdown
                        </h4>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-3">
                                <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                                    <span class="text-gray-700">Input Tokens:</span>
                                    <span class="font-bold text-green-600" id="inputTokens">500</span>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                                    <span class="text-gray-700">Output Tokens:</span>
                                    <span class="font-bold text-blue-600" id="outputTokens">350</span>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-green-100 rounded">
                                    <span class="text-gray-700">Total per Call:</span>
                                    <span class="font-bold text-green-800" id="totalPerCall">850</span>
                                </div>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                                    <span class="text-gray-700">Input Cost:</span>
                                    <span class="font-bold text-green-600" id="inputCost">$0.0008</span>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-gray-50 rounded">
                                    <span class="text-gray-700">Output Cost:</span>
                                    <span class="font-bold text-blue-600" id="outputCost">$0.0007</span>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-blue-100 rounded">
                                    <span class="text-gray-700">Total per Call:</span>
                                    <span class="font-bold text-blue-800" id="totalCostPerCall">$0.0015</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cost Projections -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-calendar-alt mr-2 text-green-500" aria-hidden="true"></i>
                            Cost Projections
                        </h4>
                        <div class="grid md:grid-cols-4 gap-4">
                            <div class="text-center p-4 bg-green-50 rounded-lg">
                                <div class="text-2xl font-bold text-green-600" id="dailyCost">$0.52</div>
                                <div class="text-sm text-gray-600">Daily</div>
                            </div>
                            <div class="text-center p-4 bg-blue-50 rounded-lg">
                                <div class="text-2xl font-bold text-blue-600" id="weeklyCost">$3.64</div>
                                <div class="text-sm text-gray-600">Weekly</div>
                            </div>
                            <div class="text-center p-4 bg-purple-50 rounded-lg">
                                <div class="text-2xl font-bold text-purple-600" id="monthlyProjection">$15.75</div>
                                <div class="text-sm text-gray-600">Monthly</div>
                            </div>
                            <div class="text-center p-4 bg-orange-50 rounded-lg">
                                <div class="text-2xl font-bold text-orange-600" id="yearlyCost">$189.00</div>
                                <div class="text-sm text-gray-600">Yearly</div>
                            </div>
                        </div>
                    </div>

                    <!-- Model Comparison -->
                    <div class="bg-white p-6 rounded-lg shadow mb-6">
                        <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-chart-bar mr-2 text-purple-500" aria-hidden="true"></i>
                            Model Cost Comparison (Monthly)
                        </h4>
                        <div id="modelComparison" class="space-y-3">
                            <!-- Comparison will be populated by JS -->
                        </div>
                    </div>

                    <!-- Optimization Tips -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-lightbulb mr-2 text-yellow-500" aria-hidden="true"></i>
                                Cost Optimization Tips
                            </h4>
                            <div id="optimizationTips" class="space-y-3">
                                <!-- Tips will be populated by JS -->
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-exclamation-triangle mr-2 text-red-500" aria-hidden="true"></i>
                                Usage Considerations
                            </h4>
                            <div id="usageConsiderations" class="space-y-3">
                                <!-- Considerations will be populated by JS -->
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center">
                        <button id="exportBtn" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-download mr-2" aria-hidden="true"></i>
                            Export Analysis
                        </button>
                        <button id="shareBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share Results
                        </button>
                        <button id="resetBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-refresh mr-2" aria-hidden="true"></i>
                            New Calculation
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Information Sections -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Understanding Tokens -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-info-circle mr-3 text-blue-500" aria-hidden="true"></i>
                    Understanding Tokens
                </h2>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-blue-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">What are Tokens?</h3>
                        <p class="text-gray-600">Tokens are pieces of words used for processing. 1 token ≈ 4 characters or ¾ words in English.</p>
                    </div>
                    
                    <div class="border-l-4 border-green-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Token Calculation</h3>
                        <p class="text-gray-600">Both input (prompt) and output (response) tokens count toward your usage and costs.</p>
                    </div>
                    
                    <div class="border-l-4 border-purple-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Context Limits</h3>
                        <p class="text-gray-600">Each model has a maximum context window (tokens for input + output combined).</p>
                    </div>
                </div>
            </section>

            <!-- Pricing Models -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-dollar-sign mr-3 text-green-500" aria-hidden="true"></i>
                    Pricing Structure
                </h2>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-chart-line text-purple-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">GPT-4 Models</h3>
                            <p class="text-gray-600 text-sm">Most capable but expensive. Best for complex reasoning and high-quality outputs.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-tachometer-alt text-blue-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">GPT-3.5 Turbo</h3>
                            <p class="text-gray-600 text-sm">Fast and cost-effective. Great for most applications with good quality.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-coins text-green-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Legacy Models</h3>
                            <p class="text-gray-600 text-sm">Older models like Ada, Babbage. Very cheap but limited capabilities.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-credit-card text-orange-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Pay-per-Use</h3>
                            <p class="text-gray-600 text-sm">No subscription fees - pay only for what you use based on token consumption.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Model Comparison Table -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-table mr-3 text-indigo-600" aria-hidden="true"></i>
                OpenAI Model Comparison (2025 Pricing)
            </h2>
            
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-gray-50">
                            <th class="text-left p-4 font-semibold">Model</th>
                            <th class="text-left p-4 font-semibold">Context</th>
                            <th class="text-left p-4 font-semibold">Input Cost</th>
                            <th class="text-left p-4 font-semibold">Output Cost</th>
                            <th class="text-left p-4 font-semibold">Best For</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4"><span class="font-medium text-purple-600">GPT-4</span></td>
                            <td class="p-4">8,192 tokens</td>
                            <td class="p-4">$0.03/1K</td>
                            <td class="p-4">$0.06/1K</td>
                            <td class="p-4">Complex reasoning, high-quality content</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4"><span class="font-medium text-purple-600">GPT-4 Turbo</span></td>
                            <td class="p-4">128,000 tokens</td>
                            <td class="p-4">$0.01/1K</td>
                            <td class="p-4">$0.03/1K</td>
                            <td class="p-4">Large documents, extended context</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4"><span class="font-medium text-blue-600">GPT-3.5 Turbo</span></td>
                            <td class="p-4">4,096 tokens</td>
                            <td class="p-4">$0.0015/1K</td>
                            <td class="p-4">$0.002/1K</td>
                            <td class="p-4">General use, cost-effective</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4"><span class="font-medium text-blue-600">GPT-3.5 16K</span></td>
                            <td class="p-4">16,384 tokens</td>
                            <td class="p-4">$0.003/1K</td>
                            <td class="p-4">$0.004/1K</td>
                            <td class="p-4">Longer conversations, documents</td>
                        </tr>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="p-4"><span class="font-medium text-green-600">Ada</span></td>
                            <td class="p-4">2,049 tokens</td>
                            <td class="p-4">$0.0004/1K</td>
                            <td class="p-4">$0.0004/1K</td>
                            <td class="p-4">Simple tasks, embeddings</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class TokenCalculator {
            constructor() {
                this.models = {
                    'gpt-4': { inputCost: 0.03, outputCost: 0.06, contextLimit: 8192 },
                    'gpt-4-turbo': { inputCost: 0.01, outputCost: 0.03, contextLimit: 128000 },
                    'gpt-3.5-turbo': { inputCost: 0.0015, outputCost: 0.002, contextLimit: 4096 },
                    'gpt-3.5-turbo-16k': { inputCost: 0.003, outputCost: 0.004, contextLimit: 16384 },
                    'text-davinci-003': { inputCost: 0.02, outputCost: 0.02, contextLimit: 4097 },
                    'text-ada-001': { inputCost: 0.0004, outputCost: 0.0004, contextLimit: 2049 },
                    'text-babbage-001': { inputCost: 0.0005, outputCost: 0.0005, contextLimit: 2049 },
                    'text-curie-001': { inputCost: 0.002, outputCost: 0.002, contextLimit: 2049 }
                };

                this.results = {};
                this.init();
            }

            init() {
                this.bindEvents();
                this.updateModelPricing();
                this.updateTextStats();
            }

            bindEvents() {
                document.getElementById('inputText').addEventListener('input', () => this.updateTextStats());
                document.getElementById('aiModel').addEventListener('change', () => this.updateModelPricing());
                document.getElementById('usageFrequency').addEventListener('change', () => this.toggleCustomFrequency());
                document.getElementById('responseComplexity').addEventListener('change', () => this.updateOutputLength());
                document.getElementById('calculateBtn').addEventListener('click', () => this.calculateTokens());
                document.getElementById('exportBtn')?.addEventListener('click', () => this.exportAnalysis());
                document.getElementById('shareBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('resetBtn')?.addEventListener('click', () => this.resetCalculator());
            }

            toggleCustomFrequency() {
                const select = document.getElementById('usageFrequency');
                const customDiv = document.getElementById('customFrequencyDiv');
                
                if (select.value === 'custom') {
                    customDiv.classList.remove('hidden');
                } else {
                    customDiv.classList.add('hidden');
                }
            }

            updateOutputLength() {
                const complexity = document.getElementById('responseComplexity').value;
                const outputLengthInput = document.getElementById('outputLength');
                
                const complexityTokens = {
                    simple: 100,
                    medium: 300,
                    complex: 750,
                    detailed: 1500
                };

                outputLengthInput.value = complexityTokens[complexity] || 300;
            }

            updateModelPricing() {
                const selectedModel = document.getElementById('aiModel').value;
                const modelData = this.models[selectedModel];

                if (modelData) {
                    document.getElementById('inputPrice').textContent = `$${modelData.inputCost.toFixed(4)}`;
                    document.getElementById('outputPrice').textContent = `$${modelData.outputCost.toFixed(4)}`;
                    document.getElementById('contextLimit').textContent = modelData.contextLimit.toLocaleString();
                }
            }

            updateTextStats() {
                const text = document.getElementById('inputText').value;
                const charCount = text.length;
                const wordCount = text.trim() ? text.trim().split(/\s+/).length : 0;
                const estimatedTokens = this.estimateTokens(text);

                document.getElementById('charCount').textContent = charCount.toLocaleString();
                document.getElementById('wordCount').textContent = wordCount.toLocaleString();
                document.getElementById('tokenEstimate').textContent = estimatedTokens.toLocaleString();
            }

            estimateTokens(text) {
                // Rough estimation: 1 token ≈ 4 characters for English
                // More sophisticated tokenization would require actual tokenizer
                if (!text.trim()) return 0;
                
                // Account for word boundaries and punctuation
                const words = text.trim().split(/\s+/);
                let tokenCount = 0;

                words.forEach(word => {
                    // Average 0.75 tokens per word, with variations
                    if (word.length <= 3) {
                        tokenCount += 1;
                    } else if (word.length <= 6) {
                        tokenCount += 1.5;
                    } else {
                        tokenCount += Math.ceil(word.length / 4);
                    }
                });

                return Math.ceil(tokenCount);
            }

            calculateTokens() {
                const inputText = document.getElementById('inputText').value;
                const outputLength = parseInt(document.getElementById('outputLength').value) || 150;
                const selectedModel = document.getElementById('aiModel').value;
                const modelData = this.models[selectedModel];

                if (!inputText.trim()) {
                    alert('Please enter some text to analyze token usage.');
                    return;
                }

                const inputTokens = this.estimateTokens(inputText);
                const outputTokens = outputLength;
                const totalTokens = inputTokens + outputTokens;

                // Check context limit
                if (totalTokens > modelData.contextLimit) {
                    alert(`Warning: Total tokens (${totalTokens}) exceed model context limit (${modelData.contextLimit})`);
                }

                const inputCost = (inputTokens / 1000) * modelData.inputCost;
                const outputCost = (outputTokens / 1000) * modelData.outputCost;
                const totalCostPerCall = inputCost + outputCost;

                const frequency = this.getUsageFrequency();
                const callsPerMonth = frequency.callsPerMonth;

                this.results = {
                    inputTokens,
                    outputTokens,
                    totalTokens,
                    inputCost,
                    outputCost,
                    totalCostPerCall,
                    callsPerMonth,
                    monthlyCost: totalCostPerCall * callsPerMonth,
                    selectedModel,
                    modelData,
                    frequency: frequency.description
                };

                this.displayResults();
            }

            getUsageFrequency() {
                const frequency = document.getElementById('usageFrequency').value;
                
                const frequencies = {
                    hourly: { callsPerMonth: 720, description: 'Hourly (24/day)' },
                    daily: { callsPerMonth: 30, description: 'Daily' },
                    weekly: { callsPerMonth: 30, description: 'Weekly (4/week)' },  // Approximated
                    monthly: { callsPerMonth: 30, description: 'Monthly' }
                };

                if (frequency === 'custom') {
                    const customCalls = parseInt(document.getElementById('customCalls').value) || 100;
                    return { callsPerMonth: customCalls, description: `Custom (${customCalls}/month)` };
                }

                return frequencies[frequency] || frequencies.weekly;
            }

            displayResults() {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update main stats
                document.getElementById('totalTokens').textContent = this.results.totalTokens.toLocaleString();
                document.getElementById('costPerCall').textContent = `$${this.results.totalCostPerCall.toFixed(4)}`;
                document.getElementById('monthlyCalls').textContent = this.results.callsPerMonth.toLocaleString();
                document.getElementById('monthlyCost').textContent = `$${this.results.monthlyCost.toFixed(2)}`;

                // Update breakdown
                document.getElementById('inputTokens').textContent = this.results.inputTokens.toLocaleString();
                document.getElementById('outputTokens').textContent = this.results.outputTokens.toLocaleString();
                document.getElementById('totalPerCall').textContent = this.results.totalTokens.toLocaleString();
                document.getElementById('inputCost').textContent = `$${this.results.inputCost.toFixed(4)}`;
                document.getElementById('outputCost').textContent = `$${this.results.outputCost.toFixed(4)}`;
                document.getElementById('totalCostPerCall').textContent = `$${this.results.totalCostPerCall.toFixed(4)}`;

                // Update projections
                this.updateCostProjections();
                this.updateModelComparison();
                this.updateOptimizationTips();
                this.updateUsageConsiderations();

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            updateCostProjections() {
                const daily = this.results.totalCostPerCall * (this.results.callsPerMonth / 30);
                const weekly = daily * 7;
                const monthly = this.results.monthlyCost;
                const yearly = monthly * 12;

                document.getElementById('dailyCost').textContent = `$${daily.toFixed(2)}`;
                document.getElementById('weeklyCost').textContent = `$${weekly.toFixed(2)}`;
                document.getElementById('monthlyProjection').textContent = `$${monthly.toFixed(2)}`;
                document.getElementById('yearlyCost').textContent = `$${yearly.toFixed(2)}`;
            }

            updateModelComparison() {
                const comparisonHtml = Object.entries(this.models).map(([modelName, modelData]) => {
                    const inputCost = (this.results.inputTokens / 1000) * modelData.inputCost;
                    const outputCost = (this.results.outputTokens / 1000) * modelData.outputCost;
                    const totalCost = inputCost + outputCost;
                    const monthlyCost = totalCost * this.results.callsPerMonth;
                    
                    const isSelected = modelName === this.results.selectedModel;
                    const cardClass = isSelected ? 'bg-blue-100 border-2 border-blue-500' : 'bg-gray-50';

                    return `
                        <div class="flex justify-between items-center p-4 ${cardClass} rounded-lg">
                            <div>
                                <span class="font-medium ${isSelected ? 'text-blue-800' : 'text-gray-800'}">${this.getModelDisplayName(modelName)}</span>
                                ${isSelected ? '<span class="ml-2 text-xs bg-blue-500 text-white px-2 py-1 rounded">Current</span>' : ''}
                            </div>
                            <div class="text-right">
                                <div class="font-bold ${isSelected ? 'text-blue-600' : 'text-gray-600'}">$${monthlyCost.toFixed(2)}/mo</div>
                                <div class="text-sm text-gray-500">$${totalCost.toFixed(4)}/call</div>
                            </div>
                        </div>
                    `;
                }).join('');

                document.getElementById('modelComparison').innerHTML = comparisonHtml;
            }

            getModelDisplayName(modelName) {
                const displayNames = {
                    'gpt-4': 'GPT-4',
                    'gpt-4-turbo': 'GPT-4 Turbo',
                    'gpt-3.5-turbo': 'GPT-3.5 Turbo',
                    'gpt-3.5-turbo-16k': 'GPT-3.5 Turbo 16K',
                    'text-davinci-003': 'Davinci 003',
                    'text-ada-001': 'Ada',
                    'text-babbage-001': 'Babbage',
                    'text-curie-001': 'Curie'
                };
                return displayNames[modelName] || modelName;
            }

            updateOptimizationTips() {
                const tips = [
                    { icon: 'fas fa-compress-arrows-alt', text: 'Reduce input length by removing unnecessary context and examples.' },
                    { icon: 'fas fa-bullseye', text: 'Use more specific prompts to get shorter, targeted responses.' },
                    { icon: 'fas fa-layer-group', text: 'Consider using GPT-3.5 Turbo for simpler tasks to save costs.' },
                    { icon: 'fas fa-recycle', text: 'Reuse context when possible instead of repeating in every call.' },
                    { icon: 'fas fa-sliders-h', text: 'Adjust max_tokens parameter to limit response length.' }
                ];

                // Add model-specific tips
                if (this.results.selectedModel.includes('gpt-4')) {
                    tips.push({ icon: 'fas fa-exchange-alt', text: 'Consider GPT-3.5 Turbo for less complex tasks to reduce costs by 90%.' });
                }

                if (this.results.monthlyCost > 50) {
                    tips.push({ icon: 'fas fa-chart-line', text: 'High usage detected - consider bulk processing or caching responses.' });
                }

                const tipsHtml = tips.map(tip => `
                    <div class="flex items-start space-x-3">
                        <i class="${tip.icon} text-yellow-600 mt-1" aria-hidden="true"></i>
                        <p class="text-sm text-gray-700">${tip.text}</p>
                    </div>
                `).join('');

                document.getElementById('optimizationTips').innerHTML = tipsHtml;
            }

            updateUsageConsiderations() {
                const considerations = [
                    { icon: 'fas fa-clock', text: 'API rate limits may apply - check OpenAI documentation for current limits.' },
                    { icon: 'fas fa-shield-alt', text: 'Monitor usage to avoid unexpected costs - set up billing alerts.' },
                    { icon: 'fas fa-database', text: 'Consider implementing response caching for repeated queries.' },
                    { icon: 'fas fa-chart-area', text: 'Token usage can vary - actual costs may differ from estimates.' }
                ];

                if (this.results.totalTokens > this.results.modelData.contextLimit * 0.8) {
                    considerations.unshift({ 
                        icon: 'fas fa-exclamation-triangle', 
                        text: 'Warning: Close to context limit - may need to reduce input or use higher-capacity model.' 
                    });
                }

                const considerationsHtml = considerations.map(item => `
                    <div class="flex items-start space-x-3">
                        <i class="${item.icon} text-red-600 mt-1" aria-hidden="true"></i>
                        <p class="text-sm text-gray-700">${item.text}</p>
                    </div>
                `).join('');

                document.getElementById('usageConsiderations').innerHTML = considerationsHtml;
            }

            exportAnalysis() {
                const analysisData = {
                    timestamp: new Date().toISOString(),
                    model: this.results.selectedModel,
                    tokenUsage: {
                        input: this.results.inputTokens,
                        output: this.results.outputTokens,
                        total: this.results.totalTokens
                    },
                    costs: {
                        perCall: this.results.totalCostPerCall,
                        monthly: this.results.monthlyCost,
                        yearly: this.results.monthlyCost * 12
                    },
                    usage: {
                        callsPerMonth: this.results.callsPerMonth,
                        frequency: this.results.frequency
                    },
                    modelPricing: this.results.modelData
                };

                const blob = new Blob([JSON.stringify(analysisData, null, 2)], { type: 'application/json' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'chatgpt_token_analysis.json';
                a.click();
                URL.revokeObjectURL(url);
            }

            shareResults() {
                const shareText = `My ChatGPT API analysis: ${this.results.totalTokens} tokens/call, $${this.results.monthlyCost.toFixed(2)}/month using ${this.getModelDisplayName(this.results.selectedModel)}. Calculate yours: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'ChatGPT Token Analysis',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Token analysis copied to clipboard!');
                    });
                }
            }

            resetCalculator() {
                // Reset form inputs
                document.getElementById('inputText').value = '';
                document.getElementById('outputLength').value = '150';
                document.getElementById('aiModel').value = 'gpt-3.5-turbo';
                document.getElementById('usageFrequency').value = 'weekly';
                document.getElementById('projectType').value = 'chatbot';
                document.getElementById('responseComplexity').value = 'medium';

                // Reset advanced options
                document.getElementById('temperature').value = '0.7';
                document.getElementById('maxTokens').value = '500';
                document.getElementById('topP').value = '1.0';
                document.getElementById('presencePenalty').value = '0';

                // Hide custom frequency
                document.getElementById('customFrequencyDiv').classList.add('hidden');

                // Hide results
                document.getElementById('resultsSection').classList.add('hidden');

                // Clear results
                this.results = {};

                // Update displays
                this.updateModelPricing();
                this.updateTextStats();
            }
        }

        // Initialize calculator when page loads
        document.addEventListener('DOMContentLoaded', () => {
            new TokenCalculator();
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