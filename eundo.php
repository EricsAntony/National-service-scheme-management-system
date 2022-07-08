<?php
include_once 'database.php';	 
	
	 $eid = $_REQUEST['id'];
	
$sql1 ="UPDATE event
SET view = 0
WHERE eid = '$eid'";		

 if (mysqli_query($conn, $sql1)) {

		echo "<script type='text/javascript'>alert('Event Restored!')</script>";

header( "refresh:0;url=deletedevent.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	  

?>