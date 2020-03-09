<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Service Requests</title>
</head>
<body>
		<form>
			<fieldset style="width:500px">
				<table border="1" align="center">
					<tr>
						<td colspan="3" align="center">
						Service Requests
						</td>
					</tr>
					<tr>
						<td>Guest ID </td>
						<td>Guest Name</td>
						<td>Service</td>

					</tr>
					<tr>
						<td>15......... </td>
						<td>
							Bob.........
						</td>
						<td>room cleaning..</td>
					</tr>
					<tr>
						<td>10......... </td>
						<td>
							Clerk.........
						</td>
						<td>normal.........</td>
					</tr>
					<tr>
						<td>11......... </td>
						<td>
							Justin.........
						</td>
						<td>Launch..</td>
					</tr>
					<tr>
						<td>25......... </td>
						<td>
							Mike.........
						</td>
						<td>Dinner...</td>
					</tr>
					<tr>
						<td colspan="3" align="center">
							<a href="manager_home.php">Goto Homepage</a></br>
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>