<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');
if(!isset($_GET['action']) ){
	$cus = getdata($conn);

	require_once('view.php');
}

if($_GET['action']=="view_2"){
	require_once('view_2.php');
}
?>
