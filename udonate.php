<?php
include("db.php");
$email=$_POST['email'];
$camp=$_POST['camp'];
$date=$_POST['date'];
$unit=$_POST['unit'];
$sql=mysqli_query($cn,"UPDATE newdonor SET camp='$camp',date='$date',unit='$unit' where email='$email'");
header('location:userblooddonated.php');
?> 