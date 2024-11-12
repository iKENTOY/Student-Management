<x-app-layout>
    <!-- Header Section -->
    <x-slot name="header">
        <h2 class="text-3xl font-bold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Main Content Section -->
    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Dashboard Card -->
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden">
                <div class="p-8 text-center">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-4">
                        {{ __("Welcome to Your Dashboard!") }}
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        {{ __("You're logged in!") }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
