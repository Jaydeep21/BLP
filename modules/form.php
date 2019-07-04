<?php
include('navbar.php');
if(!isset($_SESSION['id'])){
    echo"<script>
    alert('Please Login in');
    document.location.href = 'login.php';
    </script>
    ";
}
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
            <form method="POST" id="signup-form" class="signup-form" action="../assets/php/form.php">
                <h3>
                    <span class="title_text">Patient History</span>
                </h3>

                <fieldset>
                    <div class="fieldset-content">
                        <div class="form-group">
                            <label for="ID" class="form-label">ID</label>
                            <input type="text" name="ID" value="1" style="text-align: center;" placeholder=""  />
                        </div>
                        
                        <div class="form-group">
                            <label form="NOML" class="form-label">Clinic Area</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb8" class="form-label">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Area Code</th>
                                            <th>ID Number</th>
                                        </tr>

                                        <tr>
                                            <td><select name="Clinic" style="width: 259px">
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
                                                </select>
                                            </td>
                                            <td><input type="number" name="IDclinic" id="IDclinic" placeholder="ID Number" /></td>
                                        </tr>
                                        
                                        
                                    </tbody>

                            </table>
                        </div>


                        <div class="form-group">
                            <label for="email" class="form-label">Name</label>
                            <input type="text" name="Name" id="Name" placeholder="Name"/>
                        </div>
                  
                         <div class="form-row">
                            <div class="form-group">
                                <label for="DOB" class="form-label">Date of Birth</label>
                                <input style="margin-left: 13px;" type="date" name="DOB" id="DOB"/>
                            </div>
                            <div class="form-group">
                                <label for="age" class="form-label">Age</label>
                                <input type="number" name="age" id="age" placeholder="Age" />
                            </div>
                        </div>
                        <div class="clear"></div>


                        <div class="form-group">
                            <label for="aadhar" class="form-label">Aadhaar Card Number</label>
                            <input type="number" name="aadhar" id="aadhar" placeholder="Aadhar Card Number" />
                        </div>

                      
                            <div class="rows">
                            
                              
                              <div class="form-group">
                                <label for="Sex">Sex</label>
                                <select class="form-control" id="Sex">
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                </select>
                              </div>
                              
                             
                                 <div class="form-textarea" id="ObstetricHDiv">
                                                  
                                     <label for="ObstetricH" class="form-label">Obstetric History</label>
                                     <td><input type="text" id="ObstetricH" name="ObstetricH" placeholder="Obstetric History" class="valid"></td>
                                 </div>
                            
                            <div class="form-radio">
                                <label for="Caste" class="form-label">Caste</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="Caste" value="SC" id="SC" />
                                    <label for="SC">SC</label>
    
                                    <input type="radio" name="Caste" value="ST" id="ST" />
                                    <label for="ST">ST</label>

                                    <input type="radio" name="Caste" value="Others" id="Others" />
                                    <label for="Others">Others</label>
                                </div>
                            </div>
                            <div class="form-radio">
                                <label for="ecostat" class="form-label">Economical Status</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="ecostat" value="BPL" id="BPL" checked="checked" />
                                    <label for="BPL">BPL</label>
    
                                    <input type="radio" name="ecostat" value="Non-BPL" id="Non-BPL" />
                                    <label for="Non-BPL">Non-BPL</label>
                                </div>
                            </div>
                            </div>
                        <div class="clear"></div>
                        <div class="form-textarea">
                            <label for="Add1" class="form-label">Permanent Address</label>
                            <textarea name="Add1" id="Add1" placeholder="Address 1" ></textarea>
                        </div>

                        <div class="form-textarea">
                            <label for="Add2" class="form-label">Local Address</label>
                            <textarea name="Add2" id="Add2" placeholder="Address 2" ></textarea>
                        </div>

                          <div class="clear"></div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="Contact1" class="form-label">Contact No.1</label>
                                <input type="number" name="Contact1" id="Contact1" />
                            </div>
                            <div class="form-group"  >
                                <label for="Contact2" class="form-label">Contact No.2</label>
                                <input type="number" name="Contact2" id="Contact2" />
                            </div>
                        </div>

                        <div class="clear"></div>
                        <div class="form-group">
                            <label for="Occupation" class="form-label">Occupation</label>
                            <input type="text" name="Occupation" id="Occupation" placeholder="Occupation" />
                        </div>
                           <div class="clear"></div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="Examiner" class="form-label">Examiner</label>
                                <input type="text" name="Examiner" id="Examiner" />
                            </div>
                            <div class="form-group"  >
                                <label for="Reffered" class="form-label">Referred By</label>
                                <input type="text" name="Referred" id="Referred" />
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="form-group">
                            <label form="NOML" class="form-label">Number of members living in same household</label>
                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb" class="form-label">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="name_fh[]" class="valid"></td>
                                            <td><input type="number" name="age_fh[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove' title="Remove"><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Relation</th>
                                            <th>Disease</th>
                                        </tr>
                                        
                                        <tr>
                                            <td><input type="text" name="Relation_fh[]" class="valid"></td>
                                            <td><input type="text" name="Disease_fh[]" class="valid"></td>
                                        </tr>
                                        
                                        <tr>
                                            <th colspan="3">Notes</th>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3"><input type="text" name="Notes_fh[]" class="valid"></td>
                                        </tr>

                                    </tbody>

                            </table>
                        </div>
                          


                       <div class="form-textarea">
                        <div class="form-row">
                              <div class="form-group">
                                <label for="Allergies" class="form-label">Allergies</label>
                                <textarea name="Allergies" rows="6" placeholder="Allergies"></textarea>  
                              </div>
                              <div class="clear"></div>
                               <div class="form-group">
                               &nbsp;&nbsp;&nbsp;
                                <label for="Addiction" class="form-label">Addiction</label>
                                <br\>
                                
                                <label>Tobacco (gms/day)</label>
                                    <table>
                                     <tr >
                                        <td><input type="text" name="Tobacco" class="valid" placeholder="Frequency"></td>
                                            <td><input style="margin-left: 16px;width: 100px;" type="text" name="Tobacco_notes" class="valid" placeholder="Notes"></td> 
                                            
                                            
                                    </tr>
                                    </table>
                                   <label>Cigarette (cig/day)</label>
                                    <table>
                                       <tr>
                                        <td><input type="text" name="Cigarette" class="valid" placeholder="Frequency"></td>
                                            <td><input style="margin-left: 16px;width: 100px;" type="text" name="Cigarette_notes" class="valid" placeholder="Notes"></td>                                         
                                     </tr>
                                    </table>
                                 
                                     
                                   <label>Alcohol (ml/day) </label> 
                                    <table>
                                        <tr>
                                            <td><input type="text" name="Alcohol" class="valid" placeholder="Frequency"></td>
                                            <td><input style="margin-left: 16px;width: 100px;" type="text" name="Alcoholnotes" class="valid" placeholder="Notes"></td> 
                                     </tr>   
                                    </table></br\>
                                    </div>
                            </div></div>
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
                         <div class="form-textarea">
                            <label for="PMH" class="form-label">Past Medical History</label>
                            <textarea name="PMH" id="PMH" placeholder="Past Medical History"></textarea>
                        </div>
                        
                    <div class="fieldset-content">
                         <div class="form-textarea">
                             <label for="PLH" class="form-label">Past Leprosy History</label>
                            <div class="form-group">

                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb1" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th colspan="3">Hospital</th>
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore1" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td colspan="3"><input type="text" name="hospital_pmh[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove1'><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Drug</th>
                                            <th>Dosage</th> 
                                        </tr>
                                        
                                        <tr>
                                            <td><input type="text" name="drug_pmh[]" class="valid"></td>
                                            <td><input type="text" name="dosage_pmh[]" class="valid"></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                        
                                        <tr>
                                            <td><input style="margin-left: 16px;" type="date" name="Start_past_date_pmh[]" class="valid"></td> 
                                            <td><input style="margin-left: 16px;" type="date" name="End_past_date_pmh[]" class="valid"></td> 
                                        </tr>

                                    </tbody>

                            </table>
                        
                        </div>

                        </div>

                         <div class="form-textarea">
                            <label for="ObstetricH" class="form-label">Obstetric History</label>
                            <td><input type="text" name="ObstetricH" placeholder="Obstetric History" class="valid"></td> 
                        </div>

                        <div class="form-textarea">
                            <label for="KLC" class="form-label" style="align-self: flex-start;padding-top: 40px;">Known Leprosy Contacts</label>
                              
                               <div class="form-group">

                             <table style="padding-left: 34px ;margin-top: 9px;" id="tb6" class="tab orlist">
                                
                                    <tbody>
                                        <tr class="tr-header">
                                            <th>Name</th>
                                            <th>Contact</th>                                               
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore6" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="klp_name[]" class="valid"></td>
                                            <td><input type="text" name="klp_contact[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove6'><span class='fa fa-minus'></span></a></td>
                                        </tr> 
                                        
                                        <tr>
                                            <th colspan="3">Address</th>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3"><input type="text" name="klp_address[]" class="valid"></td>
                                        </tr>

                                        <tr>
                                            <th colspan="3">Relation</th>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="3"><input type="text" name="klp_relation[]" class="valid"></td>
                                        </tr>
                                        
                                        <tr>
                                            <th colspan="3">Description</th>
                                        </tr>
                                        
                                        <tr>
                                            
                                            <td colspan="3"><input type="text" name="klp_description[]" class="valid"></td>
                                        </tr>
                                    </tbody>
                            </table>
                            </div>
     
                       </div> 


                        <div class="form-group">
                            <label for="fcfs" class="form-label">First Signs and Symptoms(with date of onset)</label>
                            <input type="text" name="fcfs" id="fcfs" placeholder="All the known Symtoms"/>
                        </div>
                        

                        <div class="form-radio">
                                <label for="tld" class="form-label">Type of Leprosy diagnosed</label>
                                <div class="form-radio-item ">
                                    <input type="checkbox" name="tld_pb" value="1" id="PB" />
                                    <label  for="PB">PB</label>
                                    <input type="checkbox" name="tld_mb" value="1" id="MB" style=""  />
                                    <label for="MB">MB</label>
                                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                                </div>

                                <div class="form-radio-item">
                                    <input type="checkbox" name="tld_tt" value="1" id="TT"/>
                                    <label for="TT">TT</label>
                                    <input type="checkbox" name="tld_bt" value="1" id="BT"/>
                                    <label for="BT">BT</label>
                                    <input type="checkbox" name="tld_bb" value="1" id="BB"/>
                                    <label for="BB">BB</label>
                                    <input type="checkbox" name="tld_bl" value="1" id="BL"/>
                                    <label for="BL">BL</label>
                                    <input type="checkbox" name="tld_ll" value="1" id="LL"/>
                                    <label for="LL">LL</label>
                                    <input type="checkbox" name="tld_pnl" value="1" id="PNL"/>
                                    <label for="PNL">PNL</label>
                                </div>
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
                                        <tr class="tr-header">
                                            <th>Drug Used</th>
                                            <th>Drug Dosage</th>   
                                            <th><a href="javascript:void(0);" style="font-size:18px;" id="addMore5" title="Add More Person"><span class="fa fa-plus"></span></a></th>
                                        </tr>
                                        
                                        <tr style="padding: 2px;">
                                            <td><input type="text" name="drug_used[]" class="valid"></td>
                                            <td><input type="text" name="drug_dosage[]" class="valid"></td>
                                            <td><a href='javascript:void(0);' style="font-size:18px;" class='remove5'><span class='fa fa-minus'></span></a></td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                        </tr>
                                        
                                        <tr>
                                            <td><input style="margin-left: 16px;" type="date" name="Start_first_treatment[]" class="valid"></td> 
                                            <td><input style="margin-left: 16px;" type="date" name="End_first_treatment[]" class="valid"></td> 
                                        </tr>

                                    </tbody>

                            </table>
                        
                        </div>

                       
                        
                        <div class="clear"></div>
                         <div class="form-group">
                            <label for="omc" class="form-label">Other MDT courses</label>
                            <input type="text" name="omc" id="omc" placeholder="Other MDT courses" />
                        </div>

                         <div class="form-textarea">
                            <label for="Result" class="form-label">Outcome after initial treatment</label>
                            <textarea name="Result" id="Result" placeholder="" rows="2" ></textarea>
                        </div>

                        
                        <div class="form-radio">
                                <label for="reaction" class="form-label">Reaction Type</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="reaction" value="Type1" id="Type1" />
                                    <label for="Type1">Type 1</label>
    
                                    <input type="radio" name="reaction" value="Type2" id="Type2" />
                                    <label for="Type2">Type 2</label>

                                    <input type="radio" name="reation" value="Neuritis" id="Neuritis" />
                                    <label for="Neuritis">Neuritis</label>
                                    
                                    <input type="radio" name="reation" value="None" id="None" />
                                    <label for="None">None</label>
                                </div>
                            </div>
                        <div class="form-group">
                                    <label for="reaction" class="form-label">Description</label>
                                    <textarea name="Description" rows="8" placeholder="Description"></textarea> 
                      </div>


                        <div class="form-textarea">
                            <label  class="form-label">Reaction Description</label>
                            <textarea name="Reaction_description" rows="4" placeholder="Description"></textarea>
                        </div>


                         <div class="form-textarea">
                            <label for="Current" class="form-label">Current treatment</label>
                            <textarea name="Current_treatment" rows="4" id="Current" placeholder="Current treatment"></textarea>
                        </div>


                         <div class="form-group">
                                <label for="Disability" class="form-label">Disability</label> 
                        <div style="display: inline;">
                           <table class="table table-bordered">
                              <tr>
                                <th>Grade 0 </th>
                                <td><input type="checkbox" name="Grade0" value="Grade0"></td>
                              </tr>
                         </table>
                        
                            
                               <table class=" table table-bordered">

                                  <tr>
                                      <th rowspan="2">Grade 1</th>
                                      <th >Anesthesia of hand</th>
                                      <td><input  type="checkbox" name="Grade1[]" value="Hand"></td>
                                  </tr> 
                                  
                                   <tr>
                                         <th >Anesthesia of leg</th>
                                         <td><input type="checkbox" name="Grade1[]" value="Leg" style="width: 20px"></td>
                                      </tr> 
                                  
                              </table>
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
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Left"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Lagothalmos Right"></td>
                                <tr>
                                   <td>Facial Paralysis</td>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Paralysis Right"></td>
                               </tr>
                              </tr>
                              <tr>
                                <th rowspan=3>Hands</th>
                                <td>Claw</td>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Left"></td>
                                <td><input type="checkbox" name="Grade2[]" value="Claw Right"></td>
                                <tr>
                                   <td>Wrist Drop</td>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Wrist Right"></td>
                               </tr>
                               <tr>
                                   <td>Fixed Claw</td>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Left"></td>
                                   <td><input type="checkbox" name="Grade2[]" value="Fixed Right"></td>
                               </tr>
                              </tr>
                              <tr>
                                <th rowspan=2>Feet</th>
                                <td>Foot drop</td>
                                <td><input type="checkbox" name="Grade2[]" value=""></td>
                                <td><input type="checkbox" name="Grade2[]" value=""></td>
                                
                               </tr>
                          </table>
                      </div>

</div>
                       <div class="form-group">
                            <label for="Opthalmic_involvement" class="form-label">Opthalmic involvement</label>
                            <input type="text" name="Opthalmic_involvement" id="Opthalmic_involvement" />
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
                            <label for="Assessment" class="form-label">Assessment Of Skin Lesions</label>
                            <input type="text" name="Assessment" id="Assessment" />
                        </div>

                        <div class="form-group">
                            <label for="Sensory" class="form-label">Sensory Testing(On Diagram)</label>
                            <select name="Touch" class="custom-select">
                                <option value="" style="height: 45px" disabled selected>Touch</option>
                                <optgroup>
                                    
                                    <option value="Present">Touch : Present</option>
                                    <option value="Absent">Touch : Absent</option>
                                    <option value="None">Touch : None</option>
                                </optgroup>
                            </select>
                            
                            <select name="Pain" class="custom-select">
                                <option value="" style="height: 45px" disabled selected >Pain</option>
                                <optgroup>
                                    
                                    <option value="Partial">Partial</option>
                                    <option value="Total">Total</option>
                                    <option value="None">None</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Sensory" class="form-label">Temperature</label>
                             <table style="padding-left: 34px ;" id="tb9" class="form-label">
                                    <tbody class="form-radio">
                                        
                                        
                                        <tr style="padding: 2px;" class="form-radio-item">
                                            <th><label style="height: 45px;" for="Hot">Hot</label></th>
                                            
                                            <td>
                                                <input type="checkbox" name="Temp[]" value="Hot Present" id="Hot Present" />
                                                <label style="height: 45px;" for="Hot Present">Present</label>
                                                <input type="checkbox" name="Temp[]" value="Hot Absent" id="Hot Absent" />
                                                <label style="height: 45px;" for="Hot Absent">Absent</label>
                                            </td>
                                        </tr>   
                                        <tr style="padding: 2px;" class="form-radio-item">
                                           <th><label style="height: 45px;" for="Cold">Cold</label></th>
                                            <td>
                                                <input type="checkbox" name="Temp[]" value="Cold Present" id="Cold Present" />
                                                <label style="height: 45px;" for="Cold Present">Present</label>
                                                <input type="checkbox" name="Temp[]" value="Cold Absent" id="Cold Absent" />
                                                <label style="height: 45px;" for="Cold Absent">Absent</label>
                                            </td>
                                        </tr>
                                        
                                       

                                    </tbody>

                            </table>
                        
                        </div>
                        


                        <div class="form-group">
                            <label for="Peripheral" class="form-label">Peripheral Nerves(Thickened And/Or Tender)</label>
                        <table class="table table-bordered">
                            <thead>
                               <tr>
                                    <th>Name of Nerve </th>
                                    <th>Thickened</th>
                                    <th>Tender</th>
                               </tr>
                           </thead>
                           <tbody>
                              <tr>
                                <td>Supra-orbital</td>
                                <td><input type="checkbox" name="Supra_orbital_Yes" value="Yesed"></td>
                                <td><input type="checkbox" name="Supra_orbital_Yes" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Great Auricular</td>
                                <td><input type="checkbox" name="Great_Auricular_Yes" value="Yesed"></td>
                                <td><input type="checkbox" name="Great_Auricular_Yes" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Ulnar</td>
                                <td><input type="checkbox" name="Ulnar_Yes" value="Yes"></td>
                                <td><input type="checkbox" name="Ulnar_Yes" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Median Cutaneous</td>
                                <td><input type="checkbox" name="Median_Cutaneous_Yes" value="Yes"></td>
                                <td><input type="checkbox" name="Median_Cutaneous_Yes" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Radial Cutaneous</td>
                                <td><input type="checkbox" name="Radial_Cutaneous_Yes" value="Yes"></td>
                                <td><input type="checkbox" name="Radial_Cutaneous_Yes" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Lateral Popliteal</td>
                                <td><input type="checkbox" name="Lateral_Popliteal_Yes" value="Yes"></td>
                                <td><input type="checkbox" name="Lateral_Popliteal_Yes" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Sural Nerve</td>
                                <td><input type="checkbox" name="Sural_Nerve_Yes" value="Yes"></td>
                                <td><input type="checkbox" name="Sural_Nerve_Yes" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Posterior Tibial</td>
                                <td><input type="checkbox" name="Posterior_Tibial_Yes" value="Yes"></td>
                                <td><input type="checkbox" name="Posterior_Tibial_Yes" value="Yes"></td>
                              </tr>
                              <tr>
                                <td>Superficial Peroneal</td>
                                <td><input type="checkbox" name="Superficial_Peroneal_Yes" value="Yes"></td>
                                <td><input type="checkbox" name="Superficial_Peroneal_Yes" value="Yes"></td>
                              </tr>
                          </tbody> 
                     </table>
                        </div>


                        <div class="form-group">
                            <label for="EYes" class="form-label">EYes</label>
                            <input type="text" name="EYes" id="EYes" />
                        </div>



                         <div class="form-textarea">
                            <label for="furtherobservations" class="form-label">Further Observations</label>
                            <textarea name="furtherobservations" id="furtherobservations" placeholder="" rows="2" ></textarea>
                        </div>


                        <div class="form-label">
                            Upload Images:
                            <input type="file" name="images">
                            <br>
                        </div>                      
                    </div>


                    <div class="fieldset-footer">
                        <span>Form 4 of 4</span>
                    </div>
                
                </fieldset>

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
             document.getElementById("tb").deleteRow(trIndex1-1);
             document.getElementById("tb").deleteRow(trIndex1-2);
             document.getElementById("tb").deleteRow(trIndex1-3);
             
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
             document.getElementById("tb1").deleteRow(trIndex1-1);
             document.getElementById("tb1").deleteRow(trIndex1-2);
             document.getElementById("tb1").deleteRow(trIndex1-3);
             
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
    
    
$(function(){
    $('#addMore6').on('click', function() {
              var data = $("#tb6 tr:eq(0)").clone(true).appendTo("#tb6");
              var data1 = $("#tb6 tr:eq(1)").clone(true).appendTo("#tb6");
              var data2 = $("#tb6 tr:eq(2)").clone(true).appendTo("#tb6");
              var data3 = $("#tb6 tr:eq(3)").clone(true).appendTo("#tb6");
              var data4 = $("#tb6 tr:eq(4)").clone(true).appendTo("#tb6");
              var data5 = $("#tb6 tr:eq(5)").clone(true).appendTo("#tb6");
              var data6 = $("#tb6 tr:eq(6)").clone(true).appendTo("#tb6");
              var data7 = $("#tb6 tr:eq(7)").clone(true).appendTo("#tb6");
              data7.find("input").val('');
              data6.find("input").val('');
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
             document.getElementById("tb6").deleteRow(trIndex1-1);
             document.getElementById("tb6").deleteRow(trIndex1-2);
             document.getElementById("tb6").deleteRow(trIndex1-3);
             document.getElementById("tb6").deleteRow(trIndex1-4);
             document.getElementById("tb6").deleteRow(trIndex1-5);
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

</body>

</html>
