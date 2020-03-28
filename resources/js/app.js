/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data() {
        return {
            menuIsActive: false,
        }
    },
    mounted() {
        console.log("vue is mounted");
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