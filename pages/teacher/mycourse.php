<style type="text/css" media="screen">
	
	.row{
		margin-left: unset!important;
		margin-right: unset!important;
	}
	/* width */
	::-webkit-scrollbar {
		width: 10px;
	}
	/* Track */
	::-webkit-scrollbar-track {
		background: #ffffff; 
	}
	/* Handle */
	::-webkit-scrollbar-thumb {
		background: #888; 
	}
	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #555;
	}
	.flex{
		height: 100%;
	}
	.secound_column{
		padding: 2%;
	}
	.font_bold{
		font-size:15px ;
	}
	.vertical-menu {
		width: 100%;
	}

	.vertical-menu a {
		background-color: #eee;
		color: black;
		display: block;
		padding: 12px;
		text-decoration: none;
	}

	.vertical-menu a:hover {
		background-color: #ccc;
	}
	.container {
		display: block;
		position: relative;
		padding-left: 35px !important;
		margin-bottom: 12px;
		cursor: pointer;
		font-size: 15px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	/* Hide the browser's default checkbox */
	.container input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
		height: 0;
		width: 0;
	}
	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		border-radius: 3px;
		background-color: white;
	}
	/* On mouse-over, add a grey background color */
	.container:hover input ~ .checkmark {
		background-color: grey;
	}

	/* When the checkbox is checked, add a blue background */
	.container input:checked ~ .checkmark {
		background-color: #2196F3;
	}

	/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}

	/* Show the checkmark when checked */
	.container input:checked ~ .checkmark:after {
		display: block;
	}

	/* Style the checkmark/indicator */
	.container .checkmark:after {
		left: 9px;
		top: 3px;
		width: 7px;
		height: 16px;
		border: solid white;
		border-width: 0 3px 3px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
	}
	.card {
		box-shadow: 0 0px 0px 0 rgb(0 0 0), 0 0px 0px 0 rgba(0, 0, 0, 0.0) !important;
		width: 100%;
		padding-bottom: 0px !important;
		background-color: #eee;
		margin: 1%;
	}
	.icon_posit{

	}

</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<div>
				<div class="col-sm-7" style="height: 80vh ;overflow-y: scroll;">
					<div id="demo">
						<div class="flex">
							<h1>Wellcome</h1>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-sm-5">
				<div style="height: 80vh ;width: 100%;overflow-y: scroll;">
					<div class="row"style="margin:2%;">

						<div class="vertical-menu">
							<?php for($i=0;$i<count($get_pdf);$i++){?>
								<div class="card">
									<div class="dropdown" style="">

										<a style="font-size: 20px;" href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-<?php echo $i;?>" aria-haspopup="true" aria-expanded="false">
											<b style="">Chapter<?php echo $get_pdf[$i]['number'];?></b> <i style="" class="fa fa-angle-down"></i>
										</a>

										<div id="submenu-<?php echo $i;?>" class="collapse">
											<div>
												<a onclick="getPdf('<?php echo $get_pdf[$i]['file_address']; ?>')">
													<label class="container">
														<input type="checkbox">
														<span class="checkmark"></span>
														Book<?php echo $get_pdf[$i]['number']; ?>
													</label>
													<p><i class="fas fa-book"></i> PDF File <?php echo $get_pdf[$i]['file_address']; ?></p>
												</a>
												<a onclick="getExe()">
													<label class="container">
														<input type="checkbox">
														<span class="checkmark"></span>
														Exercise
													</label>
													<p><i class="fas fa-pencil-alt"></i> Exercise</p>
												</a>
											</div>
										</div>
									</div>
								</div>
							<?php }?>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row secound_column">
				<div class="col-sm-7">
					<p class="font_bold">
						<b>About this course</b>
					</p>
					<div class="row">
						<div class="col-sm-4">
							<p>Course</p>
							<p>Student name</p>
							<p>Teacher assisstant</p>
							<p>Lectures</p>
							<p>Student times</p>
						</div>
						<div class="col-sm-8">
							<?php for($i=0;$i<count($func_id_course);$i++){?>
								<p><?php echo $func_id_course[$i]['course_expension'];?></p>
							<?php }?>
							<p>Tipparporn Konsri</p>
							<p>Pongsakorn Sorankorn</p>
							<p>8</p>
							<p>12 hours</p>
						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<p class="font_bold">
						<b>Certificate Request</b>
					</p>
					<div>
						<img style="object-fit:cover ;" src="../images/Logo.jpg" width="100%" height="180px" alt="Image">
					</div>
					<a class="Button" href="" style="width: 40%; padding: 1%;">Request Certificate</a> 
				</div>
				<!-- <iframe src="../pless/pdf_6012382315743file1.pdf" width="100%" height="600px"></iframe> -->
				<!-- <iframe src="teacher/iframe.php" width="100%" height="auto"></iframe> -->
			</div>
		</div>
	</div>\
	
</body>
<script>
	function getPdf(pdf) {
		document.getElementById("demo").innerHTML = '<iframe src="' + '../pless/' + pdf + '" width="100%" height="600px"></iframe>';
	}
	function getExe() {
		document.getElementById("demo").innerHTML = '<iframe src="teacher/iframe.php" width="100%" height="600px"></iframe>';
	}

	// $( "div:contains('Wellcome')" ).html("<b>world!</b>");
	// $("p").html("Hello <b>world!</b>");
</script>
<!-- <?php for($i=0;$i<count($get_pdf);$i++){ ?>
						<div class="row">
							<div class="col-md-12" style="font-size: 15px ;border: 1px solid #D3D3D3; padding-left: 5%; padding-top: 2%;padding-bottom: 2%;">
								<input type="radio" name="<?php echo $i; ?>">
								<a href="#"onclick="myFunction('<?php echo $get_pdf[$i]['file_address']; ?>')" ><?php echo $get_pdf[$i]['file_address']; ?></a>
							</div>
						</div>
					<?php }?> -->