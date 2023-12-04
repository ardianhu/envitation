/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./node_modules/flowbite/**/*.js"
  ],
  safelist: [
    'bg-slate-700',
  ],
  theme: {
    extend: {
      fontFamily: {
        elsie : ['Elsie'],
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}

