<?php
	
	$con = mysqli_connect("localhost", "root", "");
	
	if(isset($_POST['register']))
	{
	
	$username = $_POST['user'];
	$password = $_POST['pass'];
	$password1 = $_POST['pass1'];
	
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$password1 = stripcslashes($password1);
	
	session_start();
	
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);
	$password1 = mysqli_real_escape_string($con, $password1);
	
	
	mysqli_select_db($con, "login") or die(mysqli_error($con)); 
	
	if($password == $password1){
		$password = md5($password);
		$sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
		mysqli_query($con, $sql);
		
		header("Location: http://localhost/login/login.php");
		
	}else{
		$_SESSION['message'] = "Two passwords do not match";
	}
	}
?>



<!Docktype HTML>
<HTML>
<head>
	<title>SignIn</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jscript.js"></script>
</head>
<body>
<div class="loginblock">
<form action="signin.php" method="POST" name="signin">
	<h2>Sign In</h2>
	<p>
		Email :
	</p>
	<input type="text" id="user" name="user" placeholder="Username">
	<p>
		Password :
	</p>
	<input type="password" id="pass" name="pass" placeholder="Password">
	<p>
		Confirm Password :
	</p>
		<input type="password" id="pass1" name="pass1" placeholder="Password">

	<br><br>

	<input type="submit" name="register" value="SignIn"><br><br>
</form>
</div>
</body>
</HTML>