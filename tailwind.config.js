// /** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primaryBlack' : '#171820',
        'primaryYellow' : '#fdc029',
        'primaryOrange' : '#df861d',
        'primaryBrown' : '#aa3d01',
        'primaryGray' : '#bcb6ae',
      }
    },
  },
  plugins: [],
}
