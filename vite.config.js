import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    resolve: {
        alias: {
            '~': '/resources',
        },
    },
    plugins: [
        laravel({
            input: 'resources/scripts/app.tsx',
            ssr: 'resources/scripts/ssr.tsx',
            refresh: true,
        }),
        react(),
    ],
});
