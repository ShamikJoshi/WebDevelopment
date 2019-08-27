<?php

	$con = mysqli_connect("localhost", "root", "");
	
	$course = $_POST['course'];
	$year = $_POST['year'];
	$branch = $_POST['branch'];
	$subject = $_POST['subject'];
	$title = $_POST['title'];
	$price = $_POST['price'];
	$contactNo = $_POST['contact'];
	$paytmNo = $_POST['patmno'];
	$address = $_POST['addr'];
	
	mysqli_select_db($con, "login") or die(mysqli_error($con));
	
	$sql1 = "INSERT INTO data (course, year, branch, subject, title, price, contactNo, paytmNo, address) VALUES ('$course','$year','$branch','$subject','$title','$price','$contactNo','$paytmNo','$address')";
	
	mysqli_query($con, $sql1);
		
?>

<html>
    <head>
        <title>Sell :: BooksRentalSystem</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="menu">
            <ul type="none" >
                <li><a href="home.html">HOME</a></li>
                <li><a href="buy.html">BUY</a></li>
                <li><a href="sell.html"><font color="#00FF16">SELL</font></a></li>
                <li><a href="login.html">LOGOUT</a></li>
            </ul>
        </div>
        <div class="sub">
            <h1>
            <center>
                 Information Submitted<br><font color="#00FF16">Successfully...!!!</font>
                 <br><br><a href="home.php">
                 <button>
                    HOME
                 </button></a>
            </center>
            </h1>
        </div>
    </body>
</html>