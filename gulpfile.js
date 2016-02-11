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
        'custom.css'
    	],'public/assets/css/vocomfest.css'
    );
    mix.scripts([
    	'vocomfest.js',
        'modernizr.js',
        'main.js'], 'public/assets/js/vocomfest.js'
    );
    mix.imagemin();
});
