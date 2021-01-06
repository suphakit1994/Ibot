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
		$id = $_SESSION['id '];
		$name = $_SESSION['name'];
		$level = $_SESSION['level'];
		$nlevel = $_SESSION['nlevel'];
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
				
				$up_pdf_file1 = uploadpdf($conn,$_POST,'file1');
				$up_pdf_file2 = uploadpdf($conn,$_POST,'file2');
				$up_pdf_file3 = uploadpdf($conn,$_POST,'file3');
				$up_pdf_file4 = uploadpdf($conn,$_POST,'file4');
				$up_pdf_file5 = uploadpdf($conn,$_POST,'file5');
				$up_pdf_file6 = uploadpdf($conn,$_POST,'file6');
				$up_pdf_file7 = uploadpdf($conn,$_POST,'file7');
				$cus = instercourse( $conn,$_POST);
				echo '<META HTTP-EQUIV="Refresh" CONTENT="0;index.php?app=admin&action=admin_course">';
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