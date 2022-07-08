<?php
include_once 'database.php';	 
	
	 $status = $_POST['status'];
	 $eventid = $_POST['eid'];
	 $stid = $_POST['stid'];
//echo "$eventid";echo "$status";
	 if($status=='Present')
	 {
$sql ="UPDATE attendance SET attendance ='Absent' WHERE eventid = '$eventid' and stid = '$stid'";		
 if (mysqli_query($conn, $sql)) 
 {
		echo "<script type='text/javascript'>alert(' Attendance Changed!')</script>";
           header( "refresh:0;url=eventupdate.php" );
	 }
	  else 
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	// mysqli_close($conn);
 
}
                 }
else
{
	$sql ="UPDATE attendance SET attendance ='Present' WHERE eventid = '$eventid' and stid = '$stid'";		
 if (mysqli_query($conn, $sql)) 
 {
		echo "<script type='text/javascript'>alert(' Attendance Changed!')</script>";
           header( "refresh:0;url=eventupdate.php" );
	 }
	  else 
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
}
}
?>