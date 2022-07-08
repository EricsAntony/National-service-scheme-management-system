<?php
include_once 'database.php';	 
	;
	 $eid = $_REQUEST['id'];
	
$sql ="UPDATE event
SET view = 1
WHERE eid = '$eid'";		
 if (mysqli_query($conn, $sql)) {
		echo "<script type='text/javascript'>alert(' Event deleted!')</script>";

header( "refresh:0;url=eventupdate.php" );
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	// mysqli_close($conn);
 

?>