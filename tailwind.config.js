/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily : {
        Merriweather : ['Merriweather Sans', 'sans-serif'],
        Basic : ['Basic', 'sans-serif'],
        YuseiMagic : ['Yusei Magic', 'sans-serif'],
        Galdeano : ['Galdeano', 'sans-serif'],
        Source_Serif_Pro : ['Source Serif Pro', 'serif'],
        Lobster_Two : ['Lobster Two', 'cursive'],
        Mussica_Swash : ['MussicaSwash', 'cursive'],
        SnowPuppet : ['Snow Puppet', 'cursive'],
      },
      screens : {
        'xs' : {max : '576px'}
      }
    },
  },
  plugins: [require("@tailwindcss/forms")],
}
