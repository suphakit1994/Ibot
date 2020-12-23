<?php
if($_GET['app'] == 'home'){
	require_once("home/index.php");
}
if($_GET['app'] == 'test'){
	require_once("test/index.php");
}

if($_GET['app'] == 'art'){
	require_once("art/index.php");
}

if($_GET['app'] == 'about'){
	require_once("about/index.php");
}
if($_GET['app'] == 'pdf'){
	require_once("pdf/index.php");
}
if($_GET['app'] == 'iframe'){
	require_once("iframe/index.php");
}
if($_GET['app'] == 'our_course'){
	require_once("our_course/index.php");
}
if($_GET['app'] == 'admin'){
	require_once("admin/index.php");
}
if($_GET['app'] == 'signin'){
	require_once("signin/index.php");
}
if($_GET['app'] == 'student'){
	require_once("student/index.php");
}
if($_GET['app'] == 'teacher'){
	require_once("teacher/index.php");
}
if($_GET['app'] == 'parent_information'){
	require_once("parent_information/index.php");
}
if($_GET['app'] == 'student_information'){
	require_once("student_information/index.php");
}
if($_GET['app'] == 'enroll'){
	require_once("enroll/index.php");
}
if($_GET['app'] == 'payment'){
	require_once("payment/index.php");
}
if($_GET['app'] == 'success'){
	require_once("success/index.php");
}
?>
