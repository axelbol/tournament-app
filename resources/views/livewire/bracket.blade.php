<div class="container mx-auto p-4">
    <h2 class="text-blue-400 uppercase tracking-wide text-xl font-semibold mb-6">UEFA Euro 2024 Tournament Bracket</h2>
    <!-- Tournament Title -->
    <div class="flex flex-col items-center gap-6 mb-8 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">UEFA Euro 2024</h1>
    </div>
    <!-- Desktop Layout -->
    <div class="hidden md:flex justify-center items-center gap-16">
        <!-- Left Side - Final 16 -->
        <div class="flex flex-col gap-20">
            <!-- Match 1: Al Ahly vs Al Ain -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Horizontal connecting line -->
                <div class="absolute top-1/2 -right-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        {{-- Logo --}}
                        <button wire:click="selectWinner('match1', 'Al Ahly')" class="w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-yellow-400 transition duration-200 {{ $this->getTeamClass('match1', 'Al Ahly') }}">
                            <img src="{{ asset('img/logos/al_ahly.png') }}" alt="Logo">
                        </button>
                        <span class="text-gray-800 font-extrabold text-sm">AL AHLY</span>
                    </div>
                    {{-- <span class="text-gray-500 font-bold text-lg">4</span> --}}
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        {{-- Logo --}}
                        <button wire:click="selectWinner('match1', 'Al Ain')" class="w-8 h-8 bg-white rounded-full flex items-center justify-center hover:bg-yellow-400 transition duration-200 {{ $this->getTeamClass('match1', 'Al Ain') }}">
                            <img src="{{ asset('img/logos/al_ain.png') }}" alt="Logo">
                        </button>
                        <span class="text-gray-800 font-extrabold text-sm">AL AIN</span>
                    </div>
                    {{-- <span class="text-gray-500 font-bold text-lg">1</span> --}}
                </div>
            </div>

            <!-- Match 2: Al Hilal vs Atletico Madrid -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Horizontal connecting line -->
                <div class="absolute top-1/2 -right-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/al_hilal.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">AL HILAL</span>
                    </div>
                    {{-- <span class="text-gray-500 font-bold text-lg">2</span> --}}
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/atlmadrid.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">ATLETICO</span>
                    </div>
                    {{-- <span class="text-gray-500 font-bold text-lg">0</span> --}}
                </div>
            </div>

            <!-- Match 3: Auckland vs Bayer Munchen -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Horizontal connecting line -->
                <div class="absolute top-1/2 -right-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/auckland_city.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-500 font-extrabold text-sm">AUCKLAND</span>
                    </div>
                    {{-- <span class="text-gray-500 font-bold text-lg">0</span> --}}
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/bayernmunchen.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-500 font-bold text-sm">BAYERN</span>
                    </div>
                    {{-- <span class="text-gray-500 font-bold text-lg">0</span> --}}
                </div>
            </div>

            <!-- Match 4: Benfica vs Borussia Dortmund -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Horizontal connecting line -->
                <div class="absolute top-1/2 -right-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/benfica.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">BENFICA</span>
                    </div>
                    {{-- <span class="text-gray-500 font-bold text-lg">1</span> --}}
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/borussiadortmund.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">BORUSSIA</span>
                    </div>
                    {{-- <span class="text-gray-500 font-bold text-lg">0</span> --}}
                </div>
            </div>
        </div>

        <!-- Quarter Finals Left -->
        <div class="flex flex-col gap-64">
            <!-- Quarter final 1: Winner match 1 vs Winner match 2 -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Vertical connecting line and horizontal line -->
                <div class="absolute -left-7 top-12 w-0.5 h-44 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute top-1/2 -left-7 w-6 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute top-1/2 -right-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-5">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
            </div>

            <!-- Quarter final 2: Winner match 3 vs Winner match 4 -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Vertical connecting line and horizontal line -->
                <div class="absolute -left-7 top-14 w-0.5 h-44 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute top-1/2 -left-7 w-6 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute top-1/2 -right-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
            </div>
        </div>

        <!-- Semi Finals Left -->
        <div class="flex flex-col">
            <!-- Semi Final 1: Winner Quarter final 1 vs Winner Quarter final 2 -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Vertical connecting line and horizontal line -->
                <div class="absolute -left-7 top-1/2 w-0.5 h-90 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute -left-7 top-1/2 w-7 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-5">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
            </div>
        </div>

        <!-- Final -->
        <div class="flex flex-col items-center gap-4">
            <!-- Trophy -->
            <div class="text-6xl">🏆</div>

            <!-- Final Match: Winner Semi final 1 vs Winner Semi final 2 -->
            <div class="bg-white border-2 border-yellow-400 rounded-lg p-6 shadow-lg min-w-56 relative">
                <div class="absolute -left-16 top-2/5 w-16 h-0.5 bg-yellow-400 transform -translate-y-1/2"></div>
                <div class="absolute -right-16 top-2/5 w-16 h-0.5 bg-yellow-400 transform -translate-y-1/2"></div>

                <div class="text-center mb-4">
                    <div class="w-12 h-12 bg-white rounded-full mx-auto mb-2 flex items-center justify-center">
                        <img src="{{ asset('img/logos/Universitario de Deportes.png') }}" alt="Logo">
                    </div>
                    <div class="text-lg font-bold text-gray-800 uppercase"></div>
                    <div class="text-sm text-gray-600 uppercase">CAMPEÓN</div>
                </div>

                <div class="flex items-center justify-between hover:bg-yellow-500 rounded-md p-3">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/Universitario de Deportes.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>

                <div class="flex items-center justify-between hover:bg-yellow-500 rounded-md p-3">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/Universitario de Deportes.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>

                <div class="text-center mt-3">
                    <span class="bg-yellow-500 text-white px-3 py-1 rounded text-xs font-extrabold">FINAL</span>
                </div>
            </div>
        </div>

        <!-- Semi Finals Right -->
        <div class="flex flex-col">
            <!-- Semi Final 2: Winner Quarter final 3 vs Winner Quarter final 4 -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Vertical connecting line and horizontal line -->
                <div class="absolute -right-7 top-1/2 w-0.5 h-90 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute -right-7 top-1/2 w-7 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/Universitario de Deportes.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/Universitario de Deportes.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
            </div>
        </div>

        <!-- Quarter Finals Right -->
        <div class="flex flex-col gap-64">
            <!-- Quarter final 3: Winner match 5 vs Winner match 6 -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Vertical connecting line and horizontal line -->
                <div class="absolute -right-7 top-12 w-0.5 h-44 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute top-1/2 -right-7 w-6 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute top-1/2 -left-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
            </div>

            <!-- Quarter final 4: Winner match 7 vs Winner match 8 -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Vertical connecting line and horizontal line -->
                <div class="absolute -right-7 top-14 w-0.5 h-44 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute top-1/2 -right-7 w-6 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>
                <div class="absolute top-1/2 -left-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm"></span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg"></span>
                </div>
            </div>
        </div>

        <!-- Right Side - Final 16 -->
        <div class="flex flex-col gap-20">
            <!-- Match 5: Botafogo vs Chelsea -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Horizontal connecting line -->
                <div class="absolute top-1/2 -left-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/botafogo.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">BOTAFOGO</span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg">0</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/chelsea.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">CHELSEA</span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg">3</span>
                </div>
            </div>

            <!-- Match 6: Esperance vs Flamengo -->
            <div class="bg-white border border-green-400 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Horizontal connecting line -->
                <div class="absolute top-1/2 -left-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/esperance_sp_tunis.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">ESPERANCE</span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg">1</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/flamengo.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">FLAMENGO</span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg">2</span>
                </div>
            </div>

            <!-- Match 7: Fluminense vs Inter -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Horizontal connecting line -->
                <div class="absolute top-1/2 -left-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/fluminense.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">FLUMINENSE</span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg">2</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/inter.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">INTER</span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg">1</span>
                </div>
            </div>

            <!-- Match 8: Juventus vs River -->
            <div class="bg-white border border-green-500 rounded-lg p-4 shadow-sm min-w-48 relative">
                <!-- Horizontal connecting line -->
                <div class="absolute top-1/2 -left-10 w-10 h-0.5 bg-gray-300 transform -translate-y-1/2"></div>

                <div class="flex items-center justify-between mb-2">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/juventus.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">JUVENTUS</span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg">2</span>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-6">
                        <div class="w-8 h-8 bg-white rounded-full flex items-center justify-center">
                            <img src="{{ asset('img/logos/river.png') }}" alt="Logo">
                        </div>
                        <span class="text-gray-800 font-extrabold text-sm">RIVER PLATE</span>
                    </div>
                    <span class="text-gray-500 font-bold text-lg">0</span>
                </div>
            </div>
        </div>
    </div>
</div>
