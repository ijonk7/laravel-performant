
<div>
    <div class="container pt-3">
        <canvas id="myChart"></canvas>
        <div class="d-flex justify-content-end pt-3">
            <p><strong>* Total rows in the orders table: 97460 rows.</strong></p>
        </div>
    </div>

    @section('js')
        <script>
            Livewire.on('filterReport', filterProduct => {
                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
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
                    options: {}
                });
            })
            Livewire.on('filterAllReport', () => {
                var ctx = document.getElementById('myChart').getContext('2d');
                var chart = new Chart(ctx, {
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
                            data: Object.values(@json($allReport))
                        }]
                    },

                    // Configuration options go here
                    options: {}
                });
            })

            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
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
                        data: Object.values(@json($allReport))
                    }]
                },

                // Configuration options go here
                options: {}
            });
        </script>
    @endsection
</div>
