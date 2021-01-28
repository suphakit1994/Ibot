
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/yourcode.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script src="../lib/datetimepicker/jquery.datetimepicker.full.js"></script>
	<link rel="stylesheet" href="../lib/datetimepicker/jquery.datetimepicker.css">
	<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.css"> 
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
	$varialble_quest = quiz($conn);
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<form action="" method="POST" accept-charset="utf-8">
					<?php for($i=0; $i<count($varialble_quest); $i++){?>
						<div class="row">
							<div class="col-md-12" style="border: 1px solid #D3D3D3; padding: 10px;">
								<h3>
									<?php echo $i; ?> :<?php echo $varialble_quest[$i]['quest'];?>
								</h3>
								<label>
									<input type="radio" name="<?php echo $i; ?>" value="">
									<?php echo $varialble_quest[$i]['select_a'];?>
								</label><br>
								<label>
									<input type="radio" name="<?php echo $i; ?>" value="">
									<?php echo $varialble_quest[$i]['select_b'];?>
								</label><br>
								<label>
									<input type="radio" name="<?php echo $i; ?>" value="">
									<?php echo $varialble_quest[$i]['select_c'];?>
								</label><br>
								<label>
									<input type="radio" name="<?php echo $i; ?>" value="">
									<?php echo $varialble_quest[$i]['select_d'];?>
								</label><br>
							</div>
						</div>
					<?php }?>
				</form>
			</div>
		</div>
	</div>	
</body>