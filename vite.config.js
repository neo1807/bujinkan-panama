// Using Vite is optional, as the styles you need to get started are already included.
// However, if you customize existing or add new Tailwind classes, you can use Vite
// to compile the assets. See https://hydephp.com/docs/1.x/managing-assets.html.

import { defineConfig } from "vite";
import tailwindcss from "@tailwindcss/vite";
import hyde from "hyde-vite-plugin";

export default defineConfig({
  plugins: [
    hyde({
      input: ["resources/assets/app.css", "resources/assets/app.js"],
      watch: ["_pages", "_posts", "_docs"],
      refresh: true,
    }),
    tailwindcss(),
  ],
  server: {
    host: "0.0.0.0",
    port: 5173,
    strictPort: true,
    origin: `${process.env.DDEV_PRIMARY_URL.replace(/:\d+$/, "")}:5173`,
    cors: {
      origin: /https?:\/\/([A-Za-z0-9\-\.]+)?(\.ddev\.site)(?::\d+)?$/,
    },
  },
});
