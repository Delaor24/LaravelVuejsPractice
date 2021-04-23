
require('./bootstrap');

window.Vue = require('vue').default;
import axios from 'axios';
import Admin from './helpers/login/Admin';
import router from './router/backend'
require('./helpers/plugin')
require('./helpers/mixin')
Vue.component('backend-app', require('./components/BackendApp.vue').default);


const app = new Vue({
    el: '#app',
    router,
    data() {
        return {
            baseurl: laravel.baseurl,
            loggedIn: false,
            userimage: laravel.baseurl + '/images/user.png',
            noimage: laravel.baseurl + '/images/noimage.png',
            attach: laravel.baseurl + '/images/attach.png',
            adminInfo: {}
        }
    },
    methods: {
        adminGet() {
            axios.get('admin-info').then(res => {
                this.adminInfo = res.data;
            })
        }
    },
    mounted() {
        if (Admin.loggedIn()) {
            this.adminGet();
        }
        this.loggedIn = Boolean(Admin.loggedIn());
    }
});
