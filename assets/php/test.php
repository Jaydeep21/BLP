<!DOCTYPE html>
<html>
<head>
    <title>image uploader</title>
</head>
<body>
    <form method="POST" id="imup" class="imup" action="#">
        <div id="varHDiv">
	                      
	        <label for="varH" class="form-label">var History</label>
	        <td><input type="text" id="varH" name="varH" placeholder="var History" class="valid"></td>
	    </div>
	    <input type="date" name="date" class="valid">
        <input type="submit" name="submit">
    </form>
</body>
</html>


<?php

function validateDate($date, $format = 'Y-m-d')
{
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    return $d && $d->format($format) === $date;
}

if (isset($_POST['submit'])) {

$var = empty($_POST['varH']) ? 45 : $_POST['varH'];
$date = empty($_POST['date']) ? '01-01-000' : $_POST['date'];

echo "<br>and the truth is " . $var . " on " . $date;
echo "<br>";

var_dump(validateDate('0000-01-01'));  // true

$auto = [9,8,7];
$array[] = 5;
$googly = 'p';
echo "<br>";
print_r($auto);
echo "<br>*";
print_r($auto[3]);
echo "*<br>";
print_r($array);
echo "<br>";
print_r($array[0]);
echo "<br>";
print_r($googly[0]);

if($yes = 1) {echo "yes";} else {echo "no";}

}
?> 