module.exports = {
  purge: [
    './templates/*.twig',
    './src/*.css',
  ],
  darkMode: 'media', // or 'media' or 'class'
  theme: {
    backgroundColor: ['active'],
    backgroundSize: {
      'cover': 'cover',
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
