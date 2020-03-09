<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Event & Bookings</title>
</head>
<body>
		<form>
			<fieldset style="width:500px" align="center">
				<legend>Event & Bookings</legend>
				<b>Vacant Rooms: </b>B0201, B0202
				</br><hr>
				<a href="manager_home.php">Homepage</a></br>
			</fieldset>
		</form>
</body>
</html>