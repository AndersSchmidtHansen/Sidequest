var elixir  = require('laravel-elixir'),
    gulp    = require('gulp'),
    sassdoc = require('sassdoc');

require('laravel-elixir-browser-sync');

/*
 |--------------------------------------------------------------------------
 | Elixir Custom Ingredients
 |--------------------------------------------------------------------------
 */

  // Run SassDoc - Document your Sass in a nice way
  elixir.extend('sassdoc', function(){
    gulp.task('sassdoc', function(){
      var options = { dest: 'public/docs/sass' };
      return gulp.src('resources/assets/sass/**/*.scss').pipe(sassdoc(options));
    });
    this.registerWatcher('sassdoc', '**/*.scss');
    return this.queueTask('sassdoc');
  });

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
      .sass('app.scss')
      .sassdoc()
      .coffee()
      .browserSync([
        'app/**/*',
        'public/**/*',
        'resources/views/**/*'
      ], {
        proxy: 'sidequest.app'
      });
  });