<?php

	$con = mysqli_connect("localhost", "root", "");
	
	$course1 = $_POST['course'];
	$year1 = $_POST['year'];
	$branch1 = $_POST['branch'];
	$subject1 = $_POST['subject'];
	$title1 = $_POST['title'];
	
	mysqli_select_db($con, "login") or die(mysqli_error($con));
	
	$sql2 = "SELECT title,price FROM data WHERE course='$course1' and year='$year1'";
	
	$result = mysqli_query($con, $sql2);
	
	//$row = mysqli_fetch_array($result);
		
?>

<html>
    <head>
        <title>Sell :: BooksRentalSystem</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="menu">
            <ul type="none" >
                <li><a href="home.php">HOME</a></li>
                <li><a href="buy.php">BUY</a></li>
                <li><a href="sell.php"><font color="#00FF16">SELL</font></a></li>
                <li><a href="login.php">LOGOUT</a></li>
            </ul>
        </div>
        <div class="sub">
            <h1>
            <center>
			<ul class="card" type="none">
            <li>
                <img src="book.png" alt="Avatar" style="width:100px">
				<b></b>
				<br/>
                 <?PHP while ($row = mysqli_fetch_assoc($result)) {
					
					printf("%s\n%s\n",$row['title'], $row['price']);
					
					
					} ?>
					</li>
					</ul>
            </center>
            </h1>
        </div>
    </body>
</html>