<?php  
 $servername='localhost';
$username='root';
$password='';
$dbname = "nss";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

	$otp=$_POST['otp'];
	$email=$_POST['email'];
$query = "SELECT * FROM `student` WHERE email='$email'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
$fetchRow = mysqli_fetch_assoc($result);
$otp1 = $fetchRow['otp'];

if ($otp == $otp1)
{
$sql = "update student set rstatus = 1, otp =null where email = '$email'";
if (mysqli_query($conn, $sql)) {

		
 		echo "<script type='text/javascript'>alert('Authentication successful!')</script>";



header("Refresh:0; url=reg.php?email=$email");
}
}
else
{
echo "<script type='text/javascript'>alert('Invalid OTP Please Enter the correct OTP!')</script>";
 header("Refresh:0; url=otpval.php?email=$email");

}
?>