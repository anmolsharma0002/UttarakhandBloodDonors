<?php
if(isset($_POST["submit"])){
// Checking For Blank Fields..     full name		email id 			contact number     message
if($_POST["Editbox1"]==""||$_POST["Editbox2"]==""||$_POST["Editbox3"]==""||$_POST["Editbox4"]==""){
echo "Fill All Fields..";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['Editbox2'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$name= $_POST['Editbox1'];
$subject = "Uttarakhand Blood Donors";
$phone = $_POST['Editbox3'];
$msg = $_POST['Editbox4'];
$message= "Name : ".$name. "\n" . "Contact No. : " .$phone. "\n\n" .$msg;
$headers = 'From:'. $email . "\r\n"; // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("anmol.sds10@yahoo.com", $subject, $message, $headers);
header('location:feedback.php');
}
}
}
?>