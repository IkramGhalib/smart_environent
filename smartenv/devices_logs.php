<?php session_start();
if (!isset($_SESSION['userid'])) {
  echo "<script language='javascript'>window.location.href='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>

<head>

  <?php $pageName = "Device Logs" ?>
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
      <section class="content">

        <div id="overflow" style="overflow-x:auto;">
          <table id="example1" class="table table-responsive table-bordered table-striped">
            <thead class="bg-blue">
              <tr>
                <th>Device ID</th>
                <th>Temperature(Celsius)</th>
                <th>Humidity(%)</th>
                <th>Pressure(mb)</th>
                <th>CO(ppm)</th>
                <th>LPG(ppm)</th>
                <th>Alcohol( mg/L)</th>
                <th>Flame(res)</th>
                <th>NH3(ppm)</th>
                <th>Carbon_Monoxide(ppm)</th>
                <th>Ammonia(ppm)</th>
                <th>NO2_Nitrogen_dioxide(ppm)</th>
                <th>VOC's Gases(ppm)</th>
                <th>Hydrogen_Gas(ppm)</th>
                <th>Noice_Sensor(db)</th>
                <th>Ozone(ppm)</th>
                <th>Methane(ppm)</th>
                <th>Air_Quality(ppm)</th>
                <th>Dust_sensor_1(μg/(m^3)</th>
                <th>Dust_sensor_2.5(μg/(m^3)</th>
                <th>Dust_sensor_10(μg/(m^3)</th>
                <th>Date Time</th>

              </tr>
            </thead>
            <tbody>

              <?php
              require_once("opendb.php");
              $query = "select * from devices_logs order by datetime desc";
              $result = $conn->query($query) or die("Query error");

              foreach ($result as $row) {
              ?>


                <tr class="odd gradeX ">
                  <td><?php echo $row['device_id']; ?> </td>
                  <td><?php echo $row['temperature']; ?> </td>
                  <td><?php echo $row['humidity']; ?> </td>
                  <td><?php echo $row['pressure']; ?> </td>
                  <td><?php echo $row['CO']; ?> </td>
                  <td><?php echo $row['LPC']; ?> </td>
                  <td><?php echo $row['alcohol']; ?> </td>
                  <td><?php echo $row['flame']; ?> </td>
                  <td><?php echo $row['NH3']; ?> </td>
                  <td><?php echo $row['Carbon_Monoxide']; ?> </td>
                  <td><?php echo $row['Ammonia']; ?> </td>
                  <td><?php echo $row['NO2_Nitrogen_dioxide']; ?> </td>
                  <td><?php echo $row['VOC']; ?> </td>
                  <td><?php echo $row['Hydrogen_Gas']; ?> </td>
                  <td><?php echo $row['Noice_Sensor']; ?> </td>
                  <td><?php echo $row['Ozone']; ?> </td>
                  <td><?php echo $row['Methane']; ?> </td>
                  <td><?php echo $row['Air_Quality']; ?> </td>
                  <td><?php echo $row['Dust_sensor_1']; ?> </td>
                  <td><?php echo $row['Dust_sensor_2p5']; ?> </td>
                  <td><?php echo $row['Dust_sensor_10']; ?> </td>
                  <td><?php echo $row['datetime']; ?> </td>
                </tr>
              <?php     }

              $conn = NULL;
              ?>
              <!--End Advanced Tables -->


            </tbody>
            <tfoot class="bg-blue">
              <tr>
                <th>Device ID</th>
                <th>Temperature(Celsius)</th>
                <th>Humidity(%)</th>
                <th>Pressure(mb)</th>
                <th>CO(ppm)</th>
                <th>LPG(ppm)</th>
                <th>Alcohol( mg/L)</th>
                <th>Flame(res)</th>
                <th>NH3(ppm)</th>
                <th>Carbon_Monoxide(ppm)</th>
                <th>Ammonia(ppm)</th>
                <th>NO2_Nitrogen_dioxide(ppm)</th>
                <th>VOC's Gases(ppm)</th>
                <th>Hydrogen_Gas(ppm)</th>
                <th>Noice_Sensor(db)</th>
                <th>Ozone(ppm)</th>
                <th>Methane(ppm)</th>
                <th>Air_Quality(ppm)</th>
                <th>Dust_sensor_1(μg/(m^3)</th>
                <th>Dust_sensor_2.5(μg/(m^3)</th>
                <th>Dust_sensor_10(μg/(m^3)</th>
                <th>Date Time</th>

              </tr>

            </tfoot>
          </table>
      </section>
    </div>
    <?php include_once('footer.php') ?>

    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <?php include_once('script.php') ?>
</body>

<script>
  $(function() {
    $('#example1').DataTable({
      "order": [
        [21, "desc"]
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

</html>