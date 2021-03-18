<?php
session_start();
?>

<html>
<head>
	<?php 
	$id = $_SESSION['teacher_id'];
	$name = $_SESSION['teacher_fname'];
	$level = $_SESSION['teacher_level'];
	$nlevel = $_SESSION['teacher_nlevel'];
	$image = $_SESSION["teacher_img"];

	?>
	<style type="text/css" media="screen">

	</style>
</head>
<body>
	<div class="container">
		<h1 style="text-align: center;padding: 5%;"><b>เฉลย</b></h1>
		
		<h2 class="quest">คำถาม <?php echo $question0;?></h2>
		<h2 class="answer">คำตอบ <?php echo $ans0;?></h2><h2 class="correct">เฉลย <?php echo $corract0;?></h2><br>

		<h2 class="quest">คำถาม <?php echo $question1;?></h2>
		<h2 class="answer">คำตอบ <?php echo $ans1;?></h2><h2 class="correct">เฉลย <?php echo $corract1;?></h2><br>

		<h2 class="quest">คำถาม <?php echo $question2;?></h2>
		<h2 class="answer">คำตอบ <?php echo $ans2;?></h2><h2 class="correct">เฉลย <?php echo $corract2;?></h2><br>

		<h2 class="quest">คำถาม <?php echo $question3;?></h2>
		<h2 class="answer">คำตอบ <?php echo $ans3;?></h2><h2 class="correct">เฉลย <?php echo $corract3;?></h2><br>

		<h2 class="quest">คำถาม <?php echo $question4;?></h2>
		<h2 class="answer">คำตอบ <?php echo $ans4;?></h2><h2 class="correct">เฉลย <?php echo $corract4;?></h2><br>

		<div>
			<h1 style="text-align: center;background-color: green;color: #000000;width: auto;"><b>คะแนนที่ได้ <?php echo $show_score;?></b></h1>
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$("nav").remove(".navbar");
	});
</script>