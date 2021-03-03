<head>
  <meta charset="UTF-8">
<!--   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->

  <style>
    .container {
      position: relative;
      text-align: center;
      color: white;
    }

    /* Centered text */
    .centered {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      -webkit-text-stroke-width: 1px;
      font-size: 30px;
    }
    @media only screen and (max-width:200px) {
      .centered {
        font-size: 18px;
      }
    }

  </style>
</head>
<body>

  <script>
    function myFunction() {
      window.print();
    }
  </script>
  

  <div class="container">
    <img src="../certificate_img/CertificateAdventure/Certificate Adventure-02.jpg" style="width: 100%;height: 100%;">
    <!-- <span class="centered">Jeasda Thipsang</span> -->
    <span class="centered"><?php echo $namestudent;?></span>
  </div>
  <div style="padding: 10px;">
    <label for="userteacher">Username teacher</label>
    <input id="userteacher" type="text" name="teacher" placeholder="T_99999">
    <label for="nameteacher">Name teacher</label>
    <input id="nameteacher" type="text" name="nameteacher" placeholder="Jutamas">
    <button onclick="myFunction()">Print this page</button>
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
