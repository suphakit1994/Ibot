<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/test.php');	
include('../php/art_ft.php');


if(!isset($_GET['action'])){
	require_once('contact_us.php');
}

?>
