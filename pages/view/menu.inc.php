<body>

	<style type="text/css">
		
		
		.navbar-nav>li>a {
			padding-top: 15px;
			padding-bottom: 15px;
			padding-left: 15px  !IMPORTANT;
			padding-right: 15px  !IMPORTANT;
		}

	</style>

	<?php 
	if ($_SESSION['level']=='student') { ?>
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

						<ul class="nav navbar-nav navbar-right">
							<li><a href="?app=home">Home</a></li>
							<li><a href="?app=camp">Camp</a></li>
							<li><a href="index.php?app=compitition">Compitition</a></li>
							<li><a href="index.php?app=schedule">Schedule</a></li>
							<li><a href="index.php?app=mycourse">My Course</a></li>
							<li style="padding-right: 10px;">
								<div class="col-sm-9" style="text-align: end;">
									<div class="row">
										<p style="padding-top:5px; font-weight: bold;">Fullname Lastname</p>
										<p style="margin-top:-12px;">Student user</p>
									</div>								
									
								</div>
								<div class="col-sm-3" style="align-items: center; padding-top: 5px;" >
<!-- 									<div class="collapse navbar-collapse" id="navbar-list-4">
										<ul class="navbar-nav">
											<li class="nav-item dropdown">
												<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<img src="../images/images.png" alt="" style="border-radius: 50%; width:45px; height:45px;">
												</a>
												<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
													<a class="dropdown-item" href="#">Dashboard</a>
													<a class="dropdown-item" href="#">Edit Profile</a>
													<a class="dropdown-item" href="#">Log Out</a>
												</div>
											</li>   
										</ul>
									</div> -->


									<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="caret"></span>
										<img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle"></a>
										<ul class="dropdown-menu">
											<li><a href="index.php?app=admin&action=employees">Franchise</a></li>
											<li><a href="index.php?app=admin&action=user">ขอสิทธ์การเข้าถึง</a></li>
										</ul>
									</li>


								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</nav>
	<?php } 
	elseif ($_SESSION['level']=='teacher') { ?>
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

						<ul class="nav navbar-nav navbar-right">
							<li><a href="?app=home">Home</a></li>
							<li><a href="index.php?app=course">Course</a></li>
							<li><a href="index.php?app=report">Report</a></li>
							<li style="padding-right: 10px;">
								<div class="col-sm-9" style="text-align: end;">
									<div class="row">
										<p style="padding-top:5px; font-weight: bold;">Fullname Lastname</p>
										<p style="margin-top:-12px;">Teacher Assistance</p>
									</div>								
									
								</div>
								<div class="col-sm-3" style="align-items: center; padding-top: 5px;" >
									<img src="../images/images.png" alt="" style="border-radius: 50%; width:45px; height:45px;">	
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</nav>
	<?php } 
	elseif ($_SESSION['level']=='admin') { ?>
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

						<ul class="nav navbar-nav navbar-right">
							<li style="padding-right: 10px;">
								<div class="col-sm-9" style="text-align: end;">
									<div class="row">
										<p style="padding-top:5px; font-weight: bold;">Fullname Lastname</p>
										<p style="margin-top:-12px;">Teacher Assistance</p>
									</div>								
									
								</div>
								<div class="col-sm-3" style="align-items: center; padding-top: 5px;" >
									<img src="../images/images.png" alt="" style="border-radius: 50%; width:45px; height:45px;">	
								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</nav>
	<?php } 
	elseif ($_SESSION['level']=='superadmin') { ?>
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

						<ul class="nav navbar-nav navbar-right">
							<li style="padding-right: 10px;">
								<div class="col-sm-9" style="text-align: end;">
									<div class="row">
										<p style="padding-top:5px; font-weight: bold;">Fullname Lastname</p>
										<p style="margin-top:-12px;">Teacher Assistance</p>
									</div>								
									
								</div>
								<div class="col-sm-3" style="align-items: center; padding-top: 5px;" >
									<img src="../images/images.png" alt="" style="border-radius: 50%; width:45px; height:45px;">	
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

						<ul class="nav navbar-nav navbar-right">
							<li><a href="?app=home">Home</a></li>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >About us<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="index.php?app=admin&action=employees">Franchise</a></li>
									<li><a href="index.php?app=admin&action=user">ขอสิทธ์การเข้าถึง</a></li>
								</ul>
							</li>

							<li><a href="index.php?app=test">test</a></li>
							<li><a href="index.php?app=faii">Our course</a></li>
							<li><a href="index.php?app=jed">jed</a></li>
							<li><a href="index.php?app=about">About Us</a></li>
							<li><a href="index.php?app=pdf">pdf</a></li>
							<li><a href="index.php?app=art">art</a></li>
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
