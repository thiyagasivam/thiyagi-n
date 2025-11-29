<?php include 'header.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Win Percentage Calculator 2025 - Sports & Gaming Statistics | Thiyagi.com</title>
    <meta name="description" content="Win percentage calculator 2025 - track wins, losses, and ties for sports teams, gaming records, and competitive performance with streak analysis and predictions.">
    <meta name="keywords" content="win percentage calculator 2025, win rate calculator, sports statistics, gaming win rate, team performance, winning percentage">
    <meta name="author" content="Thiyagi">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Win Percentage Calculator 2025 - Sports & Gaming Statistics">
    <meta property="og:description" content="Track wins, losses, and ties for sports teams and gaming with advanced statistics and streak analysis.">
    <meta property="og:url" content="https://www.thiyagi.com/win-percentage-calculator">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Win Percentage Calculator 2025 - Sports & Gaming Statistics">
    <meta name="twitter:description" content="Calculate win percentages and track performance for sports and gaming.">
    <meta name="twitter:image" content="https://www.thiyagi.com/nt.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://www.thiyagi.com/win-percentage-calculator">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    }
    .stat-card {
        transition: all 0.3s ease;
        border-left: 4px solid #3b82f6;
    }
    .stat-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        border-left-color: #1d4ed8;
    }
    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .win-excellent { border-left-color: #10b981; background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%); }
    .win-good { border-left-color: #3b82f6; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); }
    .win-average { border-left-color: #f59e0b; background: linear-gradient(135deg, #fffbeb 0%, #fef3c7 100%); }
    .win-poor { border-left-color: #ef4444; background: linear-gradient(135deg, #fef2f2 0%, #fecaca 100%); }
    .trophy-icon {
        animation: bounce 2s ease-in-out infinite;
    }
    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-5px); }
    }
    .game-entry {
        transition: all 0.3s ease;
    }
    .game-entry:hover {
        background-color: #f8fafc;
    }
    .streak-indicator {
        font-weight: bold;
        padding: 2px 8px;
        border-radius: 12px;
        font-size: 0.875rem;
    }
    .win-streak {
        background: linear-gradient(135deg, #10b981, #059669);
        color: white;
    }
    .loss-streak {
        background: linear-gradient(135deg, #ef4444, #dc2626);
        color: white;
    }
</style>

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "Win Percentage Calculator 2025",
  "description": "Calculate win percentages for sports teams, gaming records, and competitive performance with advanced statistics, streak analysis, and predictive insights.",
  "url": "https://www.thiyagi.com/win-percentage-calculator",
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
                        <i class="fas fa-trophy text-2xl text-blue-600 trophy-icon" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-white">Win Percentage Calculator</h1>
                        <p class="text-blue-100">Track performance and analyze winning statistics</p>
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
                <li class="text-gray-900 font-medium">Win Percentage Calculator</li>
            </ol>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">
        <!-- Calculator Tool -->
        <section class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                    <i class="fas fa-chart-line text-2xl text-blue-600" aria-hidden="true"></i>
                </div>
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Win Percentage Calculator</h2>
                <p class="text-gray-600">Calculate win rates and track performance for sports, gaming, and competitions</p>
            </div>

            <!-- Input Methods -->
            <div class="mb-8">
                <div class="flex flex-wrap justify-center gap-4 mb-6">
                    <button id="simpleMode" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>Simple Mode
                    </button>
                    <button id="detailedMode" class="px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors">
                        <i class="fas fa-list mr-2" aria-hidden="true"></i>Detailed Tracking
                    </button>
                </div>
            </div>

            <!-- Simple Mode -->
            <div id="simpleModePanel" class="space-y-6">
                <div class="grid md:grid-cols-3 gap-6">
                    <div>
                        <label for="totalWins" class="block text-sm font-medium text-gray-700 mb-2">Total Wins</label>
                        <input type="number" id="totalWins" min="0" placeholder="15" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Number of wins</div>
                    </div>

                    <div>
                        <label for="totalLosses" class="block text-sm font-medium text-gray-700 mb-2">Total Losses</label>
                        <input type="number" id="totalLosses" min="0" placeholder="5" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Number of losses</div>
                    </div>

                    <div>
                        <label for="totalTies" class="block text-sm font-medium text-gray-700 mb-2">Total Ties (Optional)</label>
                        <input type="number" id="totalTies" min="0" placeholder="2" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <div class="text-xs text-gray-500 mt-1">Number of ties/draws</div>
                    </div>
                </div>

                <div class="text-center">
                    <button id="calculateSimple" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-calculator mr-2" aria-hidden="true"></i>
                        Calculate Win Percentage
                    </button>
                </div>
            </div>

            <!-- Detailed Mode -->
            <div id="detailedModePanel" class="hidden space-y-6">
                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-lg font-semibold text-blue-800 mb-4">Add Game Results</h3>
                    <div class="grid md:grid-cols-4 gap-4">
                        <div>
                            <label for="gameDate" class="block text-sm font-medium text-gray-700 mb-2">Date</label>
                            <input type="date" id="gameDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="opponent" class="block text-sm font-medium text-gray-700 mb-2">Opponent/Game</label>
                            <input type="text" id="opponent" placeholder="Team B" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="gameResult" class="block text-sm font-medium text-gray-700 mb-2">Result</label>
                            <select id="gameResult" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="win">Win</option>
                                <option value="loss">Loss</option>
                                <option value="tie">Tie/Draw</option>
                            </select>
                        </div>
                        <div class="flex items-end">
                            <button id="addGame" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded-lg transition-colors">
                                <i class="fas fa-plus mr-2" aria-hidden="true"></i>Add
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Games List -->
                <div id="gamesList" class="bg-gray-50 p-6 rounded-lg">
                    <h4 class="text-lg font-semibold text-gray-800 mb-4">Game History</h4>
                    <div id="gamesContainer" class="space-y-2">
                        <div class="text-gray-500 text-center py-4">No games added yet</div>
                    </div>
                </div>

                <div class="text-center">
                    <button id="calculateDetailed" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-8 rounded-lg shadow-lg transform transition hover:scale-105">
                        <i class="fas fa-chart-line mr-2" aria-hidden="true"></i>
                        Analyze Performance
                    </button>
                </div>
            </div>

            <!-- Results Display -->
            <div id="resultsSection" class="hidden fade-in mt-8">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 border-2 border-blue-200 rounded-xl p-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-6 text-center">
                        <i class="fas fa-chart-bar mr-2 text-blue-600" aria-hidden="true"></i>
                        Performance Statistics
                    </h3>
                    
                    <!-- Main Statistics -->
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                        <div id="winPercentCard" class="stat-card win-good p-6 rounded-lg shadow text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2" id="winPercentage">75%</div>
                            <div class="text-sm text-gray-600">Win Percentage</div>
                        </div>
                        <div class="stat-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-green-600 mb-2" id="totalWinsDisplay">15</div>
                            <div class="text-sm text-gray-600">Total Wins</div>
                        </div>
                        <div class="stat-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-red-600 mb-2" id="totalLossesDisplay">5</div>
                            <div class="text-sm text-gray-600">Total Losses</div>
                        </div>
                        <div class="stat-card bg-white p-6 rounded-lg shadow text-center">
                            <div class="text-2xl font-bold text-gray-600 mb-2" id="totalGamesDisplay">20</div>
                            <div class="text-sm text-gray-600">Total Games</div>
                        </div>
                    </div>

                    <!-- Additional Statistics -->
                    <div id="additionalStats" class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
                        <!-- Will be populated by JavaScript -->
                    </div>

                    <!-- Performance Analysis -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-chart-pie mr-2 text-purple-500" aria-hidden="true"></i>
                                Performance Breakdown
                            </h4>
                            <div id="performanceBreakdown" class="space-y-3">
                                <!-- Breakdown will be populated by JS -->
                            </div>
                        </div>

                        <div class="bg-white p-6 rounded-lg shadow">
                            <h4 class="font-semibold text-gray-800 mb-4 flex items-center">
                                <i class="fas fa-lightbulb mr-2 text-yellow-500" aria-hidden="true"></i>
                                Performance Insights
                            </h4>
                            <div id="performanceInsights" class="space-y-3">
                                <!-- Insights will be populated by JS -->
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap gap-3 justify-center">
                        <button id="shareBtn" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-share mr-2" aria-hidden="true"></i>
                            Share Results
                        </button>
                        <button id="exportBtn" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-download mr-2" aria-hidden="true"></i>
                            Export Data
                        </button>
                        <button id="resetBtn" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <i class="fas fa-refresh mr-2" aria-hidden="true"></i>
                            Reset Calculator
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Information Sections -->
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Win Percentage Guide -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-graduation-cap mr-3 text-blue-500" aria-hidden="true"></i>
                    Win Percentage Guide
                </h2>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-green-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Excellent (80%+)</h3>
                        <p class="text-gray-600">Exceptional performance indicating dominance in your field or game.</p>
                    </div>
                    
                    <div class="border-l-4 border-blue-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Good (60-79%)</h3>
                        <p class="text-gray-600">Strong performance showing consistent success and skill development.</p>
                    </div>
                    
                    <div class="border-l-4 border-yellow-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Average (40-59%)</h3>
                        <p class="text-gray-600">Balanced record with room for improvement and strategy refinement.</p>
                    </div>
                    
                    <div class="border-l-4 border-red-500 pl-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Needs Improvement (Below 40%)</h3>
                        <p class="text-gray-600">Focus on skill development, strategy, and learning from losses.</p>
                    </div>
                </div>
            </section>

            <!-- Applications -->
            <section class="bg-white rounded-xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-gamepad mr-3 text-green-500" aria-hidden="true"></i>
                    Common Applications
                </h2>
                
                <div class="space-y-4">
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-football-ball text-orange-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Sports Teams</h3>
                            <p class="text-gray-600 text-sm">Track team performance across seasons, tournaments, and leagues.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-chess text-purple-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Gaming & Esports</h3>
                            <p class="text-gray-600 text-sm">Monitor gaming performance in competitive matches and rankings.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-chart-line text-blue-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Trading & Investing</h3>
                            <p class="text-gray-600 text-sm">Calculate success rates for trading strategies and investment decisions.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-briefcase text-green-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Business & Sales</h3>
                            <p class="text-gray-600 text-sm">Track proposal success rates, deal closures, and performance metrics.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <i class="fas fa-graduation-cap text-indigo-500 mt-1" aria-hidden="true"></i>
                        <div>
                            <h3 class="font-semibold text-gray-800">Academic & Testing</h3>
                            <p class="text-gray-600 text-sm">Monitor test success rates, quiz performance, and learning progress.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- FAQs Section -->
        <section class="bg-white rounded-xl shadow-lg p-8 mt-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-question-circle mr-3 text-purple-600" aria-hidden="true"></i>
                Frequently Asked Questions
            </h2>
            
            <div class="space-y-6">
                <div class="border-l-4 border-blue-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">How do you calculate win percentage?</h3>
                    <p class="text-gray-600">Win Percentage = (Wins / Total Games) × 100. Ties are typically counted as 0.5 wins in the calculation.</p>
                </div>
                
                <div class="border-l-4 border-green-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Should ties count as wins or losses?</h3>
                    <p class="text-gray-600">Ties are usually counted as half a win (0.5) in win percentage calculations. This provides a more accurate representation of performance.</p>
                </div>
                
                <div class="border-l-4 border-orange-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">What's considered a good win percentage?</h3>
                    <p class="text-gray-600">This varies by context, but generally: 80%+ is excellent, 60-80% is good, 40-60% is average, and below 40% needs improvement.</p>
                </div>
                
                <div class="border-l-4 border-purple-500 pl-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Can I track multiple teams or players?</h3>
                    <p class="text-gray-600">Use the detailed mode to track individual games and export data. You can maintain separate calculations for different teams or players.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <!-- JavaScript -->
    <script>
        class WinPercentageCalculator {
            constructor() {
                this.games = [];
                this.currentMode = 'simple';
                this.init();
            }

            init() {
                this.bindEvents();
                this.setToday();
            }

            bindEvents() {
                document.getElementById('simpleMode').addEventListener('click', () => this.switchMode('simple'));
                document.getElementById('detailedMode').addEventListener('click', () => this.switchMode('detailed'));
                document.getElementById('calculateSimple').addEventListener('click', () => this.calculateSimple());
                document.getElementById('calculateDetailed').addEventListener('click', () => this.calculateDetailed());
                document.getElementById('addGame').addEventListener('click', () => this.addGame());
                document.getElementById('shareBtn')?.addEventListener('click', () => this.shareResults());
                document.getElementById('exportBtn')?.addEventListener('click', () => this.exportData());
                document.getElementById('resetBtn')?.addEventListener('click', () => this.resetCalculator());
            }

            setToday() {
                const today = new Date().toISOString().split('T')[0];
                document.getElementById('gameDate').value = today;
            }

            switchMode(mode) {
                this.currentMode = mode;
                
                // Update button styles
                document.getElementById('simpleMode').className = mode === 'simple' 
                    ? 'px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors'
                    : 'px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors';
                    
                document.getElementById('detailedMode').className = mode === 'detailed'
                    ? 'px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors'
                    : 'px-6 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition-colors';

                // Show/hide panels
                if (mode === 'simple') {
                    document.getElementById('simpleModePanel').classList.remove('hidden');
                    document.getElementById('detailedModePanel').classList.add('hidden');
                } else {
                    document.getElementById('simpleModePanel').classList.add('hidden');
                    document.getElementById('detailedModePanel').classList.remove('hidden');
                }
            }

            calculateSimple() {
                const wins = parseInt(document.getElementById('totalWins').value) || 0;
                const losses = parseInt(document.getElementById('totalLosses').value) || 0;
                const ties = parseInt(document.getElementById('totalTies').value) || 0;

                if (wins + losses + ties === 0) {
                    alert('Please enter at least one game result');
                    return;
                }

                const results = this.calculateStats(wins, losses, ties);
                this.displayResults(results);
            }

            calculateDetailed() {
                if (this.games.length === 0) {
                    alert('Please add some games first');
                    return;
                }

                const wins = this.games.filter(game => game.result === 'win').length;
                const losses = this.games.filter(game => game.result === 'loss').length;
                const ties = this.games.filter(game => game.result === 'tie').length;

                const results = this.calculateStats(wins, losses, ties);
                results.streakData = this.calculateStreaks();
                results.recentForm = this.calculateRecentForm();
                
                this.displayResults(results, true);
            }

            calculateStats(wins, losses, ties) {
                const totalGames = wins + losses + ties;
                const winPercentage = totalGames > 0 ? ((wins + (ties * 0.5)) / totalGames * 100) : 0;
                const lossPercentage = totalGames > 0 ? (losses / totalGames * 100) : 0;
                const tiePercentage = totalGames > 0 ? (ties / totalGames * 100) : 0;

                return {
                    wins,
                    losses,
                    ties,
                    totalGames,
                    winPercentage: Math.round(winPercentage * 100) / 100,
                    lossPercentage: Math.round(lossPercentage * 100) / 100,
                    tiePercentage: Math.round(tiePercentage * 100) / 100
                };
            }

            calculateStreaks() {
                if (this.games.length === 0) return null;

                const sortedGames = [...this.games].sort((a, b) => new Date(b.date) - new Date(a.date));
                
                let currentStreak = 0;
                let currentStreakType = null;
                let longestWinStreak = 0;
                let longestLossStreak = 0;

                // Calculate current streak
                for (let i = 0; i < sortedGames.length; i++) {
                    const game = sortedGames[i];
                    if (i === 0) {
                        currentStreakType = game.result;
                        currentStreak = 1;
                    } else if (game.result === currentStreakType) {
                        currentStreak++;
                    } else {
                        break;
                    }
                }

                // Calculate longest streaks
                let tempStreak = 0;
                let tempType = null;
                
                for (const game of this.games) {
                    if (game.result === tempType) {
                        tempStreak++;
                    } else {
                        if (tempType === 'win' && tempStreak > longestWinStreak) {
                            longestWinStreak = tempStreak;
                        }
                        if (tempType === 'loss' && tempStreak > longestLossStreak) {
                            longestLossStreak = tempStreak;
                        }
                        tempType = game.result;
                        tempStreak = 1;
                    }
                }

                // Check final streak
                if (tempType === 'win' && tempStreak > longestWinStreak) {
                    longestWinStreak = tempStreak;
                }
                if (tempType === 'loss' && tempStreak > longestLossStreak) {
                    longestLossStreak = tempStreak;
                }

                return {
                    currentStreak,
                    currentStreakType,
                    longestWinStreak,
                    longestLossStreak
                };
            }

            calculateRecentForm() {
                if (this.games.length === 0) return null;

                const recent = [...this.games]
                    .sort((a, b) => new Date(b.date) - new Date(a.date))
                    .slice(0, Math.min(10, this.games.length));

                const recentWins = recent.filter(game => game.result === 'win').length;
                const recentPercentage = (recentWins / recent.length * 100).toFixed(1);

                return {
                    games: recent.length,
                    wins: recentWins,
                    percentage: recentPercentage,
                    form: recent.slice(0, 5).map(game => game.result.charAt(0).toUpperCase()).join(' ')
                };
            }

            addGame() {
                const date = document.getElementById('gameDate').value;
                const opponent = document.getElementById('opponent').value.trim();
                const result = document.getElementById('gameResult').value;

                if (!date || !opponent) {
                    alert('Please fill in all fields');
                    return;
                }

                const game = {
                    id: Date.now(),
                    date,
                    opponent,
                    result
                };

                this.games.unshift(game);
                this.updateGamesList();
                
                // Clear form
                document.getElementById('opponent').value = '';
                this.setToday();
            }

            updateGamesList() {
                const container = document.getElementById('gamesContainer');
                
                if (this.games.length === 0) {
                    container.innerHTML = '<div class="text-gray-500 text-center py-4">No games added yet</div>';
                    return;
                }

                const gamesHtml = this.games.map(game => {
                    const resultClass = game.result === 'win' ? 'text-green-600 bg-green-100' :
                                       game.result === 'loss' ? 'text-red-600 bg-red-100' : 
                                       'text-yellow-600 bg-yellow-100';
                    
                    const resultIcon = game.result === 'win' ? 'fas fa-check-circle' :
                                      game.result === 'loss' ? 'fas fa-times-circle' : 
                                      'fas fa-minus-circle';

                    return `
                        <div class="game-entry flex items-center justify-between p-3 bg-white rounded-lg border">
                            <div class="flex items-center space-x-4">
                                <div class="${resultClass} px-3 py-1 rounded-full text-sm font-medium">
                                    <i class="${resultIcon} mr-1" aria-hidden="true"></i>
                                    ${game.result.toUpperCase()}
                                </div>
                                <div>
                                    <div class="font-medium">${game.opponent}</div>
                                    <div class="text-sm text-gray-500">${new Date(game.date).toLocaleDateString()}</div>
                                </div>
                            </div>
                            <button onclick="winCalc.removeGame(${game.id})" class="text-red-500 hover:text-red-700 p-2">
                                <i class="fas fa-trash" aria-hidden="true"></i>
                            </button>
                        </div>
                    `;
                }).join('');

                container.innerHTML = gamesHtml;
            }

            removeGame(gameId) {
                this.games = this.games.filter(game => game.id !== gameId);
                this.updateGamesList();
            }

            displayResults(results, detailed = false) {
                const resultsSection = document.getElementById('resultsSection');
                resultsSection.classList.remove('hidden');

                // Update main statistics
                document.getElementById('winPercentage').textContent = results.winPercentage.toFixed(1) + '%';
                document.getElementById('totalWinsDisplay').textContent = results.wins;
                document.getElementById('totalLossesDisplay').textContent = results.losses;
                document.getElementById('totalGamesDisplay').textContent = results.totalGames;

                // Update win percentage card style
                const winPercentCard = document.getElementById('winPercentCard');
                winPercentCard.className = 'stat-card p-6 rounded-lg shadow text-center ' + this.getPerformanceClass(results.winPercentage);

                // Update additional stats
                this.updateAdditionalStats(results, detailed);
                this.updatePerformanceBreakdown(results);
                this.updatePerformanceInsights(results, detailed);

                // Scroll to results
                resultsSection.scrollIntoView({ behavior: 'smooth' });
            }

            getPerformanceClass(percentage) {
                if (percentage >= 80) return 'win-excellent';
                if (percentage >= 60) return 'win-good';
                if (percentage >= 40) return 'win-average';
                return 'win-poor';
            }

            updateAdditionalStats(results, detailed) {
                let statsHtml = `
                    <div class="stat-card bg-white p-4 rounded-lg shadow text-center">
                        <div class="text-xl font-bold text-yellow-600 mb-1">${results.ties}</div>
                        <div class="text-xs text-gray-600">Ties</div>
                    </div>
                    <div class="stat-card bg-white p-4 rounded-lg shadow text-center">
                        <div class="text-xl font-bold text-red-600 mb-1">${results.lossPercentage.toFixed(1)}%</div>
                        <div class="text-xs text-gray-600">Loss Rate</div>
                    </div>
                `;

                if (detailed && results.streakData) {
                    const streakClass = results.streakData.currentStreakType === 'win' ? 'win-streak' : 
                                       results.streakData.currentStreakType === 'loss' ? 'loss-streak' : '';
                    
                    statsHtml += `
                        <div class="stat-card bg-white p-4 rounded-lg shadow text-center">
                            <div class="streak-indicator ${streakClass}">${results.streakData.currentStreak} ${results.streakData.currentStreakType?.toUpperCase()}</div>
                            <div class="text-xs text-gray-600 mt-1">Current Streak</div>
                        </div>
                    `;
                }

                document.getElementById('additionalStats').innerHTML = statsHtml;
            }

            updatePerformanceBreakdown(results) {
                const breakdownHtml = `
                    <div class="flex justify-between py-2 border-b">
                        <span>Win Rate:</span>
                        <span class="font-medium text-green-600">${results.winPercentage.toFixed(1)}%</span>
                    </div>
                    <div class="flex justify-between py-2 border-b">
                        <span>Loss Rate:</span>
                        <span class="font-medium text-red-600">${results.lossPercentage.toFixed(1)}%</span>
                    </div>
                    ${results.ties > 0 ? `
                        <div class="flex justify-between py-2 border-b">
                            <span>Tie Rate:</span>
                            <span class="font-medium text-yellow-600">${results.tiePercentage.toFixed(1)}%</span>
                        </div>
                    ` : ''}
                    <div class="flex justify-between py-2 border-b">
                        <span>Games Played:</span>
                        <span class="font-medium">${results.totalGames}</span>
                    </div>
                    <div class="flex justify-between py-2 border-t-2 border-gray-300 font-semibold">
                        <span>Performance Grade:</span>
                        <span class="text-blue-600">${this.getPerformanceGrade(results.winPercentage)}</span>
                    </div>
                `;

                document.getElementById('performanceBreakdown').innerHTML = breakdownHtml;
            }

            getPerformanceGrade(percentage) {
                if (percentage >= 90) return 'A+';
                if (percentage >= 80) return 'A';
                if (percentage >= 70) return 'B+';
                if (percentage >= 60) return 'B';
                if (percentage >= 50) return 'C+';
                if (percentage >= 40) return 'C';
                if (percentage >= 30) return 'D';
                return 'F';
            }

            updatePerformanceInsights(results, detailed) {
                const insights = [];

                if (results.winPercentage >= 80) {
                    insights.push({
                        type: 'success',
                        icon: 'fas fa-trophy',
                        text: 'Excellent performance! You\'re dominating in this area.'
                    });
                } else if (results.winPercentage >= 60) {
                    insights.push({
                        type: 'info',
                        icon: 'fas fa-thumbs-up',
                        text: 'Good performance with consistent success.'
                    });
                } else if (results.winPercentage >= 40) {
                    insights.push({
                        type: 'warning',
                        icon: 'fas fa-balance-scale',
                        text: 'Average performance with room for improvement.'
                    });
                } else {
                    insights.push({
                        type: 'error',
                        icon: 'fas fa-chart-line',
                        text: 'Focus on improvement strategies and learning from losses.'
                    });
                }

                if (detailed && results.streakData) {
                    if (results.streakData.currentStreakType === 'win' && results.streakData.currentStreak >= 3) {
                        insights.push({
                            type: 'success',
                            icon: 'fas fa-fire',
                            text: `You're on fire! ${results.streakData.currentStreak} wins in a row!`
                        });
                    }
                    
                    if (results.streakData.longestWinStreak >= 5) {
                        insights.push({
                            type: 'info',
                            icon: 'fas fa-medal',
                            text: `Your longest win streak: ${results.streakData.longestWinStreak} games!`
                        });
                    }
                }

                if (results.totalGames >= 10) {
                    insights.push({
                        type: 'info',
                        icon: 'fas fa-chart-bar',
                        text: 'Good sample size for reliable statistics.'
                    });
                } else {
                    insights.push({
                        type: 'warning',
                        icon: 'fas fa-info-circle',
                        text: 'Play more games for more reliable win percentage.'
                    });
                }

                const insightsHtml = insights.map(insight => {
                    const colorClass = insight.type === 'error' ? 'text-red-600' : 
                                     insight.type === 'warning' ? 'text-orange-600' : 
                                     insight.type === 'success' ? 'text-green-600' : 'text-blue-600';
                    
                    return `
                        <div class="flex items-start space-x-3">
                            <i class="${insight.icon} ${colorClass} mt-1" aria-hidden="true"></i>
                            <p class="text-sm text-gray-700">${insight.text}</p>
                        </div>
                    `;
                }).join('');

                document.getElementById('performanceInsights').innerHTML = insightsHtml;
            }

            shareResults() {
                const winPercentage = document.getElementById('winPercentage').textContent;
                const totalGames = document.getElementById('totalGamesDisplay').textContent;
                const shareText = `My win percentage: ${winPercentage} over ${totalGames} games! Calculate yours: ${window.location.href}`;

                if (navigator.share) {
                    navigator.share({
                        title: 'My Win Percentage',
                        text: shareText
                    });
                } else {
                    navigator.clipboard.writeText(shareText).then(() => {
                        alert('Results copied to clipboard!');
                    });
                }
            }

            exportData() {
                const data = {
                    wins: parseInt(document.getElementById('totalWinsDisplay').textContent),
                    losses: parseInt(document.getElementById('totalLossesDisplay').textContent),
                    winPercentage: document.getElementById('winPercentage').textContent,
                    games: this.games,
                    exportDate: new Date().toISOString()
                };
                
                const blob = new Blob([JSON.stringify(data, null, 2)], { type: 'application/json' });
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'win_percentage_data.json';
                a.click();
                URL.revokeObjectURL(url);
            }

            resetCalculator() {
                // Reset simple mode inputs
                document.getElementById('totalWins').value = '';
                document.getElementById('totalLosses').value = '';
                document.getElementById('totalTies').value = '';
                
                // Reset detailed mode
                this.games = [];
                this.updateGamesList();
                document.getElementById('opponent').value = '';
                this.setToday();
                
                // Hide results
                document.getElementById('resultsSection').classList.add('hidden');
            }
        }

        // Initialize calculator when page loads
        let winCalc;
        document.addEventListener('DOMContentLoaded', () => {
            winCalc = new WinPercentageCalculator();
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