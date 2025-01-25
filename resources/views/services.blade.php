<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-primary-700 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    Our Services
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-primary-200 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Comprehensive technology solutions to help your business thrive in the digital age.
                </p>
            </div>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($services as $service)
                <div class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 rounded-lg shadow-sm border border-gray-100">
                    <div>
                        <span class="rounded-lg inline-flex p-3 bg-primary-50 text-primary-700 ring-4 ring-white">
                            {!! $service->icon !!}
                        </span>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-lg font-medium text-gray-900">
                            {{ $service->name }}
                        </h3>
                        <p class="mt-2 text-sm text-gray-500">
                            {{ $service->description }}
                        </p>
                        @if($service->features)
                        <ul class="mt-4 space-y-2">
                            @foreach(json_decode($service->features) as $feature)
                            <li class="flex items-center text-sm text-gray-500">
                                <svg class="flex-shrink-0 mr-1.5 h-4 w-4 text-primary-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                {{ $feature }}
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-primary-700">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Ready to get started?</span>
                <span class="block">Let's discuss your project.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200">
                Contact us today to learn how we can help transform your business with our technology solutions.
            </p>
            <a href="{{ route('contact') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-white hover:bg-primary-50 sm:w-auto">
                Get in Touch
            </a>
        </div>
    </div>
</x-app-layout>
