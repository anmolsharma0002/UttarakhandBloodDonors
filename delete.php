<?php
include("db.php");

$email=$_GET['rd'];


mysqli_query($cn,"delete from newdonor where email='$email'");
header('location:listofdonors.php');
?>