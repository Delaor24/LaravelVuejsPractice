const mix = require('laravel-mix');
mix.scripts([
    "resources/js/frontend/assets/js/main.js",
    "resources/js/frontend/assets/js/SmoothScroll.min.js",
], "public/frontend/js/app.js");


// COPY FILES / DIRECTORY
mix.copyDirectory('resources/js/frontend/assets/images', 'public/frontend/images')
    .copyDirectory('resources/js/frontend/assets/fonts', 'public/frontend/fonts')
    .copyDirectory('resources/js/frontend/assets/font-awesome', 'public/frontend/font-awesome');


mix.styles([
    "resources/js/frontend/assets/css/style.css",
    "resources/js/frontend/assets/css/font-awesome.css",
], "public/frontend/css/app.css");


mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/frontend.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
