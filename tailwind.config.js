const colors = require('tailwindcss/colors');
const plugin = require('tailwindcss/plugin');

module.exports = {
  purge: [
    './src/**/*.html',
    './src/*.php',
    './src/**/*.php'
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {      
    container: {
      center: true,
    },
    extend: {
      fontSize: {
        'none': '0px'
      },
      fontFamily: {
        'sans': ['Poppins', 'system-ui', 'Arial', 'sans-serif'],
        // 'cursive': ['Patrick Hand', 'cursive']
      },
      colors: {
        warmGray: {
          800: "#39311C",
        }
      },
      backgroundImage: {
        'hero-bg' : "url(../images/banners/hero-bg.jpg)",
      }
    },    
  },
  variants: {
    extend: {
      // borderRadius: ['hover'],
    },
  },
  plugins: [
    plugin(function ({ addBase, addComponents, addUtilities, theme }) {
      addBase({
        // 'h1': {
        //   fontFamily: theme('fontFamily.cursive'),
        //   fontSize: theme('fontSize.7xl'),
        //   fontWeight: theme('fontWeight.bold'),
        //   lineHeight: theme('lineHeight.none'),
        //   letterSpacing: 0,
        //   '@media (max-width: 1280px)': {
        //     fontSize: theme('fontSize.5xl'),
        //   }
        // },
        // 'h2': {
        //   fontFamily: theme('fontFamily.cursive'),
        //   fontSize: theme('fontSize.5xl'),
        //   fontWeight: theme('fontWeight.bold'),
        //   lineHeight: theme('lineHeight.tight'),
        //   '@media (max-width: 640px)': {
        //     fontSize: theme('fontSize.3xl'),
        //   }
        // },
        // 'h3': {
        //   fontFamily: theme('fontFamily.cursive'),
        //   fontSize: theme('fontSize.3xl'),
        //   fontWeight: theme('fontWeight.medium'),
        // },
        // 'h4': {
        //   fontFamily: theme('fontFamily.cursive'),
        //   fontSize: theme('fontSize.2xl'),
        //   fontWeight: theme('fontWeight.extrabold'),
        // },
        // 'h5': {
        //   fontSize: theme('fontSize.base'),
        //   fontWeight: theme('fontWeight.normal'),
        // },
        // 'h5 > b': {
        //   fontFamily: theme('fontFamily.cursive'),
        //   fontWeight: theme('fontWeight.extrabold'),
        // },
        // 'p': {
        //   fontSize: theme('fontSize.base'),
        //   fontWeight: theme('fontWeight.normal'),
        // }
      }),
      addComponents({
        // '.home-slider-item-1': {
        //   background: 'fixed center / cover no-repeat url(../images_cms/home/home-banner.jpg)'
        // },
      }),
      addUtilities({
        '.h-minus-header': {
          height: 'calc(100vh - 183px)' // could set 100vh and 60% to a dyanmic value here?
        }
      })
    })
  ]
}

