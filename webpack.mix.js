// webpack.mix.js

let mix = require('laravel-mix');
/* const tailwindcss = require('tailwindcss'); */
require('laravel-mix-tailwind');

if (mix.inProduction()) {
    OutputDir = 'dist';
    JsOutputDir = 'js';
    CssOutputDir = 'css';
    //IncOutputDir = 'dist/partials';
    //ImgOutputDir = 'dist/images';
    //FontOutputDir = 'dist/fonts';
} else {
    OutputDir = '';
    JsOutputDir = 'js';
    CssOutputDir = 'css';
    //IncOutputDir = 'partials';
    //ImgOutputDir = 'images';
    //FontOutputDir = 'fonts';
}

//mix.copyDirectory('src/fonts', FontOutputDir);
//mix.copyDirectory('src/images', ImgOutputDir);
//mix.copyDirectory('src/partials', IncOutputDir);
//mix.copy('src/*.php', OutputDir);

mix.js(['src/js/default.js'], JsOutputDir)
    .sass('src/scss/style.scss', CssOutputDir)
    .tailwind()
    .options({
        processCssUrls: false
    })
    .browserSync({
        proxy: 'http://tailwind-base.test', //virtual host from MAMP MacOS or Laragon Win11
        files: [
            OutputDir+'css/style.css',  // Generated .css file
            OutputDir+'js/default.js',    // Generated .js file
            OutputDir+'*.php',
            OutputDir+'partials/*.php'
            // =====================================================================
            // You probably need only one of the below lines, depending
            // on which platform this project is being built upon.
            // =====================================================================
        ]
    });