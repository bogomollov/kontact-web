import defaultTheme from 'tailwindcss/defaultTheme';
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
            sans: ['Inter', ...defaultTheme.fontFamily.sans],
        },
        extend: {
            colors: {
                'white': '#E0E0E0',
                'black': '#131313',
                'dark-gray': '#1A1A1A',
                'gray': '#555555',
                'blue': '#6B8AFD',
                'blue2': '#5870CB',
            },
            fontSize: {
                'h1': '38px',
                'base': '18px',
                'p': '16px',
                'small': '14px',
            },
            spacing: {
                '8': '8px',
                '10': '10px',
                '16': '16px',
                '30': '30px',
                '50': '50px',
                '60': '60px',
            },
            gap: {
                '30': '30px',
                '50': '50px',
            },
            borderRadius: {
                '10': '10px',
            },
        },
    },

    plugins: [forms],
};
