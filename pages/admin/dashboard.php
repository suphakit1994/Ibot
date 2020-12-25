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


	/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 700px) {
		.row{   
			flex-direction: column;
		}
		.content{
			flex-direction: column;
		}
		.board{
			width: 100%;
			margin: 10px;
		}
	}
</style>
</head>
<body>
	<div class="page-content p-5" id="content" style="padding: 2%;">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<div class="row">
			<div class="main">
				<h2><b>IBOT Academy</b></h2>
				<h5><b>Dec 7, 2017</b></h5>
				<div class="content">
					<div class="board" style="height:100px; background-color: #3cba9f;">
						<div class="iconbox" >
							5256
						</div>
						<div class="textbox">
							Student
						</div>
					</div>
					<div class="board" style="height:100px; background-color: #c45850;">
						<div class="iconbox">
							120
						</div>
						<div class="textbox">
							Teacher
						</div>
					</div><div class="board" style="height:100px; background-color: #8e5ea2;">
						<div class="iconbox">
							10
						</div>
						<div class="textbox">
							Course
						</div>
					</div><div class="board" style="height:100px; background-color: #3e95cd;">
						<div class="iconbox">
							265
						</div>
						<div class="textbox">
							Certificate
						</div>
					</div>
				</div>
				<div class="grapbar" style="margin:20px;">
					<canvas id="bar-chart" width="800" height="450"></canvas>
				</div>
				<div class="textbottom">Sometext</div>
				<div class="textbottom">
					<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				</div>
				<br>
				<h2><b>COMPITITIONS</b></h2>
				<h5>Sep 2, 2017-Sep 2, 2021</h5>
				<div class="pick" style="padding: 10px;"><img src="../images/art.png" alt="" style="width:100vh; height:40vh;border-radius: 3px; "></div>
				<div class="textbottom">Compitition</div>
				<div class="textbottom">
					<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	// Bar chart
	new Chart(document.getElementById("bar-chart"), {
		type: 'bar',
		data: {
			labels: ["Course 1", "Course 2", "Course 3", "Course 4", "Course 5","Course 6", "Course 7", "Course 8", "Course 9", "Course 10"],
			datasets: [
			{
				label: "Population (millions)",
				backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850","#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
				data: [2478,5267,734,784,433,2478,5267,734,784,433]
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