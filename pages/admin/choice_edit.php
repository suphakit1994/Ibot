<head>
	<style type="text/css">
		.flex-container{
			display: flex;
			flex-wrap: wrap;
		}
	</style>
</head>
<body>

	

	<div class="page-content p-5" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

		<div class="flex-container">
			<div class="col-sm-7">
				<div class="row">
					<div class="col-sm-12">
						<h1>Add Lesson and Quiz</h1>
					</div>
					<div class="col-sm-6">
						<div class="row" style="display: flex; text-align: center;">
							<div class="col-sm-12">
								<h2><b>Lesson</b></h2>
								<?php for($o=1; $o<8; $o++){ ?>
									<label style="">Number <?php echo $o;?></label>
									<input style="width: 100%; margin: 2% 2%;" class="custom-file-input" type="file" name="file<?php echo $o;?>" accept="application/pdf">
								<?php }?>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row" style="display: flex; text-align: center;">
							<div class="col-sm-12">
								<h2><b>Quiz</b></h2>
								<?php for($p=1; $p<8; $p++){ ?>
									<label>Number <?php echo $p;?></label>
									<input style="width: 100%; margin: 2% 2%;" class="custom-file-input" type="button" id="myBtn" value="modals" data-toggle="modal" data-target="#myModal<?php echo $p;?>">
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php for($q=1; $q<8; $q++){ ?>
		<div id="myModal<?php echo $q;?>" class="modal fade" role="dialog">
			<div id="myCarousel<?php echo $q;?>" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel<?php echo $q;?>" data-slide-to="0" class="active"></li>
					<?php for ($k=1; $k < 5 ; $k++) {  ?>
						<li data-target="#myCarousel<?php echo $q;?>" data-slide-to="<?php echo $k ?>"></li>
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
											<input class="modlas-input" type="text" placeholder="Question<?php echo $i.$q; ?>" name="quest<?php echo $i.$q; ?>">
											<?php for ($j=1; $j < 6 ; $j++) {  ?>
												<label><?php if($j == 5){echo "Answer";}else{ echo "choice".$j;} ?></label>
												<input class="modlas-input" type="text" 
												placeholder="<?php if($j == 5){echo "ans".$i.$q;}else{ echo "choice".$i.$j.$q;} ?>" 
												name="<?php if($j == 5){echo "ans".$i.$q;}else{ echo "choice".$i.$j.$q;} ?>">
											<?php }?>
										</div>

									</div>
									<div class="modal-footer">
										<a type="button" class="btn btn-default" data-slide="prev"  href="#myCarousel<?php echo $q;?>">Previous</a>
										<a type="button" class="btn btn-default" data-slide="next"  href="#myCarousel<?php echo $q;?>">Next</a>
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
	<?php }?>

</body>