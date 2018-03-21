<?php
include("db.php");
session_start();
$check=$_SESSION['username'];
$yu=mysqli_query($cn,"select uname from admin where uname='$check'");
$row=mysqli_fetch_array($yu);
$aa=$row['uname'];
if(!isset($aa))
{
header('location:index.php');
}
?>