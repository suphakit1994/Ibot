<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');	
include('../php/art_ft.php');


if(!isset($_GET['action'])){
	$cus = news2($conn);
	$sli = slide($conn);

	require_once('view.php');
}

?>
