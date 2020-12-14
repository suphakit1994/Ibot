	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<?php 
		require_once('php/config.php');
		require_once('php/function.php');
		$data=getbank($conn);
		?>
		<style type="text/css">
			.file-upload {
				background-color: #ffffff;
				width: 100%;
				margin: 0 auto;
				padding: 20px;
			}

			.file-upload-btn {
				width: 100%;
				margin: 0;
				color: #212529;
				background: #ffffff;
				border: none;
				padding: 10px;
				outline: none;
				text-transform: uppercase;
				font-weight: 700;
			}

			.file-upload-content {
				display: none;
				text-align: center;
			}

			.file-upload-input {
				position: absolute;
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				outline: none;
				opacity: 0;
				cursor: pointer;
			}

			.image-upload-wrap {
				margin-top: 20px;
				border: 4px dashed #bdbdbd;
				position: relative;
			}

			.image-dropping,
			.image-upload-wrap:hover {
				background-color: #c0bfbf7d;
				border: 4px dashed #ffffff;
			}

			.image-title-wrap {
				padding: 0 15px 15px 15px;
				color: #222;
			}

			.drag-text {
				text-align: center;
			}

			.drag-text h3 {
				font-weight: 100;
				text-transform: uppercase;
				color: #212529;
				padding: 60px 0;
			}

			.file-upload-image {
				max-height: 200px;
				max-width: 200px;
				margin: auto;
				padding: 20px;
			}

			.remove-image {
				width: 200px;
				margin: 0;
				color: #fff;
				background: #cd4535;
				border: none;
				padding: 10px;
				border-radius: 4px;
				border-bottom: 4px solid #b02818;
				transition: all .2s ease;
				outline: none;
				text-transform: uppercase;
				font-weight: 700;
			}

			.remove-image:hover {
				background: #c13b2a;
				color: #ffffff;
				transition: all .2s ease;
				cursor: pointer;
			}

			.remove-image:active {
				border: 0;
				transition: all .2s ease;
			}

		</style>
	</head>

	<body>
		<div class="container wall"   style="padding-top: 10% ">
			<h1>สมัครสมาชิก</h1>
			<form action="check_login.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-6">
						<div class="file-upload">
							<button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

							<div class="image-upload-wrap">
								<input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*"  id = "filUpload" name="filUpload" />
								<div class="drag-text">
									<h3>Drag and drop a file or select add Image</h3>
								</div>
							</div>
							<div class="file-upload-content">
								<img class="file-upload-image" src="images/gogold.png" alt="your image"/>
								<div class="image-title-wrap">
									<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div align="left">
							<input required name="code" id="code" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="รหัสพนักงาน" autofocus style="    width: 100%;">
							<input required name="nick_name" id="nick_name" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="ชื่อเล่น" autofocus style="margin-top:10px;    width: 100%;">
							<input required name="name" id="name" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="ชื่อ" autofocus style="margin-top:10px;    width: 100%;">
							<input required name="lasname" id="lasname" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="นามสกุล" autofocus style="margin-top:10px;    width: 100%;">
							<select name="brank" id="brank" class="form-control form-control-sm" autocomplete="false" style=" margin-top: 10px;">
								<option value="1">เลือกธนาคาร</option>
								<?php for ($i=0; $i < count($data) ; $i++) { ?>
									<option value="<?php echo $data[$i]['bank_name']?>"><?php echo $data[$i]['bank_name']?></option>
								<?php } ?>
							</select>
							<input required name="account" id="account" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="เลขบัญชี" autofocus style="margin-top:10px;    width: 100%;">
							<input required name="phone" id="phone" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="เบอร์โทรศัพท์ (xxx-xxx-xxxx)" autofocus style="margin-top:10px;    width: 100%;">
							<input required name="local" id="local" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="ที่อยู่" autofocus style="margin-top:10px;    width: 100%;">
							<input required name="email" id="email" type="text" class="form-control form-control-sm" autocomplete="false" placeholder="e-mail" autofocus style="margin-top:10px;    width: 100%;">
							<input required name="password" id="password" type="text" style="margin-top:10px; width: 100%;" class="form-control form-control-sm" autocomplete="false" placeholder="Password" >
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div style="padding-top:15px;     text-align: center;" align="right" >
							<button type="submit" class="btn btn-primary" style="cursor: pointer;" >บันทึก</button>
							<button class="btn btn-primary" style="cursor: pointer;"  onclick="backpage();">กลับ</button>
						</div>
					</div>


				</form>
				
			</div>

		</body>
		<script type="text/javascript">

			function backpage(argument) {
				window.location ="index.php";
			}
			function readURL(input) {
				if (input.files && input.files[0]) {

					var reader = new FileReader();

					reader.onload = function(e) {
						$('.image-upload-wrap').hide();

						$('.file-upload-image').attr('src', e.target.result);
						$('.file-upload-content').show();

						$('.image-title').html(input.files[0].name);
					};

					reader.readAsDataURL(input.files[0]);

				} else {
					removeUpload();
				}
			}

			function removeUpload() {
				$('.file-upload-input').replaceWith($('.file-upload-input').clone());
				$('.file-upload-content').hide();
				$('.image-upload-wrap').show();
			}
			$('.image-upload-wrap').bind('dragover', function () {
				$('.image-upload-wrap').addClass('image-dropping');
			});
			$('.image-upload-wrap').bind('dragleave', function () {
				$('.image-upload-wrap').removeClass('image-dropping');
			});
		</script>
