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

	$data[] = insterstudent( $conn,$_POST);
	$total[]= ($_POST['Science']+$_POST['Technology']+$_POST['Engineering']+$_POST['Mathematics']+
				$_POST['Synthesis']+$_POST['Teamwork']+$_POST['EQ']+$_POST['Meditation'])/8;
	$data[]=$total[0];
	
	require_once("student_assessment.php");	
}
?>

