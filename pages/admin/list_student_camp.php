
<meta charset="utf-8">
<style>
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
</style>
<body>
	
	<div class="page-content p-5" id="content">
		<div class="container">
			<div class="row">
				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small>
				</button>
				
				<div class="row">
					<h1>Student List</h1>
				</div>
				
				<h3><b>Program : <?php echo $camp_id=$_POST['camp_program']; ?></b></h3>

				<div class="row">

					<table>
						<tr>
							<th>Name</th>
							<th>User</th>
							<th>Phone Number</th>
							<th></th>
						</tr>
						<?php for ($i=0; $i < count($camp_student) ; $i++) { ?>
							<tr>
								<td><?php echo $camp_student[$i]['student_name_eng']; ?></td>
								<td><?php echo $camp_student[$i]['student_username']; ?></td>
								<td><?php echo $camp_student[$i]['parents_phonenumber']; ?></td>
								<form method="post" action="index.php?app=admin&action=delete_list_student_compitition">
									<td><button type="submit" class="Button" name= "<?php echo $i ?>"style="width: 50%">Delete</button> </td>
									<input type="hidden" name="student_id" value="<?php echo $camp_student[$i]['student_id'];  ?>" > 	
								</form>
							</tr>
						<?php } ?>
					</table>

				</div>
				<form method="post" action="index.php?app=admin&action=admin_camp">
					<div class="row" style="    text-align: right;">
						<button type="submit"  name="<?php echo $j ?>" class="Button" style="width:15% ;border-radius:28px;margin-top: 50px; margin-right: 100px;">Go Back</button>
						<input type="hidden" name="com_id" value="<?php echo $compi[$j]['comp_id'];  ?>">
					</div>	
				</form>


			</div>
		</div>
	</div>
</div>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script> -->
	
	
</body>


