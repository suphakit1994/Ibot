<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');


if(!isset($_GET['action']) ){
	require_once('pdfweb.php');
}
if($_GET['action'] == 'menuradio'){
	require_once('menuradio.php');
}
?>
