<?php session_start();
if (!isset($_SESSION['userid'])) {
  echo "<script language='javascript'>window.location.href='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>

<head>


  <?php $pageName = "Edit Device" ?>



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
    <?php //include_once('sidebar.php') 
    ?>

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
      <?php

      require_once("opendb.php");
      date_default_timezone_set("Asia/Karachi");

      if (isset($_GET['id'])) {

        $id = $_GET['id'];
        $device_id = $id;
        $q = "select * from device where device_id ='$id'";
        //echo $q;
        $result = $conn->query($q) or die("Query error");
        foreach ($result as $row) {

          $name = $row['name'];
          $description = $row['description'];
          $longitude = $row['longitude'];
          $latitude = $row['latitude'];
        }
      }
      ?>
      <section class="content">

        <div class="panel panel-primary" align="center" style="max-width: 700px">
          <div class="panel-heading"> Add New Device </div>
          <div class="panel-body">
            <form method="POST">
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="name" value="<?php echo $name; ?>" placeholder="" required="required" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="description" value="<?php echo $description; ?>" placeholder="Description" required="required" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Longitude</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="longitude" value="<?php echo $longitude; ?>" placeholder="Longitude" required="required" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Latitude</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="latitude" value="<?php echo $latitude; ?>" placeholder="Latitude" required="required" />
                </div>
              </div>

              <span style="display: inline;">
                <input type="submit" class="btn btn-primary" name="add" value="Update" />
                <button class="btn btn-primary" onclick="window.location.href = 'device_list.php';">Back to List</button>
              </span>

              <!-- <input type="submit" class="btn btn-primary" value=<?php echo $_GET['id']; ?> name="update" value="Edit" />
                <button class="btn btn-primary" onclick="window.location.href = 'device_list.php';">Back to List</button> -->
              </span>
            </form>
          </div>
        </div>

    </div>

    </section>

  </div>
  <?php include_once('footer.php') ?>

  <div class="control-sidebar-bg"></div>
  </div>
</body>

</html>
<?php

if (isset($_POST['add'])) {
  // var_dump($_POST);


  $tname = $_POST['name'];
  $description = $_POST['description'];
  $longitude = $_POST['long'];
  $latitude = $_POST['lat'];
  $q = "UPDATE device SET `name`='$tname', `description`='$description', `longitude`='$longitude', `latitude`='$latitude' where device_id='$id'";
  // echo $q;
  $result = $conn->query($q) or die("Query error");
  if ($result) {
    echo "<script> window.open('device_list.php?filter=0G0' , '_self'); </script>";
  }
}
$conn = null;
?>