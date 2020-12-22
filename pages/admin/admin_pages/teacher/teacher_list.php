
<body>
	<!-- Content -->
	
 <div class="page-content p-5" id="content">
  <div class="container-fluid" style="margin:auto;">
    <div class="row">
      <h1>Teacher</h1>
      <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>
      <button type="button" class="Button" data-toggle="modal" data-target="#form" style="padding: 7px;">
       Create Schedule
     </button> 

     <form method='get'>
       <a class="Button" style="margin-top:2%; padding: 5px; width:150px;  text-align: center;"
       href="index.php?app=admin&action=admin_teacher">Next</a> 
     </form>
     <div class="row">
       <div class="col-sm-12">
         <div id="calendar">
          
         </div>
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

     <form action="index.php?app=admin&action=insert_datetime" method="POST">
        <!-- <label for="titlee">Title:</label><br>
          <input style="width: 100%;" type="text" name="title" id="titlee"> -->

          <label  for="start">Day:</label>
          <input style="width: 100%;" type="date" id="start" name="start_time">
          <br><br>
          <label for="appt">Select start time:</label>
          <input type="time" id="build_time" name="build_time">
          <label for="appt">Select end time:</label>
          <input type="time" id="build_time" name="end_time">
          <br><br>
          

          <div style="padding: 2%;">
           <label for="cars">Choose a Status:</label>
           <select name="color" id="cars">
            <option value="blue">Attended</option>
            <option value="pink">Take a leave</option>
            <option value="black">Schedule</option>
          </select>
        </div>
        <input style="width: 100%; margin-top: 5%; margin-bottom: 5%" type="submit">
      </form>

    </div>
  </div>
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

//----spare----
// var eventcalendar =[];
//   <?php echo $cus; ?>.forEach(value =>{
//     eventcalendar.push( {
//       id: 'a',
//       title: value.title,
//       start: value.start_time,
//       end: value.end_time,
//       extendedProps: {
//         status: ''
//       },
//       borderColor: value.color,
//       themeSystem: 'bootstrap',
//       backgroundColor:value.color
//     });
//   });
</script>