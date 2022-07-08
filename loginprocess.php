
<?php  
 $servername='localhost';
$username='root';
$password='';
$dbname = "nss";
$conn=mysqli_connect($servername,$username,$password,"$dbname");

	$user = "admin";
	$pass = "1234";
	
	$dbusername=$_POST['user'];
	$dbpassword=$_POST['pass'];

	if($user == $dbusername && $pass == $dbpassword)
	{
		session_start();
		$_SESSION['sess_user']=$user;
 //Redirect Browser
		header("Location:admin.php");
	}
else if (isset($_POST['user']) and isset($_POST['pass'])){
	

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `student` WHERE email='$dbusername' and pwd='$dbpassword' ";


$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $fetchRow = mysqli_fetch_assoc($result);
$status=$fetchRow['status'];
$count = mysqli_num_rows($result);

if ($count == 1 and $status== 1){
session_start();
		$_SESSION['sess_user1']=$dbusername;
header("Location:student.php");
   
    }else if ($count == 1 and $status== 0){
    echo "<script type='text/javascript'>alert('You are not Selected As a volunteer')</script>";
header("Refresh:0; url=main2.php");
    }
else{
 echo "<script type='text/javascript'>alert('Invalid Login')</script>";
header("Refresh:0; url=main2.php");
}
}
?>