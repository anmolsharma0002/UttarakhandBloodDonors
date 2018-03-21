<?php
include("db.php");
$postdate=date("d/m/y");
$title=$_POST['title'];
$desp=$_POST['desp'];
$query=mysqli_query($cn,"insert into news(p_date,title,desp)values('$postdate','$title','$desp')");
header('location:admindashboard.php');
?>

