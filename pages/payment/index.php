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
			$data= calendars($conn);
			$selec_class =select_class($conn);		//select calendars
			$arrlength = count($selec_class);
			$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
			require_once('enroll.php');
		}

		if($_GET['action']=='payment'){
			
			$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
			$add = insertstudent($conn,$_POST);
			$class = selectcalander($conn,$_POST);
			require_once('payment.php');
		}
		if($_GET['action']=='success'){
			$class = selectcalander($conn,$_POST);
			$cus = selectmax($conn);
			$pri = selectcourse_prices($conn,$_POST); // แสดงข้อมูลคอสที่ลง
			$paym = insertpayment($conn,$_POST,$cus);  // insert payment
			$paymax = maxpayment($conn);	
			require_once('success.php');
			$calendar = insertcalender_student($conn,$_POST,$cus); 
			$add = insertcourse_student($conn,$_POST,$cus,$paymax);
			$selnoti = seldata_noti($conn);
			$addnoti = insertnoticourse_student($conn,$selnoti,$_POST);
			// echo ";<META HTTP-EQUIV='Refresh' CONTENT = '2;URL=index.php?app=home'>";
		}		
		if($_GET['action']=='Thank_you'){
			require_once('Thank_you.php');
		}
		?>

	</style>
</head>
</html> 
