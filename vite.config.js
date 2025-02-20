import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/sass/blog.scss', 'resources/sass/dashboard.scss', 'resources/sass/faq.scss', 'resources/sass/index.scss', 'resources/sass/profile.scss', 'resources/sass/style.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
