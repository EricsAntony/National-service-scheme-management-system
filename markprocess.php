<?php 
include_once 'database.php';

if(isset($_POST['submit']))
{
    foreach ($_POST['mark'] as $id => $attendance_status)
    {
        $roll_no = $_POST['roll_no'][$id];
        //$eid = $_POST['eid'][$id];
        
         
       $sql="UPDATE student SET mark=$attendance_status where stid=$roll_no";
       if (mysqli_query($conn, $sql)) {

        //echo '<h3><font size="6" color="red"><center> Student registration successful</center.</font></h3>';
//header( "refresh:3;url=adminbottom.php" );

     }
     
    }
        echo "<script type='text/javascript'>alert('Mark added!')</script>";
header( "refresh:0;url=adminviewtable.php" );  
}
?>