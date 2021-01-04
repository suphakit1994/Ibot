<head>
	<script
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwLzJ3KpWzwz73Dd-yhQUrkmsZ2JoLZpU&callback=initMap&libraries=&v=weekly"
	defer
	></script>
	<style type="text/css">
		/* Set the size of the div element that contains the map */
		#map {
			height: 400px;
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
		.map-box{
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			width: 100vw;
			height: 60vh;
			margin: 2%;
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
		<div class="img-header">
			<h1 style="font-size: 50px; color: white; font-family:Impact;">Expanding learning opportunities</h1>
		</div>
		<!--The div element for the map -->
		<div class="map-box">
			<h2>Location</h2>
			<div id="map" style="display: flex; width: 70%; height: 100%;"></div>
		</div>
		<div class="div_contactus">
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

					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
		
	</div>
</body>