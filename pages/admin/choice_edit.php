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
		.icon_func_modal{
			display: flex;
			justify-content: flex-start;
			flex-direction: row-reverse;
			padding: 2%;
		}
		.modal-footers{
			display: flex;
			justify-content: space-between;
			flex-direction: row;
			padding: 2%;
		}
		.icon_inmodals {
			border: none;
			border-radius: 50%;
			color: white;
			padding: 0px 7px;
			font-size: 10px;
			cursor: pointer;
			margin-left: 5px;
			margin-top: 10px;
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
									<input style="width: 20%; margin: 2% 2%;" class="custom-file-input" type="file" 
									name="file<?php echo $x; ?>" accept="application/pdf">
								</td>												
								<td>

									<a style="width: 50%; margin: 2% 2%;" class="custom-file-input btn btn-primary" type="button" id="myBtn" value="modals" data-toggle="modal" data-target="#myModal<?php echo $x;?>">Example</a>
								</td>						
							</tr>
						<?php } ?>


					</table>
				</div>
				<div style="flex: 100%; padding: 40px;text-align: center;">
					<input style="width: 20%;" class="btn btn-success" type="submit" name="" form="insertdata" value="Save">
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
									<div class="modal-content">
										<div class="">
											<div class="icon_func_modal">
												<a data-dismiss="modal" class="icon_inmodals" style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>
											</div>	
										</div>
										<div style="display: flex; justify-content: center;text-align: center;">
											<h2 class="modal-title"><b>Number <?php echo $i; ?></b></h2>
										</div>
										<div class="modal-body modals-flex">
											
											<div class="modals-content">
												<label>Question <?php echo $i;?></label>
												<input class="modlas-input" type="text" placeholder="quest" name="quest<?php echo $i.$y;?>[]">
												<?php for ($j=1; $j < 6 ; $j++) {  ?>
													<label><?php if($j == 5){echo "Answer";}else{ echo "choice"." ".$j;} ?></label>
													<input class="modlas-input" type="text" 
													placeholder="<?php if($j == 5){echo "answer";}else{ echo "choice"." ".$j;} ?>" 
													name="<?php if($j == 5){echo "ans".$i.$y;}else{ echo "choice".$i.$j.$y;} ?>[]">
												<?php }?>
											</div>

										</div>
										<div class="modal-footers">
											<a type="button" class="btn btn-default" data-slide="prev"  href="#myCarousel<?php echo $y;?>">Previous</a>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<a type="submit" class="btn btn-default" data-slide="next"  href="#myCarousel<?php echo $y;?>">Next</a>
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