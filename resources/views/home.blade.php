<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Transform Your Business</span>
                            <span class="block text-primary-600 xl:inline">with Technology</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            We help businesses leverage cutting-edge technology to drive growth, efficiency, and innovation. Partner with us to transform your ideas into powerful digital solutions.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="{{ route('contact') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 md:py-4 md:text-lg md:px-10">
                                    Get Started
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="{{ route('services') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                    Our Services
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt="Office working environment">
        </div>
    </div>

    <!-- Featured Services Section -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Services</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    What We Offer
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Comprehensive technology solutions tailored to your business needs.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($services as $service)
                    <div class="relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-primary-500 rounded-lg shadow-sm border border-gray-100">
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
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-10 text-center">
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700">
                        View All Services
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Projects Section -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Projects</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Our Latest Work
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Take a look at some of our recent projects and success stories.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($projects as $project)
                    <div class="group relative bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="relative h-48 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-200 ease-in-out" src="{{ $project->image }}" alt="{{ $project->name }}">
                            @if($project->category)
                            <div class="absolute top-0 right-0 mt-4 mr-4">
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-primary-100 text-primary-800">
                                    {{ $project->category }}
                                </span>
                            </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">
                                {{ $project->name }}
                            </h3>
                            <p class="mt-2 text-sm text-gray-500">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-10 text-center">
                    <a href="{{ route('projects') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700">
                        View All Projects
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    What Our Clients Say
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Don't just take our word for it - hear from some of our satisfied clients.
                </p>
            </div>

            <div class="mt-10">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($testimonials as $testimonial)
                    <div class="bg-white rounded-lg shadow-sm p-6 border border-gray-100">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-12 w-12 rounded-full" src="{{ $testimonial->image }}" alt="{{ $testimonial->name }}">
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg font-bold text-gray-900">{{ $testimonial->name }}</h4>
                                <p class="text-sm text-primary-600">{{ $testimonial->position }}, {{ $testimonial->company }}</p>
                            </div>
                        </div>
                        <p class="mt-4 text-gray-500">{{ $testimonial->content }}</p>
                        <div class="mt-4 flex">
                            @for($i = 0; $i < 5; $i++)
                            <svg class="h-5 w-5 {{ $i < $testimonial->rating ? 'text-yellow-400' : 'text-gray-300' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            @endfor
                        </div>
                    </div>
                    @endforeach
                </div>
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
