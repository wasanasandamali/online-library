import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './components/App.vue';
import BookList from './components/BookList.vue';
import BookDetail from './components/BookDetail.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import Welcome from './components/Welcome.vue';

const routes = [
    { path: '/', component: Login },
    { path: '/books', component: BookList },
    { path: '/books/:id', component: BookDetail, props: true },
    { path: '/Welcome', component: Welcome },
    { path: '/register', component: Register },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

const app = createApp(App);
app.use(router);
app.mount('#app');
