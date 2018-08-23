let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
	'resources/assets/js/jquery.js', 
	'resources/assets/js/jquery.form.js', 
	'resources/assets/js/jquery.validate.js', 
	'resources/assets/js/owl.carousel.js', 
	'resources/assets/js/bootstrap.js', 
	'resources/assets/js/wow.js', 
	'resources/assets/js/slider.js', 
	'resources/assets/js/jquery.fancybox.js', 
	'resources/assets/js/main.js',
	],  'public/js/app.js')
	.styles([
		'resources/assets/css/bootstrap.css',
		'resources/assets/css/ionicons.min.css', 
		'resources/assets/css/animate.css', 
		'resources/assets/css/slider.css', 
		'resources/assets/css/owl.carousel.css', 
		'resources/assets/css/owl.theme.css', 
		'resources/assets/css/jquery.fancybox.css', 
		'resources/assets/css/style.css', 
		], 'public/css/app.css').browserSync({
			open: 'false',
			proxy: 'http://portafolioKris.test',
			browser: 'Google chrome',
		});

