<?php
include_once 'database.php';

	 
	 $etype = $_POST['etype'];
	 $ename = $_POST['ename'];
	 $edesc = $_POST['edesc'];
	 $stime = $_POST['stime'];
	 $etime = $_POST['etime'];
	 $batch = $_POST['batch'];
     $date = $_POST['date'];
	
	

	 $sql = "INSERT INTO event (etype,ename,edesc,stime,etime,batch,date)
	 VALUES ('$etype','$ename','$edesc','$stime','$etime','$batch','$date')";
	
 if (mysqli_query($conn, $sql)) {

		//echo '<h3><font size="6" color="red"><center> Your registration succcesfull</center.</font></h3>';
 		echo "<script type='text/javascript'>alert(' Successfully Created !')</script>";



header( "refresh:0;url=eventupdate.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	// mysqli_close($conn);




?>