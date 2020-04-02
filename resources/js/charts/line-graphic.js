let graphic = document.getElementById('lineChart');

if(graphic) {
    let ctx = graphic.getContext('2d');

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