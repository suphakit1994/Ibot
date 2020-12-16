<?php session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php require_once('view/menu.inc.php'); ?>
	<?php require_once('view/body.inc.php'); ?>
	<?php require_once('view/footer.inc.php'); ?>
	<?php $ID = $_SESSION['ID'];
	$name = $_SESSION['name'];
	$level = $_SESSION['level'];
	if($level!='admin'){
		Header("Location: signin/logout.php");  
	} ?>
	<form action="signin/logout.php">
		<h1>Admin Page</h1>
		<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
		<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>