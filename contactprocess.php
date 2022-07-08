
<?php

include_once 'database.php';

if(isset($_POST['save']))
{	 
	 
	 $message = $_POST['message'];
	 $email = $_POST['email'];
 $name = $_POST['name'];
	 $sql = "INSERT INTO contact (email,message,time,name)
	 VALUES ('$email','$message',NOW(),'$name')";
	
 if (mysqli_query($conn, $sql)) {

		
 		echo "<script type='text/javascript'>alert('Message sent!You will be replied soon')</script>";



header( "refresh:0;url=student.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	// mysqli_close($conn);



}
?>