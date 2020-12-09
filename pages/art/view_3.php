<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

      body {
        font-family: "RobotoDraft","Roboto",'Helvetica Neue',sans-serif;
        font-size: 16px;
      } 

      div.ex1 {
        background-color: white;
        height: 30%;
        width: 60%;
        overflow-y: scroll;
        max-height: 500px;
      }

      .tabbed-section__selector {
        position: relative;
        height: main-size*2;
        top: -main-size*1.95;
        left: -main-size;
        padding: 0;
        margin: 0;
        width: 100%;
        float: left;
      }
      [class*="-tab-"] {
          float: left;
          display: block;
          height: main-size*2;
          line-height: main-size*2;
          width: 100px;
          text-align: center;
          background: #fff;
          font-weight: bold;
          text-decoration: none;
          color: black;
          font-size: 14px;



        }


      .tabbed-section__highlighter {
        position: absolute;
        z-index: 10;
        bottom: 0;
        height: 2px;
        background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);
        max-width: 100px;
        width: 100%;
        transform: translateX(0);
        display: block;
        left: 0;
        transition: transform .23s ease ;
      }



      .tabbed-section__selector-tab-3.active ~ .tabbed-section__highlighter {
        transform: translateX(200px);
      }
      .tabbed-section__selector-tab-2.active ~ .tabbed-section__highlighter {
        transform: translateX(100px);
      }
      .tabbed-section__selector-tab-1.active ~ .tabbed-section__highlighter {
        transform: translateX(0);
      }
      .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
      }


      video {
        width: 100vw;
        height: 100vh;
        position: relative;
        top: 0;
        left: 0;
      }

      #style-1::-webkit-scrollbar-track
      {
        border-radius: 10px;
        background-color: #F5F5F5;
      }

      #style-1::-webkit-scrollbar
      {
        width: 6px;
        background-color: #F5F5F5;
      }

      #style-1::-webkit-scrollbar-thumb
      {
        border-radius: 10px;
        background-color: #555;
      }

    
  </style>
</head>
<body>
  <div class="container-fruid">
    <!-- TOPIC AND BUTTON -->
    <div class="row" style="text-align: center;">
      <h1 style="font-weight: bold;">IBOT EDUCATION</h1>
      <p style="padding-left: 35%; padding-right:35%; margin-bottom:1%;">Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diam
      nonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
      <div class="Button" style="padding-left: 2%; padding-right: 2%;">Learn more</div>
      <div class="ButtonBack" style="padding-left: 2%; padding-right: 2%";>Trial Class</div>
    </div>
    <!-- status and image -->
    <div class="row" style="margin-top:2%; text-align:center;">
      <div class="material-tabs">
        <div class="tabbed-section__selector" style="margin-left: 41%; margin-bottom:2%;">
          <a class="tabbed-section__selector-tab-1 active" href="#">Home</a>
          <a class="tabbed-section__selector-tab-2" href="#">Compititons</a>  
          <a class="tabbed-section__selector-tab-3" href="#">Camp</a>
          <span class="tabbed-section__highlighter"></span>
        </div>

        <div class="tabbed-section-1 visible">
          <img src="http://thecatapi.com/api/images/get?format=src&type=gif" alt="http://thecatapi.com/api/images/get?format=src&type=gif" style="width: 500px; height:500px;">
        </div>
        <div class="tabbed-section-2 hidden">
          <img src="http://thecatapi.com/api/images/get?format=src&type=gif" alt="http://thecatapi.com/api/images/get?format=src&type=gif" style="width: 500px; height:500px;">
        </div>
        <div class="tabbed-section-3 hidden">
          <img src="http://thecatapi.com/api/images/get?format=src&type=gif" alt="http://thecatapi.com/api/images/get?format=src&type=gif" style="width: 500px; height:500px;">
        </div>
      </div>
    </div>

    <!-- IBOT NEWS -->
    <div class="row" style=" margin-top:2%;">
        <h2 style="text-align: center; margin-bottom:3%; margin-top:2%; font-weight: bold;">IBOT NEWS</h2>
          <div class="ex1" id="style-1" style="margin-left: 22%; padding: 2%;  margin-bottom:3%;">
          <?php for ($i=0; $i < count($cus) ; $i++) {  ?>
            <div class="row" style="padding-top: 2%;">
              <div class="col-sm-5">
                <img src="../images/images.png" alt="" style="height: 150px; width: 230px;">
              </div>
              <div class="col-sm-7" style="padding-right:5%; text-align: start;">
                  <h3 style="font-weight: bold;"> 
                    <?php echo $cus[$i]['topic']; ?> 
                  </h3>
                  <p>
                    <?php echo $cus[$i]['content']; ?> 
                  </p>
              </div>
            </div>
          <?php }?>
          </div>
    </div>
    <!-- WHAT WILL YOU GET -->
    <div class="row" style="text-align: center; margin-top:2%;">
      <h2 style="font-weight: bold;">WHAT WILL YOU GET ?</h2>
      
      <!-- Left -->
      <div class="col-md-6" style="padding-left: 9%; padding-right: 9%; margin-top:3%; margin-bottom:5%;">
        <div class="row-sm-4">
          <div class="col-sm-4">
            <img src="../images/images.png" alt="" style="border-radius: 50%; width:60px; height:60px;">
          </div>
          <div class="col-sm-8" style="text-align: start;">
            <h3 style="font-weight: bold;">Physical Development</h3>
            <p style="font-size: 10px;">Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diamnonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
          </div>
        </div>
        <div class="row-sm-4">
          <div class="col-sm-4">
            <img src="../images/images.png" alt="" style="border-radius: 50%; width:60px; height:60px;">
          </div>
          <div class="col-sm-8" style="text-align: start;">
            <h3 style="font-weight: bold;">Cognitive Development</h3>
            <p style="font-size: 10px;">Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diamnonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
          </div>
        </div>
        <div class="row-sm-4">
          <div class="col-sm-4">
            <img src="../images/images.png" alt="" style="border-radius: 50%; width:60px; height:60px;">
          </div>
          <div class="col-sm-8" style="text-align: start;">
            <h3 style="font-weight: bold;">Emotion Development</h3>
            <p style="font-size: 10px;">Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diamnonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
          </div>
        </div>
      </div>


      <!-- Right -->
      <div class="col-md-6" style=" padding-right: 9%; padding-left: 9%; margin-top:3%;">
        <div class="row-sm-4">
            <div class="col-sm-4">
              <img src="../images/images.png" alt="" style="border-radius: 50%; width:60px; height:60px;">
            </div>
            <div class="col-sm-8" style="text-align: start;">
              <h3 style="font-weight: bold;">Creative Development</h3>
              <p style="font-size: 10px;">Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diamnonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
            </div>
        </div>
        <div class="row-sm-4">
            <div class="col-sm-4">  
              <img src="../images/images.png" alt="" style="border-radius: 50%; width:60px; height:60px;">
            </div>
            <div class="col-sm-8" style="text-align: start;">
              <h3 style="font-weight: bold;">Engineering Development</h3>
              <p style="font-size: 10px;">Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diamnonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
            </div>
        </div>
        <div class="row-sm-4">
            <div class="col-sm-4">
              <img src="../images/images.png" alt="" style="border-radius: 50%; width:60px; height:60px;">
            </div>
            <div class="col-sm-8" style="text-align: start;">
              <h3 style="font-weight: bold;">Programmer Development</h3>
              <p style="font-size: 10px;">Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diamnonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
            </div>
        </div>
      </div>
    </div>
    <!-- Content Video -->
    <div class="row" style=" position:relative; margin-bottom:2%; padding-left: 1%;">
        <video src="https://css-tricks-post-videos.s3.us-east-1.amazonaws.com/708209935.mp4" autoplay loop playsinline muted></video>
        <div class="col-md-6" style="position: absolute; top:60%; left:9%; width:44%;">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <?php for ($i=1; $i < count($sli) ; $i++) {  ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $i ?>"></li>
                <?php }?>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <!-- Silde1 -->
                <?php for ($i=0; $i < count($sli) ; $i++) {  ?>
                    <div class="item <?php if($i==0){ echo("active");}?>" style="width:100%; height:260px; background:white;">
                          <div class="row-sm-6" alt="Los Angeles" style="padding: 6%; text-align:start; padding-right:25%; padding-left:21%;">
                            <p>
                                <?php echo $sli[$i]['content']; ?>        
                            </p>
                          </div>
                          <div class="row-sm-6">
                            <div class="col-sm-3" style="padding-left: 19%;">
                              <img src="../images/images.png" alt="" style="border-radius: 50%; width:50px; height:50px;">
                            </div>
                            <div class="col-sm-9" style="text-align:start; padding-top:2%; ">
                              <p style="font-weight: bold;">
                                <?php echo $sli[$i]['username']; ?>
                              </p>
                            </div>
                          </div>  
                    </div>
                <?php }?>
              </div>

            <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
        </div>
    </div>
    <!-- Video -->
    <div class="row" style="margin-top: 5%;">
      <div class="col-md-6" style="padding-left: 7%;">
        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" width="600px" height="275px"></iframe>
      </div>
      <div class="col-md-6" style="padding-right:9%; padding-left:19%; text-align: start;">
        <h1>Cleaning strategy</h1>
        <p>Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diamnonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
      </div>
    </div>
    <!-- Video2 -->
    <div class="row" style="margin-top:7%; margin-bottom: 5%">
      <div class="col-md-6" style="padding-left:12%; padding-right:16%; text-align: start;">
        <h1>Learning spaces</h1>
        <p>Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diamnonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
      </div>
      <div class="col-md-6" style="padding-left: 5%;">
        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" width="600px" height="275px"></iframe>
      </div>
    </div>
  </div>
</body>
</html>
<script>


// ---TAB SWAP---
  // TOGGLE SECTIONS
// querySelector, jQuery style
var $ = function (selector) {
  return document.querySelectorAll(selector);
};


// Define tabs, write down them classes
var tabs = [
  '.tabbed-section__selector-tab-1',
  '.tabbed-section__selector-tab-2',
  '.tabbed-section__selector-tab-3'
];

// Create the toggle function
var toggleTab = function(element) {
  var parent = element.parentNode;
  
  // Do things on click
  $(element)[0].addEventListener('click', function(){
    // Remove the active class on all tabs.
    // climbing up the DOM tree with `parentNode` and target 
    // the children ( the tabs ) with childNodes
    this.parentNode.childNodes[1].classList.remove('active');
    this.parentNode.childNodes[3].classList.remove('active');
    this.parentNode.childNodes[5].classList.remove('active');

    // Then, give `this` (the clicked tab), the active class
    this.classList.add('active');
    
    // Check if the clicked tab contains the class of the 1 or 2
    if(this.classList.contains('tabbed-section__selector-tab-1')) {
      // and change the classes, show the first content panel
      $('.tabbed-section-1')[0].classList.remove('hidden');
      $('.tabbed-section-1')[0].classList.add('visible');
      
      // Hide the second
      $('.tabbed-section-2')[0].classList.remove('visible');
      $('.tabbed-section-2')[0].classList.add('hidden');
       $('.tabbed-section-3')[0].classList.remove('visible');
      $('.tabbed-section-3')[0].classList.add('hidden');
    }

    if(this.classList.contains('tabbed-section__selector-tab-2')) {
      // and change the classes, show the second content panel
      $('.tabbed-section-2')[0].classList.remove('hidden');
      $('.tabbed-section-2')[0].classList.add('visible');
      // Hide the first
      $('.tabbed-section-1')[0].classList.remove('visible');
      $('.tabbed-section-1')[0].classList.add('hidden');
      $('.tabbed-section-3')[0].classList.remove('visible');
      $('.tabbed-section-3')[0].classList.add('hidden');
    }
    
    if(this.classList.contains('tabbed-section__selector-tab-3')) {
      // and change the classes, show the second content panel
      $('.tabbed-section-3')[0].classList.remove('hidden');
      $('.tabbed-section-3')[0].classList.add('visible');
      // Hide the first
      $('.tabbed-section-1')[0].classList.remove('visible');
      $('.tabbed-section-1')[0].classList.add('hidden');
      $('.tabbed-section-2')[0].classList.remove('visible');
      $('.tabbed-section-2')[0].classList.add('hidden');
    }
  });
};

// Then finally, iterates through all tabs, to activate the 
// tabs system.
for (var i = tabs.length - 1; i >= 0; i--) {
  toggleTab(tabs[i])
};
// ---TAB SWAP---



</script>