<?php

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$message=$_POST['message'];

$to="contact@goldenhillhealthcare.co.uk";
$subject="Contact Form Query";
$txt="<h2> Full Name : $fullname <br> Email : $email <br> Phone Number : $phonenumber <br> Message : $message </h2>"; 

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: Contact@goldenhillhealthcare.co.uk:";


$success = mail($to,$subject,$txt,$headers);
if (!$success) {
    echo error_get_last()['message'];
}
else
	{echo "Thanks for Contacting Us. Your message is succesffully sent, We will contact you soon.";}

?>