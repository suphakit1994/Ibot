<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');
if(!isset($_GET['action']) ){
	$cus = getdata($conn);
	require_once('view.php');
	
}
error_reporting(~E_NOTICE);
if($_GET['action']=="view_2"){
	require_once('view_2.php');
}
if($_GET['action']=="viewtest"){
	$name = testart($conn);
	print_r($name);
	require_once('viewtest.php');
}
if($_POST['action']=="insert"){
	print_r($_POST);
	// require_once('view.php');
}
?>
