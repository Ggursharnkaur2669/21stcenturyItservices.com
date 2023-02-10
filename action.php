<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$message = $_POST['Message'];
$formcontent=" From: $Email \n Name: $Name \n Subject : $Subject \n Message: $Message";
$recipient = "info@21stcenturyitservices.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location:index.html");
exit;
?>
