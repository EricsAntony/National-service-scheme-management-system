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

   
    echo "<script type='text/javascript'>alert('Email Already Exist Complete your Registration')</script>";
  header("Refresh:0; url=reg.php?email=$email");
    }else if ($count == 1 && $rstatus == 1 ){
    echo "<script type='text/javascript'>alert('verification completed!REGISTER your details')</script>";
   header("Refresh:0; url=reg.php?email=$email");
    }
else if ($count == 1 && $rstatus == 2 ){
    echo "<script type='text/javascript'>alert('Registration completed please Login')</script>";
   header("Refresh:0; url=main2.php?email=$email");
    }
    else{
$otp = rand(100000,999999);
$to_email = $email;
$subject = "OTP";
$body = "Hai Your One TIME PASSWORD IS $otp. DO not share with any one";  
$headers = "NSS COLLEGE RAJAKUMARY";
if (mail($to_email, $subject, $body, $headers)) {

   echo "<script type='text/javascript'>alert(' An OTP is send to $email.Please Complete Your Registration')</script>";
header("Refresh:0; url=otpval.php?email=$email");
    
 $sql = "INSERT INTO student (email,otp)
	 VALUES ('$email', '$otp')";
mysqli_query($conn, $sql);
	} else {
    
      echo "<script type='text/javascript'>alert(' Email sending failed')</script>";
}
}

?>