var elixir = require('laravel-elixir');

require('laravel-elixir-imagemin');

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
// require('laravel-elixir-spritesmith');

// elixir(function(mix) {
//     mix.spritesmith('resources/assets/img', {
//         imgOutput: 'public/assets/img',
//         cssOutput: 'resources/assets/css'
//     });
// });

elixir.config.images = {
    folder: 'img',
    outputFolder: 'assets/img'
};


elixir(function(mix) {
    mix.styles([
    	'vocomfest.css',
        'timeline.css',
        'custom.css'],'public/assets/css/vocomfest.css'
    );
    mix.styles([
        'bootstrap.css',
        'custom-styles.css',
        'font-awesome.css',
        'dataTables.bootstrap.css'],'public/assets/css/admin.css'
    );
    mix.scripts([
        'jquery.js',
    	'vocomfest.js',
        'modernizr.js',
        'main.js'], 'public/assets/js/vocomfest.js'
    );
    mix.scripts([
        'jquery.js',
        'bootstrap.min.js',
        'jquery.metisMenu.js',
        'jquery.dataTables.js',
        'dataTables.bootstrap.js'], 'public/assets/js/admin.js'
    );
    mix.imagemin();
});
