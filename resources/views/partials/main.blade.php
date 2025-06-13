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
<body class="font-open-sans bg-gray-900 text-white text-sm">
    {{-- Header --}}
    <header class="border-b border-green-600 flex mx-auto items-center justify-between px-8 py-4">
        <a href="/">
            <img src="{{ asset('img/creatorseries-primary-logo.svg') }}" alt="Logo" class="w-64 flex-none">
        </a>
        <div class="flex items-center">
            <ul class="flex space-x-8">
                <li><a href="#" class="hover:text-green-400">Home</a></li>
                <li><a href="#" class="hover:text-green-400">About</a></li>
                <li><a href="#" class="hover:text-green-400">Contact</a></li>
            </ul>
        </div>
    </header>

    {{-- Main --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer>
    </footer>
</body>
</html>
