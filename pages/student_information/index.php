<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/student_function.php");
include("../php/function.php");
include('../php/course_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('view/head.inc.php'); ?>
	<style>
		<?php 
		if(!isset($_GET['action'])){
			
				// $cus=selectcoureid($conn, $data);
			require_once('student_information.php');
			$cus=insertstudent($conn,$_POST);
			// echo $cus;
		}
		
		?>
	</style>
</head>
</html> 
