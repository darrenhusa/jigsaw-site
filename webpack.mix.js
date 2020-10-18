const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .jigsaw({
        watch: ['config.php', 'source/**/*.md', 'source/**/*.php', 'source/**/*.scss'],
    })
    .options({
        processCssUrls: false,
        postCss: [
            require('tailwindcss'),
        ],
    })
    .sourceMaps()
    .version();

mix.js('source/_assets/js/bar-chart.js', 'js')
   .js('source/_assets/js/bar-chart-grouped.js', 'js')
   .js('source/_assets/js/line.js', 'js')
   .js('source/_assets/js/pie-chart.js', 'js');


// mix.scripts([
//     'source/_assets/js/bar-chart-grouped.js',
//     'source/_assets/js/my-chart.js',
//     'source/_assets/js/line.js',
// ],  'source/assests/build/js/charts.js');
