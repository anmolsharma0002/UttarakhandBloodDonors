<?php
include("db.php");
$email=$_POST['email'];
$new=$_POST['new'];
$old=$_POST['old'];
$sql=mysqli_query($cn,"UPDATE newdonor SET password='$new'  where email='$email' AND password='$old'");
header('location:userchangepassword.php');
?> 