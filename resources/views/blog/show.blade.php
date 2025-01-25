<x-app-layout>
    <!-- Hero Section with Background Image -->
    <div class="relative bg-primary-700">
        <!-- Background Pattern -->
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

        <!-- Content -->
        <div class="relative max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl lg:text-7xl">
                    {{ $post->title }}
                </h1>
                <p class="mt-6 max-w-3xl mx-auto text-xl text-primary-200">
                    {{ $post->excerpt }}
                </p>
                
                <!-- Author Info -->
                <div class="mt-8 flex items-center justify-center">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12 rounded-full ring-2 ring-white" src="{{ $post->author_image }}" alt="{{ $post->author_name }}">
                    </div>
                    <div class="ml-4 text-left">
                        <p class="text-lg font-medium text-white">
                            {{ $post->author_name }}
                        </p>
                        <div class="flex space-x-1 text-sm text-primary-200">
                            <time datetime="{{ $post->published_at->format('Y-m-d') }}">
                                {{ $post->published_at->format('M d, Y') }}
                            </time>
                            <span aria-hidden="true">&middot;</span>
                            <span>{{ $post->reading_time }} min read</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Article Content -->
    <div class="relative py-16 overflow-hidden">
        <div class="hidden lg:block lg:absolute lg:inset-y-0 lg:h-full lg:w-full">
            <div class="relative h-full text-lg max-w-prose mx-auto" aria-hidden="true">
                <svg class="absolute top-12 left-full transform translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                    <defs>
                        <pattern id="74b3fd99-0a6f-4271-bef2-e80eeafdf357" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)" />
                </svg>
                <svg class="absolute top-1/2 right-full transform -translate-y-1/2 -translate-x-32" width="404" height="384" fill="none" viewBox="0 0 404 384">
                    <defs>
                        <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="404" height="384" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
                </svg>
            </div>
        </div>

        <!-- Main Content -->
        <div class="relative px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <!-- Featured Image -->
                <div class="aspect-w-16 aspect-h-9 mb-12">
                    <img class="w-full h-full object-cover rounded-xl shadow-2xl" src="{{ $post->image }}" alt="{{ $post->title }}">
                </div>

                <!-- Article Content -->
                <article class="prose prose-lg prose-primary mx-auto">
                    {!! $post->formatted_content !!}
                </article>

                <!-- Share Buttons -->
                <div class="mt-12 flex justify-center space-x-6">
                    <a href="https://twitter.com/intent/tweet?text={{ urlencode($post->title) }}&url={{ urlencode(request()->url()) }}" target="_blank" class="text-gray-400 hover:text-primary-500">
                        <span class="sr-only">Share on Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title) }}" target="_blank" class="text-gray-400 hover:text-primary-500">
                        <span class="sr-only">Share on LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                    </a>
                    <a href="mailto:?subject={{ urlencode($post->title) }}&body={{ urlencode(request()->url()) }}" class="text-gray-400 hover:text-primary-500">
                        <span class="sr-only">Share via Email</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Posts -->
    <div class="bg-gray-50 py-16 sm:py-24">
        <div class="relative">
            <div class="absolute inset-0 h-1/2 bg-white"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="max-w-lg mx-auto lg:max-w-none">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Related Articles
                    </h2>
                    <p class="mt-3 text-xl text-gray-500">
                        Continue exploring our latest insights and articles.
                    </p>
                    <div class="mt-12 grid gap-8 lg:grid-cols-3">
                        @foreach(\App\Models\BlogPost::where('id', '!=', $post->id)->where('published_at', '<=', now())->orderBy('published_at', 'desc')->limit(3)->get() as $relatedPost)
                        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden transform transition duration-500 hover:scale-105">
                            <div class="flex-shrink-0">
                                <a href="{{ route('blog.show', $relatedPost->slug) }}">
                                    <img class="h-48 w-full object-cover" src="{{ $relatedPost->image }}" alt="{{ $relatedPost->title }}">
                                </a>
                            </div>
                            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                                <div class="flex-1">
                                    <a href="{{ route('blog.show', $relatedPost->slug) }}" class="block">
                                        <h3 class="text-xl font-semibold text-gray-900 hover:text-primary-600">
                                            {{ $relatedPost->title }}
                                        </h3>
                                        <p class="mt-3 text-base text-gray-500">
                                            {{ $relatedPost->excerpt }}
                                        </p>
                                    </a>
                                </div>
                                <div class="mt-6 flex items-center">
                                    <div class="flex-shrink-0">
                                        <img class="h-10 w-10 rounded-full" src="{{ $relatedPost->author_image }}" alt="{{ $relatedPost->author_name }}">
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-sm font-medium text-gray-900">
                                            {{ $relatedPost->author_name }}
                                        </p>
                                        <div class="flex space-x-1 text-sm text-gray-500">
                                            <time datetime="{{ $relatedPost->published_at->format('Y-m-d') }}">
                                                {{ $relatedPost->published_at->format('M d, Y') }}
                                            </time>
                                            <span aria-hidden="true">&middot;</span>
                                            <span>{{ $relatedPost->reading_time }} min read</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="relative bg-primary-700">
        <!-- Background Pattern -->
        <div class="absolute inset-0 overflow-hidden opacity-20" aria-hidden="true">
            <svg class="absolute bottom-0 left-0 transform -translate-x-1/2 translate-y-1/2" width="640" height="784" fill="none" viewBox="0 0 640 784">
                <defs>
                    <pattern id="newsletter-pattern" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-white" fill="currentColor" />
                    </pattern>
                </defs>
                <rect y="0" width="640" height="784" fill="url(#newsletter-pattern)" />
            </svg>
        </div>

        <!-- Content -->
        <div class="relative max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Never miss an update</span>
                <span class="block">Subscribe to our newsletter</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200">
                Get weekly insights, tips, and expert knowledge delivered straight to your inbox.
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
