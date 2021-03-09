<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");

include('../php/function.php');


if(!isset($_GET['action'])){
	$cus = sec_ibot_news($conn);
	$text = ibot_textslide_select($conn);
	$img_home = sec_img_home($conn);
	$img_camp = sec_img_camp($conn);
	$img_compeitition = sec_img_compeitition($conn);
	$background = sec_background($conn);



	require_once('view.php');
}


?>
