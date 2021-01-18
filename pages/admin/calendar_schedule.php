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
			padding: 5px 7px;
			font-size: 10px;
			cursor: pointer;
		}

		/* Darker background on mouse-over */
		.icon_inmodals:hover {
			background-color: RoyalBlue;
		}

	</style>
</head>
<body>
	<!-- Content -->
	<div class="page-content p-5" id="content">
		<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
		<div class="container">
			<div class="row">
				
				<div style="padding-left: 5%;">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
						Create Schedule++
					</button>
					
				</div> 
				

				<div style="padding: 5%;" id="calendar" ></div>

				
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
										<option value="blue">Attended</option>
										<option value="pink">Take a leave</option>
										<option value="black">Schedule</option>
									</select>
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
				<!-- Modal content-->
				<div class="modal-content" >
					<div class="modal-header" style="background-color: white; color: black;">
						<div>
							<a id="close<?php echo $cus[$j]['calender_id']; ?>"class="icon_inmodals" style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>
							<a id="toggle_edit<?php echo $cus[$j]['calender_id']; ?>" class="icon_inmodals" style="background-color: green;"><i class="fas fa-pencil-alt"></i></a>
							<a href="index.php?app=admin&action=delete_calendar<?php echo $cus[$j]['calender_id']; ?>" onclick="myFunction()" class="icon_inmodals" style="background-color: black;"><i class="fa fa-trash"></i></a>
							
						</div>
					</div>

					<div class="modal-body">
						<div id="class_room">
							<?php $original_date = $cus[$j]['calender_date'];
							$timestamp = strtotime($original_date);
							$new_date = date("d-m-Y", $timestamp);?>

							<h1><b>Class Room</b></h1>
							<h2><b>Teacher : </b>Jonh Smith</h2>
							<h2><b>Students : </b>0 / 10</h2>
							<p><b>Today: <?php echo $new_date; ?></b></p>
							<p><b><?php echo $cus[$j]['calender_starttime']; ?>:00-<?php echo $cus[$j]['calender_endtime']; ?>:00</b></p>
						</div>
						<div id="edit_date<?php echo $cus[$j]['calender_id']; ?>" style="display: none;">
							<hr style="width:100%;text-align:left;margin-left:0">
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
										<option value="blue">Attended</option>
										<option value="pink">Take a leave</option>
										<option value="black">Schedule</option>
									</select>
								</div>
								<div>
									<input style="color:white;width: 30%; padding: 2px; border-radius: 5px; background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);" type="submit" value="Edit">
								</div>	
							</form>
						</div>
					</div>
					<div class="modal-footer" style="background-color: white;">
						
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
					end: '<?php echo $cus[$i]['calender_date']; ?>',

					extendedProps: {
						status: ''
					} 
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