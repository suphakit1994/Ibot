<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/function.php");
include("../php/student_function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('view/head.inc.php'); ?>
	<style>
		<?php 
		if(!isset($_GET['action'])){
			$cus = selectmax($conn);
			$cuss = updatestudentuser($conn,$_POST,$cus);

			$data = calendars($conn);
			$arrlength = count($data);
				// $data = count_calendars($conn);
			require_once('enroll.php');
		}



		?>
	</style>
</head>
</html> 
