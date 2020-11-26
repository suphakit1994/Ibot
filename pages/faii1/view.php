
   
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	 <!-- Compiled and minified JavaScript -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <style type="text/css">
		.card-img-top{
			width: 100%;
		}
        .custom-select{
            width: 30px;
        }
        

    </style>


<body>
    <!-- <img src="../images/images.png" alt=""> -->
       
    <div class="container-fluid" style="padding-right:100px ;padding-left:100px ;">
        
            <div class="row" style="padding-bottom: 10px;" >
                <div class="col-md-6" >
                <ul class="nav " style="padding-right: 40px;">
                    <li > <span> <h1 style=" margin-bottom: 10%; margin-top: 10%;"><b class="monospace">STUDENT ASSESSMENT</b></h1></span> </li>
                    <li > <h3 style="width: 100%;line-height: 24px;">Loerm ipsum dolor sit amet. con sonsectetuer adipiscing edit. sed diam ninummy nibh euismod tinciduct urt laoreet dolore mayna.</h3>  </li>
                    <li >  <img class="card-img-top" src="../images/img_5terre.jpg" alt="Card image cap" style="padding-top: 100px;">  </li>
    
                </ul>  
                
                </div>
                <div class="col-md-6" style="padding-left: inherit;">
                    <div class="col" style="padding-left: inherit;" >
                        <!-- colum1 -->
                        <div class="col-md-6" style="padding-left: 0px;padding-right: 0px;"> 
                            <ul class="nav" >
                                <h3 style=" margin-bottom: 20%; margin-top: 30%;">
                                    <li><span><b class="monospace" >Student ID : </b>iB002</li> <br></span> 
                                    <li><b class="monospace">Student Name : </b> Nisarat hawharn</li> 
                                </h3>
                            </ul>
                        </div>
                        <!-- colum2 -->
                        <div class="col-md-6" style="padding-left: 10px;padding-right: 0px;">
                            <ul class="nav ">
                                <h3 style=" margin-bottom: 10%; margin-top: 30%;">
                                    <li><span><b class="monospace">Course :  </b>Duplo course</li> <br></span> 
                                    <li><b class="monospace">Lesson : </b> Imagine Lesson 10 </li> 
                                </h3>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12" style="padding-left: inherit;">
                        <span> <h style="margin-top: 10%;font-size:25px"> <b class="monospace">Evaluation criteria</b></h></span>                                   
                         <hr>   
                           

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <span> <p> <b class="monospace">STEM 1 : Science and Technology</b></p></span>   
                        <ul class="nav " style="width:150%;">
                                    <li > <span><p class = "card-text">1. Science</p></span> </li>
                                    <li > <span><p class = "card-text">2. Technology</p> </span> </li>
                                    <li > <span><p class = "card-text">3. Engineering</p> </span> </li>
                                    <li > <span><p class = "card-text">4. Mathematics</p> </span> </li>
                                </ul>

                        </div>

                        <div class="col-md-6">
                            <!-- <br> -->
                            <?php for($i=1;$i<=4;$i++){ ?>
                        <div class="custom-select" style=" height: 40px;">
                        <br style="top:auto;">
                                        <select style="height: 30px;">
                                            <option value="0" style="font-size: 10px;">1</option>
                                            <option value="1">Audi</option>
                                            <option value="2">BMW</option>
                                            <option value="3">Citroen</option>
                                            <option value="4">Ford</option>
                                            <option value="5">Honda</option>
                                            <option value="6">Jaguar</option>
                                            <option value="7">Land Rover</option>
                                            <option value="8">Mercedes</option>
                                            <option value="9">Mini</option>
                                            <option value="10">Nissan</option>
                                            <option value="11">Toyota</option>
                                            <option value="12">Volvo</option>
                                        </select>
                                
                        </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="row">
                    
                        <div class="col-md-6">
                            <span> <p> <b class="monospace">STEM 2 : Life skills</b></p></span>   
                        <ul class="nav " style="width:150%;">
                                    <li > <span><p class = "card-text">1. Synthesis</p></span> </li>
                                    <li > <span><p class = "card-text">2. Teamwork</p> </span> </li>
                                    <li > <span><p class = "card-text">3. EQ</p> </span> </li>
                                    <li > <span><p class = "card-text">4. Meditation</p> </span> </li>
                                </ul>

                        </div>

                        <div class="col-md-6">
                            <!-- <br> -->
                            <?php for($i=1;$i<=4;$i++){ ?>
                        <div class="select" style=" height: 40px;">
                        <br style="top:auto;">
                                
                                        <select style="height: 30px;">
                                            <option value="0" style="font-size: 10px;">1</option>
                                            <option value="1">Audi</option>
                                            <option value="2">BMW</option>
                                            <option value="3">Citroen</option>
                                            <option value="4">Ford</option>
                                            <option value="5">Honda</option>
                                            <option value="6">Jaguar</option>
                                            <option value="7">Land Rover</option>
                                            <option value="8">Mercedes</option>
                                            <option value="9">Mini</option>
                                            <option value="10">Nissan</option>
                                            <option value="11">Toyota</option>
                                            <option value="12">Volvo</option>
                                        </select>
                                
                        </div>
                            <?php } ?>
                        </div>

                    </div>
                        <hr >
                        <div class="col-md-4"> <span> <p> <b class="monospace">Total Score</b></p></span>  </div>
                        <div class="col-md-4"> <span> <p class="monospace"> .............</p></span>  </div>
                        <div class="col-md-4"> <span> <p> <b class="monospace">Score</b></p></span>  </div>
                    
                   
                        <div class="text-center " style="margin-top: 10px ">
                        <a href=" # " class="Button" style="width:20% ;">Save</a>
                    </div>      
                </div> 
                   

            </div>

                
                

                <div class="row">

                      
                     

                </div>
                
        </div>


    </div>
    <br>
    <br>
    </div>

</body>