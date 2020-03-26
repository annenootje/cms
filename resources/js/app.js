require('./bootstrap');
import Vue from 'vue';

const app = new Vue({
    el: '#app',
    data() {
        return {
            menuIsActive: false,
        }
    },
    methods: { 
        toggleMenu() {
            this.menuIsActive = !this.menuIsActive;
        }
    }
})