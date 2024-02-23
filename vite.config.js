import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        // Compila il File SCSS
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    resolve: {
        alias: {
            //  # alias per accedere a /resources/ attraverso ~resources
            '~resources': '/resources/'
        }
    },


});


