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
            xxs: ['0.5rem', {
                lineHeight: '0.7rem',
            }],
        },
    },
  },
  plugins: [],
}
