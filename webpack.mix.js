let mix = require('laravel-mix');
mix.js('resources/js/app.js', 'dist/').sass('resources/scss/app.scss', 'dist/').sourceMaps();
