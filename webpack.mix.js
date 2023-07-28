const mix = require('laravel-mix');

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

mix.js('public/assets/src/js/vue/app.js', 'public/assets/js')
    .vue()
    .js('public/assets/src/js/loader.js', 'public/assets/js')
    .js('public/assets/src/js/counter.js', 'public/assets/js')
    .js('public/assets/src/js/main.js', 'public/assets/js')
    .js('public/assets/src/js/vue/change.js', 'public/assets/js')
    .sass('public/assets/sass/app.scss', 'public/assets/css')
    .sass('public/assets/sass/style.scss', 'public/assets/css')