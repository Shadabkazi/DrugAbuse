<?php

$message="";
$subject="";
$email_address="";
$headers ="";

// Load form field data into variables
$email_address= $_GET["emailad"];
$message= $_GET['message'];
$subject= $_GET['name'];
$headers = "From: $email_address" . "\r\n" .
"CC: somebodyelse@example.com";



// Send Mail By PHP Mail Function
if(mail($email_address,"Feedback from ".$subject,$message,$headers))
{

header("Location: index.html");
}
?>

