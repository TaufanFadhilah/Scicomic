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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('node_modules/materialize-css/dist/js/materialize.min.js','public/js')
    .js('node_modules/materialize-css/js/hammer.min.js','public/js')
    .js('node_modules/materialize-css/js/jquery.easing.1.4.js','public/js')
    .js('node_modules/materialize-css/js/jquery.hammer.js','public/js')
    .sass('node_modules/materialize-css/sass/materialize.scss','public/css')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copyDirectory('node_modules/materialize-css/dist/fonts','public/fonts');
