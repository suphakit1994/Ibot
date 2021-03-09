<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");


include('../php/course_function.php');


if(!isset($_GET['action'])){
	$cus[] = selectcourse($conn);
	$data= selectcourse($conn);         //เรียกใช้ faction
	$arrlength = count($data); 	

	require_once('our_course.php');
}

?>
