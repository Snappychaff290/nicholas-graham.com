import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/style.css",
                "resources/css/style_mobile.css",
                "resources/css/placeholder.css",
                "resources/css/old_site/overview.css",
                "resources/css/old_site/style-mobile.css",
                "resources/css/old_site/style-small_screen.css",
                "resources/css/old_site/style.css",
                "resources/css/puter/puter.css",
                "resources/js/app.js",
                "resources/js/old_site/index.js",
            ],
            refresh: true,
        }),
    ],
});
