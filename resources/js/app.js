import Vue from 'vue';
import Board from './Board';
import './bootstrap';

window.Vue = Vue;

Vue.component('Board', Board);

const app = new Vue({
    el: '#app',
});
