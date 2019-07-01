<?php

	session_start();
	if(!isset($_SESSION['name'])){
		header("location:../../");
	}
	include('connection.php');
	$name = $_POST['name'];
	$password = $_POST['password'];

	$qry = "insert into user (name,password) values ('$name','$password')";

	$result = mysqli_query($conn,$qry);

	if(!$result){
		echo $qry;
	}
	else{
		echo "<script>alert('New Doctor $name Added Successfully');
                window.location.href = '../../modules/admin.php';
                </script>";
	}
?>