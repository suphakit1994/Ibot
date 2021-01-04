<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/function.php");
include("../php/course_function.php");



?>
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

			if($_GET['action']=="enroll"){
				// $cus = selectmax($conn);
				// $cuss = updatestudentuser($conn,$_POST,$cus);

				$data = calendars($conn);
				$arrlength = count($data);
				// // $data = count_calendars($conn);
				require_once('enroll.php');
			}

			if($_GET['action']=="payment"){
				
				require_once('payment.php');
			}
			if($_GET['action']=="success"){
				$cus = student_payment($conn,$_POST);
				require_once('success.php');
			}

			if($_GET['action']=="ibot_compeitition"){
				require_once('ibot_compeitition.php');
			}

			if($_GET['action']=="ibot_camp"){
				require_once('ibot_camp.php');

			}
			if($_GET['action']=="sorry"){
				require_once('sorry.php');

			}
			if($_GET['action']=="all_compeitition"){
				require_once('all_compeitition.php');

			}
			if($_GET['action']=="payment_compeitition"){
				require_once('payment_compeitition.php');

			}
			if($_GET['action']=="success_compeitition"){
				$cus = student_payment_competition($conn,$_POST);
				require_once('success_compeitition.php');

			}
			if($_GET['action']=="success_camp"){
				$cus = student_payment_camp($conn,$_POST);
				require_once('success_camp.php');

			}
			if($_GET['action']=="payment_camp"){
				require_once('payment_camp.php');

			}
			if($_GET['action']=="all_camp"){
				require_once('all_camp.php');

			}
			if($_GET['action']=="compeitions_team"){
				require_once('compeitions_team.php');
			}
			if($_GET['action']=="schedule"){
				$cus = calendars($conn);
				require_once('schedule.php');

			}



		}?>
	</style>
</head>
</html> 
