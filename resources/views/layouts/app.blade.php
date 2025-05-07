<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    <button id="darkModeToggle" class="fixed bottom-8 right-8 bg-gray-600 dark:bg-gray-700 text-yellow-400 dark:text-gray-200 rounded-full p-2 cursor-pointer">
        <x-heroicon-o-sun id="sunIcon" class="w-6 h-6" />
        <x-heroicon-o-moon id="moonIcon" class="w-6 h-6 hidden" />
    </button>
    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const html = document.documentElement;
        const moonIcon = document.getElementById('moonIcon');
        const sunIcon = document.getElementById('sunIcon');

        function toggleIcons() {
            moonIcon.classList.toggle('hidden');
            sunIcon.classList.toggle('hidden');
        }

        // Check for saved preference on page load
        if (localStorage.getItem('darkMode') === 'true') {
            html.classList.add('dark');
            // If dark mode is preferred/saved, show the moon icon initially
            if (moonIcon && sunIcon) {
                moonIcon.classList.remove('hidden');
                sunIcon.classList.add('hidden');
            }
        } else {
            // If light mode is preferred/default, show the sun icon initially
            if (moonIcon && sunIcon) {
                sunIcon.classList.remove('hidden');
                moonIcon.classList.add('hidden');
            }
        }

        darkModeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            localStorage.setItem('darkMode', html.classList.contains('dark'));
            toggleIcons();
        });
    </script>
</body>

</html>