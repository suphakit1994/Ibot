<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');


if(!isset($_GET['action']) ){
	$get_pdf = getPdf($conn);
	$qq = quiz($conn);
	require_once('pdfweb.php');
}

if($_GET['action']=='choosefile'){
	$cus = insertPdf($conn,$_POST);
	print_r($_POST);
}
?>
