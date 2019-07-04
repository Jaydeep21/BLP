<?php

include('connection.php');
include('variablesFollowup.php');

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
//$date = date('Y-m-d H:i:s');

function query($query, $message = '') {
  global $conn;
  $insert = mysqli_query($conn, $query);
  if($insert){
    echo"<br>Successful Insertion ".$message."";
  }
  else{
    echo"<br><br>Query error ".$message." : " . mysqli_error($conn)."<br>";
  }
}
$Pid = $_GET['pid'];
$qry10 = "INSERT INTO `follow_up_record` (
   `pid` ,
   `clinical_notes` ,
   `prescription` ,
   `complaints` ,
   `due_date`,
   `appointment_for`,
   `date_for_next_appointment`
 ) VALUES($Pid,'$follow_up_clinical_notes','$follow_up_prescription','$follow_up_complaints','$follow_up_due_date','$appointment_for','$date_for_next_appointment');";
echo $qry10;
query($qry10,'follow_up_record'); 
$qry5 = "INSERT INTO `record` (
  `pid` ,
  `date_attend`,
  `examiner`
) VALUES($Pid, '$date', '$Examiner');";
query($qry5, 'record');
$Rid = $conn->insert_id;
foreach ($Site as $key => $value) {
  	if(!empty($Site[$key])) { continue; }
    $qry11="INSERT INTO `smear_test` (
      `rid` ,
      `site`,
      `mi` ,
      `bi` ,
      `pid`,
    ) VALUES($Rid, '$Site[$key]', $mi[$key], $bi[$key], $Pid);";
	query($qry11,'smear_test');
  }

?>