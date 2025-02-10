<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-primary-600 dark:bg-primary-800 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-primary-600 dark:bg-primary-800 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-white dark:text-gray-100 sm:text-5xl md:text-6xl">
                            Hubungi Kami
                        </h1>
                        <p class="mt-3 text-base text-primary-200 dark:text-primary-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Hubungi kami. Kami senang mendengar dari Anda dan membantu mewujudkan ide-ide Anda.
                        </p>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="relative bg-white dark:bg-gray-900">
        <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50 dark:bg-gray-800"></div>
        </div>
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
            <div class="bg-gray-50 dark:bg-gray-800 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                <div class="max-w-lg mx-auto">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-3xl">
                        Hubungi kami
                    </h2>
                    <p class="mt-3 text-lg leading-6 text-gray-500 dark:text-gray-400">
                        Punya proyek dalam pikiran? Ingin tahu lebih banyak tentang layanan kami? Kami siap membantu.
                    </p>
                    <dl class="mt-8 text-base text-gray-500 dark:text-gray-400">
                        <div>
                            <dt class="sr-only">Alamat</dt>
                            <dd class="flex">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="ml-3">
                                    Jalan Utama 123<br>
                                    Suite 456<br>
                                    Jakarta, Indonesia 12345
                                </span>
                            </dd>
                        </div>
                        <div class="mt-6">
                            <dt class="sr-only">Nomor Telepon</dt>
                            <dd class="flex">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="ml-3">
                                    +62 (21) 123-4567
                                </span>
                            </dd>
                        </div>
                        <div class="mt-6">
                            <dt class="sr-only">Email</dt>
                            <dd class="flex">
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">
                                    contact@example.com
                                </span>
                            </dd>
                        </div>
                    </dl>
                    <p class="mt-6 text-base text-gray-500 dark:text-gray-400">
                        Mencari karir? 
                        <a href="{{ route('careers') }}" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">
                            Lihat semua lowongan kerja
                        </a>.
                    </p>
                </div>
            </div>
            <div class="bg-white dark:bg-gray-900 py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                <div class="max-w-lg mx-auto lg:max-w-none">
                    <form action="{{ route('contact.store') }}" method="POST" class="grid grid-cols-1 gap-y-6">
                        @csrf
                        
                        @if(session('success'))
                        <div class="rounded-md bg-green-50 dark:bg-green-900 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-green-800 dark:text-green-200">
                                        {{ session('success') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endif

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Nama
                            </label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" autocomplete="name" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 dark:border-gray-600 rounded-md dark:bg-gray-700 dark:text-white" required>
                                @error('name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Email
                            </label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" autocomplete="email" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 dark:border-gray-600 rounded-md dark:bg-gray-700 dark:text-white" required>
                                @error('email')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Subjek
                            </label>
                            <div class="mt-1">
                                <input type="text" name="subject" id="subject" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 dark:border-gray-600 rounded-md dark:bg-gray-700 dark:text-white" required>
                                @error('subject')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Pesan
                            </label>
                            <div class="mt-1">
                                <textarea id="message" name="message" rows="4" class="py-3 px-4 block w-full shadow-sm focus:ring-primary-500 focus:border-primary-500 border-gray-300 dark:border-gray-600 rounded-md dark:bg-gray-700 dark:text-white" required>{{ old('message') }}</textarea>
                                @error('message')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-primary-600 dark:bg-primary-500 hover:bg-primary-700 dark:hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:focus:ring-offset-gray-900">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="bg-gray-50 dark:bg-gray-800">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="relative h-96">
                    <!-- Replace the src with your actual Google Maps embed URL -->
                    <iframe class="absolute inset-0 w-full h-full" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0977335890953!2d-122.39568768539612!3d37.78797841855605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085807abad77c31%3A0x9cdf39d36484be8c!2sMarket%20St%2C%20San%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1625686865274!5m2!1sen!2sus" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
