import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./storage/framework/views/*.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {
            animation: {
                "loop-scroll": "loop-scroll 30s linear infinite",
            },
            keyframes: {
                "loop-scroll": {
                    from: { transform: "translateX(0%)" },
                    to: { transform: "translateX(-100%)" },
                },
            },
            colors: {
                primary: "#A72185",
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
    darkMode: "class",
    plugins: [],
};
