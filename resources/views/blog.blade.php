<x-app-layout>
    <!-- Hero Section with Background Pattern -->
    <div class="relative bg-primary-700 overflow-hidden">
        <div class="absolute inset-y-0 h-full w-full" aria-hidden="true">
            <div class="relative h-full">
                <svg class="absolute right-full transform translate-y-1/3 translate-x-1/4 md:translate-y-1/2 sm:translate-x-1/2 lg:translate-x-full" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="e229dbec-10e9-49ee-8ec3-0286ca089edf" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-primary-500" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#e229dbec-10e9-49ee-8ec3-0286ca089edf)" />
                </svg>
                <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 sm:-translate-x-1/2 md:-translate-y-1/2 lg:-translate-x-3/4" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="d2a68204-c383-44b1-b99f-42ccff4e5365" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-primary-500" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#d2a68204-c383-44b1-b99f-42ccff4e5365)" />
                </svg>
            </div>
        </div>

        <div class="relative pt-6 pb-16 sm:pb-24">
            <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
                <div class="text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                        <span class="block">Our Latest</span>
                        <span class="block text-primary-200">Insights & Articles</span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-primary-200 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Discover the latest trends, insights, and best practices in web development, technology, and digital innovation.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Post -->
    @if($posts->count() > 0)
    @php $featuredPost = $posts->first(); @endphp
    <div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden lg:col-span-3">
                    <div class="flex-shrink-0">
                        <img class="h-96 w-full object-cover" src="{{ $featuredPost->image }}" alt="{{ $featuredPost->title }}">
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <a href="{{ route('blog.show', $featuredPost->slug) }}" class="block mt-2">
                                <p class="text-3xl font-semibold text-gray-900 hover:text-primary-600">
                                    {{ $featuredPost->title }}
                                </p>
                                <p class="mt-3 text-xl text-gray-500">
                                    {{ $featuredPost->excerpt }}
                                </p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-12 w-12 rounded-full" src="{{ $featuredPost->author_image }}" alt="{{ $featuredPost->author_name }}">
                            </div>
                            <div class="ml-3">
                                <p class="text-lg font-medium text-gray-900">
                                    {{ $featuredPost->author_name }}
                                </p>
                                <div class="flex space-x-1 text-base text-gray-500">
                                    <time datetime="{{ $featuredPost->published_at->format('Y-m-d') }}">
                                        {{ $featuredPost->published_at->format('M d, Y') }}
                                    </time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>{{ $featuredPost->reading_time }} min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Blog Posts Grid with Search and Filter -->
    <div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-lg mx-auto lg:max-w-7xl">
            <!-- Search and Filter Section -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <div class="relative">
                        <input type="text" name="search" id="search" class="shadow-sm focus:ring-primary-500 focus:border-primary-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Search articles...">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($posts->skip(1) as $post)
                <article class="flex flex-col rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                    <div class="flex-shrink-0">
                        <a href="{{ route('blog.show', $post->slug) }}" class="block relative h-48">
                            <img class="w-full h-full object-cover" src="{{ $post->image }}" alt="{{ $post->title }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        </a>
                    </div>
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <a href="{{ route('blog.show', $post->slug) }}" class="block">
                                <h3 class="text-xl font-semibold text-gray-900 hover:text-primary-600 line-clamp-2">
                                    {{ $post->title }}
                                </h3>
                                <p class="mt-3 text-base text-gray-500 line-clamp-3">
                                    {{ $post->excerpt }}
                                </p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <div class="flex-shrink-0">
                                <img class="h-10 w-10 rounded-full" src="{{ $post->author_image }}" alt="{{ $post->author_name }}">
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-gray-900">
                                    {{ $post->author_name }}
                                </p>
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="{{ $post->published_at->format('Y-m-d') }}">
                                        {{ $post->published_at->format('M d, Y') }}
                                    </time>
                                    <span aria-hidden="true">&middot;</span>
                                    <span>{{ $post->reading_time }} min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    <!-- Newsletter Section with Background Pattern -->
    <div class="relative bg-primary-700">
        <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
            <svg class="absolute bottom-0 left-0 transform -translate-x-1/2 translate-y-1/2" width="640" height="784" fill="none" viewBox="0 0 640 784">
                <defs>
                    <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-primary-500" fill="currentColor" />
                    </pattern>
                </defs>
                <rect y="0" width="640" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
            </svg>
        </div>

        <div class="relative max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Stay ahead of the curve.</span>
                <span class="block">Get our weekly insights.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200">
                Join our newsletter and get the latest articles, insights, and industry trends delivered straight to your inbox.
            </p>
            <form class="mt-8 sm:flex justify-center">
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required class="w-full px-5 py-3 border border-transparent placeholder-gray-500 focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-700 focus:ring-white focus:border-white sm:max-w-xs rounded-md shadow-sm" placeholder="Enter your email">
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                    <button type="submit" class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 bg-white hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-700 focus:ring-white sm:w-auto">
                        Subscribe
                    </button>
                </div>
            </form>
            <p class="mt-3 text-sm text-primary-200">
                We care about your data. Read our
                <a href="#" class="text-white underline">Privacy Policy</a>.
            </p>
        </div>
    </div>
</x-app-layout>
