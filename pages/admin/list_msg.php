<style>
	.table{
		margin-top: 10% !important;
		height:250px;
		overflow-y: scroll;

	}


</style>
<body>
	<div class="container">
		<div class="row">
			<div class="page-content p-5" id="content" style="padding: 2%;">
				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
				<table class="table">
					<thead class="thead-dark" id=table>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Topic</th>
							<th scope="col">Name</th>
							<th scope="col">Date</th>
						</tr>
					</thead>
					<tbody>
						<div id="table-data">
							<?php for($i=0; $i<count($cus); $i++) {?>
								<tr>
									<td><?php echo $cus[$i]['id']; ?></td>
									<td><?php echo $cus[$i]['name']; ?></td>
									<td><?php echo $fn; ?></td>
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
					</div>
				</table>
			</div>
		</div>
<!-- 		<div id="pagination">
			<a class="active" id="1" href="">1</a>
			<a id="2" href="">2</a>
			<a id="3" href="">3</a>

		</div> -->
	</div>	
</body>
<!-- <script>  ///ทำscriptให้เสร้จ

$(document).ready(function(){
	function loadTable(page){
		$.ajax({
			url:"",
			type:"POST",
			data:{page_no :page},
			success: function(data){
				$("#table-data").html(data);
			}
		});
	}
	loadTable();

	//Pagination Code
	$(document).on("click","#pagination a",function(e){
		e.preventDefault();
		var page_id = $(this).attr("id");

		loadTable(page_id);
	})
});
</script> -->


