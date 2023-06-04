/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      transparent: 'transparent',
      current: 'currentColor',
      'white': '#ffffff',
      'purple': '#3f3cbb',
      'midnight': '#121063',
      'metal': '#565584',
      'tahiti': '#3ab7bf',
      'silver': '#ecebff',
      'bubble-gum': '#ff77e9',
      'bermuda': '#1D1628',
      'monkey': '#262626',
      'bermuda-tua': '#130F1B',
      'ungu-janda': '#392C4F',
      'kolom' : '#404040',
      'abu-terang' : '#777777',
      'login' : '#5D5FEF',
      'register' : '#E25286',
      'temu': '#52E2C0',
    },
    extend: {},
  },
  plugins: [
    require('flowbite/plugin')
  ],

}


