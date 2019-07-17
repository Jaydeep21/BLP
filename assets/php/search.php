<?php
//fetch.php
require 'connection.php';
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "
  SELECT * FROM person 
  WHERE Fname LIKE '%".$search."%'
  OR Sex LIKE '%".$search."%' 
  OR Aadhar LIKE '%".$search."%' 
  OR Occupation LIKE '%".$search."%' 
 
 ";
}
else
{
 $query = "
  SELECT * FROM person ORDER BY pid
 ";
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Fname</th>
     <th>Sex</th>
     <th>Aadhar</th>
     <th>Occupation</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><a href="display1.php?pid='.$row["pid"].'">'.$row["fname"].'</a></td>
    <td>'.$row["sex"].'</td>
    <td>'.$row["aadhar"].'</td>
    <td>'.$row["occupation"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>