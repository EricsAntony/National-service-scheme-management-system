<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
	<form action="adminaddprocess.php" method="post">
	<div class="wrapper">
		<h1>Register</h1>
		<div class="input-data">
			<input type="text" required name="name">
			<div class="underline"></div>
			<label>Name</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="gname">
			<div class="underline"></div>
			<label>Name Of Guardian</label>
		</div><br>

		<div class="input-data">
		<p>Date of birth</p><input type="date" required name="dob">
		<div class="underline"></div>
		</div><br>
		<div >
			<p class="pi">Gender</p>
			<input type="radio" name="gen" value="M" required><i class="i">Male</i>
			<input type="radio" name="gen" value="F" required><i class='i'>Female</i>
		</div><br>
		<div class="input-data">
			<input type="email" required name="email">
			<div class="underline"></div>
			<label>Email</label>
		</div><br>
		<div>
			<p>Department</p>
			<div class="custom_select">
            <select name="dept">
            <option class="list" value="BCA">BCA</option>
  			<option class="list" value="BBA">BBA</option>
  			<option class="list" value="Bsc">BSC electronic</option>
  			<option class="list" value="BBA">BBA</option>
			<option class="list" value="BM1">B COM MODEL 1</option>
			<option class="list" value="BM2">B COM MODEL 2</option>
            </select>
          </div>
		</div><br>
		<br>
		<br>
		 <div class="inputfield">
          <p>Batch</p>
          <div class="custom_select">
            <select name="batch" id="year">
            </select><br><br>
   
          </div>
       </div> 
		 <div class="">
          <p class="cat">Category</p><br><br>
          <div class="custom_select">
            <select name="caste">
    			 <option value="SC">SC</option>
    		  <option value="ST">ST</option>
     		 <option value="OBC">OBC</option>
		<option value="GEN">GEN</option>
            </select><br><br></div></div>
		<br><br>
		<div class="">
          <p class="cat">Blood Group</p>
          <div class="custom_select">
            <select name="bg">
    			  <option value="O+">O+</option>
    			  <option value="A+">A+</option>
     			 <option value="B+">B+</option>
				<option value="AB+">AB+</option>
 			<option value="O-">O-</option>
    			  <option value="A-">A-</option>
     				 <option value="B-">B-</option>
			<option value="AB-">AB-</option>
            </select></div></div><br>
 <div><br>
 	<br><br><br>
         <b> Would you like to donate blood </b>
          <input type="radio" name="dnr" value="Y" required><b>Yes</b>    <input type="radio" name="dnr" value="N" required><b>No</b>
       </div> 

		<div>
            
            <br>
            <div class="input-data">
			<input type="num" required name="mob1" maxlength="10" required  pattern="[0-9]{10}">
			<div class="underline"></div>
			<label>Mobile Number</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="mob" maxlength="10" required  pattern="[0-9]{10}">
			<div class="underline"></div>
			<label>Parent's phone number</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="adr" maxlength="12" required  pattern="[0-9]{12}">
			<div class="underline"></div>
			<label>Aadhar number</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="pin" maxlength="6" required  pattern="[0-9]{6}">
			<div class="underline"></div>
			<label>Pin</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="adrs">
			<div class="underline"></div>
			<label>Address</label>
		</div><br>

      <div class="inputfield">
        <input type="submit" name="save" value="submit" class="btn">	<input type="reset" name="cancel" value="cancel" class="btn" >
      </div>
</div>
</div>
</form>
</body>
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