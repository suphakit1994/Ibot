
<style>
	.list_detail{
		padding-top: 3%;
	}
	.avatar-wrapper{
		position: relative;
		height: 200px;
		width: 300px;
		margin: 50px auto;
		/*border-radius: 50%;*/
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
				width: 100%;
				height: 100%;
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
			height: 100%;
			width: 100%;
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
				opacity: .9;
			}
		}
	}
</style>
<body>
	<div class="page-content p-5" id="content" style="padding: 2%;">
		<!-- Toggle button -->
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

		<!-- Demo content -->
		<form method="POST" accept-charset="utf-8" action="index.php?app=admin&action=admin_course">
			<h1>ADD Course</h1>
			<div class="separator"></div>
			<div class="row">
				<div class="col-sm-5">
					<div class="row" style="display: flex; text-align: center;">
						<div class="col-sm-12">
							<div class="avatar-wrapper">
								<img class="profile-pic" src="" />
								<div class="upload-button">
									<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
								</div>
								
							</div>
							<input class="file-upload" type="file" accept="image/*">
						</div>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-12">
							<h1>Detail</h1>
						</div>
						
						<div class="col-sm-6">
							<p class="list_detail"><b>Category</b></p>
							<input type="text" name="course_category" class="form-control">
							<p class="list_detail"><b>Age for class</b></p>
							<input type="text" name="course_Age" class="form-control">
							<p class="list_detail"><b>Lesson</b></p>
							<input type="text" name="course_lesson" class="form-control">
						</div>
						<div class="col-sm-6">
							<p class="list_detail"><b>Course Expension</b></p>
							<input type="text" name="course_expension" class="form-control">
							<p class="list_detail"><b>Course Code</b></p>
							<input type="text" name="course_code" class="form-control">
							<p class="list_detail"><b>Price</b></p>
							<input type="text" name="course_price" class="form-control">
						</div>
						
						
					</div>
				</div>
			</div>
			
			<div class="row" style="margin-top: 5%;">
				<div class="col-sm-5">
					<div class="row" style="display: flex; text-align: center;">
						<div class="col-sm-12">
							<button type="submit" name="save"  class="Button">Save</button>
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
									<p><b>Lesson</b></p>
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row" style="display: flex; text-align: center;">
								<div class="col-sm-12">
									<p><b>Quiz</b></p>
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
									<input class="list_detail custom-file-input" type="file" id="myFile" name="filename">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
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
