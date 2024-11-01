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
            colors:{
                'primary-text':"#4b4f58",
                'primary':'#273775',
                'bg-gray':'#f4f6fc',
                'pink-web':'#FC5D61',
            }
        },
    },
    plugins: [],
};
