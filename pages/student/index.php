<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/function.php");
include("../php/course_function.php");
include("../php/student_function.php");

?>
<html lang="en">
<head>
	<?php require_once('view/head.inc.php'); ?>
	<style>
		<?php 
		$id = $_SESSION['student_id'];
		$name = $_SESSION['student_name_eng'];
		$level = $_SESSION['student_level'];
		$nlevel = $_SESSION['student_nlevel'];
		$cus = $id ;
		?>
		<?php
		if ($level=='student') {
			if(!isset($_GET['action'])){
				//แสดงคอสที่ลงทะเบียนไว้
				$data = selectcourse_students($conn,$id);  
				$arrlength = count($data); //นับข้อมูล
				//แสดงคอสที่ยังไม่ได้ลงทะเบียน
				$cus = selectcourse_student($conn,$id);	
				$arr = count($cus);
				require_once('our_course.php');
				$pri = selectcourse_prices($conn,$_POST);   //แสดงข้อมูลคอสในหน้าสมัครคอส
			}

			
			if($_GET['action']=="enroll"){
				$course =  $_POST['course_id'];
				$data= calendars($conn);		//select calendars
				$arrlength = count($data);
				$pri = selectcourse_prices($conn,$_POST);
				require_once('enroll.php');
			}

			if($_GET['action']=="payment"){
				$course =  $_POST['course_id'];
				$pri = selectcourse_prices($conn,$_POST);
				require_once('payment.php');
				$calendar = insertcalender_students($conn,$_POST,$id);
			}
			if($_GET['action']=="success"){
				$course =  $_POST['course_id'];
				$paym = insertpayments($conn,$_POST,$id);  // insert payment	
				$add = insertcourse_students($conn,$_POST,$id);	
				// $pri = selectcourse_prices($conn,$_POST,$cus);
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
			if($_GET['action']=='student_assessment'){
				$data=$_POST;
				$stem1=["Science","Technology","Engineering","Mathematics"];
				$stem2=["Synthesis","Teamwork","EQ","Meditation"];
				require_once("student_assessment.php");	
				$data[] = insterstudent( $conn,$data);

			}




		}?>
	</style>
</head>
</html> 
