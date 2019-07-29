<?php

include('connection.php');
session_start();
$pid = $_POST['id'];
$name = $_POST['Name'];
echo $name;

$qry = "update person set fname='$name' where pid='$pid'";

if(mysqli_query($conn,$qry)){
	echo "Updated Successfully";
}
?>