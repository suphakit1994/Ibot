<?php error_reporting(~E_NOTICE);

date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
include('../php/course_function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		<?php 
		$id = $_SESSION['admin_id'];
		$name = $_SESSION['admin_fname'];
		$level = $_SESSION['a_level'];
		$nlevel = $_SESSION['a_nlevel'];
		?>
		<?php
		require_once('admin_view/admin_footer.php');
		if ($level=='admin') {
			// ---------------------------View--------------------------------
			if(!isset($_GET['action']) ){
				$cus = calendars($conn);
				require_once('calendar_schedule.php');
			}

			if($_GET['action'] == 'teacher_list'){
				$s = calendars($conn);
				//$cus = updateidcalendar($conn,$_POST);
				//$cus = selectmax($conn);
				//print_r($cus);
				require_once('teacher_list.php');
			}
			
			if($_GET['action'] == 'admin_calendar'){
				$cus = calendars($conn);
				require_once('calendar_schedule.php');
			}
			if($_GET['action'] == 'edit_data'){
				require_once("teacher_edit.php");
			}
			if($_GET['action'] == 'students_list'){
				require_once('students_list.php');
			}
			if($_GET['action'] == 'dashboard'){
				require_once('dashboard.php');
			}
			// ---------------------------Insert--------------------------------
			if($_GET['action'] == 'insert_datetime'){
				$cus = insertData($conn,$_POST);
				$suc = calendars($conn);
				require_once("calendar_schedule.php");
			}
			if($_GET['action'] == 'admin_course'){
				// $_POST = ' ';
				require_once('course_insert.php');	
				
			}
			if($_GET['action'] == 'admin_course/add'){
				// Up load pdf file
				// for ($i=1; $i < 8 ; $i++) {
				// 	$new_pdf_name = 'up_pdf_file'.$i;
				// 	$valable_pdf = 'file'.$i;
				// 	echo $new_pdf_name = uploadpdf($conn,$_POST,$valable_pdf);
				// }
				// Up load quiz
				$choice11 = $_POST['choice11'];
				$choice12 = $_POST['choice12'];
				$choice13 = $_POST['choice13'];
				$choice14 = $_POST['choice14'];
				$quest1 = $_POST['quest1'];
				$ans1 = $_POST['ans1']; 
				echo "................................................................................................................................".$choice11."5555";
				// $upload_quize1 = upload_quiz($conn,$_POST);

				// $cus = instercourse( $conn,$_POST);
				// echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_course">';
			}
			if($_GET['action'] == 'addteam_compitition'){
				require_once('addteam_compitition.php');
			}
		}
		?>
	</style>
</head>
<body>
	<?php
	if ($level=='admin') {
		require_once('admin_view/navber_vertical.php'); 
	}?>
</body>
</html> 