// webpack.mix.js
// Jul-13-2021 Shrinkray

let mix = require('laravel-mix');
 const { CleanWebpackPlugin } = require("clean-webpack-plugin");

mix
    .disableNotifications()
    .js('js/custom-scripts.js', 'dist')
    .sass('scss/byways-custom.scss', 'css/byways-custom.css')
    .postCss('css/child-responsive-styles.css', 'dist/child-responsive-styles.css')
    .postCss('css/child-styles.css', 'dist/child-styles.css')
    .postCss('css/byways-custom.css', 'dist/byways-custom.css')
    .options({
        postCss :[
            require('postcss-custom-properties'),
            require('autoprefixer')
        ],
        autoprefixer: {remove: false},
    })
    .sourceMaps()
    .browserSync({proxy: 'http://localhost:10048/new-york/'})
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