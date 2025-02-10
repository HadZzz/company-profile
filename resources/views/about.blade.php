<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-primary-700 dark:bg-primary-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white dark:text-gray-100 sm:text-5xl md:text-6xl">
                    Tentang Kami
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-primary-200 dark:text-primary-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Kami adalah tim pengembang, desainer, dan ahli strategi digital yang berdedikasi untuk menciptakan pengalaman digital yang luar biasa.
                </p>
            </div>
        </div>
    </div>

    <!-- Company Overview -->
    <div class="py-16 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 dark:text-primary-400 font-semibold tracking-wide uppercase">Cerita Kami</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Membangun Keunggulan Digital Sejak 2015
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-400 lg:mx-auto">
                    Dari awal yang sederhana hingga menjadi pemimpin industri, kami telah berada di garis depan inovasi digital selama lebih dari satu dekade.
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Misi Kami</h3>
                        <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
                            Memberdayakan bisnis dengan solusi digital inovatif yang mendorong pertumbuhan, meningkatkan efisiensi, dan menciptakan nilai berkelanjutan bagi klien kami dan pelanggan mereka.
                        </p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white">Visi Kami</h3>
                        <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">
                            Menjadi mitra transformasi digital terkemuka, diakui secara global untuk keunggulan kami dalam inovasi, kualitas, dan kesuksesan klien.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="bg-gray-50 dark:bg-gray-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 dark:text-primary-400 font-semibold tracking-wide uppercase">Tim Kami</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Kenali Para Ahli di Balik Kesuksesan Kami
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 dark:text-gray-400 lg:mx-auto">
                    Tim kami yang beragam menggabungkan keahlian dari berbagai bidang untuk memberikan hasil yang luar biasa.
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4 justify-items-center">
                    @foreach($teamMembers as $member)
                    <div class="relative group w-full max-w-sm mx-auto">
                        <div class="relative w-full h-80 bg-gray-200 dark:bg-gray-700 rounded-lg overflow-hidden group-hover:opacity-75 transition-opacity duration-300">
                            <img class="w-full h-full object-cover" 
                                src="{{ $member->image ?? 'https://ui-avatars.com/api/?name='.urlencode($member->name).'&background=0D9488&color=fff' }}" 
                                alt="{{ $member->name }}">
                        </div>
                        <div class="mt-4 text-center">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                                {{ $member->name }}
                            </h3>
                            <p class="text-sm text-primary-600 dark:text-primary-400">{{ $member->position }}</p>
                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ $member->bio }}</p>
                            
                            @if($member->social_links)
                            <div class="mt-4 flex justify-center space-x-4">
                                @foreach(json_decode($member->social_links) as $platform => $url)
                                <a href="{{ $url }}" class="text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400" target="_blank" rel="noopener noreferrer">
                                    <span class="sr-only">{{ ucfirst($platform) }}</span>
                                    @if($platform == 'linkedin')
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                                    </svg>
                                    @elseif($platform == 'twitter')
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                    @elseif($platform == 'github')
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                                    </svg>
                                    @endif
                                </a>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="bg-white dark:bg-gray-900 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-primary-600 dark:text-primary-400 font-semibold tracking-wide uppercase">Nilai Kami</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Apa yang Mendorong Kami Maju
                </p>
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div class="text-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary-500 dark:bg-primary-600 text-white mx-auto">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="mt-4 text-xl font-semibold text-gray-900 dark:text-white">Kualitas</h3>
                        <p class="mt-2 text-gray-500 dark:text-gray-400">Kami berkomitmen untuk memberikan hasil terbaik dalam setiap proyek.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-primary-700 dark:bg-primary-800">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white dark:text-gray-100 sm:text-4xl">
                <span class="block">Siap untuk bekerja sama dengan kami?</span>
                <span class="block">Mari kita mulai percakapan.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200 dark:text-primary-300">
                Bergabunglah dengan kami dalam menciptakan solusi inovatif yang membuat perbedaan.
            </p>
            <a href="{{ route('contact') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 dark:text-primary-400 bg-white dark:bg-gray-100 hover:bg-primary-50 dark:hover:bg-gray-200 sm:w-auto">
                Hubungi Kami
            </a>
        </div>
    </div>
</x-app-layout>