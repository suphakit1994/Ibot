<?php
if($_GET['app'] == 'home'){
	require_once("home/index.php");
}
if($_GET['app'] == 'test'){
	require_once("test/index.php");
}
if($_GET['app'] == 'ratchanat'){
	require_once("ratchanat/index.php");
}
?>
