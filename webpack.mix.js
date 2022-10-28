// webpack.mix.js

let mix = require('laravel-mix');
/* const tailwindcss = require('tailwindcss'); */
require('laravel-mix-tailwind');

if (mix.inProduction()) {
    OutputDir = 'dist';
    IncOutputDir = 'dist/includes';
    JsOutputDir = 'dist/js';
    CssOutputDir = 'dist/css';
    ImgOutputDir = 'dist/images';
    FontOutputDir = 'dist/fonts';
} else {
    OutputDir = '';
    IncOutputDir = 'includes';
    JsOutputDir = 'js';
    CssOutputDir = 'css';
    ImgOutputDir = 'images';
    FontOutputDir = 'fonts';
}

mix.copyDirectory('src/fonts', FontOutputDir);
mix.copyDirectory('src/images', ImgOutputDir);
mix.copyDirectory('src/includes', IncOutputDir);
mix.copy('src/*.php', OutputDir);

mix.js(['src/js/default.js'], JsOutputDir)
    .sass('src/scss/style.scss', CssOutputDir)
    .tailwind()
    .options({
        processCssUrls: false
    })
    .browserSync({
        proxy: 'http://localhost:8888/tailwind-base',
        files: [
            OutputDir+'css/style.css',  // Generated .css file
            OutputDir+'js/default.js',    // Generated .js file
            OutputDir+'*.php',
            OutputDir+'includes/*.php'
            // =====================================================================
            // You probably need only one of the below lines, depending
            // on which platform this project is being built upon.
            // =====================================================================
        ]
    });