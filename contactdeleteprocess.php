<?php
include_once 'database.php';	 
	
	 $email = $_REQUEST['email'];
	 $sql = "select * from contact";
$sql1 ="UPDATE contact
SET view = 1
WHERE email = '$email'";		
 if (mysqli_query($conn, $sql)) {
		echo "<script type='text/javascript'>alert('message removed!')</script>";

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	// mysqli_close($conn);
 if (mysqli_query($conn, $sql1)) {

		
header( "refresh:0;url=contactview.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

?>