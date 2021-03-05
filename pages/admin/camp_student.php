
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
</style>
<body>
	
	<div class="page-content p-5" id="content">
		<div class="container">
			<div class="row">
				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small>
				</button>
				
				<div>

					<h1>Student List </h1>
				</div>
				
				<form method="post" action="index.php?app=admin&action=admin_camp">
					<?php echo $_POST['camp_id']; ?>
					<div class="row">
						<table>
							<th></th>
							<th></th>
						</table>
					</div>
					<div class="row">

						<button type="submit"  name="<?php echo $j ?>" class="Button" style="width:40% ;border-radius:28px;">Go Back</button>

					</div>


				</form>



			</div></ul>

		</div>
	</div>
</div>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script> -->
</body>


