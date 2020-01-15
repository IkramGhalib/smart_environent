<?php session_start();
if( !isset($_SESSION['userid'])){
  echo "<script language='javascript'>window.location.href='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>

<head>


  <?php $pageName = "Add New Device" ?>



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

        <div class="panel panel-primary" align="center" style="max-width: 700px">
          <div class="panel-heading"> Add New Device </div>
          <div class="panel-body">
            <form method="post" action="add_device.php">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="id" placeholder="Device ID" required="required" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="name" placeholder="Device Name" required="required" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="description" placeholder="Description" required="required" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Longitude</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="long" placeholder="Longitude" required="required" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Latitude</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="lat" placeholder="Latitude" required="required" />
                </div>
              </div>

              <span style="display: inline;">
                <input type="submit" class="btn btn-primary" name="add" value="Add" />
                <button class="btn btn-primary" onclick="window.location.href = 'device-list.php?filter=0G0';">Back to List</button>
              </span>
            </form>
          </div>
        </div>

    </div>

    </section>

    <?php include_once('footer.php') ?>

    <div class="control-sidebar-bg"></div>
  </div>
</body>

</html>