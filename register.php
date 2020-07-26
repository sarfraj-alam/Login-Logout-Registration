<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style.css">
	<title>Register Here</title>
</head>
<body>
	<div class="wrapper">
		<form method = "post" action="register.php" class="form">
			<?php include('errors.php'); ?>
			<img src="icon/register_image.png">
			<h2>Register</h2>
				<div class="input-group">
					<input type="text" name="username" id="registeruser" required>
					<label for="registeruser">User Name</label>
				</div>
				<div class="input-group">
					<input type="email" name="email" id="registeremail" required>
					<label for="registeremail">Email_Id</label>
				</div>
				<div class="input-group">
					<input type="password" name="password_1" id="registerpassword" required>
					<label for="registerpassword">Password</label>
				</div>
				<div class="input-group">
					<input type="password" name="password_2" id="confirm_password" required>
					<label for="confirm_password">Confirm_Password</label>
				</div>
				<input type="submit" name = "Register" value="Register" class="submit-btn">
			<p>
				Already a member? <a href = "login.php" style = "color : #cc0000"> Login </a>
			</p>
		</form>
	</div>
</body>
</html>