<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("config.php");
if(isset($_POST['submit']) && $_POST['submit'] == "Login"){
	$email = $_POST['email'];
	$password =   $_POST['password'];
	$rememberme = isset($_POST['remmberme'])?true:false;
	
	include("controller/users.php");
	
	$user = new Users();
	$login = $user->login($email,$password,$rememberme);

	if($login){
		if($_SESSION['group_name'] == "admin")
		{
			header("Location:".$base_url."admin");	
		}
		elseif($_SESSION['group_name'] == "client"){
			header("Location:".$base_url."client");
		}
		elseif($_SESSION['group_name'] == "employee"){
			header("Location:".$base_url."member");
		}
	}
	else{
		header("Location:".$base_url."?error_code=401");
	}
}
else{
	header("Location:".$base_url."?error_code=400");
}


?>