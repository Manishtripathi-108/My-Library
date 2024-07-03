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
            colors: {
                light: {
                    primary: "#FFE9D0",
                    'primary-dim': '#fff0e0',
                    secondary: "#FFCDB2",
                    accent: "#44CCFF",
                    highlight: "#B1AFFF",
                    text: "#1B1B1B",
                    'text-secondary': '#555555',
                },
                dark: {
                    primary: "#121212",
                    'primary-dim': '#1D1D1D',
                    secondary: "#303030",
                    accent: "#66CCFF",
                    highlight: "#8888FF",
                    text: "#FFE9D0",
                    'text-secondary': '#aaaaaa',
                },
            },
            boxShadow: {
                'neu-sun': '6px 6px 13px #cca48e, -6px -6px 13px #fff6d6',
                'neu-moon': 'inset 4px 4px 9px #131313, inset -4px -4px 9px #4d4d4d, 4px 4px 9px #131313, -4px -4px 9px #4d4d4d',
                'neu': '6px 6px 6px #d2d6d8, -6px -6px 6px #ffffff',
                'neu-inset': 'inset 4px 4px 8px 0px #bdc8d5, inset -4px -4px 8px 0px #ffffff',
                'neu-inset-sm': 'inset 2px 2px 5px #b8b9be, inset -3px -3px 7px #ffffff',
                'neu-outset': '#45566754 7px 7px 15px 0px, #5165790a -8px -8px 15px 0px,#51657959 -5px -4px 13px 0px inset, #fffffff0 6px 7px 12px 0px inset',
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
