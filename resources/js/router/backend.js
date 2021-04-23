import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
    {
        path: '/admin/login',
        component: () => import('../components/Backend/login/Login'),
        name: 'admin.login'
    },
    {
        path: '/dashboard',
        component: () => import('../components/Backend/Main'), beforeEnter: authGuard,
        children: [

            {
                path: '/admin/dashboard', component: () => import('../components/Backend/Dashboard'),
                name: 'admin.dashboard', beforeEnter: authGuard,
            },
            {
                path: '/admin/profile', component: () => import('../components/Backend/pages/profile/Profile'),
                name: 'admin.profile', beforeEnter: authGuard
            },
        ]
    },

];

const router = new VueRouter({
    routes,
    mode: 'history'
});

// ==========check login or not==========
function authGuard(to, from, next) {
    if (Admin.loggedIn()) {

        next();
    } else {
        next({ name: 'admin.login' });
    }
}

export default router;
