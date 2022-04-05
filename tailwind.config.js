const forms = require("@tailwindcss/forms");

module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.css",
        "./resources/**/*.scss",
    ],
    theme: {
        extend: {},
    },
    variants: {},
    plugins: [forms],
};
