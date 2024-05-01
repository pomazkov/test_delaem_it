import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css',
                'resources/css/lib/animation_big.css',
                'resources/css/lib/jquery.fancybox.css',
                'resources/css/lib/nice-select.css',
                'resources/css/lib/swiper-bundle.css',
                'resources/css/styles.min.css',
                'resources/js/app.js',
                'resources/js/jquery-3.4.1.min.js',
                'resources/js/lib/jquery.fancybox.js',
                'resources/js/lib/wow.js',
                'resources/js/lib/jquery.arcticmodal.js',
                'resources/js/lib/jquery.maskedinput.min.js',
                'resources/js/lib/jquery.nice-select.js',
                'resources/js/lib/swiper-bundle.js',
                'resources/js/main.min.js',],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build',
        emptyOutDir: true,
    },
});
