import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    build: {
        outDir: 'public',  // Specify your output directory (e.g., 'dist' or 'public')
        assetsDir: 'assets', // Optionally specify a subdirectory for assets
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
