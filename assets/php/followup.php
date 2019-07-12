<?php

include 'functions.php';
// include('connection.php');
// include('query.php');
include 'variablesFollowup.php';
// include ('uploadImage.php');

date_default_timezone_set('Asia/Kolkata');
$date = date('Y-m-d');
//$date = date('Y-m-d H:i:s');

// function query($query, $message = '') {
//   global $conn;
//   $insert = mysqli_query($conn, $query);
//   if($insert){
//     echo"<br>Successful Insertion ".$message."";
//   }
//   else{
//     echo"<br><br>Query error ".$message." : " . mysqli_error($conn)."<br>";
//   }
// }
$Pid = empty($_GET['pid']) ? 0 : $_GET['pid'];
// $Pid = 32;
echo "Pid= " . $Pid . "<br>";

if ( !empty($Pid) ) {

    $qry5 = "INSERT INTO `record` (
    `pid` ,
    `date_attend`,
    `examiner`
    ) VALUES ($Pid, '$date', '$Examiner');";

    if( query($qry5, 'record') ) {

        $Rid = $conn->insert_id;
        $qry10 = "INSERT INTO `follow_up_record` (
        `fid`,
        `pid` ,
        `clinical_notes` ,
        `prescription` ,
        `complaints`
        ) VALUES ($Rid, $Pid, '$follow_up_clinical_notes', '$follow_up_prescription', '$follow_up_complaints');";

        // echo $qry10;
        query($qry10, 'follow_up_record');

        if ( !empty($Site) ) {

            foreach ($Site as $key => $value) {

            	if( empty($Site[$key]) ) { continue; }

                $mi[$key] = empty($mi[$key]) ? 0 : $mi[$key];
                $bi[$key] = empty($bi[$key]) ? 0 : $bi[$key];

                $qry11 = "INSERT INTO `smear_test` (
                `rid` ,
                `site`,
                `mi` ,
                `bi` ,
                `pid`
                ) VALUES ($Rid, '$Site[$key]', $mi[$key], $bi[$key], $Pid);";

            	query($qry11, 'smear_test row ' . $key);
            }
        }
    }
    else {
        echo "<br>Record not created<br>";
    }

    if ( !empty($Images['error'][0]) ) {

        foreach ($Images["error"] as $count => $error) {

            if ($error == UPLOAD_ERR_OK) {

                $tmp_name = $Images["tmp_name"][$count];

                if (!$tmp_name) continue;

                uploadImages($Pid, $Images, $count, $tag);
            }
            else {
                echo ">Error  : " . $error;
            }
        }
    }
    else {
        echo "<br>No file found.<br>";
    }

}
else {
    // echo "<script>
    // alert('Patient not selected.');
    // document.location.href = 'health.php';
    // </script>
    // ";
    echo "no pid";
}

?>