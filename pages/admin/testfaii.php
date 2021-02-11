
<meta charset="utf-8">
<style>
	.long {
		text-overflow: ellipsis;
		white-space: nowrap;
		overflow: hidden;
	}
	body{background-color: grey;}
	p{color: #000000;}
	#additionalOptions{display:none;}
</style>
<body>
	
	<div class="page-content p-5" id="content">
		<div class="container">
			<div class="row">
				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small>
				</button>
				<div>

					<h1>Add Team Compitition </h1>
				</div>
				
				<?php for ($i=0;$i<count($compitype);$i++ ){?>
					<div class="row">
						<ul>
							<label><?php echo $compitype[$i]['compi_name'] ?></label>
							<form method="post" action="index.php?app=student&action=payment_compeitition">
								<?php for($j=0;$j<count($compi);$j++ ){?>
									
									<div class="row">
										<?php if($compi[$j]['com_type']==$compitype[$i]['compi_name']){?>
											<div class="col-md-4" style="padding: 15px;">
												
												
												<p>
													<?php echo $compi[$j]['com_program']; ?>
													(<?php echo $compi[$j]['com_age']; ?>)
												</p>
												

											</div>
											<div class="col-md-5" >		
											</div>
											<div class="col-md-3 btn-position center-box">
												<button type="submit"  name="<?php echo $i ?>" class="Button" style="width:40% ;border-radius:28px;">Add Team</button>
											</div>

											<input type="hidden" name="com_id" value="<?php echo $compi[$i]['com_id'];  ?>">
										<?php }?>
									</div>

									
								<?php }?>
							</form>
						</div></ul>
					<?php } ?>

				</div>
			</div>
		</div>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script> -->
	
	
</body>


