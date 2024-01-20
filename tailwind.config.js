/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html", "./node_modules/flowbite/**/*.js"],
  theme: {
    extend: {
      colors: {
        primary: { "50": "#eff6ff", "100": "#dbeafe", "200": "#bfdbfe", "300": "#93c5fd", "400": "#60a5fa", "500": "#3b82f6", "600": "#2563eb", "700": "#1d4ed8", "800": "#1e40af", "900": "#1e3a8a" },
        google: { "50": "#f5f5f5", "100": "#eeeeee", "200": "#e0e0e0", "300": "#bdbdbd", "400": "#9e9e9e", "500": "#757575", "600": "#616161", "700": "#424242", "800": "#212121", "900": "#212121" }
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}