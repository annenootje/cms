/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Tabmenu from './objects/tab-menu';
import EditorJS from '@editorjs/editorjs'; 
import Header from '@editorjs/header'; 
import List from '@editorjs/list';

const editor = new EditorJS({ 
        /** 
     * Id of Element that should contain the Editor 
     */ 
    holderId: 'editor', 
    
    /** 
     * Available Tools list. 
     * Pass Tool's class or Settings object for each Tool you want to use 
     */ 
    tools: { 
      header: Header, 
      list: List 
    }, 

    onReady: () => {
        console.log('Editor.js is ready to work!')
     }


  })

window.Vue = require('vue');


$(() => {
    const tabmenus = document.querySelectorAll('.tab-menu');

    if (tabmenus.length > 0) {
        tabmenus.forEach((tabmenu) => {
            const object = new Tabmenu(tabmenu);
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