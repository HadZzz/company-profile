<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-primary-700 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    Client Testimonials
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-primary-200 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    See what our clients say about working with us
                </p>
            </div>
        </div>
    </div>

    <!-- Testimonials Grid -->
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($testimonials as $testimonial)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-8">
                        <!-- Rating Stars -->
                        <div class="flex items-center">
                            @for($i = 0; $i < $testimonial->rating; $i++)
                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                @endfor
                        </div>

                        <!-- Testimonial Content -->
                        <blockquote class="mt-8">
                            <p class="text-lg text-gray-600">
                                "{{ $testimonial->content }}"
                            </p>
                        </blockquote>

                        <!-- Client Info -->
                        <div class="mt-6 flex items-center">
                            @if($testimonial->image)
                            <div class="flex-shrink-0">
                                <img class="h-12 w-12 rounded-full object-cover" src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}">
                            </div>
                            @endif
                            <div class="ml-4">
                                <div class="text-base font-medium text-gray-900">{{ $testimonial->name }}</div>
                                <div class="text-sm text-gray-500">{{ $testimonial->position }} at {{ $testimonial->company }}</div>
                            </div>
                        </div>
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
                <span class="block">Let's work together.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200">
                Join our growing list of satisfied clients and transform your business with our solutions.
            </p>
            <a href="{{ route('contact') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-white hover:bg-primary-50 sm:w-auto">
                Contact Us
            </a>
        </div>
    </div>
</x-app-layout>