/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily : {
        Merriweather : 'Merriweather Sans',
        Basic : 'Basic',
        YuseiMagic : 'Yusei Magic',
        Galdeano : 'Galdeano',
        Source_Serif_Pro : 'Source Serif Pro'
      },
      screens : {
        'xs' : {max : '576px'}
      }
    },
  },
  plugins: [],
}
