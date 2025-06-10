<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Bracket</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 p-4">
    <!-- Header -->
    <header class="w-full flex items-center justify-between py-4 px-2 md:px-6 bg-white shadow-sm rounded-lg mb-8">
        <!-- Left: Logo + Botones -->
        <div class="flex items-center gap-4">
            <!-- Logo SVG Futbol -->
            <div class="w-10 h-10 flex items-center justify-center">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-10 h-10">
                    <circle cx="24" cy="24" r="22" fill="#22c55e" stroke="#166534" stroke-width="2"/>
                    <circle cx="24" cy="24" r="14" fill="#fff" stroke="#166534" stroke-width="2"/>
                    <path d="M24 10l3 6h6l-5 4 2 6-6-4-6 4 2-6-5-4h6l3-6z" fill="#166534"/>
                </svg>
            </div>
            <!-- Botones Izquierda -->
            <button class="hidden sm:inline-block px-4 py-2 rounded-md bg-green-500 text-white font-semibold hover:bg-green-600 transition">Sudamericana</button>
            <button class="hidden sm:inline-block px-4 py-2 rounded-md bg-green-100 text-green-700 font-semibold hover:bg-green-200 transition">Libertadores</button>
        </div>
        <!-- Right: Avatar + Newsletter -->
        <div class="flex items-center gap-4">
            <!-- Newsletter -->
            <button class="px-4 py-2 rounded-md bg-yellow-400 text-white font-semibold hover:bg-yellow-500 transition">Newsletter</button>
            <!-- Avatar -->
            <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden border-2 border-green-500">
                <svg class="w-7 h-7 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 12c2.7 0 4.5-1.8 4.5-4.5S14.7 3 12 3 7.5 4.8 7.5 7.5 9.3 12 12 12zm0 2c-3 0-9 1.5-9 4.5V21h18v-2.5c0-3-6-4.5-9-4.5z"/>
                </svg>
            </div>
        </div>
    </header>
    <div class="max-w-7xl mx-auto">
        <!-- Desktop Layout -->
        <div class="hidden lg:flex justify-between items-center gap-8">

            <!-- Left Side - Quarter Finals -->
            <div class="flex flex-col gap-6">
                <!-- Match 1: Spain vs Georgia -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇪🇸</span>
                            </div>
                            <span class="font-medium text-sm">ESP</span>
                        </div>
                        <span class="font-bold text-lg">4</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-800 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇬🇪</span>
                            </div>
                            <span class="font-medium text-sm">GEO</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                </div>

                <!-- Match 2: Germany vs Denmark -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-black rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇩🇪</span>
                            </div>
                            <span class="font-medium text-sm">GER</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇩🇰</span>
                            </div>
                            <span class="font-medium text-sm">DEN</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                </div>

                <!-- Match 3: Portugal vs Slovenia -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇵🇹</span>
                            </div>
                            <span class="font-medium text-sm">POR</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇸🇮</span>
                            </div>
                            <span class="font-medium text-sm">SVN</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                </div>

                <!-- Match 4: France vs Belgium -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-blue-700 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇫🇷</span>
                            </div>
                            <span class="font-medium text-sm">FRA</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-yellow-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇧🇪</span>
                            </div>
                            <span class="font-medium text-sm">BEL</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                </div>
            </div>

            <!-- Semi Finals Left -->
            <div class="flex flex-col gap-12">
                <!-- Spain vs Germany -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇪🇸</span>
                            </div>
                            <span class="font-medium text-sm">ESP</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-black rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇩🇪</span>
                            </div>
                            <span class="font-medium text-sm">GER</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                </div>

                <!-- Portugal vs France -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇵🇹</span>
                            </div>
                            <span class="font-medium text-sm">POR</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-blue-700 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇫🇷</span>
                            </div>
                            <span class="font-medium text-sm">FRA</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                </div>
            </div>

            <!-- Final -->
            <div class="flex flex-col items-center gap-6">
                <!-- Trophy -->
                <div class="text-6xl">🏆</div>

                <!-- Final Match -->
                <div class="bg-white border-2 border-yellow-400 rounded-lg p-6 shadow-lg min-w-56">
                    <div class="text-center mb-4">
                        <div class="w-8 h-8 bg-red-500 rounded-full mx-auto mb-2 flex items-center justify-center">
                            <span class="text-white text-sm font-bold">🇪🇸</span>
                        </div>
                        <div class="text-lg font-bold text-gray-600">España</div>
                        <div class="text-sm text-gray-500 uppercase">CAMPEÓN</div>
                    </div>

                    <div class="flex items-center justify-between bg-yellow-50 rounded p-3 mb-3">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇪🇸</span>
                            </div>
                            <span class="font-medium text-sm">ESP</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🏴󠁧󠁢󠁥󠁮󠁧󠁿</span>
                            </div>
                            <span class="font-medium text-sm">ENG</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>

                    <div class="text-center mt-3">
                        <span class="bg-yellow-500 text-white px-3 py-1 rounded text-xs font-bold">FINAL</span>
                    </div>
                </div>
            </div>

            <!-- Semi Finals Right -->
            <div class="flex flex-col gap-12">
                <!-- Netherlands vs England -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇳🇱</span>
                            </div>
                            <span class="font-medium text-sm">NED</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🏴󠁧󠁢󠁥󠁮󠁧󠁿</span>
                            </div>
                            <span class="font-medium text-sm">ENG</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                </div>

                <!-- England vs Switzerland -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🏴󠁧󠁢󠁥󠁮󠁧󠁿</span>
                            </div>
                            <span class="font-medium text-sm">ENG</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇨🇭</span>
                            </div>
                            <span class="font-medium text-sm">SUI</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                </div>
            </div>

            <!-- Right Side - Quarter Finals -->
            <div class="flex flex-col gap-6">
                <!-- Match 1: Romania vs Netherlands -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇷🇴</span>
                            </div>
                            <span class="font-medium text-sm">ROU</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-orange-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇳🇱</span>
                            </div>
                            <span class="font-medium text-sm">NED</span>
                        </div>
                        <span class="font-bold text-lg">3</span>
                    </div>
                </div>

                <!-- Match 2: Austria vs Turkey -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇦🇹</span>
                            </div>
                            <span class="font-medium text-sm">AUT</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-700 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇹🇷</span>
                            </div>
                            <span class="font-medium text-sm">TUR</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                </div>

                <!-- Match 3: England vs Slovakia -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🏴󠁧󠁢󠁥󠁮󠁧󠁿</span>
                            </div>
                            <span class="font-medium text-sm">ENG</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇸🇰</span>
                            </div>
                            <span class="font-medium text-sm">SVK</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                </div>

                <!-- Match 4: Switzerland vs Italy -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm min-w-48">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-red-500 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇨🇭</span>
                            </div>
                            <span class="font-medium text-sm">SUI</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="w-6 h-6 bg-blue-700 rounded-full flex items-center justify-center">
                                <span class="text-white text-xs font-bold">🇮🇹</span>
                            </div>
                            <span class="font-medium text-sm">ITA</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile/Tablet Layout -->
        <div class="lg:hidden flex flex-col items-center gap-6">

            <!-- Quarter Finals Row 1 -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full max-w-4xl">
                <!-- Spain vs Georgia -->
                <div class="bg-white border border-gray-200 rounded-lg p-3 shadow-sm">
                    <div class="flex items-center justify-between mb-1">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇪🇸</span>
                            <span class="font-medium text-xs">ESP</span>
                        </div>
                        <span class="font-bold">4</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇬🇪</span>
                            <span class="font-medium text-xs">GEO</span>
                        </div>
                        <span class="font-bold">1</span>
                    </div>
                </div>

                <!-- Germany vs Denmark -->
                <div class="bg-white border border-gray-200 rounded-lg p-3 shadow-sm">
                    <div class="flex items-center justify-between mb-1">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇩🇪</span>
                            <span class="font-medium text-xs">GER</span>
                        </div>
                        <span class="font-bold">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇩🇰</span>
                            <span class="font-medium text-xs">DEN</span>
                        </div>
                        <span class="font-bold">0</span>
                    </div>
                </div>

                <!-- Portugal vs Slovenia -->
                <div class="bg-white border border-gray-200 rounded-lg p-3 shadow-sm">
                    <div class="flex items-center justify-between mb-1">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇵🇹</span>
                            <span class="font-medium text-xs">POR</span>
                        </div>
                        <span class="font-bold">0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇸🇮</span>
                            <span class="font-medium text-xs">SVN</span>
                        </div>
                        <span class="font-bold">0</span>
                    </div>
                </div>

                <!-- France vs Belgium -->
                <div class="bg-white border border-gray-200 rounded-lg p-3 shadow-sm">
                    <div class="flex items-center justify-between mb-1">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇫🇷</span>
                            <span class="font-medium text-xs">FRA</span>
                        </div>
                        <span class="font-bold">1</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇧🇪</span>
                            <span class="font-medium text-xs">BEL</span>
                        </div>
                        <span class="font-bold">0</span>
                    </div>
                </div>
            </div>

            <!-- Semi Finals -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full max-w-2xl">
                <!-- Spain vs Germany -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇪🇸</span>
                            <span class="font-medium text-sm">ESP</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇩🇪</span>
                            <span class="font-medium text-sm">GER</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                </div>

                <!-- Portugal vs France -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇵🇹</span>
                            <span class="font-medium text-sm">POR</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇫🇷</span>
                            <span class="font-medium text-sm">FRA</span>
                        </div>
                        <span class="font-bold text-lg">0</span>
                    </div>
                </div>
            </div>

            <!-- Final -->
            <div class="flex flex-col items-center gap-4 w-full max-w-md">
                <!-- Spain vs France Final -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm w-full">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇪🇸</span>
                            <span class="font-medium text-sm">ESP</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇫🇷</span>
                            <span class="font-medium text-sm">FRA</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                </div>

                <!-- Final Badge -->
                <div class="flex flex-col items-center gap-2">
                    <div class="text-4xl">🏆</div>
                    <div class="bg-white border-2 border-yellow-400 rounded-lg p-4 shadow-lg text-center">
                        <div class="flex items-center justify-center gap-2 mb-2">
                            <span class="text-2xl">🇪🇸</span>
                            <span class="font-bold text-lg">ESP</span>
                        </div>
                        <div class="bg-yellow-500 text-white px-3 py-1 rounded text-xs font-bold">FINAL</div>
                    </div>
                </div>

                <!-- Netherlands vs England -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm w-full">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇳🇱</span>
                            <span class="font-medium text-sm">NED</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🏴󠁧󠁢󠁥󠁮󠁧󠁿</span>
                            <span class="font-medium text-sm">ENG</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                </div>
            </div>

            <!-- Semi Finals Right -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full max-w-2xl">
                <!-- Netherlands vs Turkey -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇳🇱</span>
                            <span class="font-medium text-sm">NED</span>
                        </div>
                        <span class="font-bold text-lg">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇹🇷</span>
                            <span class="font-medium text-sm">TUR</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                </div>

                <!-- England vs Switzerland -->
                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🏴󠁧󠁢󠁥󠁮󠁧󠁿</span>
                            <span class="font-medium text-sm">ENG</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="text-xl">🇨🇭</span>
                            <span class="font-medium text-sm">SUI</span>
                        </div>
                        <span class="font-bold text-lg">1</span>
                    </div>
                </div>
            </div>

            <!-- Quarter Finals Row 2 -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 w-full max-w-4xl">
                <!-- Romania vs Netherlands -->
                <div class="bg-white border border-gray-200 rounded-lg p-3 shadow-sm">
                    <div class="flex items-center justify-between mb-1">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇷🇴</span>
                            <span class="font-medium text-xs">ROU</span>
                        </div>
                        <span class="font-bold">0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇳🇱</span>
                            <span class="font-medium text-xs">NED</span>
                        </div>
                        <span class="font-bold">3</span>
                    </div>
                </div>

                <!-- Austria vs Turkey -->
                <div class="bg-white border border-gray-200 rounded-lg p-3 shadow-sm">
                    <div class="flex items-center justify-between mb-1">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇦🇹</span>
                            <span class="font-medium text-xs">AUT</span>
                        </div>
                        <span class="font-bold">1</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇹🇷</span>
                            <span class="font-medium text-xs">TUR</span>
                        </div>
                        <span class="font-bold">2</span>
                    </div>
                </div>

                <!-- England vs Slovakia -->
                <div class="bg-white border border-gray-200 rounded-lg p-3 shadow-sm">
                    <div class="flex items-center justify-between mb-1">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🏴󠁧󠁢󠁥󠁮󠁧󠁿</span>
                            <span class="font-medium text-xs">ENG</span>
                        </div>
                        <span class="font-bold">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇸🇰</span>
                            <span class="font-medium text-xs">SVK</span>
                        </div>
                        <span class="font-bold">1</span>
                    </div>
                </div>

                <!-- Switzerland vs Italy -->
                <div class="bg-white border border-gray-200 rounded-lg p-3 shadow-sm">
                    <div class="flex items-center justify-between mb-1">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇨🇭</span>
                            <span class="font-medium text-xs">SUI</span>
                        </div>
                        <span class="font-bold">2</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-1">
                            <span class="text-lg">🇮🇹</span>
                            <span class="font-medium text-xs">ITA</span>
                        </div>
                        <span class="font-bold">0</span>
                    </div>
                </div>
            </div>

            <!-- Champion Section -->
            <div class="text-center mt-6">
                <div class="text-5xl mb-4">🏆</div>
                <div class="bg-white border-2 border-yellow-400 rounded-lg p-6 shadow-lg">
                    <div class="flex items-center justify-center gap-3 mb-3">
                        <span class="text-3xl">🇪🇸</span>
                        <div>
                            <div class="text-xl font-bold text-gray-700">España</div>
                            <div class="text-sm text-gray-500 uppercase tracking-wide">CAMPEÓN</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
