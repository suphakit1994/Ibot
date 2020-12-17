<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	date_default_timezone_set("Asia/Bangkok");
	include("../php/config.php");
	include('../php/function.php');

	if(!isset($_GET['action']) ){
		$cus = calendars($conn);
		require_once('admin_pages/admin_student.php');
	}
	if($_GET['action'] == 'admin_teacher'){
		$cus = calendars($conn);
		require_once("admin_pages/admin_teacher.php");
	}
	?>
</head>
<body>
	<?php require_once('admin_view/navber_vertical.php'); ?>
	<?php require_once('admin_view/admin_footer.php'); ?>
</body>
</html> 