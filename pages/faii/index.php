<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/faii_ft.php');

if(!isset($_GET['action'])){
	$cus[] = getselect($conn);
	$data= getselect($conn);         //เรียกใช้ faction
    $arrlength = count($data);      //นับข้อมูล
    require_once('our_course.php');
}
if($_GET['action']=='student'){
	$data=$_POST;
	$stem1=["Science","Technology","Engineering","Mathematics"];
	$stem2=["Synthesis","Teamwork","EQ","Meditation"];
	
	require_once("student_assessment.php");	
	$data[] = insterstudent( $conn,$data);
}
if($_GET['action']=="student_information"){
	require_once('student_information.php');
}
if($_GET['action']=="parent_information"){
	require_once('parent_information.php');
}
if($_GET['action']=="enroll"){
	require_once('enroll.php');
}
if($_GET['action']=="payment"){
	require_once('payment.php');
}
if($_GET['action']=="success"){
	require_once('success.php');
}
?>

