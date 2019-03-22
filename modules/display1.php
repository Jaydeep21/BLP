<?php

include('../assets/php/connection.php');
$id = $_GET['pid'];

$result1 =	mysqli_query($conn,"SELECT * from person where pid = $id");
$result2a =	mysqli_query($conn,"SELECT * from address where pid = $id and address_type ='permanent'");
$result2b = mysqli_query($conn,"SELECT * from address where pid = $id and address_type ='local'");
$result4 =	mysqli_query($conn,"SELECT * from contact where pid = $id");
$result17 =	mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result24 = mysqli_query($conn,"SELECT * from referred where pid = $id");
$result25 = mysqli_query($conn,"SELECT * from follow_up_record where pid = $id");
$result6 =	mysqli_query($conn,"SELECT * from family_history where pid = $id");
$result16 =	mysqli_query($conn,"SELECT * from patient where pid = $id");
$result9 =	mysqli_query($conn,"SELECT * from addiction where pid = $id");
$result10 =	mysqli_query($conn,"SELECT * from medical_history where pid = $id");
$result12 =	mysqli_query($conn,"SELECT * from obstetric_history where pid = $id");
$result14 =	mysqli_query($conn,"SELECT * from known_leprosy_contacts where pid = $id");
$result19 =	mysqli_query($conn,"SELECT s.touch, s.pinprick, s.temperature FROM treatment_record AS t ,sensory_test AS s WHERE t.pid=$id");
$result20 =	mysqli_query($conn,"SELECT * from smear_test where pid = $id");
$result22 =	mysqli_query($conn,"SELECT d.dname,dp.dosage,dp.start_date,dp.end_date FROM `record` AS r,drugs AS d,drugs_prescribed AS dp WHERE r.pid=$id"); 
$result21 =	mysqli_query($conn,"SELECT rs.type_reaction,rs.description FROM `record` AS r , reactions AS rs WHERE r.pid=$id");
$result7 =	mysqli_query($conn,"SELECT * from family_members where pid = $id");
$result11 =	mysqli_query($conn,"SELECT * from past_drugs where pid = $id");
$result17a =	mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result17b =	mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result17c =	mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result17d =	mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
while ($row1 = mysqli_fetch_assoc($result1)){
	
	
?>

<!DOCTYPE html>
<meta charset="viewport" content="width=device-width, initial-scale=1.0">
<body>
<h3>
    <center><span class="title_text">Patient History</span></center>
</h3>

<head>
  <title>Patient Record</title>
  <meta charset="utf-8">
  <meta charset="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
  <table class="table table-striped">
    <tbody>
      
      <tr>
        <th colspan="5" id="" >ID Number</th>
        <td><?php echo $id ?></td>
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
        <td><?php echo $row1['sex']; ?></td>
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
        <td><?php 
        while( $row2a = mysqli_fetch_assoc($result2a)){
        echo $row2a['address']."<br>"; }
        ?></td>
      </tr>
  	
      <tr>
        <th colspan="5" id="">Local Address</th>
        <td><?php 
         while( $row2b = mysqli_fetch_assoc($result2b)){

        echo $row2b['address']."<br>"; }?></td>
      </tr>
      
  
      <tr>
        <th colspan="5" id="">Contact Number</th>
        <td><?php 
         while($row4 = mysqli_fetch_assoc($result4)){
        
        echo $row4['mobile']."<br>"; 
		
		}
        ?></td>
      </tr>
      <tr>
        <th colspan="5"  id="">Occupation</th>
        <td><?php echo $row1['occupation']; ?></td>
      </tr>
      <?php while( $row17 = mysqli_fetch_assoc($result17)){ ?>
      <tr>
        <th colspan="5" id="">Examiner</th>
        <td><?php echo $row17['examiner']; ?></td>
      </tr>
      <?php } ?>
     
      <?php while( $row24 = mysqli_fetch_assoc($result24)){ ?>
      <tr>
        <th colspan="5" id="">Reffered By</th>
        <td><?php echo $row24['doctor_name']; ?></td>
      </tr>
      <?php } ?>
     <tr><?php while( $row7 = mysqli_fetch_assoc($result7)){ ?>
        <th colspan="" id="">Number of Members Living in Same Household</th>
        <td><?php echo $row7['name']; ?></td>
        <td><?php echo $row7['age']; ?></td>
        <td><?php echo $row7['relation'];} ?></td>
      </tr>
    <tr><?php while( $row6 = mysqli_fetch_assoc($result6)){ ?>
        <th colspan="5" id="">Family History</th>
        <td><?php echo 'Relation: '. $row6['relation'] . 'Disease: '. $row6['disease']; }?></td>
      </tr>
      <?php while( $row16 = mysqli_fetch_assoc($result16)){ ?>
      <tr>
        <th colspan="5" id="">Allergies</th>
        <td><?php echo $row16['allergy']; ?></td>
      </tr>
       <?php } ?> 


      <tr>
        <th colspan="3" id="">Addiction</th>
        <?php
        while( $row9 = mysqli_fetch_assoc($result9)){ 
        if($row9['addiction_type']==='tobacco'){

        ?>

        <td>Tobacco:<?php 
        
        echo "Start: ". $row9['addiction_start'] . "End: " . $row9['addiction_end'] . "Addiction Frequency: " . $row9['addiction_frequency']; } ?></td> 
        
        <?php
        
        if($row9['addiction_type']==='cigarettes'){

        ?>
        <td>Cigarettes:<?php 

        echo "Start: ".$row9['addiction_start'] . "End: " . $row9['addiction_end'] . "Addiction Frequency: " . $row9['addiction_frequency']; }?></td> 
        </td>
        <?php
         
        if($row9['addiction_type']==='alcohol'){

        ?>
        <td>Alcohol:<?php 
        echo "Start: ". $row9['addiction_start'] . "End: " . $row9['addiction_end'] . "Addiction Frequency: " . $row9['addiction_frequency']; }?></td> 
        </td>
      
		<?php } ?>
		</tr>
		<tr colspan="5">
				<?php while( $row10 = mysqli_fetch_assoc($result10)){ ?>
	        <th colspan="3" id="">Past Medical History</th>
	        <td colspan="1"><?php echo $row10['disease'] ; ?></td>
	     
	       	
	       	<td colspan="1"><?php echo "When: ". $row10['mmyy_diagnosis']; ?></td>
	    
	       	
	       	<td colspan="1"><?php echo "Cure: " .$row10['mmyy_curation']; }?></td>
	    </tr>
	    <tr><?php while( $row11 = mysqli_fetch_assoc($result11)){ ?>
	        <th colspan="" id="">Past Leprosy History</th>
	        <td>Hospital:<?php echo $row11['hospital']; ?></td>
	        <td>Drug:<?php echo $row11['drugs']; ?></td>
	        <td>Dosage:<?php echo $row11['dosage']; ?></td>
	        <td>Start Date:<?php echo $row11['mmyy_start']; ?></td>
	        <td>End Date:<?php echo $row11['mmyy_end']; }?></td>
      	</tr>
	    <tr>
	    	<th colspan="5" id="">Obestric History</th>
	    </tr>
    
    	<?php while( $row12 = mysqli_fetch_assoc($result12)){ ?>
        <tr>
        	<th colspan="5">Number of Child</th>
			<td><?php echo $row12['number_child']; ?></td>
		</tr>
        <tr> 
        	<th colspan="5">Gender Of Child</th>
        	<td><?php echo $row12['gender_child'];  ?></td>
        </tr>
        <tr>
        	<th colspan="5">DOB of Child</th>
        	<td><?php echo $row12['mmmyy_birth']; } ?></td>
        </tr>
      <!-- <tr><?php //while( $row14 = mysqli_fetch_assoc($result14)){ ?>
        <th colspan="5" id="">Known Leprosy Contacts</th>
        <td><?php //echo "Pid :" .$row14['pid']. "Name: " .$row14['name']. "Contact: ".$row14['contact']."Treatment: ".$row14['treatment'] ;} ?></td>
      </tr>-->
      <tr><?php while( $row17a = mysqli_fetch_assoc($result17a)){ ?>
        <th colspan="5" id="">Type of Leprosy diagonised</th>
        <td><?php echo $row17a['type_diagnosed']; }?></td>
      </tr>
        <tr><?php while( $row20 = mysqli_fetch_assoc($result20)){ ?>
	      	<th colspan="3" id="">Skin Smears</th>
	      	<td>MI:<?php echo $row20['mi']; ?></td>
	      	<td>BI:<?php echo $row20['bi']; ?></td>
	      	<td>Site:<?php echo $row20['site']; }?></td>
	      </tr>	
    	<tr>
      	<th colspan="5" id="" >First Treatment</th>

	      </tr>
	      <tr><?php while( $row22 = mysqli_fetch_assoc($result22)){ ?>
	      	<th colspan="4" id="">Drug Used</th>
	      	<td>Drug Name:<?php echo $row22['dname']; ?></td>
	      	<td>Dosage:<?php echo $row22['dosage']; ?> </td>
	      	<td>Start Date:<?php echo $row22['start_date']; ?></td>
	      	<td>End Date:<?php echo $row22['end_date']; }?></td>
	      </tr>
	   <tr><?php while( $row17b = mysqli_fetch_assoc($result17b)){ ?>
      	<th colspan="5" id="">Outcome after initial treatment</th>
      	<td><?php echo $row17b['result']; }?></td>
      </tr>
    	<tr><?php while( $row21 = mysqli_fetch_assoc($result21)){ ?>
      		<th colspan="3" id="">Reaction and treatment</th>
      		<td>Type of Reaction: <?php echo $row21['type_reaction']; ?></td>
 		    <td>Description:<?php echo $row21['description']; }?></td>
 		</tr>
 		<tr><?php while( $row17c = mysqli_fetch_assoc($result17c)){ ?>
      	<th colspan="5" id="">Disability</th>
      	<td><?php echo $row17c['disability']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Ophtalmic Involvement</th>
      	<td><?php echo $row17c['opthalmic_involvement']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Assessment Of Skin Lesion</th>
      	<td><?php echo $row17c['skin_lesions']; }?></td>
      </tr>
		<tr><?php 

    	while( $row19 = mysqli_fetch_assoc($result19)){ ?>
	      	<th colspan="3" id="">Sensory Testing</th>
	      	<td>Touch:<?php echo $row19['touch']; ?></td>
	      	<td>Temperature:<?php echo $row19['temperature']; ?></td>
	      	<td>Pinkprick:<?php echo $row19['pinprick']; }?></td>
	      </tr>
	      <tr><?php while( $row17d = mysqli_fetch_assoc($result17d)){ ?>
      	<th colspan="5" id="">Motor Testing</th>
      	<td><?php echo $row17d['motor_testing']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Eyes</th>
      	<td><?php echo $row17d['eyes']; ?></td>
      </tr>
       <tr>
      	<th colspan="5" id="">Present Complaint</th>
      	<td><?php echo $row17d['complaints']; }?></td>
      </tr>
	      <tr>
	      	<?php while( $row25 = mysqli_fetch_assoc($result25)){ ?>
      	<th colspan="5" id="">Date</th>
      	<td><?php echo $row25['due_date']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Clinical Notes</th>
      	<td><?php echo $row25['clinical_notes']; ?></td>
      </tr>
      <tr>
      	<th colspan="5" id="">Prescription</th>
      	<td><?php echo $row25['prescription']; } ?></td>
      </tr>
	    	
       
    </tbody>
  </table>  
</div>
</body>
<?php 
		
	}
?>