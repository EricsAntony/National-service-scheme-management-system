<?php  
 $servername='localhost';
$username='root';
$password='';
$dbname = "nss";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

	$email=$_POST['email'];
	$query = "SELECT * FROM `student` WHERE email='$email'";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$count = mysqli_num_rows($result);
$fetchRow = mysqli_fetch_assoc($result);
$rstatus = $fetchRow['rstatus'];
if ($count == 1 && $rstatus == 0 ){

   
    echo "<script type='text/javascript'>alert('Please complete your registration before login')</script>";
  header("Refresh:0; url=reg.php?email=$email");
    
    }
    if ($count == 1 && $rstatus == 1 ){

   
    echo "<script type='text/javascript'>alert('Please complete your registration before login')</script>";
  header("Refresh:0; url=reg.php?email=$email");
    
    }
   else if ($count == 0 ){

   
    echo "<script type='text/javascript'>alert('Note a registered User')</script>";
  header("Refresh:0; url=e.php?email=$email");
    
    }
else if ($count == 1 && $rstatus == 2 ){
   
$otp = rand(100000,999999);
$to_email = $email;
$subject = "OTP";
$body = "Hai Your One TIME PASSWORD   is $otp. DO not share with any one";  
$headers = "NSS COLLEGE RAJAKUMARY";
if (mail($to_email, $subject, $body, $headers)) {

   echo "<script type='text/javascript'>alert(' An OTP is send to $email.Please Complete Your Registration')</script>";
header("Refresh:0; url=otpvalforgot.php?email=$email");
    
 $sql = "update student set otp=$otp where email='$email'";
mysqli_query($conn, $sql);
	}
}
   else {
      echo "<script type='text/javascript'>alert('Email sending failed!')</script>";
      header("Refresh:0; url=e.php");
}


?>