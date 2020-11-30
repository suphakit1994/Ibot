<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');
include('../php/art_ft.php');

if(!isset($_GET['action']) ){
	$cus = getdata($conn);
	require_once('view.php');
	
}
error_reporting(~E_NOTICE);
if($_GET['action']=="view_2"){
	require_once('view_2.php');
}

if($_POST['action']=='insert'){
	$name = insert($conn,$data);
	$surname = insert($conn,$data);
	$email = insert($conn,$data);
	$city = insert($conn,$data);
	$address = insert($conn,$data);
	$postal = insert($conn,$data);
	$cardnumber = insert($conn,$data);
	print_r($conn,$data);
}

// if($_GET['action']=="viewtest"){
// 	$name = testart($conn);
// 	print_r($name);
// 	require_once('viewtest.php');
// }

// if($_POST['action']=="insert"){
// 	$name = artinsert($conn);
// 	$surname = artinsert($conn);
// 	$email = artinsert($conn);
// 	$city = artinsert($conn);
// 	$address = artinsert($conn);
// 	$postal = artinsert($conn);
// 	$cardnumber = artinsert($conn);
// 	print_r($conn);
// 	// require_once('view.php');
// }
?>
