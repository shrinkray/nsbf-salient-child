// tailwind.config.js
module.exports = {
    purge: [
        './page-templates/partials/**.php',
        './js/custom-scripts.js',
        'single-national_byway.php',
        'single-state-byways.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {},
    plugins: [],
}