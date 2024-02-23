let mix = require('laravel-mix');
mix.disableSuccessNotifications();

mix.js('resources/js/app.js', 'public/assets/js/')
    .sass('resources/css/app.css', 'public/assets/css/');

if (mix.inProduction()) {
    mix.version();
}