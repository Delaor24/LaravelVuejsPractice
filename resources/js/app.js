

require('./bootstrap');

window.Vue = require('vue').default;
import router from './router/backend'

Vue.component('backend-app', require('./components/BackendApp.vue').default);


const app = new Vue({
    el: '#app',
    router
});
