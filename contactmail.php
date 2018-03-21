<?php
if(isset($_POST["send"])){

if($_POST["Editbox5"]==""){
echo "Email field is blank";
}else{
// Check if the "Sender's Email" input field is filled out
$email=$_POST['Editbox5'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{
$to= $_POST['Editbox5'];
$name= $_POST['Editbox1'];
$subject = "Uttarakhand Blood Donors";
$phone = $_POST['Editbox6'];
$msg = "Thanks For Register as Blood Donor ";
$message= "Dear  ".$name. " " . "Your Contact No." .$phone. " " .$msg;
$headers = 'From:'. $email . "\r\n"; // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail($to, $subject, $message, $headers);
//header('location:contactus.php');
}
}
}
?>