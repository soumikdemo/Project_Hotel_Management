<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
		<form action="regCheck.php" method="POST">
			<fieldset style="width:500px" align="center">
				<legend>MANAGER REGISTRATION</legend>
				Username</br>
				<input type="text" name="usernameMan" value=""></br>
				Password</br>
				<input type="Password" name="password1" value="" required></br>
				Confirm Password</br>
				<input type="Password" name="password2" value="" required></br>
				Full Name</br>
				<input type="text" name="fullNameMan" value=""></br>
				Contact Number</br>
				<input type="text" name="contactNumMan" value=""></br><hr>
				User Type: </br>
				<input type="radio" name="userType" value="manager" checked>Manager</br><hr>
				<input type="submit" name="signup" value="Sign Up"> |
				<a href="">Sign In</a>
			</fieldset>
		</form>
</body>
</html>