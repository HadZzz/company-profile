<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-primary-700 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    Our Projects
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-primary-200 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Take a look at some of our recent projects and success stories.
                </p>
            </div>
        </div>
    </div>

    <!-- Projects Grid -->
    <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                        @if($project->client)
                        <div class="mt-4">
                            <p class="text-sm font-medium text-gray-900">Client:</p>
                            <p class="text-sm text-gray-500">{{ $project->client }}</p>
                        </div>
                        @endif
                        @if($project->technologies)
                        <div class="mt-4">
                            <p class="text-sm font-medium text-gray-900">Technologies:</p>
                            <div class="flex flex-wrap gap-2 mt-2">
                                @foreach(explode(', ', $project->technologies) as $tech)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @if($project->link)
                        <div class="mt-6">
                            <a href="{{ $project->link }}" class="text-sm font-medium text-primary-600 hover:text-primary-500">
                                View Project <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
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
                <span class="block">Ready to start your project?</span>
                <span class="block">Let's discuss your requirements.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200">
                Contact us today to learn how we can help transform your ideas into reality.
            </p>
            <a href="{{ route('contact') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-white hover:bg-primary-50 sm:w-auto">
                Get in Touch
            </a>
        </div>
    </div>
</x-app-layout>
