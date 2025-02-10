<nav x-data="{ open: false, scrolled: false }"
    @scroll.window="scrolled = (window.pageYOffset > 20)"
    :class="{ 'bg-white dark:bg-gray-800 shadow-md': scrolled, 'bg-transparent': !scrolled }"
    class="fixed w-full top-0 z-50 transition-all duration-300">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-primary-600 dark:text-primary-400">
                        Company<span class="text-gray-600 dark:text-gray-300">Name</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:ml-10 sm:flex">
                    <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('home') ? 'text-primary-600 dark:text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300' }}">
                        Beranda
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('about') ? 'text-primary-600 dark:text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300' }}">
                        Tentang
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('services') ? 'text-primary-600 dark:text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300' }}">
                        Layanan
                    </a>
                    <a href="{{ route('projects') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('projects') ? 'text-primary-600 dark:text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300' }}">
                        Proyek
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('contact') ? 'text-primary-600 dark:text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300' }}">
                        Kontak
                    </a>
                    <a href="{{ route('faq') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('faq') ? 'text-primary-600 dark:text-primary-400 border-b-2 border-primary-500' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 hover:border-gray-300' }}">
                        FAQ
                    </a>
                </div>
            </div>

            <!-- Contact Button -->
            <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                <!-- Dark mode toggle -->
                <button @click="darkMode = !darkMode" class="p-2 text-gray-500 dark:text-gray-400 hover:text-primary-600 dark:hover:text-primary-400 focus:outline-none">
                    <!-- Sun icon -->
                    <svg x-show="darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <!-- Moon icon -->
                    <svg x-show="!darkMode" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>

                <a href="{{ route('contact') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 dark:bg-primary-500 border border-transparent rounded-lg text-sm font-medium text-white hover:bg-primary-700 dark:hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-150 ease-in-out">
                    Hubungi Kami
                </a>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-700 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="{{ route('home') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('home') ? 'border-primary-500 text-primary-600 bg-primary-50 dark:border-primary-400 dark:text-primary-400 dark:bg-primary-900' : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-500' }} text-base font-medium focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-500 transition duration-150 ease-in-out">
                Beranda
            </a>
            <a href="{{ route('about') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('about') ? 'border-primary-500 text-primary-600 bg-primary-50 dark:border-primary-400 dark:text-primary-400 dark:bg-primary-900' : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-500' }} text-base font-medium focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-500 transition duration-150 ease-in-out">
                Tentang
            </a>
            <a href="{{ route('services') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('services') ? 'border-primary-500 text-primary-600 bg-primary-50 dark:border-primary-400 dark:text-primary-400 dark:bg-primary-900' : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-500' }} text-base font-medium focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-500 transition duration-150 ease-in-out">
                Layanan
            </a>
            <a href="{{ route('projects') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('projects') ? 'border-primary-500 text-primary-600 bg-primary-50 dark:border-primary-400 dark:text-primary-400 dark:bg-primary-900' : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-500' }} text-base font-medium focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-500 transition duration-150 ease-in-out">
                Proyek
            </a>
            <a href="{{ route('contact') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('contact') ? 'border-primary-500 text-primary-600 bg-primary-50 dark:border-primary-400 dark:text-primary-400 dark:bg-primary-900' : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-500' }} text-base font-medium focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-500 transition duration-150 ease-in-out">
                Kontak
            </a>
            <a href="{{ route('faq') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('faq') ? 'border-primary-500 text-primary-600 bg-primary-50 dark:border-primary-400 dark:text-primary-400 dark:bg-primary-900' : 'border-transparent text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-500' }} text-base font-medium focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-500 transition duration-150 ease-in-out">
                FAQ
            </a>
        </div>

        <!-- Responsive Contact Button -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-500">
            <div class="px-4">
                <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-2 bg-primary-600 dark:bg-primary-500 border border-transparent rounded-lg text-base font-medium text-white hover:bg-primary-700 dark:hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-150 ease-in-out">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</nav>
<!-- Spacer for fixed header -->
<div class="h-16"></div>