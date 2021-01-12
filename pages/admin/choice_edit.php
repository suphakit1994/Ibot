<head>
	<style type="text/css">
		.flex-container{
			display: flex;
			flex-wrap: wrap;
		}
		.flex-main{
			display: flex;
			flex: 100%;
			flex-direction: row;
			justify-content: center;
			align-items: center;
			padding: 20px;

		}
		.content-page1{
			flex: 50%;
			flex-direction: column;
		}
		.content-page2{
			flex: 50%;
			flex-direction: column;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			padding: 15px !important;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		tr:hover {background-color:#f5f5f5;}
		.modals-flex{
			display: flex;
			flex-wrap: wrap;
		}
		.modals-content{
			display: flex;
			flex-direction: column;
			width: 100vw;
		}
		.modlas-input{
			display: flex;
			padding: 2% 2%;
			margin: 2% 2%;
		}
	</style>
</head>
<body>

	

	<div class="page-content p-5" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<form method="POST"  action="index.php?app=admin&action=choice_edit<?php echo $edit_choice[$a]['course_id']?>/add" enctype="multipart/form-data">
			<div class="flex-container">
				<div style="flex: 100%; padding: 40px;text-align: center;">
					<h1>Add Lesson and Quiz</h1>
				</div>
				<div class="flex-main">
					<table>
						<tr>
							<th>Lesson</th>
							<th>Quize</th>
						</tr>
						<tr>						
							<td>
								<label style="">Number</label>
								<input style="width: 100%; margin: 2% 2%;" class="custom-file-input" type="file" name="file" accept="application/pdf">
							</td>												
							<td>
								<label>Number</label>
								<input style="width: 100%; margin: 2% 2%;" class="custom-file-input" type="button" id="myBtn" value="modals" data-toggle="modal" data-target="#myModal">
							</td>						
						</tr>
					</table>
				</div>
				<div style="flex: 100%; padding: 40px;text-align: center;">
					<input type="submit" name="">
				</div>
			</div>

		</div>
	<!-- <div class="flex-main">					
		<div class="content-page1">						
			<h2><b>Lesson</b></h2>
			<?php for($o=1; $o<8; $o++){ ?>
				<div>
					<label style="">Number <?php echo $o;?></label>
					<input style="width: 100%; margin: 2% 2%;" class="custom-file-input" type="file" name="file<?php echo $o;?>" accept="application/pdf">
				</div>
			<?php }?>						
		</div>
		<div class="content-page2">
			<h2><b>Quiz</b></h2>
			<?php for($p=1; $p<8; $p++){ ?>
				<div>
					<label>Number <?php echo $p;?></label>
					<input style="width: 100%; margin: 2% 2%;" class="custom-file-input" type="button" id="myBtn" value="modals" data-toggle="modal" data-target="#myModal<?php echo $p;?>">
				</div>
			<?php }?>
		</div>
	</div> -->

	<div id="myModal" class="modal fade" role="dialog">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<?php for ($k=1; $k < 5 ; $k++) {  ?>
					<li data-target="#myCarousel" data-slide-to="<?php echo $k ?>"></li>
				<?php }?>
			</ol>
			<div class="carousel-inner">
				<?php for ($i=1; $i < 6 ; $i++) {  ?>
					<div class="item <?php if($i==1){ echo("active");}?> ">
						<div class="modal-dialog">
							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Number <?php echo $i; ?></h4>
								</div>
								<div class="modal-body modals-flex">

									<div class="modals-content">
										<label>Question <?php echo $i;?></label>
										<input class="modlas-input" type="text" placeholder="quest<?php echo $i;?>" name="quest<?php echo $i;?>">
										<?php for ($j=1; $j < 6 ; $j++) {  ?>
											<label><?php if($j == 5){echo "Answer";}else{ echo "choice".$j;} ?></label>
											<input class="modlas-input" type="text" 
											placeholder="<?php if($j == 5){echo "ans".$i;}else{ echo "choice".$i.$j.$q;} ?>" 
											name="<?php if($j == 5){echo "ans".$i;}else{ echo "choice".$i.$j;} ?>">
										<?php }?>
									</div>

								</div>
								<div class="modal-footer">
									<a type="button" class="btn btn-default" data-slide="prev"  href="#myCarousel<?php echo $q;?>">Previous</a>
									<a type="submit" class="btn btn-default" data-slide="next"  href="#myCarousel<?php echo $q;?>">Next</a>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</form>


</body>