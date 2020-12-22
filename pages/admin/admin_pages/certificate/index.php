<?php

if(!isset($_GET['action']) ){
	$cus = calendars($conn);
	require_once('teacher_list.php');
}
if($_GET['action'] == 'asd'){
	$cus = calendars($conn);
	require_once("teacher_list.php");
}
if($_GET['action'] == 'insert_datetime'){
	$cus = insertData($conn,$_POST);
	$suc = calendars($conn);
	require_once("admin_pages/teacher/teacher_list.php");
}
?>