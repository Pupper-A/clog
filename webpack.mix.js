// webpack.mix.js

let mix = require('laravel-mix');

mix
.js('resources/js/app.js', 'js/app.js')
.js('node_modules/semantic-ui/dist/semantic.js', 'js/app.js')
.css('node_modules/semantic-ui/dist/semantic.css', 'css/app.css')
.setPublicPath('public/build');
