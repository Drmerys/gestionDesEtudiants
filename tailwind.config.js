module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/dist/datepicker.js",
    ],
    theme: {
        extend: {},
    },

    plugins: [
        require('flowbite/plugin')
    ]
}
