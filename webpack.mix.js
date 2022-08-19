// webpack.mix.js
// Jul-22-2021 Shrinkray

const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
let autoprefixer;
autoprefixer = require("autoprefixer");
const  { CleanWebpackPlugin }  = require('clean-webpack-plugin');
let CopyPlugin;
CopyPlugin = require('copy-webpack-plugin');


mix
   // .disableNotifications()
    .js('js/custom-scripts.js', 'dist')
    .sass('scss/main.scss', 'dist', {}, [
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .sourceMaps()
    .browserSync({
        proxy: 'http://localhost:10051/colorado/',
        port: '10051'
        })
    .webpackConfig({
            plugins: [
                new CleanWebpackPlugin({
                    // Simulate the removal of files
                    dry: true,
                    // Write Logs to Console
                    verbose: false,
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
