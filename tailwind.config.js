/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      width: {
        '100': '700px'
      },
      height: {
        '100': '700'
      },
      margin: {
        '100': '37rem'
      },
    },
    colors: {
      biru: '#042542',
      kuning: '#F97300',
      mustard: '#FF9800',
      biru_laut: '#09E9F8',
      biru_awan: '#00FFF0',
      merah_muda: '#E91E63',
      blur: '#042542',
      khaki: '#FBF3D5',
      abu_abu: '#505050',
    },
    fontFamily: {
      'poppins': '"Poppins", sans-serif'
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}