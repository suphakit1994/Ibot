<style>
	.table{
		margin-top: 15% !important;

	}

</style>
<body>
	<div class="container">
		<div class="row">
			<table class="table">
				<thead class="thead-dark" id=table>
					<tr>
						<th scope="col">S.no</th>
						<th scope="col">Name</th>
						<th scope="col">Topic</th>
						<th scope="col">Date</th>
						<th scope="col">Option</th>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0; $i<count($cus); $i++) {?>
						<tr>
							<td><?php echo $cus[$i]['id']; ?></td>
							<td><?php echo $cus[$i]['name']; ?></td>
							<td><?php echo $cus[$i]['topic']; ?></td>
							<td><?php echo $cus[$i]['cr_date']; ?></td>
							<td>
								<form action="index.php?app=admin&action=check_msg<?php echo $cus[$i]['id']; ?>" method="post" accept-charset="utf-8">
									<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>">Information</button>
									<!-- Modal -->
									<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title">ID : <?php echo $cus[$i]['id']; ?>_<?php echo $cus[$i]['topic']; ?></h4>
												</div>
												<div class="modal-body">
													<p>ID : index.php?app=admin&action=check_msg<?php echo $cus[$i]['id']; ?></p>
													<p>Topic : <?php echo $cus[$i]['topic']; ?></p>
													<p>Message : <?php echo $cus[$i]['message']; ?></p>
													<p>Bank : <?php echo $cus[$i]['bank']; ?></p>
													<p>Date : <?php echo $cus[$i]['cr_date']; ?></p>
												</div>
												<div class="modal-footer">
													<input type="submit" name="" class="btn btn-default">

													<button id="cancel" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

												</div>
											</form>
										</div>
									</div>
								</div>
							</td>
						</tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
		<div>
			<nav aria-label="Page navigation example" style="text-align: center;">
				<ul class="pagination justify-content-center">
					<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
					</li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>	
</body>
<script>  ///ทำscriptให้เสร้จ
</script>


