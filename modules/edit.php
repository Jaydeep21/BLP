<?php
include('navbar.php');

include('../assets/php/connection.php');
$id = $_GET['pid'];

$result1 =  mysqli_query($conn,"SELECT * from person where pid = $id");
$result1a =  mysqli_query($conn,"SELECT * from patient where pid = $id");
$result2a = mysqli_query($conn,"SELECT * from address where pid = $id and address_type ='permanent'");
$result2b = mysqli_query($conn,"SELECT * from address where pid = $id and address_type ='local' group by (pid)");
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
$query19 = "SELECT * FROM treatment_record AS r ,sensory_test AS s, patient AS p WHERE p.pid=$id and r.pid=p.pid and r.rid=s.rid";
$result19 = mysqli_query($conn,$query19);

$result20 = mysqli_query($conn,"SELECT * from smear_test where pid = $id");
$result22 = mysqli_query($conn,"SELECT d.dname,dp.dosage,dp.start_date,dp.end_date FROM `record` AS r,drugs AS d,drugs_prescribed AS dp, patient AS p WHERE p.pid=$id and p.pid=r.pid and r.rid=dp.rid and d.did=dp.did"); 
$result21 = mysqli_query($conn,"SELECT rs.type_reaction,rs.description,rs.neuritis FROM `record` AS r , reactions AS rs, patient as p WHERE p.pid=$id and p.pid=r.pid and rs.rid=r.rid");
$result7 =  mysqli_query($conn,"SELECT * from family_members where pid = $id");
$result11 = mysqli_query($conn,"SELECT * from past_drugs where pid = $id");
$result18 = mysqli_query($conn,"SELECT * FROM peripheral_nerves p, record r WHERE pid=$id AND p.rid=r.rid");
$result18a = mysqli_query($conn,"SELECT * FROM peripheral_nerves pn, record r, patient p WHERE p.pid=$id AND p.pid=r.pid and pn.rid=r.rid AND pn.nerves = 'Supra orbital'");
$result18b = mysqli_query($conn,"SELECT * FROM peripheral_nerves pn, record r, patient p WHERE p.pid=$id AND p.pid=r.pid and pn.rid=r.rid AND pn.nerves = 'Great Auricular'");
$result18c = mysqli_query($conn,"SELECT * FROM peripheral_nerves pn, record r, patient p WHERE p.pid=$id AND p.pid=r.pid and pn.rid=r.rid AND pn.nerves = 'Ulnar'");
$result18d = mysqli_query($conn,"SELECT * FROM peripheral_nerves pn, record r, patient p WHERE p.pid=$id AND p.pid=r.pid and pn.rid=r.rid AND pn.nerves = 'Medial Cutaneous'");
$result18e = mysqli_query($conn,"SELECT * FROM peripheral_nerves pn, record r, patient p WHERE p.pid=$id AND p.pid=r.pid and pn.rid=r.rid AND pn.nerves = 'Radial Cutaneous'");
$result18f = mysqli_query($conn,"SELECT * FROM peripheral_nerves pn, record r, patient p WHERE p.pid=$id AND p.pid=r.pid and pn.rid=r.rid AND pn.nerves = 'Lateral Popliteal'");
$result18g = mysqli_query($conn,"SELECT * FROM peripheral_nerves pn, record r, patient p WHERE p.pid=$id AND p.pid=r.pid and pn.rid=r.rid AND pn.nerves = 'Sural Nerve'");
$result18h = mysqli_query($conn,"SELECT * FROM peripheral_nerves pn, record r, patient p WHERE p.pid=$id AND p.pid=r.pid and pn.rid=r.rid AND pn.nerves = 'Posterior Tibial'");
$result18i = mysqli_query($conn,"SELECT * FROM peripheral_nerves pn, record r, patient p WHERE p.pid=$id AND p.pid=r.pid and pn.rid=r.rid AND pn.nerves = 'Superficial Personal'");
$result17a =    mysqli_query($conn,"SELECT * from leprosy_diagnosed l, record r, patient AS p where p.pid=$id and p.pid=r.pid and l.rid = r.rid");
$result17b =  mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result17c =  mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result17d =  mysqli_query($conn,"SELECT * from treatment_record where pid = $id ");
$result26 =    mysqli_query($conn,"SELECT * from record as r, patient as p where p.pid = $id and r.pid = p.pid LIMIT 1");
$result27a= mysqli_query($conn,"SELECT * from disability d , record r, patient p where p.pid=$id and p.pid=r.pid and d.rid=r.rid AND d.grade = 0 AND d.disability_area='Present'");
$result27b= mysqli_query($conn,"SELECT * from disability d , record r, patient p where p.pid=$id and p.pid=r.pid and d.rid=r.rid AND d.grade = 1 ");
$result27ca= mysqli_query($conn,"SELECT * from disability d , record r, patient p where p.pid=$id and p.pid=r.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Lagothalmos Left'");
$result27cb= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Lagothalmos Right'");
$result27cc= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Paralysis Left'");
$result27cd= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Paralysis Right'");
$result27ce= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Claw Left'");
$result27cf= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Claw Right'");
$result27cg= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Wrist Left'");
$result27ch= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Wrist Right'");
$result27ci= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Fixed Left'");
$result27cj= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Fixed Right'");
$result27ck= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Foot Left'");
$result27cl= mysqli_query($conn,"SELECT * from disability d , patient p, record r where p.pid=$id and r.pid=p.pid and d.rid=r.rid AND d.grade = 2 AND d.disability_area='Foot Right'");
while ($row1 = mysqli_fetch_assoc($result1)){

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/faviconsBLP/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/faviconsBLP/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/faviconsBLP/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/faviconsBLP/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/faviconsBLP/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/faviconsBLP/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/faviconsBLP/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/faviconsBLP/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/faviconsBLP/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../assets/images/faviconsBLP/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/faviconsBLP/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/faviconsBLP/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/faviconsBLP/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/faviconsBLP/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Patient Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css --><!--
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  --><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://localhost/BLP/assets/blp/jquery-1.11.1.min.js.download"></script>
<!-- stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link href="http://localhost/BLP/assets/css/style.css" rel="stylesheet" type="text/css" media="all">

  <!-- header -->   
  <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="../assets/css/form_style.css">
    <style type="text/css">
        
        
    </style>

</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Bombay Leprosy Project </h2>
            <form method="POST" id="signup-form" class="signup-form" action="../assets/php/edit.php">
                <h3>
                    <span class="title_text">Patient History</span>
                </h3>

                <fieldset>
                    <div class="fieldset-content">
                        
                        <div class="form-group">
                            <label form="NOML" class="form-label">Clinic Area</label>
                            <?php while( $row1a = mysqli_fetch_assoc($result1a)){ ?>
                            <table style="padding-left: 34px ;margin-top: 9px;" id="tb8" class="form-label">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Area Code</th>
                                            <th>ID Number</th>
                                        </tr>

                                        <tr>
                                            <td><select style="width: 259px">
                                                        <?php if($row1a['clinic']==='BH') {?>
                                                        <option value="">Clinic Area Code</option>
                                                            <optgroup>
                                                                <option value="BH" selected>BH</option>
                                                                <option value="DH">DH</option> 
                                                                <option value="DHUHC">DHUHC</option>
                                                                <option value="ESIS">ESIS</option>
                                                                <option value="HO">HO</option>
                                                                <option value="JJH">JJH</option>
                                                                <option value="R">R</option>
                                                                <option value="SG">SG</option>
                                                            </optgroup>
                                                
                                                        <?php } elseif($row1a['clinic']==='DH') {?>
                                                        <option value="" disabled selected>Clinic Area Code</option>
                                                            <optgroup>
                                                                <option value="BH">BH</option>
                                                                <option value="DH" selected>DH</option> 
                                                                <option value="DHUHC">DHUHC</option>
                                                                <option value="ESIS">ESIS</option>
                                                                <option value="HO">HO</option>
                                                                <option value="JJH">JJH</option>
                                                                <option value="R">R</option>
                                                                <option value="SG">SG</option>
                                                            </optgroup>
                                                
                                                        <?php } elseif($row1a['clinic']==='DHUNC') {?>
                                                        <option value="" disabled selected>Clinic Area Code</option>
                                                            <optgroup>
                                                                <option value="BH">BH</option>
                                                                <option value="DH">DH</option> 
                                                                <option value="DHUHC" selected>DHUHC</option>
                                                                <option value="ESIS">ESIS</option>
                                                                <option value="HO">HO</option>
                                                                <option value="JJH">JJH</option>
                                                                <option value="R">R</option>
                                                                <option value="SG">SG</option>
                                                            </optgroup>
                                                
                                                        <?php } elseif($row1a['clinic']==='ESIS') {?>
                                                                <option value="" disabled selected>Clinic Area Code</option>
                                                                    <optgroup>
                                                                        <option value="BH">BH</option>
                                                                        <option value="DH">DH</option> 
                                                                        <option value="DHUHC">DHUHC</option>
                                                                        <option value="ESIS" selected>ESIS</option>
                                                                        <option value="HO">HO</option>
                                                                        <option value="JJH">JJH</option>
                                                                        <option value="R">R</option>
                                                                        <option value="SG">SG</option>
                                                                    </optgroup>

                                                        <?php } elseif($row1a['clinic']==='HO') {?>
                                                                <option value="" disabled selected>Clinic Area Code</option>
                                                                    <optgroup>
                                                                        <option value="BH">BH</option>
                                                                        <option value="DH">DH</option> 
                                                                        <option value="DHUHC">DHUHC</option>
                                                                        <option value="ESIS">ESIS</option>
                                                                        <option value="HO" selected>HO</option>
                                                                        <option value="JJH">JJH</option>
                                                                        <option value="R">R</option>
                                                                        <option value="SG">SG</option>
                                                                    </optgroup>

                                                        <?php } elseif($row1a['clinic']==='JJH') {?>
                                                                <option value="" disabled selected>Clinic Area Code</option>
                                                                    <optgroup>
                                                                        <option value="BH">BH</option>
                                                                        <option value="DH">DH</option> 
                                                                        <option value="DHUHC">DHUHC</option>
                                                                        <option value="ESIS">ESIS</option>
                                                                        <option value="HO">HO</option>
                                                                        <option value="JJH" selected>JJH</option>
                                                                        <option value="R">R</option>
                                                                        <option value="SG">SG</option>
                                                                    </optgroup>

                                                        <?php } elseif($row1a['clinic']==='R') {?>
                                                                <option value="" disabled selected>Clinic Area Code</option>
                                                                    <optgroup>
                                                                        <option value="BH">BH</option>
                                                                        <option value="DH">DH</option> 
                                                                        <option value="DHUHC">DHUHC</option>
                                                                        <option value="ESIS">ESIS</option>
                                                                        <option value="HO">HO</option>
                                                                        <option value="JJH">JJH</option>
                                                                        <option value="R" selected>R</option>
                                                                        <option value="SG">SG</option>
                                                                    </optgroup>

                                                        <?php } elseif($row1a['clinic']==='SG') {?>
                                                                <option value="" disabled selected>Clinic Area Code</option>
                                                                    <optgroup>
                                                                        <option value="BH">BH</option>
                                                                        <option value="DH">DH</option> 
                                                                        <option value="DHUHC">DHUHC</option>
                                                                        <option value="ESIS">ESIS</option>
                                                                        <option value="HO">HO</option>
                                                                        <option value="JJH">JJH</option>
                                                                        <option value="R">R</option>
                                                                        <option value="SG" selected>SG</option>
                                                                    </optgroup>
                                                
                                                        <?php } else  { ?>
                                                                <option value="" disabled selected>Clinic Area Code</option>
                                                                    <optgroup>
                                                                        <option value="BH">BH</option>
                                                                        <option value="DH">DH</option> 
                                                                        <option value="DHUHC">DHUHC</option>
                                                                        <option value="ESIS">ESIS</option>
                                                                        <option value="HO">HO</option>
                                                                        <option value="JJH">JJH</option>
                                                                        <option value="R">R</option>
                                                                        <option value="SG">SG</option>
                                                                    </optgroup>
                                                        <?php } ?>
                                                        
                                                </select>
                                            </td>
                                            <td><input type="number" name="ID Number" id="ID Number" placeholder="ID Number" value=<?php echo $row1a['patient_code']; ?> /></td>
                                        </tr>
                                        
                                        
                                    </tbody>

                            </table>
                            <?php } ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Name</label>
                            <input type="text" name="Name" id="Name" value=<?php echo $row1['fname'];  ?> placeholder="Name"/>
                        </div>
                  
                         <div class="form-row">
                            <div class="form-group">
                                <label for="DOB" class="form-label">Date of Birth</label>
                                <input style="margin-left: 13px;" type="date" value=<?php echo $row1['dob']; ?> name="DOB" id="DOB"/>
                            </div>
                            <div class="form-group">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" name="age" id="age" value=<?php echo $row1['age']; ?> />
                            </div>
                        </div>
                        <div class="clear"></div>


                        <div class="form-group">
                            <label for="aadhar" class="form-label">Aadhaar Card Number</label>
                            <input type="number" name="aadhar" id="aadhar" placeholder="Aadhar Card Number" value=<?php echo $row1['aadhar']; ?> />
                        </div>

                        <div class="form-group">
                                <label for="Sex">Sex</label>
                                <select class="form-control; valid;" name="Sex" id="Sex" style="width: 170px" >
                                    <?php if($row1['sex']=="male"){?>
                                      <option value="male" selected>Male</option>
                                      <option value="female">Female</option>
                                    <?php }else{?>
                                      <option value="male" >Male</option>
                                      <option value="female" selected>Female</option>
                                     <?php } ?>
                                </select>
                              </div>
                        
                       <div class="clear"></div>
                            <div class="rows">
                           
                                
                            <div class="form-textarea" id="ObstetricHDiv">              
                                     <label for="ObstetricH" class="form-label">Obstetric History</label>
                                    <?php while( $row12 = mysqli_fetch_assoc($result12)){ ?>
                                     <td><input type="text" id="ObstetricH" name="ObstetricH" placeholder="Obstetric History" class="valid" value=<?php echo $row12['mmyy_pregnant']; }?> ></td>
                            </div>
                                
                                  
                            <div class="form-radio">
                                <label for="Caste" class="form-label">Caste</label>
                                <div class="form-radio-item">
                                    <?php if($row1['caste']==='SC'){?>
                                    <input type="radio" name="Caste" value="SC" id="SC" checked="checked"/>
                                    <label for="SC" style="width: 65px;">SC</label>
    
                                    <input type="radio" name="Caste" value="ST" id="ST" />
                                    <label for="ST" style="width: 65px;">ST</label>

                                    <input type="radio" name="Caste" value="Others" id="Others" />
                                    <label for="Others" style="width: 65px;">Others</label>
                                    <?php } ?>
                                    <?php if($row1['caste']==='ST'){?>
                                    <input type="radio" name="Caste" value="SC" id="SC" />
                                    <label for="SC" style="width: 65px;">SC</label>
    
                                    <input type="radio" name="Caste" value="ST" id="ST" checked="checked"/>
                                    <label for="ST" style="width: 65px;">ST</label>

                                    <input type="radio" name="Caste" value="Others" id="Others" />
                                    <label for="Others" style="width: 65px;">Others</label>
                                    <?php } ?>
                                    <?php if($row1['caste']==='Others'){?>
                                    <input type="radio" name="Caste" value="SC" id="SC" />
                                    <label for="SC" style="width: 65px;">SC</label>
    
                                    <input type="radio" name="Caste" value="ST" id="ST" />
                                    <label for="ST" style="width: 65px;">ST</label>

                                    <input type="radio" name="Caste" value="Others" id="Others" checked="checked"/>
                                    <label for="Others" style="width: 65px;">Others</label>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-radio">
                                <label for="ecostat" class="form-label">Economical Status</label>
                                <div class="form-radio-item">
                                    <?php if($row1['economical_status']=="BPL"){?>
                                    <input type="radio" name="ecostat" value="BPL" id="BPL" checked="checked" />
                                    <label for="BPL" style="width: 80px;">BPL</label>
    
                                    <input type="radio" name="ecostat" value="Non-BPL" id="Non-BPL" />
                                    <label for="Non-BPL" style="width: 80px;">Non-BPL</label>
                                    <?php }else{?>
                                    <input type="radio" name="ecostat" value="BPL" id="BPL"  />
                                    <label for="BPL" style="width: 80px;">BPL</label>
    
                                    <input type="radio" name="ecostat" value="Non-BPL" id="Non-BPL" checked="checked"/>
                                    <label for="Non-BPL" style="width: 80px;">Non-BPL</label>
                                    <?php } ?>
                                </div>
                            </div>
                            </div>
                        <div class="clear"></div>
                        <div class="form-textarea">
                            
                            <label for="Add1" class="form-label">Permanent Address</label>
                            <?php while( $row2a = mysqli_fetch_assoc($result2a)){?>
                            <textarea name="Add1" id="Add1" placeholder="Address 1" value=""  ><?php echo $row2a['address'];}?></textarea>
                            
                        </div>

                        <div class="form-textarea">
                            <label for="Add2" class="form-label">Local Address</label>
                            <?php while( $row2b = mysqli_fetch_assoc($result2b)){?>
                            <textarea name="Add0" id="Add2" placeholder="Address 2" value=""><?php echo $row2b['address'];?></textarea>
                            <?php}?>
                        </div>

                        <div class="clear"></div>
                        <div class="form-row">
                            <?php while($row4 = mysqli_fetch_assoc($result4)){ ?>
                                <div class="form-group">
                                         <label for="Contact1" class="form-label">Contact No</label>
                                         <input type="number" name="Contact1" id="Contact1" value=<?php echo $row4['mobile'];  ?> />
                                </div>
                            <?php } ?>
                        </div>

                        <div class="clear"></div>
                        <div class="form-group">
                            <label for="Occupation" class="form-label">Occupation</label>
                            <input type="text" name="Occupation" id="Occupation" placeholder="Occupation" value=<?php echo $row1['occupation']; ?> />
                        </div>
                           <div class="clear"></div>
                        <div class="form-row">
                            <div class="form-group">
                                 <?php while( $row26 = mysqli_fetch_assoc($result26)){ ?>
                                <label for="Examiner" class="form-label">Examiner</label>
                               
                                <input type="text" name="Examiner" id="Examiner" value="<?php echo $row26['examiner']; ?>" />
                                 <?php }?>
                            </div>
                            <div class="form-group"  >
                                  <?php while( $row24 = mysqli_fetch_assoc($result24)){ ?>
                                <label for="Reffered" class="form-label">Referred By</label>
                                <input type="text" name="Reffered" id="Reffered" value=<?php echo $row24['doctor_name'];?> />
                                <?php } ?>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="form-group">
                            <label form="NOML" class="form-label">Number of members living in same household</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb" class="form-label">
                                
                                    <tbody>
                                        <?php while( $row7 = mysqli_fetch_assoc($result7)){ ?>
                                        <tr class="tr-header">
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="name[]" class="valid" value=<?php echo $row7['fm_name']; ?>></td>
                                            <td><input type="number" name="age[]" class="valid" value=<?php echo $row7['fm_age']; ?>></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove' title="Remove"><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Relation</th>
                                            <th>Disease</th>
                                        </tr>
                                        
                                        <tr>
                                            <td><input type="text" name="relation[]" class="valid" value=<?php echo $row7['fm_relation']; ?>></td>
                                            <td><input type="text" name="disease[]" class="valid" value=<?php echo $row7['fm_disease']; ?>></td>
                                        </tr>
                                        
                                        <tr>
                                            <th colspan="3">Notes</th>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3"><input type="text" name="notes[]" class="valid" value=<?php echo $row7['fm_diagnosis']; ?>></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>

                            </table>
                        </div>
                    
                       <div class="form-textarea">
                        <div class="form-row">
                              <div class="form-group">
                                <label for="Allergies" class="form-label">Allergies</label>
                               
                                <textarea name="Allergies" rows="6" placeholder="Nothing" value=""><?php echo $row1['allergy']; ?>
                                </textarea>  
                                <?php } ?> 
                              </div>
                              <div class="clear"></div>

                               <div class="form-group">
                               &nbsp;&nbsp;&nbsp;
                                <label for="Addiction" class="form-label">Addiction</label>
                                <br\>
                                

                                
                                <?php  while( $row9 = mysqli_fetch_assoc($result9)){?>

                                    <?php if($row9['addiction_type']==='Tobacco'){ ?>
                               <label>Tobacco</label>
                                    <table>
                                     <tr >
                                           
                                       <td><input type="text" name="Tobacco" class="valid" placeholder="Frequency" value=<?php echo $row9['addiction_frequency']; ?>></td>
                                            <td><input style="margin-left: 16px;width: 100px;" type="text" name="Tobacco_notes" class="valid" placeholder="Notes" value=<?php echo $row9['addiction_notes'];?>></td> 
                                            
                                    </tr>
                                    </table>
                                    
                                      
                                  
                                   <?php } if($row9['addiction_type']==='Cigarette'){ ?>
                                    <label>Cigarette (CIG/DAY)</label>
                                    <table>
                                       <tr>
                                           
                                            
                                        <td><input type="text" name="Cigarette" class="valid" placeholder="Frequency" value=<?php echo $row9['addiction_frequency']; ?>></td>
                                            <td><input style="margin-left: 16px;width: 100px;" type="text" name="Cigarette_notes" class="valid" placeholder="Notes" value=<?php echo $row9['addiction_notes']; ?>></td>                                         
                                     </tr>
                                    
                                     </tr>
                                    </table>
                                 
                                   <?php } if($row9['addiction_type']==='Alcohol'){ ?> 
                                   <label>Alcohol in gr/day </label> 
                                    <table>
                                        <tr>
                                            
                                            <td><input type="text" name="Alcohol" class="valid" placeholder="Frequency" value=<?php echo $row9['addiction_frequency'];?>></td>
                                            <td><input style="margin-left: 16px;width: 100px;" type="text" name="Alcohol_notes" class="valid" placeholder="Notes" value=<?php echo $row9['addiction_notes'];?>></td> 
                                     </tr>   
                                    </table><?php }}?></br\>
                                    </div>
                                    
                            </div>

                        </div>
                    <div class="fieldset-footer">
                        <span>Form 1 of 4</span>
                    </div>
                    </div>
                
                </fieldset>

                <h3>
                    <span class="title_text">Leprosy History</span>
                </h3>
                <fieldset>

                    <div class="fieldset-content">
                        <?php while( $row10 = mysqli_fetch_assoc($result10)){ ?>
                         <div class="form-textarea">
                            <label for="PMH" class="form-label">Past Medical History</label>
                            <textarea name="PMH" id="PMH" placeholder="Past Medical History" value=""><?php echo $row10['disease'] ; } ?></textarea>
                        </div>
                        
                    <div class="fieldset-content">
                         <div class="form-textarea">
                             <label for="PLH" class="form-label">Past Leprosy History</label>
                              <div class="form-group">

                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb1" class="tab orlist">
                                
                                    <tbody>
                                        <?php while( $row11 = mysqli_fetch_assoc($result11)){ ?>
                                        <tr class="tr-header">
                                            <th colspan="3">Hospital</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore1" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td colspan="3"><input type="text" name="hospital" class="valid" value=<?php echo $row11['hospital']; ?>></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove1'><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Drug</th>
                                            <th>Dosage</th> 
                                        </tr>
                                        
                                        <tr>
                                            <td><input type="text" name="drug" class="valid" value=<?php echo $row11['drugs']; ?>></td>
                                            <td><input type="text" name="dosage" class="valid" value=<?php echo $row11['dosage']; ?>></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                        
                                        <tr>
                                            <td><input style="margin-left: 16px;" type="date" name="Start_past_date" class="valid" value=<?php echo $row11['mmyy_start']; ?>></td> 
                                            <td><input style="margin-left: 16px;" type="date" name="End_past_date" class="valid" value=<?php echo $row11['mmyy_end']; ?>></td> 
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                            </table>
                        
                        </div>
                        </div>

                       
    
                        <div class="form-textarea">
                            <label for="KLC" class="form-label">Known Leprosy Contacts</label>
                              
                                <div class="form-group">

                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb6" class="tab orlist">
                                
                                    <tbody>
                                        <?php while( $row14 = mysqli_fetch_assoc($result14)){ ?>
                                        <tr class="tr-header">
                                            <th>Name</th>
                                            <th>Relation</th>
                                            <th>Contact</th>                                               
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore6" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="name" class="valid" value=<?php echo $row14['kname']; ?>></td>
                                            <td><input type="text" name="relation" class="valid" value=<?php echo $row14['relation']; ?>></td>
                                            <td><input type="text" name="contact" class="valid" value=<?php echo $row14['contact']; ?>></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>
                                        </tr> 
                                        
                                        <tr>
                                            <th colspan="3">Address</th>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3"><input type="text" name="address" class="valid" value=<?php echo $row14['address']; ?>></td>
                                        </tr>
                                        
                                        <tr>
                                       
                                            <th colspan="3">Description</th>
                                        </tr>
                                        
                                        <tr>
                                            
                                            <td colspan="3"><input type="text" name="description" class="valid" value=<?php echo $row14['description']; ?>></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                            </table>
                            </div>
                       </div> 


                        <div class="form-group">
                            <label for="fcfs" class="form-label">First Signs and Symptoms(with date of onset)</label>
                            <?php while( $row17 = mysqli_fetch_assoc($result17)){ ?>
                            <input type="text" name="fcfs" id="fcfs" placeholder="All the known Symtoms" value=<?php echo $row17['symptoms'];  ?> />
                        </div>
                        

                        <div class="form-radio">
                                <label for="tld" class="form-label">Type of Leprosy diagnosed</label>
                                <?php while( $row17a = mysqli_fetch_assoc($result17a)){ ?>
                                <div class="form-radio-item ">
                                    <?php if($row17a['pb']==='1'){ ?> 
                                    <input type="checkbox" name="tld" value="PB" id="PB" checked='checked'/>
                                    <label style="width: 12%;" for="PB">PB</label>
                                    <?php }else{ ?>
                                    <input type="checkbox" name="tld" value="PB" id="PB"/>
                                    <label style="width: 12%;" for="PB">PB</label>
                                    <?php } if($row17a['mb']==='1'){ ?>
                                    <input type="checkbox" name="tld" value="MB" id="MB" style="" checked='checked' />
                                    <label for="MB">MB</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                                    <?php }else{ ?>
                                    <input type="checkbox" name="tld" value="MB" id="MB" style=""  />
                                    <label for="MB">MB</label>&ensp;&ensp;&ensp;&ensp;&ensp;
                                    <?php } if($row17a['tt']==='1'){ ?>
                                    <input type="checkbox" name="tld" value="TT" id="TT" checked='checked' />
                                    <label for="TT">TT</label>
                                    <?php }else{ ?>
                                    <input type="checkbox" name="tld" value="TT" id="TT" />
                                    <label for="TT">TT</label>
                                    <?php } if($row17a['bt']==='1'){ ?>
                                    <input type="checkbox" name="tld" value="BT" id="BT" checked='checked'/>
                                    <label for="BT">BT</label>
                                    <?php }else{ ?>
                                    <input type="checkbox" name="tld" value="BT" id="BT" />
                                    <label for="BT">BT</label>
                                    <?php } if($row17a['bb']==='1'){ ?>
                                    <input type="checkbox" name="tld" value="BB" id="BB" checked='checked'/>
                                    <label for="BB">BB</label>
                                    <?php }else{ ?>
                                    <input type="checkbox" name="tld" value="BB" id="BB" />
                                    <label for="BB">BB</label>
                                    <?php } if($row17a['bl']==='1'){ ?>
                                    <input type="checkbox" name="tld" value="BL" id="BL" checked='checked'/>
                                    <label for="BL">BL</label>
                                    <?php }else{ ?>
                                    <input type="checkbox" name="tld" value="BL" id="BL" />
                                    <label for="BL">BL</label>
                                    <?php } if($row17a['ll']==='1'){ ?>
                                    <input type="checkbox" name="tld" value="LL" id="LL" checked='checked'/>
                                    <label for="LL">LL</label>
                                    <?php }else{ ?>
                                    <input type="checkbox" name="tld" value="LL" id="LL" />
                                    <label for="LL">LL</label>
                                    <?php } if($row17a['pnl']==='1'){ ?>
                                    <input type="checkbox" name="tld" value="PNL" id="PNL" checked='checked'/>
                                    <label for="PNL">PNL</label>
                                    <?php }else{ ?>
                                    <input type="checkbox" name="tld" value="PNL" id="PNL" />
                                    <label for="PNL">PNL</label>

                                    <?php }  ?>
                                </div>
                                <?php } ?>
                            </div>
                
                              
                    </div>

                    <div class="fieldset-footer">
                        <span>Form 2 of 4</span>
                    </div>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Leprosy Treatment</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group" style="font-size:20px;">
                            <label  class="form-label" ><center>First Treatment</center></label>
                            </div>


                            <div class="form-group">
                             <label for="dp" class="form-label">Drug Prescription</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb5" class="tab orlist">
                                
                                    <tbody>
                                        <?php while( $row22 = mysqli_fetch_assoc($result22)){ ?>
                                        <tr class="tr-header">
                                            <th>Drug Used</th>
                                            <th>Drug Dosage</th>   
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="drug used" class="valid" value=<?php echo $row22['dname']; ?>></td>
                                            <td><input type="text" name="drug dosage" class="valid" value=<?php echo $row22['dosage']; ?>></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                        
                                        <tr>
                                            <td><input style="margin-left: 16px;" type="date" name="Start_drug_date" class="valid" value=<?php echo $row22['start_date']; ?>></td> 
                                            <td><input style="margin-left: 16px;" type="date" name="End_drug_date" class="valid" value=<?php echo $row22['end_date']; ?>></td> 
                                        </tr>
                                        <?php } ?>
                                    </tbody>

                            </table>
                        
                        </div>
                        
                        <div class="clear"></div>
                         <div class="form-group">
                            <label for="omc" class="form-label">Other MDT courses</label>
                            <input type="text" name="omc" id="omc" placeholder="Other MDT courses" value=<?php echo $row17['other_mdt_courses']; }?> />
                        </div>

                         <div class="form-textarea">
                            <label for="Result" class="form-label">Outcome after initial treatment</label>
                            <?php while( $row17b = mysqli_fetch_assoc($result17b)){ ?>
                            <textarea name="Result" id="Result" placeholder="" rows="2" value=""><?php echo $row17b['result']; }?></textarea>
                        </div>

                        
                        
                        <div class="form-radio">
                                <label for="reaction" class="form-label">Reaction Type</label>
                            <?php while( $row21 = mysqli_fetch_assoc($result21)){ ?>
                                <div class="form-radio-item">
                                    <?php if($row21['type_reaction']==='Type1') {?>
                                    <input type="radio" name="Reaction" value="Type1" id="Type1" checked="checked"/>
                                    <label for="Type1" style="width: 68px">Type 1</label>
    
                                    <input type="radio" name="Reaction" value="Type2" id="Type2" />
                                    <label for="Type2" style="width: 68px">Type 2</label>

                                    <input type="radio" name="Reaction" value="None" id="None" />
                                    <label for="None" style="width: 68px">None</label>
                                    
                                    <?php } elseif($row21['type_reaction']==='Type2') {?>
                                    <input type="radio" name="Reaction" value="Type1" id="Type1" />
                                    <label for="Type1" style="width: 68px">Type 1</label>
    
                                    <input type="radio" name="Reaction" value="Type2" id="Type2" checked="checked"/>
                                    <label for="Type2" style="width: 68px">Type 2</label>

                                    <input type="radio" name="Reaction" value="None" id="None" />
                                    <label for="None" style="width: 68px">None</label>
                                    
                                    <?php } else {?>
                                    <input type="radio" name="Reaction" value="Type1" id="Type1" />
                                    <label for="Type1" style="width: 68px">Type 1</label>
    
                                    <input type="radio" name="Reaction" value="Type2" id="Type2" />
                                    <label for="Type2" style="width: 68px">Type 2</label>

                                    <input type="radio" name="Reaction" value="None" id="None" />
                                    <label for="None" style="width: 68px">None</label>
                                    
                                    <?php } ?>
                                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                </div>
                            
                                <div class="form-radio-item">
                                <?php if($row21['neuritis']==='Neuritis') {?>
                                    
                                    <input type="checkbox" name="Neuritis" value="Neuritis" id="Neuritis" checked="checked"/>
                                    <label for="Neuritis" style="width: 68px">Neuritis</label>
                                    
                                <?php } ?>
                                </div>
                            </div>
                        

                        <div class="form-textarea">
                            <label  class="form-label">Reaction Description</label>
                            <textarea name="Description" rows="4" placeholder="Description"><?php echo $row21['description'];  ?></textarea>
                            <?php } ?>
                        </div>

                        
                         <div class="form-textarea">
                            <label for="Current" class="form-label">Current treatment</label>
                            <textarea name="Current" id="Current" placeholder=""  ></textarea>
                        </div>


                         <div class="form-group">
                                <label for="Disability" class="form-label">Disability</label> 
                        <div style="display: inline;">
                           
                        
                           <table class="table table-bordered">
                              <tr>
                                
                                <th>Grade 0 </th>
                                <?php if(mysqli_num_rows($result27a)>0){ ?> 
                                <td><input type="checkbox" name="Grade0" checked="checked" value="Present"></td>
                               <?php }else{ ?>
                                <td><input type="checkbox" name="Grade0" value="Present"></td>
                                <?php } ?>
                              </tr>
                         </table>
                         
                            <?php if(mysqli_num_rows($result27b)>0){ ?>
                                <?php while( $row27b = mysqli_fetch_assoc($result27b)){ ?> 
                               <table class=" table table-bordered">
                                      
                                  <tr>
                                      <th rowspan="2">Grade 1</th>

                                      <th >Anesthesia of hand</th>
                                      <?php if($row27b['disability_area']=== 'hand') {?>
                                      <td><input  type="checkbox" name="Grade1" checked="checked"></td>
                                      <?php } else {?>
                                      <td><input  type="checkbox" name="Grade1"></td>
                                      <?php } ?>
                                  </tr> 
                                  
                                   <tr>
                                         <th >Anesthesia of leg</th>
                                         <?php if($row27b['disability_area']==='leg') {?>   
                                         <td><input type="checkbox" name="Grade1"  checked="checked" style="width: 20px"></td>
                                         <?php } else {?>
                                         <td><input type="checkbox" name="Grade1" style="width: 20px"></td>
                                         <?php } ?>
                                      </tr>
                                  
                              </table>
                              <?php } }else{ ?>
                              <table class=" table table-bordered">
                                    <tr>
                                      <th rowspan="2">Grade 1</th>

                                      <th >Anesthesia of hand</th>
                                      <td><input type="checkbox" name="Grade1"  style="width: 20px"></td>
                                      
                                      
                                  </tr> 
                                  
                                   <tr>
                                         
                                            
                                         <th >Anesthesia of leg</th>
                                         
                                         <td><input type="checkbox" name="Grade1" style="width: 20px"></td>
                                         
                                      </tr>
                                  </table>
                               <?php }  ?>
                           <!--div style="display:flex"-->
                           
                           <table class="table table-bordered">
                               <th colspan="4">Grade 2</th>
                                     
                              <tr>
                                  <th colspan="2">Name</th>
                        
                                  <th>Left</th>
                                  <th>Right</th>
                              </tr>  
                              <tr>
                                <th rowspan=2>Face</th>
                                <td>Lagothalmos</td>
                                <?php if(mysqli_num_rows($result27ca)>0){ ?>
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Left" checked="checked"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Right"></td>
                                <?php }if(mysqli_num_rows($result27cb)>0){ ?>
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Left" ></td>
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Right" checked="checked"></td>
                                <?php }if(mysqli_num_rows($result27cb)===0 && mysqli_num_rows($result27ca)===0) {?>
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Left" ></td>
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Right"></td>
                                <?php } ?>
                                <tr>
                                   <td>Facial Paralysis</td>
                                   <?php if(mysqli_num_rows($result27cc)>0){ ?>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Left" checked="checked"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Right"></td>
                                   <?php }if(mysqli_num_rows($result27cd)>0){ ?>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Right" checked="checked"></td>
                                   <?php }if(mysqli_num_rows($result27cc)===0 && mysqli_num_rows($result27cd)===0) {?>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Right" ></td>
                                   <?php } ?>
                               </tr>
                              </tr>
                              <tr>
                                <th rowspan=3>Hands</th>
                                <td>Claw</td>
                                <?php if(mysqli_num_rows($result27ce)>0){ ?>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Left" checked="checked"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Right"></td>
                                <?php }if(mysqli_num_rows($result27cf)>0){ ?>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Left"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Right" checked="checked"></td>
                                <?php }if(mysqli_num_rows($result27ce)===0 && mysqli_num_rows($result27cf)===0) {?>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Left"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Right"></td>
                                <?php } ?>
                                <tr>
                                   <td>Wrist Drop</td>
                                   <?php if(mysqli_num_rows($result27cg)>0){ ?>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Left" checked="checked"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Right"></td>
                                   <?php }if(mysqli_num_rows($result27ch)>0){ ?>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Right" checked="checked"></td>
                                   <?php }if(mysqli_num_rows($result27cg)===0 && mysqli_num_rows($result27ch)===0) {?>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Right"></td>
                                   <?php }?>
                               </tr>
                               <tr>
                                   <td>Fixed Claw</td>
                                   <?php if(mysqli_num_rows($result27ci)>0){ ?>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Left" checked="checked"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Right"></td>
                                   <?php }if(mysqli_num_rows($result27cj)>0){ ?>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Right" checked="checked"></td>
                                   <?php }if(mysqli_num_rows($result27ci)===0 && mysqli_num_rows($result27cj)===0) {?>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Right"></td>
                                   <?php } ?>
                               </tr>
                              </tr>
                              <tr>
                                <th rowspan=2>Feet</th>
                                <td>Foot drop</td>
                                <?php if(mysqli_num_rows($result27ck)>0){ ?>
                                <td><input type="checkbox" name="Grade2[]" value="Foot Left" checked="checked"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Foot Right"></td>
                                <?php }if(mysqli_num_rows($result27cl)>0){ ?>
                                <td><input type="checkbox" name="Grade2[]" value="Foot Left"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Foot Right" checked="checked"></td>
                                <?php }if(mysqli_num_rows($result27ck)===0 && mysqli_num_rows($result27cl)===0) {?>
                                <td><input type="checkbox" name="Grade2[]" value="Foot Left"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Foot Right"></td>
                                <?php } ?>
                               </tr>
                          </table>
                          
                      </div>
                              
                          
                          
                       </div>


                       <div class="form-group">
                            <label for="Ophtalmic_involvement" class="form-label">Opthalmic involvement</label>
                            <?php while( $row17c = mysqli_fetch_assoc($result17c)){ ?>
                        <input type="text" name="Ophtalmic_involvement" id="Ophtalmic_involvement" value=<?php echo $row17c['opthalmic_involvement']; }?> />
                        </div>
                    </div>

                    <div class="fieldset-footer">
                        <span>Form 3 of 4</span>
                    </div>
                </fieldset>



                 <h3>
                    <span class="title_text">Clinical Examination</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                             
                            <div class="form-group">
                             <?php   while( $row19 = mysqli_fetch_assoc($result19)){ ?>
                            <label for="Sensory" class="form-label">Sensory Testing(On Diagram)</label>
                            <select name="Touch" class="custom-select" style="height: 50px;">
                                <?php if($row19['touch']=== 'Present') { ?>
                                   <option value="" disabled selected>Touch</option>
                                   <option value="Present" selected>Touch : Present</option>
                                   <option value="Absent">Touch : Absent</option>
                                   <option value="None">Touch : None</option>
                                  
                                 <?php } elseif($row19['touch']=== 'Absent') { ?>
                                    <option value="" disabled selected>Touch</option>
                                    <option value="Present">Touch : Present</option>
                                    <option value="Absent" selected>Touch : Absent</option>
                                    <option value="None">Touch : None</option>

                                  <?php } else { ?>
                                    <option value="" disabled selected>Touch</option>
                                    <option value="Present">Touch : Present</option>
                                    <option value="Absent">Touch : Absent</option>
                                    <option value="None" selected>Touch : None</option>
                                 <?php } ?>  

                            </select>
                            
                            <select name="Pain" class="custom-select"  style="height: 50px;">
                                <?php if($row19['pinprick']=== 'Partial') { ?>
                                    <option value="" disabled selected>Pain</option>
                                    <option value="Partial" selected>Partial</option>
                                    <option value="Total">Total</option>
                                    <option value="None">None</option>

                                <?php } elseif($row19['pinprick']=== 'Total') { ?>
                                    <option value="" disabled selected>Pain</option>
                                    <option value="Partial">Partial</option>
                                    <option value="Total" selected>Total</option>
                                    <option value="None">None</option> 

                                <?php } else  { ?>
                                    <option value="" disabled selected>Pain</option>
                                    <option value="Partial">Partial</option>
                                    <option value="Total">Total</option>
                                    <option value="None" selected>None</option> 

                                <?php } ?>        
                            </select>
                             <?php  }//yaha } dalega to hoyega?>
                        </div>
                        
                      
                        <div class="form-group">
                            <label for="Sensory" class="form-label">Temperature</label>
                            
                            
                             <table style="padding-left: 34px ;" id="tb9">

                                 
                                    <tbody>
                                        
                                        <tr style="padding: 2px;" class="tr-header">
                                            <th colspan="2"><label style="height: 45px;" for="Hot">Hot</label></th>
                                            <th colspan="2"><label style="height: 45px;" for="Cold">Cold</label></th>
                                        </tr>   
                                        <tr style="padding: 2px;" class="form-radio-item">
                                            <?php $result19 = mysqli_query($conn,$query19); while($row19 = mysqli_fetch_assoc($result19)){ ?>
                                           <?php  if( strpos($row19['temperature'], 'Hot Present') !== false) { ?>
                                            <td colspan="3">
                                                <input type="checkbox" name="Temp[]" value="Hot Present" id="Hot Present" checked="checked" />
                                                <label style="height: 45px; width: 75px" for="Hot Present">Present</label>
                                                
                                            </td>
                                        <?php }else{?>
                                            <td>
                                                <input type="checkbox" name="Temp[]" value="Hot Present" id="Hot Present" />
                                                <label style="height: 45px; width: 75px" for="Hot Present">Present</label>
                                            </td>
                                            <?php } if( strpos($row19['temperature'], 'Hot Absent') !== false) { ?>
                                            <td colspan="3">vzxcvzxc
                                                
                                                <input type="checkbox" name="Temp[]" value="Hot Absent" id="Hot Absent" checked="checked" />
                                                <label style="height: 45px; width: 75px" for="Hot Absent">Absent</label>
                                            </td>
                                            <?php }else{?>
                                            <td>
                                                <input type="checkbox" name="Temp[]" value="Hot Absent" id="Hot Absent" />
                                                <label style="height: 45px; width: 75px" for="Hot Absent">Absent</label>
                                            </td>
                                            <?php } if( strpos($row19['temperature'], 'Cold Present') !== false) { ?>
                                            
                                            <td colspan="3">
                                                <input type="checkbox" name="Temp[]" value="Cold Present" id="Cold Present" checked="checked" />
                                                <label style="height: 45px; width: 75px" for="Cold Present">Present</label>
                                               
                                            </td>
                                        <?php }else{?>
                                            <td>    
                                                <input type="checkbox" name="Temp[]" value="Cold Present" id="Cold Present" />
                                                <label style="height: 45px; width: 75px" for="Cold Present">Present</label>
                                            </td>
                                            <?php } if( strpos($row19['temperature'], 'Cold Absent') !== false) { ?>
                                            
                                            <td colspan="3">
                                                
                                                <input type="checkbox" name="Temp[]" value="Cold Absent" id="Cold Absent" checked="checked" />
                                                <label style="height: 45px; width: 75px" for="Cold Absent">Absent</label>
                                            </td>
                                        <?php }else{ ?>
                                            <td>
                                                <input type="checkbox" name="Temp[]" value="Cold Absent" id="Cold Absent" />
                                        
                                                <label style="height: 45px; width: 75px" for="Cold Absent">Absent</label>
                                            </td>
                                        
                                        <?php } ?>
                                    </tr>
                                    <?php }?>
                                    </tbody>

                            </table>
                        
                        
                        </div>
                        
                        <div class="form-group">
                            <label for="Peripheral" class="form-label">Peripheral Nerves(Thickened And/Or Tender)</label>
                        <table class="table table-bordered">
                            <thead>
                               <tr>
                                    <th>Name of Nerve </th>
                                    <th>Thicken</th>
                                    <th>Tender</th>
                               </tr>
                           </thead>
                           
                           <tbody>
                            
                              <tr>
                                 
                                <td>Supra-orbital</td>
                                <?php while( $row18a = mysqli_fetch_assoc($result18a)){ ?>
                                <?php if($row18a['thickness']==='Thicken'){?>
                                <td><input type="checkbox" name="Supra-orbital" value="Thicken" checked="checked"></td>
                                <td><input type="checkbox" name="Supra-orbital" value="Tender"></td>
                                <?php } elseif($row18a['tenderness']==='Tender') { ?>
                                <td><input type="checkbox" name="Supra-orbital" value="Thicken" ></td>
                                <td><input type="checkbox" name="Supra-orbital" value="Tender" checked="checked"></td><?php } else{?>
                                    <td><input type="checkbox" name="Supra-orbital" value="Thicken" ></td>
                                <td><input type="checkbox" name="Supra-orbital" value="Tender"></td>

                                <?php } ?>
                                <?php } ?>
                              </tr>
                            


                            
                              <tr>
                                <?php while( $row18b = mysqli_fetch_assoc($result18b)){ ?>
                                <td>Great Auricular</td>
                                <?php if($row18b['thickness']==='Thicken'){?>
                                <td><input type="checkbox" name="Great Auricular" value="Thicken" checked="checked"></td>
                                <td><input type="checkbox" name="Great Auricular" value="Tender"></td>
                                <?php }elseif ($row18b['tenderness']==='Tender') {?>
                                <td><input type="checkbox" name="Great Auricular" value="Thicken" ></td>
                                <td><input type="checkbox" name="Great Auricular" value="Tender" checked="checked"></td><?php } else{?>
                                <td><input type="checkbox" name="Great Auricular" value="Thicken" ></td>
                                <td><input type="checkbox" name="Great Auricular" value="Tender"></td>
                            <?php } ?>
                            <?php } ?>
                            </tr>
                          

                          
                            <tr>
                                <?php while( $row18c = mysqli_fetch_assoc($result18c)){ ?>
                                <td>Ulnar</td>
                                <?php if( $row18c['thickness']==='Thicken'){?>
                                <td><input type="checkbox" name="Ulnar" value="Thicken" checked="checked"></td>
                                <td><input type="checkbox" name="Ulnar" value="Tender"></td>
                                <?php } elseif ($row18c['tenderness']==='Tender') {?>
                                <td><input type="checkbox" name="Ulnar" value="Thicken" ></td>
                                <td><input type="checkbox" name="Ulnar" value="Tender" checked="checked"></td>
                                <?php } else {?>
                                <td><input type="checkbox" name="Ulnar" value="Thicken" ></td>
                                <td><input type="checkbox" name="Ulnar" value="Tender"></td>

                                <?php } ?>
                                <?php } ?> 
                            </tr>
                         
                           
                                
                            <tr>
                                <?php while( $row18d = mysqli_fetch_assoc($result18d)){ ?>
                                <td>Medial Cutaneous</td>
                                <?php if($row18d['thickness']==='Thicken'){?>
                                <td><input type="checkbox" name="Medial Cutaneous" value="Thicken" checked="checked"></td>
                                <td><input type="checkbox" name="Medial Cutaneous" value="Tender"></td>
                                 <?php } elseif ($row18d['tenderness']==='Tender') {?>
                                <td><input type="checkbox" name="Medial Cutaneous" value="Thicken" ></td>
                                <td><input type="checkbox" name="Medial Cutaneous" value="Tender" checked="checked"></td>
                                 <?php } else{?>
                                 <td><input type="checkbox" name="Medial Cutaneous" value="Thicken" ></td>
                                <td><input type="checkbox" name="Medial Cutaneous" value="Tender" ></td>

                                <?php } ?>
                                <?php } ?>
                            </tr>
                            

                           
                            <tr> 
                                <?php while( $row18e = mysqli_fetch_assoc($result18e)){ ?>
                                <td>Radial Cutaneous</td>
                                <?php if($row18e['nerves']==='Radial Cutaneous' and  $row18e['thickness']==='Thicken'){?>
                                <td><input type="checkbox" name="Radial Cutaneous" value="Thicken" checked="checked"></td>
                                <td><input type="checkbox" name="Radial Cutaneous" value="Tender"></td>
                                <?php } elseif ($row18e['nerves']==='Radial Cutaneous' and  $row18e['tenderness']==='Tender') {?>
                                <td><input type="checkbox" name="Radial Cutaneous" value="Thicken" ></td>
                                <td><input type="checkbox" name="Radial Cutaneous" value="Tender" checked="checked"></td>
                                 <?php } elseif($row18e['nerves']==='Radial Cutaneous' and  $row18e['tenderness']==='' and $row18e['thickness']==='') {?>
                                 <td><input type="checkbox" name="Radial Cutaneous" value="Thicken" ></td>
                                <td><input type="checkbox" name="Radial Cutaneous" value="Tender" ></td>
                                <?php } ?>
                                <?php } ?>
                            </tr>
                          

                           
                            <tr>
                                <?php while( $row18f = mysqli_fetch_assoc($result18f)){ ?>
                                <td>Lateral Popliteal</td>
                                <?php if($row18f['thickness']==='Thicken'){?>
                                <td><input type="checkbox" name="Lateral Popliteal" value="Thicken" checked="checked"></td>
                                <td><input type="checkbox" name="Lateral Popliteal" value="Tender"></td>
                                <?php } elseif  ($row18f['tenderness']==='Tender'){?>
                                <td><input type="checkbox" name="Lateral Popliteal" value="Thicken" ></td>
                                <td><input type="checkbox" name="Lateral Popliteal" value="Tender" checked="checked"></td>
                                <?php } else {?>
                                <td><input type="checkbox" name="Lateral Popliteal" value="Thicken" ></td>
                                <td><input type="checkbox" name="Lateral Popliteal" value="Tender" ></td>
                                <?php } ?>
                                <?php } ?>
                            </tr>
                            

                           
                            <tr>
                                 <?php while( $row18g = mysqli_fetch_assoc($result18g)){ ?>
                                <td>Sural Nerve</td>
                                <?php if($row18g['thickness']==='Thicken'){?>
                                <td><input type="checkbox" name="Sural Nerve" value="Thicken" checked="checked"></td>
                                <td><input type="checkbox" name="Sural Nerve" value="Tender"></td>
                                <?php } elseif ($row18g['tenderness']==='Tender'){?>
                                <td><input type="checkbox" name="Sural Nerve" value="Thicken" ></td>
                                <td><input type="checkbox" name="Sural Nerve" value="Tender" checked="checked"></td>
                                <?php } else{?>
                                <td><input type="checkbox" name="Sural Nerve" value="Thicken" ></td>
                                <td><input type="checkbox" name="Sural Nerve" value="Tender" ></td>

                                <?php } ?>
                                <?php } ?>
                            </tr>
                            

                            
                            <tr>
                                <?php while( $row18h = mysqli_fetch_assoc($result18h)){ ?>
                                <td>Posterior Tibial</td>
                                <?php if($row18h['thickness']==='Thicken'){?>
                                <td><input type="checkbox" name="Posterior Tibial" value="Thicken" checked="checked"></td>
                                <td><input type="checkbox" name="Posterior Tibial" value="Tender"></td>
                                <?php } elseif ($row18h['tenderness']==='Tender'){?>
                                <td><input type="checkbox" name="Posterior Tibial" value="Thicken" ></td>
                                <td><input type="checkbox" name="Posterior Tibial" value="Tender" checked="checked"></td>
                                 <?php } else {?>
                                  <td><input type="checkbox" name="Posterior Tibial" value="Thicken" ></td>
                                <td><input type="checkbox" name="Posterior Tibial" value="Tender" ></td>
                                <?php } ?>
                                <?php } ?>
                            </tr>
                            

                            
                            <tr>
                                <?php while( $row18i = mysqli_fetch_assoc($result18i)){ ?>
                                <td>Superficial Personal</td>
                                <?php if($row18i['thickness']==='Thicken'){?>
                                <td><input type="checkbox" name="Superficial Personal" value="Thicken" checked="checked"></td>
                                <td><input type="checkbox" name="Superficial Personal" value="Tender"></td>
                                <?php } elseif ( $row18i['tenderness']==='Tender') {?>
                                <td><input type="checkbox" name="Superficial Personal" value="Thicken" ></td>
                                <td><input type="checkbox" name="Superficial Personal" value="Tender" checked="checked"></td>
                                <?php } else {?>
                                 <td><input type="checkbox" name="Superficial Personal" value="Thicken" ></td>
                                <td><input type="checkbox" name="Superficial Personal" value="Tender" ></td>
                                <?php } ?>
                                <?php } ?>
                            </tr>
                            
                          </tbody> 
                     </table>
                        </div>   


                        
                          


                        <div class="form-group">
                            <label for="Eyes" class="form-label">Eyes</label>
                            <?php while( $row17d = mysqli_fetch_assoc($result17d)){ ?>
                            <input type="text" name="Eyes" id="Eyes" value=<?php echo $row17d['eyes']; ?> />
                        </div>



                         <div class="form-textarea">
                            <label for="furtherobservations" class="form-label">Further Observations</label>
                            
                            <textarea name="furtherobservations" id="furtherobservations" placeholder="" rows="2" >
                                <?php echo $row17d['t_notes']; } ?>
                            </textarea>
                        </div>
                        
                            Upload Images:
                            <input type="file" name="file">
                                              
                    </div>


                    <div class="fieldset-footer">
                        <span>Form 4 of 4</span>
                    </div>
                
  
            </form>
        </div>
        <div class="copy w3ls">
               <p>&copy; 2018  Bombay Leprosy Project  </p>
            </div>
     </div>


    <!-- JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/js/multiselect.js"></script>
    <script src="../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="../assets/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
<script type="text/javascript">
    
$(function(){
    $('#addMore').on('click', function() {
              var data = $("#tb tr:eq(0)").clone(true).appendTo("#tb");
              var data1 = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
              var data2 = $("#tb tr:eq(2)").clone(true).appendTo("#tb");
              var data3 = $("#tb tr:eq(3)").clone(true).appendTo("#tb");
              var data4 = $("#tb tr:eq(4)").clone(true).appendTo("#tb");
              var data5 = $("#tb tr:eq(5)").clone(true).appendTo("#tb");
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove(); 
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1);
             document.getElementById("tb").deleteRow(trIndex1-1);
             
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
                                    
<script type="text/javascript">
    
$(function(){
    $('#addMore1').on('click', function() {
              var data = $("#tb1 tr:eq(0)").clone(true).appendTo("#tb1");
              var data1 = $("#tb1 tr:eq(1)").clone(true).appendTo("#tb1");
              var data2 = $("#tb1 tr:eq(2)").clone(true).appendTo("#tb1");
              var data3 = $("#tb1 tr:eq(3)").clone(true).appendTo("#tb1");
              var data4 = $("#tb1 tr:eq(4)").clone(true).appendTo("#tb1");
              var data5 = $("#tb1 tr:eq(5)").clone(true).appendTo("#tb1");
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove1', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1);
             document.getElementById("tb1").deleteRow(trIndex1-1);
             
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
                                    
<script type="text/javascript">
    
$(function(){
    $('#addMore2').on('click', function() {
              var data = $("#tb2 tr:eq(1)").clone(true).appendTo("#tb2");
              data.find("input").val('');
     });
     $(document).on('click', '.remove2', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>

<script type="text/javascript">
    
$(function(){
    $('#addMore3').on('click', function() {
              var data = $("#tb3 tr:eq(1)").clone(true).appendTo("#tb3");
              data.find("input").val('');
     });
     $(document).on('click', '.remove3', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
<script type="text/javascript">
    
$(function(){
    $('#addMore4').on('click', function() {
              var data = $("#tb4 tr:eq(1)").clone(true).appendTo("#tb4");
              data.find("input").val('');
     });
     $(document).on('click', '.remove4', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
    
<script type="text/javascript">
    
$(function(){
    $('#addMore5').on('click', function() {
              var data = $("#tb5 tr:eq(0)").clone(true).appendTo("#tb5");
              var data1 = $("#tb5 tr:eq(1)").clone(true).appendTo("#tb5");
              var data2 = $("#tb5 tr:eq(2)").clone(true).appendTo("#tb5");
              var data3 = $("#tb5 tr:eq(3)").clone(true).appendTo("#tb5");
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove5', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1);
             document.getElementById("tb5").deleteRow(trIndex1-1);
           } else {
             alert("Sorry!! Can't remove first row!");
           }
      });
});      
</script>
                                    
<script type="text/javascript">
    
$(function(){
    $('#addMore6').on('click', function() {
              var data = $("#tb6 tr:eq(0)").clone(true).appendTo("#tb6");
              var data1 = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
              var data2 = $("#tb6 tr:eq(2)").clone(true).appendTo("#tb6");
              var data3 = $("#tb6 tr:eq(3)").clone(true).appendTo("#tb6");
              var data4 = $("#tb6 tr:eq(4)").clone(true).appendTo("#tb6");
              var data5 = $("#tb6 tr:eq(5)").clone(true).appendTo("#tb6");
              data5.find("input").val('');
              data4.find("input").val('');
              data3.find("input").val('');
              data2.find("input").val('');
              data1.find("input").val('');
              data.find("input").val('');
     });
     $(document).on('click', '.remove6', function() {
         var trIndex1 = $(this).closest("tr").index();
            if(trIndex1>1) {
             $(this).closest("tr").remove();
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1);
             document.getElementById("tb6").deleteRow(trIndex1-1);
             
           } else {
             alert("Sorry!! Can't remove first row!");
          } 
      });
});      
</script>
                                
<script type="text/javascript">
     $("#Sex").change(function() {
          if ($(this).val() == "female") {
            $('#ObstetricHDiv').show();

          } else {
            $('#ObstetricHDiv').hide();

          }
        });
    $("#Sex").trigger("change");
</script>
</body>

</html>
    <?php } ?>