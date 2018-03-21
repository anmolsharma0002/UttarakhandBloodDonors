<?php
include("db.php");
session_start();
$check=$_SESSION['username'];
$yu=mysqli_query($cn,"select full_name from newdonor where email='$check'");
$row=mysqli_fetch_array($yu);
$aa=$row['full_name'];
if(!isset($aa))
{
header('location:index.php');
}
?>