
<head>
  <meta charset="UTF-8">
<!--   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->

  <style>
    .container {
      position: relative;
      text-align: center;
    }

    /* Centered text */
    .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 30px;
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

    <div class="container" id="contens">
      <?php for($img_cert = 0; $img_cert<count($get_img_cert); $img_cert++){?>
        <img class="container" src="../certificate_image/<?php echo $get_img_cert[$img_cert]['name_img'];?>" style="width: 100%;height: 100%;">
      <?php }?>         
      <span id="nameedited" class="centered">Jedsada Thipsang</span>

      <!-- <span class="centered">Jeasda Thipsang</span> -->

    </div>
    <div style="padding: 10px;">
      <label for="userteacher">Username student</label>
      <input id="userteacher" type="text" name="userstd" placeholder="S_99999">
      <label for="nameteacher">Name student</label>
      <input id="nameteacher" type="text" name="namestd" placeholder="Jutamas">
      <button id="editname">Edit</button>
      <button id="up">Up</button>
      <button id="down">Down</button>
      <button id="left">Left</button>
      <button id="right">Right</button>
      <button onclick="myFunction()">Print this page</button>
    </div>
  </div>

</body>

