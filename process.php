<?php

	//Get the username and password passed from login page
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	
	$password = md5($password);
	
	$con = mysqli_connect("localhost", "root", "");
	
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);
	
	
	mysqli_select_db($con, "login") or die(mysqli_error($con));
	
	$result = mysqli_query($con, "select * from users where username = '$username' and password = '$password'")
				or die("Failed to query database".mysqli_error($result));
				
	$row = mysqli_fetch_array($result);
	
	if($row['username'] == $username and $row['password'] == $password){
		
		session_start();
		
		echo "Login successful  Welcome  " .$row['username'];
		
		header("Location: http://localhost/login/home.php");
	}
	else{
		echo "Failed to login";
		echo "Redirecting to login page!!!"; 
		header("refresh:3;http://localhost/login/login.php");
	}
	


?>