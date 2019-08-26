<?php
$dateToday = date('Y-m-d');
$date = empty($_POST['formDate']) ? $dateToday : $_POST['formDate'];

// $follow_up_clinical_notes = escape(empty($_POST['follow_up_clinical_notes']) ? 'None' : $_POST['follow_up_clinical_notes']);
// $follow_up_prescription = escape(empty($_POST['follow_up_prescription']) ? 'None' : $_POST['follow_up_prescription']);
// $follow_up_complaints = escape(empty($_POST['follow_up_complaints']) ? 'None' : $_POST['follow_up_complaints']);

$follow_up_clinical_notes = escape(empty($_POST['Cnotes']) ? 'None' : $_POST['Cnotes']);
$follow_up_prescription = escape(empty($_POST['Prescription']) ? 'None' : $_POST['Prescription']);
$follow_up_complaints = escape(empty($_POST['Complaint']) ? 'None' : $_POST['Complaint']);

// $follow_up_due_date = empty($_POST['follow_up_due_date']) ? '0000-01-01' : $_POST['follow_up_due_date'];
if ( empty($_POST['follow_up_due_date']) ) {
	$follow_up_due_date = '0000-01-01';
}
else {
	$follow_up_due_date = $_POST['follow_up_due_date'];
}


$Examiner = escape(empty($_POST['Examiner']) ? 'Unknown' : $_POST['Examiner']);

$Drug_used_treatment = empty($_POST['drug_used']) ? 'Unknown' : $_POST['drug_used'];
$Drug_dosage_treatment = empty($_POST['drug_dosage']) ? 'Unknown' : $_POST['drug_dosage'];
$Start_treatment = empty($_POST['Start_first_treatment']) ? $date : $_POST['Start_first_treatment'];
$End_treatment = empty($_POST['End_first_treatment']) ? $date : $_POST['End_first_treatment'];

$appointment_for = empty($_POST['appoinment_for']) ? 'Unknown' : $_POST['appoinment_for'];

// $date_for_next_appointment = empty($_POST['date_for_next_appointment']) ? '0000-01-01' : $_POST['date_for_next_appointment'];
if ( empty($_POST['date_of_next_appoinment']) ) {
	$date_for_next_appointment = '0000-01-01';
}
else {
	$date_for_next_appointment = $_POST['date_of_next_appoinment'];
}

// $Complaint = escape(empty($_POST['Complaint']) ? 'None' : $_POST['Complaint']);

$Site = empty($_POST['Site']) ? '' : $_POST['Site'];

if ( !empty($Site) ) {

	$mi = empty($_POST['Mi']) ? 0 : $_POST['Mi'];
	$bi = empty($_POST['Bi']) ? 0 : $_POST['Bi'];

	// $mi = array_filter($_POST['Mi'], 'strlen');
	// $bi = array_filter($_POST['Bi'], 'strlen');

	// $total_mi = 0;

	// for ($i = 0; $i < count($mi); $i++) {
	// 	$total_mi += $mi[$i];
	// }

	// $total_bi = 0;

	// for ($i = 0; $i < count($bi); $i++) {
	// 	$total_bi += $bi[$i];
	// }

	// if( count($mi) > 0 ) {
	// 	$mi_avg = $total_mi / count($mi);
	// 	$bi_avg = $total_bi / count($bi);
	// }
	// else{
	// 	$mi_avg = 0;
	// 	$bi_avg = 0;
	// }

}

$Images = empty($_FILES['images']) ? NULL : $_FILES['images'];

?>