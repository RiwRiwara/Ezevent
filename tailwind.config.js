import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                // IBMPlexSansThai: [
                //     "IBM Plex Sans Thai",
                //     ...defaultTheme.fontFamily.sans,
                // ],
                sans: ["IBM Plex Sans Thai", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "neutral-9": "#053F5C",
                "neutral-8": "#166085",
                "neutral-7": "#3084AE",
                "neutral-6": "#4DA9D9",
                "neutral-5": "#7FC9FF",
                "neutral-4": "#A5D7FF",
                "neutral-3": "#ADE4FF",
                "neutral-2": "#C4EBFF",
                "neutral-1": "#DBF3FF",
                "neutral-0": "#F2FAFF",

                "primary-9": "#4F2700",
                "primary-8": "#7F3F00",
                "primary-7": "#A94F00",
                "primary-6": "#D05F00",
                "primary-5": "#F27F0C",
                "primary-4": "#F29F3F",
                "primary-3": "#F2BF73",
                "primary-2": "#F2DFA6",
                "primary-1": "#F2EFC9",
                "primary-0": "#F2FFFC",

                "gray-9": "#1A1A1A",
                "gray-8": "#333333",
                "gray-7": "#4D4D4D",
                "gray-6": "#666666",
                "gray-5": "#808080",
                "gray-4": "#999999",
                "gray-3": "#B3B3B3",
                "gray-2": "#CCCCCC",
                "gray-1": "#E6E6E6",
                "gray-0": "#FFF",


            },
        },
    },

    plugins: [forms],
};
