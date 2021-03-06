let graphic = document.getElementById('barChartSystem');

if(graphic) {
    let ctx = graphic.getContext('2d');

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