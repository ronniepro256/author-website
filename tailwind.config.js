import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
import aspectRatio from '@tailwindcss/aspect-ratio';
import lineClamp from '@tailwindcss/line-clamp';
import containerQueries from '@tailwindcss/container-queries';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
    './resources/js/**/*.js',
    './resources/css/**/*.css',
    './resources/**/*.php',
    './resources/**/*.html',
    './resources/**/*.jsx',
    './resources/**/*.ts',
    './resources/**/*.tsx',
    './resources/**/*.md',
    './resources/**/*.mdx',
    './resources/**/*.vue',
    './resources/**/*.svelte',
  ],

  darkMode: 'class',

  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        serif: ['Merriweather', 'serif'],
      },
      colors: {
        primary: '#1C1E26',
        accent: '#FAB400',
        background: '#FAFAFA',
        muted: '#ECECEC',
        dark: {
          background: '#0F0F0F',
          surface: '#1A1A1A',
          muted: '#2C2C2C',
          text: '#FFFFFF',
        },
      },
      screens: {
        'xs': '480px',
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
      },
      animation: {
        fade: 'fadeIn 0.5s ease-in-out',
        bounceSlow: 'bounce 2s infinite',
        slide: 'slideIn 0.3s ease-out',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideIn: {
          '0%': { transform: 'translateY(10px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
    },
  },

  plugins: [
    forms,
    typography,
    aspectRatio,
    containerQueries,
  ],
};