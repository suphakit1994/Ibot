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
    button:disabled,
    button[disabled]{
      border: 1px solid #999999;
      background-color: #cccccc !important;
      color: #ffffff;
      background: linear-gradient(90deg, #cccccc 0%, #cccccc 100%) !important;
    }
  </style>
</head>
<body>
  <div class="container" style="width:95% ; margin-top:2%; margin-bottom:2%;">
    <div class="row">
      <div class="col-md-4" style="display: flex; ">
        <?php for($i = 0;$i<count($select_idteacher);$i++){ ?>
          <div class="card">
            <div class="card-body">
              <div class="row" style="display: flex; margin-bottom: 0 !important; align-items: center;">
                <div class="col-md-5" style="width:50%; display: flex; margin-bottom: 0 !important; padding-top: 15px; padding-left: 30px;">
                  <img style="border-radius:3%; width:150px; height:215px;object-fit:cover;" src="../teacher_img/<?php echo $select_idteacher[$i]['teacher_img'];?>" >
                </div>
                <div class="col-md-5 " style="width: 50%">
                  <p style="width: 100%; font-size:16px;"><b><?php echo $select_idteacher[$i]['teacher_fname'];?>  <?php echo $select_idteacher[$i]['teacher_lname'];?></b></p>
                  <p style="margin-bottom: 0 !important">Teacher Assistance</p>
                </div>
              </div>
              <br>
              <?php for($o=0;$o<count($list_t);$o++){$db_day = $list_t[$o]['date_today'];}?>
              <div class="row" style="display: flex; margin-bottom: 0 !important;">
                <div class="col-md-5" style="padding-left: 25px; width: 50%;">
                  <button onclick="changetext('<?php echo $check_name;?>')" data-target="#CheckIn" data-toggle="modal" id="myButton" class="Button"style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: linear-gradient(90deg, #0056f7 0%, #ff3ee7 100%);border: 1px solid #ffffff;"><?php echo $check_name;?></button>
                </div>
                <div class="col-md-5" style="width: 50%;">
                  <button id="Takelive" onclick="TakeAlive('<?php echo $status_takelive;?>')" class="Button" data-target="#TakeAlive" data-toggle="modal" style="padding: 3px;  margin-left: 1px; width: 150px; text-align: center; background: #000000; border: 1px solid #ffffff; color:#ffffff;">Take a leave</button>
                </div>
              </div>
              <div class="row" style="display: flex:margin-bottom: 0 !important ">
                <div class="col-md-12" style="display: flex: width: 100%">
                 <?php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );?>
                 <h2 style="padding-left: 14px; padding-top: 20px"><b><?php echo $date->format('l d-m-Y');?></b></h2>
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
                <h1 id="attended"style="font-size: 30px; padding-left: 14px; padding-top: 25px;"><b><?php echo $time_attend ; ?></b></h1>
              </div>
              <div class="col-md-5" style="width: 50%;">
                <h1 id="out" style="font-size: 30px; padding-top: 25px;"><b><?php echo $time_out ; ?></b></h1>
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
            <div style="display: flex;flex-direction: row;width: 100%;justify-content: space-around;">
              <div style="display: flex;flex-direction: row;margin-left: 10px;">
                <svg width="20" height="20" style="border-radius:4px;">
                  <rect width="100" height="100" style="fill:rgb(1,90,240);stroke-width:3;" />
                  Sorry, your browser does not support inline SVG.  
                </svg>
                <p style="margin-left: 2px;">Course</p>
              </div>
              <div style="display: flex;flex-direction: row;margin-left: 10px;">
                <svg width="20" height="20" style="border-radius:4px;">
                  <rect width="100" height="100" style="fill:rgb(250,123,202);stroke-width:3;" />
                  Sorry, your browser does not support inline SVG.  
                </svg>
                <p style="margin-left: 2px;">Camp</p>
              </div>
              <div style="display: flex;flex-direction: row;margin-left: 10px;">
                <svg width="20" height="20" style="border-radius:4px;">
                  <rect width="100" height="100" style="fill:rgb(0,0,0);stroke-width:3;" />
                  Sorry, your browser does not support inline SVG.  
                </svg>
                <p style="margin-left: 2px;">Compitition</p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    <!-- Calendar  -->
    <div class="col-md-7" style="margin-left:1%">
      <div id="calendar">
      </div>
    </div>
    <!-- /Calendar  -->
    <?php for($j = 0; $j<count($select_id_calendar);$j++){ ?>
      <div class="modal" id="myModal1<?php echo $select_id_calendar[$j]['calender_id']; ?>" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="icon_func_modal" style="margin-top: 1%;margin-right: 1%;">
              <a id="close<?php echo $select_id_calendar[$j]['calender_id']; ?>"class="icon_inmodals" style="padding-left:9px !important;padding-right:9px !important;background-color: red;"><i class="fa fa-close"></i></a>
            </div>
            <div class="modal-body">
              <div id="class_room">
                <?php $original_date = $select_id_calendar[$j]['calender_date'];
                $timestamp = strtotime($original_date);
                $new_date = date("d-m-Y", $timestamp);?>
                <h1 style="text-align: center;"><b>Class Room</b></h1>
                <p style="text-align: center;"><b>Teacher: <?php echo $select_id_calendar[$j]['fname']; ?></b></p>
                <p style="text-align: center;"><b>Student: <?php echo $name_std; ?></b></p>
                <p style="text-align: center;"><b>Today: <?php echo $new_date; ?></b></p>
                <div style="text-align: center;">
                  <mark style="text-align: center;"><b><?php echo $select_id_calendar[$j]['calender_starttime']; ?>:00-<?php echo $select_id_calendar[$j]['calender_endtime']; ?>:00</b></mark>
                </div>
                <div style="display:flex;justify-content: flex-end; margin-bottom: 2%;">
                  <input style="color:white;width: 30%; padding: 2px; border-radius: 5px; background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);" type="submit" value="Close">
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php }?>

    <div class="modal" id="CheckIn" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="icon_func_modal" style="margin-top: 1%;margin-right: 1%;">
            <a id="close_checkin"class="icon_inmodals" style="padding-left:9px !important;padding-right:9px !important;background-color: red;"data-dismiss="modal"><i class="fa fa-close" ></i></a>
          </div>
          <div class="modal-body">
            <form action="index.php?app=teacher&action=checkIn<?php echo $id;?>" method="post">
              <div id="class_room">
                <div style="display:flex;flex-direction:column; justify-content: flex-start;">
                  <h1 style="text-align: center;" id="hcheck"><b>Check In</b></h1>
                  <h2 style="text-align: center;">Date: <?php echo $date->format('l');?>  <?php echo $date->format('d-m-Y');?></h2>
                  <h2 style="text-align: center;">Time: <?php echo $date->format('H:i:s');?></h2>
                </div>
                <input type="hidden" id="date_name" name="date_name" value="<?php echo $date->format('l');?>">
                <input type="hidden" id="date" name="date" value="<?php echo $date->format('d-m-Y');?>">
                <input type="hidden" id="checkin_time" name="checkin_time" value="<?php echo $date->format('H:i:s');?>">
                <input type="hidden" id="checkin_status" name="status" value="Check In">
                <div style="display:flex;justify-content: flex-end; margin-bottom: 2%;">
                  <input id="repage" style="color:white;width: 30%; padding: 2px; border-radius: 5px; background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);" type="submit" value="ADD">
                </div>  
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal" id="TakeAlive" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="icon_func_modal" style="margin-top: 1%;margin-right: 1%;">
            <a id="close_checkin"class="icon_inmodals" style="padding-left:9px !important;padding-right:9px !important;background-color: red;"data-dismiss="modal"><i class="fa fa-close" ></i></a>
          </div>
          <div class="modal-body">
            <form action="index.php?app=teacher&action=TakeAlive<?php echo $id;?>" method="post">
              <div id="class_room">
                <div style="display:flex;flex-direction:column; justify-content: flex-start;">
                  <h1 style="text-align: center;"><b>Take Alive</b></h1>
                  <input class="form-control" style="margin: 10px;" type="date" id="date" name="date">
                  <input class="form-control" style="margin: 10px;" type="time" id="checkin_time" name="checkin_time">
                </div>
                <input type="hidden" id="date_name" name="date_name" value="<?php echo $date->format('l');?>">
                <input type="hidden" id="take_a_live" name="post_take_a_live" value="Take a live">
                <div style="display:flex;justify-content: flex-end; margin-bottom: 2%;">
                  <input style="color:white;width: 30%; padding: 2px; border-radius: 5px; background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);" type="submit" value="ADD">
                </div>  
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  document.getElementById("myButton").disabled = <?php echo $status_button;?>;
  function Takelive(status_takelive){
    console.log(status_takelive);
    document.getElementById("take_a_live").value = status_takelive;
  }
  function changetext(checkstatus){
    console.log(checkstatus);
    document.getElementById("checkin_status").value = checkstatus;
    document.getElementById("hcheck").innerHTML = "<b>"+checkstatus+"</b>";
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
      <?php for($i=0;$i<count($select_id_calendar);$i++){ ?>
        {
          id: '<?php echo $select_id_calendar[$i]['calender_id']; ?>',
          borderColor: '<?php echo $select_id_calendar[$i]['calender_color']; ?>',
          backgroundColor:'<?php echo $select_id_calendar[$i]['calender_color']; ?>',
          title: '<?php echo $select_id_calendar[$i]['calender_starttime']; ?>:00-<?php echo $select_id_calendar[$i]['calender_endtime']; ?>:00',
          start: '<?php echo $select_id_calendar[$i]['calender_date']; ?>',
          end: '<?php echo $select_id_calendar[$i]['calender_date']; ?>',

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
    <?php for($l=0;$l<count($select_id_calendar);$l++){ ?>
      var event = calendar.getEventById('<?php echo $select_id_calendar[$l]['calender_id']; ?>')
    <?php }?>
    var start = event.start 
    calendar.render();
  });

</script>

