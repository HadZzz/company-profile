<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-primary-700 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    Frequently Asked Questions
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-primary-200 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Find answers to common questions about our services and processes.
                </p>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-white py-16">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-8">
                <!-- Services -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Services</h2>
                    <div class="space-y-6">
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900">What services do you offer?</h3>
                                </div>
                                <div class="mt-2 text-gray-600">
                                    We offer a comprehensive range of digital services including web development, mobile app development, UI/UX design, cloud solutions, digital marketing, and IT consulting. Each service is customized to meet your specific business needs.
                                </div>
                            </button>
                        </div>

                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900">How do you ensure project quality?</h3>
                                </div>
                                <div class="mt-2 text-gray-600">
                                    We follow industry best practices and have a rigorous quality assurance process. This includes code reviews, automated testing, and multiple rounds of QA before delivery. We also maintain constant communication with clients to ensure their requirements are met.
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Process -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Our Process</h2>
                    <div class="space-y-6">
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900">What is your development process?</h3>
                                </div>
                                <div class="mt-2 text-gray-600">
                                    Our development process follows an agile methodology with these key phases:
                                    <ul class="mt-2 list-disc list-inside">
                                        <li>Discovery and Planning</li>
                                        <li>Design and Prototyping</li>
                                        <li>Development and Testing</li>
                                        <li>Deployment and Launch</li>
                                        <li>Maintenance and Support</li>
                                    </ul>
                                </div>
                            </button>
                        </div>

                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900">How long does a typical project take?</h3>
                                </div>
                                <div class="mt-2 text-gray-600">
                                    Project timelines vary depending on scope and complexity. A simple website might take 4-6 weeks, while a complex enterprise application could take 3-6 months or more. We'll provide a detailed timeline during the project planning phase.
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Support -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Support & Maintenance</h2>
                    <div class="space-y-6">
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900">What kind of support do you provide?</h3>
                                </div>
                                <div class="mt-2 text-gray-600">
                                    We offer comprehensive support including:
                                    <ul class="mt-2 list-disc list-inside">
                                        <li>24/7 technical support</li>
                                        <li>Regular maintenance and updates</li>
                                        <li>Performance monitoring</li>
                                        <li>Security patches</li>
                                        <li>Feature enhancements</li>
                                    </ul>
                                </div>
                            </button>
                        </div>

                        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900">Do you offer ongoing maintenance?</h3>
                                </div>
                                <div class="mt-2 text-gray-600">
                                    Yes, we offer flexible maintenance packages to keep your application up-to-date and running smoothly. This includes regular updates, security patches, and performance optimization.
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-primary-700">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Still have questions?</span>
                <span class="block">We're here to help.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200">
                Contact us for detailed information about our services and how we can help your business grow.
            </p>
            <div class="mt-8 flex justify-center space-x-4">
                <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-white hover:bg-primary-50">
                    Contact Us
                </a>
                <a href="{{ route('about') }}" class="inline-flex items-center justify-center px-5 py-3 border border-white text-base font-medium rounded-md text-white hover:bg-primary-600">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</x-app-layout>