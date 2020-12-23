<?php  error_reporting(~E_NOTICE);
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/faii_ft.php");
include("../php/function.php");





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

		if(!isset($_GET['action'])){
			$cus[] = getselect($conn);
				$data= getselect($conn);         //เรียกใช้ faction
			    $arrlength = count($data); 		//นับข้อมูล
			    require_once('our_course.php');
			}


		}?>
	</style>
</head>
</html> 
