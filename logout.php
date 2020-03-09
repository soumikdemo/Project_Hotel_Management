<?php
	session_start();

	
	setcookie('usernameMan', '', time()-10, '/');
	header("location: manager_login.php");

?>