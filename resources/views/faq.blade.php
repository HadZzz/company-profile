<x-app-layout>
    <!-- Hero Section -->
    <div class="bg-primary-700 dark:bg-primary-800 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white dark:text-gray-100 sm:text-5xl md:text-6xl">
                    Pertanyaan yang Sering Diajukan
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-primary-200 dark:text-primary-300 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Temukan jawaban untuk pertanyaan umum tentang layanan dan proses kami.
                </p>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-white dark:bg-gray-900 py-16">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-8">
                <!-- Services -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Layanan Kami</h2>
                    <div class="space-y-6">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Apa saja layanan yang Anda tawarkan?</h3>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    Kami menawarkan berbagai layanan digital termasuk pengembangan web, pengembangan aplikasi mobile, desain UI/UX, solusi cloud, pemasaran digital, dan konsultasi IT. Setiap layanan disesuaikan dengan kebutuhan bisnis Anda.
                                </div>
                            </button>
                        </div>

                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Bagaimana Anda memastikan kualitas proyek?</h3>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    Kami mengikuti praktik terbaik industri dan memiliki proses jaminan kualitas yang ketat. Ini termasuk review kode, pengujian otomatis, dan beberapa tahap pengujian sebelum rilis.
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Process -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Proses Kerja</h2>
                    <div class="space-y-6">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Bagaimana proses pengembangan proyek?</h3>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    Proses kami dimulai dengan konsultasi mendalam untuk memahami kebutuhan Anda. Kemudian kami membuat rencana proyek, desain, pengembangan, pengujian, dan akhirnya peluncuran. Kami menerapkan metodologi agile untuk memastikan fleksibilitas dan komunikasi yang baik.
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Support -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">Dukungan & Pemeliharaan</h2>
                    <div class="space-y-6">
                        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
                            <button class="w-full text-left px-6 py-4 focus:outline-none">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-lg font-medium text-gray-900 dark:text-white">Bagaimana dengan dukungan setelah proyek selesai?</h3>
                                </div>
                                <div class="mt-2 text-gray-600 dark:text-gray-400">
                                    Kami menyediakan dukungan teknis berkelanjutan dan pemeliharaan untuk memastikan proyek Anda tetap berjalan optimal. Paket dukungan kami mencakup pemantauan, pembaruan keamanan, dan perbaikan bug.
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-primary-700 dark:bg-primary-800">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white dark:text-gray-100 sm:text-4xl">
                <span class="block">Masih punya pertanyaan?</span>
                <span class="block">Hubungi kami langsung.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-primary-200 dark:text-primary-300">
                Tim kami siap membantu menjawab semua pertanyaan Anda.
            </p>
            <a href="{{ route('contact') }}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-primary-600 dark:text-primary-400 bg-white dark:bg-gray-800 hover:bg-primary-50 dark:hover:bg-gray-700 sm:w-auto">
                Hubungi Kami
            </a>
        </div>
    </div>
</x-app-layout>