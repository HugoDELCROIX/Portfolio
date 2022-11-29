/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    colors: {
      white: "#fff",
      background: "#0f172a",
      section: "#1e293b",
    },
    fontSize: {
      sm: "0.8rem",
      base: "1rem",
      xl: "2rem",
      "2xl": "1.563rem",
      "3xl": "1.953rem",
      "4xl": "2.441rem",
      "5xl": "3.052rem",
      titreSection: "1.5rem",
    },
  },
  plugins: [],
};
