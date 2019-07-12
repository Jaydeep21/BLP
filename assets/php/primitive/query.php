<?php

include('connection.php');

function query($query, $message = '') {
	global $conn;
	$insert = mysqli_query($conn, $query);
	if($insert){
	  echo"Successful Insertion ".$message."<br>";
	  return 1;
	}
	else{
	  echo"<br>Query error ".$message." : " . mysqli_error($conn)."<br>";
	  return 0;
	}
}

?>