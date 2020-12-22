<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');



if(!isset($_GET['action']) ){
	$cus = calendars($conn);
	require_once('view.php');
}

if($_GET['action'] == 'compititions'){
	require_once('compititions.php');
}
?>
