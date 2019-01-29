<?php

include('connection.php');

$name = $_POST['Name'];
$dob = $_POST['DOB'];
$aadhar = $_POST['aadhar'];
$sex = $_POST['Sex'];
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');
// echo $date;

$qry="insert into `person` (`fname`, `dob`, `gender`, `aadhar`, `person_updated`) values ('$name', '$dob', '$sex', $aadhar, '$date')";

$result = mysqli_query($conn,"show tables");
$insert = mysqli_query($conn, $qry);

if($result){
    // header("location:http//:localhost/BLP/index.html");
    while ($row = mysqli_fetch_assoc($result)) {
    	echo "<br/>".$row['Tables_in_blp'];
    }
}
if($insert){
	echo"Successful Insertion";
}
else{
    echo"Query error";
}

echo "<br/>*".$name."*";
?>
