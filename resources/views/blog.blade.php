<x-app-layout>
    <!-- Hero Section with Background Pattern -->
    <div class="relative bg-primary-700 dark:bg-primary-800 overflow-hidden">
        <div class="absolute inset-y-0 h-full w-full" aria-hidden="true">
            <div class="relative h-full">
                <svg class="absolute right-full transform translate-y-1/3 translate-x-1/4 md:translate-y-1/2 sm:translate-x-1/2 lg:translate-x-full" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="e229dbec-10e9-49ee-8ec3-0286ca089edf" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-primary-500 dark:text-primary-400" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#e229dbec-10e9-49ee-8ec3-0286ca089edf)" />
                </svg>
                <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 sm:-translate-x-1/2 md:-translate-y-1/2 lg:-translate-x-3/4" width="404" height="784" fill="none" viewBox="0 0 404 784">
                    <defs>
                        <pattern id="d2a68204-c383-44b1-b99f-42ccff4e5365" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-primary-500 dark:text-primary-400" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="784" fill="url(#d2a68204-c383-44b1-b99f-42ccff4e5365)" />
                </svg>
            </div>
        </div>

        <div class="relative pt-6 pb-16 sm:pb-24">
            <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
                <div class="text-center">
                    <h1 class="text-4xl tracking-tight font-extrabold text-white dark:text-gray-100 sm:text-5xl md:text-6xl">
                        <span class="block">Artikel</span>
                        <span class="block text-primary-200 dark:text-primary-300">& Wawasan Terbaru</span>
                    </h1>
                    <p class="mt-3 max-w-md mx-auto text-base text-primary-200 dark:text-primary-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                        Temukan tren terbaru, wawasan, dan praktik terbaik dalam pengembangan web, teknologi, dan inovasi digital.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Post -->
    @if($posts->count() > 0)
    @php $featuredPost = $posts->first(); @endphp
    <div class="relative bg-gray-50 dark:bg-gray-800 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white dark:bg-gray-900 h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 dark:text-white sm:text-4xl">Artikel Unggulan</h2>
            </div>
            <div class="mt-12 max-w-lg mx-auto lg:max-w-none">
                <div class="space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-8">
                    <div class="group">
                        <div class="relative w-full h-80 bg-white dark:bg-gray-800 rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="{{ $featuredPost->image }}" alt="{{ $featuredPost->title }}" class="w-full h-full object-center object-cover">
                        </div>
                        <h3 class="mt-6 text-2xl text-gray-900 dark:text-white">
                            <a href="{{ route('blog.show', $featuredPost->slug) }}">
                                <span class="absolute inset-0"></span>
                                {{ $featuredPost->title }}
                            </a>
                        </h3>
                        <p class="text-base text-gray-500 dark:text-gray-400">{{ $featuredPost->excerpt }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Blog Posts Grid -->
    <div class="bg-white dark:bg-gray-900 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-lg mx-auto lg:max-w-7xl">
            <!-- Search and Filter Section -->
            <div class="flex flex-col md:flex-row justify-between items-center mb-12">
                <div class="w-full md:w-1/3 mb-4 md:mb-0">
                    <label for="search" class="sr-only">Search articles</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="search" name="search" class="block w-full pl-10 pr-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md leading-5 bg-white dark:bg-gray-800 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:placeholder-gray-400 dark:focus:placeholder-gray-500 focus:ring-1 focus:ring-offset-2 focus:ring-offset-primary-700 dark:focus:ring-offset-primary-800 focus:ring-white dark:focus:ring-gray-200" placeholder="Cari artikel..." type="search">
                    </div>
                </div>

                <div class="w-full md:w-2/3 flex justify-end space-x-4">
                    <select class="block w-full md:w-auto pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-primary-500 dark:focus:ring-primary-400 focus:border-primary-500 dark:focus:border-primary-400 sm:text-sm rounded-md bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                        <option>Semua Kategori</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    <select class="block w-full md:w-auto pl-3 pr-10 py-2 text-base border-gray-300 dark:border-gray-600 focus:outline-none focus:ring-primary-500 dark:focus:ring-primary-400 focus:border-primary-500 dark:focus:border-primary-400 sm:text-sm rounded-md bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                        <option>Terbaru</option>
                        <option>Terpopuler</option>
                        <option>A-Z</option>
                    </select>
                </div>
            </div>

            <!-- Posts Grid -->
            <div class="mt-12 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
                @foreach($posts->skip(1) as $post)
                <div>
                    @if($post->image)
                    <div class="relative w-full h-48 mb-6 rounded-lg overflow-hidden">
                        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                    </div>
                    @endif
                    <div>
                        @foreach($post->categories as $category)
                        <a href="#" class="inline-block">
                            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-primary-100 dark:bg-primary-900 text-primary-800 dark:text-primary-200">
                                {{ $category->name }}
                            </span>
                        </a>
                        @endforeach
                    </div>
                    <a href="{{ route('blog.show', $post->slug) }}" class="block mt-4">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            {{ $post->title }}
                        </h3>
                        <p class="mt-3 text-base text-gray-500 dark:text-gray-400">
                            {{ $post->excerpt }}
                        </p>
                    </a>
                    <div class="mt-6 flex items-center">
                        <div class="flex-shrink-0">
                            @if($post->author->profile_photo_url)
                            <img class="h-10 w-10 rounded-full" src="{{ $post->author->profile_photo_url }}" alt="{{ $post->author->name }}">
                            @endif
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">
                                {{ $post->author->name }}
                            </p>
                            <div class="flex space-x-1 text-sm text-gray-500 dark:text-gray-400">
                                <time datetime="{{ $post->published_at }}">
                                    {{ $post->published_at->format('d M Y') }}
                                </time>
                                <span aria-hidden="true">&middot;</span>
                                <span>{{ $post->reading_time }} min read</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="relative bg-primary-700 dark:bg-primary-800">
        <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
            <svg class="absolute bottom-0 left-0 transform -translate-x-1/2 translate-y-1/2" width="640" height="784" fill="none" viewBox="0 0 640 784">
                <defs>
                    <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-primary-500 dark:text-primary-400" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="640" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
            </svg>
        </div>
        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="py-12 sm:py-20">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <h2 class="text-3xl font-extrabold text-white dark:text-gray-100 sm:text-4xl">
                        <span class="block">Ingin mendapatkan update terbaru?</span>
                        <span class="block text-primary-200 dark:text-primary-300">Berlangganan newsletter kami.</span>
                    </h2>
                    <form class="mt-6 sm:mt-0 sm:flex">
                        <label for="email-address" class="sr-only">Alamat Email</label>
                        <input id="email-address" type="email" required class="w-full px-5 py-3 placeholder-gray-500 dark:placeholder-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-offset-primary-700 dark:focus:ring-offset-primary-800 focus:ring-white dark:focus:ring-gray-200 rounded-md bg-white dark:bg-gray-800 border-0" placeholder="Masukkan email Anda">
                        <button type="submit" class="mt-3 w-full px-6 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 dark:text-primary-400 bg-white dark:bg-gray-800 shadow-sm hover:bg-primary-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-primary-400 sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">
                            Berlangganan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
