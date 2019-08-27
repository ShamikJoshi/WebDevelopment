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
        <div class="content">
            <h2>
                Enter the following details :
            </h2>
            <form action="submitted.php" method="POST">
                <p>
                    Course&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :&ensp;&ensp;
                   <input type="text" name="course" placeholder="Course"><br><br>
                </p>
                <p>
                    Year&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :&ensp;&ensp;
				<input type="text" name="year" placeholder="Year"><br><br>
                </p>
                <p>
                    Branch&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :&ensp;&ensp;
				<input type="text" name="branch" placeholder="Branch"><br><br>
                </p>
                <p>Subject&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:&ensp;&ensp;
                <input type="text" name="subject" placeholder="Subject"><br><br>
                Title&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :&ensp;&ensp;
                <input type="text" name="title" placeholder="Title"><br><br>
                Price&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:&ensp;&ensp;
                <input type="text" name="price" placeholder="Price"><br><br>
                Contact Number&ensp;&ensp;&ensp; :&ensp;&ensp;
                <input type="text" name="contact" placeholder="Contact Number"><br><br>
                PayTm Number&ensp;&ensp;&ensp;&ensp;:&ensp;&ensp;
                <input type="text" name="patmno" placeholder="PayTm Number"><br><br>
                Address&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; :&ensp;&ensp;
                <input type="text" name="addr" placeholder="Building,Flat no. ,etc."><br><br>
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  
                <input type="text" name="addr2" placeholder="Street, City, etc.">
                </p><br><br>
                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp; &ensp; &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                
                    <input type="submit" name="sell" value="Submit" name="submit">
                
            </form>
        </div>
    </body>
</html>