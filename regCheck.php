<?php
	//session_start();
	

	if (isset($_POST['usernameMan'])) {
    	$usernameMan = $_POST['usernameMan'];
	}

	if (isset($_POST['password1'])) {
    	$pass1 = $_POST['password1'];
	}

	if (isset($_POST['password2'])) {
    	$pass2 = $_POST['password2'];
	}

	if (isset($_POST['fullNameMan'])) { 
    	$fullNameMan = $_POST['fullNameMan'];
	}
	if (isset($_POST['userType'])) { 
    	$userType = $_POST['userType'];
	}
	if (isset($_POST['contactNumMan'])) {
		$contactNumMan = $_POST['contactNumMan'];
	}


	if(isset($_REQUEST['signup'])){
		//$uname = $_REQUEST['uname'];
		//$password =  $_REQUEST['password'];
		
		if(empty(trim($usernameMan))){
			echo "username field is empty!";
		}else if(empty(trim($fullNameMan))){
			echo "Full Name field is empty!";
		}else if (empty(trim($contactNumMan))) {
			echo "Contact Number field is empty!";
		}
		else if($pass1!=$pass2){
			echo "Password didn't match!";
		}else{
			$password = $pass1;

			$myfile = fopen("userData.txt", "a") or die("Unable to open file!");
			$userData = "\n".$usernameMan."|".$password."|".$fullNameMan."|".$userType."|".$contactNumMan;
			fwrite($myfile, $userData);
			fclose($myfile);

			header("location: manager_login.php");
		}

	}else{
		echo "invalid request! please fill the form first!";
		//header("location: HFVusingPHP.php");
	}





/*	if( isset($_REQUEST['submit'])){
		$uname = $_REQUEST['uname'];
		$password =  $_REQUEST['password'];
		
		if(empty(trim($uname)) || empty(trim($password))){
			echo "Null submission found!";
		}else{

			$file = fopen('user.txt', 'r');
			$user = fread($file, filesize('user.txt'));
			$data = explode('|', $user);

			if( trim($data[0]) == $uname && trim($data[1]) == $password){
				//$_SESSION['uname'] = $uname;
				//$_SESSION['pass'] = $password;
				setcookie('username', $uname, time()+3600, '/');

				header("location: home.php");
			}else{
				echo "invalid uname/password";
			}
		}

	}else{
		//echo "invalid request! please login first!";
		header("location: login.php");
	}*/

	/*			$myfile1 = fopen("userLog.txt", "a") or die("Unable to open file!");
			$userLog = "\n".$id."|".$password."|".$userType;
			fwrite($myfile1, $userLog);
			fclose($myfile1);*/



?>