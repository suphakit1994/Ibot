<style>

  .rcorners {
    border-radius: 10px;
    border: 1px solid #D3D3D3;
    padding: 20px; 
    width: 100%;
    height: 80px;  
    margin: 10px;  
  }
  .card-body{
    /* box-shadow: 0 4px 10px 0 rgb(0 0 0), 0 4px 20px 0 rgba(0,0,0,0.19);  */
    width: 100%;
    height: 100%;
    padding-bottom: 10px;
    border-radius:10px;
    border:1px solid #18ab29;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-size:14;
    text-decoration:none;
    padding-top: 10px; 
    padding-left: 30px; 
    margin: 10px;
    background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);    
    border:0px solid #ffffff;
  }

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
    <form  method="post" action="index.php?app=student&action=student&action=payment" >

      <input type="hidden" name="course_id" value="<?php echo  $_POST['course_id']; ?>">
      <?php echo $id; ?>
      <?php echo  $_POST['course_id']; ?>
      <div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ;">
        <div class="row">
          <div class="col-md-7" style=" padding-top: 5%;"> 
            <h2 style=" margin-top: 0px; margin-bottom: 20px;"><b>Your account is being verified</b></h2> 
            <div  class="form-card" >
              <ul class="progressbar">
                <li class="active">student information</li>
                <li class="active">Parent information</li>
                <li class="active">Enroll </li>
                <li>Payment</li>
                <li>Success</li>
              </ul>
            </div>

            <div class="form-card" style=" padding-top: 10%;">    
              <div class="card-body"  > 
                <div class="row" style="margin-bottom: 10px;padding-left: 30px;"><b><?php echo $pri['course_expension']." " ?><u ><?php echo $pri['course_code']; ?></u></b> </div>
                <div class="col-md-6">
                  <span>
                    <p> class schedule</p> 
                    <p> Make-up week</p> 
                    <p> Study time</p> 
                    <p>Prices</p>                      
                  </span> 
                </div> 
                <div class="col-md-6">
                  <span> 
                    <p> xxxxxxxxx</p> 
                    <p> xxxxxxxxx</p> 
                    <p> 1:30 hrs / 8 times / once a week.</p> 
                    <p>฿ <?php echo $pri['course_price']; ?></p>                       
                  </span> 
                </div> 
              </div>
              <div>
                <input type="radio" name="my-input" id="no" required>
                <label for="yes">I agree the <label style="color:blue";>Terms and Conditions</label></label>   
              </div>
              <?php for($i=0;$i<$arrlength;$i++){ ?>
                <div class="row" >
                  <div class="col-md-4" style="padding-top: 10">
                    <!-- <b>Sunday</b> -->
                    <p><?php echo $data[$i]['calender_date'];  ?></p>
                  </div>
                  <div class="col-md-4" style="padding-top: 10px;">
                    <b><p><?php echo $data[$i]['calender_starttime'];  ?> - <?php echo $data[$i]['calender_endtime'];  ?> </p></b>
                  </div>
                  <div class="col-md-4"style="padding-right: 0px;px;text-align: center;">
                    <input  href="#" type="radio" name="calender_id"  value="<?php echo $data[$i]['calender_id'];  ?>" >
                  </div> 
                </div>
              <?php } ?>
            </div>

            <div>

              <button  type="submit" name="next" class="Button" style="border-radius:28px; width: 120px;">Next</button>
            </div>    

          </div>

          <div class="col-md-5" style=" padding-top: 5%;">
            <div class="card" style="padding-left: 13%;padding-top: 8%;padding-bottom: 8%;">
              <h3 style="margin-bottom: 20px;"><b>STUDENT INFORMATION</b></h3>
              <div class="row">
                <div class="col-md-6"> 
                  <p>Name</p>
                  <p>Nickname</p>
                </div>
                <div class="col-md-6"> 
                  <p> <?php echo  $student['student_name_eng']; ?></p>
                  <p><?php echo $student['student_nickname_eng'];  ?></p>
                </div>
              </div>

              <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>PARENT INFORMATION</b></h3>
              <div class="row">
                <div class="col-md-6"> 
                  <p>Name</p>
                  <p>Relation</p>
                  <p>Phone number</p>
                </div>
                <div class="col-md-6"> 
                  <p><?php echo $student['parents_name_eng'];  ?></p> 
                  <p><?php echo $student['parents_related'];  ?></p>
                  <p><?php echo $student['parents_phonnumber'];  ?></p>
                </div>
              </div>

              <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>ORDER SUMMARY</b></h3>
              <div class="row">
                <div class="col-md-6"> 
                  <p>Course</p> 
                  <p>Course Expansion</p>
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

                </div>
              </div>
            </div>

          </div>
        </div>  
      </div>  
    </form>
  </body>