<?php
	session_start();
	
	if (isset($_POST['usernameMan'])) {
    	$usernameMan = $_POST['usernameMan'];
	}

	if (isset($_POST['password'])) {
    	$password = $_POST['password'];
	}


	if( isset($_REQUEST['login'])){
		//$uname = $_REQUEST['uname'];
		//$password =  $_REQUEST['password'];
		
		if(empty(trim($usernameMan)) || empty(trim($password))){
			echo "Null submission found!";
		}else{


			$fn = fopen("userData.txt","r");
								  
			while(! feof($fn))  {

					$result = fgets($fn);
					$data= explode('|', $result);							

					if (trim($data[0]) == $usernameMan && trim($data[1])== $password) {

							setcookie('usernameMan', $usernameMan, time()+3600, '/'); 
							header("location: manager_home.php");
					}else {
						echo "invalid username/password! Try Again.";
					}
				}
			}

	}else{
		//echo "invalid request! please login first!";
		header("location: manager_login.php");
	}



?>