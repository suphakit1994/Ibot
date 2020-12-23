<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');	
include("../php/student_function.php");
include('../php/art_ft.php');


if(!isset($_GET['action'])){
	$cus[] = getselect($conn);
	$data= getselect($conn);         //เรียกใช้ faction
	$arrlength = count($data); 	

	require_once('our_course.php');
}

?>
