
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
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small>
		</button>
		<div class="container">
			<div class="row">
				
				
				<div>

					<h1>Add Team Compitition </h1>
				</div>
				
				<?php for ($i=0;$i<count($compitype);$i++ ){?>
					<div class="row">
						<ul>
							<label  style="border-bottom: 1px solid #ddd;"><?php echo $compitype[$i]['compi_name'] ?></label>
							
							<?php for($j=0;$j<count($compi);$j++ ){?>
								<div class="row">
									<form method="post" action="index.php?app=admin&action=list_student_compitition">
										<?php if($compi[$j]['com_type']==$compitype[$i]['compi_name']){?>
											<div class="col-md-4" style="padding: 15px;">
												<p>
													<?php echo $compi[$j]['com_program'] ; ?>
													(<?php echo $compi[$j]['com_age']; ?>)
												</p>
											</div>
											<div class="col-md-5" >		
											</div>
											<div class="col-md-3 btn-position center-box">
												<button type="submit"  name="<?php echo $j ?>" class="Button" style="width:40% ;border-radius:28px;">List Name</button>
											</div>
											<input type="hidden" name="com_id" value="<?php echo $compi[$j]['com_id'];  ?>">
											
										</form>
									<?php }?>
								</div>	
							<?php }?>

							
						</div></ul>
					<?php } ?>
				</div>
			</div>
		</div>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script> -->
	
	
</body>


