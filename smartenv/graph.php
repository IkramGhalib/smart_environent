
<!doctype html>
<html><!-- InstanceBegin template="/Templates/Master.dwt" codeOutsideHTMLIsLocked="false" -->
  <meta http-equiv="refresh" content="30">
<head>

	<meta charset="utf-8"> 
	<!-- InstanceBeginEditable name="doctitle" -->
	<title>Device Detailed Analytics</title>
	<!-- InstanceEndEditable -->
	<!-- InstanceBeginEditable name="head" -->
	<!-- InstanceEndEditable --> 
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- 		/*All STYLES*/  --> 
<style>			
		#overflow{
		width: 100%;
		height: 100%;
		}

		#add-new-button{
		position: absolute;
		right:  120px;
		}

		.skin-blue{
		background-color:#ECF0F5;
		}

		thead{
		background-color:#0073B7;
		color:white;
		}
</style>
 
			<!--ALL LINKS-->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    
</head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<body class="skin-blue">
	<?php require_once('navbar.php');?>
	 <?php 
      date_default_timezone_set("Asia/Karachi");
      require_once("opendb.php");
      $device = $_GET['id'];
      $q = "select * from device where device_id = '".$device."'";

      $result= $conn -> query($q) or die("Query error");                          
      foreach($result as $row)
      {
       $name = $row['device_id']." - ".$row['name'];
   }
      $conn =null;

      ?>

<!--ASIDES
	 
 Left side column. contains the logo and sidebar -->

    <div class="content-header" background-color:#000000>

    <section class="content-header">
    <br><br>
    <br>
    <h1><b>
    Device Detailed Analytics (<?php echo $name; ?>)
    <button id="add-new-button" class="btn btn-primary" onClick="window.location.href='index.php'"><b>Return to Dashboard</b></button>

    </b></h1>

    </section>
    <hr>

    </div>
    <div >
        <div class="col-lg-5" style=" margin: 20px;">
          <iframe src="device_graph.php?id=<?php echo $device; ?>" width="1800" height="600" frameborder="0"></iframe>                                      
        </div>
    </div>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
		
	<!-- SlimScroll -->
	<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

   
    
              
</body>
</html>