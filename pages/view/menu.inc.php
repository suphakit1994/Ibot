<body>

	<style type="text/css">

		<?php 	$level = $_SESSION['level'];
		$name = $_SESSION['name'];
		$nlevel = $_SESSION['nlevel'];
		?>
		
		.notification {
			text-decoration: none;
			position: relative;
			padding: 5px 5px;
			display: inline-block;
			border-radius: 80%;
			size: 20px
		}

		.notification:hover {
			background: pink;
		}

		.notification .badge {
			position: absolute;
			top: -5px;
			right: -9px;
			border-radius: 50%;
			background-color: blue;
			color: white;
		}		

		.navbar-nav>li>a {
			padding-top: 15px;
			padding-bottom: 15px;
			padding-left: 15px  !IMPORTANT;
			padding-right: 15px  !IMPORTANT;
		}
		.vertical-nav {
			margin-top: ;
			min-width: 17rem;
			width: 17rem;
			height: 100vh;
			position: fixed;
			top: 0;
			left: 0;
			box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
			transition: all 0.4s;
			background-color: white;
			overflow-y: scroll;
		}

		.page-content {
			width: calc(100% );
			margin-left: 17rem;
			transition: all 0.4s;
		}

		/* for toggle behavior */
		#sidebar.active {
			margin-left: -17rem;
		}

		#content.active {
			width: 100%;
			margin: 0;
		}

		@media (max-width: 768px) {
			#sidebar {
				margin-left: -17rem;
			}
			#sidebar.active {
				margin-left: 0;
			}
			#content {
				width: 100%;
				margin: 0;
			}
			#content.active {
				margin-left: 17rem;
				width: calc(100% - 17rem);
			}
		}
		.separator {
			margin: 3rem 0;
			border-bottom: 1px dashed #fff;
		}

		.text-uppercase {
			letter-spacing: 0.1em;
		}

		.text-gray {
			color: #aaa;
		}
		.modal-backdrop{
			position: inherit !IMPORTANT;
		}
		.fc-daygrid-event{
			border-radius: 6px !IMPORTANT;
		}
		/* width */
		::-webkit-scrollbar {
			width: 10px;
		}

		/* Track */
		::-webkit-scrollbar-track {
			background: #f1f1f1; 
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #888; 
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #555; 
		}
		.a_fontoflist{
			font-size: 20px !important;
			padding: 5% !important;
		}
		.space_of_items{
			padding-top: 9%;
		}

	</style>

	<?php
	if ($level=='student') { ?>
		<nav class="navbar" style="margin-bottom: 0px;box-shadow: 0 5px 5px -2px rgb(0 0 0 / 12%);" >
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
						<div class="navbar-header">
							<div class="row">
								<div class="col-md-2" style="padding: 0px;">
									<img src="../images/Logo.jpg" style="width: 100%; padding: 0px;">
								</div>
								<div class="col-md-6" style="padding-top: 6px; padding-left: 3px;">
									<div class="row">
										<div class="col-md-12" style="height: 17px">
											<p style="font-size:14px; font-weight: 1000; ">IBE</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<p style="font-size:14px; ">Ibot Education</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-9">

						<ul class="nav navbar-nav navbar-right" style="padding-right:2%;">
							<li><a href="?app=student">Home</a></li>
							<li><a href="index.php?app=student&action=ibot_camp">Camp</a></li>
							<li><a href="index.php?app=student&action=ibot_compitition">Compitition</a></li>
							<li><a href="index.php?app=student&action=schedule">Schedule</a></li>
							<li><a href="index.php?app=student&action=mycourse">Mycourse</a></li>

							<li>
								<div class="col-sm-8" style="text-align: end;">
									<div class="row">
										<p style="padding-top:5px; font-weight: bold;"><?php echo $name; ?></p>
										<p style="margin-top:-12px;"><?php echo $nlevel; ?></p>
									</div>								

								</div>
								<div class="col-sm-4" style="align-items: center; padding-top: 5px;" >
									<div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" ><img src="../images/images.png" alt="" style="border-radius: 50%; width:45px; height:45px;"></i>
									</a>
									<ul class="dropdown-menu">
										<a href="../pages/signin/logout.php">logout</a>

									</ul>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</nav>
<?php } 
elseif ($level=='teacher') { ?>
	<nav class="navbar" style="margin-bottom: 0px;box-shadow: 0 5px 5px -2px rgb(0 0 0 / 12%);" >
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="navbar-header">
						<div class="row">
							<div class="col-md-2" style="padding: 0px;">
								<img src="../images/Logo.jpg" style="width: 100%; padding: 0px;">
							</div>
							<div class="col-md-6" style="padding-top: 6px; padding-left: 3px;">
								<div class="row">
									<div class="col-md-12" style="height: 17px">
										<p style="font-size:14px; font-weight: 1000; ">IBE</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p style="font-size:14px; ">Ibot Education</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">

					<ul class="nav navbar-nav navbar-right" style="padding-right:2%;">
						<li><a href="?app=teacher">Home</a></li>
						<li><a href="index.php?app=our_course">Course</a></li>
						<li><a href="index.php?app=report">Report</a></li>
						<li>
							<div class="col-sm-8" style="text-align: end;">
								<div class="row">
									<p style="padding-top:5px; font-weight: bold;"><?php echo $name; ?></p>
									<p style="margin-top:-12px;"><?php echo $nlevel; ?></p>
								</div>								

							</div>
							<div class="col-sm-4" style="align-items: center; padding-top: 5px;" >
								<div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" ><img src="../images/images.png" alt="" style="border-radius: 50%; width:45px; height:45px;"></i>
								</a>
								<ul class="dropdown-menu">
									<a href="../pages/signin/logout.php">logout</a>

								</ul>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
</nav>
<?php } 
elseif ($level=='admin') { ?>
	<nav class="navbar" style="margin-bottom: 0px;box-shadow: 0 5px 5px -2px rgb(0 0 0 / 12%);" >
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="navbar-header">
						<div class="row">
							<div class="col-md-2" style="padding: 0px;">
								<img src="../images/Logo.jpg" style="width: 100%; padding: 0px;">
							</div>
							<div class="col-md-6" style="padding-top: 6px; padding-left: 3px;">
								<div class="row">
									<div class="col-md-12" style="height: 17px">
										<p style="font-size:14px; font-weight: 1000; ">IBE</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p style="font-size:14px; ">Ibot Education</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">

					<ul class="nav navbar-nav navbar-right" style="padding-right:3%;">
						<li class="dropdown"><a class="dropdown-toggle notification" data-toggle="dropdown" href="#" ><i class="far fa-bell" style="font-size:30px;"></i></span>
							<span class="badge">5</a>
								<ul class="dropdown-menu">
									<li><a href="index.php?app=admin&action=employees">Franchise</a></li>
									<li><a href="index.php?app=admin&action=user">ขอสิทธ์การเข้าถึง</a></li>
								</ul>
							</li>
							<li>
								<div class="col-sm-8" style="text-align: end;">
									<div class="row">
										<p style="padding-top:5px; font-weight: bold;"><?php echo $name; ?></p>
										<p style="margin-top:-12px;"><?php echo $nlevel; ?></p>
									</div>								

								</div>
								<div class="col-sm-4" style="align-items: center; padding-top: 5px;" >
									<div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" ><img src="../images/images.png" alt="" style="border-radius: 50%; width:45px; height:45px;"></i>
									</a>
									<ul class="dropdown-menu">
										<a href="../pages/signin/logout.php">logout</a>

									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	
<?php }else{ ?>
	<nav class="navbar" style="margin-bottom: 0px;box-shadow: 0 5px 5px -2px rgb(0 0 0 / 12%);" >
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="navbar-header">
						<div class="row">
							<div class="col-md-2" style="padding: 0px;">
								<img src="../images/Logo.jpg" style="width: 100%; padding: 0px;">
							</div>
							<div class="col-md-6" style="padding-top: 6px; padding-left: 3px;">
								<div class="row">
									<div class="col-md-12" style="height: 17px">
										<p style="font-size:14px; font-weight: 1000; ">IBE</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<p style="font-size:14px; ">Ibot Education</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<ul class="nav navbar-nav navbar-right">

					</ul>

					<ul class="nav navbar-nav navbar-right" style="padding-right:2%;">
						<li><a href="?app=home">Home</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >About us<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="index.php?app=admin&action=employees">Franchise</a></li>
								<li><a href="index.php?app=admin&action=user">ขอสิทธ์การเข้าถึง</a></li>
							</ul>
						</li>

						<!-- 						<li><a href="index.php?app=test">test</a></li> -->
						<li><a href="index.php?app=our_course">Our course</a></li>
						<!-- 						<li><a href="index.php?app=jed">jed</a></li> -->
						<li><a href="index.php?app=about">About Us</a></li>
<!-- 						<li><a href="index.php?app=pdf">pdf</a></li>
	<li><a href="index.php?app=art">art</a></li> -->
	<li><a href="index.php?app=branch">Franchise</a></li>
	<li><a href="index.php?app=branch">Contact us</a></li>
	<li><a href="index.php?app=signin"  class="Button" style="padding: 2px; margin: 10px; width: 100%; text-align: center; background: linear-gradient(90deg, #0056f7 0%, #ff3ee7 100%);    border: 1px solid #ffffff;" >Sign in</a></li>

</ul>
</div>
</div>
</div>
</nav>
<?php } ?>


<hr style="margin-top: 0px; margin-bottom: 10px;">
</body>
