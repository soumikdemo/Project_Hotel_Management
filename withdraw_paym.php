<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Withdraw Payments</title>
</head>
<body>
		<form>
			<fieldset style="width:500px" align="center">
				<legend>Withdraw Payments</legend>
				
				</br><hr>
				<a href="manager_home.php">Homepage</a></br>
			</fieldset>
		</form>
</body>
</html>