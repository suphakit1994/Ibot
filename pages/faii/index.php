<?php  
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/faii_ft.php');

if(!isset($_GET['action'])){
	$cus[] = getselect($conn);
	require_once('our_course.php');
}
error_reporting(~E_NOTICE);
if($_GET['action']=='student'){

	// echo ($data['Science']+$data['Technology']+$data['Engineering']+$data['Mathematics']+$data['Synthesis']+$data['Teamwork']+$data['EQ']+$data['Meditation'])/8;
	echo $data['Science'];

	$data[] = insterstudent( $conn,$_POST);

	// $data['Total']=($data['Science']+$data['Technology']+$data['Engineering']+$data['Mathematics']+$data['Synthesis']+$data['Teamwork']+$data['EQ']+$data['Meditation'])/8;
	 echo $data['Total'];
	require_once("student_assessment.php");	
}
?>

