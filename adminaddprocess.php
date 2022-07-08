<?php
include_once 'database.php';

if(isset($_POST['save']))
{	 
	 $name = $_POST['name'];
	 $gname = $_POST['gname'];
	 $dob = $_POST['dob'];
	 $caste = $_POST['caste'];
	 $dept = $_POST['dept'];
         $bg = $_POST['bg'];
	 $email = $_POST['email'];
	 $mob1 = $_POST['mob1'];
 	 $mob = $_POST['mob'];
	 $adr = $_POST['adr'];
	 $gen = $_POST['gen'];
	 $adrs = $_POST['adrs'];
	 $pin = $_POST['pin'];
       $batch = $_POST['batch'];
	
	 $dnr = $_POST['dnr'];
	 //$simg = $_POST['simg'];
	$query="select * from student where adr='$adr'";

if($result=mysqli_query($conn,$query)){

if(mysqli_num_rows($result)>0){
echo "<script type='text/javascript'>alert(' Already Registered!')</script>";



header( "refresh:0;url=admin.php" );

exit(0);
}}


	 $sql = "INSERT INTO student (name,gname,dob,caste,dept,bg,mob1,mob,adr,gen,email,adrs,pin,dnr,time,batch)
	 VALUES ('$name','$gname','$dob','$caste','$dept','$bg','$mob1','$mob','$adr','$gen','$email','$adrs','$pin','$dnr',NOW(),'$batch')";
	
 if (mysqli_query($conn, $sql)) {

		
 		echo "<script type='text/javascript'>alert('Registered successfully!')</script>";



header( "refresh:0;url=admin.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	// mysqli_close($conn);



}
?>