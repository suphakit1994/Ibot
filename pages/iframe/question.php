<head>

	<style>

	</style>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "root123456";
	$dbname = "ibot";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	mysqli_set_charset($conn, "utf8");

	function quiz(mysqli $conn){
		$sql = "SELECT * FROM `mycourse_quiz` WHERE 1 ";
		if ($result = mysqli_query($conn,$sql, MYSQLI_USE_RESULT)) {
			$data =[];
			while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
				$data[] = $row;
			}
			$result->close();
			return $data;
		}
	}
	$qq = quiz($conn);
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="POST" accept-charset="utf-8">
					<?php for($i=0; $i<count($qq); $i++){?>
						<div class="row">
							<div class="col-md-12" style="border: 1px solid #D3D3D3; padding: 10px;">
								<h3>
									Question :<?php echo $qq[$i]['quest'];?>
								</h3>
								<label>
									<input type="radio" name="<?php echo $i; ?>" value="">
									<?php echo $qq[$i]['select_a'];?>
								</label><br>
								<label>
									
									<input type="radio" name="<?php echo $i; ?>" value="">
									<?php echo $qq[$i]['select_b'];?>
								</label><br>
								<label>
									<input type="radio" name="<?php echo $i; ?>" value="">
									<?php echo $qq[$i]['select_c'];?>
								</label><br>
								<label>
									<input type="radio" name="<?php echo $i; ?>" value="">
									<?php echo $qq[$i]['select_d'];?>
								</label><br>
							</div>
						</div>
					<?php }?>
					<input type="Button" value="Submit">
				</form>
			</div>
		</div>
	</div>	
</body>