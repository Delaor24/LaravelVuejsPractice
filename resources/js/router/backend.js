import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

const routes = [
    {
        path: 'dashboard',
        component: () => import('../components/Backend/Main'),
        children: [

            {
                path: '/admin/dashboard', component: () => import('../components/Backend/Dashboard'),
                name: 'admin.dashboard'
            },
            {
                path: '/admin/profile', component: () => import('../components/Backend/pages/profile/Profile'),
                name: 'admin.profile'
            },
        ]
    }
];

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;
