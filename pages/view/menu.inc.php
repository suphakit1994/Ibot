<?php include_once '../php/config.php'; 

?>

<body>

	<style type="text/css">

		<?php 	
		$sql_getnoti= mysqli_query($conn,"SELECT* FROM notification WHERE status=0");
		$count = mysqli_num_rows($sql_getnoti);


		$s_level = $_SESSION['student_level'];
		$s_name = $_SESSION['student_name_eng'];
		$s_nlevel = $_SESSION['student_nlevel'];

		$t_level = $_SESSION['teacher_level'];
		$t_name = $_SESSION['teacher_fname'];
		$t_nlevel = $_SESSION['teacher_nlevel'];
		$t_image = $_SESSION['teacher_img'];

		$a_level = $_SESSION['admin_level'];
		$a_name = $_SESSION['admin_name'];
		$a_nlevel = $_SESSION['admin_nlevel'];

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
			position: relative;
			top: -25px;
			right: 10px;
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
		.count{
			position: relative;
		}

		.dropdown-menu{
			height:200px;
			overflow-y: scroll;
		}
		.dropdown-menu a:hover{
			display: inline-block;
			background-color: #d9d9d9;

		}



	</style>

	<?php
	if ($s_level=='student') {?>
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

						<ul class="nav navbar-nav navbar-right" style="padding-right:1%;">
							<li><a href="?app=student">Home</a></li>
							<li><a href="index.php?app=student&action=ibot_camp">Camp</a></li>
							<li><a href="index.php?app=student&action=ibot_compeitition">Compeitition</a></li>
							<li><a href="index.php?app=student&action=schedule">Schedule</a></li>
							<li style="padding-right: 20px;"><a href="index.php?app=student&action=mycourse">Mycourse</a></li>

							<li>
								<div class="col-sm-5" style="text-align: end;">
									<div class="row">
										
										<?php if (strlen($s_name) >= 8) { ?>
											<p style="padding-top:5px; margin-bottom: 0px; font-weight: bold;">  <?php echo mb_substr($s_name,0,8)."..."; ?></p>
										<?php }else{?>
											<p style="padding-top:5px; margin-bottom: 0px; font-weight: bold;"><?php echo $s_name; } ?></p>
											<p><?php echo $s_nlevel; ?></p>
										</div>								

									</div>
									<div class="col-sm-7" style="align-items: center; padding-top: 5px;" >
										<div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" ><img src="../images/images.png" alt="" style="border-radius: 50%; width:45px; height:45px;"></i>

										</a>
										<ul class="dropdown-menu" style="overflow: hidden; height: 50px;text-align: left;">
											<a type="button" style="font-size: 19px; padding:4%;width: 100%;"href="../pages/signin/logout.php">Signout <i class="fas fa-sign-out-alt"></i></a>
											<hr style="width:100%;text-align:left;margin-top:0">

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
	elseif ($t_level=='teacher') { ?>
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

						<ul class="nav navbar-nav navbar-right" style="padding-right:1%;">
							<li><a href="?app=teacher">Home</a></li>
							<li style="padding-right: 20px;"><a href="index.php?app=teacher&action=our_course">Course</a></li>

							<li>
								<div class="col-sm-5" style="text-align: end;">
									<div class="row">
										<?php if (strlen($t_name) > 8) {
											echo mb_substr($t_name,0,8)."...";
										}else{?>
											<p style="padding-top:5px; margin-bottom: 0px; font-weight: bold;"><?php 
											echo $t_name; } ?></p>




											<p ><?php echo $t_nlevel; ?></p>
										</div>								
									</div>

									<div class="col-sm-7" style="align-items: center; padding-top: 5px;" >
										<div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" ><img src="../teacher_img/<?php echo $t_image; ?>" alt="" style="object-fit:cover ;border-radius: 50%; width:45px; height:45px;"></i>
										</a>
										<ul class="dropdown-menu" style="overflow: hidden; height: 50px;text-align: left;">
											<a type="button" style="font-size: 19px; padding:4%;width: 100%;"href="../pages/signin/logout.php">Signout <i class="fas fa-sign-out-alt"></i></a>
											<hr style="width:100%;text-align:left;margin-top:0">

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
	elseif ($a_level=='admin') { ?>
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

						<ul class="nav navbar-nav navbar-right" style="padding-right:1%; ">
							<li class="dropdown" style="padding-right: 20px;"><a class="dropdown-toggle notification" data-toggle="dropdown" href="#" ><i class="far fa-bell" style="border-radius: 50%; font-size:30px;"></i></span>

								<span class="badge" id="count"><?php echo $count; ?></a>
									<ul class="dropdown-menu" style="padding-left: 10px; height: 100%; padding-top: 9px; padding-right: 10px;">

<!-- 									$sql_getdata= mysqli_query($conn,"SELECT* FROM notification WHERE status=0");

									if(mysqli_num_rows($sql_getdata)>0)
									{
										while ($result = mysqli_fetch_assoc($sql_getdata)) 
										{
											$keys = $result['course_id'];
											$name_course = mysqli_query($conn,"SELECT course_expension FROM course WHERE course_id=$keys ");
											echo  -->

											<a class="dropdown-item text-primary font-weight-bold" href="index.php?app=admin&action=list_msg" style="font-size: 18px; width: 100%;">การแจ้งเตือน<i class="far fa-bell"></i></a>
											

											<!-- ?> -->
											<hr style="width:100%;text-align:left;margin-top:0">

											
											<!-- } -->
<!-- 									}else{
										echo '<a class="dropdown-item text-danger font-weight-bold" href="#"><i class="fas fa-frown-open"></i> Sorry ! No Messages</a>';
									} ?> -->
								</ul>
							</li>
							<li>
								<div class="col-sm-5" style="text-align: end;">
									<div class="row">
										


										<?php if (strlen($a_name) > 8) {
											echo mb_substr($a_name,0,8)."...";
										}else{?>
											<p style="padding-top:5px; margin-bottom: 0px; font-weight: bold;"><?php 
											echo $a_name; } ?></p>



											<p ><?php echo $a_nlevel; ?></p>




										</div>								

									</div>
									<div class="col-sm-7" style=" padding-top: 5px;" >
										<div class="dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" >
												<img src="../images/images.png" alt="" style="border-radius: 50%; width:45px; height:45px;">
												<span class="caret"></span>
											</a>
											<ul class="dropdown-menu" style="overflow: hidden; height: 50px;text-align: left;">
												<a type="button" style="font-size: 19px; padding:4%;width: 100%;"href="../pages/signin/logout.php">Signout <i class="fas fa-sign-out-alt"></i></a>
												<hr style="width:100%;text-align:left;margin-top:0">

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

								<!-- 						<li><a href="index.php?app=test">test</a></li> -->
								<li><a href="index.php?app=our_course">Our course</a></li>
								<!-- 						<li><a href="index.php?app=jed">jed</a></li> -->
								<li><a href="index.php?app=about">About Us</a></li>
<!-- 						<li><a href="index.php?app=pdf">pdf</a></li>
	<li><a href="index.php?app=art">art</a></li> -->

	<li><a href="index.php?app=contact_us">Contact us</a></li>
	<li><a href="index.php?app=signin"  class="Button" style="padding: 2px; margin: 10px; width: 100%; text-align: center; background: linear-gradient(90deg, #0056f7 0%, #ff3ee7 100%);    border: 1px solid #ffffff;" >Sign in</a></li>

</ul>
</div>
</div>
</div>
</nav>
<?php } ?>


<hr style="margin-top: 0px; margin-bottom: 10px;">
</body>
