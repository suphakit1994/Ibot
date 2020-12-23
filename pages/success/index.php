<?php  
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include("../php/student_function.php");
include("../php/function.php");

?>
<head>
	<?php require_once('view/head.inc.php'); ?>
	<style>
		<?php 
		if(!isset($_GET['action'])){
			require_once('success.php');
		}?>
	</style>
</head>