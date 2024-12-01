// import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],
    theme: {
        fontFamily: {
            sans: ['Golos Text', 'sans-serif'],
        },
        extend: {
            borderColor: '#e5e5e5',
            spacing: {
                '8': '8px',
                '10': '10px',
                '15': '15px',
                '16': '16px',
                '20': '20px',
                '30': '30px',
                '48': '48px',
                '50': '50px',
                '60': '60px',
            },
            gap: {
                '30': '30px',
                '50': '50px',
            },
            borderRadius: {
                '10': '10px',
                '5': '5px',
            },
        },
    },

    plugins: [forms],
};
