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
    	'resources/assets/css/*.css'
    	],'public/assets/css/vocomfest.css'
    );
    mix.scripts([
    	'jquery.1.11.1-min.js',
    	'bootstrap.min.js',
    	'modernizr.js',
    	'jquery.nicescroll.min.js',
    	'loader.js',
    	'wow.min.js',
        'owl.carousel.min.js'], 'public/assets/js/vocomfest.js'
    );
    mix.imagemin();
});
