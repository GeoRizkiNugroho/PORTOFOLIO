import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css', // Tambahkan semua file CSS Anda
                'resources/js/main.js',    // Tambahkan semua file JS Anda
            ],
            refresh: true,
        }),
    ],
});
