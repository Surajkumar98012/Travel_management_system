<?php
include 'db_conn.php';

$id=$_GET['id'];
$q="DELETE FROM `bus` WHERE id=$id";

mysqli_query($conn,$q);

header('location:edit_bus.php');

?>
