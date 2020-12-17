
<body>
	<!-- Content -->
	<div class="container" style="margin-left: 5%;">
		<div class="row">
			<div class="page-content p-5" id="content">
				<h1>Teacher</h1>
				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
				<button type="button" class="Button" data-toggle="modal" data-target="#form" style="padding: 7px;">
					Create Schedule
				</button> 
				<form method='get'>
					<a class="Button" style="margin-top:2%; padding: 5px; width:150px;  text-align: center;"
					href="index.php?app=admin&action=admin_teacher">Next</a> 
				</form>
				<div id="calendar">
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Windows -->
	<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header border-bottom-0">
					<h5 class="modal-title" id="exampleModalLabel">Create Schedule</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row" style="align-items: center; display: flex; ">
						<div class="col-md-12">
							<form action="index.php?app=jed&action=insert" method="POST">
								<label  for="start">Start Time:</label>
								<input style="width: 100%;" type="date" id="start" name="start_time">
								<br><br>
								<label for="end">End Time:</label>
								<input style="width: 100%;" type="date" id="end" name="end_time">
								<br><br>
								<label for="titlee">Title:</label><br>
								<input style="width: 100%;" type="text" name="title" id="titlee">
								<div style="padding: 2%;">
									<label for="cars">Choose a Status:</label>
									<select name="color" id="cars">
										<option value="blue">Attended</option>
										<option value="pink">Take a leave</option>
										<option value="black">Schedule</option>
									</select>
								</div>
								<input  class="" style="width: 100%; margin-top: 5%; margin-bottom: 5%" type="submit">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	$(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
  	$('#sidebar, #content').toggleClass('active');
  });
});
  // Calendar
  var eventcalendar =[];
  <?php echo $cus; ?>.forEach(value =>{
  	eventcalendar.push( {
  		id: 'a',
  		title: value.title,
  		start: value.start_time,
  		end: value.end_time,
  		extendedProps: {
  			status: ''
  		},
  		borderColor: value.color,

  		backgroundColor:value.color
  	});
  });
  document.addEventListener('DOMContentLoaded', function () {
  	var calendarEl = document.getElementById('calendar');
  	var calendar = new FullCalendar.Calendar(calendarEl, {
  		fixedMirrorParent: document.body,
  		initialView: 'dayGridMonth',
  		timeZone: 'UTC',
  		editable:true,
  		droppable:true,
  		selectable: true,

  		headerToolbar: {
  			left: 'prev,next today',
  			center: 'title',
  			right: 'dayGridMonth,timeGridWeek,timeGridDay'
  		},
  		dateClick: function(info) {
  			alert('Date: ' + info.dateStr);
  		},
  		events: eventcalendar,

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
  	var event = calendar.getEventById('a')
  	var start = event.start 
  	calendar.render();
  });

</script>