<?php
include_once 'database.php';	 
	
	 $stid = $_REQUEST['id'];
	$sql = "DELETE FROM deleted WHERE stid ='$stid'";
$sql1 ="UPDATE student
SET view = 0
WHERE stid = '$stid'";		

 if (mysqli_query($conn, $sql1)) {

		echo '<h3><font size="6" color="red"><center></center.</font></h3>';


	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	  if (mysqli_query($conn, $sql)) {

		echo "<script type='text/javascript'>alert('Student Restored!')</script>";

header( "refresh:0;url=deletedtablestruct.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

?>