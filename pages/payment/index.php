<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/function.php");
include("../php/student_function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- ?php require_once('view/head.inc.php'); ?> -->
	<style>
		<?php 
		if(!isset($_GET['action'])){

			require_once('student_information.php');	

		}
		
		if($_GET['action']=='parent_information'){
			$cus=insertstudent($conn,$_POST);
			$cc[]=selectstudent( $conn);
			require_once('parent_information.php');
		}
		if($_GET['action']=='enroll'){
			
			// $cuss = updatestudent($conn,$_POST,$cus);
			// $arrlength = count($data);
			require_once('enroll.php');
			$cus = selectmax($conn);
			echo $cus;
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
