<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');
include('../php/art_ft.php');

if(!isset($_GET['action']) ){
	$cus = getdata($conn);
	require_once('view.php');
	
}
if($_GET['action']=="view_2"){
	require_once('view_2.php');
}

if($_GET['action']=='insert'){
	$cus = insert($conn,$_POST);
	print_r($_POST);
}


// if($_GET['action']=="viewtest"){
// 	$name = testart($conn);
// 	print_r($name);
// 	require_once('viewtest.php');
// }
?>
