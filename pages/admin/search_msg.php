<style>
	.table{
		margin-top: 10% !important;
		height:250px;
		overflow-y: scroll;

	}
	.modlas_body{
		display: flex;
		flex-direction: column;
		padding: 2%;
	}
	.icon_func_modal{
		display: flex;
		justify-content: flex-start;
		flex-direction: row-reverse;
		padding-right: 15px;
	}
	.icon_inmodals {
		border: none;
		border-radius: 50%;
		color: white;
		padding: 4px 7px;
		font-size: 10px;
		cursor: pointer;
		margin-left: 5px;
		margin-top: 10px;
	}

	/* Darker background on mouse-over */
	.icon_inmodals:hover {
		background-color: RoyalBlue;
	}


</style>
<body>
	<div class="container">
		<div class="row">
			<div class="page-content p-5" id="content" style="padding: 2%;">
				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
				<form action="index.php?app=admin&action=history_msg" method="post" accept-charset="utf-8">
					<input type="submit" value="History" style="float: right;" class="btn btn-primary" name="">
				</form>	
				<table class="table">
					<thead class="thead-dark" id=table>
						<tr>
							<th scope="col">No.</th>
							<th scope="col">Topic</th>
							<th scope="col">Name</th>
							<th scope="col">Date</th>
							<th scope="col">Date approved</th>
							<th scope="col">Approver</th>

						</tr>
					</thead>
					<tbody>
						<div id="table-data">
							<?php 
							for ($i=0; $i <count($cus) ; $i++) {
								$topic =$cus[$i]['topic'];
								$no = $cus[$i]['no_id'];
								if ($topic == 'Enroll') {
									for ($c=0; $c <count($cus_1) ; $c++) { 
										$content = $cus_1[$c]['topic'];
										$no_id = $cus_1[$c]['no_id'];
										if ($content == 'Enroll') {
											$keys_cs = $cus_1[$c]['fk_cs_id'];
											$set = $cus_1[$c]['student_id'];
											$se = $cus_1[$c]['course_payment_id'];
											$selstu_id = $cus_1[$c]['cs_student_id'];
											$selid = $cus_1[$c]['cs_id'];
											$namestu = $cus_1[$c]['student_name_th'];
											$datetopic = $cus_1[$c]['payment_date'];
											$payment_id = $cus_1[$c]['payment_id'];
											$timestamp = $cus_1[$c]['timestamp'];
											$approver = $cus_1[$c]['approver'];
											$idstu = $cus_1[$c]['student_id'];
											$namestu = $cus_1[$c]['student_name_th'];
											$username = $cus_1[$c]['student_username'];
											$password = $cus_1[$c]['student_password'];
											$category = $cus_1[$c]['course_category'];
											$expension = $cus_1[$c]['course_expension'];
											$code = $cus_1[$c]['course_code'];
											$parentsname = $cus_1[$c]['parents_name_th'];
											$parentphone = $cus_1[$c]['parents_phonenumber'];
											$parentemail = $cus_1[$c]['parents_email'];
											$parents_line = $cus_1[$c]['parents_line'];
											$nametopic = $cus_1[$c]['payment_type'];
											$paymentno = $cus_1[$c]['payment_no'];
											$payamount = $cus_1[$c]['payment_amount'];
											$paybank = $cus_1[$c]['payment_bank'];
											$paydate = $cus_1[$c]['payment_date'];
											$payimg = $cus_1[$c]['payment_img'];

											?>
											<tr>
												<td><?php echo $no_id; ?></td>
												<td><?php echo $content; ?></td>
												<td><?php echo $namestu; ?></td>
												<td><?php echo $datetopic; ?></td>
												<td><?php echo $timestamp; ?></td>
												<td><?php echo $approver; ?></td>
												<td>
													<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>">Information</button>
													<!-- Modal -->
													<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
														<div class="modal-dialog">
															<!-- Modal content-->
															<div class="modal-content">
																<div class="icon_func_modal">
																	<a id="close <?php echo $no_id; ?>"class="icon_inmodals" data-dismiss="modal"style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																	<h4 style="font-weight: bold;">Notification ID : <?php echo $no_id; ?></h4>
																	<p style="font-weight: bolder;">Topic :<?php echo $content; ?></p>
																	<p style="font-weight: bolder;">ID Student :<?php echo $idstu; ?></p>
																	<p style="font-weight: bolder;">Name :<?php echo $namestu; ?></p>
																	<p style="font-weight: bolder;">StudentUser :<?php echo $username; ?></p>
																	<p style="font-weight: bolder;">StudentPassword :<?php echo $password; ?></p>
																	<p style="font-weight: bolder;">Category  :<?php echo $category; ?></p>
																	<p style="font-weight: bolder;">Expension  :<?php echo $expension; ?></p>
																	<p style="font-weight: bolder;">Code  :<?php echo $code; ?></p>
																	<button id="btn_more<?php echo $no_id; ?>" type="button" class="btn btn-info" style="width: 100%; height: 35px; margin-bottom: 10px;">More</button>

																	<div id="hidecontent<?php echo $no_id; ?>" style="display: none;">

																		<p style="font-weight: bolder;">ParentName :<?php echo $parentsname; ?></p>
																		<p style="font-weight: bolder;">ParentPhone :<?php echo $parentsphone; ?></p>
																		<p style="font-weight: bolder;">ParentEmail :<?php echo $parentemail; ?></p>
																		<p style="font-weight: bolder;"> ParentLine :<?php echo $parents_line; ?></p>

																		<p style="font-weight: bolder;">Payment_no : <?php echo $paymentno; ?></p>
																		<p style="font-weight: bolder;">Amount : <?php echo $payamount; ?></p>
																		<p style="font-weight: bolder;">Bank : <?php echo $paybank; ?></p>
																		<p style="font-weight: bolder;">Date : <?php echo $paydate; ?></p>
																		<img class="card-img-top" style="width: 445px; margin-bottom: 30px;"
																		src="../img_payment/<?php echo $payimg;?>" alt="Card image cap" >
																	</div>
																</div>
															</div>
														</div>
													</div>
												</td>
											</tr>

										<?php } ?>
									<?php } ?>
								<?php }elseif ($topic == 'Add Course') {
									for ($d=0; $d <count($cus_1) ; $d++) { 
										$content = $cus_1[$d]['topic'];
										$no_id = $cus_1[$d]['no_id'];
										if ($content == 'Add Course' AND $no_id == $no) {
											$keys_cs = $cus_1[$d]['fk_cs_id'];
											$set = $cus_1[$d]['student_id'];
											$se = $cus_1[$d]['course_payment_id'];
											$selstu_id = $cus_1[$d]['cs_student_id'];
											$selid = $cus_1[$d]['cs_id'];
											$namestu = $cus_1[$d]['student_name_th'];
											$datetopic = $cus_1[$d]['payment_date'];
											$payment_id = $cus_1[$d]['payment_id'];
											$timestamp = $cus_1[$d]['timestamp'];
											$approver = $cus_1[$d]['approver'];
											$idstu = $cus_1[$d]['student_id'];
											$namestu = $cus_1[$d]['student_name_th'];
											$username = $cus_1[$d]['student_username'];
											$password = $cus_1[$d]['student_password'];
											$category = $cus_1[$d]['course_category'];
											$expension = $cus_1[$d]['course_expension'];
											$code = $cus_1[$d]['course_code'];
											$parentsname = $cus_1[$d]['parents_name_th'];
											$parentphone = $cus_1[$d]['parents_phonenumber'];
											$parentemail = $cus_1[$d]['parents_email'];
											$parents_line = $cus_1[$d]['parents_line'];
											$nametopic = $cus_1[$d]['payment_type'];
											$paymentno = $cus_1[$d]['payment_no'];
											$payamount = $cus_1[$d]['payment_amount'];
											$paybank = $cus_1[$d]['payment_bank'];
											$paydate = $cus_1[$d]['payment_date'];
											$payimg = $cus_1[$d]['payment_img'];

											?>
											<tr>
												<td><?php echo $no_id; ?></td>
												<td><?php echo $content; ?></td>
												<td><?php echo $namestu; ?></td>
												<td><?php echo $datetopic; ?></td>
												<td><?php echo $timestamp; ?></td>
												<td><?php echo $approver; ?></td>
												<td>
													<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>">Information</button>
													<!-- Modal -->
													<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
														<div class="modal-dialog">
															<!-- Modal content-->
															<div class="modal-content">
																<div class="icon_func_modal">
																	<a id="close <?php echo $no_id; ?>"class="icon_inmodals" data-dismiss="modal"style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																	<h4 style="font-weight: bold;">Notification ID : <?php echo $no_id; ?></h4>
																	<p style="font-weight: bolder;">Topic :<?php echo $content; ?></p>
																	<p style="font-weight: bolder;">ID Student :<?php echo $idstu; ?></p>
																	<p style="font-weight: bolder;">Name :<?php echo $namestu; ?></p>
																	<p style="font-weight: bolder;">StudentUser :<?php echo $username; ?></p>
																	<p style="font-weight: bolder;">StudentPassword :<?php echo $password; ?></p>
																	<p style="font-weight: bolder;">Category  :<?php echo $category; ?></p>
																	<p style="font-weight: bolder;">Expension  :<?php echo $expension; ?></p>
																	<p style="font-weight: bolder;">Code  :<?php echo $code; ?></p>
																	<button id="btn_more<?php echo $no_id; ?>" type="button" class="btn btn-info" style="width: 100%; height: 35px; margin-bottom: 10px;">More</button>
																	<div id="hidecontent<?php echo $no_id; ?>" style="display: none;">
																		<p style="font-weight: bolder;">Payment_no : <?php echo $paymentno; ?></p>
																		<p style="font-weight: bolder;">Amount : <?php echo $payamount; ?></p>
																		<p style="font-weight: bolder;">Bank : <?php echo $paybank; ?></p>
																		<p style="font-weight: bolder;">Date : <?php echo $paydate; ?></p>
																		<img class="card-img-top" style="width: 445px; margin-bottom: 30px;"
																		src="../img_payment/<?php echo $payimg;?>" alt="Card image cap" >
																	</div>
																</div>
															</div>
														</div>
													</div>
												</td>
											</tr>

										<?php } ?>
									<?php } ?>
								<?php }elseif ($topic == 'Add Camp') {
									for ($e=0; $e <count($cus_2) ; $e++) { 
										$content = $cus_2[$e]['topic'];
										$no_id = $cus_2[$e]['no_id'];
										if ($content == 'Add Camp' AND $no == $no_id) {
											$selstu_id = $cus_2[$e]['cs_student_id'];
											$namestu = $cus_2[$e]['student_name_th'];
											$se = $cus_2[$e]['cs_payment_id'];
											$payment_id = $cus_2[$e]['payment_id'];
											$datetopic = $cus_2[$e]['payment_date'];
											$timestamp = $cus_2[$e]['timestamp'];
											$approver = $cus_2[$e]['approver'];
											$selpay_id = $cus_2[$e]['cs_payment_id'];
											$nametopic = $cus_2[$e]['payment_type'];
											$idstu = $cus_2[$e]['student_id'];
											$selcou_id = $cus_2[$e]['cs_camp_id'];
											$camp_program = $cus_2[$e]['camp_program'];
											$camp_date_start = $cus_2[$e]['camp_date_start'];
											$camp_date_end = $cus_2[$e]['camp_date_end'];
											$paymentno = $cus_2[$e]['payment_no'];
											$payamount = $cus_2[$e]['payment_amount'];
											$paybank = $cus_2[$e]['payment_bank'];
											$paydate = $cus_2[$e]['payment_date'];
											$payimg = $cus_2[$e]['payment_img'];

											?>
											<tr>
												<td><?php echo $no_id;?></td>
												<td><?php echo $content;?></td>
												<td><?php echo $namestu;?></td>
												<td><?php echo $datetopic;?></td>
												<td><?php echo $timestamp; ?></td>
												<td><?php echo $approver ?></td>
												<td>
													<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>">Information</button>
													<!-- Modal -->
													<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
														<div class="modal-dialog">
															<!-- Modal content-->
															<div class="modal-content">
																<div class="icon_func_modal">
																	<a id="close<?php echo $no_id; ?>"class="icon_inmodals" data-dismiss="modal"style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>
																</div>
																<div class="modal-body">
																	<h4 style="font-weight: bold;">Notification ID : <?php echo $no_id; ?></h4>
																	<p style="font-weight: bolder;">Topic :<?php echo $nametopic; ?></p>
																	<p style="font-weight: bolder;">ID Student :<?php echo $idstu; ?></p>
																	<p style="font-weight: bolder;">Name :<?php echo $namestu; ?></p>
																	<p style="font-weight: bolder;">Camp Program  :<?php echo $camp_program; ?></p>
																	<p style="font-weight: bolder;">Camp Start  :<?php echo $camp_date_start; ?></p>
																	<p style="font-weight: bolder;">Camp End  :<?php echo $camp_date_end; ?></p>
																	<button id="btn_more<?php echo $no_id; ?>" type="button" class="btn btn-info" style="width: 100%; height: 35px; margin-bottom: 10px;">More</button>

																	<div id="hidecontent<?php echo $no_id; ?>" style="display: none;">
																		<p style="font-weight: bolder;">Payment_no : <?php echo $paymentno; ?></p>
																		<p style="font-weight: bolder;">Amount : <?php echo $payamount; ?></p>
																		<p style="font-weight: bolder;">Bank : <?php echo $paybank; ?></p>
																		<p style="font-weight: bolder;">Date : <?php echo $paydate; ?></p>
																		<img class="card-img-top" style="width: 445px; margin-bottom: 30px;"
																		src="../img_payment/<?php echo $payimg;?>" alt="Card image cap" >
																	</div>
																</div>
															</div>
														</div>
													</div>
												</td>
											</tr>
										<?php } ?>

									<?php } ?>
								<?php }elseif($topic == 'Add Compeitition') {
									for ($r=0; $r <count($cus_3) ; $r++) { 
										$content = $cus_3[$r]['topic'];
										$no_id = $cus_3[$r]['no_id'];
										if ($content == 'Add Compeitition' AND $no == $no_id) {
											$namestu = $cus_3[$r]['student_name_th'];
											$datetopic = $cus_3[$r]['payment_date'];
											$nametopic = $cus_3[$r]['payment_type'];
											$idstu = $cus_3[$r]['student_id'];
											$timestamp = $cus_3[$r]['timestamp'];
											$approver = $cus_3[$r]['approver'];
											$type = $cus_3[$r]['com_type'];
											$program = $cus_3[$r]['com_program'];
											$datestart = $cus_3[$r]['com_start_date'];
											$dateend = $cus_3[$r]['com_end_date'];
											$selpay_id = $cus_3[$r]['cps_payment_id'];	
											$paymentno = $cus_3[$r]['payment_no'];
											$payamount = $cus_3[$r]['payment_amount'];
											$paybank = $cus_3[$r]['payment_bank'];
											$paydate = $cus_3[$r]['payment_date'];
											$payimg = $cus_3[$r]['payment_img'];


											
											?>



											<tr>
												<td><?php echo $no_id; ?></td>
												<td><?php echo $topic; ?></td>
												<td><?php echo $namestu; ?></td>
												<td><?php echo $datetopic;?></td>
												<td><?php echo $timestamp; ?></td>
												<td><?php echo $approver; ?></td>

												<td>

													<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>">Information</button>
													<!-- Modal -->
													<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
														<div class="modal-dialog">
															<!-- Modal content-->
															<div class="modal-content">
																<div class="icon_func_modal">
																	<a id="close <?php echo $no_id; ?>"class="icon_inmodals" data-dismiss="modal"style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>

																</div>

																<div class="modal-body">
																	<h4 style="font-weight: bold;">Notification ID : <?php echo $no_id; ?></h4>

																	<p style="font-weight: bolder;">Topic :<?php echo $nametopic; ?></p> 

																	<p style="font-weight: bolder;">ID Student :<?php echo $idstu; ?></p>
																	<p style="font-weight: bolder;">Name :<?php echo $namestu; ?></p>
																	<p style="font-weight: bolder;">Type of Compeitition  :<?php echo $type; ?></p>
																	<p style="font-weight: bolder;">Program  :<?php echo $program; ?></p>
																	<p style="font-weight: bolder;">Date Start  :<?php echo $datestart; ?></p>
																	<p style="font-weight: bolder;">Date end  :<?php echo $dateend; ?></p>

																	<button id="btn_more<?php echo $no_id; ?>" type="button" class="btn btn-info" style="width: 100%; height: 35px; margin-bottom: 10px;">More</button>


																	<div id="hidecontent<?php echo $no_id; ?>" style="display: none;">
																		<p style="font-weight: bolder;">Payment_no : <?php echo $paymentno; ?></p>
																		<p style="font-weight: bolder;">Amount : <?php echo $payamount; ?></p>
																		<p style="font-weight: bolder;">Bank : <?php echo $paybank; ?></p>
																		<p style="font-weight: bolder;">Date : <?php echo $paydate; ?></p>
																		<img class="card-img-top" style="width: 445px; margin-bottom: 30px;"
																		src="../img_payment/<?php echo $payimg;?>" alt="Card image cap" >


																	</div>
																</div>
															</div>
														</div>
													</div>
												</td>
											</tr>
										<?php } ?>

									<?php } ?>

								<?php } ?>
							<?php } ?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>	
	</body>
	<script type="text/javascript">
		$(document).ready(function() {
			<?php for ($u=0; $u <count($cus) ; $u++) { ?>
				$("#btn_more"+<?php echo $cus[$u]['no_id'];?>).click(function(){
					$("#hidecontent"+<?php echo $cus[$u]['no_id'];?>).slideToggle("slow");
					$("#btn_more"+<?php echo $cus[$u]['no_id'];?>).hide();


				});


			<?php } ?>
		});	

	</script>