<style type="text/css">
	table {
		border-collapse: collapse;
		width: 90%;
	}

	th, td {
		padding: 18px !important;
		text-align: left;
		border-bottom: 1px solid #ddd;
	}

	tr:hover {background-color:#f5f5f5;}
	.modal-header {
		padding: 2px 16px;
		background: -webkit-linear-gradient(180deg, #00FF99 10%, #0050ef 100%) !important;
		color: white;
	}

	.modal-footer {
		padding: 2px 16px;
		background: -webkit-linear-gradient(180deg, #0050ef 0%, #00FF99 100%) !important;
		color: white;
	}
	#list_data{
		display: none;
	}
</style>
<body>
	<div class="page-content p-5" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<div class="container">
			<div class="row">
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="row" style="display: flex; align-items: center;">
						<div class="col-sm-6">
							<div style="display: flex;justify-content: flex-start">
								<h1>Classroom</h1>
							</div>
						</div>
						<div class="col-sm-5">
							<div style="display: flex;justify-content: flex-end">
								<a class="btn btn-primary" type="button" style="padding: 4px;" data-toggle="modal" data-target="#exampleModal" >+ Add New</a>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-sm-12" style="padding-left: 30px;">
					<table>
						<tr>
							<th style="width: 56px;"></th>
							<th>Date</th>
							<th>Time</th>
							<th></th>
						</tr>
						<?php for ($i=0; $i < count($selec_class) ; $i++) { ?>
							<tr>
								<td><?php echo $i+1; ?></td>
								<td><?php echo $selec_class[$i]['class_date']; ?></td>
								<td><?php echo $selec_class[$i]['class_start_time']." - ".$selec_class[$i]['class_end_time']; ?></td>
								<td>
									<form method="post" action="index.php?app=admin&action=classroom/delete">
										<button type="submit" class="Button" name="<?php echo $i ?>" style="width: 30%" >Delete</button>
										<input type="hidden" name="class_id" value="<?php echo $selec_class[$i]['class_id']; ?>">
									</form>
								</td>
							</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			

			
		</div>
		
	</div>

	<!-- Modal -->
	<form method="post" action="index.php?app=admin&action=classroom/add">
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h5 class="modal-title" id="exampleModalLabel">Add Classroom</h5>

					</div>
					<div class="modal-body">
						<div class="row">
							<label>Date :
								<select class="form-control" name = "class_date">
									<option>---Select---</option>
									<option value="Sunday">Sunday</option>
									<option value="Monday">Monday</option>
									<option value="Tuesday">Tuesday</option>
									<option value="Wednesday">Wednesday</option>
									<option value="Thursday">Thursday</option>
									<option value="Friday">Friday</option>
									<option value="Saturday">Saturday</option>
								</select></label>
							</div>
							<div class="row">
								<label>Start time : <input class="form-control" type="time" name="class_start_time"></label>
								<label> End time : <input class="form-control" type="time" name="class_end_time"></label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" style="width: 15%; border-radius:28px;" class="Button" data-dismiss="modal">Close</button>
							<button type="submit"  style="width: 30%; border-radius:28px;" class="Button">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</body>

	<script type="text/javascript">
		$("#list_team").click(function() {
			$("#list_data").slideToggle("slow");
		});
	</script>