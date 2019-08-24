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
$Rid = empty($_GET['rid']) ? 0 : $_GET['rid'];

// $Pid = 32;
echo "Pid= " . $Pid . "<br>";


    $qry5 = "UPDATE  `record` SET 
    -- `date_attend`='$date',
    `examiner`= '$Examiner'
    WHERE `pid`= $Pid and `rid`=$Rid";

    query($qry5, 'record');  

        
        $qry10 = "UPDATE `follow_up_record` SET
        `clinical_notes`= '$follow_up_clinical_notes' ,
        `prescription` = '$follow_up_prescription',
        `complaints` = '$follow_up_complaints'
        WHERE `fid`= $Rid AND `pid`= $Pid ";

        // echo $qry10;
        query($qry10, 'follow_up_record');

        mysqli_query($conn,"DELETE FROM `smear_test` WHERE `rid`=$Rid ");
        if ( !empty($Site) ) {

            foreach ($Site as $key => $value) {

              if( empty($Site[$key]) ) { break; }

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
    


    $qry12 = "SELECT `pb`, `mb`, `tt`, `bt`, `bb`, `bl`, `ll`, `pnl` FROM `leprosy_diagnosed` l, `record` r WHERE r.`pid` = $Pid AND r.`rid` = l.`rid`";
    $leprosyDiag = mysqli_query($conn, $qry12) or die("Error : " . mysqli_error($conn));

    // for naming of images
    $imageTags = '';

    if ($leprosyDiag) {

        $type = mysqli_fetch_assoc($leprosyDiag);

            // type of leprosy diagnosed
        if( $type['pb'] ) { $imageTags = $imageTags . "_PB"; }
        if( $type['mb'] ) { $imageTags = $imageTags . "_MB"; }
        if( $type['tt'] ) { $imageTags = $imageTags . "_TT"; }
        if( $type['bt'] ) { $imageTags = $imageTags . "_BT"; }
        if( $type['bb'] ) { $imageTags = $imageTags . "_BB"; }
        if( $type['bl'] ) { $imageTags = $imageTags . "_BL"; }
        if( $type['ll'] ) { $imageTags = $imageTags . "_LL"; }
        if( $type['pnl'] ) { $imageTags = $imageTags . "_PNL"; }
    }
    // print_r($imageTags);

    // print_r($Images);
    
    foreach ($Images["name"] as $count => $error) {
        echo "hi";
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $Images["tmp_name"][$count];
            if (!$tmp_name) continue;

            uploadImages($Pid, $Images, $count, $imageTags);
        }
        elseif ($error == 4) {
          echo "<br>No images were uploaded.<br>";
        }
        else {
            echo "Error  : " . $error;
        }
    }

//header("location:../../modules/display1.php?pid=".$Pid);


?>