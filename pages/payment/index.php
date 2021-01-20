<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/function.php");
include("../php/student_function.php");
include("../php/course_function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- ?php require_once('view/head.inc.php'); ?> -->
	<style>
		<?php 
		if(!isset($_GET['action'])){
			$data= selectcourse($conn);
			require_once('student_information.php');	
		}
		
		if($_GET['action']=='parent_information'){	
			// $cc[]=selectstudent( $conn);
			require_once('parent_information.php');
		}

		if($_GET['action']=='enroll'){
			$data= calendars($conn);		//select calendars
			$arrlength = count($data);
			$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
			require_once('enroll.php');
		}

		if($_GET['action']=='payment'){
			$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
			$add = insertstudent($conn,$_POST);
			$calandar = selectcalander($conn,$_POST);
			require_once('payment.php');
		}
		if($_GET['action']=='success'){
			$calandar = selectcalander($conn,$_POST);
			$cus = selectmax($conn);
			$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
			$paym = insertpayment($conn,$_POST,$cus);  // insert payment
			$paymax = maxpayment($conn);	
			require_once('success.php');
			$calendar = insertcalender_student($conn,$_POST,$cus); 
			$addnoti = insertnoticourse_student($conn,$_POST,$cus);
			$add = insertcourse_student($conn,$_POST,$cus,$paymax);
			echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=home'>";
		}		

		?>
	</style>
</head>
</html> 
