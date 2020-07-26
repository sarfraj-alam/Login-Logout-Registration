<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<link rel="stylesheet" href="style.css">
  	<title>Login Here</title>
</head>
<body>
  	<div class="wrapper">
    		<form method = "post" action="login.php" class="form">
			<?php include('errors.php'); ?>
      			<img src="icon/login_image.jpg">
      			<h2>Login</h2>
      				<div class="input-group">
        				<input type="text" name="username" id="loginuser" required>
        				<label for="loginuser">User Name</label>
      				</div>
      				<div class="input-group">
        				<input type="password" name="password" id="loginpassword" required>
        				<label for="loginpassword">Password</label>
      				</div>
      				<input type="submit" name = "Login" value="Login" class="submit-btn">
			<p>
				Not yet a member ? <a href = "register.php" style = "color : #cc0000"> Sign_Up </a>
			</p>
    		</form>
  	</div>
</body>
</html>