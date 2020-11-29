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
    /* The Modal (background) */
        .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

        /* Modal Content */
        .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

        /* Add Animation */
        @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0} 
        to {top:0; opacity:1}
    }

        @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

        /* The Close Button */
        .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

        .close:hover,
        .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

        .modal-header {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
    }

        .modal-body {padding: 2px 16px;}

        .modal-footer {
        padding: 2px 16px;
        background-color: #5cb85c;
        color: white;
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
                    

                    <div class="row">


                        <div class="col-md-12" style="text-align:right;">
                        <form method='get'>
                            <a class="Button" style="margin-top:2%; padding: 5px; width:150px;  text-align: center;"
                            href="index.php?app=jed&action=compititions">Next</a> 
                        </form>
                        </div>
                        <form method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Calendar</label>
                                <input type="text" name="title" class="form-control" id="" aria-describedby="emailHelp" placeholder="Title" style="margin-top:2%;">
                                <input type="text" name="start" class="form-control" id="" aria-describedby="emailHelp" placeholder="Start Time" style="margin-top:2%;">
                                <input type="text" name="end" class="form-control" id="" aria-describedby="emailHelp" placeholder="End Time" style="margin-top:2%;">
                            </div>
                            <input type="submit" class="Button" style=" width:150px;" value="SUBMIT">

                            <a  href="function.php">
                              <!--   <h1><?php echo $cus; ?></h1> -->
                            </a>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                              Launch demo modal
                            </button>
                            

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Set Schedule</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    
                                  </div>
                                  <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Calendar</label>
                                        <input type="text" name="title" class="form-control" id="" aria-describedby="emailHelp" placeholder="Title" style="margin-top:2%;">
                                        <div style="margin-top:3%;">
                                            <?php 
                                            echo "<select name=day>";
                                            $day = date('d', strtotime("today UTC"));
                                            // echo "<option selected="selected">$day</option>";
                                            echo "<option selected>$day</option>";
                                            for ($i = 1; $i <= 31; $i++) {
                                                echo "<option name='$i'>$i</option>";

                                            }
                                            echo "</select>";


                                            echo "<select name=month>";
                                            for ($i = 0; $i <= 11; $i++) {
                                                $month = date('F', strtotime("first day of -$i month"));
                                                echo "<option value=$month> $month </option> ";
                                            }
                                            echo "</select>";

                                            echo "<select name=year>";
                                            for ($i = 0; $i <= 100; $i++) {
                                                $year = date('Y', strtotime("last day of -$i year"));
                                                echo "<option name='$year'>$year</option>";
                                            }
                                            echo "</select>";
                                            ?>
                                        </div>
                                        <input type="submit" class="Button" style=" width:150px;" value="SUBMIT">

                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
                
                                 
                
                
    </div>

</body>


<script>
    var db_calendar = <?php
        echo $cus;
        ?>

    console.log(db_calendar);
    var calendar_event =[];
    db_calendar.forEach(value =>{
        calendar_event.push( {
                    id: 'a',
                    title: value.title,
                    start: value.start_time,
                    end: value.end_time,
                    extendedProps: {
                        status: ''
                    },
                    
                    borderColor: 'red'
                })
        console.log(value);
    })

    document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            fixedMirrorParent: document.body,
            initialView: 'dayGridMonth',
            timeZone: 'UTC',
            editable:true,
            droppable:true,
            customButtons: {
                //create function ..............
                myCustomButton: {
                  text: 'custom!',
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
            selectable: true,
            dateClick: function(info) {
                alert('Date: ' + info.dateStr);
            },
            events: calendar_event
                //      [
                    
                    
                // {
                //     id: 'a',
                //     title: '',
                //     start: '2020-11-26T10:00:00',
                //     end: '2020-11-26T16:00:00',
                //     extendedProps: {
                //         status: ''
                //     },
                //     backgroundColor: 'green',
                //     borderColor: 'yellow'
                // }
            ,
            eventAllow: function(dropInfo, draggedEvent) {
                if (draggedEvent.id === '999') {
                    return dropInfo.start < new Date(2020, 11, 27); // a boolean
                }
                else {
                    return true;
                }
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

                // Change background color of row
                info.el.style.backgroundColor = 'red';

                // Change color of dot marker
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
        
        
        var event = calendar.getEventById('a') // an event object!
        var start = event.start // a property (a Date object)

        console.log(start.toISOString()) // "2018-09-01T00:00:00.000Z"
        calendar.render();
    });

</script>


