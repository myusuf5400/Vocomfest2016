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
// require('laravel-elixir-spritesmith');

// elixir(function(mix) {
//     mix.spritesmith('resources/assets/img', {
//         imgOutput: 'public/assets/img',
//         cssOutput: 'resources/assets/css'
//     });
// });

elixir(function(mix) {
    mix.styles(['comingsoon.css'], 'public/assets/css/comingsoon.css');
});
