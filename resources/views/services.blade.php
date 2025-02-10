<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-primary-700 dark:bg-primary-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white dark:text-gray-100 sm:text-5xl md:text-6xl">
                    Layanan Kami
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-primary-200 dark:text-primary-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Solusi teknologi komprehensif untuk membantu bisnis Anda berkembang di era digital.
                </p>
            </div>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="py-12 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($services as $service)
                <div class="group relative bg-white dark:bg-gray-800 p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 rounded-lg shadow-sm border border-gray-100 dark:border-gray-700">
                    <div>
                        <span class="rounded-lg inline-flex p-3 bg-primary-50 dark:bg-primary-900 text-primary-700 dark:text-primary-300 ring-4 ring-white dark:ring-gray-800">
                            {!! $service->icon !!}
                        </span>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                            {{ $service->name }}
                        </h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                            {{ $service->description }}
                        </p>
                        @if($service->features)
                        <ul class="mt-4 space-y-2">
                            @foreach(json_decode($service->features) as $feature)
                            <li class="flex items-center text-sm text-gray-500 dark:text-gray-400">
                                <svg class="flex-shrink-0 mr-1.5 h-4 w-4 text-primary-500 dark:text-primary-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                {{ $feature }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
                        <div class="mt-6">
                            <a href="{{ route('services.show', $service->slug) }}" class="inline-flex items-center text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">
                                Pelajari lebih lanjut
                                <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-primary-700 dark:bg-primary-800">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white dark:text-gray-100 sm:text-4xl">
                <span class="block">Siap untuk memulai?</span>
                <span class="block">Mari diskusikan proyek Anda.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200 dark:text-primary-300">
                Hubungi kami hari ini untuk mengetahui bagaimana kami dapat membantu mentransformasi bisnis Anda dengan solusi teknologi kami.
            </p>
            <a href="{{ route('contact') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 dark:text-primary-400 bg-white dark:bg-gray-800 hover:bg-primary-50 dark:hover:bg-gray-700 sm:w-auto">
                Hubungi Kami
            </a>
        </div>
    </div>
</x-app-layout>
