<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Alter Guest Information</title>
</head>
<body>
		<form>
			<fieldset style="width:500px" align="center">
				<legend>Alter Guest Information</legend>
				Search By Guest Name:</br>
				<input type="text" name="gName_search" value="">
				<input type="submit" name="gName_search" value="Search">
				</br><hr>
				Type Guest ID</br>
				<input type="text" name="guest_id" value=""></br>
				Guest Name</br>
				<input type="text" name="guest_name" value=""></br>
				Contact No</br>
				<input type="text" name="guest_cont_no" value=""></br>
				Email Address</br>
				<input type="text" name="guest_email" value=""></br>
				<hr>
				<input type="submit" name="alterGInfo" value="Change"> | 
				<a href="manager_home.php">Back to Homepage</a>
			</fieldset>
		</form>
</body>
</html>