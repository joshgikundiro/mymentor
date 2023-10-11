/** @type {import('tailwindcss').Config} */
export const content = [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
];
export const theme = {
    screens: {
        'xs': '20rem',
        'sm': '20rem',
        'md': '600px',
        'lg': '1024px'
    },
    colors: {
        'color1': '#025FFF',
        'color_2': '#198754',
        'color_3': 'hwb(0 0% 100% / 0.87)',
        'color_4': 'hsl(14, 37%, 76%)',
        'color_5': 'rgb(66, 135, 255)',
    },
    extend: {},
};
export const plugins = [
    require('flowbite/plugin')
];

    

