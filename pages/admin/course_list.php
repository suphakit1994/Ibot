
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
								<h1>Course LIST</h1>
							</div>
						</div>
						<div class="col-sm-6">
							<div style="display: flex;justify-content: flex-end">
								<a class="btn btn-primary" type="" style="padding: 4px;" href="index.php?app=admin&action=editdatacourse">+ Add New</a>
							</div>
						</div>
					</div>		
				</div>
				<div class="col-sm-12">
					<table>
						<tr>
							<th>Course</th>
							<th>Course Expension</th>
							<th>Age for class</th>
							<th>Lesson</th>
							<th>Price</th>
							
							<th></th>
						</tr>
						<?php for($i = 0; $i< count($course_list); $i++){ ?>
							<tr>
								<td><?php echo $course_list[$i]['course_code']; ?></td>
								<td><?php echo $course_list[$i]['course_expension']; ?></td>
								<td><?php echo $course_list[$i]['course_Age']; ?></td>
								<td><?php echo $course_list[$i]['course_lesson']; ?></td>
								<td><?php echo $course_list[$i]['course_price']; ?></td>

								<td> 
									<form method="post" action="index.php?app=admin&action=list_student_course">
										<button type="submit" name= "<?php echo $i ?>" class=" Button" style="width:80% ;border-radius:28px;">List Name</button>
										<input type="hidden" name="course_id" value="<?php echo $course_list[$i]['course_id'];  ?>" > 
										<input type="hidden" name="course_code" value="<?php echo $course_list[$i]['course_code'];  ?>" >
										<input type="hidden" name="course_expension" value="<?php echo $course_list[$i]['course_expension'];  ?>" >
									</form>
								</td>	
								<td>
									<div class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-size:24px;"><span>&#8942;</span></a>
										<ul class="dropdown-menu" style="overflow: hidden; height:auto;text-align: left;min-width: 0;">
											<li><a href="index.php?app=admin&action=choice_edit<?php echo $course_list[$i]['course_id']; ?>"><i class="far fa-edit" style="font-size:15px"></i> Edit</a>
											</li>
											<li><a  href="#" data-toggle="modal" data-target="#delete_confirm<?php echo $i;?>" ><i class="fas fa-trash" style="font-size:15px"></i> Delete</a></li>
										</ul>
									</div>
								</td>
							</tr>
							<div class="modal" id="delete_confirm<?php echo $i;?>" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content" >
										<form action="index.php?app=admin&action=admin_course_delete" method="post">
											<div class="modal-body" style="margin: 68px 0px 0px 0px;">
												<h3 style="text-align: center;">Are you Sure to Delete : <?php echo $course_list[$i]['course_code'];?> ?</h3>
												<div class="modals_end" style="margin: 41px 0px 0px 0px;">
													<input class="btn btn-success" style="margin: 2%;" type="submit" name="" value="OK">

													<button class="btn btn-danger" style="margin: 2%;" type="button" onclick="document.getElementById('delete_confirm<?php echo $i;?>').style.display='none'">Cancel</button>
													<input type="hidden" name="course_id" value="<?php echo $course_list[$i]['course_id'];  ?>" > 
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