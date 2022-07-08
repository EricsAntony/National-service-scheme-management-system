
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
	 $pwd = $_POST['pwd'];


	


	 $sql = "UPDATE student SET name='$name',gname='$gname',dob='$dob',caste='$caste',dept='$dept',bg='$bg',email='$email',mob1='$mob1',mob='$mob',adr='$adr',gen='$gen',adrs='$adrs',pin='$pin',batch='$batch',rstatus='2',status='0',mark='0',dnr='$dnr',time='NOW()',view='0',pwd='$pwd' WHERE email='$email'";
	
 if (mysqli_query($conn, $sql)) {

		
 		echo "<script type='text/javascript'>alert('Registered successfully!')</script>";



header( "refresh:0;url=main2.php" );

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }



}
?>