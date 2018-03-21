<?php
include("db.php");
$email=$_POST['email'];
$country=$_POST['country'];
$state=$_POST['state'];
$district=$_POST['district'];
$city=$_POST['city'];
$street=$_POST['street'];
$mobile=$_POST['mobile'];
$mobile2=$_POST['mobile2'];
$sql=mysqli_query($cn,"UPDATE newdonor SET country='$country',state='$state',district='$district',city='$city',street='$street' ,contact_no='$mobile',alternate_no='$mobile2' where email='$email'");
header('location:userupdate.php');
?> 