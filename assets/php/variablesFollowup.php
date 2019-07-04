<?php

$follow_up_clinical_notes= $_POST['follow_up_clinical_notes'] ?? 'N/A';
$follow_up_prescription= $_POST['follow_up_prescription'] ?? 'N/A';
$follow_up_complaints= $_POST['follow_up_complaints'] ?? 'N/A';
$follow_up_due_date= $_POST['follow_up_due_date'] ?? '0000/01/01';
$appointment_for = $_POST['appointment_for'] ?? 'N/A';
$date_for_next_appointment = $_POST['date_for_next_appointment'] ?? '0000/01/01';
$Examiner = $_POST['Examiner'] ?? 'No name';

$Complaint	 = $_POST['Complaint'] ?? 'N/A';

$Site = $_POST['Site'];
$mi = array_filter($_POST['Mi'],'strlen');
$bi = array_filter($_POST['Bi'],'strlen');

$total_mi = 0;
for ($i=0; $i < count($mi); $i++) { 
	$total_mi += $mi[$i];
}
$total_bi = 0;
for ($i=0; $i < count($bi); $i++) { 
	$total_bi += $bi[$i];
}
if(count($mi)>0){
$mi_avg = $total_mi/count($mi);
$bi_avg = $total_bi/count($bi);
}
else{
	$mi_avg = 0;
	$bi_avg = 0;
}
?>