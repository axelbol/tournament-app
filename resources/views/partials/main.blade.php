<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=open-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-open-sans bg-midnight text-white text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="/">
            <img src="{{ asset('img/creatorseries-primary-logo.svg') }}" alt="Logo">
        </a>
        <div class="flex items-center gap-4">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
    </header>
    <nav class="border-b border-gray-200">
        <ul class="flex items-center justify-between">
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
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
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
</html>
