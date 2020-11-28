
   
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
	 <!-- Compiled and minified JavaScript -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    

    <style type="text/css">
        p {
            padding:3px;
            font-size: 1px;
			width: 100%;

        }
        
        
        .card{
            box-shadow: 0 4px 10px 0 rgb(0 0 0), 0 4px 20px 0 rgba(0,0,0,0.19);
            width: 100%;
            padding-bottom: 10px;
            border-radius:10px;
            
        }
		.card-img-top{
            width: 100%;
            border-radius: 10px 10px 0px 0px;
		}
        
        /* ---button--- */
        .btn {
           color: #ffffff;
           background-color: #dedede ;
	    }         
        .btn:hover {
            border-radius:28px;
            border:1px solid #18ab29;
            display:inline-block;
            cursor:pointer;
            color:#ffffff !important;
            font-size:14;
            text-decoration:none;
            text-align: center; 
            background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);    
            border: 1px solid #ffffff;

        }    
            
    </style>


<body>
    
    <div class="container-fluid" style="padding-right:100px ;padding-left:100px ;">
 <h1>
            <b class="monospace">OUR COURSE</b>
        </h1>

   
    <div class="row" style="padding-bottom: 100px;" >
   

     <?php 
            $data= getselect($conn);         //เรียกใช้ faction
            $arrlength = count($data);      //นับข้อมูล
            for($i=0;$i<$arrlength; $i++){  //loop card 
     ?>
        
        <a href="..faii.php" >
              <div name="card" class="col-md-3" style="padding-bottom: 100px;" >
              <div class="card" >
                  <div class="card-image" >
                      <img class="card-img-top" src="../images/img_5terre.jpg" alt="Card image cap" >
                      <span class="card-title " style="background: #e6008a;position: relative;bottom: 20px;padding-top: 5px;padding-bottom: 5px;padding-right: 10px;padding-left: 10px;"><B><?php echo $data[$i]['category']; ?></B></span>
                  </div>

                  <div class="card-body" >
                      <div class="row" style="margin-left:0px ;" >
                           <div class="col-md-5">
                               <ul class="nav " style="width:150%;">
                                  <li > <span><B><p class = "card-text">Course Expension</p></B></span> </li>
                                  <li > <span><B><p class = "card-text">Age for class</p></B> </span> </li>
                                  <li > <span><B><p class = "card-text">Total course</p></B> </span> </li>
                                  <li > <span><B><p class = "card-text">Lesson</p></B> </span> </li>
                                  <li > <span><B><p class = "card-text">Price</p></B> </span> </li>
                              </ul>
                           </div>
                           <div class="col-md-5" >
                              <ul class="nav" style="padding-left:10px">
                                  
                                  <li > <span><p ><?php echo $data[$i]['Course_Expension']; ?> </p></span> </li>
                                  <li > <span><p ><?php echo $data[$i]['Age_For_class'];?></p></span> </li>
                                  <li > <span><p ><?php echo $data[$i]['Total_course']; ?></p></span> </li>
                                  <li > <span><p ><?php echo $data[$i]['Lesson']; ?></p></span> </li>
                                  <li > <span><p ><?php echo $data[$i]['Price']; ?></p></span> </li>
                              </ul>
                          </div>
                      </div>   
                      <div class="text-center " style="margin-top: 10px ">
                      
                          <a href=" # " class=" btn btn:hover" style="width:80% ;border-radius:28px;">Enroll</a>
                      </div>

                  </div>
              </div>
          </div>
        </a>  

            <?php  }  ?>
         
        </div>
            <div class="text-center "> 
                <a href="index.php?app=faii&action=student"   class="Button" style="border-radius:28px;"> Student Assessment</a>

         </div>
    </div>


    </div>
    <br>
    <br>
    </div>

</body>