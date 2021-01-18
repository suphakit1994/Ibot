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
								<h1>Compitition list</h1>
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
							<th>Program</th>
							<th>Age for program</th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
						<?php for($i = 0; $i< count($compi); $i++){ ?>
							<td><?php echo $compi[$i]['com_type']; ?></td>
							<tr>
								<td><?php echo $compi[$i]['com_program	']; ?><?php echo "array=>".$i; ?></td>
								<td><?php echo $compi[$i]['com_Age']; ?></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<div class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:24px;"><span>&#8942;</span></a>
										<ul class="dropdown-menu">
											<li><a href="index.php?app=admin&action=choice_edit<?php echo $course_list[$i]['course_id']; ?>"><i class="far fa-edit" style="font-size:15px"></i> Edit</a></li>
											<li><a href="#"><i class="fas fa-trash" style="font-size:15px"></i> Delete</a></li>
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