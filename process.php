<?php
$name = $_POST['name'];
$message = $_POST['message'];
$email=$_POST['emailid'];
$telephone=$_POST['telephone'];

//send email to contacter 

$to = $email;
$subject = "Thankyou ".$name." for contacting";
$msg = "Hello ".$name."!"."\nThankyou you for contacting me I will revert you back ASAP \nRegards\nKaushik Gandhi\nphone no:+918695042180";
$from = "kaushik@codepensieve.com";
$headers = "From:" . $from;
mail($to,$subject,$msg,$headers);
//send mail to myself

mail("kaushikfrnd@gmail.com",$name." contacted you",$message."\n telephone no: ".$telephone,$headers);
?>
