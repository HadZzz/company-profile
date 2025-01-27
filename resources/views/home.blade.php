<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32" data-aos="fade-right">
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
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2" data-aos="fade-left">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
                src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                alt="Office working environment"
                loading="lazy">
        </div>
    </div>

    <!-- Featured Services Section -->
    <div class="py-12 bg-white" data-aos="fade-up">
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
    <div class="bg-gray-50 py-12" data-aos="fade-up">
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
                    <div class="group relative bg-white rounded-lg shadow-sm overflow-hidden" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <div class="relative h-48 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-200 ease-in-out"
                                src="{{ $project->image }}"
                                alt="{{ $project->name }}"
                                loading="lazy">
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
    <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Testimonials</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 sm:text-4xl">What Our Clients Say</p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Don't just take our word for it - hear from some of our satisfied clients.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
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

            <!-- View All Link -->
            <div class="mt-12 text-center">
                <a href="{{ route('testimonials') }}" class="inline-flex items-center text-primary-600 hover:text-primary-500">
                    View All Testimonials
                    <svg class="ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-primary-800 py-16" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                <!-- Projects Completed -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-4xl font-extrabold text-white" data-count="100">0</div>
                    <div class="mt-2 text-sm text-primary-200">Projects Completed</div>
                </div>

                <!-- Happy Clients -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-4xl font-extrabold text-white" data-count="50">0</div>
                    <div class="mt-2 text-sm text-primary-200">Happy Clients</div>
                </div>

                <!-- Team Members -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="text-4xl font-extrabold text-white" data-count="25">0</div>
                    <div class="mt-2 text-sm text-primary-200">Team Members</div>
                </div>

                <!-- Years Experience -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="text-4xl font-extrabold text-white" data-count="10">0</div>
                    <div class="mt-2 text-sm text-primary-200">Years Experience</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Technologies Section -->
    <div class="bg-white py-16" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Technologies</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Technologies We Use
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    We leverage the latest technologies to build robust and scalable solutions
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-4">
                    <!-- Frontend -->
                    <div class="bg-gray-50 p-6 rounded-lg transform hover:scale-105 transition-transform duration-200" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Frontend</h3>
                        <div class="grid grid-cols-3 gap-4">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React" class="h-10 w-10" title="React" loading="lazy">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js" class="h-10 w-10" title="Vue.js" loading="lazy">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg" alt="Tailwind CSS" class="h-10 w-10" title="Tailwind CSS" loading="lazy">
                        </div>
                    </div>

                    <!-- Backend -->
                    <div class="bg-gray-50 p-6 rounded-lg transform hover:scale-105 transition-transform duration-200" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Backend</h3>
                        <div class="grid grid-cols-3 gap-4">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" alt="PHP" class="h-10 w-10" title="PHP" loading="lazy">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="Laravel" class="h-10 w-10" title="Laravel" loading="lazy">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js" class="h-10 w-10" title="Node.js" loading="lazy">
                        </div>
                    </div>

                    <!-- Database -->
                    <div class="bg-gray-50 p-6 rounded-lg transform hover:scale-105 transition-transform duration-200" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Database</h3>
                        <div class="grid grid-cols-3 gap-4">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="h-10 w-10" title="MySQL" loading="lazy">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original.svg" alt="PostgreSQL" class="h-10 w-10" title="PostgreSQL" loading="lazy">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB" class="h-10 w-10" title="MongoDB" loading="lazy">
                        </div>
                    </div>

                    <!-- DevOps -->
                    <div class="bg-gray-50 p-6 rounded-lg transform hover:scale-105 transition-transform duration-200" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">DevOps</h3>
                        <div class="grid grid-cols-3 gap-4">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" alt="Docker" class="h-10 w-10" title="Docker" loading="lazy">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kubernetes/kubernetes-plain.svg" alt="Kubernetes" class="h-10 w-10" title="Kubernetes" loading="lazy">
                            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/amazonwebservices/amazonwebservices-original.svg" alt="AWS" class="h-10 w-10" title="AWS" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client Logos Section -->
    <div class="bg-gray-50 py-16" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 font-semibold tracking-wide uppercase">Trusted By</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Our Clients
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    We're proud to work with these amazing companies
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                    <div class="col-span-1 flex justify-center items-center" data-aos="fade-up" data-aos-delay="100">
                        <img class="h-12 grayscale hover:grayscale-0 transition-all transform hover:scale-110"
                            src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg"
                            alt="Client"
                            loading="lazy">
                    </div>
                    <div class="col-span-1 flex justify-center items-center" data-aos="fade-up" data-aos-delay="200">
                        <img class="h-12 grayscale hover:grayscale-0 transition-all transform hover:scale-110"
                            src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg"
                            alt="Client"
                            loading="lazy">
                    </div>
                    <div class="col-span-1 flex justify-center items-center" data-aos="fade-up" data-aos-delay="300">
                        <img class="h-12 grayscale hover:grayscale-0 transition-all transform hover:scale-110"
                            src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg"
                            alt="Client"
                            loading="lazy">
                    </div>
                    <div class="col-span-1 flex justify-center items-center" data-aos="fade-up" data-aos-delay="400">
                        <img class="h-12 grayscale hover:grayscale-0 transition-all transform hover:scale-110"
                            src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg"
                            alt="Client"
                            loading="lazy">
                    </div>
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