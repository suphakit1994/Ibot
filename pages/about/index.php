<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');


if(!isset($_GET['action']) ){
	$cus = aboutus_news($conn);
	$per = aboutus_team($conn);
	$per_2 = aboutus_team_2($conn);
	$per_3 = aboutus_team_3($conn);
	$cer = cer_image($conn);
	$our = per_image($conn);


	require_once('aboutus.php');
}
?>
