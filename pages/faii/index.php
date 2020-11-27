<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');

if(!isset($_GET['action'])){
	$cus = getdata($conn);
	
	require_once('our_course.php');
}

if($_GET['action'] == 'student'){
	require_once("student_assessment.php");
}


?>
