<style>
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
	.icon_upload_pic{
		position: absolute;
		top: 244px;
		right: 108px;

	}
</style>
<body>
	<div class="page-content p-5" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div><h1>EDIT DETAIL</h1></div>
				</div>
			</div>
			<?php for($i = 0;$i<count($select_idstudent);$i++){ ?>
				<form action="index.php?app=admin&action=teacher_update<?php echo $select_idstudent[$i]['student_id'];?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-3">
							<img style="border-radius: 50%;object-fit:cover;" src="../student_img/<?php echo $select_idstudent[$i]['image'];?>" width="100%" height="240px" id="previewImg" alt="<?php echo $select_idstudent[$i]['image'];?>">
							<div class="file-input icon_upload_pic">
								<input
								id="file-input"
								class="file-input__input"
								type="file" 
								name="photo" 
								onchange="previewFile(this);"
								/>
								<label class="file-input__label" for="file-input">
									<svg
									aria-hidden="true"
									focusable="false"
									data-prefix="fas"
									data-icon="upload"
									class="svg-inline--fa fa-upload fa-w-16"
									role="img"
									xmlns="http://www.w3.org/2000/svg"
									viewBox="0 0 512 512"
									>
									<path
									fill="currentColor"
									d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"
									></path>
								</svg>
								<span>Upload Image</span></label
								>
							</div>
						</div>
						<div class="col-md-9" style="padding-top: 65px;">
							<div class="row">
								<div><h1>Student Information</h1></div>
								<div class="col-sm-3">
									<p><b>Student name</b></p>
									<input class="form-control" type="text" value="<?php echo $select_idstudent[$i]['student_name_eng'];?>" name="name_en">
								</div>
								<div class="col-sm-3">
									<p><b>Student name(th)</b></p>
									<input class="form-control" type="text" value="<?php echo $select_idstudent[$i]['student_name_th'];?>" name="name_th">
								</div>
								<div class="col-sm-3">
									<p><b>Nickname</b></p>
									<input class="form-control" type="text" value="<?php echo $select_idstudent[$i]['student_nickname_eng'];?>" name="nickname">
								</div>
								<div class="col-sm-3">
									<p><b>Position</b></p>
									<input class="form-control" type="text" value="IBOT Academy" disabled>
								</div>
							</div>
							<div class="row" style="margin-top: 10px;">
								<div class="col-sm-3">
									<p><b>Username</b></p>
									<input class="form-control" type="text" value="<?php echo $select_idstudent[$i]['student_username'];?>" name="username">
								</div>
								<div class="col-sm-3">
									<p><b>Password</b></p>
									<input class="form-control" type="text" value="<?php echo $select_idstudent[$i]['student_password'];?>" name="password">
								</div>
							</div>
							<div class="row" style="margin-top: 50px;">
								<div class="col-sm-12">
									<div><h1>Parent Information</h1></div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label>Parent name:</label></br>
										<input class="form-control" type="" value="<?php echo $select_idstudent[$i]['parents_name_eng'];?>" name="pname">
									</div>
									<div class="col-sm-6">
										<label>Parent name(th):</label></br>
										<input class="form-control" type="" value="<?php echo $select_idstudent[$i]['parents_name_th'];?>" name="pname_th">
									</div>
									<div class="col-sm-6">
										<label>Relation:</label></br>
										<input class="form-control" type="" value="<?php echo $select_idstudent[$i]['parents_related'];?>" name="related">
									</div>
									<div class="col-sm-6">
										<label>Email Address:</label></br>
										<input class="form-control" type="" value="<?php echo $select_idstudent[$i]['parents_email'];?>" name="email">
									</div>
									<div class="col-sm-6">
										<label>Telephone:</label></br>
										<input class="form-control" type="" value="<?php echo $select_idstudent[$i]['parents_phonenumber'];?>" name="phone">
									</div>
								</div>
							</div>
							<div class="row" style="margin-top: 50px;">
								<div class="col-sm-12">
									<div><h1>Study time</h1></div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<label for="date">Date:</label></br>					
										<input id="date" style="" type="date" name="date" value="2000-05-05">
									</div>
									<div class="col-md-3">
										<label for="time">Time:</label></br>
										<input type="time" id="time" name="time" value="09:00:00">
									</div>
								</div>
								<div class="col-sm-12" style="margin-top: 10px;">
									<div class="row">
										<input class="btn btn-success" type="submit" id="" name="" value="Save" style="width: 20%;margin-bottom: 10px;">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			<?php } ?>
		</div>
	</div>
</body>
<script> 
	function previewFile(input){
		var file = $("input[type=file]").get(0).files[0];

		if(file){
			var reader = new FileReader();

			reader.onload = function(){
				$("#previewImg").attr("src", reader.result);
			}
			reader.readAsDataURL(file);
		}
	}
</script>