const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/login.js', 'public/js') 
   .css('resources/css/app.css', 'public/css')
   .css('resources/css/login.css', 'public/css'); 
