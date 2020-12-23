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
		<?php 
		$id = $_SESSION['id '];
		$name = $_SESSION['name'];
		$level = $_SESSION['level'];
		$nlevel = $_SESSION['nlevel'];
		?>


	</style>
</head>
<body>
	<?php require_once('view/menu.inc.php'); ?>
	<?php require_once('view/body.inc.php'); ?>
	<?php require_once('view/footer.inc.php'); ?>
</body>
</html> 