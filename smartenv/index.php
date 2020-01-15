<?php session_start();
if (!isset($_SESSION['userid'])) {
    echo "<script language='javascript'>window.location.href='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="15">
<head>


    <?php $pageName = "Device Dashboard" ?>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $pageName; ?></title>

    <?php include_once('head.php') ?>

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<!-- the fixed layout is not compatible with sidebar-mini -->

<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper" style="overflow: hidden;">


        <!-- Navbar -->
        <?php include_once('navbar.php') ?>
        <!-- Sidebar -->
        <?php include_once('sidebar.php') ?>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper" style="margin-top: <?php echo $contentmargin ?>px">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    <b><?php echo $pageName; ?></b>

                </h1>
                <ol class="breadcrumb">
                    <li><a href="./index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active"><?php echo $pageName; ?></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">


                <div class="row">
                    <?php
                    require_once("opendb.php");
                    $query = "SELECT * FROM devices_logs ORDER BY device_id DESC LIMIT 3";
                    $result = $conn->query($query) or die("Query error");

                    foreach ($result as $row) {
                    ?>
                        <div class="col-md-4">

                            <!-- USERS LIST -->
                            <div class="box box-green">
                                <div class="box-header with-border bg-green text-center">
                                    <h3 class="box-title"><b><?php echo $row['device_id']; ?></b></h3>
                                    <h5><b>Last Pulse:&nbsp</b><?php echo $row['datetime']; ?> </h5>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <ul class="users-list clearfix">
                                        <li>
                                            <b><?php echo $row['temperature']; ?></b>
                                            <span class="users-list-date">Temprature</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['temperature']; ?></b>
                                            <span class="users-list-date">Humidity</span>
                                            </b>
                                        <li>
                                            <b><?php echo $row['pressure']; ?></b>
                                            <span class="users-list-date">Pressure</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['CO']; ?></b>
                                            <span class="users-list-date">CO</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['LPC']; ?></b>
                                            <span class="users-list-date">LPG</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['alcohol']; ?></b>
                                            <span class="users-list-date">Alcohol</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['NH3']; ?></b>
                                            <span class="users-list-date">NH<sub>3</sub></span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['Carbon_Monoxide']; ?></b>
                                            <span class="users-list-date">CO(2)</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['NO2_Nitrogen_dioxide']; ?></b>
                                            <span class="users-list-date">NO<sub>2</sub></span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['VOC']; ?></b>
                                            <span class="users-list-date">VOC</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['Hydrogen_Gas']; ?></b>
                                            <span class="users-list-date">Hydrogen</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['Noice_Sensor']; ?></b>
                                            <span class="users-list-date">Noise</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['Ozone']; ?></b>
                                            <span class="users-list-date">Ozone</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['Methane']; ?></b>
                                            <span class="users-list-date">Methane</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['Air_Quality']; ?></b>
                                            <span class="users-list-date">Air Quality</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['Dust_sensor_1']; ?></b>
                                            <span class="users-list-date">Dust 1</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['Dust_sensor_2p5']; ?></b>
                                            <span class="users-list-date">Dust 2.5</span>
                                        </li>
                                        <li>
                                            <b><?php echo $row['Dust_sensor_10']; ?></b>
                                            <span class="users-list-date">Dust 10</span>
                                        </li>
                                    </ul>
                                    <br>
                                    <div class="text-center">
                                        <button class="btn btn-primary" onClick="window.location.href='graph.php?id=<?php echo $row['device_id'];  ?>'">Graph</button>
                                        <!-- <a class="btn btn-primary">Graphs</a> -->
                                        <br><br></div>

                                </div>
                            </div>
                            <!--/.box -->
                        </div>
                    <?php     }

                    $conn = NULL;
                    ?>
                </div>

            </section>

        </div>

        <!-- /.content-wrapper -->

        <?php include_once('footer.php') ?>

        <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
    <?php include_once('script.php') ?>
</body>

</html>

<script>
    $(function() {
        $('#example1').DataTable({
            "order": [
                [16, "desc"]
            ]
        })
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>