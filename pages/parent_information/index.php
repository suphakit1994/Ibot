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
		if(!isset($_GET['action'])){
			$cc[]=selectstudent( $conn);
			require_once('parent_information.php');
			echo $cc;
			// $cus=inserparenttuser($conn,$_POST);
		}


		?>
	</style>
</head>
</html> 
