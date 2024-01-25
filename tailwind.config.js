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

                "secondary-9": "#223D43",
                "secondary-8": "#31555C",
                "secondary-7": "#416D76",
                "secondary-6": "#51858F",
                "secondary-5": "#76B6C2",
                "secondary-4": "#8ACEDB",
                "secondary-3": "#9FE7F5",
                "secondary-2": "#9FE7F5",
                "secondary-1": "#F6FDFF",

                "warning-9": "#4D3300",
                "warning-8": "#6F4A00",
                "warning-7": "#916100",
                "warning-6": "#B37700",
                "warning-5": "#D59109",
                "warning-4": "#F7AD19",
                "warning-3": "#FFC44D",
                "warning-2": "#FFD581",
                "warning-1": "#FFE6B4",
                "warning-0": "#FFF7E8",

                "success-9": "#006A37",
                "success-8": "#00934C",
                "success-7": "#00BC62",
                "success-6": "#15E481",
                "success-5": "#2FFF9B",
                "success-4": "#54FFAD",
                "success-3": "#7AFFBF",
                "success-2": "#9FFFD1",
                "success-1": "#C5FFE3",
                "success-0": "#EAFFF5",

                "danger-9": "#55001F",
                "danger-8": "#7D002D",
                "danger-7": "#A6003C",
                "danger-6": "#CF004B",
                "danger-5": "#F81667",
                "danger-4": "#FF4085",
                "danger-3": "#FF6AA0",
                "danger-2": "#FF94BA",
                "danger-1": "#FFBED5",
                "danger-0": "#FFE8F0",

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
