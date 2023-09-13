import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    rollupOptions: {
      output: {
        dir: '../assets/',
        entryFileNames: 'bundle.js',
				assetFileNames: 'styles.css',
				chunkFileNames: "chunk.js",
        manualChunks: undefined,
      }
    }
  }
})
