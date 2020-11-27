<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');
if(!isset($_GET['action'])){
	require_once('view.php');
}
if($_GET['action'] == 'compititions'){
	require_once('compititions.php');
}

?>
