import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [vue()],
  build: {
    rollupOptions: {
      output: {
        dir: '../assets/',
        entryFileNames: 'js/bundle.js',
				assetFileNames: 'css/styles.css',
				chunkFileNames: "js/chunk.js",
        manualChunks: undefined,
      }
    }
  },
  watch: {
    rollupOptions: {
      output: {
        dir: '../assets/',
        entryFileNames: 'js/bundle.js',
				assetFileNames: 'css/styles.css',
				chunkFileNames: "js/chunk.js",
        manualChunks: undefined,
      }
    }
  }
})
