import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['"Inter"', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': {
                    DEFAULT: '#1E90FF',
                    50: '#D6EBFF',
                    100: '#C1E1FF',
                    200: '#98CCFF',
                    300: '#70B8FF',
                    400: '#47A4FF',
                    500: '#1E90FF',
                    600: '#0074E5',
                    700: '#0058AD',
                    800: '#003B75',
                    900: '#001F3D',
                    950: '#001021'
                },
            }
        },

    },

    plugins: [forms],
};
