<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6">
                <!-- Dashboard Cards (Stats) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
                    <!-- Total Events Card -->
                    <div class="bg-gradient-to-r from-green-400 to-teal-500 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold text-white">Total Events</h3>
                        <p class="text-3xl font-bold text-white mt-4">150</p>
                    </div>

                    <!-- Active Users Card -->
                    <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold text-white">Active Users</h3>
                        <p class="text-3xl font-bold text-white mt-4">120</p>
                    </div>

                    <!-- Upcoming Events Card -->
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out">
                        <h3 class="text-xl font-semibold text-white">Upcoming Events</h3>
                        <p class="text-3xl font-bold text-white mt-4">5</p>
                    </div>
                </div>

                <!-- Recent Activities -->
                <div class="mt-8 bg-gradient-to-r from-gray-100 to-gray-300 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Recent Activities</h3>
                    <ul class="space-y-4">
                        <li class="flex justify-between items-center">
                            <span class="text-gray-700">Created a new event: <strong class="text-indigo-600">Spring Festival</strong></span>
                            <span class="text-gray-500">2 hours ago</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span class="text-gray-700">Updated event: <strong class="text-purple-600">Tech Conference</strong></span>
                            <span class="text-gray-500">1 day ago</span>
                        </li>
                        <li class="flex justify-between items-center">
                            <span class="text-gray-700">User <strong class="text-green-600">John Doe</strong> registered</span>
                            <span class="text-gray-500">3 days ago</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
