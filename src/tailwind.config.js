const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                'rufina': ['Rufina', ...defaultTheme.fontFamily.sans],
                'roboto': ['Roboto', ...defaultTheme.fontFamily.serif]
            },
            colors:{
                'customText': '#1e2528',
                'customPink': '#ff817e',
                'customPinkA': '#fcf5ee',
                'customPinkB': '#fff9f8'
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
