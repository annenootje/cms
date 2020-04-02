let graphic = document.getElementById('barChartGender');
console.log(graphic);
if(graphic) {
    let ctx = graphic.getContext('2d');
    console.log(ctx);

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