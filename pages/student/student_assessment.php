

<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


<style type="text/css">
  .card-img-top{
     width: 100%;
 }
 .custom-select{
    width: 8%;
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
                        <ul class="nav">
                            <h3 style=" margin-bottom: 20%; margin-top: 20%;">
                                <li><span><b class="monospace" >Student ID : </b>iB002</li> <br></span> 
                                <li><b class="monospace">Student Name : </b> Nisarat hawharn</li> 
                            </h3>
                        </ul>
                    </div>
                    <!-- colum2 -->
                    <div class="col-md-6" style="padding-left: 10px;padding-right: 0px;">
                        <ul class="nav ">
                            <h3 style=" margin-bottom: 10%; margin-top: 20%;">
                                <li><span><b class="monospace">Course :  </b>Duplo course</li> <br></span> 
                                <li><b class="monospace">Lesson : </b> Imagine Lesson 10 </li> 
                            </h3>
                        </ul>
                    </div>
                </div>

                <div class="col-md-12" style="padding-left: inherit;">
                    <span> <h style="margin-top: 5%;font-size:25px"> <b class="monospace">Evaluation criteria</b></h></span>                                   
                    <hr >   
                </div>
                <form href="..faii_ft.php" method="post" action="index.php?app=student&action=student" >
                    <div class="row">
                        <div class="col-md-6">
                            <span> <p> <b class="monospace">STEM 1 : Science and Technology</b></p></span>   
                            <ul class="nav " style="width:100%;">
                                <li > <span><p class = "card-text">1. Science</p></span> </li>
                                <li > <span><p class = "card-text">2. Technology</p> </span> </li>
                                <li > <span><p class = "card-text">3. Engineering</p> </span> </li>
                                <li > <span><p class = "card-text">4. Mathematics</p> </span> </li>
                            </ul>
                        </div>
                        <div class="col-md-6" style="height: 170px;padding-top: 8px;">   
                            
                            <?php  for($i=0;$i<4;$i++){ ?>
                                <div class="custom-select" name="option" style=" height: 40px; margin-top: -1%;"">
                                <br style="top:auto;">
                                <select name=<?php echo $stem1[$i] ?> id= <?php echo $stem1[$i]?>  onchange="myFunction()" style="height: 70%; width:200%;">
                                    <li > <p> <option value="1">1</option></p> </li>
                                    <li > <p> <option value="2">2</option></p></li>
                                    <li >  <p> <option value="3">3</option></p></li>
                                    <li >  <p> <option value="4">4</option></p></li>
                                    <li > <p> <option value="5">5</option></p></li>     
                                </select>
                            </div>
                        <?php } ?> 
                        
                    </div>
                </div>
                <div class="row">                   
                    <div class="col-md-6">
                        <span> <p> <b class="monospace">STEM 2 : Life skills</b></p></span>   
                        <ul class="nav " style="width:100%;">
                            <li > <span><p class = "card-text">1. Synthesis</p></span> </li>
                            <li > <span><p class = "card-text">2. Teamwork</p> </span> </li>
                            <li > <span><p class = "card-text">3. EQ</p> </span> </li>
                            <li > <span><p class = "card-text">4. Meditation</p> </span> </li>
                        </ul>
                    </div>
                    <div class="col-md-6" style=" height: 170px; padding-top: 8px;">                    
                        <?php for($i=0;$i<4;$i++){?>
                            <div class="custom-select" style=" height: 38px; margin-top: -1%;">
                                <br style="top:auto;">
                                <select   name=<?php echo $stem2[$i] ?> id=<?php echo $stem2[$i] ?> onchange="myFunction()" style="height: 70%; width:200%;">
                                    <p> <option value="1">1</option></p>
                                    <p> <option value="2">2</option></p>
                                    <p> <option value="3">3</option></p>
                                    <p> <option value="4">4</option></p>
                                    <p> <option value="5">5</option></p>                                           
                                </select>       
                            </div>
                        <?php } ?>
                    </div>   
                </div>                  
                <hr >
                <div class="col-md-4"> <span> <p> <b class="monospace">Total Score</b></p></span>  </div>
                <!-- <div class="col-md-4"> <span> <p  id="total" name ="Total"></p>  </span> </div> -->
                <div class="col-md-4"> 
                    <span> 
                        <input  id="total" name ="Total" value="0" style="width: 30%;">/5</input>  
                    </span> 
                </div>
                <div class="col-md-4"> <span> <p> <b class="monospace">Score</b></p></span>  </div>                       
                <button type="submit" class="Button" style= "width: 20%" >Save</button>                    
            </form>
        </div> 
    </div>             
</div>
</body> 


<script>
    function myFunction() {
        var x=0;
        x = x+ parseInt(document.getElementById("Science").value);
        x = x+ parseInt(document.getElementById("Technology").value);
        x = x+ parseInt(document.getElementById("Engineering").value);
        x = x+ parseInt(document.getElementById("Mathematics").value);
        x = x+ parseInt(document.getElementById("Synthesis").value);
        x = x+ parseInt(document.getElementById("Teamwork").value);
        x = x+ parseInt(document.getElementById("EQ").value);
        x = x+ parseInt(document.getElementById("Meditation").value);

        document.getElementById("total").value = x/8 ;
    }
</script>

