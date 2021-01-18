<head>
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
  <div class="container" style="width:95% ; margin-top:2%; margin-bottom:2%;">
    <div class="row">
      <div class="col-md-4" style="display: flex; ">
        <div class="card">
          <div class="card-body">
            <div class="row" style="display: flex; margin-bottom: 0 !important; align-items: center;">
              <div class="col-md-5" style="width:50%; display: flex; margin-bottom: 0 !important; padding-top: 15px; padding-left: 30px;">
                <img style="border-radius:3%; width:150px; height:215px;" src="../images/Logo.jpg" >
              </div>
              <div class="col-md-5 " style="width: 50%">
                <p style="width: 100%; font-size:16px;">Svetiana Anyukova</p>
                <p style="margin-bottom: 0 !important">Teacher Assistance</p>
              </div>
            </div>
            <br>
            <div class="row" style="display: flex; margin-bottom: 0 !important;">
              <div class="col-md-5" style="padding-left: 25px; width: 50%;">
                <a onclick="changetext()" id="myButton" class="Button"style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: linear-gradient(90deg, #0056f7 0%, #ff3ee7 100%);border: 1px solid #ffffff;">Check In</a>
              </div>
              <div class="col-md-5" style="width: 50%;">
                <a onclick="TakeAlive()" class="Button" style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: #ffffff; border: 1px solid #000000; color:black;">Take a leave</a>
              </div>
            </div>
            <div class="row" style="display: flex:margin-bottom: 0 !important ">
              <div class="col-md-12" style="display: flex: width: 100%">
                <?php
                $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );?>
                <p style="font-size: 25px; padding-left: 14px; padding-top: 20px"><b><?php echo $date->format('l d-m-Y');?></b></p>
              </div>
            </div>
            <div class="row" style="display: flex; margin-bottom: 0 !important;">
              <div class="col-md-5" style="width: 50%;">
                <p style="font-size: 15px; padding-left: 14px; padding-top: 25px;"><b>Attend</b></p>
              </div>
              <div class="col-md-5" style="width: 50%;" >
                <p style="font-size: 15px; padding-top: 25px;"><b>Out</b></p>
              </div>
            </div>
            <div class=" row" style="display: flex; margin-bottom: 0 !important;">
              <div class="col-md-5" style="width: 50%;">

                <p style="font-size: 30px; padding-left: 14px; padding-top: 25px;"><b><?php echo $date->format('H:i:s');;?></b></p>
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
                  <div class="col-md-3" style="margin-left:10%;">
                    <div class="row" style="display: flex; margin-bottom: 0 !important;">
                      <div class="retangled-blue" style="border-radius:25%;"></div>
                      <div class="col-sm-8" style="margin-left:4%;"><p>Attended</p></div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="row" style="display: flex; margin-bottom: 0 !important;">
                      <div class="retangled-pink" style="border-radius:25%;"></div>
                      <div class="col-sm-8" style="margin-left:4%;"><p>Take a leave</p></div>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="row" style="display: flex; margin-bottom: 0 !important;">
                      <div class="retangled-black" style="border-radius:25%;"></div>
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
          </div>
        </div>
      </div>
      <?php for($j = 0; $j<count($cus);$j++){ ?>
        <div class="modal" id="myModal1<?php echo $cus[$j]['calender_id']; ?>" role="dialog">

          <div class="modal-dialog">
            <!-- Modal content-->
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
    </div>
  </div>
</body>
<script>

  function changetext(){
    $("#myButton").html("Check Out");
  }
  function TakeAlive(){
    confirm("Do you want to Take a live?");
  }
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

