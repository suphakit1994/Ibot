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
		.flex-box-con{
			display: flex;
			flex-direction: column;
		}
		.flex-question{
			flex: 100%;
			flex-direction: row;
			font-size: 30px;
			/* 			background-color: red; */
			padding: 2px;
		}
		.flex-answer{
			flex: 100%;
			flex-direction: row;
			font-size: 20px;
			/* 			background-color: blue; */
			padding: 1%;
		}
		.flex-choice{
			flex: 100%;
			font-size: 20px;
			/* 			background-color: yellow; */
			padding: 2px;
		}
		.container {
			display: block;
			position: relative;
			padding-left: 35px;
			margin-bottom: 12px;
			cursor: pointer;
			font-size: 22px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		/* Hide the browser's default checkbox */
		.container input {
			position: absolute;
			opacity: 0;
			cursor: pointer;
			height: 0;
			width: 0;
		}

		/* Create a custom checkbox */
		.checkmark {
			position: absolute;
			top: 0;
			left: 0;
			height: 25px;
			width: 25px;
			background-color: #eee;
		}

		/* On mouse-over, add a grey background color */
		.container:hover input ~ .checkmark {
			background-color: #ccc;
		}

		/* When the checkbox is checked, add a blue background */
		.container input:checked ~ .checkmark {
			background-color: #2196F3;
		}

		/* Create the checkmark/indicator (hidden when not checked) */
		.checkmark:after {
			content: "";
			position: absolute;
			display: none;
		}

		/* Show the checkmark when checked */
		.container input:checked ~ .checkmark:after {
			display: block;
		}

		/* Style the checkmark/indicator */
		.container .checkmark:after {
			left: 9px;
			top: 5px;
			width: 5px;
			height: 10px;
			border: solid white;
			border-width: 0 3px 3px 0;
			-webkit-transform: rotate(45deg);
			-ms-transform: rotate(45deg);
			transform: rotate(45deg);
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="flex-box-con">
			<h1>Examination <?php echo $get_pdf[$j]['numper']; ?></h1>
			<form method="POST" action="index.php?app=student&action=postfile/exam<?php echo $id_course;?>lesson<?php echo $get_pdf[$j]['numper']; ?>">
				<?php for($j=0; $j<count($get_quest);$j++){?>
					<div class="flex-question questions">
						<h1><?php echo $get_quest[$j]['question']; ?></h1>
					</div>
					<div class="flex-answer">
						<?php for($i=0; $i<count($select_choice_func);$i++){ 
							$quest = $get_quest[$j]['quiz_id'];?>

							<?php if($select_choice_func[$i]['key_all'] == $quest){?>
								<a>
									<label class="container">
										<input type="hidden" name="question<?php echo $j;?>" id="<?php echo $i;?>" value="<?php echo $get_quest[$j]['question'];?>">
										<input type="radio" name="answer<?php echo $j;?>" id="<?php echo $i;?>" value="<?php echo $select_choice_func[$i]['selected'];?>">
										<input type="hidden" name="correct<?php echo $j;?>" id="<?php echo $i;?>" value="<?php echo $get_quest[$j]['check_ans'];?>">
										<span class="checkmark"></span>
										<p style="font-size:24px;padding-left: 20px;"><?php echo $select_choice_func[$i]['selected'];?></p> 
									</label>
								</a>
							<?php }?>
						<?php }?>
					</div>
				<?php }?>
				<button type="submit" class="Button">ส่งข้อสอบ</button>
			</form>
		</div>
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		$("nav").remove(".navbar");
	});
</script>