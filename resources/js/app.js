/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./objects/tab-menu');

window.Vue = require('vue');

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
        },
        checkLogin(index) {
            const inputs = document.querySelectorAll('.login-inputs input');
            let i = 0;
            for ( i; i < 5; i++ ) {
                let inputValue = inputs[i].value
                if(inputValue.length > 1) {
                    inputs[i].value = inputValue.substr(inputValue.length - 1);
                }
            }
            
            if ( index > 4 ) {
                inputs[4].blur();
                this.submitLogin();
            } else {
                inputs[index].focus();
            }

        },

        submitLogin() {

            const inputsValue = document.querySelectorAll('.login-inputs input');
            const password = document.querySelector('.login-password');
            const submit = document.querySelector('.login-submit'); 

            password.value =
                inputsValue[0].value + 
                inputsValue[1].value + 
                inputsValue[2].value + 
                inputsValue[3].value + 
                inputsValue[4].value;

            submit.click();
        }
    }
})