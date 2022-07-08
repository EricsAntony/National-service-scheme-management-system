<?php 

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
  $sql = "select * from opent ";
  $rs = mysqli_query($conn, $sql);
  //get row
  $fetchRow = mysqli_fetch_assoc($rs);
  $k=$fetchRow['open'];
  //echo $k;


  	 if($k=='1')
	 {
header( "refresh:0;url=e.php" );
	 }
	 else
	 {
	 	echo "<script type='text/javascript'>alert(' registration for the current year is closed!')</script>";
	 	header( "refresh:0;url=main2.php" );
	 }
	 ?>