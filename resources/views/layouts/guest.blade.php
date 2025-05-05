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

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    <button id="darkModeToggle" class="fixed bottom-8 right-8 bg-gray-200 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-full p-2 cursor-pointer">
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