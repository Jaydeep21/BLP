<?php

include('connection.php');
$name = $_POST['Name'];
/*$age = $_POST['age'];*/ 

$dob = $_POST['DOB'];
$aadhar = $_POST['aadhar'];
$sex = $_POST['Sex'];
$occupation=$_POST['Occupation'];
$examiner=$_POST['Examiner'];
$doctor_name=$_POST['Reffered'];
/*$paddress=$_POST['Add1'];*/
$pid = $_POST['ID'];
/*echo $name;
echo $dob;
echo $aadhar;
echo $sex;
echo $address;*
echo $occupation;*/
echo $examiner;
echo $doctor_name;
$qry = "update `person` set `fname`='".$name."', `dob`=".$dob.", `aadhar`=".$aadhar.", `sex`='".$sex."',`occupation`='".$occupation."' where `pid`=".$pid."";
$qry1= "update `treatment_record` set `examiner`='".$examiner."' where `pid`=".$pid."";
$qry2="update `referred` set `doctor_name`='".$doctor_name."' where `pid`=".$pid."";
/*$qry ="update `address` set  paddress='".$address."' where `pid`=".$pid."";*/


$result  = mysqli_query($conn,$qry1);
if($result){
	echo"success";
}
else{
	echo"locha";
}
$result  = mysqli_query($conn,$qry2);
if($result){
	echo"success";
}
else{
	echo"locha";
}
?>