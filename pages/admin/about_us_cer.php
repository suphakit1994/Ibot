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
								<h1 style="font-weight: bold; ">About Us / Certificate</h1>
							</div>
						</div>

					</div>		
				</div>
				<div class="col-sm-12">
					<table>
						<tr>
							<th>Name</th>
							<th>Image</th>

							
						</tr>
						<?php for($i = 0; $i<count($cus); $i++){ ?>
							
							<tr>
								<td><?php echo $cus[$i]['name']; ?></td>
								<td><?php echo $cus[$i]['image_cer']; ?></td>

								<td>
									<div class="dropdown" >
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:24px;"><span>&#8942;</span></a>
										<ul class="dropdown-menu">
											<li>
												<form method="post" action="index.php?app=admin&action=about_us_certificate_edit">
													<a><button type="submit" name= "<?php echo $i ?>" class=" btn btn:hover">
														<i class="far fa-edit" style="font-size:15px"></i>	
													Edit </button></a>
													<input type="hidden" name="id" value="<?php echo $cus[$i]['id'];  ?>" > 
												</form>
											</li>
										</ul>

									</div>
								</td>
							</tr>
						<?php }?>

					</table>
				</div>
			</div>
		</div>
	</div>	
</body>