<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))" :class="{ 'dark': darkMode }">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Primary Meta Tags -->
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>
    <meta name="title" content="{{ $title ?? config('app.name', 'Laravel') }}">
    <meta name="description" content="{{ $description ?? 'Professional web development and digital solutions for your business. We create custom websites, web applications, and digital experiences that drive growth.' }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? config('app.name', 'Laravel') }}">
    <meta property="og:description" content="{{ $description ?? 'Professional web development and digital solutions for your business. We create custom websites, web applications, and digital experiences that drive growth.' }}">
    <meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? config('app.name', 'Laravel') }}">
    <meta property="twitter:description" content="{{ $description ?? 'Professional web development and digital solutions for your business. We create custom websites, web applications, and digital experiences that drive growth.' }}">
    <meta property="twitter:image" content="{{ $ogImage ?? asset('images/og-image.jpg') }}">

    <!-- Schema.org markup -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ config('app.name', 'Laravel') }}",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('images/logo.png') }}",
            "description": "Professional web development and digital solutions for your business",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "ID",
                "addressLocality": "Your City"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+62-xxx-xxxx-xxxx",
                "contactType": "customer service",
                "email": "contact@yourdomain.com"
            },
            "sameAs": [
                "https://www.facebook.com/yourcompany",
                "https://twitter.com/yourcompany",
                "https://www.linkedin.com/company/yourcompany",
                "https://www.instagram.com/yourcompany"
            ]
        }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Scripts -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // Animate number counters
        document.addEventListener('DOMContentLoaded', function() {
            const counters = document.querySelectorAll('[data-count]');

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-count'));
                const duration = 2000; // 2 seconds
                const step = target / (duration / 16); // 60fps
                let current = 0;

                const updateCounter = () => {
                    current += step;
                    if (current < target) {
                        counter.textContent = Math.floor(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target + '+';
                    }
                };

                const observer = new IntersectionObserver((entries) => {
                    if (entries[0].isIntersecting) {
                        updateCounter();
                        observer.unobserve(counter);
                    }
                });

                observer.observe(counter);
            });
        });
    </script>

    @livewireScripts
</body>

</html>