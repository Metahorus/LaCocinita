/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
        extend: {
            fontFamily: {
              Fuente1 : ["MsMadi - regular", "sans-serif"],
              Fuente2 : ["Quicksand-VariableFont", "sans-serif"],
            },
        },
    },
  plugins: [],
}

