<body>

	<style type="text/css">

		<?php 	$level = $_SESSION['level'];
		$name = $_SESSION['name'];
		$nlevel = $_SESSION['nlevel'];
		?>
		
		.notification {
			text-decoration: none;
			position: relative;
			padding: 5px 10px;
			display: inline-block;
			border-radius: 80%;
			size: 50px
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
							<li><a href="?app=home">Home</a></li>
							<li><a href="index.php?app=camp">Camp</a></li>
							<li><a href="index.php?app=compitition">Compitition</a></li>
							<li><a href="index.php?app=schedule">Schedule</a></li>
							<li><a href="index.php?app=mycourse">Mycourse</a></li>

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
						<li><a href="?app=home">Home</a></li>
						<li><a href="index.php?app=course">Course</a></li>
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
<?php } 
elseif ($level=='superadmin') { ?>
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
						<li class="dropdown"><a class="dropdown-toggle notification" data-toggle="dropdown" href="#" ><i class="far fa-bell" style="font-size:30px;"></i>
							<span class="badge">5</a></span>
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
						<li><a href="index.php?app=about">About Us</a></li>
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
