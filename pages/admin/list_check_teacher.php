

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
	.modals_end{
		display: flex;
		align-items: center;
		flex-direction: row;
		justify-content: flex-end;
		margin: 10px 0 10px 0;
	}
	.modal-window_teachlist{
		padding: 2%;
	}
	.icon_inmodals {
		border: none;
		border-radius: 50%;
		color: white;
		padding: 0px 7px;
		font-size: 10px;
		cursor: pointer;
		margin-left: 5px;
		margin-top: 10px;
	}
	.icon_inmodals:hover {
		background-color: RoyalBlue;
	}
	.icon_func_modal{
		display: flex;
		justify-content: flex-start;
		flex-direction: row-reverse;
	}


	
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
								<h1>TEACHER LIST</h1>
							</div>
						</div>
						<div class="col-sm-6">
							<div style="display: flex;justify-content: flex-end">
								<button class="btn btn-primary" type="" style="margin:4px; padding: 4px;" data-toggle="modal" data-target="#myModal">Delete</button>
							</div>
						</div>
					</div>		
				</div>
				<div class="col-sm-12">
					<table id="table_id" class="display">
						<tr>
							<th>ID</th>
							<th>Full Name</th>
							<th>Date</th>
							<th>Time</th>
							<th>Status</th>
						</tr>
						<?php for($i=0; $i<count($func_check_list_teacher); $i++){?>
							<tr>
								<td><?php echo $func_check_list_teacher[$i]['id_teacher']; ?></td>
								<td><?php echo $func_check_list_teacher[$i]['teacher_fname']."   ".$func_check_list_teacher[$i]['teacher_lname']; ?></td>
								<td><?php echo $func_check_list_teacher[$i]['date_today']; ?></td>
								<td><?php echo $func_check_list_teacher[$i]['checkin_time']; ?></td>
								<td><?php echo $func_check_list_teacher[$i]['status']; ?></td>
								<td>
									<div class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:24px;"><span>&#8942;</span></a>
										<ul class="dropdown-menu">
											<li><a href="#"><i class="fa fa-refresh" style="font-size:15px"></i> Reset</a></li>
											<li><a href="index.php?app=admin&action=edit_data_teacher<?php echo $list_teacher[$i]['teacher_id'];?>"><i class="far fa-edit" style="font-size:15px"></i> Edit</a></li>
											<li><a href="#" data-toggle="modal" data-target="#delete_confirm<?php echo $i;?>" ><i class="fas fa-trash" style="font-size:15px"></i> Delete</a></li>
										</ul>
									</div>
								</td>
							</tr>
							<div class="modal" id="delete_confirm<?php echo $i;?>" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content" >
										<form action="index.php?app=admin&action=teacher_del<?php echo $list_teacher[$i]['teacher_id']; ?>" method="post">
											<div class="modal-body" style="margin: 68px 0px 0px 0px;">
												<h3 style="text-align: center;">Are you Sure to Delete : <?php echo $list_teacher[$i]['teacher_fname']."   ".$list_teacher[$i]['teacher_lname']; ?> ?</h3>
												<div class="modals_end" style="margin: 41px 0px 0px 0px;">
													<input class="btn btn-success" style="margin: 2%;" type="submit" name="" value="OK">
													<button class="btn btn-danger" style="margin: 2%;" type="button" onclick="document.getElementById('delete_confirm<?php echo $i;?>').style.display='none'">Cancel</button>
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
	<div class="modal" id="myModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content" >
				<div class="icon_func_modal" style="margin-right: 2%;">
					<a id="close"class="icon_inmodals" style="background-color: red;"  data-dismiss="modal"><i class="fa fa-close"></i></a>
				</div>
				<form action="index.php?app=admin&action=teacher_add" method="post">
					<div class="modal-body" style="">
						<div>
							<label for="teacher_fname">First name</label>
							<input onchange="this.value=jsUcfirst(this.value)" pattern="^[a-zA-Z\s]+$" class="form-control" style="width: 100%;" type="text" id="teacher_fname" name="teacher_fname" required placeholder="A-z"><br>
							<label for="teacher_lname">Last name</label>
							<input class="form-control" style="width: 100%;" type="text" id="teacher_lname" name="teacher_lname" required placeholder="A-z"><br>
							<label for="teacher_email">Email</label>
							<input class="form-control" style="width: 100%;" type="text" id="teacher_email" name="teacher_email" required placeholder="example@mail.com"><br>
							<label for="teacher_phone">Phone number</label>
							<input class="form-control" style="width: 100%;" type="text" id="teacher_phone" name="teacher_phone" required placeholder="0-9"><br>
							<div class="modals_end">
								<input style="width: 30%; padding: 2px; border-radius: 5px; background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%); margin:2% 0%;" type="submit" value="Submit">
							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<script>
	$(document).ready( function () {
		$('#table_id').DataTable();
	} );
	function jsUcfirst(string)  {  //อักษรตัวแรกเป็นพิมพ์ใหญ่
		return string.charAt(0).toUpperCase() + string.slice(1);
	}
</script>