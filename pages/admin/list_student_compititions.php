
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
		width: 100%;
	}

	th {
		padding: 10px !important;
		text-align: left;
		border-bottom: 1px solid #ddd;
	}

	/*tr:hover {background-color:#f5f5f5;}*/

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
										<a><button type="submit" name= "<?php echo $j ?>" class=" btn btn:hover">
											<i class="fas fa-trash" style="font-size:15px"></i> Delete</button></a>
											<input type="hidden" name="student_id" value="<?php echo $list_student[$j]['student_id'];  ?>">
											<input type="hidden" name="com_id" value="<?php echo $com_id;  ?>">
										</form>
									</td>
								</tr>
							<?php } ?>
						</table>
					</div>

				</div>
			</div>
		</div>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script> -->
	
	
</body>


