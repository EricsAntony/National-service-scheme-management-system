<?php  
 $servername='localhost';
$username='root';
$password='';
$dbname = "nss";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

	$email=$_POST['email'];

	$pwd=$_POST['pwd'];
	 $sql = "update student set pwd='$pwd' where email='$email'";
if(mysqli_query($conn, $sql))
{
	echo "<script type='text/javascript'>alert('Password Updated')</script>";




header( "refresh:0;url=loginstruct2.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }




?>