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
	//$total= ($_POST['Science']+$_POST['Technology']+$_POST['Engineering']+$_POST['Mathematics']+$_POST['Synthesis']+$_POST['Teamwork']+$_POST['EQ']+$_POST['Meditation'])/8;
	//$data['Total']=$total;	
	//echo $data['Total'];
	require_once("student_assessment.php");	
	$data[] = insterstudent( $conn,$data);
}
?>

