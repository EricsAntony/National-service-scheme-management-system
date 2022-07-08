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
	<form method="post" action="otpforgot.php">
	<div class="wrapper">
		<h1>Reset Password</h1>
		<div class="input-data">
			
			<input type=hidden name="email" value="<?php echo $email; ?>">
			<input type="text" name="otp"><br><a href="resendotp.php?email=<?php echo $email;?>">resend OTP</a>

			<div class="underline"></div>
			<label>Enter OTP</label>
		</div>
		<div class="input-data">
			<div class="underline"></div>
		</div><br>
		<br>
      <div class="inputfield">
        <input type="submit" name="save" value="submit" class="btn">	<input type="reset" name="cancel" value="cancel" class="btn" >
      </div>
</div>
</form>
</html>
