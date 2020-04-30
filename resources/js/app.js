require('./bootstrap');

import './init/editor';

import Tabmenu from './objects/tab-menu';
import DeleteModal from './objects/delete-modal';
import Progress from './objects/progress';
import ImageInput from './objects/imageinput';
import ImageModal from './objects/image-modal';

// import './charts/line-graphic';
// import './charts/bar-graphic-system';
// import './charts/bar-graphic-gender';

window.Vue = require('vue');


//back button
let split_url = window.location.pathname.split('/');
if (split_url.length > 2) {
    $('.logo .return').css('display', 'flex');
}

$(() => {
    const tabmenus = document.querySelectorAll('.tab-menu');
    const deleteModals = document.querySelectorAll('.modal.delete');
    const progresses = document.querySelectorAll('.item .progress .inner');
    const imageInputs = document.querySelectorAll('.image.placeholder input');
    const imageModals = document.querySelectorAll('.modal.images');

    if (tabmenus.length > 0) {
        tabmenus.forEach((tabmenu) => {
            const object = new Tabmenu(tabmenu);
            object.init();
        });
    }
    if (deleteModals.length > 0) {
        deleteModals.forEach((deleteModal) => {
            const object = new DeleteModal(deleteModal);
            object.init();
        });
    }
    if (imageModals.length > 0) {
        imageModals.forEach((imageModal) => {
            const object = new ImageModal(imageModal);
            object.init();
        });
    }
    if (progresses.length > 0) {
        progresses.forEach((progress) => {
            const object = new Progress(progress);
            object.init();
        });
    }
    if (imageInputs.length > 0) {
        imageInputs.forEach((imageInput) => {
            const object = new ImageInput(imageInput);
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

        backLogin(index) {
            const inputs = document.querySelectorAll('.login-inputs input');
            
            if( inputs[index - 1].value.length === 0 ) {
                inputs[index - 2].value = "";
                inputs[index - 2].focus();
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

let barChartGenderGraphic = document.getElementById('barChartGender');
if(barChartGenderGraphic) {
    let ctx = barChartGenderGraphic.getContext('2d');

    let barChartGender = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [20, 10],
                backgroundColor: [
                    'rgba(247, 60, 46, 1)',
                    'rgba(27,24,42,1)',
                ],
                borderWidth: 0,
            }],
            
        
            labels: [
                'Vrouw',
                'Man',
            ],
        },
        options: {
            cutoutPercentage: 80,
            legend: {
                display: false,
            },
        }
    });
}

let barChartSystemGraphic = document.getElementById('barChartSystem');

if(barChartSystemGraphic) {
    let ctx = barChartSystemGraphic.getContext('2d');

    let barChartSystem = new Chart(ctx, {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [10, 20],
                backgroundColor: [
                    'rgba(247, 60, 46, 1)',
                    'rgba(27,24,42,1)',
                ],
                borderWidth: 0,
            }],        
            labels: [
                'Mobiel',
                'Desktop',
            ],
        },
        options: {
            cutoutPercentage: 80,
            legend: {
                display: false,
            },
        }
    });
}

let lineChartGraphic = document.getElementById('lineChart');

if(lineChartGraphic) {
    let ctx = lineChartGraphic.getContext('2d');

    let lineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['', '', '', '', '', ''],
            showLine: false,
            datasets: [{
                label: '',
                data: [5, 30, 25, 45, 32, 27, 34],
                backgroundColor: [
                    'rgba(0, 99, 132, 0)',
                ],
                steppedLine: false,
                fill: false,
                borderColor: 'rgba(247, 60, 46, 1)',
                borderWidth: 2,
                pointBorderColor: 'rgba(0, 0, 0, 0)',
                pointBackgroundColor: 'rgba(0, 0, 0, 0)',
            }]
        },
        options: {
            title: {
                display: false,
            },
            
            legend: {
                display: false,
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    },
                }],
                yAxes: [{
                    gridLines: {
                        drawBorder: false,
                        zeroLineColor: 0
                    },
                    ticks: {
                        beginAtZero: true,
                        fontSize: 13,
                        fontColor: "#CCCCCC",
                        maxTicksLimit: 6,
                        borderWidth: 2,
                        padding: 20,
                        fontFamily: 'Proxima Nova',
                        fontWeight: 'bold',
                    }
                }]
            },
        },
    });
}
  