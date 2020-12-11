<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');


if(!isset($_GET['action']) ){
	$cus = aboutus_news($conn);
	$per = aboutus_performance($conn);
	$cer = aboutus_certificate($conn);
	require_once('aboutus.php');
	?><pre><?php print_r($cus); ?></pre><?php
	
}
?>
