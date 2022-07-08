
<?php
session_start();
if(!isset($_SESSION["sess_user1"])){
 header("Location: main2.php");
}
else
{
?>
<?php 
$email=$_SESSION["sess_user1"];
$host = "localhost";
$user = "root";
$pass = "";
$db = "nss";
 
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
 ?>


 <?php 

 $sql2 = "select * from student where email='$email'";
  $rs2 = mysqli_query($conn, $sql2);
  //get row
  $fetchRow = mysqli_fetch_assoc($rs2); 
$name=$fetchRow['name'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="cstyle.css">
</style>
</head>
<body>
	<section class="contact">
		<div class="content">
			
			<h2>NATIONAL SERVICE SCHEME</h2>
			<p>Contact Us</p>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Address</h3>
						<p>The co-ordinator, National Service Scheme, NSS college Rajakumari, Kulapparachal P.O, Kulapparachal</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Phone</h3>
						<p>34454645756</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>nsscrky.ac.in - College website</p>
						<p>nsscrky.ac.in/nationl_service_scheme -College National Service Scheme site</p>
					</div>
				</div>
			</div>
			<div class="contactForm">
				<form method="post" action="contactprocess.php">
					<h2>Send Message</h2>
<div class="inputBox">
						<input type="hidden"  name="email" value="<?php echo "$email";?>">
	<input type="hidden"  name="name" value="<?php echo "$name";?>"></textarea>
						
					</div>
					<div class="inputBox">
						<textarea required name="message"></textarea>
						<span>Write to admin...</span>
					</div>
					<div class="inputBox">
						<input type="submit" name="save" value="send">
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
</body>
</html>
<?php
}
?>
