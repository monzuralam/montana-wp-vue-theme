import { createApp } from 'vue'
import { createRouter, createWebHistory } from 'vue-router';
import './style.css'
import App from './App.vue'
import Home from "./routes/Home.vue";
import Errors from "./routes/Errors.vue";

/**
 * create route
 */
const routes = [
    {
        path: '/',
        component: Home
    },
    {
        path: '/:pathMatch(.*)*',
        component: Errors
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
