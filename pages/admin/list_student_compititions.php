
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

	table {
		border-collapse: collapse;
		width: 80%;
	}

	th {
		padding: 10px !important;
		text-align: left;
		/*border-bottom: 1px solid #ddd;*/
	}

	
	
	
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
		<div class="container">
			<div class="row">
				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small>
				</button>
				<div>
					<h1>List Student </h1> 
					
				</div>
				<div  class="col-sm-12">
					<label>Program : <?php echo $list_student[0]['com_program'] ?></label>
					<table>
						<tr>
							<th style=" width: 10px;"></th>
							<th>Name</th>
							<th>UserName</th>
						</tr>
						<?php for($j=0;$j<count($list_student);$j++ ){?>
							<tr>
								<td style=" width: 10px;"> <?php  echo $j+"1"."."."  " ?> </td>
								<td><?php echo $list_student[$j]['student_name_eng']?></td>
								<td><?php echo $list_student[$j]['student_username'] ?></td>
								<td>
									<form method="post" action="index.php?app=admin&action=delete_student_compitition">
										<a><button type="submit" name= "<?php echo $j ?>" class="Button"style="width:30% ;">
											<i class="fas fa-trash" style="font-size:15px"></i> Delete</button></a>
											<input type="hidden" name="student_id" value="<?php echo $list_student[$j]['student_id'];  ?>">
											<input type="hidden" name="com_id" value="<?php echo $com_id; ?>">
										</form>
									</td>
								</tr>
							<?php } ?>
						</table>
						<div class="row">
							<button type="button" style="width:10% ;border-radius:28px;" class="Button" data-toggle="modal" data-target="#exampleModal">
								ADD Team
							</button>
						</div>
					</div>

				</div>



				<div class="row" style="margin-top:50px ">

					<div  class="col-sm-12">	
						<a id="list_team" class="Button" style="width:10% ;border-radius:28px;"> List Team</a>
						<div id="list_data">
							<table style=" width: 70%;border: 1px solid black; border-collapse: collapse;">
								<tr style="border: 1px solid black; border-collapse: collapse;">
									
									<th>Name Team</th>
									<th></th>
									<th>Student Name</th>
								</tr>
								<?php for ($k=0; $k<count($allteam);$k++) { ?>
									<tr style="border: 1px solid black; border-bottom: 1px solid #ddd;;">

										<td style="padding-left: 20px;"><b><?php echo $allteam[$k]['team_name'].$allteam[$k]['id']; ?></b></td>

										<td>
											<form method="post" action="index.php?app=admin&action=">
												<a><button type="submit" name= "<?php echo $j ?>" class="Button"style="width:50% ;">
													<i class="fas fa-trash" style="font-size:15px"></i> Delete</button></a>
													<input type="hidden" name="student_id" value="<?php echo $list_student[$j]['student_id'];  ?>">
													<input type="hidden" name="com_id" value="<?php echo $com_id;  ?>">
												</form>
											</td>
											<td>

												<?php $id = $allteam[$k]['id']?>
												
												<?php $list_studentteam =list_studentteam($conn,$com_id,$id); ?>
												<?php for($y=0;$y<count($list_studentteam);$y++){ ?>
													<p><?php echo $list_studentteam[$y]['student_name_eng']?></p>
												<?php } ?>
												
											</td>
										</tr>
									<?php } ?>

								</table>

							</div>
						</div>
					</div>
				</div>

				<!-- Modal -->
				<form method="post" action="index.php?app=admin&action=list_student_compitition/<?php echo $_POST['com_id']; ?>">
					<input type="hidden" name="com_id" value="<?php echo $_POST['com_id'] ?>">
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h5 class="modal-title" id="exampleModalLabel">ADD Team</h5>

								</div>
								<div class="modal-body">
									<p> Team Name : </p>
									<input type="text" name="team_name" class="form-control">
									<?php for($i=0;$i<count($list_student);$i++ ){ ?>
										<?php if($list_student[$i]['status']==0){  ?>
											<div class="form-check form-check-inline">
												<input class="form-check-input"  type="checkbox"  value="<?php echo $list_student[$i]['student_id']?>" name="my_checkbox[<?php echo($i) ?>]" id="my_checkbox[]" >
												<label class="form-check-label" ><?php echo $list_student[$i]['student_name_eng']?></label>
											</div>
										<?php } ?>
									<?php } ?>
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