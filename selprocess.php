<?php 
include_once 'database.php';

if(isset($_POST['submit']))
{
    foreach ($_POST['attendance_status'] as $id => $attendance_status)
    {
        $roll_no = $_POST['roll_no'][$id];
       
        
       $sql="UPDATE student set status=1 where stid='$roll_no'";
       if (mysqli_query($conn, $sql)) {

        //echo '<h3><font size="6" color="red"><center> Student registration successful</center.</font></h3>';
//header( "refresh:3;url=adminbottom.php" );

     }
     
    }
        echo "<script type='text/javascript'>alert('list generated!')</script>";



header( "refresh:0;url=selbatch.php" );
    
}
?>