<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @livewireStyles
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> --}}
</head>
<body>
    <livewire:home.filter />

    <div class="container pt-3">
        <canvas id="myChart"></canvas>
        <div class="d-flex justify-content-end pt-3">
            <p><strong>* Total rows in the orders table: 5072159 rows.</strong></p>
        </div>
    </div>

    <br>

    {{-- {{ round(xdebug_peak_memory_usage()/1048576, 2) }} --}}


    @livewireScripts

    <script>
        window.onload = function() {
            ctx = document.getElementById('myChart').getContext('2d');
            chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                        'October', 'November', 'December'
                    ],
                    datasets: [{
                        label: 'Sales',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: @json($allReport)
                    }]
                },

                // Configuration options go here
                options: {
                    title: {
                        display: true,
                        text: 'Sales Report 2020'
                    }
                }
            });
        }

        Livewire.on('filterReport', filterProduct => {
            if (chart) chart.destroy();

            ctx = document.getElementById('myChart').getContext('2d');
            chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                        'October', 'November', 'December'
                    ],
                    datasets: [{
                        label: 'Sales',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: Object.values(filterProduct)
                    }]
                },

                // Configuration options go here
                options: {
                    title: {
                        display: true,
                        text: 'Sales Report 2020'
                    }
                }
            });
        })
    </script>
</body>
</html>
