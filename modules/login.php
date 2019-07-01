<!DOCTYPE html>
    <html>
        <head>
            <title>Login</title>
            <?php
            include('navbar.php');
            ?>
            
            <link rel="stylesheet" href="../assets/css/login.css" type="text/css">
            

    
        </head>
        <body><div>
            </div>
            <section>
	            <div class="fullBackground"></div>
		            <div class="loginbox">
		                <h2>Login Here</h2>
		                <form action="../assets/php/login.php" method="post">
		                    <h1>Enter Your Name:</h1>
		                    <input type="name" placeholder="Enter your name" name="name" required>
		                    <h1>Password:</h1>
		                    <input type="password" placeholder="Enter Password" name="password" id="pass" required><br><br>
		                    <input type="submit" value="Login" ><br>
		                </form>
		            </div>
            </section>
            
        </body>
       
    </html>