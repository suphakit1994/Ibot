<?php
if($_GET['app'] == 'home'){
	require_once("home/index.php");
}
if($_GET['app'] == 'test'){
	require_once("test/index.php");
}

if($_GET['app'] == 'students'){
	require_once("students/index.php");
}
if($_GET['app'] == 'art'){
	require_once("art/index.php");
}
if($_GET['app'] == 'teachers'){
	require_once("teachers/index.php");
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
?>
