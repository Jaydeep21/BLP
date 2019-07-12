<?php

        
            include('navbar.php');
            

            if($_SESSION['name']!= 'rahulgupta'){
                echo "<script>alert('You are not registered user');
                window.location.href = 'login.php';
                </script>";
            }
            
            else{
            

            ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Admin Login</title>
            
            
            <link rel="stylesheet" href="../assets/css/login.css" type="text/css">
            <script type="text/javascript">
                function checkPassw(form){
                    if(form.password.value.length<8){
                        alert("Password should be atleast 8 charcaters long");
                        form.password.focus();
                        return false;
                        }
                    if(form.password.value != form.password1.value){
                        alert("Passwords are not matching");
                        form.password1.focus();
                        return false;
                        }
                        
                    }
            </script>

    
        </head>
        <body><div>
            </div>
            <section>
		            <div class="loginbox" style="height: 600px;">
		                <h2>Welcome Admin</h2>

		                <form onsubmit="return checkPassw(this);" action="../assets/php/admin.php" method="post" >
		                    <h1>New Doctor's Name:</h1>
		                    <input type="name" placeholder="Enter Doctor's Name" name="name" required>
		                    <h1>Password:</h1>
		                    <input type="password" placeholder="Enter Password" name="password"  required><br><br>
                            <h1>Confirm Password:</h1>
                            <input type="password" placeholder="Re-Enter Your Password" name="password1" required><br><br>
		                    <input type="submit" value=" + Add " ><br>
		                </form>
		            </div>
            </section>
            
        </body>
       
    </html>
    <?php

}
    ?>