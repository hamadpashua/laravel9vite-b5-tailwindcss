import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
const path = require('path')

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css', 
            'resources/js/app.js'
        ]),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
});
