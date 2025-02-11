import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: 'https://company-profile-production-69d6.up.railway.app/',
            protocol: 'https', // Ensure that HMR uses HTTPS
        },
    },
    base: '/build/', // Ensure that the base path for assets is set correctly
});