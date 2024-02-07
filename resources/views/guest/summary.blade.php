<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-primary-5 dark:text-gray-200 leading-tight">
            {{ __('Ezevent') }}
        </h2>
    </x-slot>
    <h2 class="text-xl px-20 py-5 text-left text-gray-9">Summary Responses</h2>

    <div>
        <canvas id="barChart"></canvas>
    </div>

    <div >
        <canvas id="pieChart"></canvas>
    </div>

    <script>
        // Get data from the controller
        var data = JSON.parse('{!! isset($data) ? json_encode($data) : "null" !!}');

        // Get the context of the canvas elements
        var barChartCtx = document.getElementById('barChart').getContext('2d');
        var pieChartCtx = document.getElementById('pieChart').getContext('2d');

        // Create the bar chart
        var barChart = new Chart(barChartCtx, {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Create the pie chart
        var pieChart = new Chart(pieChartCtx, {
            type: 'pie',
            data: data
        });
    </script>
</x-app-layout>