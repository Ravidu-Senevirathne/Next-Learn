import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './src/**/*.{html,js}', 
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: {
          blue: '#2F80ED',
          lightBlue: '#56CCF2',
        },
        secondary: {
          green: '#27AE60',
          yellow: '#F2C94C',
        },
        neutral: {
          darkGray: '#4F4F4F',
          lightGray: '#E0E0E0',
          white: '#F9F9F9', //background color
        },
        accent: {
          red: '#EB5757',
          purple: '#BB6BD9',
        },
        text: {
          primary: '#4F4F4F',
          secondary: '#828282',
        },
      },
      keyframes: {
        'fade-in-left': {
          '0%': { opacity: '0', transform: 'translateX(-20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        },
        'fade-in-right': {
          '0%': { opacity: '0', transform: 'translateX(20px)' },
          '100%': { opacity: '1', transform: 'translateX(0)' },
        }
      },
      animation: {
        'fade-in-left': 'fade-in-left 1s ease-out',
        'fade-in-right': 'fade-in-right 1s ease-out',
      }
    },
  },

  plugins: [forms],
};
