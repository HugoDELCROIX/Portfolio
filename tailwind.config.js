/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    listStyleType: {
      ordered: 'decimal-leading-zero',
      disc: 'disc'
    },
    extend: {
      colors: {
        dark_blue: '#0a192f',
        blue: '#00468b',
        green: '#00ff09'
      }
    },
    fontFamily: {
      hack: 'Hack',
      krona: ['Krona One', 'sans-serif'],
      kanit: ['Kanit', 'sans-serif']
    }
  },
  variants: {
    extend: {}
  },
  plugins: []
}
