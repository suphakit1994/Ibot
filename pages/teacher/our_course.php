<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style type="text/css">

    .card{
      box-shadow: 0 4px 10px 0 rgb(0 0 0), 0 4px 20px 0 rgba(0,0,0,0.19);
      width: 100%;
      height: 200%;
      padding-bottom: 10px;
      border-radius:10px; 
    }
    .card-img-top{
      width:100%;
      height: 200px;
      border-radius: 10px 10px 0px 0px;
    }
    .btn:hover{
      color: #ffffff;
      background: linear-gradient(90deg, #dedede 0%, #dedede 100%) !important;
    }         
    .btn{
      border-radius:28px;
      border:1px solid #18ab29;
      display:inline-block;
      cursor:pointer;
      color:#ffffff !important;
      font-size:14;
      text-decoration:none;
      text-align: center; 
      background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%) !important;    
      border: 1px solid #ffffff;
    }    
  </style>
  <body>

    <div class="container-fluid" style="padding-right:100px ;padding-left:100px ;">
      <h1 style="padding-bottom: 20px;padding-top: 50px;">
        <b>OUR COURSE</b>
      </h1 > 
      <div class="row" style="padding-bottom: 0px;" >
       <?php 
      for($i=0;$i<$arrlength; $i++){  //loop card 
        ?>
        <form method="post" action="index.php?app=teacher&action=mycourse<?php echo $data[$i]['course_id'];?>" >
          <div>
            <div name="card" class="col-md-3" style="padding-bottom: 15px;" >
              <div class="card" style="height: 510px;border-radius:10px;">
                <div class="card-image" >
                  <img class="card-img-top" src="../course_img/<?php echo $data[$i]['course_img'];  ?>" alt="Card image cap" >
                  <span class="card-title " style="background: #e6008a;position: relative;bottom: 20px;padding-top: 5px;padding-bottom: 5px;padding-right: 10px;padding-left: 10px;">
                    <B><?php echo $data[$i]['course_category']; ?></B>
                  </span>
                </div>
                <div class="card-body" >
                  <div class="row" style="margin-left:0px ;height: 82px;" >
                    <div class="col-md-5" style="padding-right: 0px;">
                      <ul class="nav" style="width:150%;">
                        <li > <span><B><p class = "card-text">Course Expension</p></B></span> </li>
                      </ul>
                    </div>
                    <div class="col-md-5" style="padding-right: 0px;">
                      <ul class="nav" style="padding-left:10px">
                        <li > <span><p ><?php echo $data[$i]['course_expension']; ?> <u style="color: blue"><?php echo $data[$i]['course_code']; ?></u></span> </li>
                        </ul>
                      </div>
                    </div>   
                    <div class="row" style="margin-left:0px ;" >
                      <div class="col-md-5" style="padding-right: 0px;">
                        <ul class="nav " style="width:150%;">
                          <li > <span><B><p class = "card-text">Age for class</p></B> </span> </li>
                        </ul>
                      </div>
                      <div class="col-md-5" style="padding-right: 0px;">
                        <ul class="nav" style="padding-left:10px">
                          <li > <span><p ><?php echo $data[$i]['course_Age'];?></p></span> </li>
                        </ul>
                      </div>
                    </div>   

                    <div class="row" style="margin-left:0px ;" >
                      <div class="col-md-5" style="padding-right: 0px;">
                        <ul class="nav " style="width:150%;">
                          <li > <span><B><p class = "card-text">Lesson</p></B> </span> </li>
                        </ul>
                      </div>
                      <div class="col-md-5" style="padding-right: 0px;">
                        <ul class="nav" style="padding-left:10px">
                          <li > <span><p ><?php echo $data[$i]['course_lesson']; ?></p></span> </li>
                        </ul>
                      </div>
                    </div>   
                    <div class="row" style="margin-left:0px ;" >
                      <div class="col-md-5" style="padding-right: 0px;">
                        <ul class="nav " style="width:150%;">
                          <li > <span><B><p class = "card-text">Price</p></B> </span> </li>
                        </ul>
                      </div>
                      <div class="col-md-5" style="padding-right: 0px;">
                        <ul class="nav" style="padding-left:10px">
                          <li > <span><p><?php echo $data[$i]['course_price']; ?></p></span> </li>
                        </ul>
                      </div>
                    </div>   
                    <div class="text-center " style="margin-top: 10px ">
                      <button type="submit"  name= "<?php echo $i ?>" class=" btn btn:hover" style="width:80% ;border-radius:28px;">Lesson</button>
                    </div>
                  </div>
                  <input type="hidden" name="course_ID" value="<?php echo $data[$i]['ID'];  ?>">
                </div>
              </div>
            </div>  
          </form>
          <?php  
        }  ?>
      </div>
      <!-- <div class="text-center "> 
        <a href="index.php?app=student"   class="Button" style="border-radius:28px;"> Student Assessment</a>
      </div>
      <div class="text-center "> 
        <a href="index.php?app=student_information"   class="Button" style="border-radius:28px;"> Student information</a>
      </div> -->
    </div>
    <br>
    <br>

  </body>
</head>
</html>
