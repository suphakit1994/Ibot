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
								<h1 style="font-weight: bold; ">Home / Ibot News</h1>
							</div>
							<div style="display: flex;justify-content: flex-start">
								<h3 style="color : grey;">Limit 5 object</h3>
							</div>
						</div>
						<div class="col-sm-6">
							<div style="display: flex;justify-content: flex-end">
								<a class="btn btn-primary" style="padding: 4px;" href="index.php?app=admin&action=ibot_news_add">+ Add New</a>
							</div>

						</div>
					</div>		
				</div>
				<div class="col-sm-12">
					<table>
						<tr>
							<th>Topic</th>
							<th>Content</th>
							<th></th>
							
							
						</tr>
						<?php for($i = 0; $i< count($cus); $i++){ ?>
							
							<tr>
								<td><?php echo $cus[$i]['topic']; ?></td>
								<td><?php echo $cus[$i]['content']; ?></td>	
								<td>
									<div class="dropdown" >
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:24px;"><span>&#8942;</span></a>
										<ul class="dropdown-menu">
											<li>
												<form method="post" action="index.php?app=admin&action=ibot_news_edit">
													<a><button type="submit" name= "<?php echo $i ?>" class=" btn btn:hover">
														<i class="far fa-edit" style="font-size:15px"></i>	
													Edit </button></a>
													<input type="hidden" name="id" value="<?php echo $cus[$i]['id'];  ?>" > 
												</form>
											</li>
											<li>
												<form method="post" action="index.php?app=admin&action=ibot_news_delete">
													<a><button type="submit" name= "<?php echo $i ?>" class=" btn btn:hover">
														<i class="fas fa-trash" style="font-size:15px"></i> Delete</button></a>
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