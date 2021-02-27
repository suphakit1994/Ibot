<head>
	<script
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwLzJ3KpWzwz73Dd-yhQUrkmsZ2JoLZpU&callback=initMap&libraries=&v=weekly"
	defer
	></script>

	<style type="text/css">
		/* Set the size of the div element that contains the map */
		#map {
			height: 70%;
			/* The height is 400 pixels */
			width: 100%;
			/* The width is the width of the web page */
		}
		body{
			font-family: Arial;
		}
		.flex-container{
			display: flex;
			flex-wrap: wrap;
		}
		.img-header{
			display: flex;
			justify-content: center;
			align-items: center;
			width: 100vw;
			height: 60vh;
			background-image: url('../images/camp.jpg');
		}
		.side {
			flex: 60%;
			background-color:#26272b;
			padding: 20px;
		}

		/* Main column */
		.main {
			flex: 40%;
			background-color: white;
			padding: 20px;
		}
		.form_contact {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
		}
		.div_contactus{
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 4%;
		}
		/* footer */
		.site-footer
		{
			background-color:#26272b;
			padding:45px 0 20px;
			font-size:15px;
			line-height:24px;
			color:#737373;
		}
		.site-footer hr
		{
			border-top-color:#bbb;
			opacity:0.5
		}
		.site-footer hr.small
		{
			margin:20px 0
		}
		.site-footer h6
		{
			color:#fff;
			font-size:16px;
			text-transform:uppercase;
			margin-top:5px;
			letter-spacing:2px
		}
		.site-footer a
		{
			color:#737373;
		}
		.site-footer a:hover
		{
			color:#3366cc;
			text-decoration:none;
		}
		.footer-links
		{
			padding-left:0;
			list-style:none
		}
		.footer-links li
		{
			display:block
		}
		.footer-links a
		{
			color:#737373
		}
		.footer-links a:active,.footer-links a:focus,.footer-links a:hover
		{
			color:#3366cc;
			text-decoration:none;
		}
		.footer-links.inline li
		{
			display:inline-block
		}
		.site-footer .social-icons
		{
			text-align:right
		}
		.site-footer .social-icons a
		{
			width:40px;
			height:40px;
			line-height:40px;
			margin-left:6px;
			margin-right:0;
			border-radius:100%;
			background-color:#33353d
		}
		.copyright-text
		{
			margin:0
		}
		@media (max-width:991px)
		{
			.site-footer [class^=col-]
			{
				margin-bottom:30px
			}
		}
		@media (max-width:800px)
		{
			.site-footer
			{
				padding-bottom:0
			}
			.site-footer .copyright-text,.site-footer .social-icons
			{
				text-align:center
			}
		}
		.social-icons
		{
			padding-left:0;
			margin-bottom:0;
			list-style:none
		}
		.social-icons li
		{
			display:inline-block;
			margin-bottom:4px
		}
		.social-icons li.title
		{
			margin-right:15px;
			text-transform:uppercase;
			color:#96a2b2;
			font-weight:700;
			font-size:13px
		}
		.social-icons a{
			background-color:#eceeef;
			color:#818a91;
			font-size:16px;
			display:inline-block;
			line-height:44px;
			width:44px;
			height:44px;
			text-align:center;
			margin-right:8px;
			border-radius:100%;
			-webkit-transition:all .2s linear;
			-o-transition:all .2s linear;
			transition:all .2s linear
		}
		.social-icons a:active,.social-icons a:focus,.social-icons a:hover
		{
			color:#fff;
			background-color:#29aafe
		}
		.social-icons.size-sm a
		{
			line-height:34px;
			height:34px;
			width:34px;
			font-size:14px
		}
		.social-icons a.facebook:hover
		{
			background-color:#3b5998
		}
		.social-icons a.google:hover
		{
			background-color:#ea4c89
		}
		.social-icons a.mail:hover
		{
			background-color:#007bb6
		}
		@media (max-width:767px)
		{
			.social-icons li.title
			{
				display:block;
				margin-right:0;
				font-weight:600
			}
		}
		/* Text Contaxt */
		input[type=text], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

	</style>
	<script>
      // Initialize and add the map
      function initMap() {
        // The location of iethaisoftware
        const iethaisoftware = { lat: 14.9416852, lng: 102.0484363 };
        // The map, centered at iethaisoftware
        const map = new google.maps.Map(document.getElementById("map"), {
        	zoom: 15,
        	center: iethaisoftware,
        });
        // The marker, positioned at IE Thaisoftwate
        const marker = new google.maps.Marker({
        	position: iethaisoftware,
        	map: map,
        });
    }
</script>
</head>
<body>
	<div class="flex-container">
		<!-- Image backdrop -->
		<div class="img-header">
			<h1 style="font-size: 50px; color: white; font-family:Impact;">Expanding learning opportunities</h1>
		</div>
		<!-- Location map -->
		<div class="side" style="background-color: #f1f1f1; padding: 20px;">
			<h1>Location</h1>
			<div id="map"></div>
		</div>
		<!-- Contaxt Text -->
		<div class="main" style="padding-bottom: 450px;">
			<h1>Contact US</h1>
			<div class="form_contact">

				<label for="fname">Address</label>
				<p class="text-justify">199/36 หมู่ที่ 5 ต. ปรุใหญ่ อ.เมือง จ. นครราชสีมา 30000</p>

				<label for="lname">Phone Number</label>
				<p class="text-justify">089-7178817 (แอดมิน)</p>

				<label for="email">E-mail</label>
				<p class="text-justify">info@iethaisoftware.com</p>


			</div>
		</div>
	</div>
	<!-- Site footer -->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6>About</h6>
					<p class="text-justify">Ibot Education is................ ................................... .............................................................</p>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6>Categories</h6>
					<ul class="footer-links">
						<li><a href="http://scanfcode.com/category/c-language/">Ibot Education</a></li>
						<li><a href="http://scanfcode.com/category/front-end-development/">IE Thaisoftware</a></li>
					</ul>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6>Quick Links</h6>
					<ul class="footer-links">
						<li><a href="http://scanfcode.com/about/">About Us</a></li>
						<li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
						<li><a href="http://scanfcode.com/contribute-at-scanfcode/">Home</a></li>
						<li><a href="http://scanfcode.com/privacy-policy/">Our Course</a></li>
						<li><a href="http://scanfcode.com/sitemap/">Sign In</a></li>
					</ul>
				</div>
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
				</div>
				<div class="col-md-4 col-sm-6 col-xs-12">
					<ul class="social-icons">
						<li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a class="google" href="#"><i class="fab fa-google-plus-g"></i></a></li>
						<li><a class="mail" href="#"><i class="fas fa-envelope"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</body>