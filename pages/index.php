<?php
session_start();
// $student = $_SESSION['student'];
// $teacher = $_SESSION['teacher'];
// $admin = $_SESSION['admin'];
// $superadmin = $_SESSION['superadmin'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('view/head.inc.php'); ?>
	<style>


	</style>
</head>
<body>

	<?php if (isset($_SESSION['LAST_ACTIVITY']) && ((time() - $_SESSION['LAST_ACTIVITY']) > 7200)) {
		header('Location:../pages/signin/logout.php');
	} ?>
	<?php require_once('view/menu.inc.php'); ?>
	<?php require_once('view/body.inc.php'); ?>
	<?php require_once('view/footer.inc.php'); ?>
</body>
</html> 