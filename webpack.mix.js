let mix = require('laravel-mix');

mix.sass('resources/assets/sass/site.scss', 'public/css');

mix.js('resources/assets/js/admin.js', 'public/js')
    .sass('resources/assets/sass/admin.scss', 'public/css');

mix.js('resources/assets/js/logs.js', 'public/js')
    .sass('resources/assets/sass/logs.scss', 'public/css');

mix.js('resources/assets/js/error.js', 'public/js')
    .sass('resources/assets/sass/error.scss', 'public/css');