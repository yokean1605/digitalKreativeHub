let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/assets/sass/frontend/app.scss', 'public/css/frontend.css')
    .sass('resources/assets/sass/backend/app.scss', 'public/css/backend.css')
    .styles('node_modules/dropzone/dist/dropzone.css', 'public/css/dropzone.css')
    .js('resources/assets/js/frontend/app.js', 'public/js/frontend.js')
    .js('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js')
    .js('node_modules/jquery.easing/jquery.easing.js', 'public/js/jquery.easing.js')
    // .js('node_modules/dropzone/dist/dropzone.js', 'public/js/dropzone.js')
    .js('resources/assets/js/frontend/parallax.js', 'public/js/parallax.js')
    .js([
        'resources/assets/js/backend/before.js',
        'resources/assets/js/backend/app.js',
        'resources/assets/js/backend/after.js'
    ], 'public/js/backend.js');
// mix.fonts('resources/assets/fonts', 'public/fonts');

if (mix.inProduction() || process.env.npm_lifecycle_event !== 'hot') {
    mix.version();
}
