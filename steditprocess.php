<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/javascript" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.13.0/dist/sweetalert2.all.min.js">
</head>


<?php
include_once 'database.php';

if(isset($_POST['save']))
	{	  $stid = $_POST['stid'];
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
$dnr = $_POST['dnr'];;


$sql ="UPDATE student
SET name = '$name', gname= '$gname',dob= '$dob',caste= '$caste',dept= '$dept',bg= '$bg',email= '$email',mob= '$mob1',mob= '$mob',adr= '$adr',gen= '$gen',adrs= '$adrs',pin= '$pin',batch= '$batch'
WHERE stid = '$stid'";

if (mysqli_query($conn, $sql)) {

		//echo '<h3><font size="6" color="red"><center> data edited </center.</font></h3>';
	echo "<script type='text/javascript'>alert('Updated!')</script>";



	header( "refresh:0;url=student.php?id=$email" );

} else {
	echo "Error: " . $sql . "
	" . mysqli_error($conn);
}
	// mysqli_close($conn);

}


?>
