import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'neutral-9': '#053F5C',
                'neutral-8': '#166085',
                'neutral-7': '#3084AE',
                'neutral-6': '#44A9C9',
                'neutral-5': '#44A9C9',
                'neutral-4': '#96DCFF',
                'neutral-3': '#ADE4FF',
                'neutral-2': '#C4EBFF',
                'neutral-1': '#DBF3FF',
                'neutral-0': '#F2FAFF',
                'primary-9': '#4F2700',
                'primary-5': '#F27F0C',
            },
        },
    },

    plugins: [forms],
};
