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
		.file-input__input {
			width: 0.1px;
			height: 0.1px;
			opacity: 0;
			overflow: hidden;
			position: absolute;
			z-index: -1;
		}

		.file-input__label {
			cursor: pointer;
			display: inline-flex;
			align-items: center;
			border-radius: 4px;
			font-size: 14px;
			font-weight: 600;
			color: #fff;
			font-size: 14px;
			padding: 5px 6px;
			background-color: #4245a8;
			box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
		}

		.file-input__label svg {
			height: 16px;
			margin-right: 4px;
		}
	</style>
	
</head>
<body>

	

	<div class="page-content p-5" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		
		<form method="POST" id="insertdata" action="index.php?app=admin&action=choice_edit<?php echo $edit_choice[$a]['course_id']?>/add" enctype="multipart/form-data">
			<div class="flex-container">
				<div style="flex: 100%; padding: 40px;text-align: center;">
					<h1>Add Lesson and Quiz</h1>
				</div>
				<!-- <a id="add_lesson" class="btn btn-primary add_field_button" type="button" style="padding: 4px;margin-left: 2%;">+ Add New</a> -->
				<div class="flex-main">
					<table>
						<tr>
							<th>Lesson</th>
							<th>Quize</th>
						</tr>
						<?php for($x = 1; $x < 9; $x++){ ?>
							<tr>						
								<td>
									<label>Number <?php echo $x;?></label>
									<input style="width: 10%; margin: 2% 2%;" class="custom-file-input" type="file" 
									name="file<?php echo $x; ?>" accept="application/pdf"><?php echo $x; ?>
								</td>												
								<td>

									<a style="width: 50%; margin: 2% 2%;" class="custom-file-input btn btn-primary" type="button" id="myBtn" value="modals" data-toggle="modal" data-target="#myModal<?php echo $x;?>">Example</a>
								</td>						
							</tr>
						<?php } ?>


					</table>
				</div>
				<div style="flex: 100%; padding: 40px;text-align: center;">
					<input class="btn btn-success" type="submit" name="" form="insertdata" value="Save">
				</div>
			</div>

		</div>
		<?php for($y = 1; $y < 9 ;$y++){ ?>
			<div id="myModal<?php echo $y;?>" class="modal fade" role="dialog">
				<div id="myCarousel<?php echo $y;?>" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel<?php echo $y;?>" data-slide-to="0" class="active"></li>
						<?php for ($k=1; $k < 5 ; $k++) {  ?>
							<li data-target="#myCarousel<?php echo $y;?>" data-slide-to="<?php echo $k ?>"></li>
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
												<input class="modlas-input" type="text" placeholder="quest<?php echo $i.$y;?>[]" name="quest<?php echo $i.$y;?>[]">
												<?php for ($j=1; $j < 6 ; $j++) {  ?>
													<label><?php if($j == 5){echo "Answer";}else{ echo "choice".$j.$y;} ?></label>
													<input class="modlas-input" type="text" 
													placeholder="<?php if($j == 5){echo "ans".$i.$y;}else{ echo "choice".$i.$j.$y;} ?>[]" 
													name="<?php if($j == 5){echo "ans".$i.$y;}else{ echo "choice".$i.$j.$y;} ?>[]">
												<?php }?>
											</div>

										</div>
										<div class="modal-footer">
											<a type="button" class="btn btn-default" data-slide="prev"  href="#myCarousel<?php echo $y;?>">Previous</a>
											<a type="submit" class="btn btn-default" data-slide="next"  href="#myCarousel<?php echo $y;?>">Next</a>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
					</div>
				</div>
			</div>
		<?php } ?>
	</form>
</body>