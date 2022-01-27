module.exports = {
    mode: 'jit',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
            {
                pattern: /bg-(.+)-(400|500|600)/,
            }
      ]
    ,
  theme: {
    extend: {},
  },
  plugins: [],
}
