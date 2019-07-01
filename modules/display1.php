<?php
include('../assets/php/connection.php');
$id = $_GET['pid'];

$result1 =  mysqli_query($conn,"SELECT * from person where pid = $id");
$result2a = mysqli_query($conn,"SELECT * from address where pid = $id and address_type ='permanent'");
$result2b = mysqli_query($conn,"SELECT * from address where pid = $id and address_type ='local'");
$result4 =  mysqli_query($conn,"SELECT * from contact where pid = $id");
$result17 = mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result24 = mysqli_query($conn,"SELECT * from referred where pid = $id");
$result25 = mysqli_query($conn,"SELECT * from follow_up_record where pid = $id");
$result6 =  mysqli_query($conn,"SELECT * from family_history where pid = $id");
$result16 = mysqli_query($conn,"SELECT * from patient where pid = $id");
$result9 =  mysqli_query($conn,"SELECT * from addiction where pid = $id");
$result10 = mysqli_query($conn,"SELECT * from medical_history where pid = $id");
$result12 = mysqli_query($conn,"SELECT * from obstetric_history where pid = $id");
$result14 = mysqli_query($conn,"SELECT * from known_leprosy_contacts where pid = $id");
$result19 = mysqli_query($conn,"SELECT s.touch, s.pinprick, s.temperature FROM treatment_record AS t ,sensory_test AS s WHERE t.pid=$id");
$result20 = mysqli_query($conn,"SELECT * from smear_test where pid = $id");
$result22 = mysqli_query($conn,"SELECT d.dname,dp.dosage,dp.start_date,dp.end_date FROM `record` AS r,drugs AS d,drugs_prescribed AS dp WHERE r.pid=$id"); 
$result21 = mysqli_query($conn,"SELECT rs.type_reaction,rs.description FROM `record` AS r , reactions AS rs WHERE r.pid=$id");
$result7 =  mysqli_query($conn,"SELECT * from family_members where pid = $id");
$result11 = mysqli_query($conn,"SELECT * from past_drugs where pid = $id");
$result18 = mysqli_query($conn,"SELECT * FROM peripheral_nerves p, record r WHERE pid=$id AND p.rid=r.rid");
$result17a =  mysqli_query($conn,"SELECT * from leprosy_diagnosed l, record r where r.rid = l.rid ");
$result17b =  mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result17c =  mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result17d =  mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result26 =  mysqli_query($conn,"SELECT * from record where pid = $id ");
$result27= mysqli_query($conn,"SELECT * from disability d , record r where d.rid=r.rid AND pid = $id");
$result28=mysqli_query($conn,"SELECT * from next_appointment where pid=$id");
$result29 = mysqli_query($conn,"SELECT * from image where pid=$id");

while ($row1 = mysqli_fetch_assoc($result1)){
  
  
?>

<!DOCTYPE html>
<meta charset="viewport" content="width=device-width, initial-scale=1.0">
<body>
<h3>
    <center><span class="title_text">Patient Record</span></center>
</h3>

<head>
  <title>Patient Record</title>
  <meta charset="utf-8">
  <meta charset="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>
<style type="text/css">
   
  th{
   width: 450px;
    
 }  

td{
  font-family:serif;
  text-align: left;
  font-size: 1.1em;
}

</style>
<body>

<div class="container">
  <table class="table table-bordered">
    <tbody>
       <tr>
        <th colspan="7" id="" class="text-center"><h4><strong>Patient History</strong></h4></th>
      </tr>
      
      <tr>
        <th colspan="2" id="" >ID Number</th>
        <td colspan="5"><?php echo $id ?></td>
      </tr>
      <tr>
        <th colspan="2" id="">Name</th>
        <td colspan="5"><?php echo $row1['fname']; ?></td>
      </tr>
      <tr>
        <th colspan="2" id="">Date of Birth</th>
        <td colspan="5"><?php echo $row1['dob']; ?></td>
      </tr>
      <tr>
        <th colspan="2" id="">Age</th>
        <td colspan="5"><?php echo $row1['age']; ?></td>
      </tr>
      <tr>
        <th colspan="2" id="">Aadhar Number</th>
        <td colspan="5"><?php echo $row1['aadhar']; ?></td>
      </tr>

      <tr>
        <th colspan="2" id="">Sex</th>
        <td colspan="5"><?php echo $row1['sex']; ?></td>
      </tr>
      <tr>
        <th colspan="2" id="">Caste</th>
        <td colspan="5"> <?php echo $row1['caste']; ?></td>
      </tr>
      <tr>
        <th colspan="2" id="">Economical Status</th>
        <td colspan="5"><?php echo $row1['economical_status']; ?></td>
      </tr>
   
   
      <tr>
        <th colspan="2" id="">Permanent Address</th>
        <td colspan="5"><?php 
        while( $row2a = mysqli_fetch_assoc($result2a)){
        echo $row2a['address']."<br>"; }
        ?></td>
      </tr>
  
      <tr>
        <th colspan="2" id="">Local Address</th>
        <td colspan="5"><?php 
         while( $row2b = mysqli_fetch_assoc($result2b)){

        echo $row2b['address']."<br>"; }?></td>
      </tr>
    
      <tr>
        <th colspan="2" id="">Contact Number</th>
        <td colspan="5"><?php 
         while($row4 = mysqli_fetch_assoc($result4)){
         echo $row4['mobile']."<br>"; } ?></td>
      </tr>

      <tr>
        <th colspan="2"  id="">Occupation</th>
        <td colspan="5"><?php echo $row1['occupation']; ?></td>
      </tr>

      <?php while( $row26 = mysqli_fetch_assoc($result26)){ ?>
      <tr>
        <th colspan="2" id="">Examiner</th>
        <td colspan="5"><?php echo $row26['examiner']; ?></td>
      </tr>
      <?php } ?>
     
      <?php while( $row24 = mysqli_fetch_assoc($result24)){ ?>
      <tr>
        <th colspan="2" id="">Reffered By</th>
        <td colspan="5"><?php echo $row24['doctor_name']; ?></td>
      </tr>
      
      <tr colspan="">
        <?php while( $row7 = mysqli_fetch_assoc($result7)){ ?>
        <th colspan="2" id="">Number of Members Living in Same Household</th>
        <td colspan="">Name: <?php echo $row7['fm_name']; ?></td>
        <td colspan="">Age: <?php echo $row7['fm_age']; ?></td>
        <td colspan="">Relation: <?php echo $row7['fm_relation']; ?></td>
        <td colspan="">Disease: <?php echo $row7['fm_disease']; ?></td>
        <td colspan="" rowspan ="">Notes: <?php echo $row7['fm_diagnosis'];} ?></td>
     </tr>

      
      <tr>
        <th colspan="2" id="">Allergies</th>
        <td colspan="5"><?php echo $row1['allergy']; } ?></td>
      </tr>
     


      <tr>
        <th colspan="7" id="">Addiction</th>
        <?php while( $row9 = mysqli_fetch_assoc($result9)){ ?>
        <?php if($row9['addiction_type']==='tobacco'){ ?>
      
        <td colspan="2 ">Tobacco:</td>
        <td colspan="2"> Start: <?php echo $row9['addiction_start']; ?></td>
        <td colspan="2"> End: <?php echo $row9['addiction_end'];?></td>
        <td colspan="2"> Addiction Frequency: <?php echo $row9['addiction_frequency'];  ?></td> 
        

        <?php  } if($row9['addiction_type']==='cigarette'){ ?>
        <tr>
         
        <td colspan="2">Cigarettes:</td>
        <td colspan="2">Start: <?php echo $row9['addiction_start']; ?></td>
        <td colspan="2">End: <?php echo $row9['addiction_end']; ?></td>
        <td colspan="2">Addiction Frequency: <?php echo $row9['addiction_frequency']; ?></td> 
        </td>
        </tr>

        <?php } if($row9['addiction_type']==='alcohol'){ ?>
        <tr>
        <td colspan="2">Alcohol:</td>
        <td colspan="2">Start: <?php echo $row9['addiction_start'] ;?></td>
        <td colspan="2">End: <?php echo $row9['addiction_end'] ;?></td>
        <td colspan="2">Addiction Frequency: <?php echo $row9['addiction_frequency']; ?></td>
        </tr> 
       <?php } } ?>
       </tr>

       <tr>
        <th colspan="7" id="" class="text-center"><h4><strong>Leprosy History</strong></h4></th>
      </tr>

      <tr>
        <?php while( $row10 = mysqli_fetch_assoc($result10)){ ?>
        <th colspan="" id="">Past Medical History</th>
        <td colspan="4"><?php echo "Disease: " .$row10['disease'] ; }?></td>
        
      </tr>
 <?php while( $row11 = mysqli_fetch_assoc($result11)){ ?>
      <tr>
      
       <th colspan="" id="">Past Leprosy History</th>
       <td colspan="1">Hospital: <?php echo $row11['hospital']; ?></td>
       <td colspan="1">Drug: <?php echo $row11['drugs']; ?></td>
       <td colspan="1">Dosage: <?php echo $row11['dosage']; ?></td>
       <td colspan="2">Start Date: <?php echo $row11['mmyy_start']; ?></td>
       <td colspan="2">End Date: <?php echo $row11['mmyy_end']; ?></td>
      </tr>
     <?php }?>
      <tr>
       <?php while( $row12 = mysqli_fetch_assoc($result12)){ ?>
       <th colspan="2" id="">Obstetric History</th>
       <td colspan="5">Pregnant Since: <?php echo $row12['mmyy_pregnant']; }?></td>
      </tr>
        <?php while( $row14 = mysqli_fetch_assoc($result14)){ ?>
      <tr>
        
        <th colspan="" id="">Known Leprosy Contacts</th>
        <td colspan="">Name:  <?php echo $row14['kname']; ?></td>
        <td colspan="2">Address: <?php echo $row14['address'] ; ?></td>
        <td>Contact: <?php echo $row14['contact']; ?> </td>
        <td>Relation: <?php echo $row14['relation']; ?></td>
        <td>Description: <?php echo $row14['description'];  ?></td>
      </tr>
      <?php } ?>
      <tr>
          <?php while( $row17 = mysqli_fetch_assoc($result17)){ ?>
          <th colspan="3" id="">First Signs and Symptoms(with date of onset) </th>
          <td colspan="4"><?php echo $row17['symptoms']; ?></td>
      </tr>

      <tr><?php /*while( $row17a = mysqli_fetch_assoc($result17a)){ ?>
        <th colspan="3" id="">Type of Leprosy diagonised</th>
        <td colspan="4"><?php echo $row17a['type_diagnosed']; }*/?></td>
      </tr>
        
      <tr>
        <th colspan="7" id="" class="text-center"><h4><strong>First Treatment</strong></h4></th>
      </tr>
<?php while( $row22 = mysqli_fetch_assoc($result22)){ ?>
      <tr>
        <th colspan="1" id="">Drug Used</th>
        <td colspan="2">Drug Name:<?php echo $row22['dname']; ?></td>
        <td colspan="1">Dosage:<?php echo $row22['dosage']; ?> </td>
        <td colspan="2">Start Date:<?php echo $row22['start_date']; ?></td>
        <td colspan="1">End Date:<?php echo $row22['end_date']; ?></td>
      </tr>
<?php } ?>
      <tr>
        <th colspan="3" id="">Other MDT courses</th>
        <td colspan="4"><?php echo $row17['other_mdt_courses']; }?></td>
      </tr>

      <tr>
        <?php while( $row17b = mysqli_fetch_assoc($result17b)){ ?>
        <th colspan="3" id="">Outcome after initial treatment</th>
        <td colspan="4"><?php echo $row17b['result']; }?></td>
      </tr>
 <?php while( $row21 = mysqli_fetch_assoc($result21)){ ?>
      <tr>
       
        <th colspan="2" id="">Reaction and treatment</th>
        <td colspan="2">Type of Reaction: <?php echo $row21['type_reaction']; ?></td>
        <td colspan="3">Description: <?php echo $row21['description']; ?></td>
     </tr>
     <?php } ?>
     <!--tr>
       <th> Current Treatment</th>
     </tr-->
<?php while( $row27 = mysqli_fetch_assoc($result27)){ ?>
      <tr>
        
        <th colspan="2" id="">Disability</th>
        <td colspan="2">Grade: <?php echo $row27['grade']; ?></td>
        <td colspan="3">Disabiltiy Area: <?php echo $row27['disability_area']; ?></td>
      </tr>
      <?php }?>
      <?php while( $row17c = mysqli_fetch_assoc($result17c)){ ?>
      <tr>
        
        <th colspan="3" id="">Ophtalmic Involvement</th>
        <td colspan="4"><?php echo $row17c['opthalmic_involvement']; ?></td>
      </tr>

      <tr>
        <th colspan="7" id="" class="text-center"><h4><strong>Clinical Examination</strong></h4></th>
      </tr>

      <tr>
        <th colspan="3" id="">Assessment Of Skin Lesion</th>
        <td colspan="4"><?php echo $row17c['skin_lesions']; ?></td>
      </tr>
    <?php }?>
    <?php while( $row19 = mysqli_fetch_assoc($result19)){ ?>
      <tr>
        
        <th colspan="1" id="">Sensory Testing</th>
        <td colspan="1">Touch: <?php echo $row19['touch']; ?></td>
        <td colspan="3">Temperature: <?php echo $row19['temperature']; ?></td>
        <td colspan="2">Pinprick: <?php echo $row19['pinprick']; ?></td>
      </tr>
        <?php }?>
      <tr>
       <th colspan="7" id="">Peripheral Nerves</th>
       <?php while( $row18 = mysqli_fetch_assoc($result18)){ ?>
         <tr>
            <td colspan="1">Nerves: <?php echo $row18['nerves']; ?></td>
            <td colspan="3">Thickness: <?php echo $row18['thickness']; ?></td>
            <td colspan="3">Tenderness:<?php echo $row18['tenderness']; ?></td>
         </tr>
       <?php } ?>
     </tr>

      <tr>
        <?php while( $row17d = mysqli_fetch_assoc($result17d)){ ?>
        <th colspan="3" id="">Eyes</th>
        <td colspan="4"><?php echo $row17d['eyes'];  } ?></td>
      </tr>

      <tr>
        <?php while($row25 = mysqli_fetch_assoc($result25)) { ?>
        <th colspan="3" id="">Further Observations</th>
        <td colspan="4"><?php echo $row25['further_observations']; ?></td>
      </tr>

      <tr>
        <th colspan="7" id="" class="text-center"><h4><strong>Follow-up Form</strong></h4></th>
      </tr>

<?php while( $row20 = mysqli_fetch_assoc($result20)){ ?>
      <tr>
        
        <th colspan="" id="">Skin Smears</th>
        <td colspan="2">MI:<?php echo $row20['mi']; ?></td>
        <td colspan="2">BI:<?php echo $row20['bi']; ?></td>
        <td colspan="2">Site:<?php echo $row20['site']; ?></td>
      </tr> 
<?php } ?>
       <tr>
        
          <th colspan="1" id="">Notes And Prescription</th>
          <td colspan="2">Date:<?php echo $row25['due_date']; ?></td>
          <td colspan="2">Clinical Notes: <?php echo $row25['clinical_notes']; ?></td>
          <td colspan="2">Prescription: <?php echo $row25['prescription'];  ?></td>  
       </tr> 


       <tr>
        <th colspan="2" id="">Present Complaint</th>
        <td colspan="5"><?php echo $row25['complaints']; } ?></td>
      </tr>

       <tr>
        <?php while( $row28 = mysqli_fetch_assoc($result28)){ ?>
        <th colspan="2" id="">Next Appointment For:</th>
        <td colspan="5"><?php echo $row28['appointment_reason']; ?></td>
      </tr>

       <tr>
        <th colspan="2" id="">Next Appointment Date:</th>
        <td colspan="5"><?php echo $row28['appointment_date']; }?></td>
      </tr>
<?php while( $row29 = mysqli_fetch_assoc($result29)){ ?>
      <tr>
        <th colspan="2">Image: </th>
        <td colspan="5"> 
        <img src=<?php echo $row29['image_url'];?> >
      </td>
      </tr>
        
      <?php } ?>  
       
    </tbody>
  </table>  
</div>
</body>
<?php 
    
  }
?>