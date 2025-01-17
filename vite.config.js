import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                cWhite: '#F5F5F5', // This color is mostly for the background of the project or would be the base color as such in light mode.
                cBlack: '#161616', // This color is mostly for the background of the project or would be the base color as such in dark mode.
                cGray: '#E5E5E5', // This color can be used either for texts so that they are not in such a pronounced black or, if necessary, the default color cBlack for the text.
                cTeal: '#008080', // This color is used to give details in greater quantity or scale since it is a striking color but it does not saturate its constant use in different parts of the interface.
                cGold: '#FFD700' // This color is used to give subtle touches to specific things since it is a bit garish so it is not very convenient to want to apply it to everything.
            },
            boxShadow: {
                light: '-9px 10px 30px 5px rgba(143, 143, 143, 0.81)', // This setting is to give shading to cards, boxes or similar that have this is for the light mode.
                dark: '-9px 10px 30px -2px rgba(143, 143, 143, 0.81)', // This setting is to give shading to cards, boxes or similar that have this is for the dark mode.
            },
            borderRadius: {
                custom: '15px', // This setting is to give a border radius to the cards, boxes or similar that have.
            },
        },
    },
    plugins: [],
};
