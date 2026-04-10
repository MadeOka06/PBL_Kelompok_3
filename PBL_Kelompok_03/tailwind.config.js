/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        fontFamily: {
            'bricolage' : ['"Bricolage Grotesque"','sans-serif']
        },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}