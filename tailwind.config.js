const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
   theme: {
      extend: {
         minWidth: {
            '3xl': '48rem',
            '4xl': '56rem'
         },
         minHeight: {
            '3xl': '48rem',
            '4xl': '56rem'
         },
         fontFamily: {
            sans: ['Inter var', ...defaultTheme.fontFamily.sans],
         },
         colors: {
            'bunker': {
               100: '#E8E8E8',
               200: '#C4C5C7',
               300: '#A1A2A5',
               400: '#5B5C61',
               450: '#1C1E26',
               500: '#14161D',
               600: '#12141A',
               700: '#0C0D11',
               800: '#090A0D',
               900: '#060709',
            },
            'coral': {
               100: '#FEF1ED',
               200: '#FCDBD1',
               300: '#FAC5B5',
               400: '#F79A7E',
               500: '#F36F46',
               600: '#DB643F',
               700: '#92432A',
               800: '#6D3220',
               900: '#492115',
            },
         },
         linearGradientColors: {
            'coral': ['#CB6442', '#FAAA5E'],
            'fade': ['#14161D', 'transparent']
         },
         inset: {
            '-80': '-20rem',
         }
      },
   },
   variants: {
      linearGradients: ['hover', 'responsive'],
   },
   purge: {
      content: [
         './app/**/*.php',
         './resources/**/*.html',
         './resources/**/*.js',
         './resources/**/*.jsx',
         './resources/**/*.ts',
         './resources/**/*.tsx',
         './resources/**/*.php',
         './resources/**/*.vue',
         './resources/**/*.twig',
      ],
      options: {
         defaultExtractor: (content) => content.match(/[\w-/.:]+(?<!:)/g) || [],
         whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
      },
   },
   plugins: [
      require('@tailwindcss/custom-forms'),
      require('@tailwindcss/ui'),
      require('tailwindcss-gradients'),
   ],
};
