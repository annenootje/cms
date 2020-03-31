let ctx = document.getElementById('barChartGender').getContext('2d');

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
            '',
            '',
        ],
    },
    options: {
        cutoutPercentage: 80,
        legend: {
            display: false,
        },
    }
});