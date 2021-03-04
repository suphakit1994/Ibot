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
    @media print {
/*       body * {
        visibility: hidden;
      }
      #section-to-print, #section-to-print * {
        visibility: visible;
      }
      #section-to-print {
        position: absolute;
        left: 0;
        top: 0;
        } */
      }

    </style>
  </head>
  <body>

    <script>
     function myFunction() {
      window.print('#contens');
    }
    $(document).ready(function(){
      $("#editname").click(function(){
        var str = $("#nameteacher").val();
        $("#test1").text(str);
      });
      $("#up").click(function(){
        var current_pos = parseInt($('.centered').css('top'));
        console.log(current_pos);
        var new_pos = current_pos-5;
        console.log(new_pos);
        $(".centered").css({"top":new_pos});
      });
      $("#down").click(function(){
        var current_pos = parseInt($('.centered').css('top'));
        console.log(current_pos);
        var new_pos = current_pos+5;
        console.log(new_pos);
        $(".centered").css({"top":new_pos});
      });
      $("#left").click(function(){
        var current_pos = parseInt($('.centered').css('left'));
        console.log(current_pos);
        var new_pos = current_pos-10;
        console.log(new_pos);
        $(".centered").css({"left":new_pos});
      });
      $("#right").click(function(){
        var current_pos = parseInt($('.centered').css('left'));
        console.log(current_pos);
        var new_pos = current_pos+10;
        console.log(new_pos);
        $(".centered").css({"left":new_pos});
      });
    });
  </script>
  <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

    <div class="container" id="contens">
      <?php for($img_cert = 0; $img_cert<count($get_img_cert); $img_cert++){?>
        <img src="../certificate_image/<?php echo $get_img_cert[$img_cert]['name_img'];?>" style="width: 100%;height: 100%;">
      <?php }?>         
      <span id="test1" class="centered">Jedsada Thipsang</span>

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


<!--   <h2>Clickable Dropdown</h2>
  <p>Click on the button to open the dropdown menu.</p>

  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Dropdown</button>
    <div id="myDropdown" class="dropdown-content">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </div>
  </div>

  <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
-->
