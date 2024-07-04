import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],


    theme: {
        extend: {
            backgroundImage: {
                'btn-gradient': 'linear-gradient(145deg, #e1c9ac, #fffbeb)',
            },
            colors: {
                light: {
                    primary: "#FFE9D0",
                    'primary-dim': '#fff0e0',
                    secondary: "#FFCDB2",
                    accent: "#44CCFF",
                    highlight: "#B1AFFF",
                    text: "#1B1B1B",
                    'text-secondary': '#555555',
                    'text-tertiary': '#6f7378',
                },
                dark: {
                    primary: "#121212",
                    'primary-dim': '#1D1D1D',
                    secondary: "#303030",
                    accent: "#66CCFF",
                    highlight: "#8888FF",
                    text: "#FFE9D0",
                    'text-secondary': '#aaaaaa',
                    'text-tertiary': '#88929c',
                },
            },
            boxShadow: {
                'neu-sun': '6px 6px 13px #cca48e, -6px -6px 13px #fff6d6',
                'neu-moon': 'inset 4px 4px 9px #131313, inset -4px -4px 9px #4d4d4d, 4px 4px 9px #131313, -4px -4px 9px #4d4d4d',

                'neu-xs': '2px 2px 4px #ccbaa6, -2px -2px 4px #fffffa',
                'neu-md': '-5px -5px 9px #fff9df, 5px 5px 9px #edd9c1',
                'neu-lg': '6px 6px 9px #ccb7ac, -6px -6px 9px #ffffe5',
                'neu-xl': '6px 6px 13px #cca48e, -6px -6px 9px #ffffe5',

                'neu-inset-xs': 'inset 2px 2px 5px #d6c4af, inset -2px -2px 5px #fffff1',
                'neu-inset-sm': 'inset 4px 3px 3px 0px #dbc8b3, inset -2px -4px 4px 0px #ffffff',
                'neu-inset-xl': 'inset 6px 6px 12px #665d53, inset -6px -6px 12px #ffffff',

                'neu-outset-sm': ' #00000040 5px 5px 7px 0px, #FFFFFF40 2px 2px 5px 0px inset, #00000080 -3px -3px 5px 0px inset',
                'neu-outset-lg': '2.19px 2.05px 26.30px 1px rgba(0, 0, 0, 0.40), 0px 0px 113.40px 0px rgba(255, 255, 255, 0.27), inset -5px 0px 7.50px rgba(34, 34, 34, 0.24), inset 0px 5px 7.50px rgba(214, 214, 214, 0.24), inset 5px 0px 7.50px rgba(221, 221, 221, 0.24), inset 0px -5px 7.50px rgba(41, 41, 41, 0.24)',

                'neu-dark-xs': '2px 2px 4px #070707, -2px -2px 4px #3d3d3d',
                'neu-dark-md': '4px 4px 10px #000000, -4px -4px 10px #ffe9d03b',
                'neu-dark-lg': '6px 6px 12px #000000, -6px -6px 12px #ffe9d03b',

                'neu-dark-inset-xs': 'inset 3px 3px 3px #000000, inset -3px -3px 3px #2e2e2e',
                'neu-dark-inset-sm': 'inset 4px 3px 3px #000000, inset -2px -4px 4px #3d3d3d;',

                'neu-dark-outset-sm': '15px 5px 19px 7.5px rgba(0, 0, 0, 0.21), 0px 0px 21px rgba(255, 255, 255, 0.14), inset -3.5px 0 5px hsla(0, 0%, 3.015%, 0.18), inset 0 3.5px 5px hsla(0, 0%, 67.101%, 0.18), inset 3.5px 0 5px hsla(0, 0%, 82.985%, 0.18), inset 0 -3.5px 5px hsla(0, 0%, 3.015%, 0.18)',
                'neu-dark-outset-lg': '12px 10px 22px 7.5px rgba(0, 0, 0, 0.37), 0px 0px 32px rgba(255, 255, 255, 0.25), inset -3.5px 0 5px hsla(100, 0%, 11.15%, 0.32), inset 0 3.5px 5px hsla(100, 0%, 81.47%, 0.32), inset 3.5px 0 5px hsla(100, 0%, 88.86%, 0.32), inset 0 -3.5px 5px hsla(100, 0%, 11.15%, 0.32)',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
                playfair: ['"Playfair Display"', 'Georgia', 'serif'],
                karla: ['Karla', 'Arial', 'sans-serif'],
            },
        },
    },

    darkMode: "class",

    plugins: [forms],
};
