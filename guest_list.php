<?php	
	session_start();
	if(!isset($_COOKIE['usernameMan'])){  
		header("location: manager_login.php");
	} 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Guest List</title>
</head>
<body>
		<form>
			<fieldset style="width:500px">
				<table border="1" align="center">
					<tr>
						<td colspan="3" align="center">
						Guest List
						</td>
					</tr>
					<tr>
						<td>Guest ID </td>
						<td>Guest Name</td>
						<td>VIP Status</td>

					</tr>
					<tr>
						<td>15......... </td>
						<td>
							Bob.........
						</td>
						<td>vip.........</td>
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
						<td>normal.........</td>
					</tr>
					<tr>
						<td>25......... </td>
						<td>
							Mike.........
						</td>
						<td>VIP.........</td>
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