<?php

	session_start();
	include('connection.php');

	$name = mysqli_real_escape_string($conn,$_POST['name']);
	
	$password = $_POST['password'];
	
	$qry = " select * from user where name='$name' and password='$password' ";
	$result=mysqli_query($conn,$qry);

	if(!$result){
		echo $qry;	
	}
	else{
		if($row= mysqli_fetch_assoc($result)){
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $name;
			$_SESSION['password'] = $password;
			echo "<script>alert('Welcome $name');
				window.location.href = '../../modules/form.php';
				</script>";
			
		}
		else{

			echo "<script>alert('Wrong Credentials');
					window.location.href = '../../modules/login.php';
					</script>";
		}	
	
	}
?>
