<!Docktype HTML>
<HTML>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="loginblock">

<form action="process.php" method="POST">
	<h2>Login</h2>
	<p>
		Username :
	</p>
	<input type="text" id="user" name="user" placeholder="Username">
	<p>
		Password :
	</p>
	<input type="password" id="pass" name="pass" placeholder="Password"><br><br>
	<input type="submit" value="Login"><br><br>
	<a href="registration.php">Forgot Password ?</a><br>
	<a href="signin.php">Don't Have an Account ?</a>
</form>
</div>
</body>
</HTML>