/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "node_modules/preline/dist/*.js",
    ],
    theme: {
        extend: {
            animation: {
                "spin-slow": "spin 3s linear infinite",
            },
        },
    },
    plugins: [require("flowbite/plugin"), require("preline/plugin")],
};
