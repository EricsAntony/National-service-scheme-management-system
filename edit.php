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
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
	<form action="EDITPROCESS.php" method="post">
	<div class="wrapper">
		<h1>Edit Details</h1>
		<div class="input-data">
			<input type="hidden" required name="stid"  value="<?php echo $fetchRow['stid']?>" >
		</div><br>
		<div class="input-data">
			<input type="text" required name="name"  value="<?php echo $fetchRow['name']?>" id="username" pattern="[a-zA-Z ]*">
			<div class="underline"></div>
			<label>Name</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="gname" value="<?php echo $fetchRow['gname']?>" id="username" pattern="[a-zA-Z ]*">
			<div class="underline"></div>
			<label>Name Of Guardian</label>
		</div><br>

		<div class="input-data">
		<p>Date of birth</p><input type="text" required name="dob" id="txtDate"  data-date-format="DD MMMM YYYY" onblur = "ValidateDOB()" id="from-datepicker" placeholder="dd/mm/yyyy" value="<?php echo $fetchRow['date']?>" >
		<span class="error" id="lblError"></span>


 
		
		</div><br>
		<div class="input-data">
			<input type="text" required name="gen" value="<?php echo $fetchRow['gen']?>">
			<div class="underline"></div>
			<label>Gender</label>
		</div><br>
		<div class="input-data">
			<input type="email" required name="email" value="<?php echo $fetchRow['email']?>">
			<div class="underline"></div>
			<label>Email</label>
		</div><br>
			<div class="input-data">
			<input type="text" required name="dept" value="<?php echo $fetchRow['dept']?>" >
			<div class="underline"></div>
			<label>Department</label>
		</div><br>
			<div class="input-data">
			<input type="text" required name="batch" value="<?php echo $fetchRow['batch']?>">
			<div class="underline"></div>
			<label>Batch</label>
		</div><br>
			<div class="input-data">
			<input type="text" required name="caste" value="<?php echo $fetchRow['caste']?>">
			<div class="underline"></div>
			<label>Category</label>
		</div><br>
			<div>
			<p>Blood group</p>
			<div class="custom_select">
            <select name="bg">
<option value="O+">O+</option>
    			  <option value="<?php echo $fetchRow['bg']?>"><?php echo $fetchRow['bg']?></option>
    			  <option value="A+">A+</option>
     			 <option value="B+">B+</option>
				<option value="AB+">AB+</option>
 			<option value="O-">O-</option>
    			  <option value="A-">A-</option>
     				 <option value="B-">B-</option>
			<option value="AB-">AB-</option>
            </select></div><br>
 	<br><br><br>
      	<div class="input-data">
			<input type="text" required name="dnr" value="<?php echo $fetchRow['dnr']?>">
			<div class="underline"></div>
			<label>Would you like to donate blood</label>
		</div><br>
		<div>
            
            <br>
            <div class="input-data">
			<input type="num" required name="mob1" maxlength="10"  pattern="[0-9]{10}" value="<?php echo $fetchRow['mob1']?>">
			<div class="underline"></div>
			<label>Mobile Number</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="mob" maxlength="10" required  pattern="[0-9]{10}" value="<?php echo $fetchRow['mob']?>">
			<div class="underline"></div>
			<label>Parent's phone number</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="adr" maxlength="12" required  pattern="[0-9]{12}" value="<?php echo $fetchRow['adr']?>">
			<div class="underline"></div>
			<label>Aadhar number</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="pin" maxlength="6" required  pattern="[0-9]{6}" value="<?php echo $fetchRow['pin']?>">
			<div class="underline"></div>
			<label>Pin</label>
		</div><br>
		<div class="input-data">
			<input type="text" required name="adrs" value="<?php echo $fetchRow['adrs']?>">
			<div class="underline"></div>
			<label>Address</label>
		</div><br>
		<div class="input-data">
			<input type="password" required name="pwd" required value="<?php echo $fetchRow['pwd']?>">
			<div class="underline"></div>
			<label>Password</label>
		</div><br>

      <div class="inputfield">
        <input type="submit" name="save" value="submit" class="btn">	<input type="reset" name="cancel" value="cancel" class="btn" >
      </div>
</div>
</div>
</form>
</body>
<script>
input.oninvalid = function(event) {
    event.target.setCustomValidity('NAME should only contain letters and Space');
}
var year = 2017;
var till = 2100;
var options = "";
for(var y=year; y<=till; y++){
Y=y+3;
  options += "<option>"+ y+"-"+Y+"</option>";
}
document.getElementById("year").innerHTML = options;
</script>
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
</html>