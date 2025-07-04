<div class="min-h-screen bg-gray-900 text-white p-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold mb-4">Tournament Bracket</h1>
            <button wire:click="resetBracket" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded font-semibold">
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

        <div class="bracket-container overflow-x-auto">
            <div class="flex justify-center space-x-12 min-w-max">

                <!-- Round of 16 -->
                <div class="flex flex-col justify-center space-y-6">
                    <h3 class="text-lg font-semibold text-center mb-4">Round of 16</h3>
                    @foreach($rounds['round16'] as $index => $match)
                        <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                            <div class="space-y-2">
                                <!-- Team 1 -->
                                <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                    {{ $match['winner'] == $match['team1'] ? 'bg-green-600' : 'bg-gray-700 hover:bg-gray-600' }}"
                                    wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team1'] }}, 'round16')">
                                    <span class="font-semibold">{{ $this->getTeamById($match['team1'])['code'] }}</span>
                                    @if($match['winner'] == $match['team1'])
                                        <span class="text-green-300">✓</span>
                                    @endif
                                </div>

                                <!-- Team 2 -->
                                <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                    {{ $match['winner'] == $match['team2'] ? 'bg-green-600' : 'bg-gray-700 hover:bg-gray-600' }}"
                                    wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team2'] }}, 'round16')">
                                    <span class="font-semibold">{{ $this->getTeamById($match['team2'])['code'] }}</span>
                                    @if($match['winner'] == $match['team2'])
                                        <span class="text-green-300">✓</span>
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
                        <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                            @if($match['team1'] && $match['team2'])
                                <div class="space-y-2">
                                    <!-- Team 1 -->
                                    <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                        {{ $match['winner'] == $match['team1'] ? 'bg-green-600' : 'bg-gray-700 hover:bg-gray-600' }}"
                                        wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team1'] }}, 'quarter')">
                                        <span class="font-semibold">{{ $this->getTeamById($match['team1'])['code'] }}</span>
                                        @if($match['winner'] == $match['team1'])
                                            <span class="text-green-300">✓</span>
                                        @endif
                                    </div>

                                    <!-- Team 2 -->
                                    <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                        {{ $match['winner'] == $match['team2'] ? 'bg-green-600' : 'bg-gray-700 hover:bg-gray-600' }}"
                                        wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team2'] }}, 'quarter')">
                                        <span class="font-semibold">{{ $this->getTeamById($match['team2'])['code'] }}</span>
                                        @if($match['winner'] == $match['team2'])
                                            <span class="text-green-300">✓</span>
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
                        <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                            @if($match['team1'] && $match['team2'])
                                <div class="space-y-2">
                                    <!-- Team 1 -->
                                    <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                        {{ $match['winner'] == $match['team1'] ? 'bg-green-600' : 'bg-gray-700 hover:bg-gray-600' }}"
                                        wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team1'] }}, 'semi')">
                                        <span class="font-semibold">{{ $this->getTeamById($match['team1'])['code'] }}</span>
                                        @if($match['winner'] == $match['team1'])
                                            <span class="text-green-300">✓</span>
                                        @endif
                                    </div>

                                    <!-- Team 2 -->
                                    <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                        {{ $match['winner'] == $match['team2'] ? 'bg-green-600' : 'bg-gray-700 hover:bg-gray-600' }}"
                                        wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team2'] }}, 'semi')">
                                        <span class="font-semibold">{{ $this->getTeamById($match['team2'])['code'] }}</span>
                                        @if($match['winner'] == $match['team2'])
                                            <span class="text-green-300">✓</span>
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
                        <div class="bg-yellow-900 rounded-lg p-4 border border-yellow-600">
                            @if($match['team1'] && $match['team2'])
                                <div class="space-y-2">
                                    <!-- Team 1 -->
                                    <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                        {{ $match['winner'] == $match['team1'] ? 'bg-yellow-600 text-black' : 'bg-gray-700 hover:bg-gray-600' }}"
                                        wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team1'] }}, 'final')">
                                        <span class="font-semibold">{{ $this->getTeamById($match['team1'])['code'] }}</span>
                                        @if($match['winner'] == $match['team1'])
                                            <span class="text-yellow-900">🏆</span>
                                        @endif
                                    </div>

                                    <!-- Team 2 -->
                                    <div class="flex items-center justify-between p-2 rounded cursor-pointer transition-colors
                                        {{ $match['winner'] == $match['team2'] ? 'bg-yellow-600 text-black' : 'bg-gray-700 hover:bg-gray-600' }}"
                                        wire:click="selectWinner({{ $match['match_id'] }}, {{ $match['team2'] }}, 'final')">
                                        <span class="font-semibold">{{ $this->getTeamById($match['team2'])['code'] }}</span>
                                        @if($match['winner'] == $match['team2'])
                                            <span class="text-yellow-900">🏆</span>
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
