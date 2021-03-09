<head>


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
</head>
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
					<table id="myTable" class="display" style="width: 100%;">
						<thead>
							<tr>
								<th>ID</th>
								<th>Full Name</th>
								<th>Date</th>
								<th>Time</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php for($i=0; $i<count($func_check_list_teacher); $i++){?>
								<tr>
									<td><?php echo $func_check_list_teacher[$i]['id_teacher']; ?></td>
									<td><?php echo $func_check_list_teacher[$i]['teacher_fname']."   ".$func_check_list_teacher[$i]['teacher_lname']; ?></td>
									<td><?php echo $func_check_list_teacher[$i]['date_today']; ?></td>
									<td><?php echo $func_check_list_teacher[$i]['checkin_time']; ?></td>
									<td><?php echo $func_check_list_teacher[$i]['status']; ?></td>
								</tr>
							<?php }?>
						</tbody>
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

					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<script>
	$(document).ready(function(){
		$("#myTable").DataTable();
	});
</script>