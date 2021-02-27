
<head>
	<meta charset="utf-8">
	<style type="text/css" media="screen">
		.flex-upload-pic{
			display: flex;
			flex-direction: column;
		}
		.avatar-wrapper{
			position: relative;
			height: 500px;
			width: 800px;
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


</style>
</head>
<body>


	<div class="containner">
		<div class="page-content p-5" id="content" style="padding: 2%;">
			<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
			<form method="POST"  action="index.php?app=admin&action=video_background/update" enctype="multipart/form-data">
				
				<div style=" padding-bottom: 30px;">
					
					<h1 style="text-align: center; font-weight: bold;">Video Background</h1>
					<div class="flex-upload-pic">
						<div class="avatar-wrapper">
							<img class="profile-pic" style=" height: 100%;  width: 100%;" >
							<div class="upload-button">
								<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
							</div>
						</div>
						<div style="display: flex;justify-content: center;width: 100%;">
							<input  class="file-upload" type="file" name="video_background" accept="image/*" required >
						</div>
						<h3 style="text-align: center; color:grey;">resolution Image = "width:800 x height:500"</h3>
					</div>
				</div>
				<div style="text-align: center">
					<input type="submit" style="padding: 10px 30px 10px 30px; " class="Button" name="">	
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