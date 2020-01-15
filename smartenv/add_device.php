<?php
include_once("opendb.php");
if (isset($_POST['add'])) {
    $id              = $_POST['id'];
    $name                   = $_POST['name'];
    $description            = $_POST['description'];
    $longitude              = $_POST['long'];
    $latitude               = $_POST['lat'];

    $sql = "INSERT INTO device(device_id, name, description, longitude, latitude) VALUES(:id, :name, :description,:longitude, :latitude)";
    $query = $conn->prepare($sql);

    $query->bindparam(':id', $id);
    $query->bindparam(':name', $name);
    $query->bindparam(':description', $description);
    $query->bindparam(':longitude', $longitude);
    $query->bindparam(':latitude', $latitude);

    $query->execute();
    header("Location:device_list.php");
}
