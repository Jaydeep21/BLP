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
  OR Pid LIKE '%".$search."%' 
  OR Aadhar LIKE '%".$search."%' 
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
     <th>Patient ID</th>
     <th>Patient Name</th>
     <th>Aadhaar No.</th>    
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td><a href="display1.php?pid='.$row["pid"].'">'.$row["pid"].'</a></td>
    <td><a href="display1.php?pid='.$row["pid"].'">'.$row["fname"].'</a></td>
    <td><a href="display1.php?pid='.$row["pid"].'">'.$row["aadhar"].'</td>
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