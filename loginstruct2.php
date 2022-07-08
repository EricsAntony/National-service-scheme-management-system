<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="logstyle.css">
	<title>LogIn</title>
</head>
<body>
	<div class="login-wrapper">
		<form action="loginprocess.php" method="post" class="form">
			<img src="download.jpg" alt="avatar" align="center">
			<h2>Login</h2>
			<div class="input-group">
				<input type="text" name="user" id="loginUser" required>
				<label for="loginUser">User Name</label>
			</div>
				<div class="input-group">
				<input type="password" name="pass" id="loginPassword" required>
				<label for="loginPassword">Password</label>
			</div>
			<a href="Forgot.php" style="color: #fff;" >Forgot password</a>
			<input type="submit" value="Login" name="save" class="submit-btn" >
		</form>

</body>
</html>