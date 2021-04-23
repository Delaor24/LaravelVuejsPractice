import Vue from 'vue'
// simple valiadator
import SimpleVueValidation from 'simple-vue-validator';
const Validator = SimpleVueValidation.Validator;
window.Validator = Validator;
Vue.use(SimpleVueValidation);
//admin login storage
import Admin from './login/Admin'
window.Admin = Admin;

// ===============Flash Message===============
import FlashMessage from '@smartweb/vue-flash-message';
Vue.use(FlashMessage);

// ===============Bootstrap Vue===============
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue);