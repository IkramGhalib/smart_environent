<!DOCTYPE html>
<html lang="en">

<head>

    <?php

    date_default_timezone_set("Asia/Karachi");
    // $id = $_GET['id'];

    //$type = 2;
    $data1 = array();
    $data2 = array();
    $data3 = array();
    $data4 = array();
    $data5 = array();
    $data6 = array();
    $data7 = array();
    $data8 = array();
    $data9 = array();
    $data10 = array();
    $data11 = array();
    $data12 = array();
    $data13 = array();
    $data14 = array();
    $data15 = array();
    $data16 = array();
    $data17 = array();
    $data18 = array();
    $data19 = array();
    $data = array();
    $graphName = "";


    ?>
    <link href="../../assets/styles.css" rel="stylesheet" />
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: #ECF0F5;

        }

        #chart1 {
            max-width: 650zpx;
            margin: 35px auto;
        }
    </style>
</head>

<body bgcolor="#dddddd">
    <div id="chart1">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts@latest"></script>

    <script>
        var data1 = [];
        var data2 = [];
        var data3 = [];
        var data4 = [];
        var data5 = [];
        var data6 = [];
        var data7 = [];
        var data8 = [];
        var data9 = [];
        var data10 = [];
        var data11 = [];
        var data12 = [];
        var data13 = [];
        var data14 = [];
        var data15 = [];
        var data16 = [];
        var data17 = [];
        var data18 = [];
        var data19 = [];
        var data = [];

        var cat = []; // categories to be shown on x-axis of the graph

        window.onload = function() {
            //loadGraph();
        }

        function newData(ndata1, ndata2, ndata3, ndata4, ndata5, ndata6, ndata7, ndata8, ndata9, ndata10, ndata11, ndata12, ndata13, ndata14, ndata15, ndata16, ndata17, ndata18, ndata19, ncat) {
            data1 = ndata1.slice();
            data2 = ndata2.slice();
            data3 = ndata3.slice();
            data4 = ndata4.slice();
            data5 = ndata5.slice();
            data6 = ndata6.slice();
            data7 = ndata7.slice();
            data8 = ndata8.slice();
            data9 = ndata9.slice();
            data10 = ndata10.slice();
            data11 = ndata11.slice();
            data12 = ndata12.slice();
            data13 = ndata13.slice();
            data14 = ndata14.slice();
            data15 = ndata15.slice();
            data16 = ndata16.slice();
            data17 = ndata17.slice();
            data18 = ndata18.slice();
            data19 = ndata19.slice();

            cat = ncat.slice();
            document.getElementById('chart1').innerHTML = '';
            loadGraph();
        }

        function loadGraph() {

            var options = {
                chart: {
                    height: 250,
                    width: 1300,
                    type: 'line',
                    zoom: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: [3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3],
                    curve: 'straight',
                    dashArray: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
                },
                series: [{
                        name: "Temperature",
                        data: data1
                    },
                    {
                        name: "Humidity",
                        data: data2
                    }, {
                        name: "Pressure",
                        data: data3
                    },
                    {
                        name: "CO",
                        data: data4
                    },
                    {
                        name: "LPC",
                        data: data5
                    },
                    {
                        name: "Alcohol",
                        data: data6
                    },
                    {
                        name: "Carbon_Monoxide",
                        data: data7
                    },
                    {
                        name: "Ammonia",
                        data: data8
                    },
                    {
                        name: "NO2_Nitrogen_dioxide",
                        data: data9
                    },
                    {
                        name: "VOC",
                        data: data10
                    },
                    {
                        name: "Hydrogen_Gas",
                        data: data11
                    },
                    {
                        name: "Noice_Sensor",
                        data: data12
                    },
                    {
                        name: "Ozone",
                        data: data13
                    },
                    {
                        name: "Methane",
                        data: data14
                    },
                    {
                        name: "Air_Quality",
                        data: data15
                    },
                    {
                        name: "Dust_sensor_1",
                        data: data16
                    },
                    {
                        name: "Dust_sensor_2p5",
                        data: data17
                    },
                    {
                        name: "Dust_sensor_10",
                        data: data18
                    },
                    {
                        name: "NH3",
                        data: data19
                    },

                ],
                title: {
                    text: titleID,
                    align: 'left'
                },
                markers: {
                    size: 0,

                    hover: {
                        sizeOffset: 6
                    }
                },
                xaxis: {
                    categories: cat,
                },
                tooltip: {
                    y: [{
                        title: {
                            formatter: function(val) {
                                return val
                            }
                        }
                    }, {
                        title: {
                            formatter: function(val) {
                                return val
                            }
                        }
                    }]
                },
                grid: {
                    borderColor: '#f1f1f1',
                }
            }

            var chart = new ApexCharts(
                document.querySelector("#chart1"),
                options
            );

            chart.render();

        }
    </script>
</body>

</html>

<?php


require_once("opendb.php");
$q = "SELECT * from devices_logs where device_id = 'D01' order by datetime desc limit 2";
$result = $conn->query($q) or die("Query error");
foreach ($result as $row) {


    $temp = round($row['temperature'], 2);
    $hum = round($row['humidity'], 2);
    $pres = round($row['pressure'], 2);
    $co = round($row['CO'], 2);
    $lpc = round($row['LPC'], 2);
    $alc = round($row['alcohol'], 2);
    $CO2 = round($row['Carbon_Monoxide'], 2);
    $Ammonia = round($row['Ammonia'], 2);
    $NO2_Nitrogen_dioxide = round($row['NO2_Nitrogen_dioxide'], 2);
    $VOC = round($row['VOC'], 2);

    $Hydrogen_Gas = round($row['Hydrogen_Gas'], 2);

    $Noice_Sensor = round($row['Noice_Sensor'], 2);
    $Ozone = round($row['Ozone'], 2);
    $Methane = round($row['Methane'], 2);
    $Air_Quality = round($row['Air_Quality'], 2);
    $Dust_sensor_1 = round($row['Dust_sensor_1'], 2);
    $Dust_sensor_2p5 = round($row['Dust_sensor_2p5'], 2);
    $Dust_sensor_10 = round($row['Dust_sensor_10'], 2);
    $NH3 = round($row['NH3'], 2);



    //$kvar3 = round($row['cval3']*$row['val3']/1000 * sin(acos($row['pf3'])),2);
    $graphName = "Smart Environment";

    array_push($data1, $temp);
    array_push($data2, $hum);
    array_push($data3, $pres);
    array_push($data4, $co);
    array_push($data5, $lpc);
    array_push($data6, $alc);
    array_push($data7, $CO2);
    array_push($data8, $Ammonia);
    array_push($data10, $NO2_Nitrogen_dioxide);
    array_push($data11, $VOC);
    array_push($data12, $Hydrogen_Gas);
    array_push($data13, $Noice_Sensor);
    array_push($data14, $Noice_Sensor);
    array_push($data15, $Noice_Sensor);
    array_push($data16, $Noice_Sensor);
    array_push($data17, $Noice_Sensor);
    array_push($data18, $Noice_Sensor);
    array_push($data19, $Noice_Sensor);

    array_push($data, $row['datetime']);
}

?>
<script type="text/javascript">
    var js_data1 = [<?php echo '"' . implode('","', $data1) . '"' ?>];
    var js_data2 = [<?php echo '"' . implode('","', $data2) . '"' ?>];
    var js_data3 = [<?php echo '"' . implode('","', $data3) . '"' ?>];
    var js_data4 = [<?php echo '"' . implode('","', $data4) . '"' ?>];
    var js_data5 = [<?php echo '"' . implode('","', $data5) . '"' ?>];
    var js_data6 = [<?php echo '"' . implode('","', $data6) . '"' ?>];
    var js_data7 = [<?php echo '"' . implode('","', $data7) . '"' ?>];
    var js_data8 = [<?php echo '"' . implode('","', $data8) . '"' ?>];
    var js_data9 = [<?php echo '"' . implode('","', $data9) . '"' ?>];
    var js_data10 = [<?php echo '"' . implode('","', $data10) . '"' ?>];
    var js_data11 = [<?php echo '"' . implode('","', $data11) . '"' ?>];
    var js_data12 = [<?php echo '"' . implode('","', $data12) . '"' ?>];
    var js_data13 = [<?php echo '"' . implode('","', $data13) . '"' ?>];
    var js_data14 = [<?php echo '"' . implode('","', $data14) . '"' ?>];
    var js_data15 = [<?php echo '"' . implode('","', $data15) . '"' ?>];
    var js_data16 = [<?php echo '"' . implode('","', $data16) . '"' ?>];
    var js_data17 = [<?php echo '"' . implode('","', $data17) . '"' ?>];
    var js_data18 = [<?php echo '"' . implode('","', $data18) . '"' ?>];
    var js_data19 = [<?php echo '"' . implode('","', $data19) . '"' ?>];

    var js_data = [<?php echo '"' . implode('","', $data) . '"' ?>];
    var titleID = "<?php echo $graphName; ?>";
    newData(js_data1.reverse(), js_data2.reverse(), js_data3.reverse(), js_data4.reverse(), js_data5.reverse(), js_data6.reverse(), js_data7.reverse(), js_data8.reverse(), js_data9.reverse(), js_data10.reverse(), js_data11.reverse(), js_data12.reverse(), js_data13.reverse(), js_data14.reverse(), js_data15.reverse(), js_data16.reverse(), js_data17.reverse(), js_data18.reverse(), js_data19.reverse(), js_data.reverse());
</script>
<?php
$conn = null;
?>