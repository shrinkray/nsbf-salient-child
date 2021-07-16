// tailwind.config.js
module.exports = {
    purge: [
        './page-templates/partials/*.php',
        'single-national-byway-page.php',
        'single-state-byway-page.php',
        'single-state-page.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {},
    },
    variants: {},
    plugins: [],
}