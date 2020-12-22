<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	

	if(!isset($_GET['action']) ){
		$cus = calendars($conn);
		require_once('admin_pages/teacher/index.php');
	}
	if($_GET['action'] == 'asd'){
		$s = calendars($conn);
		//$cus = updateidcalendar($conn,$_POST);
		//$cus = selectmax($conn);
		//print_r($cus);
		require_once('admin_pages/teacher/index.php');
	}
	if($_GET['action'] == 'admin_course'){
		require_once('admin_pages/course/index.php');
	}
	if($_GET['action'] == 'insert_datetime'){
		$cus = insertData($conn,$_POST);
		$suc = calendars($conn);
		require_once("admin_pages/teacher/teacher_list.php");
	}
	?>
</head>
<body>
	<?php require_once('admin_view/navber_vertical.php'); ?>
	<?php require_once('admin_view/admin_footer.php'); ?>
</body>
</html> 