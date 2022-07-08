<?php
 
	 $name = $_POST['name'];
	 $msg = $_POST['msg'];
	  $MAIL = $_POST['email'];
 	$replay = $_POST['replay'];
//$otp = rand(100000,999999);
$to_email = $MAIL;
$subject = "DO NOT REPLY";
$body = "Hai $name this is the reply of your enquiry $msg ......\n$replay\nThankyou for contacting us.\nHave a nice day";
$headers = "From: rajakumarynsscollege@gmail.com";
 
if (mail($to_email, $subject, $body, $headers)) {
   echo "<script type='text/javascript'>alert(' Email sent successsfully to $name')</script>";
header("Refresh:0; url=contactview.php");
} else {
      echo "<script type='text/javascript'>alert(' Email sending failed')</script>";
}