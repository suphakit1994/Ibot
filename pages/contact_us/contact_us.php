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
			background-color: #f1f1f1;
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
		<div class="side">
			<h2>Location</h2>
			<div id="map"></div>
		</div>
		<!-- Contaxt Text -->
		<div class="main">
			<h2>Contact US</h2>
			<div class="form_contact">
				<form action="/action_page.php">
					<label for="fname">First Name</label>
					<input type="text" id="fname" name="firstname" placeholder="Name..">

					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lastname" placeholder="last name..">

					<label for="email">E-mail</label>
					<input type="text" id="email" name="email" placeholder="E-mail..">

					<label for="country">Country</label>
					<select id="country" name="country">
						<option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
						<option value="กระบี่">กระบี่ </option>
						<option value="กาญจนบุรี">กาญจนบุรี </option>
						<option value="กาฬสินธุ์">กาฬสินธุ์ </option>
						<option value="กำแพงเพชร">กำแพงเพชร </option>
						<option value="ขอนแก่น">ขอนแก่น</option>
						<option value="จันทบุรี">จันทบุรี</option>
						<option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
						<option value="ชัยนาท">ชัยนาท </option>
						<option value="ชัยภูมิ">ชัยภูมิ </option>
						<option value="ชุมพร">ชุมพร </option>
						<option value="ชลบุรี">ชลบุรี </option>
						<option value="เชียงใหม่">เชียงใหม่ </option>
						<option value="เชียงราย">เชียงราย </option>
						<option value="ตรัง">ตรัง </option>
						<option value="ตราด">ตราด </option>
						<option value="ตาก">ตาก </option>
						<option value="นครนายก">นครนายก </option>
						<option value="นครปฐม">นครปฐม </option>
						<option value="นครพนม">นครพนม </option>
						<option value="นครราชสีมา">นครราชสีมา </option>
						<option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
						<option value="นครสวรรค์">นครสวรรค์ </option>
						<option value="นราธิวาส">นราธิวาส </option>
						<option value="น่าน">น่าน </option>
						<option value="นนทบุรี">นนทบุรี </option>
						<option value="บึงกาฬ">บึงกาฬ</option>
						<option value="บุรีรัมย์">บุรีรัมย์</option>
						<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
						<option value="ปทุมธานี">ปทุมธานี </option>
						<option value="ปราจีนบุรี">ปราจีนบุรี </option>
						<option value="ปัตตานี">ปัตตานี </option>
						<option value="พะเยา">พะเยา </option>
						<option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
						<option value="พังงา">พังงา </option>
						<option value="พิจิตร">พิจิตร </option>
						<option value="พิษณุโลก">พิษณุโลก </option>
						<option value="เพชรบุรี">เพชรบุรี </option>
						<option value="เพชรบูรณ์">เพชรบูรณ์ </option>
						<option value="แพร่">แพร่ </option>
						<option value="พัทลุง">พัทลุง </option>
						<option value="ภูเก็ต">ภูเก็ต </option>
						<option value="มหาสารคาม">มหาสารคาม </option>
						<option value="มุกดาหาร">มุกดาหาร </option>
						<option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
						<option value="ยโสธร">ยโสธร </option>
						<option value="ยะลา">ยะลา </option>
						<option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
						<option value="ระนอง">ระนอง </option>
						<option value="ระยอง">ระยอง </option>
						<option value="ราชบุรี">ราชบุรี</option>
						<option value="ลพบุรี">ลพบุรี </option>
						<option value="ลำปาง">ลำปาง </option>
						<option value="ลำพูน">ลำพูน </option>
						<option value="เลย">เลย </option>
						<option value="ศรีสะเกษ">ศรีสะเกษ</option>
						<option value="สกลนคร">สกลนคร</option>
						<option value="สงขลา">สงขลา </option>
						<option value="สมุทรสาคร">สมุทรสาคร </option>
						<option value="สมุทรปราการ">สมุทรปราการ </option>
						<option value="สมุทรสงคราม">สมุทรสงคราม </option>
						<option value="สระแก้ว">สระแก้ว </option>
						<option value="สระบุรี">สระบุรี </option>
						<option value="สิงห์บุรี">สิงห์บุรี </option>
						<option value="สุโขทัย">สุโขทัย </option>
						<option value="สุพรรณบุรี">สุพรรณบุรี </option>
						<option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
						<option value="สุรินทร์">สุรินทร์ </option>
						<option value="สตูล">สตูล </option>
						<option value="หนองคาย">หนองคาย </option>
						<option value="หนองบัวลำภู">หนองบัวลำภู </option>
						<option value="อำนาจเจริญ">อำนาจเจริญ </option>
						<option value="อุดรธานี">อุดรธานี </option>
						<option value="อุตรดิตถ์">อุตรดิตถ์ </option>
						<option value="อุทัยธานี">อุทัยธานี </option>
						<option value="อุบลราชธานี">อุบลราชธานี</option>
						<option value="อ่างทอง">อ่างทอง </option>
					</select>
					<label for="subject">Subject</label>
					<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
					<input style="border-radius: 100px;" type="submit" value="ส่งข้อความ">
				</form>
			</div>
		</div>
	</div>
	<!-- Site footer -->
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6>About</h6>
					<p class="text-justify"> © 2020 IE Thai Software Company Limited. All rights reserved.
					199/36 หมู่ที่ 5 ต. ปรุใหญ่ อ.เมือง จ. นครราชสีมา 30000</p>
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