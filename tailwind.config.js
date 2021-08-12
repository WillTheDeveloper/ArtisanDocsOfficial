const colors = require('tailwindcss/colors')
module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            gray: colors.gray,
            red: colors.red,
            blue: colors.sky,
            yellow: colors.amber,
            cyan: colors.cyan,
            indigo: colors.indigo,
            white: colors.white,
            amber: colors.amber,
        },
        extend: {},
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
