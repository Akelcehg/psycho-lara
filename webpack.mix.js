const {mix} = require('laravel-mix');
const gulp = require('gulp');
const Task = mix.Task;
//const uglify = require('gulp-uglify');

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

//mix.browserSync('psycho-lara');

mix.copy('resources/assets/js/libs/TweenMax.min.js', 'public/js/libs');
mix.copy('resources/assets/js/libs/retina.min.js', 'public/js/libs');
mix.copy('resources/assets/js/libs/jquery-ui.min.js', 'public/js/libs');
mix.copy('resources/assets/js/libs/jquery.validate.min.js', 'public/js/libs');
mix.copy('resources/assets/js/libs/jquery.min.js', 'public/js/libs');
mix.copy('resources/assets/js/libs/jquery.isotope.min.js', 'public/js/libs');
mix.copy('resources/assets/js/libs/jquery.form.min.js', 'public/js/libs');
mix.copy('resources/assets/js/libs/jflickrfeed.min.js', 'public/js/libs');
mix.copy('resources/assets/js/libs/bg-video/jquery.vimeo.api.min.js', 'public/js/libs');
mix.copy('resources/assets/js/libs/rs-plugin', 'public/js/libs/rs-plugin');

mix.copy('resources/assets/sass/fi', 'public/css/fi');

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/libs/select2.js', 'public/js/libs')
    .js('resources/assets/js/libs/owl.carousel.js', 'public/js/libs')
    .js('resources/assets/js/libs/main.js', 'public/js/libs');
//.js('resources/assets/js/libs/jquery.fancybox-media.js', 'public/js/libs')
//.js('resources/assets/js/libs/jquery.fancybox.pack.js', 'public/js/libs')
//    .js('resources/assets/js/libs/bg-video/cws_YT_bg.js', 'public/js/libs')
//    .js('resources/assets/js/libs/bg-video/cws_self_vimeo_bg.js', 'public/js/libs');


mix.sass('resources/assets/sass/main.scss', 'public/css')
    .sass('resources/assets/sass/animate.scss', 'public/css')
    .sass('resources/assets/sass/font-awesome.scss', 'public/css')
    .sass('resources/assets/sass/jquery.fancybox.scss', 'public/css')
    .sass('resources/assets/sass/owl.carousel.scss', 'public/css')
    .sass('resources/assets/sass/select2.scss', 'public/css');