const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |datatables-theme
 */
const Public = 'public/';
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .styles([
        Public + 'assets/css/bootstrap.min.css',
        Public + 'assets/css/font-awesome.min.css',
        Public + 'assets/css/prettyPhoto.css',
        Public + 'assets/css/animate.min.css',
        Public + 'assets/css/main.css',
        Public + 'assets/css/responsive.css',
    ], Public + 'css/site/site.css')
    .combine(
        [
            Public + 'assets/js/jquery.min.js',
            Public + 'assets/js/lazyload.min.js',
            Public + 'assets/js/site.js',
            Public + 'assets/js/bootstrap.min.js',
            Public + 'assets/js/jquery.prettyPhoto.js',
            Public + 'assets/js/jquery.isotope.min.js',
            Public + 'assets/js/main.js',
            Public + 'assets/js/wow.min.js',
        ], Public + 'js/site/site.js')
    .version();
