<style type="text/css">
  .card-img-top{
   width: 100%;
}
.custom-select{
    width: 8%;
}       
</style>
<body>
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
                <form href="..faii_ft.php" method="post" action="index.php?app=faii&action=student">
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
                            <?php 
                            for($i=0;$i<4;$i++){ ?>
                                <div class="custom-select" name="option" style=" height: 40px;">
                                    <br style="top:auto;">
                                    <select onchange ="displayDate()" name= <?php echo $stem1[$i]?> style="height: 70%; width:200%;">
                                        <option value="1" style="font-size: 10px;">1</option>
                                        <option value="2"><?php echo $stem1[0];   ?></option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
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
                            <?php for($i=0;$i<4;$i++){  ?>
                                <div class="custom-select" style=" height: 40px;">
                                    <br style="top:auto;">
                                    <select   name=<?php echo $stem2[$i] ?> id="name[]" onchange="myFunction()" style="height: 70%; width:200%;">
                                        <option value="1" style="font-size: 10px;">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-4"> <span> <p> <b class="monospace">Total Score</b></p></span>  </div>
                    <div class="col-md-4"> <span> <p class="monospace" id="demo"></p>  </span> </div>
                    <div class="col-md-4"> <span> <p> <b class="monospace">Score</b></p></span>  </div>
                    <button type="submit" class="Button">Save</button>
                </form>
            </div> 
        </div>
    </div>
</body> 
<script>
    function myFunction() {
        var x = document.getElementById("name").value;
        document.getElementById("demo").innerHTML = "You selected: " + x;
    }
</script>