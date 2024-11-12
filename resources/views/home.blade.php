<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-50 dark:bg-gray-800 px-6 py-12">
        <!-- Card Container -->
        <div class="w-full max-w-md bg-white dark:bg-gray-900 shadow-lg rounded-xl p-8 text-center transition-transform transform hover:scale-105">
            <!-- Header Section -->
            <h1 class="text-3xl font-semibold text-gray-900 dark:text-white mb-6">
                Student Management System
            </h1>

            <!-- Navigation Links -->
            @if (Route::has('login'))
                <nav class="flex flex-col space-y-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="w-full inline-block px-4 py-3 bg-[#FF2D20] text-white font-medium rounded-lg transition-colors duration-200 hover:bg-[#e0261d] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20] dark:focus:ring-offset-gray-900"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="w-full inline-block px-4 py-3 bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20] dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600 dark:focus:ring-offset-gray-900"
                        >
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="w-full inline-block px-4 py-3 bg-gray-200 text-gray-700 font-medium rounded-lg transition-colors duration-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF2D20] dark:bg-gray-700 dark:text-gray-200 dark:hover:bg-gray-600 dark:focus:ring-offset-gray-900"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</x-guest-layout>
