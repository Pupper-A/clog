// webpack.mix.js

let mix = require('laravel-mix');

mix
.js('resources/js/app.js', 'build/js/app.js')
.js('node_modules/semantic-ui/dist/semantic.js', 'build/js/app.js')
.css('node_modules/semantic-ui/dist/semantic.css', 'build/css/app.css')
.setPublicPath('public');
