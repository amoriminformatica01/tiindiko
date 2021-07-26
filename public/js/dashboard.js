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
                    '12',
                    '8',
                    '9',
                    '17',
                    '3'

                ],
                lineTension: 0,
                backgroundColor: [
                    "#ft6b4y",
                    "#56d790",
                    "#ff8367",
                    "#6979f8",
                    "#fe67fe"
                ],
                borderColor: '#007bff',
                borderWidth: 1,
                pointBackgroundColor: 'red'
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
                display: true
            }
        }
    })
})()