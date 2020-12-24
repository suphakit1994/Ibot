<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
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
			if($_GET['action'] == 'admin_course'){
				require_once('course_insert.php');
			}
			if($_GET['action'] == 'edit_data'){
				require_once("teacher_edit.php");
			}
			if($_GET['action'] == 'camp'){
				require_once('.php');
			}
			// ---------------------------Insert--------------------------------
			if($_GET['action'] == 'insert_datetime'){
				$cus = insertData($conn,$_POST);
				$suc = calendars($conn);
				require_once("calendar_schedule.php");
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