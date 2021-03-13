<head>

	<style type="text/css" media="screen">
		.modals_content{
			display: flex;
		}
		.modlas_body{
			display: flex;
			flex-direction: column;
			padding: 2%;
		}
		.card{
			box-shadow: unset !important;
			border-radius: 5px;
			width: ;
			padding-bottom: unset !important;
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

		/* Darker background on mouse-over */
		.icon_inmodals:hover {
			background-color: RoyalBlue;
		}
		.modal-content{
			width: 100% !important;
		}
		.icon_func_modal{
			display: flex;
			justify-content: flex-start;
			flex-direction: row-reverse;
		}
		mark{
			background-color: yellow;
			color: black;
		}

	</style>
</head>
<body>
	<!-- Content -->
	<div class="page-content p-5" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<div class="container">
			<div class="row">
				
				<div style="display: flex;flex-direction: row;align-items: center;justify-content:space-between;margin-top: 2%;margin-bottom: 2%;">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
						Create Schedule++
					</button>
					<div style="display: flex;flex-direction: row;">
						<div style="display: flex;flex-direction: row;margin-left: 10px;">
							<svg width="20" height="20" style="border-radius:4px;">
								<rect width="100" height="100" style="fill:rgb(1,90,240);stroke-width:3;" />
								Sorry, your browser does not support inline SVG.  
							</svg>
							<p style="margin-left: 2px;">Course</p>
						</div>
						<div style="display: flex;flex-direction: row;margin-left: 10px;">
							<svg width="20" height="20" style="border-radius:4px;">
								<rect width="100" height="100" style="fill:rgb(250,123,202);stroke-width:3;" />
								Sorry, your browser does not support inline SVG.  
							</svg>
							<p style="margin-left: 2px;">Camp</p>
						</div>
						<div style="display: flex;flex-direction: row;margin-left: 10px;">
							<svg width="20" height="20" style="border-radius:4px;">
								<rect width="100" height="100" style="fill:rgb(0,0,0);stroke-width:3;" />
								Sorry, your browser does not support inline SVG.  
							</svg>
							<p style="margin-left: 2px;">Compitition</p>
						</div>
					</div>
				</div> 
				<div style="" id="calendar" ></div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal" id="myModal" role="dialog">

		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content" >
				<div class="modal-header" style="background-color: white; color: black;">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Create Schedule</h4>
				</div>
				<form action="index.php?app=admin&action=insert_datetime" method="POST">
					<div class="modal-body">
						<div class="modals_content">
							<div class="modlas_body">

								<label for="start">Day:</label>
								<input type="date" id="start" name="start_time">

								<label for="appt">Select start time:</label>
								<input type="time" id="build_time" name="build_time">

								<label for="appt">Select end time:</label>
								<input type="time" id="build_time" name="end_time">

								<div class="" style="padding: 10px 10px;">
									<label for="cars">Choose a Status:</label>
									<select name="color" id="cars">
										<option value="#015af0">Course</option>
										<option value="#fa7bca">Camp</option>
										<option value="#000000">Compitition</option>
									</select>
									
								</div>
								<div style="display: flex;flex-direction: row;width: 100%">
									<div style="display: flex;flex-direction: row;margin-left: 10px;">
										<svg width="20" height="20" style="border-radius:4px;">
											<rect width="100" height="100" style="fill:rgb(1,90,240);stroke-width:3;" />
											Sorry, your browser does not support inline SVG.  
										</svg>
										<p style="margin-left: 2px;">Course</p>
									</div>
									<div style="display: flex;flex-direction: row;margin-left: 10px;">
										<svg width="20" height="20" style="border-radius:4px;">
											<rect width="100" height="100" style="fill:rgb(250,123,202);stroke-width:3;" />
											Sorry, your browser does not support inline SVG.  
										</svg>
										<p style="margin-left: 2px;">Camp</p>
									</div>
									<div style="display: flex;flex-direction: row;margin-left: 10px;">
										<svg width="20" height="20" style="border-radius:4px;">
											<rect width="100" height="100" style="fill:rgb(0,0,0);stroke-width:3;" />
											Sorry, your browser does not support inline SVG.  
										</svg>
										<p style="margin-left: 2px;">Compitition</p>
									</div>
								</div>
							</div>	
						</div>
					</div>
					<div class="modal-footer" style="background-color: white;">
						<input style="width: 30%; padding: 2px; border-radius: 5px; background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);" type="submit" value="Submit">
						<button style="width: 30%; padding: 2px; border-radius: 5px; background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);" type="button" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php for($j = 0; $j<count($cus);$j++){ ?>
		<div class="modal" id="myModal1<?php echo $cus[$j]['calender_id']; ?>" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" >
					<div class="modal-body" style="margin-bottom: 2%;">
						<div class="icon_func_modal">
							<a id="close<?php echo $cus[$j]['calender_id']; ?>"class="icon_inmodals" style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>
							<a id="toggle_edit<?php echo $cus[$j]['calender_id']; ?>" class="icon_inmodals" style="background-color: green;"><i class="fas fa-pencil-alt"></i></a>
							<a id="toggle_adduser<?php echo $cus[$j]['calender_id']; ?>" class="icon_inmodals" style="background-color: orange;"><i class="fas fa-book"></i></a>
							<a href="index.php?app=admin&action=delete_calendar<?php echo $cus[$j]['calender_id']; ?>" onclick="myFunction()" class="icon_inmodals" style="background-color: black;"><i class="fa fa-trash"></i></a>
							
						</div>	
						<div id="class_room">
							
							<?php $original_date = $cus[$j]['calender_date'];
							$timestamp = strtotime($original_date);
							$new_date = date("d-m-Y", $timestamp);?>
							<h1><b>Class Room</b></h1>
							<div class="add_user" id="adduser<?php echo $cus[$j]['calender_id']; ?>" style="display: none;">
								<form action="index.php?app=admin&action=add_teacherclassroom<?php echo $cus[$j]['calender_id']; ?>" method="POST">
									<label for="name_t"><h2><b>Teacher :</b></h2></label>
									<select class="form-control"name="name_t" id="name_t">
										<?php for($k = 0; $k<count($t_list);$k++){ ?>
											<option value="<?php echo $t_list[$k]['teacher_id']; ?>"><?php echo $t_list[$k]['teacher_fname']; ?></option>
										<?php } ?>
									</select><br>
									<label for="name_s"><h2><b>Students :</b></h2></label>
									<select class="form-control"name="name_s" id="name_s">
										<?php for($l = 0; $l<count($s_list);$l++){ ?>
											<option value="<?php echo $s_list[$l]['student_id']; ?>"><?php echo $s_list[$l]['student_name_eng']; ?></option>
										<?php } ?>
									</select><br>
									<label for="name_course"><h2><b>Course :</b></h2></label>
									<select class="form-control"name="c_id" id="name_course">
										<?php for($course = 0; $course<count($course_name);$course++){ ?>
											<option value="<?php echo $course_name[$course]['course_id']; ?>"><?php echo $course_name[$course]['course_expension']; ?></option>
										<?php } ?>
									</select><br>

									<input style="margin-top: 2%;" class="btn btn-success" type="submit" >
									<hr style="width:100%;text-align:left;margin-left:0">
									<?php for($m = 0; $m<count($classroom);$m++){ ?>
										<?php if($classroom[$m]['id_calendar_fk'] == $cus[$j]['calender_id']) {?>
											<!-- <p><b>List in Class room: <?php echo $classroom[$m]['id_calendar_fk']; ?></b></p> -->
											<p><b>Name: <?php echo $classroom[$m]['fname']; ?></b></p>
											<p><b>status: <?php echo $classroom[$m]['status']; ?></b></p>
											<hr style="width:100%;text-align:left;margin-left:0">
										<?php }?>
									<?php } ?>
								</form>
							</div>

							<p><b>Today: <?php echo $new_date; ?></b></p>
							<mark><b><?php echo $cus[$j]['calender_starttime']; ?>:00-<?php echo $cus[$j]['calender_endtime']; ?>:00</b></mark><br>

						</div>
						<div id="edit_date<?php echo $cus[$j]['calender_id']; ?>" style="margin-top:2%;display: none;">
							
							<form action="index.php?app=admin&action=edit_calendar<?php echo $cus[$j]['calender_id']; ?>" method="POST">
								<label for="start">Current Day: <?php echo $new_date; ?></label>
								<input style="width: 100%;" type="date" id="start" name="start_time<?php echo $cus[$j]['calender_id']; ?>"><br>

								<label for="appt">Current Start time: <?php echo $cus[$j]['calender_starttime']; ?></label>
								<input style="width: 100%;" type="time" id="build_time" name="build_time<?php echo $cus[$j]['calender_id']; ?>"><br>

								<label for="appt">Current End time: <?php echo $cus[$j]['calender_endtime']; ?></label>
								<input style="width: 100%;" type="time" id="build_time" name="end_time<?php echo $cus[$j]['calender_id']; ?>"><br>

								<div class="" style="padding: 10px 10px;">
									<label for="cars">Choose a Status:</label>
									<select name="color<?php echo $cus[$j]['calender_id']; ?>" id="cars">
										<option value="#015af0">Course</option>
										<option value="#fa7bca">Camp</option>
										<option value="#000000">Compitition</option>
									</select>
								</div>
								<div>
									<input style="color:white;width: 30%; padding: 2px; border-radius: 5px; background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);" type="submit" value="Edit">
								</div>	
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
</body>
<script>

	document.addEventListener('DOMContentLoaded', function () {
		var calendarEl = document.getElementById('calendar');
		var calendar = new FullCalendar.Calendar(calendarEl, {
			fixedMirrorParent: document.body,
			initialView: 'dayGridMonth',
			timeZone: 'GMT',
			editable:true,
			droppable:true,
			selectable: true,

			headerToolbar: {
				left: 'prev,next today',
				center: 'title',
				right: 'dayGridMonth,timeGridWeek,timeGridDay'
			},
			dateClick: function(info) {
				// alert('Date: ' + info.dateStr);
				console.log(info);

				
			},


			events: [
			<?php for($i=0;$i<count($cus);$i++){ ?>
				{
					id: '<?php echo $cus[$i]['calender_id']; ?>',
					borderColor: '<?php echo $cus[$i]['calender_color']; ?>',
					backgroundColor:'<?php echo $cus[$i]['calender_color']; ?>',
					title: '<?php echo $cus[$i]['calender_starttime']; ?>:00-<?php echo $cus[$i]['calender_endtime']; ?>:00',
					start: '<?php echo $cus[$i]['calender_date']; ?>',
					end: '<?php echo $cus[$i]['calender_date']; ?>'
				},
			<?php }?>
			],

			eventClick:function(info){
				var eventObj = info.event;
				if(eventObj.id){
					$("#myModal1"+eventObj.id).show();
					$("#close"+eventObj.id).click(function() {
						$("#myModal1"+eventObj.id).hide();
					});
				}
				$("#toggle_edit"+eventObj.id).click(function() {
					/* Act on the event */
					$("#edit_date"+eventObj.id).slideToggle("slow");
				});
				$("#toggle_adduser"+eventObj.id).click(function() {
					/* Act on the event */
					$("#adduser"+eventObj.id).slideToggle("slow");
				});

			},
			eventOverlap: function(stillEvent, movingEvent) {
				return stillEvent.allDay && movingEvent.allDay;
			},
			eventDrop: function(info) {
				alert(info.event.title + " was dropped on " + info.event.start.toISOString());
				if (!confirm("Are you sure about this change?")) {
					info.revert();
				}
			},
			eventResize: function(info) {
				alert(info.event.title + " end is now " + info.event.end.toISOString());
				if (!confirm("is this okay?")) {
					info.revert();
				}
			},
			eventDidMount: function(info) {
				if (info.event.extendedProps.status === 'done') {
					info.el.style.backgroundColor = 'red';
					var dotEl = info.el.getElementsByClassName('fc-event-dot')[0];
					if (dotEl) {
						dotEl.style.backgroundColor = 'white';
					}
				}
			},
			selectOverlap: function(event) {
				return event.rendering === 'background';
			}
		});
		<?php for($l=0;$l<count($cus);$l++){ ?>
			var event = calendar.getEventById('<?php echo $cus[$l]['calender_id']; ?>')
		<?php }?>
		var start = event.start 
		calendar.render();

	});
	
</script>