import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/results.css',
                'resources/css/workout-form.css',
                'resources/js/ion-validation.js',
                'resources/js/workout-form.js',
                'resources/js/results.js'
            ],
            refresh: true,
        }),
    ],
});
