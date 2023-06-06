import typography from '@tailwindcss/typography';
/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}', './node_modules/flowbite/**/*.js'],
  theme: {
    extend: {
      colors: {
        'pzblack': '#282828',
        'pzred': '#d14031',
      }, // Extend Tailwind's default colors
      fontFamily: {
        sans: 'Open Sans, sans-serif',
      },
    },
    container: {
      center: true,
      padding: '1rem',
    },
    // screens: {
    //   sm: '480px',
    //   md: '768px',
    //   lg: '976px',
    //   xl: '1048px',
    // },
  },
  plugins: [
    typography,
  ],
};

export default config;
