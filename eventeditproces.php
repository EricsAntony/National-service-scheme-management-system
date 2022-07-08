<?php
include_once 'database.php';


   $eid = $_POST['eid'];
   $etype = $_POST['etype'];
   $ename = $_POST['ename'];
   $edesc = $_POST['edesc'];
   $stime = $_POST['stime'];
   $etime = $_POST['etime'];
   $batch = $_POST['batch'];
     $date = $_POST['date'];
  
  
$sql ="UPDATE event
SET etype = '$etype', ename= '$ename',edesc= '$edesc',etime= '$etime',stime= '$stime',batch= '$batch',date= '$date'
WHERE eid = '$eid'";
  
 if (mysqli_query($conn, $sql)) {

    //echo '<h3><font size="6" color="red"><center> Your registration succcesfull</center.</font></h3>';
    echo "<script type='text/javascript'>alert(' Successfully Updated !')</script>";



header( "refresh:0;url=eventupdate.php" );

   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
  // mysqli_close($conn);




?>