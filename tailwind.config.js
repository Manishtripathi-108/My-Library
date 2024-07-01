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
                    secondary: "#FFCDB2",
                    accent: "#44CCFF",
                    highlight: "#B1AFFF"
                },
                dark: {
                    primary: "#1B1B1B",
                    secondary: "#303030",
                    accent: "#66CCFF",
                    highlight: "#8888FF"
                },
            },
            boxShadow: {
                'neu-sun': '6px 6px 13px #cca48e, -6px -6px 13px #fff6d6',
                'neu-moon': 'inset 4px 4px 9px #131313, inset -4px -4px 9px #4d4d4d, 4px 4px 9px #131313, -4px -4px 9px #4d4d4d',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    darkMode: "class",

    plugins: [forms],
};
