<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-primary-700 dark:bg-primary-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white dark:text-gray-100 sm:text-5xl md:text-6xl">
                    Our Projects
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-primary-200 dark:text-primary-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Take a look at some of our recent projects and success stories.
                </p>
            </div>
        </div>
    </div>

    <!-- Category Filter -->
    <div class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center py-4 space-x-4">
                <a href="{{ route('projects') }}"
                    class="px-4 py-2 rounded-md {{ !request('category') ? 'bg-primary-600 dark:bg-primary-500 text-white' : 'bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-600' }}">
                    All Projects
                </a>
                @foreach($categories as $category)
                <a href="{{ route('projects', ['category' => $category]) }}"
                    class="px-4 py-2 rounded-md {{ request('category') === $category ? 'bg-primary-600 dark:bg-primary-500 text-white' : 'bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 hover:bg-gray-200 dark:hover:bg-gray-600' }}">
                    {{ $category }}
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Projects Grid -->
    <div class="py-12 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($projects as $project)
                <div class="group relative bg-white dark:bg-gray-800 rounded-lg shadow-sm overflow-hidden">
                    <div class="relative h-48 w-full overflow-hidden">
                        <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-200 ease-in-out"
                            src="{{ $project->image }}"
                            alt="{{ $project->name }}"
                            loading="lazy">
                        @if($project->category)
                        <div class="absolute top-0 right-0 mt-4 mr-4">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-primary-100 dark:bg-primary-900 text-primary-800 dark:text-primary-200">
                                {{ $project->category }}
                            </span>
                        </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">
                            {{ $project->name }}
                        </h3>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                            {{ $project->description }}
                        </p>
                        <div class="mt-4">
                            <a href="{{ route('projects.show', $project->slug) }}" class="text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">
                                Learn more
                                <span aria-hidden="true"> &rarr;</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if($projects->hasPages())
            <div class="mt-12 px-4 sm:px-6 lg:px-8">
                <div class="flex justify-center">
                    {{ $projects->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-primary-700 dark:bg-primary-800">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white dark:text-gray-100 sm:text-4xl">
                <span class="block">Ready to start your project?</span>
                <span class="block">Let's discuss your ideas.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200 dark:text-primary-300">
                Contact us today to learn how we can help transform your business with our technology solutions.
            </p>
            <a href="{{ route('contact') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 dark:text-primary-400 bg-white dark:bg-gray-800 hover:bg-primary-50 dark:hover:bg-gray-700 sm:w-auto">
                Contact Us
            </a>
        </div>
    </div>
</x-app-layout>