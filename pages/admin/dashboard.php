<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<style>
	
	* {
		box-sizing: border-box;
	}

	/* Style the body */
	body {
		font-family: Garamond, serif;
		margin: 0;
	}
	canvas{
		flex: 100%;
		flex-wrap: wrap;
	}
	.grapbar{
		display: flex;
		justify-content: center;
	}
	.row {  
		display: flex;
	}
	.main {
		flex: 70%;
		background-color: white;
		padding: 20px;
		margin: 2%;
	}

	.board {
		display: flex;
		background-color: white;
		width: 20%;
		padding: 5px;
		justify-content: center;
		border-radius: 2px;
		box-shadow: 0 1px 2px 0 rgb(0 0 0), 0 4px 5px 0 rgba(0, 0, 0, 0.19);
	}
	.content {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}
	.iconbox{
		flex: 40%;
		padding: 1px;
		color: white;
		text-align: center;
		line-height: 90px;
		font-size: 30px;
		margin-bottom: 0 !important;
	}
	.textbox{
		flex: 60%;
		color: white;
		padding: 1px;
		text-align: center;
		line-height: 90px;
		font-size: 20px;
		margin-bottom: 0 !important;
	}
	.card {
		box-shadow: 0 2px 5px 0 rgb(0 0 0), 0 4px 5px 0 rgba(0, 0, 0, 0.19);
		width: unset !important;
		padding-bottom: 10px;
	}
	.pick{
		display: flex;
		flex-direction: row;
		justify-content: center;
	}
	.textbottom{
		display: flex;
		padding-top: 12px;
		font-size: 20px;
		justify-content: flex-start;
	}


</style>
</head>
<body>
	<div class="page-content p-5" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<div class="row">
			<div class="main">
				<h2><b>IBOT Academy</b></h2>
				<?php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );?>
				<h5><b><?php echo $date_curr = $date->format('l d-m-Y'); ?></b></h5>
				<div class="content">
					<div class="board" style="height:100px; background-color: #3cba9f;">
						<div class="iconbox" >
							<?php echo count($list_of_student);?>
						</div>
						<div class="textbox">
							Student
						</div>
					</div>
					<div class="board" style="height:100px; background-color: #c45850;">
						<div class="iconbox">
							<?php echo count($list_teacher);?>
						</div>
						<div class="textbox">
							Teacher
						</div>
					</div><div class="board" style="height:100px; background-color: #8e5ea2;">
						<div class="iconbox">
							<?php echo count($course_list);?>
						</div>
						<div class="textbox">
							Course
						</div>
					</div><div class="board" style="height:100px; background-color: #3e95cd;">
						<div class="iconbox">
							<?php echo count($graduate);?>

						</div>
						<div class="textbox">
							Certificate
						</div>
					</div>
				</div>
				<div class="grapbar" style="margin:20px;">
					<canvas id="bar-chart" width="800" height="450"></canvas>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	new Chart(document.getElementById("bar-chart"), {
		type: 'bar',
		data: {
			labels: [<?php for ($course_name=0; $course_name < count($func_selectcourse_stdcourse); $course_name++) {?> 
				"<?php echo $func_selectcourse_stdcourse[$course_name]['course_expension'];?>",
				<?php }?>],
				datasets: [
				{
					label: "Population (millions)",
					backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
					data: [<?php for ($num_std_course=0; $num_std_course < count($func_selectcourse_stdcourse); $num_std_course++) {?> 
						"<?php echo $func_selectcourse_stdcourse[$num_std_course]['COUNT(*)'];?>",
						<?php }?>]
					}
					]
				},
				options: {
					legend: { display: false },
					title: {
						display: true,
						text: 'Number of students enrolled in the course'
					}
				}
			});
		</script>

