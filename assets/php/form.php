<?php

include('connection.php');

$

$qry="insert into  values";

$result = mysqli_query($conn,$qry);

if($result){
    header("location:http//:localhost/BLP/index.html");
}
else{
    echo"Query error";
}

?>