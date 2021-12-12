const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],
    safelist: ['rotate-180'],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Roboto', 'sans-serif']
            },
            keyframes: {
                fade: {
                    '0%': {
                        opacity: '0'
                    },
                    '100%': {
                        opacity: '1'
                    }
                },
                'fade-in-left': {
                    '0%': {
                        opacity: '0',
                        transform: 'translateX(-10px)'
                    },
                    '100%': {
                        opacity: '1',
                        transform: 'translateX(0)'
                    }
                },
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
                        opacity: '0'
                    },
                    '100%': {
                        opacity: '1'
                    }
                },
                'w-grow': {
                    '0%': {
                        width: '0%'
                    },
                    '100%': {
                        width: '100%'
                    }
                }
            },
            animation: {
                'fast-fade': 'fade 0.25s ease-in-out',
                'fade-in-left': 'fade-in-left 0.5s ease-out',
                'fade-in-down': 'fade-in-down 0.5s ease-out',
                'drop-down': 'drop-down 0.15s ease-out',
            }
        }
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]
}
