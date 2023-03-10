/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/dashboard-admin/*.blade.php",
    "./resources/dashboard-admin/**/*.blade.php",
    "./resources/dashboard-admin/category/*.blade.php",
    "./resources/dashboard-admin/studio/*.blade.php",
    "./resources/dashboard-admin/movie/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/typography'),
  ],
}
