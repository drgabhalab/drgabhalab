<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone=$_POST['phone'];
$to = "amshaileshpayments@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message." Phone =".$phone;
$headers = "From: amshaileshpayments@gmail.com" . "\r\n" .
"CC: amshaileshpayments@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>