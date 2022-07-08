<?php
include_once 'database.php';	 
	
	 $stid = $_REQUEST['stid'];
$sql1 ="UPDATE student
SET view = 1
WHERE stid = '$stid'";		
	// mysqli_close($conn);
 if (mysqli_query($conn, $sql1)) {

		
header( "refresh:0;url=adminviewtable.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }

?>