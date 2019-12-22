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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles(['resources/agency/css/agency.css',
            'resources/agency/css/agency.min.css',
            'resources/agency/vendor/bootstrap/css/bootstrap.css',
            'resources/agency/vendor/bootstrap/css/bootstrap.min.css',
            'resources/agency/vendor/bootstrap/css/bootstrap-grid.css',
            'resources/agency/vendor/bootstrap/css/bootstrap-reboot.css'], 'public/css/all.css')
    .scripts([  'resources/agency/vendor/jquery/jquery.min.js',
                'resources/agency/vendor/bootstrap/js/bootstrap.bundle.min.js',
                'resources/agency/js/agency.js'], 'public/js/all.js');

mix.styles(['resources/backend/css/dropzone.min.css'], 'public/css/dropzone.min.css')
    .scripts(['resources/backend/js/dropzone.min.js'], 'public/js/dropzone.min.js');
