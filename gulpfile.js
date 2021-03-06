var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
       .scripts([
		'vendor/jquery-1.11.3.min.js',
       		'vendor/sweetalert-dev.js',
		'vendor/bootstrap.min.js'
       	], './public/js/vendor.js')
       .styles([
       		'vendor/sweetalert.css'
       	], './public/css/vendor.css')
});
