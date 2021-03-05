<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');


if(!isset($_GET['action']) ){
	$cus = aboutus_news($conn);
	print_r($cus);
	for ($i=0; $i <count($cus) ; $i++) { 
		echo $cus[$i]['topic'];
	}
	$per = aboutus_team($conn);
	$per_2 = aboutus_team_2($conn);
	$per_3 = aboutus_team_3($conn);
	$cer = cer_image($conn);
	$our = per_image($conn);


	require_once('aboutus.php');
}
?>
