/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: '#1D242D',
        grayishblue: '#979A9E',
        royalblue: 'rgb(0 92 255 / <alpha-value>)'
      }
    },
  },
  plugins: [],
}

