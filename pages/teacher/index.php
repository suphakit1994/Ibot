<?php error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
include("../php/course_function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('footer.php'); ?>
	<style>
		<?php 
		$id = $_SESSION['teacher_id'];
		$name = $_SESSION['teacher_fname'];
		$level = $_SESSION['teacher_level'];
		$nlevel = $_SESSION['teacher_nlevel'];
		?>
		<?php
		if ($level=='teacher') {

			if(!isset($_GET['action']) ){
				$cus = calendars($conn);
				
				require_once('view.php');
			}

			if($_GET['action'] == 'our_course'){
				$cus[] = getselect($conn);
					$data= getselect($conn);         //เรียกใช้ faction
					$arrlength = count($data); 	
					require_once('our_course.php');
				}

				if($_GET['action'] == 'student_assessment'){

					require_once('student_assessment.php');
				}
				if($_GET['action'] == 'compititions'){

					require_once('compititions.php');
				}
				if($_GET['action'] == 'report'){
					
					require_once('report.php');
				}
			}
			?>
		</style>
	</head>
	</html> 