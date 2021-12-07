const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', 'sans-serif']
            },
            keyframes: {
                'fade-in-down': {
                    '0%': {
                        opacity: '0',
                        transform: 'translateY(-10px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateY(0)'
                    }
                },
                'drop-down': {
                    '0%': {
                        opacity: '0',
                    },
                    '100%': {
                        opacity: '1',
                    }
                }
            },
            animation: {
                'fade-in-down': 'fade-in-down 0.5s ease-out',
                'drop-down': 'drop-down 0.15s ease-out'
            }
        }
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]
}
