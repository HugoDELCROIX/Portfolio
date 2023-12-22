/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: 'class',
  theme: {
    listStyleType: {
      ordered: 'decimal-leading-zero',
      disc: 'disc'
    },
    extend: {
      colors: {
        dark_blue: '#0a192f',
        // blue: '#00468b',
        dark_green: '#00ff09',
        light: '#efeff0',
        light_green: '#037d50',
        discord: '#313338',
        discord_bot: '#383940'
      }
    },
    fontFamily: {
      hack: 'Hack',
      krona: ['Krona One', 'sans-serif'],
      kanit: ['Kanit', 'sans-serif'],
      roboto: ['Roboto', 'sans-serif']
    }
  },
  variants: {
    extend: {}
  },
  plugins: []
}
