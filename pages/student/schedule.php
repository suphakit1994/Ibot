15ad>
<style>


	$grey: #F5F5F5;
	$dark-grey: #323B40;

	$light-blue: #E0F5FF;
	$blue: #B9E5FE;
	$dark-blue: #00A5FA;

	$green: #B7E0DC;
	$dark-green: #019888;

	$lime: #C7E8C8;
	$dark-lime: #42B045;

	$yellow: #FFEEBA;
	$dark-yellow: #FF9901;

	$pink: #FABAD0;
	$dark-pink: #EF075F;

	$red: #FEC9C6;
	$dark-red: #FD3D08;

	@mixin color-div($color1, $color2){
		background-color: $color1;
		color: $color2;
	}

	.container {
		padding: 2rem 0rem;
	}

	h4 {
		margin: 2rem 0rem;
	}

	.panel {
		border-radius: 4px;
		padding: 1rem;
		margin-top: 0.2rem;

		@include color-div($grey, $dark-grey);

		&.panel-blue {
			@include color-div($light-blue, $dark-blue);
		}

		&.panel-big-height{
			min-height: 150px;
		}
	}

	.item {
		border-radius: 4px;
		padding: 0.5rem;
		margin: 0.2rem;

		&.item-blue {
			@include color-div($blue, $dark-blue);
		}

		&.item-green {
			@include color-div($green, $dark-green);
		}

		&.item-lime {
			@include color-div($lime, $dark-lime);
		}

		&.item-yellow {
			@include color-div($yellow, $dark-yellow);
		}

		&.item-pink {
			@include color-div($pink, $dark-pink);
		}

		&.item-red {
			@include color-div($red, $dark-red);
		}

		&.item-big-width{
			min-width: 380px;
		}
	}
	.modal-backdrop{
		position: inherit !IMPORTANT;
	}
	.fc-daygrid-event{
		border-radius: 10px !IMPORTANT;
	}
	.card {
		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2) !important;
		transition: 0.3s !important;
		width: 100% !important;
		border-radius: 8px !important;
	}

	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2) !important;
	}

	img {
		border-radius: 5px 5px 0 0 !important;
	}
	.btnrd{
		border-radius:28px;
		border:1px solid #18ab29;
		display:inline-block;
		cursor:pointer;
		color:#ffffff;
		font-size:14;
		text-decoration:none;
		text-align: center; 
		background: #FF5894;    
		border: 1px solid #ffffff;
		width: 40%;
	}
	.blue {
		height: 15px;
		width: 15px;
		border-radius: 5px;
		background-color: #0050ef;

	}
	.pink {
		height: 15px;
		width: 15px;
		border-radius: 5px;
		margin-left: 25px;
		background-color: #FF5894;

	}
	.gray {
		height: 15px;
		width: 15px;
		border-radius: 5px;
		margin-left: 25px;
		background-color: #DEDEDE;

	}
	.black {
		height: 15px;
		width: 15px;
		border-radius: 5px;
		margin-left: 50px;
		background-color: #050A17;
	}

</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="card" style="height: 100vh;">
					<div class="container-fluid">
						<div class="row" style="display: flex; align-items: center;">
							<div class="col-sm-5">
								<img src="../images/Logo.jpg" alt="Avatar" style="width:100% ;height: 100%;">
							</div>
							<div class="col-sm-6">
								<p><b>Jedsada Tipsang</b></p>
								<p>Jedsada Tipsang</p>
							</div>
						</div>
						<div class="row" style="display: flex; justify-content: flex-start;">
							<div class="col-sm-12" style=" margin-top:15px;">
								<p><b>Sat 7 Oct 2020</b></p>
							</div>
						</div>
						<div  class="row" style="display: flex; justify-content: flex-start;">	
							<div class="col-sm-12" style=" padding-top:15px;">
								<div class="row">
									<div class="col-sm-12">
										<p><b>Deatails</b></p>
									</div>
								</div>
								<div class="row" style=" padding-top:15px;">
									<div class="col-sm-5">
										<p>Class</p>
										<p>Detail</p>
										<p>Study Time</p>
										<p>Must to Make up</p>
									</div>
									<div class="col-sm-6">
										<p>Duplo course</p>
										<p>Imagination course</p>
										<p>10:30-12:00 PM</p>
										<p>1 class</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<button class="btnrd" style="padding: 5px;">Take a leave</button>
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-top: 60px;">
							<div class="container" style="display: flex;flex-direction:row; justify-content: flex-start; align-items: center;">
								<div class="row">
									<div class="col-sm-3">
										<div  class="blue" style=""><p style="padding-left: 25px">Attended</p></div>
									</div>
									<div class="col-sm-3">
										<div  class="pink" style=""><p style="padding-left: 25px">Take a leave</p></div>
									</div>
									<div class="col-sm-3">
										<div  class="gray" style=""><p style="padding-left: 25px">Avariable</p></div>
									</div>
									<div class="col-sm-3">
										<div  class="black" style=""><p style="padding-left: 25px">Schedule</p></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div id="calendar">
					
				</div>
			</div>
		</div>
	</div>
	
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
				alert('Date: ' + info.dateStr);
			},
			events: [
			<?php for($i=0;$i<count($cus);$i++){ ?>
				{
					id: 'a',
					borderColor: '<?php echo $cus[$i]['color']; ?>',
					backgroundColor:'<?php echo $cus[$i]['color']; ?>',
					title: '<?php echo $cus[$i]['build_time']; ?>:00-<?php echo $cus[$i]['end_time']; ?>:00',
					start: '<?php echo $cus[$i]['start_time']; ?>',
					end: '<?php echo $cus[$i]['start_time']; ?>',

					extendedProps: {
						status: ''
					} 
				},
			<?php }?>
			],
			eventClick:function(info){

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
		var event = calendar.getEventById('a')
		var start = event.start 
		calendar.render();
		console.log('<?php echo $cus[1]['start_time']; ?>T<?php echo $cus[1]['build_time']; ?>:00');
	});

</script>

