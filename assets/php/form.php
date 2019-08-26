<?php

  date_default_timezone_set('Asia/Kolkata');
  // // $date = date('Y-m-d');
  // $dateToday = date('Y-m-d');
  // $date = date('Y-m-d H:i:s');

  include 'functions.php';
  // include('connection.php');
  // include('query.php');
  // include('uploadImage.php');
  include 'variablesForm.php';

  // function query($query, $message = '') {
  //   global $conn;
  //   $insert = mysqli_query($conn, $query);
  //   if($insert){
  //     echo"<br>Successful Insertion ".$message."";
  //     return 1;
  //   }
  //   else{
  //     echo"<br><br>Query error ".$message." : " . mysqli_error($conn)."<br>";
  //     return 0;
  //   }
  // }

  // echo $date;
  // `person_created` ,
  // `person_updated`

  // echo date_format($DOB,"Y/m/d");
// $DOB = '0000-01-02';

// echo "<br>code page";
  // $DOB = new DateTime($DOB);

  if($DOB != '0000-01-01' && $age == 0) {

    $bday = new Datetime($DOB);
    $dateTime = new Datetime($date);
    $age = date_diff($bday, $dateTime)->y; //age at time of form filling

  }
  // echo '<br>age is ' . $age;

  $qry1 = "INSERT INTO `person` (
    `fname` ,
    `dob` ,
    `sex`,
    `aadhar`,
    `occupation` ,
    `economical_status`,
    `caste`,
    `age`,
    `allergy`,
    `clinic`,
    `referred`,
    `person_created`
  ) VALUES ('$Name', '$DOB', '$Sex', $aadhar, '$Occupation', '$ecostat', '$Caste', $age, '$Allergies', '$Clinic', '$Referred', '$date')";

  if( query($qry1, 'Person') ) {

    $Pid = $conn->insert_id;
    echo "Pid is " . $Pid . "<br>";

    if ($Sex == 'female') {

      query("INSERT INTO `obstetric_history` (
        `pid` ,
        `mmyy_pregnant`
      ) VALUES ($Pid, '$ObstetricH');", 'obstetric_history');
      
    }

    $qry1_50 = "INSERT INTO `patient` (
      `pid` ,
      `clinic` ,
      `patient_code`
      ) VALUES ($Pid, '$Clinic', $IDclinic);";

    // $qry1_51 = "INSERT INTO `contact` (
    //   `pid`,
    //   `mobile`
    // ) VALUES ($Pid, $Contact1);";

    // $qry1_52 = "INSERT INTO `contact` (
    //   `pid`,
    //   `mobile`
    // ) VALUES ($Pid, $Contact2);";

    $qry1_53 = "INSERT INTO `address`(
      `pid`, 
      `address`, 
      `address_type`
    ) VALUES ($Pid, '$Add1', 'Permanent');";

    $qry1_54 = "INSERT INTO `address`(
      `pid`, 
      `address`, 
      `address_type`
    ) VALUES ($Pid, '$Add2', 'Local');";
    query($qry1_50, 'patient');
    // query($qry1_51, 'contact');
    // query($qry1_52, 'contact');
    query($qry1_53, 'address');
    query($qry1_54, 'address');

    // if(!empty($contact[0])) {

      foreach ($Contact as $key => $value) {

        $Contact[$key] = empty($_POST['Contact'][$key]) ? 0000000000 : $_POST['Contact'][$key];

        query("INSERT INTO `contact` (
         `pid`,
        `mobile`
       ) VALUES ($Pid, $Contact[$key]);", 'contact');

        if( $Contact[$key] == 0000000000 ) break;
      }
    // }


    // if(!empty($name_fh[0])) {

      foreach ($name_fh as $key => $value) {

        $name_fh[$key] = escape(empty($name_fh[$key]) ? 'Unknown' : $name_fh[$key]);
        $age_fh[$key] = empty($age_fh[$key]) ? 0 : $age_fh[$key];
        $Relation_fh[$key] = escape(empty($Relation_fh[$key]) ? 'Unknown' : $Relation_fh[$key]);
        $Disease_fh[$key] = escape(empty($Disease_fh[$key]) ? 'None' : $Disease_fh[$key]);
        $Notes_fh[$key]= escape(empty($Notes_fh[$key]) ? 'None' : $Notes_fh[$key]);

        query("INSERT INTO `family_members` (
          `pid` ,
          `fm_name` ,
          `fm_age`,
          `fm_relation`,
          `fm_disease`,
          `fm_diagnosis`
        ) VALUES($Pid, '$name_fh[$key]', $age_fh[$key], '$Relation_fh[$key]', '$Disease_fh[$key]', '$Notes_fh[$key]');", 'family_members');
      }
    // }

    $qry2_1 = "INSERT INTO `addiction` (
      `pid` ,
      `addiction_type` ,
      `addiction_notes` ,
      `addiction_frequency`
    ) VALUES ($Pid, 'Cigarette', '$Cigarette_notes', '$Cigarette');";

    $qry2_2 = "INSERT INTO `addiction` (
      `pid` ,
      `addiction_type` ,
      `addiction_notes` ,
      `addiction_frequency`
    ) VALUES  ($Pid, 'Alcohol', '$Alcohol_notes', '$Alcohol');";

    $qry2_3 = "INSERT INTO `addiction` (
      `pid` ,
      `addiction_type` ,
      `addiction_notes` ,
      `addiction_frequency`
    ) VALUES ($Pid, 'Tobacco', '$Tobacco_notes', '$Tobacco');";

    $qry2_4 = "INSERT INTO `medical_history` (
      `pid` ,
      `disease`
    ) VALUES ($Pid,'$PMH');";
    query($qry2_1, 'addiction');
    query($qry2_2, 'addiction');
    query($qry2_3, 'addiction');
    query($qry2_4, 'medical_history');

    // if (!empty($Hospital_pmh[0])) {
      // print_r($Hospital_pmh);
      foreach ($Hospital_pmh as $key => $value) {

        $Hospital_pmh[$key] = escape(empty($Hospital_pmh[$key]) ? 'Unknown' : $Hospital_pmh[$key]);
        $Drug_pmh[$key] = escape(empty($Drug_pmh[$key]) ? 'Unknown' : $Drug_pmh[$key]);
        $Dosage_pmh[$key] = escape(empty($Dosage_pmh[$key]) ? 'Unknown' : $Dosage_pmh[$key]);
        $Start_past_date_pmh[$key] = empty($Start_past_date_pmh[$key]) ? $date : $Start_past_date_pmh[$key];
        $End_past_date_pmh[$key] = empty($End_past_date_pmh[$key]) ? $Start_past_date_pmh[$key] : $End_past_date_pmh[$key];

        query("INSERT INTO `past_drugs` (
            `pid` ,
            `hospital` ,
            `drugs` ,
            `mmyy_start` ,
            `mmyy_end` ,
            `dosage`
          ) VALUES ($Pid,'$Hospital_pmh[$key]', '$Drug_pmh[$key]', '$Start_past_date_pmh[$key]', '$End_past_date_pmh[$key]', '$Dosage_pmh[$key]');", 'past_drugs');
      }
    // }

    // if(empty($klp_id)) {
    //   $qry3 = "INSERT INTO `person` (
    //       `fname` ,
    //     ) VALUES ('$Name')";
    //   query($qry3);

    //   $klp_id = $conn->insert_id;
    //   echo "<br>klp_id is ";
    // print_r($klp_id);}

    // if(!empty($Klp_name)) {

      foreach ($Klp_name as $key => $value) {

        $Klp_name[$key] = escape(empty($Klp_name[$key]) ? 'Anonymous' : $Klp_name[$key]);
        $Klp_relation[$key] = escape(empty($Klp_relation[$key]) ? 'Unknown' : $Klp_relation[$key]);
        $Klp_contact[$key] = escape(empty($Klp_contact[$key]) ? 0000000000 : $Klp_contact[$key]);
        $Klp_address[$key] = escape(empty($Klp_address[$key]) ? 'Unknown' : $Klp_address[$key]);
        $Klp_description[$key] =  escape(empty($Klp_description[$key]) ? 'None' : $Klp_description[$key]);

        query("INSERT INTO `known_leprosy_contacts` (
          `pid` ,
          `kname` ,
          `relation` ,
          `contact`,
          `address`,
          `description`
        ) VALUES ($Pid, '$Klp_name[$key]', '$Klp_relation[$key]', '$Klp_contact[$key]', '$Klp_address[$key]', '$Klp_description[$key]');", 'known_leprosy_contacts');
      }
    // }

    // if(!empty($klp_id)) {
    //   foreach ($klp_id as $key => $value) {
    //     query("INSERT INTO `leprosy_relations` (
    //       `pid` ,
    //       `klpid` ,
    //       `relation`
    //     ) VALUES ($Pid,'$klp_id', '$relation_klp');", 'leprosy_relations');
    //   }
    // }

    $qry5 = "INSERT INTO `record` (
      `pid` ,
      `date_attend`,
      `examiner`
    ) VALUES($Pid, '$date', '$Examiner');";

    if( query($qry5, 'record') ) {

      $Rid = $conn->insert_id;
      echo "Rid is " . $Rid . "<br>";

      $qry6 = "INSERT INTO `treatment_record` (
        `pid` ,
        `rid` ,
        `opthalmic_involvement` ,
        `eyes` ,
        `skin_lesions` ,
        `result` ,
        `symptoms`,
        `other_mdt_courses`,
        `t_notes`
      ) VALUES ($Pid, $Rid, '$Opthalmic_involvement', '$Eyes', '$Assessment', '$Result', '$fcfs', '$omc', '$furtherobservations');";

      $qry6_1 = "INSERT INTO `leprosy_diagnosed`(
      `rid`,
      `pb`,
      `mb`,
      `tt`,
      `bt`,
      `bb`,
      `bl`,
      `ll`,
      `pnl`
      ) VALUES ($Rid, $tld_pb, $tld_mb, $tld_tt, $tld_bt, $tld_bb, $tld_bl, $tld_ll, $tld_pnl);";
      query($qry6, 'treatment_record');
      query($qry6_1, 'leprosy_diagnosed');

      if(!empty($Grade0)) { 
        query("INSERT INTO `disability` (`rid`, `grade`, `disability_area`)
        VALUES ($Rid, 0, '$Grade0');", 'grade0');
      }

      if(!empty($Grade1)) { 
        foreach($Grade1 as $key => $value) {
          query("INSERT INTO `disability` (`rid`, `grade`, `disability_area`)
          VALUES ($Rid, 1, '$Grade1[$key]');", 'grade1');
        }
      }

      if(!empty($Grade2)) {
        foreach($Grade2 as $key => $value) {
          query("INSERT INTO `disability` (`rid`, `grade`, `disability_area`)
          VALUES ($Rid, 2, '$Grade2[$key]');", 'grade2');
        }
      }

      $qry4 = "INSERT INTO `peripheral_nerves` (
        `rid` ,
        `nerves` ,
        `thickness` ,
        `tenderness`
      ) VALUES ($Rid,'Supra orbital','$Supra_orbital_Thicken','$Supra_orbital_Tender');";

      $qry41 = "INSERT INTO `peripheral_nerves` (
        `rid` ,
        `nerves` ,
        `thickness` ,
        `tenderness`
      ) VALUES ($Rid,'Great Auricular','$Great_Auricular_Thicken','$Great_Auricular_Tender');";

      $qry42 = "INSERT INTO `peripheral_nerves` (
        `rid` ,
        `nerves` ,
        `thickness` ,
        `tenderness`
      ) VALUES ($Rid,'Ulnar','$Ulnar_Thicken','$Ulnar_Tender');";

      $qry43 = "INSERT INTO `peripheral_nerves` (
        `rid` ,
        `nerves` ,
        `thickness` ,
        `tenderness`
      ) VALUES ($Rid,'Median Cutaneous','$Median_Cutaneous_Thicken','$Median_Cutaneous_Tender');";

      $qry44 = "INSERT INTO `peripheral_nerves` (
        `rid` ,
        `nerves` ,
        `thickness` ,
        `tenderness`
      ) VALUES ($Rid,'Radial Cutaneous','$Radial_Cutaneous_Thicken','$Radial_Cutaneous_Tender');";

      $qry45 = "INSERT INTO `peripheral_nerves` (
        `rid` ,
        `nerves` ,
        `thickness` ,
        `tenderness`
      ) VALUES ($Rid,'Lateral Popliteal','$Lateral_Popliteal_Thicken','$Lateral_Popliteal_Tender');";

      $qry46 = "INSERT INTO `peripheral_nerves` (
        `rid` ,
        `nerves` ,
        `thickness` ,
        `tenderness`
      ) VALUES ($Rid,'Sural Nerve','$Sural_Nerve_Thicken','$Sural_Nerve_Tender');";

      $qry47 = "INSERT INTO `peripheral_nerves` (
        `rid` ,
        `nerves` ,
        `thickness` ,
        `tenderness`
      ) VALUES ($Rid,'Posterior Tibial','$Posterior_Tibial_Thicken','$Posterior_Tibial_Tender');";

      $qry48 ="INSERT INTO `peripheral_nerves` (
        `rid` ,
        `nerves` ,
        `thickness` ,
        `tenderness`
      ) VALUES ($Rid,'Superficial Peroneal','$Superficial_Peroneal_Thicken','$Superficial_Peroneal_Tender');";

      query($qry4, 'peripheral_nerves');
      query($qry41, 'peripheral_nerves');
      query($qry42, 'peripheral_nerves');
      query($qry43, 'peripheral_nerves');
      query($qry44, 'peripheral_nerves');
      query($qry45, 'peripheral_nerves');
      query($qry46, 'peripheral_nerves');
      query($qry47, 'peripheral_nerves');
      query($qry48, 'peripheral_nerves');

      $qry4_1 = "INSERT INTO `sensory_test` (
        `rid` ,
        `pinprick` ,
        `touch` ,
        `temperature`
      ) VALUES ($Rid,'$Pain','$Touch','$Temperature');";


      $qry4_2 = "INSERT INTO `reactions` (
        `rid` ,
        `type_reaction` ,
        `neuritis`,
        `description`
      ) VALUES ($Rid, '$Reaction', '$Neuritis', '$Reaction_description');";

      query($qry4_1,'sensory_test');
      query($qry4_2,'reactions');

      foreach ($Drug_used_first_treatment as $key => $value) {
        $drug = NULL; $Did = NULL;

        $Drug_used_first_treatment[$key] = escape(empty($Drug_used_first_treatment[$key]) ? 'Unknown' : $Drug_used_first_treatment[$key]);
        $Drug_dosage_first_treatment[$key] = escape(empty($Drug_dosage_first_treatment[$key]) ? 'Unknown' : $Drug_dosage_first_treatment[$key]);
        $Start_first_treatment[$key] = empty($Start_first_treatment[$key]) ? $date : $Start_first_treatment[$key];
        $End_first_treatment[$key] = empty($End_first_treatment[$key]) ? $Start_first_treatment[$key] : $End_first_treatment[$key];

        $drug = mysqli_query($conn, "SELECT * FROM `drugs` WHERE `dname` = '".$Drug_used_first_treatment[$key]."'");
        if(mysqli_num_rows($drug) > 0) {
          $exist = mysqli_fetch_assoc($drug); 
          $Did = $exist['did'];
        }
        else {
          $qry7 = "INSERT INTO `drugs` (
          `dname`
          )VALUES('".$Drug_used_first_treatment[$key]."');";
          query($qry7, 'new drug');
          $Did = $conn->insert_id;
          echo "Did is " . $Did . "<br>";
        }

          $qry8 = "INSERT INTO `drugs_prescribed` (
            `rid` ,
            `did` ,
            `type` ,
            `start_date` ,
            `end_date` ,
            `dosage`
          ) VALUES ($Rid, $Did, '', '$Start_first_treatment[$key]', '$End_first_treatment[$key]', '$Drug_dosage_first_treatment[$key]');";
          query($qry8, 'drugs_prescribed');
      }

      // if(!empty($Site)) {
      //   foreach ($Site as $key => $value) {
      //     query("INSERT INTO `smear_test` (
      //       `rid` ,
      //       `site`,
      //       `mi` ,
      //       `bi` ,
      //       `pid`,
      //     ) VALUES($Rid, '$Site[$key]', $mi[$key], $bi[$key], $Pid);");
      //   }
      // }

    } //end of if Rid
    else {
      echo "<br>Record could not be made.";
    }


 
    foreach ($Images["error"] as $count => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $Images["tmp_name"][$count];
            if (!$tmp_name) continue;

            uploadImages($Pid, $Images, $count, $imageTags);
        }
        elseif ($error == 4) {
          echo "<br>No images were uploaded.<br>";
        }
        else {
            echo "Error  : " . $error;
        }
    }

    // $qry10  = "INSERT INTO `follow_up_record` (
    //   `pid` ,
    //   `clinical_notes` ,
    //   `prescription` ,
    //   `complaints` ,
    //   `due_date`,
    //   `appointment_for`,
    //   `data_for_next_appointment`
    // ) VALUES($Pid,'$follow_up_clinical_notes','$follow_up_prescription','$follow_up_complaints','$follow_up_due_date','$appointment_for','$date_for_next_appointment');";
    // query($qry10 );



    //$result = mysqli_query($conn,"show tables");
    //$insert = mysqli_query($conn, $qry1);

    // if($result){
    //     // header("location:http//:localhost/BLP/index.html");
    //     while ($row = mysqli_fetch_assoc($result)) {
    //     	echo "<br/>".$row['Tables_in_blp'];
    //     }
    // }
    // function query($query) {
    //   $insert = mysqli_query($conn, $query);
    //   if($insert){
    //     echo"Successful Insertion";
    //   }
    //   else{
    //     echo"Query error";
    //     echo("Error description: " . mysqli_error($conn));
    //   }
    // }
      // mysqli_close($conn);
      // echo "<br/>*".$Name."*".$DOB." ".$aadhar." ".$Sex." ".$date;


    // header("location:../../modules/display1.php?pid=".$Pid);
  } // end of if Pid
  else {
    echo "<br>Person could not be made.";
  }
  // header("location:../../modules/form.php");
?>
