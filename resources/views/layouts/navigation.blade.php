<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="text-xl font-bold text-primary-600">
                        Company<span class="text-gray-600">Name</span>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:ml-10 sm:flex">
                    <a href="{{ route('home') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('home') ? 'text-primary-600 border-b-2 border-primary-500' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        Home
                    </a>
                    <a href="{{ route('about') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('about') ? 'text-primary-600 border-b-2 border-primary-500' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        About
                    </a>
                    <a href="{{ route('services') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('services') ? 'text-primary-600 border-b-2 border-primary-500' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        Services
                    </a>
                    <a href="{{ route('projects') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('projects') ? 'text-primary-600 border-b-2 border-primary-500' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        Projects
                    </a>
                    <a href="{{ route('blog') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('blog') ? 'text-primary-600 border-b-2 border-primary-500' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        Blog
                    </a>
                    <a href="{{ route('contact') }}" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 {{ request()->routeIs('contact') ? 'text-primary-600 border-b-2 border-primary-500' : 'text-gray-500 hover:text-gray-700 hover:border-gray-300' }}">
                        Contact
                    </a>
                </div>
            </div>

            <!-- Contact Button -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 border border-transparent rounded-lg text-sm font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-150 ease-in-out">
                    Get in Touch
                </a>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
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
            <a href="{{ route('home') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('home') ? 'border-primary-500 text-primary-600 bg-primary-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                Home
            </a>
            <a href="{{ route('about') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('about') ? 'border-primary-500 text-primary-600 bg-primary-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                About
            </a>
            <a href="{{ route('services') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('services') ? 'border-primary-500 text-primary-600 bg-primary-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                Services
            </a>
            <a href="{{ route('projects') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('projects') ? 'border-primary-500 text-primary-600 bg-primary-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                Projects
            </a>
            <a href="{{ route('blog') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('blog') ? 'border-primary-500 text-primary-600 bg-primary-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                Blog
            </a>
            <a href="{{ route('contact') }}" class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('contact') ? 'border-primary-500 text-primary-600 bg-primary-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                Contact
            </a>
        </div>

        <!-- Responsive Contact Button -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <a href="{{ route('contact') }}" class="block w-full text-center px-4 py-2 bg-primary-600 border border-transparent rounded-lg text-base font-medium text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 transition duration-150 ease-in-out">
                    Get in Touch
                </a>
            </div>
        </div>
    </div>
</nav>
