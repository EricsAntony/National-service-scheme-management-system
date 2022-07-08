<?php
 $servername='localhost';
$username='root';
$password='';
$dbname = "nss";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
$email=$_REQUEST['email'];
$otp = rand(100000,999999);
$to_email = $email;
$subject = "OTP";
$body = "Hai Your One TIME PASSWORD IS $otp. DO not share with any one";  
$headers = "NSS COLLEGE RAJAKUMARY";
if (mail($to_email, $subject, $body, $headers)) {

   echo "<script type='text/javascript'>alert(' An OTP is send to $email.Please Complete Your Registration')</script>";

 $sql = "update student set otp=$otp where email='$email'";
mysqli_query($conn, $sql);
header("Refresh:0; url=otpval.php?email=$email");
	} else {
      echo "<script type='text/javascript'>alert(' Email sending failed')</script>";
}
?>