const theme = require("./theme.json");
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./**/*.php",
    "./resources/css/*.css",
    "./resources/js/*.js",
    "./safelist.txt",
    "./**/*.html",
  ],
  theme: {
    extend: {
      colors: tailpress.colorMapper(
        tailpress.theme("settings.color.palette", theme)
      ),
      fontSize: tailpress.fontSizeMapper(
        tailpress.theme("settings.typography.fontSizes", theme)
      ),
      fontSize: {
        "4.5xl": "2.5rem",
      },
      colors: {
        "san-juan": {
          50: "#f3f7fc",
          100: "#e6eef8",
          200: "#c8dcef",
          300: "#97bfe2",
          400: "#5f9dd1",
          500: "#3a80bd",
          600: "#2a659f",
          700: "#235281",
          800: "#21476d",
          900: "#203c5a",
          950: "#15263c",
        },
        saffron: {
          50: "#fefde8",
          100: "#fffdc2",
          200: "#fff788",
          300: "#ffea44",
          400: "#fed811",
          500: "#f2c204",
          600: "#ce9400",
          700: "#a46a04",
          800: "#87520c",
          900: "#734310",
          950: "#432305",
        },
        background: "hsl(var(--background))",
        foreground: "hsl(var(--foreground))",
        card: {
          DEFAULT: "hsl(var(--card))",
          foreground: "hsl(var(--card-foreground))",
        },
        popover: {
          DEFAULT: "hsl(var(--popover))",
          foreground: "hsl(var(--popover-foreground))",
        },
        primary: {
          DEFAULT: "hsl(var(--primary))",
          foreground: "hsl(var(--primary-foreground))",
        },
        secondary: {
          DEFAULT: "hsl(var(--secondary))",
          foreground: "hsl(var(--secondary-foreground))",
        },
        muted: {
          DEFAULT: "hsl(var(--muted))",
          foreground: "hsl(var(--muted-foreground))",
        },
        accent: {
          DEFAULT: "hsl(var(--accent))",
          foreground: "hsl(var(--accent-foreground))",
        },
        destructive: {
          DEFAULT: "hsl(var(--destructive))",
          foreground: "hsl(var(--destructive-foreground))",
        },
        border: "hsl(var(--border))",
        input: "hsl(var(--input))",
        ring: "hsl(var(--ring))",
        chart: {
          1: "hsl(var(--chart-1))",
          2: "hsl(var(--chart-2))",
          3: "hsl(var(--chart-3))",
          4: "hsl(var(--chart-4))",
          5: "hsl(var(--chart-5))",
        },
      },
      fontFamily: {
        sans: ["var(--font-plus-jakarta-sans)"],
      },
      borderRadius: {
        lg: "var(--radius)",
        md: "calc(var(--radius) - 2px)",
        sm: "calc(var(--radius) - 4px)",
      },
      lineHeight: {
        3.5: "0.975rem",
      },
      spacing: { 7.5: "1.875rem" },
      backgroundImage: {
        "hero-image": "url('../assets/image/heroimage.webp')",
      },
    },
  },
  plugins: [tailpress.tailwind, require("tailwindcss-animate")],
};
