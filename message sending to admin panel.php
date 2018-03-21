<?php
include("db.php");
$Editbox1=$_POST['Editbox1'];
$Editbox2=$_POST['Editbox2'];
$Editbox3=$_POST['Editbox3'];
$Editbox4=$_POST['Editbox4'];
$query=mysqli_query($cn,"insert into contactus(full_name,email,contact_no,message)values('$Editbox1','$Editbox2','$Editbox3','$Editbox4')");
header('location:contactus.php');
?>
