var elixir = require('laravel-elixir');

require('laravel-elixir-browser-sync');
require('laravel-elixir-bower');

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
    .bower()  
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
