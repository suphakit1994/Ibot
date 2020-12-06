<body>
  <div class="container" style="width:95% ; margin-top:2%; margin-bottom:2%;">
    <div class="row">
      <div class="col-md-4" style="display: flex; ">
        <div class="card">
          <div class="card-body">
            <div class="row" style="display: flex; margin-bottom: 0 !important; align-items: center;">
              <div class="col-md-5" style="width:50%; display: flex; margin-bottom: 0 !important; padding-top: 15px; padding-left: 30px;">
                <img style="border-radius:3%; width:150px; height:215px;" src="../images/e.jpg" >
              </div>
              <div class="col-md-5 " style="width: 50%">
                <p style="width: 100%; font-size:16px;">Svetiana Anyukova</p>
                <p style="margin-bottom: 0 !important">Teacher Assistance</p>
              </div>
            </div>
            <br>
            <div class="row" style="display: flex; margin-bottom: 0 !important;">
              <div class="col-md-5" style="padding-left: 25px; width: 50%;">
                <a class="Button"style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: linear-gradient(90deg, #0056f7 0%, #ff3ee7 100%);border: 1px solid #ffffff;">Check In</a>
              </div>
              <div class="col-md-5" style="width: 50%;">
                <a class="Button" style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: #ffffff; border: 1px solid #000000; color:black;">Take a leave</a>
              </div>
            </div>
            <div class="row" style="display: flex:margin-bottom: 0 !important ">
              <div class="col-md-5" style="display: flex: width: 100%">
                <p style="font-size: 20px; padding-left: 14px; padding-top: 20px">Sat 7 Oct 2020</p>
              </div>
            </div>
            <div class="row" style="display: flex; margin-bottom: 0 !important;">
              <div class="col-md-5" style="width: 50%;">
                <p style="font-size: 15px; padding-left: 14px; padding-top: 25px;">Attend</p>
              </div>
              <div class="col-md-5" style="width: 50%;" >
                <p style="font-size: 15px; padding-top: 25px;">Out</p>
              </div>
            </div>
            <div class=" row" style="display: flex; margin-bottom: 0 !important;">
              <div class="col-md-5" style="width: 50%;">
                <p style="font-size: 30px; padding-left: 14px; padding-top: 25px;"><b>10:00 AM</b></p>
              </div>
              <div class="col-md-5" style="width: 50%;">
                <p style="font-size: 30px; padding-top: 25px;"><b>-</b></p>
              </div>
            </div>
            <div class="row" style="display: flex; margin-bottom: 0 !important;">
              <div class="col-md-5" style="width: 100%;">
                <p style="font-size: 15px; padding-top: 25px; padding-left: 14px;"><b>Detail</b></p>
              </div>
            </div>
            <div class="row" style="display: flex; margin-bottom: 0 !important;">
              <div class="col-md-5" style="width: 50%;">
                <p style="margin-left:14px;">Availability:</p>
                <p style="margin-left:14px;">Age:</p>
                <p style="margin-left:14px;">Work Time:</p>
              </div>
              <div class="col-md-5" style="width: 50%;">
                <p style="">Part time</p>
                <p style="">25 years old</p>
                <p style="">Sat 10:30-12:00 ฿ 75/Day</p>
                <p style="">Sun 10:30-12:00 ฿ 75/Day</p>
              </div>
            </div>
            <div class="row" style="display: flex; margin-bottom: 0 !important;">
              <div class="col-md-12" style="margin-top:10%;">
                <div class="row" style="display: flex; margin-bottom: 0 !important;">
                  <div class="col-md-3" style="margin-left:4%;">
                    <div class="row" style="display: flex; margin-bottom: 0 !important;">
                      <div class="retangled-blue" style="border-radius:3%;"></div>
                      <div class="col-sm-8" style="margin-left:4%;"><p>Attended</p></div>
                    </div>	
                  </div>
                  <div class="col-md-4">
                    <div class="row" style="display: flex; margin-bottom: 0 !important;">
                      <div class="retangled-pink" style="border-radius:3%;"></div>
                      <div class="col-sm-8" style="margin-left:4%;"><p>Take a leave</p></div>
                    </div>	
                  </div>
                  <div class="col-md-3">
                    <div class="row" style="display: flex; margin-bottom: 0 !important;">
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
        <div id="calendar">
        </div>

        <div class="row">
          <div class="col-md-12" style="text-align:right;">
            <form method='get'>
              <a class="Button" style="margin-top:2%; padding: 5px; width:150px;  text-align: center;"
              href="index.php?app=jed&action=compititions">Next</a> 
            </form>
            <form action="index.php?app=jed&action=insert" method="POST">
              <label for="birthday">Start Time:</label>
              <input type="date" id="birthday" name="start_time">
              <br>
              <label for="birthday">End Time:</label>
              <input type="date" id="birthday" name="end_time">
              <br>
              <input type="text" name="title">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
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
      borderColor: 'red'
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
      events: eventcalendar
      ,

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
    var event = calendar.getEventById('a') // an event object!
    var start = event.start // a property (a Date object)
    calendar.render();
  });

</script>



