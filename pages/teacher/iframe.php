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
	$course = $_SESSION["course_id"];	
	$value_course = $course;
	// print_r($_SESSION);
	?>
	<style type="text/css">
		<?php
		include("../view/footer.inc.php");
		include("../../php/config.php");
		include('../../php/function.php');
		include("../../php/course_function.php");
		?>
		<?php
		// $quiz = quiz($conn);
		$func_getquize = select_question($conn,$course);
		// print_r($func_getquize);
		// for ($const=0; $const < count($func_getquize); $const++) { 
		// 	$number_of_quize = $func_getquize[$const]['numper'];
		// }
		?>
	</style>
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
	<div class="flex-box-con">
		<h1>Page IFRAME</h1><br>
		<h2><?php echo $course; ?></h2>
		<?php for($j=0; $j<count($func_getquize);$j++){?>
<!-- 			<?php if($j =0){$j=1;}?>
<?php if($func_getquize[$j]['numper']=$j){?> -->
<div class="flex-question">
	<?php echo $func_getquize[$j]['question'];?>
	<?php echo $func_getquize[$j]['numper'];?>
</div>
<!-- 			<?php }?> -->
<div class="flex-answer" style="">
	<?php for($i=1; $i<5;$i++){?>
		<div class="flex-choice">
			<a onclick="">
				<label class="container">
					<input type="radio" name="ggg" id="<?php echo $i;?>" value="<?php echo $i;?>">
					<span class="checkmark"></span>
					Book<?php echo $i;?>
				</label>
			</a>
		</div>
	<?php }?>
</div>
<?php }?>
<button type="" class="Button">asdasdas</button>
</div>
</body>
</html>