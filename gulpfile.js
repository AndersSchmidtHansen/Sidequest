var elixir = require('laravel-elixir');

require('laravel-elixir-browser-sync');

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
    mix
    .styles([
      '../assets/bower/fontawesome/css/font-awesome.min.css',
      '../assets/bower/bootstrap/dist/css/bootstrap.min.css',
    ], 'public/css/vendor.css')
    .scripts([
      '../assets/bower/jquery/dist/jquery.js',
      '../assets/bower/bootstrap/dist/js/bootstrap.js',
      '../assets/bower/jquery.payment/lib/jquery.payment.js'
    ], 'public/js/vendor.js' )    
    .sass('app.scss')
    .coffee()
    .browserSync([
      'app/**/*',
      'public/**/*',
      'resources/views/**/*'
    ], {
      proxy: 'sidequest.app'
    });
});
