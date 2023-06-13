/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        inter: ["'Inter', sans-serif"]
      },
      colors: {
        customBlue : '#0047ab',
        customLightBlue : '#7ebbeb'
      }
    },
  },
  plugins: [],
}

