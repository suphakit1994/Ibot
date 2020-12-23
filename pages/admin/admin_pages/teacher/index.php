<?php

if(!isset($_GET['action']) ){
	$cus = calendars($conn);
	require_once('admin_calendar.php');
}
if($_GET['action'] == 'admin_calendar'){
	$cus = calendars($conn);
	require_once("admin_calendar.php");
}
if($_GET['action'] == 'teacher_list'){
	require_once("teacher_list.php");
}
if($_GET['action'] == 'teacher_edit'){
	require_once("teacher_edit.php");
}
if($_GET['action'] == 'insert_datetime'){
	$cus = insertData($conn,$_POST);
	$suc = calendars($conn);
	require_once("admin_pages/teacher/admin_calendar.php");
}
?>