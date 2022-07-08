
<?php
include_once 'database.php';

if(isset($_POST['save']))
{	 
	
	 $message = $_POST['message'];

	 $sql = "INSERT INTO noti (date,message)
	 VALUES ('NOW()','$message')";
	
 if (mysqli_query($conn, $sql)) {

		
 		echo "<script type='text/javascript'>alert('Announcement posted!')</script>";



header( "refresh:0;url=admin.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	// mysqli_close($conn);



}
?>