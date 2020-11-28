<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');

if(!isset($_GET['action'])){
	$cus = calendars($conn);
	?><pre><?php print_r($cus);
	echo $cus[1]['title'];
	?></pre><?php
	require_once('view.php');
}
error_reporting(~E_NOTICE);
if($_GET['action'] == 'compititions'){
	require_once('compititions.php');
}


?>
	