import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';
import './style.css'
import App from './App.vue'
import Home from "./routes/Home.vue";

/**
 * create route
 */
const routes = [
    {
        path: '/',
        component: Home
    }
];

/**
 * create router
 */
const router = createRouter({
    history: createWebHistory(),
    routes
});

const app = createApp(App);
app.use(router);
app.mount('#app')
