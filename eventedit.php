<?php 
$eid=$_REQUEST['id'];
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
  $sql = "select * from event where eid = '$eid'";
  $rs = mysqli_query($conn, $sql);
  //get row
  $fetchRow = mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Event</title>
	<link rel="stylesheet" type="text/css" href="regcss.css">
	<script language="javascript">
        $(document).ready(function () {
            $("#txtdate1").datepicker({
                minDate: 0
            });
        });
    </script>
</head>
<body>
	<form action="eventeditproces.php" method="post">
	<div class="wrapper">
		<h1>Update</h1>


		<div class="input-data">
			<input type="hidden" required name="eid" value="<?php echo $eid?>" >
			<div class="underline"></div>
			
		</div><br>

		<div class="input-data">
			<input type="text" required name="etype" value="<?php echo $fetchRow['etype']?>" >
			<div class="underline"></div>
			<label>Event Type</label>
		</div><br>
          

		<div class="input-data">
			<input type="text" required name="ename" value="<?php echo $fetchRow['ename']?>"id="username" pattern="[a-zA-Z ]*">
			<div class="underline"></div>
			<label>Event Name</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="edesc" value="<?php echo $fetchRow['edesc']?>">
			<div class="underline"></div>
			<label>Event Description</label>
		</div><br>

		<div class="input-data">
			<input type="text" required name="stime" value="<?php echo $fetchRow['stime']?>">
			<div class="underline"></div>
			<label>Starting Time</label>
		</div><br>

		<div class="input-data">
			<input type="text" required name="etime" value="<?php echo $fetchRow['etime']?>">
			<div class="underline"></div>
			<label>Ending Time</label>
		</div><br>

		<div class="input-data">
			<input type="text" required name="batch" value="<?php echo $fetchRow['batch']?>">
			<div class="underline"></div>
			<label>Batch</label>
		</div><br>
          <br>
          <br>

         <div class="input-data">
			 <input  type="date" name="date" value="<?php echo $fetchRow['date']?>" required>
			
			<label>Date</label>
		</div><br>

		<br>

		<br>

		<div class="inputfield">
        <input type="submit" name="save" value="submit" class="btn">	<input type="reset" name="cancel" value="cancel" class="btn" >
      </div>

		<div >
			</form>
</body>
<script>
input.oninvalid = function(event) {
    event.target.setCustomValidity('NAME should only contain letters and Space');
}
</script>
<script>
var year = 2017;
var till = 2100;
var options = "";
for(var y=year; y<=till; y++){
Y=y+3;
  options += "<option>"+ y+"-"+Y+"</option>";
}
document.getElementById("year").innerHTML = options;
</script>
 
</html>