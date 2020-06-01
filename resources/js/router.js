import Vue from 'vue';
import Router from 'vue-router';
import Dashboard from './components/Dashboard.vue';
import AddArticle from './components/AddArticle.vue';
import ArticleDetail from './components/ArticleDetail.vue';

Vue.use(Router);

const router = new Router({
    mode: 'history',
    history: true,

    routes: [
        {
            path: '/',
            redirect: '/dashboard',
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard,
        },
        {
            path: '/add-article',
            name: 'addArticle',
            component: AddArticle,
        },
        {
            path: '/article/:id',
            name: 'article',
            props: true,
            component: ArticleDetail,
        },
    ],
});

export default router;
