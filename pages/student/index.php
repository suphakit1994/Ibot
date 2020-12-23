<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/student_function.php");
include("../php/function.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('view/head.inc.php'); ?>
	<style>
		<?php 
		$id = $_SESSION['id '];
		$name = $_SESSION['name'];
		$level = $_SESSION['level'];
		$nlevel = $_SESSION['nlevel'];
		?>
		<?php
		if ($level=='student') {

			if(!isset($_GET['action'])){
				$cus[] = getselect($conn);
				$data= getselect($conn);         //เรียกใช้ faction
			    $arrlength = count($data); 		//นับข้อมูล
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
				$data= getselect($conn);
				// print_r( $data['ID']); 
				// $cus=selectcoureid($conn, $data);
				require_once('student_information.php');
			}	

			if($_GET['action']=="parent_information"){
				$cusp = selectstudentuser($conn);
				$cus = insertstudentuser($conn,$_POST);
				require_once('parent_information.php');
			}

			if($_GET['action']=="enroll"){
				$cus = selectmax($conn);
				$cuss = updatestudentuser($conn,$_POST,$cus);
				
				$data = calendars($conn);
				$arrlength = count($data);
				// $data = count_calendars($conn);
				require_once('enroll.php');
			}

			if($_GET['action']=="payment"){
				
				require_once('payment.php');
			}
			if($_GET['action']=="success"){
				
				require_once('success.php');
			}

			if($_GET['action']=="viewtest"){
				require_once('viewtest.php');

			}

			if($_GET['action']=="ibot_cam"){
				require_once('ibot_cam.php');

			}
			if($_GET['action']=="sorry"){
				require_once('sorry.php');

			}


		}?>
	</style>
</head>
</html> 
