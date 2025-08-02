// tailwind.config.js
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        gray: {
          900: 'rgb(17, 24, 39)',
          950: 'rgb(9, 9, 11)'
        },
        cyan: {
          400: 'rgb(34, 211, 238)',
          500: 'rgb(6, 182, 212)'
        },
        emerald: {
          400: 'rgb(52, 211, 153)',
          500: 'rgb(16, 185, 129)'
        }
      }
    }
  },
  plugins: [],
}
