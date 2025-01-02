import path from 'path'; // Add this line at the top of the file
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import Vue from "@vitejs/plugin-vue";
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        Vue(),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        }
    },

    watch: true,
});