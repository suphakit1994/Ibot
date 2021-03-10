
<head>
  <meta charset="UTF-8">
<!--   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
  <script src="../cp/jquery-3.3.1.js"></script>
  <script src="../cp/canvas2image.js"></script>
  <script src="../cp/html2canvas.min.js"></script>
  <style>

    .cont {
      position: relative;
      text-align: center;
    }

    /* Centered text */
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 44px;
    }
  </style>
</head>
<body>

  <script>
    $(document).ready(function(){
      $("#editname").click(function(){
        var str = $("#nameteacher").val();
        $("#nameedited").text(str);
      });
      $("#up").click(function(){
        var current_pos = parseInt($('.centered').css('top'));
        var new_pos = current_pos-5;
        console.log(new_pos);
        $(".centered").css({"top":new_pos});
      });
      $("#down").click(function(){
        var current_pos = parseInt($('.centered').css('top'));
        var new_pos = current_pos+5;
        console.log(new_pos);
        $(".centered").css({"top":new_pos});
      });
      $("#left").click(function(){
        var current_pos = parseInt($('.centered').css('left'));
        var new_pos = current_pos-10;
        console.log(new_pos);
        $(".centered").css({"left":new_pos});
      });
      $("#right").click(function(){
        var current_pos = parseInt($('.centered').css('left'));
        var new_pos = current_pos+10;
        console.log(new_pos);
        $(".centered").css({"left":new_pos});
      });
    });
    function myFunction(){
      window.print();
    }

  </script>
  <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

    <div class="container-fluid">
      <div class="cont" id="contens" style="padding-left: 0px !important;padding-right: 0px !impoertant;">
        <?php for($img_cert = 0; $img_cert<count($get_img_cert); $img_cert++){?>
          <img class="cont" src="../certificate_image/<?php echo $get_img_cert[$img_cert]['name_img'];?>" style="width: 100%;height: 100%;object-fit:cover;padding-left: 0px !important;padding-right: 0px !important">
        <?php }?>         
        <span id="nameedited" class="centered">Name Student</span>
        <!-- <span class="centered">Jeasda Thipsang</span> -->
      </div>
      <div style="padding: 10px;">
      <!--<label for="userteacher">Username student</label>
        <input id="userteacher" type="text" name="userstd" placeholder="S_99999"> -->

        <div style="margin-top: 5px;">
          <label for="nameteacher">Name student</label>
          <input class="form-control" id="nameteacher" type="text" name="namestd" placeholder="Jutamas">
          <button class="btn btn-warning" id="up"><i class="fas fa-angle-up"></i></button>
          <button class="btn btn-warning" id="down"><i class="fas fa-angle-down"></i></button>
          <button class="btn btn-warning" id="left"><i class="fas fa-angle-left"></i></button>
          <button class="btn btn-warning" id="right"><i class="fas fa-angle-right"></i></button>
          <button style="width:10%;margin-top: 5px;margin-bottom: 5px;" class="btn btn-success" id="editname">Edit</button>
          <button type="submit" style="width:10%;margin-top: 5px;margin-bottom: 5px;" class="btn btn-primary" id="save">Export</button>
        </div>
        <form action="index.php?app=admin&action=addidstd<?php echo $id_img_certi;?>" method="POST">
          <?php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') );?>        
          <input type="hidden" name="date_cert" value="<?php echo $date->format('d-m-Y');?>">
          <input id="namestd_str" type="hidden" name="namestd_str" value="">
          <label for="name_course">Course</label>
          <select class="form-control" name="c_id" id="name_course">
            <?php for($course = 0; $course<count($course_name);$course++){ ?>
              <option value="<?php echo $course_name[$course]['course_id']; ?>"><?php echo $course_name[$course]['course_category']; ?> //<?php echo $course_name[$course]['course_id']; ?>--<?php echo $course_name[$course]['course_expension']; ?></option>
            <?php } ?>
          </select>
          <label for="id_std">ID Student</label>
          <select class="form-control" name="id_std" id="id_std">
            <?php for($l = 0; $l<count($s_list);$l++){ ?>
              <option value="<?php echo $s_list[$l]['student_id']; ?>"><?php echo $s_list[$l]['student_id']; ?>--<?php echo $s_list[$l]['student_name_eng']; ?></option>
            <?php } ?>
          </select>
          <button type="submit" style="width:10%;margin-top: 5px;margin-bottom: 5px;" class="btn btn-primary">Save</button>
        </form>

        <p id="preview"></p>
      </div>
    </div>
  </div>
  <script>
    $('#save').click(function() {
     var name_std = $("#nameteacher").val();
     document.getElementById("namestd_str").value = name_std;
     var user_std = $("#id_std").val();
     var elm = $('#contens').get(0);
     var lebar = "1754";
     var tinggi = "1240";
     var type = "jpeg";
     var filename = name_std+user_std;
     html2canvas(elm).then(function(canvas){
      var canWidth = canvas.width;
      var canHeight = canvas.height;
      var img = Canvas2Image.convertToImage(canvas,canWidth,canHeight);
        // $('#contens').after(img);
        var bashh = Canvas2Image.saveAsImage(canvas,lebar,tinggi,type,filename);
      })
   });
 </script>

</body>