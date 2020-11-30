<?php 
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/faii_ft.php');

if(!isset($_GET['action'])){
	$cus[] = getselect($conn);
	require_once('our_course.php');
}

if($_GET['action']=='student'){
	 print_r($_POST);
	// $data[] = insterstudent( $conn,$_POST);
	require_once("student_assessment.php");	
}
?>
