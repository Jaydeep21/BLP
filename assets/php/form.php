<?php

include('connection.php');


$name = $_POST['Name'];
$dob = $_POST['DOB'];
$aadhar = $_POST['aadhar'];
$sex = $_POST['Sex'];
date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d H:i:s');


// echo $date;

$qry1 = "INSERT INTO `person` (`fname`, `dob`, `gender`, `aadhar`, `person_updated`) VALUES ('$name', '$dob', '$sex', $aadhar, '$date')";
$qry2
$qry3
$qry4
$qry5
$qry6
$qry7
$qry8
$qry9
$qry10
$qry11
$qry12
$qry13
$qry14
$qry15
$qry16
$qry17
$qry18
$qry19
$qry20






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

echo "<br/>*".$name."*".$dob." ".$aadhar." ".$sex." ".$date;
?>