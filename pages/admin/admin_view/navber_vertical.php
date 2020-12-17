<style type="text/css" media="screen">
	.vertical-nav {
		margin-top: ;
		min-width: 17rem;
		width: 17rem;
		height: 100vh;
		position: fixed;
		top: 0;
		left: 0;
		box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
		transition: all 0.4s;
		background-color: white;
		overflow-y: scroll;
	}

	.page-content {
		width: calc(100% );
		margin-left: 17rem;
		transition: all 0.4s;
	}

	/* for toggle behavior */
	#sidebar.active {
		margin-left: -17rem;
	}

	#content.active {
		width: 100%;
		margin: 0;
	}

	@media (max-width: 768px) {
		#sidebar {
			margin-left: -17rem;
		}
		#sidebar.active {
			margin-left: 0;
		}
		#content {
			width: 100%;
			margin: 0;
		}
		#content.active {
			margin-left: 17rem;
			width: calc(100% - 17rem);
		}
	}
	.separator {
		margin: 3rem 0;
		border-bottom: 1px dashed #fff;
	}

	.text-uppercase {
		letter-spacing: 0.1em;
	}

	.text-gray {
		color: #aaa;
	}
	.modal-backdrop{
		position: inherit !IMPORTANT;
	}
	.fc-daygrid-event{
		border-radius: 6px !IMPORTANT;
	}
	/* width */
	::-webkit-scrollbar {
		width: 10px;
	}

	/* Track */
	::-webkit-scrollbar-track {
		background: #f1f1f1; 
	}

	/* Handle */
	::-webkit-scrollbar-thumb {
		background: #888; 
	}

	/* Handle on hover */
	::-webkit-scrollbar-thumb:hover {
		background: #555; 
	}
	.a_fontoflist{
		font-size: 20px !important;
		padding: 5% !important;
	}
	.space_of_items{
		padding-top: 9%;
	}
</style>
<body>
	<!-- zx -->
	<div class="vertical-nav bg-white" id="sidebar">
		<ul class="nav flex-column bg-white mb-0">
			<li class="nav-item" style="padding-top: 50%;">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-1" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-th-large mr-3  fa-fw"></i>
						Dashboard
						<span class="caret"></span>
					</a>
					<ul id="submenu-1" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-2" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-calendar-check-o mr-3  fa-fw"></i>
						Schedule
						<span class="caret"></span>
					</a>
					<ul id="submenu-2" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-3" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-user mr-3  fa-fw"></i>
						Teacher
						<span class="caret"></span>
					</a>
					<ul id="submenu-3" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-4" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-user mr-3  fa-fw"></i>
						Students
						<span class="caret"></span>
					</a>
					<ul id="submenu-4" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-5" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-book mr-3  fa-fw"></i>
						Course
						<span class="caret"></span>
					</a>
					<ul id="submenu-5" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-6" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-trophy mr-3  fa-fw"></i>
						Competitions
						<span class="caret"></span>
					</a>
					<ul id="submenu-6" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-7" aria-haspopup="true" aria-expanded="false">
						<i class="glyphicon glyphicon-triangle-top mr-3  fa-fw"></i>
						Camp
						<span class="caret"></span>
					</a>
					<ul id="submenu-7" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-8" aria-haspopup="true" aria-expanded="false">
						<i class="far fa-address-card mr-3  fa-fw"></i>
						Certificate
						<span class="caret"></span>
					</a>
					<ul id="submenu-8" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-9" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-gear mr-3  fa-fw"></i>
						Setting
						<span class="caret"></span>
					</a>
					<ul id="submenu-9" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
			<li class="nav-item space_of_items">
				<div class="dropdown">
					<a href="#" class="nav-link text-dark font-italic a_fontoflist" id="about-us" data-toggle="collapse" data-target="#submenu-10" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-store mr-3  fa-fw"></i>
						Franchise
						<span class="caret"></span>
					</a>
					<ul id="submenu-10" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<!-- zx -->

	<!-- Content -->
	<div class="container" style="margin-left: 5%;">
		<div class="row">
			<div class="page-content p-5" id="content">
				<button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
				<button type="button" class="Button" data-toggle="modal" data-target="#form" style="padding: 7px;">
					Create Schedule
				</button> 
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