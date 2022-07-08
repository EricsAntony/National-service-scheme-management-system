
<?php

$email=$_REQUEST['email'];
?>
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script> 
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
	<form action="registerprocess.php" onsubmit="Validate()" method="post">
	<div class="wrapper">
		<h1>Register</h1>
		<div class="input-data">
			<input type="text" required name="name" id="username" pattern="[a-zA-Z ]*">
			<div class="underline"></div>
			<label>Name</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="gname">
			<div class="underline"></div>
			<label>Name Of Guardian</label>
		</div><br>

		<div class="input-data">
		<p>Date of birth</p><input type="text" required name="dob" id="txtDate"  data-date-format="DD MMMM YYYY" onblur = "ValidateDOB()" id="from-datepicker" placeholder="dd/mm/yyyy">
		<span class="error" id="lblError"></span>


 
		
		</div>
		<div >
			<p class="pi">Gender</p>
			<input type="radio" name="gen" value="M" required><i class="i">Male</i>
			<input type="radio" name="gen" value="F" required><i class='i'>Female</i>
		</div><br>
		<div class="input-data">
			<input type="hidden" required name="email" value=<?php echo $email;?> readonly>
			
			
		</div><br>
		<div>
			<p>Department</p>
			<div class="custom_select">
            <select name="dept">
                        <option class="list" value="BCA">BCA</option>
  			<option class="list" value="BBA">BBA</option>
  			<option class="list" value="Bsc">BSC electronic</option>
  		
			<option class="list" value="BM1">B.COM MODEL 1</option>
			<option class="list" value="BM2">B.COM MODEL 2</option>
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
			<input type="num" required name="mob1" maxlength="10"  required  pattern="[0-9]{10}">
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
<div class="input-data">
			<input type="password" required name="pwd" required>
			<div class="underline"></div>
			<label>Password</label>
		</div><br>
<div class="input-data">
			<input type="password" required name="cpwd" required>
			<div class="underline"></div>
			<label>Confirm Password</label>
		</div><br>

      <div class="inputfield">
        <input type="submit" name="save" value="submit" class="btn">	<input type="reset" name="cancel" value="cancel" class="btn" >
      </div>
</div>
</div>
</form>
</body>
<script> 
$( document ).ready(function() {     
$("#from-datepicker").datepicker({          
format: 'dd-mm-yyyy' //can also use format: 'dd-mm-yyyy'     
});      
});  
</script> 
<script type="text/javascript">
    function ValidateDOB() {
        var lblError = document.getElementById("lblError");
 
        //Get the date from the TextBox.
        var dateString = document.getElementById("txtDate").value;
        var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
 
        //Check whether valid dd/MM/yyyy Date Format.
        if (regex.test(dateString)) {
            var parts = dateString.split("/");
            var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
            var dtCurrent = new Date();
            lblError.innerHTML = "Eligibility 18 years ONLY."
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
                return false;
            }
 
            if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {
 
                //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
                if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                    return false;
                }
                if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                    //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
                    if (dtCurrent.getDate() < dtDOB.getDate()) {
                        return false;
                    }
                }
            }
            lblError.innerHTML = "";
            return true;
        } else {
            lblError.innerHTML = "Enter date in dd/MM/yyyy format ONLY."
            return false;
        }
    }
</script>
<script>
var input = document.getElementById('username');
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