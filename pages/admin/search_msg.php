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
						</tr>
					</thead>
					<tbody>
						<div id="table-data">
							<?php 
							for ($i=0; $i <count($cus) ; $i++) {

								$keys_cs = $cus[$i]['fk_cs_id'];
								$keys_cp = $cus[$i]['fk_cp_id'];
								$keys_cps = $cus[$i]['fk_cps_id'];
								$topic =$cus[$i]['topic'];
								$status = $cus[$i]['status'];






								if ($topic == 'Enroll') {

									$join = joindata($conn,$show);
									for ($c=0; $c <count($join) ; $c++) { 
										$set = $join[$c]['student_id'];
										$se = $join[$c]['course_payment_id'];
										// echo "ค่าที่ค้นหาจากชื่อ==".$set;

										$numfk_stu = selcs($conn,$keys_cs);
										for ($b=0; $b <count($numfk_stu) ; $b++) { 
											$selstu_id = $numfk_stu[$b]['cs_student_id'];
											$selstu_pay = $numfk_stu[$b]['course_payment_id'];
											$selid = $numfk_stu[$b]['cs_id'];


											// echo "ค่าไอดีที่อยู่ในcs==".$selstu_id,$selstu_pay;

											if ($se == $selstu_pay) {
												// echo "Hi there ,".$set;




												?>
												<tr>
													<td><?php echo $cus[$i]['no_id']; ?></td>
													<td><?php echo $topic; ?></td>
													<td><?php $numfk_stu = selcs($conn,$keys_cs);
													for ($l=0; $l <count($numfk_stu) ; $l++) { 
														$selstu_id = $numfk_stu[$l]['cs_student_id'];
														$selstu_name = selstuname($conn,$selstu_id);
														for ($k=0; $k <count($selstu_name) ; $k++) { 
															$namestu = $selstu_name[$k]['student_name_th'];
															echo $namestu;
														}

													} ?></td>
													<td><?php $numfk_pay = selcs($conn,$keys_cs);
													for ($e=0; $e <count($numfk_pay) ; $e++) { 
														$selpay_id = $numfk_pay[$e]['course_payment_id'];
														$selpay_date = selpaydate($conn,$selpay_id);
														for ($r=0; $r <count($selpay_date) ; $r++) { 
															$datetopic = $selpay_date[$r]['payment_date'];
															echo $datetopic;
														}

													} ?></td>

													<td><?php echo $cus[$i]['timestamp']; ?></td>
													<td><?php echo $cus[$i]['approver']; ?></td>


													<td>

														<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>">Information</button>
														<!-- Modal -->
														<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
															<div class="modal-dialog">
																<!-- Modal content-->
																<div class="modal-content">
																	<div class="icon_func_modal">
																		<a id="close <?php echo $cus[$i]['no_id']; ?>"class="icon_inmodals" data-dismiss="modal"style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>

																	</div>

																	<div class="modal-body">
																		<h4 style="font-weight: bold;">Notification ID : <?php echo $cus[$i]['no_id']; ?></h4>
																		<?php $numfk_pay = selcs($conn,$keys_cs);
																		for ($e=0; $e <count($numfk_pay) ; $e++) { 
																			$selpay_id = $numfk_pay[$e]['course_payment_id'];
																			$selpay_topic = selpaytopic($conn,$selpay_id);
																			for ($r=0; $r <count($selpay_topic) ; $r++) { 
																				$nametopic = $selpay_topic[$r]['payment_type'];
																				?>
																				<p style="font-weight: bolder;">Topic :<?php echo $nametopic; ?></p>
																				<?php
																			}

																		} ?>
																		<?php $numfk_stu = selcs($conn,$keys_cs);
																		for ($l=0; $l <count($numfk_stu) ; $l++) { 
																			$selstu_id = $numfk_stu[$l]['cs_student_id'];
																			$selstu_name = selstuname($conn,$selstu_id);
																			for ($k=0; $k <count($selstu_name) ; $k++) { 
																				$idstu = $selstu_name[$k]['student_id'];
																				$namestu = $selstu_name[$k]['student_name_th'];
																				$username = $selstu_name[$k]['student_username'];
																				$password = $selstu_name[$k]['student_password'];
																				?>
																				<p style="font-weight: bolder;">ID Student :<?php echo $idstu; ?></p>
																				<p style="font-weight: bolder;">Name :<?php echo $namestu; ?></p>
																				<p style="font-weight: bolder;">StudentUser :<?php echo $username; ?></p>
																				<p style="font-weight: bolder;">StudentPassword :<?php echo $password; ?></p>
																				<?php 
																			}

																		} ?>
																		<?php $numfk_stu = selcs($conn,$keys_cs);
																		for ($a=0; $a <count($numfk_stu) ; $a++) { 
																			$selcou_id = $numfk_stu[$a]['cs_course_id'];
																			$selcou_name = selcouname($conn,$selcou_id);
																			for ($x=0; $x <count($selcou_name) ; $x++) { 
																				$category = $selcou_name[$x]['course_category'];
																				$expension = $selcou_name[$x]['course_expension'];
																				$code = $selcou_name[$x]['course_code'];
																				?>
																				<p style="font-weight: bolder;">Category  :<?php echo $category; ?></p>
																				<p style="font-weight: bolder;">Expension  :<?php echo $expension; ?></p>
																				<p style="font-weight: bolder;">Code  :<?php echo $code; ?></p>
																				<?php
																			}
																		} ?>
																		<button id="btn_more<?php echo $cus[$i]['no_id']; ?>" type="button" class="btn btn-info" style="width: 100%; height: 35px; margin-bottom: 10px;">More</button>

																		<div id="hidecontent<?php echo $cus[$i]['no_id']; ?>" style="display: none;">

																			<!-- ซ่อนค่ากดถึงจะเห็นค่า -->
																			<?php $numfk_stu = selcs($conn,$keys_cs);
																			for ($l=0; $l <count($numfk_stu) ; $l++) { 
																				$selstu_id = $numfk_stu[$l]['cs_student_id'];
																				$selstu_name = selstuname($conn,$selstu_id);
																				for ($k=0; $k <count($selstu_name) ; $k++) { 
																					$parentsname = $selstu_name[$k]['parents_name_th'];
																					$parentphone = $selstu_name[$k]['parents_phonenumber'];
																					$parentemail = $selstu_name[$k]['parents_email'];
																					$parents_line = $selstu_name[$k]['parents_line'];
																					?>
																					<p style="font-weight: bolder;">ParentName :<?php echo $parentsname; ?></p>
																					<p style="font-weight: bolder;">ParentPhone :<?php echo $parentsphone; ?></p>
																					<p style="font-weight: bolder;">ParentEmail :<?php echo $parentemail; ?></p>
																					<p style="font-weight: bolder;"> ParentLine :<?php echo $parents_line; ?></p>
																					<?php 
																				}

																			} ?>
																			<?php $numfk_pay = selcs($conn,$keys_cs);
																			for ($e=0; $e <count($numfk_pay) ; $e++) { 
																				$selpay_id = $numfk_pay[$e]['course_payment_id'];
																				$selpay_topic = selpaytopic($conn,$selpay_id);
																				for ($r=0; $r <count($selpay_topic) ; $r++) { 
																					$nametopic = $selpay_topic[$r]['payment_type'];
																					$paymentno = $selpay_topic[$r]['payment_no'];
																					$payamount = $selpay_topic[$r]['payment_amount'];
																					$paybank = $selpay_topic[$r]['payment_bank'];
																					$paydate = $selpay_topic[$r]['payment_date'];
																					$payimg = $selpay_topic[$r]['payment_img'];
																					?>
																					<p style="font-weight: bolder;">Payment_no : <?php echo $paymentno; ?></p>
																					<p style="font-weight: bolder;">Amount : <?php echo $payamount; ?></p>
																					<p style="font-weight: bolder;">Bank : <?php echo $paybank; ?></p>
																					<p style="font-weight: bolder;">Date : <?php echo $paydate; ?></p>
																					<img class="card-img-top" style="width: 445px; margin-bottom: 30px;"
																					src="../img_payment/<?php echo $payimg;?>" alt="Card image cap" >
																					<?php
																				}

																			} ?>


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
								<?php }elseif($topic == 'Add Course') {
									// echo "=================================================================";

									$join = joindata($conn,$show);
									for ($c=0; $c <count($join) ; $c++) { 
										$set = $join[$c]['student_id'];
										$se = $join[$c]['course_payment_id'];
										// echo "ค่าที่ค้นหาจากชื่อ==".$set;

										$numfk_stu = selcs($conn,$keys_cs);
										for ($b=0; $b <count($numfk_stu) ; $b++) { 
											$selstu_id = $numfk_stu[$b]['cs_student_id'];
											$selstu_pay = $numfk_stu[$b]['course_payment_id'];
											$selid = $numfk_stu[$b]['cs_id'];


											// echo "ค่าไอดีที่อยู่ในcs==".$selstu_id,$selstu_pay;

											if ($se == $selstu_pay) {
												// echo "Hi there ,".$set;

												?>
												<tr>
													<td><?php echo $cus[$i]['no_id']; ?></td>
													<td><?php echo $topic; ?></td>
													<td><?php $numfk_stu_cs = selcs($conn,$keys_cs);
													for ($l=0; $l <count($numfk_stu_cs) ; $l++) { 
														$selstu_id = $numfk_stu_cs[$l]['cs_student_id'];
														$selstu_name = selstuname($conn,$selstu_id);
														for ($k=0; $k <count($selstu_name) ; $k++) { 
															$namestu = $selstu_name[$k]['student_name_th'];
															echo $namestu;
														}

													} ?></td>
													<td><?php $numfk_pay_cs= selcs($conn,$keys_cs);
													for ($e=0; $e <count($numfk_pay_cs) ; $e++) { 
														$selpay_id = $numfk_pay_cs[$e]['course_payment_id'];
														$selpay_date = selpaydate($conn,$selpay_id);
														for ($r=0; $r <count($selpay_date) ; $r++) { 
															$datetopic = $selpay_date[$r]['payment_date'];
															echo $datetopic;
														}

													} ?></td>
													<td><?php echo $cus[$i]['timestamp']; ?></td>
													<td><?php echo $cus[$i]['approver']; ?></td>

													<td>

														<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>">Information</button>
														<!-- Modal -->
														<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
															<div class="modal-dialog">
																<!-- Modal content-->
																<div class="modal-content">
																	<div class="icon_func_modal">
																		<a id="close <?php echo $cus[$i]['no_id']; ?>"class="icon_inmodals" data-dismiss="modal"style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>

																	</div>

																	<div class="modal-body">
																		<h4 style="font-weight: bold;">Notification ID : <?php echo $cus[$i]['no_id']; ?></h4>
																		<?php $numfk_pay_cs = selcs($conn,$keys_cs);
																		for ($e=0; $e <count($numfk_pay_cs) ; $e++) { 
																			$selpay_id = $numfk_pay_cs[$e]['course_payment_id'];
																			$selpay_topic = selpaytopic($conn,$selpay_id);
																			for ($r=0; $r <count($selpay_topic) ; $r++) { 
																				$nametopic = $selpay_topic[$r]['payment_type'];
																				?>
																				<p style="font-weight: bolder;">Topic :<?php echo $nametopic; ?></p>
																				<?php
																			}

																		} ?>
																		<?php $numfk_stu_cs = selcs($conn,$keys_cs);
																		for ($l=0; $l <count($numfk_stu_cs) ; $l++) { 
																			$selstu_id = $numfk_stu_cs[$l]['cs_student_id'];
																			$selstu_name = selstuname($conn,$selstu_id);
																			for ($k=0; $k <count($selstu_name) ; $k++) { 
																				$idstu = $selstu_name[$k]['student_id'];
																				$namestu = $selstu_name[$k]['student_name_th'];
																				?>
																				<p style="font-weight: bolder;">ID Student :<?php echo $idstu; ?></p>
																				<p style="font-weight: bolder;">Name :<?php echo $namestu; ?></p>
																				<?php 
																			}

																		} ?>
																		<?php $numfk_stu_cs = selcs($conn,$keys_cs);
																		for ($a=0; $a <count($numfk_stu_cs) ; $a++) { 
																			$selcou_id = $numfk_stu_cs[$a]['cs_course_id'];
																			$selcou_name = selcouname($conn,$selcou_id);
																			for ($x=0; $x <count($selcou_name) ; $x++) { 
																				$category = $selcou_name[$x]['course_category'];
																				$expension = $selcou_name[$x]['course_expension'];
																				$code = $selcou_name[$x]['course_code'];
																				?>
																				<p style="font-weight: bolder;">Category  :<?php echo $category; ?></p>
																				<p style="font-weight: bolder;">Expension  :<?php echo $expension; ?></p>
																				<p style="font-weight: bolder;">Code  :<?php echo $code; ?></p>
																				<?php
																			}
																		} ?>
																		<button id="btn_more<?php echo $cus[$i]['no_id']; ?>" type="button" class="btn btn-info" style="width: 100%; height: 35px; margin-bottom: 10px;">More</button>

																		<div id="hidecontent<?php echo $cus[$i]['no_id']; ?>" style="display: none;">


																			<?php $numfk_pay_cs = selcs($conn,$keys_cs);
																			for ($e=0; $e <count($numfk_pay_cs) ; $e++) { 
																				$selpay_id = $numfk_pay_cs[$e]['course_payment_id'];
																				$selpay_topic = selpaytopic($conn,$selpay_id);
																				for ($r=0; $r <count($selpay_topic) ; $r++) { 
																					$nametopic = $selpay_topic[$r]['payment_type'];
																					$paymentno = $selpay_topic[$r]['payment_no'];
																					$payamount = $selpay_topic[$r]['payment_amount'];
																					$paybank = $selpay_topic[$r]['payment_bank'];
																					$paydate = $selpay_topic[$r]['payment_date'];
																					$payimg = $selpay_topic[$r]['payment_img'];
																					?>
																					<p style="font-weight: bolder;">Payment_no : <?php echo $paymentno; ?></p>
																					<p style="font-weight: bolder;">Amount : <?php echo $payamount; ?></p>
																					<p style="font-weight: bolder;">Bank : <?php echo $paybank; ?></p>
																					<p style="font-weight: bolder;">Date : <?php echo $paydate; ?></p>
																					<img class="card-img-top" style="width: 445px; margin-bottom: 30px;"
																					src="../img_payment/<?php echo $payimg;?>" alt="Card image cap" >
																					<?php
																				}

																			} ?>

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
								<?php } elseif ($topic == 'Add Camp') {

									// echo "=================================================================";

									$join_camp = joindata_camp($conn,$show);
									for ($c=0; $c <count($join_camp) ; $c++) { 
										$set = $join_camp[$c]['student_id'];
										$se = $join_camp[$c]['cs_payment_id'];
										// echo "ค่าที่ค้นหาจากชื่อ==".$set;

										$numfk_stu = selcp($conn,$keys_cp);
										for ($b=0; $b <count($numfk_stu) ; $b++) { 
											$selstu_id = $numfk_stu[$b]['cs_student_id'];
											$selstu_pay = $numfk_stu[$b]['cs_payment_id'];
											$selid = $numfk_stu[$b]['cp_id'];


											// echo "ค่าไอดีที่อยู่ในcp==".$selstu_id,$selstu_pay;

											if ($se == $selstu_pay) {
												// echo "Hi there ,".$set;


												?>
												<tr>
													<td><?php echo $cus[$i]['no_id']; ?></td>
													<td><?php echo $topic; ?></td>
													<td><?php $numfk_stu_cp = selcp($conn,$keys_cp);
													for ($l=0; $l <count($numfk_stu_cp) ; $l++) { 
														$selstu_id = $numfk_stu_cp[$l]['cs_student_id'];
														$selstu_name = selstuname($conn,$selstu_id);
														for ($k=0; $k <count($selstu_name) ; $k++) { 
															$namestu = $selstu_name[$k]['student_name_th'];
															echo $namestu;
														}

													} ?></td>
													<td><?php $numfk_pay_cp= selcp($conn,$keys_cp);
													for ($e=0; $e <count($numfk_pay_cp) ; $e++) { 
														$selpay_id = $numfk_pay_cp[$e]['cs_payment_id'];
														$selpay_date = selpaydate($conn,$selpay_id);
														for ($r=0; $r <count($selpay_date) ; $r++) { 
															$datetopic = $selpay_date[$r]['payment_date'];
															echo $datetopic;
														}

													} ?></td>
													<td><?php echo $cus[$i]['timestamp']; ?></td>
													<td><?php echo $cus[$i]['approver']; ?></td>

													<td>

														<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>">Information</button>
														<!-- Modal -->
														<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
															<div class="modal-dialog">
																<!-- Modal content-->
																<div class="modal-content">
																	<div class="icon_func_modal">
																		<a id="close <?php echo $cus[$i]['no_id']; ?>"class="icon_inmodals" data-dismiss="modal"style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>

																	</div>

																	<div class="modal-body">
																		<h4 style="font-weight: bold;">Notification ID : <?php echo $cus[$i]['no_id']; ?></h4>
																		<?php $numfk_pay_cp = selcp($conn,$keys_cp);
																		for ($e=0; $e <count($numfk_pay_cp) ; $e++) { 
																			$selpay_id = $numfk_pay_cp[$e]['cs_payment_id'];
																			$selpay_topic = selpaytopic($conn,$selpay_id);
																			for ($r=0; $r <count($selpay_topic) ; $r++) { 
																				$nametopic = $selpay_topic[$r]['payment_type'];
																				?>
																				<p style="font-weight: bolder;">Topic :<?php echo $nametopic; ?></p>
																				<?php
																			}

																		} ?>
																		<?php $numfk_stu_cp = selcp($conn,$keys_cp);
																		for ($l=0; $l <count($numfk_stu_cp) ; $l++) { 
																			$selstu_id = $numfk_stu_cp[$l]['cs_student_id'];
																			$selstu_name = selstuname($conn,$selstu_id);
																			for ($k=0; $k <count($selstu_name) ; $k++) { 
																				$idstu = $selstu_name[$k]['student_id'];
																				$namestu = $selstu_name[$k]['student_name_th'];
																				?>
																				<p style="font-weight: bolder;">ID Student :<?php echo $idstu; ?></p>
																				<p style="font-weight: bolder;">Name :<?php echo $namestu; ?></p>
																				<?php 
																			}

																		} ?>
																		<?php $numfk_stu_cp = selcp($conn,$keys_cp);
																		for ($a=0; $a <count($numfk_stu_cp) ; $a++) { 
																			$selcou_id = $numfk_stu_cp[$a]['cs_camp_id'];
																			$selcamp_name = selcampname($conn,$selcou_id);
																			for ($x=0; $x <count($selcamp_name) ; $x++) { 
																				$camp_program = $selcamp_name[$x]['camp_program'];
																				$camp_date_start = $selcamp_name[$x]['camp_date_start'];
																				$camp_date_end = $selcamp_name[$x]['camp_date_end'];
																				?>
																				<p style="font-weight: bolder;">Camp Program  :<?php echo $camp_program; ?></p>
																				<p style="font-weight: bolder;">Camp Start  :<?php echo $camp_date_start; ?></p>
																				<p style="font-weight: bolder;">Camp End  :<?php echo $camp_date_end; ?></p>
																				<?php
																			}
																		} ?>
																		<button id="btn_more<?php echo $cus[$i]['no_id']; ?>" type="button" class="btn btn-info" style="width: 100%; height: 35px; margin-bottom: 10px;">More</button>

																		<div id="hidecontent<?php echo $cus[$i]['no_id']; ?>" style="display: none;">


																			<?php $numfk_pay_cp = selcp($conn,$keys_cp);
																			for ($e=0; $e <count($numfk_pay_cp) ; $e++) { 
																				$selpay_id = $numfk_pay_cp[$e]['cs_payment_id'];
																				$selpay_topic = selpaytopic($conn,$selpay_id);
																				for ($r=0; $r <count($selpay_topic) ; $r++) { 
																					$nametopic = $selpay_topic[$r]['payment_type'];
																					$paymentno = $selpay_topic[$r]['payment_no'];
																					$payamount = $selpay_topic[$r]['payment_amount'];
																					$paybank = $selpay_topic[$r]['payment_bank'];
																					$paydate = $selpay_topic[$r]['payment_date'];
																					$payimg = $selpay_topic[$r]['payment_img'];
																					?>
																					<p style="font-weight: bolder;">Payment_no : <?php echo $paymentno; ?></p>
																					<p style="font-weight: bolder;">Amount : <?php echo $payamount; ?></p>
																					<p style="font-weight: bolder;">Bank : <?php echo $paybank; ?></p>
																					<p style="font-weight: bolder;">Date : <?php echo $paydate; ?></p>
																					<img class="card-img-top" style="width: 445px; margin-bottom: 30px;"
																					src="../img_payment/<?php echo $payimg;?>" alt="Card image cap" >
																					<?php
																				}

																			} ?>

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

								<?php }elseif($topic == 'Add Compeitition') {

									// echo "=================================================================";

									$join_compeitition = joindata_compeitition($conn,$show);
									for ($c=0; $c <count($join_compeitition) ; $c++) { 
										$set = $join_compeitition[$c]['student_id'];
										$se = $join_compeitition[$c]['cps_payment_id'];
										// echo "ค่าที่ค้นหาจากชื่อ==".$set;

										$numfk_stu = selcps($conn,$keys_cps);
										for ($b=0; $b <count($numfk_stu) ; $b++) { 
											$selstu_id = $numfk_stu[$b]['cps_student_id'];
											$selstu_pay = $numfk_stu[$b]['cps_payment_id'];
											$selid = $numfk_stu[$b]['cps_id'];


											// echo "ค่าไอดีที่อยู่ในcp==".$selstu_id,$selstu_pay;

											if ($se == $selstu_pay) {
												// echo "Hi there ,".$set;



												?>
												<tr>
													<td><?php echo $cus[$i]['no_id']; ?></td>
													<td><?php echo $topic; ?></td>
													<td><?php $numfk_stu_cps = selcps($conn,$keys_cps);
													for ($l=0; $l <count($numfk_stu_cps) ; $l++) { 
														$selstu_id = $numfk_stu_cps[$l]['cps_student_id'];
														$selstu_name = selstuname($conn,$selstu_id);
														for ($k=0; $k <count($selstu_name) ; $k++) { 
															$namestu = $selstu_name[$k]['student_name_th'];
															echo $namestu;
														}

													} ?></td>
													<td><?php $numfk_pay_cps= selcps($conn,$keys_cps);
													for ($e=0; $e <count($numfk_pay_cps) ; $e++) { 
														$selpay_id = $numfk_pay_cps[$e]['cps_payment_id'];
														$selpay_date = selpaydate($conn,$selpay_id);
														for ($r=0; $r <count($selpay_date) ; $r++) { 
															$datetopic = $selpay_date[$r]['payment_date'];
															echo $datetopic;
														}

													} ?></td>
													<td><?php echo $cus[$i]['timestamp']; ?></td>
													<td><?php echo $cus[$i]['approver']; ?></td>

													<td>

														<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal<?php echo $i;?>">Information</button>
														<!-- Modal -->
														<div class="modal fade" id="myModal<?php echo $i;?>" role="dialog">
															<div class="modal-dialog">
																<!-- Modal content-->
																<div class="modal-content">
																	<div class="icon_func_modal">
																		<a id="close <?php echo $cus[$i]['no_id']; ?>"class="icon_inmodals" data-dismiss="modal"style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>

																	</div>

																	<div class="modal-body">
																		<h4 style="font-weight: bold;">Notification ID : <?php echo $cus[$i]['no_id']; ?></h4>
																		<?php $numfk_pay_cs = selcps($conn,$keys_cps);
																		for ($e=0; $e <count($numfk_pay_cps) ; $e++) { 
																			$selpay_id = $numfk_pay_cps[$e]['cps_payment_id'];
																			$selpay_topic = selpaytopic($conn,$selpay_id);
																			for ($r=0; $r <count($selpay_topic) ; $r++) { 
																				$nametopic = $selpay_topic[$r]['payment_type'];
																				?>
																				<p style="font-weight: bolder;">Topic :<?php echo $nametopic; ?></p>
																				<?php
																			}

																		} ?>
																		<?php $numfk_stu_cps = selcps($conn,$keys_cps);
																		for ($l=0; $l <count($numfk_stu_cps) ; $l++) { 
																			$selstu_id = $numfk_stu_cps[$l]['cps_student_id'];
																			$selstu_name = selstuname($conn,$selstu_id);
																			for ($k=0; $k <count($selstu_name) ; $k++) { 
																				$idstu = $selstu_name[$k]['student_id'];
																				$namestu = $selstu_name[$k]['student_name_th'];
																				?>
																				<p style="font-weight: bolder;">ID Student :<?php echo $idstu; ?></p>
																				<p style="font-weight: bolder;">Name :<?php echo $namestu; ?></p>
																				<?php 
																			}

																		} ?>
																		<?php $numfk_stu_cps = selcps($conn,$keys_cps);
																		for ($a=0; $a <count($numfk_stu_cps) ; $a++) { 
																			$selcou_id = $numfk_stu_cps[$a]['cps_com_id'];
																			$selcompetition_name = selcompeititionname($conn,$selcou_id);
																			for ($x=0; $x <count($selcompetition_name) ; $x++) { 
																				$type = $selcompetition_name[$x]['com_type'];
																				$program = $selcompetition_name[$x]['com_program'];
																				$datestart = $selcompetition_name[$x]['com_start_date'];
																				$dateend = $selcompetition_name[$x]['com_end_date'];
																				?>
																				<p style="font-weight: bolder;">Type of Compeitition  :<?php echo $type; ?></p>
																				<p style="font-weight: bolder;">Program  :<?php echo $program; ?></p>
																				<p style="font-weight: bolder;">Date Start  :<?php echo $datestart; ?></p>
																				<p style="font-weight: bolder;">Date end  :<?php echo $dateend; ?></p>
																				<?php
																			}
																		} ?>
																		<button id="btn_more<?php echo $cus[$i]['no_id']; ?>" type="button" class="btn btn-info" style="width: 100%; height: 35px; margin-bottom: 10px;">More</button>


																		<div id="hidecontent<?php echo $cus[$i]['no_id']; ?>" style="display: none;">


																			<?php $numfk_pay_cps = selcps($conn,$keys_cps);
																			for ($e=0; $e <count($numfk_pay_cps) ; $e++) { 
																				$selpay_id = $numfk_pay_cps[$e]['cps_payment_id'];
																				$selpay_topic = selpaytopic($conn,$selpay_id);
																				for ($r=0; $r <count($selpay_topic) ; $r++) { 
																					$nametopic = $selpay_topic[$r]['payment_type'];
																					$paymentno = $selpay_topic[$r]['payment_no'];
																					$payamount = $selpay_topic[$r]['payment_amount'];
																					$paybank = $selpay_topic[$r]['payment_bank'];
																					$paydate = $selpay_topic[$r]['payment_date'];
																					$payimg = $selpay_topic[$r]['payment_img'];
																					?>
																					<p style="font-weight: bolder;">Payment_no : <?php echo $paymentno; ?></p>
																					<p style="font-weight: bolder;">Amount : <?php echo $payamount; ?></p>
																					<p style="font-weight: bolder;">Bank : <?php echo $paybank; ?></p>
																					<p style="font-weight: bolder;">Date : <?php echo $paydate; ?></p>
																					<img class="card-img-top" style="width: 445px; margin-bottom: 30px;"
																					src="../img_payment/<?php echo $payimg;?>" alt="Card image cap" >
																					<?php
																				}

																			} ?>

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


								<!-- เพิ่มเงื่อนไขข้อมูลที่นี้ -->




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