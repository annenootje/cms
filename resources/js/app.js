require('./bootstrap');

import './init/editor';

import Tabmenu from './objects/tab-menu';
import Modal from './objects/modal';
import Progress from './objects/progress';

import './charts/line-graphic';
import './charts/bar-graphic-system';
import './charts/bar-graphic-gender';

window.Vue = require('vue');


//back button
let split_url = window.location.pathname.split('/');
if (split_url.length > 2) {
    $('.logo .return').css('display', 'flex');
}

$(() => {
    const tabmenus = document.querySelectorAll('.tab-menu');
    const modals = document.querySelectorAll('.modal');
    const progresses = document.querySelectorAll('.item .progress .inner');

    if (tabmenus.length > 0) {
        tabmenus.forEach((tabmenu) => {
            const object = new Tabmenu(tabmenu);
            object.init();
        });
    }
    if (modals.length > 0) {
        modals.forEach((modal) => {
            const object = new Modal(modal);
            object.init();
        });
    }
    if (progresses.length > 0) {
        progresses.forEach((progress) => {
            const object = new Progress(progress);
            object.init();
        });
    }
});

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