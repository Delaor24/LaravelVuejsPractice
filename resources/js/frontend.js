

require('./bootstrap');

window.Vue = require('vue').default;

import router from './router/frontend'
Vue.component('frontend-app', require('./components/FrontendApp.vue').default);


const app = new Vue({
    el: '#app',
    router,
    data() {
        return {
            baseurl: laravel.baseurl
        }
    }
});
