<?php 
$stid=$_REQUEST['id'];
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
  $sql = "select * from student where stid = '$stid'";
  $rs = mysqli_query($conn, $sql);
  //get row
  $fetchRow = mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Why?</title>
	<link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
	<form action="deleteprocess.php" method="post">
	<div class="wrapper">
		<h1>Reason to delete</h1>
		<div class="input-data">
			<input type="hidden" name="stid" value="<?php echo $fetchRow['stid']?>">
			
		</div><br>
		<div class="input-data">
			<input type="text" name="name" value="<?php echo $fetchRow['name']?>" readonly>
			
			
			
		</div><br>
		<div class="input-data">
			<input type="text" class="inputfield" name="reason"required>
			<div class="underline"></div>
			<label>Reason</label>
			
		</div><br>
		<div>
			<p class="pi">Whether this student is aware of this action<p>&nbsp&nbsp&nbsp<input type="radio" name="aware" value="Yes" required><i class="i">Yes&nbsp<input type="radio" name="aware" value="No" ><i class="i">No<br>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="inputfield">
        <input type="submit" name="save" value="submit" class="btn">&nbsp&nbsp&nbsp&nbsp&nbsp<input type="reset" name="cancel" value="cancel" class="btn" >
      </div>
