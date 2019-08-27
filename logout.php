<?php

	session_start();
	session_destroy();
	
	echo "Redirecting to login page!!";
	
	header("refresh:3;http://localhost/login/login.php");
	
?>