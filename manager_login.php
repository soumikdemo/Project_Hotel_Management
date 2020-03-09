<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<form action="logCheck.php" method="POST" >
			<fieldset style="width:500px" align="center">
				<legend>LOGIN</legend>
				Username</br>
				<input type="text" name="usernameMan" value=""></br>
				Password</br>
				<input type="Password" name="password" value=""></br>
				<hr>
				<input type="submit" name="login" value="Login">
				<a href="manager_reg.php">Register</a>
			</fieldset>
		</form>
</body>
</html>