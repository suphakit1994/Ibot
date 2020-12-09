<body>
	<div class="container">
		<div class="row" >
			<div class="col-md-12">
				<h1 style="text-align: center;font-weight: bold(700); padding-top: 3%; font-family: poppins; font-size: 35px;">
					<b>ABOUT US</b>
				</h1>
			</div>	
			<div class="col-md-12">
				<p style="text-align: center; font-size: 15px;">
					Loerm ipsum dolors sit amet.consectetuer adipiscing edit.sed diam<br>
					nonummy nibh euismod urt laoreet dolore mayna.
				</p>
			</div>	
			<div class="col-md-12">
				<div class="row" style="background: linear-gradient(90deg, #0056f7 0%, #ff3ee7 100%); height: 359px; margin-top: 9%; border-radius: 15px; display:flex; align-items: center; margin-bottom: 0 !important; ">
					<div class="col-sm-5">
						<img src="../images/Logo.jpg" class="img-rounded" alt="Cinque Terre" width="320px" height="450px" style="position: absolute;top:-270px;">
					</div>
					<div class="col-sm-7" style="margin: auto;">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">

							<ol class="carousel-indicators" style="margin-bottom: -15%;">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<?php for ($i=1; $i < count($cus) ; $i++) {  ?>
									<li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li>
								<?php }?>

							</ol>

							<div class="carousel-inner">
								<?php for ($i=0; $i < count($cus) ; $i++) {  ?>
									<div class="item <?php if($i==0){ echo("active");}?> ">
										<h1 style="margin-bottom: 5%; color: white;">
											<?php echo $cus[$i]['haed']; ?>
										</h1>
										<p style="font-size: 15px; color: white;">
											<?php echo $cus[$i]['article']; ?>
										</p>
									</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<h1 style="text-align: center; padding-top: 5%; padding-bottom: 5; padding-bottom: 2%;">
					Our Team
				</h1>	
				<div class="row" style="display: flex; margin-bottom: 0 !important; align-items: center; text-align: center;">
					<div class="col-sm-4">
						<img src="../images/Logo.jpg" class="img-circle" alt="Cinque Terre" width="150" height="150"> 
						<p>
							<b>Posittion</b><br>
							Name Lastname
						</p>
					</div>
					<div class="col-sm-4">
						<img src="../images/Logo.jpg" class="img-circle" alt="Cinque Terre" width="150" height="150"> 
						<p>
							<b>Posittion</b><br>
							Name Lastname
						</p>
					</div>
					<div class="col-sm-4" >
						<img src="../images/Logo.jpg" class="img-circle" alt="Cinque Terre" width="150" height="150"> 
						<p>
							<b>Posittion</b><br>
							Name Lastname
						</p>

					</div>
				</div>
			</div>
			<div class="col-md-12">
				<h1 style="text-align: center; padding-top: 10%; padding-bottom: 5%;">Certificate</h1>  
				<div id="myCarousel1" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php for ($i=0; $i < count($cer) ; $i++) {  ?>
							<div class="item <?php if($i==0){ echo("active");}?>">
								<div class="row" style="display: flex; margin-bottom: 0 !IMPORTANT; align-items: center;">
									<div class="col-sm-6">
										<img src="../images/art.png" alt="Chicago" style="width:100%;">
									</div>
									<div class="col-sm-6">
										<h3>
											<?php echo $cer[$i]['head']; ?>
										</h3>
										<p>
											<?php echo $cer[$i]['article']; ?>
										</p>
									</div>
								</div>
							</div>
						<?php }?>
					</div>
					<a class="left carousel-control" href="#myCarousel1" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel1" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-md-12" style="margin-bottom: 5%;">
				<h1 style="text-align: center; padding-top: 10%; padding-bottom: 5%;">Our Performance</h1>  
				<div id="myCarousel2" class="carousel slide" data-ride="carousel">

					<div class="carousel-inner">
						<?php for ($i=0; $i < count($per) ; $i++) {  ?>
							<div class="item <?php if($i==0){ echo("active");}?>">
								<div class="row" style="display: flex; margin-bottom: 0 !IMPORTANT; align-items: center;">
									<div class="col-sm-6">
										<img src="../images/art.png" alt="Chicago" style="width:100%;">
									</div>
									<div class="col-sm-6">
										<h3>
											<?php echo $per[$i]['head']; ?>
										</h3>
										<p>
											<?php echo $per[$i]['article']; ?>
										</p>
									</div>
								</div>
							</div>
						<?php }?>	
					</div>
					<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel2" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>