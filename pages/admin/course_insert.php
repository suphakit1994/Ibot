 <meta charset="utf-8">
 <style>
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

 	.list_detail{
 		padding-top: 3%;
 	}
 	.avatar-wrapper{
 		position: relative;
 		height: 200px;
 		width: 300px;
 		margin: 50px auto;
 		border-radius: 5%;
 		overflow: hidden;
 		box-shadow: 1px 1px 15px -5px black;
 		transition: all .3s ease;
 		&:hover{
 			transform: scale(1.05);
 			cursor: pointer;
 		}
 		&:hover .profile-pic{
 			opacity: .5;

 		}
 		.profile-pic {
 			height: 100%;
 			width: 100%;
 			transition: all .3s ease;
 			&:after{
 				font-family: FontAwesome;
 				content: "\f007";
 				top: 0; left: 0;
			/*width: 100% ;
			height: 100%;*/
			position: absolute;
			font-size: 190px;
			background: #ecf0f1;
			color: #34495e;
			text-align: center;
		}
	}
	.upload-button {
		position: absolute;
		top: 0; left: 0;
		height: 100% ;
		width: 100% ;
		.fa-arrow-circle-up{
			position: absolute;
			font-size: 234px;
			top: -17px;
			left: 0;
			text-align: center;
			opacity: 0;
			transition: all .3s ease;
			color: #34495e;
		}
		&:hover .fa-arrow-circle-up{
			opacity: 0;
		}
	}
}
</style>

<body>
	<div class="page-content p-5" id="content" style="padding: 2%;">
		<!-- Toggle button -->
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

		<!--  Demo content -->
		<form method="POST"  action="index.php?app=admin&action=admin_course/add" enctype="multipart/form-data">
			<h1>ADD Course</h1>
			<div class="separator">
				
			</div>
			<div class="row">
				<div class="col-sm-5">
					<div class="row" style="display: flex; text-align: center;">
						<div class="col-sm-12">

							<div class="avatar-wrapper">
								<img class="profile-pic" style=" height: 100%;  width: 100%;" >
								<div class="upload-button">
									<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
								</div>

							</div>
							<input class="file-upload" type="file" name="course_img" accept="image/*" required >

						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-12">
							<h1>Detail</h1>
						</div>

						<div class="col-sm-6">
							<p class="list_detail"><b>Category</b> <small style="color: red;">Format : EV3</small></p>
							<input type="text" name="course_category" class="form-control" >
							<p class="list_detail"><b>Age for class</b></p>
							<input type="text" name="course_Age" class="form-control" >
							<p class="list_detail"><b>Lesson  </b><small style="color: red;">Format : 24 Lesson 36 Hours</small></p>
							<input type="text" name="course_lesson" class="form-control" >
						</div>
						<div class="col-sm-6">
							<p class="list_detail"><b>Course Expension </b></p>
							<input type="text" name="course_expension" class="form-control" >
							<p class="list_detail"><b>Course Code   </b><small style="color: red;">Format : IM01</small></p>
							<input type="text" name="course_code" class="form-control"  >
							<p class="list_detail"><b>Price</b></p>
							<input type="text" name="course_price" class="form-control" OnChange="JavaScript:chkNum(this)" >
						</div>
					</div>
				</div>
			</div>

			<div class="row" style="margin-top: 5%;">
				<div class="col-sm-5">
					<div class="row" style="display: flex; text-align: center;">
						<div class="col-sm-12">
							<button type="submit" name="submit" value="Save" class="Button" style="width: 30%;"> Save </button> 
						</div>
					</div>
				</div>
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
												<a type="submit" class="btn btn-default" data-slide="next"  href="#myCarousel<?php echo $q;?>">Next</a>
												<input type="submit" value="Submit">
											</div>
										</div>
									</div>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			<?php }?>
		</form>
	</div>
</body>

<script>
	$(document).ready(function() {
		var readURL = function(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('.profile-pic').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$(".file-upload").on('change', function(){
			readURL(this);
		});

		$(".upload-button").on('click', function() {
			$(".file-upload").click();
		});
	});
</script>
<script language="JavaScript">

	function addCommas(nStr)
	{
		nStr += '';
		x = nStr.split('.');
		x1 = x[0];
				//x2 = x.length > 1 ? '.' + x[1] : '';
				var rgx = /(\d+)(\d{3})/;
				while (rgx.test(x1)) {
					x1 = x1.replace(rgx, '$1' + ',' + '$2');
				}
				return x1 ;
			}

			function chkNum(ele)
			{
				var num = parseFloat(ele.value);
				ele.value = addCommas(num.toFixed(2));
			}
		</script>