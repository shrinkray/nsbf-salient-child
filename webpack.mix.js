// webpack.mix.js
// April 2024 -- Shrinkray

const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
let autoprefixer;
autoprefixer = require("autoprefixer");
const { CleanWebpackPlugin } = require("clean-webpack-plugin");
const fs = require("fs");
const path = require("path");

mix
  .js("js/custom-scripts.js", "dist")
  .sass("scss/byways.scss", "dist", {
    implementation: require("sass"),
  })
  .options({
    processCssUrls: false,
    postCss: [tailwindcss(), require("autoprefixer")],
  })
  // You can chain the .css() here as you need
  //.css("css/child-responsive-styles.css", "dist")
  //.css("css/child-styles.css", "dist")

  // merge the original stylesheets
  .styles(
    ["css/child-responsive-styles.css", "css/child-styles.css"],
    "dist/merged-styles.css",
  )

  // This is unnecessary now, leaving as a reference 8/20/2024
  //.then(() => {
  // Delete source CSS files after merging

  // const filesToDelete = [
  // "dist/child-responsive-styles.css",
  // "dist/child-styles.css",
  // ];

  // filesToDelete.forEach((file) => {
  //   fs.unlink(path.resolve(__dirname, file), (err) => {
  //     if (err) throw err;
  //     console.log(`Deleted ${file}`);
  //   });
  // });
  //})

  // Add more configurations if necessary
  .sourceMaps(!mix.inProduction())

  .webpackConfig({
    plugins: [
      new CleanWebpackPlugin({
        // Simulate the removal of files
        dry: false,
        // Write Logs to Console
        verbose: false,
        // Automatically remove all unused webpack assets on rebuild
        cleanStaleWebpackAssets: true,
        // Do not allow removal of current webpack assets
        protectWebpackAssets: true,
        cleanOnceBeforeBuildPatterns: ["dist/*", "!static-files*"],
      }),
    ],
  });
