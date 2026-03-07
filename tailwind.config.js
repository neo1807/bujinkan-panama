const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
  content: [
    "./_pages/**/*.blade.php",
    "./resources/includes/**/*.blade.php",
    "./resources/views/**/*.blade.php",
    "./vendor/hyde/framework/resources/views/**/*.blade.php",
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ["Inter var", ...defaultTheme.fontFamily.sans],
      },
    },
  },

  plugins: [require("@tailwindcss/typography")],
};
