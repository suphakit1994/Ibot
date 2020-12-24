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
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-12">
							<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
						</div>
					</div>
					<div class="row" style="display: flex; align-items: center;">
						<div class="col-sm-6">
							<div style="display: flex;justify-content: flex-start">
								<h1>TEACHER LIST</h1>
							</div>
						</div>
						<div class="col-sm-6">
							<div style="display: flex;justify-content: flex-end">
								<button class="btn btn-primary" type="" style="padding: 4px;">+ Add New</button>
							</div>
						</div>
					</div>		
				</div>
				<div class="col-sm-12">
					<table>
						<tr>
							<th><input type="checkbox" name="" value=""></th>
							<th>Full Name</th>
							<th>Position / Rates</th>
							<th>Email Address</th>
							<th>Phone</th>
							<th>Password</th>
							<th></th>
						</tr>
						<tr>
							<td><input type="checkbox" name="" value=""></td>
							<td>Peter</td>
							<td>Griffin</td>
							<td>$100</td>
							<td>Griffin</td>
							<td>$100</td>
							<td>
								<div class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:24px;"><span>&#8942;</span></a>
									<ul class="dropdown-menu">
										<li><a href="#"><i class="fa fa-refresh" style="font-size:15px"></i> Reset</a></li>
										<li><a href="index.php?app=admin&action=edit_data"><i class="far fa-edit" style="font-size:15px"></i> Edit</a></li>
										<li><a href="#"><i class="fas fa-trash" style="font-size:15px"></i> Delete</a></li>
									</ul>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>	
</body>