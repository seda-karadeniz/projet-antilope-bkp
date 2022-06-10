const mix = require('laravel-mix');

mix .setPublicPath('./wp-content/themes/antilope/public')
    //.setResourceRoot("../")
    .copyDirectory('wp-content/themes/antilope/resources/fonts', 'wp-content/themes/antilope/public/fonts')
    .js('wp-content/themes/antilope/resources/js/script.js', 'wp-content/themes/antilope/public/js/')
    .sass('wp-content/themes/antilope/resources/sass/style.scss', 'wp-content/themes/antilope/public/css/')

