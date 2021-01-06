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
			$data= getselect($conn);
			require_once('student_information.php');	
		}
		
		if($_GET['action']=='parent_information'){
			$cus=insertstudent($conn,$_POST);
			$cc[]=selectstudent( $conn);
			require_once('parent_information.php');


		}
		if($_GET['action']=='enroll'){		
			$cus = selectmax($conn);
			$cuss = updatestudent($conn,$_POST,$cus);
			require_once('enroll.php');
			$add = insertcourse_student($conn,$_POST);
			
			
			// $string=implode(",",$cus);  //แปลงค่า arry 
			// echo $string;
			// $cuss = updatestudent($conn,$_POST,$string);
			// $arrlength = count($data);
		}
		if($_GET['action']=='payment'){
			
			require_once('payment.php');
		}
		if($_GET['action']=='success'){

			require_once('success.php');
		}




		?>
	</style>
</head>
</html> 
