<?php

$dbname='blp';
$dbhost='localhost';
$dbpass='';
$dbuser='root';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(!$conn){
    echo "Connection error".die(mysqli_connection_error());
}

?>