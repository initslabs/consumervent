<?php $real_data = str_replace("\"","",$real_data);
//dd($real_data);
?>

<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3 style="font-size: 36px;"> Dashboard </h3>
            </div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>

<div style="padding: 102px 0;">
    <div class="container">
        <div class="row" id="chart-one">
            <div class="col-lg-6" id="chart-one"></div>
            <div class="col-lg-6" id="chart-two"></div>
        </div>


        <div class="row" id="chart-two">
            <div class="col-lg-6" id="chart-one"></div>
            <div class="col-lg-6" id="chart-two"></div>
        </div>

        <div class="row">
            <div class="col-lg-6"  id="chart-three"></div>
            <div class="col-lg-6"  id="chart-four"></div>
        </div>
    </div>
</div>



<script type="text/javascript">


    $(function () {
        $('#chart-one').highcharts({
            chart: {
                type: 'column',
                margin: 75,
                options3d: {
                    enabled: false,
                    alpha: 10,
                    beta: 25,
                    depth: 70
                }
            },
            title: {
                text: 'Hourly Review Submissions'
            },
            subtitle: {
                text: ''
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            xAxis: {
                categories: <?php echo $hours;?>
            },
            yAxis: {
                title: {
                    text: null
                }
            },
            series: [{
                name: 'Reviews',
                data: <?php echo $real_data;?>
            }]
        });
    });






    $(function () {
        $('#chart-two').highcharts({
            chart: {
                type: 'column',
                options3d: {
                    enabled: false,
                    alpha: 10,
                    beta: 25,
                    depth: 70
                }
            },
            title: {
                text: 'Review Based on Consumer Experience'
            },
            subtitle: {
                text: 'Source: consumervent.com'
            },
            xAxis: {
                categories: <?php echo $hours;?>,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: ''
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0,
                    depth: 25
                }
            },
            series: [{
                name: 'Positive',
                data: [49, 75, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54,49, 75, 106, 129, 144, 176, 135, 148, 216, 194, 95, 54]

            }, {
                name: 'Neutral',
                data: [83, 78, 98, 93, 106, 84, 105, 104, 91, 83, 106, 92,83, 78, 98, 93, 106, 84, 105, 104, 91, 83, 106, 92]

            }, {
                name: 'Negative',
                data: [48, 38, 39, 42, 47, 48, 59, 59, 52, 65, 59, 51,83, 78, 98, 93, 106, 84, 105, 104, 91, 83, 106]

            }]
        });
    });





    $(function () {
        $('#chart-three').highcharts({
            chart: {
                type: 'pie',
                options3d: {
                    enabled: false,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: 'Overall Review (Customer Experience)'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Customer Experience',
                data: <?php echo $experienceTypeChart;?>
            }]
        });
    });



    $(function () {
        $('#chart-four').highcharts({
            chart: {
                type: 'pie',
                options3d: {
                    enabled: false,
                    alpha: 45
                }
            },
            title: {
                text: 'Consumer Issues (Daily)'
            },
            subtitle: {
                text: ''
            },
            plotOptions: {
                pie: {
                    innerSize: 100,
                    depth: 45
                }
            },
            series: [{
                name: 'Issue Type',
                data: [
                    ['Bananas', 8],
                    ['Kiwi', 3],
                    ['Mixed nuts', 1],
                    ['Oranges', 6],
                    ['Apples', 8],
                    ['Pears', 4],
                    ['Clementines', 4],
                    ['Reddish (bag)', 1],
                    ['Grapes (bunch)', 1]
                ]
            }]
        });
    });
</script>