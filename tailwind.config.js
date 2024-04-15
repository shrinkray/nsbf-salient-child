// tailwind.config.js
module.exports = {
  purge: {
    //enabled: process.env.NODE_ENV === 'production',
    //enabled: process.env.NODE_ENV === 'development',
    enabled: true,
    content: [
      "./page-templates/**/*.php",
      "single-national_byway.php",
      "single-state_byway.php",
      "single-state.php",
      "./js/*.js",
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        transparent: "transparent",
        current: "currentColor",
        primary: {
          forestgreen: "#02AE4B",
          mangotango: "#D5641C",
          goldenrod: "#DBA510",
          steelblue: "#006B94",
          dimgray: "#4B4145",
          outerspace: "#444444",
        },
      },
    },
  },
  variants: {},
  plugins: [],
};
