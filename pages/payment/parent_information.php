<style>
  .form-control{

    border-left-width: 0px !important;
    border-right-width: 0px !important;
    border-bottom-width: 0px !important; 
  }
  .progressbar li{
    float: left;
    width: 20%;
    position: relative;
    text-align: center;
  }
 /* .progressbar li:before{
    content:"1";
    width: 30px;
    height: 30px;
    } */
    .progressbar li:first-child:after{
      /* content: none; */
    }
    .progressbar{
      counter-reset: step;
    }
    .progressbar li:before{
      content:counter(step);
      counter-increment: step;
      width: 30px;
      height: 30px;
      border: 2px solid #bebebe;
      display: block;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      line-height: 27px;
      background: white;
      color: #bebebe;
      text-align: center;
      font-weight: bold;
    }
    .progressbar li:after{
      content: '';
      position: absolute;
      width:100%;
      height: 3px;
      background: #979797;
      top: 15px;
      left: -50%;
      z-index: -1;
    }
    .active {
      background-color: unset !important; 
    }
    ul li::marker {
      color: red;
      font-size: 0em;
    }
    .progressbar li.active:after {
      background: #0050ef;
      border-color: #0050ef;
      color: white ;
    }
    .progressbar li.active::before {
      border-color: #0050ef  !important;
      background: #0050ef  !important;
      color: white!important;
    }
    
  </style>

  <body>  
    <form  method="POST" action="index.php?app=payment&action=enroll">
      <input type="hidden" name="course_id" value="<?php echo $_POST['course_id']; ?>">
      <!--  หน้า student -->
      <input type="hidden" name="student_name_th" value="<?php echo $_POST['student_name_th'];  ?>">
      <input type="hidden" name="student_name_eng" value="<?php echo $_POST['student_name_eng'];  ?>">
      <input type="hidden" name="student_nickname_eng" value="<?php echo $_POST['student_nickname_eng'];  ?>">
      <input type="hidden" name="student_brithday" value="<?php echo $_POST['student_brithday'];  ?>">
      <input type="hidden" name="student_school" value="<?php echo $_POST['student_school'];  ?>">
      <input type="hidden" name="student_grade" value="<?php echo $_POST['student_grade'];  ?>">



      <input type="hidden" name="student_school" value="<?php echo $_POST['student_school'];  ?>">      <div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ;">
        <div class="col-md-7" style="padding-top: 5%;">
          <h2 style=" margin-top: 0px; margin-bottom: 20px;"><b>Your account is being verified</b></h2> 
          
          <div  class="form-card" >
            <ul class="progressbar">
              <li class="active">student information</li>
              <li class="active">Parent information</li>
              <li>Enroll </li>
              <li>Payment</li>
              <li>Success</li>
            </ul>
          </div>
          <div class="col-md-9" style="padding:0px">
            <div class="form-card" style=" padding-top: 10%;">   
              <p>ชื่อ-นามสกุล (Thai) <a style="color: red";> * </a></p> 
              <input name="parents_name_th"type="text" class="form-control" value="" pattern="^[ก-๏\s]+$" title="กรุณากรอกชื่อ นามสกุล ภาษาไทย" required>  
              <p >Parent's name (Eng) <a style="color: red";> * </a></p> 
              <input name="parents_name_eng"type="text" class="form-control" value="" pattern="^[a-zA-Z\s]+$"  title="กรุณากรอกชื่อ นามสกุล ภาษาอังกฤษ" required >  
              <p > Related to the applicant <a style="color: red";> * </a></p> 
              <select   name="parents_related" id="" class="form-control" style="height: 70%;">
                <p> <option value=""></option></p>
                <p> <option value="Mother">Mother</option></p>
                <p> <option value="Father">Father</option></p>
                <p> <option value="brother">brother</option></p>
                <p> <option value="sister">sister</option></p>
                <p> <option value="godfather">godfather</option></p>
                <p> <option value="godmother">godmother</option></p>                                            
              </select> 
              <p >Phone number <a style="color: red";> * </a></p> 
              <input name="parents_phonenumber" type="tel" class="form-control" pattern="[0-9]{10}" style="width: 224px;"  required >  
              <p >E-mail <a style="color: red";> * </a></p> 
              <input name="parents_email" type="email" class="form-control" style="width: 224px;" required>  
              <p >ID Line <a style="color: red";> * </a></p> 
              <input name="parents_line" type="text" class="form-control" style="width: 224px;" required>  
            </div>
            <!--  <a href="index.php?app=student_information" type="button" name="Back" class="Button" style="border-radius:28px; width: 120px;">Back</a> -->
            <button  type="submit"  name="next" class="Button" style="border-radius:28px; width: 120px;">Next</button>
          </div> 
        </div>
      </form>      
      <div href="..faii_ft.php"  class="col-md-5" style="padding-top: 5%;padding-bottom: 8%;">
        <div class="card" style="padding-left: 8%;padding-top: 8%;padding-bottom: 8%;">

          <h3 style="margin-bottom: 20px;"><b>STUDENT INFORMATION</b></h3>
          <div class="row">
            <div class="col-md-6"> 
              <p>Name</p>
              <p>Nickname</p>
            </div>
            <div class="col-md-6"> 
              <p> <?php echo $_POST['student_name_eng'];  ?></p>
              <p> <?php echo $_POST['student_nickname_eng'];  ?></p>
            </div>
          </div>

          <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>PARENT INFORMATION</b></h3>
          <div class="row">
            <div class="col-md-6"> 
              <p>Name</p>
              <p>Nickname</p>
              <p>Phone number</p>
            </div>
            <div class="col-md-6"> 
              <p></p> 
              <p></p>
              <p></p>
            </div>
          </div>

          <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>ORDER SUMMARY</b></h3>
          <div class="row">
            <div class="col-md-6"> 
              <p>Course</p> 
              <p>Course Expansion</p>
              <p>Total Course</p>
              <p>class schedule</p>
              <p>Make-up class</p>
              <p>Study time</p>
            </div>
            <div class="col-md-6"> 
              <p></p>
              <p></p>
              <p></p>
              <p></p>
              <p></p>
              <p></p>
              
            </div>
          </div>
        </div>    
      </div>
    </div>  

  </body>