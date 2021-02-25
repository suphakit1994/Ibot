<?php
session_start();
?>

<html>
<head>
	<?php 
	$id = $_SESSION['student_id'];
	$name = $_SESSION['student_name_eng'];
	$level = $_SESSION['student_level'];
	$nlevel = $_SESSION['student_nlevel'];
	?>
	<style type="text/css" media="screen">

	</style>
</head>
<body>
	<div class="container">
		<h1>คำถาม<?php echo $question0;?></h1>
		<h2>คำตอบ<?php echo $ans0;?> ==>เฉลย<?php echo $corract0;?></h2><br>
		<h1>คำถาม<?php echo $question1;?></h1>
		<h2>คำตอบ<?php echo $ans1;?> ==>เฉลย<?php echo $corract1;?></h2><br>
		<h1>คำถาม<?php echo $question2;?></h1>
		<h2>คำตอบ<?php echo $ans2;?> ==>เฉลย<?php echo $corract2;?></h2><br>
		<h1>คำถาม<?php echo $question3;?></h1>
		<h2>คำตอบ<?php echo $ans3;?> ==>เฉลย<?php echo $corract3;?></h2><br>
		<h1>คำถาม<?php echo $question4;?></h1>
		<h2>คำตอบ<?php echo $ans4;?> ==>เฉลย<?php echo $corract4;?></h2><br>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$("nav").remove(".navbar");
	});
</script>