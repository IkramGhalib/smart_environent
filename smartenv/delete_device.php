<?php session_start();
if (!isset($_SESSION['userid'])) {
  echo "<script language='javascript'>window.location.href='login.php';</script>";
}
?>
<?php
require_once("opendb.php");
$id = "";
if (isset($_GET['id']) == TRUE) {
  $id = $_GET['id'];
}

$query = "DELETE FROM device WHERE device_id='" . $id . "'";
$conn->query($query) or die("deleting error");
echo "<script language=\"javascript\" type=\"text/javascript\"> window.location.href=\"device_list.php\"; </script>";
