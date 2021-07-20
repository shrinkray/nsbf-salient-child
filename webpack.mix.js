// webpack.mix.js
// Jul-13-2021 Shrinkray

const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
let autoprefixer;
autoprefixer = require("autoprefixer");
const  { CleanWebpackPlugin }  = require('clean-webpack-plugin');
let CopyPlugin;
CopyPlugin = require('copy-webpack-plugin');
require('laravel-mix-purgecss');

mix
   // .disableNotifications()
    .js('js/custom-scripts.js', 'dist')
    .sourceMaps()
    .postCss("vendor/temp/main.css", "dist", [
        tailwindcss(),
    ])
    .sass('scss/main.scss', 'vendor/temp/')
    .browserSync({proxy: 'http://localhost:10048/new-york/'})
    .webpackConfig({
            plugins: [
                new CleanWebpackPlugin({
                    // Simulate the removal of files
                    dry: true,
                    // Write Logs to Console
                    verbose: true,
                    // Automatically remove all unused webpack assets on rebuild
                    cleanStaleWebpackAssets: true,
                    // Do not allow removal of current webpack assets
                    protectWebpackAssets: true,
                    cleanOnceBeforeBuildPatterns: ['dist/*', '!static-files*'],
                }),
                new CopyPlugin({
                    patterns: [
                        { from: 'css/child-responsive-styles.css', to: 'dist' },
                        { from: 'css/child-styles.css', to: 'dist' },
                    ],
                }),
            ]
        }
    );