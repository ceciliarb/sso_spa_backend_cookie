import Vue from 'vue'
import router from './router'
import axios from 'axios';

import App from './components/App'

Vue.prototype.$axios = axios.create({ withCredentials: true });

const app = new Vue({
    el: '#app',
    components: { App },
    template: '<App/>',
    router,
});
