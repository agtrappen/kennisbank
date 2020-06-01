require('./bootstrap');

window.Vue = require('vue');

import App from './App.vue';
import VueAxios from 'vue-axios';
import Notifications from 'vue-notification'
import { BootstrapVue } from 'bootstrap-vue';
import axios from 'axios';
import router from './router';

Vue.use(VueAxios, axios);
Vue.use(BootstrapVue);
Vue.use(Notifications);

const app = new Vue({
    el: '#app',
    router,
    render: h => h(App),
});