// app.js

import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './components/App.vue';
import BookList from './components/BookList.vue';
import BookDetail from './components/BookDetail.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';

const routes = [
    { path: '/', redirect: '/register' }, // Redirect root to registration
    { path: '/books', component: BookList },
    { path: '/books/:id', component: BookDetail, props: true },
    { path: '/login', component: Login },
    { path: '/register', component: Register },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

const app = createApp(App);
app.use(router);
app.mount('#app');
