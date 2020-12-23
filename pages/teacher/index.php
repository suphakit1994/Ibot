<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');
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
		<?php
		if ($level=='teacher') {

			if(!isset($_GET['action']) ){
				$cus = calendars($conn);
				require_once('view.php');
			}

			if($_GET['action'] == 'compititions'){
				require_once('compititions.php');
			}
		}?>
	</style>
</head>
</html> 