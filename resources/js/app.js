require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

import Vue from "vue";

import "./Ecommerce/ecommerce";

window.Vue = require('vue').default;

Alpine.start();

const app = new Vue({
    el: "#app"
});
