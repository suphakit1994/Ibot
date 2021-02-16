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
		$image = $_SESSION["teacher_img"];
		?>
		<?php
		if ($level=='teacher') {

			if(!isset($_GET['action']) ){
				$id_teachers = $id;
				$cus = calendars($conn);
				$select_idteacher =select_idteacher($conn,$id_teachers);
				require_once('view.php');
			}

			if($_GET['action'] == 'our_course'){
				$cus[] = getselect($conn);
				$data= getselect($conn);         //เรียกใช้ faction
				$arrlength = count($data); 	
				require_once('our_course.php');
			}
			if($_GET['action'] == 'checkIn'.$id){
				$id_teachers = $id;
				$func_teacher = checkIn_teacher($conn,$_POST,$id_teachers);
				require_once('view.php');
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=teacher">';
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