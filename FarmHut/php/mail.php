<?php
//get data from form  
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email= $_POST['emailaddress'];
$number= $_POST['mobile'];
$address= $_POST['address'];
$message= $_POST['message'];

$to = "shathurjan@farmhut.com.lk";

$subject = "Mail From Farmhut";
$txt ="First name = ". $firstname . "\r\n Last name =" . $lastname .  "\r\n Email = " . $email . "\r\n Mobile number =" . $number . "\r\n Address =". $address . "\r\n Message =". $message;
$headers = "From: noreply@farmhut.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>