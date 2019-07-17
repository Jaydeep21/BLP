<?php
include 'connection.php';
function query ( $query, $message = '' ) {
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
function escape ( $string ) {
	global $conn;
	return mysqli_real_escape_string($conn, $string);
// 	$safe = mysqli_real_escape_string($conn, $string);
// 	echo "<br>|" . $safe . "|";	
// 	return $safe;
}
function uploadImages ( $Pid, $Images, $count = 0, $tags = '' ) {
	global $conn;
    $nameNumber = $count;
    // global $Images;
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Ymd');
    // $date = str_replace('-', '', $date);
    // $Pid = 69;
    $target_dir = dirname(dirname(__FILE__)) . "/images/patient/";
    // $target_dir = '../images/patient';
    // print_r($target_dir);
    if (!is_dir($target_dir)) {
        if( mkdir($target_dir, 0777, true) ) {
            echo "New Directory made<br>";
        }
        else {
            echo "Could not make new directory<br>";
        }
    }
    // $target_dir = $target_dir . '/' ;
    // $target_file = $target_dir . basename($Images["name"][$count]);
    // $Images = $_FILES["fileToUpload"];
    $uploadOk = 1;
    // $retry = 0;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $imageFileType = strtolower(pathinfo(basename($Images["name"][$count]), PATHINFO_EXTENSION));
    do {
        $nameNumber += 1;
        $imageRename = 'P' . $Pid . $tags . '_' . $date . '_' . $nameNumber;
        $target_without_extension = $target_dir . $imageRename ;
        echo "<br>File is being renamed.<br>";
    }while( !empty(glob($target_without_extension . ".*")[0]) );
    $imageFileName = $imageRename . '.' . $imageFileType;
    $target_file = $target_dir . $imageFileName;
    // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
        $check = getimagesize($Images["tmp_name"][$count]);
        // $check = getimagesize($tmpFilePath);
        if($check !== false) {
            echo "File is an - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.<br>";
            $uploadOk = 0;
        }
    // }
    // Check if file already exists 
    // file_exists($target_file)
    // if (!empty(glob($target_without_extension . ".*")[0])) {
    //     $uploadOk = 0;
    //     $retry = 1;
    // }
    // Check file size
    if ($Images["size"][$count] > 1000000000) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
        // $retry = 0;
    }
    // Allow certain file formats
     // && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF"
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
        // $retry = 0;
    }
    // if($retry == 1) {
    //     echo "Sorry, file already exists.<br>";
    //     if(uploadImages($Pid, $Images, $count, $nameNumber+1)) {
    //         return 1;
    //     }
    // }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($Images["tmp_name"][$count], $target_file)) {
            $qry12 = "INSERT INTO `image` (`pid`, `image_url`) VALUES ($Pid, '$imageFileName')";
            query($qry12, 'Uploaded image number '.$count);
            echo "The file ". basename( $Images["name"][$count]). " has been uploaded and named " . $imageFileName . "<br>";
                // rename file
                // $old_name = "gfg.txt" ;
                // $new_name = "newgfg.txt" ; 
                // if(file_exists($new_name))
                // { 
                //    echo "Error While Renaming $old_name" ;
                // }
                // else
                // {
                //    if(rename( $old_name, $new_name))
                //    { 
                //    echo "Successfully Renamed $old_name to $new_name" ;
                //    }
                //   else
                //   {
                //    // echo "A File With The Same Name Already Exists" ;
                //   }
                // }
            return 1;
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
            return 0;
        }
    }
}
?>