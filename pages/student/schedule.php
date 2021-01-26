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
	.modal-backdrop{
		position: inherit !IMPORTANT;
	}
	.fc-daygrid-event{
		border-radius: 10px !IMPORTANT;
	}
	.icon_inmodals {
		border: none;
		border-radius: 50%;
		color: white;
		padding: 0px 7px;
		font-size: 10px;
		cursor: pointer;
	}

	/* Darker background on mouse-over */
	.icon_inmodals:hover {
		background-color: RoyalBlue;
	}
	.card{
		border-radius: 5px;
	}
	.modal-content{
		width: 100% !important;
	}
	.icon_func_modal{
		display: flex;
		justify-content: flex-start;
		flex-direction: row-reverse;
	}

</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<?php for($i=0; $i<count($func_select_std); $i++){?>
					<div class="card" style="height: 100vh;">
						<div class="container-fluid">
							<div class="row" style="display: flex; align-items: center;">
								<div class="col-sm-5">
									<img style="border-radius:3%; width:150px; height:215px;object-fit:cover;" src="../images/111.png" >
								</div>
								<div class="col-sm-6">
									<p><b><?php echo $func_select_std[$i]['student_nickname_eng']; ?> <?php echo $func_select_std[$i]['student_name_eng']; ?></b></p>
									<p><?php echo $func_select_std[$i]['student_nlevel']; ?></p>
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
				<?php }?>
			</div>
			<div class="col-sm-7" style="margin-left:1%">
				<div id="calendar">
					
				</div>
			</div>
		</div>
	</div>
	<?php for($j = 0; $j<count($cus);$j++){ ?>
		<div class="modal" id="myModal1<?php echo $cus[$j]['calender_id']; ?>" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="icon_func_modal" style="margin-top: 1%;margin-right: 1%;">
						<a id="close<?php echo $cus[$j]['calender_id']; ?>"class="icon_inmodals" style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>
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
							<div style="margin-bottom: 2%;">
								<input style="color:white;width: 30%; padding: 2px; border-radius: 5px; background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);" type="submit" value="ADD">
							</div>  
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

