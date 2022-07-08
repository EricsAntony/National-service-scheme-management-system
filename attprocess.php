<?php 
include_once 'database.php';

if(isset($_POST['submit']))
{
    foreach ($_POST['attendance_status'] as $id => $attendance_status)
    {
        $roll_no = $_POST['roll_no'][$id];
        $eid = $_POST['eid'][$id];
        
         
       $sql="INSERT INTO attendance (stid, eventid, attendance) VALUES ( '$roll_no', '$eid', '$attendance_status')";
       if (mysqli_query($conn, $sql)) {

     }
     
    }
        echo "<script type='text/javascript'>alert('Attendance added!')</script>";



header( "refresh:0;url=eventviewtable.php" );
    
}
?>