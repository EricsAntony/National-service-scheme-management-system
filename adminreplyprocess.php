<?php
$to_email = "www.akhilshaji828161@gmail.com";
$subject = "National Service Scheme OTP is ******";
$body = "DAAA MANDAAAAA";
$headers = "From: rajakumarynsscollege@gmail.com";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}