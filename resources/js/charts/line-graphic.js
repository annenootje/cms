let ctx = document.getElementById('lineChart').getContext('2d');

let lineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['', '', '', '', '', ''],
        showLine: false,
        datasets: [{
            label: '',
            data: [2, 9, 30, 25, 35, 32, 27, 34, 42],
            backgroundColor: [
                'rgba(0, 99, 132, 0)',
                'rgba(0, 162, 235, 0)',
                'rgba(255, 206, 86, 0)',
                'rgba(75, 192, 192, 0)',
                'rgba(153, 102, 255, 0)',
                'rgba(255, 159, 64, 0)'
            ],
            borderColor: [
                'rgba(247, 60, 46, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2,
            pointBackgroundColor: [
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
            ],
            pointBorderColor: [
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
                'rgba(247, 60, 46, 0)',
            ]
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
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    padding: 10,
                    fontColor: "rgba(0, 0, 0, .2)",
                    fontFamily: "Proxima Nova",
                },
                gridLines: {
                    borderColor: "rgba(0, 0, 0, .2)",
                    zeroLineWidth: 1,
                },
            }],
            xAxes: [{
                gridLines: {
                    display: false,
                }
            }]         
        },
    },
});