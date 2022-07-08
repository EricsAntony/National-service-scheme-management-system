<?php
include_once 'database.php';	 
	 $reason = $_POST['reason'];
	 $stid = $_REQUEST['stid'];
	 $aware = $_POST['aware'];
	 $sql = "INSERT INTO deleted (stid,reason,aware,time)
	 VALUES ('$stid','$reason','$aware',NOW())";
$sql1 ="UPDATE student
SET view = 1
WHERE stid = '$stid'";		
 if (mysqli_query($conn, $sql)) {
		echo "<script type='text/javascript'>alert(' Student removed!')</script>";

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	// mysqli_close($conn);
 if (mysqli_query($conn, $sql1)) {

		
header( "refresh:0;url=adminviewtable.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

?>