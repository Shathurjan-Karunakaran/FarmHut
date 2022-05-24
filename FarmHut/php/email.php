<?php
//get data from form  

$email= $_POST['emailaddress'];

$to = "shathurjan@farmhut.com.lk";

$subject = "Mail From Farmhut";
$txt ="Email Address = ". $email;
$headers = "From: noreply@farmhut.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>