// webpack.mix.js
// Jul-13-2021 Shrinkray

let mix = require('laravel-mix');
 const { CleanWebpackPlugin } = require("clean-webpack-plugin");

mix.js('js/custom-scripts.js', 'dist').setPublicPath('dist')
    .sass('scss/byways-custom.scss', 'dist')
    .postCss('css/child-responsive-styles.css', 'dist')
    .postCss('css/child-styles.css', 'dist')
    .options({
        postCss :[
            require('postcss-custom-properties'),
            require('autoprefixer')
        ],
        autoprefixer: {remove: false},
    })
    .sourceMaps()
    .browserSync({proxy: 'http://localhost:10048/'})
    .webpackConfig({
            plugins: [
                new CleanWebpackPlugin({
                    // Simulate the removal of files
                    // default: false
                    dry: true,

                    // Write Logs to Console
                    // (Always enabled when dry is true)
                    // default: false
                    verbose: true,

                    // Automatically remove all unused webpack assets on rebuild
                    // default: true
                    cleanStaleWebpackAssets: true,

                    // Do not allow removal of current webpack assets
                    // default: true
                    protectWebpackAssets: true,
                    cleanOnceBeforeBuildPatterns: ['dist/*', '!static-files*'],
                }),
            ]
        }
    );