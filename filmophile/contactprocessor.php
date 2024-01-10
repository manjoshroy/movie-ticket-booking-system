<?php
$to = "abc@gmail.com";
$subject = "Contact Form Query | Filmophile";
$name = $_POST['name'] ;
$emailaddress = $_POST['emailaddress'] ;
$phone = $_POST['phone'] ;
$message=$_POST['message'] ;






$message = "Name: $name \n\nEmail: $emailaddress  \n\nMobile: $phone   \n\nMessage: $message";

$headers = "From: $email";
$sent = mail($to, $subject, $message, $headers) ;
if($sent)
{
Header("Location: thankyou.php");
}
else
{print "We encountered an error sending your mail"; }
?> 