<?php
include("db.php");

$contactno=$_GET['rd'];


mysqli_query($cn,"delete from needblood where contact_no='$contactno'");
header('location:allrequest.php');
?>