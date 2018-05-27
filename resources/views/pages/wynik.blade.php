@extends('master')
@section('content')
    <div class="row">
        <div class="col-sm-12 ">
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
                    var options = {'title':'Predykcja wyboru środka transportu - procentowa ', 'width':'700', 'height':'600'};

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                }
            </script>
        </div>
    </div>
@stop