<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-primary-700 py-16">
        <div class="absolute inset-0 overflow-hidden opacity-20">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-600 to-primary-800"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    {{ $project->name }}
                </h1>
                @if($project->category)
                <div class="mt-4">
                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-primary-100 text-primary-800">
                        {{ $project->category }}
                    </span>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Project Details -->
    <div class="bg-white py-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Project Image -->
            <div class="relative mb-12">
                <img class="w-full h-96 object-cover rounded-xl shadow-lg" src="{{ $project->image }}" alt="{{ $project->name }}">
            </div>

            <!-- Project Info Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="prose prose-lg max-w-none">
                        <h2 class="text-3xl font-bold text-gray-900">Project Overview</h2>
                        <p class="text-gray-600">{{ $project->description }}</p>

                        @if($project->technologies)
                        <h3 class="text-2xl font-bold text-gray-900 mt-8">Technologies Used</h3>
                        <div class="flex flex-wrap gap-2 mt-4">
                            @foreach(explode(', ', $project->technologies) as $tech)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                                {{ $tech }}
                            </span>
                            @endforeach
                        </div>
                        @endif

                        <!-- Project Gallery -->
                        <h3 class="text-2xl font-bold text-gray-900 mt-8">Project Gallery</h3>
                        <div class="grid grid-cols-2 gap-4 mt-4">
                            <img class="rounded-lg shadow-md" src="{{ $project->image }}" alt="Gallery 1">
                            <img class="rounded-lg shadow-md" src="{{ $project->image }}" alt="Gallery 2">
                        </div>
                    </div>
                </div>

                <!-- Project Details Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 rounded-xl p-6 shadow-sm">
                        <h3 class="text-xl font-bold text-gray-900 mb-6">Project Details</h3>

                        @if($project->client)
                        <div class="mb-4">
                            <h4 class="text-sm font-medium text-gray-500">Client</h4>
                            <p class="mt-1 text-base font-medium text-gray-900">{{ $project->client }}</p>
                        </div>
                        @endif

                        @if($project->completion_date)
                        <div class="mb-4">
                            <h4 class="text-sm font-medium text-gray-500">Completion Date</h4>
                            <p class="mt-1 text-base font-medium text-gray-900">{{ \Carbon\Carbon::parse($project->completion_date)->format('F Y') }}</p>
                        </div>
                        @endif

                        @if($project->category)
                        <div class="mb-4">
                            <h4 class="text-sm font-medium text-gray-500">Category</h4>
                            <p class="mt-1 text-base font-medium text-gray-900">{{ $project->category }}</p>
                        </div>
                        @endif

                        @if($project->link && !Str::contains($project->link, ['example.com', 'example.org']))
                        <div class="mt-8">
                            <a href="{{ $project->link }}" target="_blank" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-primary-600 hover:bg-primary-700">
                                Visit Live Project
                                <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                        @else
                        <div class="mt-8">
                            <div class="w-full px-4 py-2 text-sm text-gray-500 bg-gray-100 rounded-md text-center">
                                Project Demo Coming Soon
                            </div>
                        </div>
                        @endif
                    </div>

                    <!-- Contact CTA -->
                    <div class="mt-8 bg-primary-700 rounded-xl p-6 text-white shadow-sm">
                        <h3 class="text-xl font-bold mb-4">Interested in a similar project?</h3>
                        <p class="text-primary-100 mb-6">Let's discuss how we can help bring your ideas to life.</p>
                        <a href="{{ route('contact') }}" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-primary-700 bg-white hover:bg-primary-50">
                            Get in Touch
                        </a>
                    </div>
                </div>
            </div>

            <!-- Related Projects -->
            <div class="mt-20">
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Related Projects</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach(\App\Models\Project::where('id', '!=', $project->id)->where('category', $project->category)->limit(3)->get() as $relatedProject)
                    <div class="group relative bg-white rounded-lg shadow-sm overflow-hidden">
                        <div class="relative h-48 w-full overflow-hidden">
                            <img class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-200 ease-in-out"
                                src="{{ $relatedProject->image }}"
                                alt="{{ $relatedProject->name }}"
                                loading="lazy">
                            @if($relatedProject->category)
                            <div class="absolute top-0 right-0 mt-4 mr-4">
                                <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-primary-100 text-primary-800">
                                    {{ $relatedProject->category }}
                                </span>
                            </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">{{ $relatedProject->name }}</h3>
                            <p class="mt-2 text-sm text-gray-500">{{ Str::limit($relatedProject->description, 100) }}</p>

                            @if($relatedProject->technologies)
                            <div class="mt-4">
                                <div class="flex flex-wrap gap-2">
                                    @foreach(array_slice(explode(', ', $relatedProject->technologies), 0, 3) as $tech)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                        {{ $tech }}
                                    </span>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            <div class="mt-4">
                                <a href="{{ route('projects.show', $relatedProject->id) }}" class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-white bg-primary-600 hover:bg-primary-700 rounded-md shadow-sm">
                                    View Project Details
                                    <svg class="w-5 h-5 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
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
    </div>
</x-app-layout>