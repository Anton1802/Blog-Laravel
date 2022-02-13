const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/jquery.min.js', 'public/js');



mix.copy('resources/css/bootstrap.css', 'public/css')
      .copy('resources/js/slider.js', 'public/js');


mix.postCss('resources/css/style.css', 'public/css');

mix.copyDirectory('resources/images', 'public/images')
      .copyDirectory('resources/fonts', 'public/fonts')
       .copyDirectory('resources/slick', 'public/slick');
