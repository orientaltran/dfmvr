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

mix.js('resources/assets/app/js/app.js', 'public/assets/app/js')
   .sass('resources/assets/app/sass/app.scss', 'public/assets/app/css');

mix.copy('./resources/assets/admin', 'public/assets/admin', false);
// mix.copy('./resources/assets/frontend_example', 'public/assets/frontend_example', false);

mix.copy('./resources/assets/frontend', 'public/frontend', false);
