<?php

include('../assets/php/connection.php');
$id = $_GET['pid'];
$Result1 =	mysqli_query($conn,"SELECT * from person where pid = $id");
$Result2 =	mysqli_query($conn,"SELECT * from address where pid = $id");
$Result4 =	mysqli_query($conn,"SELECT * from contact where pid = $id");
$Result6 =	mysqli_query($conn,"SELECT * from family_history where pid = $id");
$Result9 =	mysqli_query($conn,"SELECT * from addiction where pid = $id");
$Result10 =	mysqli_query($conn,"SELECT * from medical_history where pid = $id");
$Result11 =	mysqli_query($conn,"SELECT * from past_drugs where pid = $id");
$Result12 =	mysqli_query($conn,"SELECT * from obstetric_history where pid = $id");
$Result13 =	mysqli_query($conn,"SELECT * from pregnant_since where pid = $id");
$Result14 =	mysqli_query($conn,"SELECT * from known_leprosy_contacts where pid = $id");
$Result15 =	mysqli_query($conn,"SELECT * from leprosy_relations where pid = $id");
$Result16 =	mysqli_query($conn,"SELECT * from patient where pid = $id");
$Result17 =	mysqli_query($conn,"SELECT * from treatment_record where pid = $id");
$Result18 =	mysqli_query($conn,"SELECT * from peripheral_nerves ");               //changes needed
$Result19 =	mysqli_query($conn,"SELECT * from sensory_testing where pid = $id");
$Result20 =	mysqli_query($conn,"SELECT * from smear_test where pid = $id");
$Result21 =	mysqli_query($conn,"SELECT * from reactions where pid = $id");
$Result22 =	mysqli_query($conn,"SELECT * from drugs_prescribed where pid = $id"); //changes needed
$Result23 =	mysqli_query($conn,"SELECT * from drugs where pid = $id");            //changes needed
$Result24 = mysqli_query($conn,"SELECT * from referred where pid = $id");
$Result25 = mysqli_query($conn,"SELECT * from follow_up_record where pid = $id"); //changes needed
$Result26 = mysqli_query($conn,"SELECT * from record where pid = $id");

while ($row1 = mysqli_fetch_assoc($result1)) {
while( $row2 = mysqli_fetch_assoc($result2)){

while( $row4 = mysqli_fetch_assoc($result4)){

while( $row6 = mysqli_fetch_assoc($result6)){

while( $row9 = mysqli_fetch_assoc($result9)){
while( $row10 = mysqli_fetch_assoc($result10)){
while( $row11 = mysqli_fetch_assoc($result11)){
while( $row12 = mysqli_fetch_assoc($result12)){
while( $row13 = mysqli_fetch_assoc($result13)){
while( $row14 = mysqli_fetch_assoc($result14)){
while( $row15 = mysqli_fetch_assoc($result15)){
while( $row16 = mysqli_fetch_assoc($result16)){
while( $row17 = mysqli_fetch_assoc($result17)){
while( $row18 = mysqli_fetch_assoc($result18)){
while( $row19 = mysqli_fetch_assoc($result19)){
while( $row20 = mysqli_fetch_assoc($result20)){
while( $row21 = mysqli_fetch_assoc($result21)){
while( $row22 = mysqli_fetch_assoc($result22)){
while( $row23 = mysqli_fetch_assoc($result23)){
while( $row24 = mysqli_fetch_assoc($result24)){
while ($row25 = mysqli_fetch_assoc($result25)){
while ($row26 = mysqli_fetch_assoc($result26)){
 


?>

<!DOCTYPE html>
<meta ="viewport" content="width=device-width, initial-scale=1.0">
<body>
<h3>
    <center><span class="title_text">Patient History</span></center>
</h3>

<head>
  <title>Patient Record</title>
  <meta charset="utf-8">
  <meta ="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
  <table class="table table-striped">
    <tbody>
      
      <tr >
        <th colspan="5" id="" >ID Number</th>
        <td><?php echo $row1['pid']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Name</th>
        <td><?php echo $row1['fname']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Date of Birth</th>
        <td><?php echo $row1['dob']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Age</th>
        <td><?php echo $row1['age']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Aadhar Number</th>
        <td><?php echo $row1['aadhar']; ?></td>
      </tr>

      <tr>
        <th colspan="5" id="">Sex</th>
        <td><?php echo $row1['gender']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Caste</th>
        <td><?php echo $row1['caste']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Economical Status</th>
        <td><?php echo $row1['economical_status']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Permanent Address</th>
        <td><?php echo $row2['address']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Local Address</th>
        <td><?php echo $row2['address']; ?></td>
      </tr>

      <tr>
        <th colspan="5" id="">Contact Number</th>
        <td><?php echo $row4['mobile']; ?></td>
      </tr>
      <tr>
        <th colspan="5"  id="">Occupation</th>
        <td><?php echo $row1['occupation']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Examiner</th>
        <td><?php echo $row26['examiner']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Reffered By</th>
        <td><?php echo $row24['doctor_name']; ?></td>
      </tr>

      <tr>
        <th colspan="" id="">Number of Members Living in Same Household</th>
        <td><?php echo $row25['name']; ?></td>
        <td><?php echo $row25['age']; ?></td>
        <td><?php echo $row25['relation']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Family History</th>
        <td><?php echo 'Relation: '+$row6['relation']+ 'Disease: '+$row6['disease']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Allergies</th>
        <td><?php echo $row16['allergy']; ?></td>
      </tr>
      <tr>
        <th colspan="3" id="">Drugs</th>
        <?php

        if($row9['addiction_type']==='tobacco'){

        ?>

        <td>Tobacco:<?php echo "Start: "+$row9['addiction_start']+"End: "+$row9['addiction_end']+"Addiction Frequency: "+$row9['addiction_frequency']; ?></td> 
        <?php } ?>
        <?php

        if($row9['addiction_type']==='igarettes'){

        ?>
        <td>Cigarettes:<?php echo "Start: "+$row9['addiction_start']+"End: "+$row9['addiction_end']+"Addiction Frequency: "+$row9['addiction_frequency']; ?></td> 
        <?php } ?></td>
        <?php

        if($row9['addiction_type']==='alcohol'){

        ?>
        <td>Alcohol:<?php echo "Start: "+$row9['addiction_start']+"End: "+$row9['addiction_end']+"Addiction Frequency: "+$row9['addiction_frequency']; ?></td> 
        <?php } ?></td>
      </tr>
      <tr>
        <th colspan="" id="">Past Medical History</th>
        <td><?php echo $row10['disease'] +'When:'echo $row10['mmyy_diagnosis'] + 'Cure:' echo $row10['mmyy_curation']; ?></td>
      </tr>
      <tr>
        <th colspan="" id="">Past Leprosy History</th>
        <td>Hospital:<?php echo $row['hospital']; ?></td>
        <td>Drug:<?php echo $row['drugs']; ?></td>
        <td>Dosage:<?php echo $row['dosage']; ?></td>
        <td>Start Date:<?php echo $row['mmyy_start']; ?></td>
        <td>End Date:<?php echo $row['mmyy_end']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Obestric History</th>
        <td><?php echo 'Number of Child:'+$row12['number_child'] +'Gender of Child:'echo $row12['gender_child'] + 'DOB of Child:' echo $row12['mmmyy_birth']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Known Leprosy Contacts</th>
        <td><?php echo "Pid :" +$row14['pid']+ "Name: " +$row14['name']+ "Contact: "+$row14['contact']+"Treatment: "+$row14['treatment'] ; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">First Signs and Symtoms</th>
        <td><?php echo $row17['']; ?></td>
      </tr>
      <tr>
        <th colspan="5" id="">Type of Leprosy diagonised</th>
        <td><?php echo $row17['type_diagnosed']; ?></td>
      </tr>
      <tr>
      	<th colspan="2" id="">Skin Smears</th>
      	<td>MI:<?php echo $row20['mi']; ?></td>
      	<td>BI:<?php echo $row20['bi']; ?></td>
      	<td>Site:<?php echo $row20['site']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="" >First Treatment</th>

      </tr>
      <tr>
      	<th colspan="4" id="">Drug Used</th>
      	<td>Drug Name:<?php echo $row23['dname']; ?></td>
      	<td>Dosage:<?php echo $row22['dosage']; ?> </td>
      	<td>Start Date:<?php echo $row22['start_date']; ?></td>
      	<td>End Date:<?php echo $row22['end_date']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Other MDT Courses</th>
      	<td><?php echo $row['']; ?></td>
      </tr>

      <tr>
      	<th colspan="5" id="">Outcome after initial treatment</th>
      	<td><?php echo $row17['result']; ?></td>
      </tr>
      <tr>
      	<th colspan="3" id="">Reaction and treatment</th>
      	<td>Type of Reaction: <?php echo $row21['type_reaction']; ?></td>
 		<td>Description:<?php echo $row21['description']; ?></td>
 		</tr>
      <tr>
      	<th colspan="5" id="">Current treatment</th>
      	<td><?php echo $row['']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Disability</th>
      	<td><?php echo $row17['disability']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Ophtalmic Involvement</th>
      	<td><?php echo $row17['opthalmic_involvement']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Assessment Of Skin Lesion</th>
      	<td><?php echo $row17['skin_lesions']; ?></td>
      </tr>
      <tr>
      	<th colspan="3" id="">Sensory Testing</th>
      	<td>Touch:<?php echo $row19['touch']; ?></td>
      	<td>Temperature:<?php echo $row19['temperature']; ?></td>
      	<td>Pain:<?php echo $row19['pinprick']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Motor Testing</th>
      	<td><?php echo $row17['motor_testing']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Eyes</th>
      	<td><?php echo $row17['eyes']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Further Observations</th>
      	<td><?php echo $row['']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Present Complaint</th>
      	<td><?php echo $row17['complaints']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Date</th>
      	<td><?php echo $row25['date_attend']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Description</th>
      	<td><?php echo $row25['description']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Prescription</th>
      	<td><?php echo $row25['prescription']; ?></td>
      </tr>

      
    </tbody>
  </table>
</div>
<?php }}}}}}}}}}}}}}}}}}}}}}}?>
</body>
</html>
