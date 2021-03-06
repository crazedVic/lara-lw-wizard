module.exports = {
    mode: 'jit',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
            {
                pattern: /bg-(.+)-(300|600|900)/,
            }
      ]
    ,
  theme: {
    extend: {
        fontSize: {
            xxs: ['0.7rem', {
                lineHeight: '0.8rem',
            }],
        },
    },
  },
  plugins: [],
}
