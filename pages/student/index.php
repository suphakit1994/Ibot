<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/function.php");
include("../php/course_function.php");
include("../php/student_function.php");
include('../php/camp_function.php');

?>
<html lang="en">
<head>
	<style>
		<?php 
		$id = $_SESSION['student_id'];
		$name = $_SESSION['student_name_eng'];
		$level = $_SESSION['student_level'];
		$nlevel = $_SESSION['student_nlevel'];
		?>
		<?php
		require_once('footer.php');
		if ($level=='student') {
			$id_course = $_POST['course_id'];
			$student= selectstudentadd($conn,$id); //แสดงข้อมูลนักเรียนและผู้ปกครอง

			if(!isset($_GET['action'])){
				//แสดงคอสที่ลงทะเบียนไว้
				$data = selectcourse_students($conn,$id);   //แสดงคอสที่ลงทะเบียนแล้ว
				$arrlength = count($data); //นับข้อมูล
				//แสดงคอสที่ยังไม่ได้ลงทะเบียน
				$course = selectcourse_student($conn,$id);	 //แสดงคอสที่ยังไม่ลงทะเบียน
				$arr = count($course);
				require_once('our_course.php');
				$pri = selectcourse_prices($conn,$_POST);   //แสดงข้อมูลคอสในหน้าสมัครคอส
			}

			if($_GET['action']=="enroll"){
				
				$data= calendars($conn);		//แสดงเวลาเรียนที่เปิดสอน
				$arrlength = count($data);
				$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
				require_once('enroll.php');
			}

			if($_GET['action']=="payment"){
				$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
				require_once('payment.php');
			}

			if($_GET['action']=="success"){
				$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง	 
				$paym = insertpayments($conn,$_POST,$id);// insert payment

				require_once('success.php');
				$paymax = maxpayment($conn);
				$calendar = insertcalender_students($conn,$_POST,$id); 
				$add = insertcourse_students($conn,$_POST,$id,$paymax);
				echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=student'>"; 
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

				require_once('success_compeitition.php');

			}
			if($_GET['action']=="success_camp"){
				$paym = insertpayments($conn,$_POST,$id); // insert payment
				require_once('success_camp.php');
				echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=student&action=all_camp'>"; 

			}
			if($_GET['action']=="payment_camp"){
				$camadd = campadd_select($conn,$cam); //แสดงข้อมูลแคมป์ที่ลงทะเบียน
				require_once('payment_camp.php');

			}
			if($_GET['action']=="all_camp"){
				$cam = camp_select($conn);  //แสดงแคมป์ทั้งหมด
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
		}
		?>
	</style>
</head>
</html> 