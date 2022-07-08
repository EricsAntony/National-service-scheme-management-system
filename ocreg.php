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


  	 if($k=='0')
	 {
$sql ="UPDATE opent SET open ='1'";		
 if (mysqli_query($conn, $sql)) 
 {
		echo "<script type='text/javascript'>alert(' registration opened!')</script>";
           header( "refresh:0;url=admin.php" );
	 }
	  else 
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	// mysqli_close($conn);
 
}
                 }
else
{
	$sql ="UPDATE opent SET open ='0'";		
 if (mysqli_query($conn, $sql)) 
 {
		echo "<script type='text/javascript'>alert(' registration closed!')</script>";
           header( "refresh:0;url=admin.php" );
	 }
	  else 
	 {
		echo "Error: " . $sql . " " . mysqli_error($conn);
}
}
  ?>