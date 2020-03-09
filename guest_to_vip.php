<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Change Guest Status</title>
</head>
<body>
		<form>
			<fieldset style="width:500px" align="center">
				<legend>Change Guest Status</legend>
				Guest ID</br>
				<input type="text" name="guest_id" value=""></br></br><hr>
				Status</br>
				<input type="radio" name="statusType" value="normal">Normal 
				<input type="radio" name="statusType" value="vip">VIP</br>
				<hr>
				<input type="submit" name="changeGStat" value="Change"> | 
				<a href="manager_home.php">Back to Homepage</a>
			</fieldset>
		</form>
</body>
</html>