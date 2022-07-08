



<?php  
$email=$_REQUEST['email'];
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="regcss.css">
</head>
<body>
	<form method="post" action="reset.php">
	<div class="wrapper">
		<h1>Change Password</h1>
		<div class="input-data">
			
			<input type=hidden name="email" value="<?php echo $email; ?>">
			<input type="text" name="pwd" id="password">

			<div class="underline"></div>
			<label>Enter your new password</label>
		</div><br>
		<div class="input-data">
			<input type="text" id="confirm_password">
			<div class="underline"></div>
			<label>Re-enter your new password</label>
		</div>
		<div class="input-data">
			<div class="underline"></div>
		</div><br>
		<br>
      <div class="inputfield">
        <input type="submit" value="change password" class="btn"> 	<input type="reset" name="cancel" value="cancel" class="btn" >
      </div>
</div>
</form>
</html>
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>