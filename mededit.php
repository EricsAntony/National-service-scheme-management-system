<?php
include_once 'db.php';
$sql = "select * from med_details where medcode = '$medcode'";
  $rs = mysqli_query($conn, $sql);
  $fetchRow = mysqli_fetch_assoc($rs);
  ?>
<html>
<head>
	<title> medicine</title>
</head>
<style>
	 *{
   	margin: 5px;
   	padding: 3px;
   }
   body{
    max-width: 550px;
    margin: 50px auto;
    padding: 20px;
    box-shadow: 0 10px 30px 0px rgb(0,0,0,0.6);
    background: #fff;
    color: #000;
    font-family: calibri;
    font-size: 18px;
   }
   h3{
   	margin-bottom: 20px;
   	font-weight: bold;
   	letter-spacing: 2px;
   	font-family: time new roman;
   	font-size: 25px;
   }
   input{
   	margin-bottom: 25px;
   	width: 510px;
   	padding: 5px 0;
   	background: transparent;
   	border: 0;
   	border-bottom: 1px solid #435160;
   	outline: none;
   	font-size: 16px;
   }
   label{
   	color: blue;
   }
   .btn{
   	background: red;
   	border: 0;
   	width: 200px;
   	height: 40px;
   	border-radius: 10px;
   	color: #fff;
   	font-size: 20px;
   	cursor: pointer;
   	transition: background .3s ease-in-out;
   	text-transform: capitalize;
   	margin-left: 150px;
   }
   .btn:hover{
   	background: #16aa56;
   	animation-name: shake;
   }
</style>
<form method="post" action="medicineprocess.php">
	<h3 align="center">MEDICINE DETAILS</h3>
<body>
	<label>Medicine name</label><input  type="text" name="medname" value="<?php echo $fetchRow['medcode']?> "required>
	<label>Medicine description</label><input type="text" name="description" value="<?php echo $fetchRow['description']?>" required>
	<label>Remarks</label><input type="text" name="remarks" value="<?php echo $fetchRow['remarks']?>">
	<label>Total quantity</label><input type="num" name="tquantity" value="<?php echo $fetchRow['tquantity']?>" required>
  <label>Recieved date</label><input type="date" name="rdate" value="<?php echo $fetchRow['rdate']?>" required>
    <input class="btn" type="submit" value="submit" name="save">
</body>	
</form>
</html> 
                         

