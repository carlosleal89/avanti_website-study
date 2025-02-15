/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./**/*.php"],
  theme: {
    extend: {
      colors: {
        primary: '#1D242D',
        secondary: 'rgb(16 20 25 / <alpha-value>);',
        grayishblue: '#979A9E',
        royalblue: 'rgb(0 92 255 / <alpha-value>)',
        lightblue: 'rgb(230 239 255 / <alpha-value>)',
        darkishgray: 'rgb(77 77 87 / <alpha-value>)',
        silverlight: 'rgb(232 233 234 / <alpha-value>)',
        darkblack: 'rgb(21 24 27 / <alpha-value>)',
        slategray: 'rgb(104 108 114 / <alpha-value>)',
        lightgray: 'rgb(74 80 87 / <alpha-value>)',
      }
    },
  },
  plugins: [
    require('@tailwindcss/line-clamp')
  ],
}

