module.exports = {
    mode: 'jit',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
            {
                pattern: /bg-(.+)-(600|900)/,
            }
      ]
    ,
  theme: {
    extend: {},
  },
  plugins: [],
}
