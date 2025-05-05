<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-blue-600 dark:text-blue-400 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card container with shadow and border -->
            <div class="bg-gradient-to-r from-blue-500 via-indigo-600 to-purple-700 dark:from-indigo-800 dark:to-purple-900 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 text-white">
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                        <h3 class="font-semibold text-xl text-gray-900 dark:text-gray-100 mb-4">
                            {{ __("You're logged in!") }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-300">
                            Welcome back to your dashboard. Here you can manage your events, view statistics, and more.
                        </p>
                        <!-- Button with hover effect -->
                        <div class="mt-6">
                            <a href="{{ route('profile.edit') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition ease-in-out duration-300">
                                Go to Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
