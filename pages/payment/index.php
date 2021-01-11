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
			// $data= selectcourse($conn);
			$pri = selectcourse_prices($conn,$_POST);
			require_once('enroll.php');	
		}

		if($_GET['action']=='payment'){
			
			require_once('payment.php');

			if($_GET['action']=='payment/add'){
				// require_once('payment.php');
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=payment">';
			}	
			
		}

		if($_GET['action']=='success'){
			$cus=insertstudent($conn,$_POST);
			$cus = selectmax($conn);
			
			require_once('success.php');
			$add = insertcourse_student($conn,$_POST);
		}
		if($_GET['action']=='modal'){
			require_once('modal.php');

		}
		

		?>
	</style>
</head>
</html> 
