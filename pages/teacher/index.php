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
	?>
</head>
<body>
	<?php require_once('admin_view/navber_vertical.php'); ?>
	<?php require_once('admin_view/admin_footer.php'); ?>
</body>
</html> 