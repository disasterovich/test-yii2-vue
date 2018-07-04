//require('./bootstrap');
//window.Vue = require('vue');

import Vue from 'vue';
import VueRouter from 'vue-router';

import App from './components/App.vue';
import ProductsList from './components/ProductsList.vue';
import ProductDetails from './components/ProductDetails.vue';
import ProductAdd from './components/ProductAdd.vue';

Vue.component('ProductsList',ProductsList);
Vue.component('ProductDetails',ProductDetails);
Vue.component('ProductAdd',ProductAdd);

Vue.use(VueRouter);

const routes = [
    {
        path : '/',
        component : ProductsList
    },
    {
        path : '/products/add',
        component : ProductAdd,
    },
    {
        path : '/products/:id',
        component : ProductDetails,
    },
    {
        path : '*',
        component : ProductsList
    }
];

const router = new VueRouter ({
    mode: 'history',
    routes
});

import axios from 'axios';
axios.defaults.headers.common['Authorization'] = 'Bearer 1111111111111';

new Vue({
    router,
    el: '#app',
    render: h => h(App)
})