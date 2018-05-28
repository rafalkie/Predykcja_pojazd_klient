@extends('master')
@section('content')
    <div class="row">
        <div class="col-sm-12 ">
            <h3 class="text-center">PROCENTOWY WYNIK </h3>
            <h3 class="text-center">Poszczególnych środków transportu jakie wybierze klient </h3>
            <div id="piechart" ></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Autobus', {{$autobus}}],
                        ['Samochód', {{$samochod}}],
                        ['Taxi', {{$taxi}}],
                        ['Samolot', {{$samolot}}],
                        ['Pociąg', {{$pociag}}]
                    ]);

                    // Optional; add a title and set the width and height of the chart
                    var options = {'title':'', 'width':'700', 'height':'600'};

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                }
            </script>

            <p class="text-center">Predykcja oparta została  na algorytmie matematycznym . W dużej mierze jest również uzależniona od bazy danych osób.</p>

        </div>
    </div>
@stop