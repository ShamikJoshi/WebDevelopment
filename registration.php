<?php

	$username = $_POST['user'];
	$password = $_POST['pass'];
	$password1 = $_POST['pass1'];
	
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$password1 = stripcslashes($password1);
	
	session_start();
	
	$con = mysqli_connect("localhost", "root", "");
	
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);
	$password1 = mysqli_real_escape_string($con, $password1);
	
	
	mysqli_select_db($con, "login") or die(mysqli_error($con)); 
	
	if($password == $password1){
		$password = md5($password);
		$sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
		mysqli_query($con, $sql);
	}else{
		$_SESSION['message'] = "Two passwords do not match";
	}
?>