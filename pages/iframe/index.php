<?php
date_default_timezone_set("Asia/Bangkok");
include("../php/config.php");
include('../php/function.php');




if(!isset($_GET['action']) ){
	$qq = quiz($conn);
	require_once('question.php');
}
?>