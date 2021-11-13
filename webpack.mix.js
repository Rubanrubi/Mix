const mix = require('laravel-mix');

require('laravel-mix-purgecss');

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

mix.js('resources/js/app.js', 'public/js')

    // Converts Sass to plain css
    .sass('resources/scss/app.scss', 'public/css')

    // Remove unused css Autodetect
    .purgeCss({
        enabled: true,
    })

    // Copy Image from resources to public while compiling
    .copy('resources/assets/img/','public/assets/img/')

    // Copy Fonts from resources to public while compiling
    .copy('resources/assets/fonts/','public/assets/fonts/')

    // Merge Multiple plain css to single css file in minified manner
    .styles([
        'resources/assets/css/app.css',
        'resources/assets/css/core.css'
    ], 'public/assets/css/all.css')

    // Merge Multiple plain js to single js file in minified manner
    .scripts([
    'resources/assets/js/app.js',
    'resources/assets/js/core.js'], 'public/assets/js/all.js')
    .sourceMaps()

    // Code changes will automatically reflect in browser loads when laravel mix buid successfully
    .browserSync('http://localhost:8000/')

    // In production added version for security
    if (mix.inProduction()) {
        mix.version();
    }


