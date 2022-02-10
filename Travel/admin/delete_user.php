<?php
include 'db_conn.php';

$id=$_GET['id'];
$q="DELETE FROM `users` WHERE id=$id";

mysqli_query($conn,$q);

header('location:view_user.php');

?>
