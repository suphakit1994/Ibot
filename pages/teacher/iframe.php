
<head>
	<style type="text/css" media="screen">
		
	</style> 
</head>

<body>
	
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