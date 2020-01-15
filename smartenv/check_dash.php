<!DOCTYPE html>
<html>

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
        <?php
        require_once("opendb.php");
        $query = "SELECT * FROM devices_logs ORDER BY id DESC LIMIT 3";
        $result = $conn->query($query) or die("Query error");

        foreach ($result as $row) {
        ?>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title"><?php echo $row['device_id']; ?></h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <ul class="users-list clearfix">
                  <li>
                    <!-- <img src="dist/img/user1-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Temperature</a>
                    <span class="users-list-date"><?php echo $row['temperature']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user8-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Humidity</a>
                    <span class="users-list-date"><?php echo $row['temperature']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user7-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Pressure</a>
                    <span class="users-list-date"><?php echo $row['pressure']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user6-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Carbon Monoxide</a>
                    <span class="users-list-date"><?php echo $row['CO']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user2-160x160.jpg" alt="User Image"> -->
                    <a class="users-list-name">LPG</a>
                    <span class="users-list-date"><?php echo $row['LPC']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user5-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Alcohol</a>
                    <span class="users-list-date"><?php echo $row['alcohol']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user4-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">NH3</a>
                    <span class="users-list-date"><?php echo $row['NH3']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Carbon Dioxide</a>
                    <span class="users-list-date"><?php echo $row['Carbon_Monoxide']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Nitrogen Dioxide</a>
                    <span class="users-list-date"><?php echo $row['NO2_Nitrogen_dioxide']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Ammonia</a>
                    <span class="users-list-date"><?php echo $row['Ammonia']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">VOC</a>
                    <span class="users-list-date"><?php echo $row['VOC']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Hydrogen Gas</a>
                    <span class="users-list-date"><?php echo $row['Hydrogen_Gas']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Noise Sensor</a>
                    <span class="users-list-date"><?php echo $row['Noice_Sensor']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Ozone</a>
                    <span class="users-list-date"><?php echo $row['Ozone']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Methane</a>
                    <span class="users-list-date"><?php echo $row['Methane']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Air Quality</a>
                    <span class="users-list-date"><?php echo $row['Air_Quality']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Dust Sensor 1</a>
                    <span class="users-list-date"><?php echo $row['Dust_sensor_1']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Dust Sensor 2.5</a>
                    <span class="users-list-date"><?php echo $row['Dust_sensor_2p5']; ?></span>
                  </li>
                  <li>
                    <!-- <img src="dist/img/user3-128x128.jpg" alt="User Image"> -->
                    <a class="users-list-name">Dust Sensor 10</a>
                    <span class="users-list-date"><?php echo $row['Dust_sensor_10']; ?></span>
                  </li>
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <!-- <a href="javascript:void(0)" class="uppercase">View All Users</a> -->
              </div>
              <!-- /.box-footer -->
            </div>
          </div>
        </div>
      </section>
    <?php     }

        $conn = NULL;
    ?>

    <!-- /.content -->



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