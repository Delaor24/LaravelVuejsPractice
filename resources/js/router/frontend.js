import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

const routes = [
    {
        path: '/', component: () => import('../components/Frontend/Home'),
        children: [
            { path: '/contact', component: () => import('../components/Frontend/Contact') }
        ]
    }
];

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;
