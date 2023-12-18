const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                customGreen: "#3D7068",
                customGray: "#c6c0b9",
                customGreenLight: "#43C59E",
                customGreenBg: "#E5F6E4"
            }
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
