<style>
	table {
		border-collapse: collapse;
		width: 100%;
	}

	th, td {
		padding: 18px !important;
		text-align: left;
		border-bottom: 1px solid #ddd;
	}

	tr:hover {background-color:#f5f5f5;}
</style>
<body>
	<div class="page-content p-5" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row" style="display: flex; align-items: center;">
						<div class="col-sm-6">
							<div style="display: flex;justify-content: flex-start">
								<h1>Compitition List</h1>
							</div>
						</div>
						<div class="col-sm-6">
							<div style="display: flex;justify-content: flex-end">
								<a class="btn btn-primary" type="" style="padding: 4px;" href="index.php?app=admin&action=admin_compitition_add">+ Add New</a>
							</div>
						</div>
					</div>		
				</div>
				<div class="col-sm-12">
					<table>
						<tr>
							<th>Compitition</th>
							<th>Program</th>
							<th>Age for program</th>
							<th></th>
							<th></th>
							
						</tr>
						<?php for($i = 0; $i< count($compi); $i++){ ?>
							<tr>
								<td><?php echo $compi[$i]['com_type']; ?></td>
								<td><?php echo $compi[$i]['com_program']; ?></td>
								<td><?php echo $compi[$i]['com_age']; ?></td>
								<td></td>
								
								<td>
									<div class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:24px;"><span>&#8942;</span></a>
										<ul class="dropdown-menu" style="overflow: hidden; height:auto;text-align: left;min-width: 0;">

											<li>
												<form method="post" action="index.php?app=admin&action=admin_compitition_edit">
													<a ><button type="submit" name= "<?php echo $i ?>" class=" btn btn:hover">
														<i class="far fa-edit" style="font-size:15px"></i>	
													Edit </button></a>
													<input type="hidden" name="com_id" value="<?php echo $compi[$i]['com_id'];  ?>" > 
												</form>
											</li>
											<li><button class=" btn btn:hover"><a  href="#" data-toggle="modal" data-target="#delete_confirm<?php echo $i;?>" ><i class="fas fa-trash" style="font-size:15px"></i> Delete</a></button></li>
										</ul>
									</div>
								</td>
							</tr>
							<div class="modal" id="delete_confirm<?php echo $i;?>" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content" >
										<form action="index.php?app=admin&action=admin_compitition_delete" method="post">
											<div class="modal-body" style="margin: 68px 0px 0px 0px;">
												<h3 style="text-align: center;">Are you Sure to Delete : <?php echo $compi[$i]['com_program'];?> ?</h3>
												<div class="modals_end" style="margin: 41px 0px 0px 0px;">
													<input class="btn btn-success" style="margin: 2%;" type="submit" name="" value="OK">

													<button class="btn btn-danger" style="margin: 2%;" type="button" onclick="document.getElementById('delete_confirm<?php echo $i;?>').style.display='none'">Cancel</button>
													<input type="hidden" name="com_id" value="<?php echo $compi[$i]['com_id'];  ?>" > 
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						<?php }?>
					</table>
				</div>
			</div>
		</div>
	</div>	
</body>
