import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./storage/framework/views/*.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#567A94",
                lightBorder: "#E8EBF4",
                darkBorder: "#52525B",
                ring: "#EEF0F7",
                darkRing: "#3F3F46",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            backgroundSize: {
                "size-200": "200% 200%",
            },
            backgroundPosition: {
                "pos-0": "0% 0%",
                "pos-100": "100% 100%",
            },
        },
    },
    plugins: [],
    darkMode: "class",
};
