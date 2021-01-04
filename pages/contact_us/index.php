<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');	
include('../php/art_ft.php');
include('../php/function.php');


if(!isset($_GET['action'])){
	require_once('contact_us.php');
}
if($_GET['action'] == 'submit_text'){
	$cus = contact($conn,$_POST);
	require_once("contact_us.php");
}
?>
