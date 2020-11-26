<head>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.4.0/main.min.css">

    <style>
    .card {
        box-shadow: 0 2px 5px 0 rgb(0 0 0), 0 4px 5px 0 rgba(0, 0, 0, 0.19);
        width: 100%;
        padding-bottom: 10px;
    }
	.retangled-blue{
		background-color: #0056f7;
		position: absolute;
		height:15px;
		width:15px;
	}
	.retangled-pink{
		background-color: #FF5894;
		position: absolute;
		height:15px;
		width:15px;
	}
	.retangled-black{
		background-color: #050a17;
		position: absolute;
		height:15px;
		width:15px;
	}
	.calendar-day {
		width: 100px;
		min-width: 100px;
		max-width: 100px;
		height: 80px;
	}
		.calendar-table {
		margin: 0 auto;
		width: 700px;
	}
		.selected {
		background-color: #eee;
	}
		.outside .date {
		color: #ccc;
	}
		.timetitle {
		white-space: nowrap;
		text-align: right;
	}
		.event {
		border-top: 1px solid #b2dba1;
		border-bottom: 1px solid #b2dba1;
		background-image: linear-gradient(to bottom, #dff0d8 0px, #c8e5bc 100%);
		background-repeat: repeat-x;
		color: #3c763d;
		border-width: 1px;
		font-size: 0.75em;
		padding: 0 0.75em;
		line-height: 2em;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		margin-bottom: 1px;
	}
		.event.begin {
		border-left: 1px solid #b2dba1;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
	}
		.event.end {
		border-right: 1px solid #b2dba1;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
	}
		.event.all-day {
		border-top: 1px solid #9acfea;
		border-bottom: 1px solid #9acfea;
		background-image: linear-gradient(to bottom, #d9edf7 0px, #b9def0 100%);
		background-repeat: repeat-x;
		color: #31708f;
		border-width: 1px;
	}
		.event.all-day.begin {
		border-left: 1px solid #9acfea;
		border-top-left-radius: 4px;
		border-bottom-left-radius: 4px;
	}
		.event.all-day.end {
		border-right: 1px solid #9acfea;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
	}
		.event.clear {
		background: none;
		border: 1px solid transparent;
	}
		.table-tight > thead > tr > th,
		.table-tight > tbody > tr > th,
		.table-tight > tfoot > tr > th,
		.table-tight > thead > tr > td,
		.table-tight > tbody > tr > td,
		.table-tight > tfoot > tr > td {
		padding-left: 0;
		padding-right: 0;
	}
		.table-tight-vert > thead > tr > th,
		.table-tight-vert > tbody > tr > th,
		.table-tight-vert > tfoot > tr > th,
		.table-tight-vert > thead > tr > td,
		.table-tight-vert > tbody > tr > td,
		.table-tight-vert > tfoot > tr > td {
		padding-top: 0;
		padding-bottom: 0;
	}
    </style>
</head>


<body>

    <div class="container" style="width:95% ; margin-top:2%; margin-bottom:2%;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5" style="margin-left:2%;margin-top:2%;">
                                <img style="border-radius:3%; width:150px; height:215px;" src="../images/e.jpg" >
                            </div>
                            <div class="col-md-5 " style="margin-top:20%; pading-left:0	%;">
                                <p style="text-align: left; font-size:16px;"><b>Svetiana Anyukova</b></p>
                                <p style="text-align: left;">Teacher Assistance</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-5" style="margin-left:2%;">
                                <a class="Button"
                                    style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: linear-gradient(90deg, #0056f7 0%, #ff3ee7 100%);border: 1px solid #ffffff;">Check
                                    In</a>
                            </div>
                            <div class="col-md-5" style="pading-left:0%;">
                                <a class="Button"
                                    style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: #ffffff; border: 1px solid #000000; color:black;">Take
                                    a leave</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5" style="margin-left:2%; margin-top:6%;">
                                <p style="font-size: 15px;"><b>Sat 7 Oct 2020</b></p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5" style="margin-top: 5%;margin-left:2%;">
                                <p style="font-size: 15px;"><b>Attend</b></p>
                            </div>
                            <div class="col-md-5" >
                                <p style="text-align: left; pading-left:0%;margin-top: 14%; font-size: 15px;"><b>Out</b></p>
                    </div>
                </div>
    
                <div class=" row">
                                <div class="col-md-5" style="margin-left:2%; margin-top:5%;">
                                    <p style="font-size: 30px"><b>10:00 AM</b></p>
                                </div>
                                <div class="col-md-5" style="pading-left:0%; margin-top:5%;">
									<p style="font-size: 30px"><b>-</b></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5" style="margin-top: 5%;margin-left:2%;">
                                    <p style="font-size: 15px;"><b>Detail</b></p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5" style="margin-left:2%">
                                    <p>Availability:</p>
                                    <p>Age:</p>
                                    <p>Work Time:</p>
                                </div>
                                <div class="col-md-5">
                                    <p style="text-align: left; pading-left:0%;">Part time</p>
                                    <p style="text-align: left; pading-left:0%;">25 years old</p>
                                    <p style="text-align: left; pading-left:0%;">Sat 10:30-12:00 ฿ 75/Day</p>
                                    <p style="text-align: left; pading-left:0%;">Sun 10:30-12:00 ฿ 75/Day</p>
                                </div>
                            </div>

							<div class="row">
								<div class="col-md-12" style="margin-top:10%;">
									<div class="row">
									<div class="col-md-3" style="margin-left:4%;">
									<div class="row">
										<div class="retangled-blue" style="border-radius:3%;"></div>
										<div class="col-sm-8" style="margin-left:4%;"><p>Attended</p></div>
									</div>	
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="retangled-pink" style="border-radius:3%;"></div>
										<div class="col-sm-8" style="margin-left:4%;"><p>Take a leave</p></div>
									</div>	
								</div>
								<div class="col-md-3">
									<div class="row">
										<div class="retangled-black" style="border-radius:3%;"></div>
										<div class="col-sm-8" style="margin-left:4%;"><p>Schedule</p></div>
									</div>	
								</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <!-- -------------------------------------------------    -------------------------------------------------    -------------------------------------------------    -->
                <div class="col-md-7" style="margin-left:1%">
                    
                    <div id="calendar"></div>
                </div>
    </div>

</body>

<script>
    import { Calendar } from '@fullcalendar/core';
    import interactionPlugin from '@fullcalendar/interaction'; // for selectable
    import dayGridPlugin from '@fullcalendar/daygrid'; // for dayGridMonth view
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            timeZone: 'UTC',
            customButtons: {
                //create function ..............
                myCustomButton: {
                    text: 'Set Time',
                    click: function() {
                        alert('clicked the custom button!');
                    }
                }
            },
            headerToolbar: {
                left: 'prev,next today myCustomButton',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
                    events: [
                {
                    id: 'a',
                    title: 'my event',
                    start: '2020-11-01'
                }, {
                    id: 'b',
                    title: 'Meeting',
                    start: '2020-11-02'
                }, {
                    id: 'c',
                    title: 'Join',
                    start: '2020-11-02'
                }

            ]
        });
        

        var event = calendar.getEventById('a') // an event object!
        var start = event.start // a property (a Date object)

        console.log(start.toISOString()) // "2018-09-01T00:00:00.000Z"
        calendar.render();
    });
</script>
