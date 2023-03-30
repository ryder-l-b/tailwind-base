const colors = require('tailwindcss/colors');
const plugin = require('tailwindcss/plugin');

module.exports = {
  content: require('fast-glob').sync([
    './**/*.html',
    './*.php',
    './**/*.php'
  ]),
  darkMode: false, // or 'media' or 'class'
  theme: {      
    container: {
      center: true,
    },
    extend: {
      fontSize: {
        'none': '0px' //use class text-none
      },
      fontFamily: {
        'sans': ['Poppins', 'system-ui', 'Arial', 'sans-serif'], //use class font-sans
        // 'cursive': ['Patrick Hand', 'cursive']
      },
      colors: {
        warmGray: {
          800: "#39311C", //use class *-warmGray-800 i.e. text-warmGray-800
        }
      },
      backgroundImage: {
        'hero-bg' : "url(../images/banners/hero-bg.jpg)", //use class bg-hero-bg to apply this
      }
    },    
  },
  plugins: [
    plugin(function ({ addBase, addUtilities}) {
      addBase({
      }),
      addUtilities({
        '.h-minus-header': {
          height: 'calc(100vh - 150px)' // could set 100vh and px to a dynamic value here?
        }
      })
    })
  ]
}

