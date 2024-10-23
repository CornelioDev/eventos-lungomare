/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}", "./**/*.php"],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['Poppins']
      },
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: ["light", "dark", "lofi", {
      eventos: {
        "primary": "#eab308",
        "secondary": "#4b5563",
        "accent": "#c2410c",
        "neutral": "#A4A9AD",
        "base-100": "#ffffff",
        "info": "#0284c7",
        "success": "#84cc16",
        "warning": "#ea580c",
        "error": "#EB072E",
      },
    }],
  },
}