const mix = require('laravel-mix');

require('laravel-mix-simple-image-processing')

mix.imgs({
    source: 'resources/images',
    destination: 'public/images',
    // ... other optional parameters
});



mix.disableNotifications()

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);
