/* globals Chart:false, feather:false */

(function() {
    'use strict'

    feather.replace()

    // Graphs
    var ctx = document.getElementById('myChart')
        // eslint-disable-next-line no-unused-vars
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [
                'Total de Lojistas',
                'Total Profissionais Cadastrados',
                'Total de Parceiros Cadastrados',
                'Total de Vagas de Emprego',
                'Total de Novidades e Promoções'

            ],
            datasets: [{
                data: [
                    '1',
                    '13',
                    '1',
                    '15',
                    '17'

                ],
                lineTension: 0,
                order: 1,
                backgroundColor: [
                    "red",
                    "blue",
                    "yellow",
                    "cyan",
                    "green"
                ],
                borderColor: '#007bff',
                borderWidth: 1,
                pointBackgroundColor: [
                    "blue",
                    "yellow",
                    "green",
                    "red",
                    "cyan"
                ]
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            legend: {
                display: true,
            }
        }
    })
})()