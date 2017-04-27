const {mix} = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js');

mix.sass('resources/assets/sass/main.scss', 'public/css')
    .sass('resources/assets/sass/animate.scss', 'public/css')
    .sass('resources/assets/sass/font-awesome.scss', 'public/css')
    .sass('resources/assets/sass/jquery.fancybox.scss', 'public/css')
    .sass('resources/assets/sass/owl.carousel.scss', 'public/css')
    .sass('resources/assets/sass/select2.scss', 'public/css');
