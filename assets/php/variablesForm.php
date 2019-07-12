<?php

// $ID 	 = $_POST['ID'];
$Clinic = $_POST['Clinic'] ?? '';
$IDclinic = $_POST['IDclinic'] ?? NULL;	//figure out how to insert this
$Name = $_POST['Name'] ?? '';
$DOB = $_POST['DOB'] ?? '';
$age = $_POST['age'] ?? NULL;
$aadhar = $_POST['aadhar'] ?? NULL;
$Sex = $_POST['Sex'] ?? '';
$Caste = $_POST['Caste'] ?? '';
$ecostat = $_POST['ecostat'] ?? '';
$Add1 = $_POST['Add1'] ?? '';
$Add2 = $_POST['Add2'] ?? '';

$Contact1 = $_POST['Contact1'] ?? NULL;
$Contact2 = $_POST['Contact2'] ?? NULL;
$Occupation = $_POST['Occupation'] ?? '';

$Examiner = $_POST['Examiner'] ?? '';
$Referred = $_POST['Referred'] ?? '';

$name_fh = $_POST['name_fh'] ?? '';
$age_fh = $_POST['age_fh'] ?? '';
$Relation_fh = $_POST['Relation_fh'] ?? '';
$Disease_fh = $_POST['Disease_fh'] ?? '';
$Notes_fh = $_POST['Notes_fh'] ?? '';

$Allergies = $_POST['Allergies'] ?? '';
$Tobacco = $_POST['Tobacco'] ?? '';
$Tobacco_start = $_POST['Tobacco_start'] ?? '';
$Tobacco_end = $_POST['Tobacco_end'] ?? '';

$Alcohol = $_POST['Alcohol'] ?? '';
$Alcohol_start = $_POST['Alcohol_start'] ?? '';
$Alcohol_end = $_POST['Alcohol_end'] ?? '';

$Cigarette = $_POST['Cigarette'] ?? '';
$Cigarette_start = $_POST['Cigarette_start'] ?? '';
$Cigarette_end = $_POST['Cigarette_end'] ?? '';


$PMH = $_POST['PMH'] ?? '';
$Hospital_pmh = $_POST['hospital_pmh'] ?? '';
$Drug_pmh = $_POST['drug_pmh'] ?? '';
$Dosage_pmh = $_POST['dosage_pmh'] ?? '';
$Start_past_date_pmh = $_POST['Start_past_date_pmh'] ?? '';
$End_past_date_pmh = $_POST['End_past_date_pmh'] ?? '';

$ObstetricH = $_POST['ObstetricH'] ?? '';
$Klp_name = $_POST['klp_name'] ?? '';
$Klp_relation = $_POST['klp_relation'] ?? '';
$Klp_contact = $_POST['klp_contact'] ?? NULL;
$Klp_address = $_POST['klp_address'] ?? '';
$Klp_description =  $_POST['klp_description'] ?? '';

$fcfs = $_POST['fcfs'] ?? '';	//first signs and symptoms

$tld_pb = $_POST['tld_pb'] ?? 0;
$tld_mb = $_POST['tld_mb'] ?? 0;
$tld_tt = $_POST['tld_tt'] ?? 0;
$tld_bt = $_POST['tld_bt'] ?? 0;
$tld_bb = $_POST['tld_bb'] ?? 0;
$tld_bl = $_POST['tld_bl'] ?? 0;
$tld_ll = $_POST['tld_ll'] ?? 0;
$tld_pnl = $_POST['tld_pnl'] ?? 0;

$Drug_used_first_treatment = $_POST['drug_used'] ?? '';
$Drug_dosage_first_treatment = $_POST['drug_dosage'] ?? '';
$Start_first_treatment = $_POST['Start_first_treatment'] ?? '';
$End_first_treatment = $_POST['End_first_treatment'] ?? '';

$omc = $_POST['omc'] ?? ''; //mdt
$Result = $_POST['Result'] ?? '';	//outcome after initial treatment

// <!-- type of reaction -->
$Reaction = $_POST['Reaction'] ?? '';
$Reaction_description = $_POST['Reaction_description'] ?? '';

$Current_treatment = $_POST['Current_treatment'] ?? '';
$Grade0 = $_POST['Grade0'] ?? '';
$Grade1 = $_POST['Grade1'] ?? '';
$Grade2 = $_POST['Grade2'] ?? '';

$Opthalmic_involvement = $_POST['Opthalmic_involvement'] ?? '';
$Assessment	 = $_POST['Assessment'] ?? '';	//skin lesions
$Touch = $_POST['Touch'] ?? '';
$Pain = $_POST['Pain'] ?? '';
$Temperature = "";
$Temperature = implode("/", $_POST['Temp']);

$Supra_orbital_Thicken = $_POST['Supra_orbital_Thicken'] ?? '';
$Great_Auricular_Thicken = $_POST['Great_Auricular_Thicken'] ?? '';
$Ulnar_Thicken = $_POST['Ulnar_Thicken'] ?? '';
$Medial_Cutaneous_Thicken = $_POST['Medial_Cutaneous_Thicken'] ?? '';
$Radial_Cutaneous_Thicken = $_POST['Radial_Cutaneous_Thicken'] ?? '';
$Lateral_Popliteal_Thicken = $_POST['Lateral_Popliteal_Thicken'] ?? '';
$Sural_Nerve_Thicken = $_POST['Sural_Nerve_Thicken'] ?? '';
$Posterior_Tibial_Thicken = $_POST['Posterior_Tibial_Thicken'] ?? '';
$Superficial_Peroneal_Thicken = $_POST['Superficial_Peroneal_Thicken'] ?? '';

$Supra_orbital_Tender = $_POST['Supra_orbital_Tender'] ?? '';
$Great_Auricular_Tender = $_POST['Great_Auricular_Tender'] ?? '';
$Ulnar_Tender = $_POST['Ulnar_Tender'] ?? '';
$Medial_Cutaneous_Tender = $_POST['Medial_Cutaneous_Tender'] ?? '';
$Radial_Cutaneous_Tender = $_POST['Radial_Cutaneous_Tender'] ?? '';
$Lateral_Popliteal_Tender = $_POST['Lateral_Popliteal_Tender'] ?? '';
$Sural_Nerve_Tender = $_POST['Sural_Nerve_Tender'] ?? '';
$Posterior_Tibial_Tender = $_POST['Posterior_Tibial_Tender'] ?? '';
$Superficial_Peroneal_Tender = $_POST['Superficial_Peroneal_Tender'] ?? '';

$Eyes = $_POST['Eyes'] ?? '';
$furtherobservations = $_POST['furtherobservations'] ?? '';

// $follow_up_clinical_notes= $_POST['follow_up_clinical_notes'];
// $follow_up_prescription= $_POST['follow_up_prescription'];
// $follow_up_complaints= $_POST['follow_up_complaints'];
// $follow_up_due_date= $_POST['follow_up_due_date'];
// $appointment_for = $_POST['appointment_for'];
// $date_for_next_appointment = $_POST['date_for_next_appointment'];

// $Complaint	 = $_POST['Complaint'];

// $Site = $_POST['Site'];
// $mi = $_POST['Mi'];
// $bi = $_POST['Bi'];
// $Smear_due_date	 = $_POST['Smear_due_date'];

?>
