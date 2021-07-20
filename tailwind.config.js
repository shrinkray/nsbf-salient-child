// tailwind.config.js
module.exports = {
  purge: {
    enabled: process.env.NODE_ENV === 'production',
    enabled: process.env.NODE_ENV === 'development',
    enabled: true,
    content: [
      './page-templates/**/*.php',
      'single-national_byway.php',
      'single-state_byway.php',
      'single-state.php',
      './js/*.js',
      './dist/*.js',
    ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
       extend: {},
  },
  variants: {},
  plugins: [],
}