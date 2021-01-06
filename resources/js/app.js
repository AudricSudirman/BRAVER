import Vue from 'vue';
import Vuetify from 'vuetify';
import VueRouter from 'vue-router';
window.axios = require('axios');

Vue.use(VueRouter);
Vue.use(Vuetify);

const vuetify = new Vuetify();

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes: [
    ]
});

const app = new Vue({
    el: "#app",
    router,
    vuetify,
    components: {}
});
