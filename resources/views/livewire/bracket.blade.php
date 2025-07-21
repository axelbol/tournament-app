<div>
    <div class="min-h-screen bg-gray-900 text-white p-8" wire:loading.class="opacity-50" wire:target="selectWinner">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold mb-4">Tournament Bracket</h1>
                <button wire:click="resetBracket" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded font-semibold transition-colors">
                    Reset Bracket
                </button>
            </div>

            @if($winner)
                <div class="text-center mb-8">
                    <div class="bg-yellow-600 text-black px-8 py-4 rounded-lg inline-block">
                        <h2 class="text-2xl font-bold">🏆 CHAMPION</h2>
                        <p class="text-xl">{{ $this->getTeamById($winner)['name'] }}</p>
                    </div>
                </div>
            @endif

            <!-- Loading indicator -->
            <div wire:loading wire:target="selectWinner" class="fixed top-4 right-4 bg-blue-600 text-white px-4 py-2 rounded-lg shadow-lg z-50">
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin"></div>
                    <span>Updating bracket...</span>
                </div>
            </div>

            <div class="bracket-container overflow-x-auto">
                <div class="flex justify-center space-x-12 min-w-max">

                    <!-- Round of 16 -->
                    <div class="flex flex-col justify-center space-y-6">
                        <h3 class="text-lg font-semibold text-center mb-4">Round of 16</h3>
                        @foreach($rounds['round16'] as $index => $match)
                            <div class="bg-gray-800 rounded-lg p-4 border border-gray-700 transition-all duration-200 hover:border-gray-600">
                                <div class="space-y-2">
                                    <!-- Team 1 -->
                                    <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-all duration-150 transform hover:scale-105
                                        {{ $match['winner'] == $match['team1'] ? 'bg-green-600 shadow-lg' : 'bg-gray-700 hover:bg-gray-600' }}"
                                        wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team1'] }}, 'round16')" wire:loading.attr="disabled"
                                        wire:loading.class="opacity-50 cursor-not-allowed"
                                        wire:target="selectWinner">
                                        <span class="font-semibold">{{ $this->getTeamById($match['team1'])['code'] }}</span>
                                        @if($match['winner'] == $match['team1'])
                                            <span class="text-green-300 animate-bounce">✓</span>
                                        @endif
                                    </div>

                                    <!-- Team 2 -->
                                    <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-all duration-150 transform hover:scale-105
                                        {{ $match['winner'] == $match['team2'] ? 'bg-green-600 shadow-lg' : 'bg-gray-700 hover:bg-gray-600' }}"
                                        wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team2'] }}, 'round16')" wire:loading.attr="disabled"
                                        wire:loading.class="opacity-50 cursor-not-allowed"
                                        wire:target="selectWinner">
                                        <span class="font-semibold">{{ $this->getTeamById($match['team2'])['code'] }}</span>
                                        @if($match['winner'] == $match['team2'])
                                            <span class="text-green-300 animate-bounce">✓</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Quarter Finals -->
                    <div class="flex flex-col justify-center space-y-12">
                        <h3 class="text-lg font-semibold text-center mb-4">Quarter Finals</h3>
                        @foreach($rounds['quarter'] as $index => $match)
                            <div class="bg-gray-800 rounded-lg p-4 border border-gray-700 transition-all duration-200 hover:border-gray-600">
                                @if($match['team1'] && $match['team2'])
                                    <div class="space-y-2">
                                        <!-- Team 1 -->
                                        <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-all duration-150 transform hover:scale-105
                                            {{ $match['winner'] == $match['team1'] ? 'bg-green-600 shadow-lg' : 'bg-gray-700 hover:bg-gray-600' }}"
                                            wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team1'] }}, 'quarter')" wire:loading.attr="disabled"
                                            wire:loading.class="opacity-50 cursor-not-allowed"
                                            wire:target="selectWinner">
                                            <span class="font-semibold">{{ $this->getTeamById($match['team1'])['code'] }}</span>
                                            @if($match['winner'] == $match['team1'])
                                                <span class="text-green-300 animate-bounce">✓</span>
                                            @endif
                                        </div>

                                        <!-- Team 2 -->
                                        <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-all duration-150 transform hover:scale-105
                                            {{ $match['winner'] == $match['team2'] ? 'bg-green-600 shadow-lg' : 'bg-gray-700 hover:bg-gray-600' }}"
                                            wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team2'] }}, 'quarter')" wire:loading.attr="disabled"
                                            wire:loading.class="opacity-50 cursor-not-allowed"
                                            wire:target="selectWinner">
                                            <span class="font-semibold">{{ $this->getTeamById($match['team2'])['code'] }}</span>
                                            @if($match['winner'] == $match['team2'])
                                                <span class="text-green-300 animate-bounce">✓</span>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="text-gray-500 text-center py-4">
                                        <p>Waiting for teams...</p>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Semi Finals -->
                    <div class="flex flex-col justify-center space-y-20">
                        <h3 class="text-lg font-semibold text-center mb-4">Semi Finals</h3>
                        @foreach($rounds['semi'] as $index => $match)
                            <div class="bg-gray-800 rounded-lg p-4 border border-gray-700 transition-all duration-200 hover:border-gray-600">
                                @if($match['team1'] && $match['team2'])
                                    <div class="space-y-2">
                                        <!-- Team 1 -->
                                        <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-all duration-150 transform hover:scale-105
                                            {{ $match['winner'] == $match['team1'] ? 'bg-green-600 shadow-lg' : 'bg-gray-700 hover:bg-gray-600' }}"
                                            wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team1'] }}, 'semi')" wire:loading.attr="disabled"
                                            wire:loading.class="opacity-50 cursor-not-allowed"
                                            wire:target="selectWinner">
                                            <span class="font-semibold">{{ $this->getTeamById($match['team1'])['code'] }}</span>
                                            @if($match['winner'] == $match['team1'])
                                                <span class="text-green-300 animate-bounce">✓</span>
                                            @endif
                                        </div>

                                        <!-- Team 2 -->
                                        <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-all duration-150 transform hover:scale-105
                                            {{ $match['winner'] == $match['team2'] ? 'bg-green-600 shadow-lg' : 'bg-gray-700 hover:bg-gray-600' }}"
                                            wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team2'] }}, 'semi')" wire:loading.attr="disabled"
                                            wire:loading.class="opacity-50 cursor-not-allowed"
                                            wire:target="selectWinner">
                                            <span class="font-semibold">{{ $this->getTeamById($match['team2'])['code'] }}</span>
                                            @if($match['winner'] == $match['team2'])
                                                <span class="text-green-300 animate-bounce">✓</span>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="text-gray-500 text-center py-4">
                                        <p>Waiting for teams...</p>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <!-- Final -->
                    <div class="flex flex-col justify-center">
                        <h3 class="text-lg font-semibold text-center mb-4">Final</h3>
                        @foreach($rounds['final'] as $index => $match)
                            <div class="bg-yellow-900 rounded-lg p-4 border border-yellow-600 transition-all duration-200 hover:border-yellow-500">
                                @if($match['team1'] && $match['team2'])
                                    <div class="space-y-2">
                                        <!-- Team 1 -->
                                        <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-all duration-150 transform hover:scale-105
                                            {{ $match['winner'] == $match['team1'] ? 'bg-yellow-600 text-black shadow-lg' : 'bg-gray-700 hover:bg-gray-600' }}"
                                            wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team1'] }}, 'final')" wire:loading.attr="disabled"
                                            wire:loading.class="opacity-50 cursor-not-allowed"
                                            wire:target="selectWinner">
                                            <span class="font-semibold">{{ $this->getTeamById($match['team1'])['code'] }}</span>
                                            @if($match['winner'] == $match['team1'])
                                                <span class="text-yellow-900 animate-bounce">🏆</span>
                                            @endif
                                        </div>

                                        <!-- Team 2 -->
                                        <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-all duration-150 transform hover:scale-105
                                            {{ $match['winner'] == $match['team2'] ? 'bg-yellow-600 text-black shadow-lg' : 'bg-gray-700 hover:bg-gray-600' }}"
                                            wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team2'] }}, 'final')" wire:loading.attr="disabled"
                                            wire:loading.class="opacity-50 cursor-not-allowed"
                                            wire:target="selectWinner">
                                            <span class="font-semibold">{{ $this->getTeamById($match['team2'])['code'] }}</span>
                                            @if($match['winner'] == $match['team2'])
                                                <span class="text-yellow-900 animate-bounce">🏆</span>
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="text-gray-500 text-center py-4">
                                        <p>Waiting for teams...</p>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    /* Custom animations for better visual feedback */
    @keyframes winner-glow {
        0%, 100% {
            box-shadow: 0 0 5px rgba(34, 197, 94, 0.5);
        }
        50% {
            box-shadow: 0 0 20px rgba(34, 197, 94, 0.8);
        }
    }
    .bg-green-600 {
        animation: winner-glow 1s ease-in-out;
    }
    </style>
</div>
